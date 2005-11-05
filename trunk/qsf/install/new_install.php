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
 * New Board Installation
 *
 * @author Jason Warner <jason@mercuryboard.com>
 */
class new_install extends qsfglobal
{
	function install_board( $step )
	{
		switch($step) {
		default:
			include 'templates/newdatabase.php';
			break;

		case 2:
			$db = new database($this->post['db_host'], $this->post['db_user'], $this->post['db_pass'], $this->post['db_name'], $this->post['db_port'], $this->post['db_socket']);

			if (!$db->connection) {
				echo "Couldn't connect to a database using the specified information.";
				break;
			}

			$this->sets['db_host']   = $this->post['db_host'];
			$this->sets['db_user']   = $this->post['db_user'];
			$this->sets['db_pass']   = $this->post['db_pass'];
			$this->sets['db_name']   = $this->post['db_name'];
			$this->sets['db_port']   = $this->post['db_port'];
			$this->sets['db_socket'] = $this->post['db_socket'];
			$this->sets['prefix']    = trim(preg_replace('/[^a-zA-Z0-9_]/', '', $this->post['prefix']));

			if (!$this->write_db_sets('../settings.php')) {
				echo 'The database connection was ok, but settings.php could not be updated.<br /><br />CHMOD settings.php to 0666.';
				break;
			}

			if (!is_readable('./data_tables.php')) {
				echo 'Database connected, settings written, but no tables could be loaded from file: data_tables.php';
				break;
			}

			if (!is_readable('./data_templates.php')) {
				echo 'Database connected, settings written, but no templates could be loaded from file: data_templates.php';
				break;
			}

			$queries = array();
			$pre = $this->sets['prefix'];

			include './data_tables.php';
			include './data_templates.php';

			execute_queries($queries, $db);

			echo "The operations were successful.<br /><br />
			<a href='$this->self?mode=new_install&amp;step=3'>Continue to step 3</a>";
			break;

		case 3:
			$url = preg_replace('/install\/?$/i', '', $this->server_url() . dirname($_SERVER['PHP_SELF']));

			include 'templates/newboardsettings.php';
			break;

		case 4:
			$this->pre  = $this->sets['prefix'];
			$this->db   = new database($this->sets['db_host'], $this->sets['db_user'], $this->sets['db_pass'], $this->sets['db_name'], $this->sets['db_port'], $this->sets['db_socket']);

			$this->sets = $this->get_settings($this->sets);
			$this->sets['loc_of_board'] = stripslashes($this->post['board_url']);
			$this->sets['forum_name'] = stripslashes($this->post['board_name']);

			$this->write_sets();

			echo "The operations were successful.<br /><br />
			<a href='$this->self?mode=new_install&amp;step=5'>Continue to step 5</a>";
			break;

		case 5:
			include 'templates/newadmin.php';
			break;

		case 6:
			if ((trim($this->post['admin_name']) == '')
			|| (trim($this->post['admin_pass']) == '')
			|| (trim($this->post['admin_email']) == '')) {
				echo 'Go back and check to see that you filled in all required information.';
				break;
			}

			if ($this->post['admin_pass'] != $this->post['admin_pass2']) {
				echo 'Your passwords do not match. Please go back and correct this error.';
				break;
			}

			$this->post['admin_pass'] = md5($this->post['admin_pass']);

			$this->pre  = $this->sets['prefix'];
			$this->db   = new database($this->sets['db_host'], $this->sets['db_user'], $this->sets['db_pass'], $this->sets['db_name'], $this->sets['db_port'], $this->sets['db_socket']);

			if (!get_magic_quotes_gpc()) {
				$this->set_magic_quotes_gpc($this->get);
				$this->set_magic_quotes_gpc($this->post);
				$this->set_magic_quotes_gpc($this->cookie);
			}

			$this->post['admin_name'] = str_replace(
				array('&amp;#', '\''),
				array('&#', '&#39;'),
				htmlspecialchars(stripslashes($this->post['admin_name']))
			);

			$this->sets = $this->get_settings($this->sets);

			$this->db->query("INSERT INTO {$this->pre}users (user_name, user_password, user_group, user_title, user_title_custom, user_joined, user_email, user_timezone) VALUES ('{$this->post['admin_name']}', '{$this->post['admin_pass']}', " . USER_ADMIN .  ", 'Administrator', 1, {$this->time}, '{$this->post['admin_email']}', {$this->sets['servertime']})");
			$admin_uid = $this->db->insert_id();

			$this->sets['last_member'] = $this->post['admin_name'];
			$this->sets['last_member_id'] = $admin_uid;
			$this->sets['admin_incoming'] = $this->post['admin_email'];
			$this->sets['admin_outgoing'] = $this->post['admin_email'];
			$this->sets['members']++;
			$this->sets['installed'] = 1;

			$this->write_db_sets('../settings.php');
			$this->write_sets();

			setcookie($this->sets['cookie_prefix'] . 'user', $admin_uid, $this->time + $this->sets['logintime'], $this->sets['cookie_path']);
			setcookie($this->sets['cookie_prefix'] . 'pass', $this->post['admin_pass'], $this->time + $this->sets['logintime'], $this->sets['cookie_path']);

			echo "An administrator account was registered.<br />
			REMEMBER TO DELETE THE INSTALL DIRECTORY!<br /><br />
			<a href='../index.php'>To the board</a>";
			break;
		}
	}

	function server_url()
	{ 
	   $proto = "http" .
		   ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "s" : "") . "://";
	   $server = isset($_SERVER['HTTP_HOST']) ?
		   $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
	   return $proto . $server;
	}
}
?>

