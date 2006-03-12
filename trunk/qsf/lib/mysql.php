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

if (!defined('QUICKSILVERFORUMS')) {
	header('HTTP/1.0 403 Forbidden');
	die;
}

require_once $set['include_path'] . '/lib/database.php';

/**
 * MySQL Abstraction Class
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class db_mysql extends database
{
	var $socket;             // Database Socket @var string

	/**
	 * Constructor; sets up variables and connection
	 *
	 * @param string $db_host Server
	 * @param string $db_user User Name
	 * @param string $db_pass Password
	 * @param string $db_name Database Name
	 * @param int $db_port Database Port
	 * @param string $db_socket Database Socket
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function db_mysql($db_host, $db_user, $db_pass, $db_name, $db_port = 3306, $db_socket = '')
	{
		parent::database($db_host, $db_user, $db_pass, $db_name, $db_port, $db_socket);
		$this->socket = $db_socket;

		$this->connection = @mysql_connect("$db_host:$db_port" . (!$this->socket ? '' : ":$db_socket"), $db_user, $db_pass, true);

		if (!@mysql_select_db($db_name, $this->connection)) {
			$this->connection = false;
		}
	}
	
	/**
	 * Runs an EXPLAIN or similar on a query
	 *
	 * @param string $query Query to debug
	 * @access protected
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function get_debug_info($query)
	{
		$data = array();
		if (substr(trim(strtoupper($query)), 0, 6) == 'SELECT') {
			$data = $this->fetch("EXPLAIN $query");
		}
		return $data;
	}

	/**
	 * Retrieves the insert ID of the last executed query
	 *
	 * @param string $table Table name - unused
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return int Insert ID
	 **/
	function insert_id($table)
	{
		return mysql_insert_id($this->connection);
	}

	/**
	 * Executes a query
	 *
	 * @param string $query SQL query
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return resource Executed query
	 **/
	function query($query)
	{
		$this->querycount++;

		if (isset($this->get['debug'])) {
			$this->debug($query);
		}

		$result = mysql_query($query, $this->connection) or error(QUICKSILVER_QUERY_ERROR, mysql_error($this->connection), $query, mysql_errno($this->connection));
		return $result;
	}

	/**
	 * Fetches an executed query into an array
	 *
	 * @param resource $query Executed SQL query
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return array Fetched rows
	 **/
	function nqfetch($query)
	{
		return mysql_fetch_array($query, MYSQL_ASSOC);
	}

	/**
	 * Gets the number of rows retrieved by a SELECT
	 *
	 * @param resource $query Executed SQL query
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return int Number of retrieved rows
	 **/
	function num_rows($query)
	{
		return mysql_num_rows($query);
	}


	/**
	 * Gets the number of rows affected by the last executed UPDATE
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return int Number of affected rows
	 **/
	function aff_rows()
	{
		return mysql_affected_rows($this->connection);
	}
}
?>
