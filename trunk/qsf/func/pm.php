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
 * User's system for sending and receiving personal messages
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class pm extends qsfglobal
{
	function execute()
	{
		$this->set_title($this->lang->pm_messenger);
		$this->tree($this->lang->pm_messenger);

		if ($this->perms->is_guest) {
			return $this->message($this->lang->pm_personal, sprintf($this->lang->pm_guest, $this->self, $this->self));
		}

		if (!isset($this->get['s'])) {
			$this->get['s'] = null;
		}

		switch($this->get['s'])
		{
		case 'send':
			return $this->send();
			break;

		case 'view':
			return $this->view();
			break;

		case 'delete':
			return $this->delete_pm();
			break;

		case 'clear':
			return $this->clear();
			break;

		default:
			$this->get['s'] = null;
			return $this->folder();
			break;
		}
	}

	function folder()
	{
		$this->get['f'] = isset($this->get['f']) ? intval($this->get['f']) : 0;

		$folderjump = $this->select_folder($this->get['f']);

		if (!$this->get['f']) {
			$foldername = $this->lang->pm_folder_inbox;
		} else {
			$foldername = $this->lang->pm_folder_sentbox;
		}

		if (!isset($this->post['submit'])) {
			$messages = null;
			$query	  = $this->db->query("
			SELECT
			  p.*, m.user_name
			FROM
			  {$this->pre}pmsystem p,
			  {$this->pre}users m
			WHERE
			  p.pm_to = {$this->user['user_id']} AND
			  p.pm_folder = {$this->get['f']} AND
			  m.user_id = p.pm_from
			ORDER BY
			  p.pm_time DESC");

			while ($pm = $this->db->nqfetch($query))
			{
				if (!$pm['pm_read']) {
					$pm['pm_read'] = 'new';
				} else {
					$pm['pm_read'] = null;
				}

				$pm['pm_title'] = $this->format($pm['pm_title'], FORMAT_HTMLCHARS | FORMAT_CENSOR);
				$pm['pm_message'] = $this->format($pm['pm_message'], FORMAT_HTMLCHARS | FORMAT_CENSOR);
				$pm['pm_time']  = $this->mbdate(DATE_LONG, $pm['pm_time']);

				// aWest's PM Preview mod
				$preview = ((strlen($pm['pm_message']) > 200)) ? substr($pm['pm_message'], 0, 197) . '...' : $pm['pm_message']);
				$messages .= eval($this->template('PM_FOLDER_MESSAGE'));
			}
		} else {
			if (isset($this->post['delete'])) {
				$sql = array();

				foreach ($this->post['delete'] as $id => $true)
				{
					$sql[] = intval($id);
				}

				$sql = implode(', ', $sql);

				$this->db->query("DELETE FROM {$this->pre}pmsystem WHERE pm_id IN ($sql)");
			}

			return $this->message($this->lang->pm_personal_msging, $this->lang->pm_deleted_all);
		}

		if (!$messages) {
			$messages = eval($this->template('PM_NO_MESSAGES'));
		}

		return eval($this->template('PM_FOLDER'));
	}

	function send()
	{
		if (!isset($this->post['submit'])) {
			$to    = null;
			$title = null;
			$msg   = null;
			$preview = '';

			if (isset($this->post['preview'])) {
				$preview_text = stripslashes($this->post['message']);
				$msg = $this->format($preview_text, FORMAT_HTMLCHARS);
				$preview_text = $this->format($preview_text, FORMAT_BREAKS | FORMAT_CENSOR | FORMAT_MBCODE | FORMAT_EMOTICONS);

				$to = $this->format(stripslashes($this->post['to']), FORMAT_HTMLCHARS);
				$title = $this->format(stripslashes($this->post['title']), FORMAT_HTMLCHARS | FORMAT_CENSOR);
				$preview_title = $title;

				$preview = eval($this->template('PM_PREVIEW'));
			} else {
				if (!isset($this->get['re'])) {
					if (isset($this->get['to'])) {
						$this->get['to'] = intval($this->get['to']);

						$query = $this->db->fetch("SELECT user_name FROM {$this->pre}users WHERE user_id={$this->get['to']}");

						if (!isset($query['user_name']) || ($this->get['to'] == USER_GUEST_UID)) {
							return $this->message($this->lang->pm_personal_msging, $this->lang->pm_no_member);
						}

						$to = $query['user_name'];
					}
				} else {
					$this->get['re'] = intval($this->get['re']);
					$reply = $this->db->fetch('SELECT p.pm_to, p.pm_title, p.pm_message, m.user_name FROM ' . $this->pre . 'pmsystem p, ' . $this->pre . 'users m WHERE p.pm_id=' . $this->get['re'] . ' AND p.pm_from=m.user_id');

					if ($reply['pm_to'] == $this->user['user_id']) {
						$to    = $reply['user_name'];
						$title = $this->format($reply['pm_title'], FORMAT_HTMLCHARS | FORMAT_CENSOR);
						if (strpos($title, 'Re:') === false) {
							$title = 'Re: ' . $title;
						}
						$msg   = '[quote]' . $this->format($reply['pm_message'], FORMAT_HTMLCHARS | FORMAT_CENSOR) . "[/quote]\n\n";
					}
				}
			}
			$clickable = $this->htmlwidgets->make_clickable();
			$this->templater->add_templates('post');
			$this->lang->post();
			$smilies   = eval($this->template('POST_CLICKABLE_SMILIES'));

			$this->lang->mbcode(); // Load the mbcode values
			$mbcodeButtons = eval($this->template('MAIN_MBCODE'));

			return eval($this->template('PM_SEND'));
		} else {
			if (!$this->perms->auth('pm_noflood') && ($this->user['user_lastpm'] > ($this->time - $this->sets['flood_time_pm']))) {
				return $this->message($this->lang->pm_personal_msging, sprintf($this->lang->pm_flood, $this->sets['flood_time_pm']));
			}

			if (empty($this->post['to']) || empty($this->post['message'])) {
				return $this->message($this->lang->pm_personal_msging, $this->lang->pm_fields);
			}

			if (empty($this->post['title'])) {
				$this->post['title'] = $this->lang->pm_no_title;
			}

			$users = explode(';', $this->post['to']);
			$bad_name = array();
			$bad_pm = array();
			$ok_pm = array();

			foreach ($users as $username)
			{
				$username = str_replace('\\', '&#092;', $this->format(stripslashes(trim($username)), FORMAT_HTMLCHARS | FORMAT_CENSOR));
				$who = $this->db->fetch("SELECT user_id, user_pm, user_name FROM {$this->pre}users WHERE REPLACE(LOWER(user_name), ' ', '')='" . str_replace(' ', '', strtolower($username)) . '\' AND user_id != ' . USER_GUEST_UID . ' LIMIT 1');

				if (!isset($who['user_id'])) {
					$bad_name[] = $username;
					continue;
				}

				if (!$who['user_pm']) {
					$bad_pm[] = $who['user_name'];
					continue;
				}

				$ok_pm[] = $who['user_id'];

				$this->db->query("INSERT INTO {$this->pre}pmsystem (pm_to, pm_from, pm_ip, pm_title, pm_time, pm_message, pm_folder) VALUES ({$who['user_id']}, {$this->user['user_id']}, INET_ATON('$this->ip'), '{$this->post['title']}', $this->time, '{$this->post['message']}', 0)");
			}

			$this->db->query("INSERT INTO {$this->pre}pmsystem (pm_to, pm_from, pm_ip, pm_bcc, pm_title, pm_time, pm_message, pm_folder, pm_read) VALUES ({$this->user['user_id']}, {$this->user['user_id']}, INET_ATON('$this->ip'), '" . implode(';', $ok_pm) . "', '{$this->post['title']}', $this->time, '{$this->post['message']}', 1, 1)");
			$this->db->query("UPDATE {$this->pre}users SET user_lastpm='$this->time' WHERE user_id='{$this->user['user_id']}'");

			if ($bad_name || $bad_pm) {
				return $this->message($this->lang->pm_personal_msging, sprintf($this->lang->pm_error, implode('; ', $bad_name), implode('; ', $bad_pm)));
			} else {
				return $this->message($this->lang->pm_personal_msging, $this->lang->pm_success);
			}
		}
	}

	function view()
	{
		if (!isset($this->get['m'])) {
			return $this->message($this->lang->pm_personal_msging, $this->lang->pm_no_number);
		}

		$this->get['m'] = intval($this->get['m']);

		$pm = $this->db->fetch("
		SELECT
		  p.*,
		  m.user_name, m.user_signature, g.group_name, m.user_posts, m.user_joined, m.user_title, m.user_avatar, m.user_avatar_type, m.user_avatar_width, m.user_avatar_height, m.user_active,
		  a.active_time
		FROM
		  ({$this->pre}pmsystem p, {$this->pre}users m, {$this->pre}groups g)
		LEFT JOIN {$this->pre}active a ON a.active_id=m.user_id
		WHERE
		  p.pm_id = {$this->get['m']} AND
		  m.user_id = p.pm_from AND
		  m.user_group = g.group_id");

		if (!$pm) {
			return $this->message($this->lang->pm_personal_msging, $this->lang->pm_no_number);
		}

		if (!$this->checkOwner($this->get['m'])) {
			return $this->message($this->lang->pm_personal_msging, $this->lang->pm_noview);
		}

		if (($pm['user_avatar_type'] != 'none') && $this->user['user_view_avatars']) {
			if (substr($pm['user_avatar'], -4) != '.swf') {
				$pm['user_avatar'] = "<img src='{$pm['user_avatar']}' alt='{$this->lang->pm_avatar}' width='{$pm['user_avatar_width']}' height='{$pm['user_avatar_height']}' /><br /><br />";
			} else {
				$pm['user_avatar'] = "<object width='{$pm['user_avatar_width']}' height='{$pm['user_avatar_height']}' classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000'><param name='movie' value='{$pm['user_avatar']}'><param name='play' value='true'><param name='loop' value='true'><param name='quality' value='high'><embed src='{$pm['user_avatar']}' width='{$pm['user_avatar_width']}' height='{$pm['user_avatar_height']}' play='true' loop='true' quality='high'></embed></object><br /><br />";
			}
		} else {
			$pm['user_avatar'] = null;
		}

		if ($pm['user_signature'] && $this->user['user_view_signatures']) {
			$pm['user_signature'] = '.........................<br />' . $this->format($pm['user_signature'], FORMAT_CENSOR | FORMAT_HTMLCHARS | FORMAT_BREAKS | FORMAT_MBCODE | FORMAT_EMOTICONS);
		} else {
			$pm['user_signature'] = null;
		}

		$pm['pm_title']    = $this->format($pm['pm_title'], FORMAT_HTMLCHARS | FORMAT_CENSOR);
		$pm['pm_message']  = $this->format($pm['pm_message'], FORMAT_HTMLCHARS | FORMAT_BREAKS | FORMAT_CENSOR | FORMAT_MBCODE | FORMAT_EMOTICONS);
		$pm['pm_time']     = $this->mbdate(DATE_LONG, $pm['pm_time']);
		$pm['user_joined'] = $this->mbdate(DATE_ONLY_LONG, $pm['user_joined']);

		$online = ($pm['active_time'] && ($pm['active_time'] > ($this->time - 900)) && $pm['user_active']);

		$recipients = null;
		$foldername = $this->lang->pm_folder_inbox;

		if ($pm['pm_folder'] == 1) {
			$names = $this->db->query("SELECT user_name FROM {$this->pre}users WHERE user_id=" . implode(' OR user_id=', explode(';', $pm['pm_bcc'])));

			while ($name = $this->db->nqfetch($names))
			{
				$recipients .= $name['user_name'] . '; ';
			}

			$recipients = substr($recipients, 0, -2);
			$foldername = $this->lang->pm_folder_sentbox;
		}

		$this->db->query("UPDATE {$this->pre}pmsystem SET pm_read=1 WHERE pm_id={$this->get['m']}");

		return eval($this->template('PM_VIEW'));
	}

	function delete_pm()
	{
		if (!isset($this->get['m'])) {
			return $this->message($this->lang->pm_personal_msging, $this->lang->pm_no_number);
		}
		$this->get['m'] = intval($this->get['m']);

		if (!$this->checkOwner($this->get['m'])) {
			return $this->message($this->lang->pm_personal_msging, $this->lang->pm_cant_del);
		}

		if (!isset($this->get['confirm'])) {
			return $this->message($this->lang->pm_personal_msging, $this->lang->pm_sure_del, $this->lang->continue, "$this->self?a=pm&amp;s=delete&amp;m={$this->get['m']}&amp;confirm=1");
		} else {
			$query = $this->db->query("DELETE FROM {$this->pre}pmsystem WHERE pm_to={$this->user['user_id']} AND pm_id={$this->get['m']}");
			return $this->message($this->lang->pm_personal_msging, $this->lang->pm_deleted);
		}
	}

	function clear()
	{
		if (!isset($this->get['f'])) {
			return $this->message($this->lang->pm_personal_msging, $this->lang->pm_no_folder);
		}

		$this->get['f'] = intval($this->get['f']);

		if (!isset($this->get['confirm'])) {
			return $this->message($this->lang->pm_personal_msging, $this->lang->pm_sure_delall, $this->lang->continue, "$this->self?a=pm&amp;s=clear&amp;f={$this->get['f']}&amp;confirm=1");
		} else {
			$query = $this->db->query("DELETE FROM {$this->pre}pmsystem WHERE pm_to={$this->user['user_id']} AND pm_folder={$this->get['f']}");
			return $this->message($this->lang->pm_personal_msging, $this->lang->pm_deleted_all);
		}
	}

	function checkOwner($id)
	{
		$data = $this->db->fetch("SELECT pm_to FROM {$this->pre}pmsystem WHERE pm_id=$id");
		return ($data['pm_to'] == $this->user['user_id']);
	}

	function select_folder($folder)
	{
		return "<option value='0'" . (($folder == 0) ? ' selected=\'selected\'' : '') . ">{$this->lang->pm_folder_inbox} (" . sprintf($this->lang->pm_folder_new, $this->get_messages(false, 0)) . ")</option>
		<option value='1'" . (($folder == 1) ? ' selected=\'selected\'' : '') . ">{$this->lang->pm_folder_sentbox}</option>";
	}
}
?>
