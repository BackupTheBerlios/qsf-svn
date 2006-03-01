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
		$this->active_modules_forum = '%s :מציג את הפורום';
		$this->active_modules_help = 'משתמש בעזרה';
		$this->active_modules_login = 'מתחבר\מתנתק';
		$this->active_modules_members = 'צופה ברשימת חברי הפורום';
		$this->active_modules_mod = 'מסדר פורומים';
		$this->active_modules_pm = 'משתמש המסנג\'ר פרטי';
		$this->active_modules_post = 'מפרסם הודעה';
		$this->active_modules_printer = '%s :מדפיס את ההודעה';
		$this->active_modules_profile = '%s :מציג את הפרופיל';
		$this->active_modules_recent = 'מציג את ההודעות האחרונות';
		$this->active_modules_search = 'מחפש';
		$this->active_modules_topic = '%s :מציג את ההודעה';
		$this->active_time = 'זמן';
		$this->active_user = 'משתמש';
		$this->active_users = 'משתמשים פעילים';
	}

	function admin()
	{
		$this->admin_add_emoticons = 'הוספת סמלי הבעה';
		$this->admin_add_member_titles = 'הוספת כותרת חבר אוטומטית';
		$this->admin_add_templates = 'HTML הוספת תבניות';
		$this->admin_ban_ips = 'IP חסימת כתובות';
		$this->admin_censor = 'מילים מצונזרות';
		$this->admin_cp_denied = 'הגישה נדחתה';
		$this->admin_cp_warning = 'מאחר והיא יוצרת בעיית אבטחה חמורה. <b>ההתקנה<b> לוח בקרת המנהל יהיה מנוטרל עד מחיקת ספריית';
		$this->admin_create_forum = 'יצירת פורום';
		$this->admin_create_group = 'יצירת קבוצה';
		$this->admin_create_help = 'יצירת מאמר עזרה';
		$this->admin_create_skin = 'יצירת סקין';
		$this->admin_db = 'מסד נתונים';
		$this->admin_db_backup = 'גבוי מסד נתונים';
		$this->admin_db_conn = 'עריכת הגדרות התחברות';
		$this->admin_db_optimize = 'ייעול מסד הנתונים';
		$this->admin_db_query = 'SQL ביצוע שאילתת';
		$this->admin_db_restore = 'שיחזור מגיבוי';
		$this->admin_delete_forum = 'מחיקת פורום';
		$this->admin_delete_group = 'מחיקת קבוצה';
		$this->admin_delete_help = 'מחיקת מאמר עזרה';
		$this->admin_delete_member = 'מחיקת חבר';
		$this->admin_delete_template = 'HTML מחיקת תבנית';
		$this->admin_edit_emoticons = 'עריכה או מחיקת סמלי הבעה';
		$this->admin_edit_forum = 'עריכת פורום';
		$this->admin_edit_group_name = 'עריכת שם קבוצה/ות';
		$this->admin_edit_group_perms = 'עריכת הרשאות קבוצה/ות';
		$this->admin_edit_help = 'עריכת מאמר עזרה';
		$this->admin_edit_member = 'עריכת חבר';
		$this->admin_edit_member_perms = 'עריכת הרשאות חבר/ים';
		$this->admin_edit_member_titles = 'עריכה או מחיקת כותרת חבר אוטומטית';
		$this->admin_edit_settings = 'עריכת הגדרות לוח';
		$this->admin_edit_skin = 'סקין עריכה או מחיקת';
		$this->admin_edit_templates = 'HTML עריכת תבניות';
		$this->admin_emoticons = 'סמלי הבעה';
		$this->admin_export_skin = 'ייצוא סקין';
		$this->admin_fix_stats = 'סדר סטטיסטיקות חבר';
		$this->admin_forum_order = 'שינוי סדר הפרומים';
		$this->admin_forums = 'פורומים וקטגוריות';
		$this->admin_groups = 'קבוצות';
		$this->admin_heading = 'Quicksilver לוח הבקרה של מנהל הפורומים של';
		$this->admin_help = 'מאמרי עזרה';
		$this->admin_install_emoticons = 'התקנת סמלי הבעה';
		$this->admin_install_skin = 'סקין התקנת';
		$this->admin_logs = 'תצוגת פעילות מנהל';
		$this->admin_mass_mail = 'שליחת אימייל לחברים';
		$this->admin_members = 'חברים';
		$this->admin_phpinfo = 'PHP תצוגת מידע';
		$this->admin_prune = 'מחיקת הודעות ישנות';
		$this->admin_recount_forums = 'ספירת הודעות ותגובות';
		$this->admin_settings = 'הגדרות';
		$this->admin_skins = 'סקינים';
		$this->admin_stats = 'מרכז הסטטיסטיקות';
		$this->admin_upgrade_skin = 'סקין שידרוג';
		$this->admin_your_board = 'הפורום שלך';
	}

	function backup()
	{
		$this->backup_create = 'גיבוי מסד נתונים';
		$this->backup_done = '.Quicksilver מסד הנתונים גובה לספרייה הראשית של הפורומים של';
		$this->backup_found = '.Quicksilver הגיבויים הבאים נמצאו בספריית הפורומים של';
		$this->backup_invalid = '.אין אפשרות לבצע גיבוי. לא נעשו שינויים במסד הנתונים';
		$this->backup_none = '.Quicksilver לא נמצאו גיבויים בספריית הפורומים של';
		$this->backup_restore = 'שחזר גיבוי';
		$this->backup_restore_done = '.מסד הנתונים שוחזר בהצלחה';
		$this->backup_warning = '.Quicksilver אזהרה: פעולה זו תשכתב את כל הנתונים בשימוש הפורומים של';
	}

	function ban()
	{
		$this->ban = 'חסום';
		$this->ban_banned_ips = 'חסומות IP כתובות';
		$this->ban_banned_members = 'חברים חסומים';
		$this->ban_ip = 'חסומות IP כתובות';
		$this->ban_member_explain1 = 'לחסימת משתמשים, שנה את קבוצת המשתמשים שלהם ל';
		$this->ban_member_explain2 = '.בלוח בקרת המשתמשים';
		$this->ban_members = 'חברים חסומים';
		$this->ban_nomembers = 'אין כרגע חברים חסומים.';
		$this->ban_one_per_line = '.כתובת אחת לכל שורה';
		$this->ban_regex_allowed = 'ביטויים רגילים מורשים. באפשרותך להשתמש ב * בודדה כתו כללי לספרה אחת או יותר.';
		$this->ban_settings = 'הגדרות חסימה';
		$this->ban_users_banned = '.משתמשים חסומים';
	}

	function board()
	{
		$this->board_active_users = 'משתמשים פעילים';
		$this->board_birthdays = 'ימי הולדת היום:';
		$this->board_bottom_page = 'עבור לתחתית העמוד';
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
		$this->board_most_online = '%s ב %d מספר המשתמשים המירבי שהיה מחובר הוא';
		$this->board_nobday = 'אין ימי הולדת היום.';
		$this->board_nobody = 'אין כרגע משתמש מחוברים.';
		$this->board_nopost = 'אין הודעות';
		$this->board_noview = 'אין לך הרשאות לראות פורום.';
		$this->board_regfirst = 'אין לך הרשאות לראות פורום. אם אתה נרשם, אתה יכול לראות פורום.';
		$this->board_replies = 'תגובות';
		$this->board_stats = 'סטטיסטיקות';
		$this->board_stats_string = 'הודעות. %s תגובות סה"כ %s נושאים ו %s ישנם <b /> .%s משתמשים נרשמו.ברוך הבא משתמש חדש  %s';
		$this->board_top_page = 'עבור לראש העמוד';
		$this->board_topics = 'נושאים';
		$this->board_users = 'משתמשים';
		$this->board_write_topics = 'הינך יכול לראות ולכתוב בפורום הזה.';
	}

	function censoring()
	{
		$this->censor = 'מילים מצונזרות';
		$this->censor_one_per_line = 'אחת בכל שורה.';
		$this->censor_regex_allowed = 'ביטויים רגילים מורשים. באפשרותך להשתמש ב * בודדה כתו כללי לתו אחד או יותר.';
		$this->censor_updated = '.רשימת המילים עודכנה';
	}

	function cp()
	{
		$this->cp_aim = 'שם משתמש של AIM';
		$this->cp_already_member = 'דואר אלקטרוני שכתבת כבר בשימוש על ידי משתמש אחר.';
		$this->cp_apr = 'אפריל';
		$this->cp_aug = 'אוגוסט';
		$this->cp_avatar_current = 'אווטרה שלך';
		$this->cp_avatar_error = 'שגיאה באווטרה';
		$this->cp_avatar_must_select = 'אתה חייב לבחור אווטרה.';
		$this->cp_avatar_none = 'ללא שימוש באווטרה';
		$this->cp_avatar_pixels = 'פיקסלים';
		$this->cp_avatar_select = 'בחר אווטרה';
		$this->cp_avatar_size_height = 'אורך האווטרה שלך חייב להיות באורך 1 ו';
		$this->cp_avatar_size_width = 'רוחב האווטרה שלך חייב להיות ברוחב 1 ו';
		$this->cp_avatar_upload = 'העלת אווטרה ממחשב שלך';
		$this->cp_avatar_upload_failed = 'העלה של אווטרה נכשלה. הקובץ לא קיים.';
		$this->cp_avatar_upload_not_image = 'אתה יכול לעות רק תמונות ולהשתמש בהן כאווטרה.';
		$this->cp_avatar_upload_too_large = 'אווטרה שאתה רוצה לעלות גדול מידי. קובל המקסימלי הוא %d קילובייט.';
		$this->cp_avatar_url = 'קישר URL אל האווטרה';
		$this->cp_avatar_use = 'השתמש באווטרה שהעלת';
		$this->cp_bday = 'יום הולדת';
		$this->cp_been_updated = 'פרופיל שלך עודכן.';
		$this->cp_been_updated1 = 'אווטרה שלך הועלה.';
		$this->cp_been_updated_prefs = 'הגדרות שלך עודכנו.';
		$this->cp_changing_pass = 'עריכת סיסמא';
		$this->cp_contact_pm = 'הרשה לאחרים לשלוח לך הודעות פרטיות?';
		$this->cp_cp = 'לוח בקרה';
		$this->cp_current_avatar = 'אווטרה';
		$this->cp_current_time = 'השעה עכשיו %s.';
		$this->cp_custom_title = 'כותרת חבר מותאמת אישית';
		$this->cp_custom_title2 = 'זכויות אלו שמורות למנהלי הלוח';
		$this->cp_dec = 'דצמבר';
		$this->cp_editing_avatar = 'ערכית אווטרה';
		$this->cp_editing_profile = 'ערכית פרופיל';
		$this->cp_email = 'דואר אלקטרוני';
		$this->cp_email_form = 'לאפשר לאחרים ליצור קשר עימך דרך טופס האימייל?';
		$this->cp_email_invaid = 'דואר אלקטרוני שהכנסת שגויי.';
		$this->cp_err_avatar = 'שגיאה בהעלת אווטרה';
		$this->cp_err_updating = 'שגיאה בעידכון פרופיל';
		$this->cp_feb = 'פברואר';
		$this->cp_file_type = 'אווטרה שהכנסת איננו נכון. תבדוק אם הקישור לאווטרה נכון, וסוג קובץ של אווטרה הוא gif, jpg, או png.';
		$this->cp_format = 'שם משתמש';
		$this->cp_gtalk = 'GTalk חשבון';
		$this->cp_header = 'לוח בקרה אישי';
		$this->cp_height = 'אורך';
		$this->cp_icq = 'מספר ICQ';
		$this->cp_interest = 'תחומי עניין';
		$this->cp_jan = 'ינואר';
		$this->cp_july = 'יולי';
		$this->cp_june = 'יוני';
		$this->cp_label_edit_avatar = 'עריכת אווטרה';
		$this->cp_label_edit_pass = 'עריכת סיסמא';
		$this->cp_label_edit_prefs = 'עריכת הגדרות';
		$this->cp_label_edit_profile = 'עריכת פרופיל';
		$this->cp_label_edit_sig = 'עריכת חתימה';
		$this->cp_label_edit_subs = 'ערכית מינויי';
		$this->cp_language = 'שפה';
		$this->cp_less_charac = 'שם שלך יכול להיות 32 מקסימום.';
		$this->cp_location = 'מיקום';
		$this->cp_login_first = 'הינך חייב להיות מחובר כדי לגשת ללוח בקרה.';
		$this->cp_mar = 'מרץ';
		$this->cp_may = 'מאי';
		$this->cp_msn = 'MSN מסנג\'ר';
		$this->cp_must_orig = '.השם שלך חייב להיות זהה למקור. באפשרותך לשנות את גודל האות ורווחים';
		$this->cp_new_notmatch = 'הסיסמא החדשה שהכנסת אינה תואמת.';
		$this->cp_new_pass = 'סיסמא חדשה';
		$this->cp_no_flash = 'אווטרה בפלאש אסורים בלוח זה.';
		$this->cp_not_exist = 'אינו קיים! (%s) התאריך שציינת';
		$this->cp_nov = 'נובמבר';
		$this->cp_oct = 'אוקטובר';
		$this->cp_old_notmatch = 'הסיסמא הישנה שהקלדת אינה קיימת במס הנתונים.';
		$this->cp_old_pass = 'סיסמא ישנה';
		$this->cp_pass_notvaid = 'הסיסמא שלך לא תקינה. וודא שהינך משתמש בתווים תקינים כגון אותיות, מספרים, קו מפריד, קו תחתון ורווחים.';
		$this->cp_preferences = 'משנה הגדרות';
		$this->cp_preview_sig = ':הצגה מוקדמת של החתימה';
		$this->cp_privacy = 'אפשרויות פרטיות';
		$this->cp_repeat_pass = 'חזור על הסיסמא החדשה';
		$this->cp_sept = 'ספטמבר';
		$this->cp_show_active = 'להציג את פעילותייך כשאתה משתמש בפורום?';
		$this->cp_show_email = 'להציג כתובת אימייל בפרופיל?';
		$this->cp_signature = 'חתימה';
		$this->cp_size_max = 'פיקסלים. %s על %s האווטר שהכנסת גדול מידי. הגודל המקסימלי המותר הוא';
		$this->cp_skin = 'סקין של פורום';
		$this->cp_sub_change = 'משנה רישום';
		$this->cp_sub_delete = 'מחיקה';
		$this->cp_sub_expire = 'תאריך תפוגה';
		$this->cp_sub_name = 'שם רישום';
		$this->cp_sub_no_params = 'לא ניתנו פרמטרים.';
		$this->cp_sub_success = '.%s הינך רשום כעת ל';
		$this->cp_sub_type = 'סוג הרשמה';
		$this->cp_sub_updated = 'הרישומים שנבחר נמחקו.';
		$this->cp_topic_option = 'אפשרויות נושאים';
		$this->cp_updated = 'פרופיל עודכן';
		$this->cp_updated1 = 'אווטרה עודכן';
		$this->cp_updated_prefs = 'הגדרות הודכנו';
		$this->cp_user_exists = 'שם משתמש זה כבר קיים.';
		$this->cp_valided = 'סיסמתך שונתה ותקפה.';
		$this->cp_view_avatar = 'להראות אווטרים?';
		$this->cp_view_emoticon = 'להראות סמיילים?';
		$this->cp_view_signature = 'להראות חתימות?';
		$this->cp_welcome = 'ברוכים הבאים ללוח בקרה אישי. כאן הינך יכול לערוך ולשנות אפשרויות שפורום נותן לך. אנא בחרו מאפשרויות שיש לכם למעלה.';
		$this->cp_width = 'רוחב';
		$this->cp_www = 'דף הבית';
		$this->cp_yahoo = 'Yahoo מסנג\'ר';
		$this->cp_zone = 'איזור הזמן';
	}

	function email()
	{
		$this->email_blocked = 'החר אינו מקבל מיילים דרך טופס זה.';
		$this->email_email = 'דואר אלקטרוני';
		$this->email_msgtext = 'גוף הודעת המייל:';
		$this->email_no_fields = 'חזור אחורה בכדי לוודא שכל השדות מלאים.';
		$this->email_no_member = 'לא נמצא חבר בשם זה';
		$this->email_no_perm = 'אין לך הרשאות לשלוח אימייל דרך הלוח.';
		$this->email_sent = 'הודעה נשלחה.';
		$this->email_subject = 'נושא:';
		$this->email_to = 'אל:';
	}

	function emot_control()
	{
		$this->emote = 'סמלי הבעה';
		$this->emote_add = 'הוסף סמלי הבעה';
		$this->emote_added = 'סמל הבעה התווסף.';
		$this->emote_clickable = 'ניתן ללחיצה';
		$this->emote_edit = 'עריכת סמלי הבעה';
		$this->emote_image = 'תמונה';
		$this->emote_install = 'התקנה סמלי הבעה';
		$this->emote_install_done = 'סמלי הבעה הותקנו מחדש בהצלחה.';
		$this->emote_install_warning = 'פעולה זו תמחק את הגדרות סמלי ההבעה הקיימים ותייבא סמלי הבעה שהועלו מהסקין שכרגע נבחר למסד הנתונים.';
		$this->emote_no_text = 'לא ניתן מלל לסמל ההבעה.';
		$this->emote_text = 'טקסט';
	}

	function forum()
	{
		$this->forum_by = 'על ידי';
		$this->forum_can_post = 'אתה יכול להגיב בפורום הזה.';
		$this->forum_can_topics = 'אתה יכול לראות נושאים בפורום הזה.';
		$this->forum_cant_post = 'אתה לא יכול להגיב בפורום הזה.';
		$this->forum_cant_topics = 'אתה לא יכול לראות נושאים בפורום הזה.';
		$this->forum_dot = 'נקודה';
		$this->forum_dot_detail = 'מראה שהגבת להודעה';
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
		$this->forum_no_topics = 'אין נושאים להצגה בפורום זה.';
		$this->forum_noexist = 'הפורום שצויין לא קיים.';
		$this->forum_nopost = 'אין הודעות';
		$this->forum_not = 'לא';
		$this->forum_noview = 'אין לך הרשאות לצפות בפורומים האלה.';
		$this->forum_pages = 'עמודים';
		$this->forum_pinned = 'נעוץ';
		$this->forum_pinned_topic = 'נושא נעוץ';
		$this->forum_poll = 'סקר';
		$this->forum_regfirst = 'אינך מורשה לצפות בפורום. אם תירשם, ייתכן ותוכל לצפות.';
		$this->forum_replies = 'תגובות';
		$this->forum_starter = 'מפרסם';
		$this->forum_sub = 'תת-פורום';
		$this->forum_sub_last_post = 'הודעה אחרונה';
		$this->forum_sub_replies = 'תגובות';
		$this->forum_sub_topics = 'נושאים';
		$this->forum_subscribe = 'שלח לי הודעת מייל כשיגיבו לפורום זה';
		$this->forum_topic = 'נושא';
		$this->forum_views = 'צפיות';
		$this->forum_write_topics = 'הינך מורשה ליצור הודעות בפורום זה.';
	}

	function forums()
	{
		$this->forum_controls = 'בקרת הפורום';
		$this->forum_create = 'יצירת פורום';
		$this->forum_create_cat = 'צור קטגוריה';
		$this->forum_created = 'הפורום נוצר';
		$this->forum_default_perms = 'הרשאות ברירת מחדל';
		$this->forum_delete = 'מחיקת פורום';
		$this->forum_delete_warning = 'פעולה זו לא הפיכה. <br />האם אתה בטוח רוצה למחוק את הפורום הזה כולל הודעותיו ותגובותיו?';
		$this->forum_deleted = 'הפורום נמחק.';
		$this->forum_description = 'תאור';
		$this->forum_edit = 'עריכת פורום';
		$this->forum_edited = 'הפורום נערך בהצלחה.';
		$this->forum_empty = 'לא ניתן שם לפורום. אנא חזור ותן שם.';
		$this->forum_is_subcat = 'פורום זה הוא תת-קטגוריה בלבד.';
		$this->forum_name = 'שם';
		$this->forum_no_orphans = 'אינך יכול לייתם פורום ע"י מחיקת פורום האב.';
		$this->forum_none = 'אין פורומים לתפעול.';
		$this->forum_ordered = 'סדר הפורומים עודכן';
		$this->forum_ordering = 'שנה סדר הפורומים';
		$this->forum_parent = 'אינך יכול לשנות את אב הפורום/ים בצורה זו.';
		$this->forum_parent_cat = 'קטגוריית אב';
		$this->forum_quickperm_select = 'בחר בפורום קיים בכדי להעתיק את ההרשאות שלו.';
		$this->forum_quickperms = 'הרשאות מהירות';
		$this->forum_recount = 'ספירת נושאים ותגובות';
		$this->forum_select_cat = 'בחר בטגרויה קיימת בכדי ליצור פורום.';
		$this->forum_subcat = 'תת-קטגוריה';
	}

	function groups()
	{
		$this->groups_bad_format = 'You must use %s in the format, which represents the group name.'; //Translate
		$this->groups_based_on = 'מבוססת על';
		$this->groups_create = 'יצירת קבוצה';
		$this->groups_create_new = 'צור קבוצת משתמשים לדשה בשם';
		$this->groups_created = 'קבוצה נוצרה';
		$this->groups_delete = 'מחיקת קבוצה';
		$this->groups_deleted = 'קבוצה נמחקה.';
		$this->groups_edit = 'עריכת קבוצה';
		$this->groups_edited = 'קבוצה נערכה.';
		$this->groups_formatting = 'הצג תבנית';
		$this->groups_i_confirm = 'אני מאשר שברצוני למחוק את קבוצת החברים.';
		$this->groups_name = 'שם';
		$this->groups_no_action = 'לא נעשתה פעולה.';
		$this->groups_no_delete = ' = , ואינן ניתנות למחיקה.Quicksilver קבוצות הליבה חיוניות לתיפקוד הפורומים של<br />אין קבוצות מותאמות אישית למחיקה.';
		$this->groups_no_group = 'לא צויינה קבוצה.';
		$this->groups_no_name = 'לא ניתן שם לקבוצה.';
		$this->groups_only_custom = '.Quicksilver הערה: באפשרותך למחוק רק קבוצות מותאמות אישית. קבוצות הליבה חיוניות לתיפקוד הפורומים של';
		$this->groups_the = 'הקבוצה';
		$this->groups_to_edit = 'קבוצה לעריכה';
		$this->groups_type = 'סוג קבוצה';
		$this->groups_will_be = 'תימחק.';
		$this->groups_will_become = 'משתמשים מהקבוצה המחוקה יהפכו';
	}

	function help()
	{
		$this->help_add = 'הוספת מאמר עזרה';
		$this->help_article = 'בקרת מאמר עזרה';
		$this->help_available_files = 'עזרה';
		$this->help_confirm = 'האם אתה בטוח רוצה למחוק';
		$this->help_content = 'תוכן מאמר';
		$this->help_delete = 'מחיקת מאמר עזרה';
		$this->help_deleted = 'מאמר עזרה נמחק.';
		$this->help_edit = 'עריכת מאמר עזרה';
		$this->help_edited = 'מאמר עזרה עודכן.';
		$this->help_inserted = 'מאמר הוכנס למסד הנתונים.';
		$this->help_no_articles = 'לא נמצאו מאמרי עזרה במסד הנתונים';
		$this->help_no_title = 'אין אפשרות ליצור מאמר עזרה ללא כותרת.';
		$this->help_none = 'אין קבצי עזרה במסד נתונים';
		$this->help_not_exist = 'מאמר עזרה זה לא קיים.';
		$this->help_select = 'בחר במאמר עזרה לעריכה.';
		$this->help_select_delete = 'בחר במאמר עזרה למחיקה.';
		$this->help_title = 'כותרת';
	}

	function home()
	{
		$this->home_choose = 'להתחלה בחר במשימה.';
		$this->home_menu_title = 'תפריט לוח בקרת מנהל';
	}

	function login()
	{
		$this->login_cant_logged = 'בדפדפן שלך. cookies . בנוסף, בדוק שמאופשר\'Username\' \' שונה מUsErNaMe\' ישנה רגישות לאותיות קטנות וגדולות, ז"א<br /><br />לא התאפשרה כניסתך למערכת. בדוק ששם המשתמש והסיסמא נכונים.';
		$this->login_cookies = 'בכדי להיכנס למערכת. cookies חובה לאפשר';
		$this->login_forgot_pass = 'שכחת את הסיסמא?';
		$this->login_header = 'מתחבר';
		$this->login_logged = 'הינך עכשיו מחובר\ת.';
		$this->login_now_out = 'הינך עכשיו מנותק\ת.';
		$this->login_out = 'מתנתק';
		$this->login_pass = 'סיסמא';
		$this->login_pass_no_id = 'לא קיים חבר עם שם המשתמש שהכנסת.';
		$this->login_pass_request = 'להשלמת איפוס סיסמתך, לחץ על הקישור שקיבלת במייל המשוייך עם חשבונך.';
		$this->login_pass_reset = 'איפוס סיסמא';
		$this->login_pass_sent = 'סיסמתך אופסה. הסיסמא החדשה נשלחה למייל המשוייך עם חשבונך.';
		$this->login_sure = 'אתה בטוח שאתה רוצה להתנתק מ \'%s\'?';
		$this->login_user = 'שם משתמש';
	}

	function logs()
	{
		$this->logs_action = 'פעולה';
		$this->logs_deleted_post = 'נמחקה תגובה';
		$this->logs_deleted_topic = 'נמחקה הודעה';
		$this->logs_edited_post = 'נערכה תגובה';
		$this->logs_edited_topic = 'נערכה הודעה';
		$this->logs_id = 'IDs'; //Translate
		$this->logs_locked_topic = 'ננעלה הודעה';
		$this->logs_moved_from = 'מהפורום';
		$this->logs_moved_to = 'לפורום';
		$this->logs_moved_topic = 'הועברה הודעה';
		$this->logs_moved_topic_num = 'הועברה הודעה #';
		$this->logs_pinned_topic = 'ננעצה הודעה';
		$this->logs_post = 'תגובה';
		$this->logs_time = 'זמן';
		$this->logs_topic = 'נושא';
		$this->logs_unlocked_topic = 'שוחררה הודעה';
		$this->logs_unpinned_topic = 'נותקה הודעה';
		$this->logs_user = 'משתמש';
		$this->logs_view = 'הצג פעילות מבקר';
	}

	function main()
	{
		$this->main_activate = 'חשבונך לא הופעל עדיין.';
		$this->main_activate_resend = 'שלח מחדש מייל הפעלה';
		$this->main_admincp = 'לוח בקרה של מנהל';
		$this->main_banned = 'נחסמה ממך הצפייה בחלק כלשהו מהפורום.';
		$this->main_code = 'קוד';
		$this->main_cp = 'לוח בקרה';
		$this->main_full = 'מלא';
		$this->main_help = 'עזרה';
		$this->main_load = 'טוען';
		$this->main_login = 'התחבר';
		$this->main_logout = 'התנתק';
		$this->main_mark = 'סמן הכל';
		$this->main_mark1 = 'סמן את כל ההודעות כנקראו';
		$this->main_max_load = 'לא נגיש, עקב מספר גדול של משתמשים מחוברים. %s אנו מצטערים, כרגע ה';
		$this->main_members = 'משתמשים';
		$this->main_messenger = 'הודעות פרטיות';
		$this->main_new = 'חדש';
		$this->main_next = 'הבא';
		$this->main_prev = 'הקודם';
		$this->main_queries = 'שאילתות';
		$this->main_quote = 'ציטוט';
		$this->main_recent = 'תגובות אחרונות';
		$this->main_recent1 = 'צפה בנודעות האחרונות מאז ביקורך האחרון';
		$this->main_register = 'הרשמה';
		$this->main_reminder = 'תזכורת: פורום זה סגור ומותר לצפייה רק ע"י מנהלים.';
		$this->main_reminder_closed = 'הפורום סגור ומותר לפייה רק ע"י מנהלים';
		$this->main_said = 'אמר';
		$this->main_search = 'חיפוש';
		$this->main_topics_new = 'יש הודועת חדשות בפורום הזה.';
		$this->main_topics_old = 'אין הודועת חדשות בפורום הזה.';
		$this->main_welcome = 'ברוך הבא';
		$this->main_welcome_guest = 'ברוך הבא!';
	}

	function mass_mail()
	{
		$this->mail = 'דואר קבוצתי';
		$this->mail_announce = 'הודעה מ';
		$this->mail_groups = 'קבוצות מקבלים';
		$this->mail_members = 'חברים.';
		$this->mail_message = 'הודעה';
		$this->mail_select_all = 'בחר הכל';
		$this->mail_send = 'שלח אימייל';
		$this->mail_sent = 'הודעתך נשלחה ל';
	}

	function mbcode()
	{
		$this->mbcode_address = 'הכנס כתובת';
		$this->mbcode_arial = 'Arial'; //Translate
		$this->mbcode_blue = 'כחול';
		$this->mbcode_bold = 'מודגש';
		$this->mbcode_bold1 = 'B'; //Translate
		$this->mbcode_chocolate = 'חום שוקולד';
		$this->mbcode_code = 'קוד';
		$this->mbcode_color = 'צבע';
		$this->mbcode_coral = 'קורל';
		$this->mbcode_courier = 'Courier'; //Translate
		$this->mbcode_crimson = 'ארגמן';
		$this->mbcode_darkblue = 'כחול כהה';
		$this->mbcode_darkred = 'אדום כהה';
		$this->mbcode_deepink = 'ורוד עמוק';
		$this->mbcode_detail = 'הכנס תאור';
		$this->mbcode_email = 'אימייל';
		$this->mbcode_firered = 'אדום חום';
		$this->mbcode_font = 'גופן';
		$this->mbcode_green = 'ירוק';
		$this->mbcode_huge = 'ענק';
		$this->mbcode_image = 'צלמית';
		$this->mbcode_image1 = 'IMG'; //Translate
		$this->mbcode_impact = 'Impact'; //Translate
		$this->mbcode_indigo = 'אינדיגו';
		$this->mbcode_italic = 'נטוי';
		$this->mbcode_italic1 = 'I'; //Translate
		$this->mbcode_large = 'גדול';
		$this->mbcode_length = 'תווים. +length+ הודעתך באורך';
		$this->mbcode_limegreen = 'צהוב לימון';
		$this->mbcode_medium = 'בינוני';
		$this->mbcode_orange = 'כתום';
		$this->mbcode_orangered = 'אדום כתום';
		$this->mbcode_php = 'PHP'; //Translate
		$this->mbcode_purple = 'סגול';
		$this->mbcode_quote = 'ציטוט';
		$this->mbcode_red = 'אדום';
		$this->mbcode_royalblue = 'כחול רויאל';
		$this->mbcode_sandybrown = 'חום חול';
		$this->mbcode_seagreen = 'ירוק כהה';
		$this->mbcode_sienna = 'סיאנה';
		$this->mbcode_silver = 'כסף';
		$this->mbcode_size = 'גודל';
		$this->mbcode_skyblue = 'כחול שמיים';
		$this->mbcode_small = 'קטן';
		$this->mbcode_spoiler = 'ספויילר';
		$this->mbcode_strike = 'קו חוצה';
		$this->mbcode_strike1 = 'S'; //Translate
		$this->mbcode_tahoma = 'Tahoma'; //Translate
		$this->mbcode_teal = 'Teal'; //Translate
		$this->mbcode_times = 'Times'; //Translate
		$this->mbcode_tiny = 'זעיר';
		$this->mbcode_tomato = 'אדום עגבנייה';
		$this->mbcode_underline = 'קו תחתון';
		$this->mbcode_underline1 = 'U'; //Translate
		$this->mbcode_url = 'URL'; //Translate
		$this->mbcode_verdana = 'Verdana'; //Translate
		$this->mbcode_wood = 'חום בהיר';
		$this->mbcode_yellow = 'צהוב';
	}

	function member_control()
	{
		$this->mc = 'בקרת חבר';
		$this->mc_confirm = 'האם אתה בטוח רוצה למחוק';
		$this->mc_delete = 'מחיקת חבר';
		$this->mc_deleted = 'חבר נמחק.';
		$this->mc_edit = 'עריכת חבר';
		$this->mc_edited = 'חבר עודכן';
		$this->mc_email_invaid = 'כתובת האימייל שהכנסת אינה תקינה.';
		$this->mc_err_updating = 'שגיאה בעדכון הפרופיל';
		$this->mc_find = 'מצא חברים עם שמות המכילים';
		$this->mc_found = 'החברים הבאים נמצאו. אנא בחר אחד.';
		$this->mc_guest_needed = 'Quicksilver חשבון האורח חיוני לפעילות הפורומים של';
		$this->mc_not_found = 'לא נמצאו חברים מתאימים';
		$this->mc_user_aim = 'AIM שם';
		$this->mc_user_avatar = 'אווטרה';
		$this->mc_user_avatar_height = 'גובה אווטרה';
		$this->mc_user_avatar_type = 'סוג אווטרה';
		$this->mc_user_avatar_width = 'רוחב אווטרה';
		$this->mc_user_birthday = 'יום הולדת';
		$this->mc_user_email = 'כתובת אימייל';
		$this->mc_user_email_show = 'האימייל ציבורי';
		$this->mc_user_group = 'קבוצה';
		$this->mc_user_gtalk = 'GTalk חשבון';
		$this->mc_user_homepage = 'דף הבית';
		$this->mc_user_icq = 'ICQ מספר';
		$this->mc_user_id = 'User ID'; //Translate
		$this->mc_user_interests = 'תחומי עניין';
		$this->mc_user_joined = 'חבר מאז';
		$this->mc_user_language = 'שפה';
		$this->mc_user_lastpost = 'תגובה אחרונה';
		$this->mc_user_lastvisit = 'ביקור אחרון';
		$this->mc_user_level = 'רמה';
		$this->mc_user_location = 'מיקום';
		$this->mc_user_msn = 'MSN Identity'; //Translate
		$this->mc_user_name = 'שם';
		$this->mc_user_pm = 'Accepting Private Messages'; //Translate
		$this->mc_user_posts = 'תגובות';
		$this->mc_user_signature = 'חתימה';
		$this->mc_user_skin = 'סקין';
		$this->mc_user_timezone = 'אזור זמן';
		$this->mc_user_title = 'כותרת חבר';
		$this->mc_user_title_custom = 'השתמש בכותרת חבר מותאמת אישית';
		$this->mc_user_view_avatars = 'Viewing Avatars'; //Translate
		$this->mc_user_view_emoticons = 'Viewing Emoticons'; //Translate
		$this->mc_user_view_signatures = 'Viewing Signatures'; //Translate
		$this->mc_user_yahoo = 'Yahoo Identity'; //Translate
	}

	function membercount()
	{
		$this->mcount = 'סדר סטטיסטיקות חברים';
		$this->mcount_updated = 'ספירת חברים עודכנה.';
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
		$this->mod_label_publish = 'Publishing'; //Translate
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
		$this->mod_perm_publish = 'You do not have permission to publish this topic.'; //Translate
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
		$this->mod_success_publish = 'This topic was successfully published.'; //Translate
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'The topic was successfully deleted.'; //Translate
		$this->mod_success_topic_edit = 'The topic was successfully edited.'; //Translate
		$this->mod_success_topic_move = 'The topic was successfully moved to a new forum.'; //Translate
		$this->mod_success_unpublish = 'This topic has been removed from the published list.'; //Translate
	}

	function optimize()
	{
		$this->optimize = 'ייעל מסד נתונים';
		$this->optimized = 'The tables in the database have been optimized for maximum performance.'; //Translate
	}

	function perms()
	{
		$this->perm = 'הרשאות';
		$this->perms = 'הרשאות';
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
		$this->php_error = 'שגיאה';
		$this->php_error_msg = 'phpinfo() can not be executed. It appears that your host has disabled this feature.'; //Translate
	}

	function pm()
	{
		$this->pm_avatar = 'אווטרה';
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
		$this->pm_success = 'הודעה שלך נשלחה בהצלחה.';
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
		$this->register_tos = 'Terms of Service'; //Translate
		$this->register_tos_i_agree = 'I agree to the above terms'; //Translate
		$this->register_tos_not_agree = 'You did not agree to the terms.'; //Translate
		$this->register_tos_read = 'Please read the following terms of service'; //Translate
	}

	function rssfeed()
	{
		$this->rssfeed_cannot_find_forum = 'The forum does not appear to exist'; //Translate
		$this->rssfeed_cannot_find_topic = 'The topic does nto appear to exist'; //Translate
		$this->rssfeed_cannot_read_forum = 'You do not have permission to read this forum'; //Translate
		$this->rssfeed_cannot_read_topic = 'You do not have permission to read this topic'; //Translate
		$this->rssfeed_error = 'Error'; //Translate
		$this->rssfeed_forum = 'Forum:'; //Translate
		$this->rssfeed_posted_by = 'Posted by'; //Translate
		$this->rssfeed_topic = 'Topic:'; //Translate
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
		$this->topic_newer = 'Newer Topic'; //Translate
		$this->topic_no_newer = 'There is no newer topic.'; //Translate
		$this->topic_no_older = 'There is no older topic.'; //Translate
		$this->topic_no_votes = 'There are no votes for this poll.'; //Translate
		$this->topic_not_found = 'נוששא לא קיים';
		$this->topic_not_found_message = 'לא נמצאה ההודעה. ייתכן והיא נמחקה,הועברה ואולי לא הייתה קיימת.';
		$this->topic_offline = 'החבר כרגע לא מחובר';
		$this->topic_older = 'הודעה ישנה';
		$this->topic_online = 'החבר כרגע מחובר';
		$this->topic_options = 'אפשרויות הודעה';
		$this->topic_pages = 'עמודים';
		$this->topic_perm_view = 'אין לך הרשאות לצפות בהודעות.';
		$this->topic_perm_view_guest = 'אין לך הרשאות לצפות בהודעות. אם תירשם, ייתכן ותוכל לצפות.';
		$this->topic_pin = 'נעץ';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = 'הודועת';
		$this->topic_print = 'הצג להדפסה';
		$this->topic_publish = 'Publish'; //Translate
		$this->topic_qr_emoticons = 'סמלי הבעה';
		$this->topic_qr_open_emoticons = 'פתח סמלי הבעה נלחצים';
		$this->topic_qr_open_mbcode = 'MBCode פתח';
		$this->topic_quickreply = 'הוספת תגובה מהירה';
		$this->topic_quote = 'הוסף תגובה עם ציטוט מתגובה זו';
		$this->topic_reply = 'הוסף תגובה';
		$this->topic_split = 'פיצול';
		$this->topic_split_finish = 'סיים כל הפיצולים';
		$this->topic_split_keep = 'אל תעביר תגובה זו';
		$this->topic_split_move = 'העבר תגובה זו';
		$this->topic_subscribe = 'שלח לי מייל כשהגיבו להודעה זו';
		$this->topic_top = 'עבור לראש הדף';
		$this->topic_unlock = 'בטל נעילה';
		$this->topic_unpin = 'בטח נעיצה';
		$this->topic_unpublish = 'UnPublish'; //Translate
		$this->topic_unpublished = 'This topic is classed as unpublished so you do not have permission to view it.'; //Translate
		$this->topic_unreg = 'לא רשום';
		$this->topic_view = 'הראה תוצאות';
		$this->topic_viewing = 'מציג הודעות';
		$this->topic_vote = 'הצבעה';
		$this->topic_vote_count_plur = '%d הצבעות';
		$this->topic_vote_count_sing = '%d הצבעה';
		$this->topic_votes = 'הצבעות';
	}

	function universal()
	{
		$this->aim = 'AIM'; //Translate
		$this->based_on = 'מבוסס על';
		$this->board_by = 'על ידי';
		$this->charset = 'windows-1255';
		$this->continue = 'המשך';
		$this->delete = 'מחיקה';
		$this->direction = 'rtl';
		$this->edit = 'עריכה';
		$this->email = 'אימייל';
		$this->gtalk = 'GT'; //Translate
		$this->icq = 'ICQ'; //Translate
		$this->msn = 'MSN'; //Translate
		$this->new_message = 'הודעה חדשה';
		$this->new_poll = 'סקר חדש';
		$this->new_topic = 'הודעה חדשה';
		$this->no = 'לא';
		$this->powered = 'Powered by'; //Translate
		$this->private_message = 'PM'; //Translate
		$this->quote = 'ציטוט';
		$this->reply = 'השב';
		$this->seconds = 'שניות';
		$this->select_all = 'בחר הכל';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->spoiler = 'ספויילר';
		$this->submit = 'אישור';
		$this->subscribe = 'הרשמה';
		$this->today = 'היום';
		$this->website = 'WWW'; //Translate
		$this->yahoo = 'Yahoo'; //Translate
		$this->yes = 'כן';
		$this->yesterday = 'אתמול';
	}
}
?>
