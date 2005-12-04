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
 * vBulliten Conversion Script
 * Based on work by Yazinin Nick <admin@vk.net.ru>
 *
 * Roger Libiez [Samson] <http://mercuryboard.afkmud.com>
 *
 * This convertor has only had limited testing on a vBulliten 3.5.1 live demo database
 **/

require_once './convert_db.php';
require_once '../settings.php';
require_once '../func/constants.php';
require_once '../lib/' . $set['dbtype'] . '.php';
require_once '../global.php';

define('CONVERTER_NAME', 'vBulliten 3.5.1 Convertor');

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
   error( QUICKSILVER_ERROR, 'A connection to the vBulliten database could not be established. Please check your settings and try again.', __FILE__, __LINE__ );
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

/* Not as much as usual to do here thanks to the nice clean database storage */
function strip_vb_tags( $text )
{
   // The [html] BBCode tag is not supported by Quicksilver Forums, so just strip those off and leave the contents.
   $text = preg_replace( '/\[html\](.+?)\[\/html\]/si', '\\1', $text );

   /* Convert malformed image tags. */
   $text = preg_replace( '/\[img=(.*?)\](.*?)\[\/img\]/si', '[img]\\1[/img]', $text );

   // Text alignment tags...
   $text = str_replace( "[LEFT]", "[left]", $text );
   $text = str_replace( "[CENTER]", "[center]", $text );
   $text = str_replace( "[RIGHT]", "[right]", $text );
   $text = str_replace( "[/LEFT]", "[/left]", $text );
   $text = str_replace( "[/CENTER]", "[/center]", $text );
   $text = str_replace( "[/RIGHT]", "[/right]", $text );

   // List tags are not supported in QSF.
   $text = preg_replace( '/\[list=(.*?)\](.*?)\[\/list\]/si', '\\2', $text );
   $text = str_replace( "[LIST]", "", $text );
   $text = str_replace( "[/LIST]", "", $text );
   $text = str_replace( "[*]", "", $text );

   // Now fix the generic junk that's left over....
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
   $text = str_replace( "&#39;", "'", $text );
   $text = str_replace( "&#039;", "'", $text );
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

   // And lastly, prep for database insertion.
   $text = addslashes( $text );
   return $text;
}

if( !isset($_GET['action']) || $_GET['action'] == '' )
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
   $forums = $oldset['forums'];
   $forum_count = $oldset['forum_count'];
   $topics = $oldset['topics'];
   $topic_count = $oldset['topic_count'];
   $polls = $oldset['polls'];
   $poll_count = $oldset['poll_count'];
   $posts = $oldset['posts'];
   $post_count = $oldset['post_count'];

   include 'templates/convert_header.php';

   echo "<tr>
     <td class='subheader' align='center' style='border-right:0;'>Conversion Step</td>
     <td class='subheader' align='center' style='border-left:0; border-right:0;'>Results</td>
     </tr>
     <tr>
     <td class='tablelight'>&nbsp;</td>
     <td class='tablelight'>&nbsp;</td>
     </tr>
     <tr>
     <td class='tablelight' align='left'><a href='convert_vb351.php?action=members'>Convert Member Profiles</a>
     </td>";

   if( $prof_count > '0' )
      echo "<td class='tablelight' align='left'>".$prof_count." member profiles converted.</td>\n";
   else
      echo "<td class='tablelight'>&nbsp;</td>\n";
   echo "</tr>\n";

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_vb351.php?action=pmessages'>Convert Private Messages</a></td>\n";
      if( $pms == '1' )
         echo "<td class='tablelight' align='left'>".$pm_count." private messages converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_vb351.php?action=mtitles'>Convert Member Titles</a></td>\n";
      if( $titles == '1' )
         echo "<td class='tablelight' align='left'>".$title_count." member titles converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_vb351.php?action=forums'>Convert Forums</a></td>\n";
      if( $forums == '1' )
         echo "<td class='tablelight' align='left'>".$forum_count." forums converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' && $forums == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_vb351.php?action=topics'>Convert Topics</a></td>\n";
      if( $topics == '1' )
         echo "<td class='tablelight' align='left'>".$topic_count." topics converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' && $topics == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight'>&nbsp;</td>\n";
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
         echo "<td class='tablelight' align='left'><a href='convert_vb351.php?action=posts'>Convert Posts</a></td>\n";
         echo "<td class='tablelight'>&nbsp;</td>\n";
      }
      else if( $posts == '1' )
      {
         echo "<td class='tablelight' align='left'><a href='convert_vb351.php?action=posts&amp;start=".$post_count."&amp;i=".$post_count."'>Continue post conversion</a></td>\n";
         echo "<td class='tablelight' align='left'>".$post_count." posts converted so far.</td>\n";
      }
      else
      {
         echo "<td class='tablelight' align='left'><a href='convert_vb351.php?action=posts'>Convert Posts</a></td>\n";
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
      $qsf->sets = $qsf->get_settings($qsf->sets);
      $qsf->updateForumTrees();
      $qsf->RecountForums();

      include 'templates/convert_vb351_finished.php';
   }
   include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'dropvb' )
{
    include 'templates/convert_header.php';
    include 'templates/convert_vb351_destroydata.php';
    include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'confirmvbdrop' )
{
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}adminlog" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}adminoptions" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}announcements" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}attachments" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}attachtypes" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}awaitingactivation" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}badwords" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}banned" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}datacache" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}events" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}favorites" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forumpermissions" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forums" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forumsubscriptions" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}groupleaders" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}helpdocs" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}helpsections" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}icons" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}joinrequests" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}moderatorlog" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}moderators" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}polls" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}pollvotes" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}posts" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}privatemessages" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}profilefields" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}regimages" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}reportedposts" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}reputation" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}searchlog" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}sessions" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}settinggroups" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}settings" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}smilies" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}templates" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}templatesets" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}themes" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}threadratings" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}threads" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}threadsread" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}userfields" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}usergroups" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}users" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}usertitles" );

   include 'templates/convert_header.php';
   include 'templates/convert_vb351_datadestroyed.php';
   include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'members' )
{
   $i = '0';
   $qsf->db->query( "TRUNCATE {$qsf->pre}users" );
   $sql = "INSERT INTO {$qsf->pre}users VALUES( 1, 'Guest', '', 0, 1, '', 0, 3, 'default', 'en', '', 'none', 0, 0, '', 0, 0, '0000-00-00', '151', '', 0, '', 0, '', '', '', 0, 1, '', '', '', 0, 0, 0, 0, 1, 1, 1, '' )";
   $result = $qsf->db->query($sql);

   $sql = "SELECT m.*, f.userid, f.signature
      FROM {$oldboard->pre}user m
      LEFT JOIN {$oldboard->pre}usertextfield f ON f.userid = m.userid";

   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['userid']++;

      $showmail = '0'; // No discernable setting for this - erring on the side of caution

      if( $row['lastvisit'] == '' || $row['lastvisit'] == '0' )
         $row['lastvisit'] = $row['joindate'];
      if( $row['lastactivity'] == '' || $row['lastactivity'] == '0' )
         $row['lastactivity'] = $row['joindate'];

      $row['username'] = strip_vb_tags( $row['username'] );
      $row['usertitle'] = strip_vb_tags( $row['usertitle'] );
      $row['email'] = strip_vb_tags( $row['email'] );
      $row['homepage'] = strip_vb_tags( $row['homepage'] );
      $row['signature'] = strip_vb_tags( $row['signature'] );

      // The default vB groups
      if( $row['usergroupid'] == '1' ) // Guests
         $row['usergroupid'] = '3';
      if( $row['usergroupid'] == '2' ) // Member
         $row['usergroupid'] = '2';
      else if( $row['usergroupid'] == '3' || $row['usergroupid'] == '4') // Awating Activation
         $row['usergroupid'] = '5';
      else if( $row['usergroupid'] == '5' ) // Super Moderators
         $row['usergroupid'] = '6';
      else if( $row['usergroupid'] == '6' ) // Admins
         $row['usergroupid'] = '1';
      else if( $row['usergroupid'] == '8' ) // Banned
         $row['usergroupid'] = '4';
      else
         $row['usergroupid'] = '2'; // anything else becomes a member

      $qsf->db->query( "INSERT INTO {$qsf->pre}users VALUES( {$row['userid']}, '{$row['username']}', '{$row['password']}', {$row['joindate']}, '1', '{$row['usertitle']}', {$row['customtitle']}, {$row['usergroupid']}, 'default', 'en', '', 'none', '0', '0', '{$row['email']}', {$showmail}, '', '{$row['birthday']}', '151', '{$row['homepage']}', {$row['posts']}, '', '{$row['icq']}', '{$row['msn']}', '{$row['aim']}', '', 1, 1, '{$row['yahoo']}', '', '{$row['signature']}', {$row['lastvisit']}, {$row['lastactivity']}, 0, 0, 1, 1, 1, '' )" );
      $i++;
   }

   $oldset['profiles'] = '1';
   $oldset['prof_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_vb351.php'>";
}

else if( $_GET['action'] == 'pmessages' )
{
   $i = '0';
   $qsf->db->query( "TRUNCATE {$qsf->pre}pmsystem" );
   $sql = "SELECT p.*, m.*
      FROM {$oldboard->pre}pm p
      LEFT JOIN {$oldboard->pre}pmtext m ON m.pmtextid = p.pmtextid";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      // 0 = inbox, -1 = sent box
      if( $row['folder'] == '0' || $row['folder'] == '-1' )
      {
         if( $row['folder'] == '0' )
            $folder = '0';
         else
            $folder = '1';
      }
      else
         $folder = '2';

      if( $folder == '0' || $folder == '1' )
      {
         $row['userid']++;
         $row['fromuserid']++;

         $row['title'] = strip_vb_tags( $row['title'] );
         $row['message'] = strip_vb_tags( $row['message'] );
         $i++;

         $bcc = '';
         if( $folder == '1' )
         {
            $bcc = $row['userid'];
         //   $row['toid'] = $row['fromid'];
         }
         if( $row['subject'] == '' )
            $row['subject'] = "No Title";
         $qsf->db->query( "INSERT INTO {$qsf->pre}pmsystem VALUES( {$row['pmid']}, {$row['userid']}, {$row['fromuserid']}, '{$bcc}', '{$row['title']}', {$row['dateline']}, '{$row['message']}', {$row['messageread']}, {$folder} )" );
      }
   }

   $oldset['pms'] = '1';
   $oldset['pm_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_vb351.php'>";
}

else if( $_GET['action'] == 'mtitles' )
{
   $num = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}usertitle" );
   $all = $oldboard->db->num_rows( $num );
   $i = '0';

   if( $all > 0 )
   {
      $qsf->db->query( "TRUNCATE {$qsf->pre}membertitles" );

      $sql = "SELECT * FROM {$oldboard->pre}usertitle";
      $result= $oldboard->db->query($sql);
      while( $row = $oldboard->db->nqfetch($result) )
      {
         if( $row['usertitleid'] < '1' )
            $icon = '1.png';
         else if( $row['usertitleid'] > 5 )
            $icon = '5.png';
         else
            $icon = $row['usertitleid'] . '.png';

         $qsf->db->query( "INSERT INTO {$qsf->pre}membertitles VALUES( {$row['usertitleid']}, '{$row['title']}', '{$row['minposts']}', '{$icon}' )" );
         $i++;
      }
   }

   $oldset['titles'] = '1';
   $oldset['title_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_vb351.php'>";
}

else if( $_GET['action'] == 'forums' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}forums" );
   $sql = "SELECT * FROM {$oldboard->pre}forum";
   $result = $oldboard->db->query($sql);
   $i = '0';

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['title'] = strip_vb_tags( $row['title'] );
      $row['description'] = strip_vb_tags( $row['description'] );

      // Insufficient data at this time to determine if a forum is really a subcategory.
      $subcat = '0';

      if( $row['parentid'] == '-1' )
         $row['parentid'] = '0';

      $qsf->db->query( "INSERT INTO {$qsf->pre}forums VALUES( '{$row['forumid']}', {$row['parentid']}, '', '{$row['title']}', 1, '{$row['description']}', {$row['threadcount']}, {$row['replycount']}, '{$row['lastpost']}', {$subcat} )" );
      $i++;
   }

   $oldset['forums'] = '1';
   $oldset['forum_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_vb351.php'>";
}

else if( $_GET['action'] == 'topics' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}topics" );
   $sql = "SELECT * FROM {$oldboard->pre}thread";
   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['postuserid']++;

      $topic_modes = '0';
      if( $row['open'] == '0' )
         $topic_modes = ($topic_modes | TOPIC_LOCKED);
      if( $row['sticky'] == '1' )
         $topic_modes = ($topic_modes | TOPIC_PINNED);
      if( $row['pollid'] > '0' )
         $topic_modes = ($topic_modes | TOPIC_POLL);

      $row['title'] = strip_vb_tags( $row['title'] );
      $qsf->db->query( "INSERT INTO {$qsf->pre}topics VALUES( {$row['threadid']}, {$row['forumid']}, '{$row['title']}', '', {$row['postuserid']}, '{$row['postuserid']}', '', '{$row['dateline']}', {$row['replycount']}, {$row['views']}, {$topic_modes}, 0, '' )" );
      $i++;
   }

   $qsf->db->query( "TRUNCATE {$qsf->pre}subscriptions" );
   $sql = "SELECT * FROM {$oldboard->pre}subscribeforum";
   $result = $oldboard->db->query($sql);
   $expire = time() + 2592000;
   $sub_id = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $sub_id++;
      $qsf->db->query( "INSERT INTO {$qsf->pre}subscriptions VALUES( {$sub_id}, {$row['userid']}, 'forum', {$row['forumid']}, {$expire} )" );
   }

   $sql = "SELECT * FROM {$oldboard->pre}subscribethread";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $sub_id++;
      $qsf->db->query( "INSERT INTO {$qsf->pre}subscriptions VALUES( {$sub_id}, {$row['userid']}, 'topic', {$row['threadid']}, {$expire} )" );
   }

   $oldset['topics'] = '1';
   $oldset['topic_count'] = $i;
   write_olddb_sets( $oldset );

   $qsf->db->query( "TRUNCATE {$qsf->pre}votes" );
   $sql = "SELECT p.*, v.pollid, v.userid, v.voteoption
      FROM {$oldboard->pre}poll p
      LEFT JOIN {$oldboard->pre}pollvote v ON v.pollid = p.pollid";

   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $sql2 = "SELECT * FROM {$oldboard->pre}thread WHERE pollid = '{$row['pollid']}'";
      $result2 = $oldboard->db->query($sql2);
      while( $row2 = $oldboard->db->nqfetch($result2) )
      {
         $tid = $row2['threadid'];
      }

      $pollanswers = "";
      $polloptions = explode( "|||", $row['options'] );

      foreach( $polloptions as $options => $option )
         $pollanswers .= $option . "\n";
      $qsf->db->query( "UPDATE {$qsf->pre}topics SET topic_poll_options = '{$pollanswers}' WHERE topic_id = '{$tid}'" );

      $user = $row['userid'] + 1;
      $vote = $row['voteoption'] - 1;
      $qsf->db->query( "INSERT INTO {$qsf->pre}votes VALUES( {$user}, {$tid}, {$vote} )" );
      $i++;
   }

   $oldset['polls'] = '1';
   $oldset['poll_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_vb351.php'>";
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

   $num = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}post" );
   $all = $oldboard->db->num_rows( $num );
   $sql = "SELECT * FROM {$oldboard->pre}post LIMIT {$start}, {$oldset['post_inc']}";
   $newstart = $start + $oldset['post_inc'];

   $result= $oldboard->db->query($sql);

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['userid']++;

      $row['pagetext'] = strip_vb_tags( $row['pagetext'] );

      if( $row['allowsmilie'] == '1' )
         $smilies = '1';
      else
         $smilies = '0';

      $qsf->db->query( "INSERT INTO {$qsf->pre}posts VALUES( {$row['postid']}, {$row['threadid']}, '{$row['userid']}', {$smilies}, 1, '{$row['pagetext']}', {$row['dateline']}, '', INET_ATON('{$row['ipaddress']}'), '', {$row['dateline']} )" );
      $i++;
   }
   if( $i == $all )
   {
      $oldset['posts'] = '2';
      $oldset['post_count'] = $i;
      $oldset['converted'] = '2';
   }
   else
   {
      $oldset['posts'] = '1';
      $oldset['post_count'] = $i;
   }
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_vb351.php'>";
}
?>
