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

require_once $set['include_path'] . '/global.php';

/**
 * RSS Feed Generator
 *
 * @author Kristopher Powell <klpowell@trenden.net>
 * @author Roger Libiez [Samson] http://www.iguanadons.net
 * @since 1.1.5
 **/
class rssfeed extends qsfglobal
{
	/**
	 * Main interface. Get a RSS feed of posts
	 *
	 * @since 1.1.5
	 * @return string rss output
	 **/
	function execute()
	{
		// Gives IE7 fits about being unable to read the feed, but we don't want unauthorized visitors with this anyway.
		if (!$this->perms->auth('board_view')) {
			$this->lang->board();
			return $this->message(
				sprintf($this->lang->board_message, $this->sets['forum_name']),
				($this->perms->is_guest) ? sprintf($this->lang->board_regfirst, $this->self) : $this->lang->board_noview
			);
		}

		$this->nohtml = true;
		$this->templater->debug_mode = false; // or else we end up with invalid XML
		
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
	
	function cleanup()
	{
		// Do nothing!
	}

	/**
	 * Get a RSS feed of posts for the entire forum
	 *
	 * @since 1.1.5
	 * @return string rss output
	 **/
	function generate_full_feed()
	{
		$forums_str = $this->readmarker->create_forum_permissions_string();
		
		$query = $this->db->query( $this->db->rssfeed_generate_full_feed,
			$forums_str, TOPIC_PUBLISH, $this->sets['rss_feed_posts']);


		$items = '';
		while( $row = $this->db->nqfetch( $query ) )
		{
			$items .= $this->get_post($row);
		}

		header( 'Content-type: text/xml', 1 );
		return eval($this->template('RSSFEED_ALL_POSTS'));
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
		$exists = $this->db->fetch( $this->db->rssfeed_generate_forum_feed_fetch_exists, $forum);
		if (!isset($exists['forum_parent']) || !$exists['forum_parent'] || $exists['forum_subcat']) {
			return $this->rss_error_message($this->lang->rssfeed_cannot_find_forum);
		}
		
		$query = $this->db->query( $this->db->rssfeed_generate_forum_feed,
			$forum, TOPIC_PUBLISH, $this->sets['rss_feed_posts']);
			
		$items = '';
		while( $row = $this->db->nqfetch( $query ) )
		{
			$items .= $this->get_post($row);
		}

		header( 'Content-type: text/xml', 1 );
		return eval($this->template('RSSFEED_FORUM'));
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
		$topicdata = $this->db->fetch( $this->db->rssfeed_generate_topic_feed_fetch_topicdata, $topic);

		if (!$topicdata) {
			return $this->rss_error_message($this->lang->rssfeed_cannot_find_topic);
		}

		if (!$this->perms->auth('topic_view', $topicdata['topic_forum'])) {
			return $this->rss_error_message($this->lang->rssfeed_cannot_read_topic);
		}

		$topicdata['topic_title'] = $this->format($topicdata['topic_title'], FORMAT_CENSOR | FORMAT_HTMLCHARS);
		$topicdata['topic_description'] = $this->format($topicdata['topic_description'], FORMAT_HTMLCHARS | FORMAT_CENSOR);
		
		$query = $this->db->query( $this->db->rssfeed_generate_topic_feed,
			$topic, $this->sets['rss_feed_posts']);

		$items = '';
		while( $row = $this->db->nqfetch( $query ) )
		{
			$items .= $this->get_post($row);
		}

		header( 'Content-type: text/xml', 1 );
		return eval($this->template('RSSFEED_TOPIC'));
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
		Header( 'Content-type: text/xml', 1 );
		return eval($this->template('RSSFEED_ERROR'));
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
		$title = $this->format( $query_row['topic_title'], FORMAT_CENSOR );
		$title = htmlspecialchars( $title );

		$desc = substr( $query_row['post_text'], 0, 500 );
		$desc = $this->format( $desc, FORMAT_CENSOR );
		$desc = htmlspecialchars( $desc );

		$pubdate = $this->mbdate( DATE_ISO822, $query_row['post_time'], false );

		$forum_name = 'Unknown';
		$forum = $this->readmarker->get_forum($query_row['topic_forum']);
		if ($forum != null) $forum_name = htmlspecialchars( $forum['forum_name'] );

		$user_email = '';
		if ($query_row['user_email_show']) {
			$user_email .= $query_row['user_email'];
		} else {
			$user_email .= 'nobody@example.com';
		}
		$user_email .= ' (';
		$user_email .= $this->format( $query_row['user_name'], FORMAT_CENSOR );
		$user_email .= ')';
		$user_email = htmlspecialchars( $user_email );

		return eval($this->template('RSSFEED_ITEM'));
	}
}
?>