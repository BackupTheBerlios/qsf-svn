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
 * Simple Machines Forum 1.05 Conversion Script
 * Based on work by Yazinin Nick <admin@vk.net.ru>
 *
 * Roger Libiez [Samson] <http://mercuryboard.afkmud.com>
 *
 * This convertor has been tested on SMF 1.05.
 * I make no guarantees of it working with something older than that.
 **/

require_once './convert_db.php';
require_once '../settings.php';
require_once '../func/constants.php';
require_once '../lib/' . $set['dbtype'] . '.php';
require_once '../global.php';

define('CONVERTER_NAME', 'SMF 1.05 Convertor');

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
   error( QUICKSILVER_ERROR, 'A connection to the SMF database could not be established. Please check your settings and try again.', __FILE__, __LINE__ );
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
 * This really should not have been necessary for SMF but they stuck a bunch of weird
 * UID tags onto everything in their post text, so naturally we must get rid of it all.
 */
function strip_smf_tags( $text )
{
   // The [html] BBCode tag is not supported by SMF or Quicksilver Forums, so just strip those off and leave the contents.
   $text = preg_replace( '/\[html\](.+?)\[\/html\]/si', '\\1', $text );

   // Undo the things that Quicksilver Forums doesn't support....
   $text = preg_replace( '/\[glow=(.*?)\](.*?)\[\/glow\]/si', '\\2', $text );
   $text = preg_replace( '/\[shadow=(.*?)\](.*?)\[\/shadow\]/si', '\\2', $text );
   $text = preg_replace( '/\[flash=(.*?)\](.*?)\[\/flash\]/si', '\\2', $text );
   $text = preg_replace( '/\[move\](.*?)\[\/move\]/si', '\\1', $text );
   $text = preg_replace( '/\[left\](.*?)\[\/left\]/si', '\\1', $text );
   $text = preg_replace( '/\[center\](.*?)\[\/center\]/si', '\\1', $text );
   $text = preg_replace( '/\[right\](.*?)\[\/right\]/si', '\\1', $text );
   $text = preg_replace( '/\[table\](.*?)\[\/table\]/si', '\\1', $text );
   $text = preg_replace( '/\[tr\](.*?)\[\/tr\]/si', '\\1', $text );
   $text = preg_replace( '/\[td\](.*?)\[\/td\]/si', '\\1', $text );
   $text = preg_replace( '/\[sup\](.*?)\[\/sup\]/si', '\\1', $text );
   $text = preg_replace( '/\[sub\](.*?)\[\/sub\]/si', '\\1', $text );
   $text = str_replace( '[hr]', "", $text );

   // Convert email tags....
   $text = preg_replace( '/\[email\](.+?)\[\/email\]/si', '[email]\\1[/email]', $text );
   $text = preg_replace( '/\[email=(.+?)\](.*?)\[\/email\]/si', '[email]\\1[/email]', $text );

   // Convert URL tags....
   $text = preg_replace( '/\[ftp=(.*?)\](.*?)\[\/ftp\]/si', '[url=\\1]\\2[/url]', $text );
   $text = preg_replace( '/\[ftp\](.*?)\[\/ftp\]/si', '[url]\\1[/url]', $text );

   /* Convert image tags.
    * We'll even be nice and fix malformed ones in posts.
    */
   $text = preg_replace( '/\[img=(.*?)\](.*?)\[\/img\]/si', '[img]\\1[/img]', $text );
   $text = preg_replace( '/\[img(.*?)\](.*?)\[\/img(.*?)\]/si', '[img]\\2[/img]', $text );

   // Undo negative size tags....
   $text = preg_replace( '/\[size=-(.*?)\](.*?)\[\/size\]/si', '\\2', $text );

   // Fix the text formatting tags....
   $text = str_replace( '<br />', "\n\r", $text );

   // Reconfigure code tags....
   $text = str_replace( '[pre]', '[code]', $text );
   $text = str_replace( '[/pre]', '[/code]', $text );
   $text = str_replace( '[tt]', '[code]', $text );
   $text = str_replace( '[/tt]', '[/code]', $text );

   // Now fix the generic junk that's left over....
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
   include 'templates/convert_smf_memberprofiles.php';

   if( $prof_count > '0' )
      echo "<td class='tablelight' align='left'>".$prof_count." member profiles converted.</td>\n";
   else
      echo "<td class='tablelight'>&nbsp;</td>\n";
   echo "</tr>\n";

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_smf105.php?action=pmessages'>Convert Private Messages</a></td>\n";
      if( $pms == '1' )
         echo "<td class='tablelight' align='left'>".$pm_count." private messages converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_smf105.php?action=forum'>Convert Forum Structure</a></td>\n";
      if( $cats == '1' )
         echo "<td class='tablelight' align='left'>".$cat_count." categories converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $cats == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight'>&nbsp;</td>\n";
      if( $forums == '1' )
         echo "<td class='tablelight' align='left'>".$forum_count." forums converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' && $forums == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight'>&nbsp;</td>\n";
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
         echo "<td class='tablelight' align='left'><a href='convert_smf105.php?action=posts'>Convert Posts</a></td>\n";
         echo "<td class='tablelight'>&nbsp;</td>\n";
      }
      else if( $posts == '1' )
      {
         echo "<td class='tablelight' align='left'><a href='convert_smf105.php?action=posts&amp;start=".$post_count."&amp;i=".$post_count."'>Continue post conversion</a></td>\n";
         echo "<td class='tablelight' align='left'>".$post_count." posts converted so far.</td>\n";
      }
      else
      {
         echo "<td class='tablelight' align='left'><a href='convert_smf105.php?action=posts'>Convert Posts</a></td>\n";
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
      
      include 'templates/convert_smf_finished.php';
   }
   include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'dropsmf' )
{
    include 'templates/convert_header.php';
    include 'templates/convert_smf_destroydata.php';
    include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'confirmsmfdrop' )
{
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}auth_access" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}banlist" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}categories" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}config" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}confirm" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}disallow" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forum_prune" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forums" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}groups" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}posts" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}posts_text" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}privmsgs" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}privmsgs_text" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}ranks" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}search_results" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}search_wordlist" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}search_wordmatch" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}sessions" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}smilies" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}themes" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}themes_name" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}topics" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}topics_watch" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}user_group" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}users" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}vote_desc" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}vote_results" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}vote_voters" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}words" );

   include 'templates/convert_header.php';
   include 'templates/convert_smf_datadestroyed.php';
   include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'members' )
{
   $i = '0';
   $qsf->db->query( "TRUNCATE {$qsf->pre}users" );
   $sql = "INSERT INTO {$qsf->pre}users VALUES( 1, 'Guest', '', 0, 1, '', 0, 3, 'default', 'en', '', 'none', 0, 0, '', 0, 1, '0000-00-00', '0.0', '', 0, '', 0, '', '', '', 0, 1, '', '', '', 0, 0, 0, 0, 1, 1, 1, '' )";
   $result = $qsf->db->query($sql);

   $sql = "SELECT * FROM {$oldboard->pre}members";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['ID_MEMBER'] += 1;

      if( $row['hideEmail'] == '' || $row['hideEmail'] == '0' )
         $showmail = '1';
      else
         $showmail = '0';

      if( $row['lastLogin'] == '' || $row['lastLogin'] == '0' )
         $row['lastLogin'] = $row['dateRegistered'];

      $row['websiteUrl'] = strip_smf_tags( $row['websiteUrl'] );
      $row['location'] = strip_smf_tags( $row['location'] );
      $row['signature'] = strip_smf_tags( $row['signature'] );

      // The default SMF groups: You're either an admin or you're not.
      if( $row['ID_GROUP'] == '1' )
         $row['ID_GROUP'] = 'USER_ADMIN';
      else
         $row['ID_GROUP'] = 'USER_MEMBER';

      $sql2 = "SELECT * FROM {$oldboard->pre}banned WHERE ban_type = 'user_ban' AND ID_MEMBER = '{$row['ID_MEMBER']}'";
      $result2 = $oldboard->db->query($sql2);
      while( $row2 = $oldboard->db->nqfetch($result2) )
      {
         $row['memberGroup'] = '4';
      }

      $pos = strpos( $row['avatar'], '://' );
      if( $pos == '4' )
      {
         $avatar = $row['avatar'];
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

      $lang = "en";
      if( $row['lngfile'] == "spanish.lng" )
         $lang = "es";
      else if( $row['lngfile'] == "italian.lng" )
         $lang = "it";
      else if( $row['lngfile'] == "german.lng" )
         $lang = "de";
      else if( $row['lngfile'] == "dutch.lng" )
         $lang = "nl";

      $qsf->db->query( "INSERT INTO {$qsf->pre}users VALUES( {$row['ID_MEMBER']}, '{$row['memberName']}', '{$row['passwd']}', {$row['dateRegistered']}, '1', '{$row['usertitle']}', 0, '{$row['ID_GROUP']}', 'default', '{$lang}', '{$avatar}', '{$type}', '{$width}', '{$height}', '{$row['emailAddress']}', $showmail, '', '{$row['birthdate']}', '{$row['timeOffset']}', '{$row['websiteUrl']}', {$row['posts']}, '{$row['location']}', '{$row['ICQ']}', '{$row['MSN']}', '{$row['AIM']}', '', 1, 1, '{$row['YIM']}', '', '{$row['signature']}', {$row['lastLogin']}, 0, 0, 0, 1, 1, 1, '' )" );
      $i++;
   }

   $oldset['profiles'] = '1';
   $oldset['prof_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_smf105.php'>";
}

else if( $_GET['action'] == 'pmessages' )
{
   $i = '0';
   $topid = '0';
   $qsf->db->query( "TRUNCATE {$qsf->pre}pmsystem" );
   $sql = "SELECT * FROM {$oldboard->pre}instant_messages";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['ID_MEMBER_FROM'] += 1;
      $row['ID_MEMBER_TO'] += 1;

      if( $row['subject'] == '' )
         $row['subject'] = "No Title";
      else
         $row['subject'] = strip_smf_tags( $row['subject'] );
      $row['body'] = strip_smf_tags( $row['body'] );

      $i++;

      if( $row['deletedBy'] == "-1" )
      {
         $SNDTABLE[] = array( 'mbto' => $row['ID_MEMBER_FROM'], 'mbfrom' => $row['ID_MEMBER_FROM'], 'bcc' => $row['ID_MEMBER_TO'], 'subject' => $row['subject'], 'time' => $row['msgtime'], 'text' => $row['body'] );
      }
      $qsf->db->query( "INSERT INTO {$qsf->pre}pmsystem VALUES( {$row['ID_PM']}, {$row['ID_MEMBER_TO']}, {$row['ID_MEMBER_FROM']}, '', '{$row['subject']}', {$row['msgtime']}, '{$row['body']}', 0, 0 )" );
      $topid = $row['ID_PM'];
   }

   for( $x = 0; $x < sizeof( $SNDTABLE ); $x++ )
   {
      $newid = ++$topid;
      $qsf->db->query( "INSERT INTO {$qsf->pre}pmsystem VALUES( {$newid}, {$SNDTABLE[$x]['mbto']}, {$SNDTABLE[$x]['mbfrom']}, '{$SNDTABLE[$x]['bcc']}', '{$SNDTABLE[$x]['subject']}', '{$SNDTABLE[$x]['msgtime']}', '{$SNDTABLE[$x]['text']}', 0, 1 )" );
      $i++;
   }

   $oldset['pms'] = '1';
   $oldset['pm_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_smf105.php'>";
}

else if( $_GET['action'] == 'forum' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}forums" );

   $sql = "SELECT * FROM {$oldboard->pre}categories";
   $result = $oldboard->db->query($sql);
   $i = '0';
   $fid = '1';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $forum_table[] = array( 'new_id' => $fid++, 'cat' => $row['ID_CAT'], 'parent' => -2, 'name' => $row['name'], 'position' => $row['catOrder'], 'description' => $row['description'], 'topics' => 0, 'replies' => 0, 'lastpost' => 0, 'old_id' => 0, 'child' => 0 );
      $i++;
   }
   $startid = $i;

   $oldset['cats'] = '1';
   $oldset['cat_count'] = $i;
   write_olddb_sets( $oldset );

   $sql = "SELECT * FROM {$oldboard->pre}boards";
   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      if( $row['last_post'] == '' )
         $row['last_post'] = '0';
      if( $row['ID_PARENT'] == '0' && $row['childLevel'] == '0' )
      {
         $rparent = $row['ID_CAT'];
         $rchild = '0';
      }
      else
      {
         $rparent = $row['ID_PARENT'];
         $rchild = '1';
      }
      $forum_table[] = array( 'new_id' => $fid++, 'cat' => $row['ID_CAT'], 'parent' => $rparent, 'name' => $row['name'], 'position' => $row['boardOrder'], 'description' => $row['description'], 'topics' => $row['numTopics'], 'replies' => $row['numPosts'], 'lastpost' => $row['last_post'], 'old_id' => $row['ID_BOARD'], 'child' => $rchild );
   }

   for( $x = 0; $x < sizeof( $forum_table ); $x++ )
   {
      $cat = $forum_table[$x]['cat'];
      $parent = $forum_table[$x]['parent'];
      $child = $forum_table[$x]['child'];
      $name = $forum_table[$x]['name'];
      $name = strip_smf_tags( $name );
      $position = $forum_table[$x]['position'];
      $description = $forum_table[$x]['description'];
      $description = strip_smf_tags( $description );
      $topics = $forum_table[$x]['topics'];
      $replies = $forum_table[$x]['replies'];
      $last_post = $forum_table[$x]['lastpost'];
      $newid = $forum_table[$x]['new_id'];
      $oldid = $forum_table[$x]['old_id'];

      if( $x > $startid )
      {
         if( $parent == '-2' )
            $parent = '0';
         else
         {
            for( $y = 0; $y < sizeof( $forum_table ); $y++ )
            {
               if( $forum_table[$y]['old_id'] == $parent )
               {
                  if( $child == '0' )
                  {
                     $parent = $forum_table[$cat-1]['new_id'];
                  }
                  else
                  {
                     $parent = $forum_table[$y]['new_id'];
                  }
                  break;
               }
            }
         }
      }
      $qsf->db->query( "INSERT INTO {$qsf->pre}forums VALUES( '', {$parent}, '', '{$name}', '{$position}', '{$description}', '{$topics}', '{$replies}', '{$last_post}', 0 )" );
      $i++;
   }

   $oldset['forums'] = '1';
   $oldset['forum_count'] = $i;
   write_olddb_sets( $oldset );

   $qsf->db->query( "TRUNCATE {$qsf->pre}topics" );
   $sql = "SELECT * FROM {$oldboard->pre}topics";
   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      if( $row['ID_MEMBER_STARTED'] < '1' )
         $row['ID_MEMBER_STARTED'] = 1;
      else
         $row['ID_MEMBER_STARTED'] += 1;

      if( $row['ID_MEMBER_UPDATED'] < '1' )
         $row['ID_MEMBER_UPDATED'] = 1;
      else
         $row['ID_MEMBER_UPDATED'] += 1;

      $topic_modes = '0';
      if( $row['locked'] == '1' )
         $topic_modes = ($topic_modes | TOPIC_LOCKED);
      if( $row['isSticky'] == '1' )
         $topic_modes = ($topic_modes | TOPIC_PINNED);
      if( $row['ID_POLL'] > '0' )
         $topic_modes = ($topic_modes | TOPIC_POLL);

      $sql2 = "SELECT * FROM {$oldboard->pre}messages WHERE ID_TOPIC = {$row['ID_TOPIC']}";
      $result2 = $oldboard->db->query($sql2);
      while( $row2 = $oldboard->db->nqfetch($result2) )
      {
         $topictime = $row2['posterTime'];
         if( $row2['subject'] == '' )
            ;
         else
         {
            $subject = strip_smf_tags( $row2['subject'] );
            break;
         }
      }

      $fid = '0';
      for( $x = 0; $x < sizeof( $forum_table ); $x++ )
      {
         if( $row['ID_BOARD'] == $forum_table[$x]['old_id'] )
         {
            $fid = $forum_table[$x]['new_id'];
            break;
         }
      }
      $qsf->db->query( "INSERT INTO {$qsf->pre}topics VALUES( {$row['ID_TOPIC']}, {$fid}, '{$subject}', '', {$row['ID_MEMBER_STARTED']}, '{$row['ID_MEMBER_UPDATED']}', '', '{$topictime}', {$row['numReplies']}, {$row['numViews']}, {$topic_modes}, 0, '' )" );
      $i++;

      if( $row['notifies'] != '' )
      {
         $subs = explode( ',', $row['notifies'] );

         for( $x = 0; $x < sizeof( $subs ); $x++ )
         {
            $newsub++;
            $user = $subs[$x]+1;
            $qsf->db->query( "INSERT INTO {$qsf->pre}subscriptions VALUES( {$newsub}, {$user}, 'topic', {$row['ID_TOPIC']}, {$expire} )" );
         }
      }
   }

   $oldset['topics'] = '1';
   $oldset['topic_count'] = $i;
   write_olddb_sets( $oldset );

   $qsf->db->query( "TRUNCATE {$qsf->pre}votes" );
   $sql = "SELECT * FROM {$oldboard->pre}polls";
   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $sql2 = "SELECT * FROM {$oldboard->pre}topics WHERE ID_POLL = '{$row['ID_POLL']}'";
      $result2 = $oldboard->db->query($sql2);
      while( $row2 = $oldboard->db->nqfetch($result2) )
      {
         $tid = $row2['ID_TOPIC'];
      }

      $pollanswers = "";
      $sql2 = "SELECT * FROM {$oldboard->pre}poll_choices WHERE ID_POLL = '{$row['ID_POLL']}'";
      $result2 = $oldboard->db->query($sql2);
      while( $row2 = $oldboard->db->nqfetch($result2) )
      {
         $poll_table[] = array( 'choice' => $row2['ID_CHOICE'], 'answer' => $row2['label'], 'votes' => $row2['votes'] );
         $pollanswers .= $row2['label']."\n";
      }
      $qsf->db->query( "UPDATE {$qsf->pre}topics SET topic_poll_options = '{$pollanswers}' WHERE topic_id = '{$tid}'" );

      $sql2 = "SELECT * FROM {$oldboard->pre}log_polls WHERE ID_POLL = '{$row['ID_POLL']}'";
      $result2 = $oldboard->db->query($sql2);
      while( $row2 = $oldboard->db->nqfetch($result2) )
      {
         $user = $row2['ID_MEMBER'] + 1;
         $qsf->db->query( "INSERT INTO {$qsf->pre}votes VALUES( {$user}, {$tid}, '{$row2['ID_CHOICE']}' )" );
      }
      $i++;
   }

   $oldset['polls'] = '1';
   $oldset['poll_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_smf105.php'>";
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

   $num = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}messages" );
   $all = $oldboard->db->num_rows( $num );
   $sql = "SELECT * FROM {$oldboard->pre}messages LIMIT {$start}, {$oldset['post_inc']}";
   $newstart = $start + $oldset['post_inc'];

   $result= $oldboard->db->query($sql);

   while( $row = $oldboard->db->nqfetch($result) )
   {
      if( $row['ID_MEMBER'] < '1' )
         $row['ID_MEMBER'] = '1';
      else
         $row['ID_MEMBER'] += 1;

      $row['body'] = strip_smf_tags( $row['body'] );

      $qsf->db->query( "INSERT INTO {$qsf->pre}posts VALUES( {$row['ID_MSG']}, {$row['ID_TOPIC']}, '{$row['ID_MEMBER']}', '{$row['smiliesEnabled']}', 1, '{$row['body']}', {$row['posterTime']}, '', INET_ATON('$row['posterIP']'), '', '{$row['modifiedTime']}' )" );
      $i++;
   }
   if( $i == $all )
   {
      $oldset['posts'] = '2';
      $oldset['post_count'] = $i;
      $oldset['converted'] = '2';
      write_olddb_sets( $oldset );
      echo "<meta http-equiv='Refresh' content='0;URL=convert_smf105.php'>";
   }
   else
   {
      $oldset['posts'] = '1';
      $oldset['post_count'] = $i;
      write_olddb_sets( $oldset );
      echo "<meta http-equiv='Refresh' content='0;URL=convert_smf105.php'>";
   }
}

?>
