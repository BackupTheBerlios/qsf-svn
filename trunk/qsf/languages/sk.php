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
		$this->active_last_action = 'Posledná akcia';
		$this->active_modules_active = 'Prezeranie aktívnych uživate¾ov';
		$this->active_modules_board = 'Prezeranie indexu';
		$this->active_modules_cp = 'Použitie ovládacieho panela';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Používanie helpu';
		$this->active_modules_login = 'Logging In/Out';
		$this->active_modules_members = 'Prezeranie zoznamu èlenov';
		$this->active_modules_mod = 'Moderovanie';
		$this->active_modules_pm = 'Používanie odkazovaèa';
		$this->active_modules_post = 'Prispievanie';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_recent = 'Viewing recent posts'; //Translate
		$this->active_modules_search = 'Vyh¾adávanie';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'Èas';
		$this->active_user = 'Uživate¾';
		$this->active_users = 'Aktívni uživatelia';
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
		$this->admin_heading = 'Quicksilver Forums Admin Control Panel'; //Translate
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
		$this->board_active_users = 'Aktívni uživatelia';
		$this->board_birthdays = 'Dnes má narodeniny:';
		$this->board_bottom_page = 'Go to the bottom of the page'; //Translate
		$this->board_can_post = 'V tomto fóre môžete zasiela? odpovede.';
		$this->board_can_topics = 'V tomto fóre môžete èíta? príspevky, ale nemôžete zaklada? nové témy.';
		$this->board_cant_post = 'V tomto fóre nemôžete zasiela? odpovede.';
		$this->board_cant_topics = 'V tomto fóre nemôžete ani zaklada? témy, ani èíta? príspevky.';
		$this->board_forum = 'Fórum';
		$this->board_guests = 'hosts';
		$this->board_last_post = 'Najnovší príspevok';
		$this->board_mark = 'Preznaè všetky príspevky na "preèítané"';
		$this->board_mark1 = 'Všetky príspevky a fóra boli preznaèené na "preèítané"';
		$this->board_members = 'èlenovia';
		$this->board_message = '%s Správa';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Dnes nemá žiadny èlen narodeniny.';
		$this->board_nobody = 'Momentálne nie je žiadny èlen online.';
		$this->board_nopost = 'Žiadne príspevky';
		$this->board_noview = 'Nemáte povolenie na èítanie tohoto fóra.';
		$this->board_regfirst = 'Nemáte povolenie na èítanie tohoto fóra. Po zaregistrovaní sa možno budete ma?.';
		$this->board_replies = 'Odpovede';
		$this->board_stats = 'Štatistika';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_top_page = 'Go to the top of the page'; //Translate
		$this->board_topics = 'Témy';
		$this->board_topics_new = 'V tomto fóre sú nejaké nové príspevky';
		$this->board_topics_old = 'V tomto fóre nie sú žiadne nové príspevky';
		$this->board_users = 'users'; //Translate
		$this->board_write_topics = 'V tomto fóre máte právo prezera? témy a vytvárat nové .';
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
		$this->cp_already_member = 'Emailová adresa, ktorú ste zadali už bola pridelená inému èlenovi.';
		$this->cp_apr = 'Apríl';
		$this->cp_aug = 'August'; //Translate
		$this->cp_avatar_current = 'Váše súèasné prevtelenie';
		$this->cp_avatar_error = 'Chyba prevtelenia';
		$this->cp_avatar_must_select = 'Musíte si vybra? prevtelenie.';
		$this->cp_avatar_none = 'Nepožíva? prevtelenie.';
		$this->cp_avatar_pixels = 'pixels'; //Translate
		$this->cp_avatar_select = 'Vyberte si prevtelenie';
		$this->cp_avatar_size_height = 'Vaše prevtelenie musí ma? ve¾kost medzi 1 a';
		$this->cp_avatar_size_width = 'Šírka Vašeho prevtelenia musí by? medzi 1 a';
		$this->cp_avatar_upload = 'Uploadova? prevtelenie z local HDD';
		$this->cp_avatar_upload_failed = 'Uploadovanie prevtelenia zlyhalo. Súbor neexistuje.';
		$this->cp_avatar_upload_not_image = 'Uploadova? možete iba obrázky ptr Vaše prevtelenie.';
		$this->cp_avatar_upload_too_large = 'Prevtelenie, ktoré ste zadali pre upload je prive¾ké. Maximálna povolená ve¾kos? je %d kB.';
		$this->cp_avatar_url = 'Zadajte URL vášho prevtelenia';
		$this->cp_avatar_use = 'Použi? uploadované prevtelenie';
		$this->cp_bday = 'Narodeniny';
		$this->cp_been_updated = 'Váš profil bol aktualizovaný.';
		$this->cp_been_updated1 = 'Vaše prevtelenie bolo aktualizované.';
		$this->cp_been_updated_prefs = 'Vaše nastavenia boli aktualizované.';
		$this->cp_changing_pass = 'Zmena hesla';
		$this->cp_contact_pm = 'Dovolíte ostatným, aby Vás kontaktovali cez odkazovaè?';
		$this->cp_cp = 'Ovládací panel';
		$this->cp_current_avatar = 'Aktuálne prevtelenie';
		$this->cp_current_time = 'Teraz je %s.';
		$this->cp_custom_title = 'Custom Member Title'; //Translate
		$this->cp_custom_title2 = 'This is a privledge reserved for board administrators'; //Translate
		$this->cp_dec = 'December'; //Translate
		$this->cp_editing_avatar = 'Zmena prevtelenia';
		$this->cp_editing_profile = 'Zmena profilu';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Dovolíte ostatným, aby Vás kontaktovali cez email?';
		$this->cp_email_invaid = 'Email, ktorý ste zadali vyzerá by? neplatný.';
		$this->cp_err_avatar = 'Chyba pri aktualizácii prevtelenia.';
		$this->cp_err_updating = 'Chyba pri aktualizácii profilu.';
		$this->cp_feb = 'Február';
		$this->cp_file_type = 'Prevtelenie, ktoré ste zadali je neplatné. Uistite sa, èi má URL správny formát a èi je dotyèný súbor typu gif, jpg alebo png.';
		$this->cp_format = 'Vaše meno sa bude zobrazova? ako';
		$this->cp_gtalk = 'GTalk Account'; //Translate
		$this->cp_header = 'Ovládací panel uživate¾a';
		$this->cp_height = 'Výška';
		$this->cp_icq = 'ICQ èíslo';
		$this->cp_interest = 'Záujmy';
		$this->cp_jan = 'Január';
		$this->cp_july = 'Júl';
		$this->cp_june = 'Jún';
		$this->cp_label_edit_avatar = 'Zmena prevtelenia';
		$this->cp_label_edit_pass = 'Zmena hesla';
		$this->cp_label_edit_prefs = 'Zmena nastavení';
		$this->cp_label_edit_profile = 'Zmena profilu';
		$this->cp_label_edit_subs = 'Editovanie objednávok';
		$this->cp_language = 'Jazyk';
		$this->cp_less_charac = 'Vaše meno musí by? kratšie, ako 32 znakov.';
		$this->cp_location = 'Location'; //Translate
		$this->cp_login_first = 'Pre prístup k Vašemu ovládaciemu panelu sa musíte nalogova?.';
		$this->cp_mar = 'Marec';
		$this->cp_may = 'Máj';
		$this->cp_msn = 'MSN Identity'; //Translate
		$this->cp_must_orig = 'Vaše meno sa musí zhodova? s originálom. Môžete zmeni? iba ve¾kos? a medzery.';
		$this->cp_new_notmatch = 'Nové heslá, ktoré ste zadali, sa nezhodujú.';
		$this->cp_new_pass = 'Nové heslo';
		$this->cp_no_flash = 'Flash prevtelenia tu nie sú povolené.';
		$this->cp_not_exist = 'Dátum, ktorý ste zadali (%s), neexistuje!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Octóber';
		$this->cp_old_notmatch = 'Pôvodné heslo, ktoré ste zadali sa nezhoduje s heslom v databáze.';
		$this->cp_old_pass = 'Pôvodné heslo';
		$this->cp_pass_notvaid = 'Vaše heslo je neplatné. Uistite sa, že obsahuje len platné znaky ako sú písmená, èísla, pomlèka, podtržítko alebo medzera.';
		$this->cp_preferences = 'Zmena nastavení';
		$this->cp_privacy = 'Privátne možnosti';
		$this->cp_repeat_pass = 'Ešte raz nové heslo';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = 'Zobrazova? v profile aj email?';
		$this->cp_signature = 'Podpis';
		$this->cp_size_max = 'Pevtelenie, ktoré ste zadali, je prive¾ké. Maximálna ve¾kos? je povolená %s na %s pixlov.';
		$this->cp_skin = 'Skin nástenky';
		$this->cp_sub_change = 'Zmena objednávok';
		$this->cp_sub_delete = 'Zmaza?';
		$this->cp_sub_expire = 'Dátum vypršania platnosti';
		$this->cp_sub_name = 'Názov objednávky';
		$this->cp_sub_no_params = 'Neboli zadané žiadne parametre.';
		$this->cp_sub_success = 'You are now subscribed to this %s.'; //Translate
		$this->cp_sub_type = 'Typ objednávky';
		$this->cp_sub_updated = 'Oznaèené objednávky boli vymazané.';
		$this->cp_topic_option = 'Možnosti témy';
		$this->cp_updated = 'Profil bol aktualizovaný';
		$this->cp_updated1 = 'Prevtelenie bolo aktualizované';
		$this->cp_updated_prefs = 'Nastavenia boli aktualizované';
		$this->cp_user_exists = 'Užívate¾ s takýmto menom už existuje.';
		$this->cp_valided = 'Vaše heslo bolo overené a zmenené.';
		$this->cp_view_avatar = 'Ukáza? prevtelenia?';
		$this->cp_view_emoticon = 'Ukáza? smajlikov?';
		$this->cp_view_signature = 'Ukáza? podpisy?';
		$this->cp_welcome = 'Buïte vítaný v uživate¾skom ovládacom paneli. Odtia¾to možno nastavova? Vaše konto. Vyberte si z nasledujúcich možností.';
		$this->cp_width = 'Šírka';
		$this->cp_www = 'Homepage'; //Translate
		$this->cp_yahoo = 'Yahoo Identity'; //Translate
		$this->cp_zone = 'Èasová zóna';
	}

	function email()
	{
		$this->email_blocked = 'Tento èlen neprijíma email z tohoto formulára.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Obsah emailu:';
		$this->email_no_fields = 'Vrá?te sa o overte, èi sú všetky polia vyplnené.';
		$this->email_no_member = 'Žiaden èlen s takýmto menom sa nenašiel.';
		$this->email_no_perm = 'Nemáte povolenie posiela? emaily z tohoto fóra.';
		$this->email_sent = 'Váš email bol odoslaný.';
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
		$this->forum_by = 'Napísal';
		$this->forum_can_post = 'V tomto fóre môžete odpoveda?.';
		$this->forum_can_topics = 'V tomto fóre si môžete prezera? témy.';
		$this->forum_cant_post = 'V tomto fóre nemáte povolenie odpoveda?.';
		$this->forum_cant_topics = 'V tomto fóre nemáte povolenie prezera? témy.';
		$this->forum_dot = 'dot(to èo je?)';
		$this->forum_dot_detail = 'ukazuje, že ste pod danú tému prispeli';
		$this->forum_forum = 'Fórum';
		$this->forum_guest = 'Guest'; //Translate
		$this->forum_hot = 'dôležité';
		$this->forum_icon = 'Ikona správy';
		$this->forum_jump = 'Hop na najnovšie príspevky pod touto témou';
		$this->forum_last = 'Najnovší príspevok';
		$this->forum_locked = 'Zamknuté';
		$this->forum_moved = 'Presunuté';
		$this->forum_msg = '%s Správa';
		$this->forum_new = 'nové';
		$this->forum_new_poll = 'Založi? nové hlasovanie';
		$this->forum_new_topic = 'Založi? novú tému';
		$this->forum_no_topics = 'V tomto fóre nie sú žiadne témy.';
		$this->forum_noexist = 'Zadané fórum neexistuje.';
		$this->forum_nopost = 'Nie sú príspevky';
		$this->forum_not = 'málo';
		$this->forum_noview = 'Nemáte povolenie na prezeranie fór.';
		$this->forum_pages = 'Stránky';
		$this->forum_pinned = 'Prišpendlené';
		$this->forum_pinned_topic = 'Prišpendlená téma';
		$this->forum_poll = 'Hlasovanie';
		$this->forum_regfirst = 'Nemáte povolenie na prezeranie fór. Ak sa zaregistrujete, možno budete ma?.';
		$this->forum_replies = 'Odpovede';
		$this->forum_starter = 'Zakladate¾';
		$this->forum_sub = 'Pod-Fórum';
		$this->forum_sub_last_post = 'Najnovší príspevok';
		$this->forum_sub_replies = 'Odpovede';
		$this->forum_sub_topics = 'Témy';
		$this->forum_subscribe = 'Posla? emailom nové príspovky v tomto fóre';
		$this->forum_topic = 'Téma';
		$this->forum_topics_new = 'V tomto fóre sú nejaké nové príspevky.';
		$this->forum_topics_old = 'V tomto fóre nie sú žiadne nové príspevky';
		$this->forum_views = 'Videné';
		$this->forum_write_topics = 'V tomto fóre máte povolenie zaklada? témy.';
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
		$this->help_available_files = 'Hélp';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'V databáze nie sú žiadne súbory s helpom';
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
		$this->login_cant_logged = 'Pravdepodobne nie ste prihlásený. Skúste skontrolova? Váš login a heslo.<br /><br />Sú citlivé na ve¾ké a malé znaky, takže \'UsErNaMe\' nie je to isté, èo \'Username\'. A taktiež si overte, èi sú vo Vašom prehliadaèi povolené cookies.';
		$this->login_cookies = 'Pre nalogovanie musíte povoli? cookies.';
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = 'Logging In'; //Translate
		$this->login_logged = 'Teraz ste nalogovaný.';
		$this->login_now_out = 'Teraz ste odlogovaný.';
		$this->login_out = 'Logging Out'; //Translate
		$this->login_pass = 'Heslo';
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = '\'%s\', urèite sa chcete odhlási??';
		$this->login_user = 'Meno uživate¾a';
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
		$this->main_activate = 'Váš úèet ešte nebol aktivovaný.';
		$this->main_activate_resend = 'Znovu posla? aktivaèný email';
		$this->main_admincp = 'nastavenia fór';
		$this->main_banned = 'Vám bolo žia¾ komplet celé fórum zatrhnuté.';
		$this->main_code = 'Code'; //Translate
		$this->main_cp = 'ovládací panel';
		$this->main_full = 'Full'; //Translate
		$this->main_help = 'hélp';
		$this->main_load = 'load'; //Translate
		$this->main_login = 'login'; //Translate
		$this->main_logout = 'logout'; //Translate
		$this->main_mark = 'mark all'; //Translate
		$this->main_mark1 = 'Mark all topics as read'; //Translate
		$this->main_max_load = 'Je nám ¾úto, ale %s momentálne nie je dostupné kôli strašnej mase online uživate¾ov.';
		$this->main_members = 'èlenovia';
		$this->main_messenger = 'odkazovaè';
		$this->main_new = 'nové';
		$this->main_next = 'nasledujúce';
		$this->main_prev = 'predošlé';
		$this->main_queries = 'DB dotazov';
		$this->main_quote = 'Citácia';
		$this->main_recent = 'recent posts'; //Translate
		$this->main_recent1 = 'View recent topics since your last visit'; //Translate
		$this->main_register = 'registrácia';
		$this->main_reminder = 'HoSiPa';
		$this->main_reminder_closed = 'Fórum je uzavreté a prístupné len pre adminov.';
		$this->main_said = 'poviedali';
		$this->main_search = 'h¾adanie';
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
		$this->members_all = 'všetko';
		$this->members_email = 'email';
		$this->members_email_member = 'pošli email tomuto èlenovi';
		$this->members_group = 'skupina';
		$this->members_joined = 'registrácia';
		$this->members_list = 'zoznam èlenov';
		$this->members_member = 'èlen';
		$this->members_pm = 'odkazovaè';
		$this->members_posts = 'príspevky';
		$this->members_send_pm = 'posla? tomuto èlenovi odkaz';
		$this->members_title = 'titul';
		$this->members_vist_www = 'navštívi? webstránku tohoto èlena';
		$this->members_www = 'webstránka';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Urèite chcete zmaza? tento príspevok?';
		$this->mod_confirm_topic_delete = 'Urèite chcete zmaza? túto tému?';
		$this->mod_error_first_post = 'Nemôžete zmaza? prvý príspevok pod témou.';
		$this->mod_error_move_category = 'Nemôžete presunú? tému do kategórie.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Nemôžete presunú? tému do fóra. ktoré neexistuje.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Nemôžete presunú? tému do fóra, v ktorom sa momentálne nachádza.';
		$this->mod_label_controls = 'Moderator Controls'; //Translate
		$this->mod_label_description = 'Popis';
		$this->mod_label_emoticon = 'Konvertova? textových smajlikov na obrázky?';
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'Format MbCode?'; //Translate
		$this->mod_label_move_to = 'Presunú? ..';
		$this->mod_label_options = 'Možnosti';
		$this->mod_label_post_delete = 'Zmaza? príspevok';
		$this->mod_label_post_edit = 'Editova? príspevok';
		$this->mod_label_title = 'Nadpis';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'Zmaza? tému';
		$this->mod_label_topic_edit = 'Editova? tému';
		$this->mod_label_topic_lock = 'Zamknú? tému';
		$this->mod_label_topic_move = 'Presunú? tému';
		$this->mod_label_topic_move_complete = 'Kompletne presunú? tému do nového fóra';
		$this->mod_label_topic_move_link = 'Presunú? tému do nového fóra a zanecha? link na nové umiestnenie v pôvodnom fóre.';
		$this->mod_label_topic_pin = 'Prišpendli? tému';
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = 'Špecifikovaný príspevok neexistuje.';
		$this->mod_missing_topic = 'Špecifikovaná téma neexistuje.';
		$this->mod_no_action = 'Musíte špecifikova? èinnos?.';
		$this->mod_no_post = 'Musíte špecifikova? príspevok.';
		$this->mod_no_topic = 'Musíte špecifikova? tému.';
		$this->mod_perm_post_delete = 'Nemáte povolenie na zmazanie tohoto príspevku.';
		$this->mod_perm_post_edit = 'Nemáte povolenie na editáciu tohoto príspevku.';
		$this->mod_perm_topic_delete = 'Nemáte povolenie na zmazanie tejto témy.';
		$this->mod_perm_topic_edit = 'Nemáte povolenie na editáciu tejto témy.';
		$this->mod_perm_topic_lock = 'Nemáte povolenie na zamknutie tejto témy.';
		$this->mod_perm_topic_move = 'Nemáte povolenie na presúvanie tejto témy.';
		$this->mod_perm_topic_pin = 'Nemáte povolenie na prišpendlenie tejto témy.';
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = 'Nemáte povolenie na odomknutie tejto témy.';
		$this->mod_perm_topic_unpin = 'Nemáte povolenie na odšpendlenie tejto témy.';
		$this->mod_success_post_delete = 'Príspevok bol úspešne zmazaný.';
		$this->mod_success_post_edit = 'Príspevok bol úspešne zeditovaný.';
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'Téma bola úspešne zmazaná';
		$this->mod_success_topic_edit = 'Téma bola úspešne zeditovaná.';
		$this->mod_success_topic_move = 'Téma bola úspešne presunutá do nového fóra.';
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
		$this->pm_cant_del = 'Nemáte povolenie zmaza? tento odkaz.';
		$this->pm_delallmsg = 'Zmaza? všetky odkazy';
		$this->pm_delete = 'Zmaza?';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = 'Odkaz bol zmazaný.';
		$this->pm_deleted_all = 'Odkazy boli zmazané.';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Váš odkaz sa nedá posla?. Uistite sa, že ster vyplnili všetky povinné polia.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Inbox'; //Translate
		$this->pm_folder_new = '%s new'; //Translate
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Od';
		$this->pm_group = 'Skupina';
		$this->pm_guest = 'Ako návštevník (guest) nemáte povolenie používa? odkazovaè. Prosím nalogujte sa alebo sa zaregistrujte.. alebo sa dajte vypcha?.';
		$this->pm_joined = 'Registrácia';
		$this->pm_messenger = 'Odkazovaè';
		$this->pm_msgtext = 'Text odkazu';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Musíte zada? adresár.';
		$this->pm_no_member = 'Takéto ID nemá žiadny èlen.';
		$this->pm_no_number = 'Takéto èíslo nemá žiadny odkaz.';
		$this->pm_no_title = 'Chýba predmet';
		$this->pm_nomsg = 'V tomto adresári nie sú žiadne odkazy.';
		$this->pm_noview = 'Nemáte povolenie prezera? si tento odkaz.';
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_personal = 'Odkazovaè';
		$this->pm_personal_msging = 'Posielanie odkazu';
		$this->pm_pm = 'PM'; //Translate
		$this->pm_posts = 'Príspevky';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Odpoveda?';
		$this->pm_send = 'Posla?';
		$this->pm_sendamsg = 'Posla? odkaz';
		$this->pm_sendingpm = 'Posielanie odkazu';
		$this->pm_sendon = 'Odoslané v';
		$this->pm_success = 'Váš odkaz bol úspešne zaslaný.';
		$this->pm_sure_del = 'Urèite chcete zmaza? tento odkaz?';
		$this->pm_sure_delall = 'Urèite chcete zmaza? všetky odkazy v tomto adresári?';
		$this->pm_title = 'Nadpis';
		$this->pm_to = 'To'; //Translate
	}

	function post()
	{
		$this->post_attach = 'Prílohy';
		$this->post_attach_add = 'Prida? prílohu';
		$this->post_attach_disrupt = 'Pridávanie alebo uberanie príloh nenaruší Váš príspevok.';
		$this->post_attach_failed = 'Upload prílohy neuspel. Súbor, ktorý ste špecifikovali asi neexistuje.';
		$this->post_attach_not_allowed = 'Súbory tohoto typu nemožno priloži?.';
		$this->post_attach_remove = 'Odobra? prílohu';
		$this->post_attach_too_large = 'Špecifikovaný súbor je prive¾ký. Maximálna povolená ve¾kos? je %d kB.';
		$this->post_cant_create = 'Ako návštevník (guest) nemáte povolenie zaklada? témy. Ak sa zaregistrujete, možno budete ma?.';
		$this->post_cant_create1 = 'Nemáte povolenie zaklada? témy.';
		$this->post_cant_enter = 'Vaše hlasovanie je neplatné. buï ste o tejto otázke už hlasovali alebo nemáte povolenie hlasova?.';
		$this->post_cant_poll = 'Ako návštevník (guest) nemáte povolenie zaklada? hlasovania. Ak sa zaregistrujete, možno budete ma?.';
		$this->post_cant_poll1 = 'Nemáte povolenie zaklada? hlasovania.';
		$this->post_cant_reply = 'Nemáte povolenie odpoveda? na témy pod týmto fórom.';
		$this->post_cant_reply1 = 'Ako návštevník (guest) nemáte povolenie odpoveda? na témy. Ak sa zaregistrujete, možno budete ma?.';
		$this->post_cant_reply2 = 'Nemáte povolenie odpoveda? na témy.';
		$this->post_closed = 'Téma bola uzavretá.';
		$this->post_create_poll = 'Založi? hlasovanie';
		$this->post_create_topic = 'Založi? tému';
		$this->post_creating = 'Založenie témy';
		$this->post_creating_poll = 'Založenie hlasovania';
		$this->post_flood = 'Poslali ste príspevok v priebehu uplynulých %s sekúnd a práve teraz asi nebude možné znova prispie?.<br /><br />Prosím, skúste to znova za nieko¾ko sekúnd.';
		$this->post_guest = 'Guest'; //Translate
		$this->post_icon = 'Ikona príspevku';
		$this->post_last_five = 'Posledných pä? príspevkov v opaènom poradí';
		$this->post_length = 'Kontrola dåžky';
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
		$this->post_mbcode_length = 'Váš príspevok má "+length+" znakov.';
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
		$this->post_msg = 'Príspevok';
		$this->post_must_msg = 'Musíte ešte napísa? samotný odkaz.';
		$this->post_must_options = 'Musíte zada? možné odpovede pre nové hlasovanie.';
		$this->post_must_title = 'Musíte zada? nadpis pre novú tému.';
		$this->post_new_poll = 'Nové hlasovanie';
		$this->post_new_topic = 'Nová téma';
		$this->post_no_forum = 'Toto fórum sa nenašlo.';
		$this->post_no_topic = 'Nešpecifikovali ste tému.';
		$this->post_no_vote = 'Ak chcete hlasova?, je vhodné zvoli? si odpoveï.';
		$this->post_option_emoticons = 'Konvertova? textových smajlikov na obrázky?';
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'Format MbCode?'; //Translate
		$this->post_optional = 'nepovinné';
		$this->post_options = 'Možnosti';
		$this->post_poll_options = 'Moznosti hlasovania';
		$this->post_poll_row = 'Jeden na riadok';
		$this->post_posted = 'Zaslané: ';
		$this->post_posting = 'Posiela sa';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Odpoveda?';
		$this->post_reply_topic = 'Odpoveda? na tému';
		$this->post_replying = 'Odpovedá sa na tému';
		$this->post_replying1 = 'Odpovedá sa';
		$this->post_smiles = 'Smajlici (kliknutím vloži?)';
		$this->post_too_many_options = 'Hlasovanie musí ma? minimálne 2 a maximálne %d možných odpovedí.';
		$this->post_topic_detail = 'Popis témy';
		$this->post_topic_title = 'Nadpis témy';
		$this->post_view_topic = 'Ukáza? celú tému';
		$this->post_voting = 'Hlasuje sa';
	}

	function printer()
	{
		$this->printer_back = 'Back'; //Translate
		$this->printer_not_found = 'Téma sa nenašla. Možno bola zmazaná, presunutá alebo vôbec nebola.';
		$this->printer_not_found_title = 'Téma sa nenašla';
		$this->printer_perm_topics = 'Nemáte povolenie na prezeranie tém.';
		$this->printer_perm_topics_guest = 'Nemáte povolenie na prezeranie tém. Ak sa zaregistrujete, možno budete ma?.';
		$this->printer_posted_on = 'Zaslané: ';
		$this->printer_send = 'Odosla? na tlaèiareò';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM Name'; //Translate
		$this->profile_av_sign = 'Prevtelenie a podpis';
		$this->profile_avatar = 'Prevtelenie';
		$this->profile_bday = 'Narodeniny';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'Emailová adresa';
		$this->profile_fav = 'Ob¾úbené fórum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = 'ICQ Number'; //Translate
		$this->profile_info = 'Information'; //Translate
		$this->profile_interest = 'Za¾uby';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Najnovší príspevok';
		$this->profile_list = 'Zoznam èlenov';
		$this->profile_location = 'Location'; //Translate
		$this->profile_member = 'Skupina èlenov';
		$this->profile_member_title = 'Titul èlena';
		$this->profile_msn = 'MSN Identity'; //Translate
		$this->profile_must_user = 'Ak si chcete prezrie? profil, musíte špecifikova? uživate¾a.';
		$this->profile_no_member = 'S takýmto ID nemáme žiadneho uživate¾a. Možno bolo toto konto zrušené.';
		$this->profile_none = '[ None(niè tu nie je) ]';
		$this->profile_not_post = 'ešte sa to nezaslalo.';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Odkazy';
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'Príspevky';
		$this->profile_private = '[ Súkromno ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Podpis';
		$this->profile_unkown = '[ Neznámo ]';
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
		$this->recent_by = 'Napísal';
		$this->recent_can_post = 'V tomto fóre môžete odpoveda?.';
		$this->recent_can_topics = 'V tomto fóre si môžete prezera? témy.';
		$this->recent_cant_post = 'V tomto fóre nemáte povolenie odpoveda?.';
		$this->recent_cant_topics = 'V tomto fóre nemáte povolenie prezera? témy.';
		$this->recent_dot = 'dot(to èo je?)';
		$this->recent_dot_detail = 'ukazuje, že ste pod danú tému prispeli';
		$this->recent_forum = 'Fórum';
		$this->recent_guest = 'Guest'; //Translate
		$this->recent_hot = 'dôležité';
		$this->recent_icon = 'Ikona správy';
		$this->recent_jump = 'Hop na najnovšie príspevky pod touto témou';
		$this->recent_last = 'Najnovší príspevok';
		$this->recent_locked = 'Zamknuté';
		$this->recent_moved = 'Presunuté';
		$this->recent_msg = '%s Správa';
		$this->recent_new = 'nové';
		$this->recent_new_poll = 'Založi? nové hlasovanie';
		$this->recent_new_topic = 'Založi? novú tému';
		$this->recent_no_topics = 'V tomto fóre nie sú žiadne témy.';
		$this->recent_noexist = 'Zadané fórum neexistuje.';
		$this->recent_nopost = 'Nie sú príspevky';
		$this->recent_not = 'málo';
		$this->recent_noview = 'Nemáte povolenie na prezeranie fór.';
		$this->recent_pages = 'Stránky';
		$this->recent_pinned = 'Prišpendlené';
		$this->recent_pinned_topic = 'Prišpendlená téma';
		$this->recent_poll = 'Hlasovanie';
		$this->recent_regfirst = 'Nemáte povolenie na prezeranie fór. Ak sa zaregistrujete, možno budete ma?.';
		$this->recent_replies = 'Odpovede';
		$this->recent_starter = 'Zakladate¾';
		$this->recent_sub = 'Pod-Fórum';
		$this->recent_sub_last_post = 'Najnovší príspevok';
		$this->recent_sub_replies = 'Odpovede';
		$this->recent_sub_topics = 'Témy';
		$this->recent_subscribe = 'Posla? emailom nové príspovky v tomto fóre';
		$this->recent_topic = 'Téma';
		$this->recent_topics_new = 'V tomto fóre sú nejaké nové príspevky.';
		$this->recent_topics_old = 'V tomto fóre nie sú žiadne nové príspevky';
		$this->recent_views = 'Videné';
		$this->recent_write_topics = 'V tomto fóre máte povolenie zaklada? témy.';
	}

	function register()
	{
		$this->register_activated = 'Vaše konto bolo aktivované!';
		$this->register_activating = 'Aktivácia konta';
		$this->register_activation_error = 'Aktivovanie Vašeho konta zlyhalo. Skontrolujte, èi je vo Vašom prehliadaèi plá URL cesta z aktivaèného emailu. Ak problém zotrváva, skontaktujte sa s administrátorom fóra.';
		$this->register_confirm_passwd = 'Potvrdenie hesla';
		$this->register_done = 'Boli ste zaregistrovaný! Teraz sa môžete nalogova?.';
		$this->register_email = 'Emailová adresa';
		$this->register_email_invalid = 'Zadaná emailová adresa je neplatná.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'Zadaná emailová adresa už bola pridelená inému èlenovi.';
		$this->register_fields = 'Neboli vyplnené všetky polia.';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'Boli ste zaregistrovaný. Na adresu %s bol zaslaný email s informáciami oo aktivácii Vašeho konta. Vaše konto bude obmedzené, pokia¾ si ho neaktivujete.';
		$this->register_name_invalid = 'Zadané meno je pridlhé.';
		$this->register_name_taken = 'Toto èlenské meno je už obsadené.';
		$this->register_new_user = 'Želané èlenské meno';
		$this->register_pass_invalid = 'Zadané heslo je neplatné. Uistite sa, že používate len platné znaky ako sú písmená, èísla, pomlèka, podtržítko alebo medzera a obsahuje aspoò 5 znakov.';
		$this->register_pass_match = 'Heslá, ktoré ste zadali sa nezhodujú.';
		$this->register_passwd = 'Password'; //Translate
		$this->register_reg = 'Registrácia';
		$this->register_reging = 'Prebieha registrácia';
		$this->register_tos_i_agree = 'I agree to the above terms'; //Translate
		$this->register_tos_read = 'Please read the following terms of service'; //Translate
	}

	function rssfeed()
	{
		$this->rssfeed_posted_by = 'Posted by'; //Translate
	}

	function search()
	{
		$this->search_advanced = 'Ïalšie možnosti';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Základné vyh¾adávanie';
		$this->search_characters = 'znakov z príspevku';
		$this->search_day = 'deò';
		$this->search_days = 'dni';
		$this->search_exact_name = 'presný názov';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'H¾ada?';
		$this->search_forum = 'Fórum';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Guest'; //Translate
		$this->search_in = 'H¾ada? v';
		$this->search_in_posts = 'H¾ada? iba v príspevkoch';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Registrácia';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'H¾adanie (presná zhoda)';
		$this->search_matches = 'Nálezy';
		$this->search_month = 'mesiac';
		$this->search_months = 'mesiace';
		$this->search_mysqldoc = 'MySQL Documentation'; //Translate
		$this->search_newer = 'novších';
		$this->search_no_results = 'Vaše h¾adanie dopadlo bezvýsledne.';
		$this->search_no_words = 'Ak chcete vyh¾adáva?, musíte zada? nejaké slová.<br /><br />Každé slovo musí ma? viac ako 3 znaky vrátane písmen, èísiel, apostrofov a podtržítok.';
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = 'starších';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Zobrazi? len prvých';
		$this->search_partial_name = 'èiastoèný názov name';
		$this->search_post_icon = 'Post Icon'; //Translate
		$this->search_posted_on = 'Zaslané: ';
		$this->search_posts = 'Príspevky';
		$this->search_posts_by = 'Len príspevky od užívate¾a';
		$this->search_regex = 'H¾ada? pomocou regulárnych výrazov';
		$this->search_regex_failed = 'Váš regulárny výraz neuspel. Prosím prezrite si MySQL documentation, sta? o regulárnych výrazoch.';
		$this->search_relevance = 'Platnos? príspevku: %d%%';
		$this->search_replies = 'Príspevky';
		$this->search_result = 'Výsledky h¾adania';
		$this->search_search = 'Zaèa? h¾adanie';
		$this->search_select_all = 'každom';
		$this->search_show_posts = 'Zobrazi? odpovedajúce príspevky';
		$this->search_sound = 'H¾ada? pod¾a zvuku (sound)';
		$this->search_starter = 'Zakladate¾';
		$this->search_than = 'than'; //Translate
		$this->search_topic = 'Téma';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'týždeò';
		$this->search_weeks = 'týždne';
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
		$this->topic_attached = 'Priložený súbor:';
		$this->topic_attached_downloads = 'downloads'; //Translate
		$this->topic_attached_perm = 'Nemáte povolenie na download tohoto súboru.';
		$this->topic_attached_title = 'Nadpis priloženého súboru';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = 'Založi? nové hlasovanie';
		$this->topic_create_topic = 'Založi? novú tému';
		$this->topic_delete = 'Zmaza?';
		$this->topic_delete_post = 'Zmaza? tento príspevok';
		$this->topic_edit = 'Editova?';
		$this->topic_edit_post = 'Editova? tento príspevok';
		$this->topic_edited = 'Naposledy editovaný v %s uživate¾om %s';
		$this->topic_error = 'Error'; //Translate
		$this->topic_group = 'Skupina';
		$this->topic_guest = 'Návštevník (Guest)';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Registrácia';
		$this->topic_level = 'Èlenský level';
		$this->topic_links_aim = 'Zasla? AIM správu uživate¾ovi %s';
		$this->topic_links_email = 'Zasla? email uživate¾ovi %s';
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'Zasla? ICQ správu uživate¾ovi %s';
		$this->topic_links_msn = 'Zobrazi?  MSN profil uživate¾a %s';
		$this->topic_links_pm = 'Zasla? odkaz uživate¾ovi %s';
		$this->topic_links_web = 'Navštívi? web stránku uživate¾a %s';
		$this->topic_links_yahoo = 'Zasla?S správu pomocou Yahoo! Messengera uživate¾ovi %s';
		$this->topic_lock = 'Zamknú?';
		$this->topic_locked = 'Téma je zamknutá';
		$this->topic_move = 'Presunú?';
		$this->topic_no_votes = 'Tu ešte nikto nehlasoval.';
		$this->topic_not_found = 'Téma sa nenašla';
		$this->topic_not_found_message = 'Téma sa nenašla. Možno bola zmazané, presunutá alebo nebola vôbec.';
		$this->topic_offline = 'This member is currently offline'; //Translate
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Možnosti témy';
		$this->topic_pages = 'Stránky';
		$this->topic_perm_view = 'Nemáte povolenie na prezeranie tém.';
		$this->topic_perm_view_guest = 'Nemáte povolenie na prezeranie tém. Ak sa zaregistrujete, možno budete ma?.';
		$this->topic_pin = 'Prišpendli?';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = 'Príspevky';
		$this->topic_print = 'Zobrazi? vytlaèi¾nú verziu';
		$this->topic_quote = 'Odpoveda? s citáciou z tohoto príspevku';
		$this->topic_reply = 'Odpoveda? na tému';
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = 'Zasielanie emailu s dopoveïami na túto tému';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'Odomknú?';
		$this->topic_unpin = 'Odšpenli?';
		$this->topic_unreg = 'Neregistrovaný';
		$this->topic_view = 'Zobrazi? výsledky';
		$this->topic_viewing = 'Prezeranie tém';
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