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
		$this->active_modules_recent = 'Kollar nya inl�gg';
		$this->active_modules_search = 'S�ker';
		$this->active_modules_topic = 'Visa �mne: %s';
		$this->active_time = 'Tid';
		$this->active_user = 'Anv�ndare';
		$this->active_users = 'Aktiva Anv�ndare';
	}

	function admin()
	{
		$this->admin_add_emoticons = 'L�gg till emoticons';
		$this->admin_add_member_titles = 'l�gg till automatiska medlemstitlar';
		$this->admin_add_templates = 'L�gg till HTML mallar';
		$this->admin_ban_ips = 'Blockera IP adresser';
		$this->admin_censor = 'Censurerade ord';
		$this->admin_create_forum = 'Skapa ett forum';
		$this->admin_create_group = 'Skapa en grupp';
		$this->admin_create_help = 'Skapa en hj�lpartikel';
		$this->admin_create_skin = 'Skapa ett skal';
		$this->admin_db = 'Databas';
		$this->admin_db_backup = 'G�r en backup av databasen';
		$this->admin_db_conn = '�ndra inst�llningar f�r anslutningen';
		$this->admin_db_optimize = 'Optimera databasen';
		$this->admin_db_query = 'K�r ett SQL kommando';
		$this->admin_db_restore = '�terst�ll en backup';
		$this->admin_delete_forum = 'Ta bort ett forum';
		$this->admin_delete_group = 'Ta bort en grupp';
		$this->admin_delete_help = 'Ta bort en hj�lp artikel';
		$this->admin_delete_member = 'Ta bort en medlem';
		$this->admin_delete_template = 'Ta bort en HTML mall';
		$this->admin_edit_emoticons = '�ndra eller ta bort emoticons';
		$this->admin_edit_forum = '�ndra ett forum';
		$this->admin_edit_group_name = '�ndra en grupps namn';
		$this->admin_edit_group_perms = '�ndra en grupps r�ttigheter';
		$this->admin_edit_help = '�ndra en hj�lpartikel';
		$this->admin_edit_member = '�ndra en medlem';
		$this->admin_edit_member_perms = '�ndra r�ttigheter f�r medlem';
		$this->admin_edit_member_titles = '�ndra eller ta bort automatiska medlemstitlar';
		$this->admin_edit_settings = '�ndra foruminst�llningar';
		$this->admin_edit_skin = '�ndra eller ta bort ett skal';
		$this->admin_edit_templates = '�ndra HTML mallar';
		$this->admin_emoticons = 'Emoticons'; //Translate
		$this->admin_export_skin = 'Exportera ett skal';
		$this->admin_fix_stats = 'Justera medlemsstatistiken';
		$this->admin_forum_order = '�ndra ordning p� forumen';
		$this->admin_forums = 'Forum och kategorier';
		$this->admin_groups = 'Grupper';
		$this->admin_heading = 'Quicksilver Forum Admin Kontrollpanel';
		$this->admin_help = 'Hj�lpartiklar';
		$this->admin_install_emoticons = 'Installera emoticons';
		$this->admin_install_skin = 'Installera ett skal';
		$this->admin_logs = 'Visa moderatorh�ndelser';
		$this->admin_mass_mail = 'Skicka e-post till dina medlemmar';
		$this->admin_members = 'Medlemmar';
		$this->admin_phpinfo = 'Visa PHP information';
		$this->admin_recount_forums = 'R�kna om �mnen och svar';
		$this->admin_settings = 'Inst�llningar';
		$this->admin_skins = 'Skal';
		$this->admin_stats = 'Statistik';
		$this->admin_upgrade_skin = 'Upgrade a Skin'; //Translate
		$this->admin_your_board = 'Ditt Forum';
	}

	function backup()
	{
		$this->backup_create = 'Skapa databasbackup';
		$this->backup_done = 'En backup av databasen har skapats i mappen "databases".';
		$this->backup_found = 'F�ljande backuper hittades i mappen "databases"';
		$this->backup_invalid = 'Backupen verkar inte vara giltig. Inga f�r�ndingar gjordes av databasen.';
		$this->backup_none = 'Inga backuper hittades i mappen "databases".';
		$this->backup_restore = '�terst�ll Backup';
		$this->backup_restore_done = '�terst�llningen av Databasen lyckades.';
		$this->backup_warning = 'Varning: Detta kommer att skriva �ver all befintlig information som anv�nds av Quicksilver Forums.';
	}

	function ban()
	{
		$this->ban = 'Blockera';
		$this->ban_banned_ips = 'Blockera IP Adresser';
		$this->ban_banned_members = 'Blockerade Medlemmar';
		$this->ban_ip = 'Blockera IP Adresser';
		$this->ban_member_explain1 = 'f�r att blockera medlemmar �ndra deras anv�ndargrupp till';
		$this->ban_member_explain2 = 'i medlemmskontrollen.';
		$this->ban_members = 'Blockera Medlemmar';
		$this->ban_nomembers = 'Det finns just nu inga blockerade medlemmar.';
		$this->ban_one_per_line = 'En adress per rad.';
		$this->ban_regex_allowed = 'Regulj�ra uttryck �r till�tna. Du kan anv�nda ett * som jokertecken f�r en eller flera siffror.';
		$this->ban_settings = 'Inst�llningar f�r Blockering';
		$this->ban_users_banned = 'Blockerade anv�ndare.';
	}

	function board()
	{
		$this->board_active_users = 'Aktiva Anv�ndare';
		$this->board_birthdays = 'Dagens F�delsedagar:';
		$this->board_bottom_page = 'G� till botten av sidan';
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
		$this->board_most_online = 'Flest anv�ndare online n�gonsin var %d %s.';
		$this->board_nobday = 'Inga medlemmar fyller �r idag.';
		$this->board_nobody = 'Det �r f�r tillf�llet inga medlemmar online.';
		$this->board_nopost = 'Inga Inl�gg';
		$this->board_noview = 'Du har inte till�telse att l�sa forumet.';
		$this->board_regfirst = 'Du har inte till�telse att l�sa forumet. Om du registrerar dig, s� kanske du kan.';
		$this->board_replies = 'Svar';
		$this->board_stats = 'Statistik';
		$this->board_stats_string = 'Hittills har %s personer registrerat sig. V�ran nyaste medlem �r: %s.<br /> Det finns %s �mnen och %s svar vilket totalt �r %s inl�gg.';
		$this->board_top_page = 'G� till toppen av sidan';
		$this->board_topics = '�mnen';
		$this->board_users = 'anv�ndare';
		$this->board_write_topics = 'Du kan l�sa och skapa �mnen i detta forum.';
	}

	function censoring()
	{
		$this->censor = 'Censurerade Ord';
		$this->censor_one_per_line = 'Ett per rad.';
		$this->censor_regex_allowed = 'Regulj�ra uttryck �r till�tna. Du kan anv�nda ett * som jokertecken f�r ett eller flera tecken.';
		$this->censor_updated = 'Listan p� ord uppdaterad.';
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
		$this->cp_custom_title = 'Egen Medlemstitel';
		$this->cp_custom_title2 = 'Detta �r ett privilegie reserverat f�r forum administrat�rer';
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
		$this->cp_gtalk = 'GTalk konto';
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
		$this->cp_skin = 'Skal';
		$this->cp_sub_change = '�ndra prenumerationer';
		$this->cp_sub_delete = 'Radera';
		$this->cp_sub_expire = 'Utg�ngsdatum';
		$this->cp_sub_name = 'Prenumerationsnamn';
		$this->cp_sub_no_params = 'Inga parametrar givna.';
		$this->cp_sub_success = 'Du prenumererar nu p� denna %s.';
		$this->cp_sub_type = 'Prenumerationstyp';
		$this->cp_sub_updated = 'Vald prenumeration har blivit raderad.';
		$this->cp_topic_option = 'Foruminst�llningar';
		$this->cp_updated = 'Profil Uppdaterad';
		$this->cp_updated1 = 'Avatar Uppdaterad';
		$this->cp_updated_prefs = 'Inst�llningar Uppdaterade';
		$this->cp_user_exists = 'En anv�ndare med den namnformateringen existerar redan.';
		$this->cp_valided = 'Ditt l�senord �r �ndrat.';
		$this->cp_view_avatar = 'Visa Avatarer?';
		$this->cp_view_emoticon = 'Visa Emoticons?';
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
		$this->emote_add = 'L�gg till Emoticons';
		$this->emote_added = 'Emoticon tillagd.';
		$this->emote_clickable = 'Klickbar';
		$this->emote_edit = '�ndra Emoticons';
		$this->emote_image = 'Bild';
		$this->emote_install = 'Installera Emoticons';
		$this->emote_install_done = 'Ominstallationen av Emoticons lyckades.';
		$this->emote_install_warning = 'Detta kommer att ta bort alla existerande emoticon inst�llningar och importera uppladdade emoticons fr�n ditt nu valda skal till databasen.';
		$this->emote_no_text = 'Ingen emoticon text gavs.';
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
		$this->forum_icon = 'Meddelandeikon';
		$this->forum_jump = 'Hoppa till nyaste inl�gg i �mnet';
		$this->forum_last = 'Senaste Inl�gg';
		$this->forum_locked = 'L�st';
		$this->forum_moved = 'Flyttad';
		$this->forum_msg = '%s Meddelande';
		$this->forum_new = 'Ny';
		$this->forum_new_poll = 'Skapa Ny Omr�stning';
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
		$this->forum_views = 'Visningar';
		$this->forum_write_topics = 'Du kan skapa nya �mnen i detta forum.';
	}

	function forums()
	{
		$this->forum_controls = 'Forum Kontroller';
		$this->forum_create = 'Skapa Forum';
		$this->forum_create_cat = 'Skapa en Kategori';
		$this->forum_created = 'Forum Skapat';
		$this->forum_default_perms = 'F�rvalda r�ttigheter';
		$this->forum_delete = 'Ta bort Forum';
		$this->forum_delete_warning = '�r du s�ker p� att du vill ta bort detta forum, dess �mnen, och dess inl�gg?<br />Denna �tg�rd kan inte �ngras.';
		$this->forum_deleted = 'Forumet har tagits bort.';
		$this->forum_description = 'Beskrivning';
		$this->forum_edit = '�ndra Forum';
		$this->forum_edited = 'Forumet har �ndrats.';
		$this->forum_empty = 'Forum namnet �r tomt. G� tillbaks och skriv i ett namn.';
		$this->forum_is_subcat = 'Detta forum �r en underkategori bara.';
		$this->forum_name = 'Namn';
		$this->forum_no_orphans = 'Du kan inte g�ra forumet f�r�ldral�st genom att ta bort dess f�r�lder.';
		$this->forum_none = 'Det finns inga forum att manipulera.';
		$this->forum_ordered = 'Forumordning Uppdaterad';
		$this->forum_ordering = '�ndra Forumordning';
		$this->forum_parent = 'Du kan inte �ndra ett forums f�r�lder p� det s�ttet.';
		$this->forum_parent_cat = 'Ovanliggande kategori';
		$this->forum_quickperm_select = 'V�lj ett existerande forum f�r att kopiera dess r�ttigheter.';
		$this->forum_quickperms = 'Snabbr�ttigheter';
		$this->forum_recount = 'R�kna om �mnen och Svar';
		$this->forum_select_cat = 'V�lj en existerande kategori f�r att skapa ett forum.';
		$this->forum_subcat = 'Underkategori';
	}

	function groups()
	{
		$this->groups_bad_format = 'Du m�tse anv�nda %s i formateringen, vilket representerar gruppens namn.';
		$this->groups_based_on = 'Baserad p�';
		$this->groups_create = 'Skapa Grupp';
		$this->groups_create_new = 'Skapa en ny anv�ndargrupp med namnet';
		$this->groups_created = 'Grupp Skapad';
		$this->groups_delete = 'Ta bort Grupp';
		$this->groups_deleted = 'Grupp Borttagen.';
		$this->groups_edit = '�ndra Grupp';
		$this->groups_edited = 'Grupp �ndrad.';
		$this->groups_formatting = 'Visa Formatering';
		$this->groups_i_confirm = 'Jag bekr�ftar att jag vill ta bort den h�r medlemsgruppen.';
		$this->groups_name = 'Namn';
		$this->groups_no_action = 'Ingen �tg�rd utf�rdes.';
		$this->groups_no_delete = 'Det finns inga egna grupper att ta bort.<br />K�rn grupperna beh�vs f�r att Quicksilver Forums ska fungera, och kan inte tas bort.';
		$this->groups_no_group = 'Ingen grupp specifierades.';
		$this->groups_no_name = 'Inget gruppnamn gavs.';
		$this->groups_only_custom = 'Notera: Du kan endats ta bort egna medlemsgrupper. K�rn grupperna beh�vs f�r att Quicksilver Forums ska fungera.';
		$this->groups_the = 'Gruppen';
		$this->groups_to_edit = 'Grupp som ska �ndras';
		$this->groups_type = 'Grupp Typ';
		$this->groups_will_be = 'kommer att tas bort.';
		$this->groups_will_become = 'Anv�ndare fr�n den borttagna gruppen kommer att bli';
	}

	function help()
	{
		$this->help_add = 'L�gg till Hj�lpartikel';
		$this->help_article = 'Hj�lpartikel Kontroll';
		$this->help_available_files = 'Hj�lp';
		$this->help_confirm = '�r du s�ker p� att du vill ta bort';
		$this->help_content = 'Artikelinneh�ll';
		$this->help_delete = 'Ta bort Hj�lpartikel';
		$this->help_deleted = 'Hj�lpartikel Borttagen.';
		$this->help_edit = '�ndra Hj�lpartikele';
		$this->help_edited = 'Hj�lpartikel uppdaterad.';
		$this->help_inserted = 'Artikel inlaggd i databasen.';
		$this->help_no_articles = 'Inga hj�lpartikelar hittades i databasen.';
		$this->help_no_title = 'Du kan inte skapa en hj�lpartikel utan titel.';
		$this->help_none = 'Det finns inga hj�lpfiler i databasen';
		$this->help_not_exist = 'Den hj�lpartikeln finns inte.';
		$this->help_select = 'V�lj en hj�lpartikel att �ndra';
		$this->help_select_delete = 'V�lj en hj�lpartikel att ta bort';
		$this->help_title = 'Titel';
	}

	function home()
	{
		$this->admin_cp_denied = 'Till�ng Nekad';
		$this->admin_cp_warning = 'Admin KP �r avst�ngd tills du har tagit bort <b>install</b> mapp, eftersom den utg�r en s�kerhets risk.';
		$this->home_choose = 'V�lj en uppgift f�r att b�rja.';
		$this->home_menu_title = 'Admin KP Meny';
	}

	function login()
	{
		$this->login_cant_logged = 'Du kunde inte loggas in. F�rs�kra dig om att ditt anv�ndarnamn och l�senord �r r�tt.<br /><br />De �r skiftl�gesk�nsliga, s� \'UsErNaMe\' �r inte samma sak som \'Username\'. Se �ven till s� att cookies �r aktiverade i din webl�sare.';
		$this->login_cookies = 'Cookies m�ste vara till�tna f�r att kunna logga in.';
		$this->login_forgot_pass = 'Jag har gl�mt mitt l�senord!';
		$this->login_header = 'Loggar In';
		$this->login_logged = 'Du �r nu inloggad.';
		$this->login_now_out = 'Du �r nu utloggad.';
		$this->login_out = 'Loggar Ut';
		$this->login_pass = 'L�senord';
		$this->login_pass_no_id = 'Det finns ingen medlem med detta namn.';
		$this->login_pass_request = 'F�r att slutf�ra �terst�llningen av l�senordet, var sn�ll och klicka p� l�nken som skickade till e-postadressen associerad med ditt konto.';
		$this->login_pass_reset = 'Nollst�ll L�senordet';
		$this->login_pass_sent = 'Ditt l�senord har nollst�llts. Det nya l�senordet har skickats till din epostadress som uppgavs i ditt anv�ndarkonto.';
		$this->login_sure = '�r du s�ker p� att du vill logga ut fr�n \'%s\'?';
		$this->login_user = 'Anv�ndarnamn';
	}

	function logs()
	{
		$this->logs_action = 'H�ndelse';
		$this->logs_deleted_post = 'Tog bort ett inl�gg';
		$this->logs_deleted_topic = 'Tog bort ett �mne';
		$this->logs_edited_post = '�ndrade ett inl�gg';
		$this->logs_edited_topic = '�ndrade ett �mne';
		$this->logs_id = 'IDs'; //Translate
		$this->logs_locked_topic = 'L�ste ett �mne';
		$this->logs_moved_from = 'fr�n forum';
		$this->logs_moved_to = 'till forum';
		$this->logs_moved_topic = 'Flyttade ett �mne';
		$this->logs_moved_topic_num = 'Flyttade �mne #';
		$this->logs_pinned_topic = 'Klistrade ett �mne';
		$this->logs_post = 'Inl�gg';
		$this->logs_time = 'Tid';
		$this->logs_topic = '�mne';
		$this->logs_unlocked_topic = 'L�ste upp ett �mne';
		$this->logs_unpinned_topic = 'Klistrade av ett �mne';
		$this->logs_user = 'Anv�ndare';
		$this->logs_view = 'Visa Moderatorh�ndelser';
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
		$this->main_mark = 'markera alla';
		$this->main_mark1 = 'Markera alla �mnen som l�sta';
		$this->main_max_load = 'Tyv�rr �r %s f�r tillf�llet otillg�nglig p.g.a. h�g belastning.';
		$this->main_members = 'medlemmar';
		$this->main_messenger = 'Snabbmeddelanden';
		$this->main_new = 'ny';
		$this->main_next = 'n�sta';
		$this->main_prev = 'f�rra';
		$this->main_queries = 'f�rfr�gningar';
		$this->main_quote = 'Citera';
		$this->main_recent = 'nya inl�gg';
		$this->main_recent1 = 'Visa nya �mnen sen ditt senaste bes�k';
		$this->main_register = 'registrera';
		$this->main_reminder = 'P�minnelse: Detta forum �r st�ngt och kan endast l�sas av administrat�rer.';
		$this->main_reminder_closed = 'Forumet �r st�ngt! det kan endast ses av administrat�rer.';
		$this->main_said = 'sade';
		$this->main_search = 's�k';
		$this->main_topics_new = 'Det finns nya inl�gg i detta forum.';
		$this->main_topics_old = 'Det finns inga nya inl�gg i detta forum.';
		$this->main_welcome = 'V�lkommen';
		$this->main_welcome_guest = 'V�lkommen!';
	}

	function mass_mail()
	{
		$this->mail = 'E-post till alla';
		$this->mail_announce = 'Tillk�nnagivande Fr�n';
		$this->mail_groups = 'Mottagangde Grupper';
		$this->mail_members = 'medlemmar.';
		$this->mail_message = 'Meddelande';
		$this->mail_select_all = 'V�lj Alla';
		$this->mail_send = 'Skicka E-post';
		$this->mail_sent = 'Ditt meddelande har skickats till';
	}

	function member_control()
	{
		$this->mc = 'Medlemskontroll';
		$this->mc_confirm = '�r du s�ker p� att du vill ta bort';
		$this->mc_delete = 'Ta bort Medlem';
		$this->mc_deleted = 'Medlem Borttagen.';
		$this->mc_edit = '�ndra Medlem';
		$this->mc_edited = 'Medlem Uppdaterad';
		$this->mc_email_invaid = 'The email address you entered is invalid.'; //Translate
		$this->mc_err_updating = 'Error Updating Profile'; //Translate
		$this->mc_find = 'Hitta medlemmar vars namn inneh�ller';
		$this->mc_found = 'F�ljande medlemmar hittades. Var sn�ll och v�lj en.';
		$this->mc_guest_needed = 'G�stkontot beh�vs f�r att Quicksilver Forumet ska fungera.';
		$this->mc_not_found = 'Inga medlemmar som matchade hittades';
		$this->mc_user_aim = 'AIM Namn';
		$this->mc_user_avatar = 'Visningsbild';
		$this->mc_user_avatar_height = 'Visningsbild H�jd';
		$this->mc_user_avatar_type = 'Visningsbild Typ';
		$this->mc_user_avatar_width = 'Visningsbild Bredd';
		$this->mc_user_birthday = 'F�delsedag';
		$this->mc_user_email = 'E-post Adress';
		$this->mc_user_email_show = 'E-posten �r Publik';
		$this->mc_user_group = 'Grupp';
		$this->mc_user_gtalk = 'GTalk Konto';
		$this->mc_user_homepage = 'Hemsida';
		$this->mc_user_icq = 'ICQ Nummer';
		$this->mc_user_id = 'Anv�ndar ID';
		$this->mc_user_interests = 'Intressen';
		$this->mc_user_joined = 'Medlem Sedan';
		$this->mc_user_language = 'Spr�k';
		$this->mc_user_lastpost = 'Senaste Inl�gg';
		$this->mc_user_lastvisit = 'Senaste Bes�k';
		$this->mc_user_level = 'Niv�';
		$this->mc_user_location = 'Plats';
		$this->mc_user_msn = 'MSN Identitet';
		$this->mc_user_name = 'Namn';
		$this->mc_user_pm = 'Accepterar Personliga Meddelanden';
		$this->mc_user_posts = 'Inl�gg';
		$this->mc_user_signature = 'Signatur';
		$this->mc_user_skin = 'Skal';
		$this->mc_user_timezone = 'Tids Zon';
		$this->mc_user_title = 'Medlemstitel';
		$this->mc_user_title_custom = 'Anv�nd en Egen Medlemstitel';
		$this->mc_user_view_avatars = 'Visar Visningsbilder';
		$this->mc_user_view_emoticons = 'Visar Emoticons';
		$this->mc_user_view_signatures = 'Visar Signaturer';
		$this->mc_user_yahoo = 'Yahoo Identitet';
	}

	function membercount()
	{
		$this->mcount = 'Justera Medlemsstatistiken';
		$this->mcount_updated = 'Medlemsantal Uppdaterat.';
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
		$this->mod_error_move_global = 'Du kan inte flytta ett globalt �mne. �ndra �mnet innan du flyttar det.';
		$this->mod_error_move_same = 'Du kan inte flytta ett �mne till det forum det redan befinner sig i.';
		$this->mod_label_controls = 'Moderatorkontroller';
		$this->mod_label_description = 'Beskrivning';
		$this->mod_label_emoticon = 'Konvertera emoticons till bilder?';
		$this->mod_label_global = '�mne i hela forumet';
		$this->mod_label_mbcode = 'Formatera MbKod?';
		$this->mod_label_move_to = 'Flytta till';
		$this->mod_label_options = 'Alternativ';
		$this->mod_label_post_delete = 'Radera Inl�gg';
		$this->mod_label_post_edit = 'Redigera Inl�gg';
		$this->mod_label_post_icon = 'Post Icon'; //Translate
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
		$this->optimize = 'Optimera Databasen';
		$this->optimized = 'Tabellerna i databasen har nu optimerats f�r b�sta prestanda.';
	}

	function perms()
	{
		$this->perm = 'R�ttighet';
		$this->perms = 'R�ttigheter';
		$this->perms_board_view = 'Visa Forumets index';
		$this->perms_board_view_closed = 'Anv�nda Quicksilver Forumet n�r det �r st�ngt';
		$this->perms_do_anything = 'Anv�nda Quicksilver Forumet';
		$this->perms_edit_for = '�ndra R�ttigheter f�r';
		$this->perms_email_use = 'Skicka e-post till medlemmarna via forumet';
		$this->perms_forum_view = 'Kolla Forumet';
		$this->perms_is_admin = 'Komma �t adminkotrollpanelen';
		$this->perms_only_user = 'Anv�nd endast gruppr�ttigheter f�r den h�r anv�ndaren';
		$this->perms_override_user = 'Detta kommer att ers�tta gruppr�ttigheterna f�r den h�r anv�ndaren.';
		$this->perms_pm_noflood = 'Undanta fr�n floodkontrollen f�r personliga meddelanden';
		$this->perms_poll_create = 'Skapa R�stningar';
		$this->perms_poll_vote = 'Skapa r�ster';
		$this->perms_post_attach = 'F�st uppladdningar till inl�gget';
		$this->perms_post_attach_download = 'Ladda ner filerna i inl�gget';
		$this->perms_post_create = 'Skapa svar';
		$this->perms_post_delete = 'Ta bort valfritt inl�gg';
		$this->perms_post_delete_own = 'Ta bort endast inl�gg som anv�ndaren gjort';
		$this->perms_post_edit = '�ndra valfritt inl�gg';
		$this->perms_post_edit_own = '�ndra endast inl�gg som anv�ndaren gjort';
		$this->perms_post_noflood = 'Undanta fr�n floodkontroll f�r inl�gg';
		$this->perms_post_viewip = 'Kolla anv�ndares IP adresser';
		$this->perms_search_noflood = 'Undanta fr�n floodkontroll f�r s�kningar';
		$this->perms_title = 'Kontroll f�r Anv�ndargrupp';
		$this->perms_topic_create = 'Skapa �mnen';
		$this->perms_topic_delete = 'Ta bort valfritt �mne';
		$this->perms_topic_delete_own = 'Ta bort endast �mnen som anv�ndaren skapat';
		$this->perms_topic_edit = '�ndra valfritt �mne';
		$this->perms_topic_edit_own = 'Endast �ndra �mnen som anv�ndaren skapat';
		$this->perms_topic_global = 'G�ra ett �mne synligt fr�n alla forum';
		$this->perms_topic_lock = 'L�sa valfritt �mne';
		$this->perms_topic_lock_own = 'L�sa �mnen anv�ndaren har skapat';
		$this->perms_topic_move = 'Flytta valfritt �mne';
		$this->perms_topic_move_own = 'Endast flytta �mnen som anv�ndaren skapat';
		$this->perms_topic_pin = 'Klistra valfritt �mne';
		$this->perms_topic_pin_own = 'Klistra �mnen som anv�ndaren skapat';
		$this->perms_topic_split = 'Dela valfritt �mne till flera �mnen';
		$this->perms_topic_split_own = 'Endast dela �mnen anv�ndaren skapat till flera �mnen';
		$this->perms_topic_unlock = 'L�sa upp valfritt �mne';
		$this->perms_topic_unlock_mod = 'L�sa upp en moderators l�s';
		$this->perms_topic_unlock_own = 'Endast l�sa upp �mnen anv�ndaren har skapat';
		$this->perms_topic_unpin = 'Klistra av valfritt �mne';
		$this->perms_topic_unpin_own = 'Endast klistra av �mnen som anv�ndaren skapat';
		$this->perms_topic_view = 'Kolla p� �mnen';
		$this->perms_updated = 'R�ttigheterna har uppdaterats.';
		$this->perms_user_inherit = 'Anv�ndaren kommer �rva gruppens r�ttigheter.';
	}

	function php_info()
	{
		$this->php_error = 'FEL';
		$this->php_error_msg = 'phpinfo() kan inte exekveras. Det verkar som om din v�rd har st�ngt av den h�r funktionen.';
	}

	function pm()
	{
		$this->pm_avatar = 'Visningsbild';
		$this->pm_cant_del = 'Du har inte till�telse att radera detta meddelande.';
		$this->pm_delallmsg = 'Radera Alla Meddelanden';
		$this->pm_delete = 'Radera';
		$this->pm_delete_selected = 'Ta bort valda meddelanden';
		$this->pm_deleted = 'Meddelande Raderat.';
		$this->pm_deleted_all = 'Meddelanden Raderade.';
		$this->pm_error = 'Det uppstod problem med att skicka ditt meddelande till vissa mottagare.<br /><br />F�ljande medlemmar finns inte: %s<br /><br />F�ljande medlemmar accepterar inte personliga meddelanden: %s';
		$this->pm_fields = 'Meddelandet kunde inte skickat. F�rs�kra dig om att alla f�lt �r ifyllda.';
		$this->pm_flood = 'Du har skickat ett meddelande under de senaste %s sekunderna, du kan inte skicka ett till just nu.<br /><br />F�rs�k igen om n�gra sekunder.';
		$this->pm_folder_inbox = 'Inkorg';
		$this->pm_folder_new = '%s nya';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Fr�n';
		$this->pm_group = 'Grupp';
		$this->pm_guest = 'Som g�st kan du inte anv�nda snabbmeddelande. Logga in eller registrera dig.';
		$this->pm_joined = 'Gick Med';
		$this->pm_messenger = 'Snabbmeddelande';
		$this->pm_msgtext = 'Meddelandetext';
		$this->pm_multiple = 'Separera flera mottagare med ett ;';
		$this->pm_no_folder = 'Du m�ste v�lja en katalog.';
		$this->pm_no_member = 'Inget meddelande kunde hittas med ett s�dant ID.';
		$this->pm_no_number = 'Inget meddelande kunde hittas med det numret.';
		$this->pm_no_title = 'Inget �mne';
		$this->pm_nomsg = 'Det finns inga meddelanden i denna katalog.';
		$this->pm_noview = 'Du har inte till�telse att l�sa detta meddelande.';
		$this->pm_offline = 'Den h�r medlemmen �r inte inloggad just nu';
		$this->pm_online = 'Den h�r medlemmen �r inloggad just nu';
		$this->pm_personal = 'Snabbmeddelande';
		$this->pm_personal_msging = 'Personligt Meddelande';
		$this->pm_pm = 'PM'; //Translate
		$this->pm_posts = 'Inl�gg';
		$this->pm_preview = 'F�rhandsgranska';
		$this->pm_recipients = 'Mottagare';
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
		$this->post_cant_enter = 'Din r�st registrerades inte. Endera har du redan r�stat eller s� har du inte till�telse att r�sta.';
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
		$this->post_mbcode_detail = 'Skriv en beskrivning';
		$this->post_mbcode_email = 'E-post';
		$this->post_mbcode_firered = 'Eldr�d';
		$this->post_mbcode_font = 'Teckensnitt';
		$this->post_mbcode_green = 'Gr�n';
		$this->post_mbcode_huge = 'St�rst';
		$this->post_mbcode_image = 'Bild';
		$this->post_mbcode_image1 = 'Bild';
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Kursiv';
		$this->post_mbcode_italic1 = 'K';
		$this->post_mbcode_large = 'Stor';
		$this->post_mbcode_length = 'Ditt inl�gg �r "+length+" tecken.';
		$this->post_mbcode_limegreen = 'Lime Gr�n';
		$this->post_mbcode_medium = 'Medel';
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
		$this->post_mbcode_yellow = 'Gul';
		$this->post_msg = 'Meddelande';
		$this->post_must_msg = 'Du m�ste skriva n�got n�r du g�r ett inl�gg.';
		$this->post_must_options = 'Du m�ste inkludera alterntiv n�r du skapar en ny omr�stning.';
		$this->post_must_title = 'Du m�ste skriva en titel n�r du skapar ett nytt �mne.';
		$this->post_new_poll = 'Ny Omr�stning';
		$this->post_new_topic = 'Nytt �mne';
		$this->post_no_forum = 'Forumet kunde inte hittas.';
		$this->post_no_topic = 'Inget �mne valt.';
		$this->post_no_vote = 'Du m�ste v�lja ett alternativ att r�sta p�.';
		$this->post_option_emoticons = 'Konvertera Emoticons till bilder?';
		$this->post_option_global = 'Visa �mnet i hela forumet?';
		$this->post_option_mbcode = 'Formatera MbKod?';
		$this->post_optional = 'valfri';
		$this->post_options = 'Alternativ';
		$this->post_poll_options = 'Omr�stningsalternativ';
		$this->post_poll_row = 'En p� varje rad';
		$this->post_posted = 'Skrivet';
		$this->post_posting = 'Skriver Inl�gg';
		$this->post_preview = 'F�rhandsgranska';
		$this->post_reply = 'Svara';
		$this->post_reply_topic = 'Svara P� �mne';
		$this->post_replying = 'Svarar P� �mne';
		$this->post_replying1 = 'Svarar';
		$this->post_smiles = 'Klickbara Emoticons';
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
		$this->profile_av_sign = 'Visningsbild och Signatur';
		$this->profile_avatar = 'Visningsbild';
		$this->profile_bday = 'F�delsedag';
		$this->profile_contact = 'Kontakta';
		$this->profile_email_address = 'E-post Adress';
		$this->profile_fav = 'Favorit Forum';
		$this->profile_fav_forum = '%s (%d%% av dessa medlemsinl�gg)';
		$this->profile_gtalk = 'GTalk Konto';
		$this->profile_icq_uin = 'ICQ Nummer';
		$this->profile_info = 'Information'; //Translate
		$this->profile_interest = 'Intressen';
		$this->profile_joined = 'Sammanfogade';
		$this->profile_last_post = 'Senaste Inl�gg';
		$this->profile_list = 'Medlemslista';
		$this->profile_location = 'Hemort';
		$this->profile_member = 'Medlemsgrupp';
		$this->profile_member_title = 'Medlemstitel';
		$this->profile_msn = 'Mitt riktiga namn';
		$this->profile_must_user = 'Du m�ste skriva in en anv�ndare f�r att se en profil.';
		$this->profile_no_member = 'Det finns ingen medlem med det anv�ndarnumret. Kontot kan ha blivit raderat.';
		$this->profile_none = '[ Ingen ]';
		$this->profile_not_post = 'har inte gjort n�got inl�gg �nnu.';
		$this->profile_offline = 'Den h�r medlemmen �r utloggad just nu';
		$this->profile_online = 'Den h�r medlemmen �r inloggad just nu';
		$this->profile_pm = 'Personliga Meddelanden';
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
		$this->query = 'SQL Gr�nssnitt';
		$this->query_fail = 'Misslyckades.';
		$this->query_success = 'Exekvering lyckad.';
		$this->query_your = 'Ditt kommando';
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
		$this->recent_icon = 'Meddelandeikon';
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
		$this->recent_poll = 'Omr�stning';
		$this->recent_regfirst = 'Du har inte till�telse att l�sa forum utan att f�rst registrera dig.';
		$this->recent_replies = 'Svar';
		$this->recent_starter = 'Skapare';
		$this->recent_sub = 'Underforum';
		$this->recent_sub_last_post = 'Senaste Inl�gg';
		$this->recent_sub_replies = 'Svar';
		$this->recent_sub_topics = '�mnen';
		$this->recent_subscribe = 'E-posta mig n�r nya inl�gg skrivits i detta forum.';
		$this->recent_topic = '�mne';
		$this->recent_views = 'Visningar';
		$this->recent_write_topics = 'Du kan skapa nya �mnen i detta forum.';
	}

	function register()
	{
		$this->register_activated = 'Ditt konto �r aktiverat!';
		$this->register_activating = 'Kontoaktivering';
		$this->register_activation_error = 'Det uppstod ett problem n�r ditt konto skulle aktiveras. Kolla s� att din browser har den kompletta aktiveringsadressen fr�n mejlet. Om problemet kvarst�r, kontakta forumets administrator f�r att f� ett nytt aktiveringsmejl.';
		$this->register_confirm_passwd = 'Bekr�fta L�senordet';
		$this->register_done = 'Du �r registrerad! Du kan nu logga in.';
		$this->register_email = 'E-post Adress';
		$this->register_email_invalid = 'E-post adressen du skrivit in �r ogiltig.';
		$this->register_email_msg = 'Det h�r �r ett automatikst e-post genererat av Quicksilver Forumet, och skickat till dig f�r att';
		$this->register_email_msg2 = 'du ska kunna aktivera ditt konto';
		$this->register_email_msg3 = 'Klicka p� den nedanst�ende l�nlen eller klistra in den i din webl�sare:';
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
		$this->register_tos_i_agree = 'Jag godk�nner ovanst�ende vilkor';
		$this->register_tos_read = 'Var sn�ll och l�s f�ljande vilkor f�r tj�nsten';
	}

	function rssfeed()
	{
		$this->rssfeed_posted_by = 'Skrivet av';
	}

	function search()
	{
		$this->search_advanced = 'Avancerade Alternativ';
		$this->search_avatar = 'Visningsbild';
		$this->search_basic = 'Enkel S�kning';
		$this->search_characters = 'bokst�verna av ett inl�gg';
		$this->search_day = 'dag';
		$this->search_days = 'dagar';
		$this->search_exact_name = 'exakt namn';
		$this->search_flood = 'Du har s�kt under de senaste %s sekunderna, och du kan inte s�ka just nu.<br /><br />Var sn�ll och f�rs�k igen om n�gra sekunder.';
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
		$this->search_offline = 'Den h�r medlemmen �r utloggad just nu';
		$this->search_older = '�ldre';
		$this->search_online = 'Den h�r medlemmen �r inloggad just nu';
		$this->search_only_display = 'Visa endast de f�rsta';
		$this->search_partial_name = 'delar av namnet';
		$this->search_post_icon = 'Inl�ggsikon';
		$this->search_posted_on = 'Skrivet';
		$this->search_posts = 'Inl�gg';
		$this->search_posts_by = 'Endast inl�gg av';
		$this->search_regex = 'S�k med regulj�rt uttryck';
		$this->search_regex_failed = 'Ditt uttryck misslyckades. Var god se MSQL-dokumentationen: hj�lp f�r regulj�ra uttryck ';
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
		$this->settings = 'Inst�llningar';
		$this->settings_active = 'Inst�llninar f�r Aktiva Anv�ndare';
		$this->settings_allow = 'Till�t';
		$this->settings_antibot = 'Anti-Robot Registrering';
		$this->settings_attach_ext = 'Bifogade filer - Fil Typer';
		$this->settings_attach_one_per = 'En per rad. Inga punkter.';
		$this->settings_avatar = 'Inst�llnigar f�r Visningsbild';
		$this->settings_avatar_flash = 'Flash Visningsbilder';
		$this->settings_avatar_max_height = 'Maximal H�jd p� Visningsbild';
		$this->settings_avatar_max_width = 'Maximal Bredd p� Visningsbild';
		$this->settings_avatar_upload = 'Ladda upp Visningsbild - Maximal Filstorlek';
		$this->settings_basic = '�ndra Foruminst�llningar';
		$this->settings_blank = 'Anv�nd <i>_blank</i> f�r ett nytt f�nster.';
		$this->settings_board_enabled = 'Forum Aktiverat';
		$this->settings_board_location = 'Adress till Forumet';
		$this->settings_board_name = 'Fourmnamn';
		$this->settings_board_rss = 'Inst�llningar f�r RSS Matning';
		$this->settings_board_rssfeed_desc = 'Beskrivning av RSS Matningen';
		$this->settings_board_rssfeed_posts = 'Antal inl�gg att lista genom RSS Matningen';
		$this->settings_board_rssfeed_time = 'Omladdningstid i minuter';
		$this->settings_board_rssfeed_title = 'RSS Matningens Titel';
		$this->settings_clickable = 'Klickbara Emoticons Per Rad';
		$this->settings_cookie = 'Cookie och Flood Inst�llningar';
		$this->settings_cookie_path = 'Cookie S�kv�g';
		$this->settings_cookie_prefix = 'Cookie Prefix'; //Translate
		$this->settings_cookie_time = 'Tid f�r att kvarst� som inloggad';
		$this->settings_db = '�ndra Inst�llningar f�r Anslutning';
		$this->settings_db_host = 'Databas V�rd';
		$this->settings_db_leave_blank = 'L�mna tom om ingen.';
		$this->settings_db_multiple = 'F�r att installera flera forum i en databas.';
		$this->settings_db_name = 'Databasnamn';
		$this->settings_db_password = 'Databasl�senord';
		$this->settings_db_port = 'Databasport';
		$this->settings_db_prefix = 'Tabellprefix';
		$this->settings_db_socket = 'Databassocket';
		$this->settings_db_username = 'Databasanv�ndarnamn';
		$this->settings_default_lang = 'F�rvalt Spr�k';
		$this->settings_default_no = 'F�rvalt Nej';
		$this->settings_default_skin = 'F�rvalt Skal';
		$this->settings_default_yes = 'F�rval Ja';
		$this->settings_disabled = 'Avaktiverad';
		$this->settings_disabled_notice = 'Meddelande vid Avaktiverad';
		$this->settings_email = 'E-Postinst�llningar';
		$this->settings_email_fake = 'F�r visning endast. Borde inte vara en riktig e-postadress.';
		$this->settings_email_from = 'E-post Fr�n Adress';
		$this->settings_email_place1 = 'Placera medlemmar i gruppen';
		$this->settings_email_place2 = 'tills de verifierat sin e-post';
		$this->settings_email_place3 = 'Kr�v inte e-post aktivering';
		$this->settings_email_real = 'Ska vara en riktig e-postadress.';
		$this->settings_email_reply = 'E-post Svara-Till Adress';
		$this->settings_email_smtp = 'SMTP Post Server';
		$this->settings_email_valid = 'Ny medlems E-postverifiering';
		$this->settings_enabled = 'Aktiverad';
		$this->settings_enabled_modules = 'Aktiverade Moduler';
		$this->settings_foreign_link = 'M�l f�r Fr�mmande L�nkar';
		$this->settings_general = 'Allm�na Inst�llningar';
		$this->settings_group_after = 'Grupp Efter Registrering';
		$this->settings_hot_topic = 'Inl�gg f�r ett Hett �mne';
		$this->settings_kilobytes = 'Kilobytes'; //Translate
		$this->settings_max_attach_size = 'Bifogade filer - Maximal Filstorlek';
		$this->settings_members = 'Medlemsinst�llningar';
		$this->settings_modname_only = 'Endast modulnamn. Inkludera inte .php';
		$this->settings_no_allow = 'Till�t Inte';
		$this->settings_nodata = 'Ingen data s�ndes fr�n POST';
		$this->settings_one_per = 'En per rad';
		$this->settings_pixels = 'Pixlar';
		$this->settings_pm_flood = 'Floodkontroll f�r Personligt Meddelande';
		$this->settings_pm_min_time = 'Minimum tid mellan meddelanden.';
		$this->settings_polls = 'Omr�stningar';
		$this->settings_polls_no = 'Anv�ndare kan inte delta i r�stning efter att ha kollat dess resultat';
		$this->settings_polls_yes = 'Anv�ndare kan delta i r�stning efter att ha kollat dess resultat';
		$this->settings_post_flood = 'Floodkontroll f�r Inl�gg';
		$this->settings_post_min_time = 'Minimum tid mellan inl�gg.';
		$this->settings_posts_topic = 'Inl�gg per sida i ett �mne';
		$this->settings_search_flood = 'S�kning Flood Kontroll';
		$this->settings_search_min_time = 'Minimum tid mellan s�kningar.';
		$this->settings_server = 'Serverinst�llningar';
		$this->settings_server_gzip = 'GZIP Komprimering';
		$this->settings_server_gzip_msg = 'F�rb�ttrar farten. Avaktivera om forumet blir konstigt eller tomt.';
		$this->settings_server_maxload = 'Maximal Serverbelastning';
		$this->settings_server_maxload_msg = 'Avaktivera forumet vid extrem serverbelastning. Skriv 0 f�r att avaktivera.';
		$this->settings_server_timezone = 'Server Tids Zon';
		$this->settings_show_avatars = 'Visa Visningsbilder';
		$this->settings_show_email = 'Visa E-postadress';
		$this->settings_show_emotes = 'Visa Emoticons';
		$this->settings_show_notice = 'Visas n�r forumet �r avaktiverat';
		$this->settings_show_pm = 'Acceptera Personliga Meddelanden';
		$this->settings_show_sigs = 'Visa Signaturer';
		$this->settings_spider_agent = 'Spindel Anv�ndar Agent';
		$this->settings_spider_agent_msg = 'Skriv hela aller en del av spindelns unika HTTP USER AGENT.';
		$this->settings_spider_enable = 'Aktivera Spindel Visning';
		$this->settings_spider_enable_msg = 'Aktivera namnen p� s�kmotor spindlar p� Listan �ver Aktiva.';
		$this->settings_spider_name = 'Spindel Namn';
		$this->settings_spider_name_msg = 'Skriv in namnet du vill ska visas f�r varje av de ovanst�ende spindlarna p� Listan �ver Aktiva. Du m�ste placera spindelns namn p� motsvarande rad som spindelns anv�ndar agent ovan. Till exempel, om du placerar \'googlebot\' p� den tredje raden av anv�ndar agenter m�ste du placera \'Google\' p� den tredje raden f�r Spindel Namn.';
		$this->settings_timezone = 'Tids Zon';
		$this->settings_topics_page = '�mnen Per Forumsida';
		$this->settings_tos = 'Vilkor f�r Tj�nsten';
		$this->settings_updated = 'Inst�llningarna har uppdaterats.';
	}

	function stats()
	{
		$this->stats = 'Statistik';
		$this->stats_post_by_month = 'Inl�gg per M�nad';
		$this->stats_reg_by_month = 'Registreringar per M�nad';
	}

	function templates()
	{
		$this->add = 'L�gg till HTML Mallar';
		$this->choose_set = 'V�lje ett mallpaket';
		$this->choose_skin = 'V�lj ett skal';
		$this->create_new = 'Skapa ett nytt skal med namnet';
		$this->create_skin = 'Skapa Skal';
		$this->credit = 'Var sn�ll och ta inte bort v�rt enda erk�nnande!';
		$this->delete_template = 'Ta bort Mall';
		$this->directory = 'Mapp';
		$this->display_name = 'Visningsnamn';
		$this->edit_skin = '�ndra Skal';
		$this->edit_templates = '�ndra Mallar';
		$this->export_done = 'Skal exporterat till mappen skins.';
		$this->export_select = 'V�lj ett skal att exportera';
		$this->export_skin = 'Exportera Skal';
		$this->install_done = 'Installationen av skalet har lyckats.';
		$this->install_exists1 = 'Det verkar som om skalet';
		$this->install_exists2 = 'redan �r installerat.';
		$this->install_overwrite = 'Skriv �ver';
		$this->install_skin = 'Installera Skal';
		$this->menu_title = 'V�lj ett mallpaket att �ndra';
		$this->only_skin = 'Det finns bara ett skal installerat. Du f�r inte ta bort det h�r skalet.';
		$this->select_skin = 'V�lj ett skal';
		$this->select_skin_edit = 'V�lj ett skal att �ndra';
		$this->select_skin_edit_done = '�ndringen av skalet lyckades.';
		$this->select_template = 'V�lj Mall';
		$this->skin_chmod = 'En ny mapp kunde inte skapas f�r skalet. F�rs�k att CHMOD mappen \"skins\" till 775.';
		$this->skin_created = 'Skal Skapat.';
		$this->skin_deleted = 'Borttagning av skalet lyckades.';
		$this->skin_dir_name = 'Du m�ste ange ett namn och en mapp f�r skalet.';
		$this->skin_dup = 'Ett skal med samma mapp namn hittades. Skalets mapp �ndrades till';
		$this->skin_name = 'Du m�ste ange namn f�r skalet.';
		$this->skin_none = 'Det finns inga tillg�ngliga skal att installera.';
		$this->skin_set = 'Skalupps�ttning';
		$this->skins_found = 'F�ljande skal hittades i mappen skins';
		$this->template_about = 'Om Variabler';
		$this->template_about2 = 'Variabler �r delar av text som ers�tts med dynamisk data. Variabler b�rjar med ett dollartecken, och omsluts ibland av {parenteser}.';
		$this->template_add = 'L�gg till';
		$this->template_added = 'Mall tillagd.';
		$this->template_clear = 'T�m';
		$this->template_confirm = 'Du har gjort �ndringar i mallarna. Vill du spara dina �ndringar?';
		$this->template_description = 'Mallbeskrivning';
		$this->template_html = 'Mall HTML';
		$this->template_name = 'Mall Namn';
		$this->template_position = 'Mallposition';
		$this->template_set = 'Mallupaket';
		$this->template_title = 'Malltitel';
		$this->template_universal = 'Universal Variabel';
		$this->template_universal2 = 'Vissa variabler kan anv�ndas i valfri mall, medna andra bara i en mall. Egenskaper f�r objektet $this kan anv�ndas �verallt.';
		$this->template_updated = 'Mall uppdaterad.';
		$this->templates = 'Mallar';
		$this->temps_active = 'Detaljer f�r Aktiva Anv�ndare';
		$this->temps_admin = '<b>AdminKP Universal</b>';
		$this->temps_ban = 'AdminKP Blockeringar';
		$this->temps_board_index = 'Forum Index';
		$this->temps_censoring = 'AdminKP Ordcensurering';
		$this->temps_cp = 'Kontrollpanel f�r Medlem';
		$this->temps_email = 'E-posta en Medlem';
		$this->temps_emot_control = 'AdminKP Emoticons';
		$this->temps_forum = 'Forum';
		$this->temps_forums = 'AdminKP Forum';
		$this->temps_groups = 'AdminKP Grupper';
		$this->temps_help = 'Hj�lp';
		$this->temps_login = 'Logga In/Ut';
		$this->temps_logs = 'AdminKP Moderatorloggar';
		$this->temps_main = '<b>Forum Universal</b>';
		$this->temps_mass_mail = 'AdminKP Mass E-post';
		$this->temps_member_control = 'AdminKP Medlemskontroll';
		$this->temps_members = 'Medlemslista';
		$this->temps_mod = 'Moderator Kontroller';
		$this->temps_pm = 'Snabbmeddelanden';
		$this->temps_polls = 'Omr�stningar';
		$this->temps_post = 'Inl�ggshantering';
		$this->temps_printer = 'Skrivar-V�nliga �mnen';
		$this->temps_profile = 'Profilspaning';
		$this->temps_recent = 'Nya �mnen';
		$this->temps_register = 'Registrering';
		$this->temps_search = 'S�kning';
		$this->temps_settings = 'AdminKP Inst�llningar';
		$this->temps_templates = 'AdminKP Mallediterare';
		$this->temps_titles = 'AdminKP Medlemstitlar';
		$this->temps_topics = '�mnen';
		$this->upgrade_skin = 'Upgrade Skin'; //Translate
		$this->upgrade_skin_already = 'was already upgraded. Nothing to do.'; //Translate
		$this->upgrade_skin_detail = 'Skins upgraded using this method will still require template editing afterwards.<br />Select a skin to upgrade'; //Translate
		$this->upgrade_skin_upgraded = 'skin has been upgraded.'; //Translate
		$this->upgraded_templates = 'The following templates were added'; //Translate
	}

	function titles()
	{
		$this->titles_add = 'L�gg till Medlemstitlar';
		$this->titles_added = 'Medlemstitel Tillagd.';
		$this->titles_edit = '�ndra Medlemstitlar';
		$this->titles_image = 'Bild';
		$this->titles_minpost = 'Minimum Inl�gg';
		$this->titles_title = 'Titel';
	}

	function topic()
	{
		$this->topic_attached = 'Bifogad fil:';
		$this->topic_attached_downloads = 'nedladdningar';
		$this->topic_attached_perm = 'Du har inte till�telse att ladda hem den h�r filen.';
		$this->topic_attached_title = 'Bifogad Fil';
		$this->topic_avatar = 'Visningsbild';
		$this->topic_bottom = 'G� till botten av sidan';
		$this->topic_create_poll = 'Skapa Ny Omr�stning';
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
		$this->topic_links_gtalk = 'Skicka ett GTalk meddelande till %s';
		$this->topic_links_icq = 'Skicka ett ICQ meddelande till %s';
		$this->topic_links_msn = 'Visa %s\'s MSN profil';
		$this->topic_links_pm = 'Skicka ett personligt meddelande till %s';
		$this->topic_links_web = 'Bes�k %s\'s hemsida';
		$this->topic_links_yahoo = 'Skicka ett meddelande till %s med Yahoo! Messenger';
		$this->topic_lock = 'L�s';
		$this->topic_locked = '�mnet L�st';
		$this->topic_move = 'Flytta';
		$this->topic_no_votes = 'Det finns inga r�ster i den h�r omr�stningen.';
		$this->topic_not_found = '�mnet Kunde Inte Hittas';
		$this->topic_not_found_message = '�mnet kunde inte hittas. Det kan ha blivit raderat, flyttat eller s� har det aldrig funnits.';
		$this->topic_offline = 'Den h�r medlemmen �r utloggad just nu';
		$this->topic_online = 'Den h�r medlemmen �r inloggad just nu';
		$this->topic_options = '�mnesalternativ';
		$this->topic_pages = 'Sidor';
		$this->topic_perm_view = 'Du har inte till�telse att l�sa �mnen.';
		$this->topic_perm_view_guest = 'Du har inte till�telse att l�sa �mnen innan du registrerat dig.';
		$this->topic_pin = 'Klistra';
		$this->topic_posted = 'Inlaggd';
		$this->topic_posts = 'Inl�gg';
		$this->topic_print = 'Visa Utskriftsv�nlig';
		$this->topic_quote = 'Svara med ett citat fr�n detta inl�gg';
		$this->topic_reply = 'Svara p� �mne';
		$this->topic_split = 'Dela upp';
		$this->topic_split_finish = 'Avsluta all uppdelning';
		$this->topic_split_keep = 'Flytta inte p� detta inl�gg';
		$this->topic_split_move = 'Flytta detta inl�gg';
		$this->topic_subscribe = 'E-posta mig n�r inl�gg skrivits i detta �mne';
		$this->topic_top = 'G� till toppen av sidan';
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
		$this->aim = 'AIM'; //Translate
		$this->based_on = 'baserad p�';
		$this->board_by = 'Av';
		$this->charset = 'iso-8859-1';
		$this->continue = 'Forts�tt';
		$this->delete = 'Ta bort';
		$this->direction = 'ltr'; //Translate
		$this->edit = '�ndra';
		$this->email = 'E-post';
		$this->gtalk = 'GT'; //Translate
		$this->icq = 'ICQ'; //Translate
		$this->msn = 'MSN'; //Translate
		$this->new_message = 'Nytt Meddelande';
		$this->new_poll = 'Ny Omr�stning';
		$this->new_topic = 'Nytt �mne';
		$this->no = 'Nej';
		$this->powered = 'Drivs med';
		$this->private_message = 'PM'; //Translate
		$this->quote = 'Citera';
		$this->reply = 'Svara';
		$this->seconds = 'Sekunder';
		$this->sep_decimals = ',';
		$this->sep_thousands = ' ';
		$this->submit = 'Skicka';
		$this->subscribe = 'Prenumerera';
		$this->today = 'Idag';
		$this->website = 'WWW'; //Translate
		$this->yahoo = 'Yahoo'; //Translate
		$this->yes = 'Ja';
		$this->yesterday = 'Ig�r';
	}
}
?>