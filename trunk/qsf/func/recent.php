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

require_once $set['include_path'] . '/global.php';

/**
 * Recent view
 *
 * Displays the topics since last board visit.
 *
 * @author Geoffrey Dunn <quicken@swiftdsl.com.au>
 * @since 1.1.5
 **/
class recent extends qsfglobal
{
	/**
	 * Main interface. Display a list of topics considered unread
	 *
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.5
	 * @return string html output for module
	 **/
	function execute()
	{
		// No forum need be specified

		$n   = isset($this->get['n']) ? intval($this->get['n']) : $this->sets['topics_per_page'];
		$min = isset($this->get['min']) ? intval($this->get['min']) : 0;

		$this->set_title($this->lang->recent_active);
        
		$forums_str = $this->createForumPermissionsString();

		// Handle the unlikely case where the user cannot view ANY forums
		if ($forums_str == "()") {
			return $this->message($this->lang->recent_forum, $this->lang->recent_noexist);
		}
        
		$topicCount = $this->countTopics($forums_str);

		$pagelinks = $this->get_pages($topicCount, 'a=recent', $min, $n);

		$forumjump = $this->select_forums($this->forum_grab(), 0, 0, null, true);

		$topics = $this->getTopics($forums_str, $min, $n);

		if (!$topics) {
			$topics = eval($this->template('RECENT_NO_TOPICS'));
		}

		return eval($this->template('RECENT_MAIN'));
	}
	
	/**
	 * Get a list of forums the user can view
	 *
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.5
	 * @return string comma delimited list for us in SQL
	 **/
	function createForumPermissionsString()
	{
		$forums_str = "(";
		$query = $this->db->query("SELECT forum_id FROM {$this->pre}forums");
		while ($row = $this->db->nqfetch($query))
		{
			if ($this->perms->auth('forum_view',$row['forum_id'])) {
				if (strcmp($forums_str, "(")) {
					$forums_str .= ",";
				}
		                $forums_str .= $row['forum_id'];
			}
		}
		$forums_str .= ")";
		return $forums_str;
	}
	
	/**
	 * Get a count of all the topics available since the user's last visit
	 *
	 * @param string $forum_str Comma delimited list of forums the user can view
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.5
	 * @return int count of topics
	 **/
	function countTopics($forums_str)
	{
		$query = $this->db->fetch("
		
		SELECT COUNT(topic_id) AS count
		FROM {$this->pre}topics
		WHERE
		    topic_forum IN $forums_str AND
		    topic_edited >= {$this->user['user_lastvisit']}");

		return $query['count'];
	}

	/**
	 * Fetch the output to display for the list of topics. Based off topics.php
	 *
	 * @param string $forum_str Comma delimited list of forums the user can view
	 * @param int $min First entry to display
	 * @param int $n Number of entries to display
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.5
	 * @return string html output
	 **/
	function getTopics($forums_str, $min, $n)
	{
		$out = null;

		$query = $this->db->query("
		SELECT
		    DISTINCT(t.topic_id), p.post_author as dot,
		    t.topic_title, t.topic_last_poster, t.topic_starter, t.topic_replies, t.topic_modes,
		    t.topic_edited, t.topic_icon, t.topic_views, t.topic_description, t.topic_moved, t.topic_forum,
		    f.forum_id, f.forum_name,
		    s.user_name AS topic_starter_name,
			m.user_name AS topic_last_poster_name
		FROM
		    ({$this->pre}topics t,
		    {$this->pre}forums f,
		    {$this->pre}users m,
		    {$this->pre}users s)
		LEFT JOIN {$this->pre}posts p ON (t.topic_id = p.post_topic AND p.post_author = {$this->user['user_id']})
		WHERE
		    t.topic_forum IN $forums_str AND
		    t.topic_edited >= {$this->user['user_lastvisit']} AND
		    t.topic_forum = f.forum_id AND
		    m.user_id = t.topic_last_poster AND
		    s.user_id = t.topic_starter
		ORDER BY
			(t.topic_modes & " . TOPIC_PINNED . ") DESC,
		    t.topic_edited DESC
		LIMIT
		    $min, $n");

		while ($row = $this->db->nqfetch($query))
		{
			$row['topic_title'] = $this->format($row['topic_title'], FORMAT_CENSOR | FORMAT_HTMLCHARS);

			$Pages = $this->get_pages_topic($row['topic_replies'], 'a=topic&amp;t=' . $row['topic_id'], ', ', 0, $this->sets['posts_per_page']);

			if (!empty($row['topic_description'])) {
				$row['topic_description'] = '<br />&raquo; ' . $this->format($row['topic_description'], FORMAT_CENSOR | FORMAT_HTMLCHARS);
			}

			if ($row['topic_last_poster'] != USER_GUEST_UID) {
				$last_poster = '<a href="' . $this->self . '?a=profile&amp;w=' . $row['topic_last_poster'] . '" class="small">' . $row['topic_last_poster_name'] . '</a>';
			} else {
				$last_poster = $this->lang->recent_guest;
			}

			if ($row['topic_starter'] != USER_GUEST_UID) {
				$row['topic_starter'] = '<a href="' . $this->self . '?a=profile&amp;w=' . $row['topic_starter'] . '" class="small">' . $row['topic_starter_name'] . '</a>';
			} else {
				$row['topic_starter'] = $this->lang->recent_guest;
			}

			$state = null;

			if ($row['topic_modes'] & TOPIC_MOVED) {
				$state = 'moved';
				$row['topic_id'] = $row['topic_moved'];

			} elseif ($row['topic_modes'] & TOPIC_LOCKED) {
				$state = 'locked';

			} else {
				if ($row['topic_edited'] > $this->user['user_lastvisit']) {
					$state = 'new';
				}

				if (($this->user['user_id'] != USER_GUEST_UID) && $row['dot']) {
					$state .= 'dot';
				}

				if ($row['topic_replies'] < $this->sets['hot_limit']) {
					$state .= 'open';
				} else {
					$state .= 'hot';
				}
			}

			if ($row['topic_replies'] > $this->sets['posts_per_page']) {
				$min = floor($row['topic_replies'] / $this->sets['posts_per_page']) * $this->sets['posts_per_page'];
				$jump = "&amp;min=$min#" . ($row['topic_replies'] - $min);
			} else {
				$jump = '#' . $row['topic_replies'];
			}

			$row['edited'] = $row['topic_edited']; // Store so skin can access
			$row['topic_edited'] = $this->mbdate('g:i a, M j, Y', $row['topic_edited']);
			$row['topic_views']  = number_format($row['topic_views'], 0, null, $this->lang->sep_thousands);

			if ($row['topic_modes'] & TOPIC_PINNED) {
				$row['topic_title'] = "<b>" . $row['topic_title'] . "</b>";
			}
			$row['icon'] = $row['topic_icon']; // Store so skin can access
			if ($row['topic_modes'] & TOPIC_POLL) {
				$row['topic_icon'] = '<img src="./skins/' . $this->skin . '/images/poll.png" alt="' . $this->lang->recent_icon . '" />';
			} else {
				if ($row['topic_icon']) {
					$row['topic_icon'] = '<img src="./skins/' . $this->skin . '/mbicons/' . $row['topic_icon'] . '" alt="' . $this->lang->recent_icon . '" />';
				}
			}

			$out .= eval($this->template('RECENT_TOPIC'));
		}

		return $out;
	}
}
?>
