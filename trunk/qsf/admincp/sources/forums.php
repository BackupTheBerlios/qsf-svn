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

require './common.php';

/**
 * Forum Controls
 *
 * @author Mark Elliot <mark.elliot@mercuryboard.com>
 * @since Beta 2.1
 **/
class forums extends admin
{
	/**
	 * Forum Controls
	 *
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string HTML
	 **/
	function execute()
	{
		if (!isset($this->get['s'])) {
			$this->get['s'] = '';
		}

		$forums_exist = $this->db->fetch('SELECT COUNT(forum_id) AS count FROM ' . $this->pre . 'forums');

		if (!$forums_exist['count'] && ($this->get['s'] != 'add')) {
			return $this->message($this->lang->forum_controls, $this->lang->forum_none, $this->lang->forum_create, "$this->self?a=forums&amp;s=add");
		}

		switch ($this->get['s'])
		{
		case 'edit':
			$this->set_title($this->lang->forum_edit);

			if (isset($this->get['id'])) {
				$f = $this->db->fetch("SELECT forum_name, forum_description, forum_parent, forum_subcat FROM {$this->pre}forums WHERE forum_id='{$this->get['id']}'");

				$this->tree('Edit a Forum', "{$this->self}?a=forums&amp;s=edit");
				$this->tree($f['forum_name']);

				if (isset($this->post['editforum'])) {
					return $this->EditForum($this->get['id']);
				} else {
					$forum = $this->select_forums($this->forum_grab(), $f['forum_parent']);
					return eval($this->template('ADMIN_FORUM_EDIT'));
				}
			} else {
				$this->tree($this->lang->forum_edit);
				return $this->message($this->lang->forum_edit, '<div style="text-align:left">' . $this->Text($this->forum_grab(), "$this->self?a=forums&amp;s=edit&amp;id=") . '</div>');
			}
			break;

		case 'delete':
			$this->set_title($this->lang->forum_delete);

			if (isset($this->get['id'])) {
				$f = $this->db->fetch("SELECT forum_name FROM {$this->pre}forums WHERE forum_id=" . intval($this->get['id']));

				$this->tree('Delete a Forum', "{$this->self}?a=forums&amp;s=delete");
				$this->tree($f['forum_name']);

				if (isset($this->get['confirm'])) {
					return $this->DeleteForum($this->get['id']);
				} else {
					return $this->message($this->lang->forum_delete, $this->lang->forum_delete_warning, $this->lang->forum_delete, "$this->self?a=forums&s=delete&id={$this->get['id']}&amp;confirm=1");
				}
			} else {
				$this->tree($this->lang->forum_delete);
				return $this->message($this->lang->forum_delete, '<div style="text-align:left">' . $this->Text($this->forum_grab(), "$this->self?a=forums&amp;s=delete&amp;id=") . '</div>');
			}
			break;

		case 'add':
			$this->set_title($this->lang->forum_create);
			$this->tree($this->lang->forum_create);

			if (isset($this->post['addforum'])) {
				return $this->message($this->lang->forum_create, $this->AddForum());
			} else {
				$select = $this->select_forums($this->forum_grab());

				if ($forums_exist['count']) {
					$quickperms = $select;
				} else {
					$quickperms = "<option value='-3' selected='selected'>{$this->lang->forum_default_perms}</option>";
				}
				return eval($this->template('ADMIN_FORUM_ADD'));
			}
			break;

		case 'order':
			$this->set_title($this->lang->forum_ordering);
			$this->tree($this->lang->forum_ordering);

			if (isset($this->post['orderforum'])) {
				return $this->message($this->lang->forum_ordering, $this->OrderUpdate());
			}
			$forum = $this->InputBox($this->forum_grab());
			return eval($this->template('ADMIN_FORUM_ORDER'));
			break;

		case 'count':
			$this->set_title($this->lang->forum_recount);
			$this->tree($this->lang->forum_recount);
			return $this->message($this->lang->forum_recount, $this->RecountForums());
			break;
		}
	}

	/**
	 * Returns true if $check is found in the children of $id
	 *
	 * @param array $array Array of forums
	 * @param int $id Used as parent
	 * @param int $check ID of parent to check in list
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return bool True if $check is found amongst the children of $id
	 **/
	function CheckParent($array, $id, $check)
	{
		$arr = $this->forum_array($array, $id);
		if ($arr) {
			foreach ($arr as $val) {
				if ($val['forum_id'] == $check) {
					return true;
				} else {
					return $this->CheckParent($array, $val['forum_id'], $check);
				}
			}
		}
		return false;
	}

	/**
	 * Creates the list of forums preceeding $id in $array
	 *
	 * @param array $array Array of forums
	 * @param int $id Used as reference point for tree construction
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string List of forums preceding $id in $array
	 **/
	function CreateTree($array, $id)
	{
		for ($i = 0; $i < count($array); $i++) {
			if ($array[$i]['forum_id'] == $id) {
				return preg_replace('/^,/', '', $array[$i]['forum_tree'] . ",$id");
			}
		}
	}

	/**
	 * Removes forum $id as well as all posts/topics for $id
	 *
	 * @param int $id ID of forum
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Completion message
	 **/
	function DeleteForum($id)
	{
		if ($this->forum_array($this->forum_grab(), $id)) {
			return $this->message($this->lang->forum_delete, $this->lang->forum_no_orphans);
		}

		$topics = null;

		$query = $this->db->query("SELECT topic_id FROM {$this->pre}topics WHERE topic_forum=$id");
		while ($data = $this->db->nqfetch($query))
		{
			$topics .= "post_topic={$data['topic_id']} OR ";
		}

		if ($topics) {
			$this->db->query("DELETE FROM {$this->pre}posts WHERE " . substr($topics, 0, -4));
			$this->db->query("DELETE FROM {$this->pre}topics WHERE topic_forum=$id");
		}

		$this->db->query("DELETE FROM {$this->pre}forums WHERE forum_id=$id");

		$perms = new permissions;
		$perms->db = &$this->db;
		$perms->pre = &$this->pre;

		// Groups
		while ($perms->get_group())
		{
			$perms->remove_z($id);
			$perms->update();
		}

		// Users
		while ($perms->get_group(true))
		{
			$perms->remove_z($id);
			$perms->update();
		}

		return $this->message($this->lang->forum_delete, $this->lang->forum_deleted);
	}

	/**
	 * Updates forum $id
	 *
	 * @param integer $id ID of forum
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Completion message
	 **/
	function EditForum($id)
	{
		if (trim($this->post['name']) == '') {
			return $this->message($this->lang->forum_edit, $this->lang->forum_empty);
		}

		$subcat = isset($this->post['subcat']) ? 1 : 0;
		$forums = $this->forum_grab();
		if (($this->post['parent'] == $id) || $this->CheckParent($forums, $id, $this->post['parent'])) {
			return $this->message($this->lang->forum_edit, $this->lang->forum_parent);
		}

		$this->db->query("
		UPDATE {$this->pre}forums SET
		  forum_parent={$this->post['parent']},
		  forum_name='{$this->post['name']}',
		  forum_description='{$this->post['description']}',
		  forum_subcat='{$subcat}'
		WHERE
		  forum_id=$id");

		$this->updateForumTrees();

		return $this->message($this->lang->forum_edit, $this->lang->forum_edited);
	}

	/**
	 * Adds a forum with parameters from $this->post
	 *
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Completion message
	 **/
	function AddForum()
	{
		if (trim($this->post['name']) == '') {
			return $this->lang->forum_empty;
		}

		$forums = $this->forum_grab();

		$forums_arr = $this->forum_array($forums, $this->post['parent']);
		$position   = $forums_arr ? count($forums_arr) : 0;
		$subcat     = isset($this->post['subcat']) ? 1 : 0;

		$this->db->query("INSERT INTO {$this->pre}forums
		(forum_tree, forum_parent, forum_name, forum_description, forum_position, forum_subcat) VALUES
		('" . $this->CreateTree($forums, $this->post['parent']) . "', '{$this->post['parent']}', '{$this->post['name']}', '{$this->post['description']}', '$position', '$subcat')");

		$id = $this->db->insert_id();

		$perms = new permissions;
		$perms->db = &$this->db;
		$perms->pre = &$this->pre;

		while ($perms->get_group())
		{
			// Full permissions (note: the banned group is still false)
			if ($this->post['sync'] == -2) {
				$perms->add_z($id, ($perms->group != USER_BANNED));

			// Default permissions (only works if there are no forums already created)
			} elseif ($this->post['sync'] == -3) {
				$perms->add_z($id);

			// No permissions
			} elseif ($this->post['sync'] == -1) {
				$perms->add_z($id, false);

			// Copy another forum
			} else {
				$perms->add_z($id, false);

				foreach ($perms->standard as $perm => $false)
				{
					if (!isset($perms->globals[$perm])) {
						$perms->set_xyz($perm, $id, $perms->auth($perm, $this->post['sync']));
					}
				}
			}

			$perms->update();
		}

		return $this->lang->forum_created;
	}

	/**
	 * Updates the position of all forums based on $this->post data
	 *
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Completion message
	 **/
	function OrderUpdate()
	{
		$q = $this->db->query("SELECT forum_id FROM {$this->pre}forums ORDER BY forum_id ASC");
		while ($f = $this->db->nqfetch($q))
		{
			$this->db->query("UPDATE {$this->pre}forums SET forum_position='{$this->post["_{$f['forum_id']}"]}' WHERE forum_id='{$f['forum_id']}'");
		}
		return $this->lang->forum_ordered;
	}

	/**
	 * Used to update topic and reply counts for every forum.
	 *
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Completion message
	 **/
	function RecountForums()
	{
		$q = $this->db->query("SELECT forum_id FROM {$this->pre}forums WHERE forum_parent = 0");
		$this->sets['posts'] = 0;
		$this->sets['topics'] = 0;

		while ($f = $this->db->nqfetch($q))
		{
			$results = $this->countTopicsAndReplies($f['forum_id']);

			$this->sets['posts'] += $results['replies'];
			$this->sets['topics'] += $results['topics'];
		}

		$this->write_sets();
		return "Recounted forums! Total topics: {$this->sets['topics']}. Total posts: {$this->sets['posts']}.";
	}
	
	/**
	 * Used for recursive topic and reply counting
	 *
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.5
	 * @param Forum to count
	 * @return Array containing topic Count, reply Count, last post, last post time
	 **/
	function countTopicsAndReplies($forum)
	{
		// Initalise locals
		$topicCount = 0;
		$replyCount = 0;
		$lastPostTime = 0;
		$lastPost = 0;
		
		// Check for subforums
		$q = $this->db->query("SELECT forum_id FROM {$this->pre}forums WHERE forum_parent=$forum");
		while ($f = $this->db->nqfetch($q))
		{
			$results = $this->countTopicsAndReplies($f['forum_id']);
			$topicCount += $results['topics'];
			$replyCount += $results['replies'];
			if ($results['lastPostTime'] > $lastPostTime) {
				$lastPostTime = $results['lastPostTime'];
				$lastPost = $results['lastPost'];
			}
		}
		
		// Count topics on this forum
		$tc = $this->db->fetch('SELECT COUNT(topic_id) tc 
				FROM ' . $this->pre . 'topics 
				WHERE NOT(topic_modes & ' . TOPIC_MOVED . ') AND topic_forum=' . $forum);
		$rc = $this->db->fetch('SELECT COUNT(p.post_id) rc
				FROM ' . $this->pre . 'posts p, ' . $this->pre . 'topics t 
				WHERE p.post_topic=t.topic_id AND topic_forum=' . $forum);
		$lp = $this->db->fetch('SELECT p.post_time pt, p.post_id post
				FROM ' . $this->pre . 'posts p, ' . $this->pre . 'topics t 
				WHERE p.post_topic=t.topic_id AND topic_forum=' . $forum . '
				ORDER BY p.post_time DESC LIMIT 1');
		
		$topicCount += $tc['tc'];
		$replyCount += $rc['rc'];
		if ($lp['pt'] > $lastPostTime) {
			$lastPostTime = $lp['pt'];
			$lastPost = $lp['post'];
		}
		
		// Update the details
		$this->db->query("UPDATE {$this->pre}forums SET forum_replies='" . ($replyCount - $topicCount) . "',
				forum_topics='{$topicCount}', forum_lastpost='{$lastPost}' WHERE forum_id='{$forum}'");
		
		return array('topics' => $topicCount, 'replies' => $replyCount, 'lastPost' => $lastPost, 'lastPostTime' => $lastPostTime);
	}
	
	/**
	 * Update Forum Trees
	 *
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.5
	 **/
	function updateForumTrees()
	{
		$forums = array();
		$forumTree = array();
		
		// Build tree structure of 'id' => 'parent' structure
		$q = $this->db->query("SELECT forum_id, forum_parent FROM {$this->pre}forums ORDER BY forum_parent");
		
		while ($f = $this->db->nqfetch($q))
		{
			if ($f['forum_parent']) {
				$forums[$f['forum_id']] = $f['forum_parent'];
			}
		}
		
		// Run through group
		$q = $this->db->query("SELECT forum_parent FROM {$this->pre}forums GROUP BY forum_parent");

		while ($f = $this->db->nqfetch($q))
		{
			if ($f['forum_parent']) {
				$tree = $this->buildTree($forums, $f['forum_parent']);
			} else {
				$tree = '';
			}
		
			$this->db->query("UPDATE {$this->pre}forums SET forum_tree='$tree' WHERE forum_parent={$f['forum_parent']}");
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
}
?>
