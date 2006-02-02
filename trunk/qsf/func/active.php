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
 * Active Users Viewer
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class active extends qsfglobal
{
	/**
	 * Sets up title, tree, and HTML
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function execute()
	{
		$this->set_title($this->lang->active_users);
		$this->tree($this->lang->active_users);

		$ActiveList = $this->listActive();
		return eval($this->template('ACTIVE_MAIN'));
	}

	/**
	 * Formats list of active users and filters out inactive ones
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return string HTML: Active users
	 **/
	function listActive()
	{
		$allusers  = null;
		$oldtime   = $this->time - 900;
		$oldusers  = array();

		$act = array(
			'active'  => $this->lang->active_modules_active,
			'board'   => $this->lang->active_modules_board,
			'cp'      => $this->lang->active_modules_cp,
			'forum'   => $this->lang->active_modules_forum,
			'help'    => $this->lang->active_modules_help,
			'login'   => $this->lang->active_modules_login,
			'members' => $this->lang->active_modules_members,
			'mod'     => $this->lang->active_modules_mod,
			'printer' => $this->lang->active_modules_printer,
			'profile' => $this->lang->active_modules_profile,
			'pm'      => $this->lang->active_modules_pm,
			'post'    => $this->lang->active_modules_post,
			'recent'  => $this->lang->active_modules_recent,
			'search'  => $this->lang->active_modules_search,
			'topic'   => $this->lang->active_modules_topic
		);

		$query = $this->db->query("
		SELECT
		  a.*, u.user_name, u.user_active, g.group_format, f.forum_name, t.topic_title, t.topic_forum, u2.user_name AS profile_name
		FROM
		  ({$this->pre}active a, {$this->pre}groups g, {$this->pre}users u)
		LEFT JOIN {$this->pre}forums f ON f.forum_id=a.active_item
		LEFT JOIN {$this->pre}topics t ON t.topic_id=a.active_item
		LEFT JOIN {$this->pre}users u2 ON u2.user_id=a.active_item
		WHERE
		  a.active_id = u.user_id AND
		  u.user_group = g.group_id
		ORDER BY
		  a.active_time DESC");

		$botformat = '<i>%s</i>';

		while ($user = $this->db->nqfetch($query))
		{
			if ($user['active_time'] < $oldtime) {
				$oldusers[] = 'user_id=' . $user['active_id'];
			} elseif ($user['user_active']) {
				if ($user['active_id'] != USER_GUEST_UID) {
					$username = '<a href="' . $this->self . '?a=profile&amp;w=' . $user['active_id'] . '">' . sprintf($user['group_format'], $user['user_name']) . '</a>';
				} else {
					$username = $user['user_name'];

					$spider_name = $this->spider_check($user['active_user_agent']);
					if ($spider_name)
					{
						$username = sprintf($botformat, $spider_name);
					}
				}

				if (isset($act[$user['active_action']])) {
					$action = $act[$user['active_action']];

					switch ($user['active_action'])
					{
					case 'topic':
						if ($this->perms->auth('topic_view', $user['topic_forum']) || $this->perms->auth('forum_view', $user['topic_forum'])) {
							$action = sprintf($action, "<a href='{$this->self}?a=topic&amp;t={$user['active_item']}'>" . $this->format($user['topic_title'], FORMAT_CENSOR | FORMAT_HTMLCHARS) . '</a>');
						} else {
							$action = $act['board'];
						}
						break;

					case 'forum':
						if ($this->perms->auth('forum_view', $user['topic_forum'])) {
							$action = sprintf($action, "<a href='{$this->self}?a=forum&amp;f={$user['active_item']}'>{$user['forum_name']}</a>");
						} else {
							$action = $act['board'];
						}
						break;

					case 'printer':
						if ($this->perms->auth('topic_view', $user['topic_forum']) || $this->perms->auth('forum_view', $user['topic_forum'])) {
							$action = sprintf($action, "<a href='{$this->self}?a=topic&amp;t={$user['active_item']}'>" . $this->format($user['topic_title'], FORMAT_CENSOR | FORMAT_HTMLCHARS) . '</a>');
						} else {
							$action = $act['board'];
						}
						break;

					case 'profile':
						$action = sprintf($action, "<a href='{$this->self}?a=profile&amp;w={$user['active_item']}'>{$user['profile_name']}</a>");
						break;
					}
				} else {
					$action = $act['board'];
				}

				$time = $this->mbdate(DATE_SHORT, $user['active_time']);
				$allusers .= eval($this->template('ACTIVE_USER'));
			}
		}

		if ($oldusers) {
			$oldusers = implode(' OR ', $oldusers);
			$this->db->query('UPDATE ' . $this->pre . 'users SET user_lastvisit=' . $oldtime . ' WHERE ' . $oldusers);
			$this->db->query('DELETE FROM ' . $this->pre . 'active WHERE active_time < ' . $oldtime);
		}

		return $allusers;
	}
}
?>
