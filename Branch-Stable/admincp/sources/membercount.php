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

		$member = $this->db->fetch("SELECT user_id, user_name FROM %pusers ORDER BY user_id DESC LIMIT 1");
		$counts = $this->db->fetch("SELECT COUNT(user_id) AS count FROM %pusers");

		$this->sets['last_member'] = $member['user_name'];
		$this->sets['last_member_id'] = $member['user_id'];
		$this->sets['members'] = $counts['count']-1; // Subtract el guesto
		$this->write_sets();

		// Try to fix user post counts.
		$users = $this->db->query( "SELECT user_id, user_posts FROM %pusers" );
		while( ($user = $this->db->nqfetch($users) ) )
		{
			$uid = $user['user_id'];

			$posts = $this->db->fetch( "SELECT COUNT(post_id) count FROM %pposts WHERE post_author=%d AND post_count=1", $uid );
			if( $posts['count'] && $posts['count'] > 0 ) {
				$this->db->query( "UPDATE %pusers SET user_posts=%d WHERE user_id=%d", $posts['count'], $uid );
			} else {
				$this->db->query( "UPDATE %pusers SET user_posts=0 WHERE user_id=%d", $uid );
			}
		}
		return $this->message($this->lang->mcount, $this->lang->mcount_updated);
	}
}
?>
