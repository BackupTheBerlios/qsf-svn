<?php

/**
 * Quicksilver Forums
 * Copyright (c) 2007 The Quicksilver Forums Development Team
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

// OOP example
class bbcode_extend_example extends plugin
{
	private $qsf = null;

	public function register( &$qsf )
	{
		$qsf->event_register( 'bbcode_init', array( &$this, 'bbcode_register' ) );
		$this->qsf = $qsf;
	}

	public function bbcode_register( &$qsf, &$vars )
	{
		$qsf->bbcode->handlers['patch'] = array( &$this, '_patch' );
		$qsf->bbcode->handlers['time'] = array( &$this, '_time' );

		return $vars;
	}

	public function _patch( &$bbcode, &$node )
	{
		$lines = explode( "\n", $node->text );

		$html = null;

		foreach( $lines as $line )
		{
			$len = strlen( $line );
			if ( 6 < $len )
			{
				if ( 'Index:' == substr( $line, 0, 6 ) )
				{
					$html .= '<span style="color: green;">' . $line . '</span><br />';
					continue;
				}

				if ( '---' == substr( $line, 0, 3 ) || '+++' == substr( $line, 0, 3 ) )
				{
					$html .= '<span style="color: green;">' . $line . '</span><br />';
					continue;
				}

				if ( '@@' == substr( $line, 0, 2 ) )
				{
					$html .= '<span style="color: yellow;">' . $line . '</span><br />';
					continue;
				}
			}

			if ( 0 != $len )
			{
				if ( '+' == $line[0] )
				{
					$html .= '<span style="color: cyan;">' . $line . '</span><br />';
					continue;
				}

				if ( '-' == $line[0] )
				{
					$html .= '<span style="color: red;">' . $line . '</span><br />';
					continue;
				}
			}

			$html .= $line . '<br />';
		}

		$html = 'Patch:<br /><div style="background-color: black; color: white; border: 1px solid grey; padding: 3px;font-family: monospace;">' . $html . '</div>';

		return $html;
	}

	function _time( &$bbcode, &$node )
	{
		if ( preg_match( '/([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{2,4}) ([0-9]{1,2})\:([0-9]{1,2})/', $node->text, $matchs ) )
		{
			return $this->qsf->mbdate(DATE_LONG, gmmktime( (int) $matchs[4], (int) $matchs[5], (int) $matchs[2], (int) $matchs[1], (int) $matchs[3] ) ) .
			'&nbsp;' . $this->qsf->user['zone_abbrev']. '&nbsp;(GMT/UTC' . (($this->qsf->user['zone_offset']) ? sprintf('+%1.1f', ($this->qsf->user['zone_offset'] / 3600)) : '+0.0') . ')<br />' . gmdate('M j, Y, g:i a', gmmktime( (int) $matchs[4], (int) $matchs[5], (int) $matchs[2], (int) $matchs[1], (int) $matchs[3] ) ) . '&nbsp;GMT<br />(<a href="http://www.timeanddate.com/worldclock/fixedtime.html?day=' . (int) $matchs[1] . '&amp;month=' . (int) $matchs[2] . '&amp;year=' . $matchs[3] . '&amp;hour=' . $matchs[4] . '&amp;min=' . $matchs[5] . '&amp;sec=0&amp;p1=0" rel="nofollow">timeanddate.com</a>)';

		}

		return '[time]' . htmlentities( $node->text, ENT_COMPAT, 'UTF-8' ) . '[/time]';
	}
}

?>
