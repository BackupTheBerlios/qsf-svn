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

$need_templates = true;

$queries[] = "CREATE TABLE {$pre}logs (
log_id int(10) unsigned NOT NULL auto_increment,
log_user int(10) unsigned NOT NULL default '0',
log_time int(10) unsigned NOT NULL default '0',
log_action varchar(20) NOT NULL default '',
log_data1 int(12) unsigned NOT NULL default '0',
log_data2 smallint(4) unsigned NOT NULL default '0',
log_data3 smallint(4) unsigned NOT NULL default '0',
PRIMARY KEY  (log_id)
) TYPE=MyISAM";

$queries[] = "CREATE TABLE {$pre}settings (
settings_id tinyint(2) unsigned NOT NULL auto_increment,
settings_data text NOT NULL,
PRIMARY KEY  (settings_id)
) TYPE=MyISAM";

$this->sets['attach_types'] = array('jpg', 'gif', 'png', 'bmp', 'zip', 'tgz', 'gz', 'rar');
$this->sets['default_skin'] = 'default';
$this->sets['register_image'] = 0;
 
$settings = addslashes(serialize($this->sets));
$queries[] = "INSERT INTO {$pre}settings (settings_id, settings_data) VALUES (1, '{$settings}')";

$queries[] = "ALTER TABLE {$pre}users ADD user_active tinyint(1) unsigned NOT NULL default '1'";
?>
