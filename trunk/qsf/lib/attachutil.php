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
 * Contains all the functions commonly used for handling attachments
 *
 * @author Geoffrey Dunn <geoff@warmage.com>
 * @since 1.1.8
 **/
class attachutil
{
	/**
	 * Constructor
	 *
	 * @param $qsf - Quicksilver Forums module
	 **/
	function attachutil(&$qsf)
	{
		$this->db  = &$qsf->db;
		$this->pre = &$qsf->pre;
		$this->sets = &$qsf->sets;
		$this->lang = &$qsf->lang;
	}
	
	/**
	 * Processes an attachment upload
	 *
	 * @param array $file file upload information
	 * @param array $attached_data attachments to insert
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.8
	 *
	 * @todo Change the language strings from post_ to something more universal
	 **/
	function attach(&$file, &$attached_data)
	{
		$upload_error = null; // Null is no error
		if (!isset($file)) {
			$upload_error = $this->lang->post_attach_failed;
		} else {
			$md5 = md5($file['name'] . microtime());

			$ret = $this->upload($file, './attachments/' . $md5, $this->sets['attach_upload_size'], $this->sets['attach_types']);

			switch($ret)
			{
			case UPLOAD_TOO_LARGE:
				$upload_error = sprintf($this->lang->post_attach_too_large, round($this->sets['attach_upload_size'] / 1024, 1));
				break;

			case UPLOAD_NOT_ALLOWED:
				$upload_error = $this->lang->post_attach_not_allowed;
				break;

			case UPLOAD_SUCCESS:
				$attached_data[$md5] = $file['name'];
				break;

			default:
				$upload_error = $this->lang->post_attach_failed;
			}
		}
		return $upload_error;
	}
	
	/**
	 * Deletes a file off disk and removes it from the attachment data
	 *
	 * @param string $filename md5 encoded filename
	 * @param array $attached_data attachments to insert
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.8
	 **/
	function delete($filename, &$attached_data)
	{
		unset($attached_data[$filename]);
		@unlink('./attachments/' . $filename);
	}
	
	/**
	 * Processes attach data and builds form elements
	 *
	 * @param string $options string to store option tags
	 * @param string $hiddennames string to store hidden input tags
	 * @param array $attached_data attachments to insert
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.8
	 **/
	function getdata(&$options, &$hiddennames, $attached_data)
	{
		foreach ($attached_data as $md5 => $file)
		{
			$file = htmlspecialchars($file);

			$options .= "<option value='$md5'>$file</option>\n";
			$hiddennames .= "<input type='hidden' name='attached_data[$md5]' value='$file' />\n";
		}
	}
	
	/**
	 * Adds an attachment record to the database
	 *
	 * @param int $post_id id number of the post we're attaching to
	 * @param array $attached_data attachments to insert
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.8
	 **/
	function insert($post_id, $attached_data)
	{
		$attachments = null;

		foreach ($attached_data as $md5 => $filename)
		{
			$attachments .= "('$md5', '$filename', $post_id, '" . filesize('./attachments/' . $md5) . '\'), ';
		}

		$this->db->query("INSERT INTO {$this->pre}attach (attach_file, attach_name, attach_post, attach_size) VALUES " . substr($attachments, 0, -2));
	}

	/**
	 * Uploads a file
	 *
	 * @param array $file Post-uploaded file
	 * @param string $destination Where to put the uploaded file
	 * @param int $max_size Maximum file size to accept, in bytes
	 * @param array $allowed_types File extensions to allow
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 3.0
	 * @return int Result of the upload attempt
	 **/
	function upload($file, $destination, $max_size, $allowed_types)
	{
		if ($file['size'] > $max_size) {
			return UPLOAD_TOO_LARGE;
		}

		$temp = explode('.', $file['name']);
		$ext = strtolower(end($temp));

		if (!in_array($ext, $allowed_types)) {
			return UPLOAD_NOT_ALLOWED;
		}

		if (is_uploaded_file($file['tmp_name'])) {
			$result = @copy($file['tmp_name'], str_replace('\\', '/', $destination));
			if ($result) {
				return UPLOAD_SUCCESS;
			}
		}
		return UPLOAD_FAILURE;
	}
}
?>