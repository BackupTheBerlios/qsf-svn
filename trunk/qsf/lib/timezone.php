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

if (!defined('QUICKSILVERFORUMS')) {
	header('HTTP/1.0 403 Forbidden');
	die;
}

/**
 * Class that loads timezone data from our generated php files
 *
 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
 * @since 1.3.2 QSF
 **/
class timezone
{
	var $tz_file;
	var $gmt_offset=0;
	var $next_update;
	var $abba;

	/**
	 * Constructor, given a file to open
	 * 
	 * 
	 **/
	function timezone($file)
	{
		$this->tz_file = $file;
		/* some safe default */
		$this->next_update=time() + (DAY_IN_SECONDS * 30);
	}

	/**
	 * The magic function that does everything.
	 * 
	 **/
	function magic2()
	{
		require_once( $this->tz_file );

		$last = reset( $times );
		$now = time();

		foreach( $times as $time => $data )
		{
			if ( $time > $now )
			{
				$this->gmt_offset = $last['offset'];
				$this->abba = $last['abbrv'];
				$this->next_update = $time;
				return;
			} else {
				$last = $data;
			}
		}

		// default to the last entry if we get here
		$this->gmt_offset = $last['offset'];
		$this->abba = $last['abbrv'];
	}

}

?>
