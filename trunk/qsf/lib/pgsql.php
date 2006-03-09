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
 * PostgreSQL Abstraction Class
 *
 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
 * @since 1.1.9
 **/
class db_pgsql extends database
{
	/**
	 * Constructor; sets up variables and connection
	 *
	 * @param string $db_host Server
	 * @param string $db_user User Name
	 * @param string $db_pass Password
	 * @param string $db_name Database Name
	 * @param int $db_port Database Port
	 * @param string $db_socket unused
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 1.1.9
	 * @return void
	 **/
	function db_pgsql($db_host, $db_user, $db_pass, $db_name, $db_port = 5432, $db_socket)
	{
		$pg_connstr = "host=$db_host port=$db_port dbname=$db_name user=$db_user password=$db_pass";

		$this->connection = @pg_connect($pg_connstr);
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
	 * @author Geoffrey Dunn <geoff@wwarmage.com>
	 * @since 1.1.9
	 * @return int Insert ID
	 **/
	function insert_id($table)
	{
		$results = $this->fetch("select currval('{$table}_seq') last_id");
		return $results['last_id'];
	}

	/**
	 * Executes a query
	 *
	 * @param string $query SQL query
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 1.1.9
	 * @return resource Executed query
	 **/
	function query($query)
	{
		$this->querycount++;

		if (isset($this->get['debug'])) {
			$this->debug($query);
		}

		if (!pg_send_query($this->connection, $query))
		{
			$err = pg_get_result($this->connection);
			error(QUICKSILVER_QUERY_ERROR, pg_result_error($err), $query, 0);
		} else {
			$this->last = pg_get_result($this->connection);

			if (false === $this->last)
			{
				error(QUICKSILVER_QUERY_ERROR, pg_result_error($err), $query, 0);
			}
		}
		return $this->last;
	}


	/**
	 * Fetches an executed query into an array
	 *
	 * @param resource $query Executed SQL query
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 1.1.9
	 * @return array Fetched rows
	 **/
	function nqfetch($query)
	{
		return pg_fetch_array($query);
	}

	/**
	 * Gets the number of rows retrieved by a SELECT
	 *
	 * @param resource $query Executed SQL query
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 1.1.9
	 * @return int Number of retrieved rows
	 **/
	function num_rows($query)
	{
		return pg_num_rows($query);
	}


	/**
	 * Gets the number of rows affected by the last executed UPDATE
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 1.1.9
	 * @return int Number of affected rows
	 **/
	function aff_rows()
	{
		return pg_affected_rows($this->last);
	}
}
?>
