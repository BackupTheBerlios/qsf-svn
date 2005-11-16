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

if (!defined('INSTALLER')) {
	exit('Use index.php to upgrade.');
}

$query = $db->query("SELECT post_id as id, INET_ATON( post_ip ) as newip FROM {$pre}posts");

while($upg14_data = $db->nqfetch($query))
{
	$sql = "UPDATE {$pre}posts SET post_ip='" . $upg14_data['newip'] . "' WHERE post_id='" . $upg14_data['id'] . "'";
	$db->query($sql);
}

$query = $db->query("SELECT active_id as id, INET_ATON( active_ip ) as newip FROM {$pre}active");

while($upg14_data = $db->nqfetch($query))
{
	$sql = "UPDATE {$pre}active SET active_ip='" . $upg14_data['newip'] . "' WHERE active_id='" . $upg14_data['id'] . "'";
	$db->query($sql);
}

$need_templates = array(
    'MAIN',			// Changed templates
    'MAIN_COPYRIGHT',
    'MAIN_HEADER_MEMBER',
    'MAIN_HEADER_GUEST',
    'MAIN_REMINDER',
    'MAIN_TABLE',
    'MAIN_ETABLE',
    'BOARD_CATEGORY',
    'BOARD_LAST_POST_BOX',
    'BOARD_MAIN',
    'CP_PROFILE',
    'FORUM_MAIN',
    'FORUM_TOPIC',
    'FORUM_TOPIC_PINNED',
    'MEMBERS_MEMBER',
    'PM_FOLDER',
    'PM_FOLDER_MESSAGE',
    'PM_NO_MESSAGES',
    'PM_SEND',
    'PM_VIEW',
    'POST_PREVIEW',
    'POST_REVIEW_ENTRY',
    'PROFILE_MAIN',
    'REGISTER_MAIN',
    'TOPIC_MAIN',
    'TOPIC_POST',
    'TOPIC_POSTER_MEMBER',
    'ADMIN_ADD_TEMPLATE',	// New templates
    'ADMIN_CENSOR_FORM',
    'ADMIN_COPYRIGHT',
    'ADMIN_EDIT_BOARD_SETTINGS',
    'ADMIN_EDIT_DB_SETTINGS',
    'ADMIN_EDIT_SKIN',
    'ADMIN_EDIT_TEMPLATE',
    'ADMIN_EMOTICON_EDIT',
    'ADMIN_ETABLE',
    'ADMIN_FORUM_ADD',
    'ADMIN_FORUM_EDIT',
    'ADMIN_FORUM_ORDER',
    'ADMIN_GROUP_EDIT',
    'ADMIN_HOME',
    'ADMIN_INDEX',
    'ADMIN_LIST_TEMPLATES',
    'ADMIN_LIST_TEMPLATES_DELETE',
    'ADMIN_MASS_MAIL',
    'ADMIN_MEMBER_PROFILE',
    'ADMIN_MESSAGE',
    'ADMIN_MOD_LOGS',
    'ADMIN_RSSREADER_TITLE',
    'ADMIN_RSSREADER_ITEM',
    'ADMIN_RSSREADER_MAIN',
    'ADMIN_TABLE',
    'ADMIN_TITLE_FORM',
    'FORUM_TOPICS_MAIN',
    'RECENT_MAIN',
    'RECENT_NO_TOPICS',
    'RECENT_TOPIC',
    'RECENT_TOPIC_PINNED',
    'PM_PREVIEW'
);

$this->sets['default_timezone'] = 151;
$this->sets['servertime'] = 151;
$this->sets['rss_feed_posts'] = 5;
$this->sets['rss_feed_time'] = 60;
$this->sets['rss_feed_title'] = "";
$this->sets['rss_feed_desc'] = "";
$this->sets['spider_active'] = 1;
$this->sets['spider_agent'] = array(
	'googlebot',
	'lycos',
	'ask jeeves',
	'scooter',
	'fast-webcrawler',
	'slurp@inktomi',
	'turnitinbot',
	'gigabot',
	'yahoo',
	'msnbot',
	'mediapartners-google',
	'naverbot',
	'jetbot',
	'alexa',
	'ArchitextSpider',
	'pipeLiner'
);
$this->sets['spider_name'] = array(
	'Google',
	'Lycos',
	'Ask Jeeves',
	'Altavista',
	'AlltheWeb',
	'Inktomi',
	'Turnitin.com',
	'Gigabot',
	'Yahoo! Slurp',
	'MSN Search',
	'AdSense',
	'Naver',
	'JetEye',
	'Alexa',
	'Excite-Bot',
	'PipeLine Spider'
);
$this->sets['optional_modules'] = array(
	'active',
	'cp',
	'email',
	'help',
	'members',
	'mod',
	'pm',
	'printer',
	'profile',
	'search',
	'recent',
	'rssfeed'
);

$queries[] = "DROP TABLE IF EXISTS {$pre}timezones";
$queries[] = "CREATE TABLE {$pre}timezones (
  zone_id smallint(3) unsigned NOT NULL auto_increment,
  zone_name varchar(30) NOT NULL default '',
  zone_offset int(15) NOT NULL default '0',
  zone_updated int(15) unsigned NOT NULL default '0',
  PRIMARY KEY  (zone_id),
  KEY name (zone_name)
) TYPE=MyISAM AUTO_INCREMENT=384";

$queries[] = "UPDATE {$pre}users SET user_skin='default' WHERE user_group=".USER_ADMIN);
$queries[] = "INSERT INTO {$pre}timezones VALUES (1, 'Europe/Andorra', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (2, 'Asia/Dubai', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (3, 'Asia/Kabul', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (4, 'America/Antigua', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (5, 'America/Anguilla', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (6, 'Europe/Tirane', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (7, 'Asia/Yerevan', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (8, 'America/Curacao', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (9, 'Africa/Luanda', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (10, 'Antarctica/McMurdo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (11, 'Antarctica/South_Pole', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (12, 'Antarctica/Rothera', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (13, 'Antarctica/Palmer', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (14, 'Antarctica/Mawson', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (15, 'Antarctica/Davis', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (16, 'Antarctica/Casey', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (17, 'Antarctica/Vostok', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (18, 'Antarctica/DumontDUrville', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (19, 'Antarctica/Syowa', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (20, 'America/Argentina/Buenos_Aires', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (21, 'America/Argentina/Cordoba', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (22, 'America/Argentina/Jujuy', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (23, 'America/Argentina/Tucuman', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (24, 'America/Argentina/Catamarca', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (25, 'America/Argentina/La_Rioja', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (26, 'America/Argentina/San_Juan', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (27, 'America/Argentina/Mendoza', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (28, 'America/Argentina/Rio_Gallegos', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (29, 'America/Argentina/Ushuaia', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (30, 'Pacific/Pago_Pago', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (31, 'Europe/Vienna', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (32, 'Australia/Lord_Howe', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (33, 'Australia/Hobart', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (34, 'Australia/Currie', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (35, 'Australia/Melbourne', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (36, 'Australia/Sydney', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (37, 'Australia/Broken_Hill', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (38, 'Australia/Brisbane', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (39, 'Australia/Lindeman', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (40, 'Australia/Adelaide', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (41, 'Australia/Darwin', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (42, 'Australia/Perth', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (43, 'America/Aruba', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (44, 'Europe/Mariehamn', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (45, 'Asia/Baku', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (46, 'Europe/Sarajevo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (47, 'America/Barbados', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (48, 'Asia/Dhaka', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (49, 'Europe/Brussels', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (50, 'Africa/Ouagadougou', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (51, 'Europe/Sofia', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (52, 'Asia/Bahrain', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (53, 'Africa/Bujumbura', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (54, 'Africa/Porto-Novo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (55, 'Atlantic/Bermuda', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (56, 'Asia/Brunei', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (57, 'America/La_Paz', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (58, 'America/Noronha', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (59, 'America/Belem', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (60, 'America/Fortaleza', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (61, 'America/Recife', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (62, 'America/Araguaina', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (63, 'America/Maceio', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (64, 'America/Bahia', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (65, 'America/Sao_Paulo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (66, 'America/Campo_Grande', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (67, 'America/Cuiaba', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (68, 'America/Porto_Velho', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (69, 'America/Boa_Vista', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (70, 'America/Manaus', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (71, 'America/Eirunepe', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (72, 'America/Rio_Branco', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (73, 'America/Nassau', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (74, 'Asia/Thimphu', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (75, 'Africa/Gaborone', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (76, 'Europe/Minsk', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (77, 'America/Belize', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (78, 'America/St_Johns', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (79, 'America/Halifax', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (80, 'America/Glace_Bay', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (81, 'America/Goose_Bay', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (82, 'America/Montreal', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (83, 'America/Toronto', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (84, 'America/Nipigon', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (85, 'America/Thunder_Bay', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (86, 'America/Pangnirtung', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (87, 'America/Iqaluit', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (88, 'America/Coral_Harbour', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (89, 'America/Rankin_Inlet', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (90, 'America/Winnipeg', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (91, 'America/Rainy_River', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (92, 'America/Cambridge_Bay', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (93, 'America/Regina', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (94, 'America/Swift_Current', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (95, 'America/Edmonton', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (96, 'America/Yellowknife', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (97, 'America/Inuvik', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (98, 'America/Dawson_Creek', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (99, 'America/Vancouver', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (100, 'America/Whitehorse', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (101, 'America/Dawson', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (102, 'Indian/Cocos', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (103, 'Africa/Kinshasa', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (104, 'Africa/Lubumbashi', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (105, 'Africa/Bangui', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (106, 'Africa/Brazzaville', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (107, 'Europe/Zurich', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (108, 'Africa/Abidjan', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (109, 'Pacific/Rarotonga', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (110, 'America/Santiago', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (111, 'Pacific/Easter', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (112, 'Africa/Douala', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (113, 'Asia/Shanghai', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (114, 'Asia/Harbin', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (115, 'Asia/Chongqing', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (116, 'Asia/Urumqi', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (117, 'Asia/Kashgar', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (118, 'America/Bogota', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (119, 'America/Costa_Rica', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (120, 'Europe/Belgrade', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (121, 'America/Havana', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (122, 'Atlantic/Cape_Verde', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (123, 'Indian/Christmas', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (124, 'Asia/Nicosia', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (125, 'Europe/Prague', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (126, 'Europe/Berlin', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (127, 'Africa/Djibouti', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (128, 'Europe/Copenhagen', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (129, 'America/Dominica', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (130, 'America/Santo_Domingo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (131, 'Africa/Algiers', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (132, 'America/Guayaquil', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (133, 'Pacific/Galapagos', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (134, 'Europe/Tallinn', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (135, 'Africa/Cairo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (136, 'Africa/El_Aaiun', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (137, 'Africa/Asmera', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (138, 'Europe/Madrid', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (139, 'Africa/Ceuta', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (140, 'Atlantic/Canary', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (141, 'Africa/Addis_Ababa', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (142, 'Europe/Helsinki', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (143, 'Pacific/Fiji', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (144, 'Atlantic/Stanley', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (145, 'Pacific/Truk', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (146, 'Pacific/Ponape', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (147, 'Pacific/Kosrae', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (148, 'Atlantic/Faeroe', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (149, 'Europe/Paris', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (150, 'Africa/Libreville', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (151, 'Europe/London', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (152, 'America/Grenada', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (153, 'Asia/Tbilisi', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (154, 'America/Cayenne', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (155, 'Africa/Accra', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (156, 'Europe/Gibraltar', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (157, 'America/Godthab', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (158, 'America/Danmarkshavn', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (159, 'America/Scoresbysund', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (160, 'America/Thule', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (161, 'Africa/Banjul', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (162, 'Africa/Conakry', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (163, 'America/Guadeloupe', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (164, 'Africa/Malabo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (165, 'Europe/Athens', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (166, 'Atlantic/South_Georgia', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (167, 'America/Guatemala', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (168, 'Pacific/Guam', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (169, 'Africa/Bissau', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (170, 'America/Guyana', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (171, 'Asia/Hong_Kong', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (172, 'America/Tegucigalpa', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (173, 'Europe/Zagreb', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (174, 'America/Port-au-Prince', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (175, 'Europe/Budapest', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (176, 'Asia/Jakarta', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (177, 'Asia/Pontianak', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (178, 'Asia/Makassar', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (179, 'Asia/Jayapura', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (180, 'Europe/Dublin', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (181, 'Asia/Jerusalem', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (182, 'Asia/Calcutta', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (183, 'Indian/Chagos', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (184, 'Asia/Baghdad', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (185, 'Asia/Tehran', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (186, 'Atlantic/Reykjavik', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (187, 'Europe/Rome', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (188, 'America/Jamaica', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (189, 'Asia/Amman', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (190, 'Asia/Tokyo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (191, 'Africa/Nairobi', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (192, 'Asia/Bishkek', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (193, 'Asia/Phnom_Penh', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (194, 'Pacific/Tarawa', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (195, 'Pacific/Enderbury', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (196, 'Pacific/Kiritimati', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (197, 'Indian/Comoro', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (198, 'America/St_Kitts', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (199, 'Asia/Pyongyang', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (200, 'Asia/Seoul', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (201, 'Asia/Kuwait', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (202, 'America/Cayman', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (203, 'Asia/Almaty', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (204, 'Asia/Qyzylorda', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (205, 'Asia/Aqtobe', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (206, 'Asia/Aqtau', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (207, 'Asia/Oral', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (208, 'Asia/Vientiane', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (209, 'Asia/Beirut', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (210, 'America/St_Lucia', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (211, 'Europe/Vaduz', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (212, 'Asia/Colombo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (213, 'Africa/Monrovia', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (214, 'Africa/Maseru', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (215, 'Europe/Vilnius', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (216, 'Europe/Luxembourg', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (217, 'Europe/Riga', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (218, 'Africa/Tripoli', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (219, 'Africa/Casablanca', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (220, 'Europe/Monaco', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (221, 'Europe/Chisinau', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (222, 'Indian/Antananarivo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (223, 'Pacific/Majuro', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (224, 'Pacific/Kwajalein', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (225, 'Europe/Skopje', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (226, 'Africa/Bamako', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (227, 'Asia/Rangoon', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (228, 'Asia/Ulaanbaatar', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (229, 'Asia/Hovd', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (230, 'Asia/Choibalsan', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (231, 'Asia/Macau', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (232, 'Pacific/Saipan', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (233, 'America/Martinique', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (234, 'Africa/Nouakchott', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (235, 'America/Montserrat', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (236, 'Europe/Malta', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (237, 'Indian/Mauritius', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (238, 'Indian/Maldives', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (239, 'Africa/Blantyre', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (240, 'America/Mexico_City', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (241, 'America/Cancun', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (242, 'America/Merida', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (243, 'America/Monterrey', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (244, 'America/Mazatlan', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (245, 'America/Chihuahua', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (246, 'America/Hermosillo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (247, 'America/Tijuana', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (248, 'Asia/Kuala_Lumpur', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (249, 'Asia/Kuching', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (250, 'Africa/Maputo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (251, 'Africa/Windhoek', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (252, 'Pacific/Noumea', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (253, 'Africa/Niamey', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (254, 'Pacific/Norfolk', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (255, 'Africa/Lagos', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (256, 'America/Managua', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (257, 'Europe/Amsterdam', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (258, 'Europe/Oslo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (259, 'Asia/Katmandu', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (260, 'Pacific/Nauru', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (261, 'Pacific/Niue', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (262, 'Pacific/Auckland', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (263, 'Pacific/Chatham', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (264, 'Asia/Muscat', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (265, 'America/Panama', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (266, 'America/Lima', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (267, 'Pacific/Tahiti', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (268, 'Pacific/Marquesas', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (269, 'Pacific/Gambier', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (270, 'Pacific/Port_Moresby', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (271, 'Asia/Manila', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (272, 'Asia/Karachi', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (273, 'Europe/Warsaw', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (274, 'America/Miquelon', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (275, 'Pacific/Pitcairn', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (276, 'America/Puerto_Rico', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (277, 'Asia/Gaza', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (278, 'Europe/Lisbon', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (279, 'Atlantic/Madeira', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (280, 'Atlantic/Azores', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (281, 'Pacific/Palau', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (282, 'America/Asuncion', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (283, 'Asia/Qatar', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (284, 'Indian/Reunion', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (285, 'Europe/Bucharest', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (286, 'Europe/Kaliningrad', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (287, 'Europe/Moscow', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (288, 'Europe/Samara', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (289, 'Asia/Yekaterinburg', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (290, 'Asia/Omsk', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (291, 'Asia/Novosibirsk', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (292, 'Asia/Krasnoyarsk', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (293, 'Asia/Irkutsk', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (294, 'Asia/Yakutsk', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (295, 'Asia/Vladivostok', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (296, 'Asia/Sakhalin', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (297, 'Asia/Magadan', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (298, 'Asia/Kamchatka', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (299, 'Asia/Anadyr', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (300, 'Africa/Kigali', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (301, 'Asia/Riyadh', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (302, 'Pacific/Guadalcanal', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (303, 'Indian/Mahe', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (304, 'Africa/Khartoum', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (305, 'Europe/Stockholm', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (306, 'Asia/Singapore', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (307, 'Atlantic/St_Helena', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (308, 'Europe/Ljubljana', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (309, 'Arctic/Longyearbyen', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (310, 'Atlantic/Jan_Mayen', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (311, 'Europe/Bratislava', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (312, 'Africa/Freetown', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (313, 'Europe/San_Marino', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (314, 'Africa/Dakar', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (315, 'Africa/Mogadishu', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (316, 'America/Paramaribo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (317, 'Africa/Sao_Tome', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (318, 'America/El_Salvador', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (319, 'Asia/Damascus', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (320, 'Africa/Mbabane', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (321, 'America/Grand_Turk', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (322, 'Africa/Ndjamena', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (323, 'Indian/Kerguelen', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (324, 'Africa/Lome', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (325, 'Asia/Bangkok', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (326, 'Asia/Dushanbe', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (327, 'Pacific/Fakaofo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (328, 'Asia/Dili', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (329, 'Asia/Ashgabat', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (330, 'Africa/Tunis', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (331, 'Pacific/Tongatapu', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (332, 'Europe/Istanbul', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (333, 'America/Port_of_Spain', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (334, 'Pacific/Funafuti', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (335, 'Asia/Taipei', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (336, 'Africa/Dar_es_Salaam', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (337, 'Europe/Kiev', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (338, 'Europe/Uzhgorod', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (339, 'Europe/Zaporozhye', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (340, 'Europe/Simferopol', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (341, 'Africa/Kampala', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (342, 'Pacific/Johnston', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (343, 'Pacific/Midway', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (344, 'Pacific/Wake', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (345, 'America/New_York', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (346, 'America/Detroit', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (347, 'America/Kentucky/Louisville', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (348, 'America/Kentucky/Monticello', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (349, 'America/Indiana/Indianapolis', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (350, 'America/Indiana/Marengo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (351, 'America/Indiana/Knox', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (352, 'America/Indiana/Vevay', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (353, 'America/Chicago', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (354, 'America/Menominee', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (355, 'America/North_Dakota/Center', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (356, 'America/Denver', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (357, 'America/Boise', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (358, 'America/Shiprock', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (359, 'America/Phoenix', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (360, 'America/Los_Angeles', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (361, 'America/Anchorage', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (362, 'America/Juneau', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (363, 'America/Yakutat', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (364, 'America/Nome', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (365, 'America/Adak', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (366, 'Pacific/Honolulu', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (367, 'America/Montevideo', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (368, 'Asia/Samarkand', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (369, 'Asia/Tashkent', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (370, 'Europe/Vatican', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (371, 'America/St_Vincent', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (372, 'America/Caracas', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (373, 'America/Tortola', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (374, 'America/St_Thomas', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (375, 'Asia/Saigon', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (376, 'Pacific/Efate', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (377, 'Pacific/Wallis', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (378, 'Pacific/Apia', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (379, 'Asia/Aden', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (380, 'Indian/Mayotte', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (381, 'Africa/Johannesburg', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (382, 'Africa/Lusaka', 0, 0)";
$queries[] = "INSERT INTO {$pre}timezones VALUES (383, 'Africa/Harare', 0, 0)";

$queries[] = "ALTER TABLE {$pre}posts CHANGE post_ip post_ip INT UNSIGNED NOT NULL DEFAULT '0'";
$queries[] = "ALTER TABLE {$pre}active CHANGE active_ip active_ip INT UNSIGNED NOT NULL DEFAULT '0'";
$queries[] = "ALTER TABLE {$pre}settings ADD settings_tos text AFTER settings_id";
$queries[] = "ALTER TABLE {$pre}users ADD user_title_custom TINYINT(1) UNSIGNED NOT NULL AFTER user_title";
$queries[] = "ALTER TABLE {$pre}users MODIFY user_aim VARCHAR(32) NOT NULL";
$queries[] = "ALTER TABLE {$pre}users ADD user_gtalk varchar(32) NOT NULL AFTER user_aim";
// Update the users table so the guest has a user level of 1. To avoid problems where guests still have a user level of 0
$queries[] = "UPDATE {$pre}users SET user_level = 1 WHERE user_id = 1";
// Update forum table to include subcat data
$queries[] = "ALTER TABLE {$pre}forums ADD forum_subcat tinyint(1) NOT NULL AFTER forum_lastpost";

// Alter the user timezones in careful steps
$queries[] = "ALTER TABLE {$pre}users CHANGE user_timezone user_timezone FLOAT(4,1) NOT NULL DEFAULT '0.0'";
// Adjust timezones to new settings (not 100% accurate. Just a guess!)
$queries[] = "UPDATE {$pre}users SET user_timezone=223 WHERE user_timezone=12.0"; // Pacific/Majuro
$queries[] = "UPDATE {$pre}users SET user_timezone=297 WHERE user_timezone=11.0"; // Asia/Magadan
$queries[] = "UPDATE {$pre}users SET user_timezone=168 WHERE user_timezone=10.0"; // Pacific/Guam
$queries[] = "UPDATE {$pre}users SET user_timezone=41 WHERE user_timezone=9.5";   // Australia/Darwin
$queries[] = "UPDATE {$pre}users SET user_timezone=190 WHERE user_timezone=9.0";  // Asia/Tokyo
$queries[] = "UPDATE {$pre}users SET user_timezone=171 WHERE user_timezone=8.0";  // Asia/Hong_Kong
$queries[] = "UPDATE {$pre}users SET user_timezone=325 WHERE user_timezone=7.0";  // Asia/Bangkok
$queries[] = "UPDATE {$pre}users SET user_timezone=48 WHERE user_timezone=6.0";   // Asia/Dhaka
$queries[] = "UPDATE {$pre}users SET user_timezone=182 WHERE user_timezone=5.5";  // Asia/Calcutta
$queries[] = "UPDATE {$pre}users SET user_timezone=238 WHERE user_timezone=5.0";  // Indian/Maldives
$queries[] = "UPDATE {$pre}users SET user_timezone=185 WHERE user_timezone=3.5";  // Asia/Tehran
$queries[] = "UPDATE {$pre}users SET user_timezone=287 WHERE user_timezone=3.0";  // Europe/Moscow
$queries[] = "UPDATE {$pre}users SET user_timezone=135 WHERE user_timezone=2.0";  // Africa/Cairo
$queries[] = "UPDATE {$pre}users SET user_timezone=257 WHERE user_timezone=1.0";  // Europe/Amsterdam
$queries[] = "UPDATE {$pre}users SET user_timezone=151 WHERE user_timezone=0.0";  // Europe/London
$queries[] = "UPDATE {$pre}users SET user_timezone=280 WHERE user_timezone=-1.0"; // Atlantic/Azores
$queries[] = "UPDATE {$pre}users SET user_timezone=159 WHERE user_timezone=-2.0"; // America/Scoresbysund
$queries[] = "UPDATE {$pre}users SET user_timezone=20 WHERE user_timezone=-3.0";  // America/Argentina/Buenos_Aires
$queries[] = "UPDATE {$pre}users SET user_timezone=78 WHERE user_timezone=-3.5";  // America/St_Johns
$queries[] = "UPDATE {$pre}users SET user_timezone=55 WHERE user_timezone=-4.0";  // Atlantic/Bermuda
$queries[] = "UPDATE {$pre}users SET user_timezone=83 WHERE user_timezone=-5.0";  // America/Toronto
$queries[] = "UPDATE {$pre}users SET user_timezone=240 WHERE user_timezone=-6.0"; // America/Mexico_City
$queries[] = "UPDATE {$pre}users SET user_timezone=356 WHERE user_timezone=-7.0"; // America/Denver
$queries[] = "UPDATE {$pre}users SET user_timezone=360 WHERE user_timezone=-8.0"; // America/Los_Angeles
$queries[] = "UPDATE {$pre}users SET user_timezone=275 WHERE user_timezone=-9.0"; // Pacific/Pitcairn
$queries[] = "UPDATE {$pre}users SET user_timezone=366 WHERE user_timezone=-10.0";// Pacific/Honolulu
$queries[] = "UPDATE {$pre}users SET user_timezone=343 WHERE user_timezone=-11.0";// Pacific/Midway
$queries[] = "UPDATE {$pre}users SET user_timezone=262 WHERE user_timezone=-12.0";// Pacific/Auckland

// Do these last to avoid conflicts
$queries[] = "UPDATE {$pre}users SET user_timezone=2 WHERE user_timezone=4.0";    // Asia/Dubai
$queries[] = "UPDATE {$pre}users SET user_timezone=3 WHERE user_timezone=4.5";    // Asia/Kabul

// Adjust the table to it's final point
$queries[] = "ALTER TABLE {$pre}users CHANGE user_timezone user_timezone SMALLINT(3) NOT NULL DEFAULT '151'";
?>
