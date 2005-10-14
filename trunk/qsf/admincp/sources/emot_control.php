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

class emot_control extends admin
{
	function execute()
	{
		if (!isset($this->get['s'])) {
			$this->get['s'] = null;
		}

		switch($this->get['s'])
		{
		case 'import':
			$this->set_title($this->lang->emote_install);
			$this->tree($this->lang->emote_install);

			if (!isset($this->get['check'])) {
				return $this->message($this->lang->emote_install, $this->lang->emote_install_warning, $this->lang->continue, "$this->self?a=emot_control&amp;s=import&amp;check=1");
			} else {
				$this->db->query("DELETE FROM {$this->pre}replacements WHERE replacement_type='emoticon'");
				$dirname = "../skins/{$this->skin}/emoticons/";

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
					$this->db->query("INSERT INTO {$this->pre}replacements (replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (':$name:', '$emo', 'emoticon', 1)");
				}
				return $this->message($this->lang->emote_install, $this->lang->emote_install_done);
			}
			break;

		case 'edit':
			$this->set_title($this->lang->emote_edit);
			$this->tree($this->lang->emote_edit);

			$out = null;
			$this->iterator_init('tablelight', 'tabledark');

			if (isset($this->get['delete'])) {
				$this->db->query("DELETE FROM {$this->pre}replacements WHERE replacement_id=" . intval($this->get['delete']));
			}

			if (!isset($this->get['edit'])) {
				$this->get['edit'] = null;
			} else {
				$this->get['edit'] = intval($this->get['edit']);
			}

			if (isset($this->post['submit']) && (trim($this->post['new_search']) != '') && (trim($this->post['new_replace']) != '')) {
				$this->db->query("UPDATE {$this->pre}replacements SET replacement_search='{$this->post['new_search']}', replacement_replace='{$this->post['new_replace']}', replacement_clickable=" . intval(isset($this->post['new_click'])) . " WHERE replacement_id={$this->get['edit']}");
				$this->get['edit'] = null;
			}

			$query = $this->db->query("SELECT * FROM {$this->pre}replacements WHERE replacement_type='emoticon'");
			while ($data = $this->db->nqfetch($query))
			{
				if (!$this->get['edit'] || ($this->get['edit'] != $data['replacement_id'])) {
					$out .= "
					<tr>
						<td style='width:35%' class='" . $this->iterate() . "'>{$data['replacement_search']}</td>
						<td style='width:35%' class='" . $this->lastValue() . "'>{$data['replacement_replace']}</td>
						<td align='center' style='width:5%' class='" . $this->lastValue() . "'><img src='../skins/{$this->skin}/emoticons/{$data['replacement_replace']}' alt='{$data['replacement_replace']}' /></td>
						<td align='center' style='width:5%' class='" . $this->lastValue() . "'>" . ($data['replacement_clickable'] ? $this->lang->yes : $this->lang->no ) . "</td>
						<td align='center' style='width:10%' class='" . $this->lastValue() . "'><a href='$this->self?a=emot_control&amp;s=edit&amp;edit={$data['replacement_id']}' class='nav'>{$this->lang->edit}</a></td>
						<td align='center' style='width:10%' class='" . $this->lastValue() . "'><a href='$this->self?a=emot_control&amp;s=edit&amp;delete={$data['replacement_id']}' class='nav'>{$this->lang->delete}</a></td>
					</tr>";
				} else {
					$out .= "
					<tr>
						<td style='width:35%' class='" . $this->iterate() . "'><input name='new_search' value='{$data['replacement_search']}' class='input' /></td>
						<td style='width:35%' class='" . $this->lastValue() . "'>
							<select name='new_replace' onchange='document.emot_preview.src=\"../skins/{$this->skin}/emoticons/\"+this.options[selectedIndex].value'>
							" . $this->list_emoticons($data['replacement_replace']) . "
							</select>
						</td>
						<td align='center' style='width:5%' class='" . $this->lastValue() . "'><img name='emot_preview' src='../skins/{$this->skin}/emoticons/{$data['replacement_replace']}' /></td>
						<td align='center' style='width:5%' class='" . $this->lastValue() . "'><input type='checkbox' name='new_click'" . ($data['replacement_clickable'] ? ' checked' : '') . " /></td>
						<td align='center' style='width:10%' class='" . $this->lastValue() . "'><input type='submit' name='submit' value='{$this->lang->edit}' /></td>
						<td align='center' style='width:10%' class='" . $this->lastValue() . "'><a href='$this->self?a=emot_control&amp;s=edit&amp;delete={$data['replacement_id']}'>{$this->lang->delete}</a></td>
					</tr>";
				}
			}

			return eval($this->template('ADMIN_EMOTICON_EDIT'));
			break;

		case 'add':
			$this->set_title($this->lang->emote_add);
			$this->tree($this->lang->emote_add);

			if (!isset($this->post['submit'])) {
				return $this->message($this->lang->emote_add, "
				<form action='$this->self?a=emot_control&amp;s=add' method='post'>
				<div align='center' style='width:300px'>
					<label class='free' for='new_search'>{$this->lang->emote_text}:</label>
					<input class='free' name='new_search' id='new_search' /><br class='free' />

					<label class='free' for='new_replace'>{$this->lang->emote_image}:</label>
					<select class='free' name='new_replace' id='new_replace' onchange='document.emot_preview.src=\"../skins/{$this->skin}/emoticons/\"+this.options[selectedIndex].value; document.emot_preview.style.display=\"inline\"'>
					" . $this->list_emoticons(-1) . "
					</select>
					<img class='free' name='emot_preview' src='null' style='display:none' alt='' /><br class='free' />

					<label class='free' for='new_click'>{$this->lang->emote_clickable}:</label>
					<input class='freec' type='checkbox' name='new_click' id='new_click' /><br class='free' /><br class='free' />
					<input type='submit' name='submit' value='{$this->lang->submit}' />
				</div>
				</form>");
			} else {
				if (trim($this->post['new_search']) == '') {
					return $this->message($this->lang->emote_add, $this->lang->emote_no_text);
				}

				$this->db->query("INSERT INTO {$this->pre}replacements (replacement_search, replacement_replace, replacement_clickable, replacement_type) VALUES ('{$this->post['new_search']}', '{$this->post['new_replace']}', " . intval(isset($this->post['new_click'])) . ", 'emoticon')");

				return $this->message($this->lang->emote_add, $this->lang->emote_added);
			}
			break;
		}
	}

	function list_emoticons($select)
	{
		$dirname = "../skins/{$this->skin}/emoticons/";

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
			$out .= "\n<option value='$emo'" . (($emo == $select) ? ' selected' : '') . ">$emo</option>";
		}

		return $out;
	}
}
?>