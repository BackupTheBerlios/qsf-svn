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

// Upgrade from 1.1.5 to 1.1.6

$need_templates = array(
	'MAIN',				// Changed templates
	'SEARCH_RESULTS_MEMBER_INFO',
	'SEARCH_MAIN',
	'BOARD_LAST_POST_BOX',
	'BOARD_CATEGORY',
	'CP_AVATAR',
	'FORUM_TOPIC',
	'FORUM_TOPICS_MAIN',
	'PM_FOLDER',
	'PM_VIEW',
	'RECENT_MAIN',
	'RECENT_TOPIC',
	'ADMIN_INDEX',
	'ADMIN_HOME',
	'ADMIN_EDIT_TEMPLATE',
	'ADMIN_MASS_MAIL',
	'POST_TOPIC',
	'POST_BOX_PLAIN',
	'POST_BOX_RICH',
	'POST_REPLY',
	'POST_POLL',
	'MAIN_MESSAGE',
	'ADMIN_MESSAGE',
	'ADMIN_TITLE_ENTRY_MOD',	// New templates
	'ADMIN_DELETE_TEMPLATE',
	'ADMIN_EDIT_TEMPLATE_ENTRY',
	'ADMIN_TEMPLATE_ENTRY',
	'ADMIN_TITLE_ENTRY',
	'ADMIN_TEMPLATE_DELETE_CONTENTS',
	'ADMIN_EMOTICONS_ENTRY',
	'ADMIN_EMOTICONS_ENTRY_MOD',
	'ADMIN_MOD_LOGS_ENTRY',
	'ADMIN_MEMBER_EDIT',
	'POST_MESSAGE_ICONS',
	'POST_CLICKABLE_SMILIES'
);

?>
