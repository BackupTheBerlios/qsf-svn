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
 * German language module
 *
 * @author Christian Tietze <c.tietze@art-fx.org>
 * @since 1.1.0
 **/
class de
{
	function active()
	{
		$this->active_last_action = 'Letzte Aktion';
		$this->active_modules_active = 'Aktive User anzeigen';
		$this->active_modules_board = 'Index anzeigen';
		$this->active_modules_cp = 'Benutze Kontrollzentrum';
		$this->active_modules_forum = 'Forum: %s';
		$this->active_modules_help = 'Benutze Hilfe';
		$this->active_modules_login = 'Ein/Ausloggen';
		$this->active_modules_members = 'Zeige Mitgliederliste';
		$this->active_modules_mod = 'Moderieren';
		$this->active_modules_pm = 'Benutze Messenger';
		$this->active_modules_post = 'Beitrag';
		$this->active_modules_printer = 'Thema drucken: %s';
		$this->active_modules_profile = 'Profil: %s';
		$this->active_modules_recent = 'Viewing recent posts'; //Translate
		$this->active_modules_search = 'Suche';
		$this->active_modules_topic = 'Thema: %s';
		$this->active_time = 'Zeit';
		$this->active_user = 'User'; //Translate
		$this->active_users = 'Aktive User';
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
		$this->board_active_users = 'Aktive User';
		$this->board_birthdays = 'Heutiger Geburtstag';
		$this->board_bottom_page = 'Go to the bottom of the page'; //Translate
		$this->board_can_post = 'Du kannst in diesem Forum antworten.';
		$this->board_can_topics = 'Du kannst in diesem Forum Themen sehen aber nicht erstellen.';
		$this->board_cant_post = 'Du kannst in diesem Forum nicht antworten.';
		$this->board_cant_topics = 'Du kannst in diesem Forum keine Themen sehen oder erstellen.';
		$this->board_forum = 'Forum'; //Translate
		$this->board_guests = 'Gäste';
		$this->board_last_post = 'Letzter Beitrag';
		$this->board_mark = 'Beiträge als gelesen markieren';
		$this->board_mark1 = 'Alle Beiträge und Foren wurden als gelesen markiert.';
		$this->board_members = 'Mitglieder';
		$this->board_message = '%s Nachricht';
		$this->board_most_online = 'Der Rekord liegt bei %d Usern gleichzeitig (%s).';
		$this->board_nobday = 'Kein Mitglied hat heute Geburtstag.';
		$this->board_nobody = 'Momentan sind keine Mitglieder online.';
		$this->board_nopost = 'Keine Beiträge';
		$this->board_noview = 'Du hast nicht die Erlaubnis, dieses Board zu sehen.';
		$this->board_regfirst = 'Du hast nicht die Erlaubnis, dieses Board zu sehen - vielleicht wenn du dich registrierst.';
		$this->board_replies = 'Antworten';
		$this->board_stats = 'Statistiken';
		$this->board_stats_string = '%s User sind registriert. Unser neustes Mitglied ist %s.<br />Es gibt %s Topics und %s Antworten mit einer Gesamtzahl von %s Posts.';
		$this->board_top_page = 'Go to the top of the page'; //Translate
		$this->board_topics = 'Themen';
		$this->board_users = 'User';
		$this->board_write_topics = 'Du kannst Themen sehen und erstellen.';
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
		$this->cp_aim = 'AIM Bildschirmname';
		$this->cp_already_member = 'Die eingegebene Emailadresse ist bereits einem Mitglied zugeordnet.';
		$this->cp_apr = 'April'; //Translate
		$this->cp_aug = 'August'; //Translate
		$this->cp_avatar_current = 'Dein momentaner Avatar';
		$this->cp_avatar_error = 'Avatarproblem';
		$this->cp_avatar_must_select = 'Du musst einen Avatar auswählen.';
		$this->cp_avatar_none = 'Benutze keinen Avatar';
		$this->cp_avatar_pixels = 'Pixel';
		$this->cp_avatar_select = 'Wähle einen Avatar aus';
		$this->cp_avatar_size_height = 'Die Höhe des Avatars liegt zwischen 1 und';
		$this->cp_avatar_size_width = 'Die Breite des Avatars liegt zwischen 1 und';
		$this->cp_avatar_upload = 'Lade einen Avatar von deiner Festplatte hoch';
		$this->cp_avatar_upload_failed = 'Der Upload ist schiefgegangen.  Die Datei existiert möglicherweise nicht.';
		$this->cp_avatar_upload_not_image = 'Du kannst Bilder nur hochladen um sie als Avatar zu benutzen.';
		$this->cp_avatar_upload_too_large = 'Der Avatar ist zu groß, um ihn hochzuladen. Das Limit beträgt %d kb.';
		$this->cp_avatar_url = 'Wähle eine URL für deinen Avatar';
		$this->cp_avatar_use = 'Benutze deinen hochgeladenen Avatar';
		$this->cp_bday = 'Geburtstag';
		$this->cp_been_updated = 'Dein Profil wurde aktualisiert.';
		$this->cp_been_updated1 = 'Dein Avatar wurde aktualisiert.';
		$this->cp_been_updated_prefs = 'Deine Präferenzen wurden aktualisiert.';
		$this->cp_changing_pass = 'Passwort editieren';
		$this->cp_contact_pm = 'Erlaube es Anderen, dich via Messenger zu kontaktieren?';
		$this->cp_cp = 'Kontrollzentum';
		$this->cp_current_avatar = 'Aktueller Avatar';
		$this->cp_current_time = 'Es ist momentan %s.';
		$this->cp_custom_title = 'Custom Member Title'; //Translate
		$this->cp_custom_title2 = 'This is a privledge reserved for board administrators'; //Translate
		$this->cp_dec = 'Dezember';
		$this->cp_editing_avatar = 'Editiere Avatar';
		$this->cp_editing_profile = 'Editiere Profil';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Erlaube es Anderen, dich via Email zu kontaktieren?';
		$this->cp_email_invaid = 'Die eingegebene Emailadresse ist inkorrekt.';
		$this->cp_err_avatar = 'Fehler beim Aktualisieren des Avatars';
		$this->cp_err_updating = 'Fehler beim Aktualisieren des Profils';
		$this->cp_feb = 'Februar';
		$this->cp_file_type = 'Der eingebene Avatar ist nicht in Ordnung. Gehe sicher, das die URL richtig eingegeben ist und die Datei entweder die Endung GIF, JPG oder PNG hat.';
		$this->cp_format = 'Namensformatierung';
		$this->cp_gtalk = 'GTalk Account'; //Translate
		$this->cp_header = 'User Kontrollzentum';
		$this->cp_height = 'Höhe';
		$this->cp_icq = 'ICQ Nummer';
		$this->cp_interest = 'Hobby';
		$this->cp_jan = 'Januar';
		$this->cp_july = 'Juli';
		$this->cp_june = 'Juni';
		$this->cp_label_edit_avatar = 'Editiere Avatar';
		$this->cp_label_edit_pass = 'Editiere Passwort';
		$this->cp_label_edit_prefs = 'Editiere Einstellungen';
		$this->cp_label_edit_profile = 'Editiere Profil';
		$this->cp_label_edit_subs = 'Editiere Abonnements';
		$this->cp_language = 'Sprache';
		$this->cp_less_charac = 'Dein Name muss kleiner als 32 Zeichen sein.';
		$this->cp_location = 'Ort';
		$this->cp_login_first = 'Du musst dich einloggen, um zu deinem Kontrollzentum zu gelangen.';
		$this->cp_mar = 'März';
		$this->cp_may = 'Mai';
		$this->cp_msn = 'MSN Identität';
		$this->cp_must_orig = 'Dein Name muss identisch mit dem Original sein. Du kannst nur die Klein/Großschreibung sowie den Abstand ändern.';
		$this->cp_new_notmatch = 'Die neuen eingegebenen Passwörter stimmen nicht überein.';
		$this->cp_new_pass = 'Neues Passwort';
		$this->cp_no_flash = 'Flash Avatare sind auf diesem Board nicht erlaubt.';
		$this->cp_not_exist = 'Das spezifizierte Datum (%s) existiert nicht!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Oktober';
		$this->cp_old_notmatch = 'Das alte eingegebene Passwort stimmt nicht mit dem in der Datenbank überein.';
		$this->cp_old_pass = 'Altes Passwort';
		$this->cp_pass_notvaid = 'Dein Passwort ist nicht gültig. Gehe sicher, das nur gültige Zeichen benutzt werden wie z.B. Buchstaben, Zahlen, Bindestriche, Unterstriche oder Leerzeichen.';
		$this->cp_preferences = 'Verändere Einstellungen';
		$this->cp_privacy = 'Private Optionen';
		$this->cp_repeat_pass = 'Wiederhole das neue Passwort';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Deine Aktionen anzeigen, wenn du im Forum bist?';
		$this->cp_show_email = 'Email Adresse im Profil anzeigen?';
		$this->cp_signature = 'Signatur';
		$this->cp_size_max = 'Die eingegebene Größe des Avatars ist zu groß. Die maximale Größe beträgt %s x %s Pixel.';
		$this->cp_skin = 'Forenskin';
		$this->cp_sub_change = 'Verändere Abonnements';
		$this->cp_sub_delete = 'Löschen';
		$this->cp_sub_expire = 'Verfallsdatum';
		$this->cp_sub_name = 'Abonnementname';
		$this->cp_sub_no_params = 'Keine Parameter angegeben.';
		$this->cp_sub_success = 'Du hast nun %s abonniert.';
		$this->cp_sub_type = 'Abonnementtyp';
		$this->cp_sub_updated = 'Ausgewählte Abonnements wurden gelöscht.';
		$this->cp_topic_option = 'Themen Optionen';
		$this->cp_updated = 'Profile aktualisiert';
		$this->cp_updated1 = 'Avatar aktualisiert';
		$this->cp_updated_prefs = 'Einstellungen aktualisiert';
		$this->cp_user_exists = 'Ein User mit diesem Namen existiert bereits.';
		$this->cp_valided = 'Dein Passwort war gültig und wurde geändert.';
		$this->cp_view_avatar = 'Avatare anzeigen?';
		$this->cp_view_emoticon = 'Smilies anzeigen?';
		$this->cp_view_signature = 'Signaturen anzeigen?';
		$this->cp_welcome = 'Willkommen im User-Kontrollzentrum. Hier kannst du deinen Account konfigurieren. Bitte wähle von den oberen Optionen aus.';
		$this->cp_width = 'Länge';
		$this->cp_www = 'Homepage'; //Translate
		$this->cp_yahoo = 'Yahoo';
		$this->cp_zone = 'Zeitzone';
	}

	function email()
	{
		$this->email_blocked = 'Das Mitglied akzeptiert über dieses Board keine Emails.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Emailtext:';
		$this->email_no_fields = 'Geh zurück und gehe sicher, das Felder ausgefüllt sind.';
		$this->email_no_member = 'Es wurde kein Mitglied mit diesem Namen gefunden';
		$this->email_no_perm = 'Du hast keine Erlaubnis in diesem Board Emails zu schreiben.';
		$this->email_sent = 'Deine Email wurde verschickt.';
		$this->email_subject = 'Betreff:';
		$this->email_to = 'An:';
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
		$this->forum_by = 'Von';
		$this->forum_can_post = 'Du kannst in diesem Forum antworten.';
		$this->forum_can_topics = 'Du kannst in diesem Forum Themen sehen.';
		$this->forum_cant_post = 'Du kannst in diesem Forum nicht antworten.';
		$this->forum_cant_topics = 'Du kannst in diesem Forum keine Themen sehen.';
		$this->forum_dot = 'Punkt';
		$this->forum_dot_detail = 'zeigt, das du im Thema beigetragen hast';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Gast';
		$this->forum_hot = 'Heiß';
		$this->forum_icon = 'Nachrichtsymbol';
		$this->forum_jump = 'Springe zum neuestem Beitrag im Thema';
		$this->forum_last = 'Letzter Beitrag';
		$this->forum_locked = 'Gesperrt';
		$this->forum_moved = 'Verschoben';
		$this->forum_msg = '%s Nachricht';
		$this->forum_new = 'Neu';
		$this->forum_new_poll = 'Erstelle neue Umfrage';
		$this->forum_new_topic = 'Erstelle neues Thema';
		$this->forum_no_topics = 'Es gibt keine Themen in diesem Forum anzuzeigen.';
		$this->forum_noexist = 'Das ausgewählte Forum existiert nicht.';
		$this->forum_nopost = 'Keine Beiträge';
		$this->forum_not = 'Nicht';
		$this->forum_noview = 'Du hast nicht die Erlaubnis Foren zu sehen.';
		$this->forum_pages = 'Seiten';
		$this->forum_pinned = 'Genagelt';
		$this->forum_pinned_topic = 'Genageltes Thema';
		$this->forum_poll = 'Umfrage';
		$this->forum_regfirst = 'Du hast nicht die Erlaubnis Foren zu sehen – vielleicht wenn du dich registrierst.';
		$this->forum_replies = 'Antworten';
		$this->forum_starter = 'Ersteller';
		$this->forum_sub = 'Unterforum';
		$this->forum_sub_last_post = 'Letzter Beitrag';
		$this->forum_sub_replies = 'Antworten';
		$this->forum_sub_topics = 'Themen';
		$this->forum_subscribe = 'Benachrichtige mich per Email wenn Beiträge in diesem Forum geschrieben wurden';
		$this->forum_topic = 'Thema';
		$this->forum_views = 'Gesehen';
		$this->forum_write_topics = 'Du kannst in diesem Forum Themen erstellen.';
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
		$this->help_available_files = 'Hilfe';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'Es gibt keine Hilfedateien in der Datenbank.';
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
		$this->login_cant_logged = 'Du konntest dich nicht anmelden. Überprüfe die Richtigkeit deines Usernamens und des Passworts.<br /><br />Sie sind Zeichensensibel, so \'UsErNaMe\' ist anders als \'Username\'. Überprüfe weiterhin das Cookies im Browser aktiviert sind.';
		$this->login_cookies = 'Cookies müssen zum Anmelden aktiviert sein.';
		$this->login_forgot_pass = 'Passwort vergessen?';
		$this->login_header = 'Angemeldet';
		$this->login_logged = 'Du bist nun angemeldet.';
		$this->login_now_out = 'Du bist nun abgemeldet.';
		$this->login_out = 'Abmelden';
		$this->login_pass = 'Passwort';
		$this->login_pass_no_id = 'Es gibt kein Mitglied mit dem eingegebenen Usernamen.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Passwort zurücksetzen';
		$this->login_pass_sent = 'Dein Passwort wurde zurückgesetzt. Das neue Passwort wurde an die angegebene Emailaddresse verschickt.';
		$this->login_sure = 'Bist du dir sicher das du dich von \'%s\' abmelden willst?';
		$this->login_user = 'Username';
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
		$this->main_activate = 'Dein Account wurde noch nicht aktiviert.';
		$this->main_activate_resend = 'Sende Aktivationsemail erneut';
		$this->main_admincp = 'Admin Kontrollzentrum';
		$this->main_banned = 'Du wurdest vom Board gebannt.';
		$this->main_code = 'Code'; //Translate
		$this->main_cp = 'Kontrollzentrum';
		$this->main_full = 'Voll';
		$this->main_help = 'Hilfe';
		$this->main_load = 'Lade';
		$this->main_login = 'Anmelden';
		$this->main_logout = 'Abmelden';
		$this->main_mark = 'mark all'; //Translate
		$this->main_mark1 = 'Mark all topics as read'; //Translate
		$this->main_max_load = 'Es tut uns leid, aber %s ist momentan nicht erreichbar, weil uz viele User online sind.';
		$this->main_members = 'Mitglieder';
		$this->main_messenger = 'Nachrichtenzentrale';
		$this->main_new = 'Neu';
		$this->main_next = 'Nächste';
		$this->main_prev = 'Vorherige';
		$this->main_queries = 'Anfragen';
		$this->main_quote = 'Zitat';
		$this->main_recent = 'recent posts'; //Translate
		$this->main_recent1 = 'View recent topics since your last visit'; //Translate
		$this->main_register = 'Registriere';
		$this->main_reminder = 'Erinnere';
		$this->main_reminder_closed = 'Das Board ist geschlossen und kann nur von Admins eingesehen werden.';
		$this->main_said = 'schrieb';
		$this->main_search = 'Suche';
		$this->main_topics_new = 'There are new posts in this forum.'; //Translate
		$this->main_topics_old = 'There are no new posts in this forum.'; //Translate
		$this->main_welcome = 'Willkommen';
		$this->main_welcome_guest = 'Willkommen!';
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
		$this->members_all = 'Alle';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = 'Miglied Email senden?';
		$this->members_group = 'Gruppe';
		$this->members_joined = 'Teilgenommen';
		$this->members_list = 'Mitgliederliste';
		$this->members_member = 'Mitglied';
		$this->members_pm = 'PN';
		$this->members_posts = 'Beiträge';
		$this->members_send_pm = 'Schicke dem User eine persönliche Nachricht';
		$this->members_title = 'Titel';
		$this->members_vist_www = 'Besuche des Mitglied\'s Webseite';
		$this->members_www = 'Webseite';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Bist du dir sicher, das du diesen Beitrag löschen willst?';
		$this->mod_confirm_topic_delete = 'Bist du dir sicher, das du dieses Thema löschen willst?';
		$this->mod_error_first_post = 'Du kannst den ersten Beitrag eines Themas nicht löschen.';
		$this->mod_error_move_category = 'Du kannst ein Thema nicht zu einer Kategorie verschieben.';
		$this->mod_error_move_create = 'Du hast keine erlaubnis, Themen in dem Forum zu verschieben.';
		$this->mod_error_move_forum = 'Du kannst das Thema nicht zu einem nicht existierendem Forum verschieben.';
		$this->mod_error_move_global = 'Du kannst kein globales Thema vershcieben. Editiere es vorher!';
		$this->mod_error_move_same = 'Du kannst das Thema nicht in ein Forum verschieben, indem es sich schon befindet.';
		$this->mod_label_controls = 'Moderator Kontrolle';
		$this->mod_label_description = 'Beschreibung';
		$this->mod_label_emoticon = 'Konvertiere Smilies in Bilder?';
		$this->mod_label_global = 'Globales Thema';
		$this->mod_label_mbcode = 'Formatiere MbCode?';
		$this->mod_label_move_to = 'Verschiebe zu';
		$this->mod_label_options = 'Optionen';
		$this->mod_label_post_delete = 'Lösche Beitrag';
		$this->mod_label_post_edit = 'Editiere Beitrag';
		$this->mod_label_post_icon = 'Post Icon'; //Translate
		$this->mod_label_title = 'Titel';
		$this->mod_label_title_original = 'Urpsrünglicher Titel';
		$this->mod_label_title_split = 'Spaltungstitel';
		$this->mod_label_topic_delete = 'Lösche Thema';
		$this->mod_label_topic_edit = 'Editiere Thema';
		$this->mod_label_topic_lock = 'Sperre Thema';
		$this->mod_label_topic_move = 'Verschiebe Thema';
		$this->mod_label_topic_move_complete = 'Verschiebe das komplette Thema in das neue Forum';
		$this->mod_label_topic_move_link = 'Verschiebe das Thema in das neue Forum und hinterlasse im alten Forum ein Link zum neuen Ort.';
		$this->mod_label_topic_pin = 'Nagel das Thema';
		$this->mod_label_topic_split = 'Geteiltes Thema';
		$this->mod_missing_post = 'Der ausgewählte Beitrag exisitert nicht.';
		$this->mod_missing_topic = 'Das ausgewählte Thema exisitiert nicht.';
		$this->mod_no_action = 'Du musst eine Handlung auswählen.';
		$this->mod_no_post = 'Du musst einen Beitrag auswählen.';
		$this->mod_no_topic = 'Du musst ein Thema auswählen.';
		$this->mod_perm_post_delete = 'Du hast nicht die Erlaubnis diesen Beitrag zu löschen.';
		$this->mod_perm_post_edit = 'Du hast nicht die Erlaubnis diesen Beitrag zu editieren.';
		$this->mod_perm_topic_delete = 'Du hast nicht die Erlaubnis dieses Thema zu löschen.';
		$this->mod_perm_topic_edit = 'Du hast nicht die Erlaubnis dieses Them zu editieren.';
		$this->mod_perm_topic_lock = 'Du hast nicht die Erlaubnis dieses Thema zu sperren.';
		$this->mod_perm_topic_move = 'Du hast nicht die Erlaubnis dieses Thema zu verschieben.';
		$this->mod_perm_topic_pin = 'Du hast nicht die Erlaubnis dieses Thema zu pinnen.';
		$this->mod_perm_topic_split = 'Du hast nicht die Erlaubnis dieses Thema zu teilen.';
		$this->mod_perm_topic_unlock = 'Du hast nicht die Erlaubnis dieses Thema zu entsperren.';
		$this->mod_perm_topic_unpin = 'Du hast nicht die Erlaubnis dieses Thema zu entnageln.';
		$this->mod_success_post_delete = 'Der Beitrag wurde erfolgreich gelöscht.';
		$this->mod_success_post_edit = 'Der Beitrag wurde erfolgreich editiert.';
		$this->mod_success_split = 'Das Thema wurde werfolgreich geteilt.';
		$this->mod_success_topic_delete = 'Das Thema wurde erfolgreich gelöscht.';
		$this->mod_success_topic_edit = 'Das Thema wurde erfolgreich editiert.';
		$this->mod_success_topic_move = 'Das Thema wurde erfolgreich in ein neues Forum verschoben.';
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
		$this->pm_cant_del = 'Du hast nicht die Erlaubnis diese Nachricht zu löschen.';
		$this->pm_delallmsg = 'Alle Nachrichten löschen';
		$this->pm_delete = 'Löschen';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = 'Nachricht gelöscht.';
		$this->pm_deleted_all = 'Nachrichten gelöscht.';
		$this->pm_error = 'Es tauchten Probleme beim schicken der Nachricht an die Mitglieder auf.<br /><br />Folgende User gibt es nicht: %s<br /><br />Folgende User wollen keine Nachrichten empfangen: %s';
		$this->pm_fields = 'Nachricht wurde nicht verschickt. Gehe sicher, das alle benötigten Felder ausgefüllt wurden.';
		$this->pm_flood = 'Du hast in den letzten %s Sekunden schon eine Nachricht verschickt und kannst jetzt noch keine neue senden<br /><br />Versuche es in ein paar Sekunden nochmal';
		$this->pm_folder_inbox = 'Eingang';
		$this->pm_folder_new = '%s neu';
		$this->pm_folder_sentbox = 'Gesendet';
		$this->pm_from = 'Von';
		$this->pm_group = 'Gruppe';
		$this->pm_guest = 'Als Gast kannst du die Nachrichtenzentrale  nicht benutzen. Bitte log dich ein oder registrier dich.';
		$this->pm_joined = 'Teilgenommen';
		$this->pm_messenger = 'Nachrichtenzentrale';
		$this->pm_msgtext = 'Nachrichtentext';
		$this->pm_multiple = 'Trenne mehrere Empfänger mit ;';
		$this->pm_no_folder = 'Du musst einen Ordner auswählen.';
		$this->pm_no_member = 'Kein Mitglied mit dieser ID wurde gefunden.';
		$this->pm_no_number = 'Keine Nachricht mit dieser Nummer wurde gefunden.';
		$this->pm_no_title = 'Kein Betreff';
		$this->pm_nomsg = 'In diesem Ordner sind keine Nachrichten.';
		$this->pm_noview = 'Du hast nicht die Erlaubnis diese Nachricht zu lesen.';
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'Dieser User ist grade online';
		$this->pm_personal = 'Private Nachrichtenzentrale';
		$this->pm_personal_msging = 'Private Nachrichten';
		$this->pm_pm = 'PN';
		$this->pm_posts = 'Post';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Empfänger';
		$this->pm_reply = 'Antworten';
		$this->pm_send = 'Senden';
		$this->pm_sendamsg = 'Nachricht senden';
		$this->pm_sendingpm = 'PN senden';
		$this->pm_sendon = 'Gesendet';
		$this->pm_success = 'Deine Nachricht wurde erfolgreich verschickt.';
		$this->pm_sure_del = 'Bist du sicher, das du diese Nachricht löschen willst?';
		$this->pm_sure_delall = 'Bist du dir sicher, das du alle Nachrichten in diesem Ordner löschen willst?';
		$this->pm_title = 'Titel';
		$this->pm_to = 'An';
	}

	function post()
	{
		$this->post_attach = 'Anhänge';
		$this->post_attach_add = 'Anhang beifügen';
		$this->post_attach_disrupt = 'Hinzufügen oder löschen wird deine Nachricht nicht stören.';
		$this->post_attach_failed = 'Der Upload des Anhangs schlug fehl. Die eingegeben Datei existiert vielleicht nicht.';
		$this->post_attach_not_allowed = 'Du kannst solche Dateitypen nicht anhängen.';
		$this->post_attach_remove = 'Entferne Anhang';
		$this->post_attach_too_large = 'Die eingegeben Datei ist zu groß. Die maximale Größe beträgt %d KB.';
		$this->post_cant_create = 'Als Gast hast du keine Erlaubnis ein Thema zu erstellen – vielleicht wenn du dich registrierst.';
		$this->post_cant_create1 = 'Du hast nicht die Erlaubnis ein Thema zu erstellen.';
		$this->post_cant_enter = 'Dein Auswahl konnte nicht eingegeben werden. Entweder hast du schon ausgewählt oder du hast keine Erlaubnis.';
		$this->post_cant_poll = 'Als Gast hast du keine Erlaubnis eine Umfrage zu starten – vielleicht wenn du dich registrierst.';
		$this->post_cant_poll1 = 'Du hast keine Erlaubnis eine Umfrage zu starten.';
		$this->post_cant_reply = 'Du hast keine Erlaubnis zu Themen in diesem Forum zu antworten.';
		$this->post_cant_reply1 = 'Als Gast hast du keine Erlaubnis auf Themen zu antworten – vielleicht wenn du dich registrierst.';
		$this->post_cant_reply2 = 'Du hast keine Erlaubnis auf Themen zu antworten.';
		$this->post_closed = 'Dieses Thema wurde geschlossen.';
		$this->post_create_poll = 'Erstelle Umfrage';
		$this->post_create_topic = 'Erstelle Thema';
		$this->post_creating = 'Erstelle Thema';
		$this->post_creating_poll = 'Erstelle Umfrage';
		$this->post_flood = 'Du hast in den letzten %s Sekunden gepostet und darfst im Moment nicht mehr.<br /><br />Versuche es später nochmal.';
		$this->post_guest = 'Gast';
		$this->post_icon = 'Beitragssymbol';
		$this->post_last_five = 'Letzten 5 Beiträge abwärts';
		$this->post_length = 'Überprüfe Länge';
		$this->post_mbcode_address = 'Gib eine Adresse ein';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Blau';
		$this->post_mbcode_bold = 'Fett';
		$this->post_mbcode_bold1 = 'F';
		$this->post_mbcode_chocolate = 'Schokolade';
		$this->post_mbcode_code = 'Code'; //Translate
		$this->post_mbcode_color = 'Farbe';
		$this->post_mbcode_coral = 'Coral'; //Translate
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'Dunkelblau';
		$this->post_mbcode_darkred = 'Dunkelrot';
		$this->post_mbcode_deepink = 'Deep Pink'; //Translate
		$this->post_mbcode_detail = 'Beschreibung eingeben';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'Ziegelsteinrot';
		$this->post_mbcode_font = 'Schriftart';
		$this->post_mbcode_green = 'Grün';
		$this->post_mbcode_huge = 'Riesig';
		$this->post_mbcode_image = 'Bild';
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Kursiv';
		$this->post_mbcode_italic1 = 'K';
		$this->post_mbcode_large = 'Groß';
		$this->post_mbcode_length = 'Deine Nachricht hat "+length+" Zeichen.';
		$this->post_mbcode_limegreen = 'Limettengrün';
		$this->post_mbcode_medium = 'Mittel';
		$this->post_mbcode_orange = 'Orange'; //Translate
		$this->post_mbcode_orangered = 'Orange-Rot';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Lila';
		$this->post_mbcode_quote = 'Zitat';
		$this->post_mbcode_red = 'Rot';
		$this->post_mbcode_royalblue = 'Königsblau';
		$this->post_mbcode_sandybrown = 'Sandy Braun';
		$this->post_mbcode_seagreen = 'Seegrün';
		$this->post_mbcode_sienna = 'Sienna'; //Translate
		$this->post_mbcode_silver = 'Silber';
		$this->post_mbcode_size = 'Größe';
		$this->post_mbcode_skyblue = 'Himmelsblau';
		$this->post_mbcode_small = 'Klein';
		$this->post_mbcode_strike = 'Durchgestrichen';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Winzig';
		$this->post_mbcode_tomato = 'Tomato'; //Translate
		$this->post_mbcode_underline = 'Unterstrichen';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Wurzelholz';
		$this->post_mbcode_yellow = 'Yellow'; //Translate
		$this->post_msg = 'Nachricht';
		$this->post_must_msg = 'Du musst eine Nachricht einfügen wenn du einen Beitrag schreibst.';
		$this->post_must_options = 'Du musst Optinen einfügen wenn du eine Umfrage erstellst.';
		$this->post_must_title = 'Du musst einen Titel einfügen wenn du ein Thema erstellst.';
		$this->post_new_poll = 'Neue Umfrage';
		$this->post_new_topic = 'Neues Thema';
		$this->post_no_forum = 'Dieses Forum wurde nicht gefunden.';
		$this->post_no_topic = 'Kein Thema ausgewählt.';
		$this->post_no_vote = 'Du musst eine Option zum Abstimmen auswählen.';
		$this->post_option_emoticons = 'Konvertiere Smilies zu Bildern?';
		$this->post_option_global = 'Thema globalisieren?';
		$this->post_option_mbcode = 'Formatiere MbCode?';
		$this->post_optional = 'optional'; //Translate
		$this->post_options = 'Optionen';
		$this->post_poll_options = 'Umfrage Optionen';
		$this->post_poll_row = 'Eins pro Zeile';
		$this->post_posted = 'Geschrieben am';
		$this->post_posting = 'Schreiben';
		$this->post_preview = 'Vorschau';
		$this->post_reply = 'Antworten';
		$this->post_reply_topic = 'Thema antworten';
		$this->post_replying = 'Thema antworten';
		$this->post_replying1 = 'Antworten';
		$this->post_smiles = 'Klickbare Symbole';
		$this->post_too_many_options = 'Du brauchst zwischen 2 und %d Optionen für eine Umfrage.';
		$this->post_topic_detail = 'Thema Beschreibung';
		$this->post_topic_title = 'Thema Titel';
		$this->post_view_topic = 'Zeige ganzes Thema';
		$this->post_voting = 'Wählen';
	}

	function printer()
	{
		$this->printer_back = 'Zurück';
		$this->printer_not_found = 'Das Thema konnte nicht gefunden werden. Es wurde vielleicht gelöscht, verschoben oder existierte niemals.';
		$this->printer_not_found_title = 'Thema nicht gefunden';
		$this->printer_perm_topics = 'Du hast keine Erlaubnis Themen zu sehen.';
		$this->printer_perm_topics_guest = 'Du hast keine Erlaubnis Themen zu sehen – vielleicht wenn du dich registrierst.';
		$this->printer_posted_on = 'Geschrieben am';
		$this->printer_send = 'An Drucker senden';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM Name'; //Translate
		$this->profile_av_sign = 'Avatar und Signatur';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Geburtstag';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'Email Addresse';
		$this->profile_fav = 'Favorisiertes Forum';
		$this->profile_fav_forum = '%s (%d%% der Posts sind dort)';
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = 'ICQ Nummer';
		$this->profile_info = 'Informationen';
		$this->profile_interest = 'Hobbies';
		$this->profile_joined = 'Angemeldet seit';
		$this->profile_last_post = 'Letzter Beitrag';
		$this->profile_list = 'Mitgliederliste';
		$this->profile_location = 'Wohnort';
		$this->profile_member = 'Mitgliedsgruppe';
		$this->profile_member_title = 'Mitgliedstitel';
		$this->profile_msn = 'MSN Identität';
		$this->profile_must_user = 'Du musst einen Benutzer eintragen um das Profil zu sehen.';
		$this->profile_no_member = 'Es gibt kein Mitglied mit dieser ID. Der Account wurde vielleicht.';
		$this->profile_none = '[ Keiner ]';
		$this->profile_not_post = 'hat noch keinen Beitrag geschrieben.';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'Dieser User ist grade online';
		$this->profile_pm = 'Private Nachrichten';
		$this->profile_postcount = '%s insgesamt, %s pro Tag';
		$this->profile_posts = 'Nachrichten';
		$this->profile_private = '[ Privat ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Signatur';
		$this->profile_unkown = '[ Unbekannt ]';
		$this->profile_view_profile = 'Profil anzeigen';
		$this->profile_www = 'Homepage'; //Translate
		$this->profile_yahoo = 'Yahoo Identität';
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
		$this->recent_by = 'Von';
		$this->recent_can_post = 'Du kannst in diesem Forum antworten.';
		$this->recent_can_topics = 'Du kannst in diesem Forum Themen sehen.';
		$this->recent_cant_post = 'Du kannst in diesem Forum nicht antworten.';
		$this->recent_cant_topics = 'Du kannst in diesem Forum keine Themen sehen.';
		$this->recent_dot = 'Punkt';
		$this->recent_dot_detail = 'zeigt, das du im Thema beigetragen hast';
		$this->recent_forum = 'Forum'; //Translate
		$this->recent_guest = 'Gast';
		$this->recent_hot = 'Heiß';
		$this->recent_icon = 'Nachrichtsymbol';
		$this->recent_jump = 'Springe zum neuestem Beitrag im Thema';
		$this->recent_last = 'Letzter Beitrag';
		$this->recent_locked = 'Gesperrt';
		$this->recent_moved = 'Verschoben';
		$this->recent_msg = '%s Nachricht';
		$this->recent_new = 'Neu';
		$this->recent_new_poll = 'Erstelle neue Umfrage';
		$this->recent_new_topic = 'Erstelle neues Thema';
		$this->recent_no_topics = 'Es gibt keine Themen in diesem Forum anzuzeigen.';
		$this->recent_noexist = 'Das ausgewählte Forum existiert nicht.';
		$this->recent_nopost = 'Keine Beiträge';
		$this->recent_not = 'Nicht';
		$this->recent_noview = 'Du hast nicht die Erlaubnis Foren zu sehen.';
		$this->recent_pages = 'Seiten';
		$this->recent_pinned = 'Genagelt';
		$this->recent_pinned_topic = 'Genageltes Thema';
		$this->recent_poll = 'Umfrage';
		$this->recent_regfirst = 'Du hast nicht die Erlaubnis Foren zu sehen – vielleicht wenn du dich registrierst.';
		$this->recent_replies = 'Antworten';
		$this->recent_starter = 'Ersteller';
		$this->recent_sub = 'Unterforum';
		$this->recent_sub_last_post = 'Letzter Beitrag';
		$this->recent_sub_replies = 'Antworten';
		$this->recent_sub_topics = 'Themen';
		$this->recent_subscribe = 'Benachrichtige mich per Email wenn Beiträge in diesem Forum geschrieben wurden';
		$this->recent_topic = 'Thema';
		$this->recent_views = 'Gesehen';
		$this->recent_write_topics = 'Du kannst in diesem Forum Themen erstellen.';
	}

	function register()
	{
		$this->register_activated = 'Dein Account wurde aktiviert!';
		$this->register_activating = 'Account Aktivierung';
		$this->register_activation_error = 'Es gab ein Problem während der Aktivierung deines Accounts. Überprüfe, ob der Browser die komplette URL der Aktivierungsemail beinhaltet. Wenn das Problem weiterhin besteht kontaktiere den Boardadministrator um die Email erneut zu verschicken.';
		$this->register_confirm_passwd = 'Bestätige Passwort';
		$this->register_done = 'Du bist nun registriert! Du kannst dich nun anmelden.';
		$this->register_email = 'Emailadresse';
		$this->register_email_invalid = 'Die eingegeben Emailadresse ist ungültig.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'Die eingegebene Emailadresse ist schon einem Mitglied zugeordnet.';
		$this->register_fields = 'Nicht alle Felder wurden ausgefüllt.';
		$this->register_image = 'Bitte tipp den Text vom Bild ein.';
		$this->register_image_invalid = 'Um zu überprüfen, ob du ein menschlicher User bist, musst du den Text vom Bild eintippen.';
		$this->register_must_activate = 'Du bist nun registriert. Eine Email wurde verschickt zu %s mit Informationen wie du deinen Account aktivieren kannst. Dein Account wird bis zur Aktivierung limitiert.';
		$this->register_name_invalid = 'Der eingegebene Name ist zu lang.';
		$this->register_name_taken = 'Der Mitgliedsname ist bereits vergeben.';
		$this->register_new_user = 'Benötigter Username';
		$this->register_pass_invalid = 'Das eingegebene Passwort ist nicht gültig. Gehe sicher, das nur gültige Zeichen wie z.B. Buchstaben, Nummern, Striche, Unterstriche oder Leerzeichen sowie mindestens 5 Zeichen verwendet wurden.';
		$this->register_pass_match = 'Die eingegebenen Passwörter stimmen nicht überein.';
		$this->register_passwd = 'Passwort';
		$this->register_reg = 'Registrierung';
		$this->register_reging = 'Registrierung';
		$this->register_tos = 'Terms of Service'; //Translate
		$this->register_tos_i_agree = 'I agree to the above terms'; //Translate
		$this->register_tos_not_agree = 'You did not agree to the terms.'; //Translate
		$this->register_tos_read = 'Please read the following terms of service'; //Translate
	}

	function rssfeed()
	{
		$this->rssfeed_posted_by = 'Posted by'; //Translate
	}

	function search()
	{
		$this->search_advanced = 'Erweitere Optionen';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Einfache Suche';
		$this->search_characters = 'Zeichen eines Beitrags';
		$this->search_day = 'Tag';
		$this->search_days = 'Tage';
		$this->search_exact_name = 'Exakter Name';
		$this->search_flood = 'Du hast in den letzten %s Sekunden bereits eine Suchanfrage gestartet und kannst noch nicht wieder suchen.<br /><br />Versuche es in ein paar Sekunden wieder.';
		$this->search_for = 'Suche nach';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Gruppe';
		$this->search_guest = 'Gast';
		$this->search_in = 'Suche in';
		$this->search_in_posts = 'Suche nur in Beiträgen';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Angemeldet seit';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Suche nach Treffern';
		$this->search_matches = 'Treffer';
		$this->search_month = 'Monat';
		$this->search_months = 'Monate';
		$this->search_mysqldoc = 'MySQL Dokumentation';
		$this->search_newer = 'neuer';
		$this->search_no_results = 'Deine Suche brachte keine Ergebnisse.';
		$this->search_no_words = 'Du musst Suchbegriffe definieren.<br /><br />Jeder Begriff muss länger als 3 Zeichen sein, inklusive Buchstaben, Nummern, Apostrophen und Unterstriche.';
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = 'älter';
		$this->search_online = 'Dieser User ist grade online';
		$this->search_only_display = 'Nur Erste anzeigen';
		$this->search_partial_name = 'Teil des Namen';
		$this->search_post_icon = 'Nachrichtensymbol';
		$this->search_posted_on = 'Geschrieben am';
		$this->search_posts = 'Beiträge';
		$this->search_posts_by = 'Nur Beiträge von';
		$this->search_regex = 'Suche nach regulären Ausdrücken';
		$this->search_regex_failed = 'Die regulären Audrücke schlufgen fehl. Bitte schau in der MySQL Dokumentation für Hilfe bei regulären Ausdrücken.';
		$this->search_relevance = 'Nachrichtrelevanz: %d%%';
		$this->search_replies = 'Beiträge';
		$this->search_result = 'Suchergebnis';
		$this->search_search = 'Suche';
		$this->search_select_all = 'Wähle alle aus';
		$this->search_show_posts = 'Zeige übereinstimmende Beiträge';
		$this->search_sound = 'Suche nach Sounds';
		$this->search_starter = 'Ersteller';
		$this->search_than = 'als';
		$this->search_topic = 'Thema';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'Woche';
		$this->search_weeks = 'Wochen';
		$this->search_year = 'Jahr';
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
		$this->topic_attached = 'Angehangene Datei:';
		$this->topic_attached_downloads = 'Downloads';
		$this->topic_attached_perm = 'Du hast keine Erlaubnis diese Datei runterzuladen.';
		$this->topic_attached_title = 'Angehangene Datei';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = 'Erstelle neue Umfrage';
		$this->topic_create_topic = 'Erstelle neues Thema';
		$this->topic_delete = 'Löschen';
		$this->topic_delete_post = 'Lösche diesen Beitrag';
		$this->topic_edit = 'Editiere';
		$this->topic_edit_post = 'Editiere diesen Beitrag';
		$this->topic_edited = 'Zuletzt editiert: %s von %s';
		$this->topic_error = 'Fehler';
		$this->topic_group = 'Gruppe';
		$this->topic_guest = 'Gast';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Teilgenommen';
		$this->topic_level = 'Mitgliedslevel';
		$this->topic_links_aim = 'Sende eine AIM Nachricht an %s';
		$this->topic_links_email = 'Sende eine Email an %s';
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'Sende eine ICQ Nachricht an %s';
		$this->topic_links_msn = 'Zeige %s\'s MSN Profil';
		$this->topic_links_pm = 'Sende eine persönliche Nachricht an %s';
		$this->topic_links_web = 'Besuche %s\'s Webseite';
		$this->topic_links_yahoo = 'Sende eine Nachricht an %s mit Yahoo! Messenger';
		$this->topic_lock = 'Sperren';
		$this->topic_locked = 'Thema gesperrt';
		$this->topic_move = 'Verschiebe';
		$this->topic_no_votes = 'Es gibt keine Abstimmungen für diese Umfrage.';
		$this->topic_not_found = 'Thema nicht gefunden';
		$this->topic_not_found_message = 'Das Thema konnte nicht gefunden werden. Es wurde vielleicht gelöscht, verschoben oder existierte nie.';
		$this->topic_offline = 'This member is currently offline'; //Translate
		$this->topic_online = 'Dieser User ist grade online';
		$this->topic_options = 'Thema Optionen';
		$this->topic_pages = 'Seiten';
		$this->topic_perm_view = 'Du hast keine Erlaubnis Themen zu sehen.';
		$this->topic_perm_view_guest = 'Du hast keine Erlaubnis Themen zu sehen – vielleicht wenn du dich registrierst.';
		$this->topic_pin = 'Pin'; //Translate
		$this->topic_posted = 'Geschrieben: ';
		$this->topic_posts = 'Beiträge';
		$this->topic_print = 'Zeige Druckversion';
		$this->topic_quote = 'Antworte mit einem Zitat von dem Beitrag';
		$this->topic_reply = 'Thema antworten';
		$this->topic_split = 'Geteilt';
		$this->topic_split_finish = 'Teilen abschließen';
		$this->topic_split_keep = 'Diesen Post nicht verschieben';
		$this->topic_split_move = 'Diesen Post verschieben';
		$this->topic_subscribe = 'Benachrichte mich per Email wenn in diesem Thema geantwortet wurde';
		$this->topic_top = 'Gehe zum Anfang der Seite';
		$this->topic_unlock = 'Entsperren';
		$this->topic_unpin = 'Entnageln';
		$this->topic_unreg = 'Unregistriert';
		$this->topic_view = 'Zeige Ergebnisse';
		$this->topic_viewing = 'Zeige Thema';
		$this->topic_vote = 'Wähle';
		$this->topic_vote_count_plur = '%d Stimmen';
		$this->topic_vote_count_sing = '%d Stimme';
		$this->topic_votes = 'Stimmen';
	}

	function universal()
	{
		$this->aim = 'AIM'; //Translate
		$this->based_on = 'based on';
		$this->board_by = 'Von';
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
		$this->sep_thousands = '.';
		$this->submit = 'Abschicken';
		$this->subscribe = 'Subscribe'; //Translate
		$this->today = 'Heute ';
		$this->website = 'WWW'; //Translate
		$this->yahoo = 'Yahoo'; //Translate
		$this->yes = 'Yes'; //Translate
		$this->yesterday = 'Gestern ';
	}
}
?>
