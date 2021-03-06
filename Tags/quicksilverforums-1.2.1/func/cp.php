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
 * User Control Panel
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class cp extends qsfglobal
{
	function execute()
	{
		if (!isset($this->get['s'])) {
			$this->get['s'] = null;
		}

		if ($this->perms->is_guest) {
			return $this->message($this->lang->cp_cp, $this->lang->cp_login_first);
		}

		$class['avatar']  = 'tablelight';
		$class['cpass']   = 'tablelight';
		$class['prefs']   = 'tablelight';
		$class['profile'] = 'tablelight';
		$class['subs']    = 'tablelight';
		$class['sig']     = 'tablelight';

		switch($this->get['s'])
		{
		case 'cpass':
			$class['cpass'] = 'tabledark';
			$control_page = $this->edit_pass();
			break;

		case 'profile':
			$class['profile'] = 'tabledark';
			$control_page = $this->edit_profile();
			break;

		case 'avatar':
			$class['avatar'] = 'tabledark';
			$control_page = $this->edit_avatar();
			break;

		case 'prefs':
			$class['prefs'] = 'tabledark';
			$control_page = $this->edit_prefs();
			break;

		case 'subs':
			$class['subs'] = 'tabledark';
			$control_page = $this->edit_subs();
			break;

		case 'sig':
			$class['sig'] = 'tabledark';
			$control_page = $this->edit_sig();
			break;

		case 'addsub':
			$control_page = $this->add_sub();
			break;

		default:
			$this->set_title($this->lang->cp_cp);
			$this->tree($this->lang->cp_cp);

			$this->get['s'] = null;
			$control_page = eval($this->template('CP_HOME'));
		}

		return eval($this->template('CP_MAIN'));
	}

	function check_pass($passA, $passB, $old_pass)
	{
		if (md5($old_pass) != $this->user['user_password']) {
			return PASS_NOT_VERIFIED;
		}

		if (!preg_match('/[a-z0-9_\- ]+/i', $passA)) {
			return PASS_INVALID;
		}

		if ($passA != $passB) {
			return PASS_NO_MATCH;
		}

		return PASS_SUCCESS;
	}

	function edit_pass()
	{
		$this->set_title($this->lang->cp_changing_pass);
		$this->tree($this->lang->cp_cp, $this->self . '?a=cp');
		$this->tree($this->lang->cp_changing_pass);

		if (!isset($this->post['submit'])) {
			return eval($this->template('CP_PASS'));
		} else {
			$result = $this->check_pass($this->post['passA'], $this->post['passB'], $this->post['old_pass']);

			switch($result)
			{
			case PASS_NOT_VERIFIED:
				return $this->message($this->lang->cp_changing_pass, $this->lang->cp_old_notmatch);
				break;

			case PASS_INVALID:
				return $this->message($this->lang->cp_changing_pass, $this->lang->cp_pass_notvaid);
				break;

			case PASS_NO_MATCH:
				return $this->message($this->lang->cp_changing_pass, $this->lang->cp_new_notmatch);
				break;

			case PASS_SUCCESS:
				$hashed_pass = md5($this->post['passA']);
				$this->db->query('UPDATE ' . $this->pre . 'users SET user_password=\'' . $hashed_pass . '\' WHERE user_id=' . $this->user['user_id']);

				setcookie($this->sets['cookie_prefix'] . 'pass', $hashed_pass, $this->time + $this->sets['logintime'], $this->sets['cookie_path']);
				$_SESSION['pass'] = md5($hashed_pass . stripslashes($this->ip));
				$this->user['user_password'] = $hashed_pass;

				return $this->message($this->lang->cp_changing_pass, sprintf($this->lang->cp_valided, $this->self));
				break;
			}
		}
	}

	function edit_prefs()
	{
		$this->set_title($this->lang->cp_preferences);
		$this->tree($this->lang->cp_cp, $this->self . '?a=cp');
		$this->tree($this->lang->cp_preferences);

		if (!isset($this->post['submit'])) {
			$ViewAvCheck    = $this->user['user_view_avatars']   ? ' checked=\'checked\'' : null;
			$ViewSiCheck    = $this->user['user_view_signatures']  ? ' checked=\'checked\'' : null;
			$ViewEmCheck    = $this->user['user_view_emoticons'] ? ' checked=\'checked\'' : null;
			$user_email_showCheck = $this->user['user_email_show'] ? ' checked=\'checked\'' : null;
			$EmailFormCheck = $this->user['user_email_form'] ? ' checked=\'checked\'' : null;
			$user_pmCheck   = $this->user['user_pm'] ? ' checked=\'checked\'' : null;
			$active_check   = $this->user['user_active'] ? ' checked=\'checked\'' : null;

			$time_list  = $this->htmlwidgets->select_timezones($this->user['user_timezone']);
			$skin_list  = $this->htmlwidgets->select_skins($this->skin);
			$lang_list  = $this->htmlwidgets->select_langs($this->user['user_language']);

			$current_time = sprintf($this->lang->cp_current_time, $this->mbdate(DATE_TIME));

			return eval($this->template('CP_PREFS'));
		} else {
			if (!isset($this->post['user_view_avatars'])) {
				$this->post['user_view_avatars'] = 0;
			}

			if (!isset($this->post['user_view_signatures'])) {
				$this->post['user_view_signatures'] = 0;
			}

			if (!isset($this->post['user_view_emoticons'])) {
				$this->post['user_view_emoticons'] = 0;
			}

			if (!isset($this->post['user_email_show'])) {
				$this->post['user_email_show'] = 0;
			}

			if (!isset($this->post['user_email_form'])) {
				$this->post['user_email_form'] = 0;
			}

			if (!isset($this->post['user_pm'])) {
				$this->post['user_pm'] = 0;
			}

			if (!isset($this->post['user_active'])) {
				$this->post['user_active'] = 0;
			}

			$this->post['user_language'] = preg_replace('/[^a-zA-Z0-9\-]/', '', $this->post['user_language']);

			$this->db->query('
			UPDATE ' . $this->pre . 'users SET
			  user_view_avatars=' . intval($this->post['user_view_avatars']) . ',
			  user_view_signatures=' . intval($this->post['user_view_signatures']) . ',
			  user_view_emoticons=' . intval($this->post['user_view_emoticons']) . ',
			  user_email_show=' . intval($this->post['user_email_show']) . ',
			  user_email_form=' . intval($this->post['user_email_form']) . ',
			  user_active=' . intval($this->post['user_active']) . ',
			  user_pm=' . intval($this->post['user_pm']) . ',
			  user_timezone="' . $this->post['user_timezone'] . '",
			  user_skin="' . $this->post['user_skin'] . '",
			  user_language="' . $this->post['user_language'] . '"
			WHERE user_id=' . $this->user['user_id']);

			return $this->message($this->lang->cp_updated_prefs, $this->lang->cp_been_updated_prefs);
		}
	}

	function edit_profile()
	{
		$this->set_title($this->lang->cp_editing_profile);
		$this->tree($this->lang->cp_cp, $this->self . '?a=cp');
		$this->tree($this->lang->cp_editing_profile);

		if (!isset($this->post['submit'])) {
			list($year, $mon, $day) = explode('-', $this->user['user_birthday']);

			$day_list   = $this->htmlwidgets->select_days($day);
			$month_list = $this->htmlwidgets->select_months($mon);
			$year_list  = $this->htmlwidgets->select_years($year);

			if (!$this->user['user_icq']) {
				$this->user['user_icq'] = null;
			}

			return eval($this->template('CP_PROFILE'));
		} else {
			$this->post['Newuser_name'] = str_replace('\\', '&#092;', $this->format(stripslashes($this->post['Newuser_name']), FORMAT_HTMLCHARS | FORMAT_CENSOR));

			if ($this->db->fetch("SELECT user_id FROM {$this->pre}users WHERE REPLACE(LOWER(user_name), ' ', '')='{$this->post['Newuser_name']}' AND user_id != {$this->user['user_id']}")) {
				return $this->message($this->lang->cp_err_updating, $this->lang->cp_user_exists);
			}

			if (strtolower(str_replace(' ', '', $this->user['user_name'])) != strtolower(str_replace(' ', '', $this->post['Newuser_name']))) {
				return $this->message($this->lang->cp_err_updating, $this->lang->cp_must_orig);
			}

			if (strlen($this->post['Newuser_name']) > 32) {
				return $this->message($this->lang->cp_err_updating, $this->lang->cp_less_charac);
			}

			$temp_email = stripslashes($this->post['user_email']);
			if (!$this->validator->validate($temp_email, TYPE_EMAIL)) {
				return $this->message($this->lang->cp_err_updating, $this->lang->cp_email_invaid);
			}

			if ($this->db->fetch('SELECT user_email FROM ' . $this->pre . 'users WHERE user_email="' . $this->post['user_email'] . '" AND user_id != ' . $this->user['user_id'])) {
				return $this->message($this->lang->cp_err_updating, $this->lang->cp_already_member);
			}

			if (!empty($this->post['user_homepage']) && (substr($this->post['user_homepage'], 0, 7) != 'http://')) {
				$this->post['user_homepage'] = 'http://' . $this->post['user_homepage'];
			}

			if (strlen($this->post['day']) == 1) {
				$this->post['day'] = '0' . $this->post['day'];
			}

			if (strlen($this->post['month']) == 1) {
				$this->post['month'] = '0' . $this->post['month'];
			}

			$user_birthday = $this->post['year'] . '-' . $this->post['month'] . '-' . $this->post['day'];

			if (!checkdate($this->post['month'], $this->post['day'], $this->post['year']) && ($user_birthday != '0000-00-00')) {
				return $this->message($this->lang->cp_err_updating, sprintf($this->lang->cp_not_exist, $user_birthday));
			}

			$this->post['user_homepage']  = $this->format($this->post['user_homepage'], FORMAT_HTMLCHARS);
			$this->post['user_location']  = $this->format($this->post['user_location'], FORMAT_HTMLCHARS);
			$this->post['user_interests'] = $this->format($this->post['user_interests'], FORMAT_HTMLCHARS);
			$this->post['user_aim']       = $this->format($this->post['user_aim'], FORMAT_HTMLCHARS);
			$this->post['user_msn']       = $this->format($this->post['user_msn'], FORMAT_HTMLCHARS);
			$this->post['user_yahoo']     = $this->format($this->post['user_yahoo'], FORMAT_HTMLCHARS);
			$this->post['user_gtalk']     = $this->format($this->post['user_gtalk'], FORMAT_HTMLCHARS);
			if ($this->perms->auth('is_admin')) {
				$query = $this->db->query("SELECT membertitle_title FROM {$this->pre}membertitles");
				if (!isset($this->post['user_title']) || $this->post['user_title'] == '' ) {
					$usertitle = '';
					$custom_title = 0;
				} else {
					$usertitle = $this->format($this->post['user_title'], FORMAT_HTMLCHARS);
					$custom_title = 1;
				}

				while ($u = $this->db->nqfetch($query))
				{
					$utitle = $u['membertitle_title'];
					if (strcmp($utitle,$this->post['user_title'])==0) {
						$custom_title = 0;
						$usertitle = $utitle;
						break;
					}
				}
			} else {
				$usertitle = $this->user['user_title'];
				$custom_title = $this->user['user_title_custom'];
			}
			$this->post['user_icq']       = intval($this->post['user_icq']);

			$this->db->query('
			UPDATE ' . $this->pre . 'users SET
			  user_email="' . $this->post['user_email'] . '",
			  user_birthday="' . $user_birthday . '",
			  user_homepage="' . $this->post['user_homepage'] . '",
			  user_location ="' . $this->post['user_location'] . '",
			  user_interests="' . $this->post['user_interests'] . '",
			  user_icq=' . intval($this->post['user_icq']) . ',
			  user_msn="' . $this->post['user_msn'] . '",
			  user_aim="' . $this->post['user_aim'] . '",
			  user_yahoo="' . $this->post['user_yahoo'] . '",
			  user_gtalk="' . $this->post['user_gtalk'] . '",
			  user_title="' . $usertitle . '",
			  user_title_custom="' . $custom_title . '",
			  user_name="' . $this->post['Newuser_name'] . '"
			WHERE user_id=' . $this->user['user_id']);

			if ($this->post['Newuser_name'] != $this->user['user_name']) {
				$this->db->query('UPDATE ' . $this->pre . 'posts SET post_edited_by="' . $this->post['Newuser_name'] . '" WHERE post_edited_by="' . $this->user['user_name'] . '"');
			}

			return $this->message($this->lang->cp_updated, $this->lang->cp_been_updated);
		}
	}

	function edit_avatar()
	{
		$this->set_title($this->lang->cp_editing_avatar);
		$this->tree($this->lang->cp_cp, $this->self . '?a=cp');
		$this->tree($this->lang->cp_editing_avatar);

		if (!isset($this->post['submit'])) {
			$avatar_list = $this->htmlwidgets->select_avatars($this->user['user_avatar']);

			if (empty($this->user['user_avatar'])) {
				$this->user['user_avatar']   = "./skins/{$this->skin}/images/noavatar.png";
				$this->user['user_avatar_width']  = 64;
				$this->user['user_avatar_height'] = 64;
			}

			$checks[0] = ($this->user['user_avatar_type'] == 'local') ? ' checked=\'checked\'' : null;
			$checks[1] = ($this->user['user_avatar_type'] == 'url') ? ' checked=\'checked\'' : null;
			$checks[2] = ($this->user['user_avatar_type'] == 'uploaded') ? ' checked=\'checked\'' : null;
			$checks[3] = ($this->user['user_avatar_type'] == 'none') ? ' checked=\'checked\'' : null;

			// In the HTML 'uploaded' is called 'use_uploaded'
			$init = ($this->user['user_avatar_type'] == 'uploaded') ? 'use_uploaded' : null;

			$avatar_url = ($this->user['user_avatar_type'] == 'url') ? $this->user['user_avatar'] : null;

			return eval($this->template('CP_AVATAR'));
		} else {
			$this->post['user_avatar_width'] = intval($this->post['user_avatar_width']);
			$this->post['user_avatar_height'] = intval($this->post['user_avatar_height']);

			if ($this->post['user_avatar_width'] < 1) {
				$this->post['user_avatar_width'] = 1;
			}

			if ($this->post['user_avatar_height'] < 1) {
				$this->post['user_avatar_height'] = 1;
			}

			switch($this->post['user_avatar_type'])
			{
			case 'local':
				if (!isset($this->post['avatar_local'])) {
					return $this->message($this->lang->cp_err_avatar, $this->lang->cp_avatar_must_select);
				}

				$avatar = trim(addslashes($this->post['avatar_local']));
				$type = 'local';
				@unlink("./avatars/uploaded/{$this->user['user_id']}.avtr");
				break;

			case 'url':
				if (($this->post['user_avatar_width'] > $this->sets['avatar_width']) || ($this->post['user_avatar_width'] > $this->sets['avatar_height'])) {
					return $this->message($this->lang->cp_err_avatar, sprintf($this->lang->cp_size_max, $this->sets['avatar_width'], $this->sets['avatar_height']));
				}

				if (!preg_match('/\.(gif|jpg|jpeg|png|swf)$/i', $this->post['avatar_url'])) {
					return $this->message($this->lang->cp_err_avatar, $this->lang->cp_file_type);
				}

				if ((strtolower(substr($this->post['avatar_url'], 0, 4)) == '.swf') && !$this->sets['flash_avs']) {
					return $this->message($this->lang->cp_err_avatar, $this->lang->cp_no_flash);
				}

				$avatar = $this->format(trim($this->post['avatar_url']), FORMAT_HTMLCHARS);
				$type = 'url';
				@unlink("./avatars/uploaded/{$this->user['user_id']}.avtr");
				break;

			case 'upload':
				if (!isset($this->files['avatar_upload'])) {
					return $this->message($this->lang->cp_avatar_error, $this->lang->cp_avatar_upload_failed);
				}

				$upload = $this->attachmentutil->upload($this->files['avatar_upload'], './avatars/uploaded/' . $this->user['user_id'] . '.avtr', $this->sets['avatar_upload_size'], array('jpg', 'jpeg', 'gif', 'png'));

				switch($upload)
				{
				case UPLOAD_TOO_LARGE:
					return $this->message($this->lang->cp_avatar_error,  sprintf($this->lang->cp_avatar_upload_too_large, round($this->sets['avatar_upload_size']/1024, 1)));
					break 2;

				case UPLOAD_NOT_ALLOWED:
					return $this->message($this->lang->cp_avatar_error, $this->lang->cp_avatar_upload_not_image);
					break 2;

				case UPLOAD_FAILURE:
					return $this->message($this->lang->cp_avatar_error, $this->lang->cp_avatar_upload_failed);
					break 2;
				}

			case 'use_uploaded':
				$avatar = './avatars/uploaded/' . $this->user['user_id'] . '.avtr';
				$type = 'uploaded';
				break;

			default:
				$avatar = '';
				$type = 'none';
				@unlink("./avatars/uploaded/{$this->user['user_id']}.avtr");
				break;
			}

			$this->db->query('
			UPDATE ' . $this->pre . 'users SET
			  user_avatar="' . $avatar . '",
			  user_avatar_type="' . $type . '",
			  user_avatar_width=' . intval($this->post['user_avatar_width']) . ',
			  user_avatar_height=' . intval($this->post['user_avatar_height']) . '
			WHERE user_id=' . $this->user['user_id']);

			return $this->message($this->lang->cp_updated1, $this->lang->cp_been_updated1);
		}
	}

	function edit_subs()
	{
		$this->set_title($this->lang->cp_sub_change);
		$this->tree($this->lang->cp_cp, $this->self . '?a=cp');
		$this->tree($this->lang->cp_sub_change);

		$this->db->query("DELETE FROM {$this->pre}subscriptions WHERE subscription_expire < {$this->time}");

		if (!isset($this->post['submit'])) {
			$query = $this->db->query("
			SELECT
			  s.subscription_id, s.subscription_type, s.subscription_expire,
			  f.forum_name, f.forum_id,
			  t.topic_title, t.topic_id
			FROM
			  {$this->pre}subscriptions s
			LEFT JOIN {$this->pre}forums f ON (s.subscription_type = 'forum' AND f.forum_id = s.subscription_item)
			LEFT JOIN {$this->pre}topics t ON (s.subscription_type = 'topic' AND t.topic_id = s.subscription_item)
			WHERE
			  s.subscription_user = {$this->user['user_id']}
			ORDER BY s.subscription_expire");

			$rows = null;

			while ($sub = $this->db->nqfetch($query))
			{
				if ($sub['subscription_type'] == 'topic') {
					$sub['item_name'] = $sub['topic_title'];
					$link = "a=topic&amp;t={$sub['topic_id']}";
				} else {
					$sub['item_name'] = $sub['forum_name'];
					$link = "a=forum&amp;f={$sub['forum_id']}";
				}

				$sub['item_name'] = $this->format($sub['item_name'], FORMAT_HTMLCHARS | FORMAT_CENSOR);
				$sub['subscription_expire'] = $this->mbdate(DATE_LONG, $sub['subscription_expire']);

				$rows .= eval($this->template('CP_SUB_ROW'));
			}
		} else {
			if (isset($this->post['delete'])) {
				$sql = array();

				foreach ($this->post['delete'] as $id => $true)
				{
					$sql[] .= 'subscription_id=' . intval($id);
				}

				$sql = implode(' OR ', $sql);

				$this->db->query("DELETE FROM {$this->pre}subscriptions WHERE subscription_user={$this->user['user_id']} AND ($sql)");
			}

			return $this->message($this->lang->cp_sub_change, $this->lang->cp_sub_updated);
		}

		return eval($this->template('CP_SUB_MAIN'));
	}

	/**
	 * Allows better handling over signatures
	 *
	 * @author Jonathan West <jon@quicksilverforums.com>
	 * @since v1.1.6
	 **/
	function edit_sig()
	{
		$this->lang->mbcode(); // Load the mbcode values
		$this->set_title($this->lang->cp_label_edit_sig);
		$this->tree($this->lang->cp_cp, $this->self . '?a=cp');
		$this->tree($this->lang->cp_label_edit_sig);
		$params = FORMAT_CENSOR | FORMAT_HTMLCHARS | FORMAT_BREAKS | FORMAT_MBCODE | FORMAT_EMOTICONS;
		
		if (isset($this->post['submit'])) {
			$this->db->query('UPDATE ' . $this->pre . 'users
				SET user_signature="' . $this->post['sig'] . '"
				WHERE user_id=' . $this->user['user_id']);
		}
		
		$query = $this->db->query("SELECT user_signature FROM {$this->pre}users WHERE user_id={$this->user['user_id']}");
		$pr = $this->db->nqfetch($query);
		$preview = $this->format($pr['user_signature'], $params);
		$edit = $pr['user_signature'];
		$mbcodeButtons = eval($this->template('MAIN_MBCODE'));
		return eval($this->template('CP_EDIT_SIG'));
	}
	 
	function add_sub()
	{
		$this->set_title($this->lang->cp_cp);
		$this->tree($this->lang->cp_cp);

		if (!isset($this->get['item']) || !isset($this->get['type'])) {
			return $this->message($this->lang->cp_cp, $this->lang->cp_sub_no_params);
		}

		$this->get['item'] = intval($this->get['item']);

		$expires = $this->time + 2592000; // 30 days

		$this->db->query("DELETE FROM {$this->pre}subscriptions WHERE subscription_user={$this->user['user_id']} AND subscription_type='{$this->get['type']}' AND subscription_item={$this->get['item']}");
		$this->db->query("INSERT INTO {$this->pre}subscriptions (subscription_user, subscription_type, subscription_item, subscription_expire) VALUES ({$this->user['user_id']}, '{$this->get['type']}', {$this->get['item']}, $expires)");

		return $this->message($this->lang->cp_cp, sprintf($this->lang->cp_sub_success, $this->get['type']));
	}
}
?>
