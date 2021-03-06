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
 * Portuguese language module
 *
 * @author Miguel Garcia <info@cisiodon.com.br>
 * @since 1.0.0 Beta 4.0
 **/
class pt
{
	function active()
	{
		$this->active_last_action = '�ltima A��o';
		$this->active_modules_active = 'Viewing Active Users';
		$this->active_modules_board = 'Vendo �ndice';
		$this->active_modules_cp = 'Usando Painel de controle';
		$this->active_modules_forum = 'Vendo Forum: %s';
		$this->active_modules_help = 'usando Help';
		$this->active_modules_login = 'Logando';
		$this->active_modules_members = 'Vendo Lista';
		$this->active_modules_mod = 'Moderando';
		$this->active_modules_pm = 'Using Messenger';
		$this->active_modules_post = 'Postando';
		$this->active_modules_printer = 'Imprimindo t�pico: %s';
		$this->active_modules_profile = 'Vendo Profile: %s';
		$this->active_modules_recent = 'Viewing recent posts'; //Translate
		$this->active_modules_search = 'Procurando';
		$this->active_modules_topic = 'Vendo T�pico: %s';
		$this->active_time = 'Hora';
		$this->active_user = 'Usu�rio';
		$this->active_users = 'Usu�rios ativos';
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
		$this->admin_prune = 'Prune old topics'; //Translate
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
		$this->board_active_users = 'Usu�rios ativos';
		$this->board_birthdays = 'Aniversariantes:';
		$this->board_bottom_page = 'Go to the bottom of the page'; //Translate
		$this->board_can_post = 'Voc� pode responder neste forum.';
		$this->board_can_topics = 'Voc� pode ver t�picos neste forum.';
		$this->board_cant_post = 'Voc� n�o pode responder neste forum.';
		$this->board_cant_topics = 'Voc� n�o pode ver t�picos neste forum.';
		$this->board_forum = 'Rela��o de Foruns e Descri��o';
		$this->board_guests = 'convidados';
		$this->board_last_post = '�ltimas';
		$this->board_mark = 'Marcando como lidas';
		$this->board_mark1 = 'Todas foram marcadas como lidas.';
		$this->board_members = 'membros';
		$this->board_message = '%s Mensagem';
		$this->board_most_online = 'Usu�rios on line: %d at %s';
		$this->board_nobday = 'Nenhum aniversariante hoje.';
		$this->board_nobody = 'Nenhum usu�rio on line.';
		$this->board_nopost = 'Sem postagens';
		$this->board_noview = 'Voc� n�o tem permiss�o.';
		$this->board_regfirst = 'Voc� n�o tem permiss�o para isto. Se voc� se registrar, voc� poder� v�-lo.';
		$this->board_replies = 'Respostas';
		$this->board_stats = 'Estat�sticas';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_top_page = 'Go to the top of the page'; //Translate
		$this->board_topics = 'Topicos';
		$this->board_users = 'usu�rios';
		$this->board_write_topics = 'Voc� pode criar t�picos neste forum.';
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
		$this->cp_aim = 'Nome da tela AIM';
		$this->cp_already_member = 'O email que voc� digitou j� � de uso de outra pessoa.';
		$this->cp_apr = 'Abril';
		$this->cp_aug = 'Agosto';
		$this->cp_avatar_current = 'Sua figura corente';
		$this->cp_avatar_error = 'Erro de figura';
		$this->cp_avatar_must_select = 'Voc� precisa selecionar uma figura.';
		$this->cp_avatar_none = 'Nenhuma figura utilizada';
		$this->cp_avatar_pixels = 'pontos';
		$this->cp_avatar_select = 'Selecione a figura';
		$this->cp_avatar_size_height = 'A altura da figura deve ser entre 1 e';
		$this->cp_avatar_size_width = 'A largura da figura deve ser entre 1 e';
		$this->cp_avatar_upload = 'Fa�a upload da sua figura';
		$this->cp_avatar_upload_failed = 'Falha de upload.Verifique se est� correta ou nela n�o existe';
		$this->cp_avatar_upload_not_image = 'Voc� s� pode fazer upload de figura para seu pr�prio uso.';
		$this->cp_avatar_upload_too_large = 'Tamanho da figura excedeu limite. M�ximo tamanho � %d kbytes.';
		$this->cp_avatar_url = 'Especifique uma URL para sua figura';
		$this->cp_avatar_use = 'Use seu pr�prio avatar';
		$this->cp_bday = 'Nascimento';
		$this->cp_been_updated = 'Seus dados j� foram alterados.';
		$this->cp_been_updated1 = 'Sua figura j� foi alterada.';
		$this->cp_been_updated_prefs = 'Prefer�ncias ajustadas.';
		$this->cp_changing_pass = 'Trocando senha';
		$this->cp_contact_pm = 'Permitir contato de outros via mensageiro ?';
		$this->cp_cp = 'Painel de controle';
		$this->cp_current_avatar = 'Figura atual';
		$this->cp_current_time = 'Atualmente %s.';
		$this->cp_custom_title = 'Custom Member Title'; //Translate
		$this->cp_custom_title2 = 'This is a privledge reserved for board administrators'; //Translate
		$this->cp_dec = 'Dezembro';
		$this->cp_editing_avatar = 'Corrigindo figura';
		$this->cp_editing_profile = 'Corrigindo seus dados';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Permite contatos via email?';
		$this->cp_email_invaid = 'Voc� entrou emdere�o de email inv�lido.';
		$this->cp_err_avatar = 'Erro alterando figura';
		$this->cp_err_updating = 'Erro alterando seus dados pessoais';
		$this->cp_feb = 'Fevereiro';
		$this->cp_file_type = 'Figura inv�lida. Tenha certeza de que a URL est� certa, e com extens�es gif, jpg, or png.';
		$this->cp_format = 'Formatando nome';
		$this->cp_gtalk = 'GTalk Account'; //Translate
		$this->cp_header = 'Painel de controle de usu�rios';
		$this->cp_height = 'Altura';
		$this->cp_icq = 'N�mero do ICQ';
		$this->cp_interest = 'Interesses';
		$this->cp_jan = 'Janeiro';
		$this->cp_july = 'julho';
		$this->cp_june = 'Junho';
		$this->cp_label_edit_avatar = 'Editar Avatar';
		$this->cp_label_edit_pass = 'Trocar senha';
		$this->cp_label_edit_prefs = 'Troca prefer�ncias';
		$this->cp_label_edit_profile = 'Editar perfil';
		$this->cp_label_edit_sig = 'Edit Signature'; //Translate
		$this->cp_label_edit_subs = 'Editar subscri��es';
		$this->cp_language = 'Linguagem';
		$this->cp_less_charac = 'Seu nome precisa ter menos que 32 caracteres.';
		$this->cp_location = 'Localiza��o';
		$this->cp_login_first = 'Voc� prrecisa entrar no sistema para acessar o Painel de controle.';
		$this->cp_mar = 'mar�o';
		$this->cp_may = 'Maio';
		$this->cp_msn = 'Identidade MSN';
		$this->cp_must_orig = 'Seu nome precisa ser id�ntico ao original. Voc� pode trocar mai�scula/min�scula e espa�amento.';
		$this->cp_new_notmatch = 'Novas senhas n�o combinam.';
		$this->cp_new_pass = 'Nova senha';
		$this->cp_no_flash = 'Figuras em Flash n�o permitidas.';
		$this->cp_not_exist = 'A data especificada (%s) n�o existe!';
		$this->cp_nov = 'Novembro';
		$this->cp_oct = 'Outubro';
		$this->cp_old_notmatch = 'Sua antiga senha n�o coincide com as do banco de dados.';
		$this->cp_old_pass = 'Senha antiga';
		$this->cp_pass_notvaid = 'Sua senha n�o � v�lida.';
		$this->cp_preferences = 'Trocando prefer�ncias';
		$this->cp_preview_sig = 'Signature Preview:'; //Translate
		$this->cp_privacy = 'Op��es de privacidade';
		$this->cp_repeat_pass = 'Repita';
		$this->cp_sept = 'Setembro';
		$this->cp_show_active = 'Ver suas atividades enquanto on line no forum?';
		$this->cp_show_email = 'Ver email nos dados pessoais ?';
		$this->cp_signature = 'Assinatura';
		$this->cp_size_max = 'Figura muito grande. M�ximo permitido � %s por %s pixels.';
		$this->cp_skin = 'Capa do Board ( Skin )';
		$this->cp_sub_change = 'alterando inscri��es';
		$this->cp_sub_delete = 'apagar';
		$this->cp_sub_expire = 'Data de expira��o';
		$this->cp_sub_name = 'Nome de inscri��o';
		$this->cp_sub_no_params = 'N�o foi dado nenhum par�metro.';
		$this->cp_sub_success = 'Voc� est� inscrito neste %s.';
		$this->cp_sub_type = 'Tipo de inscri��o';
		$this->cp_sub_updated = 'Inscri��es selecionadas apagadas.';
		$this->cp_topic_option = 'Op��es de t�pico';
		$this->cp_updated = 'Dados atualizados';
		$this->cp_updated1 = 'Figura atualizada';
		$this->cp_updated_prefs = 'Prefer�ncias ajustadas';
		$this->cp_user_exists = 'J� existe um usu�rio com este nome.';
		$this->cp_valided = 'Senha atualizada e validada.';
		$this->cp_view_avatar = 'Ver figuras ?';
		$this->cp_view_emoticon = 'Ver emoticons ?';
		$this->cp_view_signature = 'Ver assinaturas ?';
		$this->cp_welcome = 'Benvindo ao seu painel de controle. Aqui voc� faz seus ajustes.';
		$this->cp_width = 'Largura';
		$this->cp_www = 'Homepage'; //Translate
		$this->cp_yahoo = 'Identidade Yahoo';
		$this->cp_zone = 'Fuso hor�rio';
	}

	function email()
	{
		$this->email_blocked = 'Este usu�rio n�o aceita email via forum.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Corpo do email:';
		$this->email_no_fields = 'Volte e esteja certo que todos os campos est�o preenchidos.';
		$this->email_no_member = 'Nenhum membro encontrado com este nome';
		$this->email_no_perm = 'sem permiss�o para enviar email via forum.';
		$this->email_sent = 'Seu email foi enviado.';
		$this->email_subject = 'Assunto:';
		$this->email_to = 'Para:';
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
		$this->forum_by = 'Por';
		$this->forum_can_post = 'Voc� pode responder neste forum.';
		$this->forum_can_topics = 'Voc� pode ver t�picos neste forum.';
		$this->forum_cant_post = 'Voc� n�o pode responder neste forum.';
		$this->forum_cant_topics = 'Voc� n�o pode ver t�picos neste forum.';
		$this->forum_dot = 'ponto';
		$this->forum_dot_detail = 'mostra o que voc� inseriu';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Convidado';
		$this->forum_hot = 'Quente';
		$this->forum_icon = '�cone de mensagem';
		$this->forum_jump = 'Ir 1a nova mensagem do t�pico';
		$this->forum_last = '�ltima postagem';
		$this->forum_locked = 'Fechado';
		$this->forum_moved = 'Movida';
		$this->forum_msg = '%s Mensagens';
		$this->forum_new = 'Nova';
		$this->forum_new_poll = 'Criar nova enquete';
		$this->forum_new_topic = 'Criar novo t�pico';
		$this->forum_no_topics = 'Nenhum t�pico neste forum.';
		$this->forum_noexist = 'Este forum n�o existe.';
		$this->forum_nopost = 'Sem postagens';
		$this->forum_not = 'N�o';
		$this->forum_noview = 'Sem permiss�o.';
		$this->forum_pages = 'P�ginas';
		$this->forum_pinned = 'Afixada';
		$this->forum_pinned_topic = 'T�pico afixado';
		$this->forum_poll = 'Enquete';
		$this->forum_regfirst = 'Voc� n�o tem permiss�o para ver. Se voc� se registrar, poder� faz�-lo';
		$this->forum_replies = 'Respostas';
		$this->forum_starter = 'Iniciado por';
		$this->forum_sub = 'Sub-Forum'; //Translate
		$this->forum_sub_last_post = '�ltima';
		$this->forum_sub_replies = 'Respostas';
		$this->forum_sub_topics = 'Topicos';
		$this->forum_subscribe = 'Enviar email quando tiverem postagens';
		$this->forum_topic = 'Topico';
		$this->forum_views = 'Visualiza��es';
		$this->forum_write_topics = 'Voc� pode criar t�picos neste forum.';
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
		$this->help_available_files = 'Arquivos dispon�veis';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'Sem ajuda no banco de dados';
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
		$this->login_cant_logged = 'Voc� n�o pode ser inserido no sistema. Cheque se nome e senha est�o corretos.<br /><br />Lembre-se que s�o case sensitives.';
		$this->login_cookies = 'Cookies must be enabled to login.'; //Translate
		$this->login_forgot_pass = 'Esqueceu sua senha ?';
		$this->login_header = 'Entrando no sistema';
		$this->login_logged = 'Voc� est� entrando no sistema.';
		$this->login_now_out = 'Voc� saiu do sistema.';
		$this->login_out = 'Saindo';
		$this->login_pass = 'Senha';
		$this->login_pass_no_id = 'N�o existe usu�rio com este nome.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'ajustar a senha';
		$this->login_pass_sent = 'sua senha foi alterada . a nova senha ser� enviada via email.';
		$this->login_sure = 'Tem certeza que vai sair  \'%s\'?';
		$this->login_user = 'Seu login';
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
		$this->main_activate = 'sua conta ainda n�o foi ativada.';
		$this->main_activate_resend = 'REenviar minha ativa��o via email';
		$this->main_admincp = 'painel de controle administrativo';
		$this->main_banned = 'Voc� foi banido deste forum.';
		$this->main_code = 'c�digo';
		$this->main_cp = 'Seus dados';
		$this->main_full = 'Cheio';
		$this->main_help = 'Ajuda';
		$this->main_load = 'carrega';
		$this->main_login = 'Entrar';
		$this->main_logout = 'Sair';
		$this->main_mark = 'mark all'; //Translate
		$this->main_mark1 = 'Mark all topics as read'; //Translate
		$this->main_max_load = 'Desculpe, mas %s n�o est� disponivel, por causa do excessivo n�mero de usu�rios.';
		$this->main_members = 'Usu�rios';
		$this->main_messenger = 'Mensageiro';
		$this->main_new = 'novo';
		$this->main_next = 'Pr�ximo';
		$this->main_prev = 'Anterior';
		$this->main_queries = 'pesquisas';
		$this->main_quote = 'Aspas';
		$this->main_recent = 'recent posts'; //Translate
		$this->main_recent1 = 'View recent topics since your last visit'; //Translate
		$this->main_register = 'Registre';
		$this->main_reminder = 'Lembrete';
		$this->main_reminder_closed = 'Forum fechado. Vis�vel somente para administrador.';
		$this->main_said = 'disse';
		$this->main_search = 'Procura';
		$this->main_topics_new = 'Existem novos t�picos neste forum.';
		$this->main_topics_old = 'Nenhuma postagem neste forum.';
		$this->main_welcome = 'Ol�';
		$this->main_welcome_guest = 'Ol� convidado!';
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

	function mbcode()
	{
		$this->mbcode_address = 'Digite o endere�o';
		$this->mbcode_arial = 'Arial'; //Translate
		$this->mbcode_blue = 'Azul';
		$this->mbcode_bold = 'Negrito';
		$this->mbcode_bold1 = 'B'; //Translate
		$this->mbcode_chocolate = 'Chocolate'; //Translate
		$this->mbcode_code = 'C�digo';
		$this->mbcode_color = 'Cor';
		$this->mbcode_coral = 'Coral'; //Translate
		$this->mbcode_courier = 'Courier'; //Translate
		$this->mbcode_crimson = 'Crimson'; //Translate
		$this->mbcode_darkblue = 'Azul escuro';
		$this->mbcode_darkred = 'Vermelho escuro';
		$this->mbcode_deepink = 'Rosa choque';
		$this->mbcode_detail = 'Descri��o';
		$this->mbcode_email = 'Email'; //Translate
		$this->mbcode_firered = 'Vermelho suave';
		$this->mbcode_font = 'Fonte';
		$this->mbcode_green = 'Verde';
		$this->mbcode_huge = 'Huge'; //Translate
		$this->mbcode_image = 'Imagem';
		$this->mbcode_image1 = 'IMG'; //Translate
		$this->mbcode_impact = 'Impacto';
		$this->mbcode_indigo = 'Indigo'; //Translate
		$this->mbcode_italic = 'Italico';
		$this->mbcode_italic1 = 'I'; //Translate
		$this->mbcode_large = 'Largo';
		$this->mbcode_length = 'Comprimento de +length+ caracteres.';
		$this->mbcode_limegreen = 'Verde oliva';
		$this->mbcode_medium = 'Medio';
		$this->mbcode_orange = 'Laranja';
		$this->mbcode_orangered = 'VErmelho alaranjado';
		$this->mbcode_php = 'PHP'; //Translate
		$this->mbcode_purple = 'Roxo';
		$this->mbcode_quote = 'Aspas';
		$this->mbcode_red = 'Vermelho';
		$this->mbcode_royalblue = 'Azul real';
		$this->mbcode_sandybrown = 'marron claro';
		$this->mbcode_seagreen = 'Verde mar';
		$this->mbcode_sienna = 'Sienna'; //Translate
		$this->mbcode_silver = 'Prata';
		$this->mbcode_size = 'largura';
		$this->mbcode_skyblue = 'Azul c�u';
		$this->mbcode_small = 'Pequeno';
		$this->mbcode_spoiler = 'Spoiler'; //Translate
		$this->mbcode_strike = 'Strikethrough'; //Translate
		$this->mbcode_strike1 = 'S'; //Translate
		$this->mbcode_tahoma = 'Tahoma'; //Translate
		$this->mbcode_teal = 'Teal'; //Translate
		$this->mbcode_times = 'Times'; //Translate
		$this->mbcode_tiny = 'Tiny'; //Translate
		$this->mbcode_tomato = 'Tomato'; //Translate
		$this->mbcode_underline = 'Sublinhado';
		$this->mbcode_underline1 = 'U'; //Translate
		$this->mbcode_url = 'URL'; //Translate
		$this->mbcode_verdana = 'Verdana'; //Translate
		$this->mbcode_wood = 'Burly Wood'; //Translate
		$this->mbcode_yellow = 'Yellow'; //Translate
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
		$this->members_all = 'todos';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = 'Email para ele';
		$this->members_group = 'Grupo';
		$this->members_joined = 'Desde';
		$this->members_list = 'Lista de usu�rios';
		$this->members_member = 'Usu�rio';
		$this->members_pm = 'IM';
		$this->members_posts = 'Postagens';
		$this->members_send_pm = 'Enviar mensagem pessoal';
		$this->members_title = 'T�tulo';
		$this->members_vist_www = 'Visite o site deste usu�rio';
		$this->members_www = 'Web Site'; //Translate
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Tem certeza que quer apagar ?';
		$this->mod_confirm_topic_delete = 'Tem certeza que quer apagar ?';
		$this->mod_error_first_post = 'Voc� n�o pode apagar o primeiro t�pico.';
		$this->mod_error_move_category = 'Voc� n�o pode mover t�pico para categoria.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Voc� n�o pode mover um t�pico para um forum que n�o existe.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Voc� n�o pode mover um t�pico para o mesmo forum.';
		$this->mod_label_controls = 'Controles de moderadores';
		$this->mod_label_description = 'Descri��o';
		$this->mod_label_emoticon = 'Converter emoticons para imagens ?';
		$this->mod_label_global = 'T�pico global';
		$this->mod_label_mbcode = 'Formatar c�digo MB ?';
		$this->mod_label_move_to = 'Mover para';
		$this->mod_label_options = 'Op��es';
		$this->mod_label_post_delete = 'Apagar ';
		$this->mod_label_post_edit = 'Corrigir';
		$this->mod_label_post_icon = 'Post Icon'; //Translate
		$this->mod_label_title = 'T�tulo';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Quebrar t�tulo';
		$this->mod_label_topic_delete = 'Apagar t�pico';
		$this->mod_label_topic_edit = 'Corrige Topico';
		$this->mod_label_topic_lock = 'Bloqueia T�pico';
		$this->mod_label_topic_move = 'Mover Topico';
		$this->mod_label_topic_move_complete = 'T�pico movido para o novo forum';
		$this->mod_label_topic_move_link = 'Move t�pico para novo forum e mant�m o Link no forum antigo.';
		$this->mod_label_topic_pin = 'Afixa t�pico';
		$this->mod_label_topic_split = 'Quebrar t�pico';
		$this->mod_missing_post = 'N�o existe este conte�do.';
		$this->mod_missing_topic = 'T�pico especificado n�o existe.';
		$this->mod_no_action = 'Especifique uma a��o.';
		$this->mod_no_post = 'Voc� precisa especificar um topico.';
		$this->mod_no_topic = 'Especifique um t�pico.';
		$this->mod_perm_post_delete = 'Voc� n�o tem permiss�o para apagar';
		$this->mod_perm_post_edit = 'Voc� n�o tem permiss�o para corrigir.';
		$this->mod_perm_topic_delete = 'Sem permiss�o para apagar o t�pico.';
		$this->mod_perm_topic_edit = 'Sem permiss�o para corrigir o t�pico.';
		$this->mod_perm_topic_lock = 'Sem permiss�o para travar o t�pico.';
		$this->mod_perm_topic_move = 'Sem permiss�o para mover o t�pico.';
		$this->mod_perm_topic_pin = 'Sem permiss�o para afixar o t�pico.';
		$this->mod_perm_topic_split = 'Sem permiss�o para quebrar o t�pico.';
		$this->mod_perm_topic_unlock = 'Sem permiss�o para destravar o t�pico.';
		$this->mod_perm_topic_unpin = 'Sem permiss�o para desafixar o t�pico.';
		$this->mod_success_post_delete = 'Esta mensagem foi deletada.';
		$this->mod_success_post_edit = 'Editado';
		$this->mod_success_split = 'O t�pico foi quebrado com sucesso.';
		$this->mod_success_topic_delete = 'T�pico apagado.';
		$this->mod_success_topic_edit = 'O t�pico foi corrigido com sucesso.';
		$this->mod_success_topic_move = 'T�pico movido com sucesso.';
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
		$this->pm_cant_del = 'Voc� n�o tem permiss�o para apagar esta mensagem.';
		$this->pm_delallmsg = 'Apagar mensagens';
		$this->pm_delete = 'Apaga';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = 'Mensagem apagada.';
		$this->pm_deleted_all = 'Mensagens apagadas.';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'N�o p�de ser enviada. Prencheu todos os campos ?';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Caixa de entrada';
		$this->pm_folder_new = '%s Nova';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'De';
		$this->pm_group = 'Grupo';
		$this->pm_guest = 'Como convidado voc� n�o pode utilizar. Por favor Fa�a o Login ou Registro.';
		$this->pm_joined = 'Agregado';
		$this->pm_messenger = 'Mensageiro';
		$this->pm_msgtext = 'Texto da mensagem';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Especifique uma pasta.';
		$this->pm_no_member = 'Nenhum membro com esta identifica��o.';
		$this->pm_no_number = 'N�o encontrada.';
		$this->pm_no_title = 'Sem assunto';
		$this->pm_nomsg = 'Sem mensagens nesta pasta.';
		$this->pm_noview = 'Sem permiss�o para ver esta mensagem.';
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_personal = 'Mensageiro pessoal';
		$this->pm_personal_msging = 'Mensagens pessoais';
		$this->pm_pm = 'IM';
		$this->pm_posts = 'Mensagens';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Responder';
		$this->pm_send = 'Envia';
		$this->pm_sendamsg = 'Envia mensagem';
		$this->pm_sendingpm = 'Enviando mensagem privativa';
		$this->pm_sendon = 'Sent on';
		$this->pm_success = 'Mensagem enviada.';
		$this->pm_sure_del = 'Tem certeza que quer apagar ?';
		$this->pm_sure_delall = 'Apagar todas as mensagens da caixa de entrada ?';
		$this->pm_title = 'T�tulo';
		$this->pm_to = 'Para';
	}

	function post()
	{
		$this->post_attach = 'Anexos';
		$this->post_attach_add = 'Adicionar anexos';
		$this->post_attach_disrupt = 'Adicionando ou emovendo anexos n�o alterar� nada.';
		$this->post_attach_failed = 'Falhou !!! O arquivos n�o existe.';
		$this->post_attach_not_allowed = 'N�o pode anexar este tipo de arquivo.';
		$this->post_attach_remove = 'Remover anexos ';
		$this->post_attach_too_large = 'Anexo muito grande. M�ximo permitido � %d KB.';
		$this->post_cant_create = 'Como convidado voc� n�o pode criar t�pico. Se voc� se registrar, voc� poder� criar t�picos.';
		$this->post_cant_create1 = 'Sem permiss�o para criar t�picos.';
		$this->post_cant_enter = 'Voto n�o computado. Ou voc� j� votou ou n�o tem permiss�o.';
		$this->post_cant_poll = 'Como convidado voc� n�o pode criar enquetes. Se voc� se registrar, poder� criar.';
		$this->post_cant_poll1 = 'Sem permiss�o para criar enquetes.';
		$this->post_cant_reply = 'Voc� n�o tem permiss�o para responder neste forum';
		$this->post_cant_reply1 = 'Como convidado voc� n�o tem permiss�o. Se voc� se registrar, voc� ter� permiss�o.';
		$this->post_cant_reply2 = 'Voc� n�o tem permiss�o.';
		$this->post_closed = 'Este t�pico est� fechado.';
		$this->post_create_poll = 'Criar enquete';
		$this->post_create_topic = 'Criar t�pico';
		$this->post_creating = 'Criando t�pico';
		$this->post_creating_poll = 'Criando enquete';
		$this->post_flood = 'Voc� postou em %s segundos, ae n�o pode postar ainda.<br /><br />Tente daqui alguns segundos.';
		$this->post_guest = 'Convidado';
		$this->post_icon = 'Por icon';
		$this->post_last_five = '�ltimos em ordem reversa';
		$this->post_length = 'Cheque comprimento';
		$this->post_msg = 'Mensagem';
		$this->post_must_msg = 'Voc� deve incluir uma mensagem.';
		$this->post_must_options = 'Inclua op��es.';
		$this->post_must_title = 'Voc� deve por um t�tulo.';
		$this->post_new_poll = 'Nova enquete';
		$this->post_new_topic = 'Novo t�pico';
		$this->post_no_forum = 'Forum n�o encontrado.';
		$this->post_no_topic = 'Nenhum t�pico foi especificado.';
		$this->post_no_vote = 'Escolha uma op��o para votar.';
		$this->post_option_emoticons = 'Converter emoticons em imagens ?';
		$this->post_option_global = 'FAzer este t�pico global?';
		$this->post_option_mbcode = 'Formata MBc�digo ?';
		$this->post_optional = 'opcional';
		$this->post_options = 'Op��es';
		$this->post_poll_options = 'Op��es';
		$this->post_poll_row = 'Um por linha';
		$this->post_posted = 'Inserido em';
		$this->post_posting = 'Postando';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Responde';
		$this->post_reply_topic = 'Responder t�pico';
		$this->post_replying = 'Respondendo ao t�pico';
		$this->post_replying1 = 'Respondendo';
		$this->post_smiles = '�cones clic�veis';
		$this->post_too_many_options = 'Voce tem que ter entre 2 e %d op��es para a enquete.';
		$this->post_topic_detail = 'Descri��o do t�pico';
		$this->post_topic_title = 'T�tulo do t�pico';
		$this->post_view_topic = 'Ver t�pico inteiro';
		$this->post_voting = 'Votar';
	}

	function printer()
	{
		$this->printer_back = 'Voltar';
		$this->printer_not_found = 'O t�pico n�o pode ser encontrado. Ou foi movido, deletado ou n�o existe.';
		$this->printer_not_found_title = 'T�pico n�o encontrado';
		$this->printer_perm_topics = 'Sem permiss�o para ver t�picos.';
		$this->printer_perm_topics_guest = 'Sem permiss�o para ver t�picos. Se voc� se registrar, poder� faz�-lo.';
		$this->printer_posted_on = 'Inserido em';
		$this->printer_send = 'Imprimir';
	}

	function profile()
	{
		$this->profile_aim_sn = 'Nome AIM';
		$this->profile_av_sign = 'Figura e assinatura';
		$this->profile_avatar = 'Figura';
		$this->profile_bday = 'Nascimento';
		$this->profile_contact = 'Contato';
		$this->profile_email_address = 'Endere�o de emai';
		$this->profile_fav = 'Forum favorito';
		$this->profile_fav_forum = '%s (%d%% de postagens do usu�rio)';
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = 'ICQ Numero';
		$this->profile_info = 'Informa��o';
		$this->profile_interest = 'Interesses';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = '�ltima postagem';
		$this->profile_list = 'Lista de membros';
		$this->profile_location = 'Local';
		$this->profile_member = 'Grupo membro';
		$this->profile_member_title = 'T�tulo do membro';
		$this->profile_msn = 'MSN';
		$this->profile_must_user = 'Qual o usu�rio que voc� quer ver os dados?';
		$this->profile_no_member = 'N�o existe usu�rio com esta especifica��o. Sua conta pode ter sido desabilitada.';
		$this->profile_none = '[ Nenhum ]';
		$this->profile_not_post = 'ainda n�o postou nada.';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Private Messages'; //Translate
		$this->profile_postcount = '%s total, %s por dia';
		$this->profile_posts = 'Postagens';
		$this->profile_private = '[ Privativo ]';
		$this->profile_profile = 'Dados pessoais';
		$this->profile_signature = 'Assinatura';
		$this->profile_unkown = '[ Desconhecido ]';
		$this->profile_view_profile = 'Vendo seus dados';
		$this->profile_www = 'Homepage'; //Translate
		$this->profile_yahoo = 'Yahoo';
	}

	function prune()
	{
		$this->prune_action = 'Prune action to take'; //Translate
		$this->prune_age_day = '1 Day'; //Translate
		$this->prune_age_eighthours = '8 Hours'; //Translate
		$this->prune_age_hour = '1 Hour'; //Translate
		$this->prune_age_month = '1 Month'; //Translate
		$this->prune_age_threemonths = '3 Months'; //Translate
		$this->prune_age_week = '1 Week'; //Translate
		$this->prune_age_year = '1 Year'; //Translate
		$this->prune_forums = 'Select forums to prune'; //Translate
		$this->prune_invalidage = 'Invalid age specified for pruning'; //Translate
		$this->prune_move = 'Move'; //Translate
		$this->prune_moveto_forum = 'Forum to move to'; //Translate
		$this->prune_nodest = 'No valid destination selected'; //Translate
		$this->prune_notopics = 'No topics selected for pruning'; //Translate
		$this->prune_notopics_old = 'No topics are old enough for pruning'; //Translate
		$this->prune_novalidforum = 'No valid forums specified to prune'; //Translate
		$this->prune_select_age = 'Select age of topics to limit pruning to'; //Translate
		$this->prune_select_all = 'Select All'; //Translate
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
		$this->recent_active = 'Active topics since last visit'; //Translate
		$this->recent_by = 'Por';
		$this->recent_can_post = 'Voc� pode responder neste forum.';
		$this->recent_can_topics = 'Voc� pode ver t�picos neste forum.';
		$this->recent_cant_post = 'Voc� n�o pode responder neste forum.';
		$this->recent_cant_topics = 'Voc� n�o pode ver t�picos neste forum.';
		$this->recent_dot = 'ponto';
		$this->recent_dot_detail = 'mostra o que voc� inseriu';
		$this->recent_forum = 'Forum'; //Translate
		$this->recent_guest = 'Convidado';
		$this->recent_hot = 'Quente';
		$this->recent_icon = '�cone de mensagem';
		$this->recent_jump = 'Ir 1a nova mensagem do t�pico';
		$this->recent_last = '�ltima postagem';
		$this->recent_locked = 'Fechado';
		$this->recent_moved = 'Movida';
		$this->recent_msg = '%s Mensagens';
		$this->recent_new = 'Nova';
		$this->recent_new_poll = 'Criar nova enquete';
		$this->recent_new_topic = 'Criar novo t�pico';
		$this->recent_no_topics = 'Nenhum t�pico neste forum.';
		$this->recent_noexist = 'Este forum n�o existe.';
		$this->recent_nopost = 'Sem postagens';
		$this->recent_not = 'N�o';
		$this->recent_noview = 'Sem permiss�o.';
		$this->recent_pages = 'P�ginas';
		$this->recent_pinned = 'Afixada';
		$this->recent_pinned_topic = 'T�pico afixado';
		$this->recent_poll = 'Enquete';
		$this->recent_regfirst = 'Voc� n�o tem permiss�o para ver. Se voc� se registrar, poder� faz�-lo';
		$this->recent_replies = 'Respostas';
		$this->recent_starter = 'Iniciado por';
		$this->recent_sub = 'Sub-Forum'; //Translate
		$this->recent_sub_last_post = '�ltima';
		$this->recent_sub_replies = 'Respostas';
		$this->recent_sub_topics = 'Topicos';
		$this->recent_subscribe = 'Enviar email quando tiverem postagens';
		$this->recent_topic = 'Topico';
		$this->recent_views = 'Visualiza��es';
		$this->recent_write_topics = 'Voc� pode criar t�picos neste forum.';
	}

	function register()
	{
		$this->register_activated = 'Sua conta j� est� ativada!';
		$this->register_activating = 'Ativa��o de conta';
		$this->register_activation_error = 'H� algum erro ao ativar sua conta. Cheque se voc� inseriu a URL inteira fornecida no email.';
		$this->register_confirm_passwd = 'Confirme a senha';
		$this->register_done = 'Voc� j� est� registrado ! Pode fazewr agora o login.';
		$this->register_email = 'Email';
		$this->register_email_invalid = 'endere�o de email inv�lido.';
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'J� tem usu�rio com este email.';
		$this->register_fields = 'N�o preencheu todos os campos.';
		$this->register_image = 'SElecione o texto que voc� ve na imagem.';
		$this->register_image_invalid = 'Para verificar se realmente � voc�, � preciso digitar o texto que se v� na imagem.';
		$this->register_must_activate = 'Voc� est� sendo registrado. Voc� receber� um email, para %s com a informa��o para ativar sua conta. Ser� necess�rio ativ�-la.';
		$this->register_name_invalid = 'Nome inv�lido.';
		$this->register_name_taken = 'Este nome j� existe.';
		$this->register_new_user = 'Nome de usu�rio';
		$this->register_pass_invalid = 'Senha inv�lida....deve ter caracteres reais e no m�nimo 5 caracteres.';
		$this->register_pass_match = 'Senhas n�o coincidem.';
		$this->register_passwd = 'Senha';
		$this->register_reg = 'Registrar';
		$this->register_reging = 'Registrando';
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
		$this->search_advanced = 'Op��es avan�adas';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Procura simples';
		$this->search_characters = 'caracteres de postagens';
		$this->search_day = 'dia';
		$this->search_days = 'dias';
		$this->search_exact_name = 'nome exato';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Procurar por';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Convidado';
		$this->search_in = 'Procurar em';
		$this->search_in_posts = 'Procurar somente em postagens';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Juntado';
		$this->search_level = 'N�vel de usu�rio';
		$this->search_match = 'Procura por crit�rio';
		$this->search_matches = 'Coincid�ncias';
		$this->search_month = 'mes';
		$this->search_months = 'meses';
		$this->search_mysqldoc = 'Documenta��o do MySQL';
		$this->search_newer = 'novos';
		$this->search_no_results = 'Sem resultados na procura.';
		$this->search_no_words = 'You must specify some search terms.<br /><br />Each term must be longer than 3 characters, including letters, numbers, apostrophes, and underscores.'; //Translate
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = 'antigos';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Mostrar primeiro';
		$this->search_partial_name = 'nome parcial';
		$this->search_post_icon = 'Icones Post';
		$this->search_posted_on = 'Posto em';
		$this->search_posts = 'postagens';
		$this->search_posts_by = 'Somente em t�picos por';
		$this->search_regex = 'Procura por express�es regulares';
		$this->search_regex_failed = 'Your regular expression failed. Please see the MySQL documentation for regular expression help.'; //Translate
		$this->search_relevance = 'Relevantes: %d%%';
		$this->search_replies = 'Respostas';
		$this->search_result = 'Resultado da procura';
		$this->search_search = 'Procura';
		$this->search_select_all = 'Selecionar tudo';
		$this->search_show_posts = 'Ver resultados';
		$this->search_sound = 'palavras iguais a';
		$this->search_starter = 'Iniciado por';
		$this->search_than = 'do que';
		$this->search_topic = 'Topico';
		$this->search_unreg = 'N�o registrado';
		$this->search_week = 'semana';
		$this->search_weeks = 'semanas';
		$this->search_year = 'ano';
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
                $this->temps_topic_prune = 'AdminCP Topic Pruning'; //Translate
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
		$this->topic_attached = 'Arquivo anexado:';
		$this->topic_attached_downloads = 'downloads'; //Translate
		$this->topic_attached_perm = 'Sem permiss�o para baixar este arquivo.';
		$this->topic_attached_title = 'Arquivo anexado';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = 'Criar nova enquete';
		$this->topic_create_topic = 'Criar novo t�pico';
		$this->topic_delete = 'Apagar';
		$this->topic_delete_post = 'Deletar este topico';
		$this->topic_edit = 'Corrigir';
		$this->topic_edit_post = 'Editar este t�pico';
		$this->topic_edited = 'Ultima modifica��o em %s por %s';
		$this->topic_error = 'Erro';
		$this->topic_group = 'Grupo';
		$this->topic_guest = 'Convidado';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Juntado';
		$this->topic_level = 'N�vel de usu�rio';
		$this->topic_links_aim = 'Enviar AIM para %s';
		$this->topic_links_email = 'Enviar email para %s';
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'Enviar ICQ para %s';
		$this->topic_links_msn = 'Vista %s\'s MSN profile';
		$this->topic_links_pm = 'Enviar mensagem pessoal para %s';
		$this->topic_links_web = 'Visita %s\'s web site';
		$this->topic_links_yahoo = 'Enviar  %s with Yahoo! Messenger';
		$this->topic_lock = 'Fechar';
		$this->topic_locked = 'T�pico fechado';
		$this->topic_move = 'Mover';
		$this->topic_no_votes = 'Sem votos na enquete.';
		$this->topic_not_found = 'T�pico n�o encontrado';
		$this->topic_not_found_message = 'T�pico n�o encontrado.';
		$this->topic_offline = 'This member is currently offline'; //Translate
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Op��es de t�pico';
		$this->topic_pages = 'P�ginas';
		$this->topic_perm_view = 'Sem permiss�o para ver os t�picos.';
		$this->topic_perm_view_guest = 'Voc� n�o tem permiss�o para ver t�picos. Se voc� se registrar, poder� faz�-lo.';
		$this->topic_pin = 'Afixar';
		$this->topic_posted = 'Inserido';
		$this->topic_posts = 'Postagens';
		$this->topic_print = 'Ver modo de impress�o';
		$this->topic_quote = 'Responder com Aspas ( quote )';
		$this->topic_reply = 'Responder no t�pico';
		$this->topic_split = 'Quebrar';
		$this->topic_split_finish = 'TErminado a quebra';
		$this->topic_split_keep = 'N�o mova este t�pico';
		$this->topic_split_move = 'Mover este t�pico';
		$this->topic_subscribe = 'Me envie email quando houver respostas a este t�pico';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'Abrir';
		$this->topic_unpin = 'Desafixar';
		$this->topic_unreg = 'N�o registrado';
		$this->topic_view = 'Ver resultados';
		$this->topic_viewing = 'Vendo t�pico';
		$this->topic_vote = 'Vote'; //Translate
		$this->topic_vote_count_plur = '%d votos';
		$this->topic_vote_count_sing = '%d voto';
		$this->topic_votes = 'Votos';
	}

	function universal()
	{
		$this->aim = 'AIM'; //Translate
		$this->based_on = 'based on';
		$this->board_by = 'Por';
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
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->spoiler = 'Spoiler'; //Translate
		$this->submit = 'Enviar';
		$this->subscribe = 'Subscribe'; //Translate
		$this->today = 'Hoje';
		$this->website = 'WWW'; //Translate
		$this->yahoo = 'Yahoo'; //Translate
		$this->yes = 'Yes'; //Translate
		$this->yesterday = 'Ontem';
	}
}
?>
