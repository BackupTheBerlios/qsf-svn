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
 * Hebrew language module
 *
 * @author Anonymous
 * @since 1.1.0
 **/
class he
{
	function active()
	{
		$this->active_last_action = 'פעילות אחרונה';
		$this->active_modules_active = 'צופה ברשימת משתמשים פעילים';
		$this->active_modules_board = 'באינדקס הפורומים';
		$this->active_modules_cp = 'משתמש בלוח בקרה אישי';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'משתמש בעזרה';
		$this->active_modules_login = 'מתחבר\מתנתק';
		$this->active_modules_members = 'צופה ברשימת חברי הפורום';
		$this->active_modules_mod = 'מסדר פורומים';
		$this->active_modules_pm = 'משתמש המסנג\'ר פרטי';
		$this->active_modules_post = 'מפרסם הודעה';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_recent = 'Viewing recent posts'; //Translate
		$this->active_modules_search = 'מחפש';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'זמן';
		$this->active_user = 'משתמש';
		$this->active_users = 'משתמשים פעילים';
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
		$this->board_active_users = 'משתמשים מעילים';
		$this->board_birthdays = 'ימי הולדת היום:';
		$this->board_bottom_page = 'Go to the bottom of the page'; //Translate
		$this->board_can_post = 'אתה יכול להגיב בפורום הזה.';
		$this->board_can_topics = 'אתה יכול לצפות בפורום אך לא לפרסם נושאים חדשים.';
		$this->board_cant_post = 'אינן יכול להגיב בפורום הזה';
		$this->board_cant_topics = 'אינך מורשה לקרוא או לפרסם הודעות בפורום הזה.';
		$this->board_forum = 'פורום';
		$this->board_guests = 'אורחים';
		$this->board_last_post = 'הודעה אחרונה';
		$this->board_mark = 'סמן כל ההודעות כנקראו';
		$this->board_mark1 = 'כל ההודועת פורומים סומנו כנקראו.';
		$this->board_members = 'משתמשים';
		$this->board_message = '%s הודעה';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'אין ימי הולדת היום.';
		$this->board_nobody = 'אין כרגע משתמש מחוברים.';
		$this->board_nopost = 'אין הודעות';
		$this->board_noview = 'אין לך הרשאות לראות פורום.';
		$this->board_regfirst = 'אין לך הרשאות לראות פורום. אם אתה נרשם, אתה יכול לראות פורום.';
		$this->board_replies = 'תגובות';
		$this->board_stats = 'סטטיסטיקות';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_top_page = 'Go to the top of the page'; //Translate
		$this->board_topics = 'נושאים';
		$this->board_topics_new = 'יש הודועת חדשות בפורום הזה.';
		$this->board_topics_old = 'אין הודועת חדשות בפורום הזה.';
		$this->board_users = 'משתמשים';
		$this->board_write_topics = 'הינך יכול לראות ולכתוב בפורום הזה.';
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
		$this->cp_aim = 'שם משתמש של AIM';
		$this->cp_already_member = 'דואר אלקטרוני שכתבת כבר בשימוש על ידי משתמש אחר.';
		$this->cp_apr = 'אפריל';
		$this->cp_aug = 'אוגוסט';
		$this->cp_avatar_current = 'אווטר שלך';
		$this->cp_avatar_error = 'שגיאה באווטר';
		$this->cp_avatar_must_select = 'אתה חייב לבחור אווטר.';
		$this->cp_avatar_none = 'ללא שימוש באווטר';
		$this->cp_avatar_pixels = 'פיקסלים';
		$this->cp_avatar_select = 'בחר אווטר';
		$this->cp_avatar_size_height = 'אורך האווטר שלך חייב להיות באורך 1 ו';
		$this->cp_avatar_size_width = 'רוחב האווטר שלך חייב להיות ברוחב 1 ו';
		$this->cp_avatar_upload = 'העלת אווטר ממחשב שלך';
		$this->cp_avatar_upload_failed = 'העלה של אווטר נכשלה. הקובץ לא קיים.';
		$this->cp_avatar_upload_not_image = 'אתה יכול לעות רק תמונות ולהשתמש בהן כאווטר.';
		$this->cp_avatar_upload_too_large = 'אווטר שאתה רוצה לעלות גדול מידי. קובל המקסימלי הוא %d קילובייט.';
		$this->cp_avatar_url = 'קישר URL אל האווטר';
		$this->cp_avatar_use = 'השתמש באווטר שהעלת';
		$this->cp_bday = 'יום הולדת';
		$this->cp_been_updated = 'פרופיל שלך עודכן.';
		$this->cp_been_updated1 = 'אווטר שלך הועלה.';
		$this->cp_been_updated_prefs = 'הגדרות שלך עודכנו.';
		$this->cp_changing_pass = 'עריכת סיסמא';
		$this->cp_contact_pm = 'הרשה לאחרים לשלוח לך הודעות פרטיות?';
		$this->cp_cp = 'לוח בקרה';
		$this->cp_current_avatar = 'אווטר';
		$this->cp_current_time = 'השעה עכשיו %s.';
		$this->cp_custom_title = 'Custom Member Title'; //Translate
		$this->cp_custom_title2 = 'This is a privledge reserved for board administrators'; //Translate
		$this->cp_dec = 'דצמבר';
		$this->cp_editing_avatar = 'ערכית אווטר';
		$this->cp_editing_profile = 'ערכית פרופיל';
		$this->cp_email = 'דואר אלקטרוני';
		$this->cp_email_form = 'Allow others to contact you via the email form?'; //Translate
		$this->cp_email_invaid = 'דואר אלקטרוני שהכנסת שגויי.';
		$this->cp_err_avatar = 'שגיאה בהעלת אווטר';
		$this->cp_err_updating = 'שגיאה בעידכון פרופיל';
		$this->cp_feb = 'פברואר';
		$this->cp_file_type = 'אווטר שהכנסת איננו נכון. תבדוק אם הקישור לאווטר נכון, וסוג קובץ של אווטר הוא gif, jpg, או png.';
		$this->cp_format = 'שם משתמש';
		$this->cp_gtalk = 'GTalk Account'; //Translate
		$this->cp_header = 'לוח בקרה אישי';
		$this->cp_height = 'אורך';
		$this->cp_icq = 'מספר ICQ';
		$this->cp_interest = 'תחומי עניין';
		$this->cp_jan = 'ינואר';
		$this->cp_july = 'יולי';
		$this->cp_june = 'יוני';
		$this->cp_label_edit_avatar = 'עריכת אווטר';
		$this->cp_label_edit_pass = 'עריכת סיסמא';
		$this->cp_label_edit_prefs = 'עריכת הגדרות';
		$this->cp_label_edit_profile = 'עריכת פרופיל';
		$this->cp_label_edit_subs = 'ערכית מינויי';
		$this->cp_language = 'שפה';
		$this->cp_less_charac = 'שם שלך יכול להיות 32 מקסימום.';
		$this->cp_location = 'מיקום';
		$this->cp_login_first = 'הינך חייב להיות מחובר כדי לגשת ללוח בקרה.';
		$this->cp_mar = 'מרץ';
		$this->cp_may = 'מאי';
		$this->cp_msn = 'MSN מסנג\'ר';
		$this->cp_must_orig = 'Your name must be identical to the original. You may only change the letter case and spacing.'; //Translate
		$this->cp_new_notmatch = 'The new passwords you entered do not match.'; //Translate
		$this->cp_new_pass = 'סיסמא חדשה';
		$this->cp_no_flash = 'Flash avatars are not allowed on this board.'; //Translate
		$this->cp_not_exist = 'The date you specified (%s) does not exist!'; //Translate
		$this->cp_nov = 'נובמבר';
		$this->cp_oct = 'אוקטובר';
		$this->cp_old_notmatch = 'The old password you entered does not match the one in our database.'; //Translate
		$this->cp_old_pass = 'סיסמא ישנה';
		$this->cp_pass_notvaid = 'Your password is not valid. Make sure it uses only valid characters such as letters, numbers, dashes, underscores, or spaces.'; //Translate
		$this->cp_preferences = 'משנה הגדרות';
		$this->cp_privacy = 'Privacy Options'; //Translate
		$this->cp_repeat_pass = 'חזור על הסיסמא החדשה';
		$this->cp_sept = 'ספטמבר';
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = 'Show email address in profile?'; //Translate
		$this->cp_signature = 'חתימה';
		$this->cp_size_max = 'The avatar size you entered is too large. The maximum size allowed is %s by %s pixels.'; //Translate
		$this->cp_skin = 'סקין של פורום';
		$this->cp_sub_change = 'Changing Subscriptions'; //Translate
		$this->cp_sub_delete = 'Delete'; //Translate
		$this->cp_sub_expire = 'Expiration Date'; //Translate
		$this->cp_sub_name = 'Subscription Name'; //Translate
		$this->cp_sub_no_params = 'No parameters were given.'; //Translate
		$this->cp_sub_success = 'You are now subscribed to this %s.'; //Translate
		$this->cp_sub_type = 'Subscription Type'; //Translate
		$this->cp_sub_updated = 'Selected subscriptions have been deleted.'; //Translate
		$this->cp_topic_option = 'אפשרויות נושאים';
		$this->cp_updated = 'פרופיל עודכן';
		$this->cp_updated1 = 'אווטר עודכן';
		$this->cp_updated_prefs = 'הגדרות הודכנו';
		$this->cp_user_exists = 'A user with that name formatting already exists.'; //Translate
		$this->cp_valided = 'Your password was validated and changed.'; //Translate
		$this->cp_view_avatar = 'הראה אווטרים?';
		$this->cp_view_emoticon = 'הראה סמיילים?';
		$this->cp_view_signature = 'הראה חתימות?';
		$this->cp_welcome = 'ברוכים הבאים ללוח בקרה אישי. כאן הינך יכול לערוך ולשנות אפשרויות שפורום נותן לך. אנא בחרו מאפשרויות שיש לכם למעלה.';
		$this->cp_width = 'רוחב';
		$this->cp_www = 'דף הבית';
		$this->cp_yahoo = 'Yahoo מסנג\'ר';
		$this->cp_zone = 'איזור הזמן';
	}

	function email()
	{
		$this->email_blocked = 'That member is not accepting email through this form.'; //Translate
		$this->email_email = 'דואר אלקטרוני';
		$this->email_msgtext = 'Email Body:'; //Translate
		$this->email_no_fields = 'Go back and make sure that all fields are filled in.'; //Translate
		$this->email_no_member = 'No member was found by that name'; //Translate
		$this->email_no_perm = 'You do not have permission to send email through the board.'; //Translate
		$this->email_sent = 'הודעה נשלחה.';
		$this->email_subject = 'נושא:';
		$this->email_to = 'אל:';
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
		$this->forum_by = 'על ידי';
		$this->forum_can_post = 'אתה יכול להגיב בפורום הזה.';
		$this->forum_can_topics = 'אתה יכול לראות נושאים בפורום הזה.';
		$this->forum_cant_post = 'אתה לא יכול להגיב בפורום הזה.';
		$this->forum_cant_topics = 'אתה לא יכול לראות נושאים בפורום הזה.';
		$this->forum_dot = 'נקודה';
		$this->forum_dot_detail = 'shows that you have posted in the topic';
		$this->forum_forum = 'פורום';
		$this->forum_guest = 'אורח';
		$this->forum_hot = 'חם';
		$this->forum_icon = 'אייקון של נושא';
		$this->forum_jump = 'קפוץ להודעה אחרונה בנושא';
		$this->forum_last = 'הודעה אחרונה';
		$this->forum_locked = 'נעול';
		$this->forum_moved = 'מועבר';
		$this->forum_msg = '%s הודעה';
		$this->forum_new = 'חדש';
		$this->forum_new_poll = 'פרסם סקר חדש';
		$this->forum_new_topic = 'פרסם נושא חדש';
		$this->forum_no_topics = 'There are no topics to display for this forum.'; //Translate
		$this->forum_noexist = 'The specified forum does not exist.'; //Translate
		$this->forum_nopost = 'אין הודעות';
		$this->forum_not = 'לא';
		$this->forum_noview = 'אין לך הרשאות לצפות בפורומים האלה.';
		$this->forum_pages = 'עמודים';
		$this->forum_pinned = 'נעוץ';
		$this->forum_pinned_topic = 'נושא נעוץ';
		$this->forum_poll = 'סקר';
		$this->forum_regfirst = 'You do not have permission to view forums. If you register, you may be able to.'; //Translate
		$this->forum_replies = 'תגובות';
		$this->forum_starter = 'מפרסם';
		$this->forum_sub = 'תת-פורום';
		$this->forum_sub_last_post = 'הודעה אחרונה';
		$this->forum_sub_replies = 'תגובות';
		$this->forum_sub_topics = 'נושאים';
		$this->forum_subscribe = 'E-mail me when posts are made in this forum'; //Translate
		$this->forum_topic = 'נושא';
		$this->forum_topics_new = 'There are new posts in this forum.'; //Translate
		$this->forum_topics_old = 'There are no new posts in this forum.'; //Translate
		$this->forum_views = 'צפיות';
		$this->forum_write_topics = 'You can create topics in this forum.'; //Translate
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
		$this->help_available_files = 'עזרה';
		$this->help_confirm = 'Are you sure you want to delete'; //Translate
		$this->help_content = 'Article content'; //Translate
		$this->help_delete = 'Delete Help Article'; //Translate
		$this->help_deleted = 'Help Article Deleted.'; //Translate
		$this->help_edit = 'Edit Help Article'; //Translate
		$this->help_edited = 'Help article updated.'; //Translate
		$this->help_inserted = 'Article inserted into the database.'; //Translate
		$this->help_no_articles = 'No help articles were found in the database.'; //Translate
		$this->help_no_title = 'You can\'t create a help article without a title.'; //Translate
		$this->help_none = 'אין קבצי עזרה במסד נתונים';
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
		$this->login_cant_logged = 'You could not be logged in. Check to see that your user name and password are correct.<br /><br />They are case sensitive, so \'UsErNaMe\' is different from \'Username\'. Also, check to see that cookies are enabled in your browser.'; //Translate
		$this->login_cookies = 'Cookies must be enabled to login.'; //Translate
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = 'מתחבר';
		$this->login_logged = 'הינך עכשיו מחובר\ת.';
		$this->login_now_out = 'הינך עכשיו מנותק\ת.';
		$this->login_out = 'מתנתק';
		$this->login_pass = 'סיסמא';
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = 'אתה בטוח שאתה רוצה להתנתק מ \'%s\'?';
		$this->login_user = 'שם משתמש';
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
		$this->main_activate = 'Your account has not yet been activated.'; //Translate
		$this->main_activate_resend = 'Resend Activation Email'; //Translate
		$this->main_admincp = 'לוח בקרה של מנהל';
		$this->main_banned = 'You have been banned from viewing any portion of this board.'; //Translate
		$this->main_code = 'קוד';
		$this->main_cp = 'לוח בקרה';
		$this->main_full = 'מלא';
		$this->main_help = 'עזרה';
		$this->main_load = 'טוען';
		$this->main_login = 'התחבר';
		$this->main_logout = 'התנתק';
		$this->main_mark = 'mark all'; //Translate
		$this->main_mark1 = 'Mark all topics as read'; //Translate
		$this->main_max_load = 'We are sorry, but %s is currently unavailable, due to a massive amount of connected users.'; //Translate
		$this->main_members = 'משתמשים';
		$this->main_messenger = 'הודעות פרטיות';
		$this->main_new = 'חדש';
		$this->main_next = 'הבא';
		$this->main_prev = 'הקודם';
		$this->main_queries = 'שאילתות';
		$this->main_quote = 'ציטוט';
		$this->main_recent = 'recent posts'; //Translate
		$this->main_recent1 = 'View recent topics since your last visit'; //Translate
		$this->main_register = 'הרשמה';
		$this->main_reminder = 'Reminder: The board is closed, and only viewable to admins.';
		$this->main_reminder_closed = 'The board is closed and only viewable to admins.'; //Translate
		$this->main_said = 'said'; //Translate
		$this->main_search = 'חיפוש';
		$this->main_welcome = 'ברוך הבא';
		$this->main_welcome_guest = 'ברוך הבא!';
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
		$this->members_all = 'הכל';
		$this->members_email = 'דואר אלקטרוני';
		$this->members_email_member = 'שלח דואר אלקטרוני למשתמש';
		$this->members_group = 'קבוצה';
		$this->members_joined = 'תאריך הצטרפות';
		$this->members_list = 'רשימת משתמשים';
		$this->members_member = 'משתמש';
		$this->members_pm = 'הודעה פרטית';
		$this->members_posts = 'הודעות';
		$this->members_send_pm = 'שלח הודעה פרטית למשתמש';
		$this->members_title = 'כותרת';
		$this->members_vist_www = 'בקר באתר הבית של משתמש';
		$this->members_www = 'אתר הבית';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Are you sure you want to delete this post?'; //Translate
		$this->mod_confirm_topic_delete = 'Are you sure you want to delete the topic?'; //Translate
		$this->mod_error_first_post = 'You can not delete the first post in a topic.';
		$this->mod_error_move_category = 'You can not move a topic to a category.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'You can not move a topic to a forum that does not exist.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'You can not move a topic to the forum it is already in.';
		$this->mod_label_controls = 'Moderator Controls'; //Translate
		$this->mod_label_description = 'Description'; //Translate
		$this->mod_label_emoticon = 'Convert emoticons into images?'; //Translate
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'Format MbCode?'; //Translate
		$this->mod_label_move_to = 'Move to'; //Translate
		$this->mod_label_options = 'Options'; //Translate
		$this->mod_label_post_delete = 'Delete Post'; //Translate
		$this->mod_label_post_edit = 'Edit Post'; //Translate
		$this->mod_label_post_icon = 'Post Icon'; //Translate
		$this->mod_label_title = 'Title'; //Translate
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'Delete Topic'; //Translate
		$this->mod_label_topic_edit = 'Edit Topic'; //Translate
		$this->mod_label_topic_lock = 'Lock Topic'; //Translate
		$this->mod_label_topic_move = 'Move Topic'; //Translate
		$this->mod_label_topic_move_complete = 'Completely transfer the topic to the new forum'; //Translate
		$this->mod_label_topic_move_link = 'Transfer the topic to the new forum, and leave a link to its new location in the old forum.'; //Translate
		$this->mod_label_topic_pin = 'Pin Topic'; //Translate
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = 'The specified post does not exist.'; //Translate
		$this->mod_missing_topic = 'The specified topic does not exist.'; //Translate
		$this->mod_no_action = 'You must specify an action.'; //Translate
		$this->mod_no_post = 'You must specify a post.'; //Translate
		$this->mod_no_topic = 'You must specify a topic.'; //Translate
		$this->mod_perm_post_delete = 'You do not have permission to delete this post.'; //Translate
		$this->mod_perm_post_edit = 'You do not have permission to edit this post.'; //Translate
		$this->mod_perm_topic_delete = 'You do not have permission to delete this topic.'; //Translate
		$this->mod_perm_topic_edit = 'You do not have permission to edit this topic.'; //Translate
		$this->mod_perm_topic_lock = 'You do not have permission to lock this topic.'; //Translate
		$this->mod_perm_topic_move = 'You do not have permission to move this topic.'; //Translate
		$this->mod_perm_topic_pin = 'You do not have permission to pin this topic.'; //Translate
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = 'You do not have permission to unlock this topic.'; //Translate
		$this->mod_perm_topic_unpin = 'You do not have permission to unpin this topic.'; //Translate
		$this->mod_success_post_delete = 'The post was successfully deleted.'; //Translate
		$this->mod_success_post_edit = 'The post was successfully edited.'; //Translate
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'The topic was successfully deleted.'; //Translate
		$this->mod_success_topic_edit = 'The topic was successfully edited.'; //Translate
		$this->mod_success_topic_move = 'The topic was successfully moved to a new forum.'; //Translate
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
		$this->pm_cant_del = 'אין לך הרשאה למחק הודעה זו.';
		$this->pm_delallmsg = 'מחק כל ההודעות';
		$this->pm_delete = 'מחק';
		$this->pm_delete_selected = 'Delete Selected Messages'; //Translate
		$this->pm_deleted = 'הודעה נמחקה.';
		$this->pm_deleted_all = 'הודועת נמחקו.';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Your message could not be send. Make sure all required fields are filled in.'; //Translate
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'דואר נכנס';
		$this->pm_folder_new = '%s חדש';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'מ';
		$this->pm_group = 'קבוצה';
		$this->pm_guest = 'As a guest, you can not use the messenger. Please login or register.';
		$this->pm_joined = 'הצטרף';
		$this->pm_messenger = 'מסנג\'ר פרטי';
		$this->pm_msgtext = 'תוכן הודעה';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'You must specify a folder.'; //Translate
		$this->pm_no_member = 'No member was found with that id.'; //Translate
		$this->pm_no_number = 'No message was found with that number.'; //Translate
		$this->pm_no_title = 'אין נושא';
		$this->pm_nomsg = 'There are no messages in this folder.'; //Translate
		$this->pm_noview = 'You do not have permission to view this message.'; //Translate
		$this->pm_offline = 'This member is currently offline'; //Translate
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_personal = 'מסנג\'ר פרטי';
		$this->pm_personal_msging = 'שולח הודעה';
		$this->pm_pm = 'הודעה פרטית';
		$this->pm_posts = 'הודעות';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Reply'; //Translate
		$this->pm_send = ' שלח ';
		$this->pm_sendamsg = 'שלח הודעה פרטית';
		$this->pm_sendingpm = 'שולח הודעה פרטית';
		$this->pm_sendon = 'נשלח ב';
		$this->pm_success = 'הודעה שלך נשחה בהצלחה.';
		$this->pm_sure_del = 'הינן בטוח\ה שברצונך למחוק הודעה זו?';
		$this->pm_sure_delall = 'הינך בטוח שברצונך למחוק כל ההודעות?';
		$this->pm_title = 'כותרת';
		$this->pm_to = 'אל';
	}

	function post()
	{
		$this->post_attach = 'Attachments'; //Translate
		$this->post_attach_add = 'Add Attachment'; //Translate
		$this->post_attach_disrupt = 'Adding or removing attachments will not disrupt your post.'; //Translate
		$this->post_attach_failed = 'The attachment upload failed. The file you specified may not exist.'; //Translate
		$this->post_attach_not_allowed = 'You cannot attach files of that type.'; //Translate
		$this->post_attach_remove = 'Remove Attachment'; //Translate
		$this->post_attach_too_large = 'The attachment you specified to upload is too large. The maximum size is %d kilobytes.';
		$this->post_cant_create = 'As a guest, you do not have permission to create topics. If you register, you may be able to create topics.'; //Translate
		$this->post_cant_create1 = 'You do not have permission to create topics.'; //Translate
		$this->post_cant_enter = 'Your vote could not be entered. Either you have already voted in this poll, or you do not have permission to vote.'; //Translate
		$this->post_cant_poll = 'As a guest, you do not have permission to create polls. If you register, you may be able to create them.'; //Translate
		$this->post_cant_poll1 = 'You do not have permission to create polls.'; //Translate
		$this->post_cant_reply = 'You do not have permission to reply to topics in this forum.'; //Translate
		$this->post_cant_reply1 = 'As a guest, you do not have permission to reply to topics. If you register, you may be able to post.'; //Translate
		$this->post_cant_reply2 = 'You do not have permission to reply to topics.'; //Translate
		$this->post_closed = 'This topic has been closed.'; //Translate
		$this->post_create_poll = 'Create Poll'; //Translate
		$this->post_create_topic = 'Create Topic'; //Translate
		$this->post_creating = 'Creating Topic'; //Translate
		$this->post_creating_poll = 'Creating Poll'; //Translate
		$this->post_flood = 'You have posted in the past %s seconds, and you may not post right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->post_guest = 'Guest'; //Translate
		$this->post_icon = 'Post Icon'; //Translate
		$this->post_last_five = 'Last Five Posts In Reverse Order'; //Translate
		$this->post_length = 'Check Length'; //Translate
		$this->post_mbcode_address = 'Enter an address'; //Translate
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
		$this->post_mbcode_length = 'Your post is "+length+" characters.'; //Translate
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
		$this->post_msg = 'Message'; //Translate
		$this->post_must_msg = 'You must include a message when posting.'; //Translate
		$this->post_must_options = 'You must include options when creating a new poll.'; //Translate
		$this->post_must_title = 'You must include a title when creating a new topic.'; //Translate
		$this->post_new_poll = 'New poll'; //Translate
		$this->post_new_topic = 'New topic'; //Translate
		$this->post_no_forum = 'That forum was not found.'; //Translate
		$this->post_no_topic = 'No topic was specified.'; //Translate
		$this->post_no_vote = 'You must choose an option to vote for.'; //Translate
		$this->post_option_emoticons = 'Convert emoticons into images?'; //Translate
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'Format MbCode?'; //Translate
		$this->post_optional = 'optional'; //Translate
		$this->post_options = 'Options'; //Translate
		$this->post_poll_options = 'Poll Options'; //Translate
		$this->post_poll_row = 'One per line'; //Translate
		$this->post_posted = 'Posted on';
		$this->post_posting = 'Posting'; //Translate
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Reply'; //Translate
		$this->post_reply_topic = 'Reply to topic'; //Translate
		$this->post_replying = 'Replying To Topic'; //Translate
		$this->post_replying1 = 'Replying'; //Translate
		$this->post_smiles = 'Clickable Smilies'; //Translate
		$this->post_too_many_options = 'You must have between 2 and %d options to a poll.'; //Translate
		$this->post_topic_detail = 'Topic Description'; //Translate
		$this->post_topic_title = 'Topic Title'; //Translate
		$this->post_view_topic = 'View Entire Topic'; //Translate
		$this->post_voting = 'Voting'; //Translate
	}

	function printer()
	{
		$this->printer_back = 'Back'; //Translate
		$this->printer_not_found = 'The topic could not be found. It may have been deleted, moved, or may have never existed.'; //Translate
		$this->printer_not_found_title = 'Topic Not Found'; //Translate
		$this->printer_perm_topics = 'You do not have permission to view topics.'; //Translate
		$this->printer_perm_topics_guest = 'You do not have permission to view topics. If you register, you may be able to.'; //Translate
		$this->printer_posted_on = 'Posted on';
		$this->printer_send = 'Send to printer'; //Translate
	}

	function profile()
	{
		$this->profile_aim_sn = 'שם משתמש של AIM';
		$this->profile_av_sign = 'אווטר וחתימה';
		$this->profile_avatar = 'אווטר';
		$this->profile_bday = 'יום הולדת';
		$this->profile_contact = 'יצירת קשר';
		$this->profile_email_address = 'כתובת דואר אלקטרוני';
		$this->profile_fav = 'Favorite Forum'; //Translate
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_gtalk = 'GTalk Account'; //Translate
		$this->profile_icq_uin = 'מספר ICQ';
		$this->profile_info = 'מידע';
		$this->profile_interest = 'תחומי התענייניות';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'הודעה אחרונה';
		$this->profile_list = 'Member List'; //Translate
		$this->profile_location = 'מיקום';
		$this->profile_member = 'קבוצת משתמש';
		$this->profile_member_title = 'כותרת';
		$this->profile_msn = 'MSN מסנג\'ר';
		$this->profile_must_user = 'You must enter a user to view a profile.'; //Translate
		$this->profile_no_member = 'There is no member with that user id. The account may have been deleted.'; //Translate
		$this->profile_none = '[ ללא ]';
		$this->profile_not_post = 'לא כתב הודעות.';
		$this->profile_offline = 'This member is currently offline'; //Translate
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Private Messages'; //Translate
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'הודועת';
		$this->profile_private = '[ פרטי ]';
		$this->profile_profile = 'פרופיל';
		$this->profile_signature = 'חתימה';
		$this->profile_unkown = '[ לא ידוע ]';
		$this->profile_view_profile = 'צופה בפרופיל של';
		$this->profile_www = 'אתר הבית';
		$this->profile_yahoo = 'יאהו מסנג\'ר';
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
		$this->recent_by = 'על ידי';
		$this->recent_can_post = 'אתה יכול להגיב בפורום הזה.';
		$this->recent_can_topics = 'אתה יכול לראות נושאים בפורום הזה.';
		$this->recent_cant_post = 'אתה לא יכול להגיב בפורום הזה.';
		$this->recent_cant_topics = 'אתה לא יכול לראות נושאים בפורום הזה.';
		$this->recent_dot = 'נקודה';
		$this->recent_dot_detail = 'shows that you have posted in the topic';
		$this->recent_forum = 'פורום';
		$this->recent_guest = 'אורח';
		$this->recent_hot = 'חם';
		$this->recent_icon = 'אייקון של נושא';
		$this->recent_jump = 'קפוץ להודעה אחרונה בנושא';
		$this->recent_last = 'הודעה אחרונה';
		$this->recent_locked = 'נעול';
		$this->recent_moved = 'מועבר';
		$this->recent_msg = '%s הודעה';
		$this->recent_new = 'חדש';
		$this->recent_new_poll = 'פרסם סקר חדש';
		$this->recent_new_topic = 'פרסם נושא חדש';
		$this->recent_no_topics = 'There are no topics to display for this forum.';
		$this->recent_noexist = 'The specified forum does not exist.'; //Translate
		$this->recent_nopost = 'אין הודעות';
		$this->recent_not = 'לא';
		$this->recent_noview = 'אין לך הרשאות לצפות בפורומים האלה.';
		$this->recent_pages = 'עמודים';
		$this->recent_pinned = 'נעוץ';
		$this->recent_pinned_topic = 'נושא נעוץ';
		$this->recent_poll = 'סקר';
		$this->recent_regfirst = 'You do not have permission to view forums. If you register, you may be able to.'; //Translate
		$this->recent_replies = 'תגובות';
		$this->recent_starter = 'מפרסם';
		$this->recent_sub = 'תת-פורום';
		$this->recent_sub_last_post = 'הודעה אחרונה';
		$this->recent_sub_replies = 'תגובות';
		$this->recent_sub_topics = 'נושאים';
		$this->recent_subscribe = 'E-mail me when posts are made in this forum'; //Translate
		$this->recent_topic = 'נושא';
		$this->recent_topics_new = 'There are new posts in this forum.'; //Translate
		$this->recent_topics_old = 'There are no new posts in this forum.'; //Translate
		$this->recent_views = 'צפיות';
		$this->recent_write_topics = 'You can create topics in this forum.'; //Translate
	}

	function register()
	{
		$this->register_activated = 'Your account has been activated!'; //Translate
		$this->register_activating = 'Account Activation'; //Translate
		$this->register_activation_error = 'There was an error while activating your account. Check to see if your browser contains the full url in the activation email. If the problem persists, contact the board administrator to have your email resent.'; //Translate
		$this->register_confirm_passwd = 'Confirm Password'; //Translate
		$this->register_done = 'You have been registered! You can now login.'; //Translate
		$this->register_email = 'Email Address'; //Translate
		$this->register_email_invalid = 'The email address you entered is invalid.'; //Translate
		$this->register_email_msg = 'This is an automated email generated by Quicksilver Forums, and sent to you in order'; //Translate
		$this->register_email_msg2 = 'for you to activate your account with'; //Translate
		$this->register_email_msg3 = 'Please click the following link, or paste it in to your web browser:'; //Translate
		$this->register_email_used = 'The email address you entered is already assigned to a member.'; //Translate
		$this->register_fields = 'Not all fields are filled in.'; //Translate
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'You have been registered. An email has been sent to %s with information on how to activate your account. Your account will be limited until you activate it.'; //Translate
		$this->register_name_invalid = 'The name you entered is too long.'; //Translate
		$this->register_name_taken = 'That member name is already taken.'; //Translate
		$this->register_new_user = 'Desired User Name'; //Translate
		$this->register_pass_invalid = 'The password you entered is not valid. Make sure it uses only valid characters such as letters, numbers, dashes, underscores, or spaces, and is at least 5 characters.'; //Translate
		$this->register_pass_match = 'The passwords you entered do not match.'; //Translate
		$this->register_passwd = 'Password'; //Translate
		$this->register_reg = 'Register'; //Translate
		$this->register_reging = 'Registering'; //Translate
		$this->register_tos_i_agree = 'I agree to the above terms'; //Translate
		$this->register_tos_read = 'Please read the following terms of service'; //Translate
	}

	function rssfeed()
	{
		$this->rssfeed_posted_by = 'Posted by'; //Translate
	}

	function search()
	{
		$this->search_advanced = 'אפשרויות מתקדמות';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'חיפוש בסיסי';
		$this->search_characters = 'characters of a post'; //Translate
		$this->search_day = 'יום';
		$this->search_days = 'ימים';
		$this->search_exact_name = 'exact name'; //Translate
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'חפש אחר';
		$this->search_forum = 'פורום';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'אורח';
		$this->search_in = 'חפש ב';
		$this->search_in_posts = 'Only search in posts'; //Translate
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Joined'; //Translate
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Search by matching'; //Translate
		$this->search_matches = 'Matches'; //Translate
		$this->search_month = 'חודש';
		$this->search_months = 'חודשים';
		$this->search_mysqldoc = 'MySQL Documentation'; //Translate
		$this->search_newer = 'newer'; //Translate
		$this->search_no_results = 'Your search returned no results.'; //Translate
		$this->search_no_words = 'You must specify some search terms.<br /><br />Each term must be longer than 3 characters, including letters, numbers, apostrophes, and underscores.'; //Translate
		$this->search_offline = 'This member is currently offline'; //Translate
		$this->search_older = 'older'; //Translate
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Only display first'; //Translate
		$this->search_partial_name = 'partial name'; //Translate
		$this->search_post_icon = 'Post Icon'; //Translate
		$this->search_posted_on = 'Posted on';
		$this->search_posts = 'הודעות';
		$this->search_posts_by = 'Only in posts by'; //Translate
		$this->search_regex = 'Search by regular expression'; //Translate
		$this->search_regex_failed = 'Your regular expression failed. Please see the MySQL documentation for regular expression help.'; //Translate
		$this->search_relevance = 'Post Relevance: %d%%'; //Translate
		$this->search_replies = 'הודעות';
		$this->search_result = 'Search Results'; //Translate
		$this->search_search = ' חפש ';
		$this->search_select_all = 'בחר הכל';
		$this->search_show_posts = 'Show matched posts'; //Translate
		$this->search_sound = 'Search by sound'; //Translate
		$this->search_starter = 'Starter'; //Translate
		$this->search_than = 'than'; //Translate
		$this->search_topic = 'נושא';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'שבוע';
		$this->search_weeks = 'שבועות';
		$this->search_year = 'שנה';
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
		$this->topic_attached = 'Attached file:'; //Translate
		$this->topic_attached_downloads = 'הורדות';
		$this->topic_attached_perm = 'You do not have permission to download this file.'; //Translate
		$this->topic_attached_title = 'Attached File'; //Translate
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_bottom = 'Go to the bottom of the page'; //Translate
		$this->topic_create_poll = 'Create New Poll'; //Translate
		$this->topic_create_topic = 'Create New Topic'; //Translate
		$this->topic_delete = 'מחק';
		$this->topic_delete_post = 'Delete this post'; //Translate
		$this->topic_edit = 'עריכה';
		$this->topic_edit_post = 'Edit this post'; //Translate
		$this->topic_edited = 'Last edited on %s by %s';
		$this->topic_error = 'שגיאה';
		$this->topic_group = 'קבוצה';
		$this->topic_guest = 'אורח';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'תאריך הצטרפות';
		$this->topic_level = 'רמה של משתמש';
		$this->topic_links_aim = 'Send an AIM message to %s'; //Translate
		$this->topic_links_email = 'Send an email to %s'; //Translate
		$this->topic_links_gtalk = 'Send a GTalk message to %s'; //Translate
		$this->topic_links_icq = 'Send an ICQ messsage to %s'; //Translate
		$this->topic_links_msn = 'View %s\'s MSN profile'; //Translate
		$this->topic_links_pm = 'Send a personal messsage to %s'; //Translate
		$this->topic_links_web = 'Visit %s\'s web site'; //Translate
		$this->topic_links_yahoo = 'Send a message to %s with Yahoo! Messenger'; //Translate
		$this->topic_lock = 'נעל';
		$this->topic_locked = 'נושא נעול';
		$this->topic_move = 'העבר';
		$this->topic_no_votes = 'There are no votes for this poll.'; //Translate
		$this->topic_not_found = 'נוששא לא קיים';
		$this->topic_not_found_message = 'The topic could not be found. It may have been deleted, moved, perhaps never existed.'; //Translate
		$this->topic_offline = 'This member is currently offline'; //Translate
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'אפשרויות נושא';
		$this->topic_pages = 'עמודים';
		$this->topic_perm_view = 'You do not have permission to view topics.'; //Translate
		$this->topic_perm_view_guest = 'You do not have permission to view topics. If you register, you may be able to.'; //Translate
		$this->topic_pin = 'נעץ';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = 'הודועת';
		$this->topic_print = 'View Printable'; //Translate
		$this->topic_quote = 'Reply with a quote from this post'; //Translate
		$this->topic_reply = 'Reply to Topic'; //Translate
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = 'E-mail me when replies are made to this topic'; //Translate
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'בטל נעילה';
		$this->topic_unpin = 'בטח נעיצה';
		$this->topic_unreg = 'לא רשום';
		$this->topic_view = 'הראה תוצאות';
		$this->topic_viewing = 'Viewing Topic'; //Translate
		$this->topic_vote = 'הצבעה';
		$this->topic_vote_count_plur = '%d הצבעות';
		$this->topic_vote_count_sing = '%d הצבעה';
		$this->topic_votes = 'הצבעות';
	}

	function universal()
	{
		$this->aim = 'AIM'; //Translate
		$this->based_on = 'based on';
		$this->board_by = 'על ידי';
		$this->charset = 'windows-1255';
		$this->continue = 'Continue'; //Translate
		$this->delete = 'Delete'; //Translate
		$this->direction = 'rtl';
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
		$this->submit = 'אישור';
		$this->subscribe = 'Subscribe'; //Translate
		$this->today = 'Today'; //Translate
		$this->website = 'WWW'; //Translate
		$this->yahoo = 'Yahoo'; //Translate
		$this->yes = 'Yes'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}
}
?>