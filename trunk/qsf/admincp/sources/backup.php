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

/**
 * Database backup
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since 1.0.2
 **/
class backup extends admin
{
	var $tables = array(
		'active' => '*',
		'attach' => '*',
		'forums' => '*',
		'groups' => '*',
		'help' => '*',
		'logs' => '*',
		'membertitles' => '*',
		'pmsystem' => '*',
		'posts' => '*',
		'replacements' => '*',
		'settings' => '*',
		'skins' => '*',
		'subscriptions' => '*',
		'templates' => '*',
		'timezones' => '*',
		'topics' => '*',
		'users' => '*',
		'votes' => '*'
	);

	/**
	 * Database backup
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.2
	 * @return string HTML
	 **/
	function execute()
	{
		if (!isset($this->get['s'])) {
			$this->get['s'] = '';
		}

		switch($this->get['s'])
		{
		case 'create':
			$this->set_title($this->lang->backup_create);
			$this->tree($this->lang->backup_create);

			return $this->create_backup();
			break;

		case 'restore':
			$this->set_title($this->lang->backup_restore);
			$this->tree($this->lang->backup_restore);

			return $this->restore_backup();
			break;
		}
	}

	/**
	 * Generate a backup
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.2
	 * @return string HTML
	 **/
	function create_backup()
	{
		$data = $this->dump_database($this->tables);
		$name = 'mb-' . date('y-m-d-H-i-s') . '.mbb';

		$this->chmod('../databases', 0777);

		$fp = fopen("../databases/$name", 'w');
		fwrite($fp, $data);
		fclose($fp);

		return $this->message($this->lang->backup_create, $this->lang->backup_done, $name, "../databases/$name");
	}

	/**
	 * Restore a backup
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.2
	 * @return string HTML
	 **/
	function restore_backup()
	{
		if (!isset($this->post['submit'])) {
			$box = '';

			$dp = opendir('../databases');
			while (($file = readdir($dp)) !== false)
			{
				$ext = strtolower(substr($file, -4));

				if ($ext == '.mbb') {
					$box .= "<option value='../databases/$file'>" . substr($file, 0, -4) . "</option>\n";
				}
			}
			closedir($dp);

			if ($box) {
				return $this->message($this->lang->backup_restore, "
				<form action='$this->self?a=backup&amp;s=restore' method='post'><div>
					{$this->lang->backup_found}:<br /><br />
					<select name='restore'>
						$box
					</select>
					<input type='submit' name='submit' value='{$this->lang->backup_restore}' /><br /><br />

					<b>{$this->lang->backup_warning}</b></div>
				</form>");
			} else {
				return $this->message($this->lang->backup_restore, $this->lang->backup_none);
			}
		} else {
			$queries = array();
			$pre = $this->pre;

			include $this->post['restore'];

			if (!$queries) {
				return $this->message($this->lang->backup_restore, $this->lang->backup_invalid);
			}

			foreach ($this->tables as $table => $where)
			{
				$this->db->query("DELETE FROM {$pre}$table");
			}

			$this->execute_queries($queries);

			return $this->message($this->lang->backup_restore, $this->lang->backup_restore_done);
		}
	}
}
?>
