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
    'PM_FOLDER',
    'PM_FOLDER_MESSAGE',
    'PM_NO_MESSAGES',
    'PM_SEND',
    'CP_PROFILE',
    'FORUM_MAIN',
    'REGISTER_MAIN',
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

?>
