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

class logs extends admin
{
	function execute()
	{
		$this->set_title('View Moderator Actions');
		$this->tree('View Moderator Actions');

		$data = $this->db->query("SELECT l.*, u.user_name FROM {$this->pre}logs l, {$this->pre}users u WHERE u.user_id=l.log_user ORDER BY l.log_time DESC");

		$this->iterator_init('tablelight', 'tabledark');

		$out = null;
		while ($log = $this->db->nqfetch($data))
		{
			$out .= "
			<tr>
				<td class='" . $this->iterate() . "'>" . $this->mbdate(DATE_LONG, $log['log_time']) . "</td>
				<td class='" . $this->lastValue() . "'>{$log['user_name']}</td>";

			switch ($log['log_action'])
			{
			case 'post_delete':
				$out .= "
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_deleted_post}</td>
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_post} #{$log['log_data1']}</td>";
				break;

			case 'post_edit':
				$out .= "
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_edited_post}</td>
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_post} #{$log['log_data1']}</td>";
				break;

			case 'topic_lock':
				$out .= "
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_locked_topic}</td>
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_topic} #{$log['log_data1']}</td>";
				break;

			case 'topic_unlock':
				$out .= "
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_unlocked_topic}</td>
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_topic} #{$log['log_data1']}</td>";
				break;

			case 'topic_move':
				$out .= "
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_moved_topic}</td>
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_moved_topic_num}{$log['log_data1']} {$this->lang->logs_moved_from} #{$log['log_data2']} {$this->lang->logs_moved_to} #{$log['log_data3']}</td>";
				break;

			case 'topic_edit':
				$out .= "
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_edited_topic}</td>
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_topic} #{$log['log_data1']}</td>";
				break;

			case 'topic_pin':
				$out .= "
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_pinned_topic}</td>
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_topic} #{$log['log_data1']}</td>";
				break;

			case 'topic_unpin':
				$out .= "
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_unpinned_topic}</td>
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_topic} #{$log['log_data1']}</td>";
				break;

			case 'topic_delete':
				$out .= "
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_deleted_topic}</td>
				<td class='" . $this->lastValue() . "'>{$this->lang->logs_topic} #{$log['log_data1']}</td>";
				break;

			default:
				$out .= "
				<td class='" . $this->lastValue() . "'>{$log['log_action']}</td>
				<td class='" . $this->lastValue() . "'>{$log['log_data1']}</td>";
			}

			$out .= "
			</tr>";
		}
		return eval($this->template('ADMIN_MOD_LOGS'));
	}
}
?>

