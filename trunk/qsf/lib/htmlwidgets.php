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
 
require_once $set['include_path'] . '/lib/htmltools.php';

/**
 * Contains all the functions for generating small pieces of
 * HTML that can not be easily done in a template
 *
 * @author Geoffrey Dunn <geoff@warmage.com>
 * @since 1.2
 **/
class htmlwidgets extends htmltools
{
	/**
	 * Constructor
	 *
	 * @param $qsf - Quicksilver Forums module
	 **/
	function htmlwidgets(&$qsf)
	{
		parent::htmltools($qsf);

		// Need the time for timezone stuff
		$this->time = &$qsf->time;
	}
	
	/**
	 * Creates HTML-formatted page numbers
	 *
	 * @param mixed $rows Can be either a resource, query, or number; number of total entries for pagination
	 * @param string $link Query string to attach to link
	 * @param int $min First entry to display
	 * @param int $num Number of entries per page
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 1.0
	 * @return string HTML-formatted page numbers
	 **/
	function get_pages($rows, $link, $min = 0, $num = 10)
	{
		if (!$num) {
			$num = 10;
		}

		// preliminary row handling
		if (!is_resource($rows)) {
			if (!is_numeric($rows)) {
				$rows = $this->db->num_rows($this->db->query($rows));
			}
		} else {
			$rows = $this->db->num_rows($records);
		}

		// some base variables
		$current = ceil($min / $num);
		$string  = null;
		$pages   = ceil($rows / $num);
		$end     = ($pages - 1) * $num;

		// check if there's previous articles
		if ($min == 0) {
			$startlink = '&lt;&lt;';
			$previouslink = $this->lang->main_prev;
		} else {
			$startlink = "<a href=\"{$this->self}?$link&amp;min=0&amp;num=$num\" class=\"pagelinks\">&lt;&lt;</a>";
			$prev = $min - $num;
			$previouslink = "<a href=\"{$this->self}?$link&amp;min=$prev&amp;num=$num\" class=\"pagelinks\">{$this->lang->main_prev}</a> ";
		}

		// check for next/end
		if (($min + $num) < $rows) {
			$next = $min + $num;
  			$nextlink = "<a href=\"{$this->self}?$link&amp;min=$next&amp;num=$num\" class=\"pagelinks\">{$this->lang->main_next}</a>";
  			$endlink = "<a href=\"{$this->self}?$link&amp;min=$end&amp;num=$num\" class=\"pagelinks\">&gt;&gt;</a>";
		} else {
  			$nextlink = $this->lang->main_next;
  			$endlink = '&gt;&gt;';
		}

		// setup references
		$b = $current - 2;
		$e = $current + 2;

		// set end and beginning of loop
		if ($b < 0) {
  			$e = $e - $b;
  			$b = 0;
		}

		// check that end coheres to the issues
		if ($e > $pages - 1) {
  			$b = $b - ($e - $pages + 1);
  			$e = ($pages - 1 < $current) ? $pages : $pages - 1;
  			// b may need adjusting again
  			if ($b < 0) {
				$b = 0;
			}
		}

 		// ellipses
		if ($b != 0) {
			$badd = '...';
		} else {
			$badd = '';
		}

		if (($e != $pages - 1) && $rows) {
			$eadd = '...';
		} else {
			$eadd = '';
		}

		// run loop for numbers to the page
		for ($i = $b; $i < $current; $i++)
		{
			$where = $num * $i;
			$string .= ", <a href=\"{$this->self}?$link&amp;min=$where&amp;num=$num\" class=\"bodylinktype\">" . ($i + 1) . '</a>';
		}

		// add in page
		$string .= ', <strong>' . ($current + 1) . '</strong>';

		// run to the end
		for ($i = $current + 1; $i <= $e; $i++)
		{
			$where = $num * $i;
			$string .= ", <a href=\"{$this->self}?$link&amp;min=$where&amp;num=$num\" class=\"bodylinktype\">" . ($i + 1) . '</a>';
		}

		// get rid of preliminary comma. (optimized by jason: mark uses preg_replace() like candy)
		if (substr($string, 0, 1) == ',') {
			$string = substr($string, 1);
		}

		return "<span class=\"pagelinks\">$startlink $previouslink $badd $string $eadd $nextlink $endlink</span>";
	}

	/**
	 * Creates HTML-formatted page numbers for topics - see get_pages()
	 *
	 * @param int $records Number of replies in the topic
	 * @param int $link Query string to attach to link
	 * @param string $sep Separator for pages
	 * @param int $min First entry to display
	 * @param int $n Number of entries to display
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.0
	 * @return
	 **/
	function get_pages_topic($records, $link, $sep, $min = 0, $n = 10)
	{
		$records++;
		$pages    = ceil($records / $n);
		$max_page = ($pages - 1) * $n;

		if ($pages == 1) {
			return null;
		}

		$pagelinks = null;
		if ($pages > 3) {
			$countfor = 3;
		} else {
			$countfor = $pages;
		}

		for ($i = 0; $i < $countfor; $i++)
		{
			$minpag = $i * $n;
			$page   = $i + 1;
			$pagelinks .= "<a href=\"{$this->self}?$link&amp;min=$minpag&amp;num=$n\" class=\"pages\">$page</a>{$sep}";
		}

		if (substr($pagelinks, -(strlen($sep))) == $sep) {
			$pagelinks = substr($pagelinks, 0, -(strlen($sep)));
		}

		if ($pages > 3) {
			$ellipsis = ($pages == 4) ? '' : '..';
			$pagelinks .= "$sep<a href=\"{$this->self}?$link&amp;min=$max_page&amp;num=$n\" class=\"pages\">{$ellipsis}{$pages}</a>";
		}

		$pagelinks = "( $pagelinks )";

		return $pagelinks;
	}

	/**
	 * Look at all the avatars avaialble and make them selectable options
	 *
	 * @param string $current filename of the current avatar (if any)
	 * @param string $relative Path to look for avatars in (optional)
	 * @return string HTML
	 **/
	function select_avatars($current, $relative = '.')
	{
		$out = null;
		$dir = opendir($relative . '/avatars');

		while (($file = readdir($dir)) !== false)
		{
			if (is_dir('./avatars/' . $file)) {
				continue;
			}

			$split = explode('.', $file);
			$ext   = array_pop($split);
			if (($ext != 'jpg')
			&& ($ext != 'jpeg')
			&& ($ext != 'gif')
			&& ($ext != 'png')) {
				continue;
			}

			$out .= "<option value=\"./avatars/$file\"" . (("./avatars/$file" == $current) ? ' selected="selected"' : null) . '>' . implode('.', $split) . "</option>\n";
		}

		return $out;
	}

	/**
	 * Create options of group names
	 *
	 * @param int $var group_id of the selected group 
	 * @param bool $custom_only Show only groups that are not part of the built in groups
	 * @return string HTML
	 **/
	function select_groups($val, $custom_only = false)
	{
		if ($custom_only) {
			$groups = $this->db->query('SELECT group_name, group_id FROM ' . $this->pre . 'groups WHERE group_type="" ORDER BY group_name');
		} else {
			$groups = $this->db->query('SELECT group_name, group_id FROM ' . $this->pre . 'groups ORDER BY group_name');
		}

		$out = null;

		while ($group = $this->db->nqfetch($groups))
		{
			$out .= "<option value=\"{$group['group_id']}\"" . (($val == $group['group_id']) ? ' selected="selected"' : '') . ">{$group['group_name']}</option>";
		}

		return $out;
	}

	/**
	 * Create options of "null" to 31 selectable as a day of the month
	 *
	 * @param int $dat current day of the month (if any) 
	 * @return string HTML
	 **/
	function select_days($day)
	{
		$i   = 1;
		$out = "<option value=\"00\"></option>\n";

		while ($i <= 31)
		{
			$out .= "<option value=\"$i\"" . (($i == $day) ? ' selected="selected"' : null) . ">$i</option>\n";
			$i++;
		}

		return $out;
	}

	/**
	 * Create options of "null" to 12 selectable months
	 *
	 * @param int $mon current month (if any) 
	 * @return string HTML
	 **/
	function select_months($mon)
	{
		$i   = 1;
		$out = null;

		$month = array(
			'00' => '',
			'1'  => $this->lang->cp_jan,
			'2'  => $this->lang->cp_feb,
			'3'  => $this->lang->cp_mar,
			'4'  => $this->lang->cp_apr,
			'5'  => $this->lang->cp_may,
			'6'  => $this->lang->cp_june,
			'7'  => $this->lang->cp_july,
			'8'  => $this->lang->cp_aug,
			'9'  => $this->lang->cp_sept,
			'10' => $this->lang->cp_oct,
			'11' => $this->lang->cp_nov,
			'12' => $this->lang->cp_dec
		);

		foreach ($month as $digit => $name)
		{
			$out .= "<option value=\"$digit\"" . (($digit == $mon) ? ' selected="selected"' : null) . ">$name</option>\n";
		}

		return $out;
	}

	/**
	 * Create options of "null" to 100 years ago as selectable years
	 *
	 * @param int $year the selected year (if any) 
	 * @return string HTML
	 **/
	function select_years($year)
	{
		$thisyear = gmdate("Y", time()); // Could end up missing the 'current year' if on new years day/eve
		$i        = $thisyear;
		$out      = "<option value='0000'></option>\n";

		while ($i >= $thisyear-100)
		{
			$out .= "<option value=\"$i\"" . (($i == $year) ? ' selected="selected"' : null) . ">$i</option>\n";
			$i--;
		}

		return $out;
	}

	/**
	 * Generates a select box of skins
	 *
	 * @param string $skin user_skin to select
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return string HTML
	 **/
	function select_skins($skin)
	{
		$out = null;

		$query = $this->db->query("SELECT * FROM {$this->pre}skins");
		while ($s = $this->db->nqfetch($query))
		{
			if ($s['skin_dir'] == 'default') {
				$s['skin_name'] .= ' (default)';
			}
			$out .= "<option value=\"{$s['skin_dir']}\"" . (($s['skin_dir'] == $skin) ? ' selected="selected"' : null) . ">{$s['skin_name']}</option>\n";
		}

		return $out;
	}

	/**
	 * Create options of different timezones
	 *
	 * @param int $zone current timezone id 
	 * @return string HTML
	 **/
	function select_timezones($zone)
	{
		$out = null;

		$query = $this->db->query("SELECT zone_id, zone_name, zone_offset, zone_updated, zone_abbrev FROM {$this->pre}timezones ORDER BY zone_name ASC");
		while($row = $this->db->nqfetch($query))
		{
			if ($row['zone_updated'] < $this->time)
			{
				$tz = new $this->modules['timezone']('timezone/'.$row['zone_name']);
				$tz->magic2();
				if (strlen($tz->abba)<1) $tz->abba='N/A';
				$this->db->query("UPDATE {$this->pre}timezones SET zone_offset={$tz->gmt_offset}, zone_updated={$tz->next_update}, zone_abbrev='{$tz->abba}' WHERE zone_id={$row['zone_id']};");
				$row['zone_abbrev'] = $tz->abba;
				$row['zone_offset'] = $tz->gmt_offset;
			}

			$padding = str_repeat('&nbsp;', 30 - strlen($row['zone_name']));

			$out .= '<option value="' . $row['zone_id'] . '"' . (($zone == $row['zone_id']) ? ' selected="selected"' : null) . '>' . 
				$row['zone_name'] . $padding  . ' ' . $row['zone_abbrev']. ' (GMT'.(($row['zone_offset'] >= 0) ? '+' : '') . ($row['zone_offset']/3600). ')</option>'."\n";
		}

		return $out;
	}

}

?>
