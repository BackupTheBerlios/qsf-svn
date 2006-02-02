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
require_once $set['include_path'] . '/admincp/admin.php';

class mass_mail extends admin
{
	function execute()
	{
		$this->set_title($this->lang->mail);
		$this->tree($this->lang->mail);

		if (isset($this->post['massmail'])) {
			return $this->send_mail();
		} else {
			$group_list = $this->group_list();

			$announcement = "{$this->lang->mail_announce} " . $this->format($this->sets['forum_name'], FORMAT_HTMLCHARS);
			return eval($this->template('ADMIN_MASS_MAIL'));
		}
	}

	function group_list()
	{
		$out   = null;
		$query = $this->db->query("SELECT group_id, group_name, group_type FROM {$this->pre}groups ORDER BY group_name");

		while ($group = $this->db->nqfetch($query))
		{
			if ($group['group_type'] != 'GUEST') {
				$out .= "<option value='{$group['group_id']}' selected='selected'>{$group['group_name']}</option>\n";
			}
		}

		return $out;
	}

	function group_query($groups)
	{
		$out = array();
		foreach ($groups as $group)
		{
			$out[] = 'user_group=' . $group;
		}

		if ($out) {
			return ' WHERE (' . implode(' OR ', $out) . ')';
		} else {
			return ' WHERE user_id != ' . USER_GUEST_UID;
		}
	}

	function send_mail()
	{
		if (!isset($this->post['groups'])) {
			$this->post['groups'] = array();
		}

		include '../lib/mailer.php';

		$mailer = new mailer($this->sets['admin_incoming'], $this->sets['admin_outgoing'], $this->sets['forum_name'], false);
		$mailer->setSubject($this->post['subject']);

		$message  = stripslashes($this->post['message']) . "\n";
		$message .= '___________________' . "\n";
		$message .= $this->sets['forum_name'] . "\n";
		$message .= $this->sets['loc_of_board'] . "\n";

		$mailer->setMessage($message);
		$mailer->setServer($this->sets['mailserver']);

		$i = 0;
		$members = $this->db->query("SELECT user_email FROM {$this->pre}users" . $this->group_query($this->post['groups']));
		while ($sub = $this->db->nqfetch($members))
		{
			$mailer->setBcc($sub['user_email']);
			$i++;
		}

		$mailer->doSend();

		return $this->message($this->lang->mail, $this->lang->mail_sent . ' ' . $i . ' ' . $this->lang->mail_members);
	}
}
?>
