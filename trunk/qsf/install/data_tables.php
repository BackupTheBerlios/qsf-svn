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
  active_ip varchar(15) NOT NULL default 'Unknown',
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
  post_ip varchar(15) NOT NULL default 'Unknown',
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
  user_timezone float(3,1) NOT NULL default '0.0',
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
$sets['servertime'] = -8;
$sets['topics'] = 0;
$sets['topics_per_page'] = 20;
$sets['vote_after_results'] = 0;
$sets['default_skin'] = 'default';
$sets['default_email_shown'] = 0;
$sets['default_lang'] = 'en';
$sets['default_group'] = 2;
$sets['default_timezone'] = -8;
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
$queries[] = "INSERT INTO {$pre}users (user_id, user_name, user_password, user_joined, user_level, user_title, user_group, user_skin, user_language, user_avatar, user_avatar_type, user_avatar_width, user_avatar_height, user_email, user_email_show, user_email_form, user_birthday, user_timezone, user_homepage, user_posts, user_location, user_icq, user_msn, user_aim, user_pm, user_active, user_yahoo, user_interests, user_signature, user_lastvisit, user_lastpost, user_view_avatars, user_view_signatures, user_view_emoticons, user_perms) VALUES (1, 'Guest', '', 0, 1, '', 3, 'default', 'en', '', 'none', 0, 0, '', 0, 1, '0000-00-00', '0.0', '', 0, '', 0, '', '', 0, 1, '', '', '', 0, 0, 1, 1, 1, '')";
?>