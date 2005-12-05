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
 * French language module
 *
 * @author Stephane Revel <st_garp98@hotmail.com>
 * @since 1.0.0 Beta 4.0
 **/
class fr
{
	function active()
	{
		$this->active_last_action = 'Dernière action';
		$this->active_modules_active = 'Consulte les utilisateurs actifs';
		$this->active_modules_board = 'Consulte l\'accueil';
		$this->active_modules_cp = 'Consulte son panneau de contrôle';
		$this->active_modules_forum = 'Consulte un forum: %s';
		$this->active_modules_help = 'Utilise l\'aide';
		$this->active_modules_login = 'Se connecte / déconnecte';
		$this->active_modules_members = 'Consulte la liste des membres';
		$this->active_modules_mod = 'Modère';
		$this->active_modules_pm = 'Utilise la messagerie';
		$this->active_modules_post = 'Poste un message';
		$this->active_modules_printer = 'Imprime un sujet: %s';
		$this->active_modules_profile = 'Consulte un profil: %s';
		$this->active_modules_recent = 'Viewing recent posts'; //Translate
		$this->active_modules_search = 'Cherche';
		$this->active_modules_topic = 'Consulte un sujet: %s';
		$this->active_time = 'Date';
		$this->active_user = 'Utilisateur';
		$this->active_users = 'Utilisateurs actifs';
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
		$this->board_active_users = 'Utilisateurs actifs';
		$this->board_birthdays = 'Anniversaires du jour :';
		$this->board_bottom_page = 'Go to the bottom of the page'; //Translate
		$this->board_can_post = 'Vous pouvez répondre dans ce forum.';
		$this->board_can_topics = 'Vous pouvez voir les messages de ce forum.';
		$this->board_cant_post = 'Vous ne pouvez pas répondre dans ce forum.';
		$this->board_cant_topics = 'Vous ne pouvez pas voir les messages de ce forum.';
		$this->board_forum = 'Forum'; //Translate
		$this->board_guests = 'invités';
		$this->board_last_post = 'Dernier message';
		$this->board_mark = 'Marquer tous les messages comme lus';
		$this->board_mark1 = 'Tous les forums et messages ont été marqués comme lus.';
		$this->board_members = 'membres';
		$this->board_message = 'Message de %s';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Aucun membre ne fête son anniversaire aujourd\'hui.';
		$this->board_nobody = 'Actuellement aucun membre n\'est en ligne.';
		$this->board_nopost = 'Aucun message.';
		$this->board_noview = 'Vous n\'avez pas la permission de voir les forums';
		$this->board_regfirst = 'Vous n\'avez pas la permission de voir les forums. Si vous vous enregistrez, vous le pourrez.';
		$this->board_replies = 'Réponses';
		$this->board_stats = 'Statistiques';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_top_page = 'Go to the top of the page'; //Translate
		$this->board_topics = 'Sujets';
		$this->board_users = 'utilisateurs';
		$this->board_write_topics = 'Vous pouvez créer un fil de discussions dans ce forum.';
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
		$this->cp_aim = 'Pseudo AIM';
		$this->cp_already_member = 'L\'email que vous avez entré est déjà attribué à un membre.';
		$this->cp_apr = 'Avril';
		$this->cp_aug = 'Août';
		$this->cp_avatar_current = 'Votre avatar actuel';
		$this->cp_avatar_error = 'Erreur d\'avatar';
		$this->cp_avatar_must_select = 'Vous devez choisir un avatar.';
		$this->cp_avatar_none = 'N\'utilisez pas d\'avatar.';
		$this->cp_avatar_pixels = 'pixels'; //Translate
		$this->cp_avatar_select = 'Choisissez un avatar';
		$this->cp_avatar_size_height = 'La hauteur de l\'avatar doit être comprise entre 1 et ';
		$this->cp_avatar_size_width = 'La largeur de l\'avatar doit être comprise entre 1 et ';
		$this->cp_avatar_upload = 'Télécharger un avatar depuis votre disque dur';
		$this->cp_avatar_upload_failed = 'Erreur de téléchargement de votre avatar. Le fichier n\'existe peut-être pas.';
		$this->cp_avatar_upload_not_image = 'Vous ne pouvez envoyer des images que pour votre avatar. ';
		$this->cp_avatar_upload_too_large = 'L\'avatar que vous avez choisi est trop gros. La taille maxiale est %d Ko.';
		$this->cp_avatar_url = 'Indiquez le chemin de votre avatar';
		$this->cp_avatar_use = 'Utilisez l\'avatar que vous avez téléchargé';
		$this->cp_bday = 'Anniversaire';
		$this->cp_been_updated = 'Votre profil a été mis à jour.';
		$this->cp_been_updated1 = 'Votre avatar a été mis à jour. ';
		$this->cp_been_updated_prefs = 'Vos préférences ont été mises à jour. ';
		$this->cp_changing_pass = 'Changer son mot de passe';
		$this->cp_contact_pm = 'Permettre aux autres de vous contacter par le Messenger?';
		$this->cp_cp = 'Profil';
		$this->cp_current_avatar = 'Avatar actuel';
		$this->cp_current_time = 'Il est actuellement %s.';
		$this->cp_custom_title = 'Custom Member Title'; //Translate
		$this->cp_custom_title2 = 'This is a privledge reserved for board administrators'; //Translate
		$this->cp_dec = 'Décembre';
		$this->cp_editing_avatar = 'Met à jour son avatar';
		$this->cp_editing_profile = 'Met à jour son profil';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Permettre aux autres membres de vous contacter par email?';
		$this->cp_email_invaid = 'L\'email entré n\'est pas valide. ';
		$this->cp_err_avatar = 'Erreur en mettant à jour l\'avatar';
		$this->cp_err_updating = 'Erreur en mettant à jour le profil';
		$this->cp_feb = 'Février';
		$this->cp_file_type = 'L\'avatar que vous avez entré n\'est pas valide. Vérifiez que l\'URL est correcte, et que le fichier choisi est soit gif, jpg or png.';
		$this->cp_format = 'Format du nom';
		$this->cp_gtalk = 'GTalk Account'; //Translate
		$this->cp_header = 'Profil';
		$this->cp_height = 'Hauteur';
		$this->cp_icq = 'N° ICQ';
		$this->cp_interest = 'Intérêts';
		$this->cp_jan = 'Janvier';
		$this->cp_july = 'Juillet';
		$this->cp_june = 'Juin';
		$this->cp_label_edit_avatar = 'Editer son avatar';
		$this->cp_label_edit_pass = 'Changer son mot de passe';
		$this->cp_label_edit_prefs = 'Change ses préférences du forum';
		$this->cp_label_edit_profile = 'Editer son profil';
		$this->cp_label_edit_subs = 'Editer ses souscriptions';
		$this->cp_language = 'Langage';
		$this->cp_less_charac = 'Votre nom doit comprendre moins de 32 caractères.';
		$this->cp_location = 'Localisation';
		$this->cp_login_first = 'Vous devez être connecté pour accéder à votre profil';
		$this->cp_mar = 'Mars';
		$this->cp_may = 'Mai';
		$this->cp_msn = 'Pseudo MSN';
		$this->cp_must_orig = 'Votre nom doit être identique à celui que vous avez choisi. Vous ne pouvez changer que la casse et l\'espacement. ';
		$this->cp_new_notmatch = 'Les deux nouveaux mots de passe que vous avez saisis sont différents.';
		$this->cp_new_pass = 'Nouveau mot de passe';
		$this->cp_no_flash = 'Les avatars au format Flash ne sont pas autorisés sur ce forum.';
		$this->cp_not_exist = 'La date que vous avez spécifiée (%s) n\'existe pas!';
		$this->cp_nov = 'Novembre';
		$this->cp_oct = 'Octobre';
		$this->cp_old_notmatch = 'L\'ancien mot de passe que vous avez saisi est incorrect.';
		$this->cp_old_pass = 'Ancien mot de passe';
		$this->cp_pass_notvaid = 'Votre mot de passe est invalide. Assurez vous que vous utilisez des caractères corrects.';
		$this->cp_preferences = 'Change ses préférences';
		$this->cp_privacy = 'Options de vie privée';
		$this->cp_repeat_pass = 'Confirmation du nouveau mot de passe';
		$this->cp_sept = 'Septembre';
		$this->cp_show_active = 'Montrer votre activité pendant l\'utilisation du forum? ';
		$this->cp_show_email = 'Montrer l\'email dans le profil?';
		$this->cp_signature = 'Signature'; //Translate
		$this->cp_size_max = 'La taille de l\'avatar que vous avez choisi est trop importante. La taille maximale permise est %s par %s pixels. ';
		$this->cp_skin = 'Thème du forum';
		$this->cp_sub_change = 'Changer les Abonnements';
		$this->cp_sub_delete = 'Supprimer';
		$this->cp_sub_expire = 'Date d\'expiration';
		$this->cp_sub_name = 'Nom de souscription';
		$this->cp_sub_no_params = 'Aucun paramètre n\'a été donné.';
		$this->cp_sub_success = 'Vous avez souscrit à %s.';
		$this->cp_sub_type = 'Type de souscription';
		$this->cp_sub_updated = 'Les abonnements sélectionnés ont été supprimés.';
		$this->cp_topic_option = 'Options du sujet';
		$this->cp_updated = 'Profil mis à jour';
		$this->cp_updated1 = 'Avatar mis à jour';
		$this->cp_updated_prefs = 'Préférences mises à jour';
		$this->cp_user_exists = 'Un utilisateur avec le même format de nom existe déjà.';
		$this->cp_valided = 'Votre mot de passe a été changé.';
		$this->cp_view_avatar = 'Voir les avatars?';
		$this->cp_view_emoticon = 'Voir les smileys?';
		$this->cp_view_signature = 'Voir les signatures?';
		$this->cp_welcome = 'Bienvenue dans le panneau de contrôle de l\'utilisateur. D\'ici, vous pouvez configurer votre compte. Merci de choisir parmi les options ci-dessous.';
		$this->cp_width = 'Largeur';
		$this->cp_www = 'Page d\'accueil';
		$this->cp_yahoo = 'Pseudo Yahoo';
		$this->cp_zone = 'Fuseau horaire';
	}

	function email()
	{
		$this->email_blocked = 'Ce membre n\'accepte pas d\'email envoyé depuis ce formulaire. ';
		$this->email_email = 'Courriel';
		$this->email_msgtext = 'Corps du message :';
		$this->email_no_fields = 'Revenez en arrière et vérifiez que tous les champs ont été remplis.';
		$this->email_no_member = 'Aucun membre ne porte ce nom';
		$this->email_no_perm = 'Vous n\'avez pas la permission d\'envoyer des emails par le forum. ';
		$this->email_sent = 'Votre email a été envoyé.';
		$this->email_subject = 'Sujet :';
		$this->email_to = 'A :';
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
		$this->forum_by = 'Par';
		$this->forum_can_post = 'Vous pouvez répondre dans ce forum.';
		$this->forum_can_topics = 'Vous pouvez voir les sujets dans ce forum. ';
		$this->forum_cant_post = 'Vous ne pouvez pas répondre dans ce forum. ';
		$this->forum_cant_topics = 'Vous ne pouvez pas voir les sujets dans ce forum. ';
		$this->forum_dot = 'point';
		$this->forum_dot_detail = 'Affiche ce que vous avez posté dans le sujet';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Invité';
		$this->forum_hot = 'Chaud';
		$this->forum_icon = 'Icone';
		$this->forum_jump = 'Aller au dernier message de ce sujet';
		$this->forum_last = 'Dernier message';
		$this->forum_locked = 'Verrouillé';
		$this->forum_moved = 'Déplacé';
		$this->forum_msg = 'Message de %s';
		$this->forum_new = 'Nouveau';
		$this->forum_new_poll = 'Créer un nouveau sondage';
		$this->forum_new_topic = 'Créer un nouveau sujet';
		$this->forum_no_topics = 'Il n\'y a aucun sujet dans ce forum';
		$this->forum_noexist = 'Ce forum n\'existe pas.';
		$this->forum_nopost = 'Aucun message';
		$this->forum_not = 'Aïe!';
		$this->forum_noview = 'Vous n\'avez pas la permission de voir les forums.';
		$this->forum_pages = 'Pages'; //Translate
		$this->forum_pinned = 'Epinglé';
		$this->forum_pinned_topic = 'Sujet épinglé';
		$this->forum_poll = 'Sondage';
		$this->forum_regfirst = 'Vous n\'avez pas la permission de voir les forums. Si vous vous enregistrez, vous pourrez le faire.';
		$this->forum_replies = 'Réponses';
		$this->forum_starter = 'Débuté par';
		$this->forum_sub = 'Sous-Forum';
		$this->forum_sub_last_post = 'Dernier message';
		$this->forum_sub_replies = 'Réponses';
		$this->forum_sub_topics = 'Sujets';
		$this->forum_subscribe = 'M\envoyer un email en cas de nouveaux posts dans ce forum. ';
		$this->forum_topic = 'Sujet';
		$this->forum_views = 'Affichages';
		$this->forum_write_topics = 'Vous pouvez créer des sujets dans ce forum. ';
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
		$this->help_available_files = 'Fichiers d\'aide disponibles';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'Il n\'y a aucun fichier d\'aide.';
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
		$this->login_cant_logged = 'La connexion a échoué. Vérifiez que vos nom d\'utilisateur et mot de passe sont corrects.<br /><br />Ils sont sensibles à la casse, donc \'UtIlIsAtEuR\' est différent de \'utilisateur\'. Merci aussi de vérifier que les cookies sont activés dans votre navigateur.';
		$this->login_cookies = 'Vous devez activer les cookies pour vous connecter.';
		$this->login_forgot_pass = 'Mot de passe oublié? ';
		$this->login_header = 'Connexion';
		$this->login_logged = 'Vous êtes maintenant connecté.';
		$this->login_now_out = 'Vous êtes maintenant déconnecté.';
		$this->login_out = 'Déconnexion';
		$this->login_pass = 'Mot de passe';
		$this->login_pass_no_id = 'Aucun membre ne porte le nom d\'utilisateur entré.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Votre mot de passe a été réinitialisé. Le nouveau mot de passe a été envoyé à l\'email associé à votre compte. ';
		$this->login_sure = 'Etes vous certain de vouloir vous déconnecter de \'%s\' ?';
		$this->login_user = 'Nom d\'utilisateur';
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
		$this->main_activate = 'Votre compte n\'a pas encore été activé. ';
		$this->main_activate_resend = 'Renvoyer l\'email d\'activation';
		$this->main_admincp = 'Administration';
		$this->main_banned = 'Il vous a été interdit de consulter cette partie des forums.';
		$this->main_code = 'Code'; //Translate
		$this->main_cp = 'Profil';
		$this->main_full = 'Complet';
		$this->main_help = 'Aide';
		$this->main_load = 'chargé';
		$this->main_login = 'Connexion';
		$this->main_logout = 'Déconnexion';
		$this->main_mark = 'mark all'; //Translate
		$this->main_mark1 = 'Mark all topics as read'; //Translate
		$this->main_max_load = 'Nous sommes désolés, mais %s est actuellement indisponible, à cause d\'un trop grand nombre d\'utilisateurs connectés.';
		$this->main_members = 'Membres';
		$this->main_messenger = 'Messages persos';
		$this->main_new = 'nouveau';
		$this->main_next = 'suivant';
		$this->main_prev = 'prrécent';
		$this->main_queries = 'requêtes';
		$this->main_quote = 'Citer';
		$this->main_recent = 'recent posts'; //Translate
		$this->main_recent1 = 'View recent topics since your last visit'; //Translate
		$this->main_register = 'S\'enregistrer';
		$this->main_reminder = 'Rappel';
		$this->main_reminder_closed = 'Les forums sont fermés et consultables uniquement par les administrateurs.';
		$this->main_said = 'a dit';
		$this->main_search = 'Rechercher';
		$this->main_topics_new = 'Il y a des nouveaux messages dans ce forum.';
		$this->main_topics_old = 'Il n\'y a pas de nouveaux messages dans ce forum.';
		$this->main_welcome = 'Bienvenue';
		$this->main_welcome_guest = 'Bienvenue invité !';
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
		$this->members_all = 'tous';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = 'Envoyer un email à ce  membre';
		$this->members_group = 'Groupe';
		$this->members_joined = 'Rejoint';
		$this->members_list = 'Liste des membres';
		$this->members_member = 'Membre';
		$this->members_pm = 'Message Perso';
		$this->members_posts = 'Messages';
		$this->members_send_pm = 'Envoyer un message privé à ce membre';
		$this->members_title = 'Titre';
		$this->members_vist_www = 'Visiter le site web de ce membre';
		$this->members_www = 'Site Web';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Etes-vous sûr de vouloir effacer ce message?';
		$this->mod_confirm_topic_delete = 'Etes-vous sûr de vouloir effacer ce sujet?';
		$this->mod_error_first_post = 'Vous ne pouvez pas effacer le premier message dans un sujet.';
		$this->mod_error_move_category = 'Vous ne pouvez pas déplacer un sujet dans une catégorie.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Vous ne pouvez pas déplacer un sujet vers un forum qui n\'existe pas. ';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Le forum vers lequel vous essayez de déplacer ce sujet est le même que celui de départ.';
		$this->mod_label_controls = 'Contrôles de modération';
		$this->mod_label_description = 'Description'; //Translate
		$this->mod_label_emoticon = 'Convertir les smileys en images?';
		$this->mod_label_global = 'Sujet général';
		$this->mod_label_mbcode = 'Formater le MbCode?';
		$this->mod_label_move_to = 'Déplacer vers ';
		$this->mod_label_options = 'Options'; //Translate
		$this->mod_label_post_delete = 'Effacer le message';
		$this->mod_label_post_edit = 'Editer le message';
		$this->mod_label_post_icon = 'Post Icon'; //Translate
		$this->mod_label_title = 'Titre';
		$this->mod_label_title_original = 'Titre original ';
		$this->mod_label_title_split = 'Découper le titre';
		$this->mod_label_topic_delete = 'Effacer le sujet';
		$this->mod_label_topic_edit = 'Editer le sujet';
		$this->mod_label_topic_lock = 'Verrouiller le sujet';
		$this->mod_label_topic_move = 'Déplacer le sujet';
		$this->mod_label_topic_move_complete = 'Transférer intégralement le sujet vers un nouveau forum';
		$this->mod_label_topic_move_link = 'Transférer le sujet vers le nouveau forum, et laisser un lien vers le nouvel emplacement dans l\'ancien forum. ';
		$this->mod_label_topic_pin = 'Epingler le sujet';
		$this->mod_label_topic_split = 'Découper le sujet';
		$this->mod_missing_post = 'Le message que vous avez choisi n\'existe pas. ';
		$this->mod_missing_topic = 'Le sujet que vous avez choisi n\'existe pas. ';
		$this->mod_no_action = 'Vous devez choisir une action.';
		$this->mod_no_post = 'Vous devez choisir un message.';
		$this->mod_no_topic = 'Vous devez choisir un sujet.';
		$this->mod_perm_post_delete = 'Vous n\'avez pas le droit d\'effacer ce message.';
		$this->mod_perm_post_edit = 'Vous n\'avez pas le droit d\'éditer ce message.';
		$this->mod_perm_topic_delete = 'Vous n\'avez pas le droit d\'effacer ce sujet.';
		$this->mod_perm_topic_edit = 'Vous n\'avez pas le droit d\'éditer ce sujet. ';
		$this->mod_perm_topic_lock = 'Vous n\'avez pas le droit de verrouiller ce sujet. ';
		$this->mod_perm_topic_move = 'Vous n\'avez pas le droit de déplacer ce sujet.';
		$this->mod_perm_topic_pin = 'Vous n\'avez pas le droit d\'épingler ce sujet. ';
		$this->mod_perm_topic_split = 'Vous n\'avez pas la permission de découper ce sujet. ';
		$this->mod_perm_topic_unlock = 'Vous n\'avez pas le droit de déverrouiller ce sujet.';
		$this->mod_perm_topic_unpin = 'Vous n\'avez pas le droit de \'désépingler\' ce sujet.';
		$this->mod_success_post_delete = 'Le message a été effacé.';
		$this->mod_success_post_edit = 'Message édité';
		$this->mod_success_split = 'Le sujet a été découpé avec succès. ';
		$this->mod_success_topic_delete = 'Sujet effacé.';
		$this->mod_success_topic_edit = 'Le sujet a été édité avec succès.';
		$this->mod_success_topic_move = 'Le sujet a été déplacé avec succès.';
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
		$this->pm_cant_del = 'Vous n\'avez pas la permission de supprimer ce message.';
		$this->pm_delallmsg = 'Supprimer tous les messages';
		$this->pm_delete = 'Supprimer';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = 'Message supprimé.';
		$this->pm_deleted_all = 'Messages supprimés.';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Votre message n\'a pas pu être envoyé. Vérifiez que tous les champs requis sont remplis.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Boîte de réception';
		$this->pm_folder_new = '%s nouveaux';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'De';
		$this->pm_group = 'Groupe';
		$this->pm_guest = 'En tant qu\'invité, vous ne pouvez pas utiliser la messagerie privée. Merci de vous connecter ou de vous enregistrer.';
		$this->pm_joined = 'Rejoint';
		$this->pm_messenger = 'Messages persos';
		$this->pm_msgtext = 'Texte du message';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Vous devez choisir un dossier.';
		$this->pm_no_member = 'Aucun membre n\'a été trouvé avec l\'id spécifié.';
		$this->pm_no_number = 'Ce message n\'existe pas.';
		$this->pm_no_title = 'Pas de sujet';
		$this->pm_nomsg = 'Il n\'y a aucun message dans ce dossier.';
		$this->pm_noview = 'Vous n\'avez pas la permission de voir ce message.';
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_personal = 'Messages privés';
		$this->pm_personal_msging = 'Messagerie privée';
		$this->pm_pm = 'Messages privés';
		$this->pm_posts = 'Messages';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Répondre';
		$this->pm_send = 'Envoyer';
		$this->pm_sendamsg = 'Envoyer un message';
		$this->pm_sendingpm = 'Vous envoyez un message privé';
		$this->pm_sendon = 'Envoyé';
		$this->pm_success = 'Votre messgae a été envoyé correctement.';
		$this->pm_sure_del = 'Etes vous certain de vouloir supprimer ce message ?';
		$this->pm_sure_delall = 'Etes vous certain de vouloir supprimer tous les messages de ce dossier?';
		$this->pm_title = 'Titre';
		$this->pm_to = 'A';
	}

	function post()
	{
		$this->post_attach = 'Fichiers attachés';
		$this->post_attach_add = 'Attacher un fichier';
		$this->post_attach_disrupt = 'Ajouter ou enlever des fichiers attachés ne modifie pas le message en cours d\'édition.';
		$this->post_attach_failed = 'Le téléchargement de la pièce jointe a échoué. Vérifiez que le fichier spécifié existe. ';
		$this->post_attach_not_allowed = 'Des fichiers de ce type ne peuvent pas être attachés.';
		$this->post_attach_remove = 'Enlever le fichier attaché';
		$this->post_attach_too_large = 'La taille du fichier choisi est trop importante. La taille maximum est %d KB.';
		$this->post_cant_create = 'En tant qu\'invité vous n\'avez pas la permission de créer des sujets. Si vous vous enregistrez, vous le pourrez.';
		$this->post_cant_create1 = 'Vous n\'avez pas la permission de créer des sujets.';
		$this->post_cant_enter = 'Votre vote n\'a pas été pris en compte. Peut être avez vous déjà voté ou n\'en avez pas la permission.';
		$this->post_cant_poll = 'En tant qu\'invité, vous n\'avez pas la permission de créer des sondages. Si vous vous enregistrez, vous le pourrez.';
		$this->post_cant_poll1 = 'Vous n\'avez pas le droit de créer des sondages.';
		$this->post_cant_reply = 'Vous n\'avez pas le droit de participer aux sujets dans ce forum';
		$this->post_cant_reply1 = 'En tant qu\'invité, vous n\'avez pas la permission de participer aux sujets. Si vous vous enregistrez, vous le pourrez.';
		$this->post_cant_reply2 = 'Vous n\'avez pas la permission de participer aux sujets.';
		$this->post_closed = 'Ce sujet a été fermé.';
		$this->post_create_poll = 'Créer un sondage';
		$this->post_create_topic = 'Créer un sujet';
		$this->post_creating = 'Créer un sujet';
		$this->post_creating_poll = 'Vous créez un sondage';
		$this->post_flood = 'Vous avez déjà posté un message dans les %s dernières secondes, et ne pouvez plus en poster maintenant.<br /><br />Merci de réessayer dans quelques secondes.';
		$this->post_guest = 'Invité';
		$this->post_icon = 'Icône';
		$this->post_last_five = '5 derniers messages en ordre inverse';
		$this->post_length = 'Vérifier la longueur';
		$this->post_mbcode_address = 'Merci d\'entrer un email';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Bleu';
		$this->post_mbcode_bold = 'Gras';
		$this->post_mbcode_bold1 = 'G';
		$this->post_mbcode_chocolate = 'Chocolat';
		$this->post_mbcode_code = 'Code'; //Translate
		$this->post_mbcode_color = 'Couleur';
		$this->post_mbcode_coral = 'Corail';
		$this->post_mbcode_courier = 'Courrier';
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'Bleu sombre';
		$this->post_mbcode_darkred = 'Rouge sombre';
		$this->post_mbcode_deepink = 'Rose';
		$this->post_mbcode_detail = 'Merci d\'entrer une description';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'Rouge brique';
		$this->post_mbcode_font = 'Police';
		$this->post_mbcode_green = 'Vert';
		$this->post_mbcode_huge = 'Enorme';
		$this->post_mbcode_image = 'Image'; //Translate
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Italique';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Grand';
		$this->post_mbcode_length = 'Votre message fait "+length+" caractères.';
		$this->post_mbcode_limegreen = 'Vert 2';
		$this->post_mbcode_medium = 'Moyen';
		$this->post_mbcode_orange = 'Orange'; //Translate
		$this->post_mbcode_orangered = 'Orange rouge';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Mauve';
		$this->post_mbcode_quote = 'Citer';
		$this->post_mbcode_red = 'Rouge';
		$this->post_mbcode_royalblue = 'Bleu royal';
		$this->post_mbcode_sandybrown = 'Marron sable';
		$this->post_mbcode_seagreen = 'Vert 3';
		$this->post_mbcode_sienna = 'Sienne';
		$this->post_mbcode_silver = 'Argent';
		$this->post_mbcode_size = 'Taille';
		$this->post_mbcode_skyblue = 'Bleu ciel';
		$this->post_mbcode_small = 'Petit';
		$this->post_mbcode_spoiler = 'Spoiler'; //Translate
		$this->post_mbcode_strike = 'Rayé';
		$this->post_mbcode_strike1 = 'R';
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Tiny'; //Translate
		$this->post_mbcode_tomato = 'Tomate';
		$this->post_mbcode_underline = 'Souligné';
		$this->post_mbcode_underline1 = 'S';
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Burly Wood'; //Translate
		$this->post_mbcode_yellow = 'Yellow'; //Translate
		$this->post_msg = 'Message'; //Translate
		$this->post_must_msg = 'Vous devez saisir un message avant de poster.';
		$this->post_must_options = 'Vous devez saisir des choix avant de poster un sondage.';
		$this->post_must_title = 'Vous devez saisir un titre avant de poster.';
		$this->post_new_poll = 'Nouveau sondage';
		$this->post_new_topic = 'Nouveau sujet';
		$this->post_no_forum = 'Ce forum n\'existe pas';
		$this->post_no_topic = 'Aucun sujet n\'a été spécifié.';
		$this->post_no_vote = 'Vous devez voter parmi les choix proposés.';
		$this->post_option_emoticons = 'Convertir les smileys en images ?';
		$this->post_option_global = 'Faire de ce sujet un sujet général?';
		$this->post_option_mbcode = 'Formater le MbCode?';
		$this->post_optional = 'facultatif';
		$this->post_options = 'Options'; //Translate
		$this->post_poll_options = 'Réponses';
		$this->post_poll_row = 'Une par ligne';
		$this->post_posted = 'Posté le';
		$this->post_posting = 'Vous postez';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Répondre';
		$this->post_reply_topic = 'Répondre au sujet';
		$this->post_replying = 'Participe au sujet';
		$this->post_replying1 = 'Répond';
		$this->post_smiles = 'Smileys';
		$this->post_too_many_options = 'Le sondage doit comprendre entre 2 et %d propositions. ';
		$this->post_topic_detail = 'Description du sujet';
		$this->post_topic_title = 'Titre du sujet';
		$this->post_view_topic = 'Voir le sujet en entier';
		$this->post_voting = 'Vous votez';
	}

	function printer()
	{
		$this->printer_back = 'Retour';
		$this->printer_not_found = 'Ce sujet n\'existe pas. Il peut avoir été supprimé, déplacé ou n\'avoir jamais existé.';
		$this->printer_not_found_title = 'Ce sujet n\'existe pas';
		$this->printer_perm_topics = 'Vous n\'avez pas la permission de voir les sujets.';
		$this->printer_perm_topics_guest = 'Vous n\'avez pas la permission de voir les sujets. Si vous vous enregisterez, vous le pourrez.';
		$this->printer_posted_on = 'Posté le';
		$this->printer_send = 'Envoyer à l\'auteur';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM';
		$this->profile_av_sign = 'Avatar et signature';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Anniversaire';
		$this->profile_contact = 'Contact'; //Translate
		$this->profile_email_address = 'Adresse email';
		$this->profile_fav = 'Forum préféré';
		$this->profile_fav_forum = '%s (%d%% des posts de ce membre)';
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = 'ICQ';
		$this->profile_info = 'Information'; //Translate
		$this->profile_interest = 'Intérêts';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Dernier message';
		$this->profile_list = 'Liste des membres';
		$this->profile_location = 'Localisation';
		$this->profile_member = 'Groupe';
		$this->profile_member_title = 'Titre';
		$this->profile_msn = 'MSN';
		$this->profile_must_user = 'Vous devez entrer un utilisateur pour consulter un profil.';
		$this->profile_no_member = 'Cet utilisateur n\'existe pas. Le compte a certainement été supprimé.';
		$this->profile_none = '[ Aucun ]';
		$this->profile_not_post = 'pas encore posté.';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Messages privés';
		$this->profile_postcount = '%s au total, %s par jour';
		$this->profile_posts = 'Messages';
		$this->profile_private = '[ Privé ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Signature'; //Translate
		$this->profile_unkown = '[ Inconnu ]';
		$this->profile_view_profile = 'Consultation d\'un profil';
		$this->profile_www = 'Page Perso';
		$this->profile_yahoo = 'Yahoo!';
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
		$this->recent_by = 'Par';
		$this->recent_can_post = 'Vous pouvez répondre dans ce forum.';
		$this->recent_can_topics = 'Vous pouvez voir les sujets dans ce forum. ';
		$this->recent_cant_post = 'Vous ne pouvez pas répondre dans ce forum. ';
		$this->recent_cant_topics = 'Vous ne pouvez pas voir les sujets dans ce forum. ';
		$this->recent_dot = 'point';
		$this->recent_dot_detail = 'Affiche ce que vous avez posté dans le sujet';
		$this->recent_forum = 'Forum'; //Translate
		$this->recent_guest = 'Invité';
		$this->recent_hot = 'Chaud';
		$this->recent_icon = 'Icone';
		$this->recent_jump = 'Aller au dernier message de ce sujet';
		$this->recent_last = 'Dernier message';
		$this->recent_locked = 'Verrouillé';
		$this->recent_moved = 'Déplacé';
		$this->recent_msg = 'Message de %s';
		$this->recent_new = 'Nouveau';
		$this->recent_new_poll = 'Créer un nouveau sondage';
		$this->recent_new_topic = 'Créer un nouveau sujet';
		$this->recent_no_topics = 'Il n\'y a aucun sujet dans ce forum';
		$this->recent_noexist = 'Ce forum n\'existe pas.';
		$this->recent_nopost = 'Aucun message';
		$this->recent_not = 'Aïe!';
		$this->recent_noview = 'Vous n\'avez pas la permission de voir les forums.';
		$this->recent_pages = 'Pages'; //Translate
		$this->recent_pinned = 'Epinglé';
		$this->recent_pinned_topic = 'Sujet épinglé';
		$this->recent_poll = 'Sondage';
		$this->recent_regfirst = 'Vous n\'avez pas la permission de voir les forums. Si vous vous enregistrez, vous pourrez le faire.';
		$this->recent_replies = 'Réponses';
		$this->recent_starter = 'Débuté par';
		$this->recent_sub = 'Sous-Forum';
		$this->recent_sub_last_post = 'Dernier message';
		$this->recent_sub_replies = 'Réponses';
		$this->recent_sub_topics = 'Sujets';
		$this->recent_subscribe = 'M\envoyer un email en cas de nouveaux posts dans ce forum. ';
		$this->recent_topic = 'Sujet';
		$this->recent_views = 'Affichages';
		$this->recent_write_topics = 'Vous pouvez créer des sujets dans ce forum. ';
	}

	function register()
	{
		$this->register_activated = 'Votre compte a été activé!';
		$this->register_activating = 'Activation du compte';
		$this->register_activation_error = 'Il y a eu une erreur durant l\'activation su compte. Vérifiez si la barre d\'adresse de votre navigateur contient l\'URL figurant dans l\'email d\'activation. Si le problème persiste, contactez l\'administrateur du forum.';
		$this->register_confirm_passwd = 'Confirmation du mot de passe';
		$this->register_done = 'Vous avez été correctement enregistré ! Vous pouvez maintenant vous connecter.';
		$this->register_email = 'Adresse email';
		$this->register_email_invalid = 'Cette adresse email est incorrecte.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'Cette adresse email est déjà prise par un autre membre.';
		$this->register_fields = 'Certains champs n\'ont pas été remplis.';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'You have been registered. An email has been sent to %s with information on how to activate your account. Your account will be limited until you activate it.'; //Translate
		$this->register_name_invalid = 'Le nom d\'utilisateur est incorrect.';
		$this->register_name_taken = 'Le nom d\'utilisateur est déjà pris.';
		$this->register_new_user = 'Nom d\'utilisateur souhaité';
		$this->register_pass_invalid = 'Le mot de passe entré est incorrect. Assurez vous que vous utilisez des caractères autorisés.';
		$this->register_pass_match = 'Les deux mots de passe entrés sont différents.';
		$this->register_passwd = 'Mot de passe';
		$this->register_reg = 'Envoyer';
		$this->register_reging = 'Enregistrement';
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
		$this->search_advanced = 'Options avancées';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Recherche classique';
		$this->search_characters = 'caractères d\'un message';
		$this->search_day = 'jour';
		$this->search_days = 'jours';
		$this->search_exact_name = 'nom exact';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Recherche les termes';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Groupe';
		$this->search_guest = 'Invité';
		$this->search_in = 'Recherche dans';
		$this->search_in_posts = 'Chercher seulement dans les mesages';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Rejoint';
		$this->search_level = 'Niveau du membre';
		$this->search_match = 'Recherche par correspondance';
		$this->search_matches = 'Correspondances';
		$this->search_month = 'mois';
		$this->search_months = 'mois';
		$this->search_mysqldoc = 'Documentation de MySQL';
		$this->search_newer = 'plus récent';
		$this->search_no_results = 'Votre recherche n\'a retourné aucun résultat.';
		$this->search_no_words = 'You must specify some search terms.<br /><br />Each term must be longer than 3 characters, including letters, numbers, apostrophes, and underscores.'; //Translate
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = 'plus vieux';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Afficher seulement le premier';
		$this->search_partial_name = 'nom partiel';
		$this->search_post_icon = 'Icône de message';
		$this->search_posted_on = 'Posté le';
		$this->search_posts = 'Messages';
		$this->search_posts_by = 'Seulement dans les messages posté par';
		$this->search_regex = 'Rechercher en utilisant des expressions régulières';
		$this->search_regex_failed = 'Votre expression régulière a échouée. Merci de consulter la document de MySQL pour l\'aide sur les expressions régulières. ';
		$this->search_relevance = 'Post Relevance: %d%%'; //Translate
		$this->search_replies = 'Réponses';
		$this->search_result = 'Résultats de la recherche';
		$this->search_search = 'Recherche';
		$this->search_select_all = 'Tout sélectionnet';
		$this->search_show_posts = 'Affichez les messages';
		$this->search_sound = 'Mots qui ressemblent à';
		$this->search_starter = 'Auteur';
		$this->search_than = 'que';
		$this->search_topic = 'Sujet';
		$this->search_unreg = 'Non-enregistré';
		$this->search_week = 'semaine';
		$this->search_weeks = 'semaines';
		$this->search_year = 'année';
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
		$this->topic_attached = 'Fichier attaché :';
		$this->topic_attached_downloads = 'téléchargements';
		$this->topic_attached_perm = 'Vous n\'avez pas la permission de télécharger ce fichier.';
		$this->topic_attached_title = 'Fichier attaché';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = 'Créer un nouveau sondage';
		$this->topic_create_topic = 'Créer un nouveau sujet';
		$this->topic_delete = 'Supprimer';
		$this->topic_delete_post = 'Supprimer ce message';
		$this->topic_edit = 'Editer';
		$this->topic_edit_post = 'Editer ce message';
		$this->topic_edited = 'Message édité le %s par %s';
		$this->topic_error = 'Erreur';
		$this->topic_group = 'Groupe';
		$this->topic_guest = 'Innvité';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Rejoint';
		$this->topic_level = 'Niveau du membre';
		$this->topic_links_aim = 'Envoyer un message AIM à %s';
		$this->topic_links_email = 'Envoyer un email à %s';
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'Envoyer un message ICQ à %s';
		$this->topic_links_msn = 'Voir le profil MSN de %s\'s';
		$this->topic_links_pm = 'Envoyer un message privé à %s';
		$this->topic_links_web = 'Visiter le site web de %s\'s';
		$this->topic_links_yahoo = 'Envoyer un message à %s avec Yahoo! Messenger';
		$this->topic_lock = 'Verrouiller';
		$this->topic_locked = 'Sujet verrouillé';
		$this->topic_move = 'Déplacer';
		$this->topic_no_votes = 'Il n\'y a pas de vote pour ce sujet.';
		$this->topic_not_found = 'Le sujet n\'a pas été trouvé.';
		$this->topic_not_found_message = 'Le sujet n\'a pas été trouvé. Il peut avoir été supprimé, déplacé ou n\'avoir jamais existé.';
		$this->topic_offline = 'This member is currently offline'; //Translate
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Options';
		$this->topic_pages = 'Pages'; //Translate
		$this->topic_perm_view = 'Vous n\'avez pas la permission de voir les sujets.';
		$this->topic_perm_view_guest = 'Vous n\'avez pas la permission de voir les sujets. Si vous vous enregistrez, vous le pourrez.';
		$this->topic_pin = 'Epingler';
		$this->topic_posted = 'Posté';
		$this->topic_posts = 'Messages';
		$this->topic_print = 'Voir une version imprimable';
		$this->topic_quote = 'Répondre à une citation';
		$this->topic_reply = 'Repondre au sujet';
		$this->topic_split = 'Découper';
		$this->topic_split_finish = 'Terminer tous les découpages';
		$this->topic_split_keep = 'Ne pas déplacer ce sujet';
		$this->topic_split_move = 'Déplacer ce sujet';
		$this->topic_subscribe = 'M\'envoyer un email quand des réponses sont postées dans ce sujet.';
		$this->topic_top = 'Aller en haut de la page';
		$this->topic_unlock = 'Déverrouiller';
		$this->topic_unpin = 'Désépingler';
		$this->topic_unreg = 'Non enregistré';
		$this->topic_view = 'Consultation des résultats';
		$this->topic_viewing = 'Consultation d\'un sujet ';
		$this->topic_vote = 'Voter';
		$this->topic_vote_count_plur = '%d votes'; //Translate
		$this->topic_vote_count_sing = '%d vote'; //Translate
		$this->topic_votes = 'Votes'; //Translate
	}

	function universal()
	{
		$this->aim = 'AIM'; //Translate
		$this->based_on = 'based on';
		$this->board_by = 'Par';
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
		$this->spoiler = 'Spoiler'; //Translate
		$this->submit = 'Envoyer';
		$this->subscribe = 'Subscribe'; //Translate
		$this->today = 'Aujourd\'hui';
		$this->website = 'WWW'; //Translate
		$this->yahoo = 'Yahoo'; //Translate
		$this->yes = 'Yes'; //Translate
		$this->yesterday = 'Hier';
	}
}
?>
