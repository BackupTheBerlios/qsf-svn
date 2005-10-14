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

$time_now   = explode(' ', microtime());
$time_start = $time_now[1] + $time_now[0];

require '../settings.php';

if (!$set['installed']) {
	header('Location: ../install/index.php');
}

ob_start();
session_start();

require '../func/constants.php';
require '../lib/' . $set['dbtype'] . '.php';
require '../global.php';
require '../lib/perms.php';
require '../lib/user.php';
require './admin.php';

set_error_handler('error');

error_reporting(E_ALL);
set_magic_quotes_runtime(0);

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$modules = array(
	'backup',
	'ban',
	'censoring',
	'emot_control',
	'forums',
	'groups',
	'help',
	'Admin',
	'logs',
	'mass_mail',
	'membercount',
	'member_control',
	'optimize',
	'perms',
	'php_info',
	'query',
	'settings',
	'stats',
	'templates',
	'titles'
);

if (!isset($_GET['a']) || !in_array($_GET['a'], $modules)) {
	$module = 'home';
} else {
	$module = $_GET['a'];
}

require './sources/' . $module . '.php';

$admin = new $module;

if (!get_magic_quotes_gpc()) {
	$admin->set_magic_quotes_gpc($admin->get);
	$admin->set_magic_quotes_gpc($admin->post);
	$admin->set_magic_quotes_gpc($admin->cookie);
}

$database = new database($set['db_host'], $set['db_user'], $set['db_pass'], $set['db_name'], $set['db_port'], $set['db_socket']);

if (!$database->connection) {
	exit('<center><font face="verdana" size="4" color="#000000"><b>A connection to the database could not be established and/or the specified database could not be found.</font></center>');
}

$admin->get['a'] = $module;
$admin->db       = $database;
$admin->pre      = $set['prefix'];
$admin->sets     = $admin->get_settings($set);
$admin->user_cl  = new user($admin);
$admin->user     = $admin->user_cl->login();
$admin->lang     = $admin->get_lang($admin->user['user_language'], $admin->get['a']);
$server_load     = $admin->get_load();

if (!isset($admin->get['skin'])) {
	$admin->skin = $admin->user['skin_dir'];
} else {
	$admin->skin = $admin->get['skin'];
}

$admin->perms = new permissions;
$admin->perms->db  = &$admin->db;
$admin->perms->pre = &$admin->pre;
$admin->perms->get_perms($admin->user['user_group'], $admin->user['user_id'], $admin->user['group_perms']);

$admin->temps = $admin->get_templates($admin->get['a'], false, true);

if (!$admin->perms->auth('is_admin') || $admin->is_banned()) {
	exit('<center><font face="verdana" size="4" color="#000000"><b>' . $admin->lang->admin_cp_denied . '</b></font></center>');
}

if (@file_exists('../install/index.php') && !@file_exists('../tools')) {
	exit('<center><font face="verdana" size="4" color="#000000">' . $admin->lang->admin_cp_warning . '</font></center>');
}

$admin->table  = eval($admin->template('ADMIN_TABLE'));
$admin->etable = eval($admin->template('ADMIN_ETABLE'));

$output = $admin->execute();

$title = isset($qsf->title) ? $qsf->title : $admin->name .' Admin CP';

$time_now  = explode(' ', microtime());
$time_exec = round(($time_now[1] + $time_now[0]) - $time_start, 4);

if (!$admin->nohtml) {
	$admin_main = $output . eval($admin->template('ADMIN_COPYRIGHT'));
	echo eval($admin->template('ADMIN_INDEX'));
} else {
	echo $output;
}
?>
