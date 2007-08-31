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

/**
 * Generic SQL queries
 *
 * @since 2.0.0
 **/
class sql
{
	public function install()
	{
		$this->install_new_user = 'INSERT INTO %pusers ( user_name, user_password, user_group, user_title, user_title_custom, user_joined, user_email, user_timezone) VALUES ( \'%s\', \'%s\', %d, \'Administrator\', 1, %d, \'%s\', %d)';
		$this->install_seed_topic_create = 'INSERT INTO %ptopics (topic_title, topic_forum, topic_description, topic_starter, topic_icon, topic_posted, topic_edited, topic_last_poster, topic_modes)  VALUES (\'%s\', %d, \'%s\', %d, \'%s\', %d, %d, %d, %d)';
		$this->install_seed_post_create = 'INSERT INTO %pposts (post_topic, post_author, post_text, post_time, post_emoticons, post_mbcode, post_ip, post_icon) VALUES (%d, %d, \'%s\', %d, 1, 1, \'%s\', \'%s\')';
		$this->install_seed_update_topic = 'UPDATE %ptopics SET topic_last_post=%d WHERE topic_id=%d';
		$this->install_seed_update_user = 'UPDATE %pusers SET user_posts=user_posts+1, user_lastpost=%d WHERE user_id=%d';
		$this->install_seed_update_forums = 'UPDATE %pforums SET forum_topics=forum_topics+1, forum_lastpost=%d WHERE forum_id=%d';
	}

	// SQL for libs
	private function activeutil()
	{
		$this->activeutil_update = 'UPDATE %pactive SET active_id=%d, active_action=\'%s\', active_item=%d, active_time=%d, active_ip=\'%s\', active_user_agent=\'%s\', active_session = \'%s\' WHERE active_session = \'%s\'';
		$this->activeutil_load = 'SELECT a.*, a.active_ip AS active_ip, u.user_name, u.user_active, g.group_format, f.forum_name, t.topic_title, t.topic_forum, u2.user_name AS profile_name
			FROM %pgroups g, %pusers u, %pactive a
			LEFT JOIN %pforums f ON f.forum_id=a.active_item
			LEFT JOIN %ptopics t ON t.topic_id=a.active_item
			LEFT JOIN %pusers u2 ON u2.user_id=a.active_item
			WHERE
			  a.active_id = u.user_id AND
			  u.user_group = g.group_id
			ORDER BY
			  a.active_time DESC';
	}

	public function board()
	{
		self::activeutil();
	}



	public function register()
	{
		$this->register_create = 'INSERT INTO %pusers (user_name, user_password, user_group, user_title, user_joined, user_email, user_skin, user_view_avatars, user_view_emoticons, user_view_signatures, user_language, user_email_show, user_pm, user_timezone, user_regip) VALUES (\'%s\', \'%s\', %d, \'%s\', %d, \'%s\', \'%s\', %d, %d, %d, \'%s\', %d, %d, %d, \'%s\')';
		$this->register_activate = 'UPDATE %pusers SET user_group=%d WHERE user_id=%d';
	}

}

?>
