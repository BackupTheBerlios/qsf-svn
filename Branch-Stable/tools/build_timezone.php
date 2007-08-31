<?php
/**
 * Quicksilver Forums
 * Copyright (c) 2005 The Quicksilver Forums Development Team
 *  http://www.quicksilverforums.com/
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

define('QUICKSILVERFORUMS', true);

/**
 * Used to generate PHP date files
 *
 */

if ( !isset( $_SERVER['argc'] ) || 0 == $_SERVER['argc'] )
	die( 'Useage: php -f ' . __FILE__ . "\n" );


define( 'YEAR_IN_SECONDS', 31536000 );
define( 'DAY_IN_SECONDS', 86400 );
$now = time();
$whitelist = array('Africa', 'America', 'Antarctica', 'Arctic', 'Asia', 'Atlantic', 'Australia', 'Europe', 'Indian', 'Pacific', 'US', 'Indiana', 'North_Dakota', 'Argentina', 'Kentucky' );
$relative = '../timezone/';
// $relative = '/usr/share/zoneinfo/';
$into = '../ptzf/';
$eol = "\n";

require_once( '../lib/tz_decode2.php' );

if ( !file_exists( $into ) )
	mkdir( $into );

function r_proc_files( $path )
{
	global $eol, $into, $relative, $whitelist;
	$fd = opendir( $path );

	$to = str_replace( $relative, $into, $path );

	if ( !file_exists( $to ) )
		mkdir( $to );

	// over each zone
	while( false !== ( $file = readdir( $fd ) ) )
	{
		if ( false !== strpos( $file, '.' ) )
			continue;

		if ( is_dir( $path . $file ) )
		{
			if ( in_array( $file, $whitelist ) )
				r_proc_files( $path . $file . '/' );
			else
				echo 'Dropped: `' . $file . '` - Not in whitelist' . $eol;

			continue;
		}

		$tz = new tz_decode2( $path . $file );

		if (!$tz->open()) 
			die("Count not open file: {$tz->tz_file}\n");

		$tz->exec();
		$tz->load_current_offsets();

		$code = build_php( $tz );

		file_put_contents( $to . $file . '.php', $code );

		echo 'Proc: ' . $path . $file . $eol;
//		echo $to . $eol;
	}

	closedir( $fd );
}

function build_php( &$tz )
{
	$eol = "\n";
	$file = '<?php
/*
Copyright (c) 2007 The Quicksilver Forums Development Team
http://www.quicksilverforums.com/
*/
if (!defined(\'QUICKSILVERFORUMS\')){header(\'HTTP/1.0 403 Forbidden\');die;}
';

	$file .= '$times = array();' . $eol;

	/* quick sanity check */
	if (isset($tz->body['unix_time']))
	{
		/* make a note of the time, don't want to keep calling time() in the loop */
		$time = time();
		$to_time = $time + (YEAR_IN_SECONDS * 3);

		/* loop until we find the correct rule */
		for ($ix=0; $ix<$tz->header['timecnt']; $ix++)
			if ($tz->body['unix_time'][$ix] > $time)
				break;

		if ( 0 == $ix )
		{
			echo 'tz_decode2 error: improper `unixtime` in ' . $tz->tz_file;
			return;
		}

		$ix--; // compensate for offset

		for ($iy = $ix; $iy < $tz->header['timecnt']; $iy++ )
			if ( $to_time < $tz->body['unix_time'][$iy] )
				break;

		$len = strlen($tz->body['names']);

		for ( $iz = $ix; $iz < $iy; $iz++ )
		{
			$abbrv = null;
			/* find the correct place in the abba string */
			for($iv = $tz->body['ttinfo'][$tz->body['unix_time_rule_index'][$iz]]['abbrind']; $iv < $len; $iv++)
			{
				if (' ' == $tz->body['names']{$iv})
					break;
				$abbrv = $abbrv . $tz->body['names']{$iv};
			}

			$file .= '$times[' . $tz->body['unix_time'][$iz] . '] = array( \'offset\' => \'' . 
				$tz->body['ttinfo'][$tz->body['unix_time_rule_index'][$iz]]['gmtoff'] . '\', \'abbrv\' => \'' . $abbrv . '\' );' . $eol;
		}

	} elseif(isset($tz->body['ttinfo'][0])) {
		/* handle the case of when time stands still ;-) */
		$file .= '$times[0] = array( \'offset\' => \'' . $tz->body['ttinfo'][0]['gmtoff'] . '\', \'abbrv\' => \'' . $tz->body['names'] . '\' );' . $eol;
	} else {
		/* hope we never reach here! */
		echo 'tz_decode2 error: Something strange going on with file: ' . $tz->tz_file;
		die();
	}



	$file .= $eol . '?>';

	return $file;
}

// iterate over each continent folder
r_proc_files( $relative );

?>
