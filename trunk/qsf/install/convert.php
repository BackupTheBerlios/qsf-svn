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
 * Convert From Another Board
 *
 * @author Roger Libiez (Samson)
 * @Since 1.1.5
 */
class convert extends qsfglobal
{
	function write_olddb_sets($oldset)
	{
		$settings = "<?php\n\$oldset = array();\n";

			$db_settings = array(
			'old_db_host'   => $oldset['old_db_host'],
			'old_db_name'   => $oldset['old_db_name'],
			'old_db_pass'   => $oldset['old_db_pass'],
			'old_db_port'   => $oldset['old_db_port'],
			'old_db_socket' => $oldset['old_db_socket'],
			'old_db_user'   => $oldset['old_db_user'],
			'old_dbtype'    => $oldset['old_dbtype'],
			'old_prefix'    => $oldset['old_prefix'],
			'post_inc'      => $oldset['post_inc'],
			'converted'     => $oldset['converted']
		);

		foreach ($db_settings as $oldset => $val)
		{
			$settings .= "\$oldset['$oldset'] = '" . str_replace(array('\\', '\''), array('\\\\', '\\\''), $val) . "';\n";
		}

		$settings .= '?' . '>';

		@chmod('./convert_db.php', 0666);
		$fp = @fopen('./convert_db.php', 'w');

		if (!$fp) {
			return false;
		}

		if (!@fwrite($fp, $settings)) {
			return false;
		}

		fclose($fp);

		return true;
	}

	function convert_board( $step )
	{
		require './convert_db.php';
		switch($step) {
		default:
			include 'templates/convertfromdatabase.php';
			break;

		case 2:
			$this->db = new database($this->post['old_db_host'], $this->post['old_db_user'], $this->post['old_db_pass'], $this->post['old_db_name'], $this->post['old_db_port'], $this->post['old_db_socket']);

			if (!$this->db->connection) {
				echo "Couldn't connect to your old database using the specified information.";
				break;
			}

			$oldset['old_db_host']   = $this->post['old_db_host'];
			$oldset['old_db_user']   = $this->post['old_db_user'];
			$oldset['old_db_pass']   = $this->post['old_db_pass'];
			$oldset['old_db_name']   = $this->post['old_db_name'];
			$oldset['old_db_port']   = $this->post['old_db_port'];
			$oldset['old_db_socket'] = $this->post['old_db_socket'];
			$oldset['post_inc']      = $this->post['post_inc'];
			$oldset['old_prefix']    = trim(preg_replace('/[^a-zA-Z0-9_]/', '', $this->post['old_prefix']));
			$oldset['converted']     = '0';

			if (!$this->write_olddb_sets($oldset)) {
				echo 'The old database connection was ok, but convert_db.php in the install directory could not be updated.<br /><br />CHMOD convert_db.php to 666. Then press the back button and try again.';
				break;
			}

			echo "The operations were successful.<br /><br />
			<a href='$this->self?mode=convert&amp;step=3'>Continue to step 3</a>";
			break;

		case 3:
			include 'templates/converttodatabase.php';
			break;

		case 4:
			$this->db = new database($this->post['db_host'], $this->post['db_user'], $this->post['db_pass'], $this->post['db_name'], $this->post['db_port'], $this->post['db_socket']);

			if (!$this->db->connection) {
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

			if (!get_magic_quotes_gpc()) {
				$this->set_magic_quotes_gpc($this->get);
				$this->set_magic_quotes_gpc($this->post);
				$this->set_magic_quotes_gpc($this->cookie);
			}

			$this->sets['installed'] = 1;

			if (!$this->write_db_sets('../settings.php')) {
				echo 'The database connection was ok, but settings.php could not be updated.<br /><br />CHMOD settings.php to 666.';
				break;
			}

			if (!is_readable('./data_tables.php')) {
				echo 'Database connected, settings written, but no data could be loaded from data_tables.php';
				break;
			}

			if (!is_readable('./data_templates.php')) {
				echo 'Database connected, settings written, but no templates could be loaded from data_templates.php';
				break;
			}

			$queries = array();
			$pre = $this->sets['prefix'];
			$this->pre = $this->sets['prefix'];

			include './data_tables.php';
			include './data_templates.php';

			execute_queries($queries, $this->db);

			echo "The operations were successful.<br /><br />
			<a href='$this->self?mode=convert&amp;step=5'>Continue to step 5</a>";
			break;

		case 5:
			$url = preg_replace('/install\/?$/i', '', $this->server_url() . dirname($_SERVER['PHP_SELF']));

			include 'templates/convertboardsettings.php';
			break;

		case 6:
			$this->pre  = $this->sets['prefix'];
			$this->db   = new database($this->sets['db_host'], $this->sets['db_user'], $this->sets['db_pass'], $this->sets['db_name'], $this->sets['db_port'], $this->sets['db_socket']);

			$this->sets = $this->get_settings($this->sets);
			$this->sets['loc_of_board'] = stripslashes($this->post['board_url']);
			$this->sets['forum_name'] = stripslashes($this->post['board_name']);

			$this->write_sets();

			echo "The operations were successful.<br /><br />
			<a href='$this->self?mode=convert&amp;step=7'>Continue to step 7</a>";
			break;

		case 7:
			include 'templates/convertfromforum.php';
			break;

		case 8:
			echo "<meta http-equiv='Refresh' content='0;URL={$_POST['board_name']}'>";
			break;
		}
	}

	function server_url()
	{ 
		$proto = "http" .
		((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "s" : "") . "://";

		$server = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];

		return $proto . $server;
	}
}
?>
