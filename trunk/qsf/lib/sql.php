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
	/**
	 * SQL for the installer
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function install()
	{
		$this->install_new_user = 'INSERT INTO %pusers ( user_name, user_password, user_group, user_title, user_title_custom, user_joined, user_email, user_timezone) VALUES ( \'%s\', \'%s\', %d, \'Administrator\', 1, %d, \'%s\', %d)';
		$this->install_seed_topic_create = 'INSERT INTO %ptopics (topic_title, topic_forum, topic_description, topic_starter, topic_icon, topic_posted, topic_edited, topic_last_poster, topic_modes)  VALUES (\'%s\', %d, \'%s\', %d, \'%s\', %d, %d, %d, %d)';
		$this->install_seed_post_create = 'INSERT INTO %pposts (post_topic, post_author, post_text, post_time, post_emoticons, post_mbcode, post_ip, post_icon) VALUES (%d, %d, \'%s\', %d, 1, 1, \'%s\', \'%s\')';
		$this->install_seed_update_topic = 'UPDATE %ptopics SET topic_last_post=%d WHERE topic_id=%d';
		$this->install_seed_update_user = 'UPDATE %pusers SET user_posts=user_posts+1, user_lastpost=%d WHERE user_id=%d';
		$this->install_seed_update_forums = 'UPDATE %pforums SET forum_topics=forum_topics+1, forum_lastpost=%d WHERE forum_id=%d';
	}

	/**
	 * SQL for the activeutil lib, also used by active and board
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	protected function activeutil()
	{
//		$this->activeutil_update = 'UPDATE %pactive SET active_id=%d, active_action=\'%s\', active_item=%d, active_time=%d, active_ip=\'%s\', active_user_agent=\'%s\', active_session = \'%s\' WHERE active_session = \'%s\'';
		$this->activeutil_update = 'INSERT INTO %pactive (active_id, active_action, active_item, active_time, active_ip, active_user_agent, active_session) VALUES (%d, \'%s\', %d, %d, \'%s\', \'%s\', \'%s\')';
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

	/**
	 * SQL for the active page
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function active()
	{
		self::activeutil();
	}

	/**
	 * SQL for the board page
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function board()
	{
		self::activeutil();
	}

	/**
	 * SQL for the forum page
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function forum()
	{
		self::activeutil();
		$this->forum_get_topics = '
			SELECT DISTINCT 
				p.post_author AS dot,
				t.topic_id, t.topic_title, t.topic_last_poster, t.topic_starter, t.topic_replies, t.topic_modes,
				t.topic_posted, t.topic_edited, t.topic_icon, t.topic_views, t.topic_description, t.topic_moved, t.topic_forum,
				s.user_name AS topic_starter_name, m.user_name AS topic_last_poster_name, p.post_id AS topic_last_post, (t.topic_modes & %d) AS nop
			FROM
				%pusers s
			LEFT JOIN %ptopics t ON ( s.user_id = t.topic_starter )
			LEFT JOIN %pposts p ON (t.topic_id = p.post_topic AND p.post_author = %d AND p.post_id = t.topic_last_post )
			LEFT JOIN %pusers m ON m.user_id = t.topic_last_poster
			WHERE
				((t.topic_forum = %d) OR ((t.topic_modes & %d) != 0))
			ORDER BY
				(t.topic_modes & %d) DESC,
				%s
			LIMIT %d OFFSET %d';
	}

	/**
	 * SQL for the mod page
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function mod()
	{
		$this->mod_move_topic_fetch_topic = 'SELECT topic_title, topic_forum, topic_starter, topic_modes, topic_poll_options FROM %ptopics WHERE topic_id=%d';
		$this->mod_move_topic_fetch_target = 'SELECT forum_parent FROM %pforums WHERE forum_id=%d';
		$this->mod_move_topic_update_topic = 'UPDATE %ptopics SET topic_modes=%d, topic_moved=%d WHERE topic_id=%d OR topic_moved=%d';
		$this->mod_move_topic_update_topic_forum = 'UPDATE %ptopics SET topic_forum=%d WHERE topic_id=%d';
		$this->mod_move_topic_update_posts = 'UPDATE %pposts SET post_topic=%d WHERE post_topic=%d';
		$this->mod_move_topic_update_votes = 'UPDATE %pvotes SET vote_topic=%d WHERE vote_topic=%d';
		$this->mod_move_topic_fetch_ammount = 'SELECT topic_replies FROM %ptopics WHERE topic_id=%d';

		$this->mod_edit_post_fetch_data = 'SELECT p.post_text, p.post_author, p.post_emoticons, p.post_mbcode, p.post_topic, p.post_icon, p.post_time, t.topic_forum, t.topic_replies FROM %pposts p, %ptopics t WHERE t.topic_id=p.post_topic AND p.post_id=%d';
		$this->mod_edit_post_update_posts = 'UPDATE %pposts SET post_text=\'%s\', post_emoticons=%d, post_mbcode=%d, post_edited_by=\'%s\', post_edited_time=%d, post_icon=\'%s\' WHERE post_id=%d';
		$this->mod_edit_post_fetch_first = 'SELECT p.post_id FROM %pposts p, %ptopics t WHERE p.post_topic=t.topic_id AND t.topic_id=%d ORDER BY p.post_time LIMIT 1';
		$this->mod_edit_post_update_topics = 'UPDATE %ptopics SET topic_icon=\'%s\' WHERE topic_id=%d';

		$this->mod_edit_topic_fetch_topic = 'SELECT topic_title, topic_description, topic_starter, topic_forum, topic_modes FROM %ptopics WHERE topic_id=%d';
		$this->mod_edit_topic_update_topics = 'UPDATE %ptopics SET topic_title=\'%s\', topic_description=\'%s\', topic_modes=\'%s\' WHERE topic_id=%d';

		$this->mod_pinlock_topic_fetch_topic = 'SELECT topic_modes, topic_starter, topic_forum FROM %ptopics WHERE topic_id=%d';

		$this->mod_del_post_fetch_post = 'SELECT p.post_id, p.post_author, p.post_topic, p.post_time, t.topic_id, t.topic_forum FROM %pposts p, %ptopics t WHERE p.post_id=%d AND p.post_topic=t.topic_id';
		$this->mod_del_post_fetch_first = 'SELECT p.post_id FROM %pposts p, %ptopics t WHERE p.post_topic=t.topic_id AND t.topic_id=%d ORDER BY p.post_time LIMIT 1';
		$this->mod_del_post_fetch_prev = 'SELECT MAX(p.post_id) AS prev_post FROM %pposts p WHERE p.post_topic = %d AND p.post_time < %d';

		$this->mod_del_topic_fetch_topic = 'SELECT topic_id, topic_forum, topic_starter FROM %ptopics WHERE topic_id=%d';

		$this->mod_publish_topic_fetch_topic = 'SELECT topic_modes, topic_forum FROM %ptopics WHERE topic_id=%d';

		$this->mod_split_topic_fetch_topic = 'SELECT topic_id, topic_forum, topic_starter, topic_title, topic_modes FROM %ptopics WHERE topic_id=%d';
		$this->mod_split_topic_update_topics = 'UPDATE %ptopics SET topic_title=\'%s\', topic_replies=%d, topic_views=0, topic_description=\'\', topic_modes=%d WHERE topic_id=%d';
		$this->mod_split_topic_update_posts = 'UPDATE %pposts SET post_topic=%d WHERE post_id IN (%s)';
		$this->mod_split_topic_fetch_posts = 'SELECT post_author, post_icon, post_time FROM %pposts WHERE post_topic=%d ORDER BY post_time ASC';
		$this->mod_split_topic_update_topics2 = 'UPDATE %ptopics SET topic_starter=%d, topic_icon=\'%s\' WHERE topic_id=%d';
		$this->mod_split_topic_update_topics3 = 'UPDATE %ptopics SET topic_replies=topic_replies-%d WHERE topic_id=%d';

		$this->mod_delete_topic_select_posts = 'SELECT DISTINCT t.topic_forum, t.topic_id, a.attach_file, p.post_author, p.post_id, p.post_count, u.user_posts FROM (%ptopics t, %pposts p, %pusers u) LEFT JOIN %pattach a ON p.post_id=a.attach_post WHERE t.topic_id=%d AND t.topic_id=p.post_topic AND p.post_author=u.user_id';




		$this->mod_delete_post = 'SELECT t.topic_forum, t.topic_id, a.attach_file, p.post_author, p.post_count, u.user_posts
			FROM %ptopics t, %pusers u, %pposts p
			LEFT JOIN %pattach a ON p.post_id=a.attach_post
			WHERE p.post_id=%d AND t.topic_id=p.post_topic AND u.user_id=p.post_author';
		$this->mod_update_last_post = 'SELECT p.post_id FROM %pposts p JOIN %ptopics t ON (t.topic_id=p.post_topic) 
			WHERE t.topic_forum=%d
			ORDER BY t.topic_edited DESC, p.post_id DESC
			LIMIT 1';
		$this->mod_update_last_post_do = 'UPDATE %pforums SET forum_lastpost=%d WHERE forum_id=%d';
	}

	/**
	 * SQL for the post page
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function post()
	{
		$this->post_makepost = 'INSERT INTO %pposts (post_topic, post_author, post_text, post_time, post_emoticons, post_mbcode, post_count, post_ip, post_icon) VALUES (%d, %d, \'%s\', %d, %d, %d, %d, \'%s\', \'%s\')';
	}

	/**
	 * SQL for the readmarker lib, used by topic
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function readmarker()
	{
		$this->readmarker_mark_topic_read_replace = 'INSERT INTO %preadmarks (readmark_user, readmark_topic, readmark_lastread) VALUES (%d, %d, %d)';
	}

	/**
	 * SQL for the register page
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function register()
	{
		$this->register_create = 'INSERT INTO %pusers (user_name, user_password, user_group, user_title, user_joined, user_email, user_skin, user_view_avatars, user_view_emoticons, user_view_signatures, user_language, user_email_show, user_pm, user_timezone, user_regip) VALUES (\'%s\', \'%s\', %d, \'%s\', %d, \'%s\', \'%s\', %d, %d, %d, \'%s\', %d, %d, %d, \'%s\')';
		$this->register_activate = 'UPDATE %pusers SET user_group=%d WHERE user_id=%d';
	}

	/**
	 * SQL for the topic page
	 *
	 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
	 * @since 2.0.0
	 **/
	public function topic()
	{
		self::readmarker();
		$this->topic_get_main = 'SELECT
			  p.post_emoticons, p.post_mbcode, p.post_time, p.post_text, p.post_author, p.post_id, p.post_ip as post_ip, p.post_icon, p.post_edited_by, p.post_edited_time,
			  m.user_joined, m.user_signature, m.user_posts, m.user_id, m.user_title, m.user_group, m.user_avatar, m.user_name, m.user_email, m.user_aim, m.user_gtalk,
			  m.user_icq, m.user_yahoo, m.user_homepage, m.user_avatar_type, m.user_avatar_width, m.user_avatar_height, m.user_msn, m.user_pm, m.user_email_show, m.user_email_form, m.user_active,
			  t.membertitle_icon,
			  g.group_name,
			  a.active_time
			FROM
			  %pposts p, %pgroups g, %pusers m
			LEFT JOIN %pactive a ON a.active_id=m.user_id
			LEFT JOIN %pmembertitles t ON t.membertitle_id=m.user_level
			WHERE
			  p.post_topic = %d AND
			  p.post_author = m.user_id AND
			  m.user_group = g.group_id
			ORDER BY
			  p.post_time
			LIMIT %d OFFSET %d';
	}

}

?>
