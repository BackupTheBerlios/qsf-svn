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

require_once('recent.php');
 
/**
 * RSS Feed Generator
 *
 * @author Kristopher Powell <klpowell@trenden.net>
 * @author Roger Libiez (Samson) <samson@afkmud.com>
 * @since 1.1.5
 **/
class rssfeed extends recent
{
	/**
	 * Main interface. Get a RSS feed of posts
	 *
	 * @since 1.1.5
	 * @return string rss output
	 **/
	function execute()
	{
		$this->nohtml = true;
		
		$feed = null;
		
		$this->link = "{$this->sets['loc_of_board']}{$this->mainfile}?a=rssfeed";
		
		if (isset($this->get['f'])) {
			$f = intval($this->get['f']);
			$this->link .= "&amp;f=$f";
			if (!$this->perms->auth('forum_view', $f)) {
				return $this->rss_error_message($this->lang->rssfeed_cannot_read_forum);
			}
			$feed = $this->generate_forum_feed($f);
		} else if (isset($this->get['t'])) {
			$t = intval($this->get['t']);
			$this->link .= "&amp;t=$t";
			$feed = $this->generate_topic_feed($t);
		} else {
			$feed = $this->generate_full_feed();
		}

		return $feed;
	}

	/**
	 * Get a RSS feed of posts for the entire forum
	 *
	 * @since 1.1.5
	 * @return string rss output
	 **/
	function generate_full_feed()
	{
		Header( "Content-type: text/xml", 1 );
		$out = "<?xml version='1.0' encoding='{$this->lang->charset}'?>
		<rss version='2.0'>
		<channel>
		<title>{$this->sets['rss_feed_title']}</title>
		<link>{$this->link}</link>
		<description>{$this->sets['rss_feed_desc']}</description>
		<language>{$this->user['user_language']}</language>
		<generator>{$this->sets['forum_name']}</generator>
		<ttl>{$this->sets['rss_feed_time']}</ttl>";
		
		$forums_str = $this->createForumPermissionsString();
		
		$query = $this->db->query( "SELECT
				t.topic_id,
				t.topic_title,
				p.post_time,
				p.post_text,
				u.user_name
			FROM 
				{$this->pre}topics t,
				{$this->pre}posts p,
				{$this->pre}users u
			WHERE t.topic_forum IN $forums_str AND
				p.post_topic = t.topic_id AND
				u.user_id = p.post_author
			ORDER BY p.post_time DESC
			LIMIT {$this->sets['rss_feed_posts']}" );
		while( $row = $this->db->nqfetch( $query ) )
		{
			$out .= $this->get_post($row);
		}
		$out .= "</channel>
		</rss>";
		return $out;
	}
	
	/**
	 * Get a RSS feed of posts for a specific forum
	 *
	 * @param int $forum id number of the forum to fetch
	 * @since 1.1.9
	 * @return string rss output
	 **/
	function generate_forum_feed($forum)
	{
		$exists = $this->db->fetch("SELECT forum_parent, forum_name, forum_description, forum_subcat FROM {$this->pre}forums WHERE forum_id=$forum");
		if (!isset($exists['forum_parent']) || !$exists['forum_parent'] || $exists['forum_subcat']) {
			return $this->rss_error_message($this->lang->rssfeed_cannot_find_forum);
		}

		Header( "Content-type: text/xml", 1 );
		$out = "<?xml version='1.0' encoding='{$this->lang->charset}'?>
		<rss version='2.0'>
		<channel>
		<title>{$this->sets['rss_feed_title']} - {$this->lang->rssfeed_forum} {$exists['forum_name']}</title>
		<link>{$this->link}</link>
		<description>{$this->sets['rss_feed_desc']} - {$exists['forum_description']}</description>
		<language>{$this->user['user_language']}</language>
		<generator>{$this->sets['forum_name']}</generator>
		<ttl>{$this->sets['rss_feed_time']}</ttl>";
		
		$query = $this->db->query( "SELECT
				t.topic_id,
				t.topic_title,
				p.post_time,
				p.post_text,
				u.user_name
			FROM 
				{$this->pre}topics t,
				{$this->pre}posts p,
				{$this->pre}users u
			WHERE t.topic_forum = $forum AND
				p.post_topic = t.topic_id AND
				u.user_id = p.post_author
			ORDER BY p.post_time DESC
			LIMIT {$this->sets['rss_feed_posts']}" );
		while( $row = $this->db->nqfetch( $query ) )
		{
			$out .= $this->get_post($row);
		}
		$out .= "</channel>
		</rss>";
		return $out;
	}

	/**
	 * Get a RSS feed of posts for a specific topic
	 *
	 * @param int $topic id number of the topic to fetch
	 * @since 1.1.9
	 * @return string rss output
	 **/
	function generate_topic_feed($topic)
	{
		$topicdata = $this->db->fetch('
			SELECT
			    t.topic_title, t.topic_description, t.topic_modes, t.topic_starter, t.topic_forum, t.topic_replies, t.topic_poll_options, f.forum_name
			FROM
			    ' . $this->pre . 'topics t, ' . $this->pre . 'forums f
			WHERE
			    t.topic_id=' . $topic . ' AND
			    f.forum_id=t.topic_forum');

		if (!$topicdata) {
			return $this->rss_error_message($this->lang->rssfeed_cannot_find_topic);
		}

		if (!$this->perms->auth('topic_view', $topicdata['topic_forum'])) {
			return $this->rss_error_message($this->lang->rssfeed_cannot_read_topic);
		}

		$topicdata['topic_title'] = $this->format($topicdata['topic_title'], FORMAT_CENSOR | FORMAT_HTMLCHARS);
		$topicdata['topic_description'] = $this->format($topicdata['topic_description'], FORMAT_HTMLCHARS | FORMAT_CENSOR);

		Header( "Content-type: text/xml", 1 );
		$out = "<?xml version='1.0' encoding='{$this->lang->charset}'?>
		<rss version='2.0'>
		<channel>
		<title>{$this->sets['rss_feed_title']} - {$this->lang->rssfeed_topic} {$topicdata['topic_title']}</title>
		<link>{$this->link}</link>
		<description>{$this->sets['rss_feed_desc']} - {$topicdata['topic_description']}</description>
		<language>{$this->user['user_language']}</language>
		<generator>{$this->sets['forum_name']}</generator>
		<ttl>{$this->sets['rss_feed_time']}</ttl>";
		
		$query = $this->db->query( "SELECT
				t.topic_id,
				t.topic_title,
				p.post_time,
				p.post_text,
				u.user_name
			FROM 
				{$this->pre}topics t,
				{$this->pre}posts p,
				{$this->pre}users u
			WHERE   t.topic_id = $topic AND
				p.post_topic = t.topic_id AND
				u.user_id = p.post_author
			ORDER BY p.post_time DESC
			LIMIT {$this->sets['rss_feed_posts']}" );
		while( $row = $this->db->nqfetch( $query ) )
		{
			$out .= $this->get_post($row);
		}
		$out .= "</channel>
		</rss>";
		return $out;
	}
	
	/**
	 * Display an error in a format acceptable for an RSS reader
	 *
	 * @param string $error The error message to display
	 * @since 1.1.9
	 * @return string rss output
	 **/
	function rss_error_message($error)
	{
		Header( "Content-type: text/xml", 1 );
		return "<?xml version='1.0' encoding='{$this->lang->charset}'?>
		<rss version='2.0'>
		<channel>
		<title>{$this->sets['rss_feed_title']} - {$this->lang->rssfeed_error}</title>
		<link>{$this->link}</link>
		<description>{$error}</description>
		<language>{$this->user['user_language']}</language>
		<generator>{$this->sets['forum_name']}</generator>
		<ttl>{$this->sets['rss_feed_time']}</ttl>
		</channel>
		</rss>";
	}
	
	/**
	 * Get the rss information for a single item
	 *
	 * @param array $query_row query information for the post
	 *	topic_id, topic_title, post_time, post_text and user_name
	 * @since 1.1.9
	 * @return string rss item output
	 **/
	function get_post($query_row)
	{
		$title = htmlspecialchars( $query_row['topic_title'] );
		$desc = substr( $query_row['post_text'], 0, 500 );
		$desc = htmlspecialchars( $desc );
		$pubdate = $this->mbdate( DATE_ISO822, $query_row['post_time'], false );
		
		return "<item>
			<title>{$title} {$this->lang->rssfeed_posted_by} {$query_row['user_name']}</title>
			<link>{$this->sets['loc_of_board']}{$this->mainfile}?a=topic&amp;t={$query_row['topic_id']}</link>
			<description>{$desc}</description>
			<pubDate>{$pubdate}</pubDate>
			</item>";
	}
}
?>
