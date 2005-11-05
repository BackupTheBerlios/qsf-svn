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
	exit('Use index.php to install.');
}

$queries[] = "DROP TABLE IF EXISTS {$pre}active";
$queries[] = "CREATE TABLE {$pre}active (
  active_id int(10) unsigned NOT NULL default '0',
  active_ip INT UNSIGNED NOT NULL default '0',
  active_user_agent varchar(100) NOT NULL default 'Unknown',
  active_action varchar(32) NOT NULL default '',
  active_item int(10) unsigned NOT NULL default '0',
  active_time int(10) unsigned NOT NULL default '0',
  active_session varchar(32) NOT NULL default '',
  UNIQUE KEY active_session (active_session),
  UNIQUE KEY active_ip (active_ip)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}attach";
$queries[] = "CREATE TABLE {$pre}attach (
  attach_id int(12) unsigned NOT NULL auto_increment,
  attach_file varchar(32) NOT NULL default '',
  attach_name varchar(255) NOT NULL default '',
  attach_post int(12) unsigned NOT NULL default '0',
  attach_downloads int(10) unsigned NOT NULL default '0',
  attach_size int(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (attach_id),
  KEY attach_post (attach_post)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}forums";
$queries[] = "CREATE TABLE {$pre}forums (
  forum_id smallint(4) unsigned NOT NULL auto_increment,
  forum_parent smallint(4) unsigned NOT NULL default '0',
  forum_tree varchar(255) NOT NULL default '',
  forum_name varchar(255) NOT NULL default '',
  forum_position smallint(4) unsigned NOT NULL default '0',
  forum_description varchar(255) NOT NULL default '',
  forum_topics int(10) unsigned NOT NULL default '0',
  forum_replies int(12) unsigned NOT NULL default '0',
  forum_lastpost int(12) unsigned NOT NULL default '0',
  forum_subcat tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (forum_id),
  KEY Parent (forum_parent)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}groups";
$queries[] = "CREATE TABLE {$pre}groups (
  group_id tinyint(3) unsigned NOT NULL auto_increment,
  group_name varchar(255) NOT NULL default '',
  group_type varchar(20) NOT NULL default '',
  group_format varchar(255) NOT NULL default '%s',
  group_perms text NOT NULL,
  PRIMARY KEY  (group_id)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}help";
$queries[] = "CREATE TABLE {$pre}help (
  help_id smallint(3) NOT NULL auto_increment,
  help_title varchar(255) NOT NULL default '',
  help_article text NOT NULL,
  PRIMARY KEY  (help_id)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}logs";
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

$queries[] = "DROP TABLE IF EXISTS {$pre}membertitles";
$queries[] = "CREATE TABLE {$pre}membertitles (
  membertitle_id tinyint(3) unsigned NOT NULL auto_increment,
  membertitle_title varchar(50) NOT NULL default '',
  membertitle_posts int(10) unsigned NOT NULL default '0',
  membertitle_icon varchar(25) NOT NULL default '',
  PRIMARY KEY  (membertitle_id),
  KEY Posts (membertitle_posts)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}pmsystem";
$queries[] = "CREATE TABLE {$pre}pmsystem (
  pm_id int(10) unsigned NOT NULL auto_increment,
  pm_to int(10) unsigned NOT NULL default '0',
  pm_from int(10) unsigned NOT NULL default '0',
  pm_bcc text NOT NULL,
  pm_title varchar(255) NOT NULL default '[No Title]',
  pm_time int(10) unsigned NOT NULL default '0',
  pm_message text NOT NULL,
  pm_read tinyint(1) unsigned NOT NULL default '0',
  pm_folder tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (pm_id),
  KEY NewPMs (pm_to,pm_read,pm_folder)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}posts";
$queries[] = "CREATE TABLE {$pre}posts (
  post_id int(12) unsigned NOT NULL auto_increment,
  post_topic int(10) unsigned NOT NULL default '0',
  post_author int(10) unsigned NOT NULL default '0',
  post_emoticons tinyint(1) unsigned NOT NULL default '1',
  post_mbcode tinyint(1) unsigned NOT NULL default '1',
  post_text text NOT NULL,
  post_time int(10) unsigned NOT NULL default '0',
  post_icon varchar(32) NOT NULL default '',
  post_ip INT UNSIGNED NOT NULL default '0',
  post_edited_by varchar(32) NOT NULL default '',
  post_edited_time int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (post_id),
  KEY Topic (post_topic),
  FULLTEXT KEY post_text (post_text)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}replacements";
$queries[] = "CREATE TABLE {$pre}replacements (
  replacement_id smallint(3) unsigned NOT NULL auto_increment,
  replacement_search varchar(50) NOT NULL default '',
  replacement_replace varchar(50) NOT NULL default '',
  replacement_type varchar(15) NOT NULL default '',
  replacement_clickable tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (replacement_id),
  KEY `Type` (replacement_type)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}settings";
$queries[] = "CREATE TABLE {$pre}settings (
  settings_id tinyint(2) unsigned NOT NULL auto_increment,
  settings_tos text,
  settings_data text NOT NULL,
  PRIMARY KEY  (settings_id)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}skins";
$queries[] = "CREATE TABLE {$pre}skins (
  skin_name varchar(32) NOT NULL default '',
  skin_dir varchar(32) NOT NULL default '',
  PRIMARY KEY  (skin_dir)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}subscriptions";
$queries[] = "CREATE TABLE {$pre}subscriptions (
  subscription_id int(12) unsigned NOT NULL auto_increment,
  subscription_user int(10) unsigned NOT NULL default '0',
  subscription_type varchar(10) NOT NULL default '',
  subscription_item int(10) unsigned NOT NULL default '0',
  subscription_expire int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (subscription_id),
  KEY subscription_item (subscription_item)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}templates";
$queries[] = "CREATE TABLE {$pre}templates (
  template_skin varchar(32) NOT NULL default 'default',
  template_set varchar(20) NOT NULL default '',
  template_name varchar(36) NOT NULL default '',
  template_html text NOT NULL,
  template_displayname varchar(255) NOT NULL default '',
  template_description varchar(255) NOT NULL default '',
  template_position tinyint(2) unsigned NOT NULL default '0',
  UNIQUE KEY Piece (template_name,template_skin),
  KEY Section (template_set,template_skin)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}timezones";
$queries[] = "CREATE TABLE {$pre}timezones (
  zone_id smallint(3) unsigned NOT NULL auto_increment,
  zone_name varchar(30) NOT NULL default '',
  zone_offset int(15) NOT NULL default '0',
  zone_updated int(15) unsigned NOT NULL default '0',
  PRIMARY KEY  (zone_id),
  KEY name (zone_name)
) TYPE=MyISAM AUTO_INCREMENT=384";

$queries[] = "DROP TABLE IF EXISTS {$pre}topics";
$queries[] = "CREATE TABLE {$pre}topics (
  topic_id int(10) unsigned NOT NULL auto_increment,
  topic_forum smallint(3) unsigned NOT NULL default '0',
  topic_title varchar(75) NOT NULL default '0',
  topic_description varchar(35) NOT NULL default '',
  topic_starter int(10) unsigned NOT NULL default '0',
  topic_last_poster int(10) unsigned NOT NULL default '0',
  topic_icon varchar(32) NOT NULL default '',
  topic_edited int(10) unsigned NOT NULL default '0',
  topic_replies smallint(5) unsigned NOT NULL default '0',
  topic_views smallint(5) unsigned NOT NULL default '0',
  topic_modes int(10) unsigned NOT NULL default '0',
  topic_moved smallint(3) unsigned NOT NULL default '0',
  topic_poll_options text NOT NULL,
  PRIMARY KEY  (topic_id),
  KEY Forum (topic_forum)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}users";
$queries[] = "CREATE TABLE {$pre}users (
  user_id int(10) unsigned NOT NULL auto_increment,
  user_name varchar(255) NOT NULL default '',
  user_password varchar(32) NOT NULL default '',
  user_joined int(10) unsigned NOT NULL default '0',
  user_level tinyint(3) unsigned NOT NULL default '1',
  user_title varchar(100) NOT NULL default '',
  user_title_custom tinyint(1) unsigned NOT NULL default '0',
  user_group tinyint(3) unsigned NOT NULL default '2',
  user_skin varchar(32) NOT NULL default 'default',
  user_language varchar(6) NOT NULL default 'en',
  user_avatar varchar(150) NOT NULL default '',
  user_avatar_type enum('local','url','uploaded','none') NOT NULL default 'none',
  user_avatar_width smallint(3) unsigned NOT NULL default '0',
  user_avatar_height smallint(3) unsigned NOT NULL default '0',
  user_email varchar(100) NOT NULL default '',
  user_email_show tinyint(1) unsigned NOT NULL default '0',
  user_email_form tinyint(1) unsigned NOT NULL default '1',
  user_birthday date NOT NULL default '0000-00-00',
  user_timezone SMALLINT( 3 ) NOT NULL default '151',
  user_homepage varchar(255) NOT NULL default '',
  user_posts int(10) unsigned NOT NULL default '0',
  user_location varchar(100) NOT NULL default '',
  user_icq int(16) unsigned NOT NULL default '0',
  user_msn varchar(32) NOT NULL default '',
  user_aim varchar(32) NOT NULL default '',
  user_gtalk varchar(32) NOT NULL default '',
  user_pm tinyint(1) unsigned NOT NULL default '1',
  user_active tinyint(1) unsigned NOT NULL default '1',
  user_yahoo varchar(100) NOT NULL default '',
  user_interests varchar(255) NOT NULL default '',
  user_signature text NOT NULL,
  user_lastvisit int(10) unsigned NOT NULL default '0',
  user_lastpost int(10) unsigned NOT NULL default '0',
  user_lastpm int(10) unsigned NOT NULL default '0',
  user_lastsearch int(10) unsigned NOT NULL default '0',
  user_view_avatars tinyint(1) unsigned NOT NULL default '1',
  user_view_signatures tinyint(1) unsigned NOT NULL default '1',
  user_view_emoticons tinyint(1) unsigned NOT NULL default '1',
  user_perms text NOT NULL,
  PRIMARY KEY  (user_id)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}votes";
$queries[] = "CREATE TABLE {$pre}votes (
  vote_user int(10) unsigned NOT NULL default '0',
  vote_topic int(10) unsigned NOT NULL default '0',
  vote_option smallint(4) NOT NULL default '-1',
  PRIMARY KEY  (vote_user,vote_topic)
) TYPE=MyISAM";

$queries[] = "INSERT INTO {$pre}groups (group_id, group_name, group_type, group_format, group_perms) VALUES (1, 'Administrators', 'ADMIN', '<b>%s</b>', 'a:39:{s:10:\"board_view\";b:1;s:17:\"board_view_closed\";b:1;s:11:\"do_anything\";b:1;s:9:\"email_use\";b:1;s:10:\"forum_view\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:8:\"is_admin\";b:1;s:10:\"pm_noflood\";b:1;s:11:\"poll_create\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:9:\"poll_vote\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:11:\"post_attach\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:20:\"post_attach_download\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:11:\"post_create\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:11:\"post_delete\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:15:\"post_delete_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:9:\"post_edit\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:13:\"post_edit_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:12:\"post_noflood\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:11:\"post_viewip\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:14:\"search_noflood\";b:1;s:12:\"topic_create\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:12:\"topic_delete\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:16:\"topic_delete_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:10:\"topic_edit\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:14:\"topic_edit_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:12:\"topic_global\";b:1;s:10:\"topic_lock\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:14:\"topic_lock_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:10:\"topic_move\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:14:\"topic_move_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:9:\"topic_pin\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:13:\"topic_pin_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:11:\"topic_split\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:15:\"topic_split_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:12:\"topic_unlock\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:16:\"topic_unlock_mod\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:16:\"topic_unlock_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:11:\"topic_unpin\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:15:\"topic_unpin_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:10:\"topic_view\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}}')";
$queries[] = "INSERT INTO {$pre}groups (group_id, group_name, group_type, group_format, group_perms) VALUES (2, 'Members', 'MEMBER', '%s', 'a:39:{s:10:\"board_view\";b:1;s:17:\"board_view_closed\";b:0;s:11:\"do_anything\";b:1;s:9:\"email_use\";b:1;s:10:\"forum_view\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:8:\"is_admin\";b:0;s:10:\"pm_noflood\";b:0;s:11:\"poll_create\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:9:\"poll_vote\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:11:\"post_attach\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:20:\"post_attach_download\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:11:\"post_create\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:11:\"post_delete\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:15:\"post_delete_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:9:\"post_edit\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:13:\"post_edit_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:12:\"post_noflood\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"post_viewip\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"search_noflood\";b:0;s:12:\"topic_create\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:12:\"topic_delete\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:16:\"topic_delete_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:10:\"topic_edit\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"topic_edit_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:12:\"topic_global\";b:0;s:10:\"topic_lock\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"topic_lock_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:10:\"topic_move\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"topic_move_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:9:\"topic_pin\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:13:\"topic_pin_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"topic_split\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:15:\"topic_split_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:12:\"topic_unlock\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:16:\"topic_unlock_mod\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:16:\"topic_unlock_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:11:\"topic_unpin\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:15:\"topic_unpin_own\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:10:\"topic_view\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}}')";
$queries[] = "INSERT INTO {$pre}groups (group_id, group_name, group_type, group_format, group_perms) VALUES (3, 'Guests', 'GUEST', '%s', 'a:39:{s:10:\"board_view\";b:1;s:17:\"board_view_closed\";b:0;s:11:\"do_anything\";b:1;s:9:\"email_use\";b:0;s:10:\"forum_view\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:8:\"is_admin\";b:0;s:10:\"pm_noflood\";b:0;s:11:\"poll_create\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:9:\"poll_vote\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"post_attach\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:20:\"post_attach_download\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"post_create\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:11:\"post_delete\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:15:\"post_delete_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:9:\"post_edit\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:13:\"post_edit_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:12:\"post_noflood\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"post_viewip\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"search_noflood\";b:0;s:12:\"topic_create\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:12:\"topic_delete\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:16:\"topic_delete_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:10:\"topic_edit\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"topic_edit_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:12:\"topic_global\";b:0;s:10:\"topic_lock\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"topic_lock_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:10:\"topic_move\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"topic_move_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:9:\"topic_pin\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:13:\"topic_pin_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"topic_split\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:15:\"topic_split_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:12:\"topic_unlock\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:16:\"topic_unlock_mod\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:16:\"topic_unlock_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"topic_unpin\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:15:\"topic_unpin_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:10:\"topic_view\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}}')";
$queries[] = "INSERT INTO {$pre}groups (group_id, group_name, group_type, group_format, group_perms) VALUES (4, 'Banned', 'BANNED', '%s', 'a:39:{s:10:\"board_view\";b:0;s:17:\"board_view_closed\";b:0;s:11:\"do_anything\";b:0;s:9:\"email_use\";b:0;s:10:\"forum_view\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:8:\"is_admin\";b:0;s:10:\"pm_noflood\";b:0;s:11:\"poll_create\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:9:\"poll_vote\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"post_attach\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:20:\"post_attach_download\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"post_create\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"post_delete\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:15:\"post_delete_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:9:\"post_edit\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:13:\"post_edit_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:12:\"post_noflood\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"post_viewip\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"search_noflood\";b:0;s:12:\"topic_create\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:12:\"topic_delete\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:16:\"topic_delete_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:10:\"topic_edit\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"topic_edit_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:12:\"topic_global\";b:0;s:10:\"topic_lock\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"topic_lock_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:10:\"topic_move\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"topic_move_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:9:\"topic_pin\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:13:\"topic_pin_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"topic_split\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:15:\"topic_split_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:12:\"topic_unlock\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:16:\"topic_unlock_mod\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:16:\"topic_unlock_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"topic_unpin\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:15:\"topic_unpin_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:10:\"topic_view\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}}')";
$queries[] = "INSERT INTO {$pre}groups (group_id, group_name, group_type, group_format, group_perms) VALUES (5, 'Awaiting Activation', 'AWAIT', '%s', 'a:39:{s:10:\"board_view\";b:1;s:17:\"board_view_closed\";b:0;s:11:\"do_anything\";b:1;s:9:\"email_use\";b:0;s:10:\"forum_view\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}s:8:\"is_admin\";b:0;s:10:\"pm_noflood\";b:0;s:11:\"poll_create\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:9:\"poll_vote\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"post_attach\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:20:\"post_attach_download\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"post_create\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"post_delete\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:15:\"post_delete_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:9:\"post_edit\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:13:\"post_edit_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:12:\"post_noflood\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"post_viewip\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"search_noflood\";b:0;s:12:\"topic_create\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:12:\"topic_delete\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:16:\"topic_delete_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:10:\"topic_edit\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"topic_edit_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:12:\"topic_global\";b:0;s:10:\"topic_lock\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"topic_lock_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:10:\"topic_move\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:14:\"topic_move_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:9:\"topic_pin\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:13:\"topic_pin_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"topic_split\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:15:\"topic_split_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:12:\"topic_unlock\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:16:\"topic_unlock_mod\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:16:\"topic_unlock_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:11:\"topic_unpin\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:15:\"topic_unpin_own\";a:3:{i:1;b:0;i:2;b:0;i:4;b:0;}s:10:\"topic_view\";a:3:{i:1;b:1;i:2;b:1;i:4;b:1;}}')";
$queries[] = "INSERT INTO {$pre}help (help_id, help_title, help_article) VALUES (1, 'What is MbCode and how do I use it?', '
MbCode is a way to format your posts without HTML.  You can use MbCode by pressing the buttons above the message text area, but here is a short help guide.
<hr />

<b>Bold</b><br />
[b]This text will be bold.[/b]<br />
Text enclosed in these tags will be <b>bold</b>.<br />
<hr />

<b>Italics</b><br />
[i]This text will be italicized.[/i]<br />
Text enclosed in these tags will be <i>italicized</i>.<br />
<hr />

<b>Underline</b><br />
[u]This text will be underlined.[/u]<br />
Text enclosed in these tags will be <span style=\'text-decoration:underline\'>underlined</span>.<br />
<hr />

<b>Strikethrough</b><br />
[s]This text will have a strike through it.[/s]<br />
Text enclosed in these tags will be <span style=\'text-decoration:line-through\'>crossed out</span>.<br />
<hr />

<b>PHP</b><br />
[php]Code here.[/php]<br />
The PHP tag allows you to add PHP code to your post. The code will show up with line numbers and syntax highlighting.<br />
<hr />

<b>Code</b><br />
[code]Code here.[/code]<br />
A more generic code tag than the PHP tag. You can add any type of code (such as HTML) or text into the tag and it will display exactly as you entered it.<br />
<hr />

<b>Quote</b><br />
[quote]Quote here.[/quote]<br />
Allows you to insert quoted text into a post.<br />
<hr />

<b>URL</b><br />[url=http://www.quicksilverforums.com]Quicksilver Forums[/url]<br />
Allows you to insert a link into a post. All you normally need to do to use this tag is add a URL and description into two popup prompts.<br />
<hr />

<b>Email</b><br />
[email=mb@example.com]Email me![/email]<br />
This allows you to insert a link to an email address into a post.<br />
<hr />

<b>Image</b><br />
[img]http://quicksilverforums.com/skins/default/logo.png[/img]<br />
This tag allows you to add an image into your post.<br />
<hr />

<b>Color</b><br />
[color=red]This text will be <span style=\'color:#ff0000\'>red</span>.[/color]<br />
Text enclosed in the color tag will be a color you specify. You can select the color using the drop-down list at the post screen.<br />
<hr />

<b>Size</b><br />
[size=3]This text will be <span style=\'font-size:16px\'>large</span>.[/size]<br />
This tag changes the font size of the text enclosed in this tag to a specified size.<br />
<hr />

<b>Font</b><br />
[font=Tahoma]This text will be <span style=\'font-family:Tahoma\'>Tahoma</span>.[/font]<br />
This allows you to change the font of text enclosed in this tag to a specified font.
')";

$queries[] = "INSERT INTO {$pre}help (help_id, help_title, help_article) VALUES (2, '
Why should I register?', 'Registration will allow you to use all of the features on this board.  Registration will allow you to customize your account, edit your profile, use the private messenger to contact other users, and may open up new posting rights and forums.<br /><br />

Registration is completely free and very fast.  Sometimes the administrator may require you to verify your account in an email, so be sure you provide a correct email address! <br /><br />

Once you are registered, you can start using the full features of the board.
')";
$queries[] = "INSERT INTO {$pre}membertitles (membertitle_id, membertitle_title, membertitle_posts, membertitle_icon) VALUES (1, 'Newbie', 0, '1.png')";
$queries[] = "INSERT INTO {$pre}membertitles (membertitle_id, membertitle_title, membertitle_posts, membertitle_icon) VALUES (2, 'Member', 25, '2.png')";
$queries[] = "INSERT INTO {$pre}membertitles (membertitle_id, membertitle_title, membertitle_posts, membertitle_icon) VALUES (3, 'Droplet', 100, '3.png')";
$queries[] = "INSERT INTO {$pre}membertitles (membertitle_id, membertitle_title, membertitle_posts, membertitle_icon) VALUES (4, 'Puddle', 250, '4.png')";
$queries[] = "INSERT INTO {$pre}membertitles (membertitle_id, membertitle_title, membertitle_posts, membertitle_icon) VALUES (5, 'Pool', 500, '5.png')";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (1, 'shit', '', 'censor', 0)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (2, 'fuck', '', 'censor', 0)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (3, ';)', 'wink.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (4, ':thinking:', 'thinking.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (5, ':p', 'tongue.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (6, ':rolleyes:', 'rolleyes.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (7, ':(', 'sad.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (8, ':D', 'smile.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (9, ':)', 'smirk.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (10, ':stare:', 'stare.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (11, ':o', 'surprised.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (12, ':mad:', 'mad.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (13, 'B)', 'cool.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (14, ':cyclops:', 'cyclops.gif', 'emoticon', 1)";

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

// Build settings step by step
$sets = array();
$sets['admin_incoming'] = 'root';
$sets['admin_outgoing'] = 'root';
$sets['attach_types'] = array('jpg', 'gif', 'png', 'bmp', 'zip', 'tgz', 'gz', 'rar');
$sets['attach_upload_size'] = 25600;
$sets['avatar_height'] = 75;
$sets['avatar_upload_size'] = 51200;
$sets['avatar_width'] = 75;
$sets['banned_ips'] = array();
$sets['clickable_per_row'] = 5;
$sets['closed'] = 0;
$sets['closedtext'] = 'We are upgrading to the latest version of Quicksilver Forums. Please check back later.';
$sets['cookie_path'] = '/';
$sets['cookie_prefix'] = 'qsf_';
$sets['emailactivation'] = 1;
$sets['flash_avs'] = 1;
$sets['flood_time'] = 30;
$sets['forum_name'] = 'Quicksilver Forums';
$sets['hot_limit'] = 20;
$sets['loc_of_board'] = '';
$sets['last_member'] = '';
$sets['last_member_id'] = 0;
$sets['link_target'] = '_blank';
$sets['logintime'] = 31536000;
$sets['mailserver'] = 'localhost';
$sets['max_load'] = 0;
$sets['mostonline'] = 0;
$sets['mostonlinetime'] = 0;
$sets['output_buffer'] = 1;
$sets['posts'] = 0;
$sets['posts_per_page'] = 15;
$sets['register_image'] = 0;
$sets['servertime'] = 151;
$sets['topics'] = 0;
$sets['topics_per_page'] = 20;
$sets['vote_after_results'] = 0;
$sets['default_skin'] = 'default';
$sets['default_email_shown'] = 0;
$sets['default_lang'] = 'en';
$sets['default_group'] = 2;
$sets['default_timezone'] = 151;
$sets['default_pm'] = 1;
$sets['default_view_avatars'] = 1;
$sets['default_view_sigs'] = 1;
$sets['default_view_emots'] = 1;
$sets['flood_time_pm'] = 30;
$sets['flood_time_search'] = 10;
$sets['members'] = 0;
$sets['spider_active'] = 1;
$sets['spider_agent'] = array(
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
$sets['spider_name'] = array(
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
$sets['rss_feed_title'] = '';
$sets['rss_feed_desc'] = '';
$sets['rss_feed_posts'] = 5;
$sets['rss_feed_time'] = 60;
$sets['optional_modules'] = array(
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
$settings = addslashes(serialize($sets));
$queries[] = "INSERT INTO {$pre}settings (settings_id, settings_data) VALUES (1, '{$settings}')";
$queries[] = "INSERT INTO {$pre}skins (skin_name, skin_dir) VALUES ('Candy Corn', 'default')";
$queries[] = "INSERT INTO {$pre}users (user_id, user_name, user_password, user_joined, user_level, user_title, user_group, user_skin, user_language, user_avatar, user_avatar_type, user_avatar_width, user_avatar_height, user_email, user_email_show, user_email_form, user_birthday, user_timezone, user_homepage, user_posts, user_location, user_icq, user_msn, user_aim, user_pm, user_active, user_yahoo, user_interests, user_signature, user_lastvisit, user_lastpost, user_view_avatars, user_view_signatures, user_view_emoticons, user_perms) VALUES (1, 'Guest', '', 0, 1, '', 3, 'default', 'en', '', 'none', 0, 0, '', 0, 1, '0000-00-00', '360', '', 0, '', 0, '', '', 0, 1, '', '', '', 0, 0, 1, 1, 1, '')";
?>