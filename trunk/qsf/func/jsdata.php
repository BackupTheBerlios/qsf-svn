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

require_once $set['include_path'] . '/global.php';
require_once $set['include_path'] . '/lib/JSON.php';

/**
 * Public interface to fetch board data
 **/
class jsdata extends qsfglobal
{
	/**
	 * Main interface. Get a JSON feed of language variables
	 *
	 * @since 1.3.0
	 * @return string rss output
	 **/
	function execute()
	{
		$this->nohtml = true;
		
		$json = new Services_JSON();
		
		if (!isset($this->get['data'])) $this->get['data'] = '';
		
		$results = null;
		
		switch ($this->get['data']) {
		case 'clickablesmilies':
			$results = array();
			$replace = $this->db->query("SELECT replacement_search, replacement_replace
				FROM %preplacements
				WHERE replacement_type = 'emoticon'
				AND replacement_clickable = 1
				ORDER BY LENGTH(replacement_search) DESC");
			while ($r = $this->db->nqfetch($replace)) {
				$results[$r['replacement_search']] = "./skins/{$this->skin}/emoticons/{$r['replacement_replace']}";
			}
			break;
		}
		return $json->encode($results);
	}
	
}
?>
