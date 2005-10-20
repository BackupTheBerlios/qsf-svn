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
 * Hungarian language module
 *
 * @author Sz�sz Attila <helpdesk@maximedia.hu>
 * @since 1.0.0
 **/
class hu
{
	function active()
	{
		$this->active_last_action = 'Utols� m�velet';
		$this->active_modules_active = 'Akt�v tagok';
		$this->active_modules_board = 'Index';
		$this->active_modules_cp = 'Be�ll�t�sok megjelen�t�se';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Seg�ts�g';
		$this->active_modules_login = 'Ki/Bejelentkez�s';
		$this->active_modules_members = 'Tagok list�ja';
		$this->active_modules_mod = 'Moder�l�s';
		$this->active_modules_pm = '�zenetk�ld�';
		$this->active_modules_post = 'Be�r�s';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_recent = 'Viewing recent posts'; //Translate
		$this->active_modules_search = 'Keres�s';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'Id�';
		$this->active_user = 'Tag';
		$this->active_users = 'Akt�v tagok';
	}

	function admin()
	{
		$this->admin_add_emoticons = 'Add emoticons'; //Translate
		$this->admin_add_member_titles = 'Add automatic member titles'; //Translate
		$this->admin_add_templates = 'Add HTML templates'; //Translate
		$this->admin_ban_ips = 'Ban IP addresses'; //Translate
		$this->admin_censor = 'Censor words'; //Translate
		$this->admin_create_forum = 'Create a forum'; //Translate
		$this->admin_create_group = 'Create a group'; //Translate
		$this->admin_create_help = 'Create a help article'; //Translate
		$this->admin_create_skin = 'Create a skin'; //Translate
		$this->admin_db = 'Database'; //Translate
		$this->admin_db_backup = 'Backup the database'; //Translate
		$this->admin_db_conn = 'Edit connection settings'; //Translate
		$this->admin_db_optimize = 'Optimize the database'; //Translate
		$this->admin_db_query = 'Execute an SQL query'; //Translate
		$this->admin_db_restore = 'Restore a backup'; //Translate
		$this->admin_delete_forum = 'Delete a forum'; //Translate
		$this->admin_delete_group = 'Delete a group'; //Translate
		$this->admin_delete_help = 'Delete a help article'; //Translate
		$this->admin_delete_member = 'Delete a member'; //Translate
		$this->admin_delete_template = 'Delete HTML template'; //Translate
		$this->admin_edit_emoticons = 'Edit or delete emoticons'; //Translate
		$this->admin_edit_forum = 'Edit a forum'; //Translate
		$this->admin_edit_group_name = 'Edit a group\'s name'; //Translate
		$this->admin_edit_group_perms = 'Edit a group\'s permissions'; //Translate
		$this->admin_edit_help = 'Edit a help article'; //Translate
		$this->admin_edit_member = 'Edit a member'; //Translate
		$this->admin_edit_member_perms = 'Edit a member\'s permissions'; //Translate
		$this->admin_edit_member_titles = 'Edit or delete automatic member titles'; //Translate
		$this->admin_edit_settings = 'Edit board settings'; //Translate
		$this->admin_edit_skin = 'Edit or delete a skin'; //Translate
		$this->admin_edit_templates = 'Edit HTML templates'; //Translate
		$this->admin_emoticons = 'Emoticons'; //Translate
		$this->admin_export_skin = 'Export a skin'; //Translate
		$this->admin_fix_stats = 'Fix the member statistics'; //Translate
		$this->admin_forum_order = 'Change the forum ordering'; //Translate
		$this->admin_forums = 'Forums and Categories'; //Translate
		$this->admin_groups = 'Groups'; //Translate
		$this->admin_help = 'Help Articles'; //Translate
		$this->admin_install_emoticons = 'Install emoticons'; //Translate
		$this->admin_install_skin = 'Install a skin'; //Translate
		$this->admin_logs = 'View moderator actions'; //Translate
		$this->admin_mass_mail = 'Send an email to your members'; //Translate
		$this->admin_members = 'Members'; //Translate
		$this->admin_phpinfo = 'View PHP information'; //Translate
		$this->admin_recount_forums = 'Recount topics and replies'; //Translate
		$this->admin_settings = 'Settings'; //Translate
		$this->admin_skins = 'Skins'; //Translate
		$this->admin_stats = 'Statistics center'; //Translate
		$this->admin_your_board = 'Your Board'; //Translate
	}

	function backup()
	{
		$this->backup_create = 'Backup Database'; //Translate
		$this->backup_done = 'The database has been backed up to the main Quicksilver Forums directory.';
		$this->backup_found = 'The following backups were found in the Quicksilver Forums directory';
		$this->backup_invalid = 'The backup does not appear to be valid. No changes were made to your database.'; //Translate
		$this->backup_none = 'No backups were found in the Quicksilver Forums directory.'; //Translate
		$this->backup_restore = 'Restore Backup'; //Translate
		$this->backup_restore_done = 'The database has been restored successfully.'; //Translate
		$this->backup_warning = 'Warning: This will overwrite all existing data used by Quicksilver Forums.'; //Translate
	}

	function ban()
	{
		$this->ban = 'Ban'; //Translate
		$this->ban_banned_ips = 'Ban IP Addresses'; //Translate
		$this->ban_banned_members = 'Banned Members'; //Translate
		$this->ban_ip = 'Ban IP Addresses'; //Translate
		$this->ban_member_explain1 = 'To ban users, change their user group to'; //Translate
		$this->ban_member_explain2 = 'in the member controls.'; //Translate
		$this->ban_members = 'Ban Members'; //Translate
		$this->ban_nomembers = 'There are currently no banned members.'; //Translate
		$this->ban_one_per_line = 'One address per line.'; //Translate
		$this->ban_regex_allowed = 'Regular expressions are allowed. You can use a single * as a wildcard for one or more digits.'; //Translate
		$this->ban_settings = 'Ban Settings'; //Translate
		$this->ban_users_banned = 'Users banned.'; //Translate
	}

	function board()
	{
		$this->board_active_users = 'Akt�v felhaszn�l�k';
		$this->board_birthdays = 'Sz�linapok:';
		$this->board_bottom_page = 'Go to the bottom of the page'; //Translate
		$this->board_can_post = 'V�laszolhatsz ebben a f�rumban.';
		$this->board_can_topics = 'Belen�zhetsz, de nem �rhatsz ebbe a f�rumba.';
		$this->board_cant_post = 'Nem v�laszolhatsz ebben a f�rumban.';
		$this->board_cant_topics = 'Nem n�zheted meg, �s nem �rhatsz ebbe a f�rumba.';
		$this->board_forum = 'F�rum';
		$this->board_guests = 'vend�g';
		$this->board_last_post = 'Utols� be�r�s';
		$this->board_mark = 'Be�r�s olvasottk�nt jel�l�se';
		$this->board_mark1 = 'Minden be�r�s olvasottk�nt van jel�lve.';
		$this->board_members = 'tag';
		$this->board_message = '%s �zenet';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Ma senkinek sincs sz�linapja.';
		$this->board_nobody = 'Egyetlen tag sincs bejelentkezve.';
		$this->board_nopost = 'Nincs be�r�s';
		$this->board_noview = 'Nincs jogod ide ben�zni.';
		$this->board_regfirst = 'Nincs jogod ide ben�zni. HA regisztr�lod magad, akkor igen.';
		$this->board_replies = 'V�laszok';
		$this->board_stats = 'Statisztik�k';
		$this->board_stats_string = '%s regisztr�lt tag. �dv�z�lj�k leg�jabb tagunkat, %s -t.<br /> �sszesen %s t�ma �s %s v�lasz a(z) %s be�r�sra.';
		$this->board_top_page = 'Go to the top of the page'; //Translate
		$this->board_topics = 'T�m�k';
		$this->board_topics_new = 'Nincs �j t�ma ebben a f�rumban.';
		$this->board_topics_old = 'Nincs �j be�r�s ebben a f�rumban.';
		$this->board_users = 'tag';
		$this->board_write_topics = 'Jogod van t�m�t nyitni ebben a f�rumban.';
	}

	function censoring()
	{
		$this->censor = 'Censor Words'; //Translate
		$this->censor_one_per_line = 'One per line.'; //Translate
		$this->censor_regex_allowed = 'Regular expressions are allowed. You can use a single * as a wildcard for one or more characters.'; //Translate
		$this->censor_updated = 'Word list updated.'; //Translate
	}

	function cp()
	{
		$this->cp_aim = 'AIM n�v';
		$this->cp_already_member = 'Az �ltalad megadott email c�met m�r valaki haszn�lja.';
		$this->cp_apr = '�prilis';
		$this->cp_aug = 'Augusztus';
		$this->cp_avatar_current = 'Kisk�p';
		$this->cp_avatar_error = 'Kisk�p hiba';
		$this->cp_avatar_must_select = 'Ki kell v�lasztanod egy kisk�pet.';
		$this->cp_avatar_none = 'Ne haszn�ljon kisk�pet.';
		$this->cp_avatar_pixels = 'pixel';
		$this->cp_avatar_select = 'V�lassz egy kisk�pet';
		$this->cp_avatar_size_height = 'A kisk�ped magass�ga: 1 - ';
		$this->cp_avatar_size_width = 'A kisk�ped sz�less�ge: 1 - ';
		$this->cp_avatar_upload = 'T�lts fel egy kisk�pet a g�pedr�l';
		$this->cp_avatar_upload_failed = 'A kisk�p felt�lt�se nem siker�lt. Az �ltalad megadott f�jl tal�n nem l�tezik.';
		$this->cp_avatar_upload_not_image = 'Csak saj�t haszn�latra t�lthetsz fel kisk�pet.';
		$this->cp_avatar_upload_too_large = 'A felt�lt�sre v�r� kisk�p t�l nagy. A maximum m�ret: %d kilobyte.';
		$this->cp_avatar_url = 'Add meg az URL c�met a kisk�phez';
		$this->cp_avatar_use = 'Felt�lt�tt kisk�p haszn�lata';
		$this->cp_bday = 'Sz�linap';
		$this->cp_been_updated = 'Az adatlapd friss�tve lett.';
		$this->cp_been_updated1 = 'A kisk�ped fel�l�rva.';
		$this->cp_been_updated_prefs = 'Be�ll�t�said friss�tve.';
		$this->cp_changing_pass = 'Jelsz� szerkeszt�se';
		$this->cp_contact_pm = 'Megengeded, hogy a t�bbiek priviben felkeressenek?';
		$this->cp_cp = 'Be�ll�t�pult';
		$this->cp_current_avatar = 'Aktu�lis kisk�p';
		$this->cp_current_time = 'Most %s.';
		$this->cp_custom_title = 'Custom Member Title'; //Translate
		$this->cp_custom_title2 = 'This is a privledge reserved for board administrators'; //Translate
		$this->cp_dec = 'December'; //Translate
		$this->cp_editing_avatar = 'Kisk�p szerkeszt�se';
		$this->cp_editing_profile = 'Adatlap szerkeszt�se';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'K�ldhetnek emailt neked a t�bbi tagok?';
		$this->cp_email_invaid = 'A be�rt email c�m nem helyes.';
		$this->cp_err_avatar = 'Kisk�p felt�lt�si hiba';
		$this->cp_err_updating = 'Adatlap friss�t�si hiba';
		$this->cp_feb = 'Febru�r';
		$this->cp_file_type = 'A megadott URL alatt nics meg a k�p. Elfogadott terjeszt�sek: gif, jpg, png.';
		$this->cp_format = 'N�v szerkeszt�se';
		$this->cp_gtalk = 'GTalk Account'; //Translate
		$this->cp_header = 'Felhaszn�l�i vez�rl�pult';
		$this->cp_height = 'Magass�g';
		$this->cp_icq = 'ICQ sz�m';
		$this->cp_interest = '�rdekl�d�s';
		$this->cp_jan = 'Janu�r';
		$this->cp_july = 'J�lius';
		$this->cp_june = 'J�nius';
		$this->cp_label_edit_avatar = 'Kisk�p szerkeszt�se';
		$this->cp_label_edit_pass = 'Jelsz� szerkeszt�se';
		$this->cp_label_edit_prefs = 'Testreszab�s';
		$this->cp_label_edit_profile = 'Adatlap szerkeszt�se';
		$this->cp_label_edit_subs = 'Beiratkoz�sok szerkeszt�se';
		$this->cp_language = 'Nyelv';
		$this->cp_less_charac = 'A neved 32 karaktern�l r�videbb kell legyen.';
		$this->cp_location = 'Lakhely';
		$this->cp_login_first = 'Be kell jelentkezned!';
		$this->cp_mar = 'M�rcius';
		$this->cp_may = 'M�jus';
		$this->cp_msn = 'MSN n�v';
		$this->cp_must_orig = 'A nevednek egyeznie kell az eredetivel. Csak kis-nagybet�t v�ltoztathatsz.';
		$this->cp_new_notmatch = 'Az �j jelszavak nem tal�lnak.';
		$this->cp_new_pass = '�j jelsz�';
		$this->cp_no_flash = 'Tiltottak kisk�pe villog.';
		$this->cp_not_exist = 'A megadott (%s) d�tum nem l�tezik!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Okt�ber';
		$this->cp_old_notmatch = 'A r�gi jelsz� nem egyezik az �ltalunk t�rolttal.';
		$this->cp_old_pass = 'R�gi jelsz�';
		$this->cp_pass_notvaid = 'A megadott jelsz� nem helyes form�tumban van.';
		$this->cp_preferences = 'Testreszab�s';
		$this->cp_privacy = 'Szem�lyes opci�k';
		$this->cp_repeat_pass = '�j jelsz� �jra';
		$this->cp_sept = 'Szeptember';
		$this->cp_show_active = 'Mutassuk a tev�kenys�geid, mik�zben az oldalt haszn�lod?';
		$this->cp_show_email = 'Megjelen�ted az email c�met az adatlapon?';
		$this->cp_signature = 'Al��r�s';
		$this->cp_size_max = 'A megadott kisk�p t�l nagy. A maxim�lis m�ret: %s - %s pixel.';
		$this->cp_skin = 'Asztal huzat';
		$this->cp_sub_change = 'Feliratkoz�sok megv�ltoztat�sa';
		$this->cp_sub_delete = 'T�r�l';
		$this->cp_sub_expire = 'Lej�rati d�tum';
		$this->cp_sub_name = 'Feliratkoz�si n�v';
		$this->cp_sub_no_params = 'Nem adt�l meg param�tert.';
		$this->cp_sub_success = 'Feliratkozt�l erre: %s.';
		$this->cp_sub_type = 'Feliratkoz�s t�pusa';
		$this->cp_sub_updated = 'A kiv�lasztott feliratkoz�sokat t�r�lt�k.';
		$this->cp_topic_option = 'T�ma be�ll�t�sai';
		$this->cp_updated = 'Adatlap friss�tve';
		$this->cp_updated1 = 'Kisk�p friss�tve';
		$this->cp_updated_prefs = 'Be�ll�t�sok friss�tve';
		$this->cp_user_exists = 'M�r van ilyen nev� felhaszn�l�.';
		$this->cp_valided = 'A jelszavad sikeresen friss�tve.';
		$this->cp_view_avatar = 'Kisk�pek megtekint�se?';
		$this->cp_view_emoticon = 'Emotikonok megtekint�se?';
		$this->cp_view_signature = 'Al��r�sok megtekint�se?';
		$this->cp_welcome = '�dv�z�l�nk a vez�rl�pulton. Itt be�ll�thatod az adataid. V�lassz az al�bbi lehet�s�gekb�l.';
		$this->cp_width = 'Sz�less�g';
		$this->cp_www = 'Honlap';
		$this->cp_yahoo = 'Yahoo n�v';
		$this->cp_zone = 'Id�z�na';
	}

	function email()
	{
		$this->email_blocked = 'A kiv�lasztott tag nem fogad emailt ezen a fel�leten kereszt�l';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Email test:';
		$this->email_no_fields = 'Menj vissza �s t�lts ki minden adatot.';
		$this->email_no_member = 'Nincs ilyen nev� tag';
		$this->email_no_perm = 'Nincs jogod emailt k�ldeni err�l a fel�letr�l.';
		$this->email_sent = 'Az emailed elk�ldt�k.';
		$this->email_subject = 'T�ma:';
		$this->email_to = 'C�mzett:';
	}

	function emot_control()
	{
		$this->emote = 'Emoticons'; //Translate
		$this->emote_add = 'Add Emoticons'; //Translate
		$this->emote_added = 'Emoticon added.'; //Translate
		$this->emote_clickable = 'Clickable'; //Translate
		$this->emote_edit = 'Edit Emoticons'; //Translate
		$this->emote_image = 'Image'; //Translate
		$this->emote_install = 'Install Emoticons'; //Translate
		$this->emote_install_done = 'Emoticons have been successfully reinstalled.'; //Translate
		$this->emote_install_warning = 'This will erase all existing emoticon settings and import uploaded emoticons from your currently selected skin into the database.'; //Translate
		$this->emote_no_text = 'No emoticon text was given.'; //Translate
		$this->emote_text = 'Text'; //Translate
	}

	function forum()
	{
		$this->forum_by = 'Felad�';
		$this->forum_can_post = 'V�laszolhatsz ebben a f�rumban.';
		$this->forum_can_topics = 'Megtekintheted a t�m�kat ebben a f�rumban.';
		$this->forum_cant_post = 'Nem v�laszolhatsz ebben a f�rumban.';
		$this->forum_cant_topics = 'Nem n�zhetsz ide be.';
		$this->forum_dot = 'pont';
		$this->forum_dot_detail = 'megmutatja, ha �rt�l ide';
		$this->forum_forum = 'F�rum';
		$this->forum_guest = 'Vend�g';
		$this->forum_hot = 'Forr�';
		$this->forum_icon = '�zenet ikonja';
		$this->forum_jump = 'Ugr�s a leg�jabb bejegyz�sre';
		$this->forum_last = 'Utols� bejegyz�s';
		$this->forum_locked = 'Z�rolva';
		$this->forum_moved = '�thelyezve';
		$this->forum_msg = '%s �zenet';
		$this->forum_new = '�j';
		$this->forum_new_poll = '�j szavaz�g�p';
		$this->forum_new_topic = '�j t�ma nyit�sa';
		$this->forum_no_topics = 'Nincsenek t�m�k ebben a f�rumban.';
		$this->forum_noexist = 'A megadott f�rum nem l�tezik.';
		$this->forum_nopost = 'Nincs be�r�s';
		$this->forum_not = 'Nem';
		$this->forum_noview = 'Nincs jogod ide ben�zni.';
		$this->forum_pages = 'oldal';
		$this->forum_pinned = 'Kit�z�tt';
		$this->forum_pinned_topic = 'Tiltott t�ma';
		$this->forum_poll = 'Szavaz�g�p';
		$this->forum_regfirst = 'Nincs jogod ide ben�zni. HA regisztr�lod magad, akkor igen.';
		$this->forum_replies = 'V�laszok';
		$this->forum_starter = 'T�manyit�';
		$this->forum_sub = 'Alt�ma';
		$this->forum_sub_last_post = 'Utols� bejegyz�s';
		$this->forum_sub_replies = 'V�laszok';
		$this->forum_sub_topics = 'T�m�k';
		$this->forum_subscribe = 'E-mail k�ld�se �j bejegyz�skor';
		$this->forum_topic = 'T�ma';
		$this->forum_topics_new = '�j bejegyz�sek a f�rumban.';
		$this->forum_topics_old = 'Nincs �j bejegyz�s a f�rumban.';
		$this->forum_views = 'Megjelen�t�sek';
		$this->forum_write_topics = 'Nyithatsz t�m�kat ebben a f�rumban.';
	}

	function forums()
	{
		$this->forum_controls = 'Forum Controls'; //Translate
		$this->forum_create = 'Create Forum'; //Translate
		$this->forum_create_cat = 'Create a Category'; //Translate
		$this->forum_created = 'Forum Created'; //Translate
		$this->forum_default_perms = 'Default Permissions'; //Translate
		$this->forum_delete = 'Delete Forum'; //Translate
		$this->forum_delete_warning = 'Are you sure you want to delete this forum, its topics, and its posts?<br />This action cannot be reversed.'; //Translate
		$this->forum_deleted = 'The forum has been deleted.'; //Translate
		$this->forum_description = 'Description'; //Translate
		$this->forum_edit = 'Edit Forum'; //Translate
		$this->forum_edited = 'The forum was edited successfully.'; //Translate
		$this->forum_empty = 'The forum name is empty. Please go back and enter a name.'; //Translate
		$this->forum_is_subcat = 'This forum is a subcategory only.'; //Translate
		$this->forum_name = 'Name'; //Translate
		$this->forum_no_orphans = 'You cannot orphan a forum by deleting its parent.'; //Translate
		$this->forum_none = 'There are no forums to manipulate.'; //Translate
		$this->forum_ordered = 'Forum Order Updated'; //Translate
		$this->forum_ordering = 'Change Forum Ordering'; //Translate
		$this->forum_parent = 'You can\'t change a forum\'s parent in that way.'; //Translate
		$this->forum_parent_cat = 'Parent Category'; //Translate
		$this->forum_quickperm_select = 'Select an existing forum to copy its permissions.'; //Translate
		$this->forum_quickperms = 'Quick Permissions'; //Translate
		$this->forum_recount = 'Recount Topics and Replies'; //Translate
		$this->forum_select_cat = 'Select an existing category to create a forum.'; //Translate
		$this->forum_subcat = 'Subcategory'; //Translate
	}

	function groups()
	{
		$this->groups_bad_format = 'You must use %s in the format, which represents the group name.'; //Translate
		$this->groups_based_on = 'based on'; //Translate
		$this->groups_create = 'Create Group'; //Translate
		$this->groups_create_new = 'Create a new user group named'; //Translate
		$this->groups_created = 'Group Created'; //Translate
		$this->groups_delete = 'Delete Group'; //Translate
		$this->groups_deleted = 'Group Deleted.'; //Translate
		$this->groups_edit = 'Edit Group'; //Translate
		$this->groups_edited = 'Group Edited.'; //Translate
		$this->groups_formatting = 'Display Formatting'; //Translate
		$this->groups_i_confirm = 'I confirm that I want to delete this member group.'; //Translate
		$this->groups_name = 'Name'; //Translate
		$this->groups_no_action = 'No action was taken.'; //Translate
		$this->groups_no_delete = 'There are no custom groups to delete.<br />The core groups are necessary for Quicksilver Forums to function, and cannot be deleted.'; //Translate
		$this->groups_no_group = 'No group was specified.'; //Translate
		$this->groups_no_name = 'No group name was given.'; //Translate
		$this->groups_only_custom = 'Note: You can only delete custom member groups. The core groups are necessary for Quicksilver Forums to function.'; //Translate
		$this->groups_the = 'The group'; //Translate
		$this->groups_to_edit = 'Group to edit'; //Translate
		$this->groups_type = 'Group Type'; //Translate
		$this->groups_will_be = 'will be deleted.'; //Translate
		$this->groups_will_become = 'Users from the deleted group will become'; //Translate
	}

	function help()
	{
		$this->help_add = 'Add Help Article'; //Translate
		$this->help_article = 'Help Article Control'; //Translate
		$this->help_available_files = 'Seg�ts�g';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'A Seg�ts�g nem el�rhet�. Sajn�ljuk.';
		$this->help_not_exist = 'That help article does not exist.'; //Translate
		$this->help_select = 'Please select a help article to edit'; //Translate
		$this->help_select_delete = 'Please select a help article to delete'; //Translate
		$this->help_title = 'Title'; //Translate
	}

	function home()
	{
		$this->admin_cp_denied = 'Access Denied'; //Translate
		$this->admin_cp_warning = 'The Admin CP is disabled until you delete your <b>install</b> directory, as it poses a serious security risk.'; //Translate
		$this->home_choose = 'Choose a task to begin.'; //Translate
		$this->home_menu_title = 'Admin CP Menu'; //Translate
	}

	function login()
	{
		$this->login_cant_logged = 'You could not be logged in. Check to see that your user name and password are correct.<br /><br />They are case sensitive, so \'UsErNaMe\' is different from \'Username\'. Also, check to see that cookies are enabled in your browser.'; //Translate
		$this->login_cookies = 'A Cookie-k enged�lyezve kell legyenek a bel�p�shez.';
		$this->login_forgot_pass = 'Elfeletetted a jelszavad?';
		$this->login_header = 'Bejelentkez�s...';
		$this->login_logged = 'Be vagy jelentkezve.';
		$this->login_now_out = 'Ki vagy jelentkezve.';
		$this->login_out = 'Kijelentkez�s...';
		$this->login_pass = 'Jelsz�';
		$this->login_pass_no_id = 'Nincs ilyen nev� tagunk.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Jelsz� null�z�sa';
		$this->login_pass_sent = 'A jelszavad null�ztuk. Az �j jelsz�t elk�ldt�k az email c�medre.';
		$this->login_sure = 'Biztos kijelentkezik \'%s\'?';
		$this->login_user = 'N�v';
	}

	function logs()
	{
		$this->logs_action = 'Action'; //Translate
		$this->logs_deleted_post = 'Deleted a post'; //Translate
		$this->logs_deleted_topic = 'Deleted a topic'; //Translate
		$this->logs_edited_post = 'Edited a post'; //Translate
		$this->logs_edited_topic = 'Edited a topic'; //Translate
		$this->logs_id = 'IDs'; //Translate
		$this->logs_locked_topic = 'Locked a topic'; //Translate
		$this->logs_moved_from = 'from forum'; //Translate
		$this->logs_moved_to = 'to forum'; //Translate
		$this->logs_moved_topic = 'Moved a topic'; //Translate
		$this->logs_moved_topic_num = 'Moved topic #'; //Translate
		$this->logs_pinned_topic = 'Pinned a topic'; //Translate
		$this->logs_post = 'Post'; //Translate
		$this->logs_time = 'Time'; //Translate
		$this->logs_topic = 'Topic'; //Translate
		$this->logs_unlocked_topic = 'Unlocked a topic'; //Translate
		$this->logs_unpinned_topic = 'Unpinned a topic'; //Translate
		$this->logs_user = 'User'; //Translate
		$this->logs_view = 'View Moderator Actions'; //Translate
	}

	function main()
	{
		$this->main_activate = 'A fi�kod m�g nem akt�v.';
		$this->main_activate_resend = 'Aktiv�l� email �jrak�ld�se';
		$this->main_admincp = 'admin fel�let';
		$this->main_banned = 'A moder�torok kitiltottak innen.';
		$this->main_code = 'K�d';
		$this->main_cp = 'Vez�rl�pult';
		$this->main_full = 'Teljes';
		$this->main_help = 'seg�ts�g';
		$this->main_load = 'bet�lt�s';
		$this->main_login = 'bejelentkez�s';
		$this->main_logout = 'kijelentkez�s';
		$this->main_mark = 'mark all'; //Translate
		$this->main_mark1 = 'Mark all topics as read'; //Translate
		$this->main_max_load = 'Sajn�ljuk, de %s nem el�rhet�, t�l sok a bejelentkezett felhaszn�l�.';
		$this->main_members = 'tagok';
		$this->main_messenger = '�zen�';
		$this->main_new = '�j';
		$this->main_next = 'k�vetkez�';
		$this->main_prev = 'el�z�';
		$this->main_queries = 'k�r�s';
		$this->main_quote = 'Id�zet';
		$this->main_recent = 'recent posts'; //Translate
		$this->main_recent1 = 'View recent topics since your last visit'; //Translate
		$this->main_register = 'regisztr�ci�';
		$this->main_reminder = 'Eml�keztet�';
		$this->main_reminder_closed = 'Az oldal z�rva vanr �s csak a karbantart�k l�thatj�k.';
		$this->main_said = 'mondta';
		$this->main_search = 'keres�s';
		$this->main_welcome = '�dv�z�l�nk';
		$this->main_welcome_guest = '�dv�z�l�nk!';
	}

	function mass_mail()
	{
		$this->mail = 'Mass Mail'; //Translate
		$this->mail_announce = 'Announcement From'; //Translate
		$this->mail_groups = 'Recipient Groups'; //Translate
		$this->mail_members = 'members.'; //Translate
		$this->mail_message = 'Message'; //Translate
		$this->mail_select_all = 'Select All'; //Translate
		$this->mail_send = 'Send Mail'; //Translate
		$this->mail_sent = 'Your message has been sent to'; //Translate
	}

	function member_control()
	{
		$this->mc = 'Member Control'; //Translate
		$this->mc_confirm = 'Are you sure you want to delete'; //Translate
		$this->mc_delete = 'Delete Member'; //Translate
		$this->mc_deleted = 'Member Deleted.'; //Translate
		$this->mc_edit = 'Edit Member'; //Translate
		$this->mc_edited = 'Member Updated'; //Translate
		$this->mc_find = 'Find members with names containing'; //Translate
		$this->mc_found = 'The following members were found. Please select one.'; //Translate
		$this->mc_guest_needed = 'The guest account is necessary for Quicksilver Forums to function.'; //Translate
		$this->mc_not_found = 'No members were found matching'; //Translate
		$this->mc_user_aim = 'AIM Name'; //Translate
		$this->mc_user_avatar = 'Avatar'; //Translate
		$this->mc_user_avatar_height = 'Avatar Height'; //Translate
		$this->mc_user_avatar_type = 'Avatar Type'; //Translate
		$this->mc_user_avatar_width = 'Avatar Width'; //Translate
		$this->mc_user_birthday = 'Birthday'; //Translate
		$this->mc_user_email = 'Email Address'; //Translate
		$this->mc_user_email_show = 'Email Is Public'; //Translate
		$this->mc_user_group = 'Group'; //Translate
		$this->mc_user_gtalk = 'GTalk Account'; //Translate
		$this->mc_user_homepage = 'Homepage'; //Translate
		$this->mc_user_icq = 'ICQ Number'; //Translate
		$this->mc_user_id = 'User ID'; //Translate
		$this->mc_user_interests = 'Interests'; //Translate
		$this->mc_user_joined = 'Member Since'; //Translate
		$this->mc_user_language = 'Language'; //Translate
		$this->mc_user_lastpost = 'Last Post'; //Translate
		$this->mc_user_lastvisit = 'Last Visit'; //Translate
		$this->mc_user_level = 'Level'; //Translate
		$this->mc_user_location = 'Location'; //Translate
		$this->mc_user_msn = 'MSN Identity'; //Translate
		$this->mc_user_name = 'Name'; //Translate
		$this->mc_user_pm = 'Accepting Private Messages'; //Translate
		$this->mc_user_posts = 'Posts'; //Translate
		$this->mc_user_signature = 'Signature'; //Translate
		$this->mc_user_skin = 'Skin'; //Translate
		$this->mc_user_timezone = 'Time Zone'; //Translate
		$this->mc_user_title = 'Member Title'; //Translate
		$this->mc_user_title_custom = 'Use a Custom Member Title'; //Translate
		$this->mc_user_view_avatars = 'Viewing Avatars'; //Translate
		$this->mc_user_view_emoticons = 'Viewing Emoticons'; //Translate
		$this->mc_user_view_signatures = 'Viewing Signatures'; //Translate
		$this->mc_user_yahoo = 'Yahoo Identity'; //Translate
	}

	function membercount()
	{
		$this->mcount = 'Fix Member Statistics'; //Translate
		$this->mcount_updated = 'Member Count Updated.'; //Translate
	}

	function members()
	{
		$this->members_all = 'minden';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = 'Email k�ld�se ennek a tagnak';
		$this->members_group = 'Csoport';
		$this->members_joined = 'Bel�pett';
		$this->members_list = 'Tagok list�ja';
		$this->members_member = 'Tag';
		$this->members_pm = 'Privi';
		$this->members_posts = 'Be�r�sok';
		$this->members_send_pm = 'Priv�t �zenet k�ld�se';
		$this->members_title = 'C�m';
		$this->members_vist_www = 'A tag honlapj�nak megl�togat�sa';
		$this->members_www = 'Honlap';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Biztos, hogy t�r�lni akarod ezt a be�r�st?';
		$this->mod_confirm_topic_delete = 'Biztos, hogy t�r�lni akarod ezt a t�m�t?';
		$this->mod_error_first_post = 'Nem t�r�lheted az els� be�r�st.';
		$this->mod_error_move_category = 'Nem helyezhetsz �t egy t�m�t egy kateg�ri�ba.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Nem helyezhetsz �t egy t�m�t egy neml�tez� f�rumba.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Nem helyezhetsz �t egy t�m�t ugyanabba a f�rumba.';
		$this->mod_label_controls = 'Moder�tor be�ll�t�sai';
		$this->mod_label_description = 'Le�r�s';
		$this->mod_label_emoticon = 'Konvert�ljuk az emotikonokat k�pekk�?';
		$this->mod_label_global = 'Glob�lis t�ma';
		$this->mod_label_mbcode = 'MbK�d form�z�s?';
		$this->mod_label_move_to = '�thelyez�s';
		$this->mod_label_options = 'Opci�k';
		$this->mod_label_post_delete = 'Be�r�s t�rl�se';
		$this->mod_label_post_edit = 'Be�r�s szerkeszt�se';
		$this->mod_label_title = 'C�m';
		$this->mod_label_title_original = 'Eredeti c�m';
		$this->mod_label_title_split = 'C�m darabol�sa';
		$this->mod_label_topic_delete = 'T�ma t�rl�se';
		$this->mod_label_topic_edit = 'T�ma szerkeszt�se';
		$this->mod_label_topic_lock = 'T�ma z�rol�sa';
		$this->mod_label_topic_move = 'T�ma �thelyez�se';
		$this->mod_label_topic_move_complete = 'T�ma teljes �thelyez�se az �j f�rumba';
		$this->mod_label_topic_move_link = 'T�ma teljes �thelyez�se az �j f�rumba, �s link hagy�sa a r�giben.';
		$this->mod_label_topic_pin = 'T�ma kit�z�se';
		$this->mod_label_topic_split = 'T�ma darabol�sa';
		$this->mod_missing_post = 'Az illet� be�r�s nem l�tezik.';
		$this->mod_missing_topic = 'Az illet� t�ma nem l�tezik.';
		$this->mod_no_action = 'Meg kell adni egy m�veletet.';
		$this->mod_no_post = 'Meg kell adni egy be�r�st.';
		$this->mod_no_topic = 'Meg kell adni egy t�m�t.';
		$this->mod_perm_post_delete = 'Nincs jogod t�r�lni ezt a be�r�st.';
		$this->mod_perm_post_edit = 'Nincs jogod szerkeszteni ezt a be�r�st.';
		$this->mod_perm_topic_delete = 'Nincs jogod t�r�lni ezt a t�m�t.';
		$this->mod_perm_topic_edit = 'Nincs jogod szerkeszteni ezt a t�m�t.';
		$this->mod_perm_topic_lock = 'Nincs jogod z�rolni ezt a t�m�t.';
		$this->mod_perm_topic_move = 'Nincs jogod �thelyezni ezt a t�m�t.';
		$this->mod_perm_topic_pin = 'Nincs jogod kit�zni ezt a t�m�t.';
		$this->mod_perm_topic_split = 'Nincs jogod darabolni a t�m�t.';
		$this->mod_perm_topic_unlock = 'Nincs jogod kioldani ezt a t�m�t.';
		$this->mod_perm_topic_unpin = 'Nincs jogod levenni a kit�z�st err�l a t�m�r�l.';
		$this->mod_success_post_delete = 'A be�r�s sikeresen t�r�lve.';
		$this->mod_success_post_edit = 'A be�r�s sikeresen szerkesztve.';
		$this->mod_success_split = 'A t�m�t sikeresen daraboltuk.';
		$this->mod_success_topic_delete = 'A t�ma sikeresen t�r�lve.';
		$this->mod_success_topic_edit = 'A t�ma sikeresen szerkesztve.';
		$this->mod_success_topic_move = 'A t�ma sikeresen �t lett helyezve.';
	}

	function optimize()
	{
		$this->optimize = 'Optimize Database'; //Translate
		$this->optimized = 'The tables in the database have been optimized for maximum performance.'; //Translate
	}

	function perms()
	{
		$this->perm = 'Permission'; //Translate
		$this->perms = 'Permissions'; //Translate
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
		$this->perms_topic_split = 'Split any topic into multiple topics'; //Translate
		$this->perms_topic_split_own = 'Split only topics the user has created into multiple topics'; //Translate
		$this->perms_topic_unlock = 'Unlock any topic'; //Translate
		$this->perms_topic_unlock_mod = 'Unlock a moderator\'s lock'; //Translate
		$this->perms_topic_unlock_own = 'Unlock only topics the user has created'; //Translate
		$this->perms_topic_unpin = 'Unpin any topic'; //Translate
		$this->perms_topic_unpin_own = 'Unpin only topics the user has created'; //Translate
		$this->perms_topic_view = 'View topics'; //Translate
		$this->perms_updated = 'Permissions have been updated.'; //Translate
		$this->perms_user_inherit = 'The user will inherit the group\'s permissions.'; //Translate
	}

	function php_info()
	{
		$this->php_error = 'Error'; //Translate
		$this->php_error_msg = 'phpinfo() can not be executed. It appears that your host has disabled this feature.'; //Translate
	}

	function pm()
	{
		$this->pm_avatar = 'Avatar'; //Translate
		$this->pm_cant_del = 'Nincs jogod t�r�lni ezt az �zenetet.';
		$this->pm_delallmsg = 'Minden �zenet t�rl�se';
		$this->pm_delete = 'T�r�l';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = '�zenet t�r�lve.';
		$this->pm_deleted_all = '�zenetek t�r�lve.';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Az �zenetet nem lehet elk�ldeni. Minen k�rt mez� ki van t�ltve?';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Be�rkezett �zenetek';
		$this->pm_folder_new = '%s �j';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Felad�';
		$this->pm_group = 'Csoport';
		$this->pm_guest = 'L�togat�k�nt nem haszn�lhatod az �zen�t. Jelentkezz be, vagy regisztr�lj';
		$this->pm_joined = 'regisztr�lva';
		$this->pm_messenger = '�zen�';
		$this->pm_msgtext = '�zenet sz�vege';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Meg kell adni egy mapp�t.';
		$this->pm_no_member = 'nincs ilyen tag.';
		$this->pm_no_number = 'Nincs ilyen sz�m� �zenet.';
		$this->pm_no_title = 'Nincs t�ma';
		$this->pm_nomsg = 'Nincs �zenet ebben a mapp�ban.';
		$this->pm_noview = 'Nincs jogod megn�zni ezt az �zenenetet.';
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_personal = 'Priv�t �zen�';
		$this->pm_personal_msging = 'Priv�t �zenet k�ld�se';
		$this->pm_pm = 'P�';
		$this->pm_posts = 'Be�r�s';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'V�lasz';
		$this->pm_send = 'K�ld�s';
		$this->pm_sendamsg = '�zenet k�ld�se';
		$this->pm_sendingpm = 'Priv�t �zenet k�ld�se';
		$this->pm_sendon = 'Elk�ldve';
		$this->pm_success = 'Sikeres k�ld�s.';
		$this->pm_sure_del = 'Biztos, hogy t�r�lni akarod ezt az �zenetet?';
		$this->pm_sure_delall = 'Biztos, hogy t�r�lni akarsz minden �zenetet?';
		$this->pm_title = 'T�ma';
		$this->pm_to = 'C�mzett';
	}

	function post()
	{
		$this->post_attach = 'Csatol�sok';
		$this->post_attach_add = 'Csatol�s hozz�ad�sa';
		$this->post_attach_disrupt = 'A csatol�s hozz�ad�sa vagy megszak�t�sa nem t�nteti el az �zeneted.';
		$this->post_attach_failed = 'A csatol�s felt�lt�se nem siker�lt.';
		$this->post_attach_not_allowed = 'Nem csatolhatsz ilyen f�jlt�pust.';
		$this->post_attach_remove = 'Csatol�s elt�vol�t�sa';
		$this->post_attach_too_large = 'T�l nagy a megadott f�jl. Maxim�lis m�ret: %d kilobyte.';
		$this->post_cant_create = 'Vend�gk�nt nincs jogod t�m�t nyitni. Regisztr�lj!';
		$this->post_cant_create1 = 'Nincs jogod t�m�t nyitni.';
		$this->post_cant_enter = 'Nem szavazhatsz. Lehet, hogy m�r szavazt�l, vagy nincs jogod hozz�.';
		$this->post_cant_poll = 'Vend�gk�nt nem hozhatsz l�tre szavaz�g�pet. Regisztr�lj!';
		$this->post_cant_poll1 = 'nincs jogod szavaz�g�pet ind�tani.';
		$this->post_cant_reply = 'Nincs jogod v�laszolni ebben a f�rumban.';
		$this->post_cant_reply1 = 'Vend�gk�nt nem v�laszolhatsz ebben a f�rumban. Regisztr�lj!';
		$this->post_cant_reply2 = 'Nnics jogod v�laszolni a t�m�ra.';
		$this->post_closed = 'A t�ma z�rva van.';
		$this->post_create_poll = 'Szavaz�g�p l�trehoz�sa';
		$this->post_create_topic = 'T�ma nyit�sa';
		$this->post_creating = 'T�ma nyit�sa';
		$this->post_creating_poll = 'Szavaz�g�p l�trehoz�sa';
		$this->post_flood = 'Az elm�lt %s m�sodpercben m�r �rt�l.<br /><br />Pr�b�ld �jra p�r m�sodperc m�lva.';
		$this->post_guest = 'Vend�g';
		$this->post_icon = 'Ikon k�ld�se';
		$this->post_last_five = 'Utols� �t be�r�s ford�tott sorrendben';
		$this->post_length = 'M�ret ellen�rz�se';
		$this->post_mbcode_address = 'Adj meg egy c�met';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'K�k';
		$this->post_mbcode_bold = 'F�lk�v�r';
		$this->post_mbcode_bold1 = 'F';
		$this->post_mbcode_chocolate = 'Csokol�d�';
		$this->post_mbcode_code = 'K�d';
		$this->post_mbcode_color = 'Sz�n';
		$this->post_mbcode_coral = 'Korall';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'S�t�tk�k';
		$this->post_mbcode_darkred = 'S�t�t piros';
		$this->post_mbcode_deepink = 'S�t�t r�zsasz�n';
		$this->post_mbcode_detail = 'Le�r�s';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'T�glav�r�s';
		$this->post_mbcode_font = 'Bet�t�pus';
		$this->post_mbcode_green = 'Z�ld';
		$this->post_mbcode_huge = 'Hatalmas';
		$this->post_mbcode_image = 'K�p';
		$this->post_mbcode_image1 = 'K�P';
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indig�';
		$this->post_mbcode_italic = 'D�lt';
		$this->post_mbcode_italic1 = 'D';
		$this->post_mbcode_large = 'Sz�les';
		$this->post_mbcode_length = 'A be�r�sod "+length+" karaktert tartalmaz.';
		$this->post_mbcode_limegreen = 'Z�ld citrom';
		$this->post_mbcode_medium = 'K�zepes';
		$this->post_mbcode_orange = 'Narancs';
		$this->post_mbcode_orangered = 'V�rnarancs';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Lila';
		$this->post_mbcode_quote = 'Id�zet';
		$this->post_mbcode_red = 'V�r�s';
		$this->post_mbcode_royalblue = 'Kir�lyk�k';
		$this->post_mbcode_sandybrown = 'Homokbarna';
		$this->post_mbcode_seagreen = 'Tengerz�ld';
		$this->post_mbcode_sienna = 'Szienna';
		$this->post_mbcode_silver = 'Ez�st';
		$this->post_mbcode_size = 'M�ret';
		$this->post_mbcode_skyblue = '�gsz�nk�k';
		$this->post_mbcode_small = 'Kicsi';
		$this->post_mbcode_strike = '�th�z�s';
		$this->post_mbcode_strike1 = '�';
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'M�lyz�ld';
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Apr�';
		$this->post_mbcode_tomato = 'Paradicsom';
		$this->post_mbcode_underline = 'Al�h�zott';
		$this->post_mbcode_underline1 = 'A';
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = '�gett fa';
		$this->post_mbcode_yellow = 'Yellow'; //Translate
		$this->post_msg = '�zenet';
		$this->post_must_msg = 'Be kell �rni egy �zenetet.';
		$this->post_must_options = 'Meg kell adni v�laszt�si lehet�s�geket.';
		$this->post_must_title = 'Meg kell adni egy c�met.';
		$this->post_new_poll = '�j szavaz�g�p';
		$this->post_new_topic = '�j t�ma';
		$this->post_no_forum = 'Az illet� f�rum nincs meg.';
		$this->post_no_topic = 'Nincs megadva t�ma.';
		$this->post_no_vote = 'V�lassz, mire szavazol.';
		$this->post_option_emoticons = 'Emotikonok k�pp� alak�t�sa?';
		$this->post_option_global = 'Glob�liss� tessz�k a t�m�t?';
		$this->post_option_mbcode = 'MbK�d form�z�s?';
		$this->post_optional = 'v�laszthat�';
		$this->post_options = 'Opci�k';
		$this->post_poll_options = 'Szavaz�g�p opci�k';
		$this->post_poll_row = 'Soronk�nt egy';
		$this->post_posted = 'Feladva';
		$this->post_posting = 'Felad�s';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'V�lasz';
		$this->post_reply_topic = 'T�m�ra v�laszol';
		$this->post_replying = 'T�m�ra v�laszol';
		$this->post_replying1 = 'V�laszol';
		$this->post_smiles = 'Kattint�ssal behelyezhet� emotikonok';
		$this->post_too_many_options = 'A szavaz�g�p 2 �s %d k�z�tti opci�kb�l �ll.';
		$this->post_topic_detail = 'T�ma le�r�sa';
		$this->post_topic_title = 'T�ma c�me';
		$this->post_view_topic = 'Tejles megjelen�t�s';
		$this->post_voting = 'Szavaz�s';
	}

	function printer()
	{
		$this->printer_back = 'Vissza';
		$this->printer_not_found = 'A t�ma nem tal�lhat�. Lehet, hogy �pp t�r�lt�k, vagy �thelyezt�k.';
		$this->printer_not_found_title = 'Nincs meg a t�ma';
		$this->printer_perm_topics = 'Nincs jogod megn�zni a t�m�kat.';
		$this->printer_perm_topics_guest = 'Nincs jogod megn�zni a t�m�kat. Regisztr�lj!';
		$this->printer_posted_on = 'Feladva';
		$this->printer_send = 'Nyomtat�s';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM n�v';
		$this->profile_av_sign = 'Kisk�p �s al��r�s';
		$this->profile_avatar = 'Kisk�p';
		$this->profile_bday = 'Sz�l. d�tum';
		$this->profile_contact = 'El�r�s';
		$this->profile_email_address = 'Email c�m';
		$this->profile_fav = 'Kedvenc f�rum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = 'ICQ sz�m';
		$this->profile_info = 'Inform�ci�';
		$this->profile_interest = '�rdekl�d�s';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Utols� be�r�s';
		$this->profile_list = 'Tagok list�ja';
		$this->profile_location = 'Lakhely';
		$this->profile_member = 'Tagok csoportja';
		$this->profile_member_title = 'Tag szintje';
		$this->profile_msn = 'MSN n�v';
		$this->profile_must_user = 'Meg kell adni egy tagot.';
		$this->profile_no_member = 'Nincs ilyen tag. Lehet, hogy t�r�lt�k.';
		$this->profile_none = '[ �res ]';
		$this->profile_not_post = 'm�g nem �rt sehov�.';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Priv�t �zenetek';
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'Hozz�sz�l�s';
		$this->profile_private = '[ Privi ]';
		$this->profile_profile = 'Adatlap';
		$this->profile_signature = 'Al��r�s';
		$this->profile_unkown = '[ Ismeretlen ]';
		$this->profile_view_profile = 'Adatlap megtekint�se';
		$this->profile_www = 'Honlap';
		$this->profile_yahoo = 'Yahoo n�v';
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
		$this->recent_by = 'Felad�';
		$this->recent_can_post = 'V�laszolhatsz ebben a f�rumban.';
		$this->recent_can_topics = 'Megtekintheted a t�m�kat ebben a f�rumban.';
		$this->recent_cant_post = 'Nem v�laszolhatsz ebben a f�rumban.';
		$this->recent_cant_topics = 'Nem n�zhetsz ide be.';
		$this->recent_dot = 'pont';
		$this->recent_dot_detail = 'megmutatja, ha �rt�l ide';
		$this->recent_forum = 'F�rum';
		$this->recent_guest = 'Vend�g';
		$this->recent_hot = 'Forr�';
		$this->recent_icon = '�zenet ikonja';
		$this->recent_jump = 'Ugr�s a leg�jabb bejegyz�sre';
		$this->recent_last = 'Utols� bejegyz�s';
		$this->recent_locked = 'Z�rolva';
		$this->recent_moved = '�thelyezve';
		$this->recent_msg = '%s �zenet';
		$this->recent_new = '�j';
		$this->recent_new_poll = '�j szavaz�g�p';
		$this->recent_new_topic = '�j t�ma nyit�sa';
		$this->recent_no_topics = 'Nincsenek t�m�k ebben a f�rumban.';
		$this->recent_noexist = 'A megadott f�rum nem l�tezik.';
		$this->recent_nopost = 'Nincs be�r�s';
		$this->recent_not = 'Nem';
		$this->recent_noview = 'Nincs jogod ide ben�zni.';
		$this->recent_pages = 'oldal';
		$this->recent_pinned = 'Kit�z�tt';
		$this->recent_pinned_topic = 'Tiltott t�ma';
		$this->recent_poll = 'Szavaz�g�p';
		$this->recent_regfirst = 'Nincs jogod ide ben�zni. HA regisztr�lod magad, akkor igen.';
		$this->recent_replies = 'V�laszok';
		$this->recent_starter = 'T�manyit�';
		$this->recent_sub = 'Alt�ma';
		$this->recent_sub_last_post = 'Utols� bejegyz�s';
		$this->recent_sub_replies = 'V�laszok';
		$this->recent_sub_topics = 'T�m�k';
		$this->recent_subscribe = 'E-mail k�ld�se �j bejegyz�skor';
		$this->recent_topic = 'T�ma';
		$this->recent_topics_new = '�j bejegyz�sek a f�rumban.';
		$this->recent_topics_old = 'Nincs �j bejegyz�s a f�rumban.';
		$this->recent_views = 'Megjelen�t�sek';
		$this->recent_write_topics = 'Nyithatsz t�m�kat ebben a f�rumban.';
	}

	function register()
	{
		$this->register_activated = 'Regisztr�ci�d aktiv�lva!';
		$this->register_activating = 'Regisztr�ci� aktiv�l�sa';
		$this->register_activation_error = 'Hiba t�rt�nt aktiv�l�s k�zben. Az aktiv�l�si emailt ellen�rizd. Ha a probl�ma tov�bbra is fenn�ll, �rj az adminnak, hogy m�g egyszer k�ldje el az emailt.';
		$this->register_confirm_passwd = 'Jelsz� �jra';
		$this->register_done = 'sikeres regisztr�ci�! Most m�r bel�phetsz.';
		$this->register_email = 'Email c�m';
		$this->register_email_invalid = 'A megadott email c�m hib�s.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'A megadott email c�men m�r valaki regisztr�lt.';
		$this->register_fields = 'Nincs kit�ltve minden mez�.';
		$this->register_image = 'K�rlek, �rd be a k�pen l�that� sz�veget.';
		$this->register_image_invalid = 'Annak �rdek�ben, hogy ellen�rizni lehessen a feliratkoz� emberi mivolt�t, be kell �rni a k�pen l�that� sz�veget.';
		$this->register_must_activate = 'Sikeresen feliratkozot�l. Elk�ldt�nk egy emailt a %s c�mre a sz�ks�ges aktiv�l�si r�szletekkel. A fi�kod korl�tozott lesz, am�g nincs aktiv�lva.';
		$this->register_name_invalid = 'A megadott n�v t�l hossz�.';
		$this->register_name_taken = 'Ez a n�v m�r foglalt.';
		$this->register_new_user = 'Tag n�v';
		$this->register_pass_invalid = 'A megadott jelsz� nem helyes form�tum�, vagy r�videbb, mint 5 karakter.';
		$this->register_pass_match = 'A be�rt jelszavak nem tal�lnak.';
		$this->register_passwd = 'Jelsz�';
		$this->register_reg = 'Regisztr�l�s';
		$this->register_reging = 'Regisztr�ci�';
	}

	function rssfeed()
	{
		$this->rssfeed_posted_by = 'Posted by'; //Translate
	}

	function search()
	{
		$this->search_advanced = 'Tov�bbi lehet�s�gek';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Alapkeres�s';
		$this->search_characters = 'karakter egy be�r�sban';
		$this->search_day = 'nap';
		$this->search_days = 'nap';
		$this->search_exact_name = 'pontos n�v';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Keres�s';
		$this->search_forum = 'F�rum';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Vend�g';
		$this->search_in = 'Keres�s';
		$this->search_in_posts = 'Csak a be�r�sokban keress.';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'bel�pett';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Tal�latok alapj�n keress';
		$this->search_matches = 'Tal�latok';
		$this->search_month = 'h�nap';
		$this->search_months = 'h�nap';
		$this->search_mysqldoc = 'MySQL Dokument�ci�';
		$this->search_newer = 'soha';
		$this->search_no_results = 'Nincs tal�lat.';
		$this->search_no_words = 'Meg kell adni p�r keres�si krit�riumot.<br /><br />Mindenik legal�bb 3 karakter hossz� kell legyen.';
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = 'r�gebbi';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Csak az els�t jelen�ti meg';
		$this->search_partial_name = 'r�szleges n�v';
		$this->search_post_icon = 'Ikon be�r�sa';
		$this->search_posted_on = 'Feladva';
		$this->search_posts = 'Be�r�sok';
		$this->search_posts_by = 'Csak a be�r�sokban';
		$this->search_regex = 'K�z�ns�ges kifejez�s';
		$this->search_regex_failed = 'A szabv�nyos kifejez�s hib�s. Olvasd el a MySQL dokument�ci�t, ahol t�bbet megtudhatsz a szabv�nyos kifejez�sekr�l.';
		$this->search_relevance = 'Be�r�s fontoss�ga: %d%%';
		$this->search_replies = 'Be�r�s';
		$this->search_result = 'Keres�s eredm�nye';
		$this->search_search = 'Keres�s';
		$this->search_select_all = 'Mindent kijel�l';
		$this->search_show_posts = 'Tal�lt be�r�sok';
		$this->search_sound = 'Keres�s hang alapj�n';
		$this->search_starter = 'T�manyit�';
		$this->search_than = 'mint';
		$this->search_topic = 'T�ma';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'h�t';
		$this->search_weeks = 'h�t';
		$this->search_year = '�v';
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
		$this->choose_set = 'Choose a template set'; //Translate
		$this->choose_skin = 'Choose a skin'; //Translate
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
		$this->temps_search = 'Searching'; //Translate
		$this->temps_settings = 'AdminCP Settings'; //Translate
		$this->temps_templates = 'AdminCP Template Editor'; //Translate
		$this->temps_titles = 'AdminCP Member Titles'; //Translate
		$this->temps_topics = 'Topics'; //Translate
	}

	function timezones()
	{
		$this->gmt = '[GMT] Greenwich Mean Time'; //Translate
		$this->gmt_nev1 = '[GMT-1:00] Azores, Cape Verde'; //Translate
		$this->gmt_nev10 = '[GMT-10:00] Hawaii'; //Translate
		$this->gmt_nev11 = '[GMT-11:00] Midway Island, Samoa'; //Translate
		$this->gmt_nev12 = '[GMT-12:00] International Date Line West'; //Translate
		$this->gmt_nev2 = '[GMT-2:00] Mid-Atlantic'; //Translate
		$this->gmt_nev3 = '[GMT-3:00] Buenos Aires, Greenland'; //Translate
		$this->gmt_nev35 = '[GMT-3:30] Newfoundland'; //Translate
		$this->gmt_nev4 = '[GMT-4:00] Atlantic Time Canada'; //Translate
		$this->gmt_nev5 = '[GMT-5:00] Eastern Time US & Canada'; //Translate
		$this->gmt_nev6 = '[GMT-6:00] Central Time US & Canada'; //Translate
		$this->gmt_nev7 = '[GMT-7:00] Mountain Time US & Canada'; //Translate
		$this->gmt_nev8 = '[GMT-8:00] Pacific Time US & Canada'; //Translate
		$this->gmt_nev9 = '[GMT-9:00] Alaska'; //Translate
		$this->gmt_pos1 = '[GMT+1:00] Amsterdam, Berlin, Rome, Paris'; //Translate
		$this->gmt_pos10 = '[GMT+10:00] Melbourne, Sydney, Guam'; //Translate
		$this->gmt_pos11 = '[GMT+11:00] Magadan, New Caledonia'; //Translate
		$this->gmt_pos12 = '[GMT+12:00] Auckland, Fiji'; //Translate
		$this->gmt_pos2 = '[GMT+2:00] Athens, Cairo, Jerusalem'; //Translate
		$this->gmt_pos3 = '[GMT+3:00] Baghdad, Moscow, Nairobi'; //Translate
		$this->gmt_pos35 = '[GMT+3:30] Tehran'; //Translate
		$this->gmt_pos4 = '[GMT+4:00] Abu Dhabi, Muscat, Tbilisi'; //Translate
		$this->gmt_pos45 = '[GMT+4:30] Kabul'; //Translate
		$this->gmt_pos5 = '[GMT+5:00] Islamabad, Karachi'; //Translate
		$this->gmt_pos55 = '[GMT+5:30] Bombay, Calcutta, New Delhi'; //Translate
		$this->gmt_pos6 = '[GMT+6:00] Almaty, Dhaka'; //Translate
		$this->gmt_pos7 = '[GMT+7:00] Bangkok, Jakarta'; //Translate
		$this->gmt_pos8 = '[GMT+8:00] Beijing, Hong Kong, Singapore'; //Translate
		$this->gmt_pos9 = '[GMT+9:00] Tokyo, Seoul'; //Translate
		$this->gmt_pos95 = '[GMT+9:30] Adelaide, Darwin'; //Translate
	}

	function titles()
	{
		$this->titles_add = 'Add Member Titles'; //Translate
		$this->titles_added = 'Member Title added.'; //Translate
		$this->titles_edit = 'Edit Member Titles'; //Translate
		$this->titles_image = 'Image'; //Translate
		$this->titles_minpost = 'Minimum Posts'; //Translate
		$this->titles_title = 'Title'; //Translate
	}

	function topic()
	{
		$this->topic_attached = 'Csatolt f�jl:';
		$this->topic_attached_downloads = 'let�lt�s';
		$this->topic_attached_perm = 'Nincs jogod let�lteni ezt a f�jlt.';
		$this->topic_attached_title = 'Csatolt f�jl';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = '�j szavaz�g�p l�trehoz�sa';
		$this->topic_create_topic = '�j t�ma ind�t�sa';
		$this->topic_delete = 'T�rl�s';
		$this->topic_delete_post = 'Be�r�s t�rl�se';
		$this->topic_edit = 'Szerkeszt�s';
		$this->topic_edit_post = 'Be�r�s szerkeszt�se';
		$this->topic_edited = 'Utolj�ra szerkesztve: %s, %s �ltal.';
		$this->topic_error = 'Hiba';
		$this->topic_group = 'Csoport';
		$this->topic_guest = 'Vend�g';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'bel�pett';
		$this->topic_level = 'Tag szintje';
		$this->topic_links_aim = 'AIM �zenet elk�ldve %s r�sz�re.';
		$this->topic_links_email = 'Email elk�ldve %s r�sz�re.';
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'ICQ �zenet elk�ldve %s r�sz�re.';
		$this->topic_links_msn = '%s MSN adatlapja';
		$this->topic_links_pm = 'Priv�t �zenet k�ld�se %s r�sz�re';
		$this->topic_links_web = '%s honlapj�nak megl�togat�sa';
		$this->topic_links_yahoo = 'Yahoo! Messenger �zenet k�ld�se %s r�sz�re';
		$this->topic_lock = 'Z�rol';
		$this->topic_locked = 'T�ma lez�rva';
		$this->topic_move = '�thelyez';
		$this->topic_no_votes = 'Itt m�g nem szavazott senki.';
		$this->topic_not_found = 'T�ma nem tal�lhat�';
		$this->topic_not_found_message = 'Nem tal�lom a t�m�t.';
		$this->topic_offline = 'This member is currently offline'; //Translate
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'T�ma be�ll�t�sai';
		$this->topic_pages = 'Oldal';
		$this->topic_perm_view = 'Nincs jogod megn�zni a t�m�kat.';
		$this->topic_perm_view_guest = 'Nnics jogod megn�zni a t�m�kat. Regisztr�lj!';
		$this->topic_pin = 'Kit�zve';
		$this->topic_posted = 'Feladva';
		$this->topic_posts = 'Be�r�s';
		$this->topic_print = 'Nyomtathat� v�ltozat';
		$this->topic_quote = 'Id�zve v�laszol';
		$this->topic_reply = 'V�lasz erre';
		$this->topic_split = 'Darabol';
		$this->topic_split_finish = 'Minden darabol�s k�sz';
		$this->topic_split_keep = 'Ne mozd�tsd el ezt a be�r�st';
		$this->topic_split_move = 'Mozd�tsd el a be�r�st';
		$this->topic_subscribe = 'Email k�ld�se, ha itt hozz�sz�lnak a t�m�hoz.';
		$this->topic_top = 'Oldal tetej�re ugr�s';
		$this->topic_unlock = 'Felold';
		$this->topic_unpin = 'Kit�z�st levesz';
		$this->topic_unreg = 'Nem regisztr�lt';
		$this->topic_view = 'Eredm�nyek megtekint�se';
		$this->topic_viewing = 'T�ma megtekint�se';
		$this->topic_vote = 'Szavaz�s';
		$this->topic_vote_count_plur = '%d szavazat';
		$this->topic_vote_count_sing = '%d szavazat';
		$this->topic_votes = 'Szavazatok';
	}

	function universal()
	{
		$this->based_on = 'based on';
		$this->board_by = 'Felad�';
		$this->charset = 'iso-8859-1';
		$this->continue = 'Continue'; //Translate
		$this->delete = 'Delete'; //Translate
		$this->direction = 'ltr'; //Translate
		$this->edit = 'Edit HTML Templates';
		$this->no = 'No'; //Translate
		$this->powered = 'Powered by'; //Translate
		$this->seconds = 'Seconds'; //Translate
		$this->sep_decimals = ',';
		$this->sep_thousands = '.';
		$this->submit = 'Mehet';
		$this->today = 'Ma';
		$this->yes = 'Yes'; //Translate
		$this->yesterday = 'Tegnap';
	}
}
?>