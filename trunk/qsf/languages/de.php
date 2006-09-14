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

if (!defined('QUICKSILVERFORUMS')) {
	header('HTTP/1.0 403 Forbidden');
	die;
}

/**
 * German language module
 *
 * @author Christian Tietze <c.tietze@art-fx.org>
 * @author Ibus <ibus85@web.de>
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
		$this->active_modules_recent = 'Neueste Beitr�ge anschauen';
		$this->active_modules_search = 'Suche';
		$this->active_modules_topic = 'Thema: %s';
		$this->active_time = 'Zeit';
		$this->active_user = 'Benutzer';
		$this->active_users = 'Benutzer';
	}

	function admin()
	{
		$this->admin_add_emoticons = 'Emoticons hinzuf�gen';
		$this->admin_add_member_titles = 'F�ge automatische Mitgliedertitel hinzu';
		$this->admin_add_templates = 'HTML Template hinzuf�gen';
		$this->admin_ban_ips = 'IP Adressen sperren';
		$this->admin_censor = 'W�rter zensieren';
		$this->admin_cp_denied = 'Kein Zutritt';
		$this->admin_cp_warning = 'Das Administrator Kontrollzentrum ist deaktiviert bis sie ihr <b>Installationsverzeichnis</b> gel�scht haben, es stellt ein ernstes Sicherheitsrisiko dar.';
		$this->admin_create_forum = 'Erstelle ein Forum';
		$this->admin_create_group = 'Erstelle eine Gruppe';
		$this->admin_create_help = 'Erstelle eine Hilfe';
		$this->admin_create_skin = 'Erstelle ein Skin';
		$this->admin_db = 'Datenbank';
		$this->admin_db_backup = 'Sichere die Datenbank';
		$this->admin_db_conn = 'Bearbeite Verbindungseinstellungen';
		$this->admin_db_optimize = 'Optimiere die Datenbank';
		$this->admin_db_query = 'SQL-Abfrage ausf�hren';
		$this->admin_db_restore = 'Backup wiederherstellen';
		$this->admin_delete_forum = 'Forum l�schen';
		$this->admin_delete_group = 'Gruppe l�schen';
		$this->admin_delete_help = 'Hilfe l�schen';
		$this->admin_delete_member = 'Mitglied l�schen';
		$this->admin_delete_template = 'HTML-Template l�schen';
		$this->admin_edit_emoticons = 'Emoticons bearbeiten oder l�schen';
		$this->admin_edit_forum = 'Forum bearbeiten';
		$this->admin_edit_group_name = 'Gruppennamen bearbeiten';
		$this->admin_edit_group_perms = 'Gruppenberechtigungen bearbeiten';
		$this->admin_edit_help = 'Hilfe bearbeiten';
		$this->admin_edit_member = 'Mitglied bearbeiten';
		$this->admin_edit_member_perms = 'Mitgliedsberechtigungen bearbeiten';
		$this->admin_edit_member_titles = 'Automatische Mitgliedertitel bearbeiten oder l�schen';
		$this->admin_edit_settings = 'Forumseinstellungen bearbeiten';
		$this->admin_edit_skin = 'Skin bearbeiten oder l�schen';
		$this->admin_edit_templates = 'HTML-Templates bearbeiten';
		$this->admin_emoticons = 'Emoticons'; //Translate
		$this->admin_export_skin = 'Skin exportieren';
		$this->admin_fix_stats = 'Mitgliederstatistik festlegen';
		$this->admin_forum_order = '�ndere die Forenanordnung';
		$this->admin_forums = 'Foren und Kategorien';
		$this->admin_groups = 'Gruppen';
		$this->admin_heading = 'Quicksilver Forums Administrator Kontrollzentrum';
		$this->admin_help = 'Hilfeartikel';
		$this->admin_install_emoticons = 'Emoticons installieren';
		$this->admin_install_skin = 'Skin installieren';
		$this->admin_logs = 'Moderatoraktivit�ten anschauen';
		$this->admin_mass_mail = 'Sende Email an Mitglieder';
		$this->admin_members = 'Mitglieder';
		$this->admin_phpinfo = 'PHP Info anschauen';
		$this->admin_prune = 'Alte Themen abschneiden';
		$this->admin_recount_forums = 'Themen und Antworten nachz�hlen';
		$this->admin_settings = 'Einstellungen';
		$this->admin_settings_add = 'Add new board setting'; //Translate
		$this->admin_skins = 'Skins'; //Translate
		$this->admin_stats = 'Statistik-Zentrum';
		$this->admin_upgrade_skin = 'Skin modernisieren';
		$this->admin_your_board = 'Ihr Board';
	}

	function backup()
	{
		$this->backup_create = 'Datenbank sichern';
		$this->backup_createfile = 'Sichern und eine Datei auf dem Server erstellen';
		$this->backup_done = 'Die Datenbank wurde im Quicksilver Forums Hauptverzeichnis gesichert.';
		$this->backup_download = 'Sichern und herunterladen (empfohlen)';
		$this->backup_found = 'Die folgenden Sicherungen wurden im Quicksilver Forums Verzeichnis gefunden';
		$this->backup_invalid = 'Die Sicherung scheint ung�ltig zu sein. Es wurden keine Ver�nderungen an der Datenbank vorgenommen.';
		$this->backup_none = 'Es wurden keine Sicherungen im Quicksilver Forums Verzeichnis gefunden.';
		$this->backup_options = 'W�hlen sie aus wie sie das Backup erstellen m�chten';
		$this->backup_restore = 'Sicherung wiederherstellen';
		$this->backup_restore_done = 'Die Datenbank wurde erfolgreich wieder hergestellt.';
		$this->backup_warning = 'Warnung: Alle bestehenden Daten werden �berschrieben.';
	}

	function ban()
	{
		$this->ban = 'Sperren';
		$this->ban_banned_ips = 'Gesperrte IP Adressen';
		$this->ban_banned_members = 'Gesperrte Mitglieder';
		$this->ban_ip = 'IP Adressen sperren';
		$this->ban_member_explain1 = 'Um Benutzer zu sperren, �ndern sie die Gruppe in der Mitgliederverwaltung zu';
		$this->ban_member_explain2 = '.';
		$this->ban_members = 'Mitglieder sperren';
		$this->ban_nomembers = 'Aktuell gibt es keine gesperrten Mitglieder.';
		$this->ban_one_per_line = 'Eine Adresse pro Linie.';
		$this->ban_regex_allowed = 'Regul�re Ausdr�cke sind erlaubt. Benutzen sie * f�r eine oder mehrere Stellen.';
		$this->ban_settings = 'Sperr-Einstellungen';
		$this->ban_users_banned = 'Gesperrte Benutzer.';
	}

	function bbcode()
	{
		$this->bbcode_arial = 'Arial'; //Translate
		$this->bbcode_blue = 'Blue'; //Translate
		$this->bbcode_bold = 'Bold (CTRL-b)'; //Translate
		$this->bbcode_bold1 = 'B'; //Translate
		$this->bbcode_chocolate = 'Chocolate'; //Translate
		$this->bbcode_code = 'Code (CTRL-l)'; //Translate
		$this->bbcode_code1 = 'Code'; //Translate
		$this->bbcode_color = 'Color'; //Translate
		$this->bbcode_coral = 'Coral'; //Translate
		$this->bbcode_courier = 'Courier'; //Translate
		$this->bbcode_crimson = 'Crimson'; //Translate
		$this->bbcode_darkblue = 'Dark Blue'; //Translate
		$this->bbcode_darkred = 'Dark Red'; //Translate
		$this->bbcode_deeppink = 'Deep Pink'; //Translate
		$this->bbcode_email = 'Email (CTRL-e)'; //Translate
		$this->bbcode_firered = 'Firebrick Red'; //Translate
		$this->bbcode_font = 'Font'; //Translate
		$this->bbcode_green = 'Green'; //Translate
		$this->bbcode_huge = 'Huge'; //Translate
		$this->bbcode_image = 'Image (CTRL-j)'; //Translate
		$this->bbcode_image1 = 'IMG'; //Translate
		$this->bbcode_impact = 'Impact'; //Translate
		$this->bbcode_indigo = 'Indigo'; //Translate
		$this->bbcode_italic = 'Italic (CTRL-i)'; //Translate
		$this->bbcode_italic1 = 'I'; //Translate
		$this->bbcode_large = 'Large'; //Translate
		$this->bbcode_limegreen = 'Lime Green'; //Translate
		$this->bbcode_medium = 'Medium'; //Translate
		$this->bbcode_orange = 'Orange'; //Translate
		$this->bbcode_orangered = 'Orange Red'; //Translate
		$this->bbcode_php = 'PHP (CTRL-k)'; //Translate
		$this->bbcode_php1 = 'PHP'; //Translate
		$this->bbcode_purple = 'Purple'; //Translate
		$this->bbcode_quote = 'Quote (CTRL-q)'; //Translate
		$this->bbcode_quote1 = 'Quote'; //Translate
		$this->bbcode_red = 'Red'; //Translate
		$this->bbcode_royalblue = 'Royal Blue'; //Translate
		$this->bbcode_sandybrown = 'Sandy Brown'; //Translate
		$this->bbcode_seagreen = 'Sea Green'; //Translate
		$this->bbcode_sienna = 'Sienna'; //Translate
		$this->bbcode_silver = 'Silver'; //Translate
		$this->bbcode_size = 'Size'; //Translate
		$this->bbcode_skyblue = 'Sky Blue'; //Translate
		$this->bbcode_small = 'Small'; //Translate
		$this->bbcode_spoiler = 'Spoiler (CTRL-r)'; //Translate
		$this->bbcode_spoiler1 = 'Spoiler'; //Translate
		$this->bbcode_strike = 'Strikethrough (CTRL-s)'; //Translate
		$this->bbcode_strike1 = 'S'; //Translate
		$this->bbcode_tahoma = 'Tahoma'; //Translate
		$this->bbcode_teal = 'Teal'; //Translate
		$this->bbcode_times = 'Times'; //Translate
		$this->bbcode_tiny = 'Tiny'; //Translate
		$this->bbcode_tomato = 'Tomato'; //Translate
		$this->bbcode_underline = 'Underline (CTRL-u)'; //Translate
		$this->bbcode_underline1 = 'U'; //Translate
		$this->bbcode_url = 'URL (CTRL-h)'; //Translate
		$this->bbcode_url1 = 'URL'; //Translate
		$this->bbcode_verdana = 'Verdana'; //Translate
		$this->bbcode_wood = 'Burly Wood'; //Translate
		$this->bbcode_yellow = 'Yellow'; //Translate
	}

	function board()
	{
		$this->board_active_users = 'Aktive Benutzer';
		$this->board_birthdays = 'Heutige Geburtstage';
		$this->board_bottom_page = 'Zum Ende der Seite';
		$this->board_can_post = 'Sie k�nnen in diesem Forum antworten.';
		$this->board_can_topics = 'Sie k�nnen in diesem Forum Themen sehen aber keine erstellen.';
		$this->board_cant_post = 'Sie k�nnen in diesem Forum nicht antworten.';
		$this->board_cant_topics = 'Sie k�nnen in diesem Forum keine Themen sehen oder erstellen.';
		$this->board_forum = 'Forum'; //Translate
		$this->board_guests = 'G�ste';
		$this->board_last_post = 'Letzter Beitrag';
		$this->board_mark = 'Beitr�ge als gelesen markieren';
		$this->board_mark1 = 'Alle Beitr�ge und Foren wurden als gelesen markiert.';
		$this->board_markforum = 'Marking Forum As Read'; //Translate
		$this->board_markforum1 = 'All posts in the forum %s have been marked as read.'; //Translate
		$this->board_members = 'Mitglieder';
		$this->board_message = '%s Nachricht';
		$this->board_most_online = 'Der Rekord liegt bei %d Benutzern gleichzeitig (%s).';
		$this->board_nobday = 'Kein Mitglied hat heute Geburtstag.';
		$this->board_nobody = 'Momentan sind keine Mitglieder online.';
		$this->board_nopost = 'Keine Beitr�ge';
		$this->board_noview = 'Sie haben nicht die Erlaubnis, dieses Board zu sehen.';
		$this->board_regfirst = 'Sie haben nicht die Erlaubnis, dieses Board zu sehen, vielleicht wenn sie sich registrieren.';
		$this->board_replies = 'Antworten';
		$this->board_stats = 'Statistiken';
		$this->board_stats_string = '%s Benutzer sind registriert. Unser neustes Mitglied ist %s.<br />Es gibt %s Themen und %s Beitr�ge mit einer Gesamtzahl von %s Beitr�gen.';
		$this->board_top_page = 'Gehe zum Anfang der Seite';
		$this->board_topics = 'Themen';
		$this->board_users = 'Benutzer';
		$this->board_write_topics = 'Sie k�nnen Themen sehen und erstellen.';
	}

	function censoring()
	{
		$this->censor = 'W�rter zensieren';
		$this->censor_one_per_line = 'Eins pro Linie.';
		$this->censor_regex_allowed = 'Regul�re Ausdr�cke sind erlaubt. Benutzen sie * f�r ein oder mehrere Zeichen.';
		$this->censor_updated = 'W�rterliste aktualisiert';
	}

	function cp()
	{
		$this->cp_aim = 'AIM Bildschirmname';
		$this->cp_already_member = 'Die eingegebene Emailadresse ist bereits einem Mitglied zugeordnet.';
		$this->cp_apr = 'April'; //Translate
		$this->cp_aug = 'August'; //Translate
		$this->cp_avatar_current = 'Ihr momentaner Avatar';
		$this->cp_avatar_error = 'Avatarproblem';
		$this->cp_avatar_must_select = 'Sie m�ssen einen Avatar ausw�hlen.';
		$this->cp_avatar_none = 'Benutze keinen Avatar';
		$this->cp_avatar_pixels = 'Pixel';
		$this->cp_avatar_select = 'W�hlen sie einen Avatar aus';
		$this->cp_avatar_size_height = 'Die H�he des Avatars liegt zwischen 1 und';
		$this->cp_avatar_size_width = 'Die Breite des Avatars liegt zwischen 1 und';
		$this->cp_avatar_upload = 'Laden sie einen Avatar von ihrer Festplatte hoch';
		$this->cp_avatar_upload_failed = 'Der Upload ist schiefgegangen.  Die Datei existiert m�glicherweise nicht.';
		$this->cp_avatar_upload_not_image = 'Sie k�nnen Bilder nur hochladen um sie als Avatar zu benutzen.';
		$this->cp_avatar_upload_too_large = 'Der Avatar ist zu gro�, um ihn hochzuladen. Das Limit betr�gt %d kb.';
		$this->cp_avatar_url = 'W�hlen sie eine URL f�r ihren Avatar';
		$this->cp_avatar_use = 'Benutzen sie den hochgeladenen Avatar';
		$this->cp_bday = 'Geburtstag';
		$this->cp_been_updated = 'Ihr Profil wurde aktualisiert.';
		$this->cp_been_updated1 = 'Ihr Avatar wurde aktualisiert.';
		$this->cp_been_updated_prefs = 'Ihre Pr�ferenzen wurden aktualisiert.';
		$this->cp_changing_pass = 'Passwort editieren';
		$this->cp_contact_pm = 'Erlaube es Anderen, mich via Messenger zu kontaktieren?';
		$this->cp_cp = 'Kontrollzentum';
		$this->cp_current_avatar = 'Aktueller Avatar';
		$this->cp_current_time = 'Es ist momentan %s.';
		$this->cp_custom_title = 'Eigener Mitgliedstitel';
		$this->cp_custom_title2 = 'Dies ist ein Privileg nur f�r Board-Administratoren';
		$this->cp_dec = 'Dezember';
		$this->cp_editing_avatar = 'Editiere Avatar';
		$this->cp_editing_profile = 'Editiere Profil';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Erlaube es Anderen, mich via Email zu kontaktieren?';
		$this->cp_email_invaid = 'Die eingegebene Emailadresse ist ung�ltig.';
		$this->cp_err_avatar = 'Fehler beim Aktualisieren des Avatars';
		$this->cp_err_updating = 'Fehler beim Aktualisieren des Profils';
		$this->cp_feb = 'Februar';
		$this->cp_file_type = 'Der eingebene Avatar ist nicht in Ordnung. Gehen sie sicher, das die URL richtig eingegeben ist und die Datei entweder die Endung GIF, JPG oder PNG hat.';
		$this->cp_format = 'Name';
		$this->cp_gtalk = 'GTalk Konto';
		$this->cp_header = 'Benutzer Kontrollzentum';
		$this->cp_height = 'H�he';
		$this->cp_icq = 'ICQ Nummer';
		$this->cp_interest = 'Hobbies';
		$this->cp_jan = 'Januar';
		$this->cp_july = 'Juli';
		$this->cp_june = 'Juni';
		$this->cp_label_edit_avatar = 'Editiere Avatar';
		$this->cp_label_edit_pass = 'Editiere Passwort';
		$this->cp_label_edit_prefs = 'Editiere Einstellungen';
		$this->cp_label_edit_profile = 'Editiere Profil';
		$this->cp_label_edit_sig = 'Editiere Signatur';
		$this->cp_label_edit_subs = 'Editiere Abonnements';
		$this->cp_language = 'Sprache';
		$this->cp_less_charac = 'Ihr Name muss kleiner als 32 Zeichen sein.';
		$this->cp_location = 'Ort';
		$this->cp_login_first = 'Sie m�ssen sich anmelden um zu ihrem Kontrollzentum zu gelangen.';
		$this->cp_mar = 'M�rz';
		$this->cp_may = 'Mai';
		$this->cp_msn = 'MSN Konto';
		$this->cp_must_orig = 'Ihr Name muss identisch mit dem Original sein. Sie k�nnen nur die Klein/Gro�schreibung sowie den Zeichenabstand �ndern.';
		$this->cp_new_notmatch = 'Die neuen eingegebenen Passw�rter stimmen nicht �berein.';
		$this->cp_new_pass = 'Neues Passwort:';
		$this->cp_no_flash = 'Flash Avatare sind auf diesem Board nicht erlaubt.';
		$this->cp_not_exist = 'Das spezifizierte Datum (%s) existiert nicht!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Oktober';
		$this->cp_old_notmatch = 'Das alte eingegebene Passwort stimmt nicht mit dem in der Datenbank �berein.';
		$this->cp_old_pass = 'Altes Passwort:';
		$this->cp_pass_notvaid = 'Ihr Passwort ist nicht g�ltig. Gehen sie sicher, das nur g�ltige Zeichen benutzt werden wie z.B. Buchstaben, Zahlen, Bindestriche, Unterstriche oder Leerzeichen.';
		$this->cp_posts_page = 'Posts per topic page. 0 resets to board default.'; //Translate
		$this->cp_preferences = 'Ver�ndere Einstellungen';
		$this->cp_preview_sig = 'Signatur Vorschau:';
		$this->cp_privacy = 'Private Optionen';
		$this->cp_repeat_pass = 'Wiederholen sie das neue Passwort:';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Ihre Aktionen anzeigen, wenn sie im Forum sind?';
		$this->cp_show_email = 'Email Adresse im Profil anzeigen?';
		$this->cp_signature = 'Signatur';
		$this->cp_size_max = 'Die eingegebene Gr��e des Avatars ist zu gro�. Die maximale Gr��e betr�gt %s x %s Pixel.';
		$this->cp_skin = 'Forenskin';
		$this->cp_sub_change = 'Ver�ndere Abonnements';
		$this->cp_sub_delete = 'L�schen';
		$this->cp_sub_expire = 'Verfallsdatum';
		$this->cp_sub_name = 'Abonnementname';
		$this->cp_sub_no_params = 'Keine Parameter angegeben.';
		$this->cp_sub_success = 'Sie haben nun %s abonniert.';
		$this->cp_sub_type = 'Abonnementtyp';
		$this->cp_sub_updated = 'Ausgew�hlte Abonnements wurden gel�scht.';
		$this->cp_topic_option = 'Themen Optionen';
		$this->cp_topics_page = 'Topics per forum page. 0 resets to board default.'; //Translate
		$this->cp_updated = 'Profile aktualisiert';
		$this->cp_updated1 = 'Avatar aktualisiert';
		$this->cp_updated_prefs = 'Einstellungen aktualisiert';
		$this->cp_user_exists = 'Ein Benutzer mit diesem Namen existiert bereits.';
		$this->cp_valided = 'Dein Passwort war g�ltig und wurde ge�ndert.';
		$this->cp_view_avatar = 'Avatare anzeigen?';
		$this->cp_view_emoticon = 'Smilies anzeigen?';
		$this->cp_view_signature = 'Signaturen anzeigen?';
		$this->cp_welcome = 'Willkommen im Benutzer-Kontrollzentrum. Hier k�nnen sie ihr Konto konfigurieren. Bitte w�hlen sie von den oberen Optionen aus.';
		$this->cp_width = 'L�nge';
		$this->cp_www = 'Webseite';
		$this->cp_yahoo = 'Yahoo';
		$this->cp_zone = 'Zeitzone';
	}

	function email()
	{
		$this->email_blocked = 'Das Mitglied akzeptiert �ber dieses Board keine Emails.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Text:';
		$this->email_no_fields = 'Gehen sie zur�ck und gehen sie sicher, das alle Felder ausgef�llt sind.';
		$this->email_no_member = 'Es wurde kein Mitglied mit diesem Namen gefunden';
		$this->email_no_perm = 'Sie haben keine Erlaubnis auf diesem Board Emails zu schreiben.';
		$this->email_sent = 'Ihre Email wurde verschickt.';
		$this->email_subject = 'Betreff:';
		$this->email_to = 'An:';
	}

	function emot_control()
	{
		$this->emote = 'Emoticons'; //Translate
		$this->emote_add = 'Emoticons hinzuf�gen';
		$this->emote_added = 'Emoticon hinzugef�gt.';
		$this->emote_clickable = 'Klickbar';
		$this->emote_edit = 'Emoticons bearbeiten';
		$this->emote_image = 'Bild';
		$this->emote_install = 'Emoticons installieren';
		$this->emote_install_done = 'Emoticons wurden erfolgreich installiert.';
		$this->emote_install_warning = 'Alle bestehenden Emoticon-Einstellungen werden gel�scht und die Emoticons ihres aktuell ausgew�hlten Skins werden in die Datenbank importiert.';
		$this->emote_no_text = 'Kein Emoticon Text.';
		$this->emote_text = 'Text'; //Translate
	}

	function forum()
	{
		$this->forum_by = 'Von';
		$this->forum_can_post = 'Sie k�nnen in diesem Forum antworten.';
		$this->forum_can_topics = 'Sie k�nnen in diesem Forum Themen sehen.';
		$this->forum_cant_post = 'Sie k�nnen in diesem Forum nicht antworten.';
		$this->forum_cant_topics = 'Sie k�nnen in diesem Forum keine Themen sehen.';
		$this->forum_dot = 'Punkt';
		$this->forum_dot_detail = 'zeigt, das sie im Thema einen Beitrag verfasst hast';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Gast';
		$this->forum_hot = 'Hei�';
		$this->forum_icon = 'Nachrichtsymbol';
		$this->forum_jump = 'Springe zum neuesten Beitrag im Thema';
		$this->forum_last = 'Letzter Beitrag';
		$this->forum_locked = 'Gesperrt';
		$this->forum_mark_read = 'Mark forum as read'; //Translate
		$this->forum_moved = 'Verschoben';
		$this->forum_msg = '%s Nachricht';
		$this->forum_new = 'Neu';
		$this->forum_new_poll = 'Erstelle neue Umfrage';
		$this->forum_new_topic = 'Erstelle neues Thema';
		$this->forum_no_topics = 'Es gibt keine Themen in diesem Forum anzuzeigen.';
		$this->forum_noexist = 'Das ausgew�hlte Forum existiert nicht.';
		$this->forum_nopost = 'Keine Beitr�ge';
		$this->forum_not = 'Nicht';
		$this->forum_noview = 'Sie haben nicht die Erlaubnis Foren zu sehen.';
		$this->forum_pages = 'Seiten';
		$this->forum_pinned = 'Genagelt';
		$this->forum_pinned_topic = 'Genageltes Thema';
		$this->forum_poll = 'Umfrage';
		$this->forum_regfirst = 'Sie haben nicht die Erlaubnis Foren zu sehen, vielleicht wenn sie sich registrieren.';
		$this->forum_replies = 'Antworten';
		$this->forum_starter = 'Verfasser';
		$this->forum_sub = 'Unterforum';
		$this->forum_sub_last_post = 'Letzter Beitrag';
		$this->forum_sub_replies = 'Antworten';
		$this->forum_sub_topics = 'Themen';
		$this->forum_subscribe = 'Benachrichtige mich per Email wenn Beitr�ge in diesem Forum geschrieben wurden';
		$this->forum_topic = 'Thema';
		$this->forum_views = 'Gesehen';
		$this->forum_write_topics = 'Sie k�nnen in diesem Forum Themen erstellen.';
	}

	function forums()
	{
		$this->forum_controls = 'Forum Kontrolle';
		$this->forum_create = 'Forum erstellen';
		$this->forum_create_cat = 'Kategorie erstellen';
		$this->forum_created = 'Forum erstellt';
		$this->forum_default_perms = 'Standart Berechtigungen';
		$this->forum_delete = 'Forum l�schen';
		$this->forum_delete_warning = 'Sind sie sicher dass sie dieses Forum, die zugeh�rigen Themen und Beitr�ge l�schen wollen?<br />Diese Aktion kann nicht r�ckg�ngig gemacht werden.';
		$this->forum_deleted = 'Das Forum wurde gel�scht.';
		$this->forum_description = 'Beschreibung';
		$this->forum_edit = 'Forum bearbeiten';
		$this->forum_edited = 'Das Forum wurde erfolgreich bearbeitet.';
		$this->forum_empty = 'Kein Forenname vergeben, bitte zur�ckgehen und einen Namen eintragen.';
		$this->forum_is_subcat = 'Dieses Forum ist nur eine Unterkategorie.';
		$this->forum_name = 'Name'; //Translate
		$this->forum_no_orphans = 'Sie k�nnen ein Forum nicht verwaisen indem sie dessen Eltern l�schen.';
		$this->forum_none = 'Es gibt keine Foren zum Manipulieren.';
		$this->forum_ordered = 'Forum Anordnung aktualisiert';
		$this->forum_ordering = 'Forum Anordnung �ndern';
		$this->forum_parent = 'So k�nnen sie die Forumseltern nicht wechseln.';
		$this->forum_parent_cat = 'Vorg�nger Kategorie';
		$this->forum_quickperm_select = 'W�hle ein existierendes Forum um dessen Berechtigungen zu kopieren.';
		$this->forum_quickperms = 'Schnellberechtigungen';
		$this->forum_recount = 'Themen und Antworten nachz�hlen';
		$this->forum_select_cat = 'W�hle eine existierende Kategorie um ein Forum zu erstellen.';
		$this->forum_subcat = 'Unterkategorie';
	}

	function groups()
	{
		$this->groups_bad_format = 'Sie m�ssen %s in dem Format nutzen, welches den Gruppennamen repr�sentiert.';
		$this->groups_based_on = 'basierend auf';
		$this->groups_create = 'Gruppe erstellen';
		$this->groups_create_new = 'Erstelle eine neue Benutzergruppe';
		$this->groups_created = 'Gruppe erstellt';
		$this->groups_delete = 'Gruppe l�schen';
		$this->groups_deleted = 'Gruppe gel�scht.';
		$this->groups_edit = 'Gruppe bearbeiten';
		$this->groups_edited = 'Gruppe bearbeitet.';
		$this->groups_formatting = 'Anzeigenformatierung';
		$this->groups_i_confirm = 'Ich best�tige das ich diese Benutzergruppe l�schen m�chte.';
		$this->groups_name = 'Name'; //Translate
		$this->groups_no_action = 'Keine Aktivit�ten.';
		$this->groups_no_delete = 'Keine individuellen Gruppen zum L�schen vorhanden.<br />Die Kerngruppen sind notwendig damit Quicksilver Forums funktioniert und k�nnen nicht gel�scht werden.';
		$this->groups_no_group = 'Keine Gruppe spezifiziert.';
		$this->groups_no_name = 'Kein Gruppenname.';
		$this->groups_only_custom = 'Anmerkung: Sie k�nnen nur individuelle Benutzergruppen l�schen. Die Kerngruppen sind notwendig damit Quicksilver Forums funktioniert.';
		$this->groups_the = 'Die Gruppe';
		$this->groups_to_edit = 'Gruppe zum �ndern';
		$this->groups_type = 'Gruppentyp';
		$this->groups_will_be = 'werden gel�scht.';
		$this->groups_will_become = 'Benutzer der gel�schten Gruppe werden';
	}

	function help()
	{
		$this->help_add = 'Hilfe hinzuf�gen';
		$this->help_article = 'Hilfskontrolle';
		$this->help_available_files = 'Hilfe';
		$this->help_confirm = 'Wirklich l�schen';
		$this->help_content = 'Inhalt';
		$this->help_delete = 'Hilfe l�schen';
		$this->help_deleted = 'Hilfe gel�scht.';
		$this->help_edit = 'Hilfe bearbeiten';
		$this->help_edited = 'Hilfe aktualisiert.';
		$this->help_inserted = 'Artikel in der Datenbank gespeichert.';
		$this->help_no_articles = 'Es wurden keine Hilfen in der Datenbank gefunden.';
		$this->help_no_title = 'Es wird ein Titel ben�tigt.';
		$this->help_none = 'Es gibt keine Hilfedateien in der Datenbank.';
		$this->help_not_exist = 'Diese Hilfe existiert nicht.';
		$this->help_select = 'Bitte w�hlen sie eine Hilfe zum Bearbeiten';
		$this->help_select_delete = 'Bitte w�hlen sie eine Hilfe zum L�schen';
		$this->help_title = 'Titel';
	}

	function home()
	{
		$this->home_choose = 'W�hlen sie eine Aufgabe.';
		$this->home_menu_title = 'Administrator Kontrollzentrum Men�';
	}

	function jsdata()
	{
		$this->jsdata_address = 'Enter an address'; //Translate
		$this->jsdata_detail = 'Enter a description'; //Translate
		$this->jsdata_smiles = 'Clickable Smilies'; //Translate
		$this->jsdata_url = 'URL'; //Translate
	}

	function jslang()
	{
		$this->jslang_avatar_size_height = 'Your avatar height must be between 1 and %d pixels'; //Translate
		$this->jslang_avatar_size_width = 'Your avatar width must be between 1 and %d pixels'; //Translate
	}

	function login()
	{
		$this->login_cant_logged = 'Sie konnten sich nicht anmelden. �berpr�fen sie die Richtigkeit ihres Benutzernamens und des Passworts.<br /><br />Bitte achten sie auch auf Gro�- und Kleinschreibung, also \'BeNuTzErNaMe\' ist nicht das gleiche wie \'Benutzername\'. �berpr�fen sie auch das Cookies im Browser aktiviert sind.';
		$this->login_cookies = 'Cookies m�ssen zum Anmelden aktiviert sein.';
		$this->login_forgot_pass = 'Passwort vergessen?';
		$this->login_header = 'Angemeldet';
		$this->login_logged = 'Sie sind nun angemeldet.';
		$this->login_now_out = 'Sie sind nun abgemeldet.';
		$this->login_out = 'Abmelden';
		$this->login_pass = 'Passwort';
		$this->login_pass_no_id = 'Es gibt kein Mitglied mit dem eingegebenen Benutzernamen.';
		$this->login_pass_request = 'Um das R�cksetzen des Passworts abzuschlie�en, klickn sie bitte auf den Link welcher an die Emailadresse ihres Kontos geschickt wurde.';
		$this->login_pass_reset = 'Passwort zur�cksetzen';
		$this->login_pass_sent = 'Ihr Passwort wurde zur�ckgesetzt. Das neue Passwort wurde an die angegebene Emailaddresse verschickt.';
		$this->login_sure = 'Sind sie sich sicher das sie sich von \'%s\' abmelden wollen?';
		$this->login_user = 'Benutzername';
	}

	function logs()
	{
		$this->logs_action = 'Aktivit�t';
		$this->logs_deleted_post = 'Beitrag gel�scht';
		$this->logs_deleted_topic = 'Thema gel�scht';
		$this->logs_edited_post = 'Beitrag bearbeitet';
		$this->logs_edited_topic = 'Thema bearbeitet';
		$this->logs_id = 'IDs'; //Translate
		$this->logs_locked_topic = 'Thema geschlossen';
		$this->logs_moved_from = 'von Forum';
		$this->logs_moved_to = 'zu Forum';
		$this->logs_moved_topic = 'Thema bewegt';
		$this->logs_moved_topic_num = 'Thema # bewegt';
		$this->logs_pinned_topic = 'Thema genagelt';
		$this->logs_post = 'Beitrag';
		$this->logs_time = 'Zeit';
		$this->logs_topic = 'Thema';
		$this->logs_unlocked_topic = 'Thema ge�ffnet';
		$this->logs_unpinned_topic = 'Thema entnagelt';
		$this->logs_user = 'Benutzer';
		$this->logs_view = 'Moderator Aktivit�ten anschauen';
	}

	function main()
	{
		$this->main_activate = 'Ihr Konto wurde noch nicht aktiviert.';
		$this->main_activate_resend = 'Sende Aktivierungsmail erneut';
		$this->main_admincp = 'Administrator Kontrollzentrum';
		$this->main_banned = 'Sie wurden vom Board verbannt.';
		$this->main_code = 'Code'; //Translate
		$this->main_cp = 'Kontrollzentrum';
		$this->main_full = 'Voll';
		$this->main_help = 'Hilfe';
		$this->main_load = 'Ladevorg�nge';
		$this->main_login = 'Anmelden';
		$this->main_logout = 'Abmelden';
		$this->main_mark = 'Alle markieren';
		$this->main_mark1 = 'Markiere alle Themen als gelesen';
		$this->main_markforum_read = 'Mark forum as read'; //Translate
		$this->main_max_load = 'Es tut uns leid, aber %s ist momentan nicht erreichbar, weil zu viele Benutzer online sind.';
		$this->main_members = 'Mitglieder';
		$this->main_messenger = 'Nachrichtenzentrale';
		$this->main_new = 'Neu';
		$this->main_next = 'N�chste';
		$this->main_prev = 'Vorherige';
		$this->main_queries = 'Anfragen';
		$this->main_quote = 'Zitat';
		$this->main_recent = 'neueste Beitr�ge';
		$this->main_recent1 = 'Neue Themen seit dem letzten Besuch anschauen';
		$this->main_register = 'Registrieren';
		$this->main_reminder = 'Erinnere';
		$this->main_reminder_closed = 'Das Board ist geschlossen und kann nur von Administratoren eingesehen werden.';
		$this->main_said = 'schrieb';
		$this->main_search = 'Suche';
		$this->main_topics_new = 'Es gibt neue Beitr�ge in diesem Forum.';
		$this->main_topics_old = 'Es gibt keine neuen Beitr�ge in diesem Forum.';
		$this->main_welcome = 'Willkommen';
		$this->main_welcome_guest = 'Willkommen!';
	}

	function mass_mail()
	{
		$this->mail = 'Sammelmail';
		$this->mail_announce = 'Ank�ndigung von';
		$this->mail_groups = 'Empf�ngergruppen';
		$this->mail_members = 'Mitglieder.';
		$this->mail_message = 'Nachricht';
		$this->mail_select_all = 'Alle ausw�hlen';
		$this->mail_send = 'Mail schicken';
		$this->mail_sent = 'Ihre Nachricht wurde gesendet an';
	}

	function member_control()
	{
		$this->mc = 'Mitgliederkontrolle';
		$this->mc_confirm = 'Wirklich l�schen:';
		$this->mc_delete = 'L�sche Mitglied';
		$this->mc_deleted = 'Mitglied gel�scht.';
		$this->mc_edit = 'Mitglied bearbeiten';
		$this->mc_edited = 'Mitglied aktualisiert';
		$this->mc_email_invaid = 'Die eingegebene Emailadresse ist g�ltig.';
		$this->mc_err_updating = 'Fehler bei Profilaktualisierung';
		$this->mc_find = 'Finde Mitglieder deren Namen folgendes enthalten';
		$this->mc_found = 'Die folgenden Mitglieder wurden gefunden. Bitte w�hlen sie einen aus.';
		$this->mc_guest_needed = 'Das Gastkonto ist notwendig damit Quicksilver Forums funktionieren kann.';
		$this->mc_not_found = 'Keine Treffer bei den Mitgliedern';
		$this->mc_user_aim = 'AIM Name'; //Translate
		$this->mc_user_avatar = 'Avatar'; //Translate
		$this->mc_user_avatar_height = 'Avatar H�he';
		$this->mc_user_avatar_type = 'Avatar Typ';
		$this->mc_user_avatar_width = 'Avatar Breite';
		$this->mc_user_birthday = 'Geburtstag';
		$this->mc_user_email = 'Emailadresse';
		$this->mc_user_email_show = 'Email ist �ffentlich';
		$this->mc_user_group = 'Gruppe';
		$this->mc_user_gtalk = 'GTalk Konto';
		$this->mc_user_homepage = 'Webseite';
		$this->mc_user_icq = 'ICQ Nummer';
		$this->mc_user_id = 'Benutzer ID';
		$this->mc_user_interests = 'Interessen';
		$this->mc_user_joined = 'Mitglied seit';
		$this->mc_user_language = 'Sprache';
		$this->mc_user_lastpost = 'Letzter Beitrag';
		$this->mc_user_lastvisit = 'Letzter Besuch';
		$this->mc_user_level = 'Level'; //Translate
		$this->mc_user_location = 'Ort';
		$this->mc_user_msn = 'MSN Konto';
		$this->mc_user_name = 'Name'; //Translate
		$this->mc_user_pm = 'Private Nachrichten akzeptieren';
		$this->mc_user_posts = 'Beitr�ge';
		$this->mc_user_signature = 'Signatur';
		$this->mc_user_skin = 'Skin'; //Translate
		$this->mc_user_timezone = 'Zeitzone';
		$this->mc_user_title = 'Mitgliedstitel';
		$this->mc_user_title_custom = 'Benutze einen individuellen Mitgliedstitel';
		$this->mc_user_view_avatars = 'Avatare anschauen';
		$this->mc_user_view_emoticons = 'Emoticons anschauen';
		$this->mc_user_view_signatures = 'Signaturen anschauen';
		$this->mc_user_yahoo = 'Yahoo Konto';
	}

	function membercount()
	{
		$this->mcount = 'Mitgliedsstatistiken festlegen';
		$this->mcount_updated = 'Mitgliederanzahl aktualisiert.';
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
		$this->members_posts = 'Beitr�ge';
		$this->members_send_pm = 'Schicken sie dem Benutzer eine pers�nliche Nachricht';
		$this->members_title = 'Titel';
		$this->members_vist_www = 'Besuchen sie des Mitglied\'s Webseite';
		$this->members_www = 'Webseite';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Sind sie sich sicher, das sie diesen Beitrag l�schen wollen?';
		$this->mod_confirm_topic_delete = 'Sind sie sich sicher, das sie dieses Thema l�schen wollen?';
		$this->mod_error_first_post = 'Sie k�nnen den ersten Beitrag eines Themas nicht l�schen.';
		$this->mod_error_move_category = 'Sie k�nnen ein Thema nicht zu einer Kategorie verschieben.';
		$this->mod_error_move_create = 'sie haben keine Erlaubnis, Themen in dem Forum zu verschieben.';
		$this->mod_error_move_forum = 'Sie k�nnen das Thema nicht zu einem nicht existierendem Forum verschieben.';
		$this->mod_error_move_global = 'Sie k�nnen kein globales Thema verschieben. Editieren sie es vorher!';
		$this->mod_error_move_same = 'Sie k�nnen das Thema nicht in ein Forum verschieben, indem es sich schon befindet.';
		$this->mod_label_controls = 'Moderator Kontrolle';
		$this->mod_label_description = 'Beschreibung';
		$this->mod_label_emoticon = 'Konvertiere Smilies in Bilder?';
		$this->mod_label_global = 'Globales Thema';
		$this->mod_label_mbcode = 'Formatiere MbCode?';
		$this->mod_label_move_to = 'Verschiebe zu';
		$this->mod_label_options = 'Optionen';
		$this->mod_label_post_delete = 'L�sche Beitrag';
		$this->mod_label_post_edit = 'Editiere Beitrag';
		$this->mod_label_post_icon = 'Beitragssymbol';
		$this->mod_label_publish = 'Publizieren';
		$this->mod_label_title = 'Titel';
		$this->mod_label_title_original = 'Urpsr�nglicher Titel';
		$this->mod_label_title_split = 'Spaltungstitel';
		$this->mod_label_topic_delete = 'L�sche Thema';
		$this->mod_label_topic_edit = 'Editiere Thema';
		$this->mod_label_topic_lock = 'Sperre Thema';
		$this->mod_label_topic_move = 'Verschiebe Thema';
		$this->mod_label_topic_move_complete = 'Verschiebe das komplette Thema in das neue Forum';
		$this->mod_label_topic_move_link = 'Verschiebe das Thema in das neue Forum und hinterlasse im alten Forum ein Link zum neuen Ort.';
		$this->mod_label_topic_pin = 'Nagel das Thema';
		$this->mod_label_topic_split = 'Geteiltes Thema';
		$this->mod_missing_post = 'Der ausgew�hlte Beitrag exisitert nicht.';
		$this->mod_missing_topic = 'Das ausgew�hlte Thema exisitiert nicht.';
		$this->mod_no_action = 'Sie m�ssen eine Aktion ausw�hlen.';
		$this->mod_no_post = 'Sie m�ssen einen Beitrag ausw�hlen.';
		$this->mod_no_topic = 'Sie m�ssen ein Thema ausw�hlen.';
		$this->mod_perm_post_delete = 'Sie haben nicht die Erlaubnis diesen Beitrag zu l�schen.';
		$this->mod_perm_post_edit = 'Sie haben nicht die Erlaubnis diesen Beitrag zu editieren.';
		$this->mod_perm_publish = 'Sie haben nicht das Recht dieses Thema zu ver�ffentlichen.';
		$this->mod_perm_topic_delete = 'Sie haben nicht die Erlaubnis dieses Thema zu l�schen.';
		$this->mod_perm_topic_edit = 'Sie haben nicht die Erlaubnis dieses Them zu editieren.';
		$this->mod_perm_topic_lock = 'Sie haben nicht die Erlaubnis dieses Thema zu sperren.';
		$this->mod_perm_topic_move = 'Sie haben nicht die Erlaubnis dieses Thema zu verschieben.';
		$this->mod_perm_topic_pin = 'Sie haben nicht die Erlaubnis dieses Thema zu nageln.';
		$this->mod_perm_topic_split = 'Sie haben nicht die Erlaubnis dieses Thema zu teilen.';
		$this->mod_perm_topic_unlock = 'Sie haben nicht die Erlaubnis dieses Thema zu �ffnen.';
		$this->mod_perm_topic_unpin = 'Sie haben nicht die Erlaubnis dieses Thema zu entnageln.';
		$this->mod_success_post_delete = 'Der Beitrag wurde erfolgreich gel�scht.';
		$this->mod_success_post_edit = 'Der Beitrag wurde erfolgreich editiert.';
		$this->mod_success_publish = 'Dieses Thema wurde erfolgreich ver�ffentlicht.';
		$this->mod_success_split = 'Das Thema wurde werfolgreich geteilt.';
		$this->mod_success_topic_delete = 'Das Thema wurde erfolgreich gel�scht.';
		$this->mod_success_topic_edit = 'Das Thema wurde erfolgreich editiert.';
		$this->mod_success_topic_move = 'Das Thema wurde erfolgreich in ein neues Forum verschoben.';
		$this->mod_success_unpublish = 'Dieses Thema wurde von den Ver�ffentlichungen entfernt.';
	}

	function optimize()
	{
		$this->optimize = 'Datenbank optimieren';
		$this->optimized = 'Die Tabellen in der Datenbank wurden f�r maximale Perfomance optimiert.';
	}

	function perms()
	{
		$this->perm = 'Berechtigung';
		$this->perms = 'Berechtigungen';
		$this->perms_board_view = 'Betrachte Board-Index';
		$this->perms_board_view_closed = 'Benutze Quicksilver Forums wenn es geschlossen ist';
		$this->perms_do_anything = 'Benutze Quicksilver Forums';
		$this->perms_edit_for = 'Bearbeite Berechtigungen f�r';
		$this->perms_email_use = 'Sende �ber das Board Emails zu Mitgliedern';
		$this->perms_forum_view = 'Betrachte Forum';
		$this->perms_is_admin = 'Administrator-Kontrollzentrum einsehen';
		$this->perms_only_user = 'Benutze f�r diesen Benutzer nur Gruppenberechtigungen';
		$this->perms_override_user = 'Dies wird die Gruppenberechtigungen des Benutzers �berschreiben.';
		$this->perms_pm_noflood = 'Ausgenommen von der Personal Messenger Flood-Kontrolle';
		$this->perms_poll_create = 'Umfragen erstellen';
		$this->perms_poll_vote = 'Abstimmungen erstellen';
		$this->perms_post_attach = 'Uploads an Beitr�ge anh�ngen';
		$this->perms_post_attach_download = 'Beitragsanh�nge runterladen';
		$this->perms_post_create = 'Antworten erstellen';
		$this->perms_post_delete = 'Jegliche Beitr�ge l�schen';
		$this->perms_post_delete_own = 'Nur Beitr�ge des Benutzers l�schen';
		$this->perms_post_edit = 'Jegliche Beitr�ge bearbeiten';
		$this->perms_post_edit_own = 'Nur Beitr�ge des Benutzers bearbeiten';
		$this->perms_post_inc_userposts = 'Beitr�ge zur Gesamtanzahl der Benutzerbeitr�ge hinzunehmen';
		$this->perms_post_noflood = 'Ausgenommen von Beitrags-Flood-Kontrolle';
		$this->perms_post_viewip = 'Betrachte IP Adressen des Benutzers';
		$this->perms_search_noflood = 'Ausgenommen von Suche-Flood-Kontrolle';
		$this->perms_title = 'Benutzer-Gruppen Kontrolle';
		$this->perms_topic_create = 'Themen erstellen';
		$this->perms_topic_delete = 'Jegliche Themen l�schen';
		$this->perms_topic_delete_own = 'Nur Themen des Benutzers l�schen';
		$this->perms_topic_edit = 'Jegliche Themen bearbeiten';
		$this->perms_topic_edit_own = 'Nur Themen des Benutzers bearbeiten';
		$this->perms_topic_global = 'Ein Thema von allen Foren sichtbar machen';
		$this->perms_topic_lock = 'Jegliche Themen schlie�en';
		$this->perms_topic_lock_own = 'Themen des Benutzers schlie�en';
		$this->perms_topic_move = 'Jegliche Themen verschieben';
		$this->perms_topic_move_own = 'Nur Themen des Benutzers verschieben';
		$this->perms_topic_pin = 'Jegliche Themen nageln';
		$this->perms_topic_pin_own = 'Themen des Benutzers nageln';
		$this->perms_topic_publish = 'Ein Thema ver/unver�ffentlichen';
		$this->perms_topic_publish_auto = 'Neue Themen werden als ver�ffentlicht markiert';
		$this->perms_topic_split = 'Jegliche Themen in mehrere Themen aufteilen';
		$this->perms_topic_split_own = 'Nur Themen des Benutzers in mehrere Themen aufteilen';
		$this->perms_topic_unlock = 'Jegliche Themen �ffnen';
		$this->perms_topic_unlock_mod = 'Schlie�ung eines Moderators �ffnen';
		$this->perms_topic_unlock_own = 'Nur Themen des Benutzers �ffnen';
		$this->perms_topic_unpin = 'Jegliche Themen entnageln';
		$this->perms_topic_unpin_own = 'Nur Themen des Benutzers entnageln';
		$this->perms_topic_view = 'Themen anschauen';
		$this->perms_topic_view_unpublished = 'Unver�ffentlichte Themen anschauen';
		$this->perms_updated = 'Berechtigungen wurden aktualisiert.';
		$this->perms_user_inherit = 'Der Benutzer wird die Gruppenberechtigungen �bernehmen.';
	}

	function php_info()
	{
		$this->php_error = 'Fehler';
		$this->php_error_msg = 'phpinfo() kann nicht ausgef�hrt werden. Es scheint das der Host dieses Feature deaktiviert hat.';
	}

	function pm()
	{
		$this->pm_avatar = 'Avatar'; //Translate
		$this->pm_cant_del = 'Sie haben nicht die Erlaubnis diese Nachricht zu l�schen.';
		$this->pm_delallmsg = 'Alle Nachrichten l�schen';
		$this->pm_delete = 'L�schen';
		$this->pm_delete_selected = 'Ausgew�hlte Nachrichten l�schen';
		$this->pm_deleted = 'Nachricht gel�scht.';
		$this->pm_deleted_all = 'Nachrichten gel�scht.';
		$this->pm_error = 'Es tauchten Probleme beim schicken der Nachricht an die Mitglieder auf.<br /><br />Folgende Benutzer gibt es nicht: %s<br /><br />Folgende Benutzer wollen keine Nachrichten empfangen: %s';
		$this->pm_fields = 'Nachricht wurde nicht verschickt. Gehen sie sicher, das alle ben�tigten Felder ausgef�llt wurden.';
		$this->pm_flood = 'Sie haben in den letzten %s Sekunden schon eine Nachricht verschickt und k�nnen jetzt noch keine neue senden<br /><br />Versuchen sie es in ein paar Sekunden nochmal';
		$this->pm_folder_inbox = 'Eingang';
		$this->pm_folder_new = '%s neu';
		$this->pm_folder_sentbox = 'Gesendet';
		$this->pm_from = 'Von';
		$this->pm_group = 'Gruppe';
		$this->pm_guest = 'Als Gast k�nnen sie die Nachrichtenzentrale nicht benutzen. Bitte melden sie sich an oder registrieren sie sich.';
		$this->pm_joined = 'Teilgenommen';
		$this->pm_messenger = 'Nachrichtenzentrale';
		$this->pm_msgtext = 'Text';
		$this->pm_multiple = 'Trenne mehrere Empf�nger mit ;';
		$this->pm_no_folder = 'Sie m�ssen einen Ordner ausw�hlen.';
		$this->pm_no_member = 'Kein Mitglied mit dieser ID wurde gefunden.';
		$this->pm_no_number = 'Keine Nachricht mit dieser Nummer wurde gefunden.';
		$this->pm_no_title = 'Kein Betreff';
		$this->pm_nomsg = 'In diesem Ordner sind keine Nachrichten.';
		$this->pm_noview = 'Sie haben nicht die Erlaubnis diese Nachricht zu lesen.';
		$this->pm_offline = 'Dieses Mitglied ist momentan offline';
		$this->pm_online = 'Dieser Benutzer ist momentan online';
		$this->pm_personal = 'Private Nachrichtenzentrale';
		$this->pm_personal_msging = 'Private Nachrichten';
		$this->pm_pm = 'PN';
		$this->pm_posts = 'Post';
		$this->pm_preview = 'Vorschau';
		$this->pm_recipients = 'Empf�nger';
		$this->pm_reply = 'Antworten';
		$this->pm_send = 'Senden';
		$this->pm_sendamsg = 'Nachricht senden';
		$this->pm_sendingpm = 'PN senden';
		$this->pm_sendon = 'Gesendet';
		$this->pm_success = 'Ihre Nachricht wurde erfolgreich verschickt.';
		$this->pm_sure_del = 'Sind sie sicher, das sie diese Nachricht l�schen wollen?';
		$this->pm_sure_delall = 'Sind sie sich sicher, das sie alle Nachrichten in diesem Ordner l�schen wollen?';
		$this->pm_title = 'Titel';
		$this->pm_to = 'An';
	}

	function post()
	{
		$this->post_attach = 'Anh�nge';
		$this->post_attach_add = 'Anhang beif�gen';
		$this->post_attach_disrupt = 'Hinzuf�gen oder l�schen wird ihre Nachricht nicht beeinflussen.';
		$this->post_attach_failed = 'Der Upload des Anhangs schlug fehl. Die eingegebe Datei existiert vielleicht nicht.';
		$this->post_attach_not_allowed = 'Sie k�nnen solche Dateitypen nicht anh�ngen.';
		$this->post_attach_remove = 'Entferne Anhang';
		$this->post_attach_too_large = 'Die eingegeben Datei ist zu gro�. Die maximale Gr��e betr�gt %d KB.';
		$this->post_cant_create = 'Als Gast haben sie keine Erlaubnis ein Thema zu erstellen, vielleicht wenn sie sich registrieren.';
		$this->post_cant_create1 = 'Sie haben nicht die Erlaubnis ein Thema zu erstellen.';
		$this->post_cant_enter = 'Ihre Auswahl konnte nicht eingegeben werden. Entweder haben sie schon ausgew�hlt oder sie haben keine Erlaubnis.';
		$this->post_cant_poll = 'Als Gast haben sie keine Erlaubnis eine Umfrage zu starten, vielleicht wenn sie sich registrieren.';
		$this->post_cant_poll1 = 'Sie haben keine Erlaubnis eine Umfrage zu starten.';
		$this->post_cant_reply = 'Sie haben keine Erlaubnis auf Themen in diesem Forum zu antworten.';
		$this->post_cant_reply1 = 'Als Gast haben sie keine Erlaubnis auf Themen zu antworten, vielleicht wenn sie sich registrieren.';
		$this->post_cant_reply2 = 'Sie haben keine Erlaubnis auf Themen zu antworten.';
		$this->post_closed = 'Dieses Thema wurde geschlossen.';
		$this->post_create_poll = 'Erstelle Umfrage';
		$this->post_create_topic = 'Erstelle Thema';
		$this->post_creating = 'Erstelle Thema';
		$this->post_creating_poll = 'Erstelle Umfrage';
		$this->post_flood = 'Sie haben in den letzten %s Sekunden einen Beitrag verfasst und d�rfen im Moment nicht mehr.<br /><br />Versuchen sie es sp�ter nochmal.';
		$this->post_guest = 'Gast';
		$this->post_icon = 'Beitragssymbol';
		$this->post_last_five = 'Letzten 5 Beitr�ge abw�rts';
		$this->post_length = '�berpr�fe L�nge';
		$this->post_msg = 'Nachricht';
		$this->post_must_msg = 'Sie m�ssen eine Nachricht eingeben wenn sie einen Beitrag verfassen wollen.';
		$this->post_must_options = 'Sie m�ssen Optionen festlegen wenn sie eine Umfrage erstellen wollen.';
		$this->post_must_title = 'Sie m�ssen einen Titel vergeben wenn sie ein Thema erstellen wollen.';
		$this->post_new_poll = 'Neue Umfrage';
		$this->post_new_topic = 'Neues Thema';
		$this->post_no_forum = 'Dieses Forum wurde nicht gefunden.';
		$this->post_no_topic = 'Kein Thema ausgew�hlt.';
		$this->post_no_vote = 'Sie m�ssen zum Abstimmen eine Option ausw�hlen.';
		$this->post_option_emoticons = 'Konvertiere Smilies zu Bildern?';
		$this->post_option_global = 'Thema globalisieren?';
		$this->post_option_mbcode = 'Formatiere MbCode?';
		$this->post_optional = 'Optional';
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
		$this->post_too_many_options = 'Sie brauchen zwischen 2 und %d Optionen f�r eine Umfrage.';
		$this->post_topic_detail = 'Thema Beschreibung';
		$this->post_topic_title = 'Thema Titel';
		$this->post_view_topic = 'Zeige ganzes Thema';
		$this->post_voting = 'W�hlen';
	}

	function printer()
	{
		$this->printer_back = 'Zur�ck';
		$this->printer_not_found = 'Das Thema konnte nicht gefunden werden. Es wurde vielleicht gel�scht, verschoben oder existierte niemals.';
		$this->printer_not_found_title = 'Thema nicht gefunden';
		$this->printer_perm_topics = 'Sie haben keine Erlaubnis Themen zu sehen.';
		$this->printer_perm_topics_guest = 'Sie haben keine Erlaubnis Themen zu sehen, vielleicht wenn sie sich registrieren.';
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
		$this->profile_email_address = 'Emailaddresse';
		$this->profile_fav = 'Favorisiertes Forum';
		$this->profile_fav_forum = '%s (%d%% der Beitr�ge sind dort)';
		$this->profile_gtalk = 'GTalk Konto';
		$this->profile_icq_uin = 'ICQ Nummer';
		$this->profile_info = 'Informationen';
		$this->profile_interest = 'Hobbies';
		$this->profile_joined = 'Angemeldet seit';
		$this->profile_last_post = 'Letzter Beitrag';
		$this->profile_list = 'Mitgliederliste';
		$this->profile_location = 'Wohnort';
		$this->profile_member = 'Mitgliedsgruppe';
		$this->profile_member_title = 'Mitgliedstitel';
		$this->profile_msn = 'MSN Konto';
		$this->profile_must_user = 'Sie m�ssen einen Benutzer eintragen um ein Profil zu sehen.';
		$this->profile_no_member = 'Es gibt kein Mitglied mit dieser ID. Das Konto wurde vielleicht.';
		$this->profile_none = '[ Keiner ]';
		$this->profile_not_post = 'hat noch keinen Beitrag geschrieben.';
		$this->profile_offline = 'Dieses Mitglied ist momentan offline';
		$this->profile_online = 'Dieser Benutzer ist momentan online';
		$this->profile_pm = 'Private Nachrichten';
		$this->profile_postcount = '%s insgesamt, %s pro Tag';
		$this->profile_posts = 'Nachrichten';
		$this->profile_private = '[ Privat ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Signatur';
		$this->profile_unkown = '[ Unbekannt ]';
		$this->profile_view_profile = 'Profil anzeigen';
		$this->profile_www = 'Webseite';
		$this->profile_yahoo = 'Yahoo Kontakt';
	}

	function prune()
	{
		$this->prune_action = 'Aufr�umaktionen';
		$this->prune_age_day = '1 Tag';
		$this->prune_age_eighthours = '8 Stunden';
		$this->prune_age_hour = '1 Stunde';
		$this->prune_age_month = '1 Monat';
		$this->prune_age_threemonths = '3 Monate';
		$this->prune_age_week = '1 Woche';
		$this->prune_age_year = '1 Jahr';
		$this->prune_forums = 'W�hle Forum in dem aufger�umt werden soll';
		$this->prune_invalidage = 'Ung�ltiges Alter zum Aufr�umen spezifiziert';
		$this->prune_move = 'Verschieben';
		$this->prune_moveto_forum = 'Forum verschieben nach';
		$this->prune_nodest = 'Kein g�ltiges Ziel ausgew�hlt';
		$this->prune_notopics = 'Keine Themen zum Aufr�umen ausgew�hlt';
		$this->prune_notopics_old = 'Keine Themen sind alt genug zum Aufr�umen';
		$this->prune_novalidforum = 'Keine g�ltigen Foren zum Aufr�umen spezifiziert';
		$this->prune_select_age = 'W�hle Alter der Themen bis zu welchem aufger�umt werden soll';
		$this->prune_select_topics = 'W�hle Themen zum Aufr�umen oder w�hle alle';
		$this->prune_success = 'Themen wurden aufger�umt';
		$this->prune_title = 'Themen-Aufr�umer';
		$this->prune_topics_older_than = 'R�ume Themen auf die �lter sind als';
	}

	function query()
	{
		$this->query = 'Abfragen Interface';
		$this->query_fail = 'fehlgeschlagen.';
		$this->query_success = 'erfolgreich ausgef�hrt.';
		$this->query_your = 'Ihre Abfrage';
	}

	function recent()
	{
		$this->recent_active = 'Aktive Themen seit dem letzten Besuch';
		$this->recent_by = 'Von';
		$this->recent_can_post = 'Sie k�nnen in diesem Forum antworten.';
		$this->recent_can_topics = 'Sie k�nnen in diesem Forum Themen sehen.';
		$this->recent_cant_post = 'Sie k�nnen in diesem Forum nicht antworten.';
		$this->recent_cant_topics = 'Sie k�nnen in diesem Forum keine Themen sehen.';
		$this->recent_dot = 'Punkt';
		$this->recent_dot_detail = 'zeigt, das sie in diesem Thema einen Beitrag verfasst haben';
		$this->recent_forum = 'Forum'; //Translate
		$this->recent_guest = 'Gast';
		$this->recent_hot = 'Hei�';
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
		$this->recent_noexist = 'Das ausgew�hlte Forum existiert nicht.';
		$this->recent_nopost = 'Keine Beitr�ge';
		$this->recent_not = 'Nicht';
		$this->recent_noview = 'Sie haben nicht die Erlaubnis Foren zu sehen.';
		$this->recent_pages = 'Seiten';
		$this->recent_pinned = 'Genagelt';
		$this->recent_pinned_topic = 'Genageltes Thema';
		$this->recent_poll = 'Umfrage';
		$this->recent_regfirst = 'Sie haben nicht die Erlaubnis Foren zu sehen, vielleicht wenn sie sich registrieren.';
		$this->recent_replies = 'Antworten';
		$this->recent_starter = 'Verfasser';
		$this->recent_sub = 'Unterforum';
		$this->recent_sub_last_post = 'Letzter Beitrag';
		$this->recent_sub_replies = 'Antworten';
		$this->recent_sub_topics = 'Themen';
		$this->recent_subscribe = 'Benachrichtige mich per Email wenn Beitr�ge in diesem Forum geschrieben wurden';
		$this->recent_topic = 'Thema';
		$this->recent_views = 'Gesehen';
		$this->recent_write_topics = 'Sie k�nnen in diesem Forum Themen erstellen.';
	}

	function register()
	{
		$this->register_activated = 'Ihr Konto wurde aktiviert!';
		$this->register_activating = 'Konto Aktivierung';
		$this->register_activation_error = 'Es gab ein Problem w�hrend der Aktivierung ihres Kontos. �berpr�fen sie ob der Browser die komplette URL der Aktivierungsemail beinhaltet. Wenn das Problem weiterhin besteht kontaktieren sie bitte den Boardadministrator um die Email erneut zu verschicken.';
		$this->register_confirm_passwd = 'Best�tige Passwort';
		$this->register_done = 'Sie wurden erfolgreich registriert! Sie k�nnen sich nun anmelden.';
		$this->register_email = 'Emailadresse';
		$this->register_email_invalid = 'Die eingegeben Emailadresse ist ung�ltig.';
		$this->register_email_msg = 'Diese Email wurde von Quicksilver Forums generiert und im Auftrag an sie gesendet';
		$this->register_email_msg2 = 'damit sie ihr Konto aktivieren k�nnen';
		$this->register_email_msg3 = 'Bitte klicken sie den folgenden Link oder f�gen sie ihn in die Adressleiste ihres Browsers ein:';
		$this->register_email_used = 'Die eingegebene Emailadresse ist schon einem Mitglied zugeordnet.';
		$this->register_fields = 'Nicht alle Felder wurden ausgef�llt.';
		$this->register_flood = 'You have registered already.'; //Translate
		$this->register_image = 'Bitte geben sie einen Text zum Bild ein.';
		$this->register_image_invalid = 'Um ihre Identit�t zu pr�fen, m�ssen sie den Text vom Bild eingeben.';
		$this->register_initiated = 'This request was initiated from IP:'; //Translate
		$this->register_must_activate = 'Sie sind registriert. Eine Email wurde verschickt zu %s mit Informationen wie sie ihr Konto aktivieren k�nnen. Ihr Konto wird bis zur Aktivierung limitiert.';
		$this->register_name_invalid = 'Der eingegebene Name ist zu lang.';
		$this->register_name_taken = 'Der Mitgliedsname ist bereits vergeben.';
		$this->register_new_user = 'Ben�tigter Benutzername';
		$this->register_pass_invalid = 'Das eingegebene Passwort ist nicht g�ltig. Gehen sie sicher, das nur g�ltige Zeichen wie z.B. Buchstaben, Nummern, Striche, Unterstriche oder Leerzeichen sowie mindestens 5 Zeichen verwendet wurden.';
		$this->register_pass_match = 'Die eingegebenen Passw�rter stimmen nicht �berein.';
		$this->register_passwd = 'Passwort';
		$this->register_reg = 'Registrierung';
		$this->register_reging = 'Registrierung';
		$this->register_requested = 'Account activation request for:'; //Translate
		$this->register_tos = 'Nutzungsbestimmungen';
		$this->register_tos_i_agree = 'Ich stimme den Obenstehenden Bestimmungen zu';
		$this->register_tos_not_agree = 'Sie haben den Bestimmungen nicht zugestimmt.';
		$this->register_tos_read = 'Bitte lesen sie die folgenden Nutzungsbestimmungen';
	}

	function rssfeed()
	{
		$this->rssfeed_cannot_find_forum = 'Das Forum scheint nicht zu existieren';
		$this->rssfeed_cannot_find_topic = 'Das Thema scheint nicht zu existieren';
		$this->rssfeed_cannot_read_forum = 'Sie haben nicht die Berechtigung dieses Forum zu lesen';
		$this->rssfeed_cannot_read_topic = 'Sie haben nicht die Berechtigung dieses Thema zu lesen';
		$this->rssfeed_error = 'Fehler';
		$this->rssfeed_forum = 'Forum:'; //Translate
		$this->rssfeed_posted_by = 'Geschrieben von';
		$this->rssfeed_topic = 'Thema:';
	}

	function search()
	{
		$this->search_advanced = 'Erweitere Optionen';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Einfache Suche';
		$this->search_characters = 'Zeichen eines Beitrags anzeigen';
		$this->search_day = 'Tag';
		$this->search_days = 'Tage';
		$this->search_exact_name = 'Exakter Name';
		$this->search_flood = 'Sie haben in den letzten %s Sekunden bereits eine Suchanfrage gestartet und k�nnen noch nicht wieder suchen.<br /><br />Versuchen sie es in ein paar Sekunden wieder.';
		$this->search_for = 'Suche nach';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Gruppe';
		$this->search_guest = 'Gast';
		$this->search_in = 'Suche in';
		$this->search_in_posts = 'Suche nur in Beitr�gen';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Angemeldet seit';
		$this->search_level = 'Mitgliedslevel';
		$this->search_match = 'Suche nach Treffern';
		$this->search_matches = 'Treffer';
		$this->search_month = 'Monat';
		$this->search_months = 'Monate';
		$this->search_mysqldoc = 'MySQL Dokumentation';
		$this->search_newer = 'neuer';
		$this->search_no_results = 'Ihre Suche brachte keine Ergebnisse.';
		$this->search_no_words = 'Sie m�ssen Suchbegriffe definieren.<br /><br />Jeder Begriff muss l�nger als 3 Zeichen sein, inklusive Buchstaben, Nummern, Apostrophen und Unterstriche.';
		$this->search_offline = 'Dieses Mitglied ist momentan offline';
		$this->search_older = '�lter';
		$this->search_online = 'Dieser Benutzer ist grade online';
		$this->search_only_display = 'Nur die ersten';
		$this->search_partial_name = 'Teil des Namen';
		$this->search_post_icon = 'Nachrichtensymbol';
		$this->search_posted_on = 'Geschrieben am';
		$this->search_posts = 'Beitr�ge';
		$this->search_posts_by = 'Nur Beitr�ge von';
		$this->search_regex = 'Suche nach regul�ren Ausdr�cken';
		$this->search_regex_failed = 'Die regul�ren Audr�cke schlugen fehl. Bitte schauen sie in die MySQL Dokumentation f�r Hilfe bei regul�ren Ausdr�cken.';
		$this->search_relevance = 'Nachrichtrelevanz: %d%%';
		$this->search_replies = 'Beitr�ge';
		$this->search_result = 'Suchergebnis';
		$this->search_search = 'Suche';
		$this->search_select_all = 'W�hle alle aus';
		$this->search_show_posts = 'Zeige �bereinstimmende Beitr�ge';
		$this->search_sound = 'Suche nach Sounds';
		$this->search_starter = 'Ersteller';
		$this->search_than = 'als';
		$this->search_topic = 'Thema';
		$this->search_unreg = 'Unregestriert';
		$this->search_week = 'Woche';
		$this->search_weeks = 'Wochen';
		$this->search_year = 'Jahr';
	}

	function settings()
	{
		$this->settings = 'Einstellungen';
		$this->settings_active = 'Aktive Benutzereinstellungen';
		$this->settings_allow = 'Erlauben';
		$this->settings_antibot = 'Anti-Bot Registrierung';
		$this->settings_attach_ext = 'Anh�nge - Dateiendungen';
		$this->settings_attach_one_per = 'Eine pro Linie.';
		$this->settings_avatar = 'Avatar Einstellungen';
		$this->settings_avatar_flash = 'Flash Avatare';
		$this->settings_avatar_max_height = 'Maximale Avatar-H�he';
		$this->settings_avatar_max_width = 'Maximale Avatar-Breite';
		$this->settings_avatar_upload = 'Hochgeladene Avatare - Maximale Dateigr��e';
		$this->settings_basic = 'Bearbeite Board-Einstellungen';
		$this->settings_blank = 'Benutze <i>_blank</i> f�r ein neues Fenster.';
		$this->settings_board_enabled = 'Board aktiviert';
		$this->settings_board_location = 'Ort des Boards';
		$this->settings_board_name = 'Board Name'; //Translate
		$this->settings_board_rss = 'RSS Feed Einstellungen';
		$this->settings_board_rssfeed_desc = 'RSS Feed Beschreibung';
		$this->settings_board_rssfeed_posts = 'Anzahl der Beitr�ge die via RSS Feed erscheinen sollen';
		$this->settings_board_rssfeed_time = 'Aktualisierungszeitraum in Minuten';
		$this->settings_board_rssfeed_title = 'RSS Feed Titel';
		$this->settings_clickable = 'Klickbare Smilies pro Zeile';
		$this->settings_cookie = 'Cookie und Flood Einstellungen';
		$this->settings_cookie_path = 'Cookie Pfad';
		$this->settings_cookie_prefix = 'Cookie Prefix'; //Translate
		$this->settings_cookie_time = 'Verbleibende Zeit bei Login';
		$this->settings_db = 'Bearbeite Verbindungseinstellungen';
		$this->settings_db_host = 'Datenbankhost';
		$this->settings_db_leave_blank = 'Optional';
		$this->settings_db_multiple = 'Um mehrere Boards auf einer Datenbank zu installieren.';
		$this->settings_db_name = 'Datenbankname';
		$this->settings_db_password = 'Datenbankpasswort';
		$this->settings_db_port = 'Datenbankport';
		$this->settings_db_prefix = 'Tabellenpr�fix';
		$this->settings_db_socket = 'Datenbanksocket';
		$this->settings_db_username = 'Datenbankbenutzername';
		$this->settings_debug_mode = 'Debug Mode'; //Translate
		$this->settings_default_lang = 'Standardsprache';
		$this->settings_default_no = 'Standardnummer';
		$this->settings_default_skin = 'Standardskin';
		$this->settings_default_yes = 'Standard Ja';
		$this->settings_disabled = 'Deaktiviert';
		$this->settings_disabled_notice = 'Deaktivierungshinweis';
		$this->settings_email = 'E-Mail Einstellungen';
		$this->settings_email_fake = 'Nur f�r die Anzeige. Es sollte keine echte Emailadresse sein.';
		$this->settings_email_from = 'E-mail Von-Adresse';
		$this->settings_email_place1 = 'Platziere Mitglieder in die';
		$this->settings_email_place2 = 'Gruppe bis sie ihre Emailadresse best�tigt haben';
		$this->settings_email_place3 = 'Ben�tigt keine Email-Aktivierung';
		$this->settings_email_real = 'Es sollte eine echte Emailadresse sein.';
		$this->settings_email_reply = 'E-mail Antwort-An-Adresse';
		$this->settings_email_smtp = 'SMTP Mail Server'; //Translate
		$this->settings_email_valid = 'Neue Mitglieder Email-Best�tigung';
		$this->settings_enabled = 'Aktiviert';
		$this->settings_enabled_modules = 'Aktivierte Module';
		$this->settings_foreign_link = 'Fremdes Linkziel';
		$this->settings_general = 'Allgemeine Einstellungen';
		$this->settings_group_after = 'Gruppe nach der Regestrierung';
		$this->settings_hot_topic = 'Beitr�ge f�r ein hei�es Thema';
		$this->settings_kilobytes = 'Kilobytes'; //Translate
		$this->settings_max_attach_size = 'Anh�nge - Maximale Dateigr��e';
		$this->settings_members = 'Mitglieder Einstellungen';
		$this->settings_modname_only = 'Modulname, ohne .php';
		$this->settings_new = 'New Setting'; //Translate
		$this->settings_new_add = 'Add Board Setting';
		$this->settings_new_added = 'New settings added.'; //Translate
		$this->settings_new_exists = 'That setting already exists. Choose another name for it.'; //Translate
		$this->settings_new_name = 'New setting name'; //Translate
		$this->settings_new_required = 'The new setting name is required.'; //Translate
		$this->settings_new_value = 'New setting value'; //Translate
		$this->settings_no_allow = 'Erlaube nicht';
		$this->settings_nodata = 'Es wurden keine Daten von POST gesendet';
		$this->settings_one_per = 'Einer pro Linie';
		$this->settings_pixels = 'Pixel';
		$this->settings_pm_flood = 'Personal Messenger Flood-Kontrolle';
		$this->settings_pm_min_time = 'Minimaler Zeitabstand zwischen 2 Nachrichten.';
		$this->settings_polls = 'Umfragen';
		$this->settings_polls_no = 'Benutzer kann an einer Umfrage nicht mehr teilnehmen nachdem er die Ergebnisse gesehen hat';
		$this->settings_polls_yes = 'Benutzer kann an einer Umfrage teilnehmen nachdem er die Ergebnisse gesehen hat';
		$this->settings_post_flood = 'Beitrags Flood-Kontrolle';
		$this->settings_post_min_time = 'Minimaler Zeitabstand zwischen Beitr�gen.';
		$this->settings_posts_topic = 'Beitr�ge pro Themenseite';
		$this->settings_search_flood = 'Suche Flood-Kontrolle';
		$this->settings_search_min_time = 'Minimaler Zeitabstand zwischen Suchen.';
		$this->settings_server = 'Server Einstellungen';
		$this->settings_server_gzip = 'GZIP Komprimierung';
		$this->settings_server_gzip_msg = 'Erh�ht Geschwindigkeit. Ausschalten wenn das Board durcheinander oder leer erscheint.';
		$this->settings_server_maxload = 'Maximale Serverauslastung';
		$this->settings_server_maxload_msg = 'Deaktiviere Board unter �berm��iger Serverbelastung. Eingabe von 0 deaktiviert.';
		$this->settings_server_timezone = 'Server Zeitzone';
		$this->settings_show_avatars = 'Avatare anzeigen';
		$this->settings_show_email = 'Emailadressen anzeigen';
		$this->settings_show_emotes = 'Emoticons anzeigen';
		$this->settings_show_notice = 'Wird angezeigt wenn das Board deaktiviert ist';
		$this->settings_show_pm = 'Private Nachrichten akzeptieren';
		$this->settings_show_sigs = 'Signaturen anzeigen';
		$this->settings_spider_agent = 'Spider-Benutzer Agent';
		$this->settings_spider_agent_msg = 'Gib alles oder Teile des eindeutigen Spider-HTTP-USER AGENT ein.';
		$this->settings_spider_enable = 'Spider Darstellung aktivieren';
		$this->settings_spider_enable_msg = 'Aktiviere die Namen der Spider-Suchmaschinen in der aktiven Auflistung.';
		$this->settings_spider_name = 'Spider Name'; //Translate
		$this->settings_spider_name_msg = 'Geben sie den Namen ein den sie f�r jede der oberen Spiders in der aktiven Auflistung angezeigt haben m�chten. Sie m�ssen den Spider-Namen in der gleichen Zeile wie den Spider-Benutzer Agent oben platzieren. Platzieren sie zum Beispiel \'googlebot\' in der dritten Zeile der Spider-Benutzer Agents, setze \'Google\' in die dritte Zeile der Spider-Namen.';
		$this->settings_timezone = 'Zeitzone';
		$this->settings_topics_page = 'Themen pro Forumseite';
		$this->settings_tos = 'Nutzungsbestimmungen';
		$this->settings_updated = 'Einstellungen wurden aktualisiert.';
	}

	function stats()
	{
		$this->stats = 'Statistik-Center';
		$this->stats_post_by_month = 'Beitragsanzahl pro Monat';
		$this->stats_reg_by_month = 'Registrierungen pro Monat';
	}

	function templates()
	{
		$this->add = 'HTML-Templates hinzuf�gen';
		$this->add_in = 'F�ge Template hinzu:';
		$this->all_fields_required = 'Alle Felder werden ben�tigt um ein Template hinzuzuf�gen';
		$this->choose_css = 'Choose CSS Template'; //Translate
		$this->choose_set = 'W�hle einen Template-Satz';
		$this->choose_skin = 'W�hle ein Skin';
		$this->confirm1 = 'Mit der Best�tigung l�schen sie das';
		$this->confirm2 = 'Template von';
		$this->create_new = 'Erstelle ein neues Skin mit dem Namen';
		$this->create_skin = 'Skin erstellen';
		$this->credit = 'Bitte nicht unseren einzigen Nachweis entfernen!';
		$this->css_edited = 'CSS file has been updated.'; //Translate
		$this->css_fioerr = 'The file could not be written to, you will need to CHMOD the file manually.'; //Translate
		$this->delete_template = 'Template l�schen';
		$this->directory = 'Verzeichnis';
		$this->display_name = 'Anzeigename';
		$this->edit_css = 'Edit CSS'; //Translate
		$this->edit_skin = 'Skin bearbeiten';
		$this->edit_templates = 'Templates bearbeiten';
		$this->export_done = 'Skin wurde in das Quicksilver Forums Hauptverzeichnis exportiert.';
		$this->export_select = 'W�hle ein Skin f�r den Export';
		$this->export_skin = 'Skin exportieren';
		$this->install_done = 'Skin wurde erfolgreich installiert.';
		$this->install_exists1 = 'Es scheint als w�re der Skin';
		$this->install_exists2 = 'schon gel�scht.';
		$this->install_overwrite = '�berschreiben';
		$this->install_skin = 'Skin installieren';
		$this->menu_title = 'W�hle einen Template-Bereich zum Bearbeiten';
		$this->no_file = 'No such file.'; //Translate
		$this->only_skin = 'Es ist nur ein Skin installiert. Sie k�nnen diesen Skin nicht l�schen.';
		$this->or_new = 'Oder erstelle neuen Template-Satz mit dem Namen:';
		$this->select_skin = 'W�hle ein Skin aus';
		$this->select_skin_edit = 'W�hle ein Skin zum Bearbeiten aus';
		$this->select_skin_edit_done = 'Skin erfolgreich bearbeitet.';
		$this->select_template = 'Template ausw�hlen';
		$this->skin_chmod = 'Ein neues Verzeichnis konnte f�r den Skin nicht erstellt werden. Versuchen sie mit CHMOD die Berechtigungen des Skin-Verzeichnisses auf 775 zu �ndern.';
		$this->skin_created = 'Skin erstellt.';
		$this->skin_deleted = 'Skin erfolgreich gel�scht.';
		$this->skin_dir_name = 'Sie m�ssen einen Namen f�r den Skin und das Verzeichnis vergeben.';
		$this->skin_dup = 'Es wurden ein Skin mit doppeltem Verzeichnisnamen gefunden. Das Skin-Verzeichnung wurde ge�ndert in';
		$this->skin_name = 'Sie m�ssen einen Namen f�r den Skin vergeben.';
		$this->skin_none = 'Keine Skins zum Installieren vorhanden.';
		$this->skin_set = 'Skin-Satz';
		$this->skins_found = 'Die folgenden Skins wurden im Quicksilver Forums Verzeichnis gefunden';
		$this->template_about = '�ber Variablen';
		$this->template_about2 = 'Variablen sind Textteile die von dynamischen Daten ersetzt werden. Variablen beginnen immer mit einem Dollarzeichen und sind manchmal von {Klammern} umgeben.';
		$this->template_add = 'Hinzuf�gen';
		$this->template_added = 'Template hinzugef�gt.';
		$this->template_clear = 'Frei';
		$this->template_confirm = 'Sie haben das Template ver�ndert. Wollen sie die �nderungen speichern?';
		$this->template_description = 'Template-Beschreibung';
		$this->template_html = 'Template-HTML';
		$this->template_name = 'Template-Name';
		$this->template_position = 'Template-Position';
		$this->template_set = 'Template-Satz';
		$this->template_title = 'Template-Titel';
		$this->template_universal = 'Universelle Variable';
		$this->template_universal2 = 'Einige Variablen k�nnen in jedem Template, andere nur in einem Template benutzt werden. Bestandteile des $this Objektes k�nnen �berall benutzt werden.';
		$this->template_updated = 'Template aktualisiert.';
		$this->templates = 'Templates'; //Translate
		$this->temps_active = 'Aktive Benutzer Details';
		$this->temps_admin = '<b>Administrator Kontrollzentrum Universell</b>';
		$this->temps_ban = 'Administrator Kontrollzentrum Sperrungen';
		$this->temps_board_index = 'Board Index'; //Translate
		$this->temps_censoring = 'Administrator Kontrollzentrum W�rterzensierung';
		$this->temps_cp = 'Mitglieder Kontrollzentrum';
		$this->temps_email = 'Einem Mitglied eine Email senden';
		$this->temps_emot_control = 'Administrator Kontrollzentrum Emoticons';
		$this->temps_forum = 'Foren';
		$this->temps_forums = 'Administrator Kontrollzentrum Foren';
		$this->temps_groups = 'Administrator Kontrollzentrum Gruppen';
		$this->temps_help = 'Hilfe';
		$this->temps_login = 'Ein-/Ausloggen';
		$this->temps_logs = 'Administrator Kontrollzentrum Moderator-Logs';
		$this->temps_main = '<b>Board Universell</b>';
		$this->temps_mass_mail = 'Administrator Kontrollzentrum Sammelmail';
		$this->temps_member_control = 'Administrator Kontrollzentrum Mitgliederkontrolle';
		$this->temps_members = 'Mitgliederliste';
		$this->temps_mod = 'Moderator-Kontrollen';
		$this->temps_pm = 'Private Messenger'; //Translate
		$this->temps_polls = 'Umfragen';
		$this->temps_post = 'Senden';
		$this->temps_printer = 'Druckerfreundliche Themen';
		$this->temps_profile = 'Profil-Betrachtung';
		$this->temps_recent = 'Neueste Themen';
		$this->temps_register = 'Registrierung';
		$this->temps_rssfeed = 'RSS Feed'; //Translate
		$this->temps_search = 'Suche';
		$this->temps_settings = 'Administrator Kontrollzentrum Einstellungen';
		$this->temps_templates = 'Administrator Kontrollzentrum Template-Editor';
		$this->temps_titles = 'Administrator Kontrollzentrum Mitgliedertitel';
		$this->temps_topic_prune = 'AdminCP Topic Pruning'; //Translate
		$this->temps_topics = 'Themen';
		$this->upgrade_skin = 'Modernisiere Skin';
		$this->upgrade_skin_already = 'wurde schon modernisiert. Nichts zu tun.';
		$this->upgrade_skin_detail = 'Skins die mit dieser Methode modernisiert wurden ben�tigen eine nachtr�gliche Anpassung des Templates.<br />W�hle Skin aus';
		$this->upgrade_skin_upgraded = 'Skin wurde modernisiert.';
		$this->upgraded_templates = 'Die folgenden Templates wurden hinzugef�gt';
	}

	function titles()
	{
		$this->titles_add = 'Mitgliedertitel hinzuf�gen';
		$this->titles_added = 'Mitgliedertitel hinzugef�gt.';
		$this->titles_control = 'Mitgliedertitel-Kontrolle';
		$this->titles_edit = 'Bearbeite Mitgliedertitel';
		$this->titles_error = 'Kein Titel oder Mindest-Beitr�ge angegeben';
		$this->titles_image = 'Bild';
		$this->titles_minpost = 'Mindest-Beitr�ge';
		$this->titles_nodel_default = 'Removal of the default title has been disabled as it will break your board, please edit it instead.'; //Translate
		$this->titles_title = 'Titel';
	}

	function topic()
	{
		$this->topic_attached = 'Angehangene Datei:';
		$this->topic_attached_downloads = 'Downloads'; //Translate
		$this->topic_attached_filename = 'Filename:'; //Translate
		$this->topic_attached_image = 'Attached image:'; //Translate
		$this->topic_attached_perm = 'Sie haben keine Erlaubnis diese Datei runterzuladen.';
		$this->topic_attached_size = 'Size:'; //Translate
		$this->topic_attached_title = 'Angehangene Datei';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Gehe zum Ende der Seite';
		$this->topic_create_poll = 'Erstelle neue Umfrage';
		$this->topic_create_topic = 'Erstelle neues Thema';
		$this->topic_delete = 'L�schen';
		$this->topic_delete_post = 'L�sche diesen Beitrag';
		$this->topic_edit = 'Editiere';
		$this->topic_edit_post = 'Editiere diesen Beitrag';
		$this->topic_edited = 'Zuletzt editiert: %s von %s';
		$this->topic_error = 'Fehler';
		$this->topic_group = 'Gruppe';
		$this->topic_guest = 'Gast';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Teilgenommen';
		$this->topic_level = 'Mitgliedslevel';
		$this->topic_links_aim = 'Sende AIM Nachricht an %s';
		$this->topic_links_email = 'Sende Email an %s';
		$this->topic_links_gtalk = 'Sende GTalk Nachricht an %s';
		$this->topic_links_icq = 'Sende ICQ Nachricht an %s';
		$this->topic_links_msn = 'Zeige %s\'s MSN Profil';
		$this->topic_links_pm = 'Sende pers�nliche Nachricht an %s';
		$this->topic_links_web = 'Besuche %s\'s Webseite';
		$this->topic_links_yahoo = 'Sende Nachricht an %s mit Yahoo! Messenger';
		$this->topic_lock = 'Sperren';
		$this->topic_locked = 'Thema gesperrt';
		$this->topic_move = 'Verschiebe';
		$this->topic_new_post = 'Post is unread'; //Translate
		$this->topic_newer = 'Neueres Thema';
		$this->topic_no_newer = 'Es gibt kein neueres Thema.';
		$this->topic_no_older = 'Es gibt kein �lteres Thema.';
		$this->topic_no_votes = 'Es gibt keine Abstimmungen f�r diese Umfrage.';
		$this->topic_not_found = 'Thema nicht gefunden';
		$this->topic_not_found_message = 'Das Thema konnte nicht gefunden werden. Es wurde vielleicht gel�scht, verschoben oder existierte nie.';
		$this->topic_offline = 'Dieses Mitglied ist momentan offline';
		$this->topic_older = '�lteres Thema';
		$this->topic_online = 'Dieser Benutzer ist grade online';
		$this->topic_options = 'Thema Optionen';
		$this->topic_pages = 'Seiten';
		$this->topic_perm_view = 'Sie haben keine Erlaubnis Themen zu sehen.';
		$this->topic_perm_view_guest = 'Sie haben keine Erlaubnis Themen zu sehen, vielleicht wenn sie sich registrieren.';
		$this->topic_pin = 'Nagel';
		$this->topic_posted = 'Verfasst: ';
		$this->topic_posts = 'Beitr�ge';
		$this->topic_print = 'Zeige Druckversion';
		$this->topic_publish = 'Ver�ffentlichen';
		$this->topic_qr_emoticons = 'Emoticons'; //Translate
		$this->topic_qr_open_emoticons = '�ffne klickbare Emoticons';
		$this->topic_qr_open_mbcode = '�ffne MBCode';
		$this->topic_quickreply = 'Schnell-Antwort';
		$this->topic_quote = 'Antworte mit einem Zitat des Beitrages';
		$this->topic_reply = 'Thema antworten';
		$this->topic_split = 'Geteilt';
		$this->topic_split_finish = 'Teilung abschlie�en';
		$this->topic_split_keep = 'Diesen Beitrag nicht verschieben';
		$this->topic_split_move = 'Diesen Beitrag verschieben';
		$this->topic_subscribe = 'Benachrichte mich per Email wenn in diesem Thema geantwortet wurde';
		$this->topic_top = 'Zum Anfang der Seite';
		$this->topic_unlock = 'Entsperren';
		$this->topic_unpin = 'Entnageln';
		$this->topic_unpublish = 'Unver�ffentlichen';
		$this->topic_unpublished = 'ieses Thema ist als unver�ffentlicht eingestuft und somit haben sie nicht das Recht es zu sehen.';
		$this->topic_unreg = 'Unregistriert';
		$this->topic_view = 'Zeige Ergebnisse';
		$this->topic_viewing = 'Zeige Thema';
		$this->topic_vote = 'W�hle';
		$this->topic_vote_count_plur = '%d Stimmen';
		$this->topic_vote_count_sing = '%d Stimme';
		$this->topic_votes = 'Stimmen';
	}

	function universal()
	{
		$this->aim = 'AIM'; //Translate
		$this->based_on = 'basierend auf';
		$this->board_by = 'Von';
		$this->charset = 'iso-8859-1';
		$this->continue = 'Fortsetzen';
		$this->delete = 'L�schen';
		$this->direction = 'ltr'; //Translate
		$this->edit = 'Bearbeiten';
		$this->email = 'Email'; //Translate
		$this->gtalk = 'GT'; //Translate
		$this->icq = 'ICQ'; //Translate
		$this->msn = 'MSN'; //Translate
		$this->new_message = 'Neue Nachricht';
		$this->new_poll = 'Neue Umfrage';
		$this->new_topic = 'Neues Thema';
		$this->no = 'Nein';
		$this->powered = 'Powered by'; //Translate
		$this->private_message = 'PN';
		$this->quote = 'Zitat';
		$this->reply = 'Antwort';
		$this->seconds = 'Sekunden';
		$this->select_all = 'Alles ausw�hlen';
		$this->sep_decimals = ',';
		$this->sep_thousands = '.';
		$this->spoiler = 'Spoiler'; //Translate
		$this->submit = 'Abschicken';
		$this->subscribe = 'Abonnieren';
		$this->today = 'Heute ';
		$this->website = 'WWW'; //Translate
		$this->yahoo = 'Yahoo'; //Translate
		$this->yes = 'Ja';
		$this->yesterday = 'Gestern ';
	}
}
?>
