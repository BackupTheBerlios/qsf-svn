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

// Upgrade from 1.1.9 to 1.2.0
$need_templates = array(
	'TOPIC_QUICKREPLY',	// Added templates
	'CP_PREFS',		// Changed templates
	'TOPIC_MAIN',
	'MAIN_HEADER_GUEST',
	'MAIN_HEADER_MEMBER',
	'POST_CLICKABLE_SMILIES',
	'SEARCH_MAIN',
	'BOARD_LAST_POST_BOX',
	'ADMIN_INDEX',
	'ADMIN_FORUM_ORDER',
	'ADMIN_MASS_MAIL',
	'ADMIN_EDIT_BOARD_SETTINGS'
	);
	
$new_permissions['post_inc_userposts'] = true;

$queries[] = "DROP TABLE IF EXISTS {$pre}readmarks";
$queries[] = "CREATE TABLE {$pre}readmarks (
  readmark_user int(10) unsigned NOT NULL default '0',
  readmark_topic int(10) unsigned NOT NULL default '0',
  readmark_lastread int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (readmark_user,readmark_topic)
) TYPE=MyISAM";

// Set up a seperate column for 'mark all read'
$queries[] = "ALTER TABLE {$pre}users ADD user_lastallread int(10) unsigned NOT NULL default '0' AFTER user_lastvisit";
$queries[] = "UPDATE {$pre}users SET user_lastallread=user_lastvisit";

?>
