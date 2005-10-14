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
 * Swedish language module
 *
 * @author Markus H�glund <markus@pidelipom.com>
 * @author Oskar Bergstr�m <oskar@rapidfish.se
 * @since 1.0.1
 **/
class sv
{
	function active()
	{
		$this->active_last_action = 'Senaste Kommando';
		$this->active_modules_active = 'Visar Aktiva Anv�ndare';
		$this->active_modules_board = 'Visar Index';
		$this->active_modules_cp = 'Anv�nder Kontrollpanelen';
		$this->active_modules_forum = 'Visar forum: %s';
		$this->active_modules_help = 'Anv�nder Hj�lp';
		$this->active_modules_login = 'Loggar In/Ut';
		$this->active_modules_members = 'Visar Medlemslista';
		$this->active_modules_mod = 'Administrerar';
		$this->active_modules_pm = 'Anv�nder Snabbmeddelande';
		$this->active_modules_post = 'Skapar Inl�gg';
		$this->active_modules_printer = 'Skriver inl�gg: %s';
		$this->active_modules_profile = 'Visa profil: %s';
		$this->active_modules_recent = 'Viewing recent posts'; //Translate
		$this->active_modules_search = 'S�ker';
		$this->active_modules_topic = 'Visa �mne: %s';
		$this->active_time = 'Tid';
		$this->active_user = 'Anv�ndare';
		$this->active_users = 'Aktiva Anv�ndare';
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
		$this->board_active_users = 'Aktiva Anv�ndare';
		$this->board_birthdays = 'Dagens F�delsedagar:';
		$this->board_bottom_page = 'Go to the bottom of the page'; //Translate
		$this->board_can_post = 'Du kan svara i detta forum.';
		$this->board_can_topics = 'Du kan l�sa men inte skapa �mnen i detta forum.';
		$this->board_cant_post = 'Du kan inte svara i detta forum.';
		$this->board_cant_topics = 'Du kan inte l�sa eller skapa �mnen i detta forum.';
		$this->board_forum = 'Forum'; //Translate
		$this->board_guests = 'g�ster';
		$this->board_last_post = 'Senaste Inl�gg';
		$this->board_mark = 'Markerar Inl�gg Som L�st';
		$this->board_mark1 = 'Alla inl�gg och forum har markerats som l�sta.';
		$this->board_members = 'medlemmar';
		$this->board_message = '%s Meddelande';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Inga medlemmar fyller �r idag.';
		$this->board_nobody = 'Det �r f�r tillf�llet inga medlemmar online.';
		$this->board_nopost = 'Inga Inl�gg';
		$this->board_noview = 'Du har inte till�telse att l�sa forumet.';
		$this->board_regfirst = 'Du har inte till�telse att l�sa forumet. Om du registrerar dig, s� kanske du kan.';
		$this->board_replies = 'Svar';
		$this->board_stats = 'Statistik';
		$this->board_stats_string = 'Hittills har %s personer registrerat sig. V�ran nyaste medlem �r: %s.<br /> Det finns %s �mnen och %s svar vilket totalt �r %s inl�gg.';
		$this->board_top_page = 'Go to the top of the page'; //Translate
		$this->board_topics = '�mnen';
		$this->board_topics_new = 'Det finns nya inl�gg i detta forum.';
		$this->board_topics_old = 'Det finns inga nya inl�gg i detta forum.';
		$this->board_users = 'anv�ndare';
		$this->board_write_topics = 'Du kan l�sa och skapa �mnen i detta forum.';
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
		$this->cp_aim = 'AIM namn';
		$this->cp_already_member = 'E-post adressen du skrev in �r upptagen.';
		$this->cp_apr = 'April'; //Translate
		$this->cp_aug = 'Augusti';
		$this->cp_avatar_current = 'Din nuvarande avatar';
		$this->cp_avatar_error = 'Avatar Fel';
		$this->cp_avatar_must_select = 'Du m�ste v�lja en avatar.';
		$this->cp_avatar_none = 'Anv�nd inte en avatar';
		$this->cp_avatar_pixels = 'pixlar';
		$this->cp_avatar_select = 'V�lj en avatar';
		$this->cp_avatar_size_height = 'Din avatars h�jd m�ste vara mellan 1 och';
		$this->cp_avatar_size_width = 'Din avatars bredd m�ste vara mellan 1 och';
		$this->cp_avatar_upload = 'Ladda upp en avatar fr�n din h�rddisk';
		$this->cp_avatar_upload_failed = 'Uppladdningen av avataren misslyckades. Filen du har valt kanske inte existerar.';
		$this->cp_avatar_upload_not_image = 'Du kan endast ladda upp bilder f�r att anv�nda som avatar.';
		$this->cp_avatar_upload_too_large = 'Avataren du valt att ladda up �r f�r stor. Max filstorlek �r %d kilobyte.';
		$this->cp_avatar_url = 'Skriv in en webadress till din avatar';
		$this->cp_avatar_use = 'Anv�nd din uppladdade avatar';
		$this->cp_bday = 'F�delsedag';
		$this->cp_been_updated = 'Din profil har uppdaterats.';
		$this->cp_been_updated1 = 'Din avatar har uppdaterats.';
		$this->cp_been_updated_prefs = 'Dina inst�llningar har uppdaterats.';
		$this->cp_changing_pass = '�ndrar L�senord';
		$this->cp_contact_pm = 'Till�t att andra kontaktar dig via messenger?';
		$this->cp_cp = 'Kontrollpanelen';
		$this->cp_current_avatar = 'Nuvarande Avatar';
		$this->cp_current_time = 'Klockan �r %s.';
		$this->cp_custom_title = 'Custom Member Title'; //Translate
		$this->cp_custom_title2 = 'This is a privledge reserved for board administrators'; //Translate
		$this->cp_dec = 'December'; //Translate
		$this->cp_editing_avatar = 'Redigerar Avatar';
		$this->cp_editing_profile = 'Redigerar Profil';
		$this->cp_email = 'E-post';
		$this->cp_email_form = 'Till�t andra att kontakta dig via epost-formul�r?';
		$this->cp_email_invaid = 'E-post adressen du skrivit in �r ej giltig.';
		$this->cp_err_avatar = 'Misslyckades Med Att Uppdatera Avatar';
		$this->cp_err_updating = 'Misslyckades Med Att Uppdatera Profil';
		$this->cp_feb = 'Februari';
		$this->cp_file_type = 'Avataren �r ej giltig. F�rs�kra dig om att webadressen �r korrekt skriven och att filtypen �r .gif, .jpg, eller .png';
		$this->cp_format = 'Namn';
		$this->cp_gtalk = 'GTalk Account'; //Translate
		$this->cp_header = 'Kontrollpanel';
		$this->cp_height = 'H�jd';
		$this->cp_icq = 'ICQ Nummer';
		$this->cp_interest = 'Intressen';
		$this->cp_jan = 'Januari';
		$this->cp_july = 'Juli';
		$this->cp_june = 'Juni';
		$this->cp_label_edit_avatar = '�ndra Avatar';
		$this->cp_label_edit_pass = '�ndra L�senord';
		$this->cp_label_edit_prefs = '�ndra Inst�llningar';
		$this->cp_label_edit_profile = '�ndra Profil';
		$this->cp_label_edit_subs = '�ndra Prenumerationer';
		$this->cp_language = 'Spr�k';
		$this->cp_less_charac = 'Ditt namn m�ste ha mindre �n 32 bokst�ver.';
		$this->cp_location = 'Hemort';
		$this->cp_login_first = 'Du m�ste vara inloggad f�r att ha tillg�ng till kontrollpanelen.';
		$this->cp_mar = 'Mars';
		$this->cp_may = 'Maj';
		$this->cp_msn = 'MSN namn';
		$this->cp_must_orig = 'Ditt namn m�ste vara identiskt med originalet. Du f�r endast �ndra versaler och avst�nd.';
		$this->cp_new_notmatch = 'De nya l�senorden du skrev in �r olika.';
		$this->cp_new_pass = 'Nytt L�senord';
		$this->cp_no_flash = 'Flash avatarer �r inte till�tna.';
		$this->cp_not_exist = 'Datumet du skrivit in (%s) finns inte!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Oktober';
		$this->cp_old_notmatch = 'Ditt gamla l�senord �r ej korrekt.';
		$this->cp_old_pass = 'Gammalt L�senord';
		$this->cp_pass_notvaid = 'Ditt l�senord �r ogiltigt. Endast bokst�ver, nummer, streck, understreck och mellanslag �r till�tna.';
		$this->cp_preferences = '�ndrar Inst�llningar';
		$this->cp_privacy = 'Privata Inst�llningar';
		$this->cp_repeat_pass = 'Repetera Nytt L�senord';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Visa dina aktiviteter n�r du anv�nder forumet?';
		$this->cp_show_email = 'Visa E-post adress i din profil?';
		$this->cp_signature = 'Signatur';
		$this->cp_size_max = 'Avataren �r f�r stor. Max till�tna storlek �r %s x %s pixlar.';
		$this->cp_skin = 'Skin';
		$this->cp_sub_change = '�ndra prenumerationer';
		$this->cp_sub_delete = 'Radera';
		$this->cp_sub_expire = 'Utg�ngsdatum';
		$this->cp_sub_name = 'Prenumerations Namn';
		$this->cp_sub_no_params = 'Inga parametrar givna.';
		$this->cp_sub_success = 'Du prenumererar nu p� denna %s.';
		$this->cp_sub_type = 'Prenumerationstyp';
		$this->cp_sub_updated = 'Vald prenumeration har blivit raderad.';
		$this->cp_topic_option = 'Forum Inst�llningar';
		$this->cp_updated = 'Profil Uppdaterad';
		$this->cp_updated1 = 'Avatar Uppdaterad';
		$this->cp_updated_prefs = 'Inst�llningar Uppdaterade';
		$this->cp_user_exists = 'En anv�ndare med den namn formateringen existerar redan.';
		$this->cp_valided = 'Ditt l�senord �r �ndrat.';
		$this->cp_view_avatar = 'Visa Avatarer?';
		$this->cp_view_emoticon = 'Visa Smileys?';
		$this->cp_view_signature = 'Visa Signaturer?';
		$this->cp_welcome = 'V�lkommen till kontrollpanelen. H�rifr�n kan du justera inst�llningarna f�r ditt konto. V�lj fr�n alternativen ovan.';
		$this->cp_width = 'Bredd';
		$this->cp_www = 'Hemsida';
		$this->cp_yahoo = 'Yahoo namn';
		$this->cp_zone = 'Tidszon';
	}

	function email()
	{
		$this->email_blocked = 'Den medlemmen accepterar ej epost genom v�rat formul�r.';
		$this->email_email = 'E-post';
		$this->email_msgtext = 'Meddelande:';
		$this->email_no_fields = 'G� tillbaka och f�rs�kra dig om att samtliga f�lt �r ifyllda.';
		$this->email_no_member = 'Det finns ingen medlem med det namnet.';
		$this->email_no_perm = 'Du har inte r�ttigheter att s�nda epost fr�n detta forum';
		$this->email_sent = 'E-post meddelandet har skickats.';
		$this->email_subject = '�mne:';
		$this->email_to = 'Till:';
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
		$this->forum_by = 'Av';
		$this->forum_can_post = 'Du kan svara i detta forum.';
		$this->forum_can_topics = 'Du kan l�sa �mnen i detta forum.';
		$this->forum_cant_post = 'Du kan inte svara i detta forum.';
		$this->forum_cant_topics = 'Du kan inte l�sa �mnen i detta forum.';
		$this->forum_dot = 'Prick';
		$this->forum_dot_detail = 'Visar att du skrivit inl�gg i �mnet';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'G�st';
		$this->forum_hot = 'Het';
		$this->forum_icon = 'Meddelande Ikon';
		$this->forum_jump = 'Hoppa till nyaste inl�gg i �mnet';
		$this->forum_last = 'Senaste Inl�gg';
		$this->forum_locked = 'L�st';
		$this->forum_moved = 'Flyttad';
		$this->forum_msg = '%s Meddelande';
		$this->forum_new = 'Ny';
		$this->forum_new_poll = 'Skapa Ny R�stning';
		$this->forum_new_topic = 'Skapa Nytt �mne';
		$this->forum_no_topics = 'Det finns inga �mnen att visa i detta forum.';
		$this->forum_noexist = 'Forumet existerar inte.';
		$this->forum_nopost = 'Inga inl�gg';
		$this->forum_not = 'Inte';
		$this->forum_noview = 'Du har inte till�telse att l�sa forum.';
		$this->forum_pages = 'Sidor';
		$this->forum_pinned = 'Klistrad';
		$this->forum_pinned_topic = 'Klistrat �mne';
		$this->forum_poll = 'R�stning';
		$this->forum_regfirst = 'Du har inte till�telse att l�sa forum utan att f�rst registrera dig.';
		$this->forum_replies = 'Svar';
		$this->forum_starter = 'Skapare';
		$this->forum_sub = 'Under-Forum';
		$this->forum_sub_last_post = 'Senaste Inl�gg';
		$this->forum_sub_replies = 'Svar';
		$this->forum_sub_topics = '�mnen';
		$this->forum_subscribe = 'E-posta mig n�r nya inl�gg skrivits i detta forum.';
		$this->forum_topic = '�mne';
		$this->forum_topics_new = 'Det finns nya inl�gg i detta forum.';
		$this->forum_topics_old = 'Det finns inga nya inl�gg i detta forum.';
		$this->forum_views = 'Visningar';
		$this->forum_write_topics = 'Du kan skapa nya �mnen i detta forum.';
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
		$this->help_available_files = 'Hj�lp';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'Det finns inga hj�lpfiler i databasen';
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
		$this->login_cant_logged = 'Du kunde inte loggas in. F�rs�kra dig om att ditt anv�ndarnamn och l�senord �r r�tt.<br /><br />De �r case sensitive, s� \'UsErNaMe\' �r inte samma sak som \'Username\'. Se �ven till s� att cookies �r aktiverade i din browser.';
		$this->login_cookies = 'Cookies m�ste vara till�tna f�r att kunna logga in.';
		$this->login_forgot_pass = 'Jag har gl�mt mitt l�senord!';
		$this->login_header = 'Loggar In';
		$this->login_logged = 'Du �r nu inloggad.';
		$this->login_now_out = 'Du �r nu utloggad.';
		$this->login_out = 'Loggar Ut';
		$this->login_pass = 'L�senord';
		$this->login_pass_no_id = 'Det finns ingen medlem med detta namn.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Nollst�ll L�senordet';
		$this->login_pass_sent = 'Ditt l�senord har nollst�llts. Det nya l�senordet har skickats till din epostadress som uppgavs i ditt anv�ndarkonto.';
		$this->login_sure = '�r du s�ker p� att du vill logga ut fr�n \'%s\'?';
		$this->login_user = 'Anv�ndarnamn';
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
		$this->main_activate = 'Ditt anv�ndarkonto har �nnu inte aktiverats';
		$this->main_activate_resend = 'Skicka aktiveringsuppgifter igen via epost.';
		$this->main_admincp = 'Admin inst�llningar';
		$this->main_banned = 'Du har blivit bannlyst fr�n att l�sa n�gonting p� detta forum.';
		$this->main_code = 'Kod';
		$this->main_cp = 'kontrollpanelen';
		$this->main_full = 'Fullst�ndig';
		$this->main_help = 'hj�lp';
		$this->main_load = 'belastning';
		$this->main_login = 'logga in';
		$this->main_logout = 'logga ut';
		$this->main_mark = 'mark all'; //Translate
		$this->main_mark1 = 'Mark all topics as read'; //Translate
		$this->main_max_load = 'Tyv�rr �r %s f�r tillf�llet otillg�nglig p.g.a. h�g belastning.';
		$this->main_members = 'medlemmar';
		$this->main_messenger = 'Snabbmeddelanden';
		$this->main_new = 'ny';
		$this->main_next = 'n�sta';
		$this->main_prev = 'f�rra';
		$this->main_queries = 'f�rfr�gningar';
		$this->main_quote = 'Citera';
		$this->main_recent = 'recent posts'; //Translate
		$this->main_recent1 = 'View recent topics since your last visit'; //Translate
		$this->main_register = 'registrera';
		$this->main_reminder = 'P�minnelse: Detta forum �r st�ngt och kan endast l�sas av administrat�rer.';
		$this->main_reminder_closed = 'Forumet �r st�ngt! det kan endast ses av administrat�rer.';
		$this->main_said = 'sade';
		$this->main_search = 's�k';
		$this->main_welcome = 'V�lkommen';
		$this->main_welcome_guest = 'V�lkommen!';
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
		$this->members_all = 'alla';
		$this->members_email = 'E-posta';
		$this->members_email_member = 'Skicka E-post till denna medlem';
		$this->members_group = 'Grupp';
		$this->members_joined = 'Registreringsdatum';
		$this->members_list = 'Medlemslista';
		$this->members_member = 'Medlem';
		$this->members_pm = 'PM'; //Translate
		$this->members_posts = 'Inl�gg';
		$this->members_send_pm = 'Skicka ett personligt meddelande till denna anv�ndare';
		$this->members_title = 'Titel';
		$this->members_vist_www = 'Bes�k denna medlems hemsida';
		$this->members_www = 'Hemsida';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = '�r du s�ker p� att du vill radera detta inl�gg?';
		$this->mod_confirm_topic_delete = '�r du s�ker p� att du vill radera detta �mne?';
		$this->mod_error_first_post = 'Du kan inte radera f�rsta inl�gget i ett �mne.';
		$this->mod_error_move_category = 'Du kan inte flytta ett �mne till en kategori.';
		$this->mod_error_move_create = 'Du har inte till�telse att flytta �men till det forumet';
		$this->mod_error_move_forum = 'Du kan inte flytta ett �mne till ett forum som inte existerar.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Du kan inte flytta ett �mne till det forum det redan befinner sig i.';
		$this->mod_label_controls = 'Moderator Kontroller';
		$this->mod_label_description = 'Beskrivning';
		$this->mod_label_emoticon = 'Konvertera smileys till bilder?';
		$this->mod_label_global = '�mne i hela forumet';
		$this->mod_label_mbcode = 'Formatera MbKod?';
		$this->mod_label_move_to = 'Flytta till';
		$this->mod_label_options = 'Alternativ';
		$this->mod_label_post_delete = 'Radera Inl�gg';
		$this->mod_label_post_edit = 'Redigera Inl�gg';
		$this->mod_label_title = 'Titel';
		$this->mod_label_title_original = 'Original Titel';
		$this->mod_label_title_split = 'Dela Upp Titel';
		$this->mod_label_topic_delete = 'Radera �mne';
		$this->mod_label_topic_edit = 'Redigera �mne';
		$this->mod_label_topic_lock = 'L�s �mne';
		$this->mod_label_topic_move = 'Flytta �mne';
		$this->mod_label_topic_move_complete = 'Flytta hela �mnet till ett nytt forum';
		$this->mod_label_topic_move_link = 'Flytta hela �mnet till ett nytt forum och l�mna en l�nk dit fr�n det gamla forumet.';
		$this->mod_label_topic_pin = 'Klistra �mne';
		$this->mod_label_topic_split = 'Dela Upp �mne';
		$this->mod_missing_post = 'Inl�gged existerar inte.';
		$this->mod_missing_topic = '�mnet existerar inte.';
		$this->mod_no_action = 'Du m�ste v�lja en �ndring.';
		$this->mod_no_post = 'Du m�ste v�lja ett inl�gg.';
		$this->mod_no_topic = 'Du m�ste v�lja ett �mne.';
		$this->mod_perm_post_delete = 'Du har inte till�telse att radera detta inl�gg.';
		$this->mod_perm_post_edit = 'Du har inte till�telse att redigera detta inl�gg.';
		$this->mod_perm_topic_delete = 'Du har inte till�telse att radera detta �mne.';
		$this->mod_perm_topic_edit = 'Du har inte till�telse att redigera detta �mne.';
		$this->mod_perm_topic_lock = 'Du har inte till�telse att l�sa detta �mne.';
		$this->mod_perm_topic_move = 'Du har inte till�telse att flytta detta �mne.';
		$this->mod_perm_topic_pin = 'Du har inte till�telse att klistra detta �mne.';
		$this->mod_perm_topic_split = 'Du har inte till�telse att dela upp detta �mne.';
		$this->mod_perm_topic_unlock = 'Du har inte till�telse att l�sa upp detta �mne.';
		$this->mod_perm_topic_unpin = 'Du har inte till�telse att klistra av detta �mne.';
		$this->mod_success_post_delete = 'Inl�gget raderades.';
		$this->mod_success_post_edit = 'Inl�gget redigerades.';
		$this->mod_success_split = '�mnet har nu blivit uppdelat.';
		$this->mod_success_topic_delete = '�mnet raderades.';
		$this->mod_success_topic_edit = '�mnet redigerades.';
		$this->mod_success_topic_move = '�mnet flyttades till ett nytt forum.';
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
		$this->pm_cant_del = 'Du har inte till�telse att radera detta meddelande.';
		$this->pm_delallmsg = 'Radera Alla Meddelanden';
		$this->pm_delete = 'Radera';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = 'Meddelande Raderat.';
		$this->pm_deleted_all = 'Meddelanden Raderade.';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Meddelandet kunde inte skickat. F�rs�kra dig om att alla f�lt �r ifyllda.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Inkorg';
		$this->pm_folder_new = '%s nya';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Fr�n';
		$this->pm_group = 'Grupp';
		$this->pm_guest = 'Som g�st kan du inte anv�nda snabbmeddelande. Logga in eller registrera dig.';
		$this->pm_joined = 'Gick Med';
		$this->pm_messenger = 'Snabbmeddelande';
		$this->pm_msgtext = 'Meddelande Text';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Du m�ste v�lja en katalog.';
		$this->pm_no_member = 'Inget meddelande kunde hittas med ett s�dant ID.';
		$this->pm_no_number = 'Inget meddelande kunde hittas med det numret.';
		$this->pm_no_title = 'Inget �mne';
		$this->pm_nomsg = 'Det finns inga meddelanden i denna katalog.';
		$this->pm_noview = 'Du har inte till�telse att l�sa detta meddelande.';
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_personal = 'Snabbmeddelande';
		$this->pm_personal_msging = 'Personligt Meddelande';
		$this->pm_pm = 'PM'; //Translate
		$this->pm_posts = 'Inl�gg';
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Svara';
		$this->pm_send = 'Skicka';
		$this->pm_sendamsg = 'Skicka Ett Meddelande';
		$this->pm_sendingpm = 'Skicka Ett PM';
		$this->pm_sendon = 'Skickat den';
		$this->pm_success = 'Ditt meddelande skickades.';
		$this->pm_sure_del = '�r du s�ker p� att du vill radera detta meddelande?';
		$this->pm_sure_delall = '�r du s�ker p� att du vill radera alla meddelanden i denna katalog?';
		$this->pm_title = 'Titel';
		$this->pm_to = 'Till';
	}

	function post()
	{
		$this->post_attach = 'Bifogade Filer';
		$this->post_attach_add = 'Bifoga Filer';
		$this->post_attach_disrupt = 'Att l�gga till eller ta bort bifogade filer kommer ej att p�verka ditt inl�gg.';
		$this->post_attach_failed = 'Upladdningen av den bifogade filen misslyckades. Filen du specificerat kanske inte existerar.';
		$this->post_attach_not_allowed = 'Du kan inte bifoga filer av den typen.';
		$this->post_attach_remove = 'Ta Bort Bifogad Fil';
		$this->post_attach_too_large = 'Den bifogade file du valt att ladda upp �r f�r stor. Max storlek �r %d kilobyte.';
		$this->post_cant_create = 'Som g�st har du inte till�telse att skapa �mnen. Om du registrerar dig kan du ha m�jlighet att g�ra detta.';
		$this->post_cant_create1 = 'Du har inte till�telse att skapa �mnen.';
		$this->post_cant_enter = 'Din r�st registrerades inte. �ndera har du redan r�stat eller s� har du inte till�telse att r�sta.';
		$this->post_cant_poll = 'Som g�st har du inte till�telse att skapa r�stningar. Om du registrerar dig kan du ha m�jlighet att g�ra detta.';
		$this->post_cant_poll1 = 'Du har inte till�telse att skapa r�stningar.';
		$this->post_cant_reply = 'Du har inte till�telse att svara p� �mnen i detta forum.';
		$this->post_cant_reply1 = 'Som g�st har du inte till�telse att svara p� �mnen. Om du registrerar dig kan du ha m�jlighet att g�ra detta.';
		$this->post_cant_reply2 = 'Du har inte till�telse att svara p� �mnen.';
		$this->post_closed = 'Detta �mne �r st�ngt.';
		$this->post_create_poll = 'Skapa R�stning';
		$this->post_create_topic = 'Skapa �mne';
		$this->post_creating = 'Skapar �mne';
		$this->post_creating_poll = 'Skapar R�stning';
		$this->post_flood = 'Du har skrivit ett inl�gg de sensate %s sekunderna, d�rf�r m�ste du v�nta.<br /><br />Prova igen om ytterliggare n�gra sekunder.';
		$this->post_guest = 'G�st';
		$this->post_icon = 'Inl�ggsikon';
		$this->post_last_five = 'Senaste Fem Inl�ggen I Bakv�nd Ordning';
		$this->post_length = 'Kontrollera L�ngd';
		$this->post_mbcode_address = 'Skriv in en adress';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Bl�';
		$this->post_mbcode_bold = 'Fet';
		$this->post_mbcode_bold1 = 'F';
		$this->post_mbcode_chocolate = 'Chokolad';
		$this->post_mbcode_code = 'Kod';
		$this->post_mbcode_color = 'F�rg';
		$this->post_mbcode_coral = 'Korall';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Blodr�d';
		$this->post_mbcode_darkblue = 'M�rkbl�';
		$this->post_mbcode_darkred = 'M�rkr�d';
		$this->post_mbcode_deepink = 'Rosa';
		$this->post_mbcode_detail = 'Skriv in en beskrivning';
		$this->post_mbcode_email = 'E-post';
		$this->post_mbcode_firered = 'Eldr�d';
		$this->post_mbcode_font = 'Font'; //Translate
		$this->post_mbcode_green = 'Gr�n';
		$this->post_mbcode_huge = 'St�rst';
		$this->post_mbcode_image = 'Bild';
		$this->post_mbcode_image1 = 'Bild';
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Kursiv';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Stor';
		$this->post_mbcode_length = 'Ditt inl�gg �r "+length+" tecken.';
		$this->post_mbcode_limegreen = 'Lime Gr�n';
		$this->post_mbcode_medium = 'Medium'; //Translate
		$this->post_mbcode_orange = 'Orange'; //Translate
		$this->post_mbcode_orangered = 'Orange R�d';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Purpur';
		$this->post_mbcode_quote = 'Citat';
		$this->post_mbcode_red = 'R�d';
		$this->post_mbcode_royalblue = 'Ljusbl�';
		$this->post_mbcode_sandybrown = 'Sand';
		$this->post_mbcode_seagreen = 'Sj�gr�n';
		$this->post_mbcode_sienna = 'Brun';
		$this->post_mbcode_silver = 'Silver'; //Translate
		$this->post_mbcode_size = 'Storlek';
		$this->post_mbcode_skyblue = 'Himmelsbl�';
		$this->post_mbcode_small = 'Liten';
		$this->post_mbcode_strike = 'Genomstruken';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Turkos';
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Minst';
		$this->post_mbcode_tomato = 'Tomat';
		$this->post_mbcode_underline = 'Understruken';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Beige';
		$this->post_mbcode_yellow = 'Yellow'; //Translate
		$this->post_msg = 'Meddelande';
		$this->post_must_msg = 'Du m�ste skriva n�got n�r du g�r ett inl�gg.';
		$this->post_must_options = 'Du m�ste inkludera alterntiv n�r du skapar en ny r�stning.';
		$this->post_must_title = 'Du m�ste skriva en titel n�r du skapar ett nytt �mne.';
		$this->post_new_poll = 'Ny R�stning';
		$this->post_new_topic = 'Nytt �mne';
		$this->post_no_forum = 'Forumet kunde inte hittas.';
		$this->post_no_topic = 'Inget �mne valt.';
		$this->post_no_vote = 'Du m�ste v�lja ett alternativ att r�sta p�.';
		$this->post_option_emoticons = 'Konvertera Smileys till bilder?';
		$this->post_option_global = 'Visa �mnet i hela forumet?';
		$this->post_option_mbcode = 'Formatera MbKod?';
		$this->post_optional = 'valfri';
		$this->post_options = 'Alternativ';
		$this->post_poll_options = 'R�stnings Alternativ';
		$this->post_poll_row = 'En p� varje rad';
		$this->post_posted = 'Skrivet';
		$this->post_posting = 'Skriver Inl�gg';
		$this->post_preview = 'F�rhandsgranska';
		$this->post_reply = 'Svara';
		$this->post_reply_topic = 'Svara P� �mne';
		$this->post_replying = 'Svarar P� �mne';
		$this->post_replying1 = 'Svarar';
		$this->post_smiles = 'Klickbara Smilies';
		$this->post_too_many_options = 'Du m�ste ha mellan 2 och %d alternativ i en r�stning.';
		$this->post_topic_detail = '�mnesbeskrivning';
		$this->post_topic_title = '�mnestitel';
		$this->post_view_topic = 'Visa Alla Inl�gg';
		$this->post_voting = 'R�star';
	}

	function printer()
	{
		$this->printer_back = 'Tillbaka';
		$this->printer_not_found = '�mnet Kunde Ej Hittas. Det kan ha blivit raderat, flyttat eller s� har det aldrig existerat.';
		$this->printer_not_found_title = '�mne Kunde Ej Hittas';
		$this->printer_perm_topics = 'Du har inte till�telse att visa �mnen.';
		$this->printer_perm_topics_guest = 'Du har inte till�telse att visa �mnen f�rr�n du registrerat dig.';
		$this->printer_posted_on = 'Skrivet';
		$this->printer_send = 'Skriv Ut';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM Namn';
		$this->profile_av_sign = 'Avatar och Signatur';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'F�delsedag';
		$this->profile_contact = 'Kontakta';
		$this->profile_email_address = 'E-post Adress';
		$this->profile_fav = 'Favorit Forum';
		$this->profile_fav_forum = '%s (%d%% av dessa medlemsinl�gg)';
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = 'ICQ Nummer';
		$this->profile_info = 'Information'; //Translate
		$this->profile_interest = 'Intressen';
		$this->profile_joined = 'Sammanfodade';
		$this->profile_last_post = 'Senaste Inl�gg';
		$this->profile_list = 'Medlemslista';
		$this->profile_location = 'Hemort';
		$this->profile_member = 'Medlems Grupp';
		$this->profile_member_title = 'Medlems Titel';
		$this->profile_msn = 'Mitt riktiga namn';
		$this->profile_must_user = 'Du m�ste skriva in en anv�ndare f�r att se en profil.';
		$this->profile_no_member = 'Det finns ingen medlem med det anv�ndarnumret. Kontot kan ha blivit raderat.';
		$this->profile_none = '[ Ingen ]';
		$this->profile_not_post = 'har inte gjort n�got inl�gg �nnu.';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Privata Meddelanden';
		$this->profile_postcount = '%s totalt, %s per dag';
		$this->profile_posts = 'Inl�gg';
		$this->profile_private = '[ Privat ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Signatur';
		$this->profile_unkown = '[ Ok�nd ]';
		$this->profile_view_profile = 'Visar Profil';
		$this->profile_www = 'Hemsida';
		$this->profile_yahoo = 'Yahoo namn';
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
		$this->recent_by = 'Av';
		$this->recent_can_post = 'Du kan svara i detta forum.';
		$this->recent_can_topics = 'Du kan l�sa �mnen i detta forum.';
		$this->recent_cant_post = 'Du kan inte svara i detta forum.';
		$this->recent_cant_topics = 'Du kan inte l�sa �mnen i detta forum.';
		$this->recent_dot = 'Prick';
		$this->recent_dot_detail = 'Visar att du skrivit inl�gg i �mnet';
		$this->recent_forum = 'Forum'; //Translate
		$this->recent_guest = 'G�st';
		$this->recent_hot = 'Het';
		$this->recent_icon = 'Meddelande Ikon';
		$this->recent_jump = 'Hoppa till nyaste inl�gg i �mnet';
		$this->recent_last = 'Senaste Inl�gg';
		$this->recent_locked = 'L�st';
		$this->recent_moved = 'Flyttad';
		$this->recent_msg = '%s Meddelande';
		$this->recent_new = 'Ny';
		$this->recent_new_poll = 'Skapa Ny R�stning';
		$this->recent_new_topic = 'Skapa Nytt �mne';
		$this->recent_no_topics = 'Det finns inga �mnen att visa i detta forum.';
		$this->recent_noexist = 'Forumet existerar inte.';
		$this->recent_nopost = 'Inga inl�gg';
		$this->recent_not = 'Inte';
		$this->recent_noview = 'Du har inte till�telse att l�sa forum.';
		$this->recent_pages = 'Sidor';
		$this->recent_pinned = 'Klistrad';
		$this->recent_pinned_topic = 'Klistrat �mne';
		$this->recent_poll = 'R�stning';
		$this->recent_regfirst = 'Du har inte till�telse att l�sa forum utan att f�rst registrera dig.';
		$this->recent_replies = 'Svar';
		$this->recent_starter = 'Skapare';
		$this->recent_sub = 'Under-Forum';
		$this->recent_sub_last_post = 'Senaste Inl�gg';
		$this->recent_sub_replies = 'Svar';
		$this->recent_sub_topics = '�mnen';
		$this->recent_subscribe = 'E-posta mig n�r nya inl�gg skrivits i detta forum.';
		$this->recent_topic = '�mne';
		$this->recent_topics_new = 'Det finns nya inl�gg i detta forum.';
		$this->recent_topics_old = 'Det finns inga nya inl�gg i detta forum.';
		$this->recent_views = 'Visningar';
		$this->recent_write_topics = 'Du kan skapa nya �mnen i detta forum.';
	}

	function register()
	{
		$this->register_activated = 'Ditt konto �r aktiverat!';
		$this->register_activating = 'Konto Aktivering';
		$this->register_activation_error = 'Det uppstod ett problem n�r ditt konto skulle aktiveras. Kolla s� att din browser har den kompletta aktiveringsadressen fr�n mejlet. Om problemet kvarst�r, kontakta forumets administrator f�r att f� ett nytt aktiveringsmejl.';
		$this->register_confirm_passwd = 'Bekr�fta L�senordet';
		$this->register_done = 'Du �r registrerad! Du kan nu logga in.';
		$this->register_email = 'E-post Adress';
		$this->register_email_invalid = 'E-post adressen du skrivit in �r ogiltig.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'E-post adressen du skrivit in anv�nds redan av en medlem.';
		$this->register_fields = 'Alla f�lt �r inte ifyllda.';
		$this->register_image = 'Var god skriv av den text som visas i bilden';
		$this->register_image_invalid = 'F�r att bevisa att det �r en m�nniska som registrerar och inte ett datorprogram, skriv av texten som visas i bilden.';
		$this->register_must_activate = 'Du �r nu registrerad. Ett epostmeddelande har s�nts till %s med information om hur du aktiverar ditt anv�ndarkonto. Dina r�ttigheter i forumet �r begr�nsade tills du utf�rt aktiveringen.';
		$this->register_name_invalid = 'Namnet du skrev in �r f�r l�ngt.';
		$this->register_name_taken = 'Det medlemsnamnet �r redan upptaget.';
		$this->register_new_user = '�nskat Anv�ndarnamn';
		$this->register_pass_invalid = 'L�senordet du skrev in �r ogiltigt. F�rs�kra dig om att enbart giltiga tecken som bokst�ver, nummer, streck, understreck och mellanslag anv�nds och att l�senordet �r minst 5 bokst�ver l�ngt.';
		$this->register_pass_match = 'L�senorden du skrev in �r olika.';
		$this->register_passwd = 'L�senord';
		$this->register_reg = 'Registrera';
		$this->register_reging = 'Registrerar';
	}

	function rssfeed()
	{
		$this->rssfeed_posted_by = 'Posted by'; //Translate
	}

	function search()
	{
		$this->search_advanced = 'Avancerade Alternativ';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Enkel S�kning';
		$this->search_characters = 'bokst�verna av ett inl�gg';
		$this->search_day = 'dag';
		$this->search_days = 'dagar';
		$this->search_exact_name = 'exakt namn';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'S�k Efter';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Grupp';
		$this->search_guest = 'G�st';
		$this->search_in = 'S�k inom';
		$this->search_in_posts = 'S�k endast i inl�gg';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Gick Med';
		$this->search_level = 'Medlemsstatus';
		$this->search_match = 'S�k med matchning';
		$this->search_matches = 'Tr�ffar';
		$this->search_month = 'M�nad';
		$this->search_months = 'm�nader';
		$this->search_mysqldoc = 'MySQL Dokumentation';
		$this->search_newer = 'nyare';
		$this->search_no_results = 'Din s�kning gav inget resultat.';
		$this->search_no_words = 'Du m�ste specificera n�gra s�ktermer.<br /><br />Varje term m�ste vara minst 3 tecken inklusive bokst�ver, nummer, apostrofer och understreck.';
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = '�ldre';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Visa endast de f�rsta';
		$this->search_partial_name = 'delar av namnet';
		$this->search_post_icon = 'Inl�ggs Ikon';
		$this->search_posted_on = 'Skrivet';
		$this->search_posts = 'Inl�gg';
		$this->search_posts_by = 'Endast inl�gg av';
		$this->search_regex = 'S�k med vanligt uttryck';
		$this->search_regex_failed = 'Ditt uttryck misslyckades. Var god se MSQL-dokumentationen: hj�lp f�r vanliga uttryck ';
		$this->search_relevance = 'Relevans: %d%%';
		$this->search_replies = 'Inl�gg';
		$this->search_result = 'S�knings Resultat';
		$this->search_search = 'S�k';
		$this->search_select_all = 'V�lj Samtliga';
		$this->search_show_posts = 'Visa matchande inl�gg';
		$this->search_sound = 'S�k med ljud';
		$this->search_starter = 'Skapare';
		$this->search_than = '�n';
		$this->search_topic = '�mne';
		$this->search_unreg = 'Ej registrerad';
		$this->search_week = 'vecka';
		$this->search_weeks = 'veckor';
		$this->search_year = '�r';
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
		$this->topic_attached = 'Bifogad fil:';
		$this->topic_attached_downloads = 'nedladdningar';
		$this->topic_attached_perm = 'Du har inte till�telse att ladda hem den h�r filen.';
		$this->topic_attached_title = 'Bifogad Fil';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = 'Skapa Ny R�stning';
		$this->topic_create_topic = 'Skapa Nytt �mne';
		$this->topic_delete = 'Radera';
		$this->topic_delete_post = 'Radera detta inl�gg';
		$this->topic_edit = 'Redigera';
		$this->topic_edit_post = 'Redigera detta inl�gg';
		$this->topic_edited = 'Senast redigerad %s av %s';
		$this->topic_error = 'Fel';
		$this->topic_group = 'Grupp';
		$this->topic_guest = 'G�st';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Gick Med';
		$this->topic_level = 'Medelemsniv�';
		$this->topic_links_aim = 'Skicka ett AIM meddelande till %s';
		$this->topic_links_email = 'Skicka ett e-post till %s';
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'Skicka ett ICQ meddelande till %s';
		$this->topic_links_msn = 'Visa %s\'s MSN profil';
		$this->topic_links_pm = 'Skicka ett personligt meddelande till %s';
		$this->topic_links_web = 'Bes�k %s\'s hemsida';
		$this->topic_links_yahoo = 'Skicka ett meddelande till %s med Yahoo! Messenger';
		$this->topic_lock = 'L�s';
		$this->topic_locked = '�mnet L�st';
		$this->topic_move = 'Flytta';
		$this->topic_no_votes = 'Det finns inga r�ster i den h�r r�stningen.';
		$this->topic_not_found = '�mnet Kunde Inte Hittas';
		$this->topic_not_found_message = '�mnet kunde inte hittas. Det kan ha blivit raderat, flyttat eller s� har det aldrig funnits.';
		$this->topic_offline = 'This member is currently offline'; //Translate
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = '�mnes Alternativ';
		$this->topic_pages = 'Sidor';
		$this->topic_perm_view = 'Du har inte till�telse att l�sa �mnen.';
		$this->topic_perm_view_guest = 'Du har inte till�telse att l�sa �mnen innan du registrerat dig.';
		$this->topic_pin = 'Klistra';
		$this->topic_posted = 'Postad';
		$this->topic_posts = 'Inl�gg';
		$this->topic_print = 'Visa Utskriftsv�nlig';
		$this->topic_quote = 'Svara med ett citat fr�n detta inl�gg';
		$this->topic_reply = 'Svara p� �mne';
		$this->topic_split = 'Dela upp';
		$this->topic_split_finish = 'Avsluta all uppdelning';
		$this->topic_split_keep = 'Flytta inte p� detta inl�gg';
		$this->topic_split_move = 'Flytta detta inl�gg';
		$this->topic_subscribe = 'E-posta mig n�r inl�gg skrivits i detta �mne';
		$this->topic_top = 'G� till toppen av den h�r sidan';
		$this->topic_unlock = 'L�s Upp';
		$this->topic_unpin = 'Klistra Av';
		$this->topic_unreg = 'Oregistrerad';
		$this->topic_view = 'Visa Resultat';
		$this->topic_viewing = 'Visar �mne';
		$this->topic_vote = 'R�sta';
		$this->topic_vote_count_plur = '%d r�ster';
		$this->topic_vote_count_sing = '%d r�st';
		$this->topic_votes = 'R�ster';
	}

	function universal()
	{
		$this->based_on = 'based on';
		$this->board_by = 'Av';
		$this->charset = 'iso-8859-1';
		$this->continue = 'Continue'; //Translate
		$this->delete = 'Delete'; //Translate
		$this->direction = 'ltr'; //Translate
		$this->edit = 'Edit HTML Templates';
		$this->no = 'No'; //Translate
		$this->powered = 'Powered by'; //Translate
		$this->seconds = 'Seconds'; //Translate
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->submit = 'Skicka';
		$this->today = 'Idag';
		$this->yes = 'Yes'; //Translate
		$this->yesterday = 'Ig�r';
	}
}
?>