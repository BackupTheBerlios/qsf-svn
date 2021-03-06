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

if (!defined('QUICKSILVERFORUMS') || !defined('QSF_ADMIN')) {
	header('HTTP/1.0 403 Forbidden');
	die;
}

require_once $set['include_path'] . '/admincp/admin.php';

/**
 * Query Interface
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since RC1
 **/
class query extends admin
{
	/**
	 * Query Interface
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since RC1
	 * @return string HTML
	 **/
	function execute()
	{
		$this->set_title($this->lang->query);
		$this->tree($this->lang->query);

		if (!isset($this->post['submit'])) {
			return $this->message($this->lang->query, "
			<form action='{$this->self}?a=query' method='post'><div>
				<textarea class='input' name='sql' cols='30' rows='15' style='width:100%'>SELECT * FROM {$this->pre}groups</textarea><br /><br />
				<input type='submit' name='submit' value='{$this->lang->submit}' /></div>
			</form>");
		} else {
			$result = $this->db->query($this->post['sql']);

			if (is_resource($result)) {
				$sql = htmlspecialchars($this->post['sql']);
				$show_headers = true;
				$this->iterator_init('tablelight', 'tabledark');

				$out = $this->message($this->lang->query, "<form action='{$this->self}?a=query' method='post'><div>
					<textarea class='input' name='sql' cols='30' rows='15' style='width:100%'>$sql</textarea><br /><br />
					<input type='submit' name='submit' value='{$this->lang->submit}' /></div>
					</form><br />");
				$out .= $this->table;

				while ($row = $this->db->nqfetch($result))
				{
					if ($show_headers) {
						$out .= "<tr>\n";

						foreach ($row as $col => $data)
						{
							$out .= "<td class='header'>$col</td>\n";
						}

						$out .= "</tr>\n";

						$show_headers = false;
					}

					$out .= "<tr>\n";
					$this->iterate();

					foreach ($row as $col => $data)
					{
						$out .= "<td class='" . $this->lastValue() . "'>" . $this->format($data, FORMAT_HTMLCHARS) . "</td>\n";
					}

					$out .= "</tr>\n";
				}

				return $out . $this->etable;
			} else {
				return $this->message($this->lang->query, $this->lang->query_your . ' ' . ($result ? $this->lang->query_success : $this->lang->query_failed));
			}
		}
	}
}
?>
