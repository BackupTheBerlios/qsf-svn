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

/**
 * Executes an array of queries
 *
 * @param array $queries Queries to execute
 * @param object $db Database connection
 * @return void
 **/
function execute_queries($queries, $db)
{
	foreach ($queries as $query)
	{
		$db->query($query);
	}
}

ob_start();
error_reporting(E_ALL);

require '../settings.php';
require '../func/constants.php';
require '../global.php';
require '../lib/mysql.php';
require '../lib/perms.php';

define('LATEST', 16);   // ID of most recent upgrade script
define('INSTALLER', 1); // Used in query files

$self   = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : 'index.php';
$failed = false;

if (!isset($_GET['mode'])) {
	$mode = null;
} else {
	$mode = $_GET['mode'];
}

if (!isset($_GET['step'])) {
	$step = 1;
} else {
	$step = $_GET['step'];
}

if ($mode) {
	require './' . $mode . '.php';
	$qsf = new $mode;
} else {
	$qsf = new qsfglobal;
}

include 'templates/header.php';

if (substr(PHP_VERSION, 0, 1) == '3') {
	echo 'Your PHP version is ' . PHP_VERSION . '.<br />Currently only PHP4 and PHP5 are supported.';
	$failed = true;
}

if (!extension_loaded('mysql')) {
	if ($failed) { // If we have already shown a message, show the next one two lines down
		echo '<br /><br />';
	}

	echo 'Your PHP installation does not support MySQL.<br />Currently only MySQL is supported.';
	$failed = true;
}

if (isset($_SERVER['SERVER_SOFTWARE'])) {
	if ((strstr(PHP_VERSION, '4.2.0')
	|| strstr(PHP_VERSION, '4.2.1'))
	&& stristr($_SERVER['SERVER_SOFTWARE'], 'Apache/2.0.')) {
		if ($failed) {
			echo '<br /><br />';
		}

		echo 'There is a serious cookie bug in PHP 4.2 running on Apache 2.0.<br />Because it is a bug in PHP itself, Quicksilver Forums can not solve the problem.';
		$failed = true;
	}
}

if ($failed) {
	echo "<br /><br /><b>To run Quicksilver Forums and other advanced PHP software, the above error(s) must be fixed by your web host.</b>";
} else {
	$qsf->sets = $set;

	switch($mode) {
	case '':
		include 'templates/installtype.php';
		break;

	case 'new_install':
		$qsf->install_board($step);
		break;

	case 'upgrade':
		$qsf->upgrade_board($step);
		break;

	case 'convert':
		$qsf->convert_board($step);
		break;
	}
}

include 'templates/footer.php';
?>
