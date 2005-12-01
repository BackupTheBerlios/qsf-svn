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

srand((double)microtime() * 1234567);

require './settings.php';
require './func/constants.php';
require './lib/' . $set['dbtype'] . '.php';
require './global.php';
require './lib/perms.php';
require './lib/user.php';
require './lib/modlet.php';
require './lib/xmlparser.php';

if (!$set['installed']) {
	header('Location: ./install/index.php');
}

set_error_handler('error');

error_reporting(E_ALL);
set_magic_quotes_runtime(0);

// Open connection to database
$db = new database($set['db_host'], $set['db_user'], $set['db_pass'], $set['db_name'], $set['db_port'], $set['db_socket']);
if (!$db->connection) {
    error(QUICKSILVER_ERROR, 'A connection to the database could not be established and/or the specified database could not be found.', __FILE__, __LINE__);
}
$settings = $db->fetch("SELECT settings_data FROM {$set['prefix']}settings LIMIT 1");
$set = array_merge($set, unserialize($settings['settings_data']));

$modules = array_merge($set['optional_modules'], array(
	'help',
	'mod',
	'post',
	'register',
	'login',
	'forum',
	'topic'
));
	
if (!isset($_GET['a']) || !in_array($_GET['a'], $modules)) {
	$module = 'board';
} else {
	$module = $_GET['a'];
}

require './func/' . $module . '.php';

$qsf = new $module;
$qsf->pre = $set['prefix'];

$qsf->db = $db; 
$qsf->get['a'] = $module;
$qsf->sets     = $set;

if ($qsf->sets['output_buffer'] && isset($qsf->server['HTTP_ACCEPT_ENCODING']) && stristr($qsf->server['HTTP_ACCEPT_ENCODING'], 'gzip')) {
	ob_start('ob_gzhandler');
}

header( 'P3P: CP="CAO PSA OUR"' );
session_start();

$qsf->user_cl = new user($qsf);
$qsf->user    = $qsf->user_cl->login();
$qsf->lang    = $qsf->get_lang($qsf->user['user_language'], $qsf->get['a']);
$qsf->session['id'] = session_id();

if (!isset($qsf->get['skin'])) {
	$qsf->skin = $qsf->user['skin_dir'];
} else {
	$qsf->skin = $qsf->get['skin'];
}

$qsf->perms = new permissions;
$qsf->perms->db  = &$qsf->db;
$qsf->perms->pre = &$qsf->pre;
$qsf->perms->get_perms($qsf->user['user_group'], $qsf->user['user_id'], ($qsf->user['user_perms'] ? $qsf->user['user_perms'] : $qsf->user['group_perms']));

/* set timezone offset */
if ($qsf->user['zone_updated'] < $qsf->time)
{
	include('lib/tz_decode2.php');
	$tz = new tz_decode2('timezone/'.$qsf->user['zone_name']);
	$tz->magic2();
	if (strlen($tz->abba)<1) $tz->abba='N/A';
	$qsf->db->query("UPDATE {$qsf->pre}timezones SET zone_offset={$tz->gmt_offset}, zone_updated={$tz->next_update}, zone_abbrev='{$tz->abba}' WHERE zone_id={$qsf->user['zone_id']};");
} else {
	$qsf->tz_adjust = $qsf->user['zone_offset'];
}

$qsf->temps = $qsf->get_templates($qsf->get['a']);

$qsf->init_modlets();

$qsf->table  = eval($qsf->template('MAIN_TABLE'));
$qsf->etable = eval($qsf->template('MAIN_ETABLE'));

$server_load = $qsf->get_load();

$qsf->tree($qsf->sets['forum_name'], $qsf->self);

if ($qsf->is_banned()) {
	error(QUICKSILVER_NOTICE, $qsf->lang->main_banned);
}

$reminder = null;
$reminder_text = null;

if ($qsf->sets['closed']) {
	if (!$qsf->perms->auth('board_view_closed')) {
		if ($qsf->get['a'] != 'login') {
			error(QUICKSILVER_NOTICE, $qsf->sets['closedtext'] . "<br /><hr />If you are an administrator, <a href='$qsf->self?a=login&amp;s=on'>click here</a> to login.");
		}
	} else {
		$reminder_text = $qsf->lang->main_reminder_closed . '<br />&quot;' . $qsf->sets['closedtext'] . '&quot;';
	}
}

if ($qsf->user['user_group'] == USER_AWAIT) {
	$reminder_text = "{$qsf->lang->main_activate}<br /><a href='{$qsf->self}?a=register&amp;s=resend'>{$qsf->lang->main_activate_resend}</a>";
}

if ($reminder_text) {
	$reminder = eval($qsf->template('MAIN_REMINDER'));
}

if ($qsf->sets['max_load'] && ($server_load > $qsf->sets['max_load'])) {
	error(QUICKSILVER_NOTICE, sprintf($qsf->lang->main_max_load, $qsf->sets['forum_name']));
}

switch($qsf->get['a'])
{
case 'forum': $item = isset($qsf->get['f']) ? intval($qsf->get['f']) : 0; break;
case 'topic': $item = isset($qsf->get['t']) ? intval($qsf->get['t']) : 0; break;
case 'printer': $item = isset($qsf->get['t']) ? intval($qsf->get['t']) : 0; break;
case 'profile': $item = isset($qsf->get['w']) ? intval($qsf->get['w']) : 0; break;
default: $item = 0;
}

if (!$qsf->perms->is_guest) {
	$qsf->db->query("REPLACE INTO {$qsf->pre}active (active_id, active_action, active_item, active_time, active_ip, active_user_agent, active_session) VALUES ({$qsf->user['user_id']}, '{$qsf->get['a']}', $item, $qsf->time, INET_ATON('$qsf->ip'), '$qsf->agent', '{$qsf->session['id']}')");
} else {
	$qsf->db->query("REPLACE INTO {$qsf->pre}active (active_id, active_action, active_item, active_time, active_ip, active_user_agent, active_session) VALUES (" . USER_GUEST_UID . ", '{$qsf->get['a']}', $item, $qsf->time, INET_ATON('$qsf->ip'), '$qsf->agent', '{$qsf->session['id']}')");
}

$output = $qsf->execute();

if (($qsf->get['a'] == 'forum') && isset($qsf->get['f'])) {
	$searchlink = '&amp;f=' . intval($qsf->get['f']);
} else {
	$searchlink = null;
}

$userheader = eval($qsf->template('MAIN_HEADER_' . ($qsf->perms->is_guest ? 'GUEST' : 'MEMBER')));

$title = isset($qsf->title) ? $qsf->title : $qsf->sets['forum_name'];

$time_now  = explode(' ', microtime());
$time_exec = round($time_now[1] + $time_now[0] - $time_start, 4);

if (isset($qsf->get['debug'])) {
	$output = $qsf->show_debug($server_load, $time_exec);
}

if (!$qsf->nohtml) {
	$servertime = $qsf->mbdate( DATE_LONG, $qsf->time, false );
	$quicksilverforums = $output . eval($qsf->template('MAIN_COPYRIGHT'));
	echo eval($qsf->template('MAIN'));
} else {
	echo $output;
}
?>
