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

require './common.php';

class php_info extends admin
{
	function execute()
	{
		$this->nohtml = true;

		if (!function_exists('phpinfo')) {
			return $this->message($this->lang->php_error, $this->lang->php_error_msg);
		}

		ob_start();
		phpinfo();
		$phpinfo = ob_get_contents();
		ob_end_clean();

		return $phpinfo;
	}
}
?>
