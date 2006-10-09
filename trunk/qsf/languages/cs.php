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
 * English language module
 *
 * @author Ryan69 <ryan69@seznam.cz>
 * @since 1.1.0
 **/
class cs
{
	function active()
	{
		$this->active_last_action = 'Akce';
		$this->active_modules_active = 'Prohl&#xED;&#x17E;&#xED; si aktivn&#xED; u&#x17E;ivatele';
		$this->active_modules_board = 'Je na &#xFA;vodn&#xED; str&#xE1;nce';
		$this->active_modules_cp = 'Pou&#x17E;&#xED;v&#xE1; kontroln&#xED; panel';
		$this->active_modules_forum = 'Prohl&#xED;&#x17E;&#xED; si f&#xF3;rum: %s';
		$this->active_modules_help = 'Pou&#x17E;&#xED;v&#xE1; n&#xE1;pov&#x11B;du';
		$this->active_modules_login = 'Vstupuje/Odch&#xE1;z&#xED;';
		$this->active_modules_members = 'Prohl&#xED;&#x17E;&#xED; si seznam &#x10D;len&#x16F;';
		$this->active_modules_mod = 'Moderovat';
		$this->active_modules_pm = 'Pou&#x17E;&#xED;v&#xE1; Messenger';
		$this->active_modules_post = 'P&#xED;&#x161;e nov&#xFD; p&#x159;&#xED;sp&#x11B;vek';
		$this->active_modules_printer = 'Tiskne si t&#xE9;ma: %s';
		$this->active_modules_profile = 'Prohl&#xED;&#x17E;&#xED; si profil: %s';
		$this->active_modules_recent = 'Prohl&#xED;&#x17E;&#xED; si nov&#xE9; p&#x159;&#xED;sp&#x11B;vky';
		$this->active_modules_search = 'Hled&#xE1;n&#xED;';
		$this->active_modules_topic = 'Prohl&#xED;&#x17E;&#xED; si t&#xE9;ma: %s';
		$this->active_time = '&#x10D;as';
		$this->active_user = 'U&#x17E;ivatel';
		$this->active_users = 'Aktivn&#xED; u&#x17E;ivatel&#xE9;';
	}

	function admin()
	{
		$this->admin_add_emoticons = 'P&#x159;idat smajl&#xED;ky';
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
		$this->backup_create = 'Backup Database'; //Translate
		$this->backup_createfile = 'Backup and create a file on server'; //Translate
		$this->backup_done = 'The database has been backed up to the main Quicksilver Forums directory.';
		$this->backup_download = 'Backup and download (recommended)'; //Translate
		$this->backup_found = 'The following backups were found in the Quicksilver Forums directory';
		$this->backup_invalid = 'The backup does not appear to be valid. No changes were made to your database.'; //Translate
		$this->backup_none = 'No backups were found in the Quicksilver Forums directory.'; //Translate
		$this->backup_options = 'Select how you want your backup created'; //Translate
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
		$this->board_active_users = 'Aktivn&#xED; u&#x17E;ivatel&#xE9;';
		$this->board_birthdays = 'Dnes m&#xE1; narozeniny:';
		$this->board_bottom_page = 'P&#x159;ejit dol&#x16F; na str&#xE1;nku';
		$this->board_can_post = 'V tomto f&#xF3;ru m&#x16F;&#x17E;ete odpov&#xED;dat.';
		$this->board_can_topics = 'M&#x16F;&#x17E;ete prohl&#xED;&#x17E;et, ale nem&#x16F;&#x17E;ete vytv&#xE1;&#x159;et t&#xE9;mata v tomto f&#xF3;ru. Pros&#xED;m, zaregistrujte se.';
		$this->board_cant_post = 'Nem&#x16F;&#x17E;ete odpov&#xED;dat v tomto f&#xF3;ru. Pros&#xED;m, zaregistrujte se.';
		$this->board_cant_topics = 'Nem&#x16F;&#x17E;ete prohl&#xED;&#x17E;et ani vytv&#xE1;&#x159;et t&#xE9;mata v tomto f&#xF3;ru. Pros&#xED;m, zaregistrujte se.';
		$this->board_forum = 'F&#xF3;rum';
		$this->board_guests = 'host&#xE9;';
		$this->board_last_post = 'Posledn&#xED; p&#x159;&#xED;sp&#x11B;vek';
		$this->board_mark = 'Ozna&#x10D;it p&#x159;&#xED;sp&#x11B;vek jako p&#x159;e&#x10D;ten&#xFD;';
		$this->board_mark1 = 'V&#x161;echny p&#x159;&#xED;sp&#x11B;vky a f&#xF3;ra byly ozna&#x10D;eny jako p&#x159;e&#x10D;ten&#xE9;.';
		$this->board_markforum = 'Ozna&#x10D;it f&#xF3;rum jako p&#x159;e&#x10D;ten&#xE9;';
		$this->board_markforum1 = 'V&#x161;echny p&#x159;&#xED;sp&#x11B;vky ve f&#xF3;ru %s byly ozna&#x10D;eny jako p&#x159;e&#x10D;ten&#xE9;.';
		$this->board_members = 'registrovan&#xED; ';
		$this->board_message = '%s Zpr&#xE1;va';
		$this->board_most_online = 'Nejv&#xED;ce u&#x17E;ivatel&#x16F; online (%d) tu bylo %s.';
		$this->board_nobday = '&#x17E;&#xE1;dny &#x10D;len dnes nem&#xE1; narozeniny.';
		$this->board_nobody = '&#x17E;&#xE1;dn&#xFD; &#x10D;len nen&#xED; on-line.';
		$this->board_nopost = '&#x17E;&#xE1;dn&#xE9; p&#x159;&#xED;sp&#x11B;vky';
		$this->board_noview = 'Nem&#xE1;te povolen&#xED; prohl&#xED;&#x17E;et f&#xF3;rum.';
		$this->board_regfirst = 'Nem&#xE1;te povolen&#xED; prohl&#xED;&#x17E;et f&#xF3;rum. Mus&#xED;te se nejd&#x159;&#xED;v zaregistrovat.';
		$this->board_replies = 'Odpov&#x11B;d&#xED;';
		$this->board_stats = 'Statistiky';
		$this->board_stats_string = '%s u&#x17E;ivatel&#x16F; je registrov&#xE1;no. N&#xE1;&#x161; nejnov&#x11B;j&#x161;&#xED; &#x10D;len m&#xE1; p&#x159;ezd&#xED;vku %s.<br />Najdete zde %s t&#xE9;mat a %s odpov&#x11B;d&#xED;, celkem %s p&#x159;&#xED;sp&#x11B;vk&#x16F;.';
		$this->board_top_page = 'P&#x159;ej&#xED;t nahoru na str&#xE1;nku';
		$this->board_topics = 'T&#xE9;mat';
		$this->board_users = 'u&#x17E;ivatel&#x16F; je on-line';
		$this->board_write_topics = 'M&#x16F;&#x17E;ete prohl&#xED;&#x17E;et a vytv&#xE1;&#x159;et t&#xE9;mata v tomto f&#xF3;ru.';
	}

	function censoring()
	{
		$this->censor = 'Cenzorovan&#xE1; slova';
		$this->censor_one_per_line = 'Jedno na &#x159;&#xE1;dek.';
		$this->censor_regex_allowed = 'Regular expressions are allowed. You can use a single * as a wildcard for one or more characters.'; //Translate
		$this->censor_updated = 'Slovn&#xED;k byl aktualizov&#xE1;n.'; //Translate
	}

	function cp()
	{
		$this->cp_aim = 'AIM';
		$this->cp_already_member = 'V&#xE1;mi zadan&#xE1; e-mailov&#xE1; adresa je ji&#x17E; pou&#x17E;ita jin&#xFD;m &#x10D;lenem..';
		$this->cp_apr = 'Dubna';
		$this->cp_aug = 'Srpna';
		$this->cp_avatar_current = 'St&#xE1;vaj&#xED;c&#xED; avatar';
		$this->cp_avatar_error = 'Chybn&#xFD; avatar';
		$this->cp_avatar_must_select = 'Mus&#xED;te vybrat avatar.';
		$this->cp_avatar_none = 'Nem&#xE1; avatar';
		$this->cp_avatar_pixels = 'pixel&#x16F;';
		$this->cp_avatar_select = 'Vyberte avatar';
		$this->cp_avatar_size_height = 'Avatar mus&#xED; m&#xED;t &#x161;&#xED;&#x159;ku mezi 1 d';
		$this->cp_avatar_size_width = 'Avatar mus&#xED; m&#xED;t v&#xFD;&#x161;ku mezi 1 d';
		$this->cp_avatar_upload = 'Nahr&#xE1;t avatara z Va&#x161;eho disku';
		$this->cp_avatar_upload_failed = 'Chyba p&#x159;i nahr&#xE1;v&#xE1;n&#xED; avatara. Soubour z&#x159;ejm&#x11B; neexistuje.';
		$this->cp_avatar_upload_not_image = 'M&#x16F;&#x17E;ete nahr&#xE1;t jen avatar ?na be used for your avatar?.';
		$this->cp_avatar_upload_too_large = 'Avatar je p&#x159;&#xED;li&#x161; velk&#xFD;. Maxim&#xE1;ln&#xED; velikost je %d kilobyt&#x16F;.';
		$this->cp_avatar_url = 'URL Va&#x161;eho avatara';
		$this->cp_avatar_use = 'Pou&#x17E;&#xED;t nahran&#xFD; avatar';
		$this->cp_bday = 'Datum narozen&#xED;';
		$this->cp_been_updated = 'V&#xE1;&#x161; profil byl zm&#x11B;n&#x11B;n.';
		$this->cp_been_updated1 = 'V&#xE1;&#x161; avatar byl nahr&#xE1;n.';
		$this->cp_been_updated_prefs = 'Nastaven&#xED; bylo zm&#x11B;n&#x11B;no.';
		$this->cp_changing_pass = 'Zm&#x11B;nit heslo';
		$this->cp_contact_pm = 'Umo&#x17E;nit ostatn&#xED;m u&#x17E;ivatel&#x16F;m, aby mi mohli zas&#xED;lat soukrom&#xE9; zpr&#xE1;vy';
		$this->cp_cp = 'Nastaven&#xED;';
		$this->cp_current_avatar = 'St&#xE1;vaj&#xED;c&#xED; avatar';
		$this->cp_current_time = 'Nyn&#xED; je %s.';
		$this->cp_custom_title = 'Osobn&#xED; titulek';
		$this->cp_custom_title2 = 'Tato volba je p&#x159;&#xED;stupn&#xE1; jen administr&#xE1;tor&#x16F;m';
		$this->cp_dec = 'Prosince';
		$this->cp_editing_avatar = 'Zm&#x11B;nit avatar';
		$this->cp_editing_profile = 'Zm&#x11B;nit profil';
		$this->cp_email = 'E-mail';
		$this->cp_email_form = 'Umo&#x17E;nit ostatn&#xED;m u&#x17E;ivatel&#x16F;m  kontaktovat mn&#x11B; p&#x159;es e-mail';
		$this->cp_email_invaid = 'V&#xE1;mi vlo&#x17E;en&#xE1; e-mailov&#xE1; adresa je neplatn&#xE1;.';
		$this->cp_err_avatar = 'Chyba p&#x159;i nahr&#xE1;v&#xE1;n&#xED; avatara';
		$this->cp_err_updating = 'Chyba p&#x159;i zm&#x11B;n&#x11B; profilu';
		$this->cp_feb = '&#xFA;nora';
		$this->cp_file_type = 'V&#xE1;mi vlo&#x17E;en&#xFD; avatar je neplatn&#xFD;. Ujist&#x11B;te se &#x17E;e URL je ve spr&#xE1;vn&#xE9;m tvaru, a form&#xE1;t obr&#xE1;zku je gif, jpg, nebo png.';
		$this->cp_format = 'Jm&#xE9;no-p&#x159;ezd&#xED;vka';
		$this->cp_gtalk = 'GTalk &#xFA;&#x10D;et';
		$this->cp_header = 'Kontroln&#xED; panel u&#x17E;ivatele';
		$this->cp_height = 'V&#xFD;&#x161;ka';
		$this->cp_icq = 'ICQ (bez mezer, poml&#x10D;ek, atd.).';
		$this->cp_interest = 'Z&#xE1;liby';
		$this->cp_jan = 'Ledna';
		$this->cp_july = '&#x10C;ervence';
		$this->cp_june = '&#x10C;ervna';
		$this->cp_label_edit_avatar = 'Zm&#x11B;nit avatar';
		$this->cp_label_edit_pass = 'Zm&#x11B;nit heslo';
		$this->cp_label_edit_prefs = 'Zm&#x11B;nit nastaven&#xED;';
		$this->cp_label_edit_profile = 'Zm&#x11B;nit profil';
		$this->cp_label_edit_sig = 'Zm&#x11B;nit podpis';
		$this->cp_label_edit_subs = 'Zm&#x11B;nit zas&#xED;l&#xE1;n&#xED; infomail&#x16F;';
		$this->cp_language = 'Jazyk';
		$this->cp_less_charac = 'Va&#x161;e jm&#xE9;no m&#x16F;&#x17E;e obsahovat max. 32 znak&#x16F;.';
		$this->cp_location = 'M&#x11B;sto';
		$this->cp_login_first = 'Mus&#xED;te b&#xFD;t p&#x159;ihla&#x161;eni, aby ste mohli pou&#x17E;&#xED;vat kontroln&#xED; panel.';
		$this->cp_mar = 'B&#x159;ezna';
		$this->cp_may = 'Kv&#x11B;tna';
		$this->cp_msn = 'MSN';
		$this->cp_must_orig = 'Va&#x161;e jm&#xE9;no mus&#xED; b&#xFD;t stejn&#xE9; jako p&#x16F;vodn&#xED;. M&#x16F;&#x17E;ete jen zm&#x11B;nit zp&#x16F;sob jeho zobrazen&#xED; (nap&#x159;. p&#x159;id&#xE1;n&#xED;m mezer atd.).';
		$this->cp_new_notmatch = 'Vami zadan&#xE9; nov&#xE9; heslo je neplatn&#xE9;.';
		$this->cp_new_pass = 'Nov&#xE9; heslo';
		$this->cp_no_edit_avatar = 'You are not allowed to edit your avatar.'; // Translate
		$this->cp_no_edit_profile = 'You are not allowed to edit your profile.'; // Translate
		$this->cp_no_edit_sig = 'You are not allowed to edit your signature.'; // Translate
		$this->cp_no_flash = 'Obr&#xE1;zky ve Flashi nejsou povoleny.';
		$this->cp_not_exist = '&#x161;patn&#x11B; zadan&#xFD; datum (%s) !';
		$this->cp_nov = 'Listopadu';
		$this->cp_oct = '&#x158;&#xED;jna';
		$this->cp_old_notmatch = 'Heslo nesouhlas&#xED; s heslem v datab&#xE1;zi.';
		$this->cp_old_pass = 'Star&#xE9; heslo';
		$this->cp_pass_notvaid = 'Va&#x161;e heslo je neplatn&#xE9;. Ujist&#x11B;te se, &#x17E;e pou&#x17E;&#xED;vat&#xE9; jen platn&#xE9; znaky - p&#xED;smena, &#x10D;&#xED;slice, poml&#x10D;ky, podrt&#x17E;&#xED;tka, nebo mezery.';
		$this->cp_posts_page = 'P&#x159;&#xED;sp&#x11B;vk&#x16F; na str&#xE1;nku. Zvolte 0 pro v&#xFD;choz&#xED; nastaven&#xED;.';
		$this->cp_preferences = 'Zm&#x11B;nit z&#xE1;liby';
		$this->cp_preview_sig = 'N&#xE1;hled podpisu:';
		$this->cp_privacy = 'Priv&#xE1;tn&#xED; volby';
		$this->cp_repeat_pass = 'Zopakujte nov&#xE9; heslo';
		$this->cp_sept = 'Z&#xE1;&#x159;&#xED;';
		$this->cp_show_active = 'B&#xFD;t viditeln&#xFD; pro ostatn&#xED; u&#x17E;ivatele, pokud se p&#x159;ihlas&#xED;m na f&#xF3;rum';
		$this->cp_show_email = 'Zobrazit moj&#xED; e-mailovou adresu v profilu';
		$this->cp_signature = 'Podpis';
		$this->cp_size_max = 'Velikost avatara je p&#x159;&#xED;li&#x161; velk&#xE1; (max. %s na %s pixel&#x16F;).';
		$this->cp_skin = 'Vzhled f&#xF3;ra';
		$this->cp_sub_change = 'Zm&#x11B;nit zas&#xED;l&#xE1;n&#xED; infomail&#x16F;';
		$this->cp_sub_delete = 'Smazat';
		$this->cp_sub_expire = 'E-maily budou z&#xE1;s&#xED;lany do';
		$this->cp_sub_name = 'N&#xE1;zev t&#xE9;matu';
		$this->cp_sub_no_params = '&#x17E;&#xE1;dn&#xE9; parametry nebyly zad&#xE1;ny.';
		$this->cp_sub_success = 'Nyn&#xED; jste zaps&#xE1;ni k odb&#x11B;ru nov&#xFD;ch p&#x159;&#xED;sp&#x11B;vk&#x16F; z t&#xE9;matu %s.';
		$this->cp_sub_type = 'Sekce';
		$this->cp_sub_updated = 'Zas&#xED;lan&#xED; informa&#x10D;n&#xED;ch e-mail&#x16F; o tomto t&#xE9;matu bylo zru&#x161;eno.';
		$this->cp_topic_option = 'Zobrazovat';
		$this->cp_topics_page = 'T&#xE9;mat na str&#xE1;nku. Zvolte 0 pro v&#xFD;choz&#xED; nastaven&#xED;.';
		$this->cp_updated = 'Profil zm&#x11B;n&#x11B;n';
		$this->cp_updated1 = 'Avatar zm&#x11B;n&#x11B;n';
		$this->cp_updated_prefs = 'Nastaven&#xED; zm&#x11B;n&#x11B;no';
		$this->cp_user_exists = 'U&#x17E;ivatel s t&#xED;mto jm&#xE9;nem ji&#x17E; existuje.';
		$this->cp_valided = 'Va&#x161;e heslo bylo zm&#x11B;n&#x11B;no.';
		$this->cp_view_avatar = 'obr&#xE1;zky';
		$this->cp_view_emoticon = 'smajl&#xED;ci';
		$this->cp_view_signature = 'podpisy';
		$this->cp_welcome = 'V&#xED;tejte v ovl&#xE1;dac&#xED;m panelu pro registrovan&#xE9; u&#x17E;ivatele. Odtud m&#x16F;&#x17E;ete m&#x11B;nit V&#xE1;&#x161; &#xFA;&#x10D;et. Pros&#xED;m vyberte si z mo&#x17E;nost&#xED; naho&#x159;e.';
		$this->cp_width = '&#x160;&#xED;&#x159;ka';
		$this->cp_www = 'WWW str&#xE1;nky';
		$this->cp_yahoo = 'Yahoo';
		$this->cp_zone = '&#x10C;asov&#xE9; p&#xE1;smo';
	}

	function email()
	{
		$this->email_blocked = 'Tento &#x10D;len neakceptuje p&#x159;ijmut&#xED; e-mailov&#xFD;ch zpr&#xE1;v.';
		$this->email_email = 'E-mail';
		$this->email_msgtext = 'Zpr&#xE1;va:';
		$this->email_no_fields = 'Vra?te se a ujist&#x11B;te se, &#x17E;e jste vyplnili v&#x161;echny &#xFA;daje.';
		$this->email_no_member = 'Pod t&#xED;mto jm&#xE9;nem nebyl nalezen &#x17E;&#xE1;dn&#xFD; &#x10D;len';
		$this->email_no_perm = 'Nem&#xE1;te povolen&#xED; pos&#xED;lat e-mailov&#xE9; zpr&#xE1;vy v tomto f&#xF3;ru.';
		$this->email_sent = 'E-mail byl odesl&#xE1;n.';
		$this->email_subject = 'P&#x159;edm&#x11B;t:';
		$this->email_to = 'Pro:';
	}

	function emot_control()
	{
		$this->emote = 'Smajl&#xED;ci';
		$this->emote_add = 'P&#x159;idat smajl&#xED;ka';
		$this->emote_added = 'Smajl&#xED;k p&#x159;id&#xE1;n.';
		$this->emote_clickable = 'Klikateln&#xFD;';
		$this->emote_edit = 'Zm&#x11B;nit smajl&#xED;ka';
		$this->emote_image = 'Obr&#xE1;zek';
		$this->emote_install = 'Nainstalovat smajl&#xED;ky';
		$this->emote_install_done = 'Emoticons have been successfully reinstalled.'; //Translate
		$this->emote_install_warning = 'This will erase all existing emoticon settings and import uploaded emoticons from your currently selected skin into the database.'; //Translate
		$this->emote_no_text = 'No emoticon text was given.'; //Translate
		$this->emote_text = 'Text';
	}

	function forum()
	{
		$this->forum_by = 'Od';
		$this->forum_can_post = 'V tomto f&#xF3;ru m&#x16F;&#x17E;ete odpov&#xED;dat.';
		$this->forum_can_topics = 'V tomto f&#xF3;ru m&#x16F;&#x17E;ete prohl&#xED;&#x17E;et t&#xE9;mata.';
		$this->forum_cant_post = 'V tomto f&#xF3;ru nem&#x16F;&#x17E;ete odpov&#xED;dat. Pros&#xED;m, zaregistrujte se.';
		$this->forum_cant_topics = 'V tomto f&#xF3;ru nem&#x16F;&#x17E;ete prohl&#xED;&#x17E;et t&#xE9;mata. Pros&#xED;m, zaregistrujte se.';
		$this->forum_dot = 'te&#x10D;ka';
		$this->forum_dot_detail = 'ukazuje, &#x17E;e jste v tomto f&#xF3;ru odpov&#xED;dal(a)';
		$this->forum_forum = 'F&#xF3;rum';
		$this->forum_guest = 'Host';
		$this->forum_hot = '"HOT"';
		$this->forum_icon = 'Ikonka zpr&#xE1;vy';
		$this->forum_jump = 'P&#x159;esko&#x10D;it na nejnov&#x11B;j&#x161;&#xED; p&#x159;&#xED;sp&#x11B;vek v tomto t&#xE9;matu.';
		$this->forum_last = 'Posledn&#xED; p&#x159;&#xED;sp&#x11B;vek';
		$this->forum_locked = 'Zamknuto';
		$this->forum_mark_read = 'Ozna&#x10D;it f&#xF3;rum jako p&#x159;e&#x10D;ten&#xE9;';
		$this->forum_moved = 'P&#x159;esunuto';
		$this->forum_msg = '%s Zpr&#xE1;va';
		$this->forum_new = 'Nov&#xE9;';
		$this->forum_new_poll = 'Vytvo&#x159;it nov&#xE9; t&#xE9;ma s anketou';
		$this->forum_new_topic = 'Vytvo&#x159;it nov&#xE9; t&#xE9;ma';
		$this->forum_no_topics = 'Ve f&#xF3;ru nejsou &#x17E;&#xE1;dn&#xE9; p&#x159;&#xED;sp&#x11B;vky k zobrazen&#xED;.';
		$this->forum_noexist = 'F&#xF3;rum neexistuje.';
		$this->forum_nopost = '&#x17E;&#xE1;dn&#xE9; p&#x159;&#xED;sp&#x11B;vky';
		$this->forum_not = 'Ne';
		$this->forum_noview = 'Nem&#xE1;te opravn&#x11B;n&#xED; prohl&#xED;&#x17E;et f&#xF3;rum.';
		$this->forum_pages = 'Str&#xE1;nky';
		$this->forum_pinned = 'D&#x16F;le&#x17E;it&#xE9;';
		$this->forum_pinned_topic = 'Zapinov&#xE1;n&#xE9; t&#xE9;ma';
		$this->forum_poll = 'Anketa';
		$this->forum_regfirst = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; prohl&#xED;&#x17E;et f&#xF3;rum. Nejprve se mus&#xED;te zaregistrovat.';
		$this->forum_replies = 'Odpov&#x11B;d&#xED;';
		$this->forum_starter = 'Zalo&#x17E;il(a)';
		$this->forum_sub = 'Sub-f&#xF3;rum';
		$this->forum_sub_last_post = 'Posledn&#xED; p&#x159;&#xED;sp&#x11B;vek';
		$this->forum_sub_replies = 'Odpov&#x11B;d&#xED;';
		$this->forum_sub_topics = 'T&#xE9;mat';
		$this->forum_subscribe = 'Informovat mn&#x11B; e-mailem o nov&#xFD;ch p&#x159;&#xED;sp&#x11B;vc&#xED;ch';
		$this->forum_topic = 'T&#xE9;ma';
		$this->forum_views = 'Schl&#xE9;dnuto';
		$this->forum_write_topics = 'V tomto f&#xF3;ru m&#x16F;&#x17E;ete vytv&#xE1;&#x159;et t&#xE9;mata.';
	}

	function forums()
	{
		$this->forum_controls = 'Nastevn&#xED; f&#xF3;ra';
		$this->forum_create = 'Vytvo&#x159;it f&#xF3;rum';
		$this->forum_create_cat = 'Vytvo&#x159;it kategorii';
		$this->forum_created = 'F&#xF3;rum vytvo&#x159;eno';
		$this->forum_default_perms = 'V&#xFD;choz&#xED; nastaven&#xED;';
		$this->forum_delete = 'Smazat f&#xF3;rum';
		$this->forum_delete_warning = 'Are you sure you want to delete this forum, its topics, and its posts?<br />This action cannot be reversed.'; //Translate
		$this->forum_deleted = 'F&#xF3;rum bylo smaz&#xE1;no.';
		$this->forum_description = 'Popis';
		$this->forum_edit = 'Editovat f&#xF3;rum';
		$this->forum_edited = 'F&#xF3;rum bylo &#xFA;sp&#x11B;&#x161;n&#x11B; zm&#x11B;n&#x11B;no.';
		$this->forum_empty = 'The forum name is empty. Please go back and enter a name.'; //Translate
		$this->forum_is_subcat = 'This forum is a subcategory only.'; //Translate
		$this->forum_name = 'N&#xE1;zev';
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
		$this->help_available_files = 'N&#xE1;pov&#x11B;da';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'Datab&#xE1;ze neobsahuje &#x17E;&#xE1;dnou n&#xE1;pov&#x11B;du';
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
		$this->jsdata_smiles = 'Smajl&#xED;ci';
		$this->jsdata_url = 'URL';
	}

	function jslang()
	{
		$this->jslang_avatar_size_height = '&#x161;&#xED;&#x159;ka va&#x161;eho avatara mus&#xED; b&#xFD;t mezi 1 a %d pixely';
		$this->jslang_avatar_size_width = 'V&#xFD;&#x161;ka va&#x161;eho avatara mus&#xED; b&#xFD;t mezi 1 a %d pixely';
	}

	function login()
	{
		$this->login_cant_logged = 'P&#x159;ihl&#xE1;&#x161;en&#xED; bylo ne&#xFA;sp&#x11B;&#x161;n&#xE9;. Zkontrolujte, &#x17E;e zadan&#xE9; jm&#xE9;no a heslo jsou spr&#xE1;vn&#xE9;.<br /><br />Aplikace rozezn&#xE1;v&#xE1; mal&#xE1; a velk&#xE1; p&#xED;smena! \'hEsLo\' nen&#xED; \'heslo\'. Zkontrolujte si tak&#xE9;, &#x17E;e m&#xE1;te ve sv&#xE9;m prohl&#xED;&#x17E;eci povoleny Cookies.';
		$this->login_cookies = 'Pro p&#x159;ihl&#xE1;&#x161;en&#xED; mus&#xED; b&#xFD;t ve Va&#x161;em prohl&#xED;&#x17E;e&#x10D;i povoleny Cookies';
		$this->login_forgot_pass = 'Zapomn&#x11B;li jste heslo?';
		$this->login_header = 'P&#x159;ihl&#xE1;&#x161;en&#xED;';
		$this->login_logged = 'Nyn&#xED; jste p&#x159;ihl&#xE1;&#x161;eni.';
		$this->login_now_out = 'Nyn&#xED; jste odhl&#xE1;&#x161;eni.';
		$this->login_out = 'Odhl&#xE1;&#x161;en&#xED;';
		$this->login_pass = 'Heslo';
		$this->login_pass_no_id = 'Pod t&#xED;mto jm&#xE9;nem nen&#xED; registrov&#xE1;n &#x17E;&#xE1;dn&#xFD; u&#x17E;ivatel.';
		$this->login_pass_request = 'Pro obnoven&#xED; hesla klikn&#x11B;te na odkaz, kter&#xFD; v&#xE1;m byl zasl&#xE1;n na e-mail uveden&#xFD; p&#x159;i registraci.';
		$this->login_pass_reset = 'Obnovit heslo';
		$this->login_pass_sent = 'Va&#x161;e heslo bylo obnoveno. Nov&#xE9; heslo bylo odesl&#xE1;no na e-mailovou adresu, kterou jste zadali p&#x159;i p&#x159;i registraci Va&#x161;eho &#xFA;&#x10D;tu.';
		$this->login_sure = 'Jste si jisti, &#x17E;e se chcete odhl&#xE1;sit z \'%s\'?';
		$this->login_user = 'U&#x17E;ivatelsk&#xE9; jm&#xE9;no';
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
		$this->main_activate_resend = 'Poslat znovu aktiva&#x10D;n&#xED; e-mail';
		$this->main_admincp = 'administrace';
		$this->main_banned = 'M&#xE1;te zak&#xE1;z&#xE1;no prohl&#xED;&#x17E;et jakoukoli &#x10D;&#xE1;st tohoto f&#xF3;ra.';
		$this->main_code = 'K&#xF3;d';
		$this->main_cp = 'nastaven&#xED;';
		$this->main_full = 'Pln&#xE9;';
		$this->main_help = 'n&#xE1;pov&#x11B;da';
		$this->main_load = 'zat&#xED;&#x17E;en&#xED;';
		$this->main_login = 'p&#x159;ihl&#xE1;sit';
		$this->main_logout = 'odhl&#xE1;sit';
		$this->main_mark = 'ozna&#x10D;it v&#x161;e';
		$this->main_mark1 = 'Ozna&#x10D;it v&#x161;echna t&#xE9;mata jako p&#x159;e&#x10D;ten&#xE1;';
		$this->main_markforum_read = 'Ozna&#x10D;it f&#xF3;rum jako p&#x159;e&#x10D;ten&#xE1;';
		$this->main_max_load = 'Omlov&#xE1;me se, ale %s je v nyn&#xED; nedostupn&#xE9;, proto&#x17E;e server je p&#x159;et&#xED;&#x17E;en.';
		$this->main_members = '&#x10D;lenov&#xE9;';
		$this->main_messenger = 'messenger';
		$this->main_new = 'nov&#xE9;';
		$this->main_next = 'dal&#x161;&#xED;';
		$this->main_prev = 'p&#x159;edchoz&#xED;';
		$this->main_queries = 'po&#x17E;adavk&#x16F;';
		$this->main_quote = 'Citovat';
		$this->main_recent = 'nov&#xE9; p&#x159;isp&#x11B;vky';
		$this->main_recent1 = 'Zobrazit nov&#xE9; p&#x159;&#xED;sp&#x11B;vky od va&#x161;&#xED; posledn&#xED; n&#xE1;v&#x161;t&#x11B;vy';
		$this->main_register = 'registrace';
		$this->main_reminder = 'upozorn&#x11B;n&#xED;';
		$this->main_reminder_closed = 'F&#xF3;rum je nyn&#xED; uzav&#x159;eno, p&#x159;&#xED;stupn&#xE9; jen administr&#xE1;tor&#x16F;m.';
		$this->main_said = '&#x159;ekl(a)';
		$this->main_search = 'hledat';
		$this->main_topics_new = 'Ve f&#xF3;ru je nov&#xFD; p&#x159;&#xED;sp&#x11B;vek.';
		$this->main_topics_old = 'Ve f&#xF3;ru nejsou &#x17E;&#xE1;dn&#xE9; nov&#xE9; p&#x159;&#xED;sp&#x11B;vky.';
		$this->main_welcome = 'V&#xED;tejte';
		$this->main_welcome_guest = 'V&#xED;tejte!!';
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
		$this->mcount = 'Opravit statistiky &#x10D;len&#x16F;';
		$this->mcount_updated = 'Po&#x10D;et &#x10D;len&#x16F; byl aktualizov&#xE1;n.';
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
		$this->members_pm = 'Osobn&#xED; zpr&#xE1;va';
		$this->members_posts = 'P&#x159;&#xED;sp&#x11B;vk&#x16F;';
		$this->members_send_pm = 'Poslat tomuto u&#x17E;ivateli soukromou zpr&#xE1;vu';
		$this->members_title = 'Titul';
		$this->members_vist_www = 'Otev&#x159;&#xED;t &#x10D;lenovy www str&#xE1;nky';
		$this->members_www = 'www';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Jste si jisti &#x17E;e chcete smazat tento p&#x159;&#xED;sp&#x11B;vek?';
		$this->mod_confirm_topic_delete = 'Jste si jisti &#x17E;e chcete smazat toto t&#xE9;ma?';
		$this->mod_error_first_post = 'Nem&#x16F;&#x17E;ete smazat prvn&#xED; p&#x159;&#xED;sp&#x11B;vek v diskusi.';
		$this->mod_error_move_category = 'Nem&#x16F;&#x17E;ete p&#x159;esunout toto t&#xE9;ma.';
		$this->mod_error_move_create = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; p&#x159;esouvat t&#xE9;mata do tohoto f&#xF3;ra.';
		$this->mod_error_move_forum = 'Nem&#x16F;&#x17E;ete p&#x159;esunout t&#xE9;ma do diskuse, kter&#xE1; neexistuje.';
		$this->mod_error_move_global = 'Nem&#x16F;&#x17E;ete p&#x159;esunout glob&#xE1;ln&#xED; t&#xE9;ma. Upravte toto t&#xE9;ma p&#x159;ed p&#x159;esunut&#xED;m.';
		$this->mod_error_move_same = 'Nem&#x16F;&#x17E;ete p&#x159;esunout t&#xE9;ma do diskuse, ve kter&#xE9; u&#x17E; je.';
		$this->mod_label_controls = '&#xFA;prava p&#x159;&#xED;sp&#x11B;vku';
		$this->mod_label_description = 'Popis';
		$this->mod_label_emoticon = 'P&#x159;ev&#xE9;st textov&#xE9; "smajl&#xED;ky" na obr&#xE1;zkov&#xE9;?';
		$this->mod_label_global = 'V&#x161;eobecn&#xE9; t&#xE9;ma';
		$this->mod_label_mbcode = 'Zform&#xE1;tovat MbCodem?';
		$this->mod_label_move_to = 'P&#x159;esunout do';
		$this->mod_label_options = 'Volby';
		$this->mod_label_post_delete = 'Smazat p&#x159;&#xED;sp&#x11B;vek';
		$this->mod_label_post_edit = 'Editovat p&#x159;&#xED;sp&#x11B;vek';
		$this->mod_label_post_icon = 'Ikonka p&#x159;&#xED;sp&#x11B;vku';
		$this->mod_label_publish = 'Publishing'; //Translate
		$this->mod_label_title = 'N&#xE1;zev';
		$this->mod_label_title_original = 'P&#x16F;vodn&#xED; n&#xE1;zev';
		$this->mod_label_title_split = 'Spojit t&#xE9;mata';
		$this->mod_label_topic_delete = 'Smazat t&#xE9;ma';
		$this->mod_label_topic_edit = 'Editovat t&#xE9;ma';
		$this->mod_label_topic_lock = 'Zamknout t&#xE9;ma';
		$this->mod_label_topic_move = 'P&#x159;esunout t&#xE9;ma';
		$this->mod_label_topic_move_complete = 'P&#x159;esunout c&#xE9;l&#xE9; t&#xE9;ma do nov&#xE9; diskuse';
		$this->mod_label_topic_move_link = 'P&#x159;esunou t&#xE9;ma do nov&#xE9; diskuse, a nechat na n&#x11B;j odkaz ve star&#xE9; diskusi.';
		$this->mod_label_topic_pin = 'Zv&#xFD;raznit t&#xE9;ma';
		$this->mod_label_topic_split = 'Spojit t&#xE9;mata';
		$this->mod_missing_post = 'Zadan&#xFD; p&#x159;&#xED;sp&#x11B;v&#x11B;k neexistuje.';
		$this->mod_missing_topic = 'Zadan&#xE9; t&#xE9;ma neexistuje.';
		$this->mod_no_action = 'Mus&#xED;te zvolit &#xFA;kol.';
		$this->mod_no_post = 'Mus&#xED;te zvolit p&#x159;&#xED;sp&#x11B;vek.';
		$this->mod_no_topic = 'Mus&#xED;te zvolit t&#xE9;ma..';
		$this->mod_perm_post_delete = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; mazat p&#x159;&#xED;sp&#x11B;vky.';
		$this->mod_perm_post_edit = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; editovat p&#x159;&#xED;sp&#x11B;vky.';
		$this->mod_perm_publish = 'You do not have permission to publish this topic.'; //Translate
		$this->mod_perm_topic_delete = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; mazat toto t&#xE9;ma.';
		$this->mod_perm_topic_edit = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; editovat toto t&#xE9;ma.';
		$this->mod_perm_topic_lock = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; zamknout toto t&#xE9;ma.';
		$this->mod_perm_topic_move = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; p&#x159;esunout toto t&#xE9;ma.';
		$this->mod_perm_topic_pin = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; zv&#xFD;raznit toto t&#xE9;ma.';
		$this->mod_perm_topic_split = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; spojit tato t&#xE9;mata.';
		$this->mod_perm_topic_unlock = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; odemknout toto t&#xE9;ma.';
		$this->mod_perm_topic_unpin = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; odpinovat toto t&#xE9;ma.';
		$this->mod_success_post_delete = 'P&#x159;&#xED;sp&#x11B;vek byl &#xFA;sp&#x11B;&#x161;n&#x11B; smaz&#xE1;n.';
		$this->mod_success_post_edit = 'P&#x159;&#xED;sp&#x11B;v&#x11B;k byl &#xFA;sp&#x11B;&#x161;n&#x11B; zm&#x11B;n&#x11B;n.';
		$this->mod_success_publish = 'This topic was successfully published.'; //Translate
		$this->mod_success_split = 'T&#xE9;mata byly &#xFA;sp&#x11B;&#x161;n&#x11B; spojeny.';
		$this->mod_success_topic_delete = 'T&#xE9;ma bylo &#xFA;sp&#x11B;&#x161;n&#x11B; smaz&#xE1;no.';
		$this->mod_success_topic_edit = 'T&#xE9;ma bylo &#xFA;sp&#x11B;&#x161;n&#x11B; zm&#x11B;n&#x11B;no.';
		$this->mod_success_topic_move = 'T&#xE9;ma bylo &#xFA;sp&#x11B;&#x161;n&#x11B; p&#x159;esunuto do nov&#xE9; diskuse.';
		$this->mod_success_unpublish = 'This topic has been removed from the published list.'; //Translate
	}

	function optimize()
	{
		$this->optimize = 'Optimalizovat datab&#xE1;zi';
		$this->optimized = 'Tabulky v datab&#xE1;zi byly optimalizovan&#xE9; pro maxim&#xE1;ln&#xED; v&#xFD;kon.';
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
		$this->pm_avatar = 'Avatar';
		$this->pm_cant_del = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; smazat tuto zpr&#xE1;vu.';
		$this->pm_delallmsg = 'Smazat v&#x161;echny zpr&#xE1;vy';
		$this->pm_delete = 'Smazat';
		$this->pm_delete_selected = 'Smazat ozna&#x10D;en&#xE9; zpr&#xE1;vy';
		$this->pm_deleted = 'Zpr&#xE1;va smaz&#xE1;na.';
		$this->pm_deleted_all = 'Zpr&#xE1;vy smaz&#xE1;ny.';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Zpr&#xE1;va nemohla b&#xFD; odesl&#xE1;na. Ujist&#x11B;te se, &#x17E;e jste vyplnili v&#x161;echny povinn&#xE9; &#xFA;daje.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Schr&#xE1;nka';
		$this->pm_folder_new = '%s nov&#xE9;';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Od';
		$this->pm_group = 'Skupina';
		$this->pm_guest = 'Jako HOST nem&#x16F;&#x17E;ete pou&#x17E;&#xED;vat Messenger. Pros&#xED;m p&#x159;ihla&#x161;te se nebo se zaregistrujte.';
		$this->pm_joined = 'Zalo&#x17E;eno';
		$this->pm_messenger = 'Messenger';
		$this->pm_msgtext = 'Text zpr&#xE1;vy';
		$this->pm_multiple = 'V&#xED;ce p&#x159;&#xED;jemc&#x16F; mezi sebou odd&#x11B;lte st&#x159;edn&#xED;kem - ;';
		$this->pm_no_folder = 'Mus&#xED;te vybrat adres&#xE1;&#x159;.';
		$this->pm_no_member = '&#x17E;&#xE1;dn&#xFD; &#x10D;len nebyl nalezen pod t&#xED;mto ID.';
		$this->pm_no_number = '&#x17E;&#xE1;dn&#xE1; zpr&#xE1;va nebyla nalezena pod t&#xED;mto &#x10D;&#xED;slem.';
		$this->pm_no_title = '&#x17E;&#xE1;dn&#xFD; p&#x159;edm&#x11B;t';
		$this->pm_nomsg = 'V t&#xE9;to slo&#x17E;ce nejsou &#x17E;&#xE1;dn&#xE9; zpr&#xE1;vy.';
		$this->pm_noview = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; prohl&#xED;&#x17E;et tuto zpr&#xE1;vu.';
		$this->pm_offline = 'Tento &#x10D;len je nyn&#xED; nep&#x159;&#xED;tomen';
		$this->pm_online = 'Tento &#x10D;len je nyn&#xED; p&#x159;&#xED;tomen';
		$this->pm_personal = 'Osobn&#xED; Messenger';
		$this->pm_personal_msging = 'Osobn&#xED; Messaging';
		$this->pm_pm = 'Soukrom&#xE1; zpr&#xE1;va';
		$this->pm_posts = 'P&#x159;&#xED;sp&#x11B;vk&#x16F;';
		$this->pm_preview = 'N&#xE1;hled';
		$this->pm_recipients = 'P&#x159;&#xED;jemci';
		$this->pm_reply = 'Odpov&#x11B;&#x10F;';
		$this->pm_send = 'Poslat';
		$this->pm_sendamsg = 'Poslat priv&#xE1;tn&#xED; zpr&#xE1;vu';
		$this->pm_sendingpm = 'Poslat priv&#xE1;tn&#xED; zpr&#xE1;vu';
		$this->pm_sendon = 'Posl&#xE1;no';
		$this->pm_success = 'Va&#x161;e zpr&#xE1;va byla &#xFA;sp&#x11B;&#x161;n&#x11B; odesl&#xE1;na.';
		$this->pm_sure_del = 'Jste si jisti, &#x17E;e chcete smazat tuto zpr&#xE1;vu?';
		$this->pm_sure_delall = 'Jste si jisti, &#x17E;e chcete smazat v&#x161;echny zpr&#xE1;vy v t&#xE9;to slo&#x17E;ce?';
		$this->pm_title = 'P&#x159;edm&#x11B;t';
		$this->pm_to = 'Pro';
	}

	function post()
	{
		$this->post_attach = 'P&#x159;&#xED;lohy';
		$this->post_attach_add = 'P&#x159;idat p&#x159;&#xED;lohu';
		$this->post_attach_disrupt = 'P&#x159;id&#xE1;n&#xED;m nebo odebr&#xE1;n&#xED;m p&#x159;&#xED;lohy nenaru&#x161;&#xED;te V&#xE1;&#x161; p&#x159;&#xED;sp&#x11B;vek.';
		$this->post_attach_failed = 'Chyba p&#x159;i n&#xE1;hr&#xE1;v&#xE1;n&#xED; p&#x159;&#xED;lohy. Soubor neexistuje.';
		$this->post_attach_not_allowed = 'Nem&#x16F;&#x17E;ete p&#x159;ilo&#x17E;it soubor tohoto typu.';
		$this->post_attach_remove = 'Odstranit p&#x159;&#xED;lohu';
		$this->post_attach_too_large = 'P&#x159;&#xED;loha je p&#x159;&#xED;li&#x161; velk&#xE1; (max. %d KB).';
		$this->post_cant_create = 'Jako host nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; vytv&#xE1;&#x159;et t&#xE9;mata. Pros&#xED;m p&#x159;ihla&#x161;te se nebo se zaregistrujte.';
		$this->post_cant_create1 = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; vytv&#xE1;&#x159;et t&#xE9;mata.';
		$this->post_cant_enter = 'V&#xE1;&#x161; hlas nemohl b&#xFD;t zapo&#x10D;&#xED;t&#xE1;n. bu&#x10F; ste ji&#x17E; hlasovali, or nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; hlasovat.';
		$this->post_cant_poll = 'Jako host nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; vytv&#xE1;&#x159;et t&#xE9;ma s anketou. Pros&#xED;m p&#x159;ihla&#x161;te se nebo se zaregistrujte.';
		$this->post_cant_poll1 = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; vytv&#xE1;&#x159;et t&#xE9;ma s anketou.';
		$this->post_cant_reply = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; odpov&#xED;dat na t&#xE9;ma v t&#xE9;to diskusi.';
		$this->post_cant_reply1 = 'Jako host nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; odpov&#xED;dat na t&#xE9;mata. Mus&#xED;te b&#xFD;t zaregistrov&#xE1;ni, abyste mohli zas&#xED;lat p&#x159;&#xED;sp&#x11B;vky.';
		$this->post_cant_reply2 = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; odpov&#xED;dat na t&#xE9;mata.';
		$this->post_closed = 'Toto t&#xE9;ma bylo zav&#x159;eno.';
		$this->post_create_poll = 'Vytvo&#x159;it t&#xE9;ma s anketou';
		$this->post_create_topic = 'Vytvo&#x159;it t&#xE9;ma';
		$this->post_creating = 'Vytvo&#x159;it t&#xE9;ma';
		$this->post_creating_poll = 'Vytvo&#x159;it t&#xE9;ma s anketou';
		$this->post_flood = 'Odpov&#xED;dal(a) jste v p&#x159;ede&#x161;l&#xFD;ch  %s vte&#x159;in&#xE1;ch, nyn&#xED; je&#x161;t&#x11B; nem&#x16F;&#x17E;ete odeslat dal&#x161;&#xED; p&#x159;&#xED;sp&#x11B;vek.<br /><br />Pros&#xED;m zkuste to za n&#x11B;kolik vte&#x159;in.';
		$this->post_guest = 'Host';
		$this->post_icon = 'Ikonka t&#xE9;matu';
		$this->post_last_five = 'Posledn&#xED;ch 5 p&#x159;&#xED;sp&#x11B;vk&#x16F;';
		$this->post_length = 'Zkontrolovat d&#xE9;lku';
		$this->post_msg = 'Zpr&#xE1;va';
		$this->post_must_msg = 'Mus&#xED;te napsat n&#x11B;jak&#xFD; text, kdy&#x17E; chcete zalo&#x17E;it nov&#xE9; t&#xE9;ma.';
		$this->post_must_options = 'Mus&#xED;te ur&#x10D;it volby, kdy&#x17E; chtete zalo&#x17E;it nov&#xE9; t&#xE9;ma s anketou.';
		$this->post_must_title = 'Mus&#xED;te vlo&#x17E;it n&#xE1;zev nov&#xE9;ho t&#xE9;matu, kdy&#x17E; ho chcete zalo&#x17E;it.';
		$this->post_new_poll = 'Nov&#xE1; anketa';
		$this->post_new_topic = 'Nov&#xE9; t&#xE9;ma';
		$this->post_no_forum = '&#x17E;&#xE1;dn&#xE9; t&#xE9;ma nebylo nalezeno.';
		$this->post_no_topic = '&#x17E;&#xE1;dn&#xE9; t&#xE9;ma nebylo vybr&#xE1;no.';
		$this->post_no_vote = 'Mus&#xED;te vybrat mo&#x17E;nosti hlasov&#xE1;n&#xED; pro anketu.';
		$this->post_option_emoticons = 'P&#x159;ev&#xE9;st textov&#xE9; "smajl&#xED;ky" na obr&#xE1;zkov&#xE9;?';
		$this->post_option_global = 'Ud&#x11B;lat toto t&#xE9;ma glob&#xE1;ln&#xED;m?';
		$this->post_option_mbcode = 'Form&#xE1;tovat MbCodem? (doporu&#x10D;eno)';
		$this->post_optional = 'voliteln&#xE9;';
		$this->post_options = 'Volby';
		$this->post_poll_options = 'Volby ankety';
		$this->post_poll_row = 'Jedna mo&#x17E;nost na ka&#x17E;d&#xFD; &#x159;&#xE1;dek';
		$this->post_posted = 'Posl&#xE1;no';
		$this->post_posting = 'Zapo&#x10D;&#xED;t&#xE1;no';
		$this->post_preview = 'N&#xE1;hled';
		$this->post_reply = 'Odeslat';
		$this->post_reply_topic = 'Odpov&#x11B;d&#x11B;t na t&#xE9;ma';
		$this->post_replying = 'Odpov&#x11B;d&#x11B;t na t&#xE9;ma';
		$this->post_replying1 = 'Odpov&#x11B;d&#x11B;t';
		$this->post_too_many_options = 'Mus&#xED; b&#xFD;t mezi 2 a %d volbami k hlasov&#xE1;n&#xED;.';
		$this->post_topic_detail = 'Popis t&#xE9;matu';
		$this->post_topic_title = 'N&#xE1;zev t&#xE9;matu';
		$this->post_view_topic = 'Prohl&#xE9;dnout cel&#xE9; t&#xE9;ma';
		$this->post_voting = 'Hlasov&#xE1;n&#xED;';
	}

	function printer()
	{
		$this->printer_back = 'Zp&#x11B;t';
		$this->printer_not_found = 'T&#xE9;ma  nebylo nalezeno. Bu&#x10F; bylo smaz&#xE1;no, p&#x159;esunuto, nebo neexistuje.';
		$this->printer_not_found_title = 'T&#xE9;ma nenalezeno';
		$this->printer_perm_topics = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; prohl&#xED;&#x17E;et t&#xE9;ma.';
		$this->printer_perm_topics_guest = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; prohl&#xED;&#x17E;et t&#xE9;ma. Nejprve se mus&#xED;te zaregistrovat.';
		$this->printer_posted_on = 'Posl&#xE1;no';
		$this->printer_send = 'Poslat na tisk';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM';
		$this->profile_av_sign = 'Avatar a podpis';
		$this->profile_avatar = 'Avatar';
		$this->profile_bday = 'V&#x11B;k / narozeniny';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'E-mailov&#xE1; adresa';
		$this->profile_fav = 'Obl&#xED;ben&#xE9; f&#xF3;rum';
		$this->profile_fav_forum = '%s (%d%% ze v&#x161;ech p&#x159;&#xED;sp&#x11B;vk&#x16F; u&#x17E;ivatele)';
		$this->profile_gtalk = 'GTalk &#xFA;&#x10D;et';
		$this->profile_icq_uin = 'ICQ';
		$this->profile_info = 'Informace';
		$this->profile_interest = 'Z&#xE1;jmy';
		$this->profile_joined = 'Zalo&#x17E;eno';
		$this->profile_last_post = 'Posledn&#xED; p&#x159;&#xED;sp&#x11B;vek';
		$this->profile_list = 'Seznam &#x10D;len&#x16F;';
		$this->profile_location = 'Bydli&#x161;t&#x11B;';
		$this->profile_member = 'U&#x17E;ivatelsk&#xE1; skupina';
		$this->profile_member_title = '&#x10D;lensk&#xFD; titul';
		$this->profile_msn = 'MSN';
		$this->profile_must_user = 'Abyste mohli prohl&#xED;&#x17E;et profil, mus&#xED;te nejprve vybrat n&#x11B;jak&#xE9;ho u&#x17E;ivatele.';
		$this->profile_no_member = 'Pod t&#xED;mto ID nebyl nalezen &#x17E;&#xE1;dny &#x10D;len. Je mo&#x17E;n&#xE9;, &#x17E;e jeho &#xFA;&#x10D;et byl smaz&#xE1;n.';
		$this->profile_none = '[ &#x17E;&#xE1;dn&#xFD; ]';
		$this->profile_not_post = 'je&#x161;t&#x11B; nep&#x159;isp&#xED;val(a).';
		$this->profile_offline = 'Tento &#x10D;len je nyn&#xED; nep&#x159;&#xED;tomen';
		$this->profile_online = 'Tento &#x10D;len je nyn&#xED; p&#x159;&#xED;tomen';
		$this->profile_pm = 'Priv&#xE1;tn&#xED; zpr&#xE1;va';
		$this->profile_postcount = '%s celkem, %s za den';
		$this->profile_posts = 'Celkem p&#x159;&#xED;sp&#x11B;vk&#x16F;';
		$this->profile_private = '[ Osobn&#xED; ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Podpis';
		$this->profile_unkown = '[ Nezn&#xE1;m&#xFD; ]';
		$this->profile_view_profile = 'Prohl&#xE9;dnout profil';
		$this->profile_www = 'WWW str&#xE1;nky';
		$this->profile_yahoo = 'Yahoo';
	}

	function prune()
	{
		$this->prune_action = 'Prune action to take'; //Translate
		$this->prune_age_day = '1 den';
		$this->prune_age_eighthours = '8 hodin';
		$this->prune_age_hour = '1 hodina';
		$this->prune_age_month = '1 m&#x11B;s&#xED;c';
		$this->prune_age_threemonths = '3 m&#x11B;s&#xED;ce';
		$this->prune_age_week = '1 t&#xFD;den';
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
		$this->recent_active = 'Aktivn&#xED; t&#xE9;mata od va&#x161;&#xED; n&#xE1;v&#x161;t&#x11B;vy';
		$this->recent_by = 'Od';
		$this->recent_can_post = 'V tomto f&#xF3;ru m&#x16F;&#x17E;ete odpov&#xED;dat.';
		$this->recent_can_topics = 'V tomto f&#xF3;ru m&#x16F;&#x17E;ete prohl&#xED;&#x17E;et t&#xE9;mata.';
		$this->recent_cant_post = 'V tomto f&#xF3;ru nem&#x16F;&#x17E;ete odpov&#xED;dat. Pros&#xED;m, zaregistrujte se.';
		$this->recent_cant_topics = 'V tomto f&#xF3;ru nem&#x16F;&#x17E;ete prohl&#xED;&#x17E;et t&#xE9;mata. Pros&#xED;m, zaregistrujte se.';
		$this->recent_dot = 'te&#x10D;ka';
		$this->recent_dot_detail = 'ukazuje, &#x17E;e jste v tomto f&#xF3;ru odpov&#xED;dal(a)';
		$this->recent_forum = 'F&#xF3;rum';
		$this->recent_guest = 'Host';
		$this->recent_hot = '"HOT"';
		$this->recent_icon = 'Ikonka zpr&#xE1;vy';
		$this->recent_jump = 'P&#x159;esko&#x10D;it na nejnov&#x11B;j&#x161;&#xED; p&#x159;&#xED;sp&#x11B;vek v tomto t&#xE9;matu.';
		$this->recent_last = 'Posledn&#xED; p&#x159;&#xED;sp&#x11B;vek';
		$this->recent_locked = 'Zamknuto';
		$this->recent_moved = 'P&#x159;esunuto';
		$this->recent_msg = '%s Zpr&#xE1;va';
		$this->recent_new = 'Nov&#xE9;';
		$this->recent_new_poll = 'Vytvo&#x159;it nov&#xE9; t&#xE9;ma s anketou';
		$this->recent_new_topic = 'Vytvo&#x159;it nov&#xE9; t&#xE9;ma';
		$this->recent_no_topics = 'Ve f&#xF3;ru nejsou &#x17E;&#xE1;dn&#xE9; p&#x159;&#xED;sp&#x11B;vky k zobrazen&#xED;.';
		$this->recent_noexist = 'F&#xF3;rum neexistuje.';
		$this->recent_nopost = '&#x17E;&#xE1;dn&#xE9; p&#x159;&#xED;sp&#x11B;vky';
		$this->recent_not = 'Ne';
		$this->recent_noview = 'Nem&#xE1;te opravn&#x11B;n&#xED; prohl&#xED;&#x17E;et f&#xF3;rum.';
		$this->recent_pages = 'Str&#xE1;nky';
		$this->recent_pinned = 'D&#x16F;le&#x17E;it&#xE9;';
		$this->recent_pinned_topic = 'Zapinov&#xE1;n&#xE9; t&#xE9;ma';
		$this->recent_poll = 'Anketa';
		$this->recent_regfirst = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; prohl&#xED;&#x17E;et f&#xF3;rum. Nejprve se mus&#xED;te zaregistrovat.';
		$this->recent_replies = 'Odpov&#x11B;d&#xED;';
		$this->recent_starter = 'Zalo&#x17E;il(a)';
		$this->recent_sub = 'Sub-f&#xF3;rum';
		$this->recent_sub_last_post = 'Posledn&#xED; p&#x159;&#xED;sp&#x11B;vek';
		$this->recent_sub_replies = 'Odpov&#x11B;d&#xED;';
		$this->recent_sub_topics = 'T&#xE9;mat';
		$this->recent_subscribe = 'Informovat mn&#x11B; e-mailem o nov&#xFD;ch p&#x159;&#xED;sp&#x11B;vc&#xED;ch';
		$this->recent_topic = 'T&#xE9;ma';
		$this->recent_views = 'Schl&#xE9;dnuto';
		$this->recent_write_topics = 'V tomto f&#xF3;ru m&#x16F;&#x17E;ete vytv&#xE1;&#x159;et t&#xE9;mata.';
	}

	function register()
	{
		$this->register_activated = 'V&#xE1;&#x161; &#xFA;&#x10D;et byl aktivov&#xE1;n!';
		$this->register_activating = 'Aktivace &#xFA;&#x10D;tu';
		$this->register_activation_error = 'P&#x159;i aktivaci Va&#x161;eho &#xFA;&#x10D;tu nastala chyba. Zkontrolujte, zda aktiva&#x10D;n&#xED; e-mail obsahuje celou URL adresu. Pokud pot&#xED;&#x17E;e p&#x159;etrvaj&#xED;, kontaktujte administr&#xE1;tora tohoto f&#xF3;ra.';
		$this->register_confirm_passwd = 'Potvr&#x10F;te heslo';
		$this->register_done = 'Registrace prob&#x11B;hla &#xFA;sp&#x11B;&#x161;n&#x11B;. Nyn&#xED; se pros&#xED;m p&#x159;ihla&#x161;te.';
		$this->register_email = 'E-mailov&#xE1; adresa';
		$this->register_email_invalid = 'V&#xE1;mi zadan&#xE1; e-mailov&#xE1; adresa je neplatn&#xE1;.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Pros&#xED;m otev&#x159;ete n&#xE1;sleduj&#xED;c&#xED; odkaz neob jej vlo&#x17E;te do va&#x161;eho internetov&#xE9;ho prohl&#xED;&#x17E;e&#x10D;e:';
		$this->register_email_used = 'V&#xE1;mi zadanou e-mailovou adresu ji&#x17E; pou&#x17E;&#xED;v&#xE1; jin&#xFD; &#x10D;len.';
		$this->register_fields = 'Nejsou vypln&#x11B;ny v&#x161;echny &#xFA;daje.';
		$this->register_flood = 'Ji&#x17E; jste zaregistrov&#xE1;n.';
		$this->register_image = 'Pros&#xED;m zadejte text, kter&#xFD; vid&#xED;te na obr&#xE1;zku.';
		$this->register_image_invalid = 'Mus&#xED;te zadat text, kter&#xFD; vid&#xED;te na obr&#xE1;zku.';
		$this->register_initiated = 'This request was initiated from IP:'; //Translate
		$this->register_must_activate = '&#x17E;&#xE1;dost o registraci byla pod&#xE1;na. Na adresu %s byl zasl&#xE1;n e-mail s informacemi, jak aktivovat V&#xE1;&#x161; &#xFA;&#x10D;et. Dokud nebude &#xFA;&#x10D;et aktivov&#xE1;n, budete m&#xED;t na f&#xF3;ru omezen&#xE9; n&#x11B;kter&#xE9; funkce.';
		$this->register_name_invalid = 'V&#xE1;mi zadan&#xE9; jm&#xE9;no je p&#x159;&#xED;li&#x161; dlouh&#xE9;.';
		$this->register_name_taken = 'V&#xE1;mi zadan&#xE9; jm&#xE9;no je ji&#x17E; obsazeno.';
		$this->register_new_user = 'U&#x17E;ivatelsk&#xE9; jm&#xE9;no';
		$this->register_pass_invalid = 'V&#xE1;mi zadan&#xE9; heslo je neplatn&#xE9;. Ujist&#x11B;te se, &#x17E;e pou&#x17E;&#xED;vat&#xE9; jen platn&#xE9; znaky - p&#xED;smena, &#x10D;&#xED;slice, poml&#x10D;ky, podrt&#x17E;&#xED;tka, nebo mezery a heslo m&#xE1; alespo&#x148; 5 znak&#x16F;.';
		$this->register_pass_match = 'V&#xE1;mi zadan&#xE9; heslo neodpov&#xED;d&#xE1;.';
		$this->register_passwd = 'Heslo';
		$this->register_reg = 'Registrovat!';
		$this->register_reging = 'Registrace';
		$this->register_requested = '&#x17E;&#xE1;dost o aktivaci &#xFA;&#x10D;tu pro:';
		$this->register_tos = 'Podm&#xED;nky registrace';
		$this->register_tos_i_agree = 'Souhlas&#xED;m s v&#xFD;&#x161;e uveden&#xFD;mi podm&#xED;nkami';
		$this->register_tos_not_agree = 'You did not agree to the terms.'; //Translate
		$this->register_tos_read = 'pros&#xED;m p&#x159;e&#x10D;t&#x11B;te si n&#xE1;sleduj&#xED;c&#xED; podm&#xED;nky registrace';
	}

	function rssfeed()
	{
		$this->rssfeed_cannot_find_forum = 'The forum does not appear to exist'; //Translate
		$this->rssfeed_cannot_find_topic = 'The topic does nto appear to exist'; //Translate
		$this->rssfeed_cannot_read_forum = 'You do not have permission to read this forum'; //Translate
		$this->rssfeed_cannot_read_topic = 'You do not have permission to read this topic'; //Translate
		$this->rssfeed_error = 'Chyba';
		$this->rssfeed_forum = 'F&#xF3;rum:';
		$this->rssfeed_posted_by = 'P&#x159;&#xED;sp&#x11B;vek od';
		$this->rssfeed_topic = 'T&#xE9;ma:';
	}

	function search()
	{
		$this->search_advanced = 'Roz&#x161;&#xED;&#x159;en&#xE9; hled&#xE1;n&#xED;';
		$this->search_avatar = 'Avatar';
		$this->search_basic = 'Z&#xE1;kl&#xE1;dn&#xED; hled&#xE1;n&#xED;';
		$this->search_characters = 'znak&#x16F; z p&#x159;&#xED;sp&#x11B;vku';
		$this->search_day = 'den';
		$this->search_days = 'dny';
		$this->search_exact_name = 'p&#x159;esn&#xE9; zn&#x11B;n&#xED;';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Vyhledat';
		$this->search_forum = 'F&#xF3;rum';
		$this->search_group = 'Skupina';
		$this->search_guest = 'Host';
		$this->search_in = 'Hledat v';
		$this->search_in_posts = 'Hledat jen v p&#x159;&#xED;sp&#x11B;vc&#xED;ch';
		$this->search_ip = 'IP';
		$this->search_joined = 'Zalo&#x17E;eno';
		$this->search_level = '&#xFA;rove&#x148;';
		$this->search_match = 'vyhledat jen p&#x159;esn&#x11B; zadan&#xFD; v&#xFD;raz (nap&#x159;. zad&#xE1;te-li "AIM", ve v&#xFD;sledc&#xED;ch budou jen p&#x159;&#xED;sp&#x11B;vky, kter&#xE9; obsahuj&#xED; pr&#xE1;v&#x11B; slovo "AIM"';
		$this->search_matches = 'Ozna&#x10D;en&#xE9;';
		$this->search_month = 'm&#x11B;s&#xED;c';
		$this->search_months = 'm&#x11B;s&#xED;ce';
		$this->search_mysqldoc = 'Dokumentace MySQL';
		$this->search_newer = 'nov&#x11B;j&#x161;&#xED;ch';
		$this->search_no_results = '&#x17E;&#xE1;dn&#xE9; v&#xFD;sledky nebyly nalezeny.';
		$this->search_no_words = 'Mus&#xED;te ur&#x10D;it alespo&#x148; jednu podm&#xED;nku pro vyhled&#xE1;v&#xE1;n&#xED;.<br/><br/>Ka&#x17E;d&#xE1; podm&#xED;nka mus&#xED; obsahovat alespo&#x148; 3 znaky, (v&#x10D;etn&#x11B; p&#xED;smen, &#x10D;&#xED;sel, apostrof&#x16F;, a podtr&#x17E;&#xED;tek).';
		$this->search_offline = 'Tento &#x10D;len je nyn&#xED; nep&#x159;&#xED;tomen';
		$this->search_older = 'star&#x161;&#xED;ch';
		$this->search_online = 'Tento &#x10D;len je nyn&#xED; p&#x159;&#xED;tomen';
		$this->search_only_display = 'Zobrazit jen prvn&#xED;ch';
		$this->search_partial_name = '&#x10D;&#xE1;ste&#x10D;n&#xE9; zn&#x11B;n&#xED;';
		$this->search_post_icon = 'Ikona p&#x159;&#xED;sp&#x11B;vku';
		$this->search_posted_on = 'Posl&#xE1;no';
		$this->search_posts = 'P&#x159;&#xED;sp&#x11B;vky';
		$this->search_posts_by = 'Jen v p&#x159;&#xED;sp&#x11B;vc&#xED;ch od';
		$this->search_regex = 'vyhledat i slova obsahuj&#xED;c&#xED; hledan&#xFD; v&#xFD;raz (nap&#x159;. zad&#xE1;te-li "hledat", ve v&#xFD;sledc&#xED;ch budou p&#x159;&#xED;sp&#x11B;vky obsahuj&#xED;c&#xED; slovo "hledat", ale i "vyhledat", "hled&#xE1;n&#xED;" atd.';
		$this->search_regex_failed = 'Hledan&#xE9;mu v&#xFD;razu nic neodpov&#xED;d&#xE1;. Prohl&#xE9;dn&#x11B;te si pros&#xED;m dokumentaci MySQL pro n&#xE1;pov&#x11B;du "p&#x159;esn&#xE9;ho zn&#x11B;n&#xED;".';
		$this->search_relevance = 'Hledan&#xE9;mu v&#xFD;razu odpov&#xED;d&#xE1; na %d%%';
		$this->search_replies = 'P&#x159;&#xED;sp&#x11B;vky';
		$this->search_result = 'Vyhledat v&#xFD;sledky';
		$this->search_search = 'Vyhledat';
		$this->search_select_all = 'Ozna&#x10D;it v&#x161;e';
		$this->search_show_posts = 'Zobrazit jen p&#x159;&#xED;sp&#x11B;vky (jinak se zobraz&#xED; t&#xE9;ma cel&#xE9; t&#xE9;ma)';
		$this->search_sound = 'vyhledat i slova podobn&#xE1; zadan&#xE9;mu v&#xFD;razu';
		$this->search_starter = 'Zalo&#x17E;il(a)';
		$this->search_than = 'ne&#x17E;';
		$this->search_topic = 'T&#xE9;ma';
		$this->search_unreg = 'Neregistrovan&#xED;';
		$this->search_week = 't&#xFD;den';
		$this->search_weeks = 't&#xFD;dny';
		$this->search_year = 'rok';
	}

	function settings()
	{
		$this->settings = 'Nastaven&#xED;';
		$this->settings_active = 'Active Users Settings'; //Translate
		$this->settings_allow = 'Povolit'; //Translate
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
		$this->topic_attached = 'P&#x159;&#xED;loha:';
		$this->topic_attached_downloads = 'x shl&#xE9;dnuto';
		$this->topic_attached_filename = 'Soubor:';
		$this->topic_attached_image = 'P&#x159;ilo&#x17E;en&#xFD; obr&#xE1;zek:';
		$this->topic_attached_perm = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; st&#xE1;hnout tento soubor.';
		$this->topic_attached_size = 'Velikost:';
		$this->topic_attached_title = 'P&#x159;&#xED;loha';
		$this->topic_avatar = 'Avatar';
		$this->topic_bottom = 'P&#x159;ej&#xED;t dol&#x16F; na str&#xE1;nku';
		$this->topic_create_poll = 'Vytvo&#x159;it nov&#xE9; t&#xE9;ma s anketou';
		$this->topic_create_topic = 'Vytvo&#x159;it nov&#xE9; t&#xE9;ma';
		$this->topic_delete = 'Smazat';
		$this->topic_delete_post = 'Smazat tento p&#x159;&#xED;sp&#x11B;vek';
		$this->topic_edit = 'Editovat';
		$this->topic_edit_post = 'Editovat tento p&#x159;&#xED;sp&#x11B;vek';
		$this->topic_edited = 'Posledn&#xED; zm&#x11B;na: %s od %s';
		$this->topic_error = 'Chyba';
		$this->topic_group = 'Skupina';
		$this->topic_guest = 'Host';
		$this->topic_ip = 'IP';
		$this->topic_joined = 'Zalo&#x17E;eno';
		$this->topic_level = '&#xFA;rove&#x148;';
		$this->topic_links_aim = 'Poslat AIM zpr&#xE1;vu u&#x17E;ivateli %s';
		$this->topic_links_email = 'Poslat e-mail u&#x17E;ivateli %s';
		$this->topic_links_gtalk = 'Poslat GTalk zpr&#xE1;vu u&#x17E;ivateli %s';
		$this->topic_links_icq = 'Poslat ICQ zpr&#xE1;vu u&#x17E;ivateli %s';
		$this->topic_links_msn = 'Poslat MSN zpr&#xE1;vu u&#x17E;ivateli %s';
		$this->topic_links_pm = 'Poslat priv&#xE1;tn&#xED; zpr&#xE1;vu u&#x17E;ivateli %s';
		$this->topic_links_web = 'Otev&#x159;&#xED;t www str&#xE1;nky u&#x17E;ivatele %s';
		$this->topic_links_yahoo = 'Proslat zpr&#xE1;vu %s p&#x159;es Yahoo! Messenger';
		$this->topic_lock = 'Zamknout';
		$this->topic_locked = 'T&#xE9;ma zam&#x10D;eno';
		$this->topic_move = 'P&#x159;esunout';
		$this->topic_new_post = 'P&#x159;&#xED;sp&#x11B;vek nen&#xED; p&#x159;e&#x10D;ten';
		$this->topic_newer = 'Nov&#x11B;j&#x161;&#xED; t&#xE9;ma';
		$this->topic_no_newer = 'Nen&#xED; tu &#x17E;&#xE1;dn&#xE9; nov&#x11B;j&#x161;&#xED; t&#xE9;ma.';
		$this->topic_no_older = 'Nen&#xED; tu &#x17E;&#xE1;dn&#xE9; star&#x161;&#xED; t&#xE9;ma.';
		$this->topic_no_votes = 'V t&#xE9;to anket&#x11B; nejsou zaznamen&#xE1;ny &#x17E;&#xE1;dn&#xE9; hlasy.';
		$this->topic_not_found = 'T&#xE9;ma nenalezeno';
		$this->topic_not_found_message = 'T&#xE9;ma  nebylo nalezeno. Bu&#x10F; bylo smaz&#xE1;no, p&#x159;esunuto, nebo neexistuje.';
		$this->topic_offline = 'Tento &#x10D;len je nyn&#xED; nep&#x159;&#xED;tomen';
		$this->topic_older = 'Star&#x161;&#xED; t&#xE9;ma';
		$this->topic_online = 'Tento &#x10D;len je nyn&#xED; p&#x159;&#xED;tomen';
		$this->topic_options = 'Volby t&#xE9;matu';
		$this->topic_pages = 'Str&#xE1;nky';
		$this->topic_perm_view = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; prohl&#xED;&#x17E;et t&#xE9;mata.';
		$this->topic_perm_view_guest = 'Nem&#xE1;te opr&#xE1;vn&#x11B;n&#xED; prohl&#xED;&#x17E;et t&#xE9;mata. Mus&#xED;te se nejprve zaregistrovat.';
		$this->topic_pin = 'Zv&#xFD;raznit';
		$this->topic_posted = 'Posl&#xE1;no';
		$this->topic_posts = 'P&#x159;&#xED;sp&#x11B;vk&#x16F;';
		$this->topic_print = 'Verze pro tisk';
		$this->topic_publish = 'Publish'; //Translate
		$this->topic_qr_emoticons = 'Smajl&#xED;ci';
		$this->topic_qr_open_emoticons = 'Open Clickable Emoticons'; //Translate
		$this->topic_qr_open_mbcode = 'Otev&#x159;&#xED;t MBCode';
		$this->topic_quickreply = 'Rychl&#xE1; odpov&#x11B;&#x10F;';
		$this->topic_quote = 'Do odpov&#x11B;di "ocitovat" tento p&#x159;&#xED;sp&#x11B;vek';
		$this->topic_reply = 'Odpov&#x11B;d&#x11B;t na t&#xE9;ma';
		$this->topic_split = 'Spojit';
		$this->topic_split_finish = 'Dokon&#x10D;it cel&#xE9; spojen&#xED;';
		$this->topic_split_keep = 'Nep&#x159;esouvat tento p&#x159;&#xED;sp&#x11B;vek';
		$this->topic_split_move = 'P&#x159;esunout tento p&#x159;&#xED;sp&#x11B;vek';
		$this->topic_subscribe = 'Zaslat informace na m&#x16F;j e-mail, pokud se zde objev&#xED; nov&#xFD; p&#x159;&#xED;sp&#x11B;vek';
		$this->topic_top = 'J&#xED;t na za&#x10D;&#xE1;tek str&#xE1;nky';
		$this->topic_unlock = 'Odemknout';
		$this->topic_unpin = 'Zru&#x161;it zv&#xFD;razn&#x11B;n&#xED;';
		$this->topic_unpublish = 'UnPublish'; //Translate
		$this->topic_unpublished = 'This topic is classed as unpublished so you do not have permission to view it.'; //Translate
		$this->topic_unreg = 'Neregistrov&#xE1;n';
		$this->topic_view = 'Prohl&#xE9;dnout v&#xFD;sledky';
		$this->topic_viewing = 'Prohl&#xED;&#x17E;et t&#xE9;ma';
		$this->topic_vote = 'Hlasovat';
		$this->topic_vote_count_plur = '%d hlas&#x16F;';
		$this->topic_vote_count_sing = '%d hlas';
		$this->topic_votes = 'hlas&#x16F; celkem';
	}

	function universal()
	{
		$this->aim = 'AIM';
		$this->based_on = 'based on';
		$this->board_by = 'Od:';
		$this->charset = 'utf-8';
		$this->continue = 'Pokra&#x10D;ovat';
		$this->date_long = 'j.n.Y';
		$this->date_short = 'j.n.Y';
		$this->delete = 'Smazat';
		$this->direction = 'ltr';
		$this->edit = 'Editovat';
		$this->email = 'Email';
		$this->gtalk = 'GT';
		$this->icq = 'ICQ';
		$this->msn = 'MSN';
		$this->new_message = 'Nov&#xE1; zpr&#xE1;va';
		$this->new_poll = 'Nov&#xE1; anketa';
		$this->new_topic = 'Nov&#xE9; t&#xE9;ma';
		$this->no = 'Ne';
		$this->powered = 'Powered by';
		$this->private_message = 'PM';
		$this->quote = 'Citovat';
		$this->recount_forums = 'Recounted forums! Total topics: %d. Total posts: %d.';
		$this->reply = 'Odpove&#x10F;';
		$this->seconds = 'Vte&#x159;in';
		$this->select_all = 'Vybrat v&#x161;e';
		$this->sep_decimals = ',';
		$this->sep_thousands = '.,';
		$this->spoiler = 'Spoiler';
		$this->submit = 'Odeslat';
		$this->subscribe = 'Subscribe';
		$this->time_long = ', H:i';
		$this->time_only = 'H:i';
		$this->today = 'dnes';
		$this->website = 'WWW';
		$this->yahoo = 'Yahoo';
		$this->yes = 'Ano';
		$this->yesterday = 'v&#x10D;era';
	}

}
?>

