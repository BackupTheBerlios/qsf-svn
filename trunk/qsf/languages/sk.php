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
 * Slovak language module
 *
 * @author Anonymous
 * @since 1.1.0
 **/
class sk
{
	function active()
	{
		$this->active_last_action = 'Posledn� akcia';
		$this->active_modules_active = 'Prezeranie akt�vnych u�ivate�ov';
		$this->active_modules_board = 'Prezeranie indexu';
		$this->active_modules_cp = 'Pou�itie ovl�dacieho panela';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Pou��vanie helpu';
		$this->active_modules_login = 'Logging In/Out';
		$this->active_modules_members = 'Prezeranie zoznamu �lenov';
		$this->active_modules_mod = 'Moderovanie';
		$this->active_modules_pm = 'Pou��vanie odkazova�a';
		$this->active_modules_post = 'Prispievanie';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_recent = 'Viewing recent posts'; //Translate
		$this->active_modules_search = 'Vyh�ad�vanie';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = '�as';
		$this->active_user = 'U�ivate�';
		$this->active_users = 'Akt�vni u�ivatelia';
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
		$this->board_active_users = 'Akt�vni u�ivatelia';
		$this->board_birthdays = 'Dnes m� narodeniny:';
		$this->board_bottom_page = 'Go to the bottom of the page'; //Translate
		$this->board_can_post = 'V tomto f�re m�ete zasiela? odpovede.';
		$this->board_can_topics = 'V tomto f�re m�ete ��ta? pr�spevky, ale nem�ete zaklada? nov� t�my.';
		$this->board_cant_post = 'V tomto f�re nem�ete zasiela? odpovede.';
		$this->board_cant_topics = 'V tomto f�re nem�ete ani zaklada? t�my, ani ��ta? pr�spevky.';
		$this->board_forum = 'F�rum';
		$this->board_guests = 'hosts';
		$this->board_last_post = 'Najnov�� pr�spevok';
		$this->board_mark = 'Prezna� v�etky pr�spevky na "pre��tan�"';
		$this->board_mark1 = 'V�etky pr�spevky a f�ra boli prezna�en� na "pre��tan�"';
		$this->board_members = '�lenovia';
		$this->board_message = '%s Spr�va';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Dnes nem� �iadny �len narodeniny.';
		$this->board_nobody = 'Moment�lne nie je �iadny �len online.';
		$this->board_nopost = '�iadne pr�spevky';
		$this->board_noview = 'Nem�te povolenie na ��tanie tohoto f�ra.';
		$this->board_regfirst = 'Nem�te povolenie na ��tanie tohoto f�ra. Po zaregistrovan� sa mo�no budete ma?.';
		$this->board_replies = 'Odpovede';
		$this->board_stats = '�tatistika';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_top_page = 'Go to the top of the page'; //Translate
		$this->board_topics = 'T�my';
		$this->board_topics_new = 'V tomto f�re s� nejak� nov� pr�spevky';
		$this->board_topics_old = 'V tomto f�re nie s� �iadne nov� pr�spevky';
		$this->board_users = 'users'; //Translate
		$this->board_write_topics = 'V tomto f�re m�te pr�vo prezera? t�my a vytv�rat nov� .';
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
		$this->cp_aim = 'AIM Screen Name'; //Translate
		$this->cp_already_member = 'Emailov� adresa, ktor� ste zadali u� bola pridelen� in�mu �lenovi.';
		$this->cp_apr = 'Apr�l';
		$this->cp_aug = 'August'; //Translate
		$this->cp_avatar_current = 'V�e s��asn� prevtelenie';
		$this->cp_avatar_error = 'Chyba prevtelenia';
		$this->cp_avatar_must_select = 'Mus�te si vybra? prevtelenie.';
		$this->cp_avatar_none = 'Nepo��va? prevtelenie.';
		$this->cp_avatar_pixels = 'pixels'; //Translate
		$this->cp_avatar_select = 'Vyberte si prevtelenie';
		$this->cp_avatar_size_height = 'Va�e prevtelenie mus� ma? ve�kost medzi 1 a';
		$this->cp_avatar_size_width = '��rka Va�eho prevtelenia mus� by? medzi 1 a';
		$this->cp_avatar_upload = 'Uploadova? prevtelenie z local HDD';
		$this->cp_avatar_upload_failed = 'Uploadovanie prevtelenia zlyhalo. S�bor neexistuje.';
		$this->cp_avatar_upload_not_image = 'Uploadova? mo�ete iba obr�zky ptr Va�e prevtelenie.';
		$this->cp_avatar_upload_too_large = 'Prevtelenie, ktor� ste zadali pre upload je prive�k�. Maxim�lna povolen� ve�kos? je %d kB.';
		$this->cp_avatar_url = 'Zadajte URL v�ho prevtelenia';
		$this->cp_avatar_use = 'Pou�i? uploadovan� prevtelenie';
		$this->cp_bday = 'Narodeniny';
		$this->cp_been_updated = 'V� profil bol aktualizovan�.';
		$this->cp_been_updated1 = 'Va�e prevtelenie bolo aktualizovan�.';
		$this->cp_been_updated_prefs = 'Va�e nastavenia boli aktualizovan�.';
		$this->cp_changing_pass = 'Zmena hesla';
		$this->cp_contact_pm = 'Dovol�te ostatn�m, aby V�s kontaktovali cez odkazova�?';
		$this->cp_cp = 'Ovl�dac� panel';
		$this->cp_current_avatar = 'Aktu�lne prevtelenie';
		$this->cp_current_time = 'Teraz je %s.';
		$this->cp_custom_title = 'Custom Member Title'; //Translate
		$this->cp_custom_title2 = 'This is a privledge reserved for board administrators'; //Translate
		$this->cp_dec = 'December'; //Translate
		$this->cp_editing_avatar = 'Zmena prevtelenia';
		$this->cp_editing_profile = 'Zmena profilu';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Dovol�te ostatn�m, aby V�s kontaktovali cez email?';
		$this->cp_email_invaid = 'Email, ktor� ste zadali vyzer� by? neplatn�.';
		$this->cp_err_avatar = 'Chyba pri aktualiz�cii prevtelenia.';
		$this->cp_err_updating = 'Chyba pri aktualiz�cii profilu.';
		$this->cp_feb = 'Febru�r';
		$this->cp_file_type = 'Prevtelenie, ktor� ste zadali je neplatn�. Uistite sa, �i m� URL spr�vny form�t a �i je doty�n� s�bor typu gif, jpg alebo png.';
		$this->cp_format = 'Va�e meno sa bude zobrazova? ako';
		$this->cp_gtalk = 'GTalk Account'; //Translate
		$this->cp_header = 'Ovl�dac� panel u�ivate�a';
		$this->cp_height = 'V�ka';
		$this->cp_icq = 'ICQ ��slo';
		$this->cp_interest = 'Z�ujmy';
		$this->cp_jan = 'Janu�r';
		$this->cp_july = 'J�l';
		$this->cp_june = 'J�n';
		$this->cp_label_edit_avatar = 'Zmena prevtelenia';
		$this->cp_label_edit_pass = 'Zmena hesla';
		$this->cp_label_edit_prefs = 'Zmena nastaven�';
		$this->cp_label_edit_profile = 'Zmena profilu';
		$this->cp_label_edit_subs = 'Editovanie objedn�vok';
		$this->cp_language = 'Jazyk';
		$this->cp_less_charac = 'Va�e meno mus� by? krat�ie, ako 32 znakov.';
		$this->cp_location = 'Location'; //Translate
		$this->cp_login_first = 'Pre pr�stup k Va�emu ovl�daciemu panelu sa mus�te nalogova?.';
		$this->cp_mar = 'Marec';
		$this->cp_may = 'M�j';
		$this->cp_msn = 'MSN Identity'; //Translate
		$this->cp_must_orig = 'Va�e meno sa mus� zhodova? s origin�lom. M�ete zmeni? iba ve�kos? a medzery.';
		$this->cp_new_notmatch = 'Nov� hesl�, ktor� ste zadali, sa nezhoduj�.';
		$this->cp_new_pass = 'Nov� heslo';
		$this->cp_no_flash = 'Flash prevtelenia tu nie s� povolen�.';
		$this->cp_not_exist = 'D�tum, ktor� ste zadali (%s), neexistuje!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Oct�ber';
		$this->cp_old_notmatch = 'P�vodn� heslo, ktor� ste zadali sa nezhoduje s heslom v datab�ze.';
		$this->cp_old_pass = 'P�vodn� heslo';
		$this->cp_pass_notvaid = 'Va�e heslo je neplatn�. Uistite sa, �e obsahuje len platn� znaky ako s� p�smen�, ��sla, poml�ka, podtr��tko alebo medzera.';
		$this->cp_preferences = 'Zmena nastaven�';
		$this->cp_privacy = 'Priv�tne mo�nosti';
		$this->cp_repeat_pass = 'E�te raz nov� heslo';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = 'Zobrazova? v profile aj email?';
		$this->cp_signature = 'Podpis';
		$this->cp_size_max = 'Pevtelenie, ktor� ste zadali, je prive�k�. Maxim�lna ve�kos? je povolen� %s na %s pixlov.';
		$this->cp_skin = 'Skin n�stenky';
		$this->cp_sub_change = 'Zmena objedn�vok';
		$this->cp_sub_delete = 'Zmaza?';
		$this->cp_sub_expire = 'D�tum vypr�ania platnosti';
		$this->cp_sub_name = 'N�zov objedn�vky';
		$this->cp_sub_no_params = 'Neboli zadan� �iadne parametre.';
		$this->cp_sub_success = 'You are now subscribed to this %s.'; //Translate
		$this->cp_sub_type = 'Typ objedn�vky';
		$this->cp_sub_updated = 'Ozna�en� objedn�vky boli vymazan�.';
		$this->cp_topic_option = 'Mo�nosti t�my';
		$this->cp_updated = 'Profil bol aktualizovan�';
		$this->cp_updated1 = 'Prevtelenie bolo aktualizovan�';
		$this->cp_updated_prefs = 'Nastavenia boli aktualizovan�';
		$this->cp_user_exists = 'U��vate� s tak�mto menom u� existuje.';
		$this->cp_valided = 'Va�e heslo bolo overen� a zmenen�.';
		$this->cp_view_avatar = 'Uk�za? prevtelenia?';
		$this->cp_view_emoticon = 'Uk�za? smajlikov?';
		$this->cp_view_signature = 'Uk�za? podpisy?';
		$this->cp_welcome = 'Bu�te v�tan� v u�ivate�skom ovl�dacom paneli. Odtia�to mo�no nastavova? Va�e konto. Vyberte si z nasleduj�cich mo�nost�.';
		$this->cp_width = '��rka';
		$this->cp_www = 'Homepage'; //Translate
		$this->cp_yahoo = 'Yahoo Identity'; //Translate
		$this->cp_zone = '�asov� z�na';
	}

	function email()
	{
		$this->email_blocked = 'Tento �len neprij�ma email z tohoto formul�ra.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Obsah emailu:';
		$this->email_no_fields = 'Vr�?te sa o overte, �i s� v�etky polia vyplnen�.';
		$this->email_no_member = '�iaden �len s tak�mto menom sa nena�iel.';
		$this->email_no_perm = 'Nem�te povolenie posiela? emaily z tohoto f�ra.';
		$this->email_sent = 'V� email bol odoslan�.';
		$this->email_subject = 'Predmet:';
		$this->email_to = 'To:'; //Translate
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
		$this->forum_by = 'Nap�sal';
		$this->forum_can_post = 'V tomto f�re m�ete odpoveda?.';
		$this->forum_can_topics = 'V tomto f�re si m�ete prezera? t�my.';
		$this->forum_cant_post = 'V tomto f�re nem�te povolenie odpoveda?.';
		$this->forum_cant_topics = 'V tomto f�re nem�te povolenie prezera? t�my.';
		$this->forum_dot = 'dot(to �o je?)';
		$this->forum_dot_detail = 'ukazuje, �e ste pod dan� t�mu prispeli';
		$this->forum_forum = 'F�rum';
		$this->forum_guest = 'Guest'; //Translate
		$this->forum_hot = 'd�le�it�';
		$this->forum_icon = 'Ikona spr�vy';
		$this->forum_jump = 'Hop na najnov�ie pr�spevky pod touto t�mou';
		$this->forum_last = 'Najnov�� pr�spevok';
		$this->forum_locked = 'Zamknut�';
		$this->forum_moved = 'Presunut�';
		$this->forum_msg = '%s Spr�va';
		$this->forum_new = 'nov�';
		$this->forum_new_poll = 'Zalo�i? nov� hlasovanie';
		$this->forum_new_topic = 'Zalo�i? nov� t�mu';
		$this->forum_no_topics = 'V tomto f�re nie s� �iadne t�my.';
		$this->forum_noexist = 'Zadan� f�rum neexistuje.';
		$this->forum_nopost = 'Nie s� pr�spevky';
		$this->forum_not = 'm�lo';
		$this->forum_noview = 'Nem�te povolenie na prezeranie f�r.';
		$this->forum_pages = 'Str�nky';
		$this->forum_pinned = 'Pri�pendlen�';
		$this->forum_pinned_topic = 'Pri�pendlen� t�ma';
		$this->forum_poll = 'Hlasovanie';
		$this->forum_regfirst = 'Nem�te povolenie na prezeranie f�r. Ak sa zaregistrujete, mo�no budete ma?.';
		$this->forum_replies = 'Odpovede';
		$this->forum_starter = 'Zakladate�';
		$this->forum_sub = 'Pod-F�rum';
		$this->forum_sub_last_post = 'Najnov�� pr�spevok';
		$this->forum_sub_replies = 'Odpovede';
		$this->forum_sub_topics = 'T�my';
		$this->forum_subscribe = 'Posla? emailom nov� pr�spovky v tomto f�re';
		$this->forum_topic = 'T�ma';
		$this->forum_topics_new = 'V tomto f�re s� nejak� nov� pr�spevky.';
		$this->forum_topics_old = 'V tomto f�re nie s� �iadne nov� pr�spevky';
		$this->forum_views = 'Viden�';
		$this->forum_write_topics = 'V tomto f�re m�te povolenie zaklada? t�my.';
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
		$this->help_available_files = 'H�lp';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'V datab�ze nie s� �iadne s�bory s helpom';
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
		$this->login_cant_logged = 'Pravdepodobne nie ste prihl�sen�. Sk�ste skontrolova? V� login a heslo.<br /><br />S� citliv� na ve�k� a mal� znaky, tak�e \'UsErNaMe\' nie je to ist�, �o \'Username\'. A taktie� si overte, �i s� vo Va�om prehliada�i povolen� cookies.';
		$this->login_cookies = 'Pre nalogovanie mus�te povoli? cookies.';
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = 'Logging In'; //Translate
		$this->login_logged = 'Teraz ste nalogovan�.';
		$this->login_now_out = 'Teraz ste odlogovan�.';
		$this->login_out = 'Logging Out'; //Translate
		$this->login_pass = 'Heslo';
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = '\'%s\', ur�ite sa chcete odhl�si??';
		$this->login_user = 'Meno u�ivate�a';
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
		$this->main_activate = 'V� ��et e�te nebol aktivovan�.';
		$this->main_activate_resend = 'Znovu posla? aktiva�n� email';
		$this->main_admincp = 'nastavenia f�r';
		$this->main_banned = 'V�m bolo �ia� komplet cel� f�rum zatrhnut�.';
		$this->main_code = 'Code'; //Translate
		$this->main_cp = 'ovl�dac� panel';
		$this->main_full = 'Full'; //Translate
		$this->main_help = 'h�lp';
		$this->main_load = 'load'; //Translate
		$this->main_login = 'login'; //Translate
		$this->main_logout = 'logout'; //Translate
		$this->main_mark = 'mark all'; //Translate
		$this->main_mark1 = 'Mark all topics as read'; //Translate
		$this->main_max_load = 'Je n�m ��to, ale %s moment�lne nie je dostupn� k�li stra�nej mase online u�ivate�ov.';
		$this->main_members = '�lenovia';
		$this->main_messenger = 'odkazova�';
		$this->main_new = 'nov�';
		$this->main_next = 'nasleduj�ce';
		$this->main_prev = 'predo�l�';
		$this->main_queries = 'DB dotazov';
		$this->main_quote = 'Cit�cia';
		$this->main_recent = 'recent posts'; //Translate
		$this->main_recent1 = 'View recent topics since your last visit'; //Translate
		$this->main_register = 'registr�cia';
		$this->main_reminder = 'HoSiPa';
		$this->main_reminder_closed = 'F�rum je uzavret� a pr�stupn� len pre adminov.';
		$this->main_said = 'poviedali';
		$this->main_search = 'h�adanie';
		$this->main_welcome = 'Vitajte';
		$this->main_welcome_guest = 'Vitajte!';
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
		$this->members_all = 'v�etko';
		$this->members_email = 'email';
		$this->members_email_member = 'po�li email tomuto �lenovi';
		$this->members_group = 'skupina';
		$this->members_joined = 'registr�cia';
		$this->members_list = 'zoznam �lenov';
		$this->members_member = '�len';
		$this->members_pm = 'odkazova�';
		$this->members_posts = 'pr�spevky';
		$this->members_send_pm = 'posla? tomuto �lenovi odkaz';
		$this->members_title = 'titul';
		$this->members_vist_www = 'nav�t�vi? webstr�nku tohoto �lena';
		$this->members_www = 'webstr�nka';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Ur�ite chcete zmaza? tento pr�spevok?';
		$this->mod_confirm_topic_delete = 'Ur�ite chcete zmaza? t�to t�mu?';
		$this->mod_error_first_post = 'Nem�ete zmaza? prv� pr�spevok pod t�mou.';
		$this->mod_error_move_category = 'Nem�ete presun�? t�mu do kateg�rie.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Nem�ete presun�? t�mu do f�ra. ktor� neexistuje.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Nem�ete presun�? t�mu do f�ra, v ktorom sa moment�lne nach�dza.';
		$this->mod_label_controls = 'Moderator Controls'; //Translate
		$this->mod_label_description = 'Popis';
		$this->mod_label_emoticon = 'Konvertova? textov�ch smajlikov na obr�zky?';
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'Format MbCode?'; //Translate
		$this->mod_label_move_to = 'Presun�? ..';
		$this->mod_label_options = 'Mo�nosti';
		$this->mod_label_post_delete = 'Zmaza? pr�spevok';
		$this->mod_label_post_edit = 'Editova? pr�spevok';
		$this->mod_label_title = 'Nadpis';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'Zmaza? t�mu';
		$this->mod_label_topic_edit = 'Editova? t�mu';
		$this->mod_label_topic_lock = 'Zamkn�? t�mu';
		$this->mod_label_topic_move = 'Presun�? t�mu';
		$this->mod_label_topic_move_complete = 'Kompletne presun�? t�mu do nov�ho f�ra';
		$this->mod_label_topic_move_link = 'Presun�? t�mu do nov�ho f�ra a zanecha? link na nov� umiestnenie v p�vodnom f�re.';
		$this->mod_label_topic_pin = 'Pri�pendli? t�mu';
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = '�pecifikovan� pr�spevok neexistuje.';
		$this->mod_missing_topic = '�pecifikovan� t�ma neexistuje.';
		$this->mod_no_action = 'Mus�te �pecifikova? �innos?.';
		$this->mod_no_post = 'Mus�te �pecifikova? pr�spevok.';
		$this->mod_no_topic = 'Mus�te �pecifikova? t�mu.';
		$this->mod_perm_post_delete = 'Nem�te povolenie na zmazanie tohoto pr�spevku.';
		$this->mod_perm_post_edit = 'Nem�te povolenie na edit�ciu tohoto pr�spevku.';
		$this->mod_perm_topic_delete = 'Nem�te povolenie na zmazanie tejto t�my.';
		$this->mod_perm_topic_edit = 'Nem�te povolenie na edit�ciu tejto t�my.';
		$this->mod_perm_topic_lock = 'Nem�te povolenie na zamknutie tejto t�my.';
		$this->mod_perm_topic_move = 'Nem�te povolenie na pres�vanie tejto t�my.';
		$this->mod_perm_topic_pin = 'Nem�te povolenie na pri�pendlenie tejto t�my.';
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = 'Nem�te povolenie na odomknutie tejto t�my.';
		$this->mod_perm_topic_unpin = 'Nem�te povolenie na od�pendlenie tejto t�my.';
		$this->mod_success_post_delete = 'Pr�spevok bol �spe�ne zmazan�.';
		$this->mod_success_post_edit = 'Pr�spevok bol �spe�ne zeditovan�.';
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'T�ma bola �spe�ne zmazan�';
		$this->mod_success_topic_edit = 'T�ma bola �spe�ne zeditovan�.';
		$this->mod_success_topic_move = 'T�ma bola �spe�ne presunut� do nov�ho f�ra.';
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
		$this->pm_cant_del = 'Nem�te povolenie zmaza? tento odkaz.';
		$this->pm_delallmsg = 'Zmaza? v�etky odkazy';
		$this->pm_delete = 'Zmaza?';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = 'Odkaz bol zmazan�.';
		$this->pm_deleted_all = 'Odkazy boli zmazan�.';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'V� odkaz sa ned� posla?. Uistite sa, �e ster vyplnili v�etky povinn� polia.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Inbox'; //Translate
		$this->pm_folder_new = '%s new'; //Translate
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Od';
		$this->pm_group = 'Skupina';
		$this->pm_guest = 'Ako n�v�tevn�k (guest) nem�te povolenie pou��va? odkazova�. Pros�m nalogujte sa alebo sa zaregistrujte.. alebo sa dajte vypcha?.';
		$this->pm_joined = 'Registr�cia';
		$this->pm_messenger = 'Odkazova�';
		$this->pm_msgtext = 'Text odkazu';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Mus�te zada? adres�r.';
		$this->pm_no_member = 'Tak�to ID nem� �iadny �len.';
		$this->pm_no_number = 'Tak�to ��slo nem� �iadny odkaz.';
		$this->pm_no_title = 'Ch�ba predmet';
		$this->pm_nomsg = 'V tomto adres�ri nie s� �iadne odkazy.';
		$this->pm_noview = 'Nem�te povolenie prezera? si tento odkaz.';
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_personal = 'Odkazova�';
		$this->pm_personal_msging = 'Posielanie odkazu';
		$this->pm_pm = 'PM'; //Translate
		$this->pm_posts = 'Pr�spevky';
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Odpoveda?';
		$this->pm_send = 'Posla?';
		$this->pm_sendamsg = 'Posla? odkaz';
		$this->pm_sendingpm = 'Posielanie odkazu';
		$this->pm_sendon = 'Odoslan� v';
		$this->pm_success = 'V� odkaz bol �spe�ne zaslan�.';
		$this->pm_sure_del = 'Ur�ite chcete zmaza? tento odkaz?';
		$this->pm_sure_delall = 'Ur�ite chcete zmaza? v�etky odkazy v tomto adres�ri?';
		$this->pm_title = 'Nadpis';
		$this->pm_to = 'To'; //Translate
	}

	function post()
	{
		$this->post_attach = 'Pr�lohy';
		$this->post_attach_add = 'Prida? pr�lohu';
		$this->post_attach_disrupt = 'Prid�vanie alebo uberanie pr�loh nenaru�� V� pr�spevok.';
		$this->post_attach_failed = 'Upload pr�lohy neuspel. S�bor, ktor� ste �pecifikovali asi neexistuje.';
		$this->post_attach_not_allowed = 'S�bory tohoto typu nemo�no prilo�i?.';
		$this->post_attach_remove = 'Odobra? pr�lohu';
		$this->post_attach_too_large = '�pecifikovan� s�bor je prive�k�. Maxim�lna povolen� ve�kos? je %d kB.';
		$this->post_cant_create = 'Ako n�v�tevn�k (guest) nem�te povolenie zaklada? t�my. Ak sa zaregistrujete, mo�no budete ma?.';
		$this->post_cant_create1 = 'Nem�te povolenie zaklada? t�my.';
		$this->post_cant_enter = 'Va�e hlasovanie je neplatn�. bu� ste o tejto ot�zke u� hlasovali alebo nem�te povolenie hlasova?.';
		$this->post_cant_poll = 'Ako n�v�tevn�k (guest) nem�te povolenie zaklada? hlasovania. Ak sa zaregistrujete, mo�no budete ma?.';
		$this->post_cant_poll1 = 'Nem�te povolenie zaklada? hlasovania.';
		$this->post_cant_reply = 'Nem�te povolenie odpoveda? na t�my pod t�mto f�rom.';
		$this->post_cant_reply1 = 'Ako n�v�tevn�k (guest) nem�te povolenie odpoveda? na t�my. Ak sa zaregistrujete, mo�no budete ma?.';
		$this->post_cant_reply2 = 'Nem�te povolenie odpoveda? na t�my.';
		$this->post_closed = 'T�ma bola uzavret�.';
		$this->post_create_poll = 'Zalo�i? hlasovanie';
		$this->post_create_topic = 'Zalo�i? t�mu';
		$this->post_creating = 'Zalo�enie t�my';
		$this->post_creating_poll = 'Zalo�enie hlasovania';
		$this->post_flood = 'Poslali ste pr�spevok v priebehu uplynul�ch %s sek�nd a pr�ve teraz asi nebude mo�n� znova prispie?.<br /><br />Pros�m, sk�ste to znova za nieko�ko sek�nd.';
		$this->post_guest = 'Guest'; //Translate
		$this->post_icon = 'Ikona pr�spevku';
		$this->post_last_five = 'Posledn�ch p�? pr�spevkov v opa�nom porad�';
		$this->post_length = 'Kontrola d�ky';
		$this->post_mbcode_address = 'Zadajte adresu';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Blue'; //Translate
		$this->post_mbcode_bold = 'Bold'; //Translate
		$this->post_mbcode_bold1 = 'B'; //Translate
		$this->post_mbcode_chocolate = 'Chocolate'; //Translate
		$this->post_mbcode_code = 'Code'; //Translate
		$this->post_mbcode_color = 'Color'; //Translate
		$this->post_mbcode_coral = 'Coral'; //Translate
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'Dark Blue'; //Translate
		$this->post_mbcode_darkred = 'Dark Red'; //Translate
		$this->post_mbcode_deepink = 'Deep Pink'; //Translate
		$this->post_mbcode_detail = 'Zadajte popis';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'Firebrick Red'; //Translate
		$this->post_mbcode_font = 'Font'; //Translate
		$this->post_mbcode_green = 'Green'; //Translate
		$this->post_mbcode_huge = 'Huge'; //Translate
		$this->post_mbcode_image = 'Image'; //Translate
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Italic'; //Translate
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Large'; //Translate
		$this->post_mbcode_length = 'V� pr�spevok m� "+length+" znakov.';
		$this->post_mbcode_limegreen = 'Lime Green'; //Translate
		$this->post_mbcode_medium = 'Medium'; //Translate
		$this->post_mbcode_orange = 'Orange'; //Translate
		$this->post_mbcode_orangered = 'Orange Red'; //Translate
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Purple'; //Translate
		$this->post_mbcode_quote = 'Quote'; //Translate
		$this->post_mbcode_red = 'Red'; //Translate
		$this->post_mbcode_royalblue = 'Royal Blue'; //Translate
		$this->post_mbcode_sandybrown = 'Sandy Brown'; //Translate
		$this->post_mbcode_seagreen = 'Sea Green'; //Translate
		$this->post_mbcode_sienna = 'Sienna'; //Translate
		$this->post_mbcode_silver = 'Silver'; //Translate
		$this->post_mbcode_size = 'Size'; //Translate
		$this->post_mbcode_skyblue = 'Sky Blue'; //Translate
		$this->post_mbcode_small = 'Small'; //Translate
		$this->post_mbcode_strike = 'Strikethrough'; //Translate
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Tiny'; //Translate
		$this->post_mbcode_tomato = 'Tomato'; //Translate
		$this->post_mbcode_underline = 'Underline'; //Translate
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Burly Wood'; //Translate
		$this->post_mbcode_yellow = 'Yellow'; //Translate
		$this->post_msg = 'Pr�spevok';
		$this->post_must_msg = 'Mus�te e�te nap�sa? samotn� odkaz.';
		$this->post_must_options = 'Mus�te zada? mo�n� odpovede pre nov� hlasovanie.';
		$this->post_must_title = 'Mus�te zada? nadpis pre nov� t�mu.';
		$this->post_new_poll = 'Nov� hlasovanie';
		$this->post_new_topic = 'Nov� t�ma';
		$this->post_no_forum = 'Toto f�rum sa nena�lo.';
		$this->post_no_topic = 'Ne�pecifikovali ste t�mu.';
		$this->post_no_vote = 'Ak chcete hlasova?, je vhodn� zvoli? si odpove�.';
		$this->post_option_emoticons = 'Konvertova? textov�ch smajlikov na obr�zky?';
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'Format MbCode?'; //Translate
		$this->post_optional = 'nepovinn�';
		$this->post_options = 'Mo�nosti';
		$this->post_poll_options = 'Moznosti hlasovania';
		$this->post_poll_row = 'Jeden na riadok';
		$this->post_posted = 'Zaslan�: ';
		$this->post_posting = 'Posiela sa';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Odpoveda?';
		$this->post_reply_topic = 'Odpoveda? na t�mu';
		$this->post_replying = 'Odpoved� sa na t�mu';
		$this->post_replying1 = 'Odpoved� sa';
		$this->post_smiles = 'Smajlici (kliknut�m vlo�i?)';
		$this->post_too_many_options = 'Hlasovanie mus� ma? minim�lne 2 a maxim�lne %d mo�n�ch odpoved�.';
		$this->post_topic_detail = 'Popis t�my';
		$this->post_topic_title = 'Nadpis t�my';
		$this->post_view_topic = 'Uk�za? cel� t�mu';
		$this->post_voting = 'Hlasuje sa';
	}

	function printer()
	{
		$this->printer_back = 'Back'; //Translate
		$this->printer_not_found = 'T�ma sa nena�la. Mo�no bola zmazan�, presunut� alebo v�bec nebola.';
		$this->printer_not_found_title = 'T�ma sa nena�la';
		$this->printer_perm_topics = 'Nem�te povolenie na prezeranie t�m.';
		$this->printer_perm_topics_guest = 'Nem�te povolenie na prezeranie t�m. Ak sa zaregistrujete, mo�no budete ma?.';
		$this->printer_posted_on = 'Zaslan�: ';
		$this->printer_send = 'Odosla? na tla�iare�';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM Name'; //Translate
		$this->profile_av_sign = 'Prevtelenie a podpis';
		$this->profile_avatar = 'Prevtelenie';
		$this->profile_bday = 'Narodeniny';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'Emailov� adresa';
		$this->profile_fav = 'Ob��ben� f�rum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = 'ICQ Number'; //Translate
		$this->profile_info = 'Information'; //Translate
		$this->profile_interest = 'Za�uby';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Najnov�� pr�spevok';
		$this->profile_list = 'Zoznam �lenov';
		$this->profile_location = 'Location'; //Translate
		$this->profile_member = 'Skupina �lenov';
		$this->profile_member_title = 'Titul �lena';
		$this->profile_msn = 'MSN Identity'; //Translate
		$this->profile_must_user = 'Ak si chcete prezrie? profil, mus�te �pecifikova? u�ivate�a.';
		$this->profile_no_member = 'S tak�mto ID nem�me �iadneho u�ivate�a. Mo�no bolo toto konto zru�en�.';
		$this->profile_none = '[ None(ni� tu nie je) ]';
		$this->profile_not_post = 'e�te sa to nezaslalo.';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Odkazy';
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'Pr�spevky';
		$this->profile_private = '[ S�kromno ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Podpis';
		$this->profile_unkown = '[ Nezn�mo ]';
		$this->profile_view_profile = 'Prezeranie profilu';
		$this->profile_www = 'Homepage'; //Translate
		$this->profile_yahoo = 'Yahoo Identity'; //Translate
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
		$this->recent_by = 'Nap�sal';
		$this->recent_can_post = 'V tomto f�re m�ete odpoveda?.';
		$this->recent_can_topics = 'V tomto f�re si m�ete prezera? t�my.';
		$this->recent_cant_post = 'V tomto f�re nem�te povolenie odpoveda?.';
		$this->recent_cant_topics = 'V tomto f�re nem�te povolenie prezera? t�my.';
		$this->recent_dot = 'dot(to �o je?)';
		$this->recent_dot_detail = 'ukazuje, �e ste pod dan� t�mu prispeli';
		$this->recent_forum = 'F�rum';
		$this->recent_guest = 'Guest'; //Translate
		$this->recent_hot = 'd�le�it�';
		$this->recent_icon = 'Ikona spr�vy';
		$this->recent_jump = 'Hop na najnov�ie pr�spevky pod touto t�mou';
		$this->recent_last = 'Najnov�� pr�spevok';
		$this->recent_locked = 'Zamknut�';
		$this->recent_moved = 'Presunut�';
		$this->recent_msg = '%s Spr�va';
		$this->recent_new = 'nov�';
		$this->recent_new_poll = 'Zalo�i? nov� hlasovanie';
		$this->recent_new_topic = 'Zalo�i? nov� t�mu';
		$this->recent_no_topics = 'V tomto f�re nie s� �iadne t�my.';
		$this->recent_noexist = 'Zadan� f�rum neexistuje.';
		$this->recent_nopost = 'Nie s� pr�spevky';
		$this->recent_not = 'm�lo';
		$this->recent_noview = 'Nem�te povolenie na prezeranie f�r.';
		$this->recent_pages = 'Str�nky';
		$this->recent_pinned = 'Pri�pendlen�';
		$this->recent_pinned_topic = 'Pri�pendlen� t�ma';
		$this->recent_poll = 'Hlasovanie';
		$this->recent_regfirst = 'Nem�te povolenie na prezeranie f�r. Ak sa zaregistrujete, mo�no budete ma?.';
		$this->recent_replies = 'Odpovede';
		$this->recent_starter = 'Zakladate�';
		$this->recent_sub = 'Pod-F�rum';
		$this->recent_sub_last_post = 'Najnov�� pr�spevok';
		$this->recent_sub_replies = 'Odpovede';
		$this->recent_sub_topics = 'T�my';
		$this->recent_subscribe = 'Posla? emailom nov� pr�spovky v tomto f�re';
		$this->recent_topic = 'T�ma';
		$this->recent_topics_new = 'V tomto f�re s� nejak� nov� pr�spevky.';
		$this->recent_topics_old = 'V tomto f�re nie s� �iadne nov� pr�spevky';
		$this->recent_views = 'Viden�';
		$this->recent_write_topics = 'V tomto f�re m�te povolenie zaklada? t�my.';
	}

	function register()
	{
		$this->register_activated = 'Va�e konto bolo aktivovan�!';
		$this->register_activating = 'Aktiv�cia konta';
		$this->register_activation_error = 'Aktivovanie Va�eho konta zlyhalo. Skontrolujte, �i je vo Va�om prehliada�i pl� URL cesta z aktiva�n�ho emailu. Ak probl�m zotrv�va, skontaktujte sa s administr�torom f�ra.';
		$this->register_confirm_passwd = 'Potvrdenie hesla';
		$this->register_done = 'Boli ste zaregistrovan�! Teraz sa m�ete nalogova?.';
		$this->register_email = 'Emailov� adresa';
		$this->register_email_invalid = 'Zadan� emailov� adresa je neplatn�.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'Zadan� emailov� adresa u� bola pridelen� in�mu �lenovi.';
		$this->register_fields = 'Neboli vyplnen� v�etky polia.';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'Boli ste zaregistrovan�. Na adresu %s bol zaslan� email s inform�ciami oo aktiv�cii Va�eho konta. Va�e konto bude obmedzen�, pokia� si ho neaktivujete.';
		$this->register_name_invalid = 'Zadan� meno je pridlh�.';
		$this->register_name_taken = 'Toto �lensk� meno je u� obsaden�.';
		$this->register_new_user = '�elan� �lensk� meno';
		$this->register_pass_invalid = 'Zadan� heslo je neplatn�. Uistite sa, �e pou��vate len platn� znaky ako s� p�smen�, ��sla, poml�ka, podtr��tko alebo medzera a obsahuje aspo� 5 znakov.';
		$this->register_pass_match = 'Hesl�, ktor� ste zadali sa nezhoduj�.';
		$this->register_passwd = 'Password'; //Translate
		$this->register_reg = 'Registr�cia';
		$this->register_reging = 'Prebieha registr�cia';
	}

	function rssfeed()
	{
		$this->rssfeed_posted_by = 'Posted by'; //Translate
	}

	function search()
	{
		$this->search_advanced = '�al�ie mo�nosti';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Z�kladn� vyh�ad�vanie';
		$this->search_characters = 'znakov z pr�spevku';
		$this->search_day = 'de�';
		$this->search_days = 'dni';
		$this->search_exact_name = 'presn� n�zov';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'H�ada?';
		$this->search_forum = 'F�rum';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Guest'; //Translate
		$this->search_in = 'H�ada? v';
		$this->search_in_posts = 'H�ada? iba v pr�spevkoch';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Registr�cia';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'H�adanie (presn� zhoda)';
		$this->search_matches = 'N�lezy';
		$this->search_month = 'mesiac';
		$this->search_months = 'mesiace';
		$this->search_mysqldoc = 'MySQL Documentation'; //Translate
		$this->search_newer = 'nov��ch';
		$this->search_no_results = 'Va�e h�adanie dopadlo bezv�sledne.';
		$this->search_no_words = 'Ak chcete vyh�ad�va?, mus�te zada? nejak� slov�.<br /><br />Ka�d� slovo mus� ma? viac ako 3 znaky vr�tane p�smen, ��siel, apostrofov a podtr��tok.';
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = 'star��ch';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Zobrazi? len prv�ch';
		$this->search_partial_name = '�iasto�n� n�zov name';
		$this->search_post_icon = 'Post Icon'; //Translate
		$this->search_posted_on = 'Zaslan�: ';
		$this->search_posts = 'Pr�spevky';
		$this->search_posts_by = 'Len pr�spevky od u��vate�a';
		$this->search_regex = 'H�ada? pomocou regul�rnych v�razov';
		$this->search_regex_failed = 'V� regul�rny v�raz neuspel. Pros�m prezrite si MySQL documentation, sta? o regul�rnych v�razoch.';
		$this->search_relevance = 'Platnos? pr�spevku: %d%%';
		$this->search_replies = 'Pr�spevky';
		$this->search_result = 'V�sledky h�adania';
		$this->search_search = 'Za�a? h�adanie';
		$this->search_select_all = 'ka�dom';
		$this->search_show_posts = 'Zobrazi? odpovedaj�ce pr�spevky';
		$this->search_sound = 'H�ada? pod�a zvuku (sound)';
		$this->search_starter = 'Zakladate�';
		$this->search_than = 'than'; //Translate
		$this->search_topic = 'T�ma';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 't�de�';
		$this->search_weeks = 't�dne';
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
		$this->topic_attached = 'Prilo�en� s�bor:';
		$this->topic_attached_downloads = 'downloads'; //Translate
		$this->topic_attached_perm = 'Nem�te povolenie na download tohoto s�boru.';
		$this->topic_attached_title = 'Nadpis prilo�en�ho s�boru';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = 'Zalo�i? nov� hlasovanie';
		$this->topic_create_topic = 'Zalo�i? nov� t�mu';
		$this->topic_delete = 'Zmaza?';
		$this->topic_delete_post = 'Zmaza? tento pr�spevok';
		$this->topic_edit = 'Editova?';
		$this->topic_edit_post = 'Editova? tento pr�spevok';
		$this->topic_edited = 'Naposledy editovan� v %s u�ivate�om %s';
		$this->topic_error = 'Error'; //Translate
		$this->topic_group = 'Skupina';
		$this->topic_guest = 'N�v�tevn�k (Guest)';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Registr�cia';
		$this->topic_level = '�lensk� level';
		$this->topic_links_aim = 'Zasla? AIM spr�vu u�ivate�ovi %s';
		$this->topic_links_email = 'Zasla? email u�ivate�ovi %s';
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'Zasla? ICQ spr�vu u�ivate�ovi %s';
		$this->topic_links_msn = 'Zobrazi?  MSN profil u�ivate�a %s';
		$this->topic_links_pm = 'Zasla? odkaz u�ivate�ovi %s';
		$this->topic_links_web = 'Nav�t�vi? web str�nku u�ivate�a %s';
		$this->topic_links_yahoo = 'Zasla?S spr�vu pomocou Yahoo! Messengera u�ivate�ovi %s';
		$this->topic_lock = 'Zamkn�?';
		$this->topic_locked = 'T�ma je zamknut�';
		$this->topic_move = 'Presun�?';
		$this->topic_no_votes = 'Tu e�te nikto nehlasoval.';
		$this->topic_not_found = 'T�ma sa nena�la';
		$this->topic_not_found_message = 'T�ma sa nena�la. Mo�no bola zmazan�, presunut� alebo nebola v�bec.';
		$this->topic_offline = 'This member is currently offline'; //Translate
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Mo�nosti t�my';
		$this->topic_pages = 'Str�nky';
		$this->topic_perm_view = 'Nem�te povolenie na prezeranie t�m.';
		$this->topic_perm_view_guest = 'Nem�te povolenie na prezeranie t�m. Ak sa zaregistrujete, mo�no budete ma?.';
		$this->topic_pin = 'Pri�pendli?';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = 'Pr�spevky';
		$this->topic_print = 'Zobrazi? vytla�i�n� verziu';
		$this->topic_quote = 'Odpoveda? s cit�ciou z tohoto pr�spevku';
		$this->topic_reply = 'Odpoveda? na t�mu';
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = 'Zasielanie emailu s dopove�ami na t�to t�mu';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'Odomkn�?';
		$this->topic_unpin = 'Od�penli?';
		$this->topic_unreg = 'Neregistrovan�';
		$this->topic_view = 'Zobrazi? v�sledky';
		$this->topic_viewing = 'Prezeranie t�m';
		$this->topic_vote = 'Zahlasova?';
		$this->topic_vote_count_plur = '%d hlasov';
		$this->topic_vote_count_sing = '%d hlas';
		$this->topic_votes = 'Hlasovania';
	}

	function universal()
	{
		$this->based_on = 'based on';
		$this->board_by = 'Od';
		$this->charset = 'windows-1250';
		$this->continue = 'Continue'; //Translate
		$this->delete = 'Delete'; //Translate
		$this->direction = 'ltr'; //Translate
		$this->edit = 'Edit HTML Templates';
		$this->no = 'No'; //Translate
		$this->powered = 'Powered by'; //Translate
		$this->seconds = 'Seconds'; //Translate
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->submit = 'OK';
		$this->today = 'Today'; //Translate
		$this->yes = 'Yes'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}
}
?>