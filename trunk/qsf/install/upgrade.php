<?php
/**
 * Quicksilver Forums
 * Copyright (c) 2005 The Quicksilver Forums Development Team
 *  http://www.quicksilverforums.com/
 * 
 * based off MercuryBoard
 * Copyright (c) 2001-2005 The Mercury Development Team
 *  http://www.mercuryboard.com/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 **/

/**
 * Board Upgrade
 *
 * @author Jason Warner <jason@mercuryboard.com>
 */
class upgrade extends qsfglobal
{
	function upgrade_board( $step )
	{
		switch($step) {
		default:
			include 'templates/upgradefromversion.php';
			break;

		// Step 1.5 simply updates the database info
		case 15:
			$this->sets['db_host']   = $this->post['db_host'];
			$this->sets['db_name']   = $this->post['db_name'];
			$this->sets['db_user']   = $this->post['db_user'];
			$this->sets['db_pass']   = $this->post['db_pass'];
			$this->sets['db_port']   = $this->post['db_port'];
			$this->sets['db_socket'] = $this->post['db_socket'];
			$this->sets['prefix']    = trim(preg_replace('/[^a-zA-Z0-9_]/', '', $this->post['prefix']));

			if (!$this->write_db_sets('../settings.php')) {
				echo 'settings.php could not be updated.<br /><br />CHMOD settings.php to 0666.';
				break;
			}
			// Fall through to the next case

		case 2:
			@set_time_limit(300);

			// Check to see if all upgrade files are intact
			$check = $this->get['from'];
			while ($check <= LATEST)
			{
				if (!is_readable("./upgrade_$check.php")) {
					echo "A file required for upgrading was not found: upgrade_$check.php";
					break 2;
				}
				$check++;
			}

			$db = new database($this->sets['db_host'], $this->sets['db_user'], $this->sets['db_pass'], $this->sets['db_name']);

			if (!$db->connection) {
				if ($this->get['step'] == 15) {
					$sets_error = '<br />Could not connect with the specified information.';
				} else {
					$sets_error = null;
				}

				include 'templates/upgradefromdatabase.php';
				break;
			}

			$queries = array();
			$pre = $this->sets['prefix'];
			$full_template_list = false;
			$template_list = array();

			$this->sets['installed'] = 1;

			$this->pre  = $this->sets['prefix'];
			$this->db   = $db;

			// We can't get settings from the database unless we're already running >= 1.1.0
			if ($this->get['from'] >= 10) {
				$this->sets = $this->get_settings($this->sets);
			}

			$this->perms = new permissions;
			$this->perms->db  = &$this->db;
			$this->perms->pre = &$this->pre;

			while ($this->get['from'] <= LATEST)
			{
				include "./upgrade_{$this->get['from']}.php";
				$this->get['from']++;

				// This gets really complicated so be careful
				if (is_bool($need_templates)) {
					if ($need_templates) {
						$full_template_list = true;
					}
				} else {
					$template_list = array_unique(array_merge($template_list, $need_templates));
				}
			}

			if (!$this->write_db_sets('../settings.php')) {
				echo 'settings.php could not be updated.<br /><br />CHMOD settings.php to 0666.';
				break;
			}

			/**
			 * The order this next block executes is important.
			 * 1. Verify we can upgrade templates
			 * 2. Upgrade board
			 * 3. Upgrade templates
			 *
			 * Because the query used to upgrade templates is for
			 * the most recent version of the board, we must run
			 * it after the board is fully upgraded.
			 **/

			if ($need_templates && !is_readable('./data_templates.php')) {
				echo 'No templates could be loaded from data_templates.php';
				break;
			}

			execute_queries($queries, $this->db);

			$queries = array();
			include './data_templates.php';
			$skinsupdated = "The following templates were upgraded:<br /><br /><span class='tiny'>";
			$didsomething = false;
			$sql = "SELECT * FROM {$this->pre}skins";
			$result = $this->db->query($sql);

			while ($row = $this->db->nqfetch($result))
			{
				$skin = $row['skin_dir'];

				// QSF or MB default skin in default location
				if (($row['skin_name'] == 'QSF Comet' || $row['skin_name'] == 'Candy Corn') && $skin == 'default') {
					if ($full_template_list || $need_templates) {
						if ($full_template_list) {
							$this->db->query("DELETE FROM {$pre}templates WHERE template_skin='default'");
							execute_queries($queries, $this->db);
							$skinsupdated .= $row['skin_name'] . ": Full Template Replacement<br />";
							$didsomething = true;
						} else if ($template_list) {
							foreach ($queries as $template => $insert)
							{
								if (in_array($template, $template_list)) {
									$sql = "DELETE FROM {$pre}templates WHERE template_name='$template' AND template_skin='default'";
									$miss = $this->db->query($sql);
									$skinsupdated .= $row['skin_name'] . ": " . $template ."<br />";
									$this->db->query($insert);
									$didsomething = true;
								}
							}
						}
					}
					if ($row['skin_name'] == 'Candy Corn') {
						$sql = 'UPDATE ' . $pre . 'skins SET skin_name="QSF Comet" WHERE skin_dir="' . $skin . '"';
						$this->db->query($sql);
					}
				}
				// Other skins
				else {
			                foreach ($queries as $template => $insert)
					{
						/* This query needed to be fudged up to work right */
						$insert = str_replace( "'default'", "'{$skin}'", $insert );
       	        			        $sql = "SELECT template_name FROM {$this->pre}templates WHERE template_skin='{$skin}' AND template_name='{$template}'";
                        			$miss = $this->db->query($sql);

	                        		if ($this->db->num_rows($miss) < 1) {
							$skinsupdated .= $row['skin_name'] . ": Added: " . $template ."<br />";
	                	                	$this->db->query($insert);
							$didsomething = true;
						}
					}
				}

		                /* Iterate over all our templates. This is excessive, but only needs to be done once anyway. */
		                $sql = "SELECT template_html, template_name FROM {$this->pre}templates WHERE template_skin='{$skin}'";
		                $query = $this->db->query($sql);

		                while ($row2 = $this->db->nqfetch($query))
        		        {
					$row2['template_html'] = str_replace('{$messageclass}', '<MODLET messagelink(class)>', $row2['template_html']);
					$row2['template_html'] = str_replace('{$MessageLink}', '<MODLET messagelink(text)>', $row2['template_html']);
					$row2['template_html'] = str_replace('$mercury', '$qsf', $row2['template_html']);
					$row2['template_html'] = str_replace('$qsfboard', '$quicksilverforums', $row2['template_html']);
					$row2['template_html'] = str_replace('$qsf->lang->main_powered', '$qsf->lang->powered', $row2['template_html']);
					$row2['template_html'] = str_replace('$qsf->lang->main_seconds', '$qsf->lang->seconds', $row2['template_html']);
					$row2['template_html'] = str_replace('$this->lang->pm_inbox', '$foldername', $row2['template_html']);
					$row2['template_html'] = str_replace('$this->lang->board->topics_new', '$this->lang->main_topics_new', $row2['template_html']);
					$row2['template_html'] = str_replace('$this->lang->forum->topics_new', '$this->lang->main_topics_new', $row2['template_html']);
					$row2['template_html'] = str_replace('$this->lang->recent->topics_new', '$this->lang->main_topics_new', $row2['template_html']);
					$row2['template_html'] = str_replace('post_mbcode_', 'mbcode_', $row2['template_html']);
					$row2['template_html'] = addslashes($row2['template_html']);
					$sql = "UPDATE {$this->pre}templates SET template_html='{$row2['template_html']}' WHERE template_skin='{$skin}' AND template_name='{$row2['template_name']}'";
					$this->db->query($sql);
		                }
			}

			$this->write_sets();

			// New fields in forum tables need to be fixed in case the old install was a conversion
			$this->updateForumTrees();
			$this->RecountForums();

			$message ='';
			if ($didsomething) {
				$message = $skinsupdated . "</span>";
			}
			echo $message . "<br />Upgrade successful.<br />";
			echo "<a href='../index.php'>To the board</a>";
			break;
		}
	}
}
?>
