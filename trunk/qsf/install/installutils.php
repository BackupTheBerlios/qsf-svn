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

/**
 * Install utilities
 *
 * A series of methods used by install/upgrade/port classes
 *
 * @author Geoffrey Dunn <geoff@warmage.com>
 * @since 1.1.5
 */
class installutils
{
	/**
	 * Update Forum Trees
	 *
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.5
	 * @param A forum instance
	 **/
	function updateForumTrees($qsf)
	{
		global $set;
		$pre = $set['prefix'];
		
		$forums = array();
		$forumTree = array();
		
		// Build tree structure of 'id' => 'parent' structure
		$q = $qsf->db->query("SELECT forum_id, forum_parent FROM {$qsf->pre}forums ORDER BY forum_parent");
		
		while ($f = $qsf->db->nqfetch($q))
		{
			if ($f['forum_parent']) {
				$forums[$f['forum_id']] = $f['forum_parent'];
			}
		}
		
		// Run through group
		$q = $qsf->db->query("SELECT forum_parent FROM {$qsf->pre}forums GROUP BY forum_parent");

		while ($f = $qsf->db->nqfetch($q))
		{
			if ($f['forum_parent']) {
				$tree = $this->buildTree($forums, $f['forum_parent']);
			} else {
				$tree = '';
			}
		
			$qsf->db->query("UPDATE {$qsf->pre}forums SET forum_tree='$tree' WHERE forum_parent={$f['forum_parent']}");
		}
	}
	
	function buildTree($forumsArray, $parent)
	{
		$tree = '';
		if (isset($forumsArray[$parent]) && $forumsArray[$parent]) {
			$tree = $this->buildTree($forumsArray, $forumsArray[$parent]);
			$tree .= ',';
		}
		$tree .= $parent;
		return $tree;
	}

	/**
	 * Used to update topic and reply counts for every forum.
	 *
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1, modified slightly for use by the convertors by Roger Libiez (Samson) <samson@afkmud.com>
	 * @param A forum instance
	 **/
	function RecountForums($qsf)
	{
		$qsf->sets = $qsf->get_settings($qsf->sets);

		$q = $qsf->db->query("SELECT forum_id FROM {$qsf->pre}forums WHERE forum_parent = 0");
		$qsf->sets['posts'] = 0;
		$qsf->sets['topics'] = 0;

		while ($f = $qsf->db->nqfetch($q))
		{
			$results = $this->countTopicsAndReplies($qsf, $f['forum_id']);

			$qsf->sets['posts'] += $results['replies'];
			$qsf->sets['topics'] += $results['topics'];
		}

		$qsf->write_sets();
	}
	
	/**
	 * Used for recursive topic and reply counting
	 *
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.5
	 * @param Board instance, Forum to count
	 * @return Array containing topic Count, reply Count, last post, last post time
	 **/
	function countTopicsAndReplies($qsf, $forum)
	{
		// Initalise locals
		$topicCount = 0;
		$replyCount = 0;
		$lastPostTime = 0;
		$lastPost = 0;
		
		// Check for subforums
		$q = $qsf->db->query("SELECT forum_id FROM {$qsf->pre}forums WHERE forum_parent=$forum");
		while ($f = $qsf->db->nqfetch($q))
		{
			$results = $this->countTopicsAndReplies($qsf, $f['forum_id']);
			$topicCount += $results['topics'];
			$replyCount += $results['replies'];
			if ($results['lastPostTime'] > $lastPostTime) {
				$lastPostTime = $results['lastPostTime'];
				$lastPost = $results['lastPost'];
			}
		}
		
		// Count topics on this forum
		$tc = $qsf->db->fetch('SELECT COUNT(topic_id) tc 
				FROM ' . $qsf->pre . 'topics 
				WHERE NOT(topic_modes & ' . TOPIC_MOVED . ') AND topic_forum=' . $forum);
		$rc = $qsf->db->fetch('SELECT COUNT(p.post_id) rc
				FROM ' . $qsf->pre . 'posts p, ' . $qsf->pre . 'topics t 
				WHERE p.post_topic=t.topic_id AND topic_forum=' . $forum);
		$lp = $qsf->db->fetch('SELECT p.post_time pt, p.post_id post
				FROM ' . $qsf->pre . 'posts p, ' . $qsf->pre . 'topics t 
				WHERE p.post_topic=t.topic_id AND topic_forum=' . $forum . '
				ORDER BY p.post_time DESC LIMIT 1');
		
		$topicCount += $tc['tc'];
		$replyCount += $rc['rc'];
		if ($lp['pt'] > $lastPostTime) {
			$lastPostTime = $lp['pt'];
			$lastPost = $lp['post'];
		}
		
		// Update the details
		$qsf->db->query("UPDATE {$qsf->pre}forums SET forum_replies='" . ($replyCount - $topicCount) . "',
				forum_topics='{$topicCount}', forum_lastpost='{$lastPost}' WHERE forum_id='{$forum}'");
		
		return array('topics' => $topicCount, 'replies' => $replyCount, 'lastPost' => $lastPost, 'lastPostTime' => $lastPostTime);
	}
}
?>
