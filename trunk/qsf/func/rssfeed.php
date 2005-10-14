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
   function execute()
   {
      $this->nohtml = true;
      return($this->generate_feed());
   }

   function generate_feed()
   {
      Header( "Content-type: text/xml", 1 );
      $out = "<?xml version='1.0' encoding='{$this->lang->charset}'?>
      <rss version='2.0'>
       <channel>
        <title>{$this->sets['rss_feed_title']}</title>
        <link>{$this->sets['loc_of_board']}{$this->mainfile}?a=rssfeed</link>
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
            $desc = substr( $row['post_text'], 0, 500 );
            $desc = htmlspecialchars( $desc );
            $pubdate = $this->mbdate( DATE_ISO822, $row['post_time'] );

            $out .= "<item>
              <title>{$row['topic_title']} {$this->lang->rssfeed_posted_by} {$row['user_name']}</title>
              <link>{$this->sets['loc_of_board']}{$this->mainfile}?a=topic&amp;t={$row['topic_id']}</link>
              <description>{$desc}</description>
              <pubDate>{$pubdate}</pubDate>
              </item>";
      }
      $out .= "</channel>
      </rss>";
      return $out;
   }
}
?>
