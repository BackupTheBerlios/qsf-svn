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

if (!defined('INSTALLER')) {
	exit('Use index.php to upgrade.');
}

$need_templates = array(
    'MAIN',
    'MAIN_COPYRIGHT',
    'MAIN_HEADER_MEMBER',
    'MAIN_HEADER_GUEST',
    'MAIN_REMINDER',
    'PM_FOLDER',
    'PM_FOLDER_MESSAGE',
    'PM_NO_MESSAGES',
    'CP_PROFILE',
    'FORUM_MAIN'
);

$this->sets['rss_feed_posts'] = 5;
$this->sets['rss_feed_time'] = 60;
$this->sets['rss_feed_title'] = "";
$this->sets['rss_feed_desc'] = "";
$this->sets['spider_active'] = 1;
$this->sets['spider_agent'] = array(
	'googlebot',
	'lycos',
	'ask jeeves',
	'scooter',
	'fast-webcrawler',
	'slurp@inktomi',
	'turnitinbot',
	'gigabot',
	'yahoo',
	'msnbot',
	'mediapartners-google',
	'naverbot',
	'jetbot',
	'alexa',
	'ArchitextSpider',
	'pipeLiner'
);
$this->sets['spider_name'] = array(
	'Google',
	'Lycos',
	'Ask Jeeves',
	'Altavista',
	'AlltheWeb',
	'Inktomi',
	'Turnitin.com',
	'Gigabot',
	'Yahoo! Slurp',
	'MSN Search',
	'AdSense',
	'Naver',
	'JetEye',
	'Alexa',
	'Excite-Bot',
	'PipeLine Spider'
);
$this->sets['optional_modules'] = array(
	'active',
	'cp',
	'email',
	'help',
	'members',
	'mod',
	'pm',
	'printer',
	'profile',
	'search',
	'recent',
	'rssfeed'
);


$queries[] = "ALTER TABLE {$pre}users ADD user_title_custom TINYINT(1) UNSIGNED NOT NULL AFTER user_title";
$queries[] = "ALTER TABLE {$pre}users MODIFY user_aim VARCHAR(32) NOT NULL";
$queries[] = "ALTER TABLE {$pre}users ADD user_gtalk varchar(32) NOT NULL AFTER user_aim";
// Update the users table so the guest has a user level of 1. To avoid problems where guests still have a user level of 0
$queries[] = "UPDATE {$pre}users SET user_level = 1 WHERE user_id = 1";
// Update forum table to include subcat data
$queries[] = "ALTER TABLE {$pre}forums ADD forum_subcat tinyint(1) NOT NULL AFTER forum_lastpost";

$queries['ADMIN_ADD_TEMPLATE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'templates', 'ADMIN_ADD_TEMPLATE', '
<script type=\'text/javascript\'>
<!--
function check_field()
{
  var name = document.add_html.name.value
  var html = document.add_html.html.value
  var title = document.add_html.title.value
  var desc = document.add_html.desc.value
  var pos = document.add_html.pos.value

  if ((name==\'\') || (html==\'\') || (title==\'\') || (desc==\'\') || (pos==\'\'))
  {
    alert (&#092;All Field are required);
    return false;
  }
}
//-->
</script>

{\$this->table}
 <tr>
  <td class=\'header\' colspan=\'2\'>{\$this->lang->add}</td>
 </tr>
 <tr>
  <td class=\'tablelight\'>{\$this->lang->skin_set}</td>
  <td class=\'tablelight\'>
   <form action=\'\$this->self\' method=\'get\' name=\'skin_select\'>
    <input type=\'hidden\' name=\'a\' value=\'templates\' />
    <input type=\'hidden\' name=\'s\' value=\'add_html\' />
    <select name=\'skin\' onchange=\'document.skin_select.submit()\'>
     {\$skin_box}
    </select>
   </form>
  </td>
 </tr>
 <tr>
  <form action=\'\$this->self?a=templates&amp;s=add_html\' name=\'add_html\' method=\'post\' onsubmit=\'return check_field();\'>
   <td class=\'tabledark\'>{\$this->lang->template_set}</td>
   <td class=\'tabledark\'>
    <select name=\'template_set\'>\$template_box</select> or new <input type=\'text\' name=\'ntemplate_set\' size=\'20\' />
   </td>
 </tr>
 <tr>
  <td class=\'tablelight\'>{\$this->lang->template_title}</td>
  <td class=\'tablelight\'>
   <input type=\'text\' name=\'title\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\'>{\$this->lang->template_name}</td>
  <td class=\'tablelight\'>
   <input type=\'text\' name=\'name\' size=\'30\' /> (Ex. BOARD_MAIN - FORUM_TOPIC - etc..)
  </td>
 </tr>
 <tr>
  <td class=\'tabledark\'>{\$this->lang->template_description}</td>
  <td class=\'tabledark\'>
   <input type=\'text\' name=\'desc\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\'>{\$this->lang->template_position}</td>
  <td class=\'tablelight\'>
   <input type=\'text\' name=\'pos\' size=\'2\' />
  </td>
 </tr>
 <tr>
  <td class=\'tabledark\'>{\$this->lang->template_html}</td>
  <td class=\'tabledark\'>
   <textarea name=\'html\' rows=\'30\' cols=\'70\'></textarea>
  </td>
 </tr>
 <tr>
  <td class=\'tabledark\' colspan=\'2\' align=\'center\'>
   <input type=\'hidden\' name=\'template\' value=\'\$template\' />
   <input type=\'hidden\' name=\'form\' value=\'true\' />
   <input type=\'submit\' value=\'{\$this->lang->template_add}\' />
   <input type=\'reset\' value=\'{\$this->lang->template_clear}\' />
  </td>
 </tr>
{\$this->etable}
</form>
', 'Add New Template', 'Form for adding a new template to a skin', 1)";
$queries['ADMIN_BAN_FORM'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'ban', 'ADMIN_BAN_FORM', '
<form action=\'\$this->self?a=ban\' method=\'post\'>
{\$this->table}
 <tr>
  <td class=\'header\'>{\$this->lang->ban_settings}</td>
 </tr>
 <tr>
  <td class=\'tablelight\'>
   <span class=\'med\'>{\$this->lang->ban_banned_members}</span><br /><br />
   {\$this->lang->ban_member_explain1} <b>{\$banned_group}</b> {\$this->lang->ban_member_explain2}<br /><br />
   <b>{\$this->lang->ban_banned_members}:</b><br />
   {\$banned}<br />
  </td>
 </tr>
 <tr>
  <td class=\'tabledark\'>
   <span class=\'med\'>{\$this->lang->ban_banned_ips}</span><br /><br />
   {\$this->lang->ban_one_per_line}<br />
   {\$this->lang->ban_regex_allowed}<br /><br />
   <textarea name=\'banned_ips\' rows=\'12\' cols=\'70\' class=\'input\'>{\$ips}</textarea>
  </td>
 </tr>
 <tr>
  <td class=\'footer\' align=\'center\'><input type=\'submit\' name=\'submit\' value=\'{\$this->lang->ban}\' /></td>
 </tr>
{\$this->etable}
</form>
', 'Banned Users', 'Form for editing ban information', 0)";
$queries['ADMIN_CENSOR_FORM'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'censoring', 'ADMIN_CENSOR_FORM', '
<form action=\'\$this->self?a=censoring\' method=\'post\'>
{\$this->table}
 <tr>
  <td class=\'header\'>{\$this->lang->censor}</td>
 </tr>
 <tr>
  <td class=\'tablelight\' valign=\'top\' align=\'center\'>
   <span class=\'med\'>{\$this->lang->censor}</span><br /><br />
   {\$this->lang->censor_one_per_line}<br />
   {\$this->lang->censor_regex_allowed}<br />
   <i>Hell</i> automatically matches <i>hello</i> and <i>HeLL</i>.<br /><br />
   <textarea name=\'words\' rows=\'15\' cols=\'70\' class=\'input\'>{\$words}</textarea>
  </td>
 </tr>
 <tr>
  <td class=\'footer\' align=\'center\'><input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' /></td>
 </tr>
{\$this->etable}
</form>
', 'Censored Words', 'The form for editing censored words', 0)";
$queries['ADMIN_COPYRIGHT'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Admin', 'ADMIN_COPYRIGHT', '
{\$admin->table}
 <tr>
  <td class=\'footer\' style=\'width:50%; text-align:center;\'><a href=\'..\' style=\'font-weight:bold\'>{\$admin->lang->admin_your_board}</a></td>
  <td class=\'footer\' style=\'width:50%; text-align:center;\'><a href=\'http://www.quicksilverforums.com\' style=\'font-weight:bold\'>{\$admin->name}</a></td>
 </tr>
{\$admin->etable}

<p class=\'copyright\'>
{\$admin->lang->powered} <a href=\'http://www.quicksilverforums.com\' class=\'small\'><b>{\$admin->name}</b></a> [{\$admin->version}] &copy; 2005 The {\$admin->name} Development Team<br />
{\$admin->lang->based_on} <a href=\'http://www.mercuryboard.com\' class=\'small\'><b>MercuryBoard</b></a> &copy; 2001-2005 The Mercury Development Team<br />
<b>\$time_exec</b> seconds - <b>{\$admin->db->querycount}</b> queries - <b>\$server_load</b> load
</p>
', 'Copyright', 'Copyright footer for AdminCP', 10)";
$queries['ADMIN_EDIT_BOARD_SETTINGS'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'settings', 'ADMIN_EDIT_BOARD_SETTINGS', '
<form action=\'\$this->self?a=settings&amp;s=update\' method=\'post\'>
{\$this->table}
 <tr>
  <td colspan=\'2\' class=\'header\'>{\$this->lang->settings_general}</td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_board_enabled}</td>
  <td class=\'tablelight\'>
   <input type=\'radio\' name=\'closed\' value=\'0\' <IF !\$this->sets[\'closed\']>checked=\'checked\'</IF> id=\'closed2\' /><label for=\'closed2\'>{\$this->lang->settings_enabled}</label><br />
   <input type=\'radio\' name=\'closed\' value=\'1\' <IF \$this->sets[\'closed\']>checked=\'checked\'</IF> id=\'closed1\' /><label for=\'closed1\'>{\$this->lang->settings_disabled}</label>
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_disabled_notice}<br /><span class=\'tiny\'>{\$this->lang->settings_show_notice}</span></td>
  <td class=\'tabledark\'>
   <input class=\'input\' type=\'text\' name=\'closedtext\' value=\'{\$this->sets[\'closedtext\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labellight\' style=\'width:50%\'>{\$this->lang->settings_board_name}</td>
  <td class=\'tablelight\'>
   <input class=\'input\' type=\'text\' name=\'forum_name\' value=\'{\$this->sets[\'forum_name\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_board_location}<br /><span class=\'tiny\'>URL</span></td>
  <td class=\'tabledark\'>
   <input class=\'input\' type=\'text\' name=\'loc_of_board\' value=\'{\$this->sets[\'loc_of_board\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_clickable}</td>
  <td class=\'tablelight\'>
   <input class=\'input\' type=\'text\' name=\'clickable_per_row\' value=\'{\$this->sets[\'clickable_per_row\']}\' size=\'40\' maxlength=\'5\' />
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_max_attach_size}<br /><span class=\'tiny\'>{\$this->lang->settings_kilobytes}</span></td>
  <td class=\'tabledark\'>
   <input class=\'input\' type=\'text\' name=\'attach_upload_size\' value=\'{\$attachsize}\' size=\'40\' maxlength=\'5\' />
  </td>
 </tr>
 <tr>
  <td class=\'labellight\' valign=\'top\'>{\$this->lang->settings_attach_ext}<br /><span class=\'tiny\'>{\$this->lang->settings_attach_one_per}</span></td>
  <td class=\'tablelight\'>
   <textarea class=\'input\' name=\'attach_types\' rows=\'5\' cols=\'37\'>{\$attachtypes}</textarea>
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_topics_page}</td>
  <td class=\'tabledark\'>
   <input class=\'input\' type=\'text\' name=\'topics_per_page\' value=\'{\$this->sets[\'topics_per_page\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_posts_topic}</td>
  <td class=\'tablelight\'>
   <input class=\'input\' type=\'text\' name=\'posts_per_page\' value=\'{\$this->sets[\'posts_per_page\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_hot_topic}</td>
  <td class=\'tabledark\'>
   <input class=\'input\' type=\'text\' name=\'hot_limit\' value=\'{\$this->sets[\'hot_limit\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_foreign_link}<br /><span class=\'tiny\'>{\$this->lang->settings_blank}</span></td>
  <td class=\'tablelight\'>
   <input class=\'input\' type=\'text\' name=\'link_target\' value=\'{\$this->sets[\'link_target\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_antibot}</td>
  <td class=\'tabledark\'>
   <input type=\'radio\' name=\'register_image\' value=\'1\' <IF \$this->sets[\'register_image\']>checked=\'checked\'</IF> id=\'register_image1\' /><label for=\'register_image1\'>{\$this->lang->settings_enabled}</label><br />
   <input type=\'radio\' name=\'register_image\' value=\'0\' <IF !\$this->sets[\'register_image\']>checked=\'checked\'</IF> id=\'register_image2\' /><label for=\'register_image2\'>{\$this->lang->settings_disabled}</label>
  </td>
 </tr>
 <tr>
  <td class=\'labellight\' valign=\'top\'>{\$this->lang->settings_enabled_modules}<br />
   <span class=\'tiny\'>{\$this->lang->settings_modname_only}</span></td>
  <td class=\'tablelight\'>
   <textarea class=\'input\' name=\'optional_modules\' rows=\'5\' cols=\'37\'>{\$optionalModules}</textarea>
  </td>
 </tr>
 <tr>
  <td class=\'footer\' colspan=\'2\'>&nbsp;</td>
 </tr>
{\$this->etable}
<br /><br />

{\$this->table}
 <tr>
  <td colspan=\'2\' class=\'header\'>{\$this->lang->settings_members}</td>
 </tr>
 <tr>
  <td class=\'labellight\' style=\'width:50%\'>{\$this->lang->settings_default_skin}</td>
  <td class=\'tablelight\'><select name=\'default_skin\'>{\$selectSkins}</select></td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_default_lang}</td>
  <td class=\'tabledark\'><select name=\'default_lang\'>{\$defaultlang}</select></td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_group_after}</td>
  <td class=\'tablelight\'><select name=\'default_group\'>{\$selectGroups}</select></td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_timezone}</td>
  <td class=\'tabledark\'><select name=\'default_timezone\'>{\$selectTimezones}</select></td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_show_avatars}</td>
  <td class=\'tablelight\'>
   <input type=\'radio\' name=\'default_view_avatars\' value=\'1\' <IF \$this->sets[\'default_view_avatars\']>checked=\'checked\'</IF> id=\'default_view_avatars1\' /><label for=\'default_view_avatars1\'>{\$this->lang->settings_default_yes}</label><br />
   <input type=\'radio\' name=\'default_view_avatars\' value=\'0\' <IF !\$this->sets[\'default_view_avatars\']>checked=\'checked\'</IF> id=\'default_view_avatars2\' /><label for=\'default_view_avatars2\'>{\$this->lang->settings_default_no}</label>
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_show_sigs}</td>
  <td class=\'tabledark\'>
   <input type=\'radio\' name=\'default_view_sigs\' value=\'1\' <IF \$this->sets[\'default_view_sigs\']>checked=\'checked\'</IF> id=\'default_view_sigs1\' /><label for=\'default_view_sigs1\'>{\$this->lang->settings_default_yes}</label><br />
   <input type=\'radio\' name=\'default_view_sigs\' value=\'0\' <IF !\$this->sets[\'default_view_sigs\']>checked=\'checked\'</IF> id=\'default_view_sigs2\' /><label for=\'default_view_sigs2\'>{\$this->lang->settings_default_no}</label>
  </td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_show_emotes}</td>
  <td class=\'tablelight\'>
   <input type=\'radio\' name=\'default_view_emots\' value=\'1\' <IF \$this->sets[\'default_view_emots\']>checked=\'checked\'</IF> id=\'default_view_emots1\' /><label for=\'default_view_emots1\'>{\$this->lang->settings_default_yes}</label><br />
   <input type=\'radio\' name=\'default_view_emots\' value=\'0\' <IF !\$this->sets[\'default_view_emots\']>checked=\'checked\'</IF> id=\'default_view_emots2\' /><label for=\'default_view_emots2\'>{\$this->lang->settings_default_no}</label>
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_show_pm}</td>
  <td class=\'tabledark\'>
   <input type=\'radio\' name=\'default_pm\' value=\'1\' <IF \$this->sets[\'default_pm\']>checked=\'checked\'</IF> id=\'default_pm1\' /><label for=\'default_pm1\'>{\$this->lang->settings_default_yes}</label><br />
   <input type=\'radio\' name=\'default_pm\' value=\'0\' <IF !\$this->sets[\'default_pm\']>checked=\'checked\'</IF> id=\'default_pm2\' /><label for=\'default_pm2\'>{\$this->lang->settings_default_no}</label>
  </td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_show_email}</td>
  <td class=\'tablelight\'>
   <input type=\'radio\' name=\'default_email_shown\' value=\'1\' <IF \$this->sets[\'default_email_shown\']>checked=\'checked\'</IF> id=\'default_email_shown1\' /><label for=\'default_email_shown1\'>{\$this->lang->settings_default_yes}</label><br />
   <input type=\'radio\' name=\'default_email_shown\' value=\'0\' <IF !\$this->sets[\'default_email_shown\']>checked=\'checked\'</IF> id=\'default_email_shown2\' /><label for=\'default_email_shown2\'>{\$this->lang->settings_default_no}</label>
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_polls}</td>
  <td class=\'tabledark\'>
   <input type=\'radio\' name=\'vote_after_results\' value=\'1\' <IF \$this->sets[\'vote_after_results\']>checked=\'checked\'</IF> id=\'vote_after_results1\' /><label for=\'vote_after_results1\'>{\$this->lang->settings_polls_yes}</label><br />
   <input type=\'radio\' name=\'vote_after_results\' value=\'0\' <IF !\$this->sets[\'vote_after_results\']>checked=\'checked\'</IF> id=\'vote_after_results2\' /><label for=\'vote_after_results2\'>{\$this->lang->settings_polls_no}</label>
  </td>
 </tr>
 <tr>
  <td class=\'footer\' colspan=\'2\'>&nbsp;</td>
 </tr>
{\$this->etable}
<br /><br />

{\$this->table}
 <tr>
  <td colspan=\'2\' class=\'header\'>{\$this->lang->settings_email}</td>
 </tr>
 <tr>
  <td class=\'labellight\' style=\'width:50%\'>{\$this->lang->settings_email_reply}<br /><span class=\'tiny\'>{\$this->lang->settings_email_real}</span></td>
  <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'admin_incoming\' value=\'{\$this->sets[\'admin_incoming\']}\' size=\'40\' /></td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_email_smtp}</td>
  <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'mailserver\' value=\'{\$this->sets[\'mailserver\']}\' size=\'40\' /></td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_email_from}<br /><span class=\'tiny\'>{\$this->lang->settings_email_fake}</span></td>
  <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'admin_outgoing\' value=\'{\$this->sets[\'admin_outgoing\']}\' size=\'40\' /></td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_email_valid}</td>
  <td class=\'tabledark\'>
   <input type=\'radio\' name=\'emailactivation\' value=\'1\' <IF \$this->sets[\'emailactivation\']>checked=\'checked\'</IF> id=\'emailactivation1\' /><label for=\'emailactivation1\'>{\$this->lang->settings_email_place1} <i>{\$group[\'group_name\']}</i> {\$this->lang->settings_email_place2}</label><br />
   <input type=\'radio\' name=\'emailactivation\' value=\'0\' <IF !\$this->sets[\'emailactivation\']>checked=\'checked\'</IF> id=\'emailactivation2\' /><label for=\'emailactivation2\'>{\$this->lang->settings_email_place3}</label>
  </td>
 </tr>
 <tr>
  <td class=\'footer\' colspan=\'2\'>&nbsp;</td>
 </tr>
{\$this->etable}
<br /><br />

{\$this->table}
 <tr>
  <td colspan=\'2\' class=\'header\'>{\$this->lang->settings_cookie}</td>
 </tr>
 <tr>
  <td class=\'labellight\' style=\'width:50%\'>{\$this->lang->settings_cookie_time}<br /><span class=\'tiny\'>{\$this->lang->seconds}</span></td>
  <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'logintime\' value=\'{\$this->sets[\'logintime\']}\' size=\'40\' /></td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_post_flood}<br /><span class=\'tiny\'>{\$this->lang->seconds}. {\$this->lang->settings_post_min_time}</span></td>
  <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'flood_time\' value=\'{\$this->sets[\'flood_time\']}\' size=\'40\' /></td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_pm_flood}<br /><span class=\'tiny\'>{\$this->lang->seconds}. {\$this->lang->settings_pm_min_time}</span></td>
  <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'flood_time_pm\' value=\'{\$this->sets[\'flood_time_pm\']}\' size=\'40\' /></td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_search_flood}<br /><span class=\'tiny\'>{\$this->lang->seconds}. {\$this->lang->settings_search_min_time}</span></td>
  <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'flood_time_search\' value=\'{\$this->sets[\'flood_time_search\']}\' size=\'40\' /></td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_cookie_prefix}</td>
  <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'cookie_prefix\' value=\'{\$this->sets[\'cookie_prefix\']}\' size=\'40\' /></td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_cookie_path}</td>
  <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'cookie_path\' value=\'{\$this->sets[\'cookie_path\']}\' size=\'40\' /></td>
 </tr>
 <tr>
  <td class=\'footer\' colspan=\'2\'>&nbsp;</td>
 </tr>
{\$this->etable}
<br /><br />

{\$this->table}
 <tr>
  <td colspan=\'2\' class=\'header\'>{\$this->lang->settings_avatar}</td>
 </tr>
 <tr>
  <td class=\'labellight\' style=\'width:50%\'>{\$this->lang->settings_avatar_flash}<br /><span class=\'tiny\'>.swf</span></td>
  <td class=\'tablelight\'>
   <input type=\'radio\' name=\'flash_avs\' value=\'1\' <IF \$this->sets[\'flash_avs\']>checked=\'checked\'</IF> id=\'flash_avs1\' /><label for=\'flash_avs1\'>{\$this->lang->settings_allow}</label><br />
   <input type=\'radio\' name=\'flash_avs\' value=\'0\' <IF !\$this->sets[\'flash_avs\']>checked=\'checked\'</IF> id=\'flash_avs2\' /><label for=\'flash_avs2\'>{\$this->lang->settings_no_allow}</label>
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_avatar_max_width}<br /><span class=\'tiny\'>{\$this->lang->settings_pixels}</span></td>
  <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'avatar_width\' value=\'{\$this->sets[\'avatar_width\']}\' size=\'40\' maxlength=\'5\' /></td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_avatar_max_height}<br /><span class=\'tiny\'>{\$this->lang->settings_pixels}</span></td>
  <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'avatar_height\' value=\'{\$this->sets[\'avatar_height\']}\' size=\'40\' maxlength=\'5\' /></td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_avatar_upload}<br /><span class=\'tiny\'>{\$this->lang->settings_kilobytes}</span></td>
  <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'avatar_upload_size\' value=\'{\$avatarsize}\' size=\'40\' maxlength=\'5\' /></td>
 </tr>
 <tr>
  <td class=\'footer\' colspan=\'2\'>&nbsp;</td>
 </tr>
{\$this->etable}
<br /><br />

{\$this->table}
 <tr>
  <td colspan=\'2\' class=\'header\'>{\$this->lang->settings_server}</td>
 </tr>
 <tr>
  <td class=\'labellight\' style=\'width:50%\'>{\$this->lang->settings_server_gzip}<br /><span class=\'tiny\'>{\$this->lang->settings_server_gzip_msg}</span></td>
  <td class=\'tablelight\'>
   <input type=\'radio\' name=\'output_buffer\' value=\'1\' <IF \$this->sets[\'output_buffer\']>checked=\'checked\'</IF> id=\'output_buffer1\' /><label for=\'output_buffer1\'>{\$this->lang->settings_enabled}</label><br />
   <input type=\'radio\' name=\'output_buffer\' value=\'0\' <IF !\$this->sets[\'output_buffer\']>checked=\'checked\'</IF> id=\'output_buffer2\' /><label for=\'output_buffer2\'>{\$this->lang->settings_disabled}</label>
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_server_timezone}</td>
  <td class=\'tabledark\'><select name=\'servertime\'>{\$severTimezones}</select></td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_server_maxload}<br /><span class=\'tiny\'>{\$this->lang->settings_server_maxload_msg}</span></td>
  <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'max_load\' value=\'{\$this->sets[\'max_load\']}\' size=\'40\' /></td>
 </tr>
 <tr>
  <td class=\'footer\' colspan=\'2\'>&nbsp;</td>
 </tr>
{\$this->etable}
<br /><br />
{\$this->table}
 <tr>
  <td colspan=\'2\' class=\'header\'>{\$this->lang->settings_active}</td>
 </tr>
 <tr>
  <td class=\'labeldark\' style=\'width:50%\'>{\$this->lang->settings_spider_enable}<br /><span class=\'tiny\'>{\$this->lang->settings_spider_enable_msg}</span></td>
  <td class=\'tabledark\'>
   <input type=\'radio\' name=\'spider_active\' value=\'1\' <IF \$this->sets[\'spider_active\']>checked=\'checked\'</IF> id=\'spider_active1\' /><label for=\'spider_active1\'>{\$this->lang->yes}</label>
   <input type=\'radio\' name=\'spider_active\' value=\'0\' <IF !\$this->sets[\'spider_active\']>checked=\'checked\'</IF> id=\'spider_active2\' /><label for=\'spider_active2\'>{\$this->lang->no}</label>
  </td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_spider_agent}<br /><span class=\'tiny\'>{\$this->lang->settings_spider_agent_msg}<br /><br />
   {\$this->lang->settings_one_per}.</span>
  </td>
  <td class=\'tablelight\'><textarea name=\'spider_agent\' rows=\'10\' cols=\'39\'>{\$spideragents}</textarea></td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_spider_name}<br /><span class=\'tiny\'>Enter the name that you wish to display for each of the above spiders on Active List.<br />
   You need to place the spider\'s name on the same line as the spider\'s user agent above.<br />
   For example, if you place \'googlebot\' on the third line for the user agent place \'Google\' on the third line for the Spider Name.</span>
  </td>
  <td class=\'tabledark\'><textarea name=\'spider_name\' rows=\'10\' cols=\'39\'>{\$spidernames}</textarea></td>
 </tr>
{\$this->etable}
<br /><br />
{\$this->table}
 <tr>
  <td colspan=\'2\' class=\'header\' align=\'center\'>{\$this->lang->settings_board_rss}</td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_board_rssfeed_title}</td>
  <td class=\'tablelight\'>
   <input class=\'input\' type=\'text\' name=\'rss_feed_title\' value=\'{\$this->sets[\'rss_feed_title\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_board_rssfeed_desc}</td>
  <td class=\'tabledark\'>
   <input class=\'input\' type=\'text\' name=\'rss_feed_desc\' value=\'{\$this->sets[\'rss_feed_desc\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labellight\'>{\$this->lang->settings_board_rssfeed_posts}</td>
  <td class=\'tablelight\'>
   <input class=\'input\' type=\'text\' name=\'rss_feed_posts\' value=\'{\$this->sets[\'rss_feed_posts\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'>{\$this->lang->settings_board_rssfeed_time}</td>
  <td class=\'tabledark\'>
   <input class=\'input\' type=\'text\' name=\'rss_feed_time\' value=\'{\$this->sets[\'rss_feed_time\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'footer\' colspan=\'2\' align=\'center\'><input type=\'submit\' value=\'{\$this->lang->submit}\' /></td>
 </tr>
{\$this->etable}
<br />
</form>
', 'Edit Board Settings', 'Form for editing the board settings', 1)";
$queries['ADMIN_EDIT_DB_SETTINGS'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'settings', 'ADMIN_EDIT_DB_SETTINGS', '
<form action=\'\$this->self?a=settings&amp;s=update&db=1\' method=\'post\'>
{\$this->table}
 <tr>
  <td colspan=\'2\' class=\'header\'>{\$this->lang->settings_db}</td>
 </tr>
 <tr>
  <td class=\'labellight\' style=\'width:50%\'><b>{\$this->lang->settings_db_host}</b></td>
  <td class=\'tablelight\'>
   <input class=\'input\' type=\'text\' name=\'db_host\' value=\'{\$this->sets[\'db_host\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'><b>{\$this->lang->settings_db_name}</b></td>
  <td class=\'tabledark\'>
   <input class=\'input\' type=\'text\' name=\'db_name\' value=\'{\$this->sets[\'db_name\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labellight\'><b>{\$this->lang->settings_db_username}</b></td>
  <td class=\'tablelight\'>
   <input class=\'input\' type=\'text\' name=\'db_user\' value=\'{\$this->sets[\'db_user\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'><b>{\$this->lang->settings_db_password}</b></td>
  <td class=\'tabledark\'>
   <input class=\'input\' type=\'password\' name=\'db_pass\' value=\'{\$this->sets[\'db_pass\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labellight\'><b>{\$this->lang->settings_db_port}</b><br /><span class=\'tiny\'>{\$this->lang->settings_db_leave_blank}</span></td>
  <td class=\'tablelight\'>
   <input class=\'input\' type=\'text\' name=\'db_port\' value=\'{\$this->sets[\'db_port\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labeldark\'><b>{\$this->lang->settings_db_socket}</b><br /><span class=\'tiny\'>{\$this->lang->settings_db_leave_blank}</span></td>
  <td class=\'tabledark\'>
   <input class=\'input\' type=\'text\' name=\'db_socket\' value=\'{\$this->sets[\'db_socket\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'labellight\'><b>{\$this->lang->settings_db_prefix}</b><br /><span class=\'tiny\'>{\$this->lang->settings_db_multiple}</span></td>
  <td class=\'tablelight\'>
   <input class=\'input\' type=\'text\' name=\'prefix\' value=\'{\$this->sets[\'prefix\']}\' size=\'40\' />
  </td>
 </tr>
 <tr>
  <td class=\'footer\' colspan=\'2\' align=\'center\'><input type=\'submit\' value=\'{\$this->lang->submit}\' /></td>
 </tr>
{\$this->etable}
</form>
', 'Edit Connection Settings', 'Form for editing the database conenction settings', 0)";
$queries['ADMIN_EDIT_SKIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'templates', 'ADMIN_EDIT_SKIN', '
<form action=\'\$this->self?a=templates&amp;s=editskin\' method=\'post\'>
<input type=\'hidden\' name=\'skin\' value=\'{\$this->post[\'skin\']}\' />
{\$this->table}
 <tr>
  <td class=\'header\' colspan=\'2\'>{\$this->lang->edit_skin}</td>
 </tr>
 <tr>
  <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->display_name}</td>
  <td class=\'tabledark\'>
   <input type=\'text\' name=\'skin_name\' value=\'{\$skin[\'skin_name\']}\' size=\'50\' class=\'input\' />
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\'>{\$this->lang->directory}</td>
  <td class=\'tabledark\'>
   <input type=\'text\' name=\'skin_dir\' value=\'{\$skin[\'skin_dir\']}\' size=\'50\' class=\'input\' />
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\'>{\$this->lang->delete}</td>
  <td class=\'tabledark\'><input type=\'checkbox\' name=\'deleteskin\' /></td>
 </tr>
 <tr>
  <td class=\'footer\' colspan=\'2\' align=\'center\'><input type=\'submit\' name=\'submit\' value=\'{\$this->lang->edit_skin}\' /></td>
 </tr>
{\$this->etable}
</form>
', 'Edit Skin', 'Form for editing and deleting skins', 0)";
$queries['ADMIN_EDIT_TEMPLATE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'templates', 'ADMIN_EDIT_TEMPLATE', '
<script type=\'text/javascript\'>
<!--
changed = false;

function savechanges()
{
  if (changed)
  {
    var answer = confirm(\$this->lang->template_confirm);
    if (answer)
    {
      document.templates.submit();
      return false;
    }
  }
}
//window.onunload = savechanges;
//-->
</script>

<form name=\'templates\' action=\'\$this->self?a=templates&amp;s=edit&amp;section={\$this->get[\'section\']}&amp;skin=\$template\' method=\'post\'>
{\$this->table}
 <tr>
  <td class=\'header\'>{\$this->lang->edit_templates}</td>
 </tr>
 <tr>
  <td class=\'tabledark\'>
   <b>{\$this->lang->template_about}</b><br />
   {\$this->lang->template_about2}<br /><br />
   <b>{\$this->lang->template_universal}</b><br />
   {\$this->lang->template_universal2}<br /><br /><br />
  </td>
 </tr>
 {\$out}
 <tr>
  <td align=\'center\' class=\'footer\'></td>
 </tr>
{\$this->etable}
</form>
', 'Edit Template', 'Form for editing a skin\'s templates', 3)";
$queries['ADMIN_EMOTICON_EDIT'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'emot_control', 'ADMIN_EMOTICON_EDIT', '
<form action=\'\$this->self?a=emot_control&amp;s=edit&amp;edit={\$this->get[\'edit\']}\' method=\'post\'>
{\$this->table}
 <tr>
  <td class=\'header\' colspan=\'6\'>{\$this->lang->emote}</td>
 </tr>
 <tr>
  <td class=\'subheader\'>{\$this->lang->emote_text}</td>
  <td class=\'subheader\' colspan=\'2\'>{\$this->lang->emote_image}</td>
  <td class=\'subheader\'>{\$this->lang->emote_clickable}</td>
  <td class=\'subheader\' colspan=\'2\'>&nbsp;</td>
 </tr>
 {\$out}
 <tr>
  <td class=\'footer\' colspan=\'6\'></td>
 </tr>
{\$this->etable}
</form>
', 'Edit Emoticons', 'Edit the existing emoticons', 0)";
$queries['ADMIN_ETABLE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Admin', 'ADMIN_ETABLE', '</table>', 'Admin Table End', 'The end of all admin tables', 9)";
$queries['ADMIN_FORUM_ADD'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'forums', 'ADMIN_FORUM_ADD', '
<form action=\'\$this->self?a=forums&amp;s=add\' method=\'post\'>
{\$this->table}
 <tr>
  <td class=\'header\' colspan=\'2\'>{\$this->lang->forum_create}</td>
 </tr>
 <tr>
  <td class=\'tablelight\' style=\'width:30%\'>
   <b>{\$this->lang->forum_parent_cat}</b><br />{\$this->lang->forum_select_cat}
  </td>
  <td class=\'tabledark\'>
   <select name=\'parent\'>
    <option value=\'0\'>{\$this->lang->forum_create_cat}</option>
    <option value=\'0\'>-----------------------------</option>
     {\$select}
   </select>
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\'><b>{\$this->lang->forum_name}</b></td>
  <td class=\'tabledark\'>
   <input class=\'input\' name=\'name\' size=\'60\' />
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\'><b>{\$this->lang->forum_description}</b></td>
  <td class=\'tabledark\'>
   <textarea class=\'input\' name=\'description\' rows=\'8\' cols=\'60\'></textarea>
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\'>
   <b>{\$this->lang->forum_quickperms}</b><br />{\$this->lang->forum_quickperm_select}
  </td>
  <td class=\'tabledark\'>
   <select name=\'sync\'>
    {\$quickperms}
   </select>
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\'><b>{\$this->lang->forum_subcat}</b><br />{\$this->lang->forum_is_subcat}</td>
  <td class=\'tabledark\'><input type=\'checkbox\' name=\'subcat\' /></td>
 </tr>
 <tr>
  <td colspan=\'2\' align=\'center\' class=\'footer\'><input type=\'submit\' name=\'addforum\' value=\'{\$this->lang->submit}\' /></td>
 </tr>
{\$this->etable}
</form>
', 'Add Forum', 'Change display for add forum form', 1)";
$queries['ADMIN_FORUM_EDIT'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'forums', 'ADMIN_FORUM_EDIT', '
<form action=\'\$this->self?a=forums&amp;s=edit&amp;id={\$this->get[\'id\']}\' method=\'post\'>
{\$this->table}
 <tr>
  <td class=\'header\' colspan=\'2\'>{\$this->lang->forum_create}</td>
 </tr>
 <tr>
  <td class=\'tablelight\' style=\'width:30%\'><b>{\$this->lang->forum_parent_cat}</b></td>
  <td class=\'tabledark\'>
   <select name=\'parent\'>
    <option value=\'0\'>{\$this->lang->forum_create_cat}</option>
    <option value=\'0\'>----------------------------</option>{\$forum}
   </select>
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\'><b>{\$this->lang->forum_name}</b></td>
  <td class=\'tabledark\'><input class=\'input\' name=\'name\' value=\'{\$f[\'forum_name\']}\' size=\'60\' /></td>
 </tr>
 <tr>
  <td class=\'tablelight\'><b>{\$this->lang->forum_description}</b></td>
  <td class=\'tabledark\'><textarea class=\'input\' name=\'description\' rows=\'8\' cols=\'60\'>{\$f[\'forum_description\']}</textarea></td>
 </tr>
 <tr>
  <td class=\'tablelight\'><b>{\$this->lang->forum_subcat}</b><br />{\$this->lang->forum_is_subcat}</td>
  <td class=\'tabledark\'><input type=\'checkbox\' name=\'subcat\' <IF \$f[\'forum_subcat\']>checked=\'checked\'</IF> /></td>
 </tr>
 <tr>
  <td colspan=\'2\' align=\'center\' class=\'footer\'><input type=\'submit\' name=\'editforum\' value=\'{\$this->lang->submit}\' /></td>
 </tr>
{\$this->etable}
</form>
', 'Edit Forum', 'Change the display of the forum editor', 2)";
$queries['ADMIN_FORUM_ORDER'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'forums', 'ADMIN_FORUM_ORDER', '
<form action=\'\$this->self?a=forums&amp;s=order\' method=\'post\'>
{\$this->table}
 <tr>
  <td class=\'header\'>{\$this->lang->forum_ordering}</td>
 </tr>
 <tr>
  <td class=\'tabledark\'>
   <table width=\'100%\' cellpadding=\'5\' cellspacing=\'0\' border=\'0\'>
    <tr>
     <td align=\'center\'>{\$forum}</td>
    </tr>
   </table>
  </td>
 </tr>
 <tr>
  <td class=\'footer\' align=\'center\'><input type=\'submit\' name=\'orderforum\' value=\'{\$this->lang->submit}\' /></td>
{\$this->etable}
</form>
', 'Forum Ordering', 'Change the display of the forum order menu', 0)";
$queries['ADMIN_GROUP_EDIT'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'groups', 'ADMIN_GROUP_EDIT', '
<form action=\'\$this->self?a=groups&amp;s=edit\' method=\'post\'>
{\$this->table}
 <tr>
  <td class=\'header\' colspan=\'2\'>{\$this->lang->groups_edit}</td>
 </tr>
 <tr>
  <td class=\'tablelight\'>{\$this->lang->groups_type}:</td>
  <td class=\'tabledark\'>{\$old[\'group_type\']}</td>
 </tr>
 <tr>
  <td class=\'tablelight\'>{\$this->lang->groups_name}:</td>
  <td class=\'tabledark\'>
   <input class=\'input\' name=\'group_name\' value=\'{\$oldGroupName}\' />
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\'>{\$this->lang->groups_formatting}:</td>
  <td class=\'tabledark\'>
   <input class=\'input\' name=\'group_format\' value=\'{\$oldGroupFormat}\' />
  </td>
 </tr>
 <tr>
  <td colspan=\'2\' class=\'footer\' align=\'center\'>
   <input type=\'hidden\' name=\'group\' value=\'{\$this->post[\'group\']}\' />
   <input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' />
  </td>
 </tr>
{\$this->etable}
</form>
', 'Group Editing', 'Form for editing groups', 0)";
$queries['ADMIN_HOME'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Admin', 'ADMIN_HOME', '
{\$this->table}
 <tr>
  <td class=\'header\'>{\$this->lang->home_menu_title}</td>
 </tr>
 <tr>
  <td class=\'tabledark\'>
   <table width=\'100%\' cellpadding=\'5\' cellspacing=\'0\' border=\'0\'>
    <tr>
     <td colspan=\'2\' style=\'font-size:17px; font-weight:bold; padding-bottom:15px\' align=\'center\'>{\$this->lang->home_choose}</td>
    </tr>
    <tr>
     <td valign=\'top\' style=\'width:50%\'>
      <div class=\'fieldset\'>
       <div class=\'legend\'>{\$this->lang->admin_forums}</div><br />
       <a href=\'\$this->self?a=forums&amp;s=add\'>{\$this->lang->admin_create_forum}</a><br />
       <a href=\'\$this->self?a=forums&amp;s=edit\'>{\$this->lang->admin_edit_forum}</a><br />
       <a href=\'\$this->self?a=forums&amp;s=delete\'>{\$this->lang->admin_delete_forum}</a><br />
       <a href=\'\$this->self?a=forums&amp;s=order\'>{\$this->lang->admin_forum_order}</a><br />
       <a href=\'\$this->self?a=forums&amp;s=count\'>{\$this->lang->admin_recount_forums}</a>
      </div><br />

      <div class=\'fieldset\'>
       <div class=\'legend\'>{\$this->lang->admin_emoticons}</div><br />
       <a href=\'\$this->self?a=emot_control&amp;s=import\'>{\$this->lang->admin_install_emoticons}</a><br />
       <a href=\'\$this->self?a=emot_control&amp;s=add\'>{\$this->lang->admin_add_emoticons}</a><br />
       <a href=\'\$this->self?a=emot_control&amp;s=edit\'>{\$this->lang->admin_edit_emoticons}</a>
      </div><br />

      <div class=\'fieldset\'>
       <div class=\'legend\'>{\$this->lang->admin_groups}</div><br />
       <a href=\'\$this->self?a=groups&amp;s=add\'>{\$this->lang->admin_create_group}</a><br />
       <a href=\'\$this->self?a=groups&amp;s=edit\'>{\$this->lang->admin_edit_group_name}</a><br />
       <a href=\'\$this->self?a=perms\'>{\$this->lang->admin_edit_group_perms}</a><br />
       <a href=\'\$this->self?a=groups&amp;s=delete\'>{\$this->lang->admin_delete_group}</a>
      </div><br />

      <div class=\'fieldset\'>
       <div class=\'legend\'>{\$this->lang->admin_members}</div><br />
       <a href=\'\$this->self?a=member_control&amp;s=profile\'>{\$this->lang->admin_edit_member}</a><br />
       <a href=\'\$this->self?a=member_control&amp;s=delete\'>{\$this->lang->admin_delete_member}</a><br />
       <a href=\'\$this->self?a=member_control&amp;s=perms\'>{\$this->lang->admin_edit_member_perms}</a><br />
       <a href=\'\$this->self?a=titles&amp;s=add\'>{\$this->lang->admin_add_member_titles}</a><br />
       <a href=\'\$this->self?a=titles\'>{\$this->lang->admin_edit_member_titles}</a><br />
       <a href=\'\$this->self?a=ban\'>{\$this->lang->admin_ban_ips}</a><br />
       <a href=\'\$this->self?a=mass_mail\'>{\$this->lang->admin_mass_mail}</a><br />
       <a href=\'\$this->self?a=membercount\'>{\$this->lang->admin_fix_stats}</a>
      </div>
     </td>

     <td valign=\'top\'>
      <div class=\'fieldset\'>
       <div class=\'legend\'>{\$this->lang->admin_db}</div><br />
       <a href=\'\$this->self?a=backup&amp;s=create\'>{\$this->lang->admin_db_backup}</a><br />
       <a href=\'\$this->self?a=backup&amp;s=restore\'>{\$this->lang->admin_db_restore}</a><br />
       <a href=\'\$this->self?a=settings&amp;s=db\'>{\$this->lang->admin_db_conn}</a><br />
       <a href=\'\$this->self?a=optimize\'>{\$this->lang->admin_db_optimize}</a><br />
       <a href=\'\$this->self?a=query\'>{\$this->lang->admin_db_query}</a>
      </div><br />

      <div class=\'fieldset\'>
       <div class=\'legend\'>{\$this->lang->admin_skins}</div><br />
       <a href=\'\$this->self?a=templates&amp;s=add_html\'>{\$this->lang->admin_add_templates}</a><br />
       <a href=\'\$this->self?a=templates&amp;s=html\'>{\$this->lang->admin_edit_templates}</a><br />
       <a href=\'\$this->self?a=templates&amp;s=del_html\'>{\$this->lang->admin_delete_template}</a><br />
       <a href=\'\$this->self?a=templates&amp;s=skin\'>{\$this->lang->admin_create_skin}</a><br />
       <a href=\'\$this->self?a=templates&amp;s=editskin\'>{\$this->lang->admin_edit_skin}</a><br />
       <a href=\'\$this->self?a=templates&amp;s=load\'>{\$this->lang->admin_install_skin}</a><br />
       <a href=\'\$this->self?a=templates&amp;s=export\'>{\$this->lang->admin_export_skin}</a><br />
      </div><br />

      <div class=\'fieldset\'>
       <div class=\'legend\'>{\$this->lang->admin_help}</div><br />
       <a href=\'\$this->self?a=help&amp;s=new\'>{\$this->lang->admin_create_help}</a><br />
       <a href=\'\$this->self?a=help&amp;s=edit\'>{\$this->lang->admin_edit_help}</a><br />
       <a href=\'\$this->self?a=help&amp;s=delete\'>{\$this->lang->admin_delete_help}</a>
      </div><br />

      <div class=\'fieldset\'>
       <div class=\'legend\'>{\$this->lang->admin_settings}</div><br />
       <a href=\'\$this->self?a=settings&amp;s=basic\'>{\$this->lang->admin_edit_settings}</a><br />
       <a href=\'\$this->self?a=censoring\'>{\$this->lang->admin_censor}</a><br />
       <a href=\'\$this->self?a=php_info\'>{\$this->lang->admin_phpinfo}</a><br />
       <a href=\'\$this->self?a=logs\'>{\$this->lang->admin_logs}</a><br />
       <a href=\'\$this->self?a=stats\'>{\$this->lang->admin_stats}</a>
      </div>
     </td>
    </tr>
   </table>
  </td>
 </tr>
{\$this->etable}
', 'Admin CP Home Page', 'Edit the layout of the main AdminCP page', 1)";
$queries['ADMIN_INDEX'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Admin', 'ADMIN_INDEX', '
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
 <html xmlns=\'http://www.w3.org/1999/xhtml\' xml:lang=\'{\$admin->user[\'user_language\']}\' dir=\'{\$admin->lang->direction}\'>
  <head>
   <title>{\$title}</title>
   <meta http-equiv=\'Content-Type\' content=\'application/xhtml+xml; charset={\$admin->lang->charset}\' />
   <link rel=\'stylesheet\' type=\'text/css\' href=\'../skins/{\$admin->skin}/styles.css\' />

<script type=\"text/javascript\">
<!--
function MM_displayStatusMsg(msgStr)
{ //v3.0
  status = msgStr; document.MM_returnValue = true;
}

function mmLoadMenus()
{
  if( window.mm_menu_0116010743_0 ) return;

  window.mm_menu_0116010743_0 = new Menu(\"root\",169,16,\"Verdana, Arial, Helvetica, sans-serif\",10,\"#000000\",\"#FFFFFF\",\"#CCCCCC\",\"#CC6600\",\"left\",\"middle\",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0116010743_0.addMenuItem(\"{\$admin->lang->admin_create_forum}\",\"window.open(\'\$admin->self?a=forums&s=add\', \'_self\');\");
  mm_menu_0116010743_0.addMenuItem(\"{\$admin->lang->admin_edit_forum}\",\"window.open(\'\$admin->self?a=forums&s=edit\', \'_self\');\");
  mm_menu_0116010743_0.addMenuItem(\"{\$admin->lang->admin_delete_forum}\",\"window.open(\'\$admin->self?a=forums&s=delete\', \'_self\');\");
  mm_menu_0116010743_0.addMenuItem(\"{\$admin->lang->admin_forum_order}\",\"window.open(\'\$admin->self?a=forums&s=order\', \'_self\');\");
  mm_menu_0116010743_0.addMenuItem(\"{\$admin->lang->admin_recount_forums}\",\"window.open(\'\$admin->self?a=forums&s=count\', \'_self\');\");
  mm_menu_0116010743_0.hideOnMouseOut=true;
  mm_menu_0116010743_0.menuBorder=1;
  mm_menu_0116010743_0.menuLiteBgColor=\'#FFFFFF\';
  mm_menu_0116010743_0.menuBorderBgColor=\'#555555\';
  mm_menu_0116010743_0.bgColor=\'#555555\';

  window.mm_menu_0116011103_1 = new Menu(\"root\",145,16,\"Verdana, Arial, Helvetica, sans-serif\",10,\"#000000\",\"#FFFFFF\",\"#CCCCCC\",\"#CC6600\",\"left\",\"middle\",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0116011103_1.addMenuItem(\"{\$admin->lang->admin_install_emoticons}\",\"window.open(\'\$admin->self?a=emot_control&s=import\', \'_self\');\");
  mm_menu_0116011103_1.addMenuItem(\"{\$admin->lang->admin_add_emoticons}\",\"window.open(\'\$admin->self?a=emot_control&s=add\', \'_self\');\");
  mm_menu_0116011103_1.addMenuItem(\"{\$admin->lang->admin_edit_emoticons}\",\"window.open(\'\$admin->self?a=emot_control&s=edit\', \'_self\');\");
  mm_menu_0116011103_1.hideOnMouseOut=true;
  mm_menu_0116011103_1.menuBorder=1;
  mm_menu_0116011103_1.menuLiteBgColor=\'#FFFFFF\';
  mm_menu_0116011103_1.menuBorderBgColor=\'#555555\';
  mm_menu_0116011103_1.bgColor=\'#555555\';

  window.mm_menu_0116011227_2 = new Menu(\"root\",158,16,\"Verdana, Arial, Helvetica, sans-serif\",10,\"#000000\",\"#FFFFFF\",\"#CCCCCC\",\"#CC6600\",\"left\",\"middle\",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0116011227_2.addMenuItem(\"{\$admin->lang->admin_create_group}\",\"window.open(\'\$admin->self?a=groups&s=add\', \'_self\');\");
  mm_menu_0116011227_2.addMenuItem(\"{\$admin->lang->admin_edit_group_name}\",\"window.open(\'\$admin->self?a=groups&s=edit\', \'_self\');\");
  mm_menu_0116011227_2.addMenuItem(\"{\$admin->lang->admin_edit_group_perms}\",\"window.open(\'\$admin->self?a=perms\', \'_self\');\");
  mm_menu_0116011227_2.addMenuItem(\"{\$admin->lang->admin_delete_group}\",\"window.open(\'\$admin->self?a=groups&s=delete\', \'_self\');\");
  mm_menu_0116011227_2.hideOnMouseOut=true;
  mm_menu_0116011227_2.menuBorder=1;
  mm_menu_0116011227_2.menuLiteBgColor=\'#FFFFFF\';
  mm_menu_0116011227_2.menuBorderBgColor=\'#555555\';
  mm_menu_0116011227_2.bgColor=\'#555555\';

  window.mm_menu_0116011500_3 = new Menu(\"root\",230,16,\"Verdana, Arial, Helvetica, sans-serif\",10,\"#000000\",\"#FFFFFF\",\"#CCCCCC\",\"#CC6600\",\"left\",\"middle\",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0116011500_3.addMenuItem(\"{\$admin->lang->admin_edit_member}\",\"window.open(\'\$admin->self?a=member_control&s=profile\', \'_self\');\");
  mm_menu_0116011500_3.addMenuItem(\"{\$admin->lang->admin_delete_member}\",\"window.open(\'\$admin->self?a=member_control&s=delete\', \'_self\');\");
  mm_menu_0116011500_3.addMenuItem(\"{\$admin->lang->admin_edit_member_perms}\",\"window.open(\'\$admin->self?a=member_control&s=perms\', \'_self\');\");
  mm_menu_0116011500_3.addMenuItem(\"{\$admin->lang->admin_add_member_titles}\",\"window.open(\'\$admin->self?a=titles&s=add\', \'_self\');\");
  mm_menu_0116011500_3.addMenuItem(\"{\$admin->lang->admin_edit_member_titles}\",\"window.open(\'\$admin->self?a=titles\', \'_self\');\");
  mm_menu_0116011500_3.addMenuItem(\"{\$admin->lang->admin_ban_ips}\",\"window.open(\'\$admin->self?a=ban\', \'_self\');\");
  mm_menu_0116011500_3.addMenuItem(\"{\$admin->lang->admin_mass_mail}\",\"window.open(\'\$admin->self?a=mass_mail\', \'_self\');\");
  mm_menu_0116011500_3.addMenuItem(\"{\$admin->lang->admin_fix_stats}\",\"window.open(\'\$admin->self?a=membercount\', \'_self\');\");
  mm_menu_0116011500_3.hideOnMouseOut=true;
  mm_menu_0116011500_3.menuBorder=1;
  mm_menu_0116011500_3.menuLiteBgColor=\'#FFFFFF\';
  mm_menu_0116011500_3.menuBorderBgColor=\'#555555\';
  mm_menu_0116011500_3.bgColor=\'#555555\';

  window.mm_menu_0116011717_4 = new Menu(\"root\",145,16,\"Verdana, Arial, Helvetica, sans-serif\",10,\"#000000\",\"#FFFFFF\",\"#CCCCCC\",\"#CC6600\",\"left\",\"middle\",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0116011717_4.addMenuItem(\"{\$admin->lang->admin_db_backup}\",\"window.open(\'\$admin->self?a=backup&s=create\', \'_self\');\");
  mm_menu_0116011717_4.addMenuItem(\"{\$admin->lang->admin_db_restore}\",\"window.open(\'\$admin->self?a=backup&s=restore\', \'_self\');\");
  mm_menu_0116011717_4.addMenuItem(\"{\$admin->lang->admin_db_conn}\",\"window.open(\'\$admin->self?a=settings&s=db\', \'_self\');\");
  mm_menu_0116011717_4.addMenuItem(\"{\$admin->lang->admin_db_optimize}\",\"window.open(\'\$admin->self?a=optimize\', \'_self\');\");
  mm_menu_0116011717_4.addMenuItem(\"{\$admin->lang->admin_db_query}\",\"window.open(\'\$admin->self?a=query\', \'_self\');\");
  mm_menu_0116011717_4.hideOnMouseOut=true;
  mm_menu_0116011717_4.menuBorder=1;
  mm_menu_0116011717_4.menuLiteBgColor=\'#FFFFFF\';
  mm_menu_0116011717_4.menuBorderBgColor=\'#555555\';
  mm_menu_0116011717_4.bgColor=\'#555555\';
 
  window.mm_menu_0116012035_5 = new Menu(\"root\",135,16,\"Verdana, Arial, Helvetica, sans-serif\",10,\"#000000\",\"#FFFFFF\",\"#CCCCCC\",\"#CC6600\",\"left\",\"middle\",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0116012035_5.addMenuItem(\"{\$admin->lang->admin_add_templates}\",\"window.open(\'\$admin->self?a=templates&s=add_html\', \'_self\');\");
  mm_menu_0116012035_5.addMenuItem(\"{\$admin->lang->admin_edit_templates}\",\"window.open(\'\$admin->self?a=templates&s=html\', \'_self\');\");
  mm_menu_0116012035_5.addMenuItem(\"{\$admin->lang->admin_delete_template}\",\"window.open(\'\$admin->self?a=templates&s=del_html\', \'_self\');\");
  mm_menu_0116012035_5.addMenuItem(\"{\$admin->lang->admin_create_skin}\",\"window.open(\'\$admin->self?a=templates&s=skin\', \'_self\');\");
  mm_menu_0116012035_5.addMenuItem(\"{\$admin->lang->admin_edit_skin}\",\"window.open(\'\$admin->self?a=templates&s=editskin\', \'_self\');\");
  mm_menu_0116012035_5.addMenuItem(\"{\$admin->lang->admin_install_skin}\",\"window.open(\'\$admin->self?a=templates&s=load\', \'_self\');\");
  mm_menu_0116012035_5.addMenuItem(\"{\$admin->lang->admin_export_skin}\",\"window.open(\'\$admin->self?a=templates&s=export\', \'_self\');\");
  mm_menu_0116012035_5.hideOnMouseOut=true;
  mm_menu_0116012035_5.menuBorder=1;
  mm_menu_0116012035_5.menuLiteBgColor=\'#FFFFFF\';
  mm_menu_0116012035_5.menuBorderBgColor=\'#555555\';
  mm_menu_0116012035_5.bgColor=\'#555555\';

  window.mm_menu_0116012236_6 = new Menu(\"root\",124,16,\"Verdana, Arial, Helvetica, sans-serif\",10,\"#000000\",\"#FFFFFF\",\"#CCCCCC\",\"#CC6600\",\"left\",\"middle\",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0116012236_6.addMenuItem(\"{\$admin->lang->admin_create_help}\",\"window.open(\'\$admin->self?a=help&s=new\', \'_self\');\");
  mm_menu_0116012236_6.addMenuItem(\"{\$admin->lang->admin_edit_help}\",\"window.open(\'\$admin->self?a=help&s=edit\', \'_self\');\");
  mm_menu_0116012236_6.addMenuItem(\"{\$admin->lang->admin_delete_help}\",\"window.open(\'\$admin->self?a=help&s=delete\', \'_self\');\");
  mm_menu_0116012236_6.hideOnMouseOut=true;
  mm_menu_0116012236_6.menuBorder=1;
  mm_menu_0116012236_6.menuLiteBgColor=\'#FFFFFF\';
  mm_menu_0116012236_6.menuBorderBgColor=\'#555555\';
  mm_menu_0116012236_6.bgColor=\'#555555\';

  window.mm_menu_0116012357_7 = new Menu(\"root\",137,16,\"Verdana, Arial, Helvetica, sans-serif\",10,\"#000000\",\"#FFFFFF\",\"#CCCCCC\",\"#CC6600\",\"left\",\"middle\",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0116012357_7.addMenuItem(\"{\$admin->lang->admin_edit_settings}\",\"window.open(\'\$admin->self?a=settings&s=basic\', \'_self\');\");
  mm_menu_0116012357_7.addMenuItem(\"{\$admin->lang->admin_censor}\",\"window.open(\'\$admin->self?a=censoring\', \'_self\');\");
  mm_menu_0116012357_7.addMenuItem(\"{\$admin->lang->admin_phpinfo}\",\"window.open(\'\$admin->self?a=php_info\', \'_self\');\");
  mm_menu_0116012357_7.addMenuItem(\"{\$admin->lang->admin_logs}\",\"window.open(\'\$admin->self?a=logs\', \'_self\');\");
  mm_menu_0116012357_7.addMenuItem(\"{\$admin->lang->admin_stats}\",\"window.open(\'\$admin->self?a=stats\', \'_self\');\");
  mm_menu_0116012357_7.hideOnMouseOut=true;
  mm_menu_0116012357_7.menuBorder=1;
  mm_menu_0116012357_7.menuLiteBgColor=\'#FFFFFF\';
  mm_menu_0116012357_7.menuBorderBgColor=\'#555555\';
  mm_menu_0116012357_7.bgColor=\'#555555\';

  mm_menu_0116012357_7.writeMenus();
} // mmLoadMenus()

//-->
</script>

<script type=\'text/javascript\' src=\'hsmod_adminbar_menu.js\'></script>

  </head>

<body>

{\$admin->table}
 <tr>
  <td align=\'center\'>
   <img src=\'./images/adminlogo.png\' alt=\'{\$admin->name} Admin CP\' />
  </td>
 </tr>
{\$admin->etable}

<script type=\'text/javascript\'>mmLoadMenus();</script>
<div align=\'center\'>
<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'634\'>
  <tr>
   <td><a href=\"#\" onmouseout=\"MM_startTimeout();\" onmouseover=\"MM_showMenu(window.mm_menu_0116010743_0,0,25,null,\'hsmod_adminbar_r1_c1\');\"><img name=\"hsmod_adminbar_r1_c1\" src=\"../skins/{\$admin->skin}/images/hsmod_adminbar_r1_c1.png\" width=\"149\" height=\"25\" border=\"0\" alt=\"\" /></a></td>
   <td><a href=\"#\" onmouseout=\"MM_startTimeout();\" onmouseover=\"MM_showMenu(window.mm_menu_0116011103_1,0,25,null,\'hsmod_adminbar_r1_c2\');\"><img name=\"hsmod_adminbar_r1_c2\" src=\"../skins/{\$admin->skin}/images/hsmod_adminbar_r1_c2.png\" width=\"80\" height=\"25\" border=\"0\" alt=\"\" /></a></td>
   <td><a href=\"#\" onmouseout=\"MM_startTimeout();\" onmouseover=\"MM_showMenu(window.mm_menu_0116011227_2,0,25,null,\'hsmod_adminbar_r1_c3\');\"><img name=\"hsmod_adminbar_r1_c3\" src=\"../skins/{\$admin->skin}/images/hsmod_adminbar_r1_c3.png\" width=\"60\" height=\"25\" border=\"0\" alt=\"\" /></a></td>
   <td><a href=\"#\" onmouseout=\"MM_startTimeout();\" onmouseover=\"MM_showMenu(window.mm_menu_0116011500_3,0,25,null,\'hsmod_adminbar_r1_c4\');\"><img name=\"hsmod_adminbar_r1_c4\" src=\"../skins/{\$admin->skin}/images/hsmod_adminbar_r1_c4.png\" width=\"74\" height=\"25\" border=\"0\" alt=\"\" /></a></td>
   <td><a href=\"#\" onmouseout=\"MM_startTimeout();\" onmouseover=\"MM_showMenu(window.mm_menu_0116011717_4,0,25,null,\'hsmod_adminbar_r1_c5\');\"><img name=\"hsmod_adminbar_r1_c5\" src=\"../skins/{\$admin->skin}/images/hsmod_adminbar_r1_c5.png\" width=\"74\" height=\"25\" border=\"0\" alt=\"\" /></a></td>
   <td><a href=\"#\" onmouseout=\"MM_startTimeout();\" onmouseover=\"MM_showMenu(window.mm_menu_0116012035_5,0,25,null,\'hsmod_adminbar_r1_c6\');\"><img name=\"hsmod_adminbar_r1_c6\" src=\"../skins/{\$admin->skin}/images/hsmod_adminbar_r1_c6.png\" width=\"50\" height=\"25\" border=\"0\" alt=\"\" /></a></td>
   <td><a href=\"#\" onmouseout=\"MM_startTimeout();\" onmouseover=\"MM_showMenu(window.mm_menu_0116012236_6,0,25,null,\'hsmod_adminbar_r1_c7\');\"><img name=\"hsmod_adminbar_r1_c7\" src=\"../skins/{\$admin->skin}/images/hsmod_adminbar_r1_c7.png\" width=\"96\" height=\"25\" border=\"0\" alt=\"\" /></a></td>
   <td><a href=\"#\" onmouseout=\"MM_startTimeout();\" onmouseover=\"MM_showMenu(window.mm_menu_0116012357_7,0,25,null,\'hsmod_adminbar_r1_c8\');\"><img name=\"hsmod_adminbar_r1_c8\" src=\"../skins/{\$admin->skin}/images/hsmod_adminbar_r1_c8.png\" width=\"66\" height=\"25\" border=\"0\" alt=\"\" /></a></td>
   <td><a href=\"#\" onmouseover=\"MM_displayStatusMsg(\'Modification created by Joel Theodore for HumanShit.Com\');return document.MM_returnValue\"><img name=\"hsmod_adminbar_r1_c9\" src=\"../skins/{\$admin->skin}/images/hsmod_adminbar_r1_c9.png\" width=\"21\" height=\"25\" border=\"0\" alt=\"\" /></a></td>
   <td><img src=\'../skins/{\$admin->skin}/images/spacer.png\' width=\'1\' height=\'25\' alt=\'\' /></td>
  </tr>
</table>
</div>

{\$admin->table}
 <tr>
  <td class=\'headerbw\'><span class=\'tree\'><b><a href=\'\$admin->self\'>Admin CP</a>\$admin->tree</b></span></td>
 </tr>
{\$admin->etable}

{\$admin_main}

</body>
</html>
', 'AdminCP Index', 'The index page for the AdminCP', 0)";
$queries['ADMIN_LIST_TEMPLATES'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'templates', 'ADMIN_LIST_TEMPLATES', '
<form action=\'\$this->self\' method=\'get\'>
{\$this->table}
 <tr>
  <td class=\'header\'>{\$this->lang->menu_title}</td>
 </tr>
 <tr>
  <td class=\'tabledark\'>
   <span class=\'med\'>1. {\$this->lang->choose_skin}:</span><br /><br />
    <select name=\'skin\'>
     {\$skin_box}
    </select>
    <input type=\'hidden\' name=\'a\' value=\'templates\' />
    <input type=\'hidden\' name=\'s\' value=\'html\' />
    <input type=\'submit\' value=\'{\$this->lang->edit_skin}\' />
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\'>
   <span class=\'med\'>2. {\$this->lang->choose_set}:</span><br />
   <ul style=\'line-height:150%\'>
    {\$out}
   </ul>
  </td>
 </tr>
{\$this->etable}
</form>
', 'List Templates', 'Page that displays a skin\'s templates', 4)";
$queries['ADMIN_LIST_TEMPLATES_DELETE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'templates', 'ADMIN_LIST_TEMPLATES_DELETE', '
<form action=\'\$this->self\' method=\'get\'>
{\$this->table}
 <tr>
  <td class=\'header\'>{\$this->lang->menu_title}</td>
 </tr>
 <tr>
  <td class=\'tabledark\'>
   <span class=\'med\'>1. {\$this->lang->choose_skin}:</span><br /><br />
    <select name=\'skin\'>
     {\$skin_box}
    </select>
    <input type=\'hidden\' name=\'a\' value=\'templates\' />
    <input type=\'hidden\' name=\'s\' value=\'del_html\' />
    <input type=\'submit\' value=\'{\$this->lang->edit_skin}\' />
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\'>
   <span class=\'med\'>2. {\$this->lang->choose_set}:</span><br />
   <ul style=\'line-height:150%\'>
    {\$out}
   </ul>
  </td>
 </tr>
{\$this->etable}
</form>
', 'List Templates - Delete', 'Edit the form for selecting a template to delete', 4)";
$queries['ADMIN_MASS_MAIL'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'mass_mail', 'ADMIN_MASS_MAIL', '
<script type=\'text/javascript\'>
<!--
function select_all_groups()
{
  opts = document.forms[\'mailer\'].elements[\'groups[]\'].options
  for (i=0; i<opts.length; i++)
  {
    opts[i].selected = true;
  }
}
//-->
</script>

<form action=\'\$this->self?a=mass_mail\' method=\'post\' id=\'mailer\'>
{\$this->table}
 <tr>
  <td class=\'header\' colspan=\'2\'>{\$this->lang->mail}</td>
 </tr>
 <tr>
  <td class=\'tablelight\' style=\'width:15%\'><b>Subject</b></td>
  <td class=\'tablelight\' style=\'width:85%\' valign=\'top\'>
   <input class=\'input\' type=\'text\' name=\'subject\' size=\'60\' value=\'{\$announcement}\' /></td>
 </tr>
 <tr>
  <td class=\'tabledark\' valign=\'top\'>
   <b>{\$this->lang->mail_groups}</b><br />[<a href=\'#\' onclick=\'select_all_groups()\' class=\'nav\'>{\$this->lang->mail_select_all}</a>]
  </td>
  <td class=\'tabledark\' valign=\'top\'>
   <select name=\'groups[]\' size=\'8\' multiple=\'multiple\'>
    {\$group_list}
   </select>
  </td>
 </tr>
 <tr>
  <td class=\'tablelight\' valign=\'top\'><b>{\$this->lang->mail_message}</b></td>
  <td class=\'tablelight\' valign=\'top\'><textarea name=\'message\' rows=\'12\' cols=\'60\' class=\'input\'></textarea></td>
 </tr>
 <tr>
  <td class=\'footer\' colspan=\'2\' align=\'center\'><input type=\'submit\' name=\'massmail\' value=\'{\$this->lang->mail_send}\' /></td>
 </tr>
{\$this->etable}
</form>
', 'Mass Mailing Form', 'The form for sending a mass message to all users', 0)";
$queries['ADMIN_MEMBER_PROFILE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'member_control', 'ADMIN_MEMBER_PROFILE', '
<form action=\'\$this->self?a=member_control&amp;s=profile&amp;id={\$this->get[\'id\']}\' method=\'post\'>
{\$this->table}
 <tr>
  <td class=\'header\' colspan=\'2\'>{\$this->lang->mc}</td>
 </tr>
 {\$out}
 <tr>
  <td class=\'footer\' colspan=\'2\' align=\'center\'><input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' /></td>
 </tr>
{\$this->etable}
</form>
', 'Admin Member Control', 'Form for editing member profiles', 0)";
$queries['ADMIN_MESSAGE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Admin', 'ADMIN_MESSAGE', '
<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'60%\' style=\'margin-left:20%; margin-right:20%;\'>
<tr><td>
{\$this->table}
  <tr>
    <td class=\'header\' align=\'center\'>{\$title}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' align=\'center\' style=\'padding:20px\'>{\$message}</td>
  </tr>
  <tr>
    <td class=\'footer\' align=\'center\'>&nbsp;</td>
  </tr>
{\$this->etable}
</td></tr>
</table>
', 'AdminCP Generic Message', 'The generic messages that appear throughout the AdminCP', 2)";
$queries['ADMIN_MOD_LOGS'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'logs', 'ADMIN_MOD_LOGS', '
{\$this->table}
 <tr>
  <td class=\'header\' colspan=\'4\'>{\$this->lang->logs_view}</td>
 </tr>
 <tr>
  <td align=\'center\' class=\'subheader\'>{\$this->lang->logs_time}</td>
  <td align=\'center\' class=\'subheader\'>{\$this->lang->logs_user}</td>
  <td align=\'center\' class=\'subheader\'>{\$this->lang->logs_action}</td>
  <td align=\'center\' class=\'subheader\'>{\$this->lang->logs_id}</td>
 </tr>
 {\$out}
{\$this->etable}
', 'View Moderator Logs', 'Format of the moderator log view', 0)";
$queries['ADMIN_TABLE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Admin', 'ADMIN_TABLE', '<table cellpadding=\'5\' cellspacing=\'0\' class=\'stand\'>', 'Admin Table Start', 'The beginning of the admin table', 8)";
$queries['ADMIN_TITLE_FORM'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'titles', 'ADMIN_TITLE_FORM', '
<form action=\'\$this->self?a=titles&amp;s=edit&amp;edit={\$this->get[\'edit\']}\' method=\'post\'>
{\$this->table}
 <tr>
  <td class=\'header\' colspan=\'6\'>{\$this->lang->titles_edit}</td>
 </tr>
 <tr>
  <td class=\'subheader\'>{\$this->lang->titles_title}</td>
  <td class=\'subheader\' colspan=\'2\'>{\$this->lang->titles_image}</td>
  <td class=\'subheader\' style=\'white-space:nowrap\'>{\$this->lang->titles_minpost}</td>
  <td class=\'subheader\' colspan=\'2\'>&nbsp;</td>
 </tr>
 {\$out}
 <tr>
  <td class=\'footer\' colspan=\'6\'></td>
 </tr>
{\$this->etable}
</form>
', 'Member Titles', 'Form for editing and deleting member titles', 0)";
$queries['FORUM_TOPICS_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'forum', 'FORUM_TOPICS_MAIN', '
<script type=\'text/javascript\'>
<!--
function get_forum(select)
{
  if(select.value.substring(0, 1) == \'.\'){
    self.location.href = \'{\$this->self}?c=\' + select.value.substring(1, select.value.length);
  }else{
    self.location.href = \'{\$this->self}?a=forum&f=\' + select.value;
  }
}
//-->
</script>

{\$this->table}
  <tr>
    <td>{\$this->lang->forum_pages}:
      {\$pagelinks}
    </td>
    <td style=\'text-align:right\'>
      <a href=\'{\$this->self}?a=post&amp;s=topic&amp;f={\$f}\'><img src=\'./skins/{\$this->skin}/images/newtopic.png\' title=\'{\$this->lang->forum_new_topic}\' alt=\'{\$this->lang->forum_new_topic}\' /></a>
      <a href=\'{\$this->self}?a=post&amp;s=poll&amp;f={\$f}\'><img src=\'./skins/{\$this->skin}/images/newpoll.png\' title=\'{\$this->lang->forum_new_poll}\' alt=\'{\$this->lang->forum_new_poll}\' /></a>
    </td>
  </tr>
{\$this->etable}

{\$this->table}
  <tr>
    <td class=\'header\' style=\'width:5%\'>&nbsp;</td>
    <td class=\'header\' style=\'width:5%\'>&nbsp;</td>
    <td class=\'header\' style=\'width:40%\'><a href=\'\$this->self?a=forum&amp;f={\$f}&amp;min={\$min}&amp;n={\$n}&amp;order=title&amp;asc={\$asc}\' class=\'header\'>{\$this->lang->forum_topic}</a></td>
    <td class=\'header\' style=\'width:15%; text-align:center\'><a href=\'\$this->self?a=forum&amp;f={\$f}&amp;min={\$min}&amp;n={\$n}&amp;order=starter&amp;asc={\$asc}\' class=\'header\'>{\$this->lang->forum_starter}</a></td>
    <td class=\'header\' style=\'width:8%; text-align:center\'><a href=\'\$this->self?a=forum&amp;f={\$f}&amp;min={\$min}&amp;n={\$n}&amp;order=replies&amp;asc={\$asc}\' class=\'header\'>{\$this->lang->forum_replies}</a></td>
    <td class=\'header\' style=\'width:8%; text-align:center\'><a href=\'\$this->self?a=forum&amp;f={\$f}&amp;min={\$min}&amp;n={\$n}&amp;order=views&amp;asc={\$asc}\' class=\'header\'>{\$this->lang->forum_views}</a></td>
    <td class=\'header\' style=\'width:19%\'><a href=\'\$this->self?a=forum&amp;f={\$f}&amp;min={\$min}&amp;n={\$n}&amp;order=last&amp;asc={\$asc}\' class=\'header\'>{\$this->lang->forum_last}</a></td>
  </tr>
  {\$topics}
  <tr>
    <td class=\'footer\' colspan=\'7\'>&nbsp;</td>
  </tr>
{\$this->etable}

{\$this->table}
  <tr>
    <td>{\$this->lang->forum_pages}:
      {\$pagelinks}<br /><br />
      <select class=\'select\' onchange=\'javascript:get_forum(this)\'>
        {\$forumjump}
      </select>
    </td>
    <td align=\'right\'>
      <a href=\'{\$this->self}?a=post&amp;s=topic&amp;f={\$f}\'><img src=\'./skins/{\$this->skin}/images/newtopic.png\' title=\'{\$this->lang->forum_new_topic}\' alt=\'{\$this->lang->forum_new_topic}\' /></a>
      <a href=\'{\$this->self}?a=post&amp;s=poll&amp;f={\$f}\'><img src=\'./skins/{\$this->skin}/images/newpoll.png\' title=\'{\$this->lang->forum_new_poll}\' alt=\'{\$this->lang->forum_new_poll}\' /></a>
      <a href=\'{\$this->self}?a=cp&amp;s=addsub&amp;type=forum&amp;item={\$f}\'><img src=\'./skins/{\$this->skin}/images/subscribe.png\' title=\'{\$this->lang->forum_subscribe}\' alt=\'{\$this->lang->forum_subscribe}\' /></a>
    </td>
  </tr>
{\$this->etable}

<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>
<tr><td align=\'center\'>
<table border=\'0\' cellpadding=\'5\' cellspacing=\'0\' style=\'border-collapse:collapse\'>
  <tr>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/newopen.png\' title=\'{\$this->lang->forum_new}\' alt=\'{\$this->lang->forum_new}\' /><br />{\$this->lang->forum_new}</td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/newhot.png\' title=\'{\$this->lang->forum_new} {\$this->lang->forum_hot}\' alt=\'{\$this->lang->forum_new} {\$this->lang->forum_hot}\' /><br />{\$this->lang->forum_new} {\$this->lang->forum_hot}</td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/pinned.png\' title=\'{\$this->lang->forum_pinned}\' alt=\'{\$this->lang->forum_pinned}\' /><br />{\$this->lang->forum_pinned}</td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/moved.png\' title=\'{\$this->lang->forum_moved}\' alt=\'{\$this->lang->forum_moved}\' /><br />{\$this->lang->forum_moved}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/open.png\' title=\'{\$this->lang->forum_topic}\' alt=\'{\$this->lang->forum_topic}\' /><br />{\$this->lang->forum_not} {\$this->lang->forum_new}</td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/hot.png\' title=\'{\$this->lang->forum_hot}\' alt=\'{\$this->lang->forum_hot}\' /><br />{\$this->lang->forum_hot}</td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/poll.png\' title=\'{\$this->lang->forum_poll}\' alt=\'{\$this->lang->forum_poll}\' /><br />{\$this->lang->forum_poll}</td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/locked.png\' title=\'{\$this->lang->forum_locked}\' alt=\'{\$this->lang->forum_locked}\' /><br />{\$this->lang->forum_locked}</td>
  </tr>
  <tr>
    <td class=\'tabledark\' colspan=\'4\' align=\'center\'><img src=\'skins/{\$this->skin}/images/dot.png\' title=\'{\$this->lang->forum_dot}\' alt=\'{\$this->lang->forum_dot}\' /> {\$this->lang->forum_dot_detail}</td>
  </tr>
</table>
</td></tr>
</table>
', 'Forum Topics List', 'The display of topic listings in a forum', 6)";
$queries['RECENT_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'recent', 'RECENT_MAIN', '<script type=\'text/javascript\'>
<!--
function get_forum(select)
{
  if(select.value.substring(0, 1) == \'.\'){
    self.location.href = \'{\$this->self}?c=\' + select.value.substring(1, select.value.length);
  }else{
    self.location.href = \'{\$this->self}?a=forum&f=\' + select.value;
  }
}
//-->
</script>

{\$this->table}
 <tr>
  <td align=\'left\'>{\$this->lang->recent_pages}:
   {\$pagelinks}
  </td>
  <td align=\'right\'></td>
 </tr>
{\$this->etable}

{\$this->table}
 <tr>
  <td style=\'width:5%\' class=\'header\'>&nbsp;</td>
  <td style=\'width:5%\' class=\'header\'>&nbsp;</td>
  <td style=\'width:40%\' class=\'header\'>{\$this->lang->recent_topic}</td>
  <td style=\'width:15%\' class=\'header\' align=\'center\'>{\$this->lang->recent_starter}</td>
  <td style=\'width:8%\' class=\'header\' align=\'center\'>{\$this->lang->recent_replies}</td>
  <td style=\'width:8%\' class=\'header\' align=\'center\'>{\$this->lang->recent_views}</td>
  <td style=\'width:19%\' class=\'header\'>{\$this->lang->recent_last}</td>
 </tr>
 {\$topics}
 <tr>
  <td class=\'footer\' colspan=\'7\'>&nbsp;</td>
 </tr>
{\$this->etable}

{\$this->table}
 <tr>
  <td align=\'left\'>{\$this->lang->recent_pages}:
   {\$pagelinks}<br><br>
   <select class=\'select\' onChange=\'javascript:get_forum(this)\'>
   {\$forumjump}
   </select>
  </td>
  <td align=\'right\'></td>
 </tr>
{\$this->etable}<br />

<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>
<tr><td align=\'center\'>
<table border=\'0\' cellpadding=\'5\' cellspacing=\'0\' style=\'border-collapse:collapse\'>
  <tr>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/newopen.png\' title=\'{\$this->lang->recent_new}\' alt=\'{\$this->lang->recent_new}\' /><br />{\$this->lang->recent_new}</td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/newhot.png\' title=\'{\$this->lang->recent_new} {\$this->lang->recent_hot}\' alt=\'{\$this->lang->recent_new} {\$this->lang->recent_hot}\' /><br />{\$this->lang->recent_new} {\$this->lang->recent_hot}</td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/pinned.png\' title=\'{\$this->lang->recent_pinned}\' alt=\'{\$this->lang->recent_pinned}\' /><br />{\$this->lang->recent_pinned}</td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/moved.png\' title=\'{\$this->lang->recent_moved}\' alt=\'{\$this->lang->recent_moved}\' /><br />{\$this->lang->recent_moved}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/open.png\' title=\'{\$this->lang->recent_topic}\' alt=\'{\$this->lang->recent_topic}\' /><br />{\$this->lang->recent_not} {\$this->lang->recent_new}</td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/hot.png\' title=\'{\$this->lang->recent_hot}\' alt=\'{\$this->lang->recent_hot}\' /><br />{\$this->lang->recent_hot}</td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/poll.png\' title=\'{\$this->lang->recent_poll}\' alt=\'{\$this->lang->recent_poll}\' /><br />{\$this->lang->recent_poll}</td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/locked.png\' title=\'{\$this->lang->recent_locked}\' alt=\'{\$this->lang->recent_locked}\' /><br />{\$this->lang->recent_locked}</td>
  </tr>
  <tr>
    <td class=\'tabledark\' colspan=\'4\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/dot.png\' title=\'{\$this->lang->recent_dot}\' alt=\'{\$this->lang->recent_dot}\' /> {\$this->lang->recent_dot_detail}</td>
  </tr>
</table>
</td></tr>
</table>', 'Recent View', 'Change the appearance of the recent topics lists', 0)";
$queries['RECENT_NO_TOPICS'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'recent', 'RECENT_NO_TOPICS', '      <tr>
        <td colspan=\'7\' align=\'center\' class=\'tablelight\'>{\$this->lang->recent_no_topics}</td>
      </tr>', 'Error Display', 'Format the look of an error on the recent topics view.', 3)";
$queries['RECENT_TOPIC'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'recent', 'RECENT_TOPIC', '    <tr>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/{\$state}.png\' title=\'{\$this->lang->recent_topic}\' alt=\'{\$this->lang->recent_topic}\' /></td>
    <td class=\'tablelight\' align=\'center\'>{\$row[\'topic_icon\']}</td>
    <td class=\'tablelight\'><a href=\'{\$this->self}?a=topic&amp;t={\$row[\'topic_id\']}\' class=\'medium\'>{\$row[\'topic_title\']}</a> {\$Pages}{\$row[\'topic_description\']}</td>
    <td class=\'tabledark\' align=\'center\'>{\$row[\'topic_starter\']}</td>
    <td class=\'tablelight\' align=\'center\'>{\$row[\'topic_replies\']}</td>
    <td class=\'tablelight\' align=\'center\'>{\$row[\'topic_views\']}</td>
    <td class=\'tabledark\'>
      <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\'>
        <tr>
          <td>
            {\$row[\'topic_edited\']}<br />
            <a href=\'{\$this->self}?a=topic&amp;t={\$row[\'topic_id\']}{\$jump}\'>
            <img src=\'./skins/{\$this->skin}/images/arrow.png\' title=\'{\$this->lang->recent_jump}\' alt=\'{\$this->lang->recent_jump}\' /></a>
            {\$this->lang->recent_by}: \$last_poster
          </td>
        </tr>
      </table>
    </td>
  </tr>', 'Recent Topics', 'Format the default look of a given forum topic.', 1)";
$queries['RECENT_TOPIC_PINNED'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'recent', 'RECENT_TOPIC_PINNED', '  <tr>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/{\$state}.png\' title=\'{\$this->lang->recent_topic}\' alt=\'{\$this->lang->recent_topic}\' /></td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/{\$this->skin}/images/pinned.png\' title=\'{\$this->lang->recent_pinned_topic}\' alt=\'{\$this->lang->recent_pinned_topic}\' /></td>
    <td class=\'tablelight\'><a href=\'{\$this->self}?a=topic&amp;t={\$row[\'topic_id\']}\' class=\'medium\'><b>{\$row[\'topic_title\']}</b></a> {\$Pages}{\$row[\'topic_description\']}</td>
    <td class=\'tabledark\' align=\'center\'>{\$row[\'topic_starter\']}</td>
    <td class=\'tablelight\' align=\'center\'>{\$row[\'topic_replies\']}</td>
    <td class=\'tablelight\' align=\'center\'>{\$row[\'topic_views\']}</td>
    <td class=\'tabledark\'>
      <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\'>
        <tr>
          <td>
            {\$row[\'topic_edited\']}<br />
            <a href=\'{\$this->self}?a=topic&amp;t={\$row[\'topic_id\']}{\$jump}\'>
            <img src=\'./skins/{\$this->skin}/images/arrow.png\' title=\'{\$this->lang->recent_jump}\' alt=\'{\$this->lang->recent_jump}\' /></a>
            {\$this->lang->recent_by}: \$last_poster
          </td>
        </tr>
      </table>
    </td>
  </tr>', 'Recent Pinned Topics', 'Format the look of the pinned topics in the recent topics view.', 2)";
?>
