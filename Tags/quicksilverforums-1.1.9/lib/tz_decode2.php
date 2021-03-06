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

/**
 * Class that loads timezone data from binary files
 *
 * @author Matthew Lawrence <matt@quicksilverforums.co.uk>
 * @since 1.1.5 QSF
 **/
class tz_decode2
{
    var $tz_file;
    var $tz_fhwnd;
    var $tz_data;
    var $header = array();
    var $body = array();
    var $gmt_offset=0;
    var $next_update;
    var $abba;

    /**
     * Constructor, given a file to open
     * 
     * 
     **/
    function tz_decode2($file)
    {
        $this->tz_file = $file;
	/* some safe default */
	$this->next_update=time() + (DAY_IN_SECONDS * 30);
        $this->tz_fhwnd = 0;
    }

    /**
     * The magic function that does _almost_ everything.
     * 
     **/
    function magic2()
    {
        if (!$this->open()) die("Count not open file: {$this->tz_file}\n");
        $this->exec();
	$this->load_current_offsets();
    }

    /**
     * Opens the file specfied in the constuctor
     * 
     **/
    function open()
    {
        if (!file_exists($this->tz_file))
	{
		if (!file_exists('../'.$this->tz_file))
		{
			return false;
		} else {
			/* FIXME */
			$this->tz_data = file_get_contents('../'.$this->tz_file);
		}
	} else {
		/* FIXME */
		$this->tz_data = file_get_contents($this->tz_file);
	}

        return (!$this->tz_data) ? false : true;
    }
    
    /**
     * Acts like fread but seeks in memory not a file
     * 
     **/
    function fread($len)
    {
        $ret = substr($this->tz_data, $this->tz_fhwnd, $len);
        $this->tz_fhwnd += $len;
        return $ret;
    }

    function fseek($to)
    {
        return ($this->tz_fhwnd = $to);
    }

    function exec()
    {

        /* make sure it is a valid file */
        if ($this->fread(4) != 'TZif') return false;

        /* load data from the header portion of file */
        $this->fseek(20);

        $tmp = unpack("N6", $this->fread(24));

        $tmp[0] = null;

        list($dummy, 
            $this->header['ttisgmtcnt'],
            $this->header['ttisstdcnt'],
            $this->header['leapcnt'],
            $this->header['timecnt'],
            $this->header['typecnt'],
            $this->header['charcnt']) = $tmp;

        /* read in unix transition timestamps - 4bytes each */
        for ($ix=0; $ix<$this->header['timecnt']; $ix++)
        {
            $temp = unpack('N', $this->fread(4));
            $this->body['unix_time'][] = array_pop($temp);
        }

        /* read in `pointer` to the rule struct for, indexs match with the unix timestamps 1bytes each */
        for ($ix=0; $ix<$this->header['timecnt']; $ix++)
        {
            $temp = unpack('C', $this->fread(1));
            $this->body['unix_time_rule_index'][] = array_pop($temp);
        }

        /* read in the rule structs */
        for ($ix=0; $ix<$this->header['typecnt']; $ix++)
        {
            $this->body['ttinfo'][] = unpack('Ngmtoff/Cisdst/Cabbrind', $this->fread(6)) ;
        }

	/* read in abbreiveiations(sp?) replace the nul char with a space */
	$this->body['names'] = NULL;
	for ($ix=0; $ix<$this->header['charcnt']; $ix++)
	{
		$tmp = $this->fread(1);
		if (ord($tmp) === 0) $tmp=' ';
		$this->body['names'] = $this->body['names'].$tmp;
	}
    }

    function load_current_offsets()
    {
        /* quick sanity check */
        if (isset($this->body['unix_time']))
        {
            /* make a note of the time, don't want to keep calling time() in the loop */
            $time = time();

            /* loop until we find the correct rule */
            for ($ix=0; $ix<$this->header['timecnt']; $ix++)
            {
                if ($this->body['unix_time'][$ix] > $time) break;
            }

            /* use our rule and set the gmt offset (in seconds) of the rule and the next time the data should be updated */
	    $this->gmt_offset = ($this->body['ttinfo'][$this->body['unix_time_rule_index'][($ix-1)]]['gmtoff']);
	    if (isset($this->body['unix_time'][$ix]))
	    {
	    	$this->next_update = $this->body['unix_time'][$ix];
	    }

	    $len = strlen($this->body['names']);

	    /* find the correct place in the abba string */
	    for($iy = $this->body['ttinfo'][$this->body['unix_time_rule_index'][($ix-1)]]['abbrind']; $iy < $len; $iy++)
	    {
	    	if (' ' == $this->body['names']{$iy}) break;
	    	$this->abba = $this->abba.$this->body['names']{$iy};
	    }

        }
    }
}
?>
