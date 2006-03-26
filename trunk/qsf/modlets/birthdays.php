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

/**
 * Create a list of members who are celebrating a birthday
 *
 * @author Geoffrey Dunn <geoff@warmage.com>
 * @since 1.2.0
 **/
class birthdays extends modlet
{
	/**
	* Display a links to members celebrating a birthday
	*
	* @param string $param unusued
	* @author Geoffrey Dunn <geoff@warmage.com>
	* @since 1.2.0
	* @return string HTML with current member birthdays
	**/
	function run($param)
	{
		if (!isset($this->qsf->lang->board_nobday)) {
			$this->lang->board();
		}
		
		return "<strong>{$this->qsf->lang->board_birthdays}</strong><br />\n" . $this->getuser_birthdays();
	}

	/**
	 * Makes a list of people whose birthday is today
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string List of members and their ages
	 **/
	function getuser_birthdays()
	{
		$links  = array();
		$members  = $this->qsf->db->query("SELECT user_id, user_name, user_birthday FROM {$this->qsf->pre}users WHERE user_birthday LIKE '" . $this->qsf->mbdate('%-m-d') . "'");
		$count    = $this->qsf->db->num_rows($members);
	
		if (!$count) {
			return $this->qsf->lang->board_nobday;
		}
	
		while ($m = $this->qsf->db->nqfetch($members))
		{
			$year = explode('-', $m['user_birthday']);
			$day = $this->qsf->mbdate('Y') - $year[0];
			$links[] = "<a href=\"{$this->qsf->self}?a=profile&amp;w={$m['user_id']}\" class=\"bdaylink\">{$m['user_name']}</a> ($day)";
		}
		return implode(', ', $links);
	}
}
?>
