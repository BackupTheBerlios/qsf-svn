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
 * Invision Power Board 2.1 Conversion Script
 * Based on work by Yazinin Nick <admin@vk.net.ru>
 *
 * Roger Libiez [Samson] <http://mercuryboard.afkmud.com>
 *
 * Script tested on an unmodified Invision Power Board 2.1 database.
 * Use with any other version has not been validated!
 **/

require_once './convert_db.php';
require_once '../settings.php';
require_once '../func/constants.php';
require_once '../lib/' . $set['dbtype'] . '.php';
require_once '../global.php';

define('CONVERTER_NAME', 'Invision Power Board 2.1 Convertor');

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
   error( QUICKSILVER_ERROR, 'A connection to the Invisionboard database could not be established. Please check your settings and try again.', __FILE__, __LINE__ );
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
      'censor'        => $oldset['censor'],
      'censor_count'  => $oldset['censor_count'],
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

/*
 * Remove all of the offending junky HTML Invisionboard encoded into message text.
 * Thanks to the good people who frequent php.net for posting examples of how to use regex.
 * It obviously helped alot, especially with Invisionboard's ugly non-validating XHTML 1.0 - Oh the irony
 */
function strip_ipb21_tags( $text )
{
   // The [html] BBCode tag is not supported by Quicksilver Forums, so when the horrid mess is encountered in Invisionboard.....
   $text = preg_replace( "#<!--html-->(.+?)<!--html1-->#", "", $text );
   $text = preg_replace( "#<!--html2-->(.+?)<!--html3-->#", "", $text );

   // Convert emoticons....
   $text = preg_replace( "#emoid=[\"]:(\S+?):[\"]#", "\\1", $text );
   $text = preg_replace( "#<img src=[\"']style_emoticons/(.*?)/>#", "", $text );

   // Convert font tags. Man are these UGLY.
   $text = preg_replace( "#<!--fonto:(.+?)-->(.+?)<!--/fonto-->#", "[font=\\1]", $text );
   $text = str_replace( "<!--fontc--></span><!--/fontc-->", "[/font]", $text );

   // Convert size tags, also very ugly.
   $text = preg_replace( "#<!--sizeo:(.+?)-->.+?<!--/sizeo-->#", "[size=\\1]", $text );
   $text = preg_replace( "#<!--sizec-->.+?<!--/sizec-->#", "[/size]", $text );

   /* Convert image tags.
    * We'll even be nice and fix malformed ones in posts.
    */
   $text = preg_replace( "#<img src=[\"'](\S+?)['\"].+?".">#", "[img]\\1[/img]", $text );
   $text = preg_replace( '/\[img=(.*?)\](.*?)\[\/img\]/si', '[img]\\1[/img]', $text );

   // Convert email tags....
   $text = preg_replace( "#<a href=[\"']mailto:(.+?)['\"]>(.+?)</a>#", "[email=\\1]\\2[/email]", $text );

   // Convert URLs....
   $text = preg_replace( "#<a href=[\"'](.+?)['\"] target=[\"'](.+?)['\"]>(.+?)</a>#", "[url=\\1]\\3[/url]", $text );

   // Convert color tags....
   $text = preg_replace( "#<!--coloro:(.+?)-->(.+?)<!--/coloro-->#", "[color=\\1]", $text );
   $text = str_replace( "<!--colorc--></span><!--/colorc-->", "[/color]", $text );

   // List tags are not supported in QSF.
   $text = preg_replace( '/\[list=(.*?)\](.*?)\[\/list\]/si', '\\2', $text );
   $text = str_replace( "[list]", "", $text );
   $text = str_replace( "[/list]", "", $text );
   $text = str_replace( "[*]", "", $text );

   // Indent tags are not supported in QSF.
   $text = str_replace( "[indent]", "", $text );
   $text = str_replace( "[/indent]", "", $text );

   // Font tags are not desired, so they will be summarily parsed out....
   $text = preg_replace( "#<font(.+?)>#", "", $text );
   $text = str_replace ( "</font>", "", $text );

   // Span tags at this point are also not desired.
   $text = preg_replace( "#<span(.+?)>#", "", $text );
   $text = str_replace ( "</span>", "", $text );

   // Reconfigure code tags.
   $text = preg_replace( "#<!--c1-->(.+?)<!--ec1--><br />#", '[code]', $text );
   $text = preg_replace( "#<!--c1-->(.+?)<!--ec1-->#", '[code]', $text );
   $text = preg_replace( "#<!--c2-->(.+?)<!--ec2-->#", '[/code]', $text );

   // Reconfigure SQL tags
   $text = preg_replace( "#<!--sql-->(.+?)<!--sql1-->#", "[code]", $text );
   $text = preg_replace( "#<!--sql2-->(.+?)<!--sql3-->#", "[/code]", $text );

   // Strip flash movies and let people know about it.
   $text = preg_replace( "#<!--Flash (.+?)-->.+?<!--End Flash-->#e", "Flash image stripped during conversion.", $text );

   // Reconfigure quote tags.
   $text = preg_replace( "#<!--quoteo-->(.+?)<!--quotec-->#", "[quote]", $text );
   $text = preg_replace( "#<!--quoteo-{1,2}([^>]+?)\+([^>]+?)-->(.+?)<!--quotec-->#" , "[quote=\\1,\\2]" , $text );
   $text = preg_replace( "#<!--quoteo-{1,2}([^>]+?)\+-->(.+?)<!--quotec-->#" , "[quote=\\1]" , $text );
   $text = preg_replace( "#<!--QuoteEnd-->(.+?)<!--QuoteEEnd-->#", "[/quote]", $text );

   // Fix the text formatting tags....
   $text = preg_replace( "#<i>(.+?)</i>#is", "[i]\\1[/i]", $text );
   $text = preg_replace( "#<b>(.+?)</b>#is", "[b]\\1[/b]", $text );
   $text = preg_replace( "#<s>(.+?)</s>#is", "[s]\\1[/s]", $text );
   $text = preg_replace( "#<strike>(.+?)</strike>#is", "[s]\\1[/s]", $text );
   $text = preg_replace( "#<u>(.+?)</u>#is", "[u]\\1[/u]", $text );
   $text = preg_replace( "#<blockquote>(.+?)</blockquote>#is", "\\1", $text );
   $text = preg_replace( "#<div align=(.+?)>(.+?)</div>#is", "\\2", $text );
   $text = str_replace( "<br>", "\n", $text );
   $text = str_replace( "<br />", "\n", $text );

   // Fix random junk in the post code....
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
   $cats = $oldset['cats'];
   $cat_count = $oldset['cat_count'];
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
     <td class='tablelight' align='left'><a href='convert_ipb21.php?action=censor'>Convert Censored Words</a>
     </td>";

   if( $censor_count > '0' )
      echo "<td class='tablelight' align='left'>".$censor_count." censored words converted.</td>\n";
   else
      echo "<td class='tablelight'>&nbsp;</td>\n";
   echo "</tr>\n";

   echo "<tr>
     <td class='tablelight' align='left'><a href='convert_ipb21.php?action=members'>Convert Member Profiles</a>
     </td>";

   if( $prof_count > '0' )
      echo "<td class='tablelight' align='left'>".$prof_count." member profiles converted.</td>\n";
   else
      echo "<td class='tablelight'>&nbsp;</td>\n";
   echo "</tr>\n";

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_ipb21.php?action=pmessages'>Convert Private Messages</a></td>\n";
      if( $pms == '1' )
         echo "<td class='tablelight' align='left'>".$pm_count." private messages converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_ipb21.php?action=mtitles'>Convert Member Titles</a></td>\n";
      if( $titles == '1' )
         echo "<td class='tablelight' align='left'>".$title_count." member titles converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_ipb21.php?action=forums'>Convert Forums</a></td>\n";
      if( $forums == '1' )
         echo "<td class='tablelight' align='left'>".$forum_count." forums converted.</td>\n";
      else
         echo "<td class='tablelight'>&nbsp;</td>\n";
      echo "</tr>\n";
   }

   if( $prof == '1' && $forums == '1' )
   {
      echo "<tr>\n";
      echo "<td class='tablelight' align='left'><a href='convert_ipb21.php?action=topics'>Convert Topics</a></td>\n";
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
      echo "<td class='tablelight' align='left'><a href='convert_ipb21.php?action=attach'>Convert Attachments</a></td>\n";
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
         echo "<td class='tablelight' align='left'><a href='convert_ipb21.php?action=posts'>Convert Posts</a></td>\n";
         echo "<td class='tablelight'>&nbsp;</td>\n";
      }
      else if( $posts == '1' )
      {
         echo "<td class='tablelight' align='left'><a href='convert_ipb21.php?action=posts&start=".$post_count."&i=".$post_count."'>Continue post conversion</a></td>\n";
         echo "<td class='tablelight' align='left'>".$post_count." posts converted so far.</td>\n";
      }
      else
      {
         echo "<td class='tablelight' align='left'><a href='convert_ipb21.php?action=posts'>Convert Posts</a></td>\n";
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

      include 'templates/convert_ipb21_finished.php';
   }
   include 'templates/convert_footer.php';
   
}

else if( $_GET['action'] == 'dropipb21' )
{
    include 'templates/convert_header.php';
    include 'templates/convert_ipb21_destroydata.php';
    include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'confirmipb21drop' )
{
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}admin_logs" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}admin_permission_keys" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}admin_permission_rows" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}admin_sessions" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}announcements" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}attachments" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}attachments_type" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}badwords" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}banfilters" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}bulk_mail" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}cache_store" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}cal_calendars" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}cal_events" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}calendar_events" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}components" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}conf_settings" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}conf_settings_titles" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}contacts" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}custom_bbcode" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}dnames_change" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}email_logs" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}emoticons" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}faq" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forum_perms" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forum_tracker" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}forums" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}groups" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}languages" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}login_methods" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}mail_error_logs" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}mail_queue" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}member_extra" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}members" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}members_converge" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}members_partial" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}message_text" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}message_topics" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}moderator_logs" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}moderators" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}pfields_content" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}pfields_data" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}polls" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}posts" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}reg_antispam" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}rss_export" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}rss_import" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}rss_imported" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}search_results" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}sessions" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}skin_macro" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}skin_sets" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}skin_templates" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}skin_templates_cache" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}spider_logs" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}subscription_currency" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}subscription_extra" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}subscription_logs" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}subscription_methods" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}subscription_trans" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}subscriptions" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}task_logs" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}task_manager" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}template_diff_changes" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}template_diff_session" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}templates_diff_import" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}titles" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}topic_markers" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}topic_mmod" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}topic_ratings" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}topic_views" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}topics" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}topics_read" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}tracker" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}upgrade_history" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}validating" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}voters" );
   $oldboard->db->query( "DROP TABLE IF EXISTS {$oldboard->pre}warn_logs" );

   include 'templates/convert_header.php';
   include 'templates/convert_ipb21_datadestroyed.php';
   include 'templates/convert_footer.php';
}

else if( $_GET['action'] == 'censor' )
{
   $result = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}badwords" );
   $i = '0';

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $qsf->db->query( "INSERT INTO {$qsf->pre}replacements (replacement_search, replacement_type) VALUES( '{$row['type']}', 'censor' )" );
      $i++;
   }

   $oldset['censor'] = '1';
   $oldset['censor_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ipb21.php'>";
}

else if( $_GET['action'] == 'members' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}users" );
   $sql = "INSERT INTO {$qsf->pre}users VALUES( 1, 'Guest', '', 0, 1, '', 0, 3, 'default', 'en', '', 'none', 0, 0, '', 0, 0, '0000-00-00', '151', '', 0, '', 0, '', '', '', 0, 1, '', '', '', 0, 0, 0, 0, 1, 1, 1, '' )";
   $result = $qsf->db->query($sql);

   $i = '0';
   $sql = "SELECT u.*, m.*
      FROM {$oldboard->pre}members u
      LEFT JOIN {$oldboard->pre}member_extra m ON m.id = u.id";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      if( $row['id'] > '0' )
      {
         $row['id']++;

         if( $row['hide_email'] == '' || $row['hide_email'] == '1' )
            $showmail = 0;
         else
            $showmail = 1;

         $row['name'] = strip_ipb21_tags( $row['name'] );
         $row['email'] = strip_ipb21_tags( $row['email'] );
         $row['website'] = strip_ipb21_tags( $row['website'] );
         $row['location'] = strip_ipb21_tags( $row['location'] );
         $row['interests'] = strip_ipb21_tags( $row['interests'] );
         $row['signature'] = strip_ipb21_tags( $row['signature'] );

         if( $row['last_visit'] == '' )
            $row['last_visit'] = $row['joined'];
         if( $row['last_activity'] == '' )
            $row['last_activity'] = $row['joined'];

         /* The default Invisionboard groups they claim you can never alter.
          * Additional groups will not be converted. Members in these groups will become standard members.
          */
         if( $row['mgroup'] == 1 )
            $row['mgroup'] = 5;
         else if( $row['mgroup'] == 2 )
            $row['mgroup'] = 3;
         else if( $row['mgroup'] == 3 )
            $row['mgroup'] = 2;
         else if( $row['mgroup'] == 4 )
            $row['mgroup'] = 1;
         else if( $row['mgroup'] == 5 )
            $row['mgroup'] = 4;
         else if( $row['mgroup'] == 6 )
            $row['mgroup'] = 6;
         else
            $row['mgroup'] = 2;

         if( $row['avatar_type'] == 'url' )
         {
            $avatar = $row['avatar_location'];
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
         if( $row['bday_year'] != '' && $row['bday_month'] != '' && $row['bday_day'] != '' )
            $bday = sprintf( "%04d-%02d-%02d", $row['bday_year'], $row['bday_month'], $row['bday_day'] );
         else
            $bday = "0000-00-00";

         $qsf->db->query( "INSERT INTO {$qsf->pre}users VALUES( {$row['id']}, '{$row['name']}', 'INVALID', {$row['joined']}, 1, '{$row['title']}', 0, {$row['mgroup']}, 'default', 'en', '{$avatar}', '{$type}', {$width}, {$height}, '{$row['email']}', {$showmail}, 1, '{$bday}', 151, '{$row['website']}', {$row['posts']}, '{$row['location']}', {$row['icq_number']}, '{$row['msnname']}', '{$row['aim_name']}', '', 1, 1, '{$row['yahoo']}', '{$row['interests']}', '{$row['signature']}', {$row['last_visit']}, {$row['last_activity']}, 0, 0, 1, 1, 1, '' )" );
         $i++;
      }
   }

   $oldset['profiles'] = '1';
   $oldset['prof_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ipb21.php'>";
}

else if( $_GET['action'] == 'pmessages' )
{
   $i = '0';
   $qsf->db->query( "TRUNCATE {$qsf->pre}pmsystem" );
   $sql = "SELECT m.*, u.*
      FROM {$oldboard->pre}message_topics m
      LEFT JOIN {$oldboard->pre}message_text u ON u.msg_id = m.mt_id";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      if( $row['mt_vid_folder'] == "in" || $row['mt_vid_folder'] == "sent" )
      {
         // Empty and N/A recipient IDs are no good!
         if( $row['mt_to_id'] != '' && $row['mt_to_id'] != 'N/A' )
         {
            $row['mt_to_id']++;
            $row['mt_from_id']++;

            $row['mt_title'] = strip_ipb21_tags( $row['mt_title'] );
            $row['msg_post'] = strip_ipb21_tags( $row['msg_post'] );

            $i++;

            if( $row['mt_vid_folder'] == "in" )
               $folder = '0';
            else
               $folder = '1';

            $bcc = '';
            if( $folder == '1' )
            {
               $bcc = $row['mt_to_id'];
               $row['mt_to_id'] = $row['mt_from_id'];
            }

            if( $row['mt_title'] == '' )
               $row['mt_title'] = "No Title";

            $qsf->db->query( "INSERT INTO {$qsf->pre}pmsystem VALUES( {$row['mt_id']}, {$row['mt_to_id']}, {$row['mt_from_id']}, '{$bcc}', '{$row['mt_title']}', {$row['mt_date']}, '{$row['msg_post']}', {$row['mt_read']}, {$folder} )" );
         }
      }
   }
   $oldset['pms'] = '1';
   $oldset['pm_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ipb21.php'>";
}

else if( $_GET['action'] == 'mtitles' )
{
   $num = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}titles" );
   $all = $oldboard->db->num_rows( $num );
   $i = '0';

   if( $all > 0 )
   {
      $qsf->db->query( "TRUNCATE {$qsf->pre}membertitles" );

      $sql = "SELECT * FROM {$oldboard->pre}titles";
      $result = $oldboard->db->query($sql);
      while( $row = $oldboard->db->nqfetch($result) )
      {
         if( $row['pips'] > '5' )
            $icon = '5.png';
         else if( $row['pips'] < '1' )
            $icon = '1.png';
         else
         {
            $icon = $row['pips'];
            $icon .= '.png';
         }
         $qsf->db->query( "INSERT INTO {$qsf->pre}membertitles VALUES( {$row['id']}, '{$row['title']}', '{$row['posts']}', '{$icon}' )" );
         $i++;
      }
   }

   $oldset['titles'] = '1';
   $oldset['title_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ipb21.php'>";
}

else if( $_GET['action'] == 'forums' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}forums" );
   $sql = "SELECT * FROM {$oldboard->pre}forums";
   $result = $oldboard->db->query($sql);
   $i = '0';

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['name'] = strip_ipb21_tags( $row['name'] );
      $row['description'] = strip_ipb21_tags( $row['description'] );

      if( $row['sub_can_post'] == '0' && $row['parent_id'] > '0' )
         $subcat = '1';
      else
         $subcat = '0';

      $qsf->db->query( "INSERT INTO {$qsf->pre}forums VALUES( '{$row['id']}', {$row['parent_id']}, '', '{$row['name']}', {$row['position']}, '{$row['description']}', {$row['topics']}, {$row['posts']}, '{$row['last_post']}', {$subcat} )" );
      $i++;
   }

   $oldset['forums'] = '1';
   $oldset['forum_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ipb21.php'>";
}

else if( $_GET['action'] == 'topics' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}topics" );
   $sql = "SELECT * FROM {$oldboard->pre}topics";
   $result = $oldboard->db->query($sql);
   $i = '0';
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['starter_id']++;
      $row['last_poster_id']++;

      $topic_modes = '0';
      if( $row['state'] == 'closed' )
         $topic_modes = ($topic_modes | TOPIC_LOCKED);
      if( $row['pinned'] == '1' )
         $topic_modes = ($topic_modes | TOPIC_PINNED);
      if( $row['poll_state'] != '0' )
         $topic_modes = ($topic_modes | TOPIC_POLL);

      $row['title'] = strip_ipb21_tags( $row['title'] );
      $row['description'] = strip_ipb21_tags( $row['description'] );

      $qsf->db->query( "INSERT INTO {$qsf->pre}topics VALUES( {$row['tid']}, {$row['forum_id']}, '{$row['title']}', '{$row['description']}', {$row['starter_id']}, {$row['last_poster_id']}, '', '{$row['last_post']}', {$row['posts']}, {$row['views']}, {$topic_modes}, 0, '' )" );
      $i++;
   }

   $oldset['topics'] = '1';
   $oldset['topic_count'] = $i;
   write_olddb_sets( $oldset );

   $qsf->db->query( "TRUNCATE {$qsf->pre}subscriptions" );
   $sql = "SELECT * FROM {$oldboard->pre}forum_tracker";
   $result = $qsf->db->query($sql);
   $frows = 0;
   while( $row = $qsf->db->nqfetch($result) )
   {
      $row['member_id']++;

      $expire = time() + 2592000;
      $qsf->db->query( "INSERT INTO {$qsf->pre}subscriptions VALUES( {$row['frid']}, {$row['member_id']}, 'forum', {$row['forum_id']}, {$expire} )" );
      if( $row['frid'] > $frows )
         $frows = $row['frid'];
   }

   $sql = "SELECT * FROM {$oldboard->pre}tracker";
   $result = $oldboard->db->query($sql);
   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['member_id']++;

      $lineid = $row['trid'] + $frows;
      $expire = time() + 2592000;
      $qsf->db->query( "INSERT INTO {$qsf->pre}subscriptions VALUES( {$lineid}, {$row['member_id']}, 'topic', {$row['topic_id']}, {$expire} )" );
   }

   $sql = "SELECT * FROM {$oldboard->pre}polls";
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
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ipb21.php'>";
}

else if( $_GET['action'] == 'attach' )
{
   $qsf->db->query( "TRUNCATE {$qsf->pre}attach" );
   $result = $oldboard->db->query( "SELECT * FROM {$oldboard->pre}attachments" );
   $i = '0';

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $qsf->db->query( "INSERT INTO {$qsf->pre}attach VALUES( {$row['attach_id']}, '{$row['attach_location']}', '{$row['attach_file']}', {$row['attach_pid']}, {$row['attach_hits']}, {$row['attach_filesize']} )" );
      $i++;
   }

   $oldset['attach'] = '1';
   $oldset['attach_count'] = $i;
   write_olddb_sets( $oldset );
   echo "<meta http-equiv='Refresh' content='0;URL=convert_ipb21.php'>";
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
   $sql = "SELECT * FROM  {$oldboard->pre}posts LIMIT {$start}, {$oldset['post_inc']}";
   $newstart = $start + $oldset['post_inc'];

   $result = $oldboard->db->query($sql);

   while( $row = $oldboard->db->nqfetch($result) )
   {
      $row['author_id']++;

      /* Try and clean up some of the junk in Invisionboard posts. MySQL isn't happy about some of it. */
      $row['post'] = strip_ipb21_tags( $row['post'] );

      $qsf->db->query( "INSERT INTO {$qsf->pre}posts VALUES( {$row['pid']}, {$row['topic_id']}, '{$row['author_id']}', {$row['use_emo']}, 1, '{$row['post']}', {$row['post_date']}, '', INET_ATON('{$row['ip_address']}'), '{$row['edit_name']}', '{$row['edit_time']}' )" );
      $i++;
   }
   if( $i == $all )
   {
      $oldset['posts'] = '2';
      $oldset['post_count'] = $i;
      $oldset['converted'] = '2';
      write_olddb_sets( $oldset );
      echo "<meta http-equiv='Refresh' content='0;URL=convert_ipb21.php'>";
   }
   else
   {
      $oldset['posts'] = '1';
      $oldset['post_count'] = $i;
      write_olddb_sets( $oldset );
      echo "<meta http-equiv='Refresh' content='0;URL=convert_ipb21.php'>";
   }
}
?>
