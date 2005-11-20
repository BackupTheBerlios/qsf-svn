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
 * Italian language module
 *
 * @author Filippo Bovo <ikari@ctonet.it>
 * @since 1.0.0 RC1
 **/
class it
{
	function active()
	{
		$this->active_last_action = 'Ultima Attività';
		$this->active_modules_active = 'Visualizza Attività Utenti';
		$this->active_modules_board = 'Visualizza Indice';
		$this->active_modules_cp = 'Usa Pannello di Controllo';
		$this->active_modules_forum = 'Visita il forum: %s';
		$this->active_modules_help = 'Usa Help';
		$this->active_modules_login = 'In Connessione o Disconnessione';
		$this->active_modules_members = 'Visualizza Lista Iscritti';
		$this->active_modules_mod = 'Modera';
		$this->active_modules_pm = 'Usa Messaggi Privati';
		$this->active_modules_post = 'Scrive un Messaggio';
		$this->active_modules_printer = 'Stampa la discussione: %s';
		$this->active_modules_profile = 'Visualizza il profilo di: %s';
		$this->active_modules_recent = 'Viewing recent posts'; //Translate
		$this->active_modules_search = 'Cerca';
		$this->active_modules_topic = 'Legge la discussione: %s';
		$this->active_time = 'Ora';
		$this->active_user = 'Utente';
		$this->active_users = 'Attività Utenti';
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
		$this->board_active_users = 'Attività Utenti';
		$this->board_birthdays = 'Compleanni di Oggi:';
		$this->board_bottom_page = 'Go to the bottom of the page'; //Translate
		$this->board_can_post = 'Puoi ripondere alle discussioni.';
		$this->board_can_topics = 'Puoi leggere ma non creare discussioni.';
		$this->board_cant_post = 'Non puoi rispondere alle discussioni.';
		$this->board_cant_topics = 'Non puoi leggere o creare discussioni.';
		$this->board_forum = 'Argomenti';
		$this->board_guests = 'ospiti';
		$this->board_last_post = 'Ultima Discussione';
		$this->board_mark = 'Segna tutti le discussioni come già lette';
		$this->board_mark1 = 'Tutte le discussioni e gli argomenti sono segnati come già letti.';
		$this->board_members = 'iscritti';
		$this->board_message = '%s Messaggio';
		$this->board_most_online = 'Il più alto numero di utenti online è stato di %d il giorno %s.';
		$this->board_nobday = 'Non ci sono compleanni oggi.';
		$this->board_nobody = 'Non ci sono utenti online.';
		$this->board_nopost = 'Nessuna Discussione';
		$this->board_noview = 'Non puoi leggere la bacheca.';
		$this->board_regfirst = 'Non puoi leggere la bacheca. Lo puoi fare solo registrandoti.';
		$this->board_replies = 'Risposte';
		$this->board_stats = 'Statistiche';
		$this->board_stats_string = '%s utenti si sono registrati. Diamo il benvenuto al nostro più recente iscritto: %s.<br /> Ci sono %s discussioni e %s risposte, per un totale di %s messaggi.';
		$this->board_top_page = 'Go to the top of the page'; //Translate
		$this->board_topics = 'Discussioni';
		$this->board_topics_new = 'Ci sono nuovi messaggi in questo forum.';
		$this->board_topics_old = 'Non ci sono nuovi messaggi in questo forum.';
		$this->board_users = 'utenti';
		$this->board_write_topics = 'Puoi leggere ed inviare nuovi messaggi.';
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
		$this->cp_aim = 'Nome AIM';
		$this->cp_already_member = 'L\'indirizzo email che hai inserito è già utilizzato da un iscritto.';
		$this->cp_apr = 'Aprile';
		$this->cp_aug = 'Agosto';
		$this->cp_avatar_current = 'Avatar in uso';
		$this->cp_avatar_error = 'Errore Avatar';
		$this->cp_avatar_must_select = 'Devi selezionare un avatar.';
		$this->cp_avatar_none = 'Nessun avatar';
		$this->cp_avatar_pixels = 'pixels'; //Translate
		$this->cp_avatar_select = 'Seleziona un avatar';
		$this->cp_avatar_size_height = 'L\'altezza del tuo avatar deve essere tra 1 e';
		$this->cp_avatar_size_width = 'La larghezza del tuo avatar deve essere tra 1 e';
		$this->cp_avatar_upload = 'Trasferisci un avatar dal tuo computer';
		$this->cp_avatar_upload_failed = 'Trasferimento avatar Fallito. Il file specificato sembra non esistere.';
		$this->cp_avatar_upload_not_image = 'Poi trasferire solo immagini da usare come avatar.';
		$this->cp_avatar_upload_too_large = 'L\'avatar che hai specificato è troppo pesante. La dimensione massima consentita è %d kilobytes.';
		$this->cp_avatar_url = 'Inserisci l\'URL del tuo avatar';
		$this->cp_avatar_use = 'Usa avatar trasferito';
		$this->cp_bday = 'Compleanno';
		$this->cp_been_updated = 'Il tuo profilo è stato aggiornato.';
		$this->cp_been_updated1 = 'Il tuo avatar è stato traferito.';
		$this->cp_been_updated_prefs = 'Le tue preferenze sono state aggiornate.';
		$this->cp_changing_pass = 'Modifica Password';
		$this->cp_contact_pm = 'Permetti agli altri iscritti di contattarti via messenger?';
		$this->cp_cp = 'Pannello di Controllo';
		$this->cp_current_avatar = 'Avatar Attuale';
		$this->cp_current_time = 'Attualmente sono le %s.';
		$this->cp_custom_title = 'Custom Member Title'; //Translate
		$this->cp_custom_title2 = 'This is a privledge reserved for board administrators'; //Translate
		$this->cp_dec = 'Dicembre';
		$this->cp_editing_avatar = 'Modifica Avatar';
		$this->cp_editing_profile = 'Modifica Profile';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Vuoi ricevere email da altri utenti tramite forum?';
		$this->cp_email_invaid = 'L\'indirizzo email che hai inserito non è valido.';
		$this->cp_err_avatar = 'Errore Aggiornamento Avatar';
		$this->cp_err_updating = 'Errore Aggiornamento Profilo';
		$this->cp_feb = 'Febbraio';
		$this->cp_file_type = 'L\'avatar che hai inserito non è valido. Assicurati che l\'URL sia corretta, e che l\'estensione del file sia: gif, jpg, o png.';
		$this->cp_format = 'Nome';
		$this->cp_gtalk = 'GTalk Account'; //Translate
		$this->cp_header = 'Pannello di Controllo Utente';
		$this->cp_height = 'Altezza';
		$this->cp_icq = 'Numero ICQ';
		$this->cp_interest = 'Interessi';
		$this->cp_jan = 'Gennaio';
		$this->cp_july = 'Luglio';
		$this->cp_june = 'Giugno';
		$this->cp_label_edit_avatar = 'Modifica Avatar';
		$this->cp_label_edit_pass = 'Modifica Password';
		$this->cp_label_edit_prefs = 'Modifica Preferenze';
		$this->cp_label_edit_profile = 'Modifica Profilo';
		$this->cp_label_edit_subs = 'Modifica Sottoscrizioni';
		$this->cp_language = 'Lingua';
		$this->cp_less_charac = 'Il tuo nome deve essere al massimo di 32 caratteri.';
		$this->cp_location = 'Località';
		$this->cp_login_first = 'Devi essere riconosciuto dal sistema (login) per accedere al pannello di controllo.';
		$this->cp_mar = 'Marzo';
		$this->cp_may = 'Maggio';
		$this->cp_msn = 'Identità MSN';
		$this->cp_must_orig = 'Il tuo nome deve essere identico all\'originale. Puoi cambiare solamente le lettere maiscole/minuscole e gli spazi.';
		$this->cp_new_notmatch = 'Le nuove passwords che hai inserito non corrispondono.';
		$this->cp_new_pass = 'Nuova Password';
		$this->cp_no_flash = 'Gli avatar flash non sono permessi su questa bacheca.';
		$this->cp_not_exist = 'La data che hai inserito (%s) non esiste!';
		$this->cp_nov = 'Novembre';
		$this->cp_oct = 'Ottobre';
		$this->cp_old_notmatch = 'La vecchia password che hai inserito non combacia con quella nel nostro database.';
		$this->cp_old_pass = 'Vecchia Password';
		$this->cp_pass_notvaid = 'La tua password non è valida. Assicurati di aver usato solo caratteri validi come lettere, numeri, trattini (-), underscore (_), o spazi.';
		$this->cp_preferences = 'Modifica Preferenze';
		$this->cp_privacy = 'Opzioni Privacy';
		$this->cp_repeat_pass = 'Riscrivi Nuova Password';
		$this->cp_sept = 'Settembre';
		$this->cp_show_active = 'Mostra la tua attività quando navighi nei forum?';
		$this->cp_show_email = 'Mostra l\'indirizzo email nel profilo?';
		$this->cp_signature = 'Firma';
		$this->cp_size_max = 'L\'avatar che hai inserito è troppo grande. La dimensione massima ammessa è %s x %s pixels.';
		$this->cp_skin = 'Skin Bacheca';
		$this->cp_sub_change = 'Cambia Sottoscrizioni';
		$this->cp_sub_delete = 'Cancella';
		$this->cp_sub_expire = 'Data di Termine';
		$this->cp_sub_name = 'Nome Sottoscrizione';
		$this->cp_sub_no_params = 'Nessun parametro inserito.';
		$this->cp_sub_success = 'Ora sei sottoscritto a questo %s.';
		$this->cp_sub_type = 'Tipo Sottoscrizione';
		$this->cp_sub_updated = 'Le sottoscrizioni alle discussioni selezionate sono stati eliminati.';
		$this->cp_topic_option = 'Opzioni Discussione';
		$this->cp_updated = 'Profilo Aggiornato';
		$this->cp_updated1 = 'Avatar Aggiornato';
		$this->cp_updated_prefs = 'Preferenze Aggiornate';
		$this->cp_user_exists = 'Esiste già un utente con questo nome.';
		$this->cp_valided = 'La tua password è stata convalidata ed aggiornata.';
		$this->cp_view_avatar = 'Visualizza Avatars nelle discussioni?';
		$this->cp_view_emoticon = 'Visualizza Emoticons nelle discussioni?';
		$this->cp_view_signature = 'Visualizza Signatures nelle discussioni?';
		$this->cp_welcome = 'Benvenuto nel pannello di controllo utenti. Da qui puoi configurare il tuo account selezionando una delle opzioni che vedi qui sopra.';
		$this->cp_width = 'Larghezza';
		$this->cp_www = 'Sito Web';
		$this->cp_yahoo = 'Identità Yahoo';
		$this->cp_zone = 'Fuso Orario';
	}

	function email()
	{
		$this->email_blocked = 'Questo utente non vuole ricevere email dal forum.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Corpo Email:';
		$this->email_no_fields = 'Torna indietro ed assicurati che tutti i campi siano completi.';
		$this->email_no_member = 'Nessun utente trovato con questo nome';
		$this->email_no_perm = 'Non ti è concesso inviare email tramite questo form.';
		$this->email_sent = 'La tua email è stata inviata.';
		$this->email_subject = 'Titolo:';
		$this->email_to = 'A:';
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
		$this->forum_by = 'Di';
		$this->forum_can_post = 'Puoi rispondere alle discussioni.';
		$this->forum_can_topics = 'Puoi leggere le discussioni.';
		$this->forum_cant_post = 'Non puoi rispodere alle discussioni.';
		$this->forum_cant_topics = 'Non puoi leggere le discussoni.';
		$this->forum_dot = 'punto';
		$this->forum_dot_detail = 'significa che hai partecipato a questa discussione.';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Visitatore';
		$this->forum_hot = 'Caldo';
		$this->forum_icon = 'Icone Messaggi';
		$this->forum_jump = 'Vai al nuovo messaggio della discussione';
		$this->forum_last = 'Ultimo messaggio';
		$this->forum_locked = 'Bloccato';
		$this->forum_moved = 'Spostato';
		$this->forum_msg = '%s Messaggi';
		$this->forum_new = 'Nuovo';
		$this->forum_new_poll = 'Crea Nuovo Sondaggio';
		$this->forum_new_topic = 'Crea Nuova Discussione';
		$this->forum_no_topics = 'Non ci sono discussioni in questo forum.';
		$this->forum_noexist = 'Il forum specificato non esiste.';
		$this->forum_nopost = 'Nessun Messaggio';
		$this->forum_not = 'Nessun';
		$this->forum_noview = 'Non hai il permesso di leggere questo forum.';
		$this->forum_pages = 'Pagine';
		$this->forum_pinned = 'Importante';
		$this->forum_pinned_topic = 'Discussione Importante';
		$this->forum_poll = 'Sondaggio';
		$this->forum_regfirst = 'Non hai il permesso di leggere questo forum. Lo potrai fare solo registrandoti.';
		$this->forum_replies = 'Risposte';
		$this->forum_starter = 'Autore';
		$this->forum_sub = 'Sotto-Forum';
		$this->forum_sub_last_post = 'Ultimo Messaggio';
		$this->forum_sub_replies = 'Risposta';
		$this->forum_sub_topics = 'Argomenti';
		$this->forum_subscribe = 'Mandami una e-mail quando qualcuno apre una nuova discussione';
		$this->forum_topic = 'Discussioni';
		$this->forum_topics_new = 'Ci sono nuovi messaggi in questo forum.';
		$this->forum_topics_old = 'Non ci sono nuovi messaggi in questo forum.';
		$this->forum_views = 'Visite';
		$this->forum_write_topics = 'Puoi aprire nuove discussioni in questo forum.';
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
		$this->help_available_files = 'Aiuto';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'Non ci sono file d\'aiuto nel database.';
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
		$this->login_cant_logged = 'Non sei autenticato. Controlla di aver inserito Nome Utente e Password corretti.<br /><br />Sono case sensitive, quindi \'UsErNaMe\' è diverso da \'Username\'. Controlla anche che i cookies siano abilitati nel tuo bowser.';
		$this->login_cookies = 'I Cookies devono essere abilitati se vuoi connetterti.';
		$this->login_forgot_pass = 'Password dimenticata?';
		$this->login_header = 'Connessione';
		$this->login_logged = 'Ora sei connesso.';
		$this->login_now_out = 'Ora sei disconnesso.';
		$this->login_out = 'Disconnessione';
		$this->login_pass = 'Password'; //Translate
		$this->login_pass_no_id = 'Non esiste alcun iscritto con il nome che hai inserito.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Resetta Password';
		$this->login_pass_sent = 'La tua password è stata sostituita con una casuale. La nuova password è stata spedita all\' indirizzo email associato a questo account.';
		$this->login_sure = 'Sicuro di vorlerti disconnettere da \'%s\'?';
		$this->login_user = 'Nome Utente';
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
		$this->main_activate = 'Il tuo account non è ancora stato attivato.';
		$this->main_activate_resend = 'Rispedisci Email di Attivazione';
		$this->main_admincp = 'amministrazione';
		$this->main_banned = 'Sei stato bannato da questo forum.';
		$this->main_code = 'Codice';
		$this->main_cp = 'pannello di controllo';
		$this->main_full = 'Completo';
		$this->main_help = 'aiuto';
		$this->main_load = 'carico';
		$this->main_login = 'connettiti';
		$this->main_logout = 'disconnetti';
		$this->main_mark = 'mark all'; //Translate
		$this->main_mark1 = 'Mark all topics as read'; //Translate
		$this->main_max_load = 'Siamo spiacenti, ma %s è momentaneamente non disponibile, a causa del numero elevato di utenti connessi.';
		$this->main_members = 'iscritti';
		$this->main_messenger = 'messaggistica';
		$this->main_new = 'nuovo';
		$this->main_next = 'avanti';
		$this->main_prev = 'indietro';
		$this->main_queries = 'queries'; //Translate
		$this->main_quote = 'Citazione';
		$this->main_recent = 'recent posts'; //Translate
		$this->main_recent1 = 'View recent topics since your last visit'; //Translate
		$this->main_register = 'registrati';
		$this->main_reminder = 'Promemoria';
		$this->main_reminder_closed = 'La bacheca è chiusa e visibile solo agli amministratori.';
		$this->main_said = 'ha scritto';
		$this->main_search = 'cerca';
		$this->main_welcome = 'Benvenuto';
		$this->main_welcome_guest = 'Benvenuto!';
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
		$this->members_all = 'tutti';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = 'Scrivi Email a questo utente';
		$this->members_group = 'Gruppo';
		$this->members_joined = 'Iscritto il';
		$this->members_list = 'Lista Iscritti';
		$this->members_member = 'Iscritti';
		$this->members_pm = 'MP';
		$this->members_posts = 'Messaggi';
		$this->members_send_pm = 'Scrivi messaggio privato a questo utente';
		$this->members_title = 'Titolo';
		$this->members_vist_www = 'Visita il sito web di questo utente';
		$this->members_www = 'Sito web';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Vuoi veramente cancellare questo messaggio?';
		$this->mod_confirm_topic_delete = 'Vuoi veramente cancellare questa discussione?';
		$this->mod_error_first_post = 'Non puoi cancellare il primo messaggio di una discussione.';
		$this->mod_error_move_category = 'Non puoi spostare una discussione in una categoria.';
		$this->mod_error_move_create = 'Non hai il permesso di muovere le discussioni da questo forum.';
		$this->mod_error_move_forum = 'Non puoi spostare una discussione in forum che non esiste.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Non puoi muovere una discussione nello stesso forum.';
		$this->mod_label_controls = 'Controlli Moderatore';
		$this->mod_label_description = 'Descrizione';
		$this->mod_label_emoticon = 'Converti emoticons in immagini?';
		$this->mod_label_global = 'Discussione Globale';
		$this->mod_label_mbcode = 'Formatta MbCode?';
		$this->mod_label_move_to = 'Muovi in';
		$this->mod_label_options = 'Opzioni';
		$this->mod_label_post_delete = 'Cancella Messaggio';
		$this->mod_label_post_edit = 'Modifica Messaggio';
		$this->mod_label_post_icon = 'Post Icon'; //Translate
		$this->mod_label_title = 'Titolo';
		$this->mod_label_title_original = 'Titolo Originale';
		$this->mod_label_title_split = 'Dividi Titolo';
		$this->mod_label_topic_delete = 'Elimina Discussione';
		$this->mod_label_topic_edit = 'Modifica Discussione';
		$this->mod_label_topic_lock = 'Blocca Discussione';
		$this->mod_label_topic_move = 'Sposta Discussione';
		$this->mod_label_topic_move_complete = 'Sposta l\'intera discussione nel nuovo forum';
		$this->mod_label_topic_move_link = 'Sposta la discussione nel nuovo forum, e lascia il collegamento alla discussione nel vecchio forum.';
		$this->mod_label_topic_pin = 'Pin Discussione';
		$this->mod_label_topic_split = 'Dividi Discussione';
		$this->mod_missing_post = 'Il messaggio specificato non esiste.';
		$this->mod_missing_topic = 'La discussione specificata non esiste.';
		$this->mod_no_action = 'Devi specificare un\'azione.';
		$this->mod_no_post = 'Devi speficare un messaggio.';
		$this->mod_no_topic = 'Devi specifare una discussione.';
		$this->mod_perm_post_delete = 'Non hai il permesso per eliminare questo messaggio.';
		$this->mod_perm_post_edit = 'Non hai il permesso per moficare questo messaggio.';
		$this->mod_perm_topic_delete = 'Non hai il permesso per eliminare questa discussione.';
		$this->mod_perm_topic_edit = 'Non hai il permesso per modificare questa discussione.';
		$this->mod_perm_topic_lock = 'Non hai il permesso per bloccare questa discussione.';
		$this->mod_perm_topic_move = 'Non hai il permesso per spostare questa discussione.';
		$this->mod_perm_topic_pin = 'Non hai il permesso per pin questa discussione.';
		$this->mod_perm_topic_split = 'Non hai il permesso per dividere questa discussione.';
		$this->mod_perm_topic_unlock = 'Non hai il permesso per sbloccare questa discussione.';
		$this->mod_perm_topic_unpin = 'non hai il permesso per unpin questa discussione.';
		$this->mod_success_post_delete = 'Il messaggio è stato eliminato.';
		$this->mod_success_post_edit = 'Il messaggio è stato modificato.';
		$this->mod_success_split = 'La discussione è stata divisa.';
		$this->mod_success_topic_delete = 'La discussione è stata eliminata.';
		$this->mod_success_topic_edit = 'La discussione è stata modificata.';
		$this->mod_success_topic_move = 'La discussione è stata spostata nel nuovo forum.';
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
		$this->pm_cant_del = 'Non hai il permesso per eliminare questo messaggio.';
		$this->pm_delallmsg = 'Elimina tutti i messaggi';
		$this->pm_delete = 'Elimina';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = 'Messaggio eliminato.';
		$this->pm_deleted_all = 'Messaggi eliminati.';
		$this->pm_error = 'Ci sono stati dei problemi a spedire il tuo messaggio.<br /><br />I seguenti destinatari non esistono: %s<br /><br />I seguenti destinatari non desiderano ricevere messaggi: %s';
		$this->pm_fields = 'Il tuo messaggio non è stato inviato. Controlla che di aver compilato tutti i campi necessari.';
		$this->pm_flood = 'Hai già inviato un messaggio negli ultimi %s secondi, devi aspettare un pò.<br /><br />';
		$this->pm_folder_inbox = 'In arrivo';
		$this->pm_folder_new = '%s nuovi';
		$this->pm_folder_sentbox = 'Inviati';
		$this->pm_from = 'Da';
		$this->pm_group = 'Gruppo';
		$this->pm_guest = 'Come visitatore, non puoi usare la messaggistica. Per favore autenticati o registrati.';
		$this->pm_joined = 'Registrato il';
		$this->pm_messenger = 'Messaggistica';
		$this->pm_msgtext = 'Testo messaggio';
		$this->pm_multiple = 'Separa destinari multipli con ; (punto e virgola)';
		$this->pm_no_folder = 'Devi specificare una cartella.';
		$this->pm_no_member = 'Nessun utente trovato con questo id.';
		$this->pm_no_number = 'Nessun messaggio trovato con questo numero.';
		$this->pm_no_title = 'Nessun Titolo';
		$this->pm_nomsg = 'Non ci sono messaggi in questa cartella.';
		$this->pm_noview = 'Non hai il permesso per leggere questo messaggio.';
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'Questo utente è online';
		$this->pm_personal = 'Messaggistica personale';
		$this->pm_personal_msging = 'Messaggi Personali';
		$this->pm_pm = 'MP';
		$this->pm_posts = 'Messaggi';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Destinario/i';
		$this->pm_reply = 'Rispondi';
		$this->pm_send = 'Invia';
		$this->pm_sendamsg = 'Invia un Messaggio';
		$this->pm_sendingpm = 'Invio un PM';
		$this->pm_sendon = 'Inviato il';
		$this->pm_success = 'Il tuo messaggio è stato inviato.';
		$this->pm_sure_del = 'Vuoi veramente eliminare questo messaggio?';
		$this->pm_sure_delall = 'Vuoi veramente eliminare tutti i messaggi in questa cartella?';
		$this->pm_title = 'Titolo';
		$this->pm_to = 'A';
	}

	function post()
	{
		$this->post_attach = 'Allegati';
		$this->post_attach_add = 'Aggiungi Allegato';
		$this->post_attach_disrupt = 'Aggiungendo o togliendo allegati non perderai il contenuto del messaggio.';
		$this->post_attach_failed = 'Trasferimento allegati fallito. Il file specificato sembra non esistere.';
		$this->post_attach_not_allowed = 'Non puoi allegare file di questo tipo.';
		$this->post_attach_remove = 'Rimuovi allegato';
		$this->post_attach_too_large = 'Il file è troppo grande. La dimensione massima consentita è %d kilobytes.';
		$this->post_cant_create = 'Come visitatore, Non hai il permesso per creare nuove discussioni. Lo potrai fare solo registrandoti.';
		$this->post_cant_create1 = 'Non hai il permesso per creare nuove discussioni.';
		$this->post_cant_enter = 'Il tuo voto non è stato considerato. Probabilmente perchè hai già votato, o non hai il permesso per votare.';
		$this->post_cant_poll = 'Come visitatore, Non hai il permesso per creare sondaggi. Lo puoi fare solo registrandoti.';
		$this->post_cant_poll1 = 'Non hai il permesso per creare sondaggi.';
		$this->post_cant_reply = 'Non hai il permesso per rispondere alle discussioni di questo forum.';
		$this->post_cant_reply1 = 'Come visitatore, Non hai il permesso per rispondere alle discussioni. Lo potrai fare solo registrandoti..';
		$this->post_cant_reply2 = 'Non hai il permesso per rispondere alle discussioni.';
		$this->post_closed = 'Questa discussione è stata chiusa.';
		$this->post_create_poll = 'Crea Sondaggio';
		$this->post_create_topic = 'Crea Discussione';
		$this->post_creating = 'Creazione Discussione';
		$this->post_creating_poll = 'Creazione Sondaggio';
		$this->post_flood = 'Hai già inviato messaggi negli ultimi %s secondi, non puoi ancora inviarne altri.<br /><br />Per favore ritrova fra qualche secondo.';
		$this->post_guest = 'Visitatore';
		$this->post_icon = 'Icona Messaggio';
		$this->post_last_five = 'Ultimi Cinque Messaggi In Ordine Inverso';
		$this->post_length = 'Controlla Lunghezza';
		$this->post_mbcode_address = 'Inserisci un indirizzo';
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
		$this->post_mbcode_detail = 'Enter a description'; //Translate
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
		$this->post_mbcode_length = 'Il tuo messaggio contiene "+length+" caratteri.';
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
		$this->post_msg = 'Messaggio';
		$this->post_must_msg = 'Devi scrivere qualcosa quando invii un messaggio.';
		$this->post_must_options = 'Devi inserire delle opzioni quando crei un sondaggio.';
		$this->post_must_title = 'Devi scrivere un titolo quando crei una discussione.';
		$this->post_new_poll = 'Nuovo sondaggio';
		$this->post_new_topic = 'Nuova discussione';
		$this->post_no_forum = 'Questo forum non è stato trovato.';
		$this->post_no_topic = 'Nessuna discussione specificata.';
		$this->post_no_vote = 'Devi scegliere un\'opzione da votare.';
		$this->post_option_emoticons = 'Converti emoticons in immagini?';
		$this->post_option_global = 'Imposta come Discussione Globale?';
		$this->post_option_mbcode = 'Formatta MbCode?';
		$this->post_optional = 'facoltativa';
		$this->post_options = 'Opzioni';
		$this->post_poll_options = 'Opzioni Sondaggio';
		$this->post_poll_row = 'Una opzione per riga';
		$this->post_posted = 'Inviato il';
		$this->post_posting = 'Invio';
		$this->post_preview = 'Anteprima';
		$this->post_reply = 'Rispondi';
		$this->post_reply_topic = 'Rispondi alla discussione';
		$this->post_replying = 'Rispondi Alla Discussione';
		$this->post_replying1 = 'Rispondi';
		$this->post_smiles = 'Smilies Cliccabili';
		$this->post_too_many_options = 'Devono essere presenti da 2 a %d opzioni per un sondaggio.';
		$this->post_topic_detail = 'Descrizione Discussione';
		$this->post_topic_title = 'Titolo Discussione';
		$this->post_view_topic = 'Visualizza l\'intera Discussione';
		$this->post_voting = 'Vota';
	}

	function printer()
	{
		$this->printer_back = 'Indietro';
		$this->printer_not_found = 'La discussione non è stata trovata. Potrebbe essere stata spostata, eliminata o potrebbe non essere mai esistita.';
		$this->printer_not_found_title = 'Discussione Non Trovata';
		$this->printer_perm_topics = 'Non hai il permesso per visualizzare la discussione.';
		$this->printer_perm_topics_guest = 'Non hai il permesso per leggere la discussione. Lo potrai fare solo registrandoti.';
		$this->printer_posted_on = 'Inviato il';
		$this->printer_send = 'Invia alla stampante';
	}

	function profile()
	{
		$this->profile_aim_sn = 'Nome AIM';
		$this->profile_av_sign = 'Avatar e Firma';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Compleanno';
		$this->profile_contact = 'Contatto';
		$this->profile_email_address = 'Indirizzo Email';
		$this->profile_fav = 'Forum Preferito';
		$this->profile_fav_forum = '%s (%d%% sono messaggi di questo utente)';
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = 'Numero ICQ';
		$this->profile_info = 'Informazioni';
		$this->profile_interest = 'Interessi';
		$this->profile_joined = 'Iscritto il';
		$this->profile_last_post = 'Ultimo Messaggio';
		$this->profile_list = 'Lista Utenti';
		$this->profile_location = 'Località';
		$this->profile_member = 'Gruppo';
		$this->profile_member_title = 'Titolo';
		$this->profile_msn = 'Identità MSN';
		$this->profile_must_user = 'Devi specificare un utente per vederne il profilo.';
		$this->profile_no_member = 'Non ci sono iscritti con questo user id. L\'account potrebbe essere stato cancellato.';
		$this->profile_none = '[ Nessuno ]';
		$this->profile_not_post = 'non ha ancora inviato messaggi.';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'Questo utente è online';
		$this->profile_pm = 'Messaggi Privati';
		$this->profile_postcount = '%s totali, %s al giorno';
		$this->profile_posts = 'Messaggi';
		$this->profile_private = '[ Privato ]';
		$this->profile_profile = 'Profilo';
		$this->profile_signature = 'Firma';
		$this->profile_unkown = '[ Sconosciuto ]';
		$this->profile_view_profile = 'Visualizza Profilo';
		$this->profile_www = 'Sito Web';
		$this->profile_yahoo = 'Identità Yahoo';
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
		$this->recent_by = 'Di';
		$this->recent_can_post = 'Puoi rispondere alle discussioni.';
		$this->recent_can_topics = 'Puoi leggere le discussioni.';
		$this->recent_cant_post = 'Non puoi rispodere alle discussioni.';
		$this->recent_cant_topics = 'Non puoi leggere le discussoni.';
		$this->recent_dot = 'punto';
		$this->recent_dot_detail = 'significa che hai partecipato a questa discussione.';
		$this->recent_forum = 'Forum'; //Translate
		$this->recent_guest = 'Visitatore';
		$this->recent_hot = 'Caldo';
		$this->recent_icon = 'Icone Messaggi';
		$this->recent_jump = 'Vai al nuovo messaggio della discussione';
		$this->recent_last = 'Ultimo messaggio';
		$this->recent_locked = 'Bloccato';
		$this->recent_moved = 'Spostato';
		$this->recent_msg = '%s Messaggi';
		$this->recent_new = 'Nuovo';
		$this->recent_new_poll = 'Crea Nuovo Sondaggio';
		$this->recent_new_topic = 'Crea Nuova Discussione';
		$this->recent_no_topics = 'Non ci sono discussioni in questo forum.';
		$this->recent_noexist = 'Il forum specificato non esiste.';
		$this->recent_nopost = 'Nessun Messaggio';
		$this->recent_not = 'Nessun';
		$this->recent_noview = 'Non hai il permesso di leggere questo forum.';
		$this->recent_pages = 'Pagine';
		$this->recent_pinned = 'Importante';
		$this->recent_pinned_topic = 'Discussione Importante';
		$this->recent_poll = 'Sondaggio';
		$this->recent_regfirst = 'Non hai il permesso di leggere questo forum. Lo potrai fare solo registrandoti.';
		$this->recent_replies = 'Risposte';
		$this->recent_starter = 'Autore';
		$this->recent_sub = 'Sotto-Forum';
		$this->recent_sub_last_post = 'Ultimo Messaggio';
		$this->recent_sub_replies = 'Risposta';
		$this->recent_sub_topics = 'Argomenti';
		$this->recent_subscribe = 'Mandami una e-mail quando qualcuno apre una nuova discussione';
		$this->recent_topic = 'Discussioni';
		$this->recent_topics_new = 'Ci sono nuovi messaggi in questo forum.';
		$this->recent_topics_old = 'Non ci sono nuovi messaggi in questo forum.';
		$this->recent_views = 'Visite';
		$this->recent_write_topics = 'Puoi aprire nuove discussioni in questo forum.';
	}

	function register()
	{
		$this->register_activated = 'Il tuo account è stato attivato!';
		$this->register_activating = 'Attivazione Account';
		$this->register_activation_error = 'C\'è stato un errore durante l\'attivazione del tuo account. Controlla che nella barra indirizzi del tuo browser ci sia l\'intera url contenuta nell\'email che hai ricevuto. Se il problema persiste contatta l\'amministratore.';
		$this->register_confirm_passwd = 'Conferma Password';
		$this->register_done = 'Sei registrato! Ora puoi autenticarti.';
		$this->register_email = 'Indirizzo Email';
		$this->register_email_invalid = 'L\'indirizzo email che hai inserito non è valido.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'L\'indirizzo email che hai inserito risulta già usato da un altro utente.';
		$this->register_fields = 'Non hai completato tutti i campi.';
		$this->register_image = 'Per favore scrivi il testo che vedi nell\'immagine.';
		$this->register_image_invalid = 'Per verificare che tua sia un utente umano, devi inserire il testo che vedi nell\'immagine.';
		$this->register_must_activate = 'Sei stato registrato. Un\' email di attivazione è stata spedita a %s con le informazioni necessarie ad attivare il tuo account. Il tuo account sarà limitato finchè non lo attiverai.';
		$this->register_name_invalid = 'Il nome che hai inserito è troppo lungo.';
		$this->register_name_taken = 'Questo nome utente è già in uso.';
		$this->register_new_user = 'Nome Utente Desiderato';
		$this->register_pass_invalid = 'La password che hai inserito non è valida. Assicurati di aver usato solo caratteri validi come lettere, numeri, trattini, underscores, o spazi, e che sia di almeno 5 caratteri.';
		$this->register_pass_match = 'Le passwords inserite non corrispondono.';
		$this->register_passwd = 'Password'; //Translate
		$this->register_reg = 'Registrati';
		$this->register_reging = 'Registrazione';
		$this->register_tos_i_agree = 'I agree to the above terms'; //Translate
		$this->register_tos_read = 'Please read the following terms of service'; //Translate
	}

	function rssfeed()
	{
		$this->rssfeed_posted_by = 'Posted by'; //Translate
	}

	function search()
	{
		$this->search_advanced = 'Opzioni Avanzate';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Ricerca Semplice';
		$this->search_characters = 'caratteri di un post';
		$this->search_day = 'giorno';
		$this->search_days = 'giorni';
		$this->search_exact_name = 'nome esatto';
		$this->search_flood = 'Hai già eseguito una ricerca negli ultimi %s secondi, devi aspettare un pò.<br /><br />';
		$this->search_for = 'Cerca Per';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Gruppo';
		$this->search_guest = 'Visitatore';
		$this->search_in = 'Cerca In';
		$this->search_in_posts = 'Cerca solo nei messaggi';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Iscritto il';
		$this->search_level = 'Livello Utente';
		$this->search_match = 'Cerca Parole Esatte';
		$this->search_matches = 'Corrispondenze';
		$this->search_month = 'mese';
		$this->search_months = 'mesi';
		$this->search_mysqldoc = 'Documentazione MySQL';
		$this->search_newer = 'recenti';
		$this->search_no_results = 'La tua ricerca non ha dato risultati.';
		$this->search_no_words = 'Devi specificare dei termini di ricerca.<br /><br />Ogni termine deve essere più lungo di 3 caratteri, incluse lettere, numeri, apostrofi, e underscore.';
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = 'datati';
		$this->search_online = 'Questo utente è online';
		$this->search_only_display = 'Visualizza solo i primi';
		$this->search_partial_name = 'nome parziale';
		$this->search_post_icon = 'Icona Messaggio';
		$this->search_posted_on = 'Scritto il';
		$this->search_posts = 'Messaggi';
		$this->search_posts_by = 'Solo scritti da';
		$this->search_regex = 'Cerca per Espressioni Regolari';
		$this->search_regex_failed = 'La tua espressione regolare non è valida. Per favore consulta la documentazione MySQL.';
		$this->search_relevance = 'Rilevanza Messaggio: %d%%';
		$this->search_replies = 'Messaggi';
		$this->search_result = 'Risultati Ricerca';
		$this->search_search = 'Cerca';
		$this->search_select_all = 'Seleziona Tutto';
		$this->search_show_posts = 'Mostra direttamente i messaggi';
		$this->search_sound = 'Cerca per Assonanza';
		$this->search_starter = 'Autore';
		$this->search_than = 'di';
		$this->search_topic = 'Discussione';
		$this->search_unreg = 'Non registrato';
		$this->search_week = 'settimana';
		$this->search_weeks = 'settimane';
		$this->search_year = 'anno';
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
		$this->topic_attached = 'File allegato:';
		$this->topic_attached_downloads = 'downloads'; //Translate
		$this->topic_attached_perm = 'Non hai il permesso per il download di questo file.';
		$this->topic_attached_title = 'File Allegato';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = 'Crea Nuovo Sondaggio';
		$this->topic_create_topic = 'Crea Nuova Discussione';
		$this->topic_delete = 'Elimina';
		$this->topic_delete_post = 'Elimina questo messaggio';
		$this->topic_edit = 'Modifica';
		$this->topic_edit_post = 'Modifica questo messaggio';
		$this->topic_edited = 'Ultima modifica %s by %s';
		$this->topic_error = 'Errore';
		$this->topic_group = 'Gruppo';
		$this->topic_guest = 'Visualizza';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Iscritto il';
		$this->topic_level = 'Livello Utente';
		$this->topic_links_aim = 'Invia un messaggio AIM a %s';
		$this->topic_links_email = 'Invia una email a %s';
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'Invia un messaggio ICQ a %s';
		$this->topic_links_msn = 'Visualizza il profilo MSN di %s';
		$this->topic_links_pm = 'Invia un Messaggio Privato %s';
		$this->topic_links_web = 'Visita il sito web di %s';
		$this->topic_links_yahoo = 'Invia un messaggio a %s con Yahoo! Messenger';
		$this->topic_lock = 'Blocca';
		$this->topic_locked = 'Discussione Bloccata';
		$this->topic_move = 'Sposta';
		$this->topic_no_votes = 'Non ci sono voti per questo sondaggio.';
		$this->topic_not_found = 'Discussione Non Trovata';
		$this->topic_not_found_message = 'La discussione non è stata trovata. Potrebbe essere stata spostata, cancellata o potrebbe non essere mai esistita.';
		$this->topic_offline = 'This member is currently offline'; //Translate
		$this->topic_online = 'Questo utente è online';
		$this->topic_options = 'Opzioni Discussione';
		$this->topic_pages = 'Pagine';
		$this->topic_perm_view = 'Non hai il permesso per leggere le discussioni.';
		$this->topic_perm_view_guest = 'Non hai il permesso per leggere le discussioni. Lo potrai fare solo registrandoti.';
		$this->topic_pin = 'In Rilievo';
		$this->topic_posted = 'Inviato';
		$this->topic_posts = 'Messaggi';
		$this->topic_print = 'Visualizza Stampabile';
		$this->topic_quote = 'Rispondi riportando questa discussione';
		$this->topic_reply = 'Rispondi alla Discussione';
		$this->topic_split = 'Dividi';
		$this->topic_split_finish = 'Esegui la divisione';
		$this->topic_split_keep = 'Non muovere';
		$this->topic_split_move = 'Dividi e Muovi';
		$this->topic_subscribe = 'Inviami una email quando qualcuno risponde a questa discussione';
		$this->topic_top = 'Vai all\'inizio della pagina';
		$this->topic_unlock = 'Sblocca';
		$this->topic_unpin = 'Non in Rilievo';
		$this->topic_unreg = 'Non Registrato';
		$this->topic_view = 'Visualizza Risultati';
		$this->topic_viewing = 'Visualizza Discussioni';
		$this->topic_vote = 'Vota';
		$this->topic_vote_count_plur = '%d voti';
		$this->topic_vote_count_sing = '%d voto';
		$this->topic_votes = 'Voti';
	}

	function universal()
	{
		$this->aim = 'AIM'; //Translate
		$this->based_on = 'based on';
		$this->board_by = 'Di';
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
		$this->submit = 'Invia';
		$this->subscribe = 'Subscribe'; //Translate
		$this->today = 'Oggi';
		$this->website = 'WWW'; //Translate
		$this->yahoo = 'Yahoo'; //Translate
		$this->yes = 'Yes'; //Translate
		$this->yesterday = 'Ieri';
	}
}
?>