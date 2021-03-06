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
 * XMB 1.9 Conversion Script
 * Based on work by Yazinin Nick <admin@vk.net.ru>
 *
 * Roger Libiez [Samson] <http://mercuryboard.afkmud.com>
 *
 * This convertor has been tested on XMB 1.9.3
 * I make no guarantees of it working with something older than that.
 **/

require_once './convert_db.php';
require_once '../settings.php';
require_once '../func/constants.php';
require_once '../lib/' . $set['dbtype'] . '.php';
require_once '../global.php';

define('CONVERTER_NAME', 'XMB 1.9 Convertor');

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
   error( QUICKSILVER_ERROR, 'A connection to the XMB database could not be established. Please check your settings and try again.', __FILE__, __LINE__ );
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
      'censor'        => $oldset['censor'],
      'censor_count'  => $oldset['censor_count'],
      'titles'        => $oldset['titles'],
      'title_count'   => $oldset['title_count'],
      'forums'        => $oldset['forums'],
      'forum_count'   => $oldset['forum_count'],
      'topics'        => $oldset['topics'],
      'topic_count'   => $oldset['topic_count'],
      'attach'        => $oldset['attach'],
      'attach_count'  => $oldset['attach_count'],
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

function process_poll($data, &$option, &$count, &$names)
{
    $split = explode('#|#', $data);
    $total = count($split);
    
    for ($ix = 0; $ix < ($total - 1); $ix++)
    {
        $temp = explode('||~|~||', $split[$ix]);
        $option[] = trim($temp[0]);
        $count[] = trim($temp[1]);
    }
    $names = explode(' ', $split[$total]);
}

function strip_xmb_tags( $text )
{
   // The [html] BBCode tag is not supported by XMB or Quicksilver Forums, so just strip those off and leave the contents.
   $text = preg_replace( '/\[html\](.+?)\[\/html\]/si', '\\1', $text );

   // Convert malformed image tags.
   $text = preg_replace( '/\[img=(.*?)\](.*?)\[\/img\]/si', '[img]\\1[/img]', $text );

   // Text alignment tags....
   $text = preg_replace( '/\[align=(.*?)\](.*?)\[\/align\]/si', '[\\1]\\2[/\\1]', $text );

   // Undo negative size tags....
   $text = preg_replace( '/\[size=-(.*?)\](.*?)\[\/size\]/si', '\\2', $text );

   // Fix the text formatting tags....
   $text = str_replace( '<br />', "\n", $text );

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
      $oldset['censor'] = '0';
      $oldset['censor_count'] = '0';
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
     <td class='tablelight' align='left'><a href='convert_xmb.php?action=censor'>Convert Censored Words</a>
     </td>";

   if( $censor_count > '0' )
      echo "<td class='tablelight' align='left'>".$censor_count." censored words converted.</td>\n";
   else
      echo "<td class='tablelight'>&nbsp;</td>\n";
   echo "</tr>\n";

   echo "<tr>
     <td class='tablelight' align='left'><a href='convert_xmb.php?action=members'>Convert Member Profiles</a>
     </td>";

   if( $prof_count > '0' )
      echo "<td class='tablelight' align='left'>".$prof_count." member profiles converted.</td>\n";
   else
      echo "<td class='tablelight'>&nbsp;</td>\n";
   echo "</tr>\n";

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_xmb.php?action=pmessages'>Convert Private Messages</a></td>\n";
      if( $pms == '1' )
         echo "<td class='tablelight' align='left'>".$pm_count." private messages converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_xmb.php?action=mtitles'>Convert Member Titles</a></td>\n";
      if( $titles == '1' )
         echo "<td class='tablelight' align='left'>".$title_count." member titles converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_xmb.php?action=forums'>Convert Forums</a></td>\n";
      if( $forums == '1' )
         echo "<td class='tablelight' align='left'>".$forum_count." forums converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' && $forums == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_xmb.php?action=topics'>Convert Topics</a></td>\n";
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
      echo "<td class='tablelight' align='left'><a href='convert_xmb.php?action=attach'>Convert Attachments</a></td>\n";
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
         echo "<td class='tablelight' align='left'><a href='convert_xmb.php?action=posts'>Convert Posts</a></td>\n";
         echo "<td class='tablelight'>&nbsp;</td>\n";
      }
      else if( $posts == '1' )
      {
         echo "<td class='tablelight' align='left'><a href='convert_xmb.php?action=posts&start=".$post_count."&i=".$post_count."'>Continue post conversion</a></td>\n";
         echo "<td class='tablelight' align='left'>".$post_count." posts converted so far.</td>\n";
      }
      else
      {
         echo "<td class='tablelight' align='left'><a href='convert_xmb.php?action=posts'>Convert Posts</a></td>\n";
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

      include 'templates/convert_xmb_finished.php';
   }
   include 'templates/convert_footer.php';
   
}

else if( $_GET['action'] == 'dropxmb' )
{
    include 'templates/convert_header.php';
    include 'templates/convert_xmb_destroydata.php';
    include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'confirmxmbdrop' )
{
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}attachments" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}banned" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}buddys" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}favorites" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forums" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}logs" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}members" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}posts" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}ranks" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}restricted" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}settings" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}smilies" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}templates" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}themes" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}threads" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}u2u" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}whosonline" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}words" );

   include 'templates/convert_header.php';
   include 'templates/convert_xmb_datadestroyed.php';
   include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'censor' )
{
   $result = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}words" );
   $i = '0';

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $qsf->db->query( "INSERT INTO {$qsf->pre}replacements (replacement_search, replacement_type) VALUES( '{$row['find']}', 'censor' )" );
      $i++;
   }

   $oldset['censor'] = '1';
   $oldset['censor_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_xmb.php'>";
}

else if( $_GET['action'] == 'members' )
{
   $i = '0';
   $qsf->db->query( "TRUNCATE {$qsf->pre}users" );
   $sql = "INSERT INTO {$qsf->pre}users VALUES( 1, 'Guest', '', 0, 1, '', 0, 3, 'default', 'en', '', 'none', 0, 0, '', 0, 0, '0000-00-00', '151', '', 0, '', 0, '', '', '', 0, 1, '', '', '', 0, 0, 0, 0, 1, 1, 1, '' )";
   $result = $qsf->db->query($sql);

   $sql = "SELECT * FROM {$oldboard->pre}members";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['uid']++;

      if( $row['showemail'] == '' || $row['showemail'] == 'no' )
         $showmail = 0;
      else
         $showmail = 1;

      if( $row['lastvisit'] == '' || $row['lastvisit'] == '0' )
         $row['lastvisit'] = $row['regdate'];

      $row['username'] = strip_xmb_tags( $row['username'] );
      $row['email'] = strip_xmb_tags( $row['email'] );
      $row['site'] = strip_xmb_tags( $row['site'] );
      $row['location'] = strip_xmb_tags( $row['location'] );
      $row['sig'] = strip_xmb_tags( $row['sig'] );

      // The default XMB groups.
      if( $row['status'] == 'Super Administrator' || $row['status'] == 'Administrator' )
         $group = 1;
      else if( $row['status'] == 'Super Moderator' )
         $group = 6;
      else if( $row['status'] == 'Banned' )
         $group = 4;
      else
         $group = 2;

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

      switch( $row['langfile'] )
      {
         default:        $lang = "en"; break;
         case "Dutch":   $lang = "nl"; break;
         case "French":  $lang = "fr"; break;
         case "German":  $lang = "de"; break;
         case "Italian": $lang = "it"; break;
         case "Russian": $lang = "ru"; break;
         case "SimplifiedChinese": $lang = "zh"; break;
         case "Swedish": $lang = "sv"; break;
      }

      $icq = 0;
      if( $row['icq'] )
         $icq = intval( $row['icq'] );

      $qsf->db->query( "INSERT INTO {$qsf->pre}users VALUES( {$row['uid']}, '{$row['username']}', '{$row['password']}', {$row['regdate']}, 1, '', 0, {$group}, 'default', '{$lang}', '{$avatar}', '{$type}', {$width}, {$height}, '{$row['email']}', {$showmail}, 1, '0000-00-00', 151, '{$row['site']}', {$row['postnum']}, '{$row['location']}', {$icq}, '{$row['msn']}', '{$row['aim']}', '', 1, 1, '{$row['yahoo']}', '', '{$row['sig']}', {$row['lastvisit']}, 0, 0, 0, 1, 1, 1, '' )" );
      $i++;
   }

   $oldset['profiles'] = '1';
   $oldset['prof_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_xmb.php'>";
}

else if( $_GET['action'] == 'pmessages' )
{
   $i = '0';
   $qsf->db->query( "TRUNCATE {$qsf->pre}pmsystem" );
   $sql = "SELECT * FROM {$oldboard->pre}u2u";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $from = $oldboard->db->fetch( "SELECT uid FROM {$oldboard->pre}members WHERE username='{$row['msgfrom']}'" );
      $ufrom = $from['uid'];
      $ufrom++;

      $to = $oldboard->db->fetch( "SELECT uid FROM {$oldboard->pre}members WHERE username='{$row['msgto']}'" );
      $uto = $to['uid'];
      $uto++;

      if( $row['subject'] == '' )
         $row['subject'] = "No Title";
      else
         $row['subject'] = strip_xmb_tags( $row['subject'] );
      $row['message'] = strip_xmb_tags( $row['message'] );

      $i++;

      $folder = 0;
      $bcc = '';
      if( $row['type'] == 'outgoing' )
      {
         $folder = 1;
         $bcc = $uto;
         $uto = $ufrom;
      }
      $qsf->db->query( "INSERT INTO {$qsf->pre}pmsystem VALUES( {$row['u2uid']}, {$uto}, {$ufrom}, '{$bcc}', '{$row['subject']}', {$row['dateline']}, '{$row['message']}', 0, {$folder} )" );
   }

   $oldset['pms'] = '1';
   $oldset['pm_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_xmb.php'>";
}

else if( $_GET['action'] == 'mtitles' )
{
   $num = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}ranks" );
   $all = $oldboard->db->num_rows( $num );
   $i = '0';

   if( $all > 4 ) // More than 4 means you have custom rank titles. 4 or less is only core groups and we don't want them.
   {
      $qsf->db->query( "TRUNCATE {$qsf->pre}membertitles" );

      $titlecount = 0;
      $sql = "SELECT * FROM {$oldboard->pre}ranks";
      $result = $oldboard->db->query($sql);
      while( $row = $oldboard->db->nqfetch($result) )
      {
         if( $row['posts'] < 0 )
            continue;

         $titlecount++;
         if( $row['stars'] > '5' )
            $icon = '5.png';
         else if( $row['stars'] < '1' )
            $icon = '1.png';
         else
         {
            $icon = $row['stars'];
            $icon .= '.png';
         }
         $qsf->db->query( "INSERT INTO {$qsf->pre}membertitles (membertitle_title, membertitle_posts, membertitle_icon)VALUES( '{$row['title']}', {$row['posts']}, '{$icon}' )" );
         $i++;
      }
   }

   if( $titlecount == 0 ) // If the count comes out 0 for some reason, put one back.
   {
      $qsf->db->query( "INSERT INTO {$qsf->pre}membertitles (membertitle_title, membertitle_posts, membertitle_icon)VALUES( 'Poster', 0, '1.png' )" );
   }

   $oldset['titles'] = '1';
   $oldset['title_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_xmb.php'>";
}

else if( $_GET['action'] == 'forums' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}forums" );
   $sql = "SELECT * FROM {$oldboard->pre}forums";
   $result = $oldboard->db->query($sql);
   $i = '0';
   $fid = 0;

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['name'] = strip_xmb_tags( $row['name'] );
      $row['description'] = strip_xmb_tags( $row['description'] );

      if( $row['fid'] > $fid )
         $fid = $row['fid'];
      $subcat = 0;
      if( $row['type'] == 'forum' && $row['fup'] == 0 )
         $subcat = 2;
      $qsf->db->query( "INSERT INTO {$qsf->pre}forums VALUES( {$row['fid']}, {$row['fup']}, '', '{$row['name']}', {$row['displayorder']}, '{$row['description']}', {$row['threads']}, {$row['posts']}, 0, {$subcat} )" );
      $i++;
   }

   $fid++;
   $qsf->db->query( "INSERT INTO {$qsf->pre}forums VALUES( {$fid}, 0, '', 'Default Category', 0, '', 0, 0, 0, 0 )" );
   $qsf->db->query( "UPDATE {$qsf->pre}forums SET forum_parent={$fid} WHERE forum_subcat=2" );
   $qsf->db->query( "UPDATE {$qsf->pre}forums SET forum_subcat=0" );

   $oldset['forums'] = '1';
   $oldset['forum_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_xmb.php'>";
}

else if( $_GET['action'] == 'topics' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}topics" );
   $sql = "SELECT * FROM {$oldboard->pre}threads";
   $result = $oldboard->db->query($sql);
   $i = '0';
   $j = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $author = $oldboard->db->fetch( "SELECT uid FROM {$oldboard->pre}members WHERE username='{$row['author']}'" );
      $uid = $author['uid'];
      $uid++;

      $poll_options = '';
      $names = array();
      $count = array();
      $option = array();
      $topic_modes = '0';

      if( $row['closed'] == 'yes' )
         $topic_modes = ($topic_modes | TOPIC_LOCKED);
      if( $row['topped'] == '1' )
         $topic_modes = ($topic_modes | TOPIC_PINNED);
      if( $row['pollopts'] != '' )
         $topic_modes = ($topic_modes | TOPIC_POLL);

      $row['subject'] = strip_xmb_tags( $row['subject'] );

      if( $row['pollopts'] != '' )
      {
         process_poll( $row['pollopts'], $option, $count, $names );
         foreach( $option as $options => $pollopt )
            $poll_options .= $pollopt . "\n";
         $j++;
         $poll_options = addslashes( $poll_options );
      }

      $qsf->db->query( "INSERT INTO {$qsf->pre}topics VALUES( {$row['tid']}, {$row['fid']}, '{$row['subject']}', '', {$uid}, {$uid}, '', {$row['dateline']}, {$row['replies']}, {$row['views']}, {$topic_modes}, 0, '{$poll_options}' )" );
      $i++;
   }

   $oldset['topics'] = '1';
   $oldset['topic_count'] = $i;
   $oldset['polls'] = '1';
   $oldset['poll_count'] = $j;
   write_olddb_sets( $oldset );

   $qsf->db->query( "TRUNCATE {$qsf->pre}subscriptions" );
   $sql = "SELECT * FROM {$oldboard->pre}favorites";
   $result = $qsf->db->query($sql);

   while( $row = $qsf->db->nqfetch($result) )
   {
      $user = $oldboard->db->fetch( "SELECT uid FROM {$oldboard->pre}members WHERE username='{$row['username']}'" );
      $uid = $user['uid'];
      $uid++;

      $expire = time() + 2592000;
      $qsf->db->query( "INSERT INTO {$qsf->pre}subscriptions VALUES( {$row['tid']}, {$uid}, 'topic', {$row['tid']}, {$expire} )" );
   }

/*   $sql = "SELECT * FROM {$oldboard->pre}polls";
   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $qsf->db->query( "UPDATE {$qsf->pre}topics SET topic_poll_options = '{$row['choices']}' WHERE topic_id = '{$row['tid']}'" );
      $i++;
   }

   $qsf->db->query( "TRUNCATE {$qsf->pre}votes" );
   $sql = "SELECT * FROM {$oldboard->pre}voters";
   $result = $oldboard->db->query($sql);

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['member_id']++;
      $qsf->db->query( "INSERT INTO {$qsf->pre}votes VALUES( {$row['member_id']}, {$row['tid']}, '' )" );
   }

   $oldset['polls'] = '1';
   $oldset['poll_count'] = $i;
   write_olddb_sets( $oldset ); */
   echo "<meta http-equiv='Refresh' content='0;URL=convert_xmb.php'>";
}

else if( $_GET['action'] == 'attach' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}attach" );
   $result = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}attachments" );
   $i = '0';

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $qsf->db->query( "INSERT INTO {$qsf->pre}attach VALUES( {$row['aid']}, '{$row['filename']}', '{$row['filename']}', {$row['pid']}, {$row['downloads']}, {$row['filesize']} )" );
      $i++;
   }

   $oldset['attach'] = '1';
   $oldset['attach_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_xmb.php'>";
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
      $author = $oldboard->db->fetch( "SELECT uid FROM {$oldboard->pre}members WHERE username='{$row['author']}'" );
      $uid = $author['uid'];
      $uid++;

      $row['message'] = strip_xmb_tags( $row['message'] );

      $smilies = 1;
      if( $row['smileyoff'] == 'yes' )
         $smilies = 0;

      $ip = "127.0.0.1";
      if( $row['useip'] )
         $ip = $row['useip'];
      
      $qsf->db->query( "INSERT INTO {$qsf->pre}posts VALUES( {$row['pid']}, {$row['tid']}, {$uid}, {$smilies}, 1, '{$row['message']}', {$row['dateline']}, '', INET_ATON( '{$ip}' ), '', 0 )" );
      $i++;
   }
   if( $i == $all )
   {
      $oldset['posts'] = '2';
      $oldset['post_count'] = $i;
      $oldset['converted'] = '2';
      write_olddb_sets( $oldset );
      echo "<meta http-equiv='Refresh' content='0;URL=convert_xmb.php'>";
   }
   else
   {
      $oldset['posts'] = '1';
      $oldset['post_count'] = $i;
      write_olddb_sets( $oldset );
      echo "<meta http-equiv='Refresh' content='0;URL=convert_xmb.php'>";
   }
}

?>
