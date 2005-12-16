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
 * Member maintenance
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 3.0
 **/
class membercount extends admin
{
	/**
	 * Recounts the number of members
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 3.0
	 * @version 1.0.0
	 * @return string Message
	 **/
	function execute()
	{
		$this->set_title($this->lang->mcount);
		$this->tree($this->lang->mcount);

		$member = $this->db->fetch("SELECT user_id, user_name FROM {$this->pre}users ORDER BY user_id DESC LIMIT 1");
		$counts = $this->db->fetch("SELECT COUNT(user_id) AS count FROM {$this->pre}users");

		$this->sets['last_member'] = $member['user_name'];
		$this->sets['last_member_id'] = $member['user_id'];
		$this->sets['members'] = $counts['count']-1; // Subtract el guesto
		$this->write_sets();

		return $this->message($this->lang->mcount, $this->lang->mcount_updated);
	}
}
?>
