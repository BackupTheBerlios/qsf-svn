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
 * Controls moderator actions
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class mod extends qsfglobal
{
	/**
	 * Choose a moderating action
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return string HTML Output
	 **/
	function execute()
	{
		$this->set_title($this->lang->mod_label_controls);

		if (!isset($this->get['s'])) {
			$this->get['s'] = null;
		}

		switch($this->get['s'])
		{
		case 'del_topic':
			return $this->del_topic();
			break;

		case 'del_post':
			return $this->del_post();
			break;

		case 'lock':
			return $this->lock_topic();
			break;

		case 'pin':
			return $this->pin_topic();
			break;

		case 'edit_topic':
			return $this->edit_topic();
			break;

		case 'edit_post':
			return $this->edit_post();
			break;

		case 'move':
			return $this->move_topic();
			break;

		case 'split':
			return $this->split_topic();
			break;
			
		case 'publish':
			return $this->publish_topic();
			break;

		default:
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_no_action, $this->lang->continue, "javascript:history.go(-1)");
			break;
		}
	}

	/**
	 * Moves a topic
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.0
	 * @return string message
	 **/
	function move_topic()
	{
		$this->tree($this->lang->mod_label_controls, $this->self . '?a=mod');
		$this->tree($this->lang->mod_label_topic_move);

		// Parameters check
		if (!isset($this->get['t'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_no_topic, $this->lang->continue, "javascript:history.go(-1)");
		}

		$this->get['t'] = intval($this->get['t']);
		$topic = $this->db->fetch('SELECT topic_title, topic_forum, topic_starter, topic_modes, topic_poll_options FROM ' . $this->pre . 'topics WHERE topic_id=' . $this->get['t']);

		// Existence check
		if (!isset($topic['topic_title'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_missing_topic, $this->lang->continue, "javascript:history.go(-1)");
		}

		if ($topic['topic_modes'] & TOPIC_GLOBAL) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_error_move_global, $this->lang->continue, "javascript:history.go(-1)");
		}

		// Permissions check
		$is_owner = $this->user['user_id'] == $topic['topic_starter'];

		if (!$this->perms->auth('topic_move', $topic['topic_forum']) && (!$is_owner || ($is_owner && !$this->perms->auth('topic_move_own', $topic['topic_forum'])))) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_perm_topic_move, $this->lang->continue, "$this->self?a=topic&amp;t={$this->get['t']}");
		}

		if (!isset($this->post['submit'])) {
			$forumlist = $this->htmlwidgets->select_forums($topic['topic_forum']);
			return eval($this->template('MOD_MOVE_TOPIC'));
		} else {
			$this->post['newforum'] = intval($this->post['newforum']);

			if ($this->post['newforum'] == $topic['topic_forum']) {
				return $this->message($this->lang->mod_label_controls, $this->lang->mod_error_move_same, $this->lang->continue, "$this->self?a=topic&amp;t={$this->get['t']}");
			}

			if (!$this->perms->auth('topic_create', $this->post['newforum'])) {
				return $this->message($this->lang->mod_label_controls, $this->lang->mod_error_move_create, $this->lang->continue, "$this->self?a=topic&amp;t={$this->get['t']}");
			}

			$target = $this->db->fetch('SELECT forum_parent FROM ' . $this->pre . 'forums WHERE forum_id=' . $this->post['newforum']);
			if (!isset($target['forum_parent'])) {
				return $this->message($this->lang->mod_label_controls, $this->lang->mod_error_move_forum, $this->lang->continue, "$this->self?a=topic&amp;t={$this->get['t']}");
			} elseif (!$target['forum_parent']) {
				return $this->message($this->lang->mod_label_controls, $this->lang->mod_error_move_category, $this->lang->continue, "$this->self?a=topic&amp;t={$this->get['t']}");
			}

			if ($this->post['operation'] == 'lock') {
				$this->db->clone_row($this->pre . 'topics', 'topic_id', $this->get['t']);
				$newtopic = $this->db->insert_id();

				$this->db->query('UPDATE ' . $this->pre . 'topics SET topic_modes=' . ($topic['topic_modes'] | TOPIC_MOVED) . ', topic_moved=' . $newtopic . ' WHERE topic_id=' . $this->get['t'] . ' OR topic_moved=' . $this->get['t']);
			} else {
				$newtopic = $this->get['t'];
			}

			$this->db->query('UPDATE ' . $this->pre . 'topics SET topic_forum=' . $this->post['newforum'] . ' WHERE topic_id=' . $newtopic);
			$this->db->query('UPDATE ' . $this->pre . 'posts SET post_topic=' . $newtopic . ' WHERE post_topic=' . $this->get['t']);
			$this->db->query('UPDATE ' . $this->pre . 'votes SET vote_topic=' . $newtopic . ' WHERE vote_topic=' . $this->get['t']);
			$this->db->query('UPDATE ' . $this->pre . 'subscriptions SET subscription_item=' . $newtopic . ' WHERE subscription_item=' . $this->get['t'] . " AND subscription_type='topic'");

			$this->update_last_post($topic['topic_forum']);
			$this->update_last_post($this->post['newforum']);

			$this->update_counts($topic['topic_forum']);
			$this->update_counts($this->post['newforum']);

			$this->log_action('topic_move', $this->get['t'], $topic['topic_forum'], $this->post['newforum']);

			return $this->message($this->lang->mod_label_controls, $this->lang->mod_success_topic_move, $this->lang->continue, "{$this->self}?a=topic&amp;t={$newtopic}", "$this->self?a=topic&t={$newtopic}");
		}
	}

	/**
	 * Edits a post
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.0
	 * @return string message
	 **/
	function edit_post()
	{
		$this->tree($this->lang->mod_label_controls, $this->self . '?a=mod');
		$this->tree($this->lang->mod_label_post_edit);

		// Parameters check
		if (!isset($this->get['p'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_no_post,  $this->lang->continue, "javascript:history.go(-1)");
		}

		$this->get['p'] = intval($this->get['p']);
		$data = $this->db->fetch('
		SELECT
			p.post_text, p.post_author, p.post_emoticons, p.post_mbcode, p.post_topic, p.post_icon, p.post_time, t.topic_forum, t.topic_replies
		FROM
			' . $this->pre . 'posts p,
			' . $this->pre . 'topics t
		WHERE
			t.topic_id=p.post_topic AND
			p.post_id=' . $this->get['p']);

		// Existence check
		if (!isset($data['post_text'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_missing_post,  $this->lang->continue, "javascript:history.go(-1)");
		}

		// Permissions check
		$is_owner = $this->user['user_id'] == $data['post_author'];

		if (!$this->perms->auth('post_edit', $data['topic_forum']) && (!$is_owner || ($is_owner && !$this->perms->auth('post_edit_own', $data['topic_forum'])))) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_perm_post_edit, $this->lang->continue, "$this->self?a=topic&amp;t={$data['post_topic']}");
		}

		if (!isset($this->post['submit'])) {
			$emot_check = $data['post_emoticons'] ? ' checked' : null;
			$code_check = $data['post_mbcode'] ? ' checked' : null;
			$attached = null;
			$attached_data = null;
			$upload_error = null;

			$this->templater->add_templates('post');
			$this->lang->post();
			
			if (isset($this->post['post'])) {
				$data['post_text'] = stripslashes($this->post['post']);
			}
			
			// Handle attachment stuff
			if (!isset($this->post['attached_data'])) {
				$this->post['attached_data'] = $this->attachmentutil->build_attached_data($this->get['p']);
			}

			if ($this->perms->auth('post_attach', $data['topic_forum'])) {
				// Attach
				if (isset($this->post['attach'])) {
					$upload_error = $this->attachmentutil->attach_now($this->get['p'], $this->files['attach_upload'], $this->post['attached_data']);
				// Detach
				} elseif (isset($this->post['detach'])) {
					$this->attachmentutil->delete_now($this->get['p'], $this->post['attached'], $this->post['attached_data']);
				}

				$this->attachmentutil->getdata($attached, $attached_data, $this->post['attached_data']);
			}

			$quote     = $this->format($data['post_text'], FORMAT_HTMLCHARS);
			$msg_icons = $this->htmlwidgets->get_icons(($data['post_icon'] == '') ? -1 : $data['post_icon']);
			$clickable = $this->htmlwidgets->make_clickable();
			$posticons = eval($this->template('POST_MESSAGE_ICONS'));
			$smilies   = eval($this->template('POST_CLICKABLE_SMILIES'));

			$this->lang->mbcode(); // Load the mbcode values
			$mbcodeButtons = eval($this->template('MAIN_MBCODE'));

			if ($this->perms->auth('post_attach', $data['topic_forum'])) {
				if ($attached) {
					$remove_box = eval($this->template('POST_ATTACH_REMOVE'));
				} else {
					$remove_box = '';
				}

				$attach_box = eval($this->template('POST_ATTACH'));
			} else {
				$attach_box = null;
			}

			$post_box  = eval($this->template($this->post_box()));

			return eval($this->template('MOD_EDIT_POST'));
		} else {
			$emot = isset($this->post['emoticons']) ? 1 : 0;
			$code = isset($this->post['code']) ? 1 : 0;

			if ($code && !$this->bbcode->quote_check($this->post['post'])) {
				$code = 0;
			}

			$this->log_action('post_edit', $this->get['p']);
			$this->post['icon'] = isset($this->post['icon']) ? $this->post['icon'] : '';

			$this->db->query('UPDATE ' . $this->pre . 'posts SET post_text="' . $this->post['post'] . '", post_emoticons=' . $emot . ', post_mbcode=' . $code . ', post_edited_by="' . $this->user['user_name'] . '", post_edited_time=' . $this->time . ', post_icon="' . $this->post['icon'] . '" WHERE post_id=' . $this->get['p']);

			$jump = '&amp;p=' . $this->get['p'] . '#p' . $this->get['p'];

			return $this->message($this->lang->mod_label_controls, $this->lang->mod_success_post_edit, $this->lang->continue, "{$this->self}?a=topic&amp;t={$data['post_topic']}$jump", "$this->self?a=topic&t={$data['post_topic']}$jump");
		}
	}

	/**
	 * Edits a topic
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.0
	 * @return string message
	 **/
	function edit_topic()
	{
		$this->tree($this->lang->mod_label_controls, $this->self . '?a=mod');
		$this->tree($this->lang->mod_label_topic_edit);

		// Parameters check
		if (!isset($this->get['t'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_no_topic,  $this->lang->continue, "javascript:history.go(-1)");
		}

		$this->get['t'] = intval($this->get['t']);
		$topic = $this->db->fetch('SELECT topic_title, topic_description, topic_starter, topic_forum, topic_modes FROM ' . $this->pre . 'topics WHERE topic_id=' . $this->get['t']);

		// Existence check
		if (!isset($topic['topic_title'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_missing_topic,  $this->lang->continue, "javascript:history.go(-1)");
		}

		// Permissions check
		$is_owner = $this->user['user_id'] == $topic['topic_starter'];

		if (!$this->perms->auth('topic_edit', $topic['topic_forum']) && (!$is_owner || ($is_owner && !$this->perms->auth('topic_edit_own', $topic['topic_forum'])))) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_perm_topic_edit);
		}

		if (!isset($this->post['submit'])) {
			$topic['topic_title'] = $this->format($topic['topic_title'], FORMAT_HTMLCHARS);
			$topic['topic_description'] = $this->format($topic['topic_description'], FORMAT_HTMLCHARS);

			if ($this->perms->auth('topic_global')) {
				if ($topic['topic_modes'] & TOPIC_GLOBAL) {
					$checkGlob = ' checked=\'checked\'';
				} else {
					$checkGlob = '';
				}

				$global_topic = eval($this->template('MOD_EDIT_GLOBAL'));
			} else {
				$global_topic = '';
			}
 			return eval($this->template('MOD_EDIT_TOPIC'));
		} else {
			if ($this->perms->auth('topic_global')) {
				if (isset($this->post['global_topic']) && !($topic['topic_modes'] & TOPIC_GLOBAL)) {
					$topic['topic_modes'] |= TOPIC_GLOBAL;
				} elseif (!isset($this->post['global_topic']) && ($topic['topic_modes'] & TOPIC_GLOBAL)) {
					$topic['topic_modes'] ^= TOPIC_GLOBAL;
				}
			}

			$this->db->query("UPDATE {$this->pre}topics SET topic_title='{$this->post['title']}', topic_description='{$this->post['desc']}', topic_modes='{$topic['topic_modes']}' WHERE topic_id={$this->get['t']}");

			$this->log_action('topic_edit', $this->get['t']);

			return $this->message($this->lang->mod_label_controls, $this->lang->mod_success_topic_edit, $this->lang->continue, "{$this->self}?a=topic&amp;t={$this->get['t']}", "$this->self?a=topic&t={$this->get['t']}");
		}
	}

	/**
	 * Pins a topic
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.0
	 * @return string message
	 **/
	function pin_topic()
	{
		$this->tree($this->lang->mod_label_controls, $this->self . '?a=mod');
		$this->tree($this->lang->mod_label_topic_pin);

		// Parameters check
		if (!isset($this->get['t'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_no_topic,  $this->lang->continue, "javascript:history.go(-1)");
		}

		$this->get['t'] = intval($this->get['t']);
		$topic = $this->db->fetch('SELECT topic_modes, topic_starter, topic_forum FROM ' . $this->pre . 'topics WHERE topic_id=' . $this->get['t']);

		// Existence check
		if (!$topic) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_missing_topic,  $this->lang->continue, "javascript:history.go(-1)");
		}

		// Permissions check
		$is_owner = $this->user['user_id'] == $topic['topic_starter'];

		if (!($topic['topic_modes'] & TOPIC_PINNED)) {
			if (!$this->perms->auth('topic_pin', $topic['topic_forum']) && (!$is_owner || ($is_owner && !$this->perms->auth('topic_pin_own', $topic['topic_forum'])))) {
				return $this->message($this->lang->mod_label_controls, $this->lang->mod_perm_topic_pin, $this->lang->continue, "$this->self?a=topic&amp;t={$this->get['t']}");
			} else {
				$this->log_action('topic_pin', $this->get['t']);
				$this->pin($this->get['t'], $topic['topic_modes']);
			}
		} else {
			if (!$this->perms->auth('topic_unpin', $topic['topic_forum']) && (!$is_owner || ($is_owner && !$this->perms->auth('topic_unpin_own', $topic['topic_forum'])))) {
				return $this->message($this->lang->mod_label_controls, $this->lang->mod_perm_topic_unpin, $this->lang->continue, "$this->self?a=topic&amp;t={$this->get['t']}");
			} else {
				$this->log_action('topic_unpin', $this->get['t']);
				$this->unpin($this->get['t'], $topic['topic_modes']);
			}
		}

		header('Location: ' . $this->self . '?a=topic&t=' . $this->get['t']);
	}

	/**
	 * Locks a topic
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.0
	 * @return string message
	 **/
	function lock_topic()
	{
		$this->tree($this->lang->mod_label_controls, $this->self . '?a=mod');
		$this->tree($this->lang->mod_label_topic_lock);

		// Parameters check
		if (!isset($this->get['t'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_no_topic, $this->lang->continue, "javascript:history.go(-1)");
		}

		$this->get['t'] = intval($this->get['t']);
		$topic = $this->db->fetch('SELECT topic_modes, topic_starter, topic_forum FROM ' . $this->pre . 'topics WHERE topic_id=' . $this->get['t']);

		// Existence check
		if (!$topic) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_missing_topic, $this->lang->continue, "javascript:history.go(-1)");
		}

		// Permissions check
		$is_owner = $this->user['user_id'] == $topic['topic_starter'];

		if (!($topic['topic_modes'] & TOPIC_LOCKED)) {
			if (!$this->perms->auth('topic_lock', $topic['topic_forum']) && (!$is_owner || ($is_owner && !$this->perms->auth('topic_lock_own', $topic['topic_forum'])))) {
				return $this->message($this->lang->mod_label_controls, $this->lang->mod_perm_topic_lock, $this->lang->continue, "$this->self?a=topic&amp;t={$this->get['t']}");
			} else {
				$this->log_action('topic_lock', $this->get['t']);
				$lock = $this->lock($this->get['t'], $topic['topic_modes']);
			}
		} else {
			if (!$this->perms->auth('topic_unlock', $topic['topic_forum']) && (!$is_owner || ($is_owner && !$this->perms->auth('topic_unlock_own', $topic['topic_forum'])))) {
				return $this->message($this->lang->mod_label_controls, $this->lang->mod_perm_topic_unlock, $this->lang->continue, "$this->self?a=topic&amp;t={$this->get['t']}");
			} else {
				$this->log_action('topic_unlock', $this->get['t']);
				$lock = $this->unlock($this->get['t'], $topic['topic_modes']);
			}
		}

		header('Location: ' . $this->self . '?a=topic&t=' . $this->get['t']);
	}

	/**
	 * Deletes a post
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.0
	 * @return string message
	 **/
	function del_post()
	{
		$this->tree($this->lang->mod_label_controls, $this->self . '?a=mod');
		$this->tree($this->lang->mod_label_post_delete);

		// Parameters check
		if (!isset($this->get['p'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_no_post,  $this->lang->continue, "javascript:history.go(-1)");
		}

		$this->get['p'] = intval($this->get['p']);
		$post = $this->db->fetch('
		SELECT
			p.post_id, p.post_author, p.post_topic, p.post_time, t.topic_id, t.topic_forum
		FROM
			' . $this->pre . 'posts p,
			' . $this->pre . 'topics t
		WHERE
			p.post_id=' . $this->get['p'] . ' AND
			p.post_topic=t.topic_id');

		// Existence check
		if (!isset($post['post_id'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_missing_post,  $this->lang->continue, "javascript:history.go(-1)");
		}

		$first = $this->db->fetch('
		SELECT
			p.post_id
		FROM
			' . $this->pre . 'posts p,
			' . $this->pre . 'topics t
		WHERE
			p.post_topic=t.topic_id AND
			t.topic_id=' . $post['topic_id'] . '
		ORDER BY
			p.post_time
		LIMIT 1');

		if ($first['post_id'] == $this->get['p']) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_error_first_post);
		}

		// Permissions check
		$is_owner = $this->user['user_id'] == $post['post_author'];

		if (!$this->perms->auth('post_delete', $post['topic_forum']) && (!$is_owner || ($is_owner && !$this->perms->auth('post_delete_own', $post['topic_forum'])))) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_perm_post_delete, $this->lang->continue, "$this->self?a=topic&amp;t={$post['topic_id']}");
		}

		// Confirmation check
		if (!isset($this->get['confirm'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_confirm_post_delete, $this->lang->continue, "$this->self?a=mod&amp;s=del_post&amp;p={$this->get['p']}&amp;confirm=1");
		}

		$prev = $this->db->fetch("
		SELECT
		  MAX(p.post_id) AS prev_post
		FROM
		  {$this->pre}posts p
		WHERE
		  p.post_topic = {$post['post_topic']} AND
		  p.post_time < {$post['post_time']}");
		  
		$jump = '&amp;p=' . $prev['prev_post'] . '#p' . $prev['prev_post'];

		$this->delete_post($this->get['p']);
		$this->update_last_post($post['topic_forum']);
		$this->update_last_post_topic($post['topic_id']);

		$this->log_action('post_delete', $this->get['p']);

		return $this->message($this->lang->mod_label_controls, $this->lang->mod_success_post_delete, $this->lang->continue, "{$this->self}?a=topic&amp;t={$post['topic_id']}$jump", "$this->self?a=topic&t={$post['topic_id']}$jump");
	}

	/**
	 * Deletes a single topic
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.0
	 * @return string message
	 **/
	function del_topic()
	{
		$this->tree($this->lang->mod_label_controls, $this->self . '?a=mod');
		$this->tree($this->lang->mod_label_topic_delete);

		// Parameters check
		if (!isset($this->get['t'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_no_topic, $this->lang->continue, "javascript:history.go(-1)");
		}

		$this->get['t'] = intval($this->get['t']);
		$topic = $this->db->fetch('SELECT topic_id, topic_forum, topic_starter FROM ' . $this->pre . 'topics WHERE topic_id=' . $this->get['t']);

		// Existence check
		if (!isset($topic['topic_id'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_missing_topic, $this->lang->continue, "javascript:history.go(-1)");
		}

		// Permissions check
		$is_owner = $this->user['user_id'] == $topic['topic_starter'];

		if (!$this->perms->auth('topic_delete', $topic['topic_forum']) && (!$is_owner || ($is_owner && !$this->perms->auth('topic_delete_own', $topic['topic_forum'])))) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_perm_topic_delete, $this->lang->continue, "$this->self?a=topic&amp;t={$topic['topic_id']}");
		}

		// Confirmation check
		if (!isset($this->get['confirm'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_confirm_topic_delete, $this->lang->continue, "$this->self?a=mod&amp;s=del_topic&amp;t={$this->get['t']}&amp;confirm=1");
		}

		$this->delete_topic($this->get['t']);
		$this->update_last_post($topic['topic_forum']);
		$this->log_action('topic_delete', $this->get['t']);

		return $this->message($this->lang->mod_label_controls, $this->lang->mod_success_topic_delete, $this->lang->continue, "{$this->self}?a=forum&amp;f={$topic['topic_forum']}", "$this->self?a=forum&f={$topic['topic_forum']}");
	}

	/**
	 * Publish / UnPublish
	 *
	 * @author Jonathan West <jon@quicksilverforums.com>
	 * @since 1.2.0
	 * @return string message
	 **/
	function publish_topic()
	{
		$this->tree($this->lang->mod_label_controls, $this->self . '?a=mod');
		$this->tree($this->lang->mod_label_publish);

		// Parameters check
		if (!isset($this->get['t'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_no_topic,  $this->lang->continue, "javascript:history.go(-1)");
		}

		$this->get['t'] = intval($this->get['t']);
		$topic = $this->db->fetch('SELECT topic_modes, topic_forum FROM ' . $this->pre . 'topics WHERE topic_id=' . $this->get['t']);

		// Existence check
		if (!$topic) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_missing_topic,  $this->lang->continue, "javascript:history.go(-1)");
		}
		// Check permissions
		if (!$this->perms->auth('topic_publish', $topic['topic_forum'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_perm_publish, $this->lang->continue, "$this->self?a=topic&amp;t={$this->get['t']}");
		}
		
		if (!($topic['topic_modes'] & TOPIC_PUBLISH)) {
			$this->log_action('topic_publish', $this->get['t']);
			$this->publish($this->get['t'], $topic['topic_modes']);
		} else {
			$this->log_action('topic_unpublish', $this->get['t']);
			$this->unpublish($this->get['t'], $topic['topic_modes']);
		}

		header('Location: ' . $this->self . '?a=topic&t=' . $this->get['t']);
	}

	/**
	 * Splits a topic
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.1.0
	 * @return string message
	 **/
	function split_topic()
	{
		$this->tree($this->lang->mod_label_controls, $this->self . '?a=mod');
		$this->tree($this->lang->mod_label_topic_split);

		// Parameters check
		if (!isset($this->get['t']) || !isset($this->post['posttarget'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_no_topic, $this->lang->continue, "javascript:history.go(-1)");
		}

		$this->get['t'] = intval($this->get['t']);
		$topic = $this->db->fetch('SELECT topic_id, topic_forum, topic_starter, topic_title, topic_modes FROM ' . $this->pre . 'topics WHERE topic_id=' . $this->get['t']);

		// Existence check
		if (!isset($topic['topic_id'])) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_missing_topic, $this->lang->continue, "javascript:history.go(-1)");
		}

		// Permissions check
		$is_owner = $this->user['user_id'] == $topic['topic_starter'];

		if (!$this->perms->auth('topic_split', $topic['topic_forum']) && (!$is_owner || ($is_owner && !$this->perms->auth('topic_split_own', $topic['topic_forum'])))) {
			return $this->message($this->lang->mod_label_controls, $this->lang->mod_perm_topic_split, $this->lang->continue, "$this->self?a=topic&amp;t={$topic['topic_id']}");
		}

		if (!isset($this->post['submitsplit'])) {
			$posttarget = htmlspecialchars(serialize($this->post['posttarget']));

			$display[1] = in_array('1', $this->post['posttarget']) ? '' : 'display:none';
			$display[2] = in_array('2', $this->post['posttarget']) ? '' : 'display:none';
			$display[3] = in_array('3', $this->post['posttarget']) ? '' : 'display:none';
			$display[4] = in_array('4', $this->post['posttarget']) ? '' : 'display:none';

			$topic['topic_title'] = $this->format($topic['topic_title'], FORMAT_CENSOR | FORMAT_HTMLCHARS);
			return eval($this->template('MOD_SPLIT_TOPIC'));
		} else {
			$posttarget = unserialize(stripslashes($this->post['posttarget']));
			$where = array();
			$moved = 0;

			foreach ($posttarget as $post => $target)
			{
				if ($target) {
					if (!isset($where[$target])) {
						$where[$target] = array(-1, '');
					}

					$where[$target][0]++;
					$where[$target][1] .= " OR post_id=$post";

					$moved++;
				}
			}

			for ($x = 1; $x <= 4; $x++)
			{
				if (isset($where[$x])) {
					$this->db->clone_row($this->pre . 'topics', 'topic_id', $this->get['t']);
					$id = $this->db->insert_id();

					if( $topic['topic_modes'] & TOPIC_PUBLISH ) {
						$mode = TOPIC_PUBLISH;
					} else {
						$mode = 0;
					}
					$this->db->query("UPDATE {$this->pre}topics SET topic_title='{$this->post['topic'][$x]}', topic_replies={$where[$x][0]}, topic_views=0, topic_description='', topic_modes=$mode WHERE topic_id=$id");
					$this->db->query("UPDATE {$this->pre}posts SET post_topic=$id WHERE " . substr($where[$x][1], 4));

					$this->update_last_post_topic($id);
				}
			}

			$this->db->query("UPDATE {$this->pre}topics SET topic_replies=topic_replies-$moved WHERE topic_id={$this->get['t']}");

			$this->update_last_post_topic($this->get['t']);
			$this->update_last_post($topic['topic_forum']);
			$this->log_action('topic_split', $this->get['t']);

			return $this->message($this->lang->mod_label_controls, $this->lang->mod_success_split);
		}
	}

	/**
	 * Deletes a single topic
	 *
	 * @param int $t Topic ID
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return void
	 **/
	function delete_topic($t)
	{
		$posts = $this->db->query("
		SELECT
		  t.topic_forum, t.topic_id, a.attach_file, p.post_author, p.post_id, p.post_count
		FROM
		  ({$this->pre}topics t,
		  {$this->pre}posts p)
		LEFT JOIN {$this->pre}attach a ON p.post_id=a.attach_post
		WHERE
		  t.topic_id=$t AND
		  t.topic_id=p.post_topic");

		$deleted = -1;

		while ($post = $this->db->nqfetch($posts))
		{
			if ($post['post_count']) {
				$this->db->query('UPDATE ' . $this->pre . 'users SET user_posts=user_posts-1 WHERE user_id=' . $post['post_author']);
			}

			if ($post['attach_file']) {
				$this->db->query('DELETE FROM ' . $this->pre . 'attach WHERE attach_post=' . $post['post_id']);
				@unlink('./attachments/' . $post['attach_file']);
			}

			$deleted++;
		}

		$result = $this->db->fetch('SELECT topic_forum FROM ' . $this->pre . 'topics WHERE topic_id=' . $t);

		$this->db->query('DELETE FROM ' . $this->pre . 'votes WHERE vote_topic=' . $t);
		$this->db->query('DELETE FROM ' . $this->pre . 'topics WHERE topic_id=' . $t . ' OR topic_moved=' . $t);
		$this->db->query('DELETE FROM ' . $this->pre . 'posts WHERE post_topic=' . $t);

		$this->db->query("UPDATE {$this->pre}forums SET forum_topics=forum_topics-1, forum_replies=forum_replies-$deleted WHERE forum_id={$result['topic_forum']}");
	}

	/**
	 * Deletes a single post
	 *
	 * @param int $p Post ID
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return void
	 **/
	function delete_post($p)
	{
		$result = $this->db->fetch("
		SELECT
		  t.topic_forum, t.topic_id, a.attach_file, p.post_author, p.post_count
		FROM
		  ({$this->pre}topics t,
		  {$this->pre}posts p)
		LEFT JOIN {$this->pre}attach a ON p.post_id=a.attach_post
		WHERE
		  p.post_id=$p AND
		  t.topic_id=p.post_topic");

		$this->db->query('UPDATE ' . $this->pre . 'forums SET forum_replies=forum_replies-1 WHERE forum_id=' . $result['topic_forum']);
		$this->db->query('UPDATE ' . $this->pre . 'topics SET topic_replies=topic_replies-1 WHERE topic_id=' . $result['topic_id']);
		if ($result['post_count']) {
			$this->db->query('UPDATE ' . $this->pre . 'users SET user_posts=user_posts-1 WHERE user_id=' . $result['post_author']);
		}

		$this->db->query('DELETE FROM ' . $this->pre . 'posts WHERE post_id=' . $p);

		if ($result['attach_file']) {
			$this->db->query('DELETE FROM ' . $this->pre . 'attach WHERE attach_post=' . $p);
			@unlink('./attachments/' . $result['attach_file']);
		}
	}

	/**
	 * Locks a topic
	 *
	 * @param int $t Topic ID
	 * @param int $topic_modes Topic modes
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function lock($t, $topic_modes)
	{
		$this->db->query('UPDATE ' . $this->pre . 'topics SET topic_modes=' . ($topic_modes | TOPIC_LOCKED) . ' WHERE topic_id=' . $t);
	}

	/**
	 * Unlocks a topic
	 *
	 * @param int $t Topic ID
	 * @param int $topic_modes Topic modes
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function unlock($t, $topic_modes)
	{
		$this->db->query('UPDATE ' . $this->pre . 'topics SET topic_modes=' . ($topic_modes ^ TOPIC_LOCKED) . ' WHERE topic_id=' . $t);
	}

	/**
	 * Pins a topic
	 *
	 * @param int $t Topic ID
	 * @param int $topic_modes Topic modes
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function pin($t, $topic_modes)
	{
		$this->db->query('UPDATE ' . $this->pre . 'topics SET topic_modes=' . ($topic_modes | TOPIC_PINNED) . ' WHERE topic_id=' . $t);
	}

	/**
	 * Unpins a topic
	 *
	 * @param int $t Topic ID
	 * @param int $topic_modes Topic modes
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function unpin($t, $topic_modes)
	{
		$topic = $this->db->fetch('SELECT topic_forum FROM ' . $this->pre . 'topics WHERE topic_id=' . $t);

		$this->db->query('UPDATE ' . $this->pre . 'topics SET topic_modes=' . ($topic_modes ^ TOPIC_PINNED) . " WHERE topic_id=$t OR topic_moved=$t");
		$this->update_last_post($topic['topic_forum']);
	}

	/**
	 * Publishes a topic
	 *
	 * @param int $t Topic ID
	 * @param int $topic_modes Topic modes
	 * @since 1.2
	 **/
	function publish($t, $topic_modes)
	{
		$this->db->query('UPDATE ' . $this->pre . 'topics SET topic_modes=' . ($topic_modes | TOPIC_PUBLISH) . ' WHERE topic_id=' . $t);
	}

	/**
	 * Unpublishes a topic
	 *
	 * @param int $t Topic ID
	 * @param int $topic_modes Topic modes
	 * @since 1.2
	 **/
	function unpublish($t, $topic_modes)
	{
		$this->db->query('UPDATE ' . $this->pre . 'topics SET topic_modes=' . ($topic_modes ^ TOPIC_PUBLISH) . ' WHERE topic_id=' . $t);
	}

	/**
	 * Updates the post counts of a forum
	 *
	 * @param int $f Forum ID
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return void
	 **/
	function update_counts($f)
	{
		$post  = $this->db->fetch('SELECT COUNT(p.post_id) as count FROM ' . $this->pre . 'posts p, ' . $this->pre . 'topics t WHERE p.post_topic=t.topic_id AND t.topic_forum=' . $f);
		$topic = $this->db->fetch('SELECT COUNT(topic_id) as count FROM ' . $this->pre . 'topics WHERE NOT(topic_modes & ' . TOPIC_MOVED . ') AND topic_forum=' . $f);

		if (!isset($post['count'])) {
			$post['count'] = 0;
		}

		if (!isset($topic['count'])) {
			$topic['count'] = 0;
		}

		$this->db->query('UPDATE ' . $this->pre . 'forums SET forum_topics=' . $topic['count'] . ', forum_replies=' . ($post['count'] - $topic['count']) . ' WHERE forum_id=' . $f);
	}

	/**
	 * Updates the last post of a forum
	 *
	 * @param int $f Forum ID
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return void
	 **/
	function update_last_post($f)
	{
		$post = $this->db->fetch('
		SELECT p.post_id
		FROM '
		    . $this->pre . 'posts p, '
		    . $this->pre . 'topics t
		WHERE
		    t.topic_id=p.post_topic AND
		    t.topic_forum=' . $f . '
		ORDER BY
		    t.topic_edited DESC, p.post_id DESC
		LIMIT 1');

		if (!isset($post['post_id'])) {
			$post['post_id'] = 0;
		}

		$this->db->query('UPDATE ' . $this->pre . 'forums SET forum_lastpost=' . $post['post_id'] . ' WHERE forum_id=' . $f);
	}

	/**
	 * Updates the last post of a topic
	 *
	 * @param int $t Topic ID
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.1.1
	 * @return void
	 **/
	function update_last_post_topic($t)
	{
		$last = $this->db->fetch("
		SELECT
			p.post_author, p.post_time
		FROM
			{$this->pre}posts p,
			{$this->pre}topics t
		WHERE
			p.post_topic=t.topic_id AND
			t.topic_id=$t
		ORDER BY
			p.post_time DESC
		LIMIT 1");

		$this->db->query("UPDATE {$this->pre}topics SET topic_last_poster={$last['post_author']}, topic_edited={$last['post_time']} WHERE topic_id=$t");
	}

	/**
	 * Adds a moderator log entry
	 *
	 * @param string $action The action that was taken
	 * @param int $data1 The data acted upon (post ID, forum ID, etc)
	 * @param int $data2 Additional data, if necessary
	 * @param int $data3 Additional data, if necessary
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.1.0
	 * @return void
	 **/
	function log_action($action, $data1, $data2 = 0, $data3 = 0)
	{
		$this->db->query("INSERT INTO {$this->pre}logs (log_user, log_time, log_action, log_data1, log_data2, log_data3) VALUES ({$this->user['user_id']}, $this->time, '$action', $data1, $data2, $data3)");
	}
}
?>
