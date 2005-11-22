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
 * Norwegian language module
 *
 * @author JGS <sag1@online.no>
 * @since 1.1.0
 **/
class no
{
	function active()
	{
		$this->active_last_action = 'Siste kommando';
		$this->active_modules_active = 'Viser aktive brukere';
		$this->active_modules_board = 'Viser Index';
		$this->active_modules_cp = 'Anvdnder Kontrollpanelen';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Anvender Hjelp';
		$this->active_modules_login = 'Logger In/Ut';
		$this->active_modules_members = 'Viser medlemsliste';
		$this->active_modules_mod = 'Administrerer';
		$this->active_modules_pm = 'Anvender Messenger';
		$this->active_modules_post = 'Skaper Inlegg';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_recent = 'Viewing recent posts'; //Translate
		$this->active_modules_search = 'Søker';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'Tid';
		$this->active_user = 'Bruker';
		$this->active_users = 'Aktive brukere';
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
		$this->admin_upgrade_skin = 'Upgrade a Skin'; //Translate
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
		$this->board_active_users = 'Aktive brukere';
		$this->board_birthdays = 'Fødselsdag i dag:';
		$this->board_bottom_page = 'Go to the bottom of the page'; //Translate
		$this->board_can_post = 'Du kan svare i dette forumet.';
		$this->board_can_topics = 'Du kan lese men ikke opprette emner i dette forumet.';
		$this->board_cant_post = 'Du kan ikke svare i dette forumet.';
		$this->board_cant_topics = 'Du kan ikke lese eller opprette emner i dette forumet.';
		$this->board_forum = 'Forum'; //Translate
		$this->board_guests = 'gjester';
		$this->board_last_post = 'Siste innlegg';
		$this->board_mark = 'Merk innlegg som lest';
		$this->board_mark1 = 'Alle innlegg og forum har blitt markert som lest.';
		$this->board_members = 'medlemmer';
		$this->board_message = '%s Melding';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Ingen medlemmer fyller dag idag.';
		$this->board_nobody = 'Det for tiden ingen medlemmer online.';
		$this->board_nopost = 'Ingen innlegg';
		$this->board_noview = 'Du har ikke tilatelse til å lese forumet.';
		$this->board_regfirst = 'Du har ikke tilatelse til å lese forumet. Hvis du registrerer deg, så kan du.';
		$this->board_replies = 'Svar';
		$this->board_stats = 'Statistikk';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_top_page = 'Go to the top of the page'; //Translate
		$this->board_topics = 'Emner';
		$this->board_topics_new = 'Det finnes nye innlegg i dette forumet.';
		$this->board_topics_old = 'Det finnes ingen nye innlegg i dette forumet.';
		$this->board_users = 'brukere';
		$this->board_write_topics = 'Du kan lese og opprette emner i dette forumet.';
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
		$this->cp_aim = 'AIM navn';
		$this->cp_already_member = 'E-post adressen du skrev inn er opptatt.';
		$this->cp_apr = 'April'; //Translate
		$this->cp_aug = 'August'; //Translate
		$this->cp_avatar_current = 'Din nåværende avatara';
		$this->cp_avatar_error = 'Avatara feil';
		$this->cp_avatar_must_select = 'Du må velge en avatara.';
		$this->cp_avatar_none = 'Ikke bruk noen avatara';
		$this->cp_avatar_pixels = 'punkter';
		$this->cp_avatar_select = 'Velg en avatara';
		$this->cp_avatar_size_height = 'Din avataras høyde må være mellom 1 og';
		$this->cp_avatar_size_width = 'Din avataras bredde må være mellom 1 och';
		$this->cp_avatar_upload = 'Laste opp en avatara fra din harddisk';
		$this->cp_avatar_upload_failed = 'Opplastingen av avataraen gikk feil. Filen du har valgt finnes ikke.';
		$this->cp_avatar_upload_not_image = 'Du kan bare laste opp bilder for å benytte som avatara.';
		$this->cp_avatar_upload_too_large = 'Avataraen du valgte å laste opp er for stor. Maks størrelse er %d kilobyte.';
		$this->cp_avatar_url = 'Skriv in en webadresse til din avatara';
		$this->cp_avatar_use = 'Bruk din opplastede avatara';
		$this->cp_bday = 'Fødselsdag';
		$this->cp_been_updated = 'Din profil er oppdatert.';
		$this->cp_been_updated1 = 'Din avatara er oppdatert.';
		$this->cp_been_updated_prefs = 'Dine innstillinger er oppdatert.';
		$this->cp_changing_pass = 'Endre passord';
		$this->cp_contact_pm = 'Tillat at andra brukere kontakter deg via meldinger?';
		$this->cp_cp = 'Kontrollpanel';
		$this->cp_current_avatar = 'Nåværende Avatara';
		$this->cp_current_time = 'Klokken er %s.';
		$this->cp_custom_title = 'Custom Member Title'; //Translate
		$this->cp_custom_title2 = 'This is a privledge reserved for board administrators'; //Translate
		$this->cp_dec = 'Desember';
		$this->cp_editing_avatar = 'Rediger Avatara';
		$this->cp_editing_profile = 'Rediger Profil';
		$this->cp_email = 'E-post';
		$this->cp_email_form = 'Tillat at andre brukere kan kontakte deg via e-post?';
		$this->cp_email_invaid = 'E-post adressen du skrev inn er ugyldig.';
		$this->cp_err_avatar = 'Misslykket oppdatering av Avatara';
		$this->cp_err_updating = 'Oppdatering av profil gikk feil';
		$this->cp_feb = 'Februar';
		$this->cp_file_type = 'Avataraen er ugyldig. Forsikre deg om at web-adressen er korrekt og at filtypen er .gif, .jpg, eller .png';
		$this->cp_format = 'Navn';
		$this->cp_gtalk = 'GTalk Account'; //Translate
		$this->cp_header = 'Kontrollpanel';
		$this->cp_height = 'Høyde';
		$this->cp_icq = 'ICQ Nummer';
		$this->cp_interest = 'Interesser';
		$this->cp_jan = 'Januar';
		$this->cp_july = 'Juli';
		$this->cp_june = 'Juni';
		$this->cp_label_edit_avatar = 'Endre Avatara';
		$this->cp_label_edit_pass = 'Endre Passord';
		$this->cp_label_edit_prefs = 'Endre Innstillinger';
		$this->cp_label_edit_profile = 'Endre Profil';
		$this->cp_label_edit_subs = 'Endre abonnement';
		$this->cp_language = 'Språk';
		$this->cp_less_charac = 'Ditt navn må være kortere enn 32 bokstaver.';
		$this->cp_location = 'Sted';
		$this->cp_login_first = 'Du må være innlogget for å ha tilgang til kontrollpanelet.';
		$this->cp_mar = 'Mars';
		$this->cp_may = 'May'; //Translate
		$this->cp_msn = 'MSN navn';
		$this->cp_must_orig = 'Ditt navn må være identisk med det originale. Du får bare endre store/små bokstaver og mellomrom.';
		$this->cp_new_notmatch = 'De nye passordene er ikke like.';
		$this->cp_new_pass = 'Nytt passord';
		$this->cp_no_flash = 'Flash-avataraer er ikke tillett.';
		$this->cp_not_exist = 'Datoen du oppgav (%s) er ugyldig!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Oktober';
		$this->cp_old_notmatch = 'Ditt gamle passord er feil.';
		$this->cp_old_pass = 'Gammelt passord';
		$this->cp_pass_notvaid = 'Ditt passord er ugyldig. Kun bokstaver, siffer, strek, understrek og mellomrom er tillatt.';
		$this->cp_preferences = 'Endre innstillinger';
		$this->cp_privacy = 'Private valg';
		$this->cp_repeat_pass = 'Oppgi nytt passord igjen';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = 'Vise E-post adresse i din profil?';
		$this->cp_signature = 'Signatur';
		$this->cp_size_max = 'Avataraen er for stor. Maks størrelse er %s x %s punkter.';
		$this->cp_skin = 'Skin';
		$this->cp_sub_change = 'Endre abonnement';
		$this->cp_sub_delete = 'Slette';
		$this->cp_sub_expire = 'Gyldig til dato';
		$this->cp_sub_name = 'Abonnement navn';
		$this->cp_sub_no_params = 'Ingan parametrer oppgitt.';
		$this->cp_sub_success = 'Du abonnerer nå på dette %s.';
		$this->cp_sub_type = 'Abonnementstype';
		$this->cp_sub_updated = 'Valgte abonnement er slettet.';
		$this->cp_topic_option = 'Forum valg';
		$this->cp_updated = 'Profil er oppdatert';
		$this->cp_updated1 = 'Avatara er oppdatert';
		$this->cp_updated_prefs = 'Innstillinger er oppdatert';
		$this->cp_user_exists = 'En bruker med dette navn finnes allerede.';
		$this->cp_valided = 'Ditt passord er validert og endret.';
		$this->cp_view_avatar = 'Vise Avataraer?';
		$this->cp_view_emoticon = 'Vise Smileys?';
		$this->cp_view_signature = 'Vise Signaturer?';
		$this->cp_welcome = 'Velkommen til kontrollpanelet. Her kan du endre din brukerkonto. Velg fra alternativene over.';
		$this->cp_width = 'Bredde';
		$this->cp_www = 'Hjemmeside';
		$this->cp_yahoo = 'Yahoo navn';
		$this->cp_zone = 'Tidssone';
	}

	function email()
	{
		$this->email_blocked = 'Du kan ikke sende e-post til denne brukeren.';
		$this->email_email = 'E-post';
		$this->email_msgtext = 'Melding:';
		$this->email_no_fields = 'Gå tilbake og kontroller at alle feltene er utfyllt.';
		$this->email_no_member = 'Det finnes ikke noe medlem med det navnet.';
		$this->email_no_perm = 'Du har ikke tilgang til å sende e-post via forumet..';
		$this->email_sent = 'E-post meldingen er sendt.';
		$this->email_subject = 'Emne:';
		$this->email_to = 'Til:';
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
		$this->forum_can_post = 'Du kan svare i dette forumet.';
		$this->forum_can_topics = 'Du kan lese emner i dette forumet.';
		$this->forum_cant_post = 'Du kan ikke svare i dette forumet.';
		$this->forum_cant_topics = 'Du kan ikke se på emner i dette forumet.';
		$this->forum_dot = 'punktum';
		$this->forum_dot_detail = 'Viser at du skrevet innlegg i dette emnet';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Gjest';
		$this->forum_hot = 'Hot'; //Translate
		$this->forum_icon = 'Meldingsikon';
		$this->forum_jump = 'Hoppe til nyeste innlegg i emnet';
		$this->forum_last = 'Siste innlegg';
		$this->forum_locked = 'Lest';
		$this->forum_moved = 'Flyttet';
		$this->forum_msg = '%s melding';
		$this->forum_new = 'Ny';
		$this->forum_new_poll = 'Lage ny avstemming';
		$this->forum_new_topic = 'Lage nytt emne';
		$this->forum_no_topics = 'Det finnes ingen emner å vise i dette forumet.';
		$this->forum_noexist = 'Forumet eksisterer ikke.';
		$this->forum_nopost = 'Ingen innlegg';
		$this->forum_not = 'Ikke';
		$this->forum_noview = 'Du har ikke tiletelse å se på forum.';
		$this->forum_pages = 'Sider';
		$this->forum_pinned = 'Merket';
		$this->forum_pinned_topic = 'Merket emne';
		$this->forum_poll = 'Avstemmning';
		$this->forum_regfirst = 'Du har ikkee tilgang til å se på forum uten først å registrere deg.';
		$this->forum_replies = 'Svar';
		$this->forum_starter = 'Oppretter';
		$this->forum_sub = 'Sub-forum';
		$this->forum_sub_last_post = 'Siste innlegg';
		$this->forum_sub_replies = 'Svar';
		$this->forum_sub_topics = 'Emner';
		$this->forum_subscribe = 'Motta e-post når det kommer nye innlegg i dette forum.';
		$this->forum_topic = 'Emne';
		$this->forum_topics_new = 'Det finnes nye innlegg i dette forumet.';
		$this->forum_topics_old = 'Det finnes ingen nye innlegg i dette forumet.';
		$this->forum_views = 'Visninger';
		$this->forum_write_topics = 'Du kan lage nye emner i dette forumet.';
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
		$this->help_available_files = 'Hjelp';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'Det finnes ingen hjelpefiler i databasen';
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
		$this->login_cant_logged = 'Du klarte ikke å logge inn. Forsikre deg om at ditt brukernavn og passord er rett.<br /><br />Pass på store og små bokstaver, så \'UsErNaMe\' er ikke det samme som \'Username\'. Cookies må også være aktivert.';
		$this->login_cookies = 'Cookies må være aktivert for å kunne logge inn.';
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = 'Logger inn';
		$this->login_logged = 'Du er nå pålogget.';
		$this->login_now_out = 'Du er nå avlogget.';
		$this->login_out = 'Logger ut';
		$this->login_pass = 'Passord';
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = 'Er du sikker på at du vil logge ut fra \'%s\'?';
		$this->login_user = 'Brukernavn';
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
		$this->main_activate = 'Ditt brukernavn er ikke aktivert enda.';
		$this->main_activate_resend = 'Send aktiverings e-post på nytt';
		$this->main_admincp = 'admin kontrollpanel';
		$this->main_banned = 'Du har blitt utelåst fra dette forum.';
		$this->main_code = 'Kode';
		$this->main_cp = 'kontrollpanel';
		$this->main_full = 'Fullstendig';
		$this->main_help = 'hjelp';
		$this->main_load = 'belastning';
		$this->main_login = 'logge inn';
		$this->main_logout = 'logge ut';
		$this->main_mark = 'mark all'; //Translate
		$this->main_mark1 = 'Mark all topics as read'; //Translate
		$this->main_max_load = 'Beklageligvis så er %s utilgjengelig pga for mange samtidige brukere.';
		$this->main_members = 'medlemmer';
		$this->main_messenger = 'meldinger';
		$this->main_new = 'ny';
		$this->main_next = 'neste';
		$this->main_prev = 'forrige';
		$this->main_queries = 'uttrekk';
		$this->main_quote = 'Sitere';
		$this->main_recent = 'recent posts'; //Translate
		$this->main_recent1 = 'View recent topics since your last visit'; //Translate
		$this->main_register = 'registrere';
		$this->main_reminder = 'Påminnelse';
		$this->main_reminder_closed = 'dette forumet er stengt og kan bare leses av administratoren.';
		$this->main_said = 'sa';
		$this->main_search = 'søk';
		$this->main_welcome = 'Velkommen';
		$this->main_welcome_guest = 'Velkommen!';
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
		$this->mc_email_invaid = 'The email address you entered is invalid.'; //Translate
		$this->mc_err_updating = 'Error Updating Profile'; //Translate
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
		$this->members_all = 'alle';
		$this->members_email = 'E-post';
		$this->members_email_member = 'Send e-post til denne brukeren';
		$this->members_group = 'Gruppe';
		$this->members_joined = 'Registreringsdato';
		$this->members_list = 'Medlemsliste';
		$this->members_member = 'Medlem';
		$this->members_pm = 'PM'; //Translate
		$this->members_posts = 'Innlegg';
		$this->members_send_pm = 'Send en personlig melding til denne brukeren';
		$this->members_title = 'Tittel';
		$this->members_vist_www = 'Besøk denna brukerens hjemmeside';
		$this->members_www = 'Hjemmeside';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Er du sikker på at du vil slette dette innlegget?';
		$this->mod_confirm_topic_delete = 'Er du sikker på at du vil slette dette emnet?';
		$this->mod_error_first_post = 'Du kan ikke slette det første innlegget i et emne.';
		$this->mod_error_move_category = 'Du kan ikke flytte et emne til en kategori.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Du kan ikke flytte et emne til et forum som ikke eksisterer.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Du kan ikke flytte et emne til det forum det allerede befinner seg i.';
		$this->mod_label_controls = 'Moderator kontroller';
		$this->mod_label_description = 'Beskrivelse';
		$this->mod_label_emoticon = 'Konvertere smileys til bilder?';
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'Formatere MbKode?';
		$this->mod_label_move_to = 'Flytte til';
		$this->mod_label_options = 'Alternativ';
		$this->mod_label_post_delete = 'Slette innlegg';
		$this->mod_label_post_edit = 'Redigere innlegg';
		$this->mod_label_post_icon = 'Post Icon'; //Translate
		$this->mod_label_title = 'Tittel';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'Slette emne';
		$this->mod_label_topic_edit = 'Redigere emne';
		$this->mod_label_topic_lock = 'Lese emne';
		$this->mod_label_topic_move = 'Flytte emne';
		$this->mod_label_topic_move_complete = 'Flytte hele emnet til et nytt forum';
		$this->mod_label_topic_move_link = 'Flytte hele emnet til et nytt forum og legge igjen en link dit fra det gamle forumet.';
		$this->mod_label_topic_pin = 'Marker emne';
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = 'Innlegget eksisterer ikke.';
		$this->mod_missing_topic = 'Emnet eksisterar ikke.';
		$this->mod_no_action = 'Du må gjøre et valg.';
		$this->mod_no_post = 'Du må velge et innlegg.';
		$this->mod_no_topic = 'Du må velge et emne.';
		$this->mod_perm_post_delete = 'Du har ikke tillatelse til å slette dette innlegget.';
		$this->mod_perm_post_edit = 'Du har ikke tillatelse til å redigere dette innlegget.';
		$this->mod_perm_topic_delete = 'Du har ikke tillatelse til å slette dette emne.';
		$this->mod_perm_topic_edit = 'Du har ikke tillatelse til å redigere dette emne.';
		$this->mod_perm_topic_lock = 'Du har ikke tillatelse til å lese dette emne.';
		$this->mod_perm_topic_move = 'Du har ikke tillatelse til å flytte dette emne';
		$this->mod_perm_topic_pin = 'Du har ikke tillatelse til å markere dette emne.';
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = 'Du har ikke tillatelse til å låse opp dette emne.';
		$this->mod_perm_topic_unpin = 'Du har ikke tillatelse til å fjerne markeringen på dette emne.';
		$this->mod_success_post_delete = 'Innlegget er slettet.';
		$this->mod_success_post_edit = 'Innlegget er redigert.';
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'Emnet er slettet.';
		$this->mod_success_topic_edit = 'Emnet er redigert.';
		$this->mod_success_topic_move = 'Emnet er flyttet til til et nytt forum.';
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
		$this->pm_cant_del = 'Du har ikke tillatelse til å slette denne meldingen.';
		$this->pm_delallmsg = 'Slett alle meldinger';
		$this->pm_delete = 'Slette';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = 'Meldingen er slettet.';
		$this->pm_deleted_all = 'Meldingene er slettet.';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Meldingen kunne ikke sendes. Forsikre deg om at alle felt er utfyllt.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Innboks';
		$this->pm_folder_new = '%s nye';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Fra';
		$this->pm_group = 'Gruppe';
		$this->pm_guest = 'Som gjest kan du ikke benytte meldinger. Logg inn eller registrere deg.';
		$this->pm_joined = 'Innmeldt';
		$this->pm_messenger = 'Meldinger';
		$this->pm_msgtext = 'Meldingstekst';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Du må velge en katalog.';
		$this->pm_no_member = 'Ingen bruker ble funnet med denne ID.';
		$this->pm_no_number = 'Ingen melding ble funnet med det det nummeret.';
		$this->pm_no_title = 'Emne mangler';
		$this->pm_nomsg = 'Det finnes ingen meldinger i denne katalog.';
		$this->pm_noview = 'Du har ikke tillatelse til å lese denne meldingen.';
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_personal = 'Meldinger';
		$this->pm_personal_msging = 'Personligt melding';
		$this->pm_pm = 'PM'; //Translate
		$this->pm_posts = 'Innlegg';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Svar';
		$this->pm_send = 'Send'; //Translate
		$this->pm_sendamsg = 'Send en melding';
		$this->pm_sendingpm = 'Send en personlig melding';
		$this->pm_sendon = 'Sending på';
		$this->pm_success = 'Meldingen er sendt.';
		$this->pm_sure_del = 'Er du sikker på at du vil slette denne meldingen?';
		$this->pm_sure_delall = 'Er du sikker på at du vil slette alle meldinger i denne katalog?';
		$this->pm_title = 'Tittel';
		$this->pm_to = 'Til';
	}

	function post()
	{
		$this->post_attach = 'Vedlegg';
		$this->post_attach_add = 'Vedlegg filer';
		$this->post_attach_disrupt = 'Legge til eller ta bort vedlagte filer vil ikke påvirke ditt innlegg.';
		$this->post_attach_failed = 'Opplasting av vedlegget gikk feil. Filen du spesifiserte finnes muligens ikke.';
		$this->post_attach_not_allowed = 'You cannot attach files of that type.'; //Translate
		$this->post_attach_remove = 'Ta bort vedlagte fil';
		$this->post_attach_too_large = 'Den vedlagte filen er for stor.. Maksimal størrelse er %d kilobyte.';
		$this->post_cant_create = 'Som gjest har du ikke tillatelse til å legge inn nytt emne. Hvis du registrerer deg kan du ha mulighet til å gjøre dette.';
		$this->post_cant_create1 = 'Du har ikke tillatelse til å legge inn nytt emne.';
		$this->post_cant_enter = 'Din stemme ble ikke registrert. Enten har du allerede stemt eller så har du ikke tilgang til å stemme.';
		$this->post_cant_poll = 'Som gjest har du ikke tillatelse til å lage avstemminger. Hvis du registrerer deg kan du ha mulighet til å gjøre dette.';
		$this->post_cant_poll1 = 'Du har ikke tillatelse til å lage avstemminger.';
		$this->post_cant_reply = 'Du har ikke tillatelse til å svare på emner i dette forumet.';
		$this->post_cant_reply1 = 'Som gjest har du ikke tillatelse til å svare på emner. Hvis du registrerer deg kan du ha mulighet til å gjøre dette.';
		$this->post_cant_reply2 = 'Du har ikke tillatelse til å svare på emne.';
		$this->post_closed = 'Dette emne er stengt.';
		$this->post_create_poll = 'Lage avstemming';
		$this->post_create_topic = 'Lage emne';
		$this->post_creating = 'Lager emne';
		$this->post_creating_poll = 'Lager avstemming';
		$this->post_flood = 'Du har lagt inn et innlegg de siste %s sekundene, og kan ikke legge inn et nytt innlegg nå.<br /><br />Prøv igjen om ytterligere noen sekunder.';
		$this->post_guest = 'Gjest';
		$this->post_icon = 'Innleggsikon';
		$this->post_last_five = 'siste fem innlegg i omvendt rekkefølge';
		$this->post_length = 'Kontrollere lengden';
		$this->post_mbcode_address = 'Skriv inn en adresse';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Blå';
		$this->post_mbcode_bold = 'Uthevet';
		$this->post_mbcode_bold1 = 'U';
		$this->post_mbcode_chocolate = 'Sjokolade';
		$this->post_mbcode_code = 'Kode';
		$this->post_mbcode_color = 'Farge';
		$this->post_mbcode_coral = 'Korall';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Blodrød';
		$this->post_mbcode_darkblue = 'Mørkeblå';
		$this->post_mbcode_darkred = 'Mørkerød';
		$this->post_mbcode_deepink = 'Rosa';
		$this->post_mbcode_detail = 'Skriv inn en beskrivelse';
		$this->post_mbcode_email = 'E-post';
		$this->post_mbcode_firered = 'Ildrød';
		$this->post_mbcode_font = 'Font'; //Translate
		$this->post_mbcode_green = 'Grønn';
		$this->post_mbcode_huge = 'Størst';
		$this->post_mbcode_image = 'Bilde';
		$this->post_mbcode_image1 = 'Bilde';
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Kursiv';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Stor';
		$this->post_mbcode_length = 'Ditt innlegg er "+length+" tegn.';
		$this->post_mbcode_limegreen = 'Lime Grønn';
		$this->post_mbcode_medium = 'Medium'; //Translate
		$this->post_mbcode_orange = 'Orange'; //Translate
		$this->post_mbcode_orangered = 'Orange Rød';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Purpur';
		$this->post_mbcode_quote = 'Sitere';
		$this->post_mbcode_red = 'Rød';
		$this->post_mbcode_royalblue = 'Lyseblå';
		$this->post_mbcode_sandybrown = 'Sandbrun';
		$this->post_mbcode_seagreen = 'Sjøgrønn';
		$this->post_mbcode_sienna = 'Brun';
		$this->post_mbcode_silver = 'Sølv';
		$this->post_mbcode_size = 'Størrelse';
		$this->post_mbcode_skyblue = 'Himmelblå';
		$this->post_mbcode_small = 'Liten';
		$this->post_mbcode_strike = 'Gjennomstreking';
		$this->post_mbcode_strike1 = 'g';
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Turkis';
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Minst';
		$this->post_mbcode_tomato = 'Tomat';
		$this->post_mbcode_underline = 'Understreking';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Beige';
		$this->post_mbcode_yellow = 'Yellow'; //Translate
		$this->post_msg = 'Melding';
		$this->post_must_msg = 'Du må skrive en melding i innlegget.';
		$this->post_must_options = 'Du må inkludere valg når du lager en avstemming.';
		$this->post_must_title = 'Du må skrive en titel når du skal lage et nytt emne.';
		$this->post_new_poll = 'Ny avstemming';
		$this->post_new_topic = 'Nytt emne';
		$this->post_no_forum = 'Forumet finnes ikke.';
		$this->post_no_topic = 'Ikke noe emne er valg.';
		$this->post_no_vote = 'Du må velge en valg når du skal stemme.';
		$this->post_option_emoticons = 'Konvertere Smileys till bilder?';
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'Formatere MbKod?';
		$this->post_optional = 'valgfri';
		$this->post_options = 'Alternativ';
		$this->post_poll_options = 'Avstemmingsvalg';
		$this->post_poll_row = 'En pr linje';
		$this->post_posted = 'Skrevet';
		$this->post_posting = 'Skriver innlegg';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Svare';
		$this->post_reply_topic = 'Svare på emne';
		$this->post_replying = 'Svarer på emne';
		$this->post_replying1 = 'Svarer';
		$this->post_smiles = 'Klikkbare Smilies';
		$this->post_too_many_options = 'Du må ha mellom 2 och %d alternativ i en avstemming.';
		$this->post_topic_detail = 'Emnebeskrivelse';
		$this->post_topic_title = 'Emnetittel';
		$this->post_view_topic = 'Vise alle innlegg';
		$this->post_voting = 'Stemmer';
	}

	function printer()
	{
		$this->printer_back = 'Tillbake';
		$this->printer_not_found = 'Emnet finnes ikke. Det kan ha blitt slettet, flyttet eller det har aldri eksistert..';
		$this->printer_not_found_title = 'Emne finnes ikke';
		$this->printer_perm_topics = 'Du har ikke tillatelse til å se på emner.';
		$this->printer_perm_topics_guest = 'Du har ikke tillatelse til å se emner. Hvis du registrerer deg kan du ha mulighet til å gjøre dette.';
		$this->printer_posted_on = 'Skrevet';
		$this->printer_send = 'Skriv ut';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM Navn';
		$this->profile_av_sign = 'Avatara og signatur';
		$this->profile_avatar = 'Avatara';
		$this->profile_bday = 'Fødselsdag';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'E-post adresse';
		$this->profile_fav = 'Favoritt forum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = 'ICQ Nummer';
		$this->profile_info = 'Informasjon';
		$this->profile_interest = 'Interesser';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Siste innlegg';
		$this->profile_list = 'Medlemsliste';
		$this->profile_location = 'Plassering';
		$this->profile_member = 'Medlemsgruppe';
		$this->profile_member_title = 'Medlemstittel';
		$this->profile_msn = 'MSN navn';
		$this->profile_must_user = 'Du må skrive inn et brukernavn for å se en profil.';
		$this->profile_no_member = 'Det finnes ingen brukere med denne brukerID. Kontoen kan være slettet.';
		$this->profile_none = '[ Ingen ]';
		$this->profile_not_post = 'har ikke skrevet noen innlegg enda.';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Send en personlig melding til denne brukeren';
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'Innlegg';
		$this->profile_private = '[ Privat ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Signatur';
		$this->profile_unkown = '[ Ukjent ]';
		$this->profile_view_profile = 'Viser profil';
		$this->profile_www = 'Hjemmeside';
		$this->profile_yahoo = 'Yahoo navn';
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
		$this->recent_can_post = 'Du kan svare i dette forumet.';
		$this->recent_can_topics = 'Du kan lese emner i dette forumet.';
		$this->recent_cant_post = 'Du kan ikke svare i dette forumet.';
		$this->recent_cant_topics = 'Du kan ikke se på emner i dette forumet.';
		$this->recent_dot = 'punktum';
		$this->recent_dot_detail = 'Viser at du skrevet innlegg i dette emnet';
		$this->recent_forum = 'Forum'; //Translate
		$this->recent_guest = 'Gjest';
		$this->recent_hot = 'Hot'; //Translate
		$this->recent_icon = 'Meldingsikon';
		$this->recent_jump = 'Hoppe til nyeste innlegg i emnet';
		$this->recent_last = 'Siste innlegg';
		$this->recent_locked = 'Lest';
		$this->recent_moved = 'Flyttet';
		$this->recent_msg = '%s melding';
		$this->recent_new = 'Ny';
		$this->recent_new_poll = 'Lage ny avstemming';
		$this->recent_new_topic = 'Lage nytt emne';
		$this->recent_no_topics = 'Det finnes ingen emner å vise i dette forumet.';
		$this->recent_noexist = 'Forumet eksisterer ikke.';
		$this->recent_nopost = 'Ingen innlegg';
		$this->recent_not = 'Ikke';
		$this->recent_noview = 'Du har ikke tiletelse å se på forum.';
		$this->recent_pages = 'Sider';
		$this->recent_pinned = 'Merket';
		$this->recent_pinned_topic = 'Merket emne';
		$this->recent_poll = 'Avstemmning';
		$this->recent_regfirst = 'Du har ikkee tilgang til å se på forum uten først å registrere deg.';
		$this->recent_replies = 'Svar';
		$this->recent_starter = 'Oppretter';
		$this->recent_sub = 'Sub-forum';
		$this->recent_sub_last_post = 'Siste innlegg';
		$this->recent_sub_replies = 'Svar';
		$this->recent_sub_topics = 'Emner';
		$this->recent_subscribe = 'Motta e-post når det kommer nye innlegg i dette forum.';
		$this->recent_topic = 'Emne';
		$this->recent_topics_new = 'Det finnes nye innlegg i dette forumet.';
		$this->recent_topics_old = 'Det finnes ingen nye innlegg i dette forumet.';
		$this->recent_views = 'Visninger';
		$this->recent_write_topics = 'Du kan lage nye emner i dette forumet.';
	}

	function register()
	{
		$this->register_activated = 'Din brukerkonto er aktivert!';
		$this->register_activating = 'Brukerkonto aktivering';
		$this->register_activation_error = 'Det uppstod en feil når din brukerkonto skulle aktiveres. Kontroller at din nettleser har den komplette aktiveringsadressen fra e-posten. Om problemet vedvarer, kontakt forumets administrator for å få tilsendt en ny e-post mned aktiveringslink.';
		$this->register_confirm_passwd = 'Bekrefte passordet';
		$this->register_done = 'Du er registrert! Du kan nå logge in.';
		$this->register_email = 'E-post Adresse';
		$this->register_email_invalid = 'E-post adressen du skrev inn er ugyldig.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'E-post adressen du skrev inn er allerede i bruk.';
		$this->register_fields = 'Alla felt er ikke utfylt.';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'You have been registered. An email has been sent to %s with information on how to activate your account. Your account will be limited until you activate it.'; //Translate
		$this->register_name_invalid = 'Navnet du skrev inn er for langt.';
		$this->register_name_taken = 'Det medlemsnavnet er allerede i bruk.';
		$this->register_new_user = 'Ønsket brukernavn';
		$this->register_pass_invalid = 'Passordet du skrev inn er ugyldig. Forsikre deg om at det bare inneholder gyldige tegn som bokstaver, siffer, strek, understrek og mellomrom. Passordet må også inneholde minst 5 tegn.';
		$this->register_pass_match = 'Passordene du skrev inn er ikke like.';
		$this->register_passwd = 'Passord';
		$this->register_reg = 'Registrere';
		$this->register_reging = 'Registrering';
		$this->register_tos_i_agree = 'I agree to the above terms'; //Translate
		$this->register_tos_read = 'Please read the following terms of service'; //Translate
	}

	function rssfeed()
	{
		$this->rssfeed_posted_by = 'Posted by'; //Translate
	}

	function search()
	{
		$this->search_advanced = 'Avanserte alternativer';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Enkel søking';
		$this->search_characters = 'tegnene i et innlegg';
		$this->search_day = 'dag';
		$this->search_days = 'dager';
		$this->search_exact_name = 'eksakt navn';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Søk etter';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Gjest';
		$this->search_in = 'Søk i';
		$this->search_in_posts = 'Søk bare i innlegg';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Innmeldt';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Søk etter ord';
		$this->search_matches = 'Treff';
		$this->search_month = 'måned';
		$this->search_months = 'måneder';
		$this->search_mysqldoc = 'MySQL Documentation'; //Translate
		$this->search_newer = 'nyere';
		$this->search_no_results = 'Ditt søk ga ingen resultat.';
		$this->search_no_words = 'Du må oppgi noen søkeord.<br /><br />Hvert søkeord må være minst 3 tegn inklusiv bokstaver, siffer, apostrofer og understrek.';
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = 'eldre';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Vise kun de første';
		$this->search_partial_name = 'deler av navnet';
		$this->search_post_icon = 'Innleggsikon';
		$this->search_posted_on = 'Skrevet';
		$this->search_posts = 'Innlegg';
		$this->search_posts_by = 'Kun i innlegg av';
		$this->search_regex = 'Søk med vanlige uttrykk';
		$this->search_regex_failed = 'Your regular expression failed. Please see the MySQL documentation for regular expression help.'; //Translate
		$this->search_relevance = 'Relevans: %d%%';
		$this->search_replies = 'Innlegg';
		$this->search_result = 'Søkeresultat';
		$this->search_search = 'Søk';
		$this->search_select_all = 'Velg alle';
		$this->search_show_posts = 'Vis innlegg med treff';
		$this->search_sound = 'Søk phonetisk';
		$this->search_starter = 'Skaper';
		$this->search_than = 'than'; //Translate
		$this->search_topic = 'Emne';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'uke';
		$this->search_weeks = 'uker';
		$this->search_year = 'år';
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
		$this->upgrade_skin = 'Upgrade Skin'; //Translate
		$this->upgrade_skin_already = 'was already upgraded. Nothing to do.'; //Translate
		$this->upgrade_skin_detail = 'Skins upgraded using this method will still require template editing afterwards.<br />Select a skin to upgrade'; //Translate
		$this->upgrade_skin_upgraded = 'skin has been upgraded.'; //Translate
		$this->upgraded_templates = 'The following templates were added'; //Translate
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
		$this->topic_attached = 'Vedlagt fil:';
		$this->topic_attached_downloads = 'nedlastninger';
		$this->topic_attached_perm = 'Du har ikke tilgang til å laste ned denne filen.';
		$this->topic_attached_title = 'Vedlagt fil';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = 'Lage ny avstemming';
		$this->topic_create_topic = 'Lage nytt emne';
		$this->topic_delete = 'Slette';
		$this->topic_delete_post = 'Slette dette innlegg';
		$this->topic_edit = 'Redigere';
		$this->topic_edit_post = 'Redigere dette innlegg';
		$this->topic_edited = 'Sist redigert %s av %s';
		$this->topic_error = 'Feil';
		$this->topic_group = 'Gruppe';
		$this->topic_guest = 'Gjest';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Innmeldt';
		$this->topic_level = 'Medelemsnivå';
		$this->topic_links_aim = 'Send en AIM melding til %s';
		$this->topic_links_email = 'Send en e-post til %s';
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'Send en ICQ melding til %s';
		$this->topic_links_msn = 'Vise %s\'s MSN profil';
		$this->topic_links_pm = 'Send en personlig melding til %s';
		$this->topic_links_web = 'Besøk %s\'s hjemmeside';
		$this->topic_links_yahoo = 'Send en melding til %s med Yahoo! Messenger';
		$this->topic_lock = 'Les';
		$this->topic_locked = 'Emnet er låst';
		$this->topic_move = 'Flytte';
		$this->topic_no_votes = 'Det finnes ingen stemmer i denne avstemmingen.';
		$this->topic_not_found = 'Emnet finnes ikke';
		$this->topic_not_found_message = 'Emnet finnes ikke. Det kan ha blitt slettet, flyttet eller så har det aldri eksistert.';
		$this->topic_offline = 'This member is currently offline'; //Translate
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Emne alternativ';
		$this->topic_pages = 'Sider';
		$this->topic_perm_view = 'Du har ikke tillatelse til å lese emner.';
		$this->topic_perm_view_guest = 'Du har ikke tillatelse til å lese emner før du har registret deg.';
		$this->topic_pin = 'Merk';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = 'Innlegg';
		$this->topic_print = 'Vise i utskriftsvennlig format';
		$this->topic_quote = 'Svare med dette innlegg som sitat';
		$this->topic_reply = 'Svare på emne';
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = 'Motta e-post når det kommer nye innlegg i dette emne.';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'Lås opp';
		$this->topic_unpin = 'Fjerne merke';
		$this->topic_unreg = 'Uregistrert';
		$this->topic_view = 'Vise resultat';
		$this->topic_viewing = 'Viser emne';
		$this->topic_vote = 'Stemm';
		$this->topic_vote_count_plur = '%d stemmer';
		$this->topic_vote_count_sing = '%d stemme';
		$this->topic_votes = 'Stemmer';
	}

	function universal()
	{
		$this->aim = 'AIM'; //Translate
		$this->based_on = 'based on';
		$this->board_by = 'Av';
		$this->charset = 'iso-8859-1';
		$this->continue = 'Continue'; //Translate
		$this->delete = 'Delete'; //Translate
		$this->direction = 'ltr'; //Translate
		$this->edit = 'Edit'; //Translate
		$this->email = 'Email'; //Translate
		$this->gtalk = 'GT'; //Translate
		$this->icq = 'ICQ'; //Translate
		$this->msn = 'MSN'; //Translate
		$this->new_message = 'New Message'; //Translate
		$this->new_poll = 'New Poll'; //Translate
		$this->new_topic = 'New Topic'; //Translate
		$this->no = 'No'; //Translate
		$this->powered = 'Powered by'; //Translate
		$this->private_message = 'PM'; //Translate
		$this->quote = 'Quote'; //Translate
		$this->reply = 'Reply'; //Translate
		$this->seconds = 'Seconds'; //Translate
		$this->sep_decimals = ',';
		$this->sep_thousands = ' ';
		$this->submit = 'Send';
		$this->subscribe = 'Subscribe'; //Translate
		$this->today = 'Today'; //Translate
		$this->website = 'WWW'; //Translate
		$this->yahoo = 'Yahoo'; //Translate
		$this->yes = 'Yes'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}
}
?>