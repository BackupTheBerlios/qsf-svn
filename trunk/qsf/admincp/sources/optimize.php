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

class optimize extends admin
{
	function execute()
	{
		$this->set_title($this->lang->optimize);
		$this->tree($this->lang->optimize);

		$this->opt_tables();

		return $this->message($this->lang->optimize, $this->lang->optimized);
	}

	function opt_tables()
	{
		$tables = array(
			$this->pre . 'active',
			$this->pre . 'attach',
			$this->pre . 'forums',
			$this->pre . 'groups',
			$this->pre . 'help',
			$this->pre . 'logs',
			$this->pre . 'membertitles',
			$this->pre . 'pmsystem',
			$this->pre . 'posts',
			$this->pre . 'replacements',
			$this->pre . 'settings',
			$this->pre . 'skins',
			$this->pre . 'subscriptions',
			$this->pre . 'templates',
			$this->pre . 'topics',
			$this->pre . 'users',
			$this->pre . 'votes'
		);

		$tables = implode(', ', $tables);

		$this->db->query('OPTIMIZE TABLE ' . $tables);
	}
}
?>