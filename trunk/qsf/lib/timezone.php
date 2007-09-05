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
	private $tz_file;
	public $gmt_offset=0;
	public $next_update;
	public $abba;
	private $valid_names;

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

		$this->valid_names = timezone_identifiers_list();
	}

	/**
	 * The magic function that does everything.
	 * 
	 **/
	function magic2()
	{
		if ( !in_array( $this->tz_file, $this->valid_names ) )
			trigger_error( sprintf( 'Bad timezone name given: %s', $this->tz_file ), E_USER_ERROR ); // TODO: move msg to lang


		$tz_obj = timezone_open( $this->tz_file );

		$tz_data = timezone_transitions_get( $tz_obj );

		$last = reset( $tz_data );
		$now = time();

		foreach( $tz_data as $transition )
		{
			if ( $transition['ts'] > $now )
			{
				$this->gmt_offset = $last['offset'];
				$this->abba = $last['abbr'];
				$this->next_update = $transition['ts'];
				return;
			} else {
				$last = $transition;
			}
		}

		// default to the last entry if we get here
		$this->gmt_offset = $last['offset'];
		$this->abba = $last['abbr'];
	}

}

?>
