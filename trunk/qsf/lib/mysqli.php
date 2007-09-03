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

		$this->connection = @mysqli_connect( $db_host, $db_user, $db_pass, $db_name, $db_port, $db_socket );
	}

	function get_debug_info($query)
	{
		$data = array();
		if (substr(trim(strtoupper($query)), 0, 6) == 'SELECT') {
			mysqli_real_query( $this->connection, "EXPLAIN $query") or 
				error(QUICKSILVER_QUERY_ERROR, mysqli_error($this->connection), $query, mysqli_errno($this->connection));

			$result = mysqli_use_result( $this->connection );
			$data = mysqli_fetch_array( $result, MYSQLI_ASSOC );
			mysqli_free_result( $result );

		}
		return $data;
	}

	function insert_id($table)
	{
		return mysqli_insert_id($this->connection);
	}

	function query($query)
	{
		$args = array();
		if (is_array($query)) {
			$args = $query; // only use arg 1
		} else {
			$args  = func_get_args();
		}

		$query = $this->_format_query($args);
		
		$this->querycount++;

		if (isset($this->get['debug'])) {
			$this->debug($query);
		}
		mysqli_real_query( $this->connection, $query )
			or error(QUICKSILVER_QUERY_ERROR, mysqli_error($this->connection), $query, mysqli_errno($this->connection));

		return mysqli_store_result( $this->connection );
	}

	function nqfetch($query)
	{
		return mysqli_fetch_array($query, MYSQLI_ASSOC);
	}

	function num_rows($query)
	{
		return mysqli_num_rows($query);
	}

	function aff_rows()
	{
		return mysqli_affected_rows($this->connection);
	}

	function escape($string)
	{
		return mysqli_real_escape_string( $this->connection, $string );
	}

	function invalid($errmsg)
	{
		if (stristr($errmsg, 'mysqli_fetch_array(): supplied argument is not a valid MySQL result resource'))
			return true;
		
		return false;
	}

	function error_last()
	{
		return mysqli_error($this->connection);
	}

	function version()
	{
		$version = $this->fetch( 'SELECT VERSION() as version' );
		return $version['version'];
	}
}
?>
