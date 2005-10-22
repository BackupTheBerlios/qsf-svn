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
 * Dutch language module
 *
 * @author Dani�l Rokven <rokven@gmail.com>
 * @author Sander Knape <hetisik@gmail.com>
 * @since 1.0.0 Beta 4.0
 **/
class nl
{
	function active()
	{
		$this->active_last_action = 'Laatste actie';
		$this->active_modules_active = 'Bekijkt actieve gebruikers';
		$this->active_modules_board = 'Bekijkt index';
		$this->active_modules_cp = 'Gebruikt control panel';
		$this->active_modules_forum = 'Het bekijken van een forum: %s';
		$this->active_modules_help = 'Gebruikt help';
		$this->active_modules_login = 'Logt in/uit';
		$this->active_modules_members = 'Bekijkt member lijst';
		$this->active_modules_mod = 'Modereren';
		$this->active_modules_pm = 'Gebruikt messenger';
		$this->active_modules_post = 'Bezig met plaatsen';
		$this->active_modules_printer = 'Onderwerp afdrukken %s';
		$this->active_modules_profile = 'Het bekijken van profiel: %s';
		$this->active_modules_recent = 'Viewing recent posts'; //Translate
		$this->active_modules_search = 'Zoekt';
		$this->active_modules_topic = 'Het bekijken van onderwerp: %s';
		$this->active_time = 'Tijd';
		$this->active_user = 'Gebruiker';
		$this->active_users = 'Actieve gebruikers';
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
		$this->board_active_users = 'Actieve gebruikers';
		$this->board_birthdays = 'Verjaardagen voor vandaag:';
		$this->board_bottom_page = 'Go to the bottom of the page'; //Translate
		$this->board_can_post = 'Je mag reageren in dit forum.';
		$this->board_can_topics = 'Je mag onderwerpen bekijken in dit forum.';
		$this->board_cant_post = 'Je mag niet reageren in dit forum.';
		$this->board_cant_topics = 'Je mag geen onderwerpen bekijken in dit forum.';
		$this->board_forum = 'Forum'; //Translate
		$this->board_guests = 'Gasten';
		$this->board_last_post = 'Laatst geplaatst op';
		$this->board_mark = 'Markeer berichten als gelezen';
		$this->board_mark1 = 'Alle berichten en forums zijn gemerkt zoals gelezen.';
		$this->board_members = 'Leden';
		$this->board_message = '%s bericht';
		$this->board_most_online = 'De meeste gebruikers ooit online was %d op %s.';
		$this->board_nobday = 'Er is geen gebruiker jarig vandaag';
		$this->board_nobody = 'Er zijn geen gebruikers online';
		$this->board_nopost = 'Geen Onderwerpen';
		$this->board_noview = 'Je hebt geen permissie om de berichten op dit forum te bekijken.';
		$this->board_regfirst = 'Je hebt geen toestemming om het forum te bekijken. Als u zich registreert, kunt u het wel.';
		$this->board_replies = 'Antwoorden';
		$this->board_stats = 'Statistieken';
		$this->board_stats_string = '%s gebruikers hebben zich geregistreerd. Ons nieuwste lid is, %s.<br />Er zijn %s Onderwerpen en %s antwoorden in een totaal van %s berichten.';
		$this->board_top_page = 'Go to the top of the page'; //Translate
		$this->board_topics = 'Onderwerpen';
		$this->board_topics_new = 'Er zijn nieuwe berichten in dit forum.';
		$this->board_topics_old = 'Er zijn geen nieuwe berichten in dit forum.';
		$this->board_users = 'Gebruikers';
		$this->board_write_topics = 'Je mag onderwerpen plaatsen in dit forum.';
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
		$this->cp_aim = 'AIM bijnaam:';
		$this->cp_already_member = 'Het opgegeven E-Mail adres bestaat al.';
		$this->cp_apr = 'April'; //Translate
		$this->cp_aug = 'Augustus';
		$this->cp_avatar_current = 'Je huidige avatar';
		$this->cp_avatar_error = 'Avatar fout';
		$this->cp_avatar_must_select = 'Je moet een avatar kiezen.';
		$this->cp_avatar_none = 'Gebruik geen avatar';
		$this->cp_avatar_pixels = 'pixels'; //Translate
		$this->cp_avatar_select = 'Selecteer een avatar';
		$this->cp_avatar_size_height = 'Je avatar hoogte moet zijn tussen 1 en';
		$this->cp_avatar_size_width = 'Je avatar breedte moet zijn tussen 1 en';
		$this->cp_avatar_upload = 'Upload een avatar vanaf je harde schijf';
		$this->cp_avatar_upload_failed = 'Het uploaden van uw avatar mislukte. Het gegeven bestand bestaat misschien niet.';
		$this->cp_avatar_upload_not_image = 'Je kunt alleen afbeeldingen gebruiken als avatar.';
		$this->cp_avatar_upload_too_large = 'De door jou gegeven avatar is te groot. Het maximum is %d kilobytes.';
		$this->cp_avatar_url = 'Geef een URL van jouw avatar';
		$this->cp_avatar_use = 'Gebruik jouw opgestuurde avatar.';
		$this->cp_bday = 'Verjaardag:';
		$this->cp_been_updated = 'Jouw profiel is gewijzigd.';
		$this->cp_been_updated1 = 'Jouw avatar is gewijzigd.';
		$this->cp_been_updated_prefs = 'Jouw opties zijn gewijzigd.';
		$this->cp_changing_pass = 'Wijzig wachtwoord';
		$this->cp_contact_pm = 'Sta je anderen jouw toe om jou prive berichten te sturen?';
		$this->cp_cp = 'Controlle paneel';
		$this->cp_current_avatar = 'Huidige avatar';
		$this->cp_current_time = 'Het is nu %s.';
		$this->cp_custom_title = 'Custom Member Title'; //Translate
		$this->cp_custom_title2 = 'This is a privledge reserved for board administrators'; //Translate
		$this->cp_dec = 'December'; //Translate
		$this->cp_editing_avatar = 'Verander je avatar';
		$this->cp_editing_profile = 'Wijzigen van profiel';
		$this->cp_email = 'E-mail:';
		$this->cp_email_form = 'Anderen toestaan om contact met je te zoeken via het E-mail-formulier.';
		$this->cp_email_invaid = 'Het ingevoerde E-mailadres is ongeldig.';
		$this->cp_err_avatar = 'Er is een fout opgetreden tijdens het uploaden van uw avatar.';
		$this->cp_err_updating = 'Er is een fout opgetreden tijdens het updaten van uw profiel.';
		$this->cp_feb = 'Februari';
		$this->cp_file_type = 'De avatar die je hebt opgegeven is ongeldig. Controleer of je het adres goed hebt ingevoerd. Het mag alleen een .gif, .jpg of een .png bestand zijn.';
		$this->cp_format = 'Gebruikersnaam:';
		$this->cp_gtalk = 'GTalk Account'; //Translate
		$this->cp_header = 'Persoonlijke instellingen';
		$this->cp_height = 'Hoogte';
		$this->cp_icq = 'ICQ Nummer:';
		$this->cp_interest = 'Hobby:';
		$this->cp_jan = 'Januari';
		$this->cp_july = 'Juli';
		$this->cp_june = 'Juni';
		$this->cp_label_edit_avatar = 'Verander je avatar';
		$this->cp_label_edit_pass = 'Wijzig WachtWoord';
		$this->cp_label_edit_prefs = 'Verander je forum instellingen';
		$this->cp_label_edit_profile = 'Wijzig Profiel';
		$this->cp_label_edit_subs = 'Wijzig Abonnement';
		$this->cp_language = 'Taal';
		$this->cp_less_charac = 'Je naam mag niet langer zijn dan 32 tekens.';
		$this->cp_location = 'Locatie:';
		$this->cp_login_first = 'Je moet ingelogd zijn om toegang te krijgen tot uw instellingen.';
		$this->cp_mar = 'Maart';
		$this->cp_may = 'Mei';
		$this->cp_msn = 'MSN-adres:';
		$this->cp_must_orig = 'Je naam moet indentiek aan het origineel zijn. Je mag alleen gewone letters veranderen naar hoofdletters en cijfers toevoegen.';
		$this->cp_new_notmatch = 'Het nieuwe wachtwoord dat je hebt ingegeven komt niet overeen.';
		$this->cp_new_pass = 'Nieuw wachtwoord';
		$this->cp_no_flash = 'Flash-avatars zijn niet toegestaan.';
		$this->cp_not_exist = 'De datum die u hebt ingevoerd: (%s) bestaat niet!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Oktober';
		$this->cp_old_notmatch = 'Het oude wachtwoord dat je hebt ingegeven komt niet overeen met het wachtwoord in onze database.';
		$this->cp_old_pass = 'Oude wachtwoord';
		$this->cp_pass_notvaid = 'Je wachtwoord is ongeldig. zorg ervoor dat je alleen de toegestane leestekens zoals letters, nummers, verbindingsstreepjes, onderstreeptekens of spaties gebruikt.';
		$this->cp_preferences = 'Verander je forum instellingen';
		$this->cp_privacy = 'Privacy Opties';
		$this->cp_repeat_pass = 'Herhaal het nieuwe wachtwoord';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Toon uw activiteiten wanneer u het forum gebruikt?';
		$this->cp_show_email = 'E-mailadres laten zien in profiel?';
		$this->cp_signature = 'Handtekening:';
		$this->cp_size_max = 'De ingevoerde afmetingen voor uw avatar zijn te groot. De maximaal toegestane grootte is %s bij %s pixels.';
		$this->cp_skin = 'Uiterlijk Forum';
		$this->cp_sub_change = 'Wijzig Abonnement';
		$this->cp_sub_delete = 'Verwijder';
		$this->cp_sub_expire = 'Verloop datum';
		$this->cp_sub_name = 'Abonnement naam';
		$this->cp_sub_no_params = 'Geen parameters werden ingegeven.';
		$this->cp_sub_success = 'Je bent nu geabonnemeerd op %s.';
		$this->cp_sub_type = 'Abonnements type';
		$this->cp_sub_updated = 'De geselecteerde abonnementen zijn verwijderd.';
		$this->cp_topic_option = 'De Opties van het onderwerp';
		$this->cp_updated = 'Profiel bijgewerkt';
		$this->cp_updated1 = 'Avatar bijgewerkt';
		$this->cp_updated_prefs = 'Instellingen bijgewerkt';
		$this->cp_user_exists = 'Er is al een gebruiker met deze naam.';
		$this->cp_valided = 'Je wachtwoord is bevestigd en werd veranderd.';
		$this->cp_view_avatar = 'Laat Avatars zien?';
		$this->cp_view_emoticon = 'Laat smilies zien?';
		$this->cp_view_signature = 'Laat handtekening zien?';
		$this->cp_welcome = 'Welkom in het instellingen menu. Hier kun je je account naar wens bijstellen. Kies uit een van bovenstaande opties.';
		$this->cp_width = 'Breedte';
		$this->cp_www = 'Homepage:';
		$this->cp_yahoo = 'Yahoo adres:';
		$this->cp_zone = 'Tijd Zone';
	}

	function email()
	{
		$this->email_blocked = 'Deze gebruiker wil geen e-mail ontvangen door dit forumulier.';
		$this->email_email = 'E-mail:';
		$this->email_msgtext = 'E-mail uiterlijk:';
		$this->email_no_fields = 'Ga terug en controleer of alle velden ingevuld zijn.';
		$this->email_no_member = 'Er is geen gebruiker gevonden met deze naam';
		$this->email_no_perm = 'Je hebt geen toestemming om E-mail te sturen via dit forum.';
		$this->email_sent = 'Je E-mail is verstuurd.';
		$this->email_subject = 'Onderwerp:';
		$this->email_to = 'Naar:';
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
		$this->forum_by = 'Door';
		$this->forum_can_post = 'Je kunt reageren op de berichten in dit forum.';
		$this->forum_can_topics = 'Je kunt de onderwerpen in dit forum bekijken.';
		$this->forum_cant_post = 'Je kunt niet reageren op berichten in dit forum.';
		$this->forum_cant_topics = 'Je kunt geen onderwerpen in dit forum bekijken.';
		$this->forum_dot = 'punt';
		$this->forum_dot_detail = 'Laat je bericht zien in dit onderwerp';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Gast';
		$this->forum_hot = 'Hot item';
		$this->forum_icon = 'Berichten icoontje';
		$this->forum_jump = 'Ga naar het laatste bericht van dit onderwerp';
		$this->forum_last = 'Laatste bericht';
		$this->forum_locked = 'Gesloten';
		$this->forum_moved = 'Verplaatst';
		$this->forum_msg = '%s bericht';
		$this->forum_new = 'Nieuw';
		$this->forum_new_poll = 'Cree�r een stembus';
		$this->forum_new_topic = 'Start nieuw onderwerp';
		$this->forum_no_topics = 'Er zijn geen onderwerpen om weer te geven op dit forum.';
		$this->forum_noexist = 'Het gekozen forum bestaat niet.';
		$this->forum_nopost = 'Geen bericht';
		$this->forum_not = 'Niet';
		$this->forum_noview = 'Je hebt geen rechten de berichten op dit forum te bekijken.';
		$this->forum_pages = 'Pagina';
		$this->forum_pinned = 'Sticky';
		$this->forum_pinned_topic = 'Sticky onderwerp';
		$this->forum_poll = 'Stembus';
		$this->forum_regfirst = 'Je hebt geen toestemming om het forum te bekijken. Als je je registreert, kunt je dit wel.';
		$this->forum_replies = 'Antwoord';
		$this->forum_starter = 'Auteur';
		$this->forum_sub = 'Sub-forum';
		$this->forum_sub_last_post = 'Laatste bericht';
		$this->forum_sub_replies = 'Antwoorden';
		$this->forum_sub_topics = 'Onderwerpen';
		$this->forum_subscribe = 'Stuur een e-mail als er berichten geplaatst zijn in dit onderwerp';
		$this->forum_topic = 'Onderwerp';
		$this->forum_topics_new = 'Er zijn nieuwe berichten in dit forum.';
		$this->forum_topics_old = 'Er zijn geen nieuwe berichten in dit forum.';
		$this->forum_views = 'Bekeken';
		$this->forum_write_topics = 'Je kan onderwerpen aanmaken in dit forum.';
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
		$this->help_available_files = 'Beschikbare help onderwerpen';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'Er zijn geen help onderwerpen in de database';
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
		$this->login_cant_logged = 'Je kon niet worden ingelogd. Controleer of je gebruikersnaam en wachtwoord.<br /><br />Ze zijn hoofdletter gevoelig, dus \'UsErNaMe\' is anders dan \'Username\'. ben er zeker van dat cookies ingeschakeld staan in je browser.';
		$this->login_cookies = 'Je browser moet cookies accepteren om in te kunnen loggen.';
		$this->login_forgot_pass = 'Vergat u uw wachtwoord?';
		$this->login_header = 'Inloggen';
		$this->login_logged = 'Je bent nu ingelogd.';
		$this->login_now_out = 'Je bent nu uitgelogd.';
		$this->login_out = 'Uitloggen';
		$this->login_pass = 'Wachtwoord';
		$this->login_pass_no_id = 'Er is geen gebruiker met de gebruikersnaam u op gaf.';
		$this->login_pass_request = 'Om het resetten van uw wachtwoord te voltooien, moet u op de link klikken in de email die naar u is verzonden.';
		$this->login_pass_reset = 'Zet wachtwoord terug';
		$this->login_pass_sent = 'Uw wachtwoord is gereset. Het nieuwe wachtwoord is verzonden naar het E-mailadres dat verbonden is aan uw gebruikersnaam.';
		$this->login_sure = 'Ben je je zeker dat je uit wilt loggen in \'%s\'?';
		$this->login_user = 'Gebruikersnaam';
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
		$this->main_activate = 'Je account is nog niet geactiveerd.';
		$this->main_activate_resend = 'Verstuur activatie E-mail opnieuw';
		$this->main_admincp = 'Beheerder instellingen';
		$this->main_banned = 'Je bent geblokkeerd van dit forum.';
		$this->main_code = 'Code'; //Translate
		$this->main_cp = 'Instellingen';
		$this->main_full = 'Vol';
		$this->main_help = 'Help';
		$this->main_load = 'Laad';
		$this->main_login = 'Log in';
		$this->main_logout = 'Log uit';
		$this->main_mark = 'mark all'; //Translate
		$this->main_mark1 = 'Mark all topics as read'; //Translate
		$this->main_max_load = 'Onze excuses, maar %s is nu niet beschikbaar, door een te groot aantal ingelogde gebruikers.';
		$this->main_members = 'Leden';
		$this->main_messenger = 'Priv� berichten';
		$this->main_new = 'Nieuw';
		$this->main_next = 'Volgende';
		$this->main_prev = 'Vorige';
		$this->main_queries = 'Wachtrijen';
		$this->main_quote = 'Citaat';
		$this->main_recent = 'recent posts'; //Translate
		$this->main_recent1 = 'View recent topics since your last visit'; //Translate
		$this->main_register = 'Registreren';
		$this->main_reminder = 'Attentie';
		$this->main_reminder_closed = 'Het forum is gesloten en alleen te zien door beheerders.';
		$this->main_said = 'Gezegd';
		$this->main_search = 'Zoeken';
		$this->main_welcome = 'Welkom';
		$this->main_welcome_guest = 'Welkom gast!';
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
		$this->members_all = 'Alles';
		$this->members_email = 'E-mail:';
		$this->members_email_member = 'Stuur E-mail naar deze gebruiker';
		$this->members_group = 'Groep';
		$this->members_joined = 'Lid sinds';
		$this->members_list = 'Ledenlijst';
		$this->members_member = 'gebruiker';
		$this->members_pm = 'PB';
		$this->members_posts = 'Antwoorden';
		$this->members_send_pm = 'Stuur deze gebruiker een PB';
		$this->members_title = 'Titel';
		$this->members_vist_www = 'Bezoek de website van deze gebruiker';
		$this->members_www = 'Website:';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Weet je zeker dat je dit bericht wil verwijderen?';
		$this->mod_confirm_topic_delete = 'Weet je zeker dat je dit onderwerp wil verwijderen?';
		$this->mod_error_first_post = 'Je kan het eerste bericht in een onderwerp niet verwijderen.';
		$this->mod_error_move_category = 'Je kan een onderwerp niet verplaatsen naar een categorie';
		$this->mod_error_move_create = 'Je hebt geen toestemming om de topics naar dat forum te verplaatsen.';
		$this->mod_error_move_forum = 'Je kan een onderwerp niet verplaatsen naar een forum dat niet bestaat.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Je kan een onderwerp niet verplaatsen naar het forum waar het al staat.';
		$this->mod_label_controls = 'Moderator Beheer';
		$this->mod_label_description = 'Omschrijving';
		$this->mod_label_emoticon = 'Smilies omzetten naar afbeeldingen?';
		$this->mod_label_global = 'Globaal Onderwerp';
		$this->mod_label_mbcode = 'Formaat MbCode?';
		$this->mod_label_move_to = 'Verplaats naar';
		$this->mod_label_options = 'Opties';
		$this->mod_label_post_delete = 'Verwijder bericht';
		$this->mod_label_post_edit = 'Bewerk bericht';
		$this->mod_label_title = 'Titel';
		$this->mod_label_title_original = 'Oorspronkelijke Titel';
		$this->mod_label_title_split = 'Gespleten Titel';
		$this->mod_label_topic_delete = 'Verwijder onderwerp';
		$this->mod_label_topic_edit = 'Bewerk onderwerp';
		$this->mod_label_topic_lock = 'Sluit onderwerp';
		$this->mod_label_topic_move = 'Verplaats onderwerp';
		$this->mod_label_topic_move_complete = 'Breng het onderwerp volledig over naar het nieuwe forum';
		$this->mod_label_topic_move_link = 'Breng het onderwerp naar het nieuwe forum over, en laat een link in zijn nieuwe plaats in het oude forum.';
		$this->mod_label_topic_pin = 'Zet onderwerp vast';
		$this->mod_label_topic_split = 'Gespleten Onderwerp';
		$this->mod_missing_post = 'Het bericht dat je omschreef kan niet worden gevonden.';
		$this->mod_missing_topic = 'Het onderwerp dat je omschreef kan niet worden gevonden.';
		$this->mod_no_action = 'Je moet een actie kiezen.';
		$this->mod_no_post = 'Je moet een bericht specificeren.';
		$this->mod_no_topic = 'Je moet een onderwerp specificeren.';
		$this->mod_perm_post_delete = 'Je hebt geen toestemming om dit bericht te verwijderen.';
		$this->mod_perm_post_edit = 'Je hebt geen toestemming om dit bericht te bewerken.';
		$this->mod_perm_topic_delete = 'Je hebt geen toestemming om dit onderwerp te verwijderen.';
		$this->mod_perm_topic_edit = 'Je hebt geen toestemming om dit onderwerp te bewerken.';
		$this->mod_perm_topic_lock = 'Je hebt geen toestemming om dit onderwerp te sluiten.';
		$this->mod_perm_topic_move = 'Je hebt geen toestemming om dit onderwerp te verplaatsen.';
		$this->mod_perm_topic_pin = 'Je hebt geen toestemming om dit onderwerp vast te zetten.';
		$this->mod_perm_topic_split = 'Je hebt geen toestemming om dit onderwerp te verdelen.';
		$this->mod_perm_topic_unlock = 'Je hebt geen toestemming om dit onderwerp te openen.';
		$this->mod_perm_topic_unpin = 'Je hebt geen toestemming om dit onderwerp los te zetten.';
		$this->mod_success_post_delete = 'Het bericht is verwijderd.';
		$this->mod_success_post_edit = 'Bericht gewijzigd';
		$this->mod_success_split = 'Het onderwerp is met succes opgedeeld.';
		$this->mod_success_topic_delete = 'Onderwerp verwijderd.';
		$this->mod_success_topic_edit = 'Het onderwerp is succesvol gewijzigd.';
		$this->mod_success_topic_move = 'Het onderwerp is succesvol verplaatst.';
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
		$this->pm_cant_del = 'Je hebt geen rechten om dit bericht te verwijderen';
		$this->pm_delallmsg = 'Verwijder alle berichten';
		$this->pm_delete = 'Verwijder';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = 'Bericht verwijderd.';
		$this->pm_deleted_all = 'Berichten verwijderd.';
		$this->pm_error = 'Er waren problemen met het versturen van je bericht naar sommige ontvangers.<br /><br />De volgende gebruikers bestaan niet: %s<br /><br />The volgende gebruikers accepteren persoonlijke berichten niet: %s';
		$this->pm_fields = 'Je bericht kon niet worden verstuurd, zorg ervoor dat alle velden ingevuld zijn.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Postvak In';
		$this->pm_folder_new = '%s nieuw';
		$this->pm_folder_sentbox = 'Verstuurd';
		$this->pm_from = 'Van';
		$this->pm_group = 'Groep';
		$this->pm_guest = 'Als gast, kunt u geen priv� berichten versturen. Login of Registreer, aub.';
		$this->pm_joined = 'Lid sinds';
		$this->pm_messenger = 'Priv� berichten';
		$this->pm_msgtext = 'Bericht:';
		$this->pm_multiple = 'Scheid verschillende ontvangers met een ;';
		$this->pm_no_folder = 'U moet een map kiezen.';
		$this->pm_no_member = 'Er is geen gebruiker met dat id gevonden.';
		$this->pm_no_number = 'er is geen bericht gevonden met dat nummer';
		$this->pm_no_title = 'Geen onderwerp';
		$this->pm_nomsg = 'Er zijn geen berichten in je Postvak In';
		$this->pm_noview = 'Je hebt geen rechten om dit bericht te bekijken';
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'Deze gebruiker is momenteel online';
		$this->pm_personal = 'Persoonlijke messenger';
		$this->pm_personal_msging = 'PB sturen';
		$this->pm_pm = 'PB';
		$this->pm_posts = 'Antwoorden';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Ontvangers';
		$this->pm_reply = 'Beantwoord';
		$this->pm_send = 'Verstuur';
		$this->pm_sendamsg = 'Stuur een bericht';
		$this->pm_sendingpm = 'Stuur een PB';
		$this->pm_sendon = 'Verstuurd op';
		$this->pm_success = 'Je priv� bericht is met succes verstuurd';
		$this->pm_sure_del = 'Weet je zeker dat u dit bericht wilt verwijderen?';
		$this->pm_sure_delall = 'Weet je zeker dat je alle berichten wilt verwijderen in deze map??';
		$this->pm_title = 'Titel:';
		$this->pm_to = 'Aan:';
	}

	function post()
	{
		$this->post_attach = 'Bijlagen';
		$this->post_attach_add = 'Bijlage toevoegen';
		$this->post_attach_disrupt = 'Het toevoegen of verwijderen van bijlagen zal je bericht niet verstoren.';
		$this->post_attach_failed = 'Het uploaden van de bijlage is mislukt. Het bestand bestaat misschien niet.';
		$this->post_attach_not_allowed = 'Je kunt dit type bestand niet als bijlage toevoegen.';
		$this->post_attach_remove = 'Bijlage verwijderen';
		$this->post_attach_too_large = 'Het bestand is te groot. De maximum grootte is %d KB.';
		$this->post_cant_create = 'Als gast, hebt je geen toestemming om onderwerpen tot stand te brengen. Als je je registreert, kun je je onderwerp plaatsen.';
		$this->post_cant_create1 = 'Je hebt geen rechten om een onderwerp aan te maken.';
		$this->post_cant_enter = 'Je stem kon niet worden verwerkt, of je hebt al gestemd of je heeft geen rechten om te stemmen';
		$this->post_cant_poll = 'Als gast, heb je geen toestemming om een stembus te plaatsen. Als je je registreert, kun je je stembus plaatsen.';
		$this->post_cant_poll1 = 'Je hebt geen rechten om een stembus aan te maken.';
		$this->post_cant_reply = 'Je hebt geen rechten om te reageren op dit onderwerp';
		$this->post_cant_reply1 = 'Als gast, heb je geen toestemming om op onderwerpen te antwoorden. Als u registreert, kunt u berichten plaatsen.';
		$this->post_cant_reply2 = 'Je hebt geen rechten om op onderwerpen te reageren';
		$this->post_closed = 'Dit onderwerp is gesloten';
		$this->post_create_poll = 'Maak een stembus';
		$this->post_create_topic = 'Maak onderwerp';
		$this->post_creating = 'Maak onderwerp';
		$this->post_creating_poll = 'Cree�r stembus';
		$this->post_flood = 'Je hebt een bericht geplaatst in de afgelopen %s seconden, en je kunt op dit ogenblik geen bericht plaatsen<br /><br />probeer aub nog eens over een paar seconden.';
		$this->post_guest = 'Gast';
		$this->post_icon = 'Bericht Icoontje';
		$this->post_last_five = 'Laatste 5 berichten in omgekeerde volgorde';
		$this->post_length = 'Controleer lengte';
		$this->post_mbcode_address = 'Geef adres op';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Blauw';
		$this->post_mbcode_bold = 'Vet';
		$this->post_mbcode_bold1 = 'V';
		$this->post_mbcode_chocolate = 'Chocolade';
		$this->post_mbcode_code = 'Code'; //Translate
		$this->post_mbcode_color = 'Kleur';
		$this->post_mbcode_coral = 'Koraal';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Karmozijnrood';
		$this->post_mbcode_darkblue = 'Donker Blauw';
		$this->post_mbcode_darkred = 'Donker Rood';
		$this->post_mbcode_deepink = 'Roze';
		$this->post_mbcode_detail = 'Geef een beschrijving';
		$this->post_mbcode_email = 'E-mail';
		$this->post_mbcode_firered = 'Baksteen Rood';
		$this->post_mbcode_font = 'Lettertype';
		$this->post_mbcode_green = 'Groen';
		$this->post_mbcode_huge = 'Heel groot';
		$this->post_mbcode_image = 'Afbeelding';
		$this->post_mbcode_image1 = 'AFB';
		$this->post_mbcode_impact = 'Effect';
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Cursief';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Groot';
		$this->post_mbcode_length = 'Je bericht heeft "+length+" lettertekens.';
		$this->post_mbcode_limegreen = 'Limoen Groen';
		$this->post_mbcode_medium = 'Normaal';
		$this->post_mbcode_orange = 'Oranje';
		$this->post_mbcode_orangered = 'Oranje Rood';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Paars';
		$this->post_mbcode_quote = 'Citeer';
		$this->post_mbcode_red = 'Rood';
		$this->post_mbcode_royalblue = 'Royal Blauw';
		$this->post_mbcode_sandybrown = 'Zand Bruin';
		$this->post_mbcode_seagreen = 'Zee Groen';
		$this->post_mbcode_sienna = 'Bruin';
		$this->post_mbcode_silver = 'Zilver';
		$this->post_mbcode_size = 'Grootte';
		$this->post_mbcode_skyblue = 'Lucht Blauw';
		$this->post_mbcode_small = 'Klein';
		$this->post_mbcode_strike = 'Doorstrepen';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Heel Klein';
		$this->post_mbcode_tomato = 'Tomaten Rood';
		$this->post_mbcode_underline = 'Onderstreept';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Lichtbruin';
		$this->post_mbcode_yellow = 'Yellow'; //Translate
		$this->post_msg = 'Bericht';
		$this->post_must_msg = 'Je moet een bericht ingeven als je deze wilt plaatsen.';
		$this->post_must_options = 'Je moet de opties ingeven bij het maken van een nieuwe stembus.';
		$this->post_must_title = 'Je moet een titel ingeven bij het maken van een nieuw onderwerp.';
		$this->post_new_poll = 'Nieuwe stembus';
		$this->post_new_topic = 'Nieuw onderwerp';
		$this->post_no_forum = 'Het betreffende forum kon niet gevonden worden.';
		$this->post_no_topic = 'Er werd geen onderwerp gespecificeerd.';
		$this->post_no_vote = 'Je moet een keuze maken om te stemmen.';
		$this->post_option_emoticons = 'Zet smilies om naar plaatjes';
		$this->post_option_global = 'Maak dit onderwerp globaal?';
		$this->post_option_mbcode = 'formaat MbCode?';
		$this->post_optional = 'Opties';
		$this->post_options = 'Opties';
		$this->post_poll_options = 'stembus Opties';
		$this->post_poll_row = 'Een per rij';
		$this->post_posted = 'Geplaatst op';
		$this->post_posting = 'Plaats';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Beantwoorden';
		$this->post_reply_topic = 'Antwoord op onderwerp';
		$this->post_replying = 'Reageer op onderwerp';
		$this->post_replying1 = 'Reageer';
		$this->post_smiles = 'Klikbare Smilies';
		$this->post_too_many_options = 'Je moet tussen de 2 en %d keuzemogelijkheden aanmaken bij een stembus.';
		$this->post_topic_detail = 'Beschrijving van onderwerp';
		$this->post_topic_title = 'Titel van onderwerp';
		$this->post_view_topic = 'Bekijk gehele onderwerp';
		$this->post_voting = 'Stemmen';
	}

	function printer()
	{
		$this->printer_back = 'Terug';
		$this->printer_not_found = 'Het onderwerp kon niet worden gevonden.het kan zijn dat het is verwijderd, verplaatst of nooit bestaan heeft';
		$this->printer_not_found_title = 'Onderwerp niet gevonden';
		$this->printer_perm_topics = 'Je hebt geen rechten om de onderwerpen te bekijken.';
		$this->printer_perm_topics_guest = 'Je hebt geen toestemming om onderwerpen te bekijken. Als je je registreert, kun je hem wel bekijken.';
		$this->printer_posted_on = 'Geplaatst op';
		$this->printer_send = 'Stuur naar printer';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM:';
		$this->profile_av_sign = 'Avatar and handtekening';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Verjaardag:';
		$this->profile_contact = 'Contact'; //Translate
		$this->profile_email_address = 'E-mail:';
		$this->profile_fav = 'Favoriete forum:';
		$this->profile_fav_forum = '%s (%d%% van de berichten van deze gebruiker)';
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = 'ICQ:';
		$this->profile_info = 'Informatie';
		$this->profile_interest = 'Wat ik kwijt wil:';
		$this->profile_joined = 'Aangemeld';
		$this->profile_last_post = 'Laatste bericht';
		$this->profile_list = 'Gebruikers Lijst';
		$this->profile_location = 'Locatie:';
		$this->profile_member = 'Groep:';
		$this->profile_member_title = 'Titel:';
		$this->profile_msn = 'MSN:';
		$this->profile_must_user = 'Je moet een gebruiker invullen voordat je een profiel kunt bekijken.';
		$this->profile_no_member = 'Er is geen gebruiker met dit ID. Het kan zijn dat zijn account verwijderd is.';
		$this->profile_none = '[ Geen ]';
		$this->profile_not_post = 'Heeft nog niets geplaatst.';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'Deze gebruiker is momenteel online';
		$this->profile_pm = 'Priv� Berichten';
		$this->profile_postcount = '%s totaal, %s per dag';
		$this->profile_posts = 'Berichten:';
		$this->profile_private = '[ Prive ]';
		$this->profile_profile = 'Profiel';
		$this->profile_signature = 'Handtekening:';
		$this->profile_unkown = '[ Onbekend ]';
		$this->profile_view_profile = 'Bekijk Profiel van';
		$this->profile_www = 'Homepage:';
		$this->profile_yahoo = 'Yahoo:';
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
		$this->recent_by = 'Door';
		$this->recent_can_post = 'Je kunt reageren op de berichten in dit forum.';
		$this->recent_can_topics = 'Je kunt de onderwerpen in dit forum bekijken.';
		$this->recent_cant_post = 'Je kunt niet reageren op berichten in dit forum.';
		$this->recent_cant_topics = 'Je kunt geen onderwerpen in dit forum bekijken.';
		$this->recent_dot = 'punt';
		$this->recent_dot_detail = 'Laat je bericht zien in dit onderwerp';
		$this->recent_forum = 'Forum'; //Translate
		$this->recent_guest = 'Gast';
		$this->recent_hot = 'Hot item';
		$this->recent_icon = 'Berichten icoontje';
		$this->recent_jump = 'Ga naar het laatste bericht van dit onderwerp';
		$this->recent_last = 'Laatste bericht';
		$this->recent_locked = 'Gesloten';
		$this->recent_moved = 'Verplaatst';
		$this->recent_msg = '%s bericht';
		$this->recent_new = 'Nieuw';
		$this->recent_new_poll = 'Cree�r een stembus';
		$this->recent_new_topic = 'Start nieuw onderwerp';
		$this->recent_no_topics = 'Er zijn geen onderwerpen om weer te geven op dit forum.';
		$this->recent_noexist = 'Het gekozen forum bestaat niet.';
		$this->recent_nopost = 'Geen bericht';
		$this->recent_not = 'Niet';
		$this->recent_noview = 'Je hebt geen rechten de berichten op dit forum te bekijken.';
		$this->recent_pages = 'Pagina';
		$this->recent_pinned = 'Sticky';
		$this->recent_pinned_topic = 'Sticky onderwerp';
		$this->recent_poll = 'Stembus';
		$this->recent_regfirst = 'Je hebt geen toestemming om het forum te bekijken. Als je je registreert, kunt je dit wel.';
		$this->recent_replies = 'Antwoord';
		$this->recent_starter = 'Auteur';
		$this->recent_sub = 'Sub-forum';
		$this->recent_sub_last_post = 'Laatste bericht';
		$this->recent_sub_replies = 'Antwoorden';
		$this->recent_sub_topics = 'Onderwerpen';
		$this->recent_subscribe = 'Stuur een e-mail als er berichten geplaatst zijn in dit onderwerp';
		$this->recent_topic = 'Onderwerp';
		$this->recent_topics_new = 'Er zijn nieuwe berichten in dit forum.';
		$this->recent_topics_old = 'Er zijn geen nieuwe berichten in dit forum.';
		$this->recent_views = 'Bekeken';
		$this->recent_write_topics = 'Je kan onderwerpen aanmaken in dit forum.';
	}

	function register()
	{
		$this->register_activated = 'Je aanmelding is voltooid!';
		$this->register_activating = 'Account activatie';
		$this->register_activation_error = 'Er was een fout geconstateerd tijdens het activeren van je registratie. Kijk in je browser na of er het hele adres uit je activatie e-mail staat. Mocht dit probleem zich voor blijven doen, neem dan contact op met de beheerder van dit forum om het mailtje opnieuw gestuurd te krijgen.';
		$this->register_confirm_passwd = 'Bevestig wachtwoord';
		$this->register_done = 'Je bent geregistreerd! Je kunt nu inloggen.';
		$this->register_email = 'E-mail';
		$this->register_email_invalid = 'Je hebt een ongeldig E-mail adres ingevoerd.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'Het door jou ingegeven E-mail adres is al aan een andere gebruiker toegewezen.';
		$this->register_fields = 'Je hebt niet alle velden ingevuld.';
		$this->register_image = 'Gelieve de tekst in te geven die in het beeld wordt getoond.';
		$this->register_image_invalid = 'Om te verifi�ren dat je een menselijke registrant bent en geen robot, moet je de tekst zoals aangetoond in het beeld typen.';
		$this->register_must_activate = 'Je bent geregistreerd. Er is een e-mail gestuurd naar %s met de activerings-informatie. Je account heeft beperkte mogelijkheden tot je account geactiveerd is.';
		$this->register_name_invalid = 'Je hebt een ongeldige naam ingevoerd.';
		$this->register_name_taken = 'Die gebruikersnaam is al bezet.';
		$this->register_new_user = 'gewenste gebruikersnaam';
		$this->register_pass_invalid = 'Het ingegeven wachtwoord is niet juist. Controleer of je alleen geldige leestekens zoals letters, nummers, streepjes, onderstreeptekens of spaties hebt gebruikt, en het op zijn minst uit 5 leestekens bestaat.';
		$this->register_pass_match = 'De wachtwoorden komen niet overeen.';
		$this->register_passwd = 'Wachtwoord';
		$this->register_reg = 'Registreer';
		$this->register_reging = 'Aan het registreren';
		$this->register_tos_i_agree = 'I agree to the above terms'; //Translate
		$this->register_tos_read = 'Please read the following terms of service'; //Translate
	}

	function rssfeed()
	{
		$this->rssfeed_posted_by = 'Posted by'; //Translate
	}

	function search()
	{
		$this->search_advanced = 'Geavanceerd';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Normaal';
		$this->search_characters = 'Karakters van bericht';
		$this->search_day = 'Dag';
		$this->search_days = 'Dagen';
		$this->search_exact_name = 'Nauwkeurige naam';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Zoeken op';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Groep';
		$this->search_guest = 'Gast';
		$this->search_in = 'Zoeken in';
		$this->search_in_posts = 'Zoek ALLEEN in berichten';
		$this->search_ip = 'IP-Adres';
		$this->search_joined = 'Geregistreerd:';
		$this->search_level = 'Gebruikers level';
		$this->search_match = 'Zoek naar overeenkomsten';
		$this->search_matches = 'Overeenkomsten';
		$this->search_month = 'Maand';
		$this->search_months = 'Maanden';
		$this->search_mysqldoc = 'MySQL Documentatie';
		$this->search_newer = 'Nieuwer';
		$this->search_no_results = 'Geen zoekresultaten.';
		$this->search_no_words = 'Je moet een zoekterm invullen.<br /><br />Elke term moet langer zijn dan 3 karakters, letters, nummers, apostrof en onderstrepingen ook meegeteld.';
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = 'Ouder';
		$this->search_online = 'Deze gebruiker is momenteel online.';
		$this->search_only_display = 'Toon alleen eerste';
		$this->search_partial_name = 'Gedeelte naam';
		$this->search_post_icon = 'Bericht pictogram';
		$this->search_posted_on = 'Geplaatst op';
		$this->search_posts = 'berichten';
		$this->search_posts_by = 'Alleen in berichten van';
		$this->search_regex = 'Zoeken op regelmatige uitdrukkingen';
		$this->search_regex_failed = 'Uw regelmatige ontbroken uitdrukking. Gelieve te zien de MySQL- documentatie voor regelmatige uitdrukking helpen.';
		$this->search_relevance = 'Bericht Relevantie: %d%%';
		$this->search_replies = 'Antwoorden';
		$this->search_result = 'Zoek resultaten';
		$this->search_search = 'Zoeken';
		$this->search_select_all = 'Selecteer alles';
		$this->search_show_posts = 'Toon overeenkomende berichten';
		$this->search_sound = 'Hoort zich aan als';
		$this->search_starter = 'Gestart door';
		$this->search_than = 'dan';
		$this->search_topic = 'Onderwerp';
		$this->search_unreg = 'Niet geregistreerd';
		$this->search_week = 'Week';
		$this->search_weeks = 'Weken';
		$this->search_year = 'Jaar';
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
		$this->topic_attached = 'Bijgesloten bestand:';
		$this->topic_attached_downloads = 'Downloads';
		$this->topic_attached_perm = 'Je hebt geen toestemming om dit bestand te downloaden.';
		$this->topic_attached_title = 'Bijgesloten bestand';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = 'Start nieuwe stembus';
		$this->topic_create_topic = 'Start nieuw onderwerp';
		$this->topic_delete = 'Verwijder';
		$this->topic_delete_post = 'Delete dit onderwerp';
		$this->topic_edit = 'Bewerk';
		$this->topic_edit_post = 'Bewerk dit onderwerp';
		$this->topic_edited = 'Laatst bewerkt op %s door %s';
		$this->topic_error = 'Fout';
		$this->topic_group = 'Groep';
		$this->topic_guest = 'Gast';
		$this->topic_ip = 'IP-Adres';
		$this->topic_joined = 'Lid sinds';
		$this->topic_level = 'Leden afdeling';
		$this->topic_links_aim = 'Stuur een AIM bericht naar %s';
		$this->topic_links_email = 'Stuur een E-mail aan %s';
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'Stuur een ICQ bericht naar %s';
		$this->topic_links_msn = 'Bekijk %s\'s MSN profiel';
		$this->topic_links_pm = 'Stuur een persoonlijk bericht naar %s';
		$this->topic_links_web = 'Bezoek %s\'s website';
		$this->topic_links_yahoo = 'Stuur een bericht naar %s met Yahoo! Messenger';
		$this->topic_lock = 'Sluiten';
		$this->topic_locked = 'Onderwerp gesloten';
		$this->topic_move = 'Verplaats';
		$this->topic_no_votes = 'Er zijn nog geen stemmen in deze stembus.';
		$this->topic_not_found = 'Onderwerp niet gevonden';
		$this->topic_not_found_message = 'Het onderwerp kan niet gevonden worden. mogelijk is het verwijderd';
		$this->topic_offline = 'This member is currently offline'; //Translate
		$this->topic_online = 'Deze gebruiker is momenteel online';
		$this->topic_options = 'Onderwerp opties';
		$this->topic_pages = 'Bladzijden';
		$this->topic_perm_view = 'Je hebt geen rechten om dit onderwerp bekijken.';
		$this->topic_perm_view_guest = 'Je hebt geen toestemming om onderwerpen te bekijken. Als je je registreert, kun je deze wel bekijken.';
		$this->topic_pin = 'Sticky';
		$this->topic_posted = 'Geplaatst';
		$this->topic_posts = 'berichten';
		$this->topic_print = 'Printervriendelijk';
		$this->topic_quote = 'Citeer';
		$this->topic_reply = 'Antwoord op onderwerp';
		$this->topic_split = 'Verdeel';
		$this->topic_split_finish = 'Be�indig Al het Verdelen';
		$this->topic_split_keep = 'Verplaats dit bericht niet';
		$this->topic_split_move = 'Verplaats dit bericht';
		$this->topic_subscribe = 'Stuur me een E-mail wanneer er gereageerd is op dit onderwerp';
		$this->topic_top = 'Ga naar de bovenkant van de pagina';
		$this->topic_unlock = 'Heropenen';
		$this->topic_unpin = 'Unsticky';
		$this->topic_unreg = 'Ongeregistreerd';
		$this->topic_view = 'Bekijk resultaten';
		$this->topic_viewing = 'Bekijk onderwerp';
		$this->topic_vote = 'Stem';
		$this->topic_vote_count_plur = '%d stemmen';
		$this->topic_vote_count_sing = '%d stem';
		$this->topic_votes = 'Stemmen';
	}

	function universal()
	{
		$this->based_on = 'based on';
		$this->board_by = 'Door';
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
		$this->submit = 'Verzend';
		$this->today = 'Vandaag';
		$this->yes = 'Yes'; //Translate
		$this->yesterday = 'Gisteren';
	}
}
?>