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
 * Czech language module
 *
 * @author Yarda Hor�k <ryan69@seznam.cz>
 * @since 1.1.0
 **/
class cs
{
	function active()
	{
		$this->active_last_action = 'Akce';
		$this->active_modules_active = 'Prohl�� si aktivn� u�ivatele';
		$this->active_modules_board = 'Je na �vodn� str�nce';
		$this->active_modules_cp = 'Pou��v� kontroln� panel';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Pou��v� n�pov�du';
		$this->active_modules_login = 'Vstupuje/Odch�z�';
		$this->active_modules_members = 'Prohl�� si seznam �len�';
		$this->active_modules_mod = 'Moderovat';
		$this->active_modules_pm = 'Pou��v� Messenger';
		$this->active_modules_post = 'P�e nov� p��sp�vek';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_recent = 'Viewing recent posts'; //Translate
		$this->active_modules_search = 'Hled�n�';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = '�as';
		$this->active_user = 'U�ivatel';
		$this->active_users = 'Aktivn� u�ivatel�';
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
		$this->board_active_users = 'Aktivn� u�ivatel�';
		$this->board_birthdays = 'Dnes m� narozeniny:';
		$this->board_bottom_page = 'Go to the bottom of the page'; //Translate
		$this->board_can_post = 'V tomto f�ru m�ete odpov�dat.';
		$this->board_can_topics = 'M�ete prohl�et, ale nem�ete vytv��et t�mata v tomto f�ru. Pros�m, zaregistrujte se.';
		$this->board_cant_post = 'Nem�ete odpov�dat v tomto f�ru. Pros�m, zaregistrujte se.';
		$this->board_cant_topics = 'Nem�ete prohl�et ani vytv��et t�mata v tomto f�ru. Pros�m, zaregistrujte se.';
		$this->board_forum = 'F�rum';
		$this->board_guests = 'a host�:';
		$this->board_last_post = 'Posledn� p��sp�vek';
		$this->board_mark = 'Ozna�it p��sp�vek jako p�e�ten�';
		$this->board_mark1 = 'V�echny p��sp�vky a f�ra byly ozna�eny jako p�e�ten�.';
		$this->board_members = 'z toho registrovan�ch: ';
		$this->board_message = '%s Zpr�va';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = '��dny �len dnes nem� narozeniny.';
		$this->board_nobody = '��dn� �len nen� on-line.';
		$this->board_nopost = '��dn� p��sp�vky';
		$this->board_noview = 'Nem�te povolen� prohl�et f�rum.';
		$this->board_regfirst = 'Nem�te povolen� prohl�et f�rum. Mus�te se nejd��v zaregistrovat.';
		$this->board_replies = 'Odpov�d�';
		$this->board_stats = 'Statistiky';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_top_page = 'Go to the top of the page'; //Translate
		$this->board_topics = 'T�mat';
		$this->board_topics_new = 'Ve f�ru je nov� p��sp�vek.';
		$this->board_topics_old = 'Ve f�ru nejsou ��dn� nov� p��sp�vky.';
		$this->board_users = 'Celkem u�ivatel� on-line:';
		$this->board_write_topics = 'M�ete prohl�et a vytv��et t�mata v tomto f�ru.';
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
		$this->cp_aim = 'AIM';
		$this->cp_already_member = 'V�mi zadan� e-mailov� adresa je ji� pou�ita jin�m �lenem..';
		$this->cp_apr = 'Dubna';
		$this->cp_aug = 'Srpna';
		$this->cp_avatar_current = 'St�vaj�c� avatar';
		$this->cp_avatar_error = 'Chybn� avatar';
		$this->cp_avatar_must_select = 'Mus�te vybrat avatar.';
		$this->cp_avatar_none = 'Nem� avatar';
		$this->cp_avatar_pixels = 'pixel�';
		$this->cp_avatar_select = 'Vyberte avatar';
		$this->cp_avatar_size_height = 'Avatar mus� m�t ���ku mezi 1 d';
		$this->cp_avatar_size_width = 'Avatar mus� m�t v�ku mezi 1 d';
		$this->cp_avatar_upload = 'Nahr�t avatara z Va�eho disku';
		$this->cp_avatar_upload_failed = 'Chyba p�i nahr�v�n� avatara. Soubour z�ejm� neexistuje.';
		$this->cp_avatar_upload_not_image = 'M�ete nahr�t jen avatar ?na be used for your avatar?.';
		$this->cp_avatar_upload_too_large = 'Avatar je p��li� velk�. Maxim�ln� velikost je %d kilobyt�.';
		$this->cp_avatar_url = 'URL Va�eho avatara';
		$this->cp_avatar_use = 'Pou��t nahran� avatar';
		$this->cp_bday = 'Datum narozen�';
		$this->cp_been_updated = 'V� profil byl zm�n�n.';
		$this->cp_been_updated1 = 'V� avatar byl nahr�n.';
		$this->cp_been_updated_prefs = 'Nastaven� bylo zm�n�no.';
		$this->cp_changing_pass = 'Zm�nit heslo';
		$this->cp_contact_pm = 'Umo�nit ostatn�m u�ivatel�m, aby mi mohli zas�lat soukrom� zpr�vy';
		$this->cp_cp = 'Nastaven�';
		$this->cp_current_avatar = 'St�vaj�c� avatar';
		$this->cp_current_time = 'Nyn� je %s.';
		$this->cp_custom_title = 'Custom Member Title'; //Translate
		$this->cp_custom_title2 = 'This is a privledge reserved for board administrators'; //Translate
		$this->cp_dec = 'Prosince';
		$this->cp_editing_avatar = 'Zm�nit avatar';
		$this->cp_editing_profile = 'Zm�nit profil';
		$this->cp_email = 'E-mail';
		$this->cp_email_form = 'Umo�nit ostatn�m u�ivatel�m  kontaktovat mn� p�es e-mail';
		$this->cp_email_invaid = 'V�mi vlo�en� e-mailov� adresa je neplatn�.';
		$this->cp_err_avatar = 'Chyba p�i nahr�v�n� avatara';
		$this->cp_err_updating = 'Chyba p�i zm�n� profilu';
		$this->cp_feb = '�nora';
		$this->cp_file_type = 'V�mi vlo�en� avatar je neplatn�. Ujist�te se �e URL je ve spr�vn�m tvaru, a form�t obr�zku je gif, jpg, nebo png.';
		$this->cp_format = 'Jm�no-p�ezd�vka';
		$this->cp_gtalk = 'GTalk Account'; //Translate
		$this->cp_header = 'Kontroln� panel u�ivatele';
		$this->cp_height = 'V�ka';
		$this->cp_icq = 'ICQ (bez mezer, poml�ek, atd.).';
		$this->cp_interest = 'Z�liby';
		$this->cp_jan = 'Ledna';
		$this->cp_july = '�ervence';
		$this->cp_june = '�ervna';
		$this->cp_label_edit_avatar = 'Zm�nit avatar';
		$this->cp_label_edit_pass = 'Zm�nit heslo';
		$this->cp_label_edit_prefs = 'Zm�nit nastaven�';
		$this->cp_label_edit_profile = 'Zm�nit profil';
		$this->cp_label_edit_subs = 'Zm�nit zas�l�n� infomail�';
		$this->cp_language = 'Jazyk';
		$this->cp_less_charac = 'Va�e jm�no m�e obsahovat max. 32 znak�.';
		$this->cp_location = 'M�sto';
		$this->cp_login_first = 'Mus�te b�t p�ihla�eni, aby ste mohli pou��vat kontroln� panel.';
		$this->cp_mar = 'B�ezna';
		$this->cp_may = 'Kv�tna';
		$this->cp_msn = 'MSN';
		$this->cp_must_orig = 'Va�e jm�no mus� b�t stejn� jako p�vodn�. M�ete jen zm�nit zp�sob jeho zobrazen� (nap�. p�id�n�m mezer atd.).';
		$this->cp_new_notmatch = 'Vami zadan� nov� heslo je neplatn�.';
		$this->cp_new_pass = 'Nov� heslo';
		$this->cp_no_flash = 'Obr�zky ve Flashi nejsou povoleny.';
		$this->cp_not_exist = '�patn� zadan� datum (%s) !';
		$this->cp_nov = 'Listopadu';
		$this->cp_oct = '��jna';
		$this->cp_old_notmatch = 'Heslo nesouhlas� s heslem v datab�zi.';
		$this->cp_old_pass = 'Star� heslo';
		$this->cp_pass_notvaid = 'Va�e heslo je neplatn�. Ujist�te se, �e pou��vat� jen platn� znaky - p�smena, ��slice, poml�ky, podrt��tka, nebo mezery.';
		$this->cp_preferences = 'Zm�nit z�liby';
		$this->cp_privacy = 'Priv�tn� volby';
		$this->cp_repeat_pass = 'Zopakujte nov� heslo';
		$this->cp_sept = 'Z���';
		$this->cp_show_active = 'B�t viditeln� pro ostatn� u�ivatele, pokud se p�ihlas�m na f�rum';
		$this->cp_show_email = 'Zobrazit moj� e-mailovou adresu v profilu';
		$this->cp_signature = 'Podpis';
		$this->cp_size_max = 'Velikost avatara je p��li� velk� (max. %s na %s pixel�).';
		$this->cp_skin = 'Vzhled f�ra';
		$this->cp_sub_change = 'Zm�nit zas�l�n� infomail�';
		$this->cp_sub_delete = 'Smazat';
		$this->cp_sub_expire = 'E-maily budou z�s�lany do';
		$this->cp_sub_name = 'N�zev t�matu';
		$this->cp_sub_no_params = '��dn� parametry nebyly zad�ny.';
		$this->cp_sub_success = 'You are now subscribed to this %s.'; //Translate
		$this->cp_sub_type = 'Sekce';
		$this->cp_sub_updated = 'Zas�lan� informa�n�ch e-mail� o tomto t�matu bylo zru�eno.';
		$this->cp_topic_option = 'Zobrazovat';
		$this->cp_updated = 'Profil zm�n�n';
		$this->cp_updated1 = 'Avatar zm�n�n';
		$this->cp_updated_prefs = 'Nastaven� zm�n�no';
		$this->cp_user_exists = 'U�ivatel s t�mto jm�nem ji� existuje.';
		$this->cp_valided = 'Va�e heslo bylo zm�n�no.';
		$this->cp_view_avatar = 'obr�zky';
		$this->cp_view_emoticon = 'smajl�ky';
		$this->cp_view_signature = 'podpisy';
		$this->cp_welcome = 'V�tejte v ovl�dac�m panelu pro registrovan� u�ivatele. Odtud m�ete m�nit V� ��et. Pros�m vyberte si z mo�nost� naho�e.';
		$this->cp_width = '���ka';
		$this->cp_www = 'WWW str�nky';
		$this->cp_yahoo = 'Yahoo';
		$this->cp_zone = '�asov� p�smo';
	}

	function email()
	{
		$this->email_blocked = 'Tento �len neakceptuje p�ijmut� e-mailov�ch zpr�v.';
		$this->email_email = 'E-mail';
		$this->email_msgtext = 'Zpr�va:';
		$this->email_no_fields = 'Vra?te se a ujist�te se, �e jste vyplnili v�echny �daje.';
		$this->email_no_member = 'Pod t�mto jm�nem nebyl nalezen ��dn� �len';
		$this->email_no_perm = 'Nem�te povolen� pos�lat e-mailov� zpr�vy v tomto f�ru.';
		$this->email_sent = 'E-mail byl odesl�n.';
		$this->email_subject = 'P�edm�t:';
		$this->email_to = 'Pro:';
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
		$this->forum_by = 'Od';
		$this->forum_can_post = 'V tomto f�ru m�ete odpov�dat.';
		$this->forum_can_topics = 'V tomto f�ru m�ete prohl�et t�mata.';
		$this->forum_cant_post = 'V tomto f�ru nem�ete odpov�dat. Pros�m, zaregistrujte se.';
		$this->forum_cant_topics = 'V tomto f�ru nem�ete prohl�et t�mata. Pros�m, zaregistrujte se.';
		$this->forum_dot = 'te�ka';
		$this->forum_dot_detail = 'ukazuje, �e jste v tomto f�ru odpov�dal(a)';
		$this->forum_forum = 'F�rum';
		$this->forum_guest = 'Host';
		$this->forum_hot = '"HOT"';
		$this->forum_icon = 'Ikonka zpr�vy';
		$this->forum_jump = 'P�esko�it na nejnov�j�� p��sp�vek v tomto t�matu.';
		$this->forum_last = 'Posledn� p��sp�vek';
		$this->forum_locked = 'Zamknuto';
		$this->forum_moved = 'P�esunuto';
		$this->forum_msg = '%s Zpr�va';
		$this->forum_new = 'Nov�';
		$this->forum_new_poll = 'Vytvo�it nov� t�ma s anketou';
		$this->forum_new_topic = 'Vytvo�it nov� t�ma';
		$this->forum_no_topics = 'Ve f�ru nejsou ��dn� p��sp�vky k zobrazen�.';
		$this->forum_noexist = 'F�rum neexistuje.';
		$this->forum_nopost = '��dn� p��sp�vky';
		$this->forum_not = 'Ne';
		$this->forum_noview = 'Nem�te opravn�n� prohl�et f�rum.';
		$this->forum_pages = 'Pages'; //Translate
		$this->forum_pinned = 'D�le�it�';
		$this->forum_pinned_topic = 'Zapinov�n� t�ma';
		$this->forum_poll = 'Anketa';
		$this->forum_regfirst = 'Nem�te opr�vn�n� prohl�et f�rum. Nejprve se mus�te zaregistrovat.';
		$this->forum_replies = 'Odpov�d�';
		$this->forum_starter = 'Zalo�il(a)';
		$this->forum_sub = 'Sub-f�rum';
		$this->forum_sub_last_post = 'Posledn� p��sp�vek';
		$this->forum_sub_replies = 'Odpov�d�';
		$this->forum_sub_topics = 'T�mat';
		$this->forum_subscribe = 'Informovat mn� e-mailem o nov�ch p��sp�vc�ch';
		$this->forum_topic = 'T�ma';
		$this->forum_topics_new = 'Ve f�ru jsou nov� p��sp�vky.';
		$this->forum_topics_old = 'Ve f�ru nejsou ��dn� nov� p��sp�vky.';
		$this->forum_views = 'Schl�dnuto';
		$this->forum_write_topics = 'V tomto f�ru m�ete vytv��et t�mata.';
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
		$this->help_available_files = 'N�pov�da';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'Datab�ze neobsahuje ��dnou n�pov�du';
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
		$this->login_cant_logged = 'P�ihl�en� bylo ne�sp�n�. Zkontrolujte, �e zadan� jm�no a heslo jsou spr�vn�.<br /><br />Aplikace rozezn�v� mal� a velk� p�smena! \'hEsLo\' nen� \'heslo\'. Zkontrolujte si tak�, �e m�te ve sv�m prohl�eci povoleny Cookies.';
		$this->login_cookies = 'Pro p�ihl�en� mus� b�t ve Va�em prohl�e�i povoleny Cookies';
		$this->login_forgot_pass = 'Zapomn�li jste heslo?';
		$this->login_header = 'P�ihl�en�';
		$this->login_logged = 'Nyn� jste p�ihl�eni.';
		$this->login_now_out = 'Nyn� jste odhl�eni.';
		$this->login_out = 'Odhl�en�';
		$this->login_pass = 'Heslo';
		$this->login_pass_no_id = 'Pod t�mto jm�nem nen� registrov�n ��dn� u�ivatel.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Obnovit heslo';
		$this->login_pass_sent = 'Va�e heslo bylo obnoveno. Nov� heslo bylo odesl�no na e-mailovou adresu, kterou jste zadali p�i p�i registraci Va�eho ��tu.';
		$this->login_sure = 'Jste si jisti, �e se chcete odhl�sit z \'%s\'?';
		$this->login_user = 'U�ivatelsk� jm�no';
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
		$this->main_activate = 'Dosud jste neaktivovali Va�i registraci.';
		$this->main_activate_resend = 'Poslat znovu aktiva�n� E-mail';
		$this->main_admincp = 'administrace';
		$this->main_banned = 'M�te zak�z�no prohl�et jakoukoli ��st tohoto f�ra.';
		$this->main_code = 'K�d';
		$this->main_cp = 'nastaven�';
		$this->main_full = 'Pln�';
		$this->main_help = 'n�pov�da';
		$this->main_load = 'zat�en�';
		$this->main_login = 'p�ihl�en�';
		$this->main_logout = 'odhl�en�';
		$this->main_mark = 'mark all'; //Translate
		$this->main_mark1 = 'Mark all topics as read'; //Translate
		$this->main_max_load = 'Omlov�me se, ale %s je v nyn� nedostupn�, proto�e server je p�et�en.';
		$this->main_members = '�lenov�';
		$this->main_messenger = 'messenger'; //Translate
		$this->main_new = 'nov�';
		$this->main_next = 'dal��';
		$this->main_prev = 'p�edchoz�';
		$this->main_queries = 'po�adavk�';
		$this->main_quote = 'Citovat';
		$this->main_recent = 'recent posts'; //Translate
		$this->main_recent1 = 'View recent topics since your last visit'; //Translate
		$this->main_register = 'registrace';
		$this->main_reminder = 'Upozorn�n�:';
		$this->main_reminder_closed = 'F�rum je nyn� uzav�eno, p��stupn� jen administr�tor�m.';
		$this->main_said = '�ekl(a)';
		$this->main_search = 'hledat';
		$this->main_welcome = 'V�tejte';
		$this->main_welcome_guest = 'V�tejte!!';
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
		$this->members_all = 'v�ichni';
		$this->members_email = 'E-mail';
		$this->members_email_member = 'Poslat E-mail tomuto �lenovi';
		$this->members_group = 'Skupina';
		$this->members_joined = 'Zalo�eno';
		$this->members_list = 'Seznam �len�';
		$this->members_member = '�len';
		$this->members_pm = 'Osobn� zpr�va';
		$this->members_posts = 'P��sp�vk�';
		$this->members_send_pm = 'Poslat tomuto u�ivateli soukromou zpr�vu';
		$this->members_title = 'Titul';
		$this->members_vist_www = 'Otev��t �lenovy www str�nky';
		$this->members_www = 'www';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Jste si jisti �e chcete smazat tento p��sp�vek?';
		$this->mod_confirm_topic_delete = 'Jste si jisti �e chcete smazat toto t�ma?';
		$this->mod_error_first_post = 'Nem�ete smazat prvn� p��sp�vek v diskusi.';
		$this->mod_error_move_category = 'Nem�ete p�esunout toto t�ma.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Nem�ete p�esunout t�ma do diskuse, kter� neexistuje.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Nem�ete p�esunout t�ma do diskuse, ve kter� u� je.';
		$this->mod_label_controls = '�prava p��sp�vku';
		$this->mod_label_description = 'Popis';
		$this->mod_label_emoticon = 'P�ev�st textov� "smajl�ky" na obr�zkov�?';
		$this->mod_label_global = 'V�eobecn� t�ma';
		$this->mod_label_mbcode = 'Zform�tovat MbCodem?';
		$this->mod_label_move_to = 'P�esunout do';
		$this->mod_label_options = 'Volby';
		$this->mod_label_post_delete = 'Smazat p��sp�vek';
		$this->mod_label_post_edit = 'Editovat p��sp�vek';
		$this->mod_label_title = 'N�zev';
		$this->mod_label_title_original = 'P�vodn� n�zev';
		$this->mod_label_title_split = 'Spojit t�mata';
		$this->mod_label_topic_delete = 'Smazat t�ma';
		$this->mod_label_topic_edit = 'Editovat t�ma';
		$this->mod_label_topic_lock = 'Zamknout t�ma';
		$this->mod_label_topic_move = 'P�esunout t�ma';
		$this->mod_label_topic_move_complete = 'P�esunout c�l� t�ma do nov� diskuse';
		$this->mod_label_topic_move_link = 'P�esunou t�ma do nov� diskuse, a nechat na n�j odkaz ve star� diskusi.';
		$this->mod_label_topic_pin = 'Zv�raznit t�ma';
		$this->mod_label_topic_split = 'Spojit t�mata';
		$this->mod_missing_post = 'Zadan� p��sp�v�k neexistuje.';
		$this->mod_missing_topic = 'Zadan� t�ma neexistuje.';
		$this->mod_no_action = 'Mus�te zvolit �kol.';
		$this->mod_no_post = 'Mus�te zvolit p��sp�vek.';
		$this->mod_no_topic = 'Mus�te zvolit t�ma..';
		$this->mod_perm_post_delete = 'Nem�te opr�vn�n� mazat p��sp�vky.';
		$this->mod_perm_post_edit = 'Nem�te opr�vn�n� editovat p��sp�vky.';
		$this->mod_perm_topic_delete = 'Nem�te opr�vn�n� mazat toto t�ma.';
		$this->mod_perm_topic_edit = 'Nem�te opr�vn�n� editovat toto t�ma.';
		$this->mod_perm_topic_lock = 'Nem�te opr�vn�n� zamknout toto t�ma.';
		$this->mod_perm_topic_move = 'Nem�te opr�vn�n� p�esunout toto t�ma.';
		$this->mod_perm_topic_pin = 'Nem�te opr�vn�n� zv�raznit toto t�ma.';
		$this->mod_perm_topic_split = 'Nem�te opr�vn�n� spojit tato t�mata.';
		$this->mod_perm_topic_unlock = 'Nem�te opr�vn�n� odemknout toto t�ma.';
		$this->mod_perm_topic_unpin = 'Nem�te opr�vn�n� odpinovat toto t�ma.';
		$this->mod_success_post_delete = 'P��sp�vek byl �sp�n� smaz�n.';
		$this->mod_success_post_edit = 'P��sp�v�k byl �sp�n� zm�n�n.';
		$this->mod_success_split = 'T�mata byly �sp�n� spojeny.';
		$this->mod_success_topic_delete = 'T�ma bylo �sp�n� smaz�no.';
		$this->mod_success_topic_edit = 'T�ma bylo �sp�n� zm�n�no.';
		$this->mod_success_topic_move = 'T�ma bylo �sp�n� p�esunuto do nov� diskuse.';
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
		$this->pm_cant_del = 'Nem�te opr�vn�n� smazat tuto zpr�vu.';
		$this->pm_delallmsg = 'Smazat v�echny zpr�vy';
		$this->pm_delete = 'Smazat';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = 'Zpr�va smaz�na.';
		$this->pm_deleted_all = 'Zpr�vy smaz�ny.';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Zpr�va nemohla b� odesl�na. Ujist�te se, �e jste vyplnili v�echny povinn� �daje.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Schr�nka';
		$this->pm_folder_new = '%s nov�';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Od';
		$this->pm_group = 'Skupina';
		$this->pm_guest = 'Jako HOST nem�ete pou��vat Messenger. Pros�m p�ihla�te se nebo se zaregistrujte.';
		$this->pm_joined = 'Zalo�eno';
		$this->pm_messenger = 'Messenger'; //Translate
		$this->pm_msgtext = 'Text zpr�vy';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Mus�te vybrat adres��.';
		$this->pm_no_member = '��dn� �len nebyl nalezen pod t�mto ID.';
		$this->pm_no_number = '��dn� zpr�va nebyla nalezena pod t�mto ��slem.';
		$this->pm_no_title = '��dn� p�edm�t';
		$this->pm_nomsg = 'V t�to slo�ce nejsou ��dn� zpr�vy.';
		$this->pm_noview = 'Nem�te opr�vn�n� prohl�et tuto zpr�vu.';
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_personal = 'Osobn� Messenger';
		$this->pm_personal_msging = 'Osobn� Messaging';
		$this->pm_pm = 'Soukrom� zpr�va';
		$this->pm_posts = 'P��sp�vk�';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Odpov��';
		$this->pm_send = 'Poslat';
		$this->pm_sendamsg = 'Poslat priv�tn� zpr�vu';
		$this->pm_sendingpm = 'Poslat priv�tn� zpr�vu';
		$this->pm_sendon = 'Posl�no';
		$this->pm_success = 'Va�e zpr�va byla �sp�n� odesl�na.';
		$this->pm_sure_del = 'Jste si jisti, �e chcete smazat tuto zpr�vu?';
		$this->pm_sure_delall = 'Jste si jisti, �e chcete smazat v�echny zpr�vy v t�to slo�ce?';
		$this->pm_title = 'P�edm�t';
		$this->pm_to = 'Pro';
	}

	function post()
	{
		$this->post_attach = 'P��lohy';
		$this->post_attach_add = 'P�idat p��lohu';
		$this->post_attach_disrupt = 'P�id�n�m nebo odebr�n�m p��lohy nenaru��te V� p��sp�vek.';
		$this->post_attach_failed = 'Chyba p�i n�hr�v�n� p��lohy. Soubor neexistuje.';
		$this->post_attach_not_allowed = 'Nem�ete p�ilo�it soubor tohoto typu.';
		$this->post_attach_remove = 'Odstranit p��lohu';
		$this->post_attach_too_large = 'P��loha je p��li� velk� (max. %d KB).';
		$this->post_cant_create = 'Jako host nem�te opr�vn�n� vytv��et t�mata. Pros�m p�ihla�te se nebo se zaregistrujte.';
		$this->post_cant_create1 = 'Nem�te opr�vn�n� vytv��et t�mata.';
		$this->post_cant_enter = 'V� hlas nemohl b�t zapo��t�n. bu� ste ji� hlasovali, or nem�te opr�vn�n� hlasovat.';
		$this->post_cant_poll = 'Jako host nem�te opr�vn�n� vytv��et t�ma s anketou. Pros�m p�ihla�te se nebo se zaregistrujte.';
		$this->post_cant_poll1 = 'Nem�te opr�vn�n� vytv��et t�ma s anketou.';
		$this->post_cant_reply = 'Nem�te opr�vn�n� odpov�dat na t�ma v t�to diskusi.';
		$this->post_cant_reply1 = 'Jako host nem�te opr�vn�n� odpov�dat na t�mata. Mus�te b�t zaregistrov�ni, abyste mohli zas�lat p��sp�vky.';
		$this->post_cant_reply2 = 'Nem�te opr�vn�n� odpov�dat na t�mata.';
		$this->post_closed = 'Toto t�ma bylo zav�eno.';
		$this->post_create_poll = 'Vytvo�it t�ma s anketou';
		$this->post_create_topic = 'Vytvo�it t�ma';
		$this->post_creating = 'Vytvo�it t�ma';
		$this->post_creating_poll = 'Vytvo�it t�ma s anketou';
		$this->post_flood = 'Odpov�dal(a) jste v p�ede�l�ch  %s vte�in�ch, nyn� je�t� nem�ete odeslat dal�� p��sp�vek.<br /><br />Pros�m zkuste to za n�kolik vte�in.';
		$this->post_guest = 'Host';
		$this->post_icon = 'Ikonka t�matu';
		$this->post_last_five = 'Posledn�ch 5 p��sp�vk�';
		$this->post_length = 'Zkontrolovat d�lku';
		$this->post_mbcode_address = 'Vlo�it adresu';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Modr�';
		$this->post_mbcode_bold = 'Ozna�en� text bude tu�n�';
		$this->post_mbcode_bold1 = 'B'; //Translate
		$this->post_mbcode_chocolate = '�okol�dov�';
		$this->post_mbcode_code = 'Zform�tuje text do programovac�ho k�du';
		$this->post_mbcode_color = 'Barva';
		$this->post_mbcode_coral = 'Kor�lov�';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Rud�';
		$this->post_mbcode_darkblue = 'Tmav� modr�';
		$this->post_mbcode_darkred = 'Tmav� �erven�';
		$this->post_mbcode_deepink = 'Ru�ov�';
		$this->post_mbcode_detail = 'Vlo�te popis';
		$this->post_mbcode_email = 'Vlo�� do p��sp�vku e-mailovou adresu';
		$this->post_mbcode_firered = 'Cihlov� �erven�';
		$this->post_mbcode_font = 'Font'; //Translate
		$this->post_mbcode_green = 'Zelen�';
		$this->post_mbcode_huge = 'Obrovsk�';
		$this->post_mbcode_image = 'Vlo�� do p��sp�vku obr�zek z jin�ho serveru';
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Ozna�en� text bude kurz�vou';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Velk�';
		$this->post_mbcode_length = 'V�e zpr�va m� "+length+" znak�.';
		$this->post_mbcode_limegreen = 'Limetkov� zelen�';
		$this->post_mbcode_medium = 'St�edn�';
		$this->post_mbcode_orange = 'Oran�ov�';
		$this->post_mbcode_orangered = 'Oran�ovo �erven�';
		$this->post_mbcode_php = 'Zform�tuje ozna�en� text do PHP k�du';
		$this->post_mbcode_purple = 'Fialov�';
		$this->post_mbcode_quote = 'Vlo�� do p��sp�vku citaci';
		$this->post_mbcode_red = '�erven�';
		$this->post_mbcode_royalblue = 'Kr�lovsk� modr�';
		$this->post_mbcode_sandybrown = 'P�skov� hn�d�';
		$this->post_mbcode_seagreen = 'Zeln�';
		$this->post_mbcode_sienna = 'Sienna'; //Translate
		$this->post_mbcode_silver = 'St��brn�';
		$this->post_mbcode_size = 'Velikost';
		$this->post_mbcode_skyblue = 'Nebesk� modr�';
		$this->post_mbcode_small = 'Mal�';
		$this->post_mbcode_strike = 'Ozna�en� text bude p�e�krtnut�';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Malinkat�';
		$this->post_mbcode_tomato = 'Tomatov�';
		$this->post_mbcode_underline = 'Ozna�en� text bude podtr�en�';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'Vlo�� do p��sp�vku URL adresu';
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Burly Wood'; //Translate
		$this->post_mbcode_yellow = 'Yellow'; //Translate
		$this->post_msg = 'Zpr�va';
		$this->post_must_msg = 'Mus�te napsat n�jak� text, kdy� chcete zalo�it nov� t�ma.';
		$this->post_must_options = 'Mus�te ur�it volby, kdy� chtete zalo�it nov� t�ma s anketou.';
		$this->post_must_title = 'Mus�te vlo�it n�zev nov�ho t�matu, kdy� ho chcete zalo�it.';
		$this->post_new_poll = 'Nov� anketa';
		$this->post_new_topic = 'Nov� t�ma';
		$this->post_no_forum = '��dn� t�ma nebylo nalezeno.';
		$this->post_no_topic = '��dn� t�ma nebylo vybr�no.';
		$this->post_no_vote = 'Mus�te vybrat mo�nosti hlasov�n� pro anketu.';
		$this->post_option_emoticons = 'P�ev�st textov� "smajl�ky" na obr�zkov�?';
		$this->post_option_global = 'Ud�lat toto t�ma glob�ln�m?';
		$this->post_option_mbcode = 'Form�tovat MbCodem? (doporu�eno)';
		$this->post_optional = 'voliteln�';
		$this->post_options = 'Volby';
		$this->post_poll_options = 'Volby ankety';
		$this->post_poll_row = 'Jedna mo�nost na ka�d� ��dek';
		$this->post_posted = 'Posl�no';
		$this->post_posting = 'Zapo��t�no';
		$this->post_preview = 'N�hled';
		$this->post_reply = 'Odeslat';
		$this->post_reply_topic = 'Odpov�d�t na t�ma';
		$this->post_replying = 'Odpov�d�t na t�ma';
		$this->post_replying1 = 'Odpov�d�t';
		$this->post_smiles = 'Smajl�ci';
		$this->post_too_many_options = 'Mus� b�t mezi 2 a %d volbami k hlasov�n�.';
		$this->post_topic_detail = 'Popis t�matu';
		$this->post_topic_title = 'N�zev t�matu';
		$this->post_view_topic = 'Prohl�dnout cel� t�ma';
		$this->post_voting = 'Hlasov�n�';
	}

	function printer()
	{
		$this->printer_back = 'Zp�t';
		$this->printer_not_found = 'T�ma  nebylo nalezeno. Bu� bylo smaz�no, p�esunuto, nebo neexistuje.';
		$this->printer_not_found_title = 'T�ma nenalezeno';
		$this->printer_perm_topics = 'Nem�te opr�vn�n� prohl�et t�ma.';
		$this->printer_perm_topics_guest = 'Nem�te opr�vn�n� prohl�et t�ma. Nejprve se mus�te zaregistrovat.';
		$this->printer_posted_on = 'Posl�no';
		$this->printer_send = 'Poslat na tisk';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM';
		$this->profile_av_sign = 'Avatar a podpis';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'V�k / narozeniny';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'E-mailov� adresa';
		$this->profile_fav = 'Obl�ben� f�rum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = 'ICQ';
		$this->profile_info = 'Informace';
		$this->profile_interest = 'Z�jmy';
		$this->profile_joined = 'Zalo�eno';
		$this->profile_last_post = 'Posledn� p��sp�vek';
		$this->profile_list = 'Seznam �len�';
		$this->profile_location = 'Bydli�t�';
		$this->profile_member = 'U�ivatelsk� skupina';
		$this->profile_member_title = '�lensk� titul';
		$this->profile_msn = 'MSN';
		$this->profile_must_user = 'Abyste mohli prohl�et profil, mus�te nejprve vybrat n�jak�ho u�ivatele.';
		$this->profile_no_member = 'Pod t�mto ID nebyl nalezen ��dny �len. Je mo�n�, �e jeho ��et byl smaz�n.';
		$this->profile_none = '[ ��dn� ]';
		$this->profile_not_post = 'je�t� nep�isp�val(a).';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Priv�tn� zpr�va';
		$this->profile_postcount = '%s celkem, %s za den';
		$this->profile_posts = 'Celkem p��sp�vk�';
		$this->profile_private = '[ Osobn� ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Podpis';
		$this->profile_unkown = '[ Nezn�m� ]';
		$this->profile_view_profile = 'Prohl�dnout profil';
		$this->profile_www = 'WWW str�nky';
		$this->profile_yahoo = 'Yahoo';
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
		$this->recent_by = 'Od';
		$this->recent_can_post = 'V tomto f�ru m�ete odpov�dat.';
		$this->recent_can_topics = 'V tomto f�ru m�ete prohl�et t�mata.';
		$this->recent_cant_post = 'V tomto f�ru nem�ete odpov�dat. Pros�m, zaregistrujte se.';
		$this->recent_cant_topics = 'V tomto f�ru nem�ete prohl�et t�mata. Pros�m, zaregistrujte se.';
		$this->recent_dot = 'te�ka';
		$this->recent_dot_detail = 'ukazuje, �e jste v tomto f�ru odpov�dal(a)';
		$this->recent_forum = 'F�rum';
		$this->recent_guest = 'Host';
		$this->recent_hot = '"HOT"';
		$this->recent_icon = 'Ikonka zpr�vy';
		$this->recent_jump = 'P�esko�it na nejnov�j�� p��sp�vek v tomto t�matu.';
		$this->recent_last = 'Posledn� p��sp�vek';
		$this->recent_locked = 'Zamknuto';
		$this->recent_moved = 'P�esunuto';
		$this->recent_msg = '%s Zpr�va';
		$this->recent_new = 'Nov�';
		$this->recent_new_poll = 'Vytvo�it nov� t�ma s anketou';
		$this->recent_new_topic = 'Vytvo�it nov� t�ma';
		$this->recent_no_topics = 'Ve f�ru nejsou ��dn� p��sp�vky k zobrazen�.';
		$this->recent_noexist = 'F�rum neexistuje.';
		$this->recent_nopost = '��dn� p��sp�vky';
		$this->recent_not = 'Ne';
		$this->recent_noview = 'Nem�te opravn�n� prohl�et f�rum.';
		$this->recent_pages = 'Pages'; //Translate
		$this->recent_pinned = 'D�le�it�';
		$this->recent_pinned_topic = 'Zapinov�n� t�ma';
		$this->recent_poll = 'Anketa';
		$this->recent_regfirst = 'Nem�te opr�vn�n� prohl�et f�rum. Nejprve se mus�te zaregistrovat.';
		$this->recent_replies = 'Odpov�d�';
		$this->recent_starter = 'Zalo�il(a)';
		$this->recent_sub = 'Sub-f�rum';
		$this->recent_sub_last_post = 'Posledn� p��sp�vek';
		$this->recent_sub_replies = 'Odpov�d�';
		$this->recent_sub_topics = 'T�mat';
		$this->recent_subscribe = 'Informovat mn� e-mailem o nov�ch p��sp�vc�ch';
		$this->recent_topic = 'T�ma';
		$this->recent_topics_new = 'Ve f�ru jsou nov� p��sp�vky.';
		$this->recent_topics_old = 'Ve f�ru nejsou ��dn� nov� p��sp�vky.';
		$this->recent_views = 'Schl�dnuto';
		$this->recent_write_topics = 'V tomto f�ru m�ete vytv��et t�mata.';
	}

	function register()
	{
		$this->register_activated = 'V� ��et byl aktivov�n!';
		$this->register_activating = 'Aktivace ��tu';
		$this->register_activation_error = 'P�i aktivaci Va�eho ��tu nastala chyba. Zkontrolujte, zda aktiva�n� e-mail obsahuje celou URL adresu. Pokud pot�e p�etrvaj�, kontaktujte administr�tora tohoto f�ra.';
		$this->register_confirm_passwd = 'Potvr�te heslo';
		$this->register_done = 'Registrace prob�hla �sp�n�. Nyn� se pros�m p�ihla�te.';
		$this->register_email = 'E-mailov� adresa';
		$this->register_email_invalid = 'V�mi zadan� e-mailov� adresa je neplatn�.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'V�mi zadanou e-mailovou adresu ji� pou��v� jin� �len.';
		$this->register_fields = 'Nejsou vypln�ny v�echny �daje.';
		$this->register_image = 'Pros�m zadejte text, kter� vid�te na obr�zku.';
		$this->register_image_invalid = 'Mus�te zadat text, kter� vid�te na obr�zku.';
		$this->register_must_activate = '��dost o registraci byla pod�na. Na adresu %s byl zasl�n e-mail s informacemi, jak aktivovat V� ��et. Dokud nebude ��et aktivov�n, budete m�t na f�ru omezen� n�kter� funkce.';
		$this->register_name_invalid = 'V�mi zadan� jm�no je p��li� dlouh�.';
		$this->register_name_taken = 'V�mi zadan� jm�no je ji� obsazeno.';
		$this->register_new_user = 'U�ivatelsk� jm�no';
		$this->register_pass_invalid = 'V�mi zadan� heslo je neplatn�. Ujist�te se, �e pou��vat� jen platn� znaky - p�smena, ��slice, poml�ky, podrt��tka, nebo mezery a heslo m� alespo� 5 znak�.';
		$this->register_pass_match = 'V�mi zadan� heslo neodpov�d�.';
		$this->register_passwd = 'Heslo';
		$this->register_reg = 'Registrovat!';
		$this->register_reging = 'Registrace';
	}

	function rssfeed()
	{
		$this->rssfeed_posted_by = 'Posted by'; //Translate
	}

	function search()
	{
		$this->search_advanced = 'Roz���en� hled�n�';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Z�kl�dn� hled�n�';
		$this->search_characters = 'znak� z p��sp�vku';
		$this->search_day = 'den';
		$this->search_days = 'dny';
		$this->search_exact_name = 'p�esn� zn�n�';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Vyhledat';
		$this->search_forum = 'F�rum';
		$this->search_group = 'Skupina';
		$this->search_guest = 'Host';
		$this->search_in = 'Hledat v';
		$this->search_in_posts = 'Hledat jen v p��sp�vc�ch';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Zalo�eno';
		$this->search_level = '�rove�';
		$this->search_match = 'vyhledat jen p�esn� zadan� v�raz (nap�. zad�te-li "AIM", ve v�sledc�ch budou jen p��sp�vky, kter� obsahuj� pr�v� slovo "AIM"';
		$this->search_matches = 'Ozna�en�';
		$this->search_month = 'm�s�c';
		$this->search_months = 'm�s�ce';
		$this->search_mysqldoc = 'Dokumentace MySQL';
		$this->search_newer = 'nov�j��ch';
		$this->search_no_results = '��dn� v�sledky nebyly nalezeny.';
		$this->search_no_words = 'Mus�te ur�it alespo� jednu podm�nku pro vyhled�v�n�.<br/><br/>Ka�d� podm�nka mus� obsahovat alespo� 3 znaky, (v�etn� p�smen, ��sel, apostrof�, a podtr��tek).';
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = 'star��ch';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Zobrazit jen prvn�ch';
		$this->search_partial_name = '��ste�n� zn�n�';
		$this->search_post_icon = 'Ikona p��sp�vku';
		$this->search_posted_on = 'Posl�no';
		$this->search_posts = 'P��sp�vky';
		$this->search_posts_by = 'Jen v p��sp�vc�ch od';
		$this->search_regex = 'vyhledat i slova obsahuj�c� hledan� v�raz (nap�. zad�te-li "hledat", ve v�sledc�ch budou p��sp�vky obsahuj�c� slovo "hledat", ale i "vyhledat", "hled�n�" atd.';
		$this->search_regex_failed = 'Hledan�mu v�razu nic neodpov�d�. Prohl�dn�te si pros�m dokumentaci MySQL pro n�pov�du "p�esn�ho zn�n�".';
		$this->search_relevance = 'Hledan�mu v�razu odpov�d� na %d%%';
		$this->search_replies = 'P��sp�vky';
		$this->search_result = 'Vyhledat v�sledky';
		$this->search_search = 'Vyhledat';
		$this->search_select_all = 'Ozna�it v�e';
		$this->search_show_posts = 'Zobrazit jen p��sp�vky (jinak se zobraz� t�ma cel� t�ma)';
		$this->search_sound = 'vyhledat i slova podobn� zadan�mu v�razu';
		$this->search_starter = 'Zalo�il(a)';
		$this->search_than = 'ne�';
		$this->search_topic = 'T�ma';
		$this->search_unreg = 'Neregistrovan�';
		$this->search_week = 't�den';
		$this->search_weeks = 't�dny';
		$this->search_year = 'rok';
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
		$this->topic_attached = 'P��loha:';
		$this->topic_attached_downloads = 'x shl�dnuto';
		$this->topic_attached_perm = 'Nem�te opr�vn�n� st�hnout tento soubor.';
		$this->topic_attached_title = 'P��loha';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = 'Vytvo�it nov� t�ma s anketou';
		$this->topic_create_topic = 'Vytvo�it nov� t�ma';
		$this->topic_delete = 'Smazat';
		$this->topic_delete_post = 'Smazat tento p��sp�vek';
		$this->topic_edit = 'Editovat';
		$this->topic_edit_post = 'Editovat tento p��sp�vek';
		$this->topic_edited = 'Posledn� zm�na: %s od %s';
		$this->topic_error = 'Chyba';
		$this->topic_group = 'Skupina';
		$this->topic_guest = 'Host';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Zalo�eno';
		$this->topic_level = '�rove�';
		$this->topic_links_aim = 'Poslat AIM zpr�vu u�ivateli %s';
		$this->topic_links_email = 'Poslat e-mail u�ivateli %s';
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'Poslat ICQ zpr�vu u�ivateli %s';
		$this->topic_links_msn = 'Poslat MSN zpr�vu u�ivateli %s';
		$this->topic_links_pm = 'Poslat priv�tn� zpr�vu u�ivateli %s';
		$this->topic_links_web = 'Otev��t www str�nky u�ivatele %s';
		$this->topic_links_yahoo = 'Proslat zpr�vu %s p�es Yahoo! Messenger';
		$this->topic_lock = 'Zamknout';
		$this->topic_locked = 'T�ma zam�eno';
		$this->topic_move = 'P�esunout';
		$this->topic_no_votes = 'V t�to anket� nejsou zaznamen�ny ��dn� hlasy.';
		$this->topic_not_found = 'T�ma nenalezeno';
		$this->topic_not_found_message = 'T�ma  nebylo nalezeno. Bu� bylo smaz�no, p�esunuto, nebo neexistuje.';
		$this->topic_offline = 'This member is currently offline'; //Translate
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Volby t�matu';
		$this->topic_pages = 'Pages'; //Translate
		$this->topic_perm_view = 'Nem�te opr�vn�n� prohl�et t�mata.';
		$this->topic_perm_view_guest = 'Nem�te opr�vn�n� prohl�et t�mata. Mus�te se nejprve zaregistrovat.';
		$this->topic_pin = 'Zv�raznit';
		$this->topic_posted = 'Posl�no';
		$this->topic_posts = 'P��sp�vk�';
		$this->topic_print = 'Verze pro tisk';
		$this->topic_quote = 'Do odpov�di "ocitovat" tento p��sp�vek';
		$this->topic_reply = 'Odpov�d�t na t�ma';
		$this->topic_split = 'Spojit';
		$this->topic_split_finish = 'Dokon�it cel� spojen�';
		$this->topic_split_keep = 'Nep�esouvat tento p��sp�vek';
		$this->topic_split_move = 'P�esunout tento p��sp�vek';
		$this->topic_subscribe = 'Zaslat informace na m�j e-mail, pokud se zde objev� nov� p��sp�vek';
		$this->topic_top = 'J�t na za��tek str�nky';
		$this->topic_unlock = 'Odemknout';
		$this->topic_unpin = 'Zru�it zv�razn�n�';
		$this->topic_unreg = 'Neregistrov�n';
		$this->topic_view = 'Prohl�dnout v�sledky';
		$this->topic_viewing = 'Prohl�et t�ma';
		$this->topic_vote = 'Hlasovat';
		$this->topic_vote_count_plur = '%d hlas�';
		$this->topic_vote_count_sing = '%d hlas';
		$this->topic_votes = 'hlas� celkem';
	}

	function universal()
	{
		$this->based_on = 'based on';
		$this->board_by = 'Od:';
		$this->charset = 'windows-1250';
		$this->continue = 'Continue'; //Translate
		$this->delete = 'Delete'; //Translate
		$this->direction = 'ltr'; //Translate
		$this->edit = 'Edit HTML Templates';
		$this->no = 'No'; //Translate
		$this->powered = 'Powered by'; //Translate
		$this->seconds = 'Seconds'; //Translate
		$this->sep_decimals = ',';
		$this->sep_thousands = '.';
		$this->submit = 'Odeslat';
		$this->today = 'dnes';
		$this->yes = 'Yes'; //Translate
		$this->yesterday = 'v�era';
	}
}
?>