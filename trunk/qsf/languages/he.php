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

/**
 * Hebrew language module
 *
 * @author Anonymous
 * @since 1.1.0
 **/
class he
{
	function active()
	{
		$this->active_last_action = '������ ������';
		$this->active_modules_active = '���� ������ ������� ������';
		$this->active_modules_board = '������� ��������';
		$this->active_modules_cp = '����� ���� ���� ����';
		$this->active_modules_forum = '%s :���� �� ������';
		$this->active_modules_help = '����� �����';
		$this->active_modules_login = '�����\�����';
		$this->active_modules_members = '���� ������ ���� ������';
		$this->active_modules_mod = '���� �������';
		$this->active_modules_pm = '����� �����\'� ����';
		$this->active_modules_post = '����� �����';
		$this->active_modules_printer = '%s :����� �� ������';
		$this->active_modules_profile = '%s :���� �� �������';
		$this->active_modules_recent = '���� �� ������� ��������';
		$this->active_modules_search = '����';
		$this->active_modules_topic = '%s :���� �� ������';
		$this->active_time = '���';
		$this->active_user = '�����';
		$this->active_users = '������� ������';
	}

	function admin()
	{
		$this->admin_add_emoticons = '����� ���� ����';
		$this->admin_add_member_titles = '����� ����� ��� ��������';
		$this->admin_add_templates = 'HTML ����� ������';
		$this->admin_ban_ips = 'IP ����� ������';
		$this->admin_censor = '����� ��������';
		$this->admin_cp_denied = '����� �����';
		$this->admin_cp_warning = '���� ���� ����� ����� ����� �����. <b>������<b> ��� ���� ����� ���� ������ �� ����� ������';
		$this->admin_create_forum = '����� �����';
		$this->admin_create_group = '����� �����';
		$this->admin_create_help = '����� ���� ����';
		$this->admin_create_skin = '����� ����';
		$this->admin_db = '��� ������';
		$this->admin_db_backup = '���� ��� ������';
		$this->admin_db_conn = '����� ������ �������';
		$this->admin_db_optimize = '����� ��� �������';
		$this->admin_db_query = 'SQL ����� ������';
		$this->admin_db_restore = '������ ������';
		$this->admin_delete_forum = '����� �����';
		$this->admin_delete_group = '����� �����';
		$this->admin_delete_help = '����� ���� ����';
		$this->admin_delete_member = '����� ���';
		$this->admin_delete_template = 'HTML ����� �����';
		$this->admin_edit_emoticons = '����� �� ����� ���� ����';
		$this->admin_edit_forum = '����� �����';
		$this->admin_edit_group_name = '����� �� �����/��';
		$this->admin_edit_group_perms = '����� ������ �����/��';
		$this->admin_edit_help = '����� ���� ����';
		$this->admin_edit_member = '����� ���';
		$this->admin_edit_member_perms = '����� ������ ���/��';
		$this->admin_edit_member_titles = '����� �� ����� ����� ��� ��������';
		$this->admin_edit_settings = '����� ������ ���';
		$this->admin_edit_skin = '���� ����� �� �����';
		$this->admin_edit_templates = 'HTML ����� ������';
		$this->admin_emoticons = '���� ����';
		$this->admin_export_skin = '����� ����';
		$this->admin_fix_stats = '��� ���������� ���';
		$this->admin_forum_order = '����� ��� �������';
		$this->admin_forums = '������� ���������';
		$this->admin_groups = '������';
		$this->admin_heading = 'Quicksilver ��� ����� �� ���� �������� ��';
		$this->admin_help = '����� ����';
		$this->admin_install_emoticons = '����� ���� ����';
		$this->admin_install_skin = '���� �����';
		$this->admin_logs = '����� ������ ����';
		$this->admin_mass_mail = '����� ������ ������';
		$this->admin_members = '�����';
		$this->admin_phpinfo = 'PHP ����� ����';
		$this->admin_prune = '����� ������ �����';
		$this->admin_recount_forums = '����� ������ �������';
		$this->admin_settings = '������';
		$this->admin_skins = '������';
		$this->admin_stats = '���� �����������';
		$this->admin_upgrade_skin = '���� ������';
		$this->admin_your_board = '������ ���';
	}

	function backup()
	{
		$this->backup_create = '����� ��� ������';
		$this->backup_done = '.Quicksilver ��� ������� ���� ������� ������ �� �������� ��';
		$this->backup_found = '.Quicksilver �������� ����� ����� ������� �������� ��';
		$this->backup_invalid = '.��� ������ ���� �����. �� ���� ������� ���� �������';
		$this->backup_none = '.Quicksilver �� ����� ������� ������� �������� ��';
		$this->backup_restore = '���� �����';
		$this->backup_restore_done = '.��� ������� ����� ������';
		$this->backup_warning = '.Quicksilver �����: ����� �� ����� �� �� ������� ������ �������� ��';
	}

	function ban()
	{
		$this->ban = '����';
		$this->ban_banned_ips = '������ IP ������';
		$this->ban_banned_members = '����� ������';
		$this->ban_ip = '������ IP ������';
		$this->ban_member_explain1 = '������ �������, ��� �� ����� �������� ���� �';
		$this->ban_member_explain2 = '.���� ���� ��������';
		$this->ban_members = '����� ������';
		$this->ban_nomembers = '��� ���� ����� ������.';
		$this->ban_one_per_line = '.����� ��� ��� ����';
		$this->ban_regex_allowed = '������� ������ ������. �������� ������ � * ����� ��� ���� ����� ��� �� ����.';
		$this->ban_settings = '������ �����';
		$this->ban_users_banned = '.������� ������';
	}

	function board()
	{
		$this->board_active_users = '������� ������';
		$this->board_birthdays = '��� ����� ����:';
		$this->board_bottom_page = '���� ������ �����';
		$this->board_can_post = '��� ���� ����� ������ ���.';
		$this->board_can_topics = '��� ���� ����� ������ �� �� ����� ������ �����.';
		$this->board_cant_post = '���� ���� ����� ������ ���';
		$this->board_cant_topics = '���� ����� ����� �� ����� ������ ������ ���.';
		$this->board_forum = '�����';
		$this->board_guests = '������';
		$this->board_last_post = '����� ������';
		$this->board_mark = '��� �� ������� ������';
		$this->board_mark1 = '�� ������� ������� ����� ������.';
		$this->board_members = '�������';
		$this->board_message = '%s �����';
		$this->board_most_online = '%s � %d ���� �������� ������ ���� ����� ���';
		$this->board_nobday = '��� ��� ����� ����.';
		$this->board_nobody = '��� ���� ����� �������.';
		$this->board_nopost = '��� ������';
		$this->board_noview = '��� �� ������ ����� �����.';
		$this->board_regfirst = '��� �� ������ ����� �����. �� ��� ����, ��� ���� ����� �����.';
		$this->board_replies = '������';
		$this->board_stats = '����������';
		$this->board_stats_string = '������. %s ������ ��"� %s ������ � %s ���� <b /> .%s ������� �����.���� ��� ����� ���  %s';
		$this->board_top_page = '���� ���� �����';
		$this->board_topics = '������';
		$this->board_users = '�������';
		$this->board_write_topics = '���� ���� ����� ������ ������ ���.';
	}

	function censoring()
	{
		$this->censor = '����� ��������';
		$this->censor_one_per_line = '��� ��� ����.';
		$this->censor_regex_allowed = '������� ������ ������. �������� ������ � * ����� ��� ���� ��� ��� �� ����.';
		$this->censor_updated = '.����� ������ ������';
	}

	function cp()
	{
		$this->cp_aim = '�� ����� �� AIM';
		$this->cp_already_member = '���� �������� ����� ��� ������ �� ��� ����� ���.';
		$this->cp_apr = '�����';
		$this->cp_aug = '������';
		$this->cp_avatar_current = '������ ���';
		$this->cp_avatar_error = '����� �������';
		$this->cp_avatar_must_select = '��� ���� ����� ������.';
		$this->cp_avatar_none = '��� ����� �������';
		$this->cp_avatar_pixels = '�������';
		$this->cp_avatar_select = '��� ������';
		$this->cp_avatar_size_height = '���� ������� ��� ���� ����� ����� 1 �';
		$this->cp_avatar_size_width = '���� ������� ��� ���� ����� ����� 1 �';
		$this->cp_avatar_upload = '���� ������ ����� ���';
		$this->cp_avatar_upload_failed = '���� �� ������ �����. ����� �� ����.';
		$this->cp_avatar_upload_not_image = '��� ���� ���� �� ������ ������� ��� �������.';
		$this->cp_avatar_upload_too_large = '������ ���� ���� ����� ���� ����. ���� �������� ��� %d ��������.';
		$this->cp_avatar_url = '���� URL �� �������';
		$this->cp_avatar_use = '����� ������� �����';
		$this->cp_bday = '��� �����';
		$this->cp_been_updated = '������ ��� �����.';
		$this->cp_been_updated1 = '������ ��� �����.';
		$this->cp_been_updated_prefs = '������ ��� ������.';
		$this->cp_changing_pass = '����� �����';
		$this->cp_contact_pm = '���� ������ ����� �� ������ ������?';
		$this->cp_cp = '��� ����';
		$this->cp_current_avatar = '������';
		$this->cp_current_time = '���� ����� %s.';
		$this->cp_custom_title = '����� ��� ������ �����';
		$this->cp_custom_title2 = '������ ��� ������ ������ ����';
		$this->cp_dec = '�����';
		$this->cp_editing_avatar = '����� ������';
		$this->cp_editing_profile = '����� ������';
		$this->cp_email = '���� ��������';
		$this->cp_email_form = '����� ������ ����� ��� ���� ��� ���� �������?';
		$this->cp_email_invaid = '���� �������� ������ �����.';
		$this->cp_err_avatar = '����� ����� ������';
		$this->cp_err_updating = '����� ������� ������';
		$this->cp_feb = '������';
		$this->cp_file_type = '������ ������ ����� ����. ����� �� ������ ������� ����, ���� ���� �� ������ ��� gif, jpg, �� png.';
		$this->cp_format = '�� �����';
		$this->cp_gtalk = 'GTalk �����';
		$this->cp_header = '��� ���� ����';
		$this->cp_height = '����';
		$this->cp_icq = '���� ICQ';
		$this->cp_interest = '����� �����';
		$this->cp_jan = '�����';
		$this->cp_july = '����';
		$this->cp_june = '����';
		$this->cp_label_edit_avatar = '����� ������';
		$this->cp_label_edit_pass = '����� �����';
		$this->cp_label_edit_prefs = '����� ������';
		$this->cp_label_edit_profile = '����� ������';
		$this->cp_label_edit_sig = '����� �����';
		$this->cp_label_edit_subs = '����� ������';
		$this->cp_language = '���';
		$this->cp_less_charac = '�� ��� ���� ����� 32 �������.';
		$this->cp_location = '�����';
		$this->cp_login_first = '���� ���� ����� ����� ��� ���� ���� ����.';
		$this->cp_mar = '���';
		$this->cp_may = '���';
		$this->cp_msn = 'MSN ����\'�';
		$this->cp_must_orig = '.��� ��� ���� ����� ��� �����. �������� ����� �� ���� ���� �������';
		$this->cp_new_notmatch = '������ ����� ������ ���� �����.';
		$this->cp_new_pass = '����� ����';
		$this->cp_no_flash = '������ ����� ������ ���� ��.';
		$this->cp_not_exist = '���� ����! (%s) ������ ������';
		$this->cp_nov = '������';
		$this->cp_oct = '�������';
		$this->cp_old_notmatch = '������ ����� ������ ���� ����� ��� �������.';
		$this->cp_old_pass = '����� ����';
		$this->cp_pass_notvaid = '������ ��� �� �����. ���� ����� ����� ������ ������ ���� ������, ������, �� �����, �� ����� �������.';
		$this->cp_preferences = '���� ������';
		$this->cp_preview_sig = ':���� ������ �� ������';
		$this->cp_privacy = '�������� ������';
		$this->cp_repeat_pass = '���� �� ������ �����';
		$this->cp_sept = '������';
		$this->cp_show_active = '����� �� ��������� ����� ����� ������?';
		$this->cp_show_email = '����� ����� ������ �������?';
		$this->cp_signature = '�����';
		$this->cp_size_max = '�������. %s �� %s ������ ������ ���� ����. ����� �������� ����� ���';
		$this->cp_skin = '���� �� �����';
		$this->cp_sub_change = '���� �����';
		$this->cp_sub_delete = '�����';
		$this->cp_sub_expire = '����� �����';
		$this->cp_sub_name = '�� �����';
		$this->cp_sub_no_params = '�� ����� �������.';
		$this->cp_sub_success = '.%s ���� ���� ��� �';
		$this->cp_sub_type = '��� �����';
		$this->cp_sub_updated = '�������� ����� �����.';
		$this->cp_topic_option = '�������� ������';
		$this->cp_updated = '������ �����';
		$this->cp_updated1 = '������ �����';
		$this->cp_updated_prefs = '������ ������';
		$this->cp_user_exists = '�� ����� �� ��� ����.';
		$this->cp_valided = '������ ����� �����.';
		$this->cp_view_avatar = '������ �������?';
		$this->cp_view_emoticon = '������ �������?';
		$this->cp_view_signature = '������ ������?';
		$this->cp_welcome = '������ ����� ���� ���� ����. ��� ���� ���� ����� ������ �������� ������ ���� ��. ��� ���� ��������� ��� ��� �����.';
		$this->cp_width = '����';
		$this->cp_www = '�� ����';
		$this->cp_yahoo = 'Yahoo ����\'�';
		$this->cp_zone = '����� ����';
	}

	function email()
	{
		$this->email_blocked = '��� ���� ���� ������ ��� ���� ��.';
		$this->email_email = '���� ��������';
		$this->email_msgtext = '��� ����� �����:';
		$this->email_no_fields = '���� ����� ���� ����� ��� ����� �����.';
		$this->email_no_member = '�� ���� ��� ��� ��';
		$this->email_no_perm = '��� �� ������ ����� ������ ��� ����.';
		$this->email_sent = '����� �����.';
		$this->email_subject = '����:';
		$this->email_to = '��:';
	}

	function emot_control()
	{
		$this->emote = '���� ����';
		$this->emote_add = '���� ���� ����';
		$this->emote_added = '��� ���� ������.';
		$this->emote_clickable = '���� ������';
		$this->emote_edit = '����� ���� ����';
		$this->emote_image = '�����';
		$this->emote_install = '����� ���� ����';
		$this->emote_install_done = '���� ���� ������ ���� ������.';
		$this->emote_install_warning = '����� �� ���� �� ������ ���� ����� ������� ������ ���� ���� ������ ������ ����� ���� ���� �������.';
		$this->emote_no_text = '�� ���� ��� ���� �����.';
		$this->emote_text = '����';
	}

	function forum()
	{
		$this->forum_by = '�� ���';
		$this->forum_can_post = '��� ���� ����� ������ ���.';
		$this->forum_can_topics = '��� ���� ����� ������ ������ ���.';
		$this->forum_cant_post = '��� �� ���� ����� ������ ���.';
		$this->forum_cant_topics = '��� �� ���� ����� ������ ������ ���.';
		$this->forum_dot = '�����';
		$this->forum_dot_detail = '���� ����� ������';
		$this->forum_forum = '�����';
		$this->forum_guest = '����';
		$this->forum_hot = '��';
		$this->forum_icon = '������ �� ����';
		$this->forum_jump = '���� ������ ������ �����';
		$this->forum_last = '����� ������';
		$this->forum_locked = '����';
		$this->forum_moved = '�����';
		$this->forum_msg = '%s �����';
		$this->forum_new = '���';
		$this->forum_new_poll = '���� ��� ���';
		$this->forum_new_topic = '���� ���� ���';
		$this->forum_no_topics = '��� ������ ����� ������ ��.';
		$this->forum_noexist = '������ ������ �� ����.';
		$this->forum_nopost = '��� ������';
		$this->forum_not = '��';
		$this->forum_noview = '��� �� ������ ����� �������� ����.';
		$this->forum_pages = '������';
		$this->forum_pinned = '����';
		$this->forum_pinned_topic = '���� ����';
		$this->forum_poll = '���';
		$this->forum_regfirst = '���� ����� ����� ������. �� �����, ����� ����� �����.';
		$this->forum_replies = '������';
		$this->forum_starter = '�����';
		$this->forum_sub = '��-�����';
		$this->forum_sub_last_post = '����� ������';
		$this->forum_sub_replies = '������';
		$this->forum_sub_topics = '������';
		$this->forum_subscribe = '��� �� ����� ���� ������� ������ ��';
		$this->forum_topic = '����';
		$this->forum_views = '�����';
		$this->forum_write_topics = '���� ����� ����� ������ ������ ��.';
	}

	function forums()
	{
		$this->forum_controls = '���� ������';
		$this->forum_create = '����� �����';
		$this->forum_create_cat = '��� �������';
		$this->forum_created = '������ ����';
		$this->forum_default_perms = '������ ����� ����';
		$this->forum_delete = '����� �����';
		$this->forum_delete_warning = '����� �� �� �����. <br />��� ��� ���� ���� ����� �� ������ ��� ���� �������� ���������?';
		$this->forum_deleted = '������ ����.';
		$this->forum_description = '����';
		$this->forum_edit = '����� �����';
		$this->forum_edited = '������ ���� ������.';
		$this->forum_empty = '�� ���� �� ������. ��� ���� ��� ��.';
		$this->forum_is_subcat = '����� �� ��� ��-������� ����.';
		$this->forum_name = '��';
		$this->forum_no_orphans = '���� ���� ����� ����� �"� ����� ����� ���.';
		$this->forum_none = '��� ������� ������.';
		$this->forum_ordered = '��� �������� �����';
		$this->forum_ordering = '��� ��� ��������';
		$this->forum_parent = '���� ���� ����� �� �� ������/�� ����� ��.';
		$this->forum_parent_cat = '�������� ��';
		$this->forum_quickperm_select = '��� ������ ���� ���� ������ �� ������� ���.';
		$this->forum_quickperms = '������ ������';
		$this->forum_recount = '����� ������ �������';
		$this->forum_select_cat = '��� ������� ����� ���� ����� �����.';
		$this->forum_subcat = '��-�������';
	}

	function groups()
	{
		$this->groups_bad_format = 'You must use %s in the format, which represents the group name.'; //Translate
		$this->groups_based_on = '������ ��';
		$this->groups_create = '����� �����';
		$this->groups_create_new = '��� ����� ������� ���� ���';
		$this->groups_created = '����� �����';
		$this->groups_delete = '����� �����';
		$this->groups_deleted = '����� �����.';
		$this->groups_edit = '����� �����';
		$this->groups_edited = '����� �����.';
		$this->groups_formatting = '��� �����';
		$this->groups_i_confirm = '��� ���� ������� ����� �� ����� ������.';
		$this->groups_name = '��';
		$this->groups_no_action = '�� ����� �����.';
		$this->groups_no_delete = ' = , ����� ������ ������.Quicksilver ������ ����� ������� ������� �������� ��<br />��� ������ ������� ����� ������.';
		$this->groups_no_group = '�� ������ �����.';
		$this->groups_no_name = '�� ���� �� ������.';
		$this->groups_only_custom = '.Quicksilver ����: �������� ����� �� ������ ������� �����. ������ ����� ������� ������� �������� ��';
		$this->groups_the = '������';
		$this->groups_to_edit = '����� ������';
		$this->groups_type = '��� �����';
		$this->groups_will_be = '�����.';
		$this->groups_will_become = '������� ������� ������ �����';
	}

	function help()
	{
		$this->help_add = '����� ���� ����';
		$this->help_article = '���� ���� ����';
		$this->help_available_files = '����';
		$this->help_confirm = '��� ��� ���� ���� �����';
		$this->help_content = '���� ����';
		$this->help_delete = '����� ���� ����';
		$this->help_deleted = '���� ���� ����.';
		$this->help_edit = '����� ���� ����';
		$this->help_edited = '���� ���� �����.';
		$this->help_inserted = '���� ����� ���� �������.';
		$this->help_no_articles = '�� ����� ����� ���� ���� �������';
		$this->help_no_title = '��� ������ ����� ���� ���� ��� �����.';
		$this->help_none = '��� ���� ���� ���� ������';
		$this->help_not_exist = '���� ���� �� �� ����.';
		$this->help_select = '��� ����� ���� ������.';
		$this->help_select_delete = '��� ����� ���� ������.';
		$this->help_title = '�����';
	}

	function home()
	{
		$this->home_choose = '������ ��� ������.';
		$this->home_menu_title = '����� ��� ���� ����';
	}

	function login()
	{
		$this->login_cant_logged = '������ ���. cookies . �����, ���� �������\'Username\' \' ���� �UsErNaMe\' ���� ������ ������� ����� �������, �"�<br /><br />�� ������� ������ ������. ���� ��� ������ ������� ������.';
		$this->login_cookies = '���� ������ ������. cookies ���� �����';
		$this->login_forgot_pass = '���� �� ������?';
		$this->login_header = '�����';
		$this->login_logged = '���� ����� �����\�.';
		$this->login_now_out = '���� ����� �����\�.';
		$this->login_out = '�����';
		$this->login_pass = '�����';
		$this->login_pass_no_id = '�� ���� ��� �� �� ������ ������.';
		$this->login_pass_request = '������ ����� ������, ��� �� ������ ������ ����� ������� �� ������.';
		$this->login_pass_reset = '����� �����';
		$this->login_pass_sent = '������ �����. ������ ����� ����� ����� ������� �� ������.';
		$this->login_sure = '��� ���� ���� ���� ������ � \'%s\'?';
		$this->login_user = '�� �����';
	}

	function logs()
	{
		$this->logs_action = '�����';
		$this->logs_deleted_post = '����� �����';
		$this->logs_deleted_topic = '����� �����';
		$this->logs_edited_post = '����� �����';
		$this->logs_edited_topic = '����� �����';
		$this->logs_id = 'IDs'; //Translate
		$this->logs_locked_topic = '����� �����';
		$this->logs_moved_from = '�������';
		$this->logs_moved_to = '������';
		$this->logs_moved_topic = '������ �����';
		$this->logs_moved_topic_num = '������ ����� #';
		$this->logs_pinned_topic = '����� �����';
		$this->logs_post = '�����';
		$this->logs_time = '���';
		$this->logs_topic = '����';
		$this->logs_unlocked_topic = '������ �����';
		$this->logs_unpinned_topic = '����� �����';
		$this->logs_user = '�����';
		$this->logs_view = '��� ������ ����';
	}

	function main()
	{
		$this->main_activate = '������ �� ����� �����.';
		$this->main_activate_resend = '��� ���� ���� �����';
		$this->main_admincp = '��� ���� �� ����';
		$this->main_banned = '����� ��� ������ ���� ����� �������.';
		$this->main_code = '���';
		$this->main_cp = '��� ����';
		$this->main_full = '���';
		$this->main_help = '����';
		$this->main_load = '����';
		$this->main_login = '�����';
		$this->main_logout = '�����';
		$this->main_mark = '��� ���';
		$this->main_mark1 = '��� �� �� ������� ������';
		$this->main_max_load = '�� ����, ��� ���� ���� �� ������� �������. %s ��� �������, ���� �';
		$this->main_members = '�������';
		$this->main_messenger = '������ ������';
		$this->main_new = '���';
		$this->main_next = '���';
		$this->main_prev = '�����';
		$this->main_queries = '�������';
		$this->main_quote = '�����';
		$this->main_recent = '������ �������';
		$this->main_recent1 = '��� ������� �������� ��� ������ ������';
		$this->main_register = '�����';
		$this->main_reminder = '������: ����� �� ���� ����� ������ �� �"� ������.';
		$this->main_reminder_closed = '������ ���� ����� ����� �� �"� ������';
		$this->main_said = '���';
		$this->main_search = '�����';
		$this->main_topics_new = '�� ������ ����� ������ ���.';
		$this->main_topics_old = '��� ������ ����� ������ ���.';
		$this->main_welcome = '���� ���';
		$this->main_welcome_guest = '���� ���!';
	}

	function mass_mail()
	{
		$this->mail = '���� ������';
		$this->mail_announce = '����� �';
		$this->mail_groups = '������ ������';
		$this->mail_members = '�����.';
		$this->mail_message = '�����';
		$this->mail_select_all = '��� ���';
		$this->mail_send = '��� ������';
		$this->mail_sent = '������ ����� �';
	}

	function mbcode()
	{
		$this->mbcode_address = '���� �����';
		$this->mbcode_arial = 'Arial'; //Translate
		$this->mbcode_blue = '����';
		$this->mbcode_bold = '�����';
		$this->mbcode_bold1 = 'B'; //Translate
		$this->mbcode_chocolate = '��� ������';
		$this->mbcode_code = '���';
		$this->mbcode_color = '���';
		$this->mbcode_coral = '����';
		$this->mbcode_courier = 'Courier'; //Translate
		$this->mbcode_crimson = '�����';
		$this->mbcode_darkblue = '���� ���';
		$this->mbcode_darkred = '���� ���';
		$this->mbcode_deepink = '���� ����';
		$this->mbcode_detail = '���� ����';
		$this->mbcode_email = '������';
		$this->mbcode_firered = '���� ���';
		$this->mbcode_font = '����';
		$this->mbcode_green = '����';
		$this->mbcode_huge = '���';
		$this->mbcode_image = '�����';
		$this->mbcode_image1 = 'IMG'; //Translate
		$this->mbcode_impact = 'Impact'; //Translate
		$this->mbcode_indigo = '�������';
		$this->mbcode_italic = '����';
		$this->mbcode_italic1 = 'I'; //Translate
		$this->mbcode_large = '����';
		$this->mbcode_length = '�����. +length+ ������ �����';
		$this->mbcode_limegreen = '���� �����';
		$this->mbcode_medium = '������';
		$this->mbcode_orange = '����';
		$this->mbcode_orangered = '���� ����';
		$this->mbcode_php = 'PHP'; //Translate
		$this->mbcode_purple = '����';
		$this->mbcode_quote = '�����';
		$this->mbcode_red = '����';
		$this->mbcode_royalblue = '���� �����';
		$this->mbcode_sandybrown = '��� ���';
		$this->mbcode_seagreen = '���� ���';
		$this->mbcode_sienna = '�����';
		$this->mbcode_silver = '���';
		$this->mbcode_size = '����';
		$this->mbcode_skyblue = '���� �����';
		$this->mbcode_small = '���';
		$this->mbcode_spoiler = '�������';
		$this->mbcode_strike = '�� ����';
		$this->mbcode_strike1 = 'S'; //Translate
		$this->mbcode_tahoma = 'Tahoma'; //Translate
		$this->mbcode_teal = 'Teal'; //Translate
		$this->mbcode_times = 'Times'; //Translate
		$this->mbcode_tiny = '����';
		$this->mbcode_tomato = '���� �������';
		$this->mbcode_underline = '�� �����';
		$this->mbcode_underline1 = 'U'; //Translate
		$this->mbcode_url = 'URL'; //Translate
		$this->mbcode_verdana = 'Verdana'; //Translate
		$this->mbcode_wood = '��� ����';
		$this->mbcode_yellow = '����';
	}

	function member_control()
	{
		$this->mc = '���� ���';
		$this->mc_confirm = '��� ��� ���� ���� �����';
		$this->mc_delete = '����� ���';
		$this->mc_deleted = '��� ����.';
		$this->mc_edit = '����� ���';
		$this->mc_edited = '��� �����';
		$this->mc_email_invaid = '����� ������� ������ ���� �����.';
		$this->mc_err_updating = '����� ������ �������';
		$this->mc_find = '��� ����� �� ���� �������';
		$this->mc_found = '������ ����� �����. ��� ��� ���.';
		$this->mc_guest_needed = 'Quicksilver ����� ����� ����� ������� �������� ��';
		$this->mc_not_found = '�� ����� ����� �������';
		$this->mc_user_aim = 'AIM ��';
		$this->mc_user_avatar = '������';
		$this->mc_user_avatar_height = '���� ������';
		$this->mc_user_avatar_type = '��� ������';
		$this->mc_user_avatar_width = '���� ������';
		$this->mc_user_birthday = '��� �����';
		$this->mc_user_email = '����� ������';
		$this->mc_user_email_show = '������� ������';
		$this->mc_user_group = '�����';
		$this->mc_user_gtalk = 'GTalk �����';
		$this->mc_user_homepage = '�� ����';
		$this->mc_user_icq = 'ICQ ����';
		$this->mc_user_id = 'User ID'; //Translate
		$this->mc_user_interests = '����� �����';
		$this->mc_user_joined = '��� ���';
		$this->mc_user_language = '���';
		$this->mc_user_lastpost = '����� ������';
		$this->mc_user_lastvisit = '����� �����';
		$this->mc_user_level = '���';
		$this->mc_user_location = '�����';
		$this->mc_user_msn = 'MSN Identity'; //Translate
		$this->mc_user_name = '��';
		$this->mc_user_pm = 'Accepting Private Messages'; //Translate
		$this->mc_user_posts = '������';
		$this->mc_user_signature = '�����';
		$this->mc_user_skin = '����';
		$this->mc_user_timezone = '���� ���';
		$this->mc_user_title = '����� ���';
		$this->mc_user_title_custom = '����� ������ ��� ������ �����';
		$this->mc_user_view_avatars = 'Viewing Avatars'; //Translate
		$this->mc_user_view_emoticons = 'Viewing Emoticons'; //Translate
		$this->mc_user_view_signatures = 'Viewing Signatures'; //Translate
		$this->mc_user_yahoo = 'Yahoo Identity'; //Translate
	}

	function membercount()
	{
		$this->mcount = '��� ���������� �����';
		$this->mcount_updated = '����� ����� ������.';
	}

	function members()
	{
		$this->members_all = '���';
		$this->members_email = '���� ��������';
		$this->members_email_member = '��� ���� �������� ������';
		$this->members_group = '�����';
		$this->members_joined = '����� �������';
		$this->members_list = '����� �������';
		$this->members_member = '�����';
		$this->members_pm = '����� �����';
		$this->members_posts = '������';
		$this->members_send_pm = '��� ����� ����� ������';
		$this->members_title = '�����';
		$this->members_vist_www = '��� ���� ���� �� �����';
		$this->members_www = '��� ����';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Are you sure you want to delete this post?'; //Translate
		$this->mod_confirm_topic_delete = 'Are you sure you want to delete the topic?'; //Translate
		$this->mod_error_first_post = 'You can not delete the first post in a topic.';
		$this->mod_error_move_category = 'You can not move a topic to a category.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'You can not move a topic to a forum that does not exist.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'You can not move a topic to the forum it is already in.';
		$this->mod_label_controls = 'Moderator Controls'; //Translate
		$this->mod_label_description = 'Description'; //Translate
		$this->mod_label_emoticon = 'Convert emoticons into images?'; //Translate
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'Format MbCode?'; //Translate
		$this->mod_label_move_to = 'Move to'; //Translate
		$this->mod_label_options = 'Options'; //Translate
		$this->mod_label_post_delete = 'Delete Post'; //Translate
		$this->mod_label_post_edit = 'Edit Post'; //Translate
		$this->mod_label_post_icon = 'Post Icon'; //Translate
		$this->mod_label_publish = 'Publishing'; //Translate
		$this->mod_label_title = 'Title'; //Translate
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'Delete Topic'; //Translate
		$this->mod_label_topic_edit = 'Edit Topic'; //Translate
		$this->mod_label_topic_lock = 'Lock Topic'; //Translate
		$this->mod_label_topic_move = 'Move Topic'; //Translate
		$this->mod_label_topic_move_complete = 'Completely transfer the topic to the new forum'; //Translate
		$this->mod_label_topic_move_link = 'Transfer the topic to the new forum, and leave a link to its new location in the old forum.'; //Translate
		$this->mod_label_topic_pin = 'Pin Topic'; //Translate
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = 'The specified post does not exist.'; //Translate
		$this->mod_missing_topic = 'The specified topic does not exist.'; //Translate
		$this->mod_no_action = 'You must specify an action.'; //Translate
		$this->mod_no_post = 'You must specify a post.'; //Translate
		$this->mod_no_topic = 'You must specify a topic.'; //Translate
		$this->mod_perm_post_delete = 'You do not have permission to delete this post.'; //Translate
		$this->mod_perm_post_edit = 'You do not have permission to edit this post.'; //Translate
		$this->mod_perm_publish = 'You do not have permission to publish this topic.'; //Translate
		$this->mod_perm_topic_delete = 'You do not have permission to delete this topic.'; //Translate
		$this->mod_perm_topic_edit = 'You do not have permission to edit this topic.'; //Translate
		$this->mod_perm_topic_lock = 'You do not have permission to lock this topic.'; //Translate
		$this->mod_perm_topic_move = 'You do not have permission to move this topic.'; //Translate
		$this->mod_perm_topic_pin = 'You do not have permission to pin this topic.'; //Translate
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = 'You do not have permission to unlock this topic.'; //Translate
		$this->mod_perm_topic_unpin = 'You do not have permission to unpin this topic.'; //Translate
		$this->mod_success_post_delete = 'The post was successfully deleted.'; //Translate
		$this->mod_success_post_edit = 'The post was successfully edited.'; //Translate
		$this->mod_success_publish = 'This topic was successfully published.'; //Translate
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'The topic was successfully deleted.'; //Translate
		$this->mod_success_topic_edit = 'The topic was successfully edited.'; //Translate
		$this->mod_success_topic_move = 'The topic was successfully moved to a new forum.'; //Translate
		$this->mod_success_unpublish = 'This topic has been removed from the published list.'; //Translate
	}

	function optimize()
	{
		$this->optimize = '���� ��� ������';
		$this->optimized = 'The tables in the database have been optimized for maximum performance.'; //Translate
	}

	function perms()
	{
		$this->perm = '������';
		$this->perms = '������';
		$this->perms_board_view = 'View the board index'; //Translate
		$this->perms_board_view_closed = 'Use Quicksilver Forums when it is closed'; //Translate
		$this->perms_do_anything = 'Use Quicksilver Forums'; //Translate
		$this->perms_edit_for = 'Edit permissions for'; //Translate
		$this->perms_email_use = 'Send emails to members via the board'; //Translate
		$this->perms_forum_view = 'View the forum'; //Translate
		$this->perms_is_admin = 'Access the admin control panel'; //Translate
		$this->perms_only_user = 'Use only group permissions for this user'; //Translate
		$this->perms_override_user = 'This will override the group permissions for this user.'; //Translate
		$this->perms_pm_noflood = 'Exempt from personal messenger flood control'; //Translate
		$this->perms_poll_create = 'Create polls'; //Translate
		$this->perms_poll_vote = 'Create votes'; //Translate
		$this->perms_post_attach = 'Attach uploads to posts'; //Translate
		$this->perms_post_attach_download = 'Download post attachments'; //Translate
		$this->perms_post_create = 'Create replies'; //Translate
		$this->perms_post_delete = 'Delete any post'; //Translate
		$this->perms_post_delete_own = 'Delete only posts the user has created'; //Translate
		$this->perms_post_edit = 'Edit any post'; //Translate
		$this->perms_post_edit_own = 'Edit only posts the user has created'; //Translate
		$this->perms_post_inc_userposts = 'Posts contribute to user\'s total post count'; //Translate
		$this->perms_post_noflood = 'Exempt from post flood control'; //Translate
		$this->perms_post_viewip = 'View user IP addresses'; //Translate
		$this->perms_search_noflood = 'Exempt from search flood control'; //Translate
		$this->perms_title = 'User Group Control'; //Translate
		$this->perms_topic_create = 'Create topics'; //Translate
		$this->perms_topic_delete = 'Delete any topic'; //Translate
		$this->perms_topic_delete_own = 'Delete only topics the user has created'; //Translate
		$this->perms_topic_edit = 'Edit any topic'; //Translate
		$this->perms_topic_edit_own = 'Edit only topics the user has created'; //Translate
		$this->perms_topic_global = 'Make a topic visible from all forums'; //Translate
		$this->perms_topic_lock = 'Lock any topic'; //Translate
		$this->perms_topic_lock_own = 'Lock topics the user has created'; //Translate
		$this->perms_topic_move = 'Move any topic'; //Translate
		$this->perms_topic_move_own = 'Move only topics the user has created'; //Translate
		$this->perms_topic_pin = 'Pin any topic'; //Translate
		$this->perms_topic_pin_own = 'Pin topics the user has created'; //Translate
		$this->perms_topic_publish = 'Publish or unpublish any topic'; //Translate
		$this->perms_topic_publish_auto = 'New topics are marked as published'; //Translate
		$this->perms_topic_split = 'Split any topic into multiple topics'; //Translate
		$this->perms_topic_split_own = 'Split only topics the user has created into multiple topics'; //Translate
		$this->perms_topic_unlock = 'Unlock any topic'; //Translate
		$this->perms_topic_unlock_mod = 'Unlock a moderator\'s lock'; //Translate
		$this->perms_topic_unlock_own = 'Unlock only topics the user has created'; //Translate
		$this->perms_topic_unpin = 'Unpin any topic'; //Translate
		$this->perms_topic_unpin_own = 'Unpin only topics the user has created'; //Translate
		$this->perms_topic_view = 'View topics'; //Translate
		$this->perms_topic_view_unpublished = 'View unpublished topics'; //Translate
		$this->perms_updated = 'Permissions have been updated.'; //Translate
		$this->perms_user_inherit = 'The user will inherit the group\'s permissions.'; //Translate
	}

	function php_info()
	{
		$this->php_error = '�����';
		$this->php_error_msg = 'phpinfo() can not be executed. It appears that your host has disabled this feature.'; //Translate
	}

	function pm()
	{
		$this->pm_avatar = '������';
		$this->pm_cant_del = '��� �� ����� ���� ����� ��.';
		$this->pm_delallmsg = '��� �� �������';
		$this->pm_delete = '���';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = '����� �����.';
		$this->pm_deleted_all = '������ �����.';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Your message could not be send. Make sure all required fields are filled in.'; //Translate
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = '���� ����';
		$this->pm_folder_new = '%s ���';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = '�';
		$this->pm_group = '�����';
		$this->pm_guest = 'As a guest, you can not use the messenger. Please login or register.';
		$this->pm_joined = '�����';
		$this->pm_messenger = '����\'� ����';
		$this->pm_msgtext = '���� �����';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'You must specify a folder.'; //Translate
		$this->pm_no_member = 'No member was found with that id.'; //Translate
		$this->pm_no_number = 'No message was found with that number.'; //Translate
		$this->pm_no_title = '��� ����';
		$this->pm_nomsg = 'There are no messages in this folder.'; //Translate
		$this->pm_noview = 'You do not have permission to view this message.'; //Translate
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_personal = '����\'� ����';
		$this->pm_personal_msging = '���� �����';
		$this->pm_pm = '����� �����';
		$this->pm_posts = '������';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Reply'; //Translate
		$this->pm_send = ' ��� ';
		$this->pm_sendamsg = '��� ����� �����';
		$this->pm_sendingpm = '���� ����� �����';
		$this->pm_sendon = '���� �';
		$this->pm_success = '����� ��� ����� ������.';
		$this->pm_sure_del = '���� ����\� ������� ����� ����� ��?';
		$this->pm_sure_delall = '���� ���� ������� ����� �� �������?';
		$this->pm_title = '�����';
		$this->pm_to = '��';
	}

	function post()
	{
		$this->post_attach = 'Attachments'; //Translate
		$this->post_attach_add = 'Add Attachment'; //Translate
		$this->post_attach_disrupt = 'Adding or removing attachments will not disrupt your post.'; //Translate
		$this->post_attach_failed = 'The attachment upload failed. The file you specified may not exist.'; //Translate
		$this->post_attach_not_allowed = 'You cannot attach files of that type.'; //Translate
		$this->post_attach_remove = 'Remove Attachment'; //Translate
		$this->post_attach_too_large = 'The attachment you specified to upload is too large. The maximum size is %d kilobytes.';
		$this->post_cant_create = 'As a guest, you do not have permission to create topics. If you register, you may be able to create topics.'; //Translate
		$this->post_cant_create1 = 'You do not have permission to create topics.'; //Translate
		$this->post_cant_enter = 'Your vote could not be entered. Either you have already voted in this poll, or you do not have permission to vote.'; //Translate
		$this->post_cant_poll = 'As a guest, you do not have permission to create polls. If you register, you may be able to create them.'; //Translate
		$this->post_cant_poll1 = 'You do not have permission to create polls.'; //Translate
		$this->post_cant_reply = 'You do not have permission to reply to topics in this forum.'; //Translate
		$this->post_cant_reply1 = 'As a guest, you do not have permission to reply to topics. If you register, you may be able to post.'; //Translate
		$this->post_cant_reply2 = 'You do not have permission to reply to topics.'; //Translate
		$this->post_closed = 'This topic has been closed.'; //Translate
		$this->post_create_poll = 'Create Poll'; //Translate
		$this->post_create_topic = 'Create Topic'; //Translate
		$this->post_creating = 'Creating Topic'; //Translate
		$this->post_creating_poll = 'Creating Poll'; //Translate
		$this->post_flood = 'You have posted in the past %s seconds, and you may not post right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->post_guest = 'Guest'; //Translate
		$this->post_icon = 'Post Icon'; //Translate
		$this->post_last_five = 'Last Five Posts In Reverse Order'; //Translate
		$this->post_length = 'Check Length'; //Translate
		$this->post_msg = 'Message'; //Translate
		$this->post_must_msg = 'You must include a message when posting.'; //Translate
		$this->post_must_options = 'You must include options when creating a new poll.'; //Translate
		$this->post_must_title = 'You must include a title when creating a new topic.'; //Translate
		$this->post_new_poll = 'New poll'; //Translate
		$this->post_new_topic = 'New topic'; //Translate
		$this->post_no_forum = 'That forum was not found.'; //Translate
		$this->post_no_topic = 'No topic was specified.'; //Translate
		$this->post_no_vote = 'You must choose an option to vote for.'; //Translate
		$this->post_option_emoticons = 'Convert emoticons into images?'; //Translate
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'Format MbCode?'; //Translate
		$this->post_optional = 'optional'; //Translate
		$this->post_options = 'Options'; //Translate
		$this->post_poll_options = 'Poll Options'; //Translate
		$this->post_poll_row = 'One per line'; //Translate
		$this->post_posted = 'Posted on';
		$this->post_posting = 'Posting'; //Translate
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Reply'; //Translate
		$this->post_reply_topic = 'Reply to topic'; //Translate
		$this->post_replying = 'Replying To Topic'; //Translate
		$this->post_replying1 = 'Replying'; //Translate
		$this->post_smiles = 'Clickable Smilies'; //Translate
		$this->post_too_many_options = 'You must have between 2 and %d options to a poll.'; //Translate
		$this->post_topic_detail = 'Topic Description'; //Translate
		$this->post_topic_title = 'Topic Title'; //Translate
		$this->post_view_topic = 'View Entire Topic'; //Translate
		$this->post_voting = 'Voting'; //Translate
	}

	function printer()
	{
		$this->printer_back = 'Back'; //Translate
		$this->printer_not_found = 'The topic could not be found. It may have been deleted, moved, or may have never existed.'; //Translate
		$this->printer_not_found_title = 'Topic Not Found'; //Translate
		$this->printer_perm_topics = 'You do not have permission to view topics.'; //Translate
		$this->printer_perm_topics_guest = 'You do not have permission to view topics. If you register, you may be able to.'; //Translate
		$this->printer_posted_on = 'Posted on';
		$this->printer_send = 'Send to printer'; //Translate
	}

	function profile()
	{
		$this->profile_aim_sn = '�� ����� �� AIM';
		$this->profile_av_sign = '����� ������';
		$this->profile_avatar = '�����';
		$this->profile_bday = '��� �����';
		$this->profile_contact = '����� ���';
		$this->profile_email_address = '����� ���� ��������';
		$this->profile_fav = 'Favorite Forum'; //Translate
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = '���� ICQ';
		$this->profile_info = '����';
		$this->profile_interest = '����� ����������';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = '����� ������';
		$this->profile_list = 'Member List'; //Translate
		$this->profile_location = '�����';
		$this->profile_member = '����� �����';
		$this->profile_member_title = '�����';
		$this->profile_msn = 'MSN ����\'�';
		$this->profile_must_user = 'You must enter a user to view a profile.'; //Translate
		$this->profile_no_member = 'There is no member with that user id. The account may have been deleted.'; //Translate
		$this->profile_none = '[ ��� ]';
		$this->profile_not_post = '�� ��� ������.';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Private Messages'; //Translate
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = '������';
		$this->profile_private = '[ ���� ]';
		$this->profile_profile = '������';
		$this->profile_signature = '�����';
		$this->profile_unkown = '[ �� ���� ]';
		$this->profile_view_profile = '���� ������� ��';
		$this->profile_www = '��� ����';
		$this->profile_yahoo = '���� ����\'�';
	}

	function prune()
	{
		$this->prune_action = 'Prune action to take'; //Translate
		$this->prune_age_day = '1 Day'; //Translate
		$this->prune_age_eighthours = '8 Hours'; //Translate
		$this->prune_age_hour = '1 Hour'; //Translate
		$this->prune_age_month = '1 Month'; //Translate
		$this->prune_age_threemonths = '3 Months'; //Translate
		$this->prune_age_week = '1 Week'; //Translate
		$this->prune_age_year = '1 Year'; //Translate
		$this->prune_forums = 'Select forums to prune'; //Translate
		$this->prune_invalidage = 'Invalid age specified for pruning'; //Translate
		$this->prune_move = 'Move'; //Translate
		$this->prune_moveto_forum = 'Forum to move to'; //Translate
		$this->prune_nodest = 'No valid destination selected'; //Translate
		$this->prune_notopics = 'No topics selected for pruning'; //Translate
		$this->prune_notopics_old = 'No topics are old enough for pruning'; //Translate
		$this->prune_novalidforum = 'No valid forums specified to prune'; //Translate
		$this->prune_select_age = 'Select age of topics to limit pruning to'; //Translate
		$this->prune_select_topics = 'Select topics to prune or use Select All'; //Translate
		$this->prune_success = 'Topics have been pruned'; //Translate
		$this->prune_title = 'Topic Pruner'; //Translate
		$this->prune_topics_older_than = 'Prune topics older than'; //Translate
	}

	function query()
	{
		$this->query = 'Query Interface'; //Translate
		$this->query_fail = 'failed.'; //Translate
		$this->query_success = 'executed successfully.'; //Translate
		$this->query_your = 'Your query'; //Translate
	}

	function recent()
	{
		$this->recent_active = 'Active topics since last visit'; //Translate
		$this->recent_by = '�� ���';
		$this->recent_can_post = '��� ���� ����� ������ ���.';
		$this->recent_can_topics = '��� ���� ����� ������ ������ ���.';
		$this->recent_cant_post = '��� �� ���� ����� ������ ���.';
		$this->recent_cant_topics = '��� �� ���� ����� ������ ������ ���.';
		$this->recent_dot = '�����';
		$this->recent_dot_detail = 'shows that you have posted in the topic';
		$this->recent_forum = '�����';
		$this->recent_guest = '����';
		$this->recent_hot = '��';
		$this->recent_icon = '������ �� ����';
		$this->recent_jump = '���� ������ ������ �����';
		$this->recent_last = '����� ������';
		$this->recent_locked = '����';
		$this->recent_moved = '�����';
		$this->recent_msg = '%s �����';
		$this->recent_new = '���';
		$this->recent_new_poll = '���� ��� ���';
		$this->recent_new_topic = '���� ���� ���';
		$this->recent_no_topics = 'There are no topics to display for this forum.';
		$this->recent_noexist = 'The specified forum does not exist.'; //Translate
		$this->recent_nopost = '��� ������';
		$this->recent_not = '��';
		$this->recent_noview = '��� �� ������ ����� �������� ����.';
		$this->recent_pages = '������';
		$this->recent_pinned = '����';
		$this->recent_pinned_topic = '���� ����';
		$this->recent_poll = '���';
		$this->recent_regfirst = 'You do not have permission to view forums. If you register, you may be able to.'; //Translate
		$this->recent_replies = '������';
		$this->recent_starter = '�����';
		$this->recent_sub = '��-�����';
		$this->recent_sub_last_post = '����� ������';
		$this->recent_sub_replies = '������';
		$this->recent_sub_topics = '������';
		$this->recent_subscribe = 'E-mail me when posts are made in this forum'; //Translate
		$this->recent_topic = '����';
		$this->recent_views = '�����';
		$this->recent_write_topics = 'You can create topics in this forum.'; //Translate
	}

	function register()
	{
		$this->register_activated = 'Your account has been activated!'; //Translate
		$this->register_activating = 'Account Activation'; //Translate
		$this->register_activation_error = 'There was an error while activating your account. Check to see if your browser contains the full url in the activation email. If the problem persists, contact the board administrator to have your email resent.'; //Translate
		$this->register_confirm_passwd = 'Confirm Password'; //Translate
		$this->register_done = 'You have been registered! You can now login.'; //Translate
		$this->register_email = 'Email Address'; //Translate
		$this->register_email_invalid = 'The email address you entered is invalid.'; //Translate
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'The email address you entered is already assigned to a member.'; //Translate
		$this->register_fields = 'Not all fields are filled in.'; //Translate
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'You have been registered. An email has been sent to %s with information on how to activate your account. Your account will be limited until you activate it.'; //Translate
		$this->register_name_invalid = 'The name you entered is too long.'; //Translate
		$this->register_name_taken = 'That member name is already taken.'; //Translate
		$this->register_new_user = 'Desired User Name'; //Translate
		$this->register_pass_invalid = 'The password you entered is not valid. Make sure it uses only valid characters such as letters, numbers, dashes, underscores, or spaces, and is at least 5 characters.'; //Translate
		$this->register_pass_match = 'The passwords you entered do not match.'; //Translate
		$this->register_passwd = 'Password'; //Translate
		$this->register_reg = 'Register'; //Translate
		$this->register_reging = 'Registering'; //Translate
		$this->register_tos = 'Terms of Service'; //Translate
		$this->register_tos_i_agree = 'I agree to the above terms'; //Translate
		$this->register_tos_not_agree = 'You did not agree to the terms.'; //Translate
		$this->register_tos_read = 'Please read the following terms of service'; //Translate
	}

	function rssfeed()
	{
		$this->rssfeed_cannot_find_forum = 'The forum does not appear to exist'; //Translate
		$this->rssfeed_cannot_find_topic = 'The topic does nto appear to exist'; //Translate
		$this->rssfeed_cannot_read_forum = 'You do not have permission to read this forum'; //Translate
		$this->rssfeed_cannot_read_topic = 'You do not have permission to read this topic'; //Translate
		$this->rssfeed_error = 'Error'; //Translate
		$this->rssfeed_forum = 'Forum:'; //Translate
		$this->rssfeed_posted_by = 'Posted by'; //Translate
		$this->rssfeed_topic = 'Topic:'; //Translate
	}

	function search()
	{
		$this->search_advanced = '�������� �������';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = '����� �����';
		$this->search_characters = 'characters of a post'; //Translate
		$this->search_day = '���';
		$this->search_days = '����';
		$this->search_exact_name = 'exact name'; //Translate
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = '��� ���';
		$this->search_forum = '�����';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = '����';
		$this->search_in = '��� �';
		$this->search_in_posts = 'Only search in posts'; //Translate
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Joined'; //Translate
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Search by matching'; //Translate
		$this->search_matches = 'Matches'; //Translate
		$this->search_month = '����';
		$this->search_months = '������';
		$this->search_mysqldoc = 'MySQL Documentation'; //Translate
		$this->search_newer = 'newer'; //Translate
		$this->search_no_results = 'Your search returned no results.'; //Translate
		$this->search_no_words = 'You must specify some search terms.<br /><br />Each term must be longer than 3 characters, including letters, numbers, apostrophes, and underscores.'; //Translate
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = 'older'; //Translate
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Only display first'; //Translate
		$this->search_partial_name = 'partial name'; //Translate
		$this->search_post_icon = 'Post Icon'; //Translate
		$this->search_posted_on = 'Posted on';
		$this->search_posts = '������';
		$this->search_posts_by = 'Only in posts by'; //Translate
		$this->search_regex = 'Search by regular expression'; //Translate
		$this->search_regex_failed = 'Your regular expression failed. Please see the MySQL documentation for regular expression help.'; //Translate
		$this->search_relevance = 'Post Relevance: %d%%'; //Translate
		$this->search_replies = '������';
		$this->search_result = 'Search Results'; //Translate
		$this->search_search = ' ��� ';
		$this->search_select_all = '��� ���';
		$this->search_show_posts = 'Show matched posts'; //Translate
		$this->search_sound = 'Search by sound'; //Translate
		$this->search_starter = 'Starter'; //Translate
		$this->search_than = 'than'; //Translate
		$this->search_topic = '����';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = '����';
		$this->search_weeks = '������';
		$this->search_year = '���';
	}

	function settings()
	{
		$this->settings = 'Settings'; //Translate
		$this->settings_active = 'Active Users Settings'; //Translate
		$this->settings_allow = 'Allow'; //Translate
		$this->settings_antibot = 'Anti-Robot Registration'; //Translate
		$this->settings_attach_ext = 'Attachments - File Extensions'; //Translate
		$this->settings_attach_one_per = 'One per line. No periods.'; //Translate
		$this->settings_avatar = 'Avatar Settings'; //Translate
		$this->settings_avatar_flash = 'Flash Avatars'; //Translate
		$this->settings_avatar_max_height = 'Maximum Avatar Height'; //Translate
		$this->settings_avatar_max_width = 'Maximum Avatar Width'; //Translate
		$this->settings_avatar_upload = 'Uploaded Avatars - Max File Size'; //Translate
		$this->settings_basic = 'Edit Board Settings'; //Translate
		$this->settings_blank = 'Use <i>_blank</i> for a new window.'; //Translate
		$this->settings_board_enabled = 'Board Enabled'; //Translate
		$this->settings_board_location = 'Location of Board'; //Translate
		$this->settings_board_name = 'Board Name'; //Translate
		$this->settings_board_rss = 'RSS Feed Settings'; //Translate
		$this->settings_board_rssfeed_desc = 'RSS Feed Description'; //Translate
		$this->settings_board_rssfeed_posts = 'Number of posts to list on RSS Feed'; //Translate
		$this->settings_board_rssfeed_time = 'Refresh time in minutes'; //Translate
		$this->settings_board_rssfeed_title = 'RSS Feed Title'; //Translate
		$this->settings_clickable = 'Clickable Smilies Per Row'; //Translate
		$this->settings_cookie = 'Cookie and Flood Settings'; //Translate
		$this->settings_cookie_path = 'Cookie Path'; //Translate
		$this->settings_cookie_prefix = 'Cookie Prefix'; //Translate
		$this->settings_cookie_time = 'Time to Remain Logged In'; //Translate
		$this->settings_db = 'Edit Connection Settings'; //Translate
		$this->settings_db_host = 'Database Host'; //Translate
		$this->settings_db_leave_blank = 'Leave blank for none.'; //Translate
		$this->settings_db_multiple = 'For installing multiple boards on one database.'; //Translate
		$this->settings_db_name = 'Database Name'; //Translate
		$this->settings_db_password = 'Database Password'; //Translate
		$this->settings_db_port = 'Database Port'; //Translate
		$this->settings_db_prefix = 'Table Prefix'; //Translate
		$this->settings_db_socket = 'Database Socket'; //Translate
		$this->settings_db_username = 'Database Username'; //Translate
		$this->settings_default_lang = 'Default Language'; //Translate
		$this->settings_default_no = 'Default No'; //Translate
		$this->settings_default_skin = 'Default Skin'; //Translate
		$this->settings_default_yes = 'Default Yes'; //Translate
		$this->settings_disabled = 'Disabled'; //Translate
		$this->settings_disabled_notice = 'Disabled Notice'; //Translate
		$this->settings_email = 'E-Mail Settings'; //Translate
		$this->settings_email_fake = 'For display only. Should not be a real e-mail address.'; //Translate
		$this->settings_email_from = 'E-mail From Address'; //Translate
		$this->settings_email_place1 = 'Place members in the'; //Translate
		$this->settings_email_place2 = 'group until they verify their e-mail'; //Translate
		$this->settings_email_place3 = 'Do not require e-mail activation'; //Translate
		$this->settings_email_real = 'Should be a real e-mail address.'; //Translate
		$this->settings_email_reply = 'E-mail Reply-To Address'; //Translate
		$this->settings_email_smtp = 'SMTP Mail Server'; //Translate
		$this->settings_email_valid = 'New Member E-mail Validation'; //Translate
		$this->settings_enabled = 'Enabled'; //Translate
		$this->settings_enabled_modules = 'Enabled Modules'; //Translate
		$this->settings_foreign_link = 'Foreign Link Target'; //Translate
		$this->settings_general = 'General Settings'; //Translate
		$this->settings_group_after = 'Group After Registration'; //Translate
		$this->settings_hot_topic = 'Posts for a Hot Topic'; //Translate
		$this->settings_kilobytes = 'Kilobytes'; //Translate
		$this->settings_max_attach_size = 'Attachments - Maximum File Size'; //Translate
		$this->settings_members = 'Member Settings'; //Translate
		$this->settings_modname_only = 'Module name only. Do not include .php'; //Translate
		$this->settings_no_allow = 'Do Not Allow'; //Translate
		$this->settings_nodata = 'No data was sent from POST'; //Translate
		$this->settings_one_per = 'One per line'; //Translate
		$this->settings_pixels = 'Pixels'; //Translate
		$this->settings_pm_flood = 'Personal Messenger Flood Control'; //Translate
		$this->settings_pm_min_time = 'Minimum time between messages.'; //Translate
		$this->settings_polls = 'Polls'; //Translate
		$this->settings_polls_no = 'Users cannot vote in a poll after viewing its results'; //Translate
		$this->settings_polls_yes = 'Users can vote in a poll after viewing its results'; //Translate
		$this->settings_post_flood = 'Post Flood Control'; //Translate
		$this->settings_post_min_time = 'Minimum time between posts.'; //Translate
		$this->settings_posts_topic = 'Posts Per Topic Page'; //Translate
		$this->settings_search_flood = 'Search Flood Control'; //Translate
		$this->settings_search_min_time = 'Minimum time between searches.'; //Translate
		$this->settings_server = 'Server Settings'; //Translate
		$this->settings_server_gzip = 'GZIP Compression'; //Translate
		$this->settings_server_gzip_msg = 'Improves speed. Disable if the board appears jumbled or blank.'; //Translate
		$this->settings_server_maxload = 'Maximum Server Load'; //Translate
		$this->settings_server_maxload_msg = 'Disables board under excessive server strain. Enter 0 to disable.'; //Translate
		$this->settings_server_timezone = 'Server Time Zone'; //Translate
		$this->settings_show_avatars = 'Show Avatars'; //Translate
		$this->settings_show_email = 'Show Email Address'; //Translate
		$this->settings_show_emotes = 'Show Emoticons'; //Translate
		$this->settings_show_notice = 'Shown when the board is disabled'; //Translate
		$this->settings_show_pm = 'Accept Personal Messages'; //Translate
		$this->settings_show_sigs = 'Show Signatures'; //Translate
		$this->settings_spider_agent = 'Spider User Agent'; //Translate
		$this->settings_spider_agent_msg = 'Enter all or part of the spider\'s unique HTTP USER AGENT.'; //Translate
		$this->settings_spider_enable = 'Enable Spider Display'; //Translate
		$this->settings_spider_enable_msg = 'Enable the names of search engine spiders on Active List.'; //Translate
		$this->settings_spider_name = 'Spider Name'; //Translate
		$this->settings_spider_name_msg = 'Enter the name that you wish to display for each of the above spiders on Active List. You need to place the spider\'s name on the same line as the spider\'s user agent above. For example, if you place \'googlebot\' on the third line for the user agent place \'Google\' on the third line for the Spider Name.'; //Translate
		$this->settings_timezone = 'Time Zone'; //Translate
		$this->settings_topics_page = 'Topics Per Forum Page'; //Translate
		$this->settings_tos = 'Terms of Service'; //Translate
		$this->settings_updated = 'Settings have been updated.'; //Translate
	}

	function stats()
	{
		$this->stats = 'Statistics Center'; //Translate
		$this->stats_post_by_month = 'Posts by Month'; //Translate
		$this->stats_reg_by_month = 'Registrations by Month'; //Translate
	}

	function templates()
	{
		$this->add = 'Add HTML Templates'; //Translate
		$this->add_in = 'Add template to:'; //Translate
		$this->all_fields_required = 'All fields are required to add a template'; //Translate
		$this->choose_set = 'Choose a template set'; //Translate
		$this->choose_skin = 'Choose a skin'; //Translate
		$this->confirm1 = 'You are about to delete the'; //Translate
		$this->confirm2 = 'template from'; //Translate
		$this->create_new = 'Create a new skin named'; //Translate
		$this->create_skin = 'Create Skin'; //Translate
		$this->credit = 'Please do not remove our only credit!'; //Translate
		$this->delete_template = 'Delete Template'; //Translate
		$this->directory = 'Directory'; //Translate
		$this->display_name = 'Display Name'; //Translate
		$this->edit_skin = 'Edit Skin'; //Translate
		$this->edit_templates = 'Edit Templates'; //Translate
		$this->export_done = 'Skin exported to the main Quicksilver Forums directory.';
		$this->export_select = 'Select a skin to export'; //Translate
		$this->export_skin = 'Export Skin'; //Translate
		$this->install_done = 'The skin has been installed successfully.'; //Translate
		$this->install_exists1 = 'It appears that the skin'; //Translate
		$this->install_exists2 = 'is already installed.'; //Translate
		$this->install_overwrite = 'Overwrite'; //Translate
		$this->install_skin = 'Install Skin'; //Translate
		$this->menu_title = 'Select a template section to edit'; //Translate
		$this->only_skin = 'There is only one skin installed. You may not delete this skin.'; //Translate
		$this->or_new = 'Or create new template set named:'; //Translate
		$this->select_skin = 'Select a Skin'; //Translate
		$this->select_skin_edit = 'Select a skin to edit'; //Translate
		$this->select_skin_edit_done = 'Skin successfully edited.'; //Translate
		$this->select_template = 'Select Template'; //Translate
		$this->skin_chmod = 'A new directory could not be created for the skin. Try to CHMOD the skins directory to 775.'; //Translate
		$this->skin_created = 'Skin created.'; //Translate
		$this->skin_deleted = 'Skin successfully deleted.'; //Translate
		$this->skin_dir_name = 'You must enter a skin name and directory name.'; //Translate
		$this->skin_dup = 'A skin with a duplicate directory name was found. The skin\'s directory was changed to'; //Translate
		$this->skin_name = 'You must enter a skin name.'; //Translate
		$this->skin_none = 'There are no skins available to install.'; //Translate
		$this->skin_set = 'Skin Set'; //Translate
		$this->skins_found = 'The following skins were found in the Quicksilver Forums directory';
		$this->template_about = 'About Variables'; //Translate
		$this->template_about2 = 'Variables are pieces of text that are replaced with dynamic data. Variables always begin with a dollar sign, and are sometimes enclosed in {braces}.'; //Translate
		$this->template_add = 'Add'; //Translate
		$this->template_added = 'Template added.'; //Translate
		$this->template_clear = 'Clear'; //Translate
		$this->template_confirm = 'You have made changes to the templates. Do you want to save your changes?'; //Translate
		$this->template_description = 'Template Description'; //Translate
		$this->template_html = 'Template HTML'; //Translate
		$this->template_name = 'Template Name'; //Translate
		$this->template_position = 'Template Position'; //Translate
		$this->template_set = 'Template Set'; //Translate
		$this->template_title = 'Template Title'; //Translate
		$this->template_universal = 'Universal Variable'; //Translate
		$this->template_universal2 = 'Some variables can be used in any template, while others can only be used in a single template. Properties of the object $this can be used anywhere.'; //Translate
		$this->template_updated = 'Template updated.'; //Translate
		$this->templates = 'Templates'; //Translate
		$this->temps_active = 'Active Users Detail'; //Translate
		$this->temps_admin = '<b>AdminCP Universal</b>'; //Translate
		$this->temps_ban = 'AdminCP Bans'; //Translate
		$this->temps_board_index = 'Board Index'; //Translate
		$this->temps_censoring = 'AdminCP Word Censoring'; //Translate
		$this->temps_cp = 'Member Control Panel'; //Translate
		$this->temps_email = 'Email A Member'; //Translate
		$this->temps_emot_control = 'AdminCP Emoticons'; //Translate
		$this->temps_forum = 'Forums'; //Translate
		$this->temps_forums = 'AdminCP Forums'; //Translate
		$this->temps_groups = 'AdminCP Groups'; //Translate
		$this->temps_help = 'Help'; //Translate
		$this->temps_login = 'Logging In/Out'; //Translate
		$this->temps_logs = 'AdminCP Moderator Logs'; //Translate
		$this->temps_main = '<b>Board Universal</b>'; //Translate
		$this->temps_mass_mail = 'AdminCP Mass Mail'; //Translate
		$this->temps_member_control = 'AdminCP Member Control'; //Translate
		$this->temps_members = 'Member List'; //Translate
		$this->temps_mod = 'Moderator Controls'; //Translate
		$this->temps_pm = 'Private Messenger'; //Translate
		$this->temps_polls = 'Polls'; //Translate
		$this->temps_post = 'Posting'; //Translate
		$this->temps_printer = 'Printer-Friendly Topics'; //Translate
		$this->temps_profile = 'Profile Viewing'; //Translate
		$this->temps_recent = 'Recent Topics'; //Translate
		$this->temps_register = 'Registration'; //Translate
		$this->temps_rssfeed = 'RSS Feed'; //Translate
		$this->temps_search = 'Searching'; //Translate
		$this->temps_settings = 'AdminCP Settings'; //Translate
		$this->temps_templates = 'AdminCP Template Editor'; //Translate
		$this->temps_titles = 'AdminCP Member Titles'; //Translate
		$this->temps_topic_prune = 'AdminCP Topic Pruning'; //Translate
		$this->temps_topics = 'Topics'; //Translate
		$this->upgrade_skin = 'Upgrade Skin'; //Translate
		$this->upgrade_skin_already = 'was already upgraded. Nothing to do.'; //Translate
		$this->upgrade_skin_detail = 'Skins upgraded using this method will still require template editing afterwards.<br />Select a skin to upgrade'; //Translate
		$this->upgrade_skin_upgraded = 'skin has been upgraded.'; //Translate
		$this->upgraded_templates = 'The following templates were added or upgraded'; //Translate
	}

	function titles()
	{
		$this->titles_add = 'Add Member Titles'; //Translate
		$this->titles_added = 'Member Title added.'; //Translate
		$this->titles_control = 'Member Title Control'; //Translate
		$this->titles_edit = 'Edit Member Titles'; //Translate
		$this->titles_error = 'No title text or minimum posts was given'; //Translate
		$this->titles_image = 'Image'; //Translate
		$this->titles_minpost = 'Minimum Posts'; //Translate
		$this->titles_title = 'Title'; //Translate
	}

	function topic()
	{
		$this->topic_attached = 'Attached file:'; //Translate
		$this->topic_attached_downloads = '������';
		$this->topic_attached_perm = 'You do not have permission to download this file.'; //Translate
		$this->topic_attached_title = 'Attached File'; //Translate
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = 'Create New Poll'; //Translate
		$this->topic_create_topic = 'Create New Topic'; //Translate
		$this->topic_delete = '���';
		$this->topic_delete_post = 'Delete this post'; //Translate
		$this->topic_edit = '�����';
		$this->topic_edit_post = 'Edit this post'; //Translate
		$this->topic_edited = 'Last edited on %s by %s';
		$this->topic_error = '�����';
		$this->topic_group = '�����';
		$this->topic_guest = '����';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = '����� �������';
		$this->topic_level = '��� �� �����';
		$this->topic_links_aim = 'Send an AIM message to %s'; //Translate
		$this->topic_links_email = 'Send an email to %s'; //Translate
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'Send an ICQ messsage to %s'; //Translate
		$this->topic_links_msn = 'View %s\'s MSN profile'; //Translate
		$this->topic_links_pm = 'Send a personal messsage to %s'; //Translate
		$this->topic_links_web = 'Visit %s\'s web site'; //Translate
		$this->topic_links_yahoo = 'Send a message to %s with Yahoo! Messenger'; //Translate
		$this->topic_lock = '���';
		$this->topic_locked = '���� ����';
		$this->topic_move = '����';
		$this->topic_newer = 'Newer Topic'; //Translate
		$this->topic_no_newer = 'There is no newer topic.'; //Translate
		$this->topic_no_older = 'There is no older topic.'; //Translate
		$this->topic_no_votes = 'There are no votes for this poll.'; //Translate
		$this->topic_not_found = '����� �� ����';
		$this->topic_not_found_message = '�� ����� ������. ����� ���� �����,������ ����� �� ����� �����.';
		$this->topic_offline = '���� ���� �� �����';
		$this->topic_older = '����� ����';
		$this->topic_online = '���� ���� �����';
		$this->topic_options = '�������� �����';
		$this->topic_pages = '������';
		$this->topic_perm_view = '��� �� ������ ����� �������.';
		$this->topic_perm_view_guest = '��� �� ������ ����� �������. �� �����, ����� ����� �����.';
		$this->topic_pin = '���';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = '������';
		$this->topic_print = '��� ������';
		$this->topic_publish = 'Publish'; //Translate
		$this->topic_qr_emoticons = '���� ����';
		$this->topic_qr_open_emoticons = '��� ���� ���� ������';
		$this->topic_qr_open_mbcode = 'MBCode ���';
		$this->topic_quickreply = '����� ����� �����';
		$this->topic_quote = '���� ����� �� ����� ������ ��';
		$this->topic_reply = '���� �����';
		$this->topic_split = '�����';
		$this->topic_split_finish = '���� �� ��������';
		$this->topic_split_keep = '�� ����� ����� ��';
		$this->topic_split_move = '���� ����� ��';
		$this->topic_subscribe = '��� �� ���� ������� ������ ��';
		$this->topic_top = '���� ���� ���';
		$this->topic_unlock = '��� �����';
		$this->topic_unpin = '��� �����';
		$this->topic_unpublish = 'UnPublish'; //Translate
		$this->topic_unpublished = 'This topic is classed as unpublished so you do not have permission to view it.'; //Translate
		$this->topic_unreg = '�� ����';
		$this->topic_view = '���� ������';
		$this->topic_viewing = '���� ������';
		$this->topic_vote = '�����';
		$this->topic_vote_count_plur = '%d ������';
		$this->topic_vote_count_sing = '%d �����';
		$this->topic_votes = '������';
	}

	function universal()
	{
		$this->aim = 'AIM'; //Translate
		$this->based_on = '����� ��';
		$this->board_by = '�� ���';
		$this->charset = 'windows-1255';
		$this->continue = '����';
		$this->delete = '�����';
		$this->direction = 'rtl';
		$this->edit = '�����';
		$this->email = '������';
		$this->gtalk = 'GT'; //Translate
		$this->icq = 'ICQ'; //Translate
		$this->msn = 'MSN'; //Translate
		$this->new_message = '����� ����';
		$this->new_poll = '��� ���';
		$this->new_topic = '����� ����';
		$this->no = '��';
		$this->powered = 'Powered by'; //Translate
		$this->private_message = 'PM'; //Translate
		$this->quote = '�����';
		$this->reply = '���';
		$this->seconds = '�����';
		$this->select_all = '��� ���';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->spoiler = '�������';
		$this->submit = '�����';
		$this->subscribe = '�����';
		$this->today = '����';
		$this->website = 'WWW'; //Translate
		$this->yahoo = 'Yahoo'; //Translate
		$this->yes = '��';
		$this->yesterday = '�����';
	}
}
?>
