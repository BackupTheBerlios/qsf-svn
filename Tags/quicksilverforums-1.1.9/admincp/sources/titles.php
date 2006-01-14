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

class titles extends admin
{
	function execute()
	{
		if (!isset($this->get['s'])) {
			$this->get['s'] = null;
		}

		switch($this->get['s'])
		{
		case 'add':
			$this->set_title($this->lang->titles_add);
			$this->tree($this->lang->titles_add);

			if (!isset($this->post['submit'])) {
				return $this->message($this->lang->titles_add, "
				<form action='$this->self?a=titles&amp;s=add' method='post'>
				<div align='center' style='width:400px'>
					<label class='free' for='new_title'>{$this->lang->titles_title}:</label>
					<input class='free' name='new_title' id='new_title' /><br class='free' />

					<label class='free' for='new_icon'>{$this->lang->titles_image}:</label>
					<select class='free' name='new_icon' id='new_icon' onchange='document.title_preview.src=\"../skins/{$this->skin}/images/\"+this.options[selectedIndex].value; document.title_preview.style.display=\"inline\"'>
					" . $this->list_title_images(-1) . "
					</select>
					<img class='free' name='title_preview' src='null' style='display:none;' alt='' /><br class='free' />

					<label class='free' for='new_posts'>{$this->lang->titles_minpost}:</label>
					<input class='freec' name='new_posts' id='new_posts' /><br class='free' /><br class='free' />
					<input type='submit' name='submit' value='{$this->lang->submit}' />
				</div>
				</form>");
			} else {
				if ((trim($this->post['new_title']) == '') || (trim($this->post['new_posts']) == '')) {
					return $this->message($this->lang->titles_control, $this->lang->titles_error);
				}

				$this->db->query("INSERT INTO {$this->pre}membertitles (membertitle_title, membertitle_icon, membertitle_posts) VALUES ('{$this->post['new_title']}', '{$this->post['new_icon']}', " . intval($this->post['new_posts']) . ')');
				$this->update_titles();

				return $this->message($this->lang->titles_add, $this->lang->titles_added);
			}
			break;

		default:
			$this->set_title($this->lang->titles_edit);
			$this->tree($this->lang->titles_edit);

			$out = null;
			$this->iterator_init('tablelight', 'tabledark');

			if (isset($this->get['delete'])) {
				$this->db->query("DELETE FROM {$this->pre}membertitles WHERE membertitle_id=" . intval($this->get['delete']));
				$this->update_titles();
			}

			if (!isset($this->get['edit'])) {
				$this->get['edit'] = null;
			} else {
				$this->get['edit'] = intval($this->get['edit']);
			}

			if (isset($this->post['submit']) && (trim($this->post['new_posts']) != '') && (trim($this->post['new_title']) != '')) {
				$this->db->query("UPDATE {$this->pre}membertitles SET membertitle_title='{$this->post['new_title']}', membertitle_posts=" . intval($this->post['new_posts']) . ", membertitle_icon='{$this->post['new_icon']}' WHERE membertitle_id={$this->get['edit']}");
				$this->get['edit'] = null;

				$this->update_titles();
			}

			$query = $this->db->query("SELECT * FROM {$this->pre}membertitles");
			while ($data = $this->db->nqfetch($query))
			{
				$class = $this->iterate();

				if (!$this->get['edit'] || ($this->get['edit'] != $data['membertitle_id'])) {
					$out .= eval($this->template('ADMIN_TITLE_ENTRY'));
				} else {
					$icon = $this->list_title_images($data['membertitle_icon']);

					$out .= eval($this->template('ADMIN_TITLE_ENTRY_MOD'));
				}
			}

			return eval($this->template('ADMIN_TITLE_FORM'));
			break;
		}
	}

	function list_title_images($select)
	{
		$dirname = "../skins/{$this->skin}/images/";

		$out = null;

		$dir = opendir($dirname);
		while (($emo = readdir($dir)) !== false)
		{
			$ext = substr($emo, -3);
			if (($ext != 'png')
			&& ($ext != 'gif')
			&& ($ext != 'bmp')
			&& ($ext != 'jpg')) {
				continue;
			}

			if (is_dir($dirname . $emo)) {
				continue;
			}

			$name = substr($emo, 0, -4);
			$out .= "\n<option value='$emo'" . (($emo == $select) ? ' selected="selected"' : '') . ">$emo</option>";
		}

		return $out;
	}

	function update_titles()
	{
		$titles = $this->db->query("SELECT * FROM {$this->pre}membertitles ORDER BY membertitle_posts");
		$last_count = 0;
		$last_level = 0;
		$last_title = '';

		while ($title = $this->db->nqfetch($titles))
		{
			$this->db->query("UPDATE {$this->pre}users SET user_title='$last_title', user_level='$last_level' WHERE (user_title_custom = 0) AND (user_posts >= $last_count) AND (user_posts < {$title['membertitle_posts']})");

			$last_count = $title['membertitle_posts'];
			$last_level = $title['membertitle_id'];
			$last_title = addslashes($title['membertitle_title']);
		}

		// We need this to take care of the users who have more posts than are set by any title
		$this->db->query("UPDATE {$this->pre}users SET user_title='$last_title', user_level='$last_level' WHERE (user_title_custom = 0) AND (user_posts >= $last_count)");
	}
}
?>
