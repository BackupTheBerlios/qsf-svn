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
	 * @param string $db_prefix Prefix applied to all database queries
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function db_mysql($db_host, $db_user, $db_pass, $db_name, $db_port = 3306, $db_socket = '', $db_prefix)
	{
		parent::database($db_host, $db_user, $db_pass, $db_name, $db_port, $db_socket, $db_prefix);
		$this->socket = $db_socket;

		$this->connection = @mysql_connect("$db_host:$db_port" . (!$this->socket ? '' : ":$db_socket"), $db_user, $db_pass, true);

		if (!@mysql_select_db($db_name, $this->connection)) {
			$this->connection = false;
		}
	}

	function close()
	{
		if( $this->connection )
			@mysql_close( $this->connection );
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
			$result = mysql_query("EXPLAIN $query", $this->connection) or error(QUICKSILVER_QUERY_ERROR, mysql_error($this->connection), $query, mysql_errno($this->connection));
			$data = mysql_fetch_array($result, MYSQL_ASSOC);
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
	 * @param string $args Data to pass into query as escaped strings
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return resource Executed query
	 **/
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

	/**
	 * Returns a escaped string
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.com>
	 * @since 1.3.0
	 * @return string A string with the quotes and other charaters escaped
	 * @param string $string The string to escape
	 **/
	function escape($string)
	{
		return mysql_real_escape_string($string, $this->connection);
	}

	function invalid($errmsg)
	{
		if (stristr($errmsg, 'mysql_fetch_array(): supplied argument is not a valid MySQL result resource'))
			return true;
		
		return false;
	}

	function error_last()
	{
		return mysql_error($this->connection);
	}

	function version()
	{
		return mysql_result(mysql_query('SELECT VERSION() as version'), 0, 0);
	}

	// SQL over-rides

	public function install()
	{
		parent::install();

		$this->install_seed_post_create = 'INSERT INTO %pposts (post_topic, post_author, post_text, post_time, post_emoticons, post_mbcode, post_ip, post_icon) VALUES (%d, %d, \'%s\', %d, 1, 1, INET_ATON(\'%s\'), \'%s\')';
	}

	// SQL for libs
	public function activeutil()
	{
		parent::activeutil();

		$this->activeutil_update = 'REPLACE INTO %pactive (active_id, active_action, active_item, active_time, active_ip, active_user_agent, active_session) VALUES (%d, \'%s\', %d, %d, INET_ATON(\'%s\'), \'%s\', \'%s\')';
		$this->activeutil_load = 'SELECT a.*, INET_NTOA(a.active_ip) as active_ip, u.user_name, u.user_active, g.group_format, f.forum_name, t.topic_title, t.topic_forum, u2.user_name AS profile_name
			FROM (%pactive a, %pgroups g, %pusers u)
			LEFT JOIN %pforums f ON f.forum_id=a.active_item
			LEFT JOIN %ptopics t ON t.topic_id=a.active_item
			LEFT JOIN %pusers u2 ON u2.user_id=a.active_item
			WHERE
			  a.active_id = u.user_id AND
			  u.user_group = g.group_id
			ORDER BY
			  a.active_time DESC';
	}


	/**
	 * Over-riding SQL for the member search page
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function members()
	{
		parent::members();

		$this->members_page_count_withl = "SELECT user_id FROM %pusers m, %pgroups g WHERE m.user_group = g.group_id AND m.user_id != %d AND UPPER(LEFT(LTRIM(m.user_name), 1)) = '%s'";
		$this->members_search_withl = "
			SELECT
				m.user_joined, m.user_email_show, m.user_email_form, m.user_email, m.user_pm, m.user_name, m.user_id, m.user_posts, m.user_title, m.user_homepage,
				g.group_name
			FROM
				%pusers m,
				%pgroups g
			WHERE
				m.user_group = g.group_id AND
				m.user_id != %d AND
				UPPER(LEFT(LTRIM(m.user_name), 1)) = '%s'
			ORDER BY
				%s
			LIMIT %d OFFSET %d";
	}

	public function pm()
	{
		parent::pm();

		$this->pm_send_do_send = "INSERT INTO %ppmsystem (pm_to, pm_from, pm_ip, pm_title, pm_time, pm_message, pm_folder)
					VALUES (%d, %d, INET_ATON('%s'), '%s', %d, '%s', 0)";
		$this->pm_send_do_send_with_bcc = "INSERT INTO %ppmsystem (pm_to, pm_from, pm_ip, pm_bcc, pm_title, pm_time, pm_message, pm_folder, pm_read)
				VALUES (%d, %d, INET_ATON('%s'), '%s', '%s', %d, '%s', 1, 1)";
		$this->pm_view_fetch_pm = 'SELECT p.*,
			  m.user_name, m.user_signature, g.group_name, m.user_posts, m.user_joined, m.user_title, m.user_avatar, m.user_avatar_type, m.user_avatar_width, m.user_avatar_height,
			  m.user_active, a.active_time
			FROM (%ppmsystem p, %pusers m, %pgroups g)
			LEFT JOIN %pactive a ON a.active_id=m.user_id
			WHERE p.pm_id = %d AND m.user_id = p.pm_from AND
			  m.user_group = g.group_id';
	}


	/**
	 * Over-riding SQL for the post page
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function post()
	{
		parent::post();

		$this->post_makepost = 'INSERT INTO %pposts (post_topic, post_author, post_text, post_time, post_emoticons, post_mbcode, post_count, post_ip, post_icon) VALUES (%d, %d, \'%s\', %d, %d, %d, %d, INET_ATON(\'%s\'), \'%s\')';
	}

	/**
	 * MySQL Over-rides for the profile page
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function profile()
	{
		parent::profile();

		$this->profile_execute_fetch_profile = 'SELECT m.*, g.group_name, a.active_time FROM (%pusers m, %pgroups g) LEFT JOIN %pactive a ON a.active_id=m.user_id WHERE m.user_id=%d AND g.group_id=m.user_group';
		$this->profile_execute_select_fav = 'SELECT COUNT(p.post_id) AS forumuser_posts, f.forum_id AS forum, f.forum_name
				FROM %pposts p, %ptopics t, %pforums f
				WHERE p.post_topic=t.topic_id AND t.topic_forum=f.forum_id AND p.post_author=%d
				GROUP BY t.topic_forum
				ORDER BY forumuser_posts DESC';
	}

	/**
	 * Over-riding SQL for the readmarker lib, used by topic
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function readmarker()
	{
		parent::readmarker();

		$this->readmarker_mark_topic_read_replace = 'REPLACE INTO %preadmarks (readmark_user, readmark_topic, readmark_lastread) VALUES (%d, %d, %d)';
	}


	public function recent()
	{
		parent::recent();

		$this->recent_getTopics_list ='SELECT
				DISTINCT(t.topic_id), p.post_author as dot,
				t.topic_title, t.topic_last_poster, t.topic_starter, t.topic_replies, t.topic_modes & %d AS topic_modes,
				t.topic_posted, t.topic_edited, t.topic_icon, t.topic_views, t.topic_description, t.topic_moved, t.topic_forum,
				t.topic_last_post, f.forum_id, f.forum_name,
				s.user_name AS topic_starter_name,
				m.user_name AS topic_last_poster_name
			FROM
				(%ptopics t,
				%pforums f,
				%pusers m,
				%pusers s)
			LEFT JOIN %pposts p ON (t.topic_id = p.post_topic AND p.post_author = %d)
			LEFT JOIN %preadmarks rm ON (t.topic_id = rm.readmark_topic AND rm.readmark_user = %d)
			WHERE
				t.topic_forum IN (%s) AND
				(t.topic_edited >= %d OR
				 (t.topic_edited >= %d AND
				  (rm.readmark_lastread IS NULL OR rm.readmark_lastread < t.topic_edited)
				)) AND
				t.topic_forum = f.forum_id AND
				m.user_id = t.topic_last_poster AND
				s.user_id = t.topic_starter AND
				t.topic_modes & %d = 0
			ORDER BY
				t.topic_modes & %d DESC,
				t.topic_edited DESC
			LIMIT %d OFFSET %d';
	}

	public function register()
	{
		parent::register();

		$this->register_create = 'INSERT INTO %pusers (user_name, user_password, user_group, user_title, user_joined, user_email, user_skin, user_view_avatars, user_view_emoticons, user_view_signatures, user_language, user_email_show, user_pm, user_timezone, user_regip) VALUES (\'%s\', \'%s\', %d, \'%s\', %d, \'%s\', \'%s\', %d, %d, %d, \'%s\', %d, %d, %d, INET_ATON(\'%s\'))';
	}

	public function rssfeed()
	{
		parent::rssfeed();

		$this->rssfeed_generate_full_feed = 'SELECT t.topic_id, t.topic_title, t.topic_forum, p.post_id, p.post_time, p.post_text, u.user_name, u.user_email, u.user_email_show FROM %ptopics t, %pposts p, %pusers u WHERE t.topic_forum IN (%s) AND t.topic_modes & %d AND p.post_topic = t.topic_id AND u.user_id = p.post_author ORDER BY p.post_time DESC LIMIT %d';
		$this->rssfeed_generate_forum_feed = 'SELECT t.topic_id, t.topic_title, t.topic_forum, p.post_id, p.post_time, p.post_text, u.user_name, u.user_email, u.user_email_show FROM %ptopics t, %pposts p, %pusers u WHERE t.topic_forum = %d AND t.topic_modes & %d AND p.post_topic = t.topic_id AND u.user_id = p.post_author ORDER BY p.post_time DESC LIMIT %d';
	}

	/**
	 * Over-riding SQL for the topic page
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function topic()
	{
		parent::topic();

		$this->topic_get_main = 'SELECT
			  p.post_emoticons, p.post_mbcode, p.post_time, p.post_text, p.post_author, p.post_id, INET_NTOA(p.post_ip) as post_ip, p.post_icon, p.post_edited_by, p.post_edited_time,
			  m.user_joined, m.user_signature, m.user_posts, m.user_id, m.user_title, m.user_group, m.user_avatar, m.user_name, m.user_email, m.user_aim, m.user_gtalk,
			  m.user_icq, m.user_yahoo, m.user_homepage, m.user_avatar_type, m.user_avatar_width, m.user_avatar_height, m.user_msn, m.user_pm, m.user_email_show, m.user_email_form, m.user_active,
			  t.membertitle_icon,
			  g.group_name,
			  a.active_time
			FROM
			  (%pposts p, %pusers m, %pgroups g)
			LEFT JOIN %pactive a ON a.active_id=m.user_id
			LEFT JOIN %pmembertitles t ON t.membertitle_id=m.user_level
			WHERE
			  p.post_topic = %d AND
			  p.post_author = m.user_id AND
			  m.user_group = g.group_id
			GROUP BY p.post_id
			ORDER BY
			  p.post_time
			LIMIT %d OFFSET %d';
	}
}
?>