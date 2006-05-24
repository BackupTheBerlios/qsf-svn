<?php
/**
 * Quicksilver Forums
 * Copyright (c) 2005-2006 The Quicksilver Forums Development Team
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

// Upgrade from 1.2.1 to 1.2.2

// Template changes
$need_templates = array(
	// Added templates
	TOPIC_POST_ATTACHMENT,
	BOARD_USERS,
	// Changed templates
	TOPIC_MAIN,
	RSSFEED_ITEM,
	CP_PREFS,
	BOARD_MAIN
	);

// Permission changes	
// $new_permissions['new_perm'] = true;

// Queries to run
$queries[] = "ALTER TABLE {$pre}users ADD user_posts_page tinyint(2) unsigned NOT NULL DEFAULT '0' AFTER user_view_emoticons";
$queries[] = "ALTER TABLE {$pre}users ADD user_topics_page tinyint(2) unsigned NOT NULL DEFAULT '0' AFTER user_view_emoticons";
?>