<?php
/**
 * Quicksilver Forums
 * Copyright (c) 2005-2008 The Quicksilver Forums Development Team
 *  http://www.quicksilverforums.com/
 * 
 * Based on MercuryBoard
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
 * Chinese language module
 *
 * @author Hanklu <hankbox@gmail.com>
 * @since 1.0.0 Beta 3.0
 **/
class zh
{
	function active()
	{
		$this->active_last_action = '最新動作';
		$this->active_modules_active = '瀏覽中的會員';
		$this->active_modules_board = '瀏覽首頁會員';
		$this->active_modules_cp = '使用控制台';
		$this->active_modules_forum = '瀏覽討論區: %s';
		$this->active_modules_help = '瀏覽說明主題';
		$this->active_modules_login = '登入或是登出';
		$this->active_modules_members = '瀏覽會員名單';
		$this->active_modules_mod = '管理中';
		$this->active_modules_pm = '使用個人訊息';
		$this->active_modules_post = '發表文章中';
		$this->active_modules_printer = '列印主題中: %s';
		$this->active_modules_profile = '列印個人檔案中: %s';
		$this->active_modules_recent = '瀏覽最新主題';
		$this->active_modules_search = '搜尋';
		$this->active_modules_topic = '瀏覽主題: %s';
		$this->active_time = '時間';
		$this->active_user = '會員';
		$this->active_users = '相關會員活動';
	}

	function admin()
	{
		$this->admin_add_emoticons = '新增表情圖案';
		$this->admin_add_member_titles = '自動新增會員頭銜';
		$this->admin_add_templates = '新增 HTML 模板';
		$this->admin_ban_ips = '封鎖 IP 位址';
		$this->admin_censor = '不良文字過濾';
		$this->admin_cp_denied = '拒絕進入';
		$this->admin_cp_warning = '管理區目前關閉，直到您刪除 <b>install</b> 目錄,不然很容易造成操作上的危險.';
		$this->admin_create_forum = '新增討論區';
		$this->admin_create_group = '新增群組';
		$this->admin_create_help = '新增說明文章';
		$this->admin_create_skin = '新增風格';
		$this->admin_db = '資料庫';
		$this->admin_db_backup = '資料庫備份';
		$this->admin_db_conn = '編輯連線設定';
		$this->admin_db_optimize = '資料庫最佳化';
		$this->admin_db_query = '輸出 SQL 查詢';
		$this->admin_db_restore = '復原備份';
		$this->admin_delete_forum = '刪除討論區';
		$this->admin_delete_group = '刪除群組';
		$this->admin_delete_help = '刪除說明文章';
		$this->admin_delete_member = '刪除會員';
		$this->admin_delete_template = '刪除 HTML 風格';
		$this->admin_edit_emoticons = '編輯或刪除表情圖案';
		$this->admin_edit_forum = '編輯討論區';
		$this->admin_edit_group_name = '編輯群組名稱';
		$this->admin_edit_group_perms = '編輯群組權限';
		$this->admin_edit_help = '編輯說明文章';
		$this->admin_edit_member = '編輯會員資訊';
		$this->admin_edit_member_perms = '編輯會員權限';
		$this->admin_edit_member_titles = '編輯或刪除自動會員頭銜';
		$this->admin_edit_settings = '編輯討論區設定';
		$this->admin_edit_skin = '編輯或刪除風格';
		$this->admin_edit_templates = '編輯 HTML 風格';
		$this->admin_emoticons = '表情圖案';
		$this->admin_export_skin = '風格匯出';
		$this->admin_fix_stats = '會員統計修正';
		$this->admin_forum_order = '變更討論區排列順序';
		$this->admin_forums = '討論區和分區';
		$this->admin_groups = '群組';
		$this->admin_heading = 'Quicksilver 討論區管理員控制台';
		$this->admin_help = '說明文章';
		$this->admin_install_emoticons = '安裝表情圖案';
		$this->admin_install_skin = '安裝風格';
		$this->admin_logs = '瀏覽版主操作動作';
		$this->admin_mass_mail = '寄電子郵件給您的會員';
		$this->admin_members = '會員';
		$this->admin_phpinfo = '瀏覽 PHP 相關資訊';
		$this->admin_prune = '清空舊的主題';
		$this->admin_recount_forums = '重新計算主題和回覆';
		$this->admin_settings = '一般設定';
		$this->admin_settings_add = '新增版面設定';
		$this->admin_skins = '風格';
		$this->admin_stats = '統計中心';
		$this->admin_upgrade_skin = '更新風格';
		$this->admin_your_board = '您的討論區';
	}

	function backup()
	{
		$this->backup = '備份';
		$this->backup_add = '新增';
		$this->backup_add_complete = '新增完成';
		$this->backup_create = '備份資料庫';
		$this->backup_created = '備份新增完成於 %s';
		$this->backup_createfile = '備份並新增檔案於伺服器上';
		$this->backup_done = '該資料庫已經備份於packages目錄.';
		$this->backup_download = '備份並下載 (建議使用)';
		$this->backup_failed = '新增備份時失敗.';
		$this->backup_found = '在包裝目錄中找到下列備份檔案';
		$this->backup_import_fail = '匯入備份時失敗.';
		$this->backup_invalid = '備份檔案沒有效果. 您的資料庫資料沒有變更.';
		$this->backup_no_packages = '指定packages目錄時失敗.';
		$this->backup_noexist = '抱歉,找不到此備份.';
		$this->backup_none = '在包裝目錄中找不到備份檔案.';
		$this->backup_options = '選擇您要備份檔案';
		$this->backup_output = '輸出';
		$this->backup_restore = '備份復原';
		$this->backup_restore_done = '該資料庫已經復原備份完成.';
		$this->backup_statements = '說明';
		$this->backup_uncheck = '未勾選將不會在復原備份時,清空資料庫中的資料表';
		$this->backup_warning = '<b>Warning:</b> This will overwrite all existing data used by Quicksilver Forums.'; //Translate
	}

	function ban()
	{
		$this->ban = '封鎖';
		$this->ban_banned_ips = '封鎖 IP 位址';
		$this->ban_banned_members = '被封鎖會員';
		$this->ban_ip = '封鎖 IP 位址';
		$this->ban_member_explain1 = '封鎖會員, 將會變更他們到群組';
		$this->ban_member_explain2 = '來進行會員權限控制.';
		$this->ban_members = '封鎖會員';
		$this->ban_nomembers = '目前沒有被封鎖的會員.';
		$this->ban_one_per_line = '每一行一個位址.';
		$this->ban_regex_allowed = '允許正規表達.您可以使用 * 萬用符號給一個或是多個數字.';
		$this->ban_settings = '封鎖設定';
		$this->ban_users_banned = '已被封鎖會員.';
	}

	function bbcode()
	{
		$this->bbcode_arial = 'Arial'; //Translate
		$this->bbcode_blue = '藍色';
		$this->bbcode_bold = '粗體 (CTRL-b)';
		$this->bbcode_bold1 = '粗';
		$this->bbcode_chocolate = '巧克力色';
		$this->bbcode_code = '程式碼 (CTRL-l)';
		$this->bbcode_code1 = '程式碼';
		$this->bbcode_color = '顏色';
		$this->bbcode_coral = '橘紅色';
		$this->bbcode_courier = 'Courier'; //Translate
		$this->bbcode_crimson = '深紅色';
		$this->bbcode_darkblue = '深藍';
		$this->bbcode_darkred = '殷紅';
		$this->bbcode_deeppink = '桃紅色';
		$this->bbcode_email = 'Email (CTRL-e)'; //Translate
		$this->bbcode_firered = '磚紅色';
		$this->bbcode_font = '字型';
		$this->bbcode_green = '綠色';
		$this->bbcode_huge = '大';
		$this->bbcode_image = '圖片 (CTRL-j)';
		$this->bbcode_image1 = '圖';
		$this->bbcode_impact = 'Impact'; //Translate
		$this->bbcode_indigo = '靛藍色';
		$this->bbcode_italic = '斜體 (CTRL-i)';
		$this->bbcode_italic1 = '斜';
		$this->bbcode_large = '大';
		$this->bbcode_limegreen = '萊姆綠';
		$this->bbcode_medium = '中';
		$this->bbcode_orange = '橘色';
		$this->bbcode_orangered = '橘紅色';
		$this->bbcode_php = 'PHP (CTRL-k)'; //Translate
		$this->bbcode_php1 = 'PHP'; //Translate
		$this->bbcode_purple = '紫色';
		$this->bbcode_quote = '引用 (CTRL-q)';
		$this->bbcode_quote1 = '引用';
		$this->bbcode_red = '紅色';
		$this->bbcode_royalblue = '略帶紅色的深藍色';
		$this->bbcode_sandybrown = '黃棕色';
		$this->bbcode_seagreen = '海綠色';
		$this->bbcode_sienna = '黃褐色';
		$this->bbcode_silver = 'siliver';
		$this->bbcode_size = '大小';
		$this->bbcode_skyblue = '天空藍';
		$this->bbcode_small = '小';
		$this->bbcode_spoiler = 'Spoiler (CTRL-r)'; //Translate
		$this->bbcode_spoiler1 = 'Spoiler'; //Translate
		$this->bbcode_strike = 'Strikethrough (CTRL-s)'; //Translate
		$this->bbcode_strike1 = 'S'; //Translate
		$this->bbcode_tahoma = 'Tahoma'; //Translate
		$this->bbcode_teal = 'Teal'; //Translate
		$this->bbcode_times = 'Times'; //Translate
		$this->bbcode_tiny = '超小';
		$this->bbcode_tomato = '番茄色';
		$this->bbcode_underline = '底線 (CTRL-u)';
		$this->bbcode_underline1 = '底';
		$this->bbcode_url = '超連結 (CTRL-h)';
		$this->bbcode_url1 = '連結';
		$this->bbcode_verdana = 'Verdana'; //Translate
		$this->bbcode_wood = 'Burly Wood'; //Translate
		$this->bbcode_yellow = '黃色';
	}

	function board()
	{
		$this->board_active_users = '會員線上情形';
		$this->board_birthdays = '今日壽星';
		$this->board_bottom_page = '前往頁面底部';
		$this->board_can_post = '您可以回覆該討論區.';
		$this->board_can_topics = '您可以瀏覽主題但不能發表主題.';
		$this->board_cant_post = '您不能會回覆該討論區主題.';
		$this->board_cant_topics = '您不能瀏覽會是新增討論區主題.';
		$this->board_forum = '討論區';
		$this->board_guests = '位訪客';
		$this->board_last_post = '最新發表';
		$this->board_mark = '標記所有發表為已讀取';
		$this->board_mark1 = '標記所有討論區和主題為已讀取.';
		$this->board_markforum = '標記所有討論區為已讀取';
		$this->board_markforum1 = '討論區 %s 所有主題標記為已讀取.';
		$this->board_members = '位會員';
		$this->board_message = '%s 封訊息';
		$this->board_most_online = '最多會員線上人數為 %d 發生時間為 %s.';
		$this->board_nobday = '今天沒有人是壽星.';
		$this->board_nobody = '目前沒有會員在線上.';
		$this->board_nopost = '沒有發表文章';
		$this->board_noview = '您沒有瀏覽此討論區的權限.';
		$this->board_regfirst = '您沒有瀏覽此討論區的權限. 假如您註冊後可能可以瀏覽該討論區.';
		$this->board_replies = '回覆';
		$this->board_stats = '網站統計';
		$this->board_stats_string = '%s 位註冊會員. 目前最新註冊會員, %s.<br />目前有 %s 篇主題和 %s 篇回覆，總共的文章數為 %s 篇.';
		$this->board_top_page = '前往頁面頂端';
		$this->board_topics = '主題';
		$this->board_unread = '前往最舊的尚未讀取文章';
		$this->board_users = '位會員';
		$this->board_write_topics = '您可以瀏覽並新增主題和討論區.';
	}

	function censoring()
	{
		$this->censor = '不良文字';
		$this->censor_one_per_line = '一行一個.';
		$this->censor_regex_allowed = '正規表現是可以允許的.您可以使用單一萬用元件 * 給一個或是多個字元.';
		$this->censor_updated = '不良文字名單已更新.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM 暱稱';
		$this->cp_already_member = '您輸入電子信箱將會被指派給一個會員.';
		$this->cp_apr = '四月';
		$this->cp_aug = '八月';
		$this->cp_avatar_current = '您目前使用頭像';
		$this->cp_avatar_error = '頭像功能錯誤';
		$this->cp_avatar_must_select = '您必須選擇一個頭像.';
		$this->cp_avatar_none = '不使用一個頭像';
		$this->cp_avatar_pixels = '像素';
		$this->cp_avatar_select = '選擇一個頭像';
		$this->cp_avatar_size_height = '您的頭像高度必須從 1 到';
		$this->cp_avatar_size_width = '您的頭像寬度必須從1 到';
		$this->cp_avatar_upload = '從電腦中上傳頭像';
		$this->cp_avatar_upload_failed = '頭像上傳失敗. 沒有您要指定上傳的檔案.';
		$this->cp_avatar_upload_not_image = '您可以上傳您想要使用的頭像.';
		$this->cp_avatar_upload_too_large = '您要上傳的圖片過大. 該圖片檔案最大不可超過 %d kilobytes.';
		$this->cp_avatar_url = '指定您頭像網址';
		$this->cp_avatar_use = '使用已經上傳的頭像';
		$this->cp_bday = '生日';
		$this->cp_been_updated = '您的個人檔案已更新完成.';
		$this->cp_been_updated1 = '您的頭像設定已更新完成.';
		$this->cp_been_updated_prefs = '您的偏好設定已更新完成.';
		$this->cp_changing_pass = '密碼編輯中';
		$this->cp_contact_pm = '允許會員使用即時通聯絡您?';
		$this->cp_contact_pm_email = '當有私人訊息發電子信件通知您?';
		$this->cp_cp = '控制台';
		$this->cp_current_avatar = '目前使用頭像';
		$this->cp_current_time = '現在時間是 %s.';
		$this->cp_custom_title = '自訂會員頭銜';
		$this->cp_custom_title2 = '此區域受到討論區管理員保護';
		$this->cp_dec = '十二月';
		$this->cp_editing_avatar = '頭像編輯中';
		$this->cp_editing_profile = '個人資料編輯中';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = '允許其他會員使用電子信件聯絡您?';
		$this->cp_email_invaid = '您輸入的電子信箱是無效的.';
		$this->cp_err_avatar = '上傳頭像發生錯誤';
		$this->cp_err_updating = '更新個人檔案發生錯誤';
		$this->cp_feb = '二月';
		$this->cp_file_type = '您輸入的頭像是無效的. 請確認超連結的格式是否正確, 和其副檔名是否為 gif, jpg,或 png.';
		$this->cp_format = '名稱格式';
		$this->cp_gtalk = 'GTalk 帳號';
		$this->cp_header = '會員控制台';
		$this->cp_height = '高度';
		$this->cp_icq = 'ICQ 號碼';
		$this->cp_interest = '興趣';
		$this->cp_jan = '一月';
		$this->cp_july = '七月';
		$this->cp_june = '六月';
		$this->cp_label_edit_avatar = '編輯頭像';
		$this->cp_label_edit_pass = '修改密碼';
		$this->cp_label_edit_prefs = '修改偏好設定';
		$this->cp_label_edit_profile = '修改個人檔案';
		$this->cp_label_edit_sig = '編輯簽名檔';
		$this->cp_label_edit_subs = '編輯訂閱狀況';
		$this->cp_language = '語系';
		$this->cp_less_charac = '您的名稱必須少於 32 字元.';
		$this->cp_location = '來自於';
		$this->cp_login_first = '您必須登入後才可以進入控制台.';
		$this->cp_mar = '三月';
		$this->cp_may = '五月';
		$this->cp_msn = 'MSN 帳號';
		$this->cp_must_orig = '您的名稱必須相似於原始名稱. 您僅能更該字體和空格.';
		$this->cp_new_notmatch = '新的密碼兩次輸入都不相同.';
		$this->cp_new_pass = '新的密碼';
		$this->cp_no_edit_avatar = '您沒有權限編輯自己的頭像.';
		$this->cp_no_edit_profile = '您沒有權限編輯您的個人檔案.';
		$this->cp_no_edit_sig = '您沒有權限編輯您的簽名檔案.';
		$this->cp_no_flash = 'Flash 頭像禁止使用於此討論區.';
		$this->cp_not_exist = '您指定的日期(%s) 不存在!';
		$this->cp_nov = '十一月';
		$this->cp_oct = '十月';
		$this->cp_old_notmatch = '您的舊的密碼跟資料庫的不一樣.';
		$this->cp_old_pass = '舊的密碼';
		$this->cp_pass = '密碼';
		$this->cp_pass2 = '當變更電子信箱一定需要變更密碼';
		$this->cp_pass_notmatch = '您的密碼不正確.';
		$this->cp_pass_notvaid = '您的密碼是無效的. 此密碼僅限於英文字母, 數字, -, _ 底線, 或是空白鍵.';
		$this->cp_posts_page = '每一頁顯示主題數.數值 0 將會遵循討論區的預設值.';
		$this->cp_preferences = '偏好設定變更中';
		$this->cp_preview_sig = '預覽簽名檔:';
		$this->cp_privacy = '隱私選項';
		$this->cp_repeat_pass = '請在輸入一次新的密碼';
		$this->cp_sept = '九月';
		$this->cp_show_active = '顯示您的線上活動情形?';
		$this->cp_show_email = '個人資料顯示電子信箱?';
		$this->cp_signature = '簽名檔案';
		$this->cp_size_max = '該頭像大小過大. 頭像最大僅能介於 %s 與 %s 像素.';
		$this->cp_skin = '討論區風格';
		$this->cp_sub_change = '訂閱狀況變更中';
		$this->cp_sub_delete = '刪除';
		$this->cp_sub_expire = '到期日';
		$this->cp_sub_name = '訂閱名稱';
		$this->cp_sub_no_params = '沒有給於參數設定.';
		$this->cp_sub_success = '您現在已經訂閱 %s.';
		$this->cp_sub_type = '訂閱類型';
		$this->cp_sub_updated = '以前選擇的訂閱頻道已被刪除.';
		$this->cp_topic_option = '主題選項';
		$this->cp_topics_page = '討論區每頁顯示主題數. 數值 0 為遵循討論區設定.';
		$this->cp_updated = '個人資料更新完成';
		$this->cp_updated1 = '頭像更新完成';
		$this->cp_updated_prefs = '偏好設定更新完成';
		$this->cp_user_exists = '一個會員名稱已存在.';
		$this->cp_valided = '您的密碼已經完成變更.';
		$this->cp_view_avatar = '瀏覽頭像?';
		$this->cp_view_emoticon = '瀏覽表情圖標?';
		$this->cp_view_signature = '瀏覽簽名檔案?';
		$this->cp_welcome = '歡迎來到會員控制台. 在這裡您可以設定有關您帳號的資訊.請選擇下列選項執行.';
		$this->cp_width = '寬度';
		$this->cp_www = '個人網站';
		$this->cp_yahoo = 'Yahoo 帳號';
		$this->cp_zone = '時區';
	}

	function email()
	{
		$this->email_blocked = '該會員不允許別人寄信件給他.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Email內容:';
		$this->email_no_fields = '返回並確認所有欄位已經填寫.';
		$this->email_no_member = '沒有此會員名稱';
		$this->email_no_perm = '您沒有權限利用此討論區寄信件出去.';
		$this->email_sent = '您的信件已經寄出.';
		$this->email_subject = '主題:';
		$this->email_to = 'To:'; //Translate
	}

	function emot_control()
	{
		$this->emote = '表情圖案';
		$this->emote_add = '新增表情圖案';
		$this->emote_added = '表情圖案新增完成.';
		$this->emote_clickable = '可點選';
		$this->emote_edit = '編輯表情圖案';
		$this->emote_image = '圖片';
		$this->emote_install = '安裝表情圖案';
		$this->emote_install_done = '表情圖案已重新安裝完成.';
		$this->emote_install_warning = '這將會覆蓋您所有現在使用的表情圖案設定.';
		$this->emote_no_text = '沒有定義表情文字.';
		$this->emote_text = '文字';
	}

	function forum()
	{
		$this->forum_by = '作者';
		$this->forum_can_post = '您可以回覆此討論區主題.';
		$this->forum_can_topics = '您可以瀏覽此討論區主題.';
		$this->forum_cant_post = '您不能回覆此討論區主題.';
		$this->forum_cant_topics = '您不能瀏覽此討論區主題.';
		$this->forum_dot = '點';
		$this->forum_dot_detail = '顯示您曾經發表的主題';
		$this->forum_forum = '討論區';
		$this->forum_guest = '訪客';
		$this->forum_hot = '熱門的';
		$this->forum_icon = '訊息圖標';
		$this->forum_jump = '前往此主題最新回覆';
		$this->forum_last = '最新回覆';
		$this->forum_locked = '禁止回覆';
		$this->forum_mark_read = '標記討論區讀取';
		$this->forum_moved = '已移動';
		$this->forum_msg = '%s 封訊息';
		$this->forum_new = '新的';
		$this->forum_new_poll = '新增投票';
		$this->forum_new_topic = '新增主題';
		$this->forum_no_topics = '目前此討論區沒有任何主題顯示.';
		$this->forum_noexist = '並沒有您指定的討論區版面.';
		$this->forum_nopost = '沒有發表';
		$this->forum_not = '不是';
		$this->forum_noview = '您沒有權限瀏覽該討論區.';
		$this->forum_pages = '頁面';
		$this->forum_pinned = '置頂';
		$this->forum_pinned_topic = '置頂主題';
		$this->forum_poll = '投票';
		$this->forum_regfirst = '您沒有權限瀏覽此論壇.如果您註冊，請登入.';
		$this->forum_replies = '回覆數';
		$this->forum_starter = '發表作者';
		$this->forum_sub = '子討論區';
		$this->forum_sub_last_post = '最新發表';
		$this->forum_sub_replies = '回覆數';
		$this->forum_sub_topics = '主題數';
		$this->forum_subscribe = '有新的文章請寄信通知我';
		$this->forum_topic = '主題';
		$this->forum_topic_posted = '已發表';
		$this->forum_unread = '前往最舊的未讀取文章';
		$this->forum_views = '瀏覽';
		$this->forum_write_topics = '您可以在此討論區新增主題.';
	}

	function forums()
	{
		$this->forum_controls = '討論區控制';
		$this->forum_create = '新增討論區';
		$this->forum_create_cat = '新增分區';
		$this->forum_created = '討論區已新增';
		$this->forum_default_perms = '預設的權限';
		$this->forum_delete = '刪除討論區';
		$this->forum_delete_warning = '您確定要刪除該討論區, 和裡面所有的主題回覆文章?<br />該項操作無法復原.';
		$this->forum_deleted = '該討論區已刪除.';
		$this->forum_description = '描述';
		$this->forum_edit = '編輯討論區';
		$this->forum_edited = '該討論區已完成設定.';
		$this->forum_empty = '討論區名稱為空白的.請返回輸入名稱.';
		$this->forum_is_subcat = '該討論區是一個子討論區.';
		$this->forum_name = '名稱';
		$this->forum_no_orphans = '您不行刪除討論區的上一層分區.';
		$this->forum_none = '沒有討論區可以管理.';
		$this->forum_ordered = '討論區的順序完成更新';
		$this->forum_ordering = '變更討論區順序';
		$this->forum_parent = '您不可以使用此像操作中變更討論區的上層所屬設定.';
		$this->forum_parent_cat = '所屬分區';
		$this->forum_quickperm_select = '選擇一個現有的討論區來複製他的相關權限設定.';
		$this->forum_quickperms = '快速權限設定';
		$this->forum_recount = '重新計算主題和回覆數';
		$this->forum_select_cat = '選擇一個已經存在的分區來新增討論區.';
		$this->forum_subcat = '子分區';
	}

	function groups()
	{
		$this->groups_bad_format = '您必須使用 %s 格式, 此象徵表示為群組名稱.';
		$this->groups_based_on = '基於';
		$this->groups_create = '新增群組';
		$this->groups_create_new = '新增一個會員群組';
		$this->groups_created = '群組完成新增';
		$this->groups_delete = '刪除群組';
		$this->groups_deleted = '群組完成刪除.';
		$this->groups_edit = '編輯群組';
		$this->groups_edited = '群組完成編輯.';
		$this->groups_formatting = '顯示格式';
		$this->groups_i_confirm = '我確定要刪除此會員群組.';
		$this->groups_name = '名稱';
		$this->groups_no_action = '沒有執行任何指令.';
		$this->groups_no_delete = '目前沒有自行定義的群組可以刪除.<br />核心群組是 Quicksilver 討論區程式必須有的並且無法刪除.';
		$this->groups_no_group = '沒有群組被指定.';
		$this->groups_no_name = '沒有給予群組名稱.';
		$this->groups_only_custom = '注意: 您只可以刪除自行定義的群組. 核心群組是 Quicksilver 討論區程式必須有的.';
		$this->groups_the = '此群組';
		$this->groups_to_edit = '想刪除群組';
		$this->groups_type = '群組類型';
		$this->groups_will_be = '將會被刪除.';
		$this->groups_will_become = '刪除此群組，會員將會變成';
	}

	function help()
	{
		$this->help_add = '新增說明文章';
		$this->help_article = '說明文章控制台';
		$this->help_available_files = '說明';
		$this->help_confirm = '您確定要刪除';
		$this->help_content = '文章內容';
		$this->help_delete = '刪除說明文章';
		$this->help_deleted = '說明文章完成刪除.';
		$this->help_edit = '編輯文章內容';
		$this->help_edited = '說明文章完成更新.';
		$this->help_inserted = '文章已經插入資料庫.';
		$this->help_no_articles = '沒有求助文章儲存於資料庫中.';
		$this->help_no_title = '您必須填寫求助檔案名稱標題.';
		$this->help_none = '目前沒有求助文章於資料庫中.';
		$this->help_not_exist = '該求助文章不存在.';
		$this->help_select = '請選擇編輯一個說明文章';
		$this->help_select_delete = '請選擇一個求助文章刪除';
		$this->help_title = '標題';
	}

	function home()
	{
		$this->home_choose = '選擇一個任務開始.';
		$this->home_menu_title = '管理控制台選單';
	}

	function jsdata()
	{
		$this->jsdata_address = '輸入一個位址';
		$this->jsdata_detail = '輸入相關描述';
		$this->jsdata_smiles = '可點選的微笑圖標';
		$this->jsdata_url = '網址';
	}

	function jslang()
	{
		$this->jslang_avatar_size_height = '您的頭像高度必須介於 1 到 %d 像素';
		$this->jslang_avatar_size_width = '您的頭像寬度必須介於 1 到 %d 像素';
	}

	function login()
	{
		$this->login_cant_logged = '您尚未登入. 請檢查帳號和密碼是否正確.<br /><br />請區分大小小寫, 所以 \'UsErNaMe\' 跟 \'Username\'是不一樣的. 之後確定瀏覽器上 cookies 是否開啟.';
		$this->login_cookies = '登入時Cookies 必須開啟.';
		$this->login_forgot_pass = '忘記密碼?';
		$this->login_header = '登入中';
		$this->login_logged = '您已經登入.';
		$this->login_now_out = '您目前登出.';
		$this->login_out = '登出中';
		$this->login_pass = '密碼';
		$this->login_pass_no_id = '您查的會員名稱不存在.';
		$this->login_pass_request = '完成密碼重新設定, 新密碼與帳號資訊將會寄到您的電子信箱.';
		$this->login_pass_reset = '重新設定密碼';
		$this->login_pass_sent = '您的密碼已經重新設定.新密碼與帳號資訊將會寄到您的電子信箱.';
		$this->login_sure = '您確定要從 \'%s\'登出?';
		$this->login_user = '帳號';
	}

	function logs()
	{
		$this->logs_action = '活動';
		$this->logs_deleted_post = '被刪除的發表';
		$this->logs_deleted_topic = '刪除主題';
		$this->logs_edited_post = '已修改的主題';
		$this->logs_edited_topic = '已修改的主題';
		$this->logs_id = 'IDs'; //Translate
		$this->logs_locked_topic = '禁止回覆主題';
		$this->logs_moved_from = '從討論區';
		$this->logs_moved_to = '到討論區';
		$this->logs_moved_topic = '移動主題';
		$this->logs_moved_topic_num = '完成移動主題 #';
		$this->logs_pinned_topic = '已經置頂主題';
		$this->logs_post = '發表';
		$this->logs_published_topic = 'Published a topic'; //Translate
		$this->logs_time = '時間';
		$this->logs_topic = '主題';
		$this->logs_unlocked_topic = '取消禁止回覆主題';
		$this->logs_unpinned_topic = '取消置頂主題';
		$this->logs_unpublished_topic = 'Unpublished a topic'; //Translate
		$this->logs_user = '會員';
		$this->logs_view = '瀏覽版主操作紀錄';
	}

	function main()
	{
		$this->main_activate = '您的帳號尚未完成啟動.';
		$this->main_activate_resend = '重新寄出啟動郵件';
		$this->main_admincp = '管理控制台';
		$this->main_banned = '您已經被此討論區完全封鎖了.';
		$this->main_code = 'Code'; //Translate
		$this->main_cp = '控制台';
		$this->main_full = '全部';
		$this->main_help = '說明';
		$this->main_load = '載入';
		$this->main_login = '登入';
		$this->main_logout = '登出';
		$this->main_mark = '全部標記';
		$this->main_mark1 = '全部主題標記為完成閱讀';
		$this->main_markforum_read = '標記討論區為完成閱讀';
		$this->main_max_load = '很抱歉, 但是 %s 目前暫停服務中,有可能是會員太多.';
		$this->main_members = '會員';
		$this->main_messenger = '短訊';
		$this->main_new = '新的';
		$this->main_next = '下一頁';
		$this->main_prev = '前一頁';
		$this->main_queries = '查詢';
		$this->main_quote = '引用';
		$this->main_recent = '最新發表';
		$this->main_recent1 = '瀏覽從上次登入以後最新主題';
		$this->main_register = '註冊';
		$this->main_reminder = '提醒我';
		$this->main_reminder_closed = '該討論區已經關閉，僅限管理員登入.';
		$this->main_said = '曾說過';
		$this->main_search = '搜尋';
		$this->main_topics_new = '此討論區有新的文章.';
		$this->main_topics_old = '此討論區沒有新的文章.';
		$this->main_welcome = '歡迎光臨';
		$this->main_welcome_guest = '歡迎光臨!';
	}

	function mass_mail()
	{
		$this->mail = '大量寄信';
		$this->mail_announce = '通知來自於';
		$this->mail_groups = '接收群組';
		$this->mail_members = '會員.';
		$this->mail_message = '訊息';
		$this->mail_select_all = '選擇全部';
		$this->mail_send = '寄出信件';
		$this->mail_sent = '您的訊息已寄出';
	}

	function member_control()
	{
		$this->mc = '會員管理';
		$this->mc_confirm = '您確定要刪除';
		$this->mc_delete = '刪除會員';
		$this->mc_deleted = '完成刪除會員.';
		$this->mc_edit = '編輯會員';
		$this->mc_edited = '會員更新完成';
		$this->mc_email_invaid = '您輸入的電子信箱格式是錯誤的.';
		$this->mc_err_updating = '更新個人檔案時發生錯誤';
		$this->mc_find = '找到會員名稱包含';
		$this->mc_found = '找到下列會員. 請選擇一個.';
		$this->mc_guest_banned = '您無法封鎖訪客,這將會造成您的網站不穩定.';
		$this->mc_guest_needed = '訪客功能是此 Quicksilver Forums 必須的功能.';
		$this->mc_not_found = '沒有找到吻合的會員';
		$this->mc_user_aim = 'AIM 帳號';
		$this->mc_user_avatar = '頭像';
		$this->mc_user_avatar_height = '頭像高度';
		$this->mc_user_avatar_type = '頭像類型';
		$this->mc_user_avatar_width = '頭像寬度';
		$this->mc_user_birthday = '生日';
		$this->mc_user_email = '電子信箱';
		$this->mc_user_email_show = '公開 Email';
		$this->mc_user_group = '群組';
		$this->mc_user_gtalk = 'GTalk 帳號';
		$this->mc_user_homepage = '個人網站';
		$this->mc_user_icq = 'ICQ 帳號';
		$this->mc_user_id = '會員 ID';
		$this->mc_user_interests = '興趣';
		$this->mc_user_joined = '註冊至今';
		$this->mc_user_language = '語言';
		$this->mc_user_lastpost = '最新發表';
		$this->mc_user_lastvisit = '最後瀏覽';
		$this->mc_user_level = '等級';
		$this->mc_user_location = '來自於';
		$this->mc_user_msn = 'MSN 帳號';
		$this->mc_user_name = '名稱';
		$this->mc_user_pm = '允許接受私人訊息';
		$this->mc_user_pm_mail = '私人訊息寄出電子郵件';
		$this->mc_user_posts = '發表數';
		$this->mc_user_regip = '註冊的 IP';
		$this->mc_user_signature = '簽名檔案';
		$this->mc_user_skin = '風格';
		$this->mc_user_timezone = '時區';
		$this->mc_user_title = '會員頭銜';
		$this->mc_user_title_custom = '使用自訂會員頭銜';
		$this->mc_user_view_avatars = '頭像瀏覽中';
		$this->mc_user_view_emoticons = '微笑圖標瀏覽中';
		$this->mc_user_view_signatures = '簽名檔案瀏覽中';
		$this->mc_user_yahoo = 'Yahoo 帳號';
	}

	function membercount()
	{
		$this->mcount = '會員統計修正';
		$this->mcount_updated = '會員計算完成更新.';
	}

	function members()
	{
		$this->members_all = '全部的';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = '寄信給該會員';
		$this->members_group = '群組';
		$this->members_joined = '註冊時間';
		$this->members_list = '會員名單';
		$this->members_member = '會員';
		$this->members_pm = '短訊';
		$this->members_posts = '發表數';
		$this->members_send_pm = '寄私人短訊給會員';
		$this->members_title = '頭銜';
		$this->members_vist_www = '瀏覽會員網站';
		$this->members_www = '網站';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = '您確定要刪除該回覆?';
		$this->mod_confirm_topic_delete = '您確定要刪除主題?';
		$this->mod_error_first_post = '您不能刪除第一個發表主題.';
		$this->mod_error_move_category = '您不能移動主題到分區.';
		$this->mod_error_move_create = '您沒有權限移動主題到討論區.';
		$this->mod_error_move_forum = '您不能移動主題到不存在的討論區.';
		$this->mod_error_move_global = '您不能移動全區域的主題. 移動前請先編輯.';
		$this->mod_error_move_same = '您不能移動一個主題到已經有該主題的討論區.';
		$this->mod_label_controls = '版主管理';
		$this->mod_label_description = '描述';
		$this->mod_label_emoticon = '轉換表情圖案為圖片?';
		$this->mod_label_global = '全區主題';
		$this->mod_label_mbcode = '格式化 MbCode?';
		$this->mod_label_move_to = '移動到';
		$this->mod_label_options = '操作選項';
		$this->mod_label_post_delete = '刪除回覆';
		$this->mod_label_post_edit = '編輯回覆';
		$this->mod_label_post_icon = '發表圖標';
		$this->mod_label_publish = '公佈中';
		$this->mod_label_title = '標題';
		$this->mod_label_title_original = '原始標題';
		$this->mod_label_title_split = '切格標題';
		$this->mod_label_topic_delete = '刪除主題';
		$this->mod_label_topic_edit = '編輯主題';
		$this->mod_label_topic_lock = '主題禁止回覆';
		$this->mod_label_topic_move = '移動主題';
		$this->mod_label_topic_move_complete = '完成轉換主題到新討論區';
		$this->mod_label_topic_move_link = '將主題轉到新的討論區, 並在舊的討論區提供一個連結.';
		$this->mod_label_topic_pin = '置頂主題';
		$this->mod_label_topic_split = '切割主題';
		$this->mod_missing_post = '指定回覆不存在.';
		$this->mod_missing_topic = '指定主題不存在.';
		$this->mod_no_action = '您必須指定一項操作功能.';
		$this->mod_no_post = '您必須指定回覆.';
		$this->mod_no_topic = '您必須指定主題.';
		$this->mod_perm_post_delete = '您沒有權限刪除該回覆.';
		$this->mod_perm_post_edit = '您沒有權限編輯該回覆.';
		$this->mod_perm_publish = '您沒有權限公佈該主題.';
		$this->mod_perm_topic_delete = '您沒有權限刪除該主題.';
		$this->mod_perm_topic_edit = '您沒有權限編輯該主題.';
		$this->mod_perm_topic_lock = '您沒有權限鎖住該主題.';
		$this->mod_perm_topic_move = '您沒有權限移動該主題.';
		$this->mod_perm_topic_pin = '您沒有權限置頂該主題.';
		$this->mod_perm_topic_split = '您沒有權限分割該主題.';
		$this->mod_perm_topic_unlock = '您沒有權限取消鎖定該主題.';
		$this->mod_perm_topic_unpin = '您沒有權限取消置頂該主題.';
		$this->mod_success_post_delete = '此回覆完成刪除.';
		$this->mod_success_post_edit = '此回覆完成編輯.';
		$this->mod_success_publish = '該主題發表成功.';
		$this->mod_success_split = '該主題完成分割.';
		$this->mod_success_topic_delete = '該主題完成刪除.';
		$this->mod_success_topic_edit = '該主題完成編輯.';
		$this->mod_success_topic_move = '該主題完成移動到新討論區此像動作.';
		$this->mod_success_unpublish = '該主題已經移除於發表名單.';
	}

	function optimize()
	{
		$this->optimize = '資料庫最佳化';
		$this->optimized = '該資料庫的資料表已經達到最佳化.';
	}

	function perms()
	{
		$this->perm = '權限';
		$this->perms = '權限';
		$this->perms_board_view = '瀏覽討論區首頁';
		$this->perms_board_view_closed = '使用 Quicksilver Forums 當關閉時';
		$this->perms_do_anything = '使用 Quicksilver Forums';
		$this->perms_edit_avatar = '可以編輯會員頭像';
		$this->perms_edit_for = '編輯權限於';
		$this->perms_edit_profile = '可以編輯會員個人資料';
		$this->perms_edit_sig = '可以編輯簽名檔案';
		$this->perms_email_use = '透著討論區寄信給會員';
		$this->perms_forum_view = '瀏覽該討論區';
		$this->perms_guest1 = '您無法禁止訪客瀏覽. 這將會造成討論區不穩定.';
		$this->perms_guest2 = '您無法禁止訪客瀏覽. 這將會造成討論區不穩定.';
		$this->perms_is_admin = '進入管理控制台';
		$this->perms_only_user = '會員的群組權限';
		$this->perms_override_user = '這將會無視於該會員的群組權限.';
		$this->perms_pm_noflood = '連續發表短訊封鎖';
		$this->perms_poll_create = '新增投票問題';
		$this->perms_poll_vote = '新增投票';
		$this->perms_post_attach = '附加上傳回覆';
		$this->perms_post_attach_download = '下載回覆附件';
		$this->perms_post_create = '新增回覆';
		$this->perms_post_delete = '刪除任何發表';
		$this->perms_post_delete_own = '僅限於會員刪除自己發表的文章';
		$this->perms_post_edit = '編輯任何發表';
		$this->perms_post_edit_own = '僅限於會員編輯自己發表的文章';
		$this->perms_post_inc_userposts = '回覆列入會員總發表數';
		$this->perms_post_noflood = '連續回覆封鎖';
		$this->perms_post_viewip = '瀏覽會員 IP位址';
		$this->perms_search_noflood = '連續搜尋封鎖';
		$this->perms_title = '會員群組控制';
		$this->perms_topic_create = '新增主題';
		$this->perms_topic_delete = '刪除任何主題';
		$this->perms_topic_delete_own = '僅限於會員刪除自己發表的文章';
		$this->perms_topic_edit = '編輯任何主題';
		$this->perms_topic_edit_own = '僅限於會員編輯自己發表的文章';
		$this->perms_topic_global = '強制主題顯示於全部討論區';
		$this->perms_topic_lock = '鎖住任何主題';
		$this->perms_topic_lock_own = '僅限於會員鎖住自己發表的文章';
		$this->perms_topic_move = '移動任何主題';
		$this->perms_topic_move_own = '僅限於會員移動自己發表的文章';
		$this->perms_topic_pin = '置頂任何主題';
		$this->perms_topic_pin_own = '僅限於會員置頂自己發表的文章';
		$this->perms_topic_publish = '公佈或是不公佈任何主題';
		$this->perms_topic_publish_auto = '新主題將會被標記成公佈';
		$this->perms_topic_split = '分割任何主題成多個主題';
		$this->perms_topic_split_own = '僅限於會員自己發表的主題做分割處理動作';
		$this->perms_topic_unlock = '解除鎖住任何主題';
		$this->perms_topic_unlock_mod = '解除管理鎖住主題';
		$this->perms_topic_unlock_own = '僅限於會員編輯自己發表的文章';
		$this->perms_topic_unpin = '解除置頂任何主題';
		$this->perms_topic_unpin_own = '僅限於會員編輯自己發表的文章';
		$this->perms_topic_view = '瀏覽主題';
		$this->perms_topic_view_unpublished = '瀏覽尚未公佈主題';
		$this->perms_updated = '權限功能已經更新.';
		$this->perms_user_inherit = '此會員將會繼承此群組權限.';
	}

	function php_info()
	{
		$this->php_error = '錯誤';
		$this->php_error_msg = 'phpinfo() 無法執行.有可能您的主機關閉此功能.';
	}

	function pm()
	{
		$this->pm_avatar = '頭像';
		$this->pm_cant_del = '您沒有權限刪除該訊息.';
		$this->pm_delallmsg = '刪除所有訊息';
		$this->pm_delete = '刪除';
		$this->pm_delete_selected = '刪除所選擇的訊息';
		$this->pm_deleted = '訊息完成刪除.';
		$this->pm_deleted_all = '訊息完成刪除.';
		$this->pm_error = '寄出給某些收件人時發生問題.<br /><br />下列會員不存在: %s<br /><br />下列會員不接受個人短訊: %s';
		$this->pm_fields = '您的訊息無法寄出.請確定必填欄位已經全部填上去了.';
		$this->pm_flood = '您已經於 %s 秒內寄出訊息, 所以您現在不能寄出另外的訊息.<br /><br />請稍後嘗試.';
		$this->pm_folder_inbox = '收件盒';
		$this->pm_folder_new = '%s 新的';
		$this->pm_folder_sentbox = '寄件箱';
		$this->pm_from = '來自於';
		$this->pm_group = '群組';
		$this->pm_guest = '您無法使用私人訊息功能. 請登入或是註冊.';
		$this->pm_joined = '加入日期';
		$this->pm_mark_unread = 'Message marked as unread.'; //Translate
		$this->pm_messenger = '訊息';
		$this->pm_msgtext = '訊息文字';
		$this->pm_multiple = '使用;來區分多個收件人';
		$this->pm_no_folder = '您必須指定資料夾.';
		$this->pm_no_member = '沒有找到該會員的 id.';
		$this->pm_no_number = '沒有找到該號碼的訊息.';
		$this->pm_no_title = '沒有主題';
		$this->pm_nomsg = '目前沒有訊息於資料夾中.';
		$this->pm_noview = '您沒有權限瀏覽此訊息.';
		$this->pm_offline = '此會員目前為離線狀態';
		$this->pm_online = '此會員目前正在線上';
		$this->pm_personal = '個人訊息';
		$this->pm_personal_msging = '個人訊息';
		$this->pm_pm = 'PM'; //Translate
		$this->pm_posts = '發表';
		$this->pm_preview = '預覽';
		$this->pm_recipients = '收件人';
		$this->pm_reply = '回覆';
		$this->pm_send = '寄出';
		$this->pm_sendamsg = '寄出訊息';
		$this->pm_sendingpm = '寄出個人訊息';
		$this->pm_sendon = '寄出';
		$this->pm_sent_mail = '已經寄出一個私人訊息.';
		$this->pm_success = '您的訊息完成發送.';
		$this->pm_sure_del = '您確定要刪除該訊息嗎?';
		$this->pm_sure_delall = '您確定要刪除此資料夾所有訊息?';
		$this->pm_title = '標題';
		$this->pm_to = '給';
	}

	function post()
	{
		$this->post_attach = '附件';
		$this->post_attach_add = '新增附件';
		$this->post_attach_disrupt = '新增或是移除不會分割您的文章.';
		$this->post_attach_failed = '附件上傳失敗. 您指定的檔案不存在.';
		$this->post_attach_not_allowed = '您不能附加此類檔案.';
		$this->post_attach_remove = '移除附件';
		$this->post_attach_too_large = '指定的檔案太大. 最大不能超過 %d KB.';
		$this->post_cant_create = '權限不夠, 您沒有權限新增主題.註冊後或許可以新增文章.';
		$this->post_cant_create1 = '您沒有權限發表主題.';
		$this->post_cant_enter = '您的投票動作沒有成功. 可能您已經投過票了,或是您沒有相關權限.';
		$this->post_cant_poll = '權限不夠, 您沒有權限新增投票.註冊後或許可以新增投票.';
		$this->post_cant_poll1 = '您沒有權限新增投票.';
		$this->post_cant_reply = '您沒有權限回覆主題.';
		$this->post_cant_reply1 = '權限不夠,您沒有權限回覆主題. 註冊後或許可以回覆文章.';
		$this->post_cant_reply2 = '您沒有權限回覆主題.';
		$this->post_closed = '此主題已經被關閉了.';
		$this->post_create_poll = '新增投票';
		$this->post_create_topic = '新增主題';
		$this->post_creating = '主題發表中';
		$this->post_creating_poll = '投票發表中';
		$this->post_flood = '您於 %s 秒內發表過文章,<br /><br />請稍後發表.';
		$this->post_guest = '訪客';
		$this->post_icon = '發表圖標';
		$this->post_last_five = '最後五個回覆改變順序';
		$this->post_length = '確認長度';
		$this->post_msg = '訊息';
		$this->post_must_msg = '您必須包含一個訊息才可以發表.';
		$this->post_must_options = '您必須包含一個選項才可發表投票.';
		$this->post_must_title = '您的主題必須有標題名稱.';
		$this->post_new_poll = '新增投票';
		$this->post_new_topic = '新增主題';
		$this->post_no_forum = '沒有找到討論區.';
		$this->post_no_topic = '沒有主題被指定.';
		$this->post_no_vote = '您必須選擇一個選項投票.';
		$this->post_option_emoticons = '轉換表情文字為圖片?';
		$this->post_option_global = '設為全區域的?';
		$this->post_option_lock = '發表會鎖定文章?';
		$this->post_option_mbcode = 'MbCode格式?';
		$this->post_option_pin = '發表後置頂文章?';
		$this->post_optional = '可選擇的';
		$this->post_options = '選項';
		$this->post_poll_options = '投票選項';
		$this->post_poll_row = '每一行';
		$this->post_posted = '發表於';
		$this->post_posting = '發表中';
		$this->post_preview = '預覽';
		$this->post_reply = '回覆主題';
		$this->post_reply_topic = '回覆主題';
		$this->post_replying = '回覆主題中';
		$this->post_replying1 = '回覆中';
		$this->post_too_many_options = '您必須至少有 2 到 %d 選項.';
		$this->post_topic_detail = '主題描述';
		$this->post_topic_title = '主題標題';
		$this->post_view_topic = '瀏覽全部主題';
		$this->post_voting = '投票中';
	}

	function printer()
	{
		$this->printer_back = '返回';
		$this->printer_not_found = '沒有找到該主題. 可能被刪除，移動或是從沒有此主題.';
		$this->printer_not_found_title = '沒有找到主題';
		$this->printer_perm_topics = '您沒有權限瀏覽該主題.';
		$this->printer_perm_topics_guest = '您沒有權限瀏覽該主題. 如果您是會員, 有可能可以.';
		$this->printer_posted_on = '已發表';
		$this->printer_send = '傳到印表機';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM 名稱';
		$this->profile_av_sign = '頭像和簽名檔';
		$this->profile_avatar = '頭像';
		$this->profile_bday = '生日';
		$this->profile_contact = '聯絡';
		$this->profile_email_address = '電子信箱';
		$this->profile_fav = '最愛的討論區';
		$this->profile_fav_forum = '%s (%d%% 此會員發表數)';
		$this->profile_gtalk = 'GTalk 帳號';
		$this->profile_icq_uin = 'ICQ 帳號';
		$this->profile_info = '個人資訊';
		$this->profile_interest = '興趣';
		$this->profile_joined = '加入日期';
		$this->profile_last_post = '最後發表';
		$this->profile_list = '會員名單';
		$this->profile_location = '來自於';
		$this->profile_member = '會員群組';
		$this->profile_member_title = '會員頭銜';
		$this->profile_msn = 'MSN 帳號';
		$this->profile_must_user = '您必須輸入會員名稱來瀏覽該個人資訊.';
		$this->profile_no_member = '目前沒有此會員.此帳號可能被刪除了.';
		$this->profile_none = '[ 沒有 ]';
		$this->profile_not_post = '沒有發表過.';
		$this->profile_offline = '目前此會員離線';
		$this->profile_online = '目前此會員正在線上';
		$this->profile_pm = '私人訊息';
		$this->profile_postcount = '全部有 %s ,每天平均有  %s ';
		$this->profile_posts = '發表';
		$this->profile_private = '[ 私人的 ]';
		$this->profile_profile = '個人資訊';
		$this->profile_signature = '簽名檔';
		$this->profile_unkown = '[ 未知的 ]';
		$this->profile_view_profile = '瀏覽個人資訊中';
		$this->profile_www = '個人網站';
		$this->profile_yahoo = 'Yahoo 帳號';
	}

	function prune()
	{
		$this->prune_action = '執行清空動作';
		$this->prune_age_day = '1 天';
		$this->prune_age_eighthours = '8 小時';
		$this->prune_age_hour = '1 小時';
		$this->prune_age_month = '1 個月';
		$this->prune_age_threemonths = '3 個月';
		$this->prune_age_week = '1 周';
		$this->prune_age_year = '1 年';
		$this->prune_forums = '選擇要清空的討論區';
		$this->prune_invalidage = '指定時間清空討論區';
		$this->prune_move = '移動';
		$this->prune_moveto_forum = '討論區移動到';
		$this->prune_nodest = '沒有選擇有效的目的';
		$this->prune_notopics = '沒有選擇想要清空的主題';
		$this->prune_notopics_old = '沒有日期過久的主題可以清除';
		$this->prune_novalidforum = '沒有指定討論區域來清除主題';
		$this->prune_select_age = '選擇主題年齡來限制清除';
		$this->prune_select_topics = '選擇主題清除或是選擇全部';
		$this->prune_success = '主題完成清除';
		$this->prune_title = '主題清除';
		$this->prune_topics_older_than = '清空主題超過';
	}

	function query()
	{
		$this->query = '查訊介面';
		$this->query_fail = '失敗.';
		$this->query_success = '執行成功.';
		$this->query_your = '您的查詢';
	}

	function recent()
	{
		$this->recent_active = '自從上次瀏覽熱門主題';
		$this->recent_by = 'By'; //Translate
		$this->recent_can_post = '您可以回覆此討論區.';
		$this->recent_can_topics = '您可以瀏覽主題於此討論區.';
		$this->recent_cant_post = '您不能回覆此討論區.';
		$this->recent_cant_topics = '您不能瀏覽主題於此討論區.';
		$this->recent_dot = '點';
		$this->recent_dot_detail = '顯示您回覆過的主題';
		$this->recent_forum = '討論區';
		$this->recent_guest = '訪客';
		$this->recent_hot = '熱門的';
		$this->recent_icon = '訊息圖標';
		$this->recent_jump = '前往最新發表主題';
		$this->recent_last = '最新發表';
		$this->recent_locked = '鎖住';
		$this->recent_moved = '已移動';
		$this->recent_msg = '%s 篇訊息';
		$this->recent_new = '新的';
		$this->recent_new_poll = '新增投票';
		$this->recent_new_topic = '新增主題';
		$this->recent_no_topics = '自從您上次來訪以後沒有新的主題.';
		$this->recent_noexist = '指定的討論區不存在.';
		$this->recent_nopost = '沒有發表';
		$this->recent_not = '沒有';
		$this->recent_noview = '您沒有權限瀏覽討論區.';
		$this->recent_pages = '頁面';
		$this->recent_pinned = '置頂';
		$this->recent_pinned_topic = '已置頂主題';
		$this->recent_poll = '投票';
		$this->recent_regfirst = '您沒有權限瀏覽討論區. 註冊後可能可以瀏覽.';
		$this->recent_replies = '回覆';
		$this->recent_starter = '作者';
		$this->recent_sub = '子討論區';
		$this->recent_sub_last_post = '最新發表';
		$this->recent_sub_replies = '回覆';
		$this->recent_sub_topics = '主題';
		$this->recent_subscribe = '當有人回覆時寄信通知';
		$this->recent_topic = '主題';
		$this->recent_topic_posted = '發表';
		$this->recent_views = '瀏覽';
		$this->recent_write_topics = '您可以新增主題於此討論區';
	}

	function register()
	{
		$this->register_activated = '您的帳號完成啟動!';
		$this->register_activating = '帳號啟動';
		$this->register_activation_error = '啟動帳號發生錯誤. 請確定瀏覽器的完整連結. 如有其他錯誤請通知討論區管理員請它重新寄出.';
		$this->register_confirm_passwd = '密碼確認';
		$this->register_done = '您已經完成註冊! 請登入.';
		$this->register_email = '電子信箱';
		$this->register_email_invalid = '此電子信箱格式不正確.';
		$this->register_email_msg = '此信件為Quicksilver Forums自動產生寄出';
		$this->register_email_msg2 = '如果想要啟動帳號';
		$this->register_email_msg3 = '請點選下列連結, 或貼上到您的瀏覽器:';
		$this->register_email_used = '該電子信箱已經有會員使用.';
		$this->register_fields = '必填欄位沒有填寫完全.';
		$this->register_flood = '您已完成註冊.';
		$this->register_image = '請輸入圖片中的文字.';
		$this->register_image_invalid = '為了防止機器人註冊,您必須輸入圖片上得文字.';
		$this->register_initiated = '該需求來自於 IP:';
		$this->register_must_activate = '您已經完成註冊. 一封啟動信件將會寄到  %s 並告知如何啟動帳號. 您的帳號將會被限制功能，直到您啟動帳號.';
		$this->register_name_invalid = '名稱太長.';
		$this->register_name_taken = '會員名稱已經有人使用.';
		$this->register_new_user = '想要的會員名稱';
		$this->register_pass_invalid = '密碼為無效的格式. 僅接受字元為英文，數字，-（破折號）_（底線）和空白鍵並且至少要五個字元.';
		$this->register_pass_match = '兩次密碼不一樣.';
		$this->register_passwd = '密碼';
		$this->register_reg = '註冊';
		$this->register_reging = '註冊中';
		$this->register_requested = '啟動帳號必須要有:';
		$this->register_tos = '使用條款';
		$this->register_tos_i_agree = '我同意下列使用條款';
		$this->register_tos_not_agree = '我不同意此使用條款.';
		$this->register_tos_read = '請仔細閱讀下列使用條款';
	}

	function rssfeed()
	{
		$this->rssfeed_cannot_find_forum = '此討論區似乎不存在';
		$this->rssfeed_cannot_find_topic = '此主題似乎不存在';
		$this->rssfeed_cannot_read_forum = '您沒有權限瀏覽此討論區';
		$this->rssfeed_cannot_read_topic = '您沒有權限瀏覽此主題';
		$this->rssfeed_error = '錯誤';
		$this->rssfeed_forum = '討論區:';
		$this->rssfeed_posted_by = '發表於';
		$this->rssfeed_topic = '主題:';
	}

	function search()
	{
		$this->search_advanced = '進階選項';
		$this->search_avatar = '頭像';
		$this->search_basic = '基本搜尋';
		$this->search_characters = '字元';
		$this->search_day = '天';
		$this->search_days = '天';
		$this->search_exact_name = '完整名稱';
		$this->search_flood = '您曾經搜尋於過去 %s 秒內, 您現在暫時無法搜尋.<br /><br />請稍等幾秒鐘再嘗試.';
		$this->search_for = '搜尋於';
		$this->search_forum = '討論區';
		$this->search_group = '群組';
		$this->search_guest = '訪客';
		$this->search_in = '搜尋於';
		$this->search_in_posts = '僅搜尋回覆';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = '加入日期';
		$this->search_level = '會員等級';
		$this->search_match = '搜尋比對中';
		$this->search_matches = '吻合';
		$this->search_month = '月';
		$this->search_months = '月';
		$this->search_mysqldoc = 'MySQL 文件';
		$this->search_newer = '新的程度';
		$this->search_no_results = '您的搜尋沒有結果.';
		$this->search_no_words = '您必須指定搜尋模式.<br /><br />每種模式必須大於 3 個字元,包含英文字母,數字, 所有格符號,和下方划線.';
		$this->search_offline = '此會員目前離線';
		$this->search_older = '較舊的';
		$this->search_online = '會員目前正在線上';
		$this->search_only_display = '僅顯示第一個';
		$this->search_partial_name = '部份名稱';
		$this->search_post_icon = '文章圖標';
		$this->search_posted_on = '已發表';
		$this->search_posts = '發表數';
		$this->search_posts_by = '僅回覆於';
		$this->search_regex = '搜尋使用正規查詢';
		$this->search_regex_failed = '您的正規查詢無效.請瀏覽 MySQL 文件裡面的正規查詢說明.';
		$this->search_relevance = '關聯文章: %d%%';
		$this->search_replies = '回覆數';
		$this->search_result = '搜尋結果';
		$this->search_search = '搜尋';
		$this->search_select_all = '選擇全部';
		$this->search_show_posts = '顯示吻合的發表';
		$this->search_sound = '依發音搜尋';
		$this->search_starter = '作者';
		$this->search_than = '超過';
		$this->search_topic = '著提';
		$this->search_unreg = '尚未註冊';
		$this->search_week = '周';
		$this->search_weeks = '周';
		$this->search_year = '年';
	}

	function settings()
	{
		$this->settings = '一般設定';
		$this->settings_active = '啟動會員設定';
		$this->settings_allow = '允許';
		$this->settings_antibot = '防止機器人註冊';
		$this->settings_attach_ext = '附件 - 副檔名';
		$this->settings_attach_one_per = '每一行. 沒有句號.';
		$this->settings_avatar = '頭像設定';
		$this->settings_avatar_flash = 'Flash 頭像';
		$this->settings_avatar_max_height = '頭像最大高度';
		$this->settings_avatar_max_width = '頭像最大寬度';
		$this->settings_avatar_upload = '上傳頭像 - 檔案最大限制';
		$this->settings_basic = '編輯討論區一般設定';
		$this->settings_blank = '使用 <i>_blank</i> 開啟新視窗.';
		$this->settings_board_enabled = '開啟討論區';
		$this->settings_board_location = '討論區位址';
		$this->settings_board_name = '討論區名稱';
		$this->settings_board_rss = 'RSS Feed 設定';
		$this->settings_board_rssfeed_desc = 'RSS Feed 描述';
		$this->settings_board_rssfeed_posts = 'RSS Feed名單上的文章數';
		$this->settings_board_rssfeed_time = '一分鐘內重新整理次數';
		$this->settings_board_rssfeed_title = 'RSS Feed 標題';
		$this->settings_clickable = '每一行可點選微笑圖標';
		$this->settings_cookie = 'Cookie 和 Flood 設定';
		$this->settings_cookie_domain = 'Cookie 網址';
		$this->settings_cookie_path = 'Cookie 路徑';
		$this->settings_cookie_prefix = 'Cookie 前置文字';
		$this->settings_cookie_secure = 'Cookie 安全設定';
		$this->settings_cookie_secured = '您的網站使用 SSL 連線嗎?';
		$this->settings_cookie_time = '保持登入';
		$this->settings_db = '編輯連線設定';
		$this->settings_db_host = '資料庫主機';
		$this->settings_db_leave_blank = '保留空白為沒有.';
		$this->settings_db_multiple = '安裝多個論壇於單一資料庫.';
		$this->settings_db_name = '資料庫密碼';
		$this->settings_db_password = '資料庫密碼';
		$this->settings_db_port = '資料庫 Port';
		$this->settings_db_prefix = '資料表前置文字';
		$this->settings_db_socket = '資料庫的 Socket';
		$this->settings_db_username = '資料庫帳號';
		$this->settings_debug_mode = '除錯模式';
		$this->settings_default_lang = '預設語言';
		$this->settings_default_no = '預設號碼';
		$this->settings_default_skin = '預設風格';
		$this->settings_default_yes = '預設開啟';
		$this->settings_disabled = '已關閉';
		$this->settings_disabled_notice = '暫時關閉公告';
		$this->settings_email = 'E-Mail 設定';
		$this->settings_email_fake = '僅限於顯示. 將不會是真的電子信箱.';
		$this->settings_email_from = '寄件人的電子信件';
		$this->settings_email_place1 = '放置會員於此';
		$this->settings_email_place2 = '群組直到信件通過認證';
		$this->settings_email_place3 = '不需要電子信箱認證';
		$this->settings_email_real = '需要電子信箱.';
		$this->settings_email_reply = '回覆信件的電子信箱';
		$this->settings_email_smtp = 'SMTP 郵件伺服器';
		$this->settings_email_valid = '新會員電子信件認證';
		$this->settings_enabled = '開啟';
		$this->settings_enabled_modules = '已開啟模組';
		$this->settings_foreign_link = '外部連結目標';
		$this->settings_general = '一般設定';
		$this->settings_group_after = '註冊後群組';
		$this->settings_hot_topic = '發表熱門主題';
		$this->settings_kilobytes = 'Kilobytes'; //Translate
		$this->settings_max_attach_size = '附件 -檔案最大限制';
		$this->settings_members = '會員設定';
		$this->settings_modname_only = '僅限於模組名稱. 不包含 .php';
		$this->settings_new = '新的設定';
		$this->settings_new_add = '新的討論區設定';
		$this->settings_new_added = '新的設定已新增.';
		$this->settings_new_exists = '該設定已存在. 請選擇其他名稱.';
		$this->settings_new_name = '新設定名稱';
		$this->settings_new_required = '新的設定名稱為必填的.';
		$this->settings_new_value = '新的設定值';
		$this->settings_no_allow = '不允許';
		$this->settings_nodata = '沒有資料被寄出來自於 POST';
		$this->settings_one_per = '每一行';
		$this->settings_pixels = 'Pixels'; //Translate
		$this->settings_pm_flood = '個人短訊連續發表控制';
		$this->settings_pm_min_time = '兩次訊息間隔時間.';
		$this->settings_polls = '投票';
		$this->settings_polls_no = '會員投票前不能觀看結果';
		$this->settings_polls_yes = '會員投票前可以觀看結果';
		$this->settings_post_flood = '連續發表控制';
		$this->settings_post_min_time = '兩次文章間隔時間.';
		$this->settings_posts_topic = '每主題頁面顯示回覆數';
		$this->settings_search_flood = '連續搜尋控制';
		$this->settings_search_min_time = '兩次搜尋間隔時間.';
		$this->settings_server = '伺服器設定';
		$this->settings_server_gzip = 'GZIP 壓縮';
		$this->settings_server_gzip_msg = '加強速度. 當討論區變成空白或混亂時關閉它.';
		$this->settings_server_maxload = '最大伺服器載入';
		$this->settings_server_maxload_msg = '當討論區於伺服器執行最大負載關閉它. 輸入 0 可以關閉.';
		$this->settings_server_timezone = '伺服器時區';
		$this->settings_show_avatars = '顯示頭像';
		$this->settings_show_email = '顯示電子信箱';
		$this->settings_show_emotes = '顯示表情圖案';
		$this->settings_show_notice = '顯示網站維修訊息';
		$this->settings_show_pm = '允許個人短訊';
		$this->settings_show_sigs = '顯示簽名檔';
		$this->settings_spider_agent = '搜尋蜘蛛';
		$this->settings_spider_agent_msg = '輸入全部或是部份的搜尋蜘蛛的 HTTP USER AGENT.';
		$this->settings_spider_enable = '開啟顯示搜尋蜘蛛';
		$this->settings_spider_enable_msg = '開啟顯示搜尋蜘蛛的名稱於活動名單中.';
		$this->settings_spider_name = '搜尋機器人名稱';
		$this->settings_spider_name_msg = '輸入您想要顯示的搜尋機器人名稱於線上名單.您必須放入搜尋機器人和搜尋蜘蛛 HTTP USER AGENT於同一行. 例如, 如果您放置 \'googlebot\' 於第三行則user agent放置 \'Google\' 於第三行來作為它的名稱.';
		$this->settings_timezone = '時區';
		$this->settings_topics_page = '每頁顯示主題數';
		$this->settings_tos = '使用條款';
		$this->settings_updated = '設定完成更新.';
	}

	function stats()
	{
		$this->stats = '統計中心';
		$this->stats_post_by_month = '每月發表';
		$this->stats_reg_by_month = '每月註冊';
	}

	function templates()
	{
		$this->add = '新增 HTML模板';
		$this->add_in = '新增模板到:';
		$this->all_fields_required = '所有欄位為必填欄位';
		$this->choose_css = '選擇 CSS 模板';
		$this->choose_set = '選擇一個模板設定';
		$this->choose_skin = '選擇一個風格';
		$this->confirm1 = '您正在刪除';
		$this->confirm2 = '模板來自於';
		$this->create_new = '新增風格名稱';
		$this->create_skin = '新增風格';
		$this->credit = '請不要移出我們僅有的贊助!';
		$this->css_edited = 'CSS 檔案完成更新.';
		$this->css_fioerr = '該檔案無法寫入, 您必須手動變更 CHMOD 檔案權限.';
		$this->delete_template = '刪除模板';
		$this->directory = '目錄';
		$this->display_name = '顯示名稱';
		$this->edit_css = '編輯 CSS';
		$this->edit_skin = '編輯風格';
		$this->edit_templates = '編輯模板';
		$this->export_done = '風格完成匯出到風格目錄.';
		$this->export_select = '選擇一個風格匯出';
		$this->export_skin = '匯出風格';
		$this->install_done = '該風格完成安裝.';
		$this->install_exists1 = '風格外觀';
		$this->install_exists2 = '已完成安裝.';
		$this->install_overwrite = '複寫';
		$this->install_skin = '安裝風格';
		$this->menu_title = '選擇一個模板區域編輯';
		$this->no_file = '沒有此檔案.';
		$this->only_skin = '僅有一個風格安裝. 您不能刪除此風格.';
		$this->or_new = '或是新增模板設定名稱:';
		$this->select_skin = '選擇一個風格';
		$this->select_skin_edit = '選擇一個風格編輯';
		$this->select_skin_edit_done = '風格完成編輯.';
		$this->select_template = '選擇模板';
		$this->skin_chmod = '一個新的目錄無法新增於該風格. 請嘗試 CHMOD 該風格目錄為 775.';
		$this->skin_created = '風格已新增.';
		$this->skin_deleted = '風格完成刪除.';
		$this->skin_dir_name = '您必須輸入一個風格名稱和目錄名稱.';
		$this->skin_dup = '找到該風格有相同目錄名稱.該風格目錄被變更到';
		$this->skin_name = '您必須輸入風格名稱.';
		$this->skin_none = '目前沒有風格可以安裝.';
		$this->skin_set = '風格設定';
		$this->skins_found = '再風格目錄找到下列風格';
		$this->template_about = '關於變數';
		$this->template_about2 = '變數是一段文字將會被動態的資料替代.變數開始於一塊錢標記, 有時後會封入於 {braces}.';
		$this->template_add = '新增';
		$this->template_added = '模板完成新增.';
		$this->template_clear = '清除';
		$this->template_confirm = '您已經變更模板. 現在想要儲存嗎?';
		$this->template_description = '模板描述';
		$this->template_html = 'HTML模板';
		$this->template_name = '模板名稱';
		$this->template_position = '模板位址';
		$this->template_set = '模板設定';
		$this->template_title = '模板標題';
		$this->template_universal = '通用變數';
		$this->template_universal2 = '某些變數可以用到任何模板上, 有些只能用到特定模板上. 物件 $this 屬性可以使用於任何地方.';
		$this->template_updated = '模板完成更新.';
		$this->templates = '模板';
		$this->temps_active = '啟動會員細節';
		$this->temps_admin = '<b>一般的管理後台</b>';
		$this->temps_backup = 'AdminCP Database Backup'; //Translate
		$this->temps_ban = '封鎖設定';
		$this->temps_board_index = '討論區首頁';
		$this->temps_censoring = '不良文字過濾';
		$this->temps_cp = '會員控制台';
		$this->temps_email = '寄信給會員';
		$this->temps_emot_control = '表情圖案管理';
		$this->temps_forum = '討論區';
		$this->temps_forums = '討論區管理';
		$this->temps_groups = '群組管理';
		$this->temps_help = '求助';
		$this->temps_login = '登入/登出';
		$this->temps_logs = '管理紀錄';
		$this->temps_main = '<b>一般的討論區</b>';
		$this->temps_mass_mail = '大量郵件設定';
		$this->temps_member_control = '會員管理';
		$this->temps_members = '會員名單';
		$this->temps_mod = '版主管理';
		$this->temps_pm = '私人訊息管理';
		$this->temps_polls = '投票';
		$this->temps_post = '發表中';
		$this->temps_printer = '友善列印主題';
		$this->temps_profile = '個人資訊瀏覽中';
		$this->temps_recent = '最新的主題';
		$this->temps_register = '註冊';
		$this->temps_rssfeed = 'RSS Feed'; //Translate
		$this->temps_search = '搜尋中';
		$this->temps_settings = '一般設定';
		$this->temps_templates = '模板編輯';
		$this->temps_titles = '會員頭銜管理';
		$this->temps_topic_prune = '主題清空管理';
		$this->temps_topics = '主題';
		$this->upgrade_skin = '更新風格';
		$this->upgrade_skin_already = '完成升級. 不需要在做任何動作.';
		$this->upgrade_skin_detail = '風格升級使用必須在模板編輯之後.<br />選擇一個風格升級';
		$this->upgrade_skin_upgraded = '風格完成升級.';
		$this->upgraded_templates = '下列模板完成新增或是升級';
	}

	function titles()
	{
		$this->titles_add = '新增會員頭銜';
		$this->titles_added = '會員頭銜完成新增.';
		$this->titles_control = '會員頭銜控制';
		$this->titles_edit = '編輯會員頭銜';
		$this->titles_error = '沒有頭銜名稱或是最少發表量';
		$this->titles_image = '圖片';
		$this->titles_minpost = '最少發表量';
		$this->titles_nodel_default = '移除預設的頭銜將會是您的討論區終止,請使用替代方式編輯.';
		$this->titles_title = '頭銜';
	}

	function topic()
	{
		$this->topic_attached = '附檔 file:';
		$this->topic_attached_downloads = '下載次數';
		$this->topic_attached_filename = '檔名:';
		$this->topic_attached_image = '附加圖片:';
		$this->topic_attached_perm = '您沒有下載此檔案權限.';
		$this->topic_attached_size = '大小:';
		$this->topic_attached_title = '附件檔案';
		$this->topic_avatar = '頭像';
		$this->topic_bottom = '前往頁底';
		$this->topic_create_poll = '新增投票';
		$this->topic_create_topic = '新增主題';
		$this->topic_delete = '刪除';
		$this->topic_delete_post = '刪除此回覆';
		$this->topic_edit = '編輯';
		$this->topic_edit_post = '編輯此回覆';
		$this->topic_edited = '最後編輯 %s 於 %s';
		$this->topic_error = '錯誤';
		$this->topic_group = '群組';
		$this->topic_guest = '訪客';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = '已加入';
		$this->topic_level = '會員等級';
		$this->topic_links_aim = '寄出 AIM 訊息給 %s';
		$this->topic_links_email = '寄出一封信件給 %s';
		$this->topic_links_gtalk = '寄出 GTalk 訊息給 %s';
		$this->topic_links_icq = '寄出ICQ 訊息給 %s';
		$this->topic_links_msn = '瀏覽 %s\'s MSN 個人資訊';
		$this->topic_links_pm = '寄出私人訊息給 %s';
		$this->topic_links_web = '瀏覽 %s\'的個人網站';
		$this->topic_links_yahoo = '寄出訊息 %s 到  Yahoo! 即時通';
		$this->topic_lock = '鎖住';
		$this->topic_locked = '已鎖定主題';
		$this->topic_move = '移動';
		$this->topic_new_post = '回覆尚未讀取';
		$this->topic_newer = '新的主題';
		$this->topic_no_newer = '目前沒有新的主題.';
		$this->topic_no_older = '沒有比較舊的主題.';
		$this->topic_no_votes = '此投票目前沒有人投票.';
		$this->topic_not_found = '沒有找到相關主題';
		$this->topic_not_found_message = '無法找到該主題.可能被刪除,移動或是從來沒有該主題.';
		$this->topic_offline = '此會員目前不在線上';
		$this->topic_older = '較舊的主題';
		$this->topic_online = '此會員正在線上';
		$this->topic_options = '主題選項';
		$this->topic_pages = '頁面';
		$this->topic_perm_view = '您沒有權限瀏覽主題.';
		$this->topic_perm_view_guest = '您沒有權限瀏覽主題. 註冊後可能可以瀏覽.';
		$this->topic_pin = '置頂';
		$this->topic_posted = '已發表';
		$this->topic_posts = '發表';
		$this->topic_print = '瀏覽可列印的';
		$this->topic_publish = '公佈';
		$this->topic_qr_emoticons = '表情圖案';
		$this->topic_qr_open_emoticons = '開啟可點選的表情圖案';
		$this->topic_qr_open_mbcode = '開啟 MBCode';
		$this->topic_quickreply = '快速回覆';
		$this->topic_quote = '引用此文章回覆';
		$this->topic_reply = '回覆主題';
		$this->topic_split = '切割';
		$this->topic_split_finish = '完成全部切割';
		$this->topic_split_keep = '不移動該主題';
		$this->topic_split_move = '移動該主題';
		$this->topic_subscribe = '當有人回覆寄信通知我';
		$this->topic_top = '前往頁面頂端';
		$this->topic_unlock = '解除鎖住';
		$this->topic_unpin = '取消置頂';
		$this->topic_unpublish = '取消公佈';
		$this->topic_unpublished = '此主題尚未公佈所以您目前並沒有權限瀏覽.';
		$this->topic_unreg = '未註冊';
		$this->topic_view = '觀看結果';
		$this->topic_viewing = '主題瀏覽中';
		$this->topic_vote = '投票';
		$this->topic_vote_count_plur = '%d 投票';
		$this->topic_vote_count_sing = '%d 投票';
		$this->topic_votes = '投票';
	}

	function universal()
	{
		$this->aim = 'AIM'; //Translate
		$this->based_on = '基於';
		$this->board_by = '作者';
		$this->charset = 'utf-8';
		$this->continue = '繼續';
		$this->date_long = 'M j, Y'; //Translate
		$this->date_short = 'n/j/y'; //Translate
		$this->delete = '刪除';
		$this->direction = 'ltr'; //Translate
		$this->edit = '修改';
		$this->email = 'Email'; //Translate
		$this->gtalk = 'GT'; //Translate
		$this->icq = 'ICQ'; //Translate
		$this->msn = 'MSN'; //Translate
		$this->new_message = '新訊息';
		$this->new_poll = '新增投票';
		$this->new_topic = '新增主題';
		$this->no = '否';
		$this->powered = 'Powered by'; //Translate
		$this->private_message = '短訊';
		$this->quote = '引用';
		$this->recount_forums = '討論區內容已重新計算! 全部主題數: %d. 全部的回覆數: %d.';
		$this->reply = '回覆';
		$this->seconds = '秒';
		$this->select_all = '選擇全部';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->spoiler = '掠奪者';
		$this->submit = '送出';
		$this->subscribe = '訂閱';
		$this->time_long = ', g:i a'; //Translate
		$this->time_only = 'g:i a'; //Translate
		$this->today = '今天';
		$this->website = 'WWW'; //Translate
		$this->yahoo = 'Yahoo'; //Translate
		$this->yes = '是';
		$this->yesterday = '昨天';
	}
}
?>
