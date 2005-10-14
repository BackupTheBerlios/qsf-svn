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
				<form action='$this->self?a=member_control&amp;s={$this->get['s']}' method='post'><div>
					{$this->lang->mc_find}:<br /><br />
					<input type='text' name='membername' size='30' class='input' />
					<input type='submit' name='submit' value='{$this->lang->submit}' /></div>
				</form>");
			} else {
				$query = $this->db->query('SELECT user_id, user_name FROM ' . $this->pre . 'users WHERE user_name LIKE "%' . $this->post['membername'] . '%" LIMIT 250');

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
					$ret .= "<a href='$this->self?$link&amp;id=" . $member['user_id'] . "' class='nav'>{$member['user_name']}</a><br />";
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
				$member = $this->db->fetch("SELECT user_name FROM {$this->pre}users WHERE user_id=" . $this->get['id']);
				return $this->message($this->lang->mc_delete, "{$this->lang->mc_confirm} <b>{$member['user_name']}</b>?<br /><br /><a href='$this->self?a=member_control&amp;s=delete&amp;id={$this->get['id']}&amp;confirm=1'>{$this->lang->continue}</a>");
			} else {
				$this->db->query("UPDATE {$this->pre}posts SET post_author=" . USER_GUEST_UID . " WHERE post_author={$this->get['id']}");
				$this->db->query("UPDATE {$this->pre}topics SET topic_starter=" . USER_GUEST_UID . " WHERE topic_starter={$this->get['id']}");
				$this->db->query("UPDATE {$this->pre}topics SET topic_last_poster=" . USER_GUEST_UID . " WHERE topic_last_poster={$this->get['id']}");
				$this->db->query("DELETE FROM {$this->pre}subscriptions WHERE subscription_user={$this->get['id']}");
				$this->db->query("DELETE FROM {$this->pre}votes WHERE vote_user={$this->get['id']}");
				$this->db->query("DELETE FROM {$this->pre}users WHERE user_id={$this->get['id']}");

				$member = $this->db->fetch("SELECT user_id, user_name FROM {$this->pre}users ORDER BY user_id DESC LIMIT 1");
				$counts = $this->db->fetch("SELECT COUNT(user_id) AS count FROM {$this->pre}users");

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
				$member = $this->db->fetch('SELECT * FROM ' . $this->pre . 'users WHERE user_id=' . $this->get['id'] . ' LIMIT 1');

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
					'user_view_avatars'	=> array($this->lang->mc_user_view_avatars, U_BOOL),
					'user_view_signatures'	=> array($this->lang->mc_user_view_signatures, U_BOOL),
					'user_view_emoticons'	=> array($this->lang->mc_user_view_emoticons, U_BOOL),
					'user_id'		=> array($this->lang->mc_user_id, U_IGNORE),
					'user_joined'		=> array($this->lang->mc_user_joined, U_TIME),
					'user_lastvisit'	=> array($this->lang->mc_user_lastvisit, U_TIME),
					'user_lastpost'		=> array($this->lang->mc_user_lastpost, U_TIME)
				);

				foreach ($cols as $var => $data)
				{
					if (!isset($member[$var])) {
						continue;
					}

					$val = $member[$var];

					if (($var == 'user_signature') || ($var == 'user_email')) {
						$val = $this->format($val, FORMAT_HTMLCHARS);
					} elseif (($var == 'user_icq') && !$val) {
						$val = null;
					}

					$out .= "<tr><td class='tablelight' align='right' style='width:30%'><b>{$cols[$var][0]}</b></td><td class='tabledark'>";

					switch ($data[1])
					{
					case U_TZONE:
						$this->lang->timezones(); //For $this->select_timezones()
						$time_list  = $this->select_timezones($val);
						$out .= "<select class='select' name='user_timezone'>" . $time_list . "</select>";
						break;

					case U_IGNORE:
						if (!isset($cols[$var][2])) {
							$out .= $val;
						} else {
							if ($val) {
								$out .= $this->lang->yes;
							} else {
								$out .= $this->lang->no;
							}
						}
						break;

					case U_TIME:
						$out .= $val ? date('Y-m-d, H:i:s', $val) : '-';
						break;

					case U_DATE:
						$out .= $val ? date('Y-m-d', $val) : '-';
						break;

					case U_BOOL:
						$out .= "<select name='$var'><option value='1'" . ($val ? ' selected=\'selected\'' : '') . ">{$this->lang->yes}</option><option value='0'" . (!$val ? ' selected=\'selected\'' : '') . ">{$this->lang->no}</option></select>";
						break;

					case U_FLOAT:
						$cols[$var][2] += 3;

					case U_TEXT:
					case U_INT:
						$out .= "<input class='input' type='text' name='$var' value='$val' size='50' maxlength='{$cols[$var][2]}' />";
						break;

					case U_BLOB:
						$out .= "<textarea class='input' name='$var' rows='5' cols='49'>$val</textarea>";
						break;

					case U_CALLBACK:
						$out .= $this->{$cols[$var][2]}($val);
						break;

					default:
						$out .= $val;
					}

					$out .= "</td></tr>\n";
				}

				return eval($this->template('ADMIN_MEMBER_PROFILE'));
			} else {
				$data = null;

				foreach ($this->post as $var => $val)
				{
					if (($var == 'submit') or ($var == 'PHPSESSID')) {
						continue;
					}

					if ($var == 'user_name') {
						$val = $this->format(stripslashes($val), FORMAT_HTMLCHARS);
					}

					$data .= "$var='$val', ";
				}

				$data = substr($data, 0, -2);

				$this->db->query("UPDATE {$this->pre}users SET $data WHERE user_id=" . $this->get['id']);

				if (($this->get['id'] == $this->sets['last_member_id'])
				&& ($this->post['user_name'] != $this->sets['last_member'])) {
					$this->sets['last_member'] = $this->post['user_name'];
					$this->write_sets();
				}

				return $this->message($this->lang->mc_edit, $this->lang->mc_edited);
			}
			break;

		default:
			return $this->message($this->lang->mc, "<a href='$this->self?a=member_control&amp;s=profile'>{$this->lang->mc_edit}</a><br />");
		}
	}

	function list_groups($val)
	{
		$out = "<select name='user_group'>";
		$groups = $this->db->query('SELECT group_name, group_id FROM ' . $this->pre . 'groups ORDER BY group_name');

		while ($group = $this->db->nqfetch($groups))
		{
			$out .= "<option value='{$group['group_id']}'" . (($val == $group['group_id']) ? ' selected=\'selected\'' : '') . ">{$group['group_name']}</option>";
		}

		return $out . '</select>';
	}

	function list_skins($val)
	{
		$out = "<select name='user_skin'>";
		$groups = $this->db->query('SELECT skin_name, skin_dir FROM ' . $this->pre . 'skins ORDER BY skin_name');

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

			$out .= '<option value="' . $code . '"' . (($code == $current) ? ' selected=\'selected\'' : null) . '>' . $this->get_lang_name($code) . "</option>\n";
		}

		return $out . '</select>';
	}
}
?>