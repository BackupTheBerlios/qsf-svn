<?php
/**
 * Quicksilver Forums
 * Copyright (c) 2005-2008 The Quicksilver Forums Development Team
 *  http://www.quicksilverforums.com/
 * 
 * Based on MercuryBoard
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

if (!defined('QUICKSILVERFORUMS') || !defined('QSF_ADMIN')) {
	header('HTTP/1.0 403 Forbidden');
	die;
}

require_once $set['include_path'] . '/admincp/admin.php';

class member_control extends admin
{
	function execute()
	{
		$this->set_title($this->lang->mc);
		$this->tree($this->lang->mc, "$this->self?a=member_control&amp;s=profile");

		if (!isset($this->get['s'])) {
			$this->get['s'] = null;
		}

		if (!isset($this->get['id'])) {
			if (!isset($this->post['membername'])) {
				return $this->message($this->lang->mc, "
				<form action='{$this->self}?a=member_control&amp;s={$this->get['s']}' method='post'>
				<div>
					{$this->lang->mc_find}:<br /><br />
					<input type='text' name='membername' size='30' class='input' />
					<input type='submit' name='submit' value='{$this->lang->submit}' />
				</div>
				</form>");
			} else {
				$query = $this->db->query("SELECT user_id, user_name FROM %pusers WHERE user_name LIKE '%%%s%%' LIMIT 250", $this->post['membername']);

				if (!$this->db->num_rows($query)) {
					return $this->message($this->lang->mc, "{$this->lang->mc_not_found} \"{$this->post['membername']}\"");
				}

				$ret = null;

				if ($this->get['s'] == 'profile') {
					$link = 'a=member_control&amp;s=profile';
				} elseif ($this->get['s'] == 'perms') {
					$link = 'a=perms&amp;s=user';
				} else {
					$link = 'a=member_control&amp;s=delete';
				}

				while ($member = $this->db->nqfetch($query))
				{
					$ret .= "<a href='{$this->self}?$link&amp;id=" . $member['user_id'] . "'>{$member['user_name']}</a><br />";
				}

				return $this->message($this->lang->mc, "{$this->lang->mc_found}<br /><br />$ret");
			}
		}

		$this->get['id'] = intval($this->get['id']);

		switch ($this->get['s'])
		{
		case 'delete':
			$this->tree($this->lang->mc_delete);

			$this->get['id'] = intval($this->get['id']);

			if ($this->get['id'] == USER_GUEST_UID) {
				return $this->message($this->lang->mc_delete, $this->lang->mc_guest_needed);
			}

			if (!isset($this->get['confirm'])) {
				$member = $this->db->fetch("SELECT user_name FROM %pusers WHERE user_id=%d", $this->get['id']);
				return $this->message($this->lang->mc_delete, "{$this->lang->mc_confirm} <b>{$member['user_name']}</b>?<br /><br /><a href='$this->self?a=member_control&amp;s=delete&amp;id={$this->get['id']}&amp;confirm=1'>{$this->lang->continue}</a>");
			} else {
				$this->db->query("UPDATE %pposts SET post_author=%d WHERE post_author=%d", USER_GUEST_UID, $this->get['id']);
				$this->db->query("UPDATE %pposts SET post_edited_by=%d WHERE post_edited_by=%d", USER_GUEST_UID, $this->get['id']);
				$this->db->query("UPDATE %ptopics SET topic_starter=%d WHERE topic_starter=%d", USER_GUEST_UID, $this->get['id']);
				$this->db->query("UPDATE %ptopics SET topic_last_poster=%d WHERE topic_last_poster=%d", USER_GUEST_UID, $this->get['id']);
				$this->db->query("UPDATE %plogs SET log_user=%d WHERE log_user=%d", USER_GUEST_UID, $this->get['id']);
				$this->activeutil->delete($this->get['id']);
				$this->db->query("DELETE FROM %psubscriptions WHERE subscription_user=%d", $this->get['id']);
				$this->db->query("DELETE FROM %pvotes WHERE vote_user=%d", $this->get['id']);
				$this->db->query("DELETE FROM %pusers WHERE user_id=%d", $this->get['id']);
				$this->db->query("DELETE FROM %ppmsystem WHERE pm_to=%d", $this->get['id']);
				$this->db->query("DELETE FROM %preadmarks WHERE readmark_user=%d", $this->get['id']);

				$member = $this->db->fetch("SELECT user_id, user_name FROM %pusers ORDER BY user_id DESC LIMIT 1");
				$counts = $this->db->fetch("SELECT COUNT(user_id) AS count FROM %pusers");

				$this->sets['last_member'] = $member['user_name'];
				$this->sets['last_member_id'] = $member['user_id'];
				$this->sets['members'] = $counts['count']-1;
				$this->write_sets();

				return $this->message($this->lang->mc_delete, $this->lang->mc_deleted);
			}
			break;

		case 'profile':
			$this->tree($this->lang->mc_edit);

			$this->get['id'] = intval($this->get['id']);

			if (!isset($this->post['submit'])) {
				$member = $this->db->fetch('SELECT * FROM %pusers WHERE user_id=%d LIMIT 1', $this->get['id']);

				$this->iterator_init('tablelight', 'tabledark');
				$out = "";

				define('U_IGNORE', 0);
				define('U_TEXT', 1);
				define('U_BOOL', 2);
				define('U_BLOB', 3);
				define('U_DATE', 4);
				define('U_TIME', 5);
				define('U_FLOAT', 6);
				define('U_INT', 7);
				define('U_CALLBACK', 8);
				define('U_TZONE', 9);
				define('U_IP', 10);

				$cols = array(
					'user_name'		=> array($this->lang->mc_user_name, U_TEXT, 20),
					'user_email'		=> array($this->lang->mc_user_email, U_TEXT, 100),
					'user_group'		=> array($this->lang->mc_user_group, U_CALLBACK, 'list_groups'),
					'user_title'		=> array($this->lang->mc_user_title, U_TEXT, 100),
					'user_title_custom'	=> array($this->lang->mc_user_title_custom, U_BOOL),
					'user_language'		=> array($this->lang->mc_user_language, U_CALLBACK, 'list_langs'),
					'user_skin'		=> array($this->lang->mc_user_skin, U_CALLBACK, 'list_skins'),
					'user_avatar'		=> array($this->lang->mc_user_avatar, U_TEXT, 150),
					'user_avatar_type'	=> array($this->lang->mc_user_avatar_type, U_CALLBACK, 'list_user_avatar_types'),
					'user_avatar_width'	=> array($this->lang->mc_user_avatar_width, U_INT, 3),
					'user_avatar_height'	=> array($this->lang->mc_user_avatar_height, U_INT, 3),
					'user_level'		=> array($this->lang->mc_user_level, U_TEXT, 2),
					'user_birthday'		=> array($this->lang->mc_user_birthday, U_TEXT, 10),
					'user_timezone'		=> array($this->lang->mc_user_timezone, U_TZONE),
					'user_location'		=> array($this->lang->mc_user_location, U_TEXT, 100),
					'user_homepage'		=> array($this->lang->mc_user_homepage, U_TEXT, 255),
					'user_interests'	=> array($this->lang->mc_user_interests, U_BLOB, 255),
					'user_signature'	=> array($this->lang->mc_user_signature, U_BLOB, 255),
					'user_posts'		=> array($this->lang->mc_user_posts, U_INT, 10),
					'user_icq'		=> array($this->lang->mc_user_icq, U_INT, 16),
					'user_msn'		=> array($this->lang->mc_user_msn, U_TEXT, 32),
					'user_aim'		=> array($this->lang->mc_user_aim, U_TEXT, 32),
					'user_gtalk'		=> array($this->lang->mc_user_gtalk, U_TEXT, 32),
					'user_yahoo'		=> array($this->lang->mc_user_yahoo, U_TEXT, 100),
					'user_email_show'	=> array($this->lang->mc_user_email_show, U_BOOL),
					'user_pm'		=> array($this->lang->mc_user_pm, U_BOOL),
					'user_pm_mail'		=> array($this->lang->mc_user_pm_mail, U_BOOL),
					'user_view_avatars'	=> array($this->lang->mc_user_view_avatars, U_BOOL),
					'user_view_signatures'	=> array($this->lang->mc_user_view_signatures, U_BOOL),
					'user_view_emoticons'	=> array($this->lang->mc_user_view_emoticons, U_BOOL),
					'user_id'		=> array($this->lang->mc_user_id, U_IGNORE),
					'user_joined'		=> array($this->lang->mc_user_joined, U_TIME),
					'user_lastvisit'	=> array($this->lang->mc_user_lastvisit, U_TIME),
					'user_lastpost'		=> array($this->lang->mc_user_lastpost, U_TIME),
					'user_regip'		=> array($this->lang->mc_user_regip, U_IP)
				);

				foreach ($cols as $var => $data)
				{
					if (!isset($member[$var])) {
						continue;
					}

					$val = $member[$var];

					if (($var == 'user_signature') || ($var == 'user_email') || ($var == 'user_title')) {
						$val = $this->format($val, FORMAT_HTMLCHARS);
					} elseif (($var == 'user_icq') && !$val) {
						$val = null;
					}

					$line = '';
					$class = $this->iterate();

					switch ($data[1])
					{
					case U_TZONE:
						$time_list  = $this->htmlwidgets->select_timezones($val);
						$line = '<select class="select timezone" name="user_timezone">' . $time_list . '</select>';
						break;

					case U_IGNORE:
						if (!isset($cols[$var][2])) {
							$line = $val;
						} else {
							if ($val) {
								$line = $this->lang->yes;
							} else {
								$line = $this->lang->no;
							}
						}
						break;

					case U_IP:
						$line = $val == 0 ? '127.0.0.1' : long2ip($val);
						break;

					case U_TIME:
						$line = $val ? date('Y-m-d, H:i:s', $val) : '-';
						break;

					case U_DATE:
						$line = $val ? date('Y-m-d', $val) : '-';
						break;

					case U_BOOL:
						$line = '<select name="' . $var . '"><option value="1"' . ($val ? ' selected="selected"' : '') . '>' . $this->lang->yes .'</option><option value="0"' . (!$val ? ' selected="selected"' : '') . '>' . $this->lang->no . '</option></select>';
						break;

					case U_FLOAT:
						$cols[$var][2] += 3;

					case U_TEXT:
					case U_INT:
						$line = '<input class="input" type="text" name="'. $var . '" value="' . $val . '" size="50" maxlength="' . $cols[$var][2] . '" />';
						break;

					case U_BLOB:
						$line = '<textarea class="input" name="' . $var . '" rows="5" cols="49">' . $val . '</textarea>';
						break;

					case U_CALLBACK:
						$line = $this->{$cols[$var][2]}($val);
						break;

					default:
						$line = $val;
					}

					$out .= eval($this->template('ADMIN_MEMBER_EDIT'));
				}

				return eval($this->template('ADMIN_MEMBER_PROFILE'));
			} else {
				$member = $this->db->fetch('SELECT user_name FROM %pusers WHERE user_id=%d LIMIT 1', $this->get['id']);

				if (($this->post['user_group'] == USER_BANNED) && ($this->get['id'] == USER_GUEST_UID)) {
					return $this->message($this->lang->mc, $this->lang->mc_guest_banned);
				} 

				$guest_email = $this->post['user_email'];
				if ($member['user_name'] != 'Guest' && !$this->validator->validate($guest_email, TYPE_EMAIL)) {
					return $this->message($this->lang->mc_err_updating, $this->lang->mc_email_invaid);
				}

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

				if (!isset($this->post['user_pm'])) {
					$this->post['user_pm'] = 0;
				}

				if (!isset($this->post['user_pm_mail'])) {
					$this->post['user_pm_mail'] = 0;
				}

				if (!empty($this->post['user_homepage']) && (substr($this->post['user_homepage'], 0, 7) != 'http://')) {
					$this->post['user_homepage'] = 'http://' . $this->post['user_homepage'];
				}

				$user_name = $this->format($this->post['user_name'], FORMAT_HTMLCHARS | FORMAT_CENSOR);
				$user_group = intval($this->post['user_group']);
				$user_title = $this->post['user_title'];
				$user_title_custom = intval($this->post['user_title_custom']);
				$user_language = $this->post['user_language'];
				$user_skin = $this->post['user_skin'];
				$user_avatar = $this->post['user_avatar'];
				$user_avatar_type = $this->post['user_avatar_type'];
				$user_avatar_width = intval($this->post['user_avatar_width']);
				$user_avatar_height = intval($this->post['user_avatar_height']);
				$user_level = intval($this->post['user_level']);
				$user_birthday = $this->post['user_birthday'];
				$user_timezone = intval($this->post['user_timezone']);
				$user_location = $this->format($this->post['user_location'], FORMAT_HTMLCHARS);
				$user_homepage = $this->format($this->post['user_homepage'], FORMAT_HTMLCHARS);
				$user_interests = $this->format($this->post['user_interests'], FORMAT_HTMLCHARS);
				$user_signature = $this->post['user_signature'];
				$user_posts = intval($this->post['user_posts']);
				$user_icq = intval($this->post['user_icq']);
				$user_msn = $this->format($this->post['user_msn'], FORMAT_HTMLCHARS);
				$user_aim = $this->format($this->post['user_aim'], FORMAT_HTMLCHARS);
				$user_gtalk = $this->format($this->post['user_gtalk'], FORMAT_HTMLCHARS);
				$user_yahoo = $this->format($this->post['user_yahoo'], FORMAT_HTMLCHARS);
				$user_email_show = intval($this->post['user_email_show']);
				$user_pm = intval($this->post['user_pm']);
				$user_pm_mail = intval($this->post['user_pm_mail']);
				$user_view_avatars = intval($this->post['user_view_avatars']);
				$user_view_signatures = intval($this->post['user_view_signatures']);
				$user_view_emoticons = intval($this->post['user_view_emoticons']);

				$this->db->query( "UPDATE %pusers SET user_name='%s', user_email='%s', user_group=%d, user_title='%s',
				  user_title_custom=%d, user_language='%s', user_skin='%s', user_avatar='%s',
				  user_avatar_type='%s', user_avatar_width=%d, user_avatar_height=%d, user_level=%d,
				  user_birthday='%s', user_timezone=%d, user_location='%s', user_homepage='%s',
				  user_interests='%s', user_signature='%s', user_posts=%d,
				  user_icq=%d, user_msn='%s', user_aim='%s', user_gtalk='%s', user_yahoo='%s',
				  user_email_show=%d, user_pm=%d, user_pm_mail=%d, user_view_avatars=%d,
				  user_view_signatures=%d, user_view_emoticons=%d WHERE user_id=%d",
				  $user_name, $guest_email, $user_group, $user_title, $user_title_custom, $user_language, $user_skin,
				  $user_avatar, $user_avatar_type, $user_avatar_width, $user_avatar_height, $user_level,
				  $user_birthday, $user_timezone, $user_location, $user_homepage, $user_interests,
				  $user_signature, $user_posts, $user_icq, $user_msn, $user_aim,
				  $user_gtalk, $user_yahoo, $user_email_show, $user_pm, $user_pm_mail, $user_view_avatars,
				  $user_view_signatures, $user_view_emoticons, $this->get['id'] );

				if( $user_group == USER_BANNED ) {
					$this->db->query( "DELETE FROM %psubscriptions WHERE subscription_user=%d",
						$this->get['id'] );
				}
				if (($this->get['id'] == $this->sets['last_member_id'])
				&& ($this->post['user_name'] != $this->sets['last_member'])) {
					$this->sets['last_member'] = $this->post['user_name'];
					$this->write_sets();
				}

				return $this->message($this->lang->mc_edit, $this->lang->mc_edited);
			}
			break;

		default:
			return $this->message($this->lang->mc, "<a href='{$this->self}?a=member_control&amp;s=profile'>{$this->lang->mc_edit}</a><br />");
		}
	}

	function list_groups($val)
	{
		$out = "<select name='user_group'>";
		$groups = $this->db->query('SELECT group_name, group_id FROM %pgroups ORDER BY group_name');

		while ($group = $this->db->nqfetch($groups))
		{
			$out .= "<option value='{$group['group_id']}'" . (($val == $group['group_id']) ? ' selected=\'selected\'' : '') . ">{$group['group_name']}</option>";
		}

		return $out . '</select>';
	}

	function list_skins($val)
	{
		$out = "<select name='user_skin'>";
		$groups = $this->db->query('SELECT skin_name, skin_dir FROM %pskins ORDER BY skin_name');

		while ($group = $this->db->nqfetch($groups))
		{
			$out .= "<option value='{$group['skin_dir']}'" . (($val == $group['skin_dir']) ? ' selected=\'selected\'' : '') . ">{$group['skin_name']}</option>";
		}

		return $out . '</select>';
	}

	function list_user_avatar_types($val)
	{
		$out = "<select name='user_avatar_type'>";
		$types = array('local', 'url', 'uploaded', 'none');

		foreach ($types as $type)
		{
			$out .= "<option value='$type'" . (($val == $type) ? ' selected=\'selected\'' : '') . ">$type</option>";
		}

		return $out . '</select>';
	}

	function list_langs($current)
	{
		$out = "<select name='user_language'>";
		$dir = opendir('../languages');

		while (($file = readdir($dir)) !== false)
		{
			if (is_dir('../languages/' . $file)) {
				continue;
			}

			$code = substr($file, 0, -4);
			$ext  = substr($file, -4);
			if ($ext != '.php') {
				continue;
			}

			$out .= '<option value="' . $code . '"' . (($code == $current) ? ' selected=\'selected\'' : null) . '>' . $this->htmlwidgets->get_lang_name($code) . "</option>\n";
		}

		return $out . '</select>';
	}
}
?>
