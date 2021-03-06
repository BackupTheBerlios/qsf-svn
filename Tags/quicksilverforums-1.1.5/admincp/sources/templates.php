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

class templates extends admin
{
	function execute()
	{
		$sections = array(
			'Admin'          => $this->lang->temps_admin,
			'active'         => $this->lang->temps_active,
			'ban'            => $this->lang->temps_ban,
			'board'          => $this->lang->temps_board_index,
			'censoring'      => $this->lang->temps_censoring,
			'cp'             => $this->lang->temps_cp,
			'email'          => $this->lang->temps_email,
			'emot_control'   => $this->lang->temps_emot_control,
			'forum'          => $this->lang->temps_forum,
			'forums'         => $this->lang->temps_forums,
			'groups'         => $this->lang->temps_groups,
			'help'           => $this->lang->temps_help,
			'login'          => $this->lang->temps_login,
			'logs'           => $this->lang->temps_logs,
			'Main'           => $this->lang->temps_main,
			'mass_mail'      => $this->lang->temps_mass_mail,
			'member_control' => $this->lang->temps_member_control,
			'members'        => $this->lang->temps_members,
			'mod'            => $this->lang->temps_mod,
			'pm'             => $this->lang->temps_pm,
			'poll'           => $this->lang->temps_polls,
			'post'           => $this->lang->temps_post,
			'printer'        => $this->lang->temps_printer,
			'profile'        => $this->lang->temps_profile,
			'recent'	 => $this->lang->temps_recent,
			'register'       => $this->lang->temps_register,
			'search'         => $this->lang->temps_search,
			'settings'       => $this->lang->temps_settings,
			'templates'      => $this->lang->temps_templates,
			'titles'         => $this->lang->temps_titles,
			'topic'          => $this->lang->temps_topics
		);

		if (!isset($this->get['skin'])) {
			$this->get['skin'] = $this->skin;
		}

		if (!isset($this->get['s'])) {
			$this->get['s'] = null;
		}

		if (!isset($this->get['i'])) {
			$this->get['i'] = null;
		}

		$skins = array();

		$query = $this->db->query("SELECT * FROM {$this->pre}skins");
		while ($s = $this->db->nqfetch($query))
		{
			$skins[$s['skin_dir']] = $s['skin_name'];
		}

		if (!isset($skins[$this->get['skin']])) {
			$this->get['skin'] = $this->skin;
		}

		switch($this->get['s'])
		{
		case 'add_html':
		        $this->tree($this->lang->add);
		        return $this->add_section($sections, $skins, $this->get['skin']);
		        break;

		case 'edit':
			$this->tree($this->lang->edit, "{$this->self}?a=templates&amp;s=html");
			return $this->edit_section($sections, $skins, $this->get['skin']);
			break;

		case 'skin':
			$this->set_title($this->lang->create_skin);
			$this->tree($this->lang->create_skin);
			return $this->add_skin();
			break;

		case 'editskin':
			$this->set_title($this->lang->edit_skin);
			$this->tree($this->lang->edit_skin);
			return $this->edit_skin();
			break;

		case 'load':
			$this->set_title($this->lang->install_skin);
			$this->tree($this->lang->install_skin);
			return $this->install_skin();
			break;

		case 'export':
			$this->set_title($this->lang->export_skin);
			$this->tree($this->lang->export_skin);
			return $this->export_skin();
			break;

		case 'del_html':
			$this->set_title($this->lang->delete_template);
			$this->tree($this->lang->delete_template);
			return $this->delete_list($sections, $skins, $this->get['skin']);

		case 'delete':
			$this->tree($this->lang->delete_template, "{$this->self}?a=templates&amp;s=del_html");
			return $this->delete_section($sections, $skins, $this->get['skin']);
			break;

		default:
			$this->set_title($this->lang->edit);
			$this->tree($this->lang->edit);
			return $this->template_list($sections, $skins, $this->get['skin']);
		}
	}

	function install_skin()
	{
		if (!isset($this->post['submit']) && !isset($this->get['temp'])) {
			$skin_box = '';

			$dp = opendir('../skins');
			while (($file = readdir($dp)) !== false)
			{
				$ext = strtolower(substr($file, -4));

				if ($ext == '.mbs') {
					$skin_box .= "<option value='../skins/$file'>" . substr($file, 0, -4) . "</option>\n";
				}
			}
			closedir($dp);

			return $this->message($this->lang->install_skin, "
			<form action='$this->self?a=templates&amp;s=load' method='post'><div>
				{$this->lang->skins_found}:<br /><br />
				<select name='install'>
					$skin_box
				</select>
				<input type='submit' name='submit' value='{$this->lang->install_skin}' /></div>
			</form>");
		} else {
			if (!isset($this->get['temp']) && !isset($this->get['install'])) {
				if (!isset($this->post['install'])) {
					return $this->message($this->lang->install_skin, $this->lang->skin_none);
				}
				include '../lib/zip.php';

				$dir = md5(microtime());

				$zip = new zip;
				$zip->extract($this->post['install'], "../skins/$dir");
				$this->chmod("../skins/$dir",0777,true);
				include "../skins/$dir/info.php";

				if (is_dir("../skins/{$skin['dir']}")) {
					return $this->message($this->lang->install_skin, "{$this->lang->install_exists1} <b>{$skin['name']}</b> {$this->lang->install_exists2}", $this->lang->install_overwrite, "$this->self?a=templates&amp;s=load&amp;temp=$dir");
				}

				$this->get['temp'] = $dir;
			}

			$dir = $this->get['temp'];

			include "../skins/$dir/info.php";

			if (is_dir("../skins/{$skin['dir']}")) {
				$this->remove_dir("../skins/{$skin['dir']}");
			}

			rename("../skins/$dir", "../skins/{$skin['dir']}");
			$this->chmod("../skins/{$skin['dir']}",0777,true);
			$dir = $skin['dir'];

			$queries = array();
			$pre = $this->pre;

			include "../skins/$dir/templates.php";

			$this->db->query("DELETE FROM {$this->pre}skins WHERE skin_dir='$dir'");
			$this->db->query("INSERT INTO {$this->pre}skins (skin_name, skin_dir) VALUES ('{$skin['name']}', '$dir')");
			$this->db->query("DELETE FROM {$this->pre}templates WHERE template_skin='$dir'");

			$this->execute_queries($queries);

			return $this->message($this->lang->install_skin, $this->lang->install_done);
		}
	}

	function export_skin()
	{
		if (!isset($this->post['skin'])) {
			$skin_box = $this->select_skins($this->skin);

			return $this->message($this->lang->export_skin, "
			{$this->lang->export_select}:<br /><br />
			<form action='$this->self?a=templates&amp;s=export' method='post'><div>
				<select name='skin'>
					$skin_box
				</select>
				<input type='submit' value='{$this->lang->export_skin}' /></div>
			</form>");
		} else {
			$templates = $this->dump_database(array('templates' => "template_skin='{$this->post['skin']}'"));

			$skin = $this->db->fetch("SELECT * FROM {$this->pre}skins WHERE skin_dir='{$this->post['skin']}'");
			$info =
"<?php
\$skin['name'] = \"" . addslashes($skin['skin_name']) . "\";
\$skin['dir'] = \"" . addslashes($skin['skin_dir']) . "\";
?>";

			if (file_exists("../skins/{$this->post['skin']}/info.php")) {
				unlink("../skins/{$this->post['skin']}/info.php");
			}

			if (file_exists("../skins/{$this->post['skin']}/templates.php")) {
				unlink("../skins/{$this->post['skin']}/templates.php");
			}

			include '../lib/zip.php';

			$this->chmod('../skins', 0777);

			$zip = new zip;
			$zip->add("../skins/{$this->post['skin']}");
			$zip->add_file($info, 'info.php');
			$zip->add_file($templates, 'templates.php');
			$zip->write_zip("../skins/{$this->post['skin']}.mbs");

			return $this->message($this->lang->export_skin, $this->lang->export_done, "{$this->post['skin']}.mbs", "../skins/{$this->post['skin']}.mbs");
		}
	}

	function edit_skin()
	{
		if (!isset($this->post['skin'])) {
			$skin_box = $this->select_skins($this->skin);

			return $this->message($this->lang->select_skin, "
			<form action='$this->self?a=templates&amp;s=editskin' method='post'><div>
				{$this->lang->select_skin_edit}:<br /><br />
				<select name='skin'>
					$skin_box
				</select>
				<input type='submit' value='{$this->lang->edit_skin}' /></div>
			</form>");
		} else {
			if (!isset($this->post['submit'])) {
				$skin = $this->db->fetch("SELECT skin_name, skin_dir FROM {$this->pre}skins WHERE skin_dir='{$this->post['skin']}'");

				return eval($this->template('ADMIN_EDIT_SKIN'));
			} else {
				if (isset($this->post['deleteskin'])) {
					$existing = $this->db->fetch("SELECT skin_dir FROM {$this->pre}skins WHERE skin_dir!='{$this->post['skin']}' LIMIT 1");
					if (!isset($existing['skin_dir'])) {
						return $this->message($this->lang->edit_skin, $this->lang->only_skin);
					}

					$this->db->query("DELETE FROM {$this->pre}skins WHERE skin_dir='{$this->post['skin']}'");
					$this->db->query("DELETE FROM {$this->pre}templates WHERE template_skin='{$this->post['skin']}'");
					$this->db->query("UPDATE {$this->pre}users SET user_skin='{$existing['skin_dir']}' WHERE user_skin='{$this->post['skin']}'");

					$this->remove_dir("../skins/{$this->post['skin']}");

					return $this->message($this->lang->edit_skin, $this->lang->skin_deleted);
				} else {
					if ((trim($this->post['skin_name']) == '') || (trim($this->post['skin_dir']) == '')) {
						return $this->message($this->lang->edit_skin, $this->lang->skin_dirname);
					}

					$dup = false;

					// If we're changing the skin directory
					if ($this->post['skin_dir'] != $this->post['skin']) {
						$this->post['skin_dir'] = preg_replace('/[^a-zA-Z0-9]/', '', $this->post['skin_dir']);

						while (file_exists("../skins/{$this->post['skin_dir']}"))
						{
							$dup = true;
							$this->post['skin_dir'] .= '1';
						}

						$this->db->query("UPDATE {$this->pre}templates SET template_skin='{$this->post['skin_dir']}' WHERE template_skin='{$this->post['skin']}'");
						$this->db->query("UPDATE {$this->pre}users SET user_skin='{$this->post['skin_dir']}' WHERE user_skin='{$this->post['skin']}'");

						rename("../skins/{$this->post['skin']}", "../skins/{$this->post['skin_dir']}");
					}

					$this->db->query("UPDATE {$this->pre}skins SET skin_name='{$this->post['skin_name']}', skin_dir='{$this->post['skin_dir']}' WHERE skin_dir='{$this->post['skin']}'");

					if (!$dup) {
						return $this->message($this->lang->edit_skin, $this->lang->select_skin_edit_done);
					} else {
						return $this->message($this->lang->edit_skin, "{$this->lang->skin_dup} <b>{$this->post['skin_dir']}</b>.");
					}
				}
			}
		}
	}

	function remove_dir($dir)
	{
		$dp = opendir($dir);

		while (($file = readdir($dp)) !== false)
		{
			if (($file == '.') || ($file == '..')) {
				continue;
			}

			if (is_dir("$dir/$file")) {
				$this->remove_dir("$dir/$file");
			} else {
				unlink("$dir/$file");
			}
		}

		closedir($dp);
		rmdir($dir);
	}

	function delete_list($sections, $skins, $template)
	{
		$skin_box = $this->select_skins($template);

		$out = "";
		$query = $this->db->query("SELECT DISTINCT(template_set) as temp_set FROM {$this->pre}templates WHERE template_skin='$template'");
		while ($data = $this->db->nqfetch($query))
		{
			if (!isset($sections[$data['temp_set']])) {
				$sections[$data['temp_set']] = $data['temp_set'];
			}

			$out .= "\n<li><a href='$this->self?a=templates&amp;s=delete&amp;section={$data['temp_set']}&amp;skin=$template'>{$sections[$data['temp_set']]}</a></li>";
		}
		return eval($this->template('ADMIN_LIST_TEMPLATES_DELETE'));
	}

	function template_list($sections, $skins, $template)
	{
		$skin_box = $this->select_skins($template);

		$out = "";
		$query = $this->db->query("SELECT DISTINCT(template_set) as temp_set FROM {$this->pre}templates WHERE template_skin='$template'");
		while ($data = $this->db->nqfetch($query))
		{
			if (!isset($sections[$data['temp_set']])) {
				$sections[$data['temp_set']] = $data['temp_set'];
			}

			$out .= "\n<li><a href='$this->self?a=templates&amp;s=edit&amp;section={$data['temp_set']}&amp;skin=$template'>{$sections[$data['temp_set']]}</a></li>";
		}
		return eval($this->template('ADMIN_LIST_TEMPLATES'));
	}

	function add_section($sections, $skins, $template)
	{
		if (!isset($this->post['form'])) {
			$skin_box = $this->select_skins($template);
			$template_box = '';

			$query = $this->db->query("SELECT DISTINCT(template_set) as temp_set FROM {$this->pre}templates WHERE template_skin='$template'");
			while ($data = $this->db->nqfetch($query))
			{
				if (!isset($sections[$data['temp_set']])) {
					$sections[$data['temp_set']] = $data['temp_set'];
				}
				$template_box .= "<option value='{$data['temp_set']}'>{$sections[$data['temp_set']]}</option>";
			}
			return eval($this->template('ADMIN_ADD_TEMPLATE'));
        	} else {
		        $template = $this->post['template'];
		        $template_set = !empty($this->post['ntemplate_set']) ? $this->post['ntemplate_set'] : $this->post['template_set'];
		        $name = $this->post['name'];
		        $html = $this->post['html'];
		        $title = $this->post['title'];
		        $desc = $this->post['desc'];
		        $pos = is_numeric($this->post['pos']) ? $this->post['pos'] : 1;

		        $this->db->query("INSERT INTO {$this->pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('$template', '$template_set', '$name', '$html', '$title', '$desc', $pos)");
		        return $this->message($this->lang->templates, $this->lang->template_added, $this->lang->continue, "$this->self?a=templates&amp;skin=$template");
	        }
	}

	function delete_section($sections, $skins, $template)
	{
		$title = isset($sections[$this->get['section']]) ? $sections[$this->get['section']] : $this->get['section'];
		$this->tree($title);

		if (!isset($this->post['submit']) &&!isset($this->post['submitTemp'])) {
			$query = $this->db->query("SELECT template_displayname, template_description, template_name, template_html, template_set FROM {$this->pre}templates WHERE template_skin='{$this->get['skin']}' AND template_set='{$this->get['section']}'");

			$out = "";
			while ($data = $this->db->nqfetch($query))
			{
			   $out .= "<option value='{$data['template_name']}'>" . $data['template_name'] . "</option>";
			}
			return $this->message($this->lang->delete_template, "
				<form action='$this->self?a=templates&amp;s=delete&amp;section={$this->get['section']}&amp;skin={$this->get['skin']}' method='post'>
				<div>
				{$this->lang->select_template}:<br /><br />
				<select name='template'>
					$out
				</select>
				<input type='submit' name='submit' value='{$this->lang->delete_template}' />
				</div></form>");
		} elseif( !isset($this->get['i'])) {
			$this->iterator_init('tablelight', 'tabledark');

			$query = $this->db->query("SELECT template_displayname, template_description, template_name, template_html FROM {$this->pre}templates WHERE template_skin='$template' AND template_name='{$this->post['template']}'");

			$out = "<form action='$this->self?a=templates&amp;s=delete&amp;i=confirm&amp;section={$this->get['section']}&amp;skin={$this->get['skin']}' method='post'>{$this->table}
				<tr>
					<td align='center' class='" . $this->iterate() . "'>You are about to delete the <span class='red'>{$this->post['template']}</span> template from the <span class='red'>{$template}</span> skin.</td>
				</tr>";

			while ($data = $this->db->nqfetch($query))
			{
				$template_name = $data['template_name'];
				$out .= "<tr>
					<td class='" . $this->iterate() . "'>
						<span style='font-weight:bold; font-size:14px'>{$data['template_displayname']}</span><br /><br />
						{$data['template_name']}<br /><br />
						{$data['template_description']}<br /><br />
						<textarea style='background-color:#FFFFFF; font-family: courier new, courier, monospaced, serif; font-size:12px; width:100%' rows='18' wrap='off'>{$data['template_html']}</textarea>
					</td>
				</tr>";
			}
			$out .= "<tr>
				<td align='center' class='" . $this->iterate() . "'>
				<input type='submit' name='submit' value='{$this->lang->delete_template}' />
				<input type='hidden' name='submitTemp' value='{$template_name}' />
				</td>
				</tr>{$this->etable}</form>";
			return $this->message($this->lang->delete_template,$out);
		} else {
			$this->db->query("DELETE FROM {$this->pre}templates WHERE template_skin='{$this->get['skin']}' AND template_name='{$this->post['submitTemp']}'");
			return $this->message($this->lang->delete_template,"Template Deleted");
		}
	}

	function edit_section($sections, $skins, $template)
	{
		$title = isset($sections[$this->get['section']]) ? $sections[$this->get['section']] : $this->get['section'];
		$this->tree($title);

		if (!isset($this->post['submitTemps'])) {
			$query = $this->db->query("SELECT template_displayname, template_description, template_name, template_html FROM {$this->pre}templates WHERE template_skin='$template' AND template_set='{$this->get['section']}' ORDER BY template_position ASC");

			$this->iterator_init('tablelight', 'tabledark');

			$out = "";
			while ($data = $this->db->nqfetch($query))
			{
				/*
				$data['template_html'] = preg_replace('/\{\$this->lang->(.+?)\}/', '{lang.\\1}', $data['template_html']);
				$data['template_html'] = preg_replace('/\{\$this->(.+?)\}/', '{this.\\1}', $data['template_html']);
				$data['template_html'] = preg_replace('/\{\$(.+?)\[\'(.+?)\'\]\}/', '{\\1.\\2}', $data['template_html']);
				$data['template_html'] = preg_replace('/\{\$(.+?)\}/', '{local.\\1}', $data['template_html']);
				*/

				$data['template_html'] = $this->format($data['template_html'], FORMAT_HTMLCHARS);

				$out .= "
				<tr>
					<td class='" . $this->iterate() . "'>
						<span style='font-weight:bold; font-size:14px'>{$data['template_displayname']}</span><br /><br />
						{$data['template_name']}
						<input type='submit' name='submitTemps' value='{$this->lang->edit_templates}' style='float:right' /><br />
						{$data['template_description']}<br /><br />
						<textarea onchange=\"this.style.backgroundColor='#FFFFEE'; changed=true\" name='code[{$data['template_name']}]' style='background-color:#FFFFFF; font-family: courier new, courier, monospaced, serif; font-size:12px; width:100%' rows='18' cols='80' wrap='off'>{$data['template_html']}</textarea>
					</td>
				</tr>";
			}
			return eval($this->template('ADMIN_EDIT_TEMPLATE'));
		} else {
			$evil = 0;

			foreach ($this->post['code'] as $var => $val)
			{
				if ($var == 'Copyright') {
					if (!preg_match('/MercuryBoard/i', $val) || !preg_match('/Quicksilver Forums/i', $val)) {
						$evil = 1;
						continue;
					}
				}

				//$val = preg_replace('/\{lang-(.+?)\}/', '{$this->lang->\\1}', $val);

				$this->db->query("UPDATE {$this->pre}templates SET template_html='$val' WHERE template_skin='$template' AND template_name='$var' AND template_set='{$this->get['section']}'");
			}

			if (!$evil) {
				$out = $this->message($this->lang->templates, $this->lang->template_updated, $this->lang->continue, "$this->self?a=templates&amp;skin=$template");
			} else {
				$out = $this->message($this->lang->templates, $this->lang->credit);
			}
		}
		return $out;
	}

	function add_skin()
	{
		if (!isset($this->post['submit'])) {
			$skin_box = $this->select_skins(0);

			return $this->message($this->lang->create_skin, "
			<form action='$this->self?a=templates&amp;s=skin' method='post'><div>
				{$this->lang->create_new} <input type='text' name='new_name' size='24' maxlength='32' class='input' /> {$this->lang->based_on}
				<select name='new_based'>
					$skin_box
				</select><br /><br />
				<input type='submit' name='submit' value='{$this->lang->create_skin}' /></div>
			</form>");
		} else {
			if (trim($this->post['new_name']) == '') {
				return $this->message($this->lang->create_skin, $this->lang->skin_name);
			}

			$name = preg_replace('/[^a-zA-Z0-9]/', '', $this->post['new_name']);
			while (file_exists("../skins/$name"))
			{
				$name .= '1';
			}

			if (!$this->dir_copy("../skins/{$this->post['new_based']}/", "../skins/$name/")) {
				return $this->message($this->lang->create_skin, $this->lang->chmod);
			}
			$this->chmod("../skins/$name/",0775,true);

			$this->db->query("INSERT INTO {$this->pre}skins (skin_name, skin_dir) VALUES ('" . addslashes($this->post['new_name']) . "', '$name')");

			$query = $this->db->query("SELECT * FROM {$this->pre}templates WHERE template_skin='{$this->post['new_based']}'");
			while ($r = $this->db->nqfetch($query))
			{
				$r['template_skin'] = addslashes($r['template_skin']);
				$r['template_set'] = addslashes($r['template_set']);
				$r['template_name'] = addslashes($r['template_name']);
				$r['template_html'] = addslashes($r['template_html']);
				$r['template_displayname'] = addslashes($r['template_displayname']);
				$r['template_description'] = addslashes($r['template_description']);
				$r['template_position'] = addslashes($r['template_position']);
				$this->db->query("INSERT INTO {$this->pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('$name', '{$r['template_set']}', '{$r['template_name']}', '{$r['template_html']}', '{$r['template_displayname']}', '{$r['template_description']}', '{$r['template_position']}')");
			}

			return $this->message($this->lang->create_skin, $this->lang->skin_created, $this->lang->continue, "$this->self?a=templates&amp;s=html&amp;skin=$name");
		}
	}
}
?>
