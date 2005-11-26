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
 * Base modlet class
 *
 * @author Geoffrey Dunn <quicken@swiftdsl.com.au>
 * @since 1.1.5
 **/
class modlet
{
    /**
     * Pointer to the running module object
     **/
    var $qsf;
    
    /**
     * Constructor.
     *
     * Set any variables specific to your
     * class in the constructor
     *
     * @param object reference to running module
     * @author Geoffrey Dunn <geoff@warmage.com>
     * @since 1.1.5
     **/
    function modlet(&$forumobject)
    {
        $this->qsf =& $forumobject;
    }

    /**
     * Initialiser
     *
     * This is where you can safely
     * set variable inherited from a parent
     * or run methods that might be changed in a child
     * or look at other templates
     *
     * @author Geoffrey Dunn <geoff@warmage.com>
     * @since 1.1.5
     **/
    function init()
    {
    }

    /**
     * Main interface
     *
     * This is what's run to generate output for the page
     *
     * @param string optional string that is passed from the template
     * @author Geoffrey Dunn <geoff@warmage.com>
     * @since 1.1.5
     * @return string HTML to appear within the template
     **/
    function run($param)
    {
    }
}
?>
