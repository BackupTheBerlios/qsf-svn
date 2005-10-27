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

				include 'upgradefromdatabase.php';
				break;
			}

			$queries = array();
			$pre = $this->sets['prefix'];
			$template_list = false;

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
						$template_list = true;
					}
				} else {
					if (is_bool($template_list)) {
						if (!$template_list) {
							$template_list = $need_templates;
						}
					} else {
						$template_list = array_unique(array_merge($template_list, $need_templates));
					}
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

			if ($need_templates) {
				$queries = array();
				include './data_templates.php';

				if (is_bool($need_templates)) {
					$this->db->query("DELETE FROM {$pre}templates WHERE template_skin='default'");
					execute_queries($queries, $this->db);
				} else {
					foreach ($queries as $template => $insert)
					{
						if (in_array($template, $need_templates)) {
							$this->db->query("DELETE FROM {$pre}templates WHERE template_name='$template' AND template_skin='default'");
							$this->db->query($insert);
						}
					}
				}
			}

			$this->write_sets();

			// New fields in forum tables need to be fixed in case the old install was a conversion
			$this->updateForumTrees();
			$this->RecountForums();

			echo 'Upgrade successful.<br />';
			echo "<a href='../index.php'>To the board</a>";
			break;
		}
	}
}
?>
