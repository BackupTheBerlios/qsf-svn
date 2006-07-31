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
 * myBB Conversion Script
 * Based on work by Yazinin Nick <admin@vk.net.ru>
 *
 * Roger Libiez [Samson] <http://mercuryboard.afkmud.com>
 *
 * This convertor has been tested on unmodified databases for MyBB 1.0
 **/

define('QUICKSILVERFORUMS', true);

require_once './convert_db.php';
require_once '../settings.php';
$set['include_path'] = '..';
require_once $set['include_path'] . '/defaultutils.php';
require_once $set['include_path'] . '/global.php';

// Check for any addons available
include_addons($set['include_path'] . '/addons/');

define('CONVERTER_NAME', 'MyBB 1.0/1.1 Convertor');

$db = new $modules['database']( $set['db_host'], $set['db_user'], $set['db_pass'], $set['db_name'], $set['db_port'], $set['db_socket'] );
if( !$db->connection )
{
   error( QUICKSILVER_ERROR, 'A connection to the Quicksilver Forums database could not be established. Please check your settings and try again.', __FILE__, __LINE__ );
}
$qsf = new qsfglobal($db);

$olddb = new $modules['database']( $oldset['old_db_host'], $oldset['old_db_user'], $oldset['old_db_pass'], $oldset['old_db_name'], $oldset['old_db_port'], $oldset['old_db_socket'] );
if( !$olddb->connection )
{
   error( QUICKSILVER_ERROR, 'A connection to the MyBB database could not be established. Please check your settings and try again.', __FILE__, __LINE__ );
}
$oldboard = new qsfglobal($olddb); // Yes, I know this looks goofy, but we want to try and leverage the Mercury code as much as possible

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
      'censor'        => $oldset['censor'],
      'censor_count'  => $oldset['censor_count'],
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
      'attach'        => $oldset['attach'],
      'attach_count'  => $oldset['attach_count'],
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
function strip_mybb_tags( $text )
{
   // The [html] BBCode tag is not supported by MyBB or Quicksilver Forums, so just strip those off and leave the contents.
   $text = preg_replace( '/\[html\](.+?)\[\/html\]/si', '\\1', $text );

   /* Convert malformed image tags. */
   $text = preg_replace( '/\[img=(.*?)\](.*?)\[\/img\]/si', '[img]\\1[/img]', $text );

   // Font size tags....
   $text = preg_replace( '/\[size=4\](.*?)\[\/size\]/si', '[size=7]\\1[/size]', $text );
   $text = preg_replace( '/\[size=3\](.*?)\[\/size\]/si', '[size=5]\\1[/size]', $text );
   $text = preg_replace( '/\[size=2\](.*?)\[\/size\]/si', '[size=3]\\1[/size]', $text );
   $text = preg_replace( '/\[size=1\](.*?)\[\/size\]/si', '[size=2]\\1[/size]', $text );

   // Text alignment tags....
   $text = preg_replace( '/\[align=(.*?)\](.*?)\[\/align\]/si', '[\\1]\\2[/\\1]', $text );
   $text = preg_replace( '/\[justify\](.*?)\[\/justify\]/si', '\\1', $text );

   // List tags are not supported in QSF.
   $text = preg_replace( '/\[list=(.*?)\](.*?)\[\/list\]/si', '\\2', $text );
   $text = str_replace( "[list]", "", $text );
   $text = str_replace( "[/list]", "", $text );
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
   $text = $qsf->db->escape( $text );
   return $text;
}

if( !isset($_GET['action']) || $_GET['action'] == '' )
{
   if( $oldset['converted'] == '0' )
   {
      $oldset['converted'] = '1';
      $oldset['censor'] = '0';
      $oldset['censor_count'] = '0';
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
      $oldset['attach'] = '0';
      $oldset['attach_count'] = '0';
      $oldset['posts'] = '0';
      $oldset['post_count'] = '0';

      write_olddb_sets( $oldset );
   }

   $censor = $oldset['censor'];
   $censor_count = $oldset['censor_count'];
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
   $attach = $oldset['attach'];
   $attach_count = $oldset['attach_count'];
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
     <td class='tablelight' align='left'><a href='convert_mybb.php?action=censor'>Convert Censored Words</a>
     </td>";

   if( $censor_count > '0' )
      echo "<td class='tablelight' align='left'>".$censor_count." censored words converted.</td>\n";
   else
      echo "<td class='tablelight'>&nbsp;</td>\n";
   echo "</tr>\n";

   echo "<tr>
     <td class='tablelight' align='left'><a href='convert_mybb.php?action=members'>Convert Member Profiles</a>
     </td>";

   if( $prof_count > '0' )
      echo "<td class='tablelight' align='left'>".$prof_count." member profiles converted.</td>\n";
   else
      echo "<td class='tablelight'>&nbsp;</td>\n";
   echo "</tr>\n";

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_mybb.php?action=pmessages'>Convert Private Messages</a></td>\n";
      if( $pms == '1' )
         echo "<td class='tablelight' align='left'>".$pm_count." private messages converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_mybb.php?action=mtitles'>Convert Member Titles</a></td>\n";
      if( $titles == '1' )
         echo "<td class='tablelight' align='left'>".$title_count." member titles converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_mybb.php?action=forums'>Convert Forums</a></td>\n";
      if( $forums == '1' )
         echo "<td class='tablelight' align='left'>".$forum_count." forums converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' && $forums == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_mybb.php?action=topics'>Convert Topics</a></td>\n";
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
      echo "<td class='tablelight' align='left'><a href='convert_mybb.php?action=attach'>Convert Attachments</a></td>\n";
      if( $attach == '1' )
         echo "<td class='tablelight' align='left'>".$attach_count." attachments converted. Attached files must be copied manually.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' && $topics == '1' )
   {
      echo "<tr>\n";
      if( $posts == '0' )
      {
         echo "<td class='tablelight' align='left'><a href='convert_mybb.php?action=posts'>Convert Posts</a></td>\n";
         echo "<td class='tablelight'>&nbsp;</td>\n";
      }
      else if( $posts == '1' )
      {
         echo "<td class='tablelight' align='left'><a href='convert_mybb.php?action=posts&amp;start=".$post_count."&amp;i=".$post_count."'>Continue post conversion</a></td>\n";
         echo "<td class='tablelight' align='left'>".$post_count." posts converted so far.</td>\n";
      }
      else
      {
         echo "<td class='tablelight' align='left'><a href='convert_mybb.php?action=posts'>Convert Posts</a></td>\n";
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

      include 'templates/convert_mybb_finished.php';
   }
   include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'dropmybb' )
{
    include 'templates/convert_header.php';
    include 'templates/convert_mybb_destroydata.php';
    include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'confirmmybbdrop' )
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
   include 'templates/convert_mybb_datadestroyed.php';
   include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'censor' )
{
   $result = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}badwords" );
   $i = '0';

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $qsf->db->query( "INSERT INTO {$qsf->pre}replacements (replacement_search, replacement_type) VALUES( '{$row['badword']}', 'censor' )" );
      $i++;
   }

   $oldset['censor'] = '1';
   $oldset['censor_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_mybb.php'>";
}

else if( $_GET['action'] == 'members' )
{
   $i = '0';
   $qsf->db->query( "TRUNCATE {$qsf->pre}users" );
   $sql = "INSERT INTO {$qsf->pre}users VALUES( 1, 'Guest', '', 0, 1, '', 0, 3, 'default', 'en', '', 'none', 0, 0, '', 0, 0, '0000-00-00', '151', '', 0, '', 0, '', '', '', 0, 1, '', '', '', 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, '' )";
   $result = $qsf->db->query($sql);

   $sql = "SELECT * FROM {$oldboard->pre}users";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['uid']++;

      if( $row['hideemail'] == '' || $row['hideemail'] == 'no' )
         $showmail = 0;
      else
         $showmail = 1;

      if( $row['lastvisit'] == '' || $row['lastvisit'] == '0' )
         $row['lastvisit'] = $row['regdate'];
      if( $row['lastactive'] == '' || $row['lastactive'] == '0' )
         $row['lastactive'] = $row['regdate'];

      $row['username'] = strip_mybb_tags( $row['username'] );
      if( $row['usertitle'] != '' )
      {
         $usertitle = strip_mybb_tags( $row['usertitle'] );
         $customtitle = 1;
      }
      else
      {
         $usertitle = '';
         $customtitle = 0;
      }
      
      $row['email'] = strip_mybb_tags( $row['email'] );
      $row['website'] = strip_mybb_tags( $row['website'] );
      $row['signature'] = strip_mybb_tags( $row['signature'] );

      // The default MyBB groups
      if( $row['usergroup'] == 2 ) // Member
         $row['usergroup'] = 2;
      else if( $row['usergroup'] == 3 ) // Super-Moderator
         $row['usergroup'] = 6;
      else if( $row['usergroup'] == 4 ) // Admin
         $row['usergroup'] = 1;
      else if( $row['usergroup'] == 5 ) // Awating Activation
         $row['usergroup'] = 5;
      else if( $row['usergroup'] == 7 ) // Banned
         $row['usergroup'] = 4;
      else
         $row['usergroup'] = 2; // anything else becomes a member

      $pos = strpos( $row['avatar'], '://' );
      if( $pos == '4' )
      {
         $avatar = $row['avatar'];
         $width = 64;
         $height = 64;
         $type = "url";
      }
      else
      {
         $avatar = '';
         $width = 0;
         $height = 0;
         $type = "none";
      }

      $icq = 0;
      if( $row['icq'] )
         $icq = intval( $row['icq'] );

      $qsf->db->query( "INSERT INTO {$qsf->pre}users VALUES( {$row['uid']}, '{$row['username']}', '{$row['password']}', {$row['regdate']}, 1, '{$usertitle}', {$customtitle}, {$row['usergroup']}, 'default', 'en', '{$avatar}', '${type}', {$width}, {$height}, '{$row['email']}', {$showmail}, 1, '0000-00-00', 151, '{$row['website']}', {$row['postnum']}, '', {$icq}, '{$row['msn']}', '{$row['aim']}', '', 1, 1, '{$row['yahoo']}', '', '{$row['signature']}', {$row['lastvisit']}, 0, {$row['lastactive']}, 0, 0, 1, 1, 1, 0, 0, '' )" );
      $i++;
   }

   $oldset['profiles'] = '1';
   $oldset['prof_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_mybb.php'>";
}

else if( $_GET['action'] == 'pmessages' )
{
   $i = '0';
   $qsf->db->query( "TRUNCATE {$qsf->pre}pmsystem" );
   $sql = "SELECT * FROM {$oldboard->pre}privatemessages";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      // 1 = inbox, 2 = sent box
      if( $row['folder'] == '1' || $row['folder'] == '2' )
      {
         if( $row['folder'] == '1' )
            $folder = '0';
         else
            $folder = '1';
      }
      else
         $folder = '2';

      if( $folder == '0' || $folder == '1' )
      {
         $row['uid']++;
         $row['toid']++;
         $row['fromid']++;

         $row['subject'] = strip_mybb_tags( $row['subject'] );
         $row['message'] = strip_mybb_tags( $row['message'] );
         $i++;

         $bcc = '';
         if( $folder == '1' )
         {
            $bcc = $row['toid'];
            $row['toid'] = $row['fromid'];
         }
         if( $row['subject'] == '' )
            $row['subject'] = "No Title";
         $qsf->db->query( "INSERT INTO {$qsf->pre}pmsystem VALUES( {$row['pmid']}, {$row['toid']}, {$row['fromid']}, 0, '{$bcc}', '{$row['subject']}', {$row['dateline']}, '{$row['message']}', {$row['status']}, {$folder} )" );
      }
   }

   $oldset['pms'] = '1';
   $oldset['pm_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_mybb.php'>";
}

else if( $_GET['action'] == 'mtitles' )
{
   $num = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}usertitles" );
   $all = $oldboard->db->num_rows( $num );
   $i = '0';

   if( $all > 0 )
   {
      $qsf->db->query( "TRUNCATE {$qsf->pre}membertitles" );

      $sql = "SELECT * FROM {$oldboard->pre}usertitles";
      $result= $oldboard->db->query($sql);
      while( $row = $oldboard->db->nqfetch($result) )
      {
         if( $row['stars'] < '1' )
            $icon = '1.png';
         else if( $row['stars'] > 5 )
            $icon = '5.png';
         else
            $icon = $row['stars'] . '.png';

         $qsf->db->query( "INSERT INTO {$qsf->pre}membertitles VALUES( {$row['utid']}, '{$row['title']}', '{$row['posts']}', '{$icon}' )" );
         $i++;
      }
   }

   $oldset['titles'] = '1';
   $oldset['title_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_mybb.php'>";
}

else if( $_GET['action'] == 'forums' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}forums" );
   $sql = "SELECT * FROM {$oldboard->pre}forums";
   $result = $oldboard->db->query($sql);
   $i = '0';

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['name'] = strip_mybb_tags( $row['name'] );
      $row['description'] = strip_mybb_tags( $row['description'] );

      if( $row['type'] == 'c' && $row['pid'] != '0' )
         $subcat = '1';
      else
         $subcat = '0';

      $qsf->db->query( "INSERT INTO {$qsf->pre}forums VALUES( '{$row['fid']}', {$row['pid']}, '', '{$row['name']}', 1, '{$row['description']}', {$row['threads']}, {$row['posts']}, '{$row['lastpost']}', {$subcat} )" );
      $i++;
   }

   $oldset['forums'] = '1';
   $oldset['forum_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_mybb.php'>";
}

else if( $_GET['action'] == 'topics' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}topics" );
   $sql = "SELECT * FROM {$oldboard->pre}threads";
   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['uid']++;

      $topic_modes = TOPIC_PUBLISH;
      if( $row['closed'] == 'yes' )
         $topic_modes = ($topic_modes | TOPIC_LOCKED);
      if( $row['sticky'] == '1' )
         $topic_modes = ($topic_modes | TOPIC_PINNED);
      if( $row['poll'] == '1' )
         $topic_modes = ($topic_modes | TOPIC_POLL);

      $row['subject'] = strip_mybb_tags( $row['subject'] );
      $qsf->db->query( "INSERT INTO {$qsf->pre}topics VALUES( {$row['tid']}, {$row['fid']}, '{$row['subject']}', '', {$row['uid']}, {$row['lastpost']}, '{$row['uid']}', '', '{$row['dateline']}', {$row['replies']}, {$row['views']}, {$topic_modes}, 0, '' )" );
      $i++;
   }

   $qsf->db->query( "TRUNCATE {$qsf->pre}subscriptions" );
   $sql = "SELECT * FROM {$oldboard->pre}forumsubscriptions";
   $result = $oldboard->db->query($sql);
   $expire = time() + 2592000;
   $sub_id = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $sub_id++;
      $qsf->db->query( "INSERT INTO {$qsf->pre}subscriptions VALUES( {$sub_id}, {$row['uid']}, 'forum', {$row['fid']}, {$expire} )" );
   }

   $sql = "SELECT * FROM {$oldboard->pre}favorites";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      if( $row['type'] == 's' )
      {
         $sub_id++;
         $qsf->db->query( "INSERT INTO {$qsf->pre}subscriptions VALUES( {$sub_id}, {$row['uid']}, 'topic', {$row['tid']}, {$expire} )" );
      }
   }

   $oldset['topics'] = '1';
   $oldset['topic_count'] = $i;
   write_olddb_sets( $oldset );

   $qsf->db->query( "TRUNCATE {$qsf->pre}votes" );
   $sql = "SELECT p.*, v.pid, v.uid, v.voteoption
      FROM {$oldboard->pre}polls p
      LEFT JOIN {$oldboard->pre}pollvotes v ON v.pid = p.pid";

   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $pollanswers = "";
      $polloptions = explode( "||~|~||", $row['options'] );

      foreach( $polloptions as $options => $option )
         $pollanswers .= $option . "\n";
      $qsf->db->query( "UPDATE {$qsf->pre}topics SET topic_poll_options = '{$pollanswers}' WHERE topic_id = '{$row['tid']}'" );

      $user = $row['uid'] + 1;
      $vote = $row['voteoption'] - 1;
      $qsf->db->query( "INSERT INTO {$qsf->pre}votes VALUES( {$user}, {$row['tid']}, {$vote} )" );
      $i++;
   }

   $oldset['polls'] = '1';
   $oldset['poll_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_mybb.php'>";
}

else if( $_GET['action'] == 'attach' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}attach" );
   $result = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}attachments" );
   $i = '0';

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $qsf->db->query( "INSERT INTO {$qsf->pre}attach VALUES( {$row['aid']}, '{$row['attachname']}', '{$row['filename']}', {$row['pid']}, {$row['downloads']}, {$row['filesize']} )" );
      $i++;
   }

   $oldset['attach'] = '1';
   $oldset['attach_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_mybb.php'>";
}

else if( $_GET['action'] == 'posts' )
{
   if( !isset($_GET['start']) || $_GET['start'] == '' )
   {
      $qsf->db->query( "TRUNCATE {$qsf->pre}posts" );
      $start = '0';
   }
   else
      $start = $_GET['start'];

   if( !isset($_GET['i']) || $_GET['i'] == '' )
      $i = '0';
   else
      $i = $_GET['i'];

   $num = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}posts" );
   $all = $oldboard->db->num_rows( $num );
   $sql = "SELECT * FROM {$oldboard->pre}posts LIMIT {$start}, {$oldset['post_inc']}";
   $newstart = $start + $oldset['post_inc'];

   $result= $oldboard->db->query($sql);

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['uid']++;

      $row['message'] = strip_mybb_tags( $row['message'] );

      if( $row['smilieoff'] == 'no' )
         $smilies = '1';
      else
         $smilies = '0';

      $qsf->db->query( "INSERT INTO {$qsf->pre}posts VALUES( {$row['pid']}, {$row['tid']}, '{$row['uid']}', {$smilies}, 1, 1, '{$row['message']}', {$row['dateline']}, '', INET_ATON('{$row['ipaddress']}'), '', {$row['edittime']} )" );
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
   echo "<meta http-equiv='Refresh' content='0;URL=convert_mybb.php'>";
}
?>
