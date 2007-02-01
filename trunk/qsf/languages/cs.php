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
 * Czech language module
 *
 * @author Ryan69 <ryan69@seznam.cz>
 * @since 1.1.0
 **/
class cs
{
	function active()
	{
		$this->active_last_action = 'Akce';
		$this->active_modules_active = 'Prohlí&#x17E;í si aktivní u&#x17E;ivatele';
		$this->active_modules_board = 'Je na úvodní stránce';
		$this->active_modules_cp = 'Pou&#x17E;ívá kontrolní panel';
		$this->active_modules_forum = 'Prohlí&#x17E;í si fórum: %s';
		$this->active_modules_help = 'Pou&#x17E;ívá nápov&#x11B;du';
		$this->active_modules_login = 'Vstupuje/Odchází';
		$this->active_modules_members = 'Prohlí&#x17E;í si seznam &#x10D;len&#x16F;';
		$this->active_modules_mod = 'Moderovat';
		$this->active_modules_pm = 'Pou&#x17E;ívá Messenger';
		$this->active_modules_post = 'Pí&#x161;e nový p&#x159;ísp&#x11B;vek';
		$this->active_modules_printer = 'Tiskne si téma: %s';
		$this->active_modules_profile = 'Prohlí&#x17E;í si profil: %s';
		$this->active_modules_recent = 'Prohlí&#x17E;í si nové p&#x159;ísp&#x11B;vky';
		$this->active_modules_search = 'Hledání';
		$this->active_modules_topic = 'Prohlí&#x17E;í si téma: %s';
		$this->active_time = '&#x10D;as';
		$this->active_user = 'U&#x17E;ivatel';
		$this->active_users = 'Aktivní u&#x17E;ivatelé';
	}

	function admin()
	{
		$this->admin_add_emoticons = 'P&#x159;idat smajlíky';
		$this->admin_add_member_titles = 'Add automatic member titles'; //Translate
		$this->admin_add_templates = 'Add HTML templates'; //Translate
		$this->admin_ban_ips = 'Ban IP addresses'; //Translate
		$this->admin_censor = 'Censor words'; //Translate
		$this->admin_cp_denied = 'Access Denied'; //Translate
		$this->admin_cp_warning = 'The Admin CP is disabled until you delete your <b>install</b> directory, as it poses a serious security risk.'; //Translate
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
		$this->admin_prune = 'Prune old topics'; //Translate
		$this->admin_recount_forums = 'Recount topics and replies'; //Translate
		$this->admin_settings = 'Settings'; //Translate
		$this->admin_settings_add = 'Add new board setting'; //Translate
		$this->admin_skins = 'Skins'; //Translate
		$this->admin_stats = 'Statistics center'; //Translate
		$this->admin_upgrade_skin = 'Upgrade a Skin'; //Translate
		$this->admin_your_board = 'Your Board'; //Translate
	}

	function backup()
	{
		$this->backup = 'Backup'; //Translate
		$this->backup_add = 'Add'; //Translate
		$this->backup_add_complete = 'Add complete'; //Translate
		$this->backup_create = 'Backup Database'; //Translate
		$this->backup_created = 'Backup successfully created in'; //Translate
		$this->backup_createfile = 'Backup and create a file on server'; //Translate
		$this->backup_done = 'The database has been backed up to the main Quicksilver Forums directory.';
		$this->backup_download = 'Backup and download (recommended)'; //Translate
		$this->backup_failed = 'Failed to create backup.'; //Translate
		$this->backup_found = 'The following backups were found in the Quicksilver Forums directory';
		$this->backup_import_fail = 'Failed to import backup.'; //Translate
		$this->backup_invalid = 'The backup does not appear to be valid. No changes were made to your database.'; //Translate
		$this->backup_no_packages = 'Failed to locate packages directory.'; //Translate
		$this->backup_noexist = 'Sorry, that backup does not exist.'; //Translate
		$this->backup_none = 'No backups were found in the Quicksilver Forums directory.';
		$this->backup_options = 'Select how you want your backup created';
		$this->backup_output = 'Output'; //Translate
		$this->backup_restore = 'Restore Backup'; //Translate
		$this->backup_restore_done = 'The database has been restored successfully.'; //Translate
		$this->backup_statements = 'statements'; //Translate
		$this->backup_uncheck = 'Unchecking this will NOT empty the database tables before restoring the backup!'; //Translate
		$this->backup_warning = '<b>Warning:</b> This will overwrite all existing data used by Quicksilver Forums.'; //Translate
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
		$this->board_active_users = 'Aktivní u&#x17E;ivatelé';
		$this->board_birthdays = 'Dnes má narozeniny:';
		$this->board_bottom_page = 'P&#x159;ejit dol&#x16F; na stránku';
		$this->board_can_post = 'V tomto fóru m&#x16F;&#x17E;ete odpovídat.';
		$this->board_can_topics = 'M&#x16F;&#x17E;ete prohlí&#x17E;et, ale nem&#x16F;&#x17E;ete vytvá&#x159;et témata v tomto fóru. Prosím, zaregistrujte se.';
		$this->board_cant_post = 'Nem&#x16F;&#x17E;ete odpovídat v tomto fóru. Prosím, zaregistrujte se.';
		$this->board_cant_topics = 'Nem&#x16F;&#x17E;ete prohlí&#x17E;et ani vytvá&#x159;et témata v tomto fóru. Prosím, zaregistrujte se.';
		$this->board_forum = 'Fórum';
		$this->board_guests = 'hosté';
		$this->board_last_post = 'Poslední p&#x159;ísp&#x11B;vek';
		$this->board_mark = 'Ozna&#x10D;it p&#x159;ísp&#x11B;vek jako p&#x159;e&#x10D;tený';
		$this->board_mark1 = 'V&#x161;echny p&#x159;ísp&#x11B;vky a fóra byly ozna&#x10D;eny jako p&#x159;e&#x10D;tené.';
		$this->board_markforum = 'Ozna&#x10D;it fórum jako p&#x159;e&#x10D;tené';
		$this->board_markforum1 = 'V&#x161;echny p&#x159;ísp&#x11B;vky ve fóru %s byly ozna&#x10D;eny jako p&#x159;e&#x10D;tené.';
		$this->board_members = 'registrovaní ';
		$this->board_message = '%s Zpráva';
		$this->board_most_online = 'Nejvíce u&#x17E;ivatel&#x16F; online (%d) tu bylo %s.';
		$this->board_nobday = '&#x17E;ádny &#x10D;len dnes nemá narozeniny.';
		$this->board_nobody = '&#x17E;ádný &#x10D;len není on-line.';
		$this->board_nopost = '&#x17E;ádné p&#x159;ísp&#x11B;vky';
		$this->board_noview = 'Nemáte povolení prohlí&#x17E;et fórum.';
		$this->board_regfirst = 'Nemáte povolení prohlí&#x17E;et fórum. Musíte se nejd&#x159;ív zaregistrovat.';
		$this->board_replies = 'Odpov&#x11B;dí';
		$this->board_stats = 'Statistiky';
		$this->board_stats_string = '%s u&#x17E;ivatel&#x16F; je registrováno. Ná&#x161; nejnov&#x11B;j&#x161;í &#x10D;len má p&#x159;ezdívku %s.<br />Najdete zde %s témat a %s odpov&#x11B;dí, celkem %s p&#x159;ísp&#x11B;vk&#x16F;.';
		$this->board_top_page = 'P&#x159;ejít nahoru na stránku';
		$this->board_topics = 'Témat';
		$this->board_unread = 'Jump to oldest unread post'; //Translate
		$this->board_users = 'u&#x17E;ivatel&#x16F; je on-line';
		$this->board_write_topics = 'M&#x16F;&#x17E;ete prohlí&#x17E;et a vytvá&#x159;et témata v tomto fóru.';
	}

	function censoring()
	{
		$this->censor = 'Cenzorovaná slova';
		$this->censor_one_per_line = 'Jedno na &#x159;ádek.';
		$this->censor_regex_allowed = 'Regular expressions are allowed. You can use a single * as a wildcard for one or more characters.'; //Translate
		$this->censor_updated = 'Slovník byl aktualizován.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM';
		$this->cp_already_member = 'Vámi zadaná e-mailová adresa je ji&#x17E; pou&#x17E;ita jiným &#x10D;lenem..';
		$this->cp_apr = 'Dubna';
		$this->cp_aug = 'Srpna';
		$this->cp_avatar_current = 'Stávající avatar';
		$this->cp_avatar_error = 'Chybný avatar';
		$this->cp_avatar_must_select = 'Musíte vybrat avatar.';
		$this->cp_avatar_none = 'Nemá avatar';
		$this->cp_avatar_pixels = 'pixel&#x16F;';
		$this->cp_avatar_select = 'Vyberte avatar';
		$this->cp_avatar_size_height = 'Avatar musí mít &#x161;í&#x159;ku mezi 1 d';
		$this->cp_avatar_size_width = 'Avatar musí mít vý&#x161;ku mezi 1 d';
		$this->cp_avatar_upload = 'Nahrát avatara z Va&#x161;eho disku';
		$this->cp_avatar_upload_failed = 'Chyba p&#x159;i nahrávání avatara. Soubour z&#x159;ejm&#x11B; neexistuje.';
		$this->cp_avatar_upload_not_image = 'M&#x16F;&#x17E;ete nahrát jen avatar ?na be used for your avatar?.';
		$this->cp_avatar_upload_too_large = 'Avatar je p&#x159;íli&#x161; velký. Maximální velikost je %d kilobyt&#x16F;.';
		$this->cp_avatar_url = 'URL Va&#x161;eho avatara';
		$this->cp_avatar_use = 'Pou&#x17E;ít nahraný avatar';
		$this->cp_bday = 'Datum narození';
		$this->cp_been_updated = 'Vá&#x161; profil byl zm&#x11B;n&#x11B;n.';
		$this->cp_been_updated1 = 'Vá&#x161; avatar byl nahrán.';
		$this->cp_been_updated_prefs = 'Nastavení bylo zm&#x11B;n&#x11B;no.';
		$this->cp_changing_pass = 'Zm&#x11B;nit heslo';
		$this->cp_contact_pm = 'Umo&#x17E;nit ostatním u&#x17E;ivatel&#x16F;m, aby mi mohli zasílat soukromé zprávy';
		$this->cp_contact_pm_email = 'Send email notification of personal messages when received?'; //Translate
		$this->cp_cp = 'Nastavení';
		$this->cp_current_avatar = 'Stávající avatar';
		$this->cp_current_time = 'Nyní je %s.';
		$this->cp_custom_title = 'Osobní titulek';
		$this->cp_custom_title2 = 'Tato volba je p&#x159;ístupná jen administrátor&#x16F;m';
		$this->cp_dec = 'Prosince';
		$this->cp_editing_avatar = 'Zm&#x11B;nit avatar';
		$this->cp_editing_profile = 'Zm&#x11B;nit profil';
		$this->cp_email = 'E-mail';
		$this->cp_email_form = 'Umo&#x17E;nit ostatním u&#x17E;ivatel&#x16F;m  kontaktovat mn&#x11B; p&#x159;es e-mail';
		$this->cp_email_invaid = 'Vámi vlo&#x17E;ená e-mailová adresa je neplatná.';
		$this->cp_err_avatar = 'Chyba p&#x159;i nahrávání avatara';
		$this->cp_err_updating = 'Chyba p&#x159;i zm&#x11B;n&#x11B; profilu';
		$this->cp_feb = 'února';
		$this->cp_file_type = 'Vámi vlo&#x17E;ený avatar je neplatný. Ujist&#x11B;te se &#x17E;e URL je ve správném tvaru, a formát obrázku je gif, jpg, nebo png.';
		$this->cp_format = 'Jméno-p&#x159;ezdívka';
		$this->cp_gtalk = 'GTalk ú&#x10D;et';
		$this->cp_header = 'Kontrolní panel u&#x17E;ivatele';
		$this->cp_height = 'Vý&#x161;ka';
		$this->cp_icq = 'ICQ (bez mezer, poml&#x10D;ek, atd.).';
		$this->cp_interest = 'Záliby';
		$this->cp_jan = 'Ledna';
		$this->cp_july = '&#x10C;ervence';
		$this->cp_june = '&#x10C;ervna';
		$this->cp_label_edit_avatar = 'Zm&#x11B;nit avatar';
		$this->cp_label_edit_pass = 'Zm&#x11B;nit heslo';
		$this->cp_label_edit_prefs = 'Zm&#x11B;nit nastavení';
		$this->cp_label_edit_profile = 'Zm&#x11B;nit profil';
		$this->cp_label_edit_sig = 'Zm&#x11B;nit podpis';
		$this->cp_label_edit_subs = 'Zm&#x11B;nit zasílání infomail&#x16F;';
		$this->cp_language = 'Jazyk';
		$this->cp_less_charac = 'Va&#x161;e jméno m&#x16F;&#x17E;e obsahovat max. 32 znak&#x16F;.';
		$this->cp_location = 'M&#x11B;sto';
		$this->cp_login_first = 'Musíte být p&#x159;ihla&#x161;eni, aby ste mohli pou&#x17E;ívat kontrolní panel.';
		$this->cp_mar = 'B&#x159;ezna';
		$this->cp_may = 'Kv&#x11B;tna';
		$this->cp_msn = 'MSN';
		$this->cp_must_orig = 'Va&#x161;e jméno musí být stejné jako p&#x16F;vodní. M&#x16F;&#x17E;ete jen zm&#x11B;nit zp&#x16F;sob jeho zobrazení (nap&#x159;. p&#x159;idáním mezer atd.).';
		$this->cp_new_notmatch = 'Vami zadané nové heslo je neplatné.';
		$this->cp_new_pass = 'Nové heslo';
		$this->cp_no_edit_avatar = 'You are not allowed to edit your avatar.'; //Translate
		$this->cp_no_edit_profile = 'You are not allowed to edit your profile.'; //Translate
		$this->cp_no_edit_sig = 'You are not allowed to edit your signature.'; //Translate
		$this->cp_no_flash = 'Obrázky ve Flashi nejsou povoleny.';
		$this->cp_not_exist = '&#x161;patn&#x11B; zadaný datum (%s) !';
		$this->cp_nov = 'Listopadu';
		$this->cp_oct = '&#x158;íjna';
		$this->cp_old_notmatch = 'Heslo nesouhlasí s heslem v databázi.';
		$this->cp_old_pass = 'Staré heslo';
		$this->cp_pass = 'Password'; //Translate
		$this->cp_pass2 = 'Only required if changing Email'; //Translate
		$this->cp_pass_notmatch = 'The password you entered does not match the one in our database.'; //Translate
		$this->cp_pass_notvaid = 'Va&#x161;e heslo je neplatné. Ujist&#x11B;te se, &#x17E;e pou&#x17E;ívaté jen platné znaky - písmena, &#x10D;íslice, poml&#x10D;ky, podrt&#x17E;ítka, nebo mezery.';
		$this->cp_posts_page = 'P&#x159;ísp&#x11B;vk&#x16F; na stránku. Zvolte 0 pro výchozí nastavení.';
		$this->cp_preferences = 'Zm&#x11B;nit záliby';
		$this->cp_preview_sig = 'Náhled podpisu:';
		$this->cp_privacy = 'Privátní volby';
		$this->cp_repeat_pass = 'Zopakujte nové heslo';
		$this->cp_sept = 'Zá&#x159;í';
		$this->cp_show_active = 'Být viditelný pro ostatní u&#x17E;ivatele, pokud se p&#x159;ihlasím na fórum';
		$this->cp_show_email = 'Zobrazit mojí e-mailovou adresu v profilu';
		$this->cp_signature = 'Podpis';
		$this->cp_size_max = 'Velikost avatara je p&#x159;íli&#x161; velká (max. %s na %s pixel&#x16F;).';
		$this->cp_skin = 'Vzhled fóra';
		$this->cp_sub_change = 'Zm&#x11B;nit zasílání infomail&#x16F;';
		$this->cp_sub_delete = 'Smazat';
		$this->cp_sub_expire = 'E-maily budou zásílany do';
		$this->cp_sub_name = 'Název tématu';
		$this->cp_sub_no_params = '&#x17E;ádné parametry nebyly zadány.';
		$this->cp_sub_success = 'Nyní jste zapsáni k odb&#x11B;ru nových p&#x159;ísp&#x11B;vk&#x16F; z tématu %s.';
		$this->cp_sub_type = 'Sekce';
		$this->cp_sub_updated = 'Zasílaní informa&#x10D;ních e-mail&#x16F; o tomto tématu bylo zru&#x161;eno.';
		$this->cp_topic_option = 'Zobrazovat';
		$this->cp_topics_page = 'Témat na stránku. Zvolte 0 pro výchozí nastavení.';
		$this->cp_updated = 'Profil zm&#x11B;n&#x11B;n';
		$this->cp_updated1 = 'Avatar zm&#x11B;n&#x11B;n';
		$this->cp_updated_prefs = 'Nastavení zm&#x11B;n&#x11B;no';
		$this->cp_user_exists = 'U&#x17E;ivatel s tímto jménem ji&#x17E; existuje.';
		$this->cp_valided = 'Va&#x161;e heslo bylo zm&#x11B;n&#x11B;no.';
		$this->cp_view_avatar = 'obrázky';
		$this->cp_view_emoticon = 'smajlíci';
		$this->cp_view_signature = 'podpisy';
		$this->cp_welcome = 'Vítejte v ovládacím panelu pro registrované u&#x17E;ivatele. Odtud m&#x16F;&#x17E;ete m&#x11B;nit Vá&#x161; ú&#x10D;et. Prosím vyberte si z mo&#x17E;ností naho&#x159;e.';
		$this->cp_width = '&#x160;í&#x159;ka';
		$this->cp_www = 'WWW stránky';
		$this->cp_yahoo = 'Yahoo';
		$this->cp_zone = '&#x10C;asové pásmo';
	}

	function email()
	{
		$this->email_blocked = 'Tento &#x10D;len neakceptuje p&#x159;ijmutí e-mailových zpráv.';
		$this->email_email = 'E-mail';
		$this->email_msgtext = 'Zpráva:';
		$this->email_no_fields = 'Vra?te se a ujist&#x11B;te se, &#x17E;e jste vyplnili v&#x161;echny údaje.';
		$this->email_no_member = 'Pod tímto jménem nebyl nalezen &#x17E;ádný &#x10D;len';
		$this->email_no_perm = 'Nemáte povolení posílat e-mailové zprávy v tomto fóru.';
		$this->email_sent = 'E-mail byl odeslán.';
		$this->email_subject = 'P&#x159;edm&#x11B;t:';
		$this->email_to = 'Pro:';
	}

	function emot_control()
	{
		$this->emote = 'Smajlíci';
		$this->emote_add = 'P&#x159;idat smajlíka';
		$this->emote_added = 'Smajlík p&#x159;idán.';
		$this->emote_clickable = 'Klikatelný';
		$this->emote_edit = 'Zm&#x11B;nit smajlíka';
		$this->emote_image = 'Obrázek';
		$this->emote_install = 'Nainstalovat smajlíky';
		$this->emote_install_done = 'Emoticons have been successfully reinstalled.'; //Translate
		$this->emote_install_warning = 'This will erase all existing emoticon settings and import uploaded emoticons from your currently selected skin into the database.'; //Translate
		$this->emote_no_text = 'No emoticon text was given.'; //Translate
		$this->emote_text = 'Text'; //Translate
	}

	function forum()
	{
		$this->forum_by = 'Od';
		$this->forum_can_post = 'V tomto fóru m&#x16F;&#x17E;ete odpovídat.';
		$this->forum_can_topics = 'V tomto fóru m&#x16F;&#x17E;ete prohlí&#x17E;et témata.';
		$this->forum_cant_post = 'V tomto fóru nem&#x16F;&#x17E;ete odpovídat. Prosím, zaregistrujte se.';
		$this->forum_cant_topics = 'V tomto fóru nem&#x16F;&#x17E;ete prohlí&#x17E;et témata. Prosím, zaregistrujte se.';
		$this->forum_dot = 'te&#x10D;ka';
		$this->forum_dot_detail = 'ukazuje, &#x17E;e jste v tomto fóru odpovídal(a)';
		$this->forum_forum = 'Fórum';
		$this->forum_guest = 'Host';
		$this->forum_hot = '"HOT"';
		$this->forum_icon = 'Ikonka zprávy';
		$this->forum_jump = 'P&#x159;esko&#x10D;it na nejnov&#x11B;j&#x161;í p&#x159;ísp&#x11B;vek v tomto tématu.';
		$this->forum_last = 'Poslední p&#x159;ísp&#x11B;vek';
		$this->forum_locked = 'Zamknuto';
		$this->forum_mark_read = 'Ozna&#x10D;it fórum jako p&#x159;e&#x10D;tené';
		$this->forum_moved = 'P&#x159;esunuto';
		$this->forum_msg = '%s Zpráva';
		$this->forum_new = 'Nové';
		$this->forum_new_poll = 'Vytvo&#x159;it nové téma s anketou';
		$this->forum_new_topic = 'Vytvo&#x159;it nové téma';
		$this->forum_no_topics = 'Ve fóru nejsou &#x17E;ádné p&#x159;ísp&#x11B;vky k zobrazení.';
		$this->forum_noexist = 'Fórum neexistuje.';
		$this->forum_nopost = '&#x17E;ádné p&#x159;ísp&#x11B;vky';
		$this->forum_not = 'Ne';
		$this->forum_noview = 'Nemáte opravn&#x11B;ní prohlí&#x17E;et fórum.';
		$this->forum_pages = 'Stránky';
		$this->forum_pinned = 'D&#x16F;le&#x17E;ité';
		$this->forum_pinned_topic = 'Zapinováné téma';
		$this->forum_poll = 'Anketa';
		$this->forum_regfirst = 'Nemáte oprávn&#x11B;ní prohlí&#x17E;et fórum. Nejprve se musíte zaregistrovat.';
		$this->forum_replies = 'Odpov&#x11B;dí';
		$this->forum_starter = 'Zalo&#x17E;il(a)';
		$this->forum_sub = 'Sub-fórum';
		$this->forum_sub_last_post = 'Poslední p&#x159;ísp&#x11B;vek';
		$this->forum_sub_replies = 'Odpov&#x11B;dí';
		$this->forum_sub_topics = 'Témat';
		$this->forum_subscribe = 'Informovat mn&#x11B; e-mailem o nových p&#x159;ísp&#x11B;vcích';
		$this->forum_topic = 'Téma';
		$this->forum_topic_posted = 'Posted'; //Translate
		$this->forum_unread = 'Jump to oldest unread post'; //Translate
		$this->forum_views = 'Schlédnuto';
		$this->forum_write_topics = 'V tomto fóru m&#x16F;&#x17E;ete vytvá&#x159;et témata.';
	}

	function forums()
	{
		$this->forum_controls = 'Nastevní fóra';
		$this->forum_create = 'Vytvo&#x159;it fórum';
		$this->forum_create_cat = 'Vytvo&#x159;it kategorii';
		$this->forum_created = 'Fórum vytvo&#x159;eno';
		$this->forum_default_perms = 'Výchozí nastavení';
		$this->forum_delete = 'Smazat fórum';
		$this->forum_delete_warning = 'Are you sure you want to delete this forum, its topics, and its posts?<br />This action cannot be reversed.'; //Translate
		$this->forum_deleted = 'Fórum bylo smazáno.';
		$this->forum_description = 'Popis';
		$this->forum_edit = 'Editovat fórum';
		$this->forum_edited = 'Fórum bylo úsp&#x11B;&#x161;n&#x11B; zm&#x11B;n&#x11B;no.';
		$this->forum_empty = 'The forum name is empty. Please go back and enter a name.'; //Translate
		$this->forum_is_subcat = 'This forum is a subcategory only.'; //Translate
		$this->forum_name = 'Název';
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
		$this->forum_subcat = 'Podkategorie';
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
		$this->help_available_files = 'Nápov&#x11B;da';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'Databáze neobsahuje &#x17E;ádnou nápov&#x11B;du';
		$this->help_not_exist = 'That help article does not exist.'; //Translate
		$this->help_select = 'Please select a help article to edit'; //Translate
		$this->help_select_delete = 'Please select a help article to delete'; //Translate
		$this->help_title = 'Title'; //Translate
	}

	function home()
	{
		$this->home_choose = 'Choose a task to begin.'; //Translate
		$this->home_menu_title = 'Admin CP Menu'; //Translate
	}

	function jsdata()
	{
		$this->jsdata_address = 'Vlo&#x17E;te adresu';
		$this->jsdata_detail = 'Vlo&#x17E;te popis';
		$this->jsdata_smiles = 'Smajlíci';
		$this->jsdata_url = 'URL'; //Translate
	}

	function jslang()
	{
		$this->jslang_avatar_size_height = '&#x161;í&#x159;ka va&#x161;eho avatara musí být mezi 1 a %d pixely';
		$this->jslang_avatar_size_width = 'Vý&#x161;ka va&#x161;eho avatara musí být mezi 1 a %d pixely';
	}

	function login()
	{
		$this->login_cant_logged = 'P&#x159;ihlá&#x161;ení bylo neúsp&#x11B;&#x161;né. Zkontrolujte, &#x17E;e zadané jméno a heslo jsou správné.<br /><br />Aplikace rozeznává malá a velká písmena! \'hEsLo\' není \'heslo\'. Zkontrolujte si také, &#x17E;e máte ve svém prohlí&#x17E;eci povoleny Cookies.';
		$this->login_cookies = 'Pro p&#x159;ihlá&#x161;ení musí být ve Va&#x161;em prohlí&#x17E;e&#x10D;i povoleny Cookies';
		$this->login_forgot_pass = 'Zapomn&#x11B;li jste heslo?';
		$this->login_header = 'P&#x159;ihlá&#x161;ení';
		$this->login_logged = 'Nyní jste p&#x159;ihlá&#x161;eni.';
		$this->login_now_out = 'Nyní jste odhlá&#x161;eni.';
		$this->login_out = 'Odhlá&#x161;ení';
		$this->login_pass = 'Heslo';
		$this->login_pass_no_id = 'Pod tímto jménem není registrován &#x17E;ádný u&#x17E;ivatel.';
		$this->login_pass_request = 'Pro obnovení hesla klikn&#x11B;te na odkaz, který vám byl zaslán na e-mail uvedený p&#x159;i registraci.';
		$this->login_pass_reset = 'Obnovit heslo';
		$this->login_pass_sent = 'Va&#x161;e heslo bylo obnoveno. Nové heslo bylo odesláno na e-mailovou adresu, kterou jste zadali p&#x159;i p&#x159;i registraci Va&#x161;eho ú&#x10D;tu.';
		$this->login_sure = 'Jste si jisti, &#x17E;e se chcete odhlásit z \'%s\'?';
		$this->login_user = 'U&#x17E;ivatelské jméno';
	}

	function logs()
	{
		$this->logs_action = 'Akce';
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
		$this->main_activate = 'Dosud jste neaktivovali Va&#x161;i registraci.';
		$this->main_activate_resend = 'Poslat znovu aktiva&#x10D;ní e-mail';
		$this->main_admincp = 'administrace';
		$this->main_banned = 'Máte zakázáno prohlí&#x17E;et jakoukoli &#x10D;ást tohoto fóra.';
		$this->main_code = 'Kód';
		$this->main_cp = 'nastavení';
		$this->main_full = 'Plné';
		$this->main_help = 'nápov&#x11B;da';
		$this->main_load = 'zatí&#x17E;ení';
		$this->main_login = 'p&#x159;ihlásit';
		$this->main_logout = 'odhlásit';
		$this->main_mark = 'ozna&#x10D;it v&#x161;e';
		$this->main_mark1 = 'Ozna&#x10D;it v&#x161;echna témata jako p&#x159;e&#x10D;tená';
		$this->main_markforum_read = 'Ozna&#x10D;it fórum jako p&#x159;e&#x10D;tená';
		$this->main_max_load = 'Omlováme se, ale %s je v nyní nedostupné, proto&#x17E;e server je p&#x159;etí&#x17E;en.';
		$this->main_members = '&#x10D;lenové';
		$this->main_messenger = 'messenger';
		$this->main_new = 'nové';
		$this->main_next = 'dal&#x161;í';
		$this->main_prev = 'p&#x159;edchozí';
		$this->main_queries = 'po&#x17E;adavk&#x16F;';
		$this->main_quote = 'Citovat';
		$this->main_recent = 'nové p&#x159;isp&#x11B;vky';
		$this->main_recent1 = 'Zobrazit nové p&#x159;ísp&#x11B;vky od va&#x161;í poslední náv&#x161;t&#x11B;vy';
		$this->main_register = 'registrace';
		$this->main_reminder = 'upozorn&#x11B;ní';
		$this->main_reminder_closed = 'Fórum je nyní uzav&#x159;eno, p&#x159;ístupné jen administrátor&#x16F;m.';
		$this->main_said = '&#x159;ekl(a)';
		$this->main_search = 'hledat';
		$this->main_topics_new = 'Ve fóru je nový p&#x159;ísp&#x11B;vek.';
		$this->main_topics_old = 'Ve fóru nejsou &#x17E;ádné nové p&#x159;ísp&#x11B;vky.';
		$this->main_welcome = 'Vítejte';
		$this->main_welcome_guest = 'Vítejte!!';
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
		$this->mc_user_pm_mail = 'Email Private Messages'; //Translate
		$this->mc_user_posts = 'Posts'; //Translate
		$this->mc_user_regip = 'Registration IP'; //Translate
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
		$this->mcount = 'Opravit statistiky &#x10D;len&#x16F;';
		$this->mcount_updated = 'Po&#x10D;et &#x10D;len&#x16F; byl aktualizován.';
	}

	function members()
	{
		$this->members_all = 'v&#x161;ichni';
		$this->members_email = 'E-mail';
		$this->members_email_member = 'Poslat E-mail tomuto &#x10D;lenovi';
		$this->members_group = 'Skupina';
		$this->members_joined = 'Zalo&#x17E;eno';
		$this->members_list = 'Seznam &#x10D;len&#x16F;';
		$this->members_member = '&#x10D;len';
		$this->members_pm = 'Osobní zpráva';
		$this->members_posts = 'P&#x159;ísp&#x11B;vk&#x16F;';
		$this->members_send_pm = 'Poslat tomuto u&#x17E;ivateli soukromou zprávu';
		$this->members_title = 'Titul';
		$this->members_vist_www = 'Otev&#x159;ít &#x10D;lenovy www stránky';
		$this->members_www = 'www';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Jste si jisti &#x17E;e chcete smazat tento p&#x159;ísp&#x11B;vek?';
		$this->mod_confirm_topic_delete = 'Jste si jisti &#x17E;e chcete smazat toto téma?';
		$this->mod_error_first_post = 'Nem&#x16F;&#x17E;ete smazat první p&#x159;ísp&#x11B;vek v diskusi.';
		$this->mod_error_move_category = 'Nem&#x16F;&#x17E;ete p&#x159;esunout toto téma.';
		$this->mod_error_move_create = 'Nemáte oprávn&#x11B;ní p&#x159;esouvat témata do tohoto fóra.';
		$this->mod_error_move_forum = 'Nem&#x16F;&#x17E;ete p&#x159;esunout téma do diskuse, která neexistuje.';
		$this->mod_error_move_global = 'Nem&#x16F;&#x17E;ete p&#x159;esunout globální téma. Upravte toto téma p&#x159;ed p&#x159;esunutím.';
		$this->mod_error_move_same = 'Nem&#x16F;&#x17E;ete p&#x159;esunout téma do diskuse, ve které u&#x17E; je.';
		$this->mod_label_controls = 'úprava p&#x159;ísp&#x11B;vku';
		$this->mod_label_description = 'Popis';
		$this->mod_label_emoticon = 'P&#x159;evést textové "smajlíky" na obrázkové?';
		$this->mod_label_global = 'V&#x161;eobecné téma';
		$this->mod_label_mbcode = 'Zformátovat MbCodem?';
		$this->mod_label_move_to = 'P&#x159;esunout do';
		$this->mod_label_options = 'Volby';
		$this->mod_label_post_delete = 'Smazat p&#x159;ísp&#x11B;vek';
		$this->mod_label_post_edit = 'Editovat p&#x159;ísp&#x11B;vek';
		$this->mod_label_post_icon = 'Ikonka p&#x159;ísp&#x11B;vku';
		$this->mod_label_publish = 'Publishing'; //Translate
		$this->mod_label_title = 'Název';
		$this->mod_label_title_original = 'P&#x16F;vodní název';
		$this->mod_label_title_split = 'Spojit témata';
		$this->mod_label_topic_delete = 'Smazat téma';
		$this->mod_label_topic_edit = 'Editovat téma';
		$this->mod_label_topic_lock = 'Zamknout téma';
		$this->mod_label_topic_move = 'P&#x159;esunout téma';
		$this->mod_label_topic_move_complete = 'P&#x159;esunout célé téma do nové diskuse';
		$this->mod_label_topic_move_link = 'P&#x159;esunou téma do nové diskuse, a nechat na n&#x11B;j odkaz ve staré diskusi.';
		$this->mod_label_topic_pin = 'Zvýraznit téma';
		$this->mod_label_topic_split = 'Spojit témata';
		$this->mod_missing_post = 'Zadaný p&#x159;ísp&#x11B;v&#x11B;k neexistuje.';
		$this->mod_missing_topic = 'Zadané téma neexistuje.';
		$this->mod_no_action = 'Musíte zvolit úkol.';
		$this->mod_no_post = 'Musíte zvolit p&#x159;ísp&#x11B;vek.';
		$this->mod_no_topic = 'Musíte zvolit téma..';
		$this->mod_perm_post_delete = 'Nemáte oprávn&#x11B;ní mazat p&#x159;ísp&#x11B;vky.';
		$this->mod_perm_post_edit = 'Nemáte oprávn&#x11B;ní editovat p&#x159;ísp&#x11B;vky.';
		$this->mod_perm_publish = 'You do not have permission to publish this topic.'; //Translate
		$this->mod_perm_topic_delete = 'Nemáte oprávn&#x11B;ní mazat toto téma.';
		$this->mod_perm_topic_edit = 'Nemáte oprávn&#x11B;ní editovat toto téma.';
		$this->mod_perm_topic_lock = 'Nemáte oprávn&#x11B;ní zamknout toto téma.';
		$this->mod_perm_topic_move = 'Nemáte oprávn&#x11B;ní p&#x159;esunout toto téma.';
		$this->mod_perm_topic_pin = 'Nemáte oprávn&#x11B;ní zvýraznit toto téma.';
		$this->mod_perm_topic_split = 'Nemáte oprávn&#x11B;ní spojit tato témata.';
		$this->mod_perm_topic_unlock = 'Nemáte oprávn&#x11B;ní odemknout toto téma.';
		$this->mod_perm_topic_unpin = 'Nemáte oprávn&#x11B;ní odpinovat toto téma.';
		$this->mod_success_post_delete = 'P&#x159;ísp&#x11B;vek byl úsp&#x11B;&#x161;n&#x11B; smazán.';
		$this->mod_success_post_edit = 'P&#x159;ísp&#x11B;v&#x11B;k byl úsp&#x11B;&#x161;n&#x11B; zm&#x11B;n&#x11B;n.';
		$this->mod_success_publish = 'This topic was successfully published.'; //Translate
		$this->mod_success_split = 'Témata byly úsp&#x11B;&#x161;n&#x11B; spojeny.';
		$this->mod_success_topic_delete = 'Téma bylo úsp&#x11B;&#x161;n&#x11B; smazáno.';
		$this->mod_success_topic_edit = 'Téma bylo úsp&#x11B;&#x161;n&#x11B; zm&#x11B;n&#x11B;no.';
		$this->mod_success_topic_move = 'Téma bylo úsp&#x11B;&#x161;n&#x11B; p&#x159;esunuto do nové diskuse.';
		$this->mod_success_unpublish = 'This topic has been removed from the published list.'; //Translate
	}

	function optimize()
	{
		$this->optimize = 'Optimalizovat databázi';
		$this->optimized = 'Tabulky v databázi byly optimalizované pro maximální výkon.';
	}

	function perms()
	{
		$this->perm = 'Permission'; //Translate
		$this->perms = 'Permissions'; //Translate
		$this->perms_board_view = 'View the board index'; //Translate
		$this->perms_board_view_closed = 'Use Quicksilver Forums when it is closed'; //Translate
		$this->perms_do_anything = 'Use Quicksilver Forums'; //Translate
		$this->perms_edit_avatar = 'Can edit user avatar'; //Translate
		$this->perms_edit_for = 'Edit permissions for'; //Translate
		$this->perms_edit_profile = 'Can edit user profile'; //Translate
		$this->perms_edit_sig = 'Can edit signatures'; //Translate
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
		$this->php_error = 'Chyba';
		$this->php_error_msg = 'phpinfo() can not be executed. It appears that your host has disabled this feature.'; //Translate
	}

	function pm()
	{
		$this->pm_avatar = 'Avatar'; //Translate
		$this->pm_cant_del = 'Nemáte oprávn&#x11B;ní smazat tuto zprávu.';
		$this->pm_delallmsg = 'Smazat v&#x161;echny zprávy';
		$this->pm_delete = 'Smazat';
		$this->pm_delete_selected = 'Smazat ozna&#x10D;ené zprávy';
		$this->pm_deleted = 'Zpráva smazána.';
		$this->pm_deleted_all = 'Zprávy smazány.';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Zpráva nemohla bý odeslána. Ujist&#x11B;te se, &#x17E;e jste vyplnili v&#x161;echny povinné údaje.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Schránka';
		$this->pm_folder_new = '%s nové';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Od';
		$this->pm_group = 'Skupina';
		$this->pm_guest = 'Jako HOST nem&#x16F;&#x17E;ete pou&#x17E;ívat Messenger. Prosím p&#x159;ihla&#x161;te se nebo se zaregistrujte.';
		$this->pm_joined = 'Zalo&#x17E;eno';
		$this->pm_messenger = 'Messenger'; //Translate
		$this->pm_msgtext = 'Text zprávy';
		$this->pm_multiple = 'Více p&#x159;íjemc&#x16F; mezi sebou odd&#x11B;lte st&#x159;edníkem - ;';
		$this->pm_no_folder = 'Musíte vybrat adresá&#x159;.';
		$this->pm_no_member = '&#x17E;ádný &#x10D;len nebyl nalezen pod tímto ID.';
		$this->pm_no_number = '&#x17E;ádná zpráva nebyla nalezena pod tímto &#x10D;íslem.';
		$this->pm_no_title = '&#x17E;ádný p&#x159;edm&#x11B;t';
		$this->pm_nomsg = 'V této slo&#x17E;ce nejsou &#x17E;ádné zprávy.';
		$this->pm_noview = 'Nemáte oprávn&#x11B;ní prohlí&#x17E;et tuto zprávu.';
		$this->pm_offline = 'Tento &#x10D;len je nyní nep&#x159;ítomen';
		$this->pm_online = 'Tento &#x10D;len je nyní p&#x159;ítomen';
		$this->pm_personal = 'Osobní Messenger';
		$this->pm_personal_msging = 'Osobní Messaging';
		$this->pm_pm = 'Soukromá zpráva';
		$this->pm_posts = 'P&#x159;ísp&#x11B;vk&#x16F;';
		$this->pm_preview = 'Náhled';
		$this->pm_recipients = 'P&#x159;íjemci';
		$this->pm_reply = 'Odpov&#x11B;&#x10F;';
		$this->pm_send = 'Poslat';
		$this->pm_sendamsg = 'Poslat privátní zprávu';
		$this->pm_sendingpm = 'Poslat privátní zprávu';
		$this->pm_sendon = 'Posláno';
		$this->pm_sent_mail = 'has sent you a private message.'; //Translate
		$this->pm_success = 'Va&#x161;e zpráva byla úsp&#x11B;&#x161;n&#x11B; odeslána.';
		$this->pm_sure_del = 'Jste si jisti, &#x17E;e chcete smazat tuto zprávu?';
		$this->pm_sure_delall = 'Jste si jisti, &#x17E;e chcete smazat v&#x161;echny zprávy v této slo&#x17E;ce?';
		$this->pm_title = 'P&#x159;edm&#x11B;t';
		$this->pm_to = 'Pro';
	}

	function post()
	{
		$this->post_attach = 'P&#x159;ílohy';
		$this->post_attach_add = 'P&#x159;idat p&#x159;ílohu';
		$this->post_attach_disrupt = 'P&#x159;idáním nebo odebráním p&#x159;ílohy nenaru&#x161;íte Vá&#x161; p&#x159;ísp&#x11B;vek.';
		$this->post_attach_failed = 'Chyba p&#x159;i náhrávání p&#x159;ílohy. Soubor neexistuje.';
		$this->post_attach_not_allowed = 'Nem&#x16F;&#x17E;ete p&#x159;ilo&#x17E;it soubor tohoto typu.';
		$this->post_attach_remove = 'Odstranit p&#x159;ílohu';
		$this->post_attach_too_large = 'P&#x159;íloha je p&#x159;íli&#x161; velká (max. %d KB).';
		$this->post_cant_create = 'Jako host nemáte oprávn&#x11B;ní vytvá&#x159;et témata. Prosím p&#x159;ihla&#x161;te se nebo se zaregistrujte.';
		$this->post_cant_create1 = 'Nemáte oprávn&#x11B;ní vytvá&#x159;et témata.';
		$this->post_cant_enter = 'Vá&#x161; hlas nemohl být zapo&#x10D;ítán. bu&#x10F; ste ji&#x17E; hlasovali, or nemáte oprávn&#x11B;ní hlasovat.';
		$this->post_cant_poll = 'Jako host nemáte oprávn&#x11B;ní vytvá&#x159;et téma s anketou. Prosím p&#x159;ihla&#x161;te se nebo se zaregistrujte.';
		$this->post_cant_poll1 = 'Nemáte oprávn&#x11B;ní vytvá&#x159;et téma s anketou.';
		$this->post_cant_reply = 'Nemáte oprávn&#x11B;ní odpovídat na téma v této diskusi.';
		$this->post_cant_reply1 = 'Jako host nemáte oprávn&#x11B;ní odpovídat na témata. Musíte být zaregistrováni, abyste mohli zasílat p&#x159;ísp&#x11B;vky.';
		$this->post_cant_reply2 = 'Nemáte oprávn&#x11B;ní odpovídat na témata.';
		$this->post_closed = 'Toto téma bylo zav&#x159;eno.';
		$this->post_create_poll = 'Vytvo&#x159;it téma s anketou';
		$this->post_create_topic = 'Vytvo&#x159;it téma';
		$this->post_creating = 'Vytvo&#x159;it téma';
		$this->post_creating_poll = 'Vytvo&#x159;it téma s anketou';
		$this->post_flood = 'Odpovídal(a) jste v p&#x159;ede&#x161;lých  %s vte&#x159;inách, nyní je&#x161;t&#x11B; nem&#x16F;&#x17E;ete odeslat dal&#x161;í p&#x159;ísp&#x11B;vek.<br /><br />Prosím zkuste to za n&#x11B;kolik vte&#x159;in.';
		$this->post_guest = 'Host';
		$this->post_icon = 'Ikonka tématu';
		$this->post_last_five = 'Posledních 5 p&#x159;ísp&#x11B;vk&#x16F;';
		$this->post_length = 'Zkontrolovat délku';
		$this->post_msg = 'Zpráva';
		$this->post_must_msg = 'Musíte napsat n&#x11B;jaký text, kdy&#x17E; chcete zalo&#x17E;it nové téma.';
		$this->post_must_options = 'Musíte ur&#x10D;it volby, kdy&#x17E; chtete zalo&#x17E;it nové téma s anketou.';
		$this->post_must_title = 'Musíte vlo&#x17E;it název nového tématu, kdy&#x17E; ho chcete zalo&#x17E;it.';
		$this->post_new_poll = 'Nová anketa';
		$this->post_new_topic = 'Nové téma';
		$this->post_no_forum = '&#x17E;ádné téma nebylo nalezeno.';
		$this->post_no_topic = '&#x17E;ádné téma nebylo vybráno.';
		$this->post_no_vote = 'Musíte vybrat mo&#x17E;nosti hlasování pro anketu.';
		$this->post_option_emoticons = 'P&#x159;evést textové "smajlíky" na obrázkové?';
		$this->post_option_global = 'Ud&#x11B;lat toto téma globálním?';
		$this->post_option_lock = 'Lock topic after posting?'; //Translate
		$this->post_option_mbcode = 'Formátovat MbCodem? (doporu&#x10D;eno)';
		$this->post_option_pin = 'Pin topic after posting?'; //Translate
		$this->post_optional = 'volitelné';
		$this->post_options = 'Volby';
		$this->post_poll_options = 'Volby ankety';
		$this->post_poll_row = 'Jedna mo&#x17E;nost na ka&#x17E;dý &#x159;ádek';
		$this->post_posted = 'Posláno';
		$this->post_posting = 'Zapo&#x10D;ítáno';
		$this->post_preview = 'Náhled';
		$this->post_reply = 'Odeslat';
		$this->post_reply_topic = 'Odpov&#x11B;d&#x11B;t na téma';
		$this->post_replying = 'Odpov&#x11B;d&#x11B;t na téma';
		$this->post_replying1 = 'Odpov&#x11B;d&#x11B;t';
		$this->post_too_many_options = 'Musí být mezi 2 a %d volbami k hlasování.';
		$this->post_topic_detail = 'Popis tématu';
		$this->post_topic_title = 'Název tématu';
		$this->post_view_topic = 'Prohlédnout celé téma';
		$this->post_voting = 'Hlasování';
	}

	function printer()
	{
		$this->printer_back = 'Zp&#x11B;t';
		$this->printer_not_found = 'Téma  nebylo nalezeno. Bu&#x10F; bylo smazáno, p&#x159;esunuto, nebo neexistuje.';
		$this->printer_not_found_title = 'Téma nenalezeno';
		$this->printer_perm_topics = 'Nemáte oprávn&#x11B;ní prohlí&#x17E;et téma.';
		$this->printer_perm_topics_guest = 'Nemáte oprávn&#x11B;ní prohlí&#x17E;et téma. Nejprve se musíte zaregistrovat.';
		$this->printer_posted_on = 'Posláno';
		$this->printer_send = 'Poslat na tisk';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM';
		$this->profile_av_sign = 'Avatar a podpis';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'V&#x11B;k / narozeniny';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'E-mailová adresa';
		$this->profile_fav = 'Oblíbené fórum';
		$this->profile_fav_forum = '%s (%d%% ze v&#x161;ech p&#x159;ísp&#x11B;vk&#x16F; u&#x17E;ivatele)';
		$this->profile_gtalk = 'GTalk ú&#x10D;et';
		$this->profile_icq_uin = 'ICQ';
		$this->profile_info = 'Informace';
		$this->profile_interest = 'Zájmy';
		$this->profile_joined = 'Zalo&#x17E;eno';
		$this->profile_last_post = 'Poslední p&#x159;ísp&#x11B;vek';
		$this->profile_list = 'Seznam &#x10D;len&#x16F;';
		$this->profile_location = 'Bydli&#x161;t&#x11B;';
		$this->profile_member = 'U&#x17E;ivatelská skupina';
		$this->profile_member_title = '&#x10D;lenský titul';
		$this->profile_msn = 'MSN';
		$this->profile_must_user = 'Abyste mohli prohlí&#x17E;et profil, musíte nejprve vybrat n&#x11B;jakého u&#x17E;ivatele.';
		$this->profile_no_member = 'Pod tímto ID nebyl nalezen &#x17E;ádny &#x10D;len. Je mo&#x17E;né, &#x17E;e jeho ú&#x10D;et byl smazán.';
		$this->profile_none = '[ &#x17E;ádný ]';
		$this->profile_not_post = 'je&#x161;t&#x11B; nep&#x159;ispíval(a).';
		$this->profile_offline = 'Tento &#x10D;len je nyní nep&#x159;ítomen';
		$this->profile_online = 'Tento &#x10D;len je nyní p&#x159;ítomen';
		$this->profile_pm = 'Privátní zpráva';
		$this->profile_postcount = '%s celkem, %s za den';
		$this->profile_posts = 'Celkem p&#x159;ísp&#x11B;vk&#x16F;';
		$this->profile_private = '[ Osobní ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Podpis';
		$this->profile_unkown = '[ Neznámý ]';
		$this->profile_view_profile = 'Prohlédnout profil';
		$this->profile_www = 'WWW stránky';
		$this->profile_yahoo = 'Yahoo';
	}

	function prune()
	{
		$this->prune_action = 'Prune action to take'; //Translate
		$this->prune_age_day = '1 den';
		$this->prune_age_eighthours = '8 hodin';
		$this->prune_age_hour = '1 hodina';
		$this->prune_age_month = '1 m&#x11B;síc';
		$this->prune_age_threemonths = '3 m&#x11B;síce';
		$this->prune_age_week = '1 týden';
		$this->prune_age_year = '1 rok';
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
		$this->recent_active = 'Aktivní témata od va&#x161;í náv&#x161;t&#x11B;vy';
		$this->recent_by = 'Od';
		$this->recent_can_post = 'V tomto fóru m&#x16F;&#x17E;ete odpovídat.';
		$this->recent_can_topics = 'V tomto fóru m&#x16F;&#x17E;ete prohlí&#x17E;et témata.';
		$this->recent_cant_post = 'V tomto fóru nem&#x16F;&#x17E;ete odpovídat. Prosím, zaregistrujte se.';
		$this->recent_cant_topics = 'V tomto fóru nem&#x16F;&#x17E;ete prohlí&#x17E;et témata. Prosím, zaregistrujte se.';
		$this->recent_dot = 'te&#x10D;ka';
		$this->recent_dot_detail = 'ukazuje, &#x17E;e jste v tomto fóru odpovídal(a)';
		$this->recent_forum = 'Fórum';
		$this->recent_guest = 'Host';
		$this->recent_hot = '"HOT"';
		$this->recent_icon = 'Ikonka zprávy';
		$this->recent_jump = 'P&#x159;esko&#x10D;it na nejnov&#x11B;j&#x161;í p&#x159;ísp&#x11B;vek v tomto tématu.';
		$this->recent_last = 'Poslední p&#x159;ísp&#x11B;vek';
		$this->recent_locked = 'Zamknuto';
		$this->recent_moved = 'P&#x159;esunuto';
		$this->recent_msg = '%s Zpráva';
		$this->recent_new = 'Nové';
		$this->recent_new_poll = 'Vytvo&#x159;it nové téma s anketou';
		$this->recent_new_topic = 'Vytvo&#x159;it nové téma';
		$this->recent_no_topics = 'Ve fóru nejsou &#x17E;ádné p&#x159;ísp&#x11B;vky k zobrazení.';
		$this->recent_noexist = 'Fórum neexistuje.';
		$this->recent_nopost = '&#x17E;ádné p&#x159;ísp&#x11B;vky';
		$this->recent_not = 'Ne';
		$this->recent_noview = 'Nemáte opravn&#x11B;ní prohlí&#x17E;et fórum.';
		$this->recent_pages = 'Stránky';
		$this->recent_pinned = 'D&#x16F;le&#x17E;ité';
		$this->recent_pinned_topic = 'Zapinováné téma';
		$this->recent_poll = 'Anketa';
		$this->recent_regfirst = 'Nemáte oprávn&#x11B;ní prohlí&#x17E;et fórum. Nejprve se musíte zaregistrovat.';
		$this->recent_replies = 'Odpov&#x11B;dí';
		$this->recent_starter = 'Zalo&#x17E;il(a)';
		$this->recent_sub = 'Sub-fórum';
		$this->recent_sub_last_post = 'Poslední p&#x159;ísp&#x11B;vek';
		$this->recent_sub_replies = 'Odpov&#x11B;dí';
		$this->recent_sub_topics = 'Témat';
		$this->recent_subscribe = 'Informovat mn&#x11B; e-mailem o nových p&#x159;ísp&#x11B;vcích';
		$this->recent_topic = 'Téma';
		$this->recent_topic_posted = 'Posted'; //Translate
		$this->recent_views = 'Schlédnuto';
		$this->recent_write_topics = 'V tomto fóru m&#x16F;&#x17E;ete vytvá&#x159;et témata.';
	}

	function register()
	{
		$this->register_activated = 'Vá&#x161; ú&#x10D;et byl aktivován!';
		$this->register_activating = 'Aktivace ú&#x10D;tu';
		$this->register_activation_error = 'P&#x159;i aktivaci Va&#x161;eho ú&#x10D;tu nastala chyba. Zkontrolujte, zda aktiva&#x10D;ní e-mail obsahuje celou URL adresu. Pokud potí&#x17E;e p&#x159;etrvají, kontaktujte administrátora tohoto fóra.';
		$this->register_confirm_passwd = 'Potvr&#x10F;te heslo';
		$this->register_done = 'Registrace prob&#x11B;hla úsp&#x11B;&#x161;n&#x11B;. Nyní se prosím p&#x159;ihla&#x161;te.';
		$this->register_email = 'E-mailová adresa';
		$this->register_email_invalid = 'Vámi zadaná e-mailová adresa je neplatná.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Prosím otev&#x159;ete následující odkaz neob jej vlo&#x17E;te do va&#x161;eho internetového prohlí&#x17E;e&#x10D;e:';
		$this->register_email_used = 'Vámi zadanou e-mailovou adresu ji&#x17E; pou&#x17E;ívá jiný &#x10D;len.';
		$this->register_fields = 'Nejsou vypln&#x11B;ny v&#x161;echny údaje.';
		$this->register_flood = 'Ji&#x17E; jste zaregistrován.';
		$this->register_image = 'Prosím zadejte text, který vidíte na obrázku.';
		$this->register_image_invalid = 'Musíte zadat text, který vidíte na obrázku.';
		$this->register_initiated = 'This request was initiated from IP:'; //Translate
		$this->register_must_activate = '&#x17E;ádost o registraci byla podána. Na adresu %s byl zaslán e-mail s informacemi, jak aktivovat Vá&#x161; ú&#x10D;et. Dokud nebude ú&#x10D;et aktivován, budete mít na fóru omezené n&#x11B;které funkce.';
		$this->register_name_invalid = 'Vámi zadané jméno je p&#x159;íli&#x161; dlouhé.';
		$this->register_name_taken = 'Vámi zadané jméno je ji&#x17E; obsazeno.';
		$this->register_new_user = 'U&#x17E;ivatelské jméno';
		$this->register_pass_invalid = 'Vámi zadané heslo je neplatné. Ujist&#x11B;te se, &#x17E;e pou&#x17E;ívaté jen platné znaky - písmena, &#x10D;íslice, poml&#x10D;ky, podrt&#x17E;ítka, nebo mezery a heslo má alespo&#x148; 5 znak&#x16F;.';
		$this->register_pass_match = 'Vámi zadané heslo neodpovídá.';
		$this->register_passwd = 'Heslo';
		$this->register_reg = 'Registrovat!';
		$this->register_reging = 'Registrace';
		$this->register_requested = '&#x17E;ádost o aktivaci ú&#x10D;tu pro:';
		$this->register_tos = 'Podmínky registrace';
		$this->register_tos_i_agree = 'Souhlasím s vý&#x161;e uvedenými podmínkami';
		$this->register_tos_not_agree = 'You did not agree to the terms.'; //Translate
		$this->register_tos_read = 'prosím p&#x159;e&#x10D;t&#x11B;te si následující podmínky registrace';
	}

	function rssfeed()
	{
		$this->rssfeed_cannot_find_forum = 'The forum does not appear to exist'; //Translate
		$this->rssfeed_cannot_find_topic = 'The topic does nto appear to exist'; //Translate
		$this->rssfeed_cannot_read_forum = 'You do not have permission to read this forum'; //Translate
		$this->rssfeed_cannot_read_topic = 'You do not have permission to read this topic'; //Translate
		$this->rssfeed_error = 'Chyba';
		$this->rssfeed_forum = 'Fórum:';
		$this->rssfeed_posted_by = 'P&#x159;ísp&#x11B;vek od';
		$this->rssfeed_topic = 'Téma:';
	}

	function search()
	{
		$this->search_advanced = 'Roz&#x161;í&#x159;ené hledání';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Zákládní hledání';
		$this->search_characters = 'znak&#x16F; z p&#x159;ísp&#x11B;vku';
		$this->search_day = 'den';
		$this->search_days = 'dny';
		$this->search_exact_name = 'p&#x159;esné zn&#x11B;ní';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Vyhledat';
		$this->search_forum = 'Fórum';
		$this->search_group = 'Skupina';
		$this->search_guest = 'Host';
		$this->search_in = 'Hledat v';
		$this->search_in_posts = 'Hledat jen v p&#x159;ísp&#x11B;vcích';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Zalo&#x17E;eno';
		$this->search_level = 'úrove&#x148;';
		$this->search_match = 'vyhledat jen p&#x159;esn&#x11B; zadaný výraz (nap&#x159;. zadáte-li "AIM", ve výsledcích budou jen p&#x159;ísp&#x11B;vky, které obsahují práv&#x11B; slovo "AIM"';
		$this->search_matches = 'Ozna&#x10D;ené';
		$this->search_month = 'm&#x11B;síc';
		$this->search_months = 'm&#x11B;síce';
		$this->search_mysqldoc = 'Dokumentace MySQL';
		$this->search_newer = 'nov&#x11B;j&#x161;ích';
		$this->search_no_results = '&#x17E;ádné výsledky nebyly nalezeny.';
		$this->search_no_words = 'Musíte ur&#x10D;it alespo&#x148; jednu podmínku pro vyhledávání.<br/><br/>Ka&#x17E;dá podmínka musí obsahovat alespo&#x148; 3 znaky, (v&#x10D;etn&#x11B; písmen, &#x10D;ísel, apostrof&#x16F;, a podtr&#x17E;ítek).';
		$this->search_offline = 'Tento &#x10D;len je nyní nep&#x159;ítomen';
		$this->search_older = 'star&#x161;ích';
		$this->search_online = 'Tento &#x10D;len je nyní p&#x159;ítomen';
		$this->search_only_display = 'Zobrazit jen prvních';
		$this->search_partial_name = '&#x10D;áste&#x10D;né zn&#x11B;ní';
		$this->search_post_icon = 'Ikona p&#x159;ísp&#x11B;vku';
		$this->search_posted_on = 'Posláno';
		$this->search_posts = 'P&#x159;ísp&#x11B;vky';
		$this->search_posts_by = 'Jen v p&#x159;ísp&#x11B;vcích od';
		$this->search_regex = 'vyhledat i slova obsahující hledaný výraz (nap&#x159;. zadáte-li "hledat", ve výsledcích budou p&#x159;ísp&#x11B;vky obsahující slovo "hledat", ale i "vyhledat", "hledání" atd.';
		$this->search_regex_failed = 'Hledanému výrazu nic neodpovídá. Prohlédn&#x11B;te si prosím dokumentaci MySQL pro nápov&#x11B;du "p&#x159;esného zn&#x11B;ní".';
		$this->search_relevance = 'Hledanému výrazu odpovídá na %d%%';
		$this->search_replies = 'P&#x159;ísp&#x11B;vky';
		$this->search_result = 'Vyhledat výsledky';
		$this->search_search = 'Vyhledat';
		$this->search_select_all = 'Ozna&#x10D;it v&#x161;e';
		$this->search_show_posts = 'Zobrazit jen p&#x159;ísp&#x11B;vky (jinak se zobrazí téma celé téma)';
		$this->search_sound = 'vyhledat i slova podobná zadanému výrazu';
		$this->search_starter = 'Zalo&#x17E;il(a)';
		$this->search_than = 'ne&#x17E;';
		$this->search_topic = 'Téma';
		$this->search_unreg = 'Neregistrovaní';
		$this->search_week = 'týden';
		$this->search_weeks = 'týdny';
		$this->search_year = 'rok';
	}

	function settings()
	{
		$this->settings = 'Nastavení';
		$this->settings_active = 'Active Users Settings'; //Translate
		$this->settings_allow = 'Povolit';
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
		$this->settings_cookie_domain = 'Cookie Domain'; //Translate
		$this->settings_cookie_path = 'Cookie Path'; //Translate
		$this->settings_cookie_prefix = 'Cookie Prefix'; //Translate
		$this->settings_cookie_secure = 'Cookie Security'; //Translate
		$this->settings_cookie_secured = 'Is your site SSL secured?'; //Translate
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
		$this->settings_debug_mode = 'Debug Mode'; //Translate
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
		$this->settings_new = 'New Setting'; //Translate
		$this->settings_new_add = 'Add Board Setting';
		$this->settings_new_added = 'New settings added.'; //Translate
		$this->settings_new_exists = 'That setting already exists. Choose another name for it.'; //Translate
		$this->settings_new_name = 'New setting name'; //Translate
		$this->settings_new_required = 'The new setting name is required.'; //Translate
		$this->settings_new_value = 'New setting value'; //Translate
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
		$this->choose_css = 'Choose CSS Template'; //Translate
		$this->choose_set = 'Choose a template set'; //Translate
		$this->choose_skin = 'Choose a skin'; //Translate
		$this->confirm1 = 'You are about to delete the'; //Translate
		$this->confirm2 = 'template from'; //Translate
		$this->create_new = 'Create a new skin named'; //Translate
		$this->create_skin = 'Create Skin'; //Translate
		$this->credit = 'Please do not remove our only credit!'; //Translate
		$this->css_edited = 'CSS file has been updated.'; //Translate
		$this->css_fioerr = 'The file could not be written to, you will need to CHMOD the file manually.'; //Translate
		$this->delete_template = 'Delete Template'; //Translate
		$this->directory = 'Directory'; //Translate
		$this->display_name = 'Display Name'; //Translate
		$this->edit_css = 'Edit CSS'; //Translate
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
		$this->no_file = 'No such file.'; //Translate
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
		$this->temps_backup = 'AdminCP Database Backup'; //Translate
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
		$this->titles_nodel_default = 'Removal of the default title has been disabled as it will break your board, please edit it instead.'; //Translate
		$this->titles_title = 'Title'; //Translate
	}

	function topic()
	{
		$this->topic_attached = 'P&#x159;íloha:';
		$this->topic_attached_downloads = 'x shlédnuto';
		$this->topic_attached_filename = 'Soubor:';
		$this->topic_attached_image = 'P&#x159;ilo&#x17E;ený obrázek:';
		$this->topic_attached_perm = 'Nemáte oprávn&#x11B;ní stáhnout tento soubor.';
		$this->topic_attached_size = 'Velikost:';
		$this->topic_attached_title = 'P&#x159;íloha';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'P&#x159;ejít dol&#x16F; na stránku';
		$this->topic_create_poll = 'Vytvo&#x159;it nové téma s anketou';
		$this->topic_create_topic = 'Vytvo&#x159;it nové téma';
		$this->topic_delete = 'Smazat';
		$this->topic_delete_post = 'Smazat tento p&#x159;ísp&#x11B;vek';
		$this->topic_edit = 'Editovat';
		$this->topic_edit_post = 'Editovat tento p&#x159;ísp&#x11B;vek';
		$this->topic_edited = 'Poslední zm&#x11B;na: %s od %s';
		$this->topic_error = 'Chyba';
		$this->topic_group = 'Skupina';
		$this->topic_guest = 'Host';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Zalo&#x17E;eno';
		$this->topic_level = 'úrove&#x148;';
		$this->topic_links_aim = 'Poslat AIM zprávu u&#x17E;ivateli %s';
		$this->topic_links_email = 'Poslat e-mail u&#x17E;ivateli %s';
		$this->topic_links_gtalk = 'Poslat GTalk zprávu u&#x17E;ivateli %s';
		$this->topic_links_icq = 'Poslat ICQ zprávu u&#x17E;ivateli %s';
		$this->topic_links_msn = 'Poslat MSN zprávu u&#x17E;ivateli %s';
		$this->topic_links_pm = 'Poslat privátní zprávu u&#x17E;ivateli %s';
		$this->topic_links_web = 'Otev&#x159;ít www stránky u&#x17E;ivatele %s';
		$this->topic_links_yahoo = 'Proslat zprávu %s p&#x159;es Yahoo! Messenger';
		$this->topic_lock = 'Zamknout';
		$this->topic_locked = 'Téma zam&#x10D;eno';
		$this->topic_move = 'P&#x159;esunout';
		$this->topic_new_post = 'P&#x159;ísp&#x11B;vek není p&#x159;e&#x10D;ten';
		$this->topic_newer = 'Nov&#x11B;j&#x161;í téma';
		$this->topic_no_newer = 'Není tu &#x17E;ádné nov&#x11B;j&#x161;í téma.';
		$this->topic_no_older = 'Není tu &#x17E;ádné star&#x161;í téma.';
		$this->topic_no_votes = 'V této anket&#x11B; nejsou zaznamenány &#x17E;ádné hlasy.';
		$this->topic_not_found = 'Téma nenalezeno';
		$this->topic_not_found_message = 'Téma  nebylo nalezeno. Bu&#x10F; bylo smazáno, p&#x159;esunuto, nebo neexistuje.';
		$this->topic_offline = 'Tento &#x10D;len je nyní nep&#x159;ítomen';
		$this->topic_older = 'Star&#x161;í téma';
		$this->topic_online = 'Tento &#x10D;len je nyní p&#x159;ítomen';
		$this->topic_options = 'Volby tématu';
		$this->topic_pages = 'Stránky';
		$this->topic_perm_view = 'Nemáte oprávn&#x11B;ní prohlí&#x17E;et témata.';
		$this->topic_perm_view_guest = 'Nemáte oprávn&#x11B;ní prohlí&#x17E;et témata. Musíte se nejprve zaregistrovat.';
		$this->topic_pin = 'Zvýraznit';
		$this->topic_posted = 'Posláno';
		$this->topic_posts = 'P&#x159;ísp&#x11B;vk&#x16F;';
		$this->topic_print = 'Verze pro tisk';
		$this->topic_publish = 'Publish'; //Translate
		$this->topic_qr_emoticons = 'Smajlíci';
		$this->topic_qr_open_emoticons = 'Open Clickable Emoticons'; //Translate
		$this->topic_qr_open_mbcode = 'Otev&#x159;ít MBCode';
		$this->topic_quickreply = 'Rychlá odpov&#x11B;&#x10F;';
		$this->topic_quote = 'Do odpov&#x11B;di "ocitovat" tento p&#x159;ísp&#x11B;vek';
		$this->topic_reply = 'Odpov&#x11B;d&#x11B;t na téma';
		$this->topic_split = 'Spojit';
		$this->topic_split_finish = 'Dokon&#x10D;it celé spojení';
		$this->topic_split_keep = 'Nep&#x159;esouvat tento p&#x159;ísp&#x11B;vek';
		$this->topic_split_move = 'P&#x159;esunout tento p&#x159;ísp&#x11B;vek';
		$this->topic_subscribe = 'Zaslat informace na m&#x16F;j e-mail, pokud se zde objeví nový p&#x159;ísp&#x11B;vek';
		$this->topic_top = 'Jít na za&#x10D;átek stránky';
		$this->topic_unlock = 'Odemknout';
		$this->topic_unpin = 'Zru&#x161;it zvýrazn&#x11B;ní';
		$this->topic_unpublish = 'UnPublish'; //Translate
		$this->topic_unpublished = 'This topic is classed as unpublished so you do not have permission to view it.'; //Translate
		$this->topic_unreg = 'Neregistrován';
		$this->topic_view = 'Prohlédnout výsledky';
		$this->topic_viewing = 'Prohlí&#x17E;et téma';
		$this->topic_vote = 'Hlasovat';
		$this->topic_vote_count_plur = '%d hlas&#x16F;';
		$this->topic_vote_count_sing = '%d hlas';
		$this->topic_votes = 'hlas&#x16F; celkem';
	}

	function universal()
	{
		$this->aim = 'AIM'; //Translate
		$this->based_on = 'based on';
		$this->board_by = 'Od:';
		$this->charset = 'utf-8';
		$this->continue = 'Pokra&#x10D;ovat';
		$this->date_long = 'j.n.Y';
		$this->date_short = 'j.n.Y';
		$this->delete = 'Smazat';
		$this->direction = 'ltr'; //Translate
		$this->edit = 'Editovat';
		$this->email = 'Email'; //Translate
		$this->gtalk = 'GT'; //Translate
		$this->icq = 'ICQ'; //Translate
		$this->msn = 'MSN'; //Translate
		$this->new_message = 'Nová zpráva';
		$this->new_poll = 'Nová anketa';
		$this->new_topic = 'Nové téma';
		$this->no = 'Ne';
		$this->powered = 'Powered by'; //Translate
		$this->private_message = 'PM'; //Translate
		$this->quote = 'Citovat';
		$this->recount_forums = 'Recounted forums! Total topics: %d. Total posts: %d.'; //Translate
		$this->reply = 'Odpove&#x10F;';
		$this->seconds = 'Vte&#x159;in';
		$this->select_all = 'Vybrat v&#x161;e';
		$this->sep_decimals = ',';
		$this->sep_thousands = '.,';
		$this->spoiler = 'Spoiler'; //Translate
		$this->submit = 'Odeslat';
		$this->subscribe = 'Subscribe'; //Translate
		$this->time_long = ', H:i';
		$this->time_only = 'H:i';
		$this->today = 'dnes';
		$this->website = 'WWW'; //Translate
		$this->yahoo = 'Yahoo'; //Translate
		$this->yes = 'Ano';
		$this->yesterday = 'v&#x10D;era';
	}
}
?>
