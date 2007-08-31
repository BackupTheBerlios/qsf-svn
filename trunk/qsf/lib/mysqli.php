<?php
/**
 * Quicksilver Forums
 * Copyright (c) 2007 The Quicksilver Forums Development Team
 *  http://www.quicksilverforums.com/
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

if (!defined('QUICKSILVERFORUMS')) {
	header('HTTP/1.0 403 Forbidden');
	die;
}

require_once $set['include_path'] . '/lib/database.php';
require_once $set['include_path'] . '/lib/mysql.php';

/**
 * MySQL Abstraction Class
 *
 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
 * @since 2.0
 **/
class db_mysqli extends db_mysql
{
	function db_mysqli($db_host, $db_user, $db_pass, $db_name, $db_port = 3306, $db_socket = '', $db_prefix)
	{
		parent::database($db_host, $db_user, $db_pass, $db_name, $db_port, $db_socket, $db_prefix);
		$this->socket = $db_socket;

		$this->connection = false;
	}
}
?>
