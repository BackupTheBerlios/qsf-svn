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
 * The Quicksilver Forums Core
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class qsfglobal
{
	var $name    = 'Quicksilver Forums'; // The name of the software @var string
	var $version = 'v1.2.0';            // Quicksilver Forums' version @var string
	var $server  = array();           // Alias for $_SERVER @var array
	var $get     = array();           // Alias for $_GET @var array
	var $post    = array();           // Alias for $_POST @var array
	var $cookie  = array();           // Alias for $_COOKIE @var array
	var $files   = array();           // Alias for $_FILES @var array
	var $user    = array();           // Information about the user @var array
	var $sets    = array();           // Settings @var array
	var $modules = array();           // Module Settings @var array
	var $censor  = array();           // Curse words to filter @var array

	var $emotes  = array(            // Text strings to be replaced with images @var array
		'replacement' => array(),
		'replacement_clickable' => array()
	);

	var $tree    = null;              // The navigational tree @var string
	var $nohtml  = false;             // To display no board wrapper @var bool
	var $replaces_loaded = false;     // Replacements have been loaded @var bool
	var $time;                        // The current Unix time @var int
	var $ip;                          // The user's IP address @var string
	var $agent;                       // The browser's user agent @var string
	var $self;                        // Alias for $PHP_SELF @var string
	var $mainfile = 'index.php';	  // Combined with set['loc_of_board'] to make full url
	var $db;                          // Database object @var object
	var $perms;                       // Permissions object @var object
	var $pre;                         // Database table prefix @var string
	var $skin;                        // The user's selected skin @var string
	var $table;                       // Start to an HTML table @var string
	var $etable;                      // End to an HTML table @var string
	var $lang;                        // Loaded words @var object
	var $query;                       // The query string @var string
	var $tz_adjust;                   // Timezone offset in seconds
	var $feed_links = null;		  // HTML of RSS link tags

	var $attachmentutil;		  // Attachment handler @var object
	var $htmlwidgets;		  // HTML widget handler @var object
	var $templater;			  // Template handler @var object
	var $validator;			  // Handler for checking usernames, passwords, etc

	/**
	 * Constructor; sets up variables
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 **/
	function qsfglobal()
	{
		$this->time    = time();
		$this->query   = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;
		$this->ip      = addslashes($_SERVER['REMOTE_ADDR']);
		$this->agent   = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null;
		$this->self    = $_SERVER['PHP_SELF'];
		$this->server  = $_SERVER;
		$this->get     = $_GET;
		$this->post    = $_POST;
		$this->cookie  = $_COOKIE;
		$this->files   = $_FILES;
		$this->session = &$_SESSION;
		$this->query   = htmlspecialchars($this->query);

		// Do all magic quote stuff here
		$this->agent = addslashes($this->agent);
		if (!get_magic_quotes_gpc()) {
			$this->set_magic_quotes_gpc($this->get);
			$this->set_magic_quotes_gpc($this->post);
			$this->set_magic_quotes_gpc($this->cookie);
		}
	}
	
	/**
	 * Post constructor initaliser. By this time we have a user and a database
	 *
	 * Note: This is never run for special tools such as installs or upgrades
	 *
	 * @param bool $admin Set to true if we need to setup admin templates
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.2
	 **/
	function init($admin = false)
	{
		$this->perms = new $this->modules['permissions']($this);
		
		/* set timezone offset */
		if ($this->user['zone_updated'] < $this->time)
		{
			$tz = new $this->modules['timezone']('timezone/'.$this->user['zone_name']);
			$this->magic2();
			if (strlen($this->abba)<1) $this->abba='N/A';
			$this->db->query("UPDATE {$this->pre}timezones SET zone_offset={$tz->gmt_offset}, zone_updated={$tz->next_update}, zone_abbrev='{$tz->abba}' WHERE zone_id={$this->user['zone_id']};");
		} else {
			$this->tz_adjust = $this->user['zone_offset'];
		}
		
		$this->attachmentutil = new $this->modules['attach']($this);
		$this->htmlwidgets = new $this->modules['widgets']($this);
		$this->templater = new $this->modules['templater']($this);
		$this->validator = new $this->modules['validator']();

		$this->templater->init_templates($this->get['a'], $admin);
		
		$this->set_table();
	}
	
	/**
	 * Set values for $this->table and $this->etable
	 *
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.2
	 **/
	function set_table()
	{
		$this->table  = eval($this->template('MAIN_TABLE'));
		$this->etable = eval($this->template('MAIN_ETABLE'));
	}
	
	/**
	 * Templater interface just so don't have to change the calls
	 *
	 * @param string $piece Name of the template to return
	 **/
	function template($piece)
	{
		return $this->templater->template($piece);
	}

	/**
	 * Combines two array to make a new array, the first array becomes the keys
	 * and the second becomes the values
	 *
	 * @author Matthew Wells <ragnarok@squarehybrid.com>
	 * @since Spiders in Active List Mod
	 * @return Array
	 **/
	function array_combine($keys, $vals)
	{
		for ($i = 0; $i < count($keys); $i++) {
			$array[$keys[$i]] = $vals[$i];
		}

		return $array;
	}

	/**
	 * Checks to see if an active user is a Search Spider
	 *
	 * @author Matthew Wells <ragnarok@squarehybrid.com>
	 * @since Spiders in Active List Mod
	 * @return Spider Name / false
	 **/
	function spider_check($user_agent)
	{
		$user_agent = strtolower($user_agent);
		if ($this->sets['spider_active']) {
			foreach ($this->sets['spider_agent'] as $spiderstring) {
				if (preg_match("#($spiderstring)#is", $user_agent, $agent))
				{
					return $this->sets['spider_name'][$agent[1]];
				}
			}
		}
		return false;
	}

	/**
	 * Attempts to CHMOD a directory or file
	 *
	 * @param string $path Path to CHMOD
	 * @param int $mode New CHMOD value
	 * @param bool $recursive True for recursive
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.1.5
	 * @return void
	 **/
	function chmod($path, $mode, $recursive = false)
	{
		if (!$recursive || !is_dir($path)) {
			@chmod($path, $mode);
			return;
		}

		$dir = opendir($path);
		while (($file = readdir($dir)) !== false)
		{
			if(($file == '.') || ($file == '..')) {
				continue;
			}

			$fullpath = $path . '/' . $file;
			if(!is_dir($fullpath)) {
				@chmod($fullpath, $mode);
			} else {
				$this->chmod($fullpath, $mode, true);
			}
		}

		closedir($dir);
		@chmod($path, $mode);
	}

	/**
	 * Formats a string
	 *
	 * @param string $in Input
	 * @param int $options Options
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 3.0
	 * @return string Formatted string
	 **/
	function format($in, $options = 0)
	{
		$maxwordsize = 40; // Maximum size a word can get before it's cut into a abbr tag
		
		if (!$options) {
			$options = FORMAT_BREAKS | FORMAT_HTMLCHARS | FORMAT_CENSOR;
		}

		if ($options & FORMAT_CENSOR) {
			if (!$this->replaces_loaded) {
				$this->get_replaces();
			}

			if ($this->censor) {
				$in = preg_replace($this->censor, '####', $in);
			}
		}

		if ($options & FORMAT_MBCODE) {
			$search = array(
				'~(^|\s)([a-z0-9-_.]+@[a-z0-9-.]+\.[a-z0-9-_.]+)~i',
				'~(^|\s)(http|https|ftp)://(\w+[^\s\[\]]+)~ise'
			);

			$replace = array(
				'\\1[email]\\2[/email]',
				'\'\\1[url]\' . wordwrap(\'\\2://\\3\', 1, \' \', 1) . \'[/url]\''
			);

			$brackets = (strpos($in, '[') !== false) && (strpos($in, ']') !== false);

			if ($brackets) {
				$b_search = array(
					'~\[code](.*?)\[/code]~ise',
					'~\[php](.*?)\[/php]~ise',
					'~\[php=([0-9]+?)](.*?)\[/php]~ise',
					'~\[img](http|https|ftp)://(.*?)\[/img]~ise',
					'~\[url](.*?)\[/url]~ise',
					'~\[url=(http|https|ftp)://(.+?)](.+?)\[/url]~ise'
				);

				$b_replace = array(
					'\'[code]\' . base64_encode(\'\\1\') . \'[/code]\'',
					'\'[php]\' . base64_encode(\'\\1\') . \'[/php]\'',
					'\'[php=\\1]\' . base64_encode(\'\\2\') . \'[/php]\'',
					'\'[img]\' . wordwrap(\'\\1://\\2\', 1, \' \', 1) . \'[/img]\'',
					'\'[url]\' . wordwrap(\'\\1\\2\', 1, \' \', 1) . \'[/url]\'',
					'\'[url=\' . wordwrap(\'\\1://\\2\', 1, \' \', 1) . \']\\3[/url]\''
				);

				$search  = array_merge($search, $b_search);
				$replace = array_merge($replace, $b_replace);
			}

			$in = preg_replace($search, $replace, $in);

			$brackets = (strpos($in, '[') !== false) && (strpos($in, ']') !== false); //We may have auto-parsed a URL, adding a bracket
		}

		$strtr = array();

		if ($options & FORMAT_HTMLCHARS) {
			$strtr['&'] = '&amp;';
			$strtr['"'] = '&quot;';
			$strtr['\''] = '&#039;';
			$strtr['<'] = '&lt;';
			$strtr['>'] = '&gt;';
		}

		if ($options & FORMAT_BREAKS) {
			$strtr["\n"] = "<br />\n";
		}

		if ($this->user['user_view_emoticons'] && ($options & FORMAT_EMOTICONS)) {
			if (!$this->replaces_loaded) {
				$this->get_replaces();
			}

			$strtr = array_merge($strtr, $this->emotes['replacement']);
		}

		$in = strtr($in, $strtr);

		if (($options & FORMAT_MBCODE) && $brackets) {
			$old_in = $in; // backup text in case quote tags fail
			
			$search = array();
			$replace = array();
			
			$search[] = '~\[quote=(.+?)]~i';
			$search[] = '~\[quote]~i';

			$replace[] = '<div class="quotebox"><strong>\\1 ' . $this->lang->main_said . ':</strong><div class="quote">';
			$replace[] = '<div class="quotebox"><strong>' . $this->lang->main_quote . ':</strong><div class="quote">';

			$startCount = preg_match_all($search[0], $in, $matches);
			$startCount += preg_match_all($search[1], $in, $matches);
			$in = preg_replace($search, $replace, $in);

			$search = '~\[/quote]~i';
			$replace = '</div></div>';

			// Count matches first
			$endCount = preg_match_all($search, $in, $matches);
			$in = preg_replace($search, $replace, $in);
			
			// Match failed. Ignore quote tags!
			if ($startCount != $endCount) {
				$in = $old_in;
			}


			$search = array(
				'~\[b](.*?)\[/b]~i',
				'~\[i](.*?)\[/i]~i',
				'~\[u](.*?)\[/u]~i',
				'~\[s](.*?)\[/s]~i',
				'~\[sup](.*?)\[/sup]~i',
				'~\[sub](.*?)\[/sub]~i',
				'~\[indent](.*?)\[/indent]~i',
				'~\[email]([a-z0-9-_.]+@[a-z0-9-.]+\.[a-z0-9-_.]+)?\[/email]~i',
				'~\[email=([^<]+?)](.*?)\[/email]~i',
				'~\[img](h t t p|h t t p s|f t p) : / /(.*?)\[/img]~ise',
				'~\[(left|right|center|justify)](.*?)\[/\1]~is',
				'~\[color=(#?[a-zA-Z0-9]+?)](.*?)\[/color]~is',
				'~\[font=([a-zA-Z0-9 \-]+?)](.*?)\[/font]~is',
				'~\[size=([0-9]+?)](.*?)\[/size]~is',
				'~\[spoiler](.*?)\[/spoiler]~i',
				'~\[code](.*?)\[/code]~ise',
				'~\[php](.*?)\[/php]~ise',
				'~\[php=([0-9]+?)](.*?)\[/php]~ise',
				'~\[url](h t t p|h t t p s|f t p) : / /(.+?)\[/url]~ise',
				'~\[url=(h t t p|h t t p s|f t p) : / /(.+?)](.+?)\[/url]~ise'
			);

			$replace = array(
				'<strong>\\1</strong>',
				'<em>\\1</em>',
				'<span style="text-decoration: underline;">\\1</span>',
				'<span style="text-decoration: line-through;">\\1</span>',
				'<sup>\\1</sup>',
				'<sub>\\1</sub>',
				'<p style=\'text-indent:2em\'>\\1</p>',
				'<a href="mailto:\\1">\\1</a>',
				'<a href="mailto:\\1">\\2</a>',
				'\'<img src="\' . str_replace(\' \', \'\', \'\\1://\\2\') . \'" alt="\' . str_replace(\' \', \'\', \'\\1://\\2\') . \'" />\'',
				'<p style=\'text-align:\\1\'>\\2</p>',
				'<span style=\'color:\\1\'>\\2</span>',
				'<span style=\'font-family:\\1\'>\\2</span>',
				'<span style=\'font-size:\\1ex\'>\\2</span>',
				$this->lang->spoiler . ':<br /><div class="spoiler">\\1</div>',
				'$this->format_code(\'\\1\', 0)',
				'$this->format_code(\'\\1\', 1)',
				'$this->format_code(\'\\2\', 1, \'\\1\')',
				'\'<a href="\' . str_replace(\' \', \'\', \'\\1://\\2\') . \'" onclick="window.open(this.href,\\\'' . $this->sets['link_target'] . '\\\');return false;" rel="nofollow">\' . str_replace(\' \', \'\', \'\\1://\\2\') . \'</a>\'',
				'\'<a href="\' . str_replace(\' \', \'\', \'\\1://\\2\') . \'" onclick="window.open(this.href,\\\'' . $this->sets['link_target'] . '\\\');return false;" rel="nofollow">\' . stripslashes(\'\\3\') . \'</a>\''
			);

			$in = preg_replace($search, $replace, $in);

			$in = str_replace(array('  ', "\t", '&amp;#'), array('&nbsp; ', '&nbsp; &nbsp; ', '&#'), $in);
		}

		return $in;
	}

	/**
	 * Formats code with line numbers and optionally syntax highlighting
	 *
	 * @param string $input Code to be formatted
	 * @param bool $php True to format as PHP
	 * @param int $start Starting line to count from
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string PHP-highlighted string
	 **/
	function format_code($input, $php, $start = 1)
	{
		$input = base64_decode($input);

		$input = rtrim($input);
		
		if ($php) {
			$title = 'PHP';

			if (strpos($input, '<?') === false) {
				$input  = '<?php ' . $input . '?>';
				$tagged = true;
			}

			$input = str_replace(array('\"', '\\'), array('"', '&#092;'), $input);

			ob_start();

			@highlight_string($input);
			$input = ob_get_contents();

			ob_end_clean();
			// Replace php4 font tags with span tags
			$input = preg_replace('/<font color="#([0-9A-F]+)">/', '<span style="color: #$1">', $input);
			$input = preg_replace('/<\/font>/', '</span>', $input);
			// Trim pointless space
			$input = preg_replace('/^<code><span style="color: #000000">\s(.+)\s<\/span>\s<\/code>$/', '<span style="color: #000000">$1</span>', $input);
		} else {
			$input = htmlspecialchars(str_replace(array('\'', '\"'), array('&#039;', '"'), $input));

			$title = $this->lang->main_code;
		}

		if (isset($tagged)) {
			$input = str_replace(array('&lt;?php ', '?&gt;'), '', $input);
		}

		if ($title == 'PHP') {
			$lines = explode('<br />', $input);
		} else {
			$lines = explode("\n", $input);
		}
		$count = count($lines);

		$col1 = '';
		$col2 = '';

		for ($i = 0; $i < $count; $i++)
		{
			$col1 .= $start . "\n";
			$col2 .= $lines[$i];
			$start++;
		}

		$height = ($count * 14) + 14;

		$return = '';
		if ($php) {
			$return = '<div class="code phpcode">';
		} else {
			$return = '<div class="code">';
		}
		$return .= '<div class="codetitle">' . $title . ':</div>';
		/* $return .= '<div class="codelines">$col1</div>'; */
		$return .= '<pre style="height:' . $height . 'px;" class="codedata">' . $col2 . '</pre></div>';

		return $return;
	}
	

	/**
	 * Finds all subforums of $parent in $array
	 *
	 * @param array $array Array of forums from forum_grab()
	 * @param int $parent forum_id of a parent forum
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 4.0
	 * @return array Array of subforums
	 **/
	function forum_array($array, $parent)
	{
		$arr = array();
		for ($i = 0; $i < count($array); $i++)
		{
			if ($array[$i]['forum_parent'] == $parent) {
				$arr[] = $array[$i];
			}
		}
		return $arr;
	}

	/**
	 * Gets all forums and puts them in an array
	 *
	 * @param string $sort Field to sort by
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 4.0
	 * @return array Array of all existing forums to be passed to select_forums()
	 **/
	function forum_grab($sort = 'forum_position')
	{
		$forums = array();
		$q = $this->db->query('SELECT forum_id, forum_parent, forum_tree, forum_name, forum_position FROM ' . $this->pre . 'forums ORDER BY ' . $sort);

		while ($f = $this->db->nqfetch($q))
		{
			$forums[] = $f;
		}

		return $forums;
	}

	/**
	 * Generates a random pronounceable password
	 *
	 * @param int $length Length of password
	 * @author http://www.zend.com/codex.php?id=215&single=1
	 * @since 1.1.0
	 */
	function generate_pass($length)
	{
		$vowels = array('a', 'e', 'i', 'o', 'u');
		$cons = array('b', 'c', 'd', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'u', 'v', 'w', 'tr',
		'cr', 'br', 'fr', 'th', 'dr', 'ch', 'ph', 'wr', 'st', 'sp', 'sw', 'pr', 'sl', 'cl');

		$num_vowels = count($vowels);
		$num_cons = count($cons);

		$password = '';

		for ($i = 0; $i < $length; $i++)
		{
			$password .= $cons[rand(0, $num_cons - 1)] . $vowels[rand(0, $num_vowels - 1)];
		}

		return substr($password, 0, $length);
	}
	
	/**
	 * Retrieves message icons and puts them into a table as radio buttons
	 *
	 * @param string $select Icon to select
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return string HTML-formatted message icons
	 **/
	function get_icons($select = -1)
	{
		$i     = 0;
		$icons = array();
		$dir   = opendir("./skins/$this->skin/mbicons");

		while (($file = readdir($dir)) !== false)
		{
			$ext = substr($file, -4);

			if ((($ext == '.gif') || ($ext == '.jpg') || ($ext == '.png')) && !is_dir("./skins/$this->skin/mbicons/$file")) {
				$icons[$i] = $file;
				$i++;
			}
		}

		closedir($dir);
		natsort($icons);

		$msgicons = null;
		$i        = 0;

		foreach ($icons as $icon)
		{
			if (($i % 8 == 0) && ($i != 0)) {
				$msgicons .= "\n</tr><tr>\n\n";
			}

			$msgicons .= "\n<td><input type='radio' name='icon' id='icon$i' value='$icon'" . (($select == $icon) ? ' checked=\'checked\'' : null) . " /><label for='icon$i'><img src='./skins/$this->skin/mbicons/$icon' alt='Message Icon' /></label>&nbsp;</td>";
			$i++;
		}
		return $msgicons;
	}

	/**
	 * Generates clickable emoticon HTML
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 3.0
	 * @return string HTML
	 * @todo move to HTMLwidgets
	 **/
	function make_clickable()
	{
		$return = null;

		if (!$this->replaces_loaded) {
			$this->get_replaces();
		}

		foreach ($this->emotes['replacement_clickable'] as $search => $replace)
		{
			$return .= "\n<li><a href='#' onclick=\"return insertSmiley('{$search}')\">{$replace}</a></li>";
		}

		return $return;
	}

	/**
	 * Loads emoticon and censor information from the replacements table
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return void
	 **/
	function get_replaces()
	{
		$this->replaces_loaded = true;

		$replace = $this->db->query("SELECT * FROM {$this->pre}replacements ORDER BY LENGTH(replacement_search) DESC");
		while ($r = $this->db->nqfetch($replace))
		{
			if ($r['replacement_type'] == 'emoticon') {
				$this->emotes['replacement'][$r['replacement_search']] = "<img src='./skins/$this->skin/emoticons/{$r['replacement_replace']}' alt='{$r['replacement_search']}' />";

				if ($r['replacement_clickable']) {
					$this->emotes['replacement_clickable'][$r['replacement_search']] = "<img src='./skins/$this->skin/emoticons/{$r['replacement_replace']}' alt='{$r['replacement_search']}' />";
				}
			} elseif ($r['replacement_type'] == 'censor') {
				$this->censor[] = '/' . $r['replacement_search'] . '/i';
			}
		}
	}
	
	/**
	 * Loads a user_language. Bet you couldn't figure that out...
	 *
	 * @param string $lang Language to load
	 * @param string $a Word set to load
	 * @param string $path Path to the user_languages directory
	 * @param bool $main Load main universal strings
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 3.0
	 * @return object Language
	 **/
	function get_lang($lang, $a = null, $path = './', $main = true)
	{
		if (isset($this->get['lang'])) {
			$lang = $this->get['lang'];
		}

		if (strstr($lang, '/') || !file_exists($path . 'languages/' . $lang . '.php')) {
			$lang = 'en';
		}

		include $path . 'languages/' . $lang . '.php';
		$obj = new $lang();

		// Check if language function is available before running it
		if ($a && is_callable(array($obj,$a))) {
			$obj->$a();
		}

		if ($main) {
			$obj->main();
		}
		$obj->universal();
		return $obj;
	}

	function get_lang_name($code)
	{
		$code = strtolower($code);

		switch($code)
		{
		case 'bg': return 'Bulgarian'; break;
		case 'zh': return 'Chinese'; break;
		case 'cs': return 'Czech'; break;
		case 'nl': return 'Dutch'; break;
		case 'en': return 'English'; break;
		case 'fi': return 'Finnish'; break;
		case 'fr': return 'French'; break;
		case 'de': return 'German'; break;
		case 'he': return 'Hebrew'; break;
		case 'hu': return 'Hungarian'; break;
		case 'id': return 'Indonesian'; break;
		case 'it': return 'Italian'; break;
		case 'no': return 'Norwegian'; break;
		case 'pt': return 'Portuguese'; break;
		case 'ru': return 'Russian'; break;
		case 'sk': return 'Slovak'; break;
		case 'es': return 'Spanish'; break;
		case 'sv': return 'Swedish'; break;
		default: return $code; break;
		}
	}

	/**
	 * Gets information about a member's level and title
	 *
	 * @param int $posts Member's post count
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return array Array of information about the member:<br /><i>string user_title</i> - default member title for that post count<br /><i>int user_level</i> - default member level for that post count
	 **/
	function get_level($posts)
	{
		$memtitle = array(
			'user_title' => '',
			'user_level' => '0'
		);

		$titles = $this->db->query("SELECT * FROM {$this->pre}membertitles WHERE membertitle_posts <= $posts ORDER BY membertitle_posts");

		while ($title = $this->db->nqfetch($titles))
		{
			if ($posts >= $title['membertitle_posts']) {
				$memtitle['user_title'] = $title['membertitle_title'];
				$memtitle['user_level'] = $title['membertitle_id'];
			} else {
				break;
			}
		}

		return $memtitle;
	}

	/**
	 * Retrieves the current server load
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return int Server load
	 **/
	function get_load()
	{
		if (get_cfg_var('safe_mode') || stristr(PHP_OS, 'WIN')) {
			return 0;
		}

		if (@file_exists('/proc/loadavg')) {
			$file = @fopen('/proc/loadavg', 'r');

			if (!$file) {
				return 0;
			}

			$load = explode(' ', fread($file, 6));
			fclose($file);
		} else {
			$load = @exec('uptime');

			if (!$load) {
				return 0;
			}

			$load = split('load averages?: ', $load);
			$load = explode(',', $load[1]);
		}

		return trim($load[0]);
	}

	/**
	 * Retrieves the number of personal messages the user has received
	 *
	 * @param bool $seen True to retreive all messages, false to retrieve only unread messages
	 * @param int $folder The folder to check user_pms for
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return int Count of personal messages
	 **/
	function get_messages($seen = false, $folder = 0)
	{
		$count = $this->db->fetch("SELECT COUNT(pm_id) AS messages FROM {$this->pre}pmsystem WHERE pm_to={$this->user['user_id']} AND pm_folder=$folder" . (!$seen ? " AND pm_read=0" : null));
		return $count['messages'];
	}

	/**
	 * Loads settings
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.1.0
	 * @return array Settings
	 **/
	function get_settings($sets)
	{
		$settings = $this->db->fetch("SELECT settings_data FROM {$this->pre}settings LIMIT 1");

		return array_merge($sets, unserialize($settings['settings_data']));
	}

	/**
	 * Determines if a user has been banned
	 *
	 * @return bool True if the user is banned, false if the user is not
	 **/
	function is_banned()
	{
		//Ban by user group
		if (!$this->perms->auth('do_anything')) {
			return true;
		}

		//Ban by IP
		if ($this->sets['banned_ips']) {
			foreach ($this->sets['banned_ips'] as $ip)
			{
				if (preg_match("/$ip/", $this->ip)) {
					return true;
				}
			}
		}

		return false;
	}

	/**
	 * Used as a replacement for date() which deals with time zones
	 *
	 * @param mixed $format Date format using date() keywords. Either a date constant or a string.
	 * @param int $time Timestamp. If left out, uses current time
	 * @param bool $useToday true if dates should substitute date with 'today' or 'yesterday'
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Human-readable, formatted Unix timestamp
	 **/
	function mbdate($format, $time = 0, $useToday = true)
	{
		if (!$time) {
			$time = $this->time;
		}

		$time += $this->tz_adjust;

		if (is_int($format)) {
			switch($format)
			{
			case DATE_LONG:
				$date_format = 'M j, Y';
				$time_format = ', g:i a';
				break;

			case DATE_SHORT:
				$date_format = 'n/j/y';
				$time_format = ', g:i a';
				break;

			case DATE_ONLY_LONG:
				$date_format = 'M j, Y';
				$time_format = '';
				break;

			case DATE_TIME:
				$date_format = '';
				$time_format = 'g:i a';
				break;

			case DATE_ISO822:
				$date_format = 'D, j M Y';
				$time_format = ' H:i:s T';
				break;

			default: // DATE_ONLY_SHORT
				$date_format = 'n/j/y';
				$time_format = '';
				break;
			}

			if (!$useToday) {
				$date = gmdate($date_format, $time);
			} else if ($date_format) {
				$date = gmdate($date_format, $time);
				$today = gmdate($date_format, $this->time + $this->tz_adjust);
				$yesterday = gmdate($date_format, ($this->time - DAY_IN_SECONDS) + $this->tz_adjust);

				if ($today == $date) {
					$date = $this->lang->today;
				} elseif ($yesterday == $date) {
					$date = $this->lang->yesterday;
				}
			} else {
				$date = '';
			}

			return $date . gmdate($time_format, $time);
		} else {
			return gmdate($format, $time);
		}
	}

	/**
	 * Formats a message, error, or notice
	 *
	 * @param string $title Title of the message
	 * @param string $message Text of the message
	 * @param string $link_text Text for a link
	 * @param string $link Destination for a link
	 * @param string $redirect Target for an automated redirect
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return string HTML-formatted message
	 **/
	function message($title, $message, $link_text = null, $link = null, $redirect = null)
	{
		if ($link_text) {
			$message .= '<br /><br /><a href="' . $link . '">' . $link_text . '</a>';
		}

		if ($redirect) {
			@header('Refresh: 4;url=' . $redirect);
		}

		return eval($this->template('MAIN_MESSAGE'));
	}

	/**
	 * Selects a post editing template
	 *
	 * @param int $f Forum to test moderator abilities in
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return array Moderator permissions
	 **/
	function post_box()
	{
		return 'POST_BOX_PLAIN'; // Not quite ready for Beta 4

		if (preg_match('/MSIE ([0-9]\.[0-9]{1,2})/', $this->agent, $browser)) {
			if (floor($browser[1]) >= 4) {
				if (!isset($this->get['rich'])) { //if ($this->user['post_style'] == 'rich') {
					return 'POST_BOX_RICH';
				} else {
					return 'POST_BOX_PLAIN';
				}
			}
		} else {
			return 'POST_BOX_PLAIN';
		}
	}

	/**
	 * Checks for quote tag formatting
	 *
	 * @param string $in Input
	 * @author Jared Kuolt <jared.kuolt@gmail.com>
	 * @since 1.1.3
	 * @return bool Returns true if all quote tags have corresponding end tags
	 **/
	function quote_check($in)
	{
		$preg_begin = array();

		preg_match_all('#\[quote=(.+?)]#i', $in, $out, PREG_PATTERN_ORDER);

		if (!empty($out[0])) {
			foreach ($out[0] as $match)
			{
				$preg_begin[] = strpos($in, $match);
			}
		}

		$begin = $this->strpos_array($in, '[quote]'); // Retrieve array for tag beginning
		$begin = array_merge($begin, $preg_begin); // Add those with preg_match'd quotes
		sort($begin);

		$end = $this->strpos_array($in, '[/quote]');

		if (count($begin) != count($end)) { // If the counts don't match, return value is false
			return false;
		}

		foreach ($begin as $count => $pos) // Check each occurence
		{
			if ($pos > $end[$count]) { // If position of the same occurence count of end tag
				return false; // is before the begin tag, return value is false
			}
		}

		return true;
	}

	/**
	 * Options for an HTML select box (all forums in correct order)
	 *
	 * @param array $array Array of forums
	 * @param int $select Option to set as selected (-1 for all)
	 * @param int $parent Used to degredate down through the recursive loop
	 * @param string $space Used to increment the spacing before the text in the box
	 * @param bool $identify_category Set to true to place a period before the value of a category
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 4.0
	 * @return string Options for an HTML select box (all forums in correct order)
	 * @todo Move this into htmlwidgets
	 **/
	function select_forums($array, $select = 0, $parent = 0, $space = '', $identify_category = false)
	{
		$arr = $this->forum_array($array, $parent);

		$return = null;
		foreach ($arr as $val)
		{
			if (!$this->perms->auth('forum_view', $val['forum_id'])) {
				continue;
			}

			if ($identify_category && !$val['forum_parent']) {
				$dot = '.';
			} else {
				$dot = null;
			}

			if (($val['forum_id'] != $select) && ($select != -1)) {
				$selected = null;
			} else {
				$selected = ' selected=\'selected\'';
			}

			$return .= '<option value="' . $dot . $val['forum_id'] . '"' . $selected . '>' . $space . $val['forum_name'] . "</option>\n" .
			$this->select_forums($array, $select, $val['forum_id'], $space . '&nbsp; &nbsp;');
		}

		return $return;
	}


	/**
	 * Create options of selectable languages
	 *
	 * @param string $current The current language being used
	 * @param string $relative Path to look for avatars in (optional)
	 * @return string HTML
	 * @todo Move to HTMLwidgets
	 **/
	function select_langs($current, $relative = '.')
	{
		$out   = null;
		$langs = array();
		$dir   = opendir($relative . '/languages');

		while (($file = readdir($dir)) !== false)
		{
			if (is_dir($relative . '/languages/' . $file)) {
				continue;
			}

			$code = substr($file, 0, -4);
			$ext  = substr($file, -4);
			if ($ext != '.php') {
				continue;
			}

			$langs[$code] = $this->get_lang_name($code);
		}

		asort($langs);

		foreach ($langs as $code => $name)
		{
			$out .= "<option value='$code'" . (($code == $current) ? ' selected=\'selected\'' : null) . ">$name</option>\n";
		}

		return $out;
	}
	
	/**
	 * Sets magic_quotes_gpc to on
	 *
	 * @param array $array Array to addslashes()
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return void
	 **/
	function set_magic_quotes_gpc(&$array)
	{
		$keys = array_keys($array);
		for($i = 0; $i < count($array); $i++)
		{
			if (is_array($array[$keys[$i]])) {
				$this->set_magic_quotes_gpc($array[$keys[$i]]);
			} else {
				$array[$keys[$i]] = addslashes($array[$keys[$i]]);
			}
		}
	}

	/**
	 * Sets the title of the page
	 *
	 * @param string $title The title
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function set_title($title)
	{
		$this->title = "{$this->sets['forum_name']} - $title";
	}

	/**
	 * Handles debug information when $debug is set in the query string
	 *
	 * @param int $load Server load
	 * @param int $totaltime Time to execute the board
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function show_debug($load, $totaltime)
	{
		include './func/debug.php';

		return $out; // This is set in debug.php
	}

	/**
	 * Returns an array of all the positions of needles in a haystack
	 *
	 * @param string $haystack Haystack
	 * @param string $needle Needle
	 * @author Jared Kuolt <jared.kuolt@gmail.com>
	 * @since 1.1.3
	 * @return array Array of positions of needles
	 **/
	function strpos_array($haystack, $needle)
	{
		$array  = array();
		$kill   = false;
		$offset = 0;

		while (!$kill)
		{
			$result = strpos($haystack, $needle, $offset);

			if ($result === false) { // If result is false (no more instances found), kill the while loop
				$kill = true;
			} else {
				$array[] = $result; // Set array
				$offset = $result + 1; // Offset is set 1 character after previous occurence
			}
		}

		return $array;
	}

	/**
	 * Adds an entry to the navigation tree
	 *
	 * @param string $label Label for the tree entry
	 * @param string $link URL to link to
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return void
	 **/
	function tree($label, $link = null)
	{
		$this->tree .= ' <b>&raquo;</b> ' . ($link ? "<a href='$link'>$label</a>" : $label);
	}

	/**
	 * Traces a forum back to the parent category and adds entries to the tree - see tree()
	 *
	 * @param int $f Forum to generate tree for
	 * @param bool $linklast True to make the last entry a link (default is false)
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return void
	 **/
	function tree_forums($f, $linklast = false)
	{
		$forums = $this->db->query("SELECT forum_tree, forum_id, forum_name FROM {$this->pre}forums ORDER BY forum_id");

		while ($forum = $this->db->nqfetch($forums))
		{
			if (!$this->perms->auth('forum_view', $forum['forum_id'])) {
				continue;
			}

			$id         = $forum['forum_id'];
			$fid[$id]   = $forum['forum_id'];
			$ftree[$id] = $forum['forum_tree'];
			$fname[$id] = $forum['forum_name'];
		}

		if (!isset($ftree[$f])) { //error? lets get out while we can
			return;
		}

		$cat = 1; //first forum is always a category
		$ft  = explode(',', $ftree[$f]);
		foreach ($ft as $i)
		{
			if ($i) {
				if (!$cat) {
					$this->tree($fname[$i], "$this->self?a=forum&amp;f={$fid[$i]}");
				} else {
					$this->tree($fname[$i], "$this->self?c={$fid[$i]}");
					$cat = 0;
				}
			}
		}

		if (!$linklast) {
			$this->tree($fname[$f]);
		} else {
			$this->tree($fname[$f], "$this->self?a=forum&amp;f={$fid[$f]}");
		}
	}
	
	/**
	 * Adds a link tag for an RSS feed available from the page
	 * Will ignore the request if no feed title is set in settings
	 *
	 * @param string $url Url to access the feed
	 * @param string $subtitle Title to indentify the feed as (optional)
	 * @author Geoffrey Dunn <geoff@warmage.com
	 * @since 1.1.9
	 **/
	function add_feed($url, $subtitle='')
	{
		if ($this->sets['rss_feed_title']) {
			if ($subtitle) {
				$subtitle = ' - ' . $subtitle;
			}
			$this->feed_links .= "<link rel=\"alternate\" title=\"{$this->sets['rss_feed_title']}$subtitle\" href=\"$url\" type=\"application/rss+xml\" />\n";
		}
	}

	/**
	 * Saves all data in the $this->sets array into a file
	 *
	 * @param string $sfile File to write settings into (default is settings.php)
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.1.0
	 * @return bool True on success, false on failure
	 **/
	function write_db_sets($sfile = './settings.php')
	{
		$settings = "<?php\n\$set = array();\n";

		$db_settings = array(
			'db_host'   => $this->sets['db_host'],
			'db_name'   => $this->sets['db_name'],
			'db_pass'   => $this->sets['db_pass'],
			'db_port'   => $this->sets['db_port'],
			'db_socket' => $this->sets['db_socket'],
			'db_user'   => $this->sets['db_user'],
			'dbtype'    => $this->sets['dbtype'],
			'prefix'    => $this->sets['prefix'],
			'installed' => $this->sets['installed']
		);

		foreach ($db_settings as $set => $val)
		{
			$settings .= "\$set['$set'] = '" . str_replace(array('\\', '\''), array('\\\\', '\\\''), $val) . "';\n";
		}

		$settings .= '?' . '>';

		$this->chmod($sfile, 0666);
		$fp = @fopen($sfile, 'w');

		if (!$fp) {
			return false;
		}

		if (!@fwrite($fp, $settings)) {
			return false;
		}

		fclose($fp);

		return true;
	}

	/**
	 * Saves all data in the $this->sets array to the database
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return void
	 **/
	function write_sets()
	{
		$db_settings = array(
			'db_host',
			'db_name',
			'db_pass',
			'db_port',
			'db_socket',
			'db_user',
			'dbtype',
			'prefix',
			'installed'
		);

		$sets = array();
		foreach ($this->sets as $set => $val)
		{
			if (!in_array($set, $db_settings)) {
				$sets[$set] = $val;
			}
		}

		$sets = addslashes(serialize($sets));
		$this->db->query("UPDATE {$this->pre}settings SET settings_data='$sets'");
	}
	
	/* Forum utility functions */

	/**
	 * Used to update topic and reply counts for every forum.
	 *
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Completion message
	 **/
	function RecountForums()
	{
		// Recount all topics and posts - NiteShdw
		$q = $this->db->query("SELECT topic_id, COUNT(post_id) AS replies FROM {$this->pre}topics, {$this->pre}posts WHERE post_topic=topic_id GROUP BY topic_id");
		
		while ($f = $this->db->nqfetch($q))
		{
			$treplies = $f['replies'] - 1;
			$this->db->query("UPDATE {$this->pre}topics SET topic_replies={$treplies} WHERE topic_id={$f['topic_id']}");
		}

		$q = $this->db->query("SELECT forum_id FROM {$this->pre}forums WHERE forum_parent = 0");
		$this->sets['posts'] = 0;
		$this->sets['topics'] = 0;

		while ($f = $this->db->nqfetch($q))
		{
			$results = $this->countTopicsAndReplies($f['forum_id']);

			$this->sets['posts'] += $results['replies'];
			$this->sets['topics'] += $results['topics'];
		}

		$this->write_sets();
		return "Recounted forums! Total topics: {$this->sets['topics']}. Total posts: {$this->sets['posts']}.";
	}
	
	/**
	 * Used for recursive topic and reply counting
	 *
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.5
	 * @param Forum to count
	 * @return Array containing topic Count, reply Count, last post, last post time
	 **/
	function countTopicsAndReplies($forum)
	{
		// Initalise locals
		$topicCount = 0;
		$replyCount = 0;
		$lastPostTime = 0;
		$lastPost = 0;
		
		// Check for subforums
		$q = $this->db->query("SELECT forum_id FROM {$this->pre}forums WHERE forum_parent=$forum");
		while ($f = $this->db->nqfetch($q))
		{
			$results = $this->countTopicsAndReplies($f['forum_id']);
			$topicCount += $results['topics'];
			$replyCount += $results['replies'];
			if ($results['lastPostTime'] > $lastPostTime) {
				$lastPostTime = $results['lastPostTime'];
				$lastPost = $results['lastPost'];
			}
		}
		
		// Count topics on this forum
		$tc = $this->db->fetch('SELECT COUNT(topic_id) tc 
				FROM ' . $this->pre . 'topics 
				WHERE NOT(topic_modes & ' . TOPIC_MOVED . ') AND topic_forum=' . $forum);
		$rc = $this->db->fetch('SELECT COUNT(p.post_id) rc
				FROM ' . $this->pre . 'posts p, ' . $this->pre . 'topics t 
				WHERE p.post_topic=t.topic_id AND topic_forum=' . $forum);
		$lp = $this->db->fetch('SELECT p.post_time pt, p.post_id post
				FROM ' . $this->pre . 'posts p, ' . $this->pre . 'topics t 
				WHERE p.post_topic=t.topic_id AND topic_forum=' . $forum . '
				ORDER BY p.post_time DESC LIMIT 1');
		
		$topicCount += $tc['tc'];
		$replyCount += $rc['rc'];
		if ($lp['pt'] > $lastPostTime) {
			$lastPostTime = $lp['pt'];
			$lastPost = $lp['post'];
		}
		
		// Update the details
		$this->db->query("UPDATE {$this->pre}forums SET forum_replies='" . ($replyCount - $topicCount) . "',
				forum_topics='{$topicCount}', forum_lastpost='{$lastPost}' WHERE forum_id='{$forum}'");
		
		return array('topics' => $topicCount, 'replies' => $replyCount, 'lastPost' => $lastPost, 'lastPostTime' => $lastPostTime);
	}
	
	/**
	 * Update Forum Trees
	 *
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.5
	 **/
	function updateForumTrees()
	{
		$forums = array();
		$forumTree = array();
		
		// Build tree structure of 'id' => 'parent' structure
		$q = $this->db->query("SELECT forum_id, forum_parent FROM {$this->pre}forums ORDER BY forum_parent");
		
		while ($f = $this->db->nqfetch($q))
		{
			if ($f['forum_parent']) {
				$forums[$f['forum_id']] = $f['forum_parent'];
			}
		}
		
		// Run through group
		$q = $this->db->query("SELECT forum_parent FROM {$this->pre}forums GROUP BY forum_parent");

		while ($f = $this->db->nqfetch($q))
		{
			if ($f['forum_parent']) {
				$tree = $this->buildTree($forums, $f['forum_parent']);
			} else {
				$tree = '';
			}
		
			$this->db->query("UPDATE {$this->pre}forums SET forum_tree='$tree' WHERE forum_parent={$f['forum_parent']}");
		}
	}
	
	function buildTree($forumsArray, $parent)
	{
		$tree = '';
		if (isset($forumsArray[$parent]) && $forumsArray[$parent]) {
			$tree = $this->buildTree($forumsArray, $forumsArray[$parent]);
			$tree .= ',';
		}
		$tree .= $parent;
		return $tree;
	}	
}

?>
