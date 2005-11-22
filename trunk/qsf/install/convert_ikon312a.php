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
 * Ikonboard 3.12a Conversion Script.
 * Based on work by Yazinin Nick <admin@vk.net.ru>
 *
 * Roger Libiez [Samson] <http://mercuryboard.afkmud.com>
 *
 * Script tested on an unmodified Ikonboard 3.12a database.
 * Use with any other version is not advised!
 **/

require_once './convert_db.php';
require_once '../settings.php';
require_once '../func/constants.php';
require_once '../lib/' . $set['dbtype'] . '.php';
require_once '../global.php';

define('CONVERTER_NAME', 'Ikonboard 3.12a Convertor');

$qsf = new qsfglobal;
$qsf->db = new database( $set['db_host'], $set['db_user'], $set['db_pass'], $set['db_name'], $set['db_port'], $set['db_socket'] );

if( !$qsf->db->connection )
{
   error( QUICKSILVER_ERROR, 'A connection to the Quicksilver Forums database could not be established. Please check your settings and try again.', __FILE__, __LINE__ );
}

$oldboard = new qsfglobal; // Yes, I know this looks goofy, but we want to try and leverage the Mercury code as much as possible
$oldboard->db = new database( $oldset['old_db_host'], $oldset['old_db_user'], $oldset['old_db_pass'], $oldset['old_db_name'], $oldset['old_db_port'], $oldset['old_db_socket'] );

if( !$oldboard->db->connection )
{
   error( QUICKSILVER_ERROR, 'A connection to the Ikonboard database could not be established. Please check your settings and try again.', __FILE__, __LINE__ );
}

$qsf->pre  = $qsf->db->db . "." . $set['prefix'];
$oldboard->pre = $oldboard->db->db . "." . $oldset['old_prefix'];

function write_olddb_sets( $oldset )
{
   $settings = "<?php\n\$oldset = array();\n";

   $db_settings = array(
      'old_db_host'   => $oldset['old_db_host'],
      'old_db_name'   => $oldset['old_db_name'],
      'old_db_pass'   => $oldset['old_db_pass'],
      'old_db_port'   => $oldset['old_db_port'],
      'old_db_socket' => $oldset['old_db_socket'],
      'old_db_user'   => $oldset['old_db_user'],
      'old_dbtype'    => $oldset['old_dbtype'],
      'old_prefix'    => $oldset['old_prefix'],
      'converted'     => $oldset['converted'],
      'profiles'      => $oldset['profiles'],
      'prof_count'    => $oldset['prof_count'],
      'pms'           => $oldset['pms'],
      'pm_count'      => $oldset['pm_count'],
      'titles'        => $oldset['titles'],
      'title_count'   => $oldset['title_count'],
      'cats'          => $oldset['cats'],
      'cat_count'     => $oldset['cat_count'],
      'forums'        => $oldset['forums'],
      'forum_count'   => $oldset['forum_count'],
      'topics'        => $oldset['topics'],
      'topic_count'   => $oldset['topic_count'],
      'polls'         => $oldset['polls'],
      'poll_count'    => $oldset['poll_count'],
      'posts'         => $oldset['posts'],
      'post_count'    => $oldset['post_count'],
      'post_inc'      => $oldset['post_inc']
   );

   foreach( $db_settings as $oldset => $val )
   {
      $settings .= "\$oldset['$oldset'] = '" . str_replace(array('\\', '\''), array('\\\\', '\\\''), $val) . "';\n";
   }

   $settings .= '?' . '>';

   @chmod( $sfile, 0666 );
   $fp = @fopen( './convert_db.php', 'w' );

   if( !$fp )
   {
      return false;
   }

   if( !@fwrite( $fp, $settings ) )
   {
      return false;
   }
   fclose( $fp );
   return true;
}

/*
 * Remove all of the offending junky HTML Ikonboard encoded into message text.
 * Thanks to the good people who frequent php.net for posting examples of how to use regex.
 * It obviously helped alot, especially with Ikonboard's ugly non-validating HTML 4.01
 */
function strip_ikon_tags( $text )
{
   // The [html] BBCode tag is not supported by Quicksilver Forums, so when the horrid mess is encountered in Ikonboard.......
   $text = preg_replace( "#<!--html-->(.*?)<!--html3-->#", "HTML BLOCK REMOVED", $text );

   // Convert emoticons....
   $text = preg_replace( "#<!--emo&(.+?)-->.+?<!--endemo-->#", "\\1" , $text );

   /* Convert image tags.
    * We'll even be nice and fix malformed ones in posts.
    */
   $text = preg_replace( "#<img src=[\"'](\S+?)['\"].+?".">#", "[img]\\1[/img]", $text );
   $text = preg_replace( '/\[img=(.*?)\](.*?)\[\/img\]/si', '[img]\\1[/img]', $text );

   // Convert email tags....
   $text = preg_replace( "#<a href=[\"']mailto:(.+?)['\"]>(.+?)</a>#", "\[email=\\1\]\\2\[/email\]", $text );

   // Convert URLs....
   $text = preg_replace( "#<a href=[\"'](.+?)['\"] target=[\"'](.+?)['\"]>(.+?)</a>#", "\[url=\\1\]\\3\[/url\]", $text );

   // Convert color tags....
   $text = preg_replace( "#<span style=[\"']color:(.+?)[\"']>(.+?)</span>#", "\[color=\\1\]\\2\[/color\]", $text );

   // Font tags are not desired, so they will be summarily parsed out....
   $text = preg_replace( "#<font(.+?)>#", "", $text );
   $text = str_replace ( "</font>", "", $text );

   // Span tags at this point are also not desired.
   $text = preg_replace( "#<span(.+?)>#", "", $text );
   $text = str_replace ( "</span>", "", $text );

   // Reconfigure code tags.
   $text = preg_replace( "#<!--c1-->(.+?)<!--ec1--><br>#", '[code]', $text );
   $text = preg_replace( "#<!--c1-->(.+?)<!--ec1-->#", '[code]', $text );
   $text = preg_replace( "#<!--c2-->(.+?)<!--ec2-->#", '[/code]', $text );

   // Strip flash movies and let people know about it.
   $text = preg_replace( "'<!--Flash[^>]*?>.*?<!--End Flash-->'si", "Flash image stripped during conversion.", $text );

   // Reconfigure quote tags.
   $text = preg_replace( "#<!--QuoteBegin-(.+?)<!--QuoteEBegin-->#", "[quote]", $text );
   $text = preg_replace( "#<!--QuoteEnd-->(.+?)<!--QuoteEEnd-->#", "[/quote]", $text );

   // Fix the text formatting tags....
   $text = preg_replace( "#<i>(.+?)</i>#is", "[i]\\1[/i]", $text );
   $text = preg_replace( "#<b>(.+?)</b>#is", "[b]\\1[/b]", $text );
   $text = preg_replace( "#<s>(.+?)</s>#is", "[s]\\1[/s]", $text );
   $text = preg_replace( "#<u>(.+?)</u>#is", "[u]\\1[/u]", $text );
   $text = str_replace( "<br>", "\n\r", $text );

   // Fix random junk in the post code....
   $text = str_replace( "'", "\'", $text );
   $text = str_replace( "&nbsp;", " ", $text );
   $text = str_replace( "&gt;", ">", $text );
   $text = str_replace( "&lt;", "<", $text );
   $text = str_replace( "&amp;", "&", $text );
   $text = str_replace( "&quot;", "\"", $text );
   $text = str_replace( "&#33;", "!", $text );
   $text = str_replace( "&#033;", "!", $text );
   $text = str_replace( "&#34;", "\"", $text );
   $text = str_replace( "&#36;", "$", $text );
   $text = str_replace( "&#036;", "$", $text );
   $text = str_replace( "&#37;", "\%", $text );
   $text = str_replace( "&#39;", "\'", $text );
   $text = str_replace( "&#039;", "\'", $text );
   $text = str_replace( "&#40;", "(", $text );
   $text = str_replace( "&#41;", ")", $text );
   $text = str_replace( "&#58;", ":", $text );
   $text = str_replace( "&#59;", ";", $text );
   $text = str_replace( "&#60;", "<", $text );
   $text = str_replace( "&#62;", ">", $text );
   $text = str_replace( "&#064;", "@", $text );
   $text = str_replace( "&#64;", "@", $text );
   $text = str_replace( "&#91;", "[", $text );
   $text = str_replace( "&#092;", "\\", $text );
   $text = str_replace( "&#92;", "\\", $text );
   $text = str_replace( "&#92", "\\", $text );
   $text = str_replace( "&#93;", "]", $text );
   $text = str_replace( "&#95;", "\_", $text );
   $text = str_replace( "&#124;", "|", $text );

   $text = str_replace( "\\n", "\\\\n", $text );
   $text = str_replace( "\\r", "\\\\r", $text );
   $text = str_replace( "\\t", "\\\\t", $text );
   $text = str_replace( "\\e", "\\\\e", $text );
   $text = str_replace( "\\0", "\\\\0", $text );

   return $text;
}

if( $_GET['action'] == '' )
{
   if( $oldset['converted'] == '0' )
   {
      $oldset['converted'] = '1';
      $oldset['profiles'] = '0';
      $oldset['prof_count'] = '0';
      $oldset['pms'] = '0';
      $oldset['pm_count'] = '0';
      $oldset['titles'] = '0';
      $oldset['title_count'] = '0';
      $oldset['cats'] = '0';
      $oldset['cat_count'] = '0';
      $oldset['forums'] = '0';
      $oldset['forum_count'] = '0';
      $oldset['topics'] = '0';
      $oldset['topic_count'] = '0';
      $oldset['polls'] = '0';
      $oldset['poll_count'] = '0';
      $oldset['posts'] = '0';
      $oldset['post_count'] = '0';

      write_olddb_sets( $oldset );
   }

   $prof = $oldset['profiles'];
   $prof_count = $oldset['prof_count'];
   $pms = $oldset['pms'];
   $pm_count = $oldset['pm_count'];
   $titles = $oldset['titles'];
   $title_count = $oldset['title_count'];
   $cats = $oldset['cats'];
   $cat_count = $oldset['cat_count'];
   $forums = $oldset['forums'];
   $forum_count = $oldset['forum_count'];
   $topics = $oldset['topics'];
   $topic_count = $oldset['topic_count'];
   $polls = $oldset['polls'];
   $poll_count = $oldset['poll_count'];
   $posts = $oldset['posts'];
   $post_count = $oldset['post_count'];

   include 'templates/convert_header.php';
   include 'templates/convert_ikon_memberprofiles.php';

   if( $prof_count > '0' )
      echo "<td class='tablelight' align='left'>".$prof_count." member profiles converted.</td>\n";
   else
      echo "<td class='tablelight'>&nbsp;</td>\n";
   echo "</tr>\n";

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_ikon312a.php?action=pmessages'>Convert Private Messages</a></td>\n";
      if( $pms == '1' )
         echo "<td class='tablelight' align='left'>".$pm_count." private messages converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_ikon312a.php?action=mtitles'>Convert Member Titles</a></td>\n";
      if( $titles == '1' )
         echo "<td class='tablelight' align='left'>".$title_count." member titles converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_ikon312a.php?action=categories'>Convert Categories</a></td>\n";
      if( $cats == '1' )
         echo "<td class='tablelight' align='left'>".$cat_count." categories converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $cats == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_ikon312a.php?action=forums'>Convert Forums</a></td>\n";
      if( $forums == '1' )
         echo "<td class='tablelight' align='left'>".$forum_count." forums converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' && $forums == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_ikon312a.php?action=topics'>Convert Topics</a></td>\n";
      if( $topics == '1' )
         echo "<td class='tablelight' align='left'>".$topic_count." topics converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' && $topics == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_ikon312a.php?action=polls'>Convert Polls</a> ( BUGGY )</td>\n";
      if( $polls == '1' )
         echo "<td class='tablelight' align='left'>".$poll_count." polls converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' && $topics == '1' )
   {
      echo "<tr>\n";
      if( $posts == '0' )
      {
         echo "<td class='tablelight' align='left'><a href='convert_ikon312a.php?action=posts'>Convert Posts</a></td>\n";
         echo "<td class='tablelight'>&nbsp;</td>\n";
      }
      else if( $posts == '1' )
      {
         echo "<td class='tablelight' align='left'><a href='convert_ikon312a.php?action=posts&amp;start=".$post_count."&amp;i=".$post_count."'>Continue post conversion</a></td>\n";
         echo "<td class='tablelight' align='left'>".$post_count." posts converted so far.</td>\n";
      }
      else
      {
         echo "<td class='tablelight' align='left'><a href='convert_ikon312a.php?action=posts'>Convert Posts</a></td>\n";
         echo "<td class='tablelight' align='left'>".$post_count." posts converted.</td>\n";
      }
      echo "</tr>\n";
   }

   echo "<tr>\n";
   echo "<td class='tablelight'>&nbsp;</td>\n";
   echo "<td class='tablelight'>&nbsp;</td>\n";
   echo "</tr>\n";

   if( $posts == '2' || $oldset['converted'] == '2' )
   {
      $qsf->db->query( "DROP TABLE IF EXISTS {$qsf->pre}ikon_ids" );
      $qsf->sets = $qsf->get_settings($qsf->sets);
      $qsf->updateForumTrees();
      $qsf->RecountForums();
      
      include 'templates/convert_ikon_finished.php';
   }
   include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'dropikon' )
{
    include 'templates/convert_header.php';
    include 'templates/convert_ikon_destroydata.php';
    include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'confirmikondrop' )
{
   $qsf->db->query( "DROP TABLE IF EXISTS {$qsf->pre}ikon_ids" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}active_sessions" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}address_books" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}attachments" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}authorisation" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}calendar" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}categories" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}email_templates" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forum_info" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forum_moderators" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forum_poll_voters" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forum_polls" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forum_posts" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forum_rules" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forum_subscriptions" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forum_topics" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}help" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}mem_groups" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}member_notepads" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}member_profiles" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}member_titles" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}message_data" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}message_stats" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}mod_email" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}mod_posts" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}moderator_logs" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}search_log" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}ssi_templates" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}templates" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}topic_views" );

   include 'templates/convert_header.php';
   include 'templates/convert_ikon_datadestroyed.php';
   include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'members' )
{
   /*
    * Newer versions of Ikonboard you might have upgraded to store new member IDs in a different format.
    * Since this is less than ideal, we need to store the offending IDs in a table to be converted.
    * Safe bet - count up the number of existing Ikon profiles, add one, and start changing their ID numbers from there.
    * Some people will end up with ID numbers they don't expect, but who cares as long as it works, right?
    */
   $i = '0';
   $num = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}member_profiles" );
   $all = $oldboard->db->num_rows( $num );
   $MID = $all + 1;

   $qsf->db->query( "TRUNCATE {$qsf->pre}users" );
   $sql = "INSERT INTO {$qsf->pre}users VALUES( 1, 'Guest', '', 0, 1, '', 0, 3, 'default', 'en', '', 'none', 0, 0, '', 0, 0, '0000-00-00', '151', '', 0, '', 0, '', '', '', 0, 1, '', '', '', 0, 0, 0, 0, 1, 1, 1, '' )";
   $result = $qsf->db->query($sql);

   $sql = "SELECT * FROM {$oldboard->pre}member_profiles";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      while( $row['MEMBER_ID'] >= $MID )
         $MID++;

      if( $row['MEMBER_ID'] == '1' )
         $row['MEMBER_ID'] = '2';

      $pos = strpos( $row['MEMBER_ID'], '-' );
      if( $pos != false )
      {
         $IDTABLE[] = array( 'name' => $row['MEMBER_NAME'], 'newid' => $MID, 'oldid' => $row['MEMBER_ID'] );
         $row['MEMBER_ID'] = $MID;
         $MID++;
      }
      if( $row['HIDE_EMAIL'] == '' || $row['HIDE_EMAIL'] == '1' )
         $showmail = '0';
      else
         $showmail = '1';

      if( $row['LAST_LOG_IN'] == '' )
         $row['LAST_LOG_IN'] = $row['MEMBER_JOINED'];
      if( $row['LAST_ACTIVITY'] == '' )
         $row['LAST_ACTIVITY'] = $row['MEMBER_JOINED'];

      $row['WEBSITE'] = strip_ikon_tags( $row['WEBSITE'] );
      $row['LOCATION'] = strip_ikon_tags( $row['LOCATION'] );
      $row['INTERESTS'] = strip_ikon_tags( $row['INTERESTS'] );
      $row['SIGNATURE'] = strip_ikon_tags( $row['SIGNATURE'] );

      /* The default Ikonboard groups they claim you can never alter.
       * Additional groups will not be converted. Members in these groups will become standard members.
       */
      if( $row['MEMBER_GROUP'] == '1' )
         $row['MEMBER_GROUP'] = '5';
      else if( $row['MEMBER_GROUP'] == '2' )
         $row['MEMBER_GROUP'] = '3';
      else if( $row['MEMBER_GROUP'] == '3' )
         $row['MEMBER_GROUP'] = '2';
      else if( $row['MEMBER_GROUP'] == '4' )
         $row['MEMBER_GROUP'] = '1';
      else
         $row['MEMBER_GROUP'] = '2';

      $level = $row['MEMBER_LEVEL'] + 1;
      if( $level < '1' )
         $level = '1';

      $pos = strpos( $row['MEMBER_AVATAR'], '://' );
      if( $pos == '4' )
      {
         $avatar = $row['MEMBER_AVATAR'];
         $width = '64';
         $height = '64';
         $type = "url";
      }
      else
      {
         $avatar = '';
         $width = '0';
         $height = '0';
         $type = "none";
      }
      $qsf->db->query( "INSERT INTO {$qsf->pre}users VALUES( {$row['MEMBER_ID']}, '{$row['MEMBER_NAME']}', '{$row['MEMBER_PASSWORD']}', {$row['MEMBER_JOINED']}, '{$level}', '{$row['MEMBER_TITLE']}', 0, {$row['MEMBER_GROUP']}, 'default', 'en', '{$avatar}', '${type}', '{$width}', '{$height}', '{$row['MEMBER_EMAIL']}', $showmail, '', '0000-00-00', '151', '{$row['WEBSITE']}', {$row['MEMBER_POSTS']}, '{$row['LOCATION']}', '{$row['ICQNUMBER']}', '{$row['MSNNAME']}', '{$row['AOLNAME']}', '', 1, 1, '{$row['YAHOONAME']}', '{$row['INTERESTS']}', '{$row['SIGNATURE']}', {$row['LAST_LOG_IN']}, {$row['LAST_ACTIVITY']}, 0, 0, 1, 1, 1, '' )" );
      $i++;
   }

   $qsf->db->query( "DROP TABLE IF EXISTS {$qsf->pre}ikon_ids" );
   $qsf->db->query( "CREATE TABLE {$qsf->pre}ikon_ids
      ( old_name varchar(32) NOT NULL, old_id varchar(32) NOT NULL, new_id int(10) unsigned NOT NULL, PRIMARY KEY(old_id) )" );

   for( $x = 0; $x < sizeof( $IDTABLE ); $x++ )
   {
      $name = $IDTABLE[$x]['name'];
      $oldid = $IDTABLE[$x]['oldid'];
      $newid = $IDTABLE[$x]['newid'];

      $qsf->db->query( "INSERT INTO {$qsf->pre}ikon_ids VALUES( '$name', '$oldid', '$newid' )" );
   }

   $oldset['profiles'] = '1';
   $oldset['prof_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ikon312a.php'>";
}

else if( $_GET['action'] == 'pmessages' )
{
   $sql = "SELECT * FROM {$qsf->pre}ikon_ids";
   $result = $qsf->db->query($sql);
   while( $row = $qsf->db->nqfetch($result) )
   {
      $IDTABLE[] = array( 'name' => $row['old_name'], 'oldid' => $row['old_id'], 'newid' => $row['new_id']  );
   }

   $i = '0';
   $qsf->db->query( "TRUNCATE {$qsf->pre}pmsystem" );
   $sql = "SELECT * FROM {$oldboard->pre}message_data";
   $result= $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      if( $row['VIRTUAL_DIR'] == "in" || $row['VIRTUAL_DIR'] == "sent" )
      {
         // An empty recipient ID is apparently just a message confirmation. No need to convert this.
         if( $row['RECIPIENT_ID'] != '' )
         {
            if( $row['RECIPIENT_ID'] == '1' )
               $row['RECIPIENT_ID'] = '2';
            if( $row['RECIPIENT_ID'] == '0' )
               $row['RECIPIENT_ID'] = '1';
            if( $row['FROM_ID'] == '1' )
               $row['FROM_ID'] = '2';
            if( $row['FROM_ID'] == '0' )
               $row['FROM_ID'] = '1';
            if( $row['MEMBER_ID'] == '1' )
               $row['MEMBER_ID'] = '2';
            if( $row['MEMBER_ID'] == '0' )
               $row['MEMBER_ID'] = '1';

            for( $x = 0; $x < sizeof( $IDTABLE ); $x++ )
            {
               if( $row['FROM_NAME'] == $IDTABLE[$x]['name'] )
                  $row['FROM_ID'] = $IDTABLE[$x]['newid'];
               if( $row['RECIPIENT_NAME'] == $IDTABLE[$x]['name'] )
                  $row['RECIPIENT_ID'] = $IDTABLE[$x]['newid'];
            }
            $row['TITLE'] = strip_ikon_tags( $row['TITLE'] );
            $row['MESSAGE'] = strip_ikon_tags( $row['MESSAGE'] );

            $i++;

            if( $row['VIRTUAL_DIR'] == "in" )
               $folder = '0';
            else
               $folder = '1';

            $bcc = '';
            if( $folder == '1' )
            {
               $bcc = $row['RECIPIENT_ID'];
               $row['RECIPIENT_ID'] = $row['MEMBER_ID'];
            }
            if( $row['TITLE'] == '' )
               $row['TITLE'] = "No Title";
            $qsf->db->query( "INSERT INTO {$qsf->pre}pmsystem VALUES( {$row['MESSAGE_ID']}, {$row['RECIPIENT_ID']}, {$row['FROM_ID']}, '{$bcc}', '{$row['TITLE']}', {$row['DATE']}, '{$row['MESSAGE']}', {$row['READ_STATE']}, {$folder} )" );
         }
      }
   }

   $oldset['pms'] = '1';
   $oldset['pm_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ikon312a.php'>";
}

else if( $_GET['action'] == 'mtitles' )
{
   $num = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}member_titles" );
   $all = $oldboard->db->num_rows( $num );
   $i = '0';

   if( $all > 0 )
   {
      $qsf->db->query( "TRUNCATE {$qsf->pre}membertitles" );

      $sql = "SELECT * FROM {$oldboard->pre}member_titles";
      $result= $oldboard->db->query($sql);
      while( $row = $oldboard->db->nqfetch($result) )
      {
         if( $row['PIPS'] < '0' )
            $icon = '0.png';
         else
         {
            $icon = $row['PIPS'];
            $icon .= '.png';
         }
         $qsf->db->query( "INSERT INTO {$qsf->pre}membertitles VALUES( {$row['ID']}, '{$row['TITLE']}', '{$row['POSTS']}', '{$icon}' )" );
         $i++;
      }
   }

   $oldset['titles'] = '1';
   $oldset['title_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ikon312a.php'>";
}

else if( $_GET['action'] == 'categories' )
{
   $sql = "ALTER TABLE {$qsf->pre}forums ADD ib INT(4) NOT NULL";
   $result = $qsf->db->query($sql);

   $qsf->db->query( "TRUNCATE {$qsf->pre}forums" );

   $sql = "SELECT * FROM {$oldboard->pre}categories";
   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      if( $row['SUB_CAT_ID'] > '0' )
         $subcat = '1';
      else
         $subcat = '0';
      $qsf->db->query( "INSERT INTO {$qsf->pre}forums VALUES( {$row['CAT_ID']}, {$row['SUB_CAT_ID']}, '', '{$row['CAT_NAME']}', {$row['CAT_POS']}, '{$row['CAT_DESC']}', 0, 0, 0, '{$subcat}', '' )" );
      $i++;
   }

   $oldset['cats'] = '1';
   $oldset['cat_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ikon312a.php'>";
}

else if( $_GET['action'] == 'forums' )
{
   $sql = "SELECT * FROM {$oldboard->pre}forum_info";
   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['FORUM_NAME'] = strip_ikon_tags( $row['FORUM_NAME'] );
      $row['FORUM_DESC'] = strip_ikon_tags( $row['FORUM_DESC'] );
      $qsf->db->query( "INSERT INTO {$qsf->pre}forums VALUES( '', {$row['CATEGORY']}, '', '{$row['FORUM_NAME']}', {$row['FORUM_POSITION']}, '{$row['FORUM_DESC']}', {$row['FORUM_TOPICS']}, {$row['FORUM_POSTS']}, '{$row['FORUM_LAST_POST']}', '0', {$row['FORUM_ID']} )" );
      $i++;
   }

   $oldset['forums'] = '1';
   $oldset['forum_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ikon312a.php'>";
}

else if( $_GET['action'] == 'topics' )
{
   $sql = "SELECT * FROM {$qsf->pre}ikon_ids";
   $result = $qsf->db->query($sql);
   while( $row = $qsf->db->nqfetch($result) )
   {
      $IDTABLE[] = array( 'name' => $row['old_name'], 'oldid' => $row['old_id'], 'newid' => $row['new_id']  );
   }

   $qsf->db->query( "TRUNCATE {$qsf->pre}topics" );
   $sql = "SELECT * FROM {$oldboard->pre}forum_topics";
   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $sql1 = "SELECT forum_id FROM {$qsf->pre}forums WHERE ib = {$row['FORUM_ID']}";
      $result1 = $qsf->db->query($sql1);
      list($tid) = mysql_fetch_row($result1);

      if( $row['TOPIC_STARTER'] == '1' )
      {
         $row['TOPIC_STARTER'] = '2';
      }
      if( $row['TOPIC_STARTER'] == '0' )
      {
         $row['TOPIC_STARTER'] = '1';
      }
      if( $row['TOPIC_LAST_POSTER'] == '1' )
      {
         $row['TOPIC_LAST_POSTER'] = '2';
      }
      if( $row['TOPIC_LAST_POSTER'] == '0' )
      {
         $row['TOPIC_LAST_POSTER'] = '1';
      }

      // Loop over the remaining members and play games with the topic data to fix the blasted post names for the newer member IDs.
      for( $x = 0; $x < sizeof( $IDTABLE ); $x++ )
      {
         $name = $IDTABLE[$x]['name'];
         $newid = $IDTABLE[$x]['newid'];

         if( $row['TOPIC_STARTER_N'] == $name )
         {
            $row['TOPIC_STARTER'] = $newid;
         }
         if( $row['TOPIC_LASTP_N'] == $name )
         {
            $row['TOPIC_LAST_POSTER'] = $newid;
         }
      }
      $topic_modes = '0';
      if( $row['TOPIC_STATE'] == 'closed' )
         $topic_modes = ($topic_modes | TOPIC_LOCKED);
      if( $row['PIN_STATE'] == '1' )
         $topic_modes = ($topic_modes | TOPIC_PINNED);
      if( $row['POLL_STATE'] != '0' )
         $topic_modes = ($topic_modes | TOPIC_POLL);

      $row['TOPIC_TITLE'] = strip_ikon_tags( $row['TOPIC_TITLE'] );
      $row['TOPIC_DESC'] = strip_ikon_tags( $row['TOPIC_DESC'] );
      $qsf->db->query( "INSERT INTO {$qsf->pre}topics VALUES( {$row['TOPIC_ID']}, {$tid}, '{$row['TOPIC_TITLE']}', '{$row['TOPIC_DESC']}', {$row['TOPIC_STARTER']}, {$row['TOPIC_LAST_POSTER']}, '', '{$row['TOPIC_LAST_DATE']}', {$row['TOPIC_POSTS']}, {$row['TOPIC_VIEWS']}, {$topic_modes}, 0, '' )" );
      $i++;
   }

   $qsf->db->query( "TRUNCATE {$qsf->pre}subscriptions" );
   $sql = "SELECT * FROM {$oldboard->pre}forum_subscriptions";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $sql1 = "SELECT forum_id FROM {$qsf->pre}forums WHERE ib = {$row['FORUM_ID']}";
      $result1 = $qsf->db->query($sql1);
      list($tid) = mysql_fetch_row($result1);

      if( $row['MEMBER_ID'] == '1' )
      {
         $row['MEMBER_ID'] = '2';
      }
      if( $row['MEMBER_ID'] == '0' )
      {
         $row['MEMBER_ID'] = '1';
      }

      if( $row['TOPIC_ID'] == '0' )
      {
         $subtype = 'forum';
         $item = $tid;
      }
      else
      {
         $subtype = 'topic';
         $item = $row['TOPIC_ID'];
      }

      $expire = time() + 2592000;

      // Loop over the remaining members and play games with the topic data to fix the blasted post names for the newer member IDs.
      for( $x = 0; $x < sizeof( $IDTABLE ); $x++ )
      {
         $name = $IDTABLE[$x]['name'];
         $newid = $IDTABLE[$x]['newid'];

         if( $row['MEMBER_NAME'] == $name )
         {
            $row['MEMBER_ID'] = $newid;
         }
      }
      $qsf->db->query( "INSERT INTO {$qsf->pre}subscriptions VALUES( {$row['ID']}, {$row['MEMBER_ID']}, '{$subtype}', {$item}, {$expire} )" );
   }

   $qsf->db->query( "ALTER TABLE {$qsf->pre}forums DROP ib" );
   $oldset['topics'] = '1';
   $oldset['topic_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ikon312a.php'>";
}

else if( $_GET['action'] == 'polls' )
{
   $sql = "SELECT * FROM {$qsf->pre}ikon_ids";
   $result = $qsf->db->query($sql);
   while( $row = $qsf->db->nqfetch($result) )
   {
      $IDTABLE[] = array( 'name' => $row['old_name'], 'oldid' => $row['old_id'], 'newid' => $row['new_id']  );
   }

   $sql = "SELECT * FROM {$oldboard->pre}forum_polls";
   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $qsf->db->query( "UPDATE {$qsf->pre}topics SET topic_poll_options = '{$row['POLL_ANSWERS']}' WHERE topic_id = '{$row['POLL_ID']}'" );
      $i++;
   }

   $qsf->db->query( "TRUNCATE {$qsf->pre}votes" );
   $sql = "SELECT * FROM {$oldboard->pre}forum_poll_voters";
   $result = $oldboard->db->query($sql);

   while( $row = $oldboard->db->nqfetch($result) )
   {
      if( $row['MEMBER_ID'] == '1' )
      {
         $row['MEMBER_ID'] = '2';
      }
      if( $row['MEMBER_ID'] == '0' )
      {
         $row['MEMBER_ID'] = '1';
      }

      for( $x = 0; $x < sizeof( $IDTABLE ); $x++ )
      {
         $oldid = $IDTABLE[$x]['oldid'];
         $newid = $IDTABLE[$x]['newid'];

         if( $row['MEMBER_ID'] == $oldid )
         {
            $row['MEMBER_ID'] = $newid;
         }
      }
      $qsf->db->query( "INSERT INTO {$qsf->pre}votes VALUES( {$row['MEMBER_ID']}, {$row['POLL_ID']}, '' )" );
   }

   $oldset['polls'] = '1';
   $oldset['poll_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ikon312a.php'>";
}

else if( $_GET['action'] == 'posts' )
{
   $start = $_GET['start'];
   $i = $_GET['i'];

   if( $i == '' )
      $i = '0';

   if( $start == '' )
   {
      $qsf->db->query( "TRUNCATE {$qsf->pre}posts" );
      $start = '0';
   }

   $sql = "SELECT * FROM {$qsf->pre}ikon_ids";
   $result = $qsf->db->query($sql);
   while( $row = $qsf->db->nqfetch($result) )
   {
      $IDTABLE[] = array( 'name' => $row['old_name'], 'oldid' => $row['old_id'], 'newid' => $row['new_id']  );
   }

   $num = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}forum_posts" );
   $all = $oldboard->db->num_rows( $num );
   $sql = "SELECT * FROM {$oldboard->pre}forum_posts LIMIT {$start}, {$oldset['post_inc']}";
   $newstart = $start + $oldset['post_inc'];

   $result= $oldboard->db->query($sql);

   while( $row = $oldboard->db->nqfetch($result) )
   {
      if( $row['AUTHOR'] == '1' )
      {
         $row['AUTHOR'] = '2';
      }
      if( $row['AUTHOR'] == '0' )
      {
         $row['AUTHOR'] = '1';
      }

      // Loop over the remaining members and play games with the post data to fix the blasted post names.
      for( $x = 0; $x < sizeof( $IDTABLE ); $x++ )
      {
         $oldid = $IDTABLE[$x]['oldid'];
         $newid = $IDTABLE[$x]['newid'];

         if( $row['AUTHOR'] == $oldid )
         {
            $row['AUTHOR'] = $newid;
         }
      }

      /* Try and clean up some of the junk in Ikonboard posts. MySQL isn't happy about some of it. */
      $row['POST'] = strip_ikon_tags( $row['POST'] );

      $qsf->db->query( "INSERT INTO {$qsf->pre}posts VALUES( {$row['POST_ID']}, {$row['TOPIC_ID']}, '{$row['AUTHOR']}', {$row['ENABLE_EMO']}, 1, '{$row['POST']}', {$row['POST_DATE']}, '', INET_ATON('{$row['IP_ADDR']}'), '', 0 )" );
      $i++;
   }
   if( $i == $all )
   {
      $oldset['posts'] = '2';
      $oldset['post_count'] = $i;
      $oldset['converted'] = '2';
      write_olddb_sets( $oldset );
      echo "<meta http-equiv='Refresh' content='0;URL=convert_ikon312a.php'>";
   }
   else
   {
      $oldset['posts'] = '1';
      $oldset['post_count'] = $i;
      write_olddb_sets( $oldset );
      echo "<meta http-equiv='Refresh' content='0;URL=convert_ikon312a.php'>";
   }
}

?>
