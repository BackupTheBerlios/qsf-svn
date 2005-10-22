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
	exit('Use index.php to install.');
}

$queries['ACTIVE_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'active', 'ACTIVE_MAIN', '
{\$this->table}
  <tr>
    <td colspan=\'3\' class=\'header\'>
      {\$this->lang->active_users}
    </td>
  </tr>
  <tr>
    <td style=\'width:40%\' class=\'subheader\'>{\$this->lang->active_user}</td>
    <td style=\'width:30%\' class=\'subheader\'>{\$this->lang->active_last_action}</td>
    <td style=\'width:30%\' class=\'subheader\'>{\$this->lang->active_time}</td>
  </tr>

  {\$ActiveList}

  <tr>
    <td colspan=\'3\' class=\'footer\'>&nbsp;</td>
  </tr>
{\$this->etable}
', 'Active Users Table', 'The active users table formatting and generalized code.', 0)";
$queries['ACTIVE_USER'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'active', 'ACTIVE_USER', '
  <tr>
    <td class=\'tablelight\'>{\$username}</td>
    <td class=\'tablelight\'>{\$action}</td>
    <td class=\'tablelight\'>{\$time}</td>
  </tr>
', 'Active Users Table Entry', 'Format the look of the entry for a user in the Active Users main table listing.', 1)";
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
  <td class=\'labeldark\' valign=\'top\' colspan=\'2\'>{\$this->lang->settings_tos}</td>
 </tr>
 <tr>
  <td class=\'tabledark\' colspan=\'2\'>
   <textarea class=\'input\' name=\'tos\' rows=\'10\' cols=\'37\'>{\$tos_text}</textarea>
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
$queries['BOARD_CATEGORY'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'board', 'BOARD_CATEGORY', '
  <tr>
    <td colspan=\'5\' class=\'subheader\'><div style=\'float:left;\'><a href=\'{\$this->self}?c={\$forum[\'forum_id\']}\' class=\'header\'>{\$forum[\'forum_name\']}</a></div><div style=\'text-align:right;\'><a href=\'#bottom\'><img src=\'./skins/{\$this->skin}/images/arrowdown.png\' alt=\'{\$this->lang->board_bottom_page}\' title=\'{\$this->lang->board_bottom_page}\' /></a><a href=\'#top\'><img src=\'./skins/{\$this->skin}/images/arrowup.png\' alt=\'{\$this->lang->board_top_page}\' title=\'{\$this->lang->board_top_page}\' /></a></div></td>
  </tr>
', 'Board Category', 'Format the look of the categories on the index page of your forum.', 2)";
$queries['BOARD_FORUM'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'board', 'BOARD_FORUM', '
  <tr>
    <td class=\'tablelight\' style=\'height:35px\'><a href=\'{\$this->self}?a=forum&amp;f={\$forum[\'forum_id\']}\'>{\$forum[\'forum_name\']}</a>{\$forum[\'forum_description\']}</td>
    <td class=\'tabledark\' align=\'center\'>{\$forum[\'forum_topics\']}</td>
    <td class=\'tabledark\' align=\'center\'>{\$forum[\'forum_replies\']}</td>
    <td class=\'tablelight\'>{\$user_lastpostBox}</td>
  </tr>
  ', 'Board Forum Entry', 'Format the look of a \"forum\" entry on the index page or subcategory pages.', 1)";
$queries['BOARD_LAST_POST_BOX'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'board', 'BOARD_LAST_POST_BOX', '
{\$topic_new} <a href=\'{\$this->self}?a=topic&amp;t={\$forum[\'LastTopicID\']}\' class=\'small\' title=\'\$full_title\'>{\$forum[\'user_lastpost\']}</a><br />
{\$this->lang->board_by} {\$forum[\'user_lastposter\']}<br />
{\$forum[\'LastTime\']}
', 'Last Post Box', 'Change the look of the last poster box on the forums.', 3)";
$queries['BOARD_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'board', 'BOARD_MAIN', '
{\$this->table}
  <tr>
    <td style=\'width:55%\' class=\'header\'>{\$this->lang->board_forum}</td>
    <td style=\'width:10%\' class=\'header\' align=\'center\'>{\$this->lang->board_topics}</td>
    <td style=\'width:10%\' class=\'header\' align=\'center\'>{\$this->lang->board_replies}</td>
    <td style=\'width:25%\' class=\'header\'>{\$this->lang->board_last_post}</td>
  </tr>
{\$forums}
{\$this->etable}

<p></p>

{\$this->table}
  <tr>
    <td class=\'header\'>
      <a href=\'{\$this->self}?a=active\' class=\'header\'>{\$this->lang->board_active_users}</a>
    </td>
  </tr>
  <tr>
    <td class=\'tablelight\'>
      <b>{\$active[\'TOTALCOUNT\']} {\$this->lang->board_users} ({\$active[\'MEMBERCOUNT\']} {\$this->lang->board_members}, {\$active[\'GUESTCOUNT\']} {\$this->lang->board_guests})</b><br />
      {\$this->lang->board_most_online}<br /><hr />
      {\$active[\'USERS\']}
    </td>
  </tr>
{\$this->etable}

<p></p>

{\$this->table}
  <tr>
    <td class=\'header\'>
      {\$this->lang->board_stats}
    </td>
  </tr>
  <tr>
    <td class=\'tablelight\'>
      {\$this->lang->board_stats_string}
      <br /><hr />
      <b>{\$this->lang->board_birthdays}</b><br />
      {\$birthdays}
    </td>
  </tr>
{\$this->etable}
', 'Board View', 'Change the appearance of the main board screen, which lists all available forums', 0)";
$queries['CP_AVATAR'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'cp', 'CP_AVATAR', '
<script type=\'text/javascript\'>
<!--
function enable(what)
{
  if(what == \'local\'){
    document.forms[\'avatar\'].avatar_local.disabled = false;
    document.forms[\'avatar\'].avatar_url.disabled = true;
    document.forms[\'avatar\'].avatar_upload.disabled = true;
    check(0);
  }else if(what == \'url\'){
    document.forms[\'avatar\'].avatar_local.disabled = true;
    document.forms[\'avatar\'].avatar_url.disabled = false;
    document.forms[\'avatar\'].avatar_upload.disabled = true;
    check(1);
  }else if(what == \'upload\'){
    document.forms[\'avatar\'].avatar_local.disabled = true;
    document.forms[\'avatar\'].avatar_url.disabled = true;
    document.forms[\'avatar\'].avatar_upload.disabled = false;
    check(2);
  }else if(what == \'use_uploaded\'){
    document.forms[\'avatar\'].avatar_local.disabled = true;
    document.forms[\'avatar\'].avatar_url.disabled = true;
    document.forms[\'avatar\'].avatar_upload.disabled = true;
    check(3);
  }else if(what == \'none\'){
    document.forms[\'avatar\'].avatar_local.disabled = true;
    document.forms[\'avatar\'].avatar_url.disabled = true;
    document.forms[\'avatar\'].avatar_upload.disabled = true;
    check(4);
  }
}

function setuser_avatar(url)
{
  if(document.images){
    image = document.images[\'current_avatar\'];
    if(url == \'\'){
      noavatar();
    }else{
      image.src = url;

      if(image.fileSize){
        if(image.fileSize == -1){
          noavatar();
        }
      }
    }
  }
}

function setWidth(obj)
{
  if((obj.value > {\$this->sets[\'avatar_width\']}) || (obj.value < 1)){
    obj.value = {\$this->sets[\'avatar_width\']};
    alert(\"{\$this->lang->cp_avatar_size_width} {\$this->sets[\'avatar_width\']} {\$this->lang->cp_avatar_pixels}.\");
  }
  if(document.images){
    document.images[\'current_avatar\'].width = obj.value;
  }
}

function setHeight(obj)
{
  if((obj.value > {\$this->sets[\'avatar_height\']}) || (obj.value < 1)){
    obj.value = {\$this->sets[\'avatar_height\']};
    alert(\"{\$this->lang->cp_avatar_size_height} {\$this->sets[\'avatar_height\']} {\$this->lang->cp_avatar_pixels}.\");
  }
  if(document.images){
    document.images[\'current_avatar\'].height = obj.value;
  }
}

function noavatar()
{
  image = document.images[\'current_avatar\'];
  image.src = \'./skins/{\$this->skin}/images/noavatar.png\';
  image.height = 64;
  image.width = 64;
  document.forms[\'avatar\'].user_avatar_width.value = 64;
  document.forms[\'avatar\'].user_avatar_height.value = 64;
}

function check(i)
{
  if(i == 0){
    var x = 1;
  }else{
    var x = 0;
  }
  document.forms[\'avatar\'].user_avatar_type[i].checked = true;
  document.forms[\'avatar\'].user_avatar_type[x].checked = false;
}
//-->
</script>

<form action=\'{\$this->self}?a=cp&amp;s=avatar\' enctype=\'multipart/form-data\' method=\'post\' id=\'avatar\'>
{\$this->table}
  <tr>
    <td colspan=\'2\' class=\'header\'>{\$this->lang->cp_label_edit_avatar}</td>
  </tr>
  <tr>
    <td class=\'tabledark\' style=\'width:30%\' rowspan=\'5\' align=\'center\'>
      <table border=\'0\' cellpadding=\'3\' cellspacing=\'0\'>
        <tr>
          <td colspan=\'2\' align=\'center\'>
            <b>{\$this->lang->cp_current_avatar}</b><br /><br />
            <img onerror=\'noavatar()\' id=\'current_avatar\' src=\'{\$this->user[\'user_avatar\']}\' width=\'{\$this->user[\'user_avatar_width\']}\' height=\'{\$this->user[\'user_avatar_height\']}\' alt=\'{\$this->lang->cp_avatar_current}\' /><br /><br />
          </td>
        </tr>
        <tr>
          <td>{\$this->lang->cp_width}:</td>
          <td><input class=\'input\' type=\'text\' name=\'user_avatar_width\' value=\'{\$this->user[\'user_avatar_width\']}\' size=\'4\' maxlength=\'4\' onchange=\'setWidth(this)\' /> {\$this->lang->cp_avatar_pixels}</td>
        </tr>
        <tr>
          <td>{\$this->lang->cp_height}:</td>
          <td><input class=\'input\' type=\'text\' name=\'user_avatar_height\' value=\'{\$this->user[\'user_avatar_height\']}\' size=\'4\' maxlength=\'4\' onchange=\'setHeight(this)\' /> {\$this->lang->cp_avatar_pixels}</td>
        </tr>
      </table>
    </td>
    <td class=\'tablelight\' onclick=\"enable(\'local\'); setuser_avatar(document.forms[\'avatar\'].avatar_local.value)\">
      <table border=\'0\' cellpadding=\'3\' cellspacing=\'0\'>
        <tr>
          <td><input type=\'radio\' name=\'user_avatar_type\' value=\'local\' onfocus=\"enable(\'local\'); setuser_avatar(document.forms[\'avatar\'].avatar_local.value)\"{\$checks[0]} /></td>
          <td>{\$this->lang->cp_avatar_select}</td>
        </tr>
        <tr>
          <td></td>
          <td>
            <select class=\'select\' size=\'5\' name=\'avatar_local\' onchange=\'setuser_avatar(this.value)\'>
              \$avatar_list
            </select>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class=\'tablelight\' onclick=\"enable(\'url\'); setuser_avatar(document.forms[\'avatar\'].avatar_url.value)\">
      <table border=\'0\' cellpadding=\'3\' cellspacing=\'0\'>
        <tr>
          <td><input type=\'radio\' name=\'user_avatar_type\' value=\'url\' onfocus=\"enable(\'url\'); setuser_avatar(document.forms[\'avatar\'].avatar_url.value)\"{\$checks[1]} /></td>
          <td>{\$this->lang->cp_avatar_url}</td>
        </tr>
        <tr>
          <td></td>
          <td><input class=\'input\' type=\'text\' name=\'avatar_url\' value=\'{\$avatar_url}\' size=\'50\' onchange=\'setuser_avatar(this.value)\' /></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class=\'tablelight\' onclick=\"enable(\'upload\'); setuser_avatar(document.forms[\'avatar\'].avatar_upload.value)\">
      <table border=\'0\' cellpadding=\'3\' cellspacing=\'0\'>
        <tr>
          <td><input type=\'radio\' name=\'user_avatar_type\' value=\'upload\' onfocus=\"enable(\'upload\'); setuser_avatar(document.forms[\'avatar\'].avatar_upload.value)\" /></td>
          <td>{\$this->lang->cp_avatar_upload}</td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input class=\'input\' type=\'file\' name=\'avatar_upload\' onchange=\'setuser_avatar(this.value)\' />
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class=\'tablelight\' onclick=\"enable(\'use_uploaded\'); setuser_avatar(\'./avatars/uploaded/{\$this->user[\'user_id\']}.avtr\')\">
      <table border=\'0\' cellpadding=\'3\' cellspacing=\'0\'>
        <tr>
          <td><input type=\'radio\' name=\'user_avatar_type\' value=\'use_uploaded\' onfocus=\"enable(\'use_uploaded\'); noavatar()\"{\$checks[2]} /></td>
          <td>{\$this->lang->cp_avatar_use}</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class=\'tablelight\' onclick=\"enable(\'none\'); noavatar()\">
      <table border=\'0\' cellpadding=\'3\' cellspacing=\'0\'>
        <tr>
          <td><input type=\'radio\' name=\'user_avatar_type\' value=\'none\' onfocus=\"enable(\'none\'); noavatar()\"{\$checks[3]} /></td>
          <td>{\$this->lang->cp_avatar_none}</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class=\'footer\' colspan=\'2\' align=\'center\'>
      <input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' />
    </td>
  </tr>
{\$this->etable}
</form>

<script type=\'text/javascript\'>
<!--
enable(\'\$init\');
//-->
</script>
', 'Avatar Controls', 'The form that allows users to customize their avatar', 3)";
$queries['CP_HOME'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'cp', 'CP_HOME', '
{\$this->table}
  <tr>
    <td class=\'header\'>{\$this->lang->cp_header}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' align=\'center\' style=\'padding:30px\'>{\$this->lang->cp_welcome}</td>
  </tr>
  <tr>
    <td align=\'center\' class=\'footer\'>&nbsp;</td>
  </tr>
{\$this->etable}
', 'Control Panel Home', 'The page shown when the control panel is opened', 1)";
$queries['CP_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'cp', 'CP_MAIN', '
{\$this->table}
  <tr>
    <td colspan=\'5\' class=\'header\'>{\$this->lang->cp_header}</td>
  </tr>
  <tr>
    <td class=\'{\$class[\'avatar\']}\' align=\'center\' style=\'width:20%\'><a href=\'{\$this->self}?a=cp&amp;s=avatar\'>{\$this->lang->cp_label_edit_avatar}</a></td>
    <td class=\'{\$class[\'cpass\']}\' align=\'center\' style=\'width:20%\'><a href=\'{\$this->self}?a=cp&amp;s=cpass\'>{\$this->lang->cp_label_edit_pass}</a></td>
    <td class=\'{\$class[\'prefs\']}\' align=\'center\' style=\'width:20%\'><a href=\'{\$this->self}?a=cp&amp;s=prefs\'>{\$this->lang->cp_label_edit_prefs}</a></td>
    <td class=\'{\$class[\'profile\']}\' align=\'center\' style=\'width:20%\'><a href=\'{\$this->self}?a=cp&amp;s=profile\'>{\$this->lang->cp_label_edit_profile}</a></td>
    <td class=\'{\$class[\'subs\']}\' align=\'center\' style=\'width:20%\'><a href=\'{\$this->self}?a=cp&amp;s=subs\'>{\$this->lang->cp_label_edit_subs}</a></td>
  </tr>
{\$this->etable}

<p></p>

{\$control_page}
', 'Control Panel Menu', 'The control panel navigation menu', 0)";
$queries['CP_PASS'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'cp', 'CP_PASS', '
<form action=\'{\$this->self}?a=cp&amp;s=cpass\' method=\'post\'>
{\$this->table}
  <tr>
    <td colspan=\'2\' class=\'header\'>{\$this->lang->cp_label_edit_pass}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->cp_old_pass}</td>
    <td class=\'tablelight\'><input class=\'input\' type=\'password\' name=\'old_pass\' size=\'40\' /></td>
  </tr>
  <tr>
    <td class=\'tabledark\'>{\$this->lang->cp_new_pass}</td>
    <td class=\'tabledark\'><input class=\'input\' type=\'password\' name=\'passA\' size=\'40\' /></td>
  </tr>
  <tr>
    <td class=\'tablelight\'>{\$this->lang->cp_repeat_pass}</td>
    <td class=\'tablelight\'><input class=\'input\' type=\'password\' name=\'passB\' size=\'40\' /></td>
  </tr>
  <tr>
    <td colspan=\'2\' align=\'center\' class=\'footer\'>
      <input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' />
    </td>
  </tr>
{\$this->etable}
</form>
', 'Change Password Form', 'The form that lets a user change their password', 4)";
$queries['CP_PREFS'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'cp', 'CP_PREFS', '
<form action=\'{\$this->self}?a=cp&amp;s=prefs\' method=\'post\'>
{\$this->table}
  <tr>
    <td colspan=\'2\' class=\'header\'>{\$this->lang->cp_label_edit_prefs}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->cp_zone}</td>
    <td class=\'tablelight\'>
      <select class=\'select\' name=\'user_timezone\'>
        {\$time_list}
      </select><br />\$current_time
    </td>
  </tr>
  <tr>
    <td class=\'tabledark\'>{\$this->lang->cp_skin}</td>
    <td class=\'tabledark\'>
      <select class=\'select\' name=\'user_skin\'>
        {\$skin_list}
      </select>
    </td>
  </tr>
  <tr>
    <td class=\'tablelight\'>{\$this->lang->cp_language}</td>
    <td class=\'tablelight\'>
      <select class=\'select\' name=\'user_language\'>
        {\$lang_list}
      </select>
    </td>
  </tr>
  <tr>
    <td class=\'tabledark\'>{\$this->lang->cp_topic_option}</td>
    <td class=\'tabledark\'>
      <input type=\'checkbox\' name=\'user_view_avatars\' id=\'user_view_avatars\' value=\'1\'{\$ViewAvCheck} /> <label for=\'user_view_avatars\'>{\$this->lang->cp_view_avatar}</label><br />
      <input type=\'checkbox\' name=\'user_view_emoticons\' id=\'user_view_emoticons\' value=\'1\'{\$ViewEmCheck} /> <label for=\'user_view_emoticons\'>{\$this->lang->cp_view_emoticon}</label><br />
      <input type=\'checkbox\' name=\'user_view_signatures\' id=\'user_view_signatures\' value=\'1\'{\$ViewSiCheck} /> <label for=\'user_view_signatures\'>{\$this->lang->cp_view_signature}</label>
    </td>
  </tr>
  <tr>
    <td class=\'tablelight\'>{\$this->lang->cp_privacy}</td>
    <td class=\'tablelight\'>
      <input type=\'checkbox\' name=\'user_email_show\' id=\'user_email_show\' value=\'1\'{\$user_email_showCheck} /> <label for=\'user_email_show\'>{\$this->lang->cp_show_email}</label><br />
      <input type=\'checkbox\' name=\'user_email_form\' id=\'user_email_form\' value=\'1\'{\$EmailFormCheck} /> <label for=\'user_email_form\'>{\$this->lang->cp_email_form}</label><br />
      <input type=\'checkbox\' name=\'user_pm\' id=\'user_pm\' value=\'1\'{\$user_pmCheck} /> <label for=\'user_pm\'>{\$this->lang->cp_contact_pm}</label><br />
      <input type=\'checkbox\' name=\'user_active\' id=\'user_active\' value=\'1\'{\$active_check} /> <label for=\'user_active\'>{\$this->lang->cp_show_active}</label>
    </td>
  </tr>
  <tr>
    <td colspan=\'2\' align=\'center\' class=\'footer\'>
      <input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' />
    </td>
  </tr>
{\$this->etable}
</form>
', 'Board Preferences Form', 'Allows users to edit their board preferences', 5)";
$queries['CP_PROFILE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'cp', 'CP_PROFILE', '
<form action=\'{\$this->self}?a=cp&amp;s=profile\' method=\'post\' id=\'profile\'>
{\$this->table}
  <tr>
    <td colspan=\'2\' class=\'header\'>{\$this->lang->cp_label_edit_profile}</td>
  </tr>
  <tr>
    <td style=\'width:30%\' class=\'tabledark\'>{\$this->lang->cp_format}</td>
    <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'Newuser_name\' value=\"{\$this->user[\'user_name\']}\" size=\'40\' /></td>
  </tr>
  <tr>
    <td class=\'tablelight\'>{\$this->lang->cp_email}</td>
    <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'user_email\' value=\"{\$this->user[\'user_email\']}\" size=\'40\' /></td>
  </tr>
  <tr>
    <td class=\'tabledark\'>{\$this->lang->cp_bday}</td>
    <td class=\'tabledark\'>
      <select name=\'month\'>{\$month_list}</select>
      <select name=\'day\'>{\$day_list}</select>
      <select name=\'year\'>{\$year_list}</select>
    </td>
  </tr>
  <tr>
    <td class=\'tablelight\'>{\$this->lang->cp_www}</td>
    <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'user_homepage\' value=\"{\$this->user[\'user_homepage\']}\" size=\'40\' /></td>
  </tr>
  <tr>
    <td class=\'tabledark\'>{\$this->lang->cp_location}</td>
    <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'user_location\' value=\"{\$this->user[\'user_location\']}\" size=\'40\' /></td>
  </tr>
  <IF \$this->perms->auth(\'is_admin\')>
   <tr>
    <td class=\'tabledark\'>{\$this->lang->cp_custom_title}<br /><span class=\'tiny\'>{\$this->lang->cp_custom_title2}</span></td>
    <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'user_title\' value=\"{\$this->user[\'user_title\']}\" size=\'40\' /></td>
   </tr>
  </IF>
  <tr>
    <td class=\'tablelight\'>{\$this->lang->cp_interest}</td>
    <td class=\'tablelight\'><textarea class=\'input\' name=\'user_interests\' cols=\'39\' rows=\'8\'>{\$this->user[\'user_interests\']}</textarea></td>
  </tr>
  <tr>
    <td class=\'tabledark\'>{\$this->lang->cp_signature}</td>
    <td class=\'tabledark\'><textarea class=\'input\' name=\'user_signature\' cols=\'39\' rows=\'8\'>{\$this->user[\'user_signature\']}</textarea></td>
  </tr>
  <tr>
    <td class=\'tablelight\'>{\$this->lang->cp_icq}</td>
    <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'user_icq\' value=\"{\$this->user[\'user_icq\']}\" size=\'40\' /></td>
  </tr>
  <tr>
    <td class=\'tabledark\'>{\$this->lang->cp_aim}</td>
    <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'user_aim\' value=\"{\$this->user[\'user_aim\']}\" size=\'40\' /></td>
  </tr>
  <tr>
    <td class=\'tablelight\'>{\$this->lang->cp_msn}</td>
    <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'user_msn\' value=\"{\$this->user[\'user_msn\']}\" size=\'40\' /></td>
  </tr>
  <tr>
    <td class=\'tabledark\'>{\$this->lang->cp_yahoo}</td>
    <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'user_yahoo\' value=\"{\$this->user[\'user_yahoo\']}\" size=\'40\' /></td>
  </tr>
  <tr>
    <td class=\'tablelight\'>{\$this->lang->cp_gtalk}</td>
    <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'user_gtalk\' value=\"{\$this->user[\'user_gtalk\']}\" size=\'40\' /></td>
  </tr>
  <tr>
    <td class=\'footer\' colspan=\'2\' align=\'center\'>
      <input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' />
    </td>
  </tr>
{\$this->etable}
</form>
', 'Edit Profile Form', 'The form that edits profiles', 2)";
$queries['CP_SUB_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'cp', 'CP_SUB_MAIN', '
<form action=\'\$this->self?a=cp&amp;s=subs\' method=\'post\'>
{\$this->table}
  <tr>
    <td class=\'header\' align=\'center\'>{\$this->lang->cp_sub_delete}</td>
    <td class=\'header\' align=\'center\'>{\$this->lang->cp_sub_type}</td>
    <td class=\'header\' align=\'center\'>{\$this->lang->cp_sub_name}</td>
    <td class=\'header\' align=\'center\'>{\$this->lang->cp_sub_expire}</td>
  </tr>
  {\$rows}
  <tr>
    <td class=\'footer\' colspan=\'4\' align=\'center\'><input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' /></td>
  </tr>
{\$this->etable}
</form>
', 'Subscriptions Main', 'The subscriptions main table', 6)";
$queries['CP_SUB_ROW'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'cp', 'CP_SUB_ROW', '
   <tr>
    <td class=\'tabledark\' align=\'center\'><input type=\'checkbox\' name=\'delete[{\$sub[\'subscription_id\']}]\' /></td>
    <td class=\'tablelight\' align=\'center\'>{\$sub[\'subscription_type\']}</td>
    <td class=\'tablelight\' align=\'center\'><a href=\'{\$this->self}?{\$link}\'>{\$sub[\'item_name\']}</a></td>
    <td class=\'tablelight\' align=\'center\'>{\$sub[\'subscription_expire\']}</td>
  </tr>
', 'Subscription', 'An individual subscription row', 7)";
$queries['EMAIL_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'email', 'EMAIL_MAIN', '
<form action=\'{\$this->self}?a=email\' method=\'post\'>
{\$this->table}
  <tr>
    <td class=\'header\' colspan=\'2\'>{\$this->lang->email_email}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->email_to}</td>
    <td class=\'tablelight\' style=\'width:70%\'><input class=\'input\' name=\'to\' size=\'60\' value=\'{\$this->get[\'to\']}\' /></td>
  </tr>
  <tr>
    <td class=\'tabledark\'>{\$this->lang->email_subject}</td>
    <td class=\'tabledark\'><input class=\'input\' name=\'subject\' size=\'60\' /></td>
  </tr>
  <tr>
    <td class=\'tablelight\' valign=\'top\'>{\$this->lang->email_msgtext}</td>
    <td class=\'tablelight\'><textarea class=\'input\' name=\'message\' cols=\'60\' rows=\'12\'></textarea></td>
  </tr>
  <tr>
    <td colspan=\'2\' class=\'footer\' align=\'center\'>
      <input name=\'submit\' type=\'submit\' value=\'{\$this->lang->submit}\' />
    </td>
  </tr>
{\$this->etable}
</form>
', 'Send An Email Form', 'The form to send an email', 0)";
$queries['FORUM_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'forum', 'FORUM_MAIN', '
{\$Forum_SubMain}

{\$Forum_TopicList}
', 'Forum View', 'Change the appearance of the forums\' topic lists', 0)";
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
$queries['FORUM_NO_TOPICS'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'forum', 'FORUM_NO_TOPICS', '
      <tr>
        <td colspan=\'7\' align=\'center\' class=\'tablelight\' style=\'padding:30px\'>{\$this->lang->forum_no_topics}</td>
      </tr>
', 'Error Display', 'Format the look of an error on the forum view.', 5)";
$queries['FORUM_SUBFORUM_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'forum', 'FORUM_SUBFORUM_MAIN', '
{\$this->table}
  <tr>
    <td class=\'header\' style=\'width:55%\'>{\$this->lang->forum_sub}</td>
    <td class=\'header\' style=\'width:10%; text-align:center\'>{\$this->lang->forum_sub_topics}</td>
    <td class=\'header\' style=\'width:10%; text-align:center\'>{\$this->lang->forum_sub_replies}</td>
    <td class=\'header\' style=\'width:25%\'>{\$this->lang->forum_sub_last_post}</td>
  </tr>
{\$SubForums}
  <tr>
   <td class=\'footer\' colspan=\'4\'>&nbsp;</td>
  </tr>
{\$this->etable}
', 'Forum-view Subforums', 'Change the look of Subforums under the forum-view.', 3)";
$queries['FORUM_TOPIC'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'forum', 'FORUM_TOPIC', '
  <tr>
    <td class=\'tablelight\' style=\'text-align:center\'><img src=\'./skins/{\$this->skin}/images/{\$state}.png\' title=\'{\$this->lang->forum_topic}\' alt=\'{\$this->lang->forum_topic}\' /></td>
    <td class=\'tablelight\' style=\'text-align:center\'>{\$row[\'topic_icon\']}</td>
    <td class=\'tablelight\'><a href=\'{\$this->self}?a=topic&amp;t={\$row[\'topic_id\']}\'>{\$row[\'topic_title\']}</a> {\$Pages}{\$row[\'topic_description\']}</td>
    <td class=\'tabledark\' style=\'text-align:center\'>{\$row[\'topic_starter\']}</td>
    <td class=\'tablelight\' style=\'text-align:center\'>{\$row[\'topic_replies\']}</td>
    <td class=\'tablelight\' style=\'text-align:center\'>{\$row[\'topic_views\']}</td>
    <td class=\'tabledark\'>
      <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\'>
        <tr>
          <td><a href=\'{\$this->self}?a=topic&amp;t={\$row[\'topic_id\']}{\$jump}\'>
            <img src=\'./skins/{\$this->skin}/images/arrow.png\' title=\'{\$this->lang->forum_jump}\' alt=\'{\$this->lang->forum_jump}\' /></a> &nbsp;
          </td>
          <td>{\$this->lang->forum_by} \$last_poster<br />{\$row[\'topic_edited\']}</td>
        </tr>
      </table>
    </td>
  </tr>
', 'Forum Topics', 'Format the default look of a given forum topic.', 1)";
$queries['FORUM_TOPIC_PINNED'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'forum', 'FORUM_TOPIC_PINNED', '
  <tr>
    <td class=\'tablelight\' style=\'text-align:center\'><img src=\'./skins/{\$this->skin}/images/{\$state}.png\' title=\'{\$this->lang->forum_topic}\' alt=\'{\$this->lang->forum_topic}\' /></td>
    <td class=\'tablelight\' style=\'text-align:center\'><img src=\'./skins/{\$this->skin}/images/pinned.png\' title=\'{\$this->lang->forum_pinned_topic}\' alt=\'{\$this->lang->forum_pinned_topic}\' /></td>
    <td class=\'tablelight\'><a href=\'{\$this->self}?a=topic&amp;t={\$row[\'topic_id\']}\'><b>{\$row[\'topic_title\']}</b></a> {\$Pages}{\$row[\'topic_description\']}</td>
    <td class=\'tabledark\' style=\'text-align:center\'>{\$row[\'topic_starter\']}</td>
    <td class=\'tablelight\' style=\'text-align:center\'>{\$row[\'topic_replies\']}</td>
    <td class=\'tablelight\' style=\'text-align:center\'>{\$row[\'topic_views\']}</td>
    <td class=\'tabledark\'>
      <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\'>
        <tr>
          <td><a href=\'{\$this->self}?a=topic&amp;t={\$row[\'topic_id\']}{\$jump}\'>
            <img src=\'./skins/{\$this->skin}/images/arrow.png\' title=\'{\$this->lang->forum_jump}\' alt=\'{\$this->lang->forum_jump}\' /></a> &nbsp;
          </td>
          <td>{\$this->lang->forum_by} \$last_poster<br />{\$row[\'topic_edited\']}</td>
        </tr>
      </table>
    </td>
  </tr>
', 'Pinned Topics', 'Format the look of the pinned topics in the forums view.', 2)";
$queries['HELP_DESCRIPTIVE_ENTRY'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'help', 'HELP_DESCRIPTIVE_ENTRY', '
{\$this->table}
  <tr>
    <td class=\'header\'>
      <a id=\'h{\$ar[\'help_id\']}\'><b>{\$ar[\'help_title\']}</b></a>
    </td>
  </tr>
  <tr>
    <td class=\'tablelight\'>
     {\$ar[\'help_article\']}
    </td>
  </tr>
{\$this->etable}

<p></p>
', 'Descriptive Entry', 'The actual help entry\'s view.', 1)";
$queries['HELP_FULL'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'help', 'HELP_FULL', '
{\$this->table}
  <tr>
    <td class=\'header\'>
      {\$this->lang->help_available_files}
    </td>
  </tr>
  <tr>
    <td class=\'tablelight\'>
      <ol>
        {\$top}
      </ol>
    </td>
  </tr>
{\$this->etable}

<p></p>

{\$desc}
', 'Help Screen Layout', 'The entire layout of the help screen and formatting.', 0)";
$queries['HELP_SIMPLE_ENTRY'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'help', 'HELP_SIMPLE_ENTRY', '<li><a href=\'{\$this->self}?a=help#h{\$ar[\'help_id\']}\'>{\$ar[\'help_title\']}</a></li>', 'Simple Entry', 'The entry style for the listing of articles with links', 2)";
$queries['LOGIN_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'login', 'LOGIN_MAIN', '
<form action=\'{\$this->self}?a=login&amp;s=on\' method=\'post\'>
{\$this->table}
  <tr>
    <td class=\'header\' colspan=\'2\'>{\$this->lang->login_header}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->login_user}</td>
    <td class=\'tablelight\'>
      <input class=\'input\' type=\'text\' name=\'user\' size=\'30\' tabindex=\'1\' />
    </td>
  </tr>
  <tr>
    <td class=\'tabledark\'>
      {\$this->lang->login_pass}<br />
      <a href=\'{\$this->self}?a=login&amp;s=pass\'>{\$this->lang->login_forgot_pass}</a>
    </td>
    <td class=\'tabledark\'>
      <input class=\'input\' type=\'password\' name=\'pass\' size=\'30\' tabindex=\'2\' />
    </td>
  </tr>
  <tr>
    <td align=\'center\' colspan=\'2\' class=\'footer\'>
      <input type=\'hidden\' name=\'request_uri\' value=\'\$request_uri\' />
      <input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' tabindex=\'3\' />
    </td>
  </tr>
{\$this->etable}
</form>
', 'Login Form', 'Format the look of the login form.', 0)";
$queries['LOGIN_PASS'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'login', 'LOGIN_PASS', '
<form action=\'{\$this->self}?a=login&amp;s=pass\' method=\'post\'>
{\$this->table}
  <tr>
    <td class=\'header\' colspan=\'2\'>{\$this->lang->login_pass_reset}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->login_user}</td>
    <td class=\'tablelight\'>
      <input class=\'input\' type=\'text\' name=\'user\' size=\'30\' />
    </td>
  </tr>
  <tr>
    <td align=\'center\' colspan=\'2\' class=\'footer\'>
      <input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' />
    </td>
  </tr>
{\$this->etable}
</form>
', 'Reset Password', 'The forgotten password form', 1)";
$queries['MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Main', 'MAIN', '
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html xmlns=\'http://www.w3.org/1999/xhtml\' xml:lang=\'{\$qsf->user[\'user_language\']}\' dir=\'{\$qsf->lang->direction}\'>
<head>
<meta http-equiv=\'Content-Type\' content=\'application/xhtml+xml; charset={\$qsf->lang->charset}\' />

<title>{\$title}</title>
<link rel=\'stylesheet\' type=\'text/css\' href=\'./skins/{\$qsf->skin}/styles.css\' />
<IF \$qsf->sets[\'rss_feed_title\'] != null>
<link rel=\'alternate\' title=\'{\$qsf->sets[\'rss_feed_title\']}\' href=\'{\$qsf->sets[\'loc_of_board\']}{$this->mainfile}?a=rssfeed\' type=\'application/rss+xml\' />
</IF>

<!--[if lt IE 7]>
<script src=\'./skins/{\$qsf->skin}/pngfix.js\' type=\'text/javascript\'></script>
<![endif]-->

</head>
<body>

<div style=\'text-align:center\'>
  <a id=\'top\'></a>
  <img src=\'./skins/{\$qsf->skin}/images/logo.png\' alt=\'{\$qsf->name}\' /><br /><br />
</div>

{\$userheader}

{\$reminder}

{\$quicksilverforums}

<p class=\'adminstat\'>
  {\$servertime}<br />
  <b>{\$time_exec}</b> {\$qsf->lang->seconds} - 
  <b>{\$qsf->db->querycount}</b> {\$qsf->lang->main_queries} - 
  <b>{\$server_load}</b> {\$qsf->lang->main_load}
  [<a href=\"{\$qsf->self}?{\$qsf->query}&amp;debug=1\" class=\'small\'>{\$qsf->lang->main_full}</a>]
</p>

{\$qsf->table}
 <tr>
  <td align=\'center\'>
   <a href=\"http://validator.w3.org/check?uri=referer\" onclick=\"window.open(this.href,\'_blank\');return false;\">
    <img style=\'width:88px;height:31px\' src=\'./skins/{\$qsf->skin}/images/valid-xhtml11.png\' alt=\'Valid XHTML 1.1!\' title=\'Valid XHTML 1.1!\' />
   </a>
   <a href=\"http://jigsaw.w3.org/css-validator/check/referer\" onclick=\"window.open(this.href,\'_blank\');return false;\">
    <img style=\'width:88px;height:31px\' src=\'./skins/{\$qsf->skin}/images/valid-css.png\' alt=\'Valid CSS!\' title=\'Valid CSS!\' />
   </a>
  </td>
 </tr>
{\$qsf->etable}

</body>
</html>
', 'Universal Template', 'Change the header and footer that will appear on every page', 0)";
$queries['MAIN_COPYRIGHT'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Main', 'MAIN_COPYRIGHT', '
<p class=\'copyright\'>
{\$qsf->lang->powered} <a href=\'http://www.quicksilverforums.com\' class=\'small\'><b>{\$qsf->name}</b></a> [{\$qsf->version}] &copy; 2005 The {\$qsf->name} Development Team<br />
{\$qsf->lang->based_on} <a href=\'http://www.mercuryboard.com\' class=\'small\'><b>MercuryBoard</b></a> &copy; 2001-2005 The Mercury Development Team
</p>

<p><a id=\'bottom\'></a></p>
', 'Copyright', 'Format the look of the copyright on the board.<br><br><b>Warning: Modification to anything other than the style of this copyright will result in a violation of your terms of service</b>', 6)";
$queries['MAIN_ETABLE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Main', 'MAIN_ETABLE', '</table>', 'Table End', 'Edit the end of all html that uses \$this->etable', 5)";
$queries['MAIN_HEADER_GUEST'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Main', 'MAIN_HEADER_GUEST', '
{\$qsf->table}
  <tr>
    <td style=\'width:30%; white-space:nowrap\'>
      {\$qsf->lang->main_welcome_guest} ( <a href=\'{\$qsf->self}?a=login&amp;s=on\'>{\$qsf->lang->main_login}</a> | <a href=\'{\$qsf->self}?a=register\'>{\$qsf->lang->main_register}</a> )
    </td>
    <td>{\$qsf->tree}</td>
  </tr>
{\$qsf->etable}

{\$qsf->table}
  <tr>
    <td class=\'nav\' style=\'cursor:pointer; width:33%; text-align:center\' onclick=\"javascript:self.location.href=\'{\$qsf->self}?a=members\'\" onmouseover=\"this.className=\'navover\';\" onmouseout=\"this.className=\'nav\';\"><a href=\'{\$qsf->self}?a=members\' class=\'nav\'>{\$qsf->lang->main_members}</a></td>
    <td class=\'nav\' style=\'cursor:pointer; width:33%; text-align:center\' onclick=\"javascript:self.location.href=\'{\$qsf->self}?a=search{\$searchlink}\'\" onmouseover=\"this.className=\'navover\';\" onmouseout=\"this.className=\'nav\';\"><a href=\'{\$qsf->self}?a=search{\$searchlink}\' class=\'nav\'>{\$qsf->lang->main_search}</a></td>
    <td class=\'nav\' style=\'cursor:pointer; width:33%; text-align:center\' onclick=\"javascript:self.location.href=\'{\$qsf->self}?a=help\'\" onmouseover=\"this.className=\'navover\';\" onmouseout=\"this.className=\'nav\';\"><a href=\'{\$qsf->self}?a=help\' class=\'nav\'>{\$qsf->lang->main_help}</a></td>
  </tr>
{\$qsf->etable}

<p></p>
', 'Welcome Message - Not logged in', 'Edit the menu bar for unregistered and logged out users', 3)";
$queries['MAIN_HEADER_MEMBER'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Main', 'MAIN_HEADER_MEMBER', '
{\$qsf->table}
  <tr>
    <td style=\'width:30%; white-space:nowrap\'>
      {\$qsf->lang->main_welcome} <a href=\'{\$qsf->self}?a=profile&amp;w={\$qsf->user[\'user_id\']}\'><b>{\$qsf->user[\'user_name\']}</b></a>! ( <a href=\'{\$qsf->self}?a=recent\' title=\'{\$qsf->lang->main_recent1}\'>{\$qsf->lang->main_recent}</a> | <a href=\'{\$qsf->self}?s=mark\' title=\'{\$qsf->lang->main_mark1}\'>{\$qsf->lang->main_mark}</a> | <a href=\'{\$qsf->self}?a=login&amp;s=off\'>{\$qsf->lang->main_logout}</a><IF \$qsf->perms->auth(\'is_admin\')> | <a href=\'./admincp/index.php\'>{\$qsf->lang->main_admincp}</a></IF> )
    </td>
    <td>{\$qsf->tree}</td>
  </tr>
{\$qsf->etable}

{\$qsf->table}
  <tr>
    <td class=\'nav\' style=\'cursor:pointer; width:20%; text-align:center\' onclick=\"window.open(\'{\$qsf->self}?a=members\',\'_self\');return false;\" onmouseover=\"this.className=\'navover\';\" onmouseout=\"this.className=\'nav\';\"><a href=\'{\$qsf->self}?a=members\' class=\'nav\'>{\$qsf->lang->main_members}</a></td>
    <td class=\'nav\' style=\'cursor:pointer; width:20%; text-align:center\' onclick=\"window.open(\'{\$qsf->self}?a=search{\$searchlink}\',\'_self\');return false;\" onmouseover=\"this.className=\'navover\';\" onmouseout=\"this.className=\'nav\';\"><a href=\'{\$qsf->self}?a=search{\$searchlink}\' class=\'nav\'>{\$qsf->lang->main_search}</a></td>
    <td class=\'nav\' style=\'cursor:pointer; width:20%; text-align:center\' onclick=\"window.open(\'{\$qsf->self}?a=help\',\'_self\');return false;\" onmouseover=\"this.className=\'navover\';\" onmouseout=\"this.className=\'nav\';\"><a href=\'{\$qsf->self}?a=help\' class=\'nav\'>{\$qsf->lang->main_help}</a></td>
    <td class=\'nav\' style=\'cursor:pointer; width:20%; text-align:center\' onclick=\"window.open(\'{\$qsf->self}?a=cp\',\'_self\');return false;\" onmouseover=\"this.className=\'navover\';\" onmouseout=\"this.className=\'nav\';\"><a href=\'{\$qsf->self}?a=cp\' class=\'nav\'>{\$qsf->lang->main_cp}</a></td>
    <td class=\'nav\' style=\'cursor:pointer; width:20%; text-align:center\' onclick=\"window.open(\'{\$qsf->self}?a=pm\',\'_self\');return false;\" onmouseover=\"this.className=\'navover\';\" onmouseout=\"this.className=\'nav\';\"><a href=\'{\$qsf->self}?a=pm\' class=\'<MODLET messagelink(class)>\'>{\$qsf->lang->main_messenger}<MODLET messagelink(text)></a></td>
  </tr>
{\$qsf->etable}

<p></p>
', 'Welcome Message - Logged In', 'Edit the menu bar for logged in members', 2)";
$queries['MAIN_MESSAGE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Main', 'MAIN_MESSAGE', '
<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'60%\' style=\'margin-left:20%; margin-right:20%;\'>
<tr><td>
{\$this->table}
  <tr>
    <td class=\'header\' align=\'center\'>{\$title}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' align=\'center\' style=\'padding:20px\'>{\$message}</td>
  </tr>
{\$this->etable}
</td></tr>
</table>
', 'Generic Message', 'Edit the html that displays generic messages throughout the board', 1)";
$queries['MAIN_REMINDER'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Main', 'MAIN_REMINDER', '<br /><center><b><font color=\'#FF0000\'>{\$qsf->lang->main_reminder}</font><br />{\$reminder_text}</b></center><br /><br />', 'Reminder', 'Used for important reminders for certain users, such as explaining to members awaiting activation how to enable their accounts.', 7)";
$queries['MAIN_TABLE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'Main', 'MAIN_TABLE', '<table cellpadding=\'5\' cellspacing=\'0\' class=\'stand\'>', 'Table Start', 'Edit the beginning of all html that uses \$this->table', 4)";
$queries['MEMBERS_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'members', 'MEMBERS_MAIN', '
{\$this->table}
  <tr>
    <td>{\$PageNums}</td>
    <td align=\'right\'>
      <a href=\'{\$this->self}?a=members&amp;order={\$order}&amp;asc={\$lasc}\'>[{\$this->lang->members_all}]</a>
      <a href=\'{\$this->self}?a=members&amp;l=a&amp;order={\$order}&amp;asc={\$lasc}\'>a</a>
      <a href=\'{\$this->self}?a=members&amp;l=b&amp;order={\$order}&amp;asc={\$lasc}\'>b</a>
      <a href=\'{\$this->self}?a=members&amp;l=c&amp;order={\$order}&amp;asc={\$lasc}\'>c</a>
      <a href=\'{\$this->self}?a=members&amp;l=d&amp;order={\$order}&amp;asc={\$lasc}\'>d</a>
      <a href=\'{\$this->self}?a=members&amp;l=e&amp;order={\$order}&amp;asc={\$lasc}\'>e</a>
      <a href=\'{\$this->self}?a=members&amp;l=f&amp;order={\$order}&amp;asc={\$lasc}\'>f</a>
      <a href=\'{\$this->self}?a=members&amp;l=g&amp;order={\$order}&amp;asc={\$lasc}\'>g</a>
      <a href=\'{\$this->self}?a=members&amp;l=h&amp;order={\$order}&amp;asc={\$lasc}\'>h</a>
      <a href=\'{\$this->self}?a=members&amp;l=i&amp;order={\$order}&amp;asc={\$lasc}\'>i</a>
      <a href=\'{\$this->self}?a=members&amp;l=j&amp;order={\$order}&amp;asc={\$lasc}\'>j</a>
      <a href=\'{\$this->self}?a=members&amp;l=k&amp;order={\$order}&amp;asc={\$lasc}\'>k</a>
      <a href=\'{\$this->self}?a=members&amp;l=l&amp;order={\$order}&amp;asc={\$lasc}\'>l</a>
      <a href=\'{\$this->self}?a=members&amp;l=m&amp;order={\$order}&amp;asc={\$lasc}\'>m</a>
      <a href=\'{\$this->self}?a=members&amp;l=n&amp;order={\$order}&amp;asc={\$lasc}\'>n</a>
      <a href=\'{\$this->self}?a=members&amp;l=o&amp;order={\$order}&amp;asc={\$lasc}\'>o</a>
      <a href=\'{\$this->self}?a=members&amp;l=p&amp;order={\$order}&amp;asc={\$lasc}\'>p</a>
      <a href=\'{\$this->self}?a=members&amp;l=q&amp;order={\$order}&amp;asc={\$lasc}\'>q</a>
      <a href=\'{\$this->self}?a=members&amp;l=r&amp;order={\$order}&amp;asc={\$lasc}\'>r</a>
      <a href=\'{\$this->self}?a=members&amp;l=s&amp;order={\$order}&amp;asc={\$lasc}\'>s</a>
      <a href=\'{\$this->self}?a=members&amp;l=t&amp;order={\$order}&amp;asc={\$lasc}\'>t</a>
      <a href=\'{\$this->self}?a=members&amp;l=u&amp;order={\$order}&amp;asc={\$lasc}\'>u</a>
      <a href=\'{\$this->self}?a=members&amp;l=v&amp;order={\$order}&amp;asc={\$lasc}\'>v</a>
      <a href=\'{\$this->self}?a=members&amp;l=w&amp;order={\$order}&amp;asc={\$lasc}\'>w</a>
      <a href=\'{\$this->self}?a=members&amp;l=x&amp;order={\$order}&amp;asc={\$lasc}\'>x</a>
      <a href=\'{\$this->self}?a=members&amp;l=y&amp;order={\$order}&amp;asc={\$lasc}\'>y</a>
      <a href=\'{\$this->self}?a=members&amp;l=z&amp;order={\$order}&amp;asc={\$lasc}\'>z</a>
    </td>
  </tr>
{\$this->etable}

{\$this->table}
  <tr>
    <td class=\'header\' align=\'center\'><a href=\"{\$this->self}?a=members&amp;l={\$l}&amp;order=member&amp;asc={\$asc}\">{\$this->lang->members_member}</a></td>
    <td class=\'header\' align=\'center\'>{\$this->lang->members_email}</td>
    <td class=\'header\' align=\'center\'>{\$this->lang->members_pm}</td>
    <td class=\'header\' align=\'center\'><a href=\"{\$this->self}?a=members&amp;l={\$l}&amp;order=posts&amp;asc={\$asc}\">{\$this->lang->members_posts}</a></td>
    <td class=\'header\' align=\'center\'><a href=\"{\$this->self}?a=members&amp;l={\$l}&amp;order=joined&amp;asc={\$asc}\">{\$this->lang->members_joined}</a></td>
    <td class=\'header\' align=\'center\'>{\$this->lang->members_title}</td>
    <td class=\'header\' align=\'center\'><a href=\"{\$this->self}?a=members&amp;l={\$l}&amp;order=group&amp;asc={\$asc}\">{\$this->lang->members_group}</a></td>
    <td class=\'header\' align=\'center\'>{\$this->lang->members_www}</td>
  </tr>
{\$Members}
  <tr>
    <td colspan=\'8\' class=\'footer\'>&nbsp;</td>
  </tr>
{\$this->etable}

{\$this->table}
  <tr>
    <td>{\$PageNums}</td>
  </tr>
{\$this->etable}
', 'Memberlist', 'Change the look of the main area of the memberlist.', 0)";
$queries['MEMBERS_MEMBER'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'members', 'MEMBERS_MEMBER', '
  <tr>
    <td class=\'{\$class}\' align=\'center\'><a href=\'{\$this->self}?a=profile&amp;w={\$member[\'user_id\']}\'>{\$member[\'user_name\']}</a></td>
    <td class=\'{\$class}\' align=\'center\'>{\$member[\'user_email\']}</td>
    <td class=\'{\$class}\' align=\'center\'>{\$member[\'user_pm\']}</td>
    <td class=\'{\$class}\' align=\'center\'>{\$member[\'user_posts\']}</td>
    <td class=\'{\$class}\' align=\'center\'>{\$member[\'user_joined\']}</td>
    <td class=\'{\$class}\' align=\'center\'>{\$member[\'user_title\']}</td>
    <td class=\'{\$class}\' align=\'center\'>{\$member[\'group_name\']}</td>
    <td class=\'{\$class}\' align=\'center\'>{\$member[\'user_homepage\']}</td>
  </tr>
', 'Memberlist Entry', 'Format the look of a memberlist entry.', 1)";
$queries['MOD_EDIT_GLOBAL'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'mod', 'MOD_EDIT_GLOBAL', '
  <tr>
    <td class=\'tablelight\'>{\$this->lang->mod_label_global}</td>
    <td class=\'tablelight\'><input type=\'checkbox\' name=\'global_topic\'\$checkGlob /></td>
  </tr>
', 'Edit Topic, Global', ' Displayed only to those able to make a topic global', 3)";
$queries['MOD_EDIT_POST'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'mod', 'MOD_EDIT_POST', '
<form action=\'{\$this->self}?a=mod&amp;s=edit_post&amp;p={\$this->get[\'p\']}\' method=\'post\' name=\'mbpost\'>
{\$this->table}
  <tr>
    <td colspan=\'2\' class=\'header\'>{\$this->lang->mod_label_post_edit}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' valign=\'top\'><b>Post Icon</b></td>
    <td class=\'tablelight\'>
      <table border=\'0\' cellpadding=\'0\' cellspacing=\'5\'>
        <tr>
          {\$msg_icons}
        </tr>
      </table>
    </td>
  </tr>
  {\$post_box}
  <tr>
    <td class=\'tabledark\' valign=\'top\'><b>{\$this->lang->mod_label_options}</b></td>
    <td class=\'tabledark\'>
      <input type=\'checkbox\' name=\'emoticons\' id=\'emoticons\' value=\'1\'{\$emot_check} /> <label for=\'emoticons\'>{\$this->lang->mod_label_emoticon}</label><br />
      <input type=\'checkbox\' name=\'code\' id=\'code\' value=\'1\'{\$code_check} /> <label for=\'code\'>{\$this->lang->mod_label_mbcode}</label>
    </td>
  </tr>
  <tr>
    <td colspan=\'2\' align=\'center\' class=\'footer\'><input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' /></td>
  </tr>
{\$this->etable}
</form>
', 'Edit Post Form', 'Edit the form that edits an existing post', 1)";
$queries['MOD_EDIT_TOPIC'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'mod', 'MOD_EDIT_TOPIC', '
<form action=\'{\$this->self}?a=mod&amp;s=edit_topic&amp;t={\$this->get[\'t\']}\' method=\'post\'>
{\$this->table}
  <tr>
    <td class=\'header\' colspan=\'2\'>{\$this->lang->mod_label_topic_edit}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->mod_label_title}</td>
    <td class=\'tablelight\' style=\'width:70%\'>
      <input type=\'text\' size=\'40\' name=\'title\' value=\"{\$topic[\'topic_title\']}\" class=\'input\' />
    </td>
  </tr>
  <tr>
    <td class=\'tabledark\'>{\$this->lang->mod_label_description}</td>
    <td class=\'tabledark\'>
      <input type=\'text\' size=\'40\' name=\'desc\' value=\'{\$topic[\'topic_description\']}\' class=\'input\' />
    </td>
  </tr>
  \$global_topic
  <tr>
    <td class=\'footer\' colspan=\'2\' align=\'center\'>
      <input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' />
    </td>
  </tr>
{\$this->etable}
</form>
', 'Edit Topic', 'Change the view of the edit topic screen', 0)";
$queries['MOD_MOVE_TOPIC'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'mod', 'MOD_MOVE_TOPIC', '
<form action=\'{\$this->self}?a=mod&amp;s=move&amp;t={\$this->get[\'t\']}\' method=\'post\'>
{\$this->table}
  <tr>
    <td class=\'header\' colspan=\'2\'>{\$this->lang->mod_label_topic_move}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->mod_label_move_to}</td>
    <td class=\'tabledark\'>
      <select size=\'1\' name=\'newforum\'>
        \$forumlist
      </select>
    </td>
  </tr>
  <tr>
    <td class=\'tablelight\'>{\$this->lang->mod_label_options}</td>
    <td class=\'tabledark\'>
      <input type=\'radio\' name=\'operation\' value=\'delete\' id=\'delete\' checked=\'checked\' /> <label for=\'delete\'>{\$this->lang->mod_label_topic_move_complete}</label><br />
      <input type=\'radio\' name=\'operation\' value=\'lock\' id=\'move\' /> <label for=\'move\'>{\$this->lang->mod_label_topic_move_link}</label>
    </td>
  </tr>
  <tr>
    <td class=\'footer\' colspan=\'2\' align=\'center\'><input type=\'submit\' name=\'submit\' value=\'{\$this->lang->submit}\' /></td>
  </tr>
{\$this->etable}
</form>
', 'Move', 'The form that moderators use to move a topic', 2)";
$queries['MOD_SPLIT_SELECT'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'mod', 'MOD_SPLIT_SELECT', '
<select name=\'posttarget[{\$post[\'post_id\']}]\' class=\'input\'>
  <option value=\'0\' selected>{\$this->lang->topic_split_keep}</option>
  <option value=\'1\'>{\$this->lang->topic_split_move} (1)</option>
  <option value=\'2\'>{\$this->lang->topic_split_move} (2)</option>
  <option value=\'3\'>{\$this->lang->topic_split_move} (3)</option>
  <option value=\'4\'>{\$this->lang->topic_split_move} (4)</option>
</select><br />
<input name=\'submit\' type=\'submit\' value=\'{\$this->lang->topic_split_finish}\' />
<br /><br />
', 'Topic Split Form', 'An interface to split a topic off a post', 4)";
$queries['MOD_SPLIT_TOPIC'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'mod', 'MOD_SPLIT_TOPIC', '
<form action=\'{\$this->self}?a=mod&amp;s=split&amp;t={\$this->get[\'t\']}\' method=\'post\'>
<input type=\'hidden\' name=\'posttarget\' value=\'{\$posttarget}\' />
{\$this->table}
  <tr>
    <td class=\'header\' colspan=\'2\'>{\$this->lang->mod_label_topic_split}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->mod_label_title_original}</td>
    <td class=\'tabledark\'>
      {\$topic[\'topic_title\']}
    </td>
  </tr>
  <tr style=\'{\$display[1]}\'>
    <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->mod_label_title_split} 1</td>
    <td class=\'tabledark\'>
      <input type=\'text\' name=\'topic[1]\' class=\'input\' size=\'60\' maxlength=\'75\' />
    </td>
  </tr>
  <tr style=\'{\$display[2]}\'>
    <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->mod_label_title_split} 2</td>
    <td class=\'tabledark\'>
      <input type=\'text\' name=\'topic[2]\' class=\'input\' size=\'60\' maxlength=\'75\' />
    </td>
  </tr>
  <tr style=\'{\$display[3]}\'>
    <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->mod_label_title_split} 3</td>
    <td class=\'tabledark\'>
      <input type=\'text\' name=\'topic[3]\' class=\'input\' size=\'60\' maxlength=\'75\' />
    </td>
  </tr>
  <tr style=\'{\$display[4]}\'>
    <td class=\'tablelight\' style=\'width:30%\'>{\$this->lang->mod_label_title_split} 4</td>
    <td class=\'tabledark\'>
      <input type=\'text\' name=\'topic[4]\' class=\'input\' size=\'60\' maxlength=\'75\' />
    </td>
  </tr>
  <tr>
    <td class=\'footer\' colspan=\'2\' align=\'center\'><input type=\'submit\' name=\'submitsplit\' value=\'{\$this->lang->submit}\' /></td>
  </tr>
{\$this->etable}
</form>
', 'Topic Split Titles', 'Used to assign titles to split topics', 5)";
$queries['PM_FOLDER'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'pm', 'PM_FOLDER', '
<script type=\'text/javascript\'>
<!--
function get_folder(select)
{
  self.location.href = \'{\$this->self}?a=pm&f=\' + select.value;
}
//-->
</script>

{\$this->table}
  <tr>
    <td align=\'right\'>
      <a href=\'{\$this->self}?a=pm&amp;s=send\'><img src=\'./skins/{\$this->skin}/images/new_message.png\' title=\'{\$this->lang->pm_sendamsg}\' alt=\'{\$this->lang->pm_sendamsg}\' /></a>
      <a href=\'{\$this->self}?a=pm&amp;s=clear&amp;f={\$this->get[\'f\']}\'><img src=\'./skins/{\$this->skin}/images/delete_message.png\' title=\'{\$this->lang->pm_delallmsg}\' alt=\'{\$this->lang->pm_delallmsg}\' /></a>
    </td>
  </tr>
{\$this->etable}

<form action=\'\$this->self?a=pm\' method=\'post\'>
{\$this->table}
  <tr>
    <td class=\'header\' colspan=\'5\'>{\$foldername}</td>
  </tr>
  <tr>
    <td class=\'subheader\' style=\'width:5%\'>{\$this->lang->pm_delete}</td>
    <td class=\'subheader\' style=\'width:5%\'>&nbsp;</td>
    <td class=\'subheader\' style=\'width:35%\'>{\$this->lang->pm_title}</td>
    <td class=\'subheader\' style=\'width:20%\'>{\$this->lang->pm_from}</td>
    <td class=\'subheader\' style=\'width:35%\'>{\$this->lang->pm_sendon}</td>
  </tr>
  {\$messages}
  <tr>
    <td colspan=\'5\' class=\'footer\' align=\'center\'><input type=\'submit\' name=\'submit\' value=\'{\$this->lang->pm_delete_selected}\' /></td>
  </tr>
{\$this->etable}
</form>

{\$this->table}
  <tr>
    <td>
      <select class=\'select\' onchange=\'javascript:get_folder(this)\'>
        {\$folderjump}
      </select>
    </td>
    <td align=\'right\'>
      <a href=\'{\$this->self}?a=pm&amp;s=send\'><img src=\'./skins/{\$this->skin}/images/new_message.png\' title=\'{\$this->lang->pm_sendamsg}\' alt=\'{\$this->lang->pm_sendamsg}\' /></a>
    </td>
  </tr>
{\$this->etable}
', 'Folder', 'A view of the personal messages list', 1)";
$queries['PM_FOLDER_MESSAGE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'pm', 'PM_FOLDER_MESSAGE', '
  <tr>
    <td class=\'tablelight\' align=\'center\'><input type=\'checkbox\' name=\'delete[{\$pm[\'pm_id\']}]\' /></td>
    <td class=\'tablelight\' align=\'center\'><img src=\'./skins/\$this->skin/images/{\$pm[\'pm_read\']}open.png\' alt=\'{\$this->lang->pm_pm}\' /></td>
    <td class=\'tablelight\'><a href=\'{\$this->self}?a=pm&amp;s=view&amp;m={\$pm[\'pm_id\']}\' title=\'{\$preview}\'>{\$pm[\'pm_title\']}</a></td>
    <td class=\'tablelight\'><a href=\'{\$this->self}?a=profile&amp;w={\$pm[\'pm_from\']}\'>{\$pm[\'user_name\']}</a></td>
    <td class=\'tablelight\'>{\$pm[\'pm_time\']}</td>
  </tr>
', 'Message', 'A message entry in the list', 2)";
$queries['PM_NO_MESSAGES'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'pm', 'PM_NO_MESSAGES', '<tr><td colspan=\'5\' class=\'tablelight\' align=\'center\'><br />{\$this->lang->pm_nomsg}<br /><br /></td></tr>', 'No Messages', 'To display when there are no messages', 5)";
$queries['PM_PREVIEW'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'pm', 'PM_PREVIEW', '
{\$this->table}
<tr>
  <td class=\"header\">{\$preview_title}</td></tr>
<tr>
  <td class=\'tablelight\'>
    <table border=\'0\' width=\'100%\' cellpadding=\'4\' cellspacing=\'0\'>
      <tr>
        <td class=\'post\' valign=\'top\'>
          {\$preview_text}
        </td>
      </tr>
    </table>
  </td>
</tr>
{\$this->etable}
<br />
', 'PM Preview', 'A private message being previewed with formatting', 6)";
$queries['PM_SEND'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'pm', 'PM_SEND', '
{\$preview}
<form action=\'{\$this->self}?a=pm&amp;s=send\' method=\'post\'>
{\$this->table}
  <tr>
    <td class=\'header\' colspan=\'2\'>{\$this->lang->pm_sendingpm}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' style=\'width:30%\'><b>{\$this->lang->pm_to}</b><br />{\$this->lang->pm_multiple}</td>
    <td class=\'tablelight\'><input class=\'input\' name=\'to\' size=\'60\' value=\'{\$to}\' /></td>
  </tr>
  <tr>
    <td class=\'tabledark\'><b>{\$this->lang->pm_title}</b></td>
    <td class=\'tabledark\'><input class=\'input\' name=\'title\' size=\'60\' value=\'{\$title}\' /></td>
  </tr>
  <tr>
    <td class=\'tablelight\' valign=\'top\'><b>{\$this->lang->pm_msgtext}</b></td>
    <td class=\'tablelight\'><textarea class=\'input\' name=\'message\' cols=\'60\' rows=\'12\'>{\$msg}</textarea></td>
  </tr>
  <tr>
    <td colspan=\'2\' class=\'footer\' align=\'center\'>
    <input name=\'submit\' type=\'submit\' value=\'{\$this->lang->pm_send}\' />
    <input type=\"submit\" name=\"preview\" value=\"{\$this->lang->pm_preview}\" /></td>
  </tr>
{\$this->etable}
</form>
', 'Send A PM Form', 'The form to send a new personal message', 4)";
$queries['PM_VIEW'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'pm', 'PM_VIEW', '
{\$this->table}
  <tr>
    <td align=\'right\'>
      <a href=\'{\$this->self}?a=pm&amp;s=send&amp;re={\$pm[\'pm_id\']}\'><img src=\'./skins/{\$this->skin}/images/message_reply.png\' title=\'{\$this->lang->pm_reply}\' alt=\'{\$this->lang->pm_reply}\' /></a>
      <a href=\'{\$this->self}?a=pm&amp;s=send\'><img src=\'./skins/{\$this->skin}/images/new_message.png\' title=\'{\$this->lang->pm_sendamsg}\' alt=\'{\$this->lang->pm_sendamsg}\' /></a>
      <a href=\'{\$this->self}?a=pm&amp;s=delete&amp;m={\$pm[\'pm_id\']}\'><img src=\'./skins/{\$this->skin}/images/delete_message.png\' title=\'{\$this->lang->pm_delete}\' alt=\'{\$this->lang->pm_delete}\' /></a>
    </td>
  </tr>
{\$this->etable}

{\$this->table}
  <tr>
    <td colspan=\'2\' class=\'header\'>{\$pm[\'pm_title\']}</td>
  </tr>
<tr>
  <td class=\'tablelight\'>
    <table border=\'0\' width=\'100%\' cellpadding=\'4\' cellspacing=\'0\'>
      <tr>
        <td style=\'width:20%\' rowspan=\'3\' valign=\'top\'>
          <IF \$online><img src=\'./skins/{\$this->skin}/images/online.png\' alt=\'{\$this->lang->pm_online}\' title=\'{\$this->lang->pm_online}\' /></IF>
          <IF !\$online><img src=\'./skins/{\$this->skin}/images/offline.png\' alt=\'{\$this->lang->pm_offline}\' title=\'{\$this->lang->pm_offline}\' /></IF>
          <b><a href=\'{\$this->self}?a=profile&amp;w={\$pm[\'pm_from\']}\'>{\$pm[\'user_name\']}</a><br />
          {\$pm[\'user_title\']}</b><br /><br />
          {\$pm[\'user_avatar\']}
          {\$this->lang->pm_group}: {\$pm[\'group_name\']}<br />
          {\$this->lang->pm_posts}: {\$pm[\'user_posts\']}<br />
          {\$this->lang->pm_joined}: {\$pm[\'user_joined\']}<br /><br />
        </td>
      </tr>
      <tr>
        <td class=\'post\' valign=\'top\'><IF \$recipients>{\$this->lang->pm_recipients}: {\$recipients}<hr /></IF>{\$pm[\'pm_message\']}</td>
      </tr>
      <tr>
        <td valign=\'bottom\'>
          <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>
            <tr>
              <td class=\'signature\'>{\$pm[\'user_signature\']}<hr /></td>
            </tr>
            <tr>
              <td>{\$this->lang->pm_sendon} {\$pm[\'pm_time\']}</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\'footer\'>&nbsp;</td>
</tr>
{\$this->etable}

{\$this->table}
  <tr>
    <td align=\'right\'>
      <a href=\'{\$this->self}?a=pm&amp;s=send&amp;re={\$pm[\'pm_id\']}\'><img src=\'./skins/{\$this->skin}/images/message_reply.png\' title=\'{\$this->lang->pm_reply}\' alt=\'{\$this->lang->pm_reply}\' /></a>
      <a href=\'{\$this->self}?a=pm&amp;s=send\'><img src=\'./skins/{\$this->skin}/images/new_message.png\' title=\'{\$this->lang->pm_sendamsg}\' alt=\'{\$this->lang->pm_sendamsg}\' /></a>
      <a href=\'{\$this->self}?a=pm&amp;s=delete&amp;m={\$pm[\'pm_id\']}\'><img src=\'./skins/{\$this->skin}/images/delete_message.png\' title=\'{\$this->lang->pm_delete}\' alt=\'{\$this->lang->pm_delete}\' /></a>
    </td>
  </tr>
{\$this->etable}
', 'PM View', 'A personal message', 3)";
$queries['POLL_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'poll', 'POLL_MAIN', '
<form action=\'{\$this->self}?a=post&amp;s=vote&amp;t={\$t}\' method=\'post\'>
{\$this->table}
  <tr>
    <td colspan=\'2\' class=\'header\' align=\'center\'>
      {\$title_html}
      (<a href=\'{\$this->self}?a=post&amp;s=results&amp;t={\$t}\'>{\$this->lang->topic_view}</a>)
    </td>
  </tr>
{\$pollopts}
  <tr>
    <td align=\'center\' colspan=\'2\' class=\'footer\'>
      <input type=\'submit\' name=\'submitvote\' value=\'{\$this->lang->topic_vote}\' />
    </td>
  </tr>
{\$this->etable}
</form>
', 'Polls', 'Format the look of a poll.', 0)";
$queries['POLL_OPTION'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'poll', 'POLL_OPTION', '
<tr>
  <td align=\'center\' style=\'width:5%\' class=\'tabledark\'>
    <input type=\'radio\' name=\'pollvote\' id=\'pollvote_\$i\' value=\'{\$i}\' />
  </td>
  <td class=\'tablelight\'><label for=\'pollvote_\$i\'>{\$option}</label></td>
</tr>
', 'Poll Options', 'Change the look of the poll options.', 1)";
$queries['POLL_RESULTS_ENTRY'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'poll', 'POLL_RESULTS_ENTRY', '
<tr>
  <td class=\'tablelight\' style=\'width:50%\'>{\$option}</td>
  <td class=\'tabledark\' style=\'width:50%\'><img src=\'skins/{\$this->skin}/images/vote_left.png\' width=\'6\' height=\'12\' alt=\'\' /><img src=\'skins/{\$this->skin}/images/vote_bar.png\' width=\'{\$width}\' height=\'12\' alt=\'\' /><img src=\'skins/{\$this->skin}/images/vote_right.png\' width=\'6\' height=\'12\' alt=\'\' /> &nbsp;{\$percent}% - \$votes</td>
</tr>
', 'Poll Results Entry', 'Change the appearance of a poll option in the view results screen', 3)";
$queries['POLL_RESULTS_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'poll', 'POLL_RESULTS_MAIN', '
{\$this->table}
<tr>
  <td align=\'center\' colspan=\'2\' class=\'header\'>{\$title_html} ({\$total_votes} {\$this->lang->topic_votes})</td>
</tr>
{\$out}
{\$this->etable}
', 'Poll Results Display', 'Format the look of the poll results.', 2)";
$queries['POST_ATTACH'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'post', 'POST_ATTACH', '
  <tr>
    <td class=\'tablelight\' valign=\'top\'><b>{\$this->lang->post_attach}</b><br />{\$this->lang->post_attach_disrupt}</td>
    <td class=\'tablelight\'>
      <input type=\'file\' name=\'attach_upload\' />
      <input type=\'submit\' name=\'attach\' value=\'{\$this->lang->post_attach_add}\' /> <b>\$upload_error</b>

      \$remove_box
    </td>
  </tr>
', 'Attachments', 'Displayed when the admin allows file attachments', 6)";
$queries['POST_ATTACH_REMOVE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'post', 'POST_ATTACH_REMOVE', '
      <br /><br />
      \$attached_data

      <select class=\'input\' name=\'attached\'>
        \$attached
      </select>
      <input type=\'submit\' name=\'detach\' value=\'{\$this->lang->post_attach_remove}\' />
', 'Attachments', 'Displayed when there are attachments', 7)";
$queries['POST_BOX_PLAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'post', 'POST_BOX_PLAIN', '
  <tr>
    <td class=\'tablelight\' style=\'width:30%\' valign=\'top\' align=\'center\'>
      <div style=\'text-align:left\'><b>{\$this->lang->post_msg}</b><br />[<a href=\'#\' onclick=\'return getLength()\'>{\$this->lang->post_length}</a>]<br /><br /><br /></div>

      <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\'>
      <tr><td>
      {\$this->table}
        <tr>
          <td colspan=\'{\$this->sets[\'clickable_per_row\']}\' class=\'tabledark\' align=\'center\' style=\'white-space:nowrap\'>
            <b>{\$this->lang->post_smiles}</b>
          </td>
        </tr>
        {\$clickable}
      {\$this->etable}
      </td></tr></table>

    </td>
    <td class=\'tablelight\'>
<script type=\'text/javascript\'>
<!--
function getLength(){
  var length = form[\"post\"].value.length;
  alert(\"{\$this->lang->post_mbcode_length}\");

  return false;
}

function insertSmiley(smiley) {
  insertCode(getText() + \' \' + smiley);
  return false;
}

function insertCode(code) {
  var el = form[\"post\"];
  if (window.getSelection) {
    if (el.selectionStart != el.selectionEnd) {
      el.value = el.value.substring(0, el.selectionStart) + code
              + el.value.substring(el.selectionEnd, el.value.length);
      el.selectionStart = el.value.length;
      el.selectionEnd = el.value.length;
    } else {
      el.value = el.value.substring(0, el.selectionStart) + code
              + el.value.substring(el.selectionStart, el.value.length);
    }
  } else if (el.createTextRange && el.caretPos) {
    el.caretPos.text = code;
  } else {
    el.value += code;
  }
  el.focus();
}

function storeCaret(el) {
  if (el.createTextRange) {
    el.caretPos = document.selection.createRange().duplicate();
  }
}

function getText() {
  if (document.all) {
    if (form[\"post\"].createTextRange && form[\"post\"].caretPos) {
      return form[\"post\"].caretPos.text;
    } else {
      return \"\";
    }
  } else if (window.getSelection) {
    return form[\"post\"].value.substring(form[\"post\"].selectionStart, form[\"post\"].selectionEnd);
  } else {
    return \"\";
  }
}

function mbCode(e) {
  var tag = e.name;
  var text = getText();

  if (text) {
    var code = \"[\" + tag + \"]\" + text + \"[/\" + tag + \"]\";
  } else {
    if (e.value.indexOf(\"*\") != -1) {
      var code = \"[/\" + tag + \"]\";
      e.value = e.value.substring(0,(e.value.length-1));
    } else {
      var code = \"[\" + tag + \"]\";
      e.value += \"*\";
    }
  }

  insertCode(code);
}

function mbcURL(e) {
  var type = e.name;
  var text = getText();
  var isURL = (text.substring(0,7) == \"http://\");

  if (type == \'img\') {
    if (isURL) {
      var code = \"[img]\" + text + \"[/img]\";
    } else {
      var code = text + \"[img]\" + prompt(\"{\$this->lang->post_mbcode_url}:\",\"\") + \"[/img]\";
    }
  } else {
    var code = \"[\" + type + \"=\" + (isURL ? text : prompt(\"{\$this->lang->post_mbcode_address}:\",\"\")) + \"]\" + ((text && !isURL) ? text : prompt(\"{\$this->lang->post_mbcode_detail}:\",\"\")) + \"[/\" + type + \"]\";
  }
  insertCode(code);
}

function mbcFont(list) {
  var attrib = list.name.substring(1,list.name.length);
  var value = list.options[list.selectedIndex].value;
  if (value && attrib) {
    insertCode(\"[\" + attrib + \"=\" + value + \"]\" + getText() + \"[/\" + attrib + \"]\");
  }
  setTimeout(\"form[\'\"+list.name+\"\'].options[0].selected = true\",10);
}

var form = document.forms[\"mbpost\"];
//-->
</script>
      <table border=\"0\" cellpadding=\"0\" cellspacing=\"2\">
        <tr>
          <td><input type=\"button\" onclick=\"mbCode(this)\" name=\"b\" title=\"{\$this->lang->post_mbcode_bold}\" accesskey=\"b\" class=\"mbcButton\" value=\"{\$this->lang->post_mbcode_bold1}\" style=\"width:20px;font-weight:bold\" /></td>
          <td><input type=\"button\" onclick=\"mbCode(this)\" name=\"i\" title=\"{\$this->lang->post_mbcode_italic}\" accesskey=\"i\" class=\"mbcButton\" value=\" {\$this->lang->post_mbcode_italic1}\" style=\"width:20px;font-style:italic\" /></td>
          <td><input type=\"button\" onclick=\"mbCode(this)\" name=\"u\" title=\"{\$this->lang->post_mbcode_underline}\" accesskey=\"u\" class=\"mbcButton\" value=\"{\$this->lang->post_mbcode_underline1}\" style=\"width:20px;text-decoration:underline\" /></td>
          <td><input type=\"button\" onclick=\"mbCode(this)\" name=\"s\" title=\"{\$this->lang->post_mbcode_strike}\" accesskey=\"s\" class=\"mbcButton\" value=\"{\$this->lang->post_mbcode_strike1}\" style=\"width:20px;text-decoration:line-through\" /></td>
          <td>&nbsp;</td>
          <td><input type=\"button\" onclick=\"mbCode(this)\" name=\"php\" title=\"{\$this->lang->post_mbcode_php}\" accesskey=\"p\" class=\"mbcButton\" value=\"{\$this->lang->post_mbcode_php}\" style=\"width:40px\" /></td>
          <td><input type=\"button\" onclick=\"mbCode(this)\" name=\"code\" title=\"{\$this->lang->post_mbcode_code}\" accesskey=\"c\" class=\"mbcButton\" value=\"{\$this->lang->post_mbcode_code}\" style=\"width:40px\" /></td>
          <td><input type=\"button\" onclick=\"mbCode(this)\" name=\"quote\" title=\"{\$this->lang->post_mbcode_quote}\" accesskey=\"q\" class=\"mbcButton\" value=\"{\$this->lang->post_mbcode_quote}\" style=\"width:50px\" /></td>
          <td>&nbsp;</td>
          <td><input type=\"button\" onclick=\"mbcURL(this)\" name=\"url\" title=\"{\$this->lang->post_mbcode_url}\" accesskey=\"h\" class=\"mbcButton\" value=\"{\$this->lang->post_mbcode_url}\" style=\"width:40px\" /></td>
          <td><input type=\"button\" onclick=\"mbcURL(this)\" name=\"email\" title=\"{\$this->lang->post_mbcode_email}\" accesskey=\"e\" class=\"mbcButton\" value=\"@\" style=\"width:30px\" /></td>
          <td><input type=\"button\" onclick=\"mbcURL(this)\" name=\"img\" title=\"{\$this->lang->post_mbcode_image}\" accesskey=\"k\" class=\"mbcButton\" value=\"{\$this->lang->post_mbcode_image1}\" style=\"width:40px\" /></td>
        </tr>
        <tr>
          <td colspan=\"12\">
            <select name=\"fcolor\" class=\"mbcSelect\" onchange=\"mbcFont(this)\"><option value=\"\">{\$this->lang->post_mbcode_color}</option><option value=\"skyblue\" style=\"color:skyblue\">{\$this->lang->post_mbcode_skyblue}</option><option value=\"royalblue\" style=\"color:royalblue\">{\$this->lang->post_mbcode_royalblue}</option><option value=\"blue\" style=\"color:blue\">{\$this->lang->post_mbcode_blue}</option><option value=\"darkblue\" style=\"color:darkblue\">{\$this->lang->post_mbcode_darkblue}</option><option value=\"orange\" style=\"color:orange\">{\$this->lang->post_mbcode_orange}</option><option value=\"orangered\" style=\"color:orangered\">{\$this->lang->post_mbcode_orangered}</option><option value=\"crimson\" style=\"color:crimson\">{\$this->lang->post_mbcode_crimson}</option><option value=\"red\" style=\"color:red\">{\$this->lang->post_mbcode_red}</option><option value=\"firebrick\" style=\"color:firebrick\">{\$this->lang->post_mbcode_firered}</option><option value=\"darkred\" style=\"color:darkred\">{\$this->lang->post_mbcode_darkred}</option><option value=\"green\" style=\"color:green\">{\$this->lang->post_mbcode_green}</option><option value=\"limegreen\" style=\"color:limegreen\">{\$this->lang->post_mbcode_limegreen}</option><option value=\"seagreen\" style=\"color:seagreen\">{\$this->lang->post_mbcode_seagreen}</option><option value=\"deeppink\" style=\"color:deeppink\">{\$this->lang->post_mbcode_deepink}</option><option value=\"tomato\" style=\"color:tomato\">{\$this->lang->post_mbcode_tomato}</option><option value=\"coral\" style=\"color:coral\">{\$this->lang->post_mbcode_coral}</option><option value=\"purple\" style=\"color:purple\">{\$this->lang->post_mbcode_purple}</option><option value=\"indigo\" style=\"color:indigo\">{\$this->lang->post_mbcode_indigo}</option><option value=\"burlywood\" style=\"color:burlywood\">{\$this->lang->post_mbcode_wood}</option><option value=\"sandybrown\" style=\"color:sandybrown\">{\$this->lang->post_mbcode_sandybrown}</option><option value=\"sienna\" style=\"color:sienna\">{\$this->lang->post_mbcode_sienna}</option><option value=\"chocolate\" style=\"color:chocolate\">{\$this->lang->post_mbcode_chocolate}</option><option value=\"teal\" style=\"color:teal\">{\$this->lang->post_mbcode_teal}</option><option value=\"silver\" style=\"color:silver\">{\$this->lang->post_mbcode_silver}</option></select>
            <select name=\"fsize\" class=\"mbcSelect\" onchange=\"mbcFont(this)\"><option value=\"\">{\$this->lang->post_mbcode_size}</option><option value=\"1\">{\$this->lang->post_mbcode_tiny}</option><option value=\"2\">{\$this->lang->post_mbcode_small}</option><option value=\"3\">{\$this->lang->post_mbcode_medium}</option><option value=\"5\">{\$this->lang->post_mbcode_large}</option><option value=\"7\">{\$this->lang->post_mbcode_huge}</option></select>
            <select name=\"ffont\" class=\"mbcSelect\" onchange=\"mbcFont(this)\"><option value=\"\">{\$this->lang->post_mbcode_font}</option><option value=\"arial\">{\$this->lang->post_mbcode_arial}</option><option value=\"courier\">{\$this->lang->post_mbcode_courier}</option><option value=\"impact\">{\$this->lang->post_mbcode_impact}</option><option value=\"tahoma\">{\$this->lang->post_mbcode_tahoma}</option><option value=\"times\">{\$this->lang->post_mbcode_times}</option><option value=\"verdana\">{\$this->lang->post_mbcode_verdana}</option></select>
          </td>
        </tr>
      </table><br />
      <textarea class=\'input\' name=\'post\' rows=\'12\' cols=\'60\' onclick=\'storeCaret(this)\' onkeyup=\'storeCaret(this)\' onfocus=\'storeCaret(this)\' onmouseout=\'storeCaret(this)\'>{\$quote}</textarea>
    </td>
  </tr>
', 'Post Designer - Normal', 'The normal post creator interface', 1)";
$queries['POST_BOX_RICH'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'post', 'POST_BOX_RICH', '
  <tr>
    <td class=\'tablelight\' style=\'width:30%\' valign=\'top\' align=\'center\'>
      <div style=\'text-align:left\'><b>{\$this->lang->post_msg}</b><br />[<a href=\'#\' onclick=\'return getLength()\'>{\$this->lang->post_length}</a>]<br /><br /><br /></div>

      <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\'>
      <tr><td>
      {\$this->table}
        <tr>
          <td colspan=\'{\$this->sets[\'clickable_per_row\']}\' class=\'tabledark\' align=\'center\' style=\'white-space:nowrap\'>
            <b>{\$this->lang->post_smiles}</b>
          </td>
        </tr>
        {\$clickable}
      {\$this->etable}
      </td></tr></table>
    </td>
    <td class=\'tablelight\'>
      <style type=\'text/css\'>
      .toolbar {background-color: buttonface; border-left: buttonhighlight 1px solid; border-bottom: buttonshadow 1px solid; border-right: buttonshadow 1px solid; border-top: buttonhighlight 1px solid; height:30px}
      .sep     {border-left: buttonshadow 1px solid; border-right: buttonhighlight 1px solid; height: 18px; width: 1px; margin: 3px}
      .handle  {border-left: buttonhighlight 1px solid; border-right: buttonshadow 1px solid; height: 18px; width: 3px; margin: 3px; margin-right:5px}

      .button {width:24px}
      .button_over {width:22px; background-color: buttonface; border-bottom: buttonshadow 1px solid; border-left: buttonhighlight 1px solid; border-right: buttonshadow 1px solid; border-top: buttonhighlight 1px solid; left:-1; position:relative}
      .button_down {width:22px; background-color: buttonface; border-bottom: buttonhighlight 1px solid; border-left: buttonshadow 1px solid; border-right: buttonhighlight 1px solid; border-top: buttonshadow 1px solid}

      .color {cursor:pointer; width:11px; height:11px}

      span p {margin:0px}
      </style>

      <script type=\'text/javascript\'>
      <!--
      function to_textarea()
      {
          document.forms[\'mbpost\'].post.value = document.all[\'box\'].innerHTML;
          return true;
      }

      document.forms[\'mbpost\'].onsubmit = to_textarea;

      function getLength()
      {
          var length = document.all[\'box\'].innerText.length;
          alert(\"{\$this->lang->post_mbcode_length}\");
          return false;
      }

      function getText()
      {
          return ((document.all[\'box\'].innerText && document.all[\'box\'].caretPos) ? document.all[\'box\'].caretPos.text : \'\');
      }

      function insertSmiley(smiley)
      {
          document.all[\'box\'].focus();
          var caret = document.selection.createRange().duplicate();

          caret.text = smiley;

          return false;
      }

      function format(command, param, nodialog)
      {
          document.all[\'box\'].focus();

          if(!param){
              document.execCommand(command);
          }else{
              if(!nodialog){
                  document.execCommand(command, true, param);
              }else{
                  document.execCommand(command, null, param);
              }
          }
      }

      color_act = null;

      function forecolor()
      {
          color_act = \'forecolor\';
          document.all[\'color_tool\'].style.display = \'\';
      }

      function backcolor()
      {
          color_act = \'backcolor\';
          document.all[\'color_tool\'].style.display = \'\';
      }

      function color_select(id)
      {
          if(id != \'close\'){
              format(color_act, id);
          }

          color_act = null;
          document.all[\'color_tool\'].style.display = \'none\';
      }

      function color_preview(obj)
      {
          document.all[\'color_face\'].innerText = \' \';
          document.all[\'color_face\'].style.backgroundColor = obj.style.backgroundColor;
      }

      function increment(hex)
      {
          switch(hex)
          {
          case \'00\': return \'33\'; break;
          case \'33\': return \'66\'; break;
          case \'66\': return \'99\'; break;
          case \'99\': return \'cc\'; break;
          case \'cc\': return \'ff\'; break;
          case \'ff\': return \'00\'; break;
          }
      }

      i = 0;
      function quote(code)
      {
          document.all[\'box\'].innerHTML = document.all[\'box\'].innerHTML + \'<!--STARTCODE\' + i +  \'STARTCODE--><table border=\"1\" width=\"90%\" cellpadding=\"3\" cellspacing=\"0\" style=\"margin-left:5%; margin-right:5%;\"><tr><td\' + (code ? \" style=\'font-family:courier\'\" : \'\') + \'><!--STARTICODE\' + i + \'STARTICODE--><!--ENDICODE\' + i + \'ENDICODE--></td></tr></table><!--ENDCODE\' + i +  \'ENDCODE-->\';
          i++;
      }

      function over(obj)
      {
          obj.className = \'button_over\';
      }

      function html_mode(obj)
      {
          if(obj.checked){
              document.all[\'box\'].innerText = document.all[\'box\'].innerHTML;
          }else{
              document.all[\'box\'].innerHTML = document.all[\'box\'].innerText;
          }
      }

      function out(obj)
      {
          obj.className = \'button\';
      }

      function down(obj)
      {
          obj.className = \'button_down\';
      }
      //-->
      </script>

      <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\' style=\'border:1px #666666 solid\'>
        <tr>
          <td class=\'toolbar\'>
            <table cellpadding=\'0\' cellspacing=\'0\' border=\'0\'>
              <tr>
                <td><span class=\'handle\'></span></td>

                <td title=\"Cut\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'cut\')\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/cut.gif\"></td>
                <td title=\"Copy\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'copy\')\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/copy.gif\"></td>
                <td title=\"Paste\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'paste\')\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/paste.gif\"></td>

                <td><span class=\'sep\'></span></td>

                <td title=\"Bold\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'bold\')\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/bold.gif\"></td>
                <td title=\"Italic\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'italic\')\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/italic.gif\"></td>
                <td title=\"Underline\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'underline\')\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/under.gif\"></td>
                <td title=\"Strike-Through\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'strikethrough\')\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/strike.gif\"></td>

                <td><span class=\'sep\'></span></td>

                <td title=\"Foreground Color\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"forecolor()\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/tpaint.gif\"></td>
                <td title=\"Background Color\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"backcolor()\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/parea.gif\"></td>

                <td><span class=\'sep\'></span></td>

                <td title=\"Align Left\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'justifyleft\')\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/aleft.gif\"></td>
                <td title=\"Center\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'justifycenter\')\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/center.gif\"></td>
                <td title=\"Align Right\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'justifyright\')\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/aright.gif\"></td>
              </tr>
            </table>
          </td>
        </tr>

        <tr>
          <td class=\'toolbar\'>
            <table cellpadding=\'0\' cellspacing=\'0\' border=\'0\'>
              <tr>
                <td><span class=\'handle\'></span></td>

                <td>
                  <select class=\'select\' title=\"Font user_name\" onchange=\"format(\'fontname\', this[this.selectedIndex].value)\" unselectable=\"on\">
                    <option selected>Font</option>
                    <option value=\"Arial\">Arial</option>
                    <option value=\"Arial Black\">Arial Black</option>
                    <option value=\"Arial Narrow\">Arial Narrow</option>
                    <option value=\"Comic Sans MS\">Comic Sans MS</option>
                    <option value=\"Courier New\">Courier New</option>
                    <option value=\"Impact\">Impact</option>
                    <option value=\"Tahoma\">Tahoma</option>
                    <option value=\"Times New Roman\">Times New Roman</option>
                    <option value=\"Verdana\">Verdana</option>
                  </select>
                </td>

                <td>
                  <select class=\'select\' title=\"Font Size\" onchange=\"format(\'fontsize\', this[this.selectedIndex].value)\" unselectable=\"on\">
                    <option selected>Size</option>
                    <option value=\"1\">1</option>
                    <option value=\"2\">2</option>
                    <option value=\"3\">3</option>
                    <option value=\"4\">4</option>
                    <option value=\"5\">5</option>
                    <option value=\"6\">6</option>
                    <option value=\"7\">7</option>
                    <option value=\"8\">8</option>
                    <option value=\"10\">10</option>
                    <option value=\"12\">12</option>
                    <option value=\"14\">14</option>
                  </select>
                </td>

                <td>&nbsp;<span class=\'sep\'></span></td>

                <td title=\"Numbered List\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'insertorderedlist\')\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/nlist.gif\"></td>
                <td title=\"Bulleted List\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'insertunorderedlist\')\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/blist.gif\"></td>

                <td><span class=\'sep\'></span></td>

                <td title=\"Hyperlink\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"format(\'createlink\', null)\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/wlink.gif\"></td>
                <td title=\"Image\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"x=prompt(\'Specify an image URL:\', \'http://\'); if(x){format(\'insertimage\', x, true)}\" unselectable=\"on\"><img src=\"skins/{\$this->skin}/images/wysiwyg/picture.gif\"></td>

                <td><span class=\'sep\'></span></td>

                <td title=\"Quote\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"quote()\" unselectable=\"on\"><img src=\'skins/{\$this->skin}/images/wysiwyg/quote.gif\'></td>
                <td title=\"Code\" onmouseover=\'over(this)\' onmouseout=\'out(this)\' onmousedown=\'down(this)\' onmouseup=\'over(this)\' class=\'button\' onclick=\"quote(1)\" unselectable=\"on\"><img src=\'skins/{\$this->skin}/images/wysiwyg/code.gif\'></td>

                <td><span class=\'sep\'></span></td>

                <td nowrap=\'nowrap\'><input type=\'checkbox\' onclick=\'html_mode(this)\'> HTML</td>
              </tr>
            </table>
          </td>
        </tr>

        <tr id=\'color_tool\' style=\'display:none\'>
          <td>
            <table class=\'toolbar\' border=\'0\' cellpadding=\'0\' cellspacing=\'2\' style=\'position:absolute\' width=\'100%\'>
              <tr>
                <td align=\'center\' nowrap=\'nowrap\'>
                  <b><span class=\'button_over\' style=\'cursor:pointer; text-align:center; font-size:11px; height:18px\' onclick=\"color_select(\'close\')\">X</span></b>
                  <span id=\'color_face\' style=\'border:1px #666666 solid; padding:1px; font-size:11px; font-weight:bold; height:13px; width:90%\'>Select A Color</span>
                </td>
              </tr>
              <tr>
                <td align=\'center\'>
                  <table border=\'0\' cellpadding=\'0\' cellspacing=\'1\'>
                    <tr>
                      <td class=\'color\' style=\'background-color:#ffffff\' title=\'#ffffff\' onmouseover=\'color_preview(this)\' onclick=\'color_select(this.style.backgroundColor)\' unselectable=\'on\'></td>
                      <td style=\'width:10px\'></td>

      <script language=\'javascript\' type=\'text/javascript\'>
      <!--
      color = \'000000\';
      gray = \'cccccc\';
      while(1)
      {
          document.write(\"<td class=\'color\' style=\'background-color:#\" + color + \"\' title=\'#\" + color + \"\' onmouseover=\'color_preview(this)\' onclick=\'color_select(this.style.backgroundColor)\' unselectable=\'on\'></td>\");

          if(color == \'ffffff\'){
              break;
          }

          r = color.substring(0, 2);
          g = color.substring(2, 4);
          b = color.substring(4, 6);

          g = increment(g);

          if(g == \'00\'){
              r = increment(r);
              if(r == \'00\'){
                  b = increment(b);

                  document.write(\'</tr><tr>\');
                  document.write(\"<td class=\'color\' style=\'background-color:#\" + gray + \"\' title=\'#\" + gray + \"\' onmouseover=\'color_preview(this)\' onclick=\'color_select(this.style.backgroundColor)\' unselectable=\'on\'></td><td style=\'width:10px\'></td>\");

                  switch(gray)
                  {
                  case \'cccccc\': gray = \'999999\'; break;
                  case \'999999\': gray = \'666666\'; break;
                  case \'666666\': gray = \'333333\'; break;
                  case \'333333\': gray = \'000000\'; break;
                  }
              }
          }

          color = r + g + b;
      }
      -->
      </script>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <tr>
          <td>
            <textarea style=\'display:none\' name=\'post\'></textarea>
            <input type=\'hidden\' name=\'rich\' value=\'true\'>
            <span id=\'box\' style=\'width:100%; height:200px; background-color:#ffffff; color:#000000; padding:5px; font-size:12px; font-family:verdana; cursor: text; overflow: auto; word-wrap:break-word; overflow-y: scroll\' contenteditable>{\$quote}</span>
          </td>
        </tr>
      </table>
    </td>
  </tr>
', 'Post Designer - WYSIWYG', 'The visual post creator interface', 2)";
$queries['POST_GLOBAL'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'post', 'POST_GLOBAL', '<br /><input type=\'checkbox\' name=\'global_topic\' value=\'1\' id=\'global_topic\'\$checkGlob /> <label for=\'global_topic\'>{\$this->lang->post_option_global}</label><br />', 'Global Topic Checkbox', 'Displayed only to those able to make a topic global', 8)";
$queries['POST_POLL'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'post', 'POST_POLL', '
{\$preview}
<form action=\'{\$this->self}?a=post&amp;s=poll&amp;f={\$this->get[\'f\']}\' method=\'post\' id=\'mbpost\' enctype=\'multipart/form-data\'>
{\$this->table}
  <tr>
    <td colspan=\'2\' class=\'header\'>{\$this->lang->post_new_poll}</td>
  </tr>
  <tr>
    <td class=\'tablelight\'><b>{\$this->lang->post_topic_title}</b></td>
    <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'title\' size=\'60\' value=\'\$title\' maxlength=\'75\' /></td>
  </tr>
  <tr>
    <td class=\'tabledark\'><b>{\$this->lang->post_topic_detail}</b><br />({\$this->lang->post_optional})</td>
    <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'desc\' size=\'60\' value=\'\$desc\' maxlength=\'35\' /></td>
  </tr>
  <tr>
    <td class=\'tablelight\' valign=\'top\'><b>{\$this->lang->post_poll_options}</b><br />{\$this->lang->post_poll_row}</td>
    <td class=\'tablelight\'><textarea class=\'input\' name=\'options\' rows=\'12\' cols=\'60\'>\$options</textarea></td>
  </tr>
  <tr>
    <td class=\'tabledark\' valign=\'top\'><b>{\$this->lang->post_icon}</b></td>
    <td class=\'tabledark\'>
      <table border=\'0\' cellpadding=\'0\' cellspacing=\'5\'>
        <tr>
          {\$msg_icons}
        </tr>
      </table>
    </td>
  </tr>
  {\$post_box}
  <tr>
    <td class=\'tabledark\' valign=\'top\'><b>{\$this->lang->post_options}</b></td>
    <td class=\'tabledark\'>
      <input type=\'checkbox\' name=\'parseEmot\' value=\'1\' id=\'parseEmot\'\$checkEmot /> <label for=\'parseEmot\'>{\$this->lang->post_option_emoticons}</label><br />
      <input type=\'checkbox\' name=\'parseCode\' value=\'1\' id=\'parseCode\'\$checkCode /> <label for=\'parseCode\'>{\$this->lang->post_option_mbcode}</label>
      \$universal_topic
    </td>
  </tr>
\$attach_box
  <tr>
    <td colspan=\'2\' align=\'center\' class=\'footer\'><input type=\'submit\' name=\'submit\' value=\'{\$this->lang->post_create_poll}\' />
<input type=\"submit\" name=\"preview\" value=\"{\$this->lang->post_preview}\" /></td>
  </tr>
{\$this->etable}
</form>
', 'New Poll Form', 'Edit the form that creates a new poll', 5)";
$queries['POST_POSTER_GUEST'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'post', 'POST_POSTER_GUEST', '<b>{\$this->lang->topic_guest}<br />{\$this->lang->topic_unreg}</b><br /><br />', 'Poster Information - Guest', 'The poster information in previewed posts for guests', 11)";
$queries['POST_POSTER_MEMBER'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'post', 'POST_POSTER_MEMBER', '
<b><a href=\'{\$this->self}?a=profile&amp;w={\$this->user[\'user_id\']}\'>{\$this->user[\'user_name\']}</a><br />
{\$this->user[\'user_title\']}</b><br /><br />
{\$avatar}<br />

<img src=\'./skins/{\$this->skin}/images/{\$this->user[\'membertitle_icon\']}\' alt=\'{\$this->lang->topic_level}\' /><br /><br />

{\$this->lang->topic_group}: {\$this->user[\'group_name\']}<br />
{\$this->lang->topic_posts}: {\$this->user[\'user_posts\']}<br />
{\$this->lang->topic_joined}: {\$joined}<br /><br />
', 'Poster Information - Member', 'The poster information in previewed posts for members', 10)";
$queries['POST_PREVIEW'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'post', 'POST_PREVIEW', '
{\$this->table}
<tr>
  <td class=\"header\">{\$preview_title}</td></tr>
<tr>
  <td class=\'tablelight\'>
    <table border=\'0\' width=\'100%\' cellpadding=\'4\' cellspacing=\'0\'>
      <tr>
        <td style=\'width:20%\' rowspan=\'3\' valign=\'top\'>
          {\$Poster_Info}
         </td>
      </tr>
      <tr>
        <td class=\'post\' valign=\'top\'>
          {\$preview_text}
        </td>
      </tr>
      <tr>
        <td valign=\'bottom\'>
          <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>
            <tr>
              <td class=\'signature\'>{\$signature}</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
{\$this->etable}
<br />
', 'Post Preview', 'A post being previewed with formatting', 9)";
$queries['POST_REPLY'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'post', 'POST_REPLY', '
{\$preview}
<form action=\'{\$this->self}?a=post&amp;s=reply&amp;t={\$this->get[\'t\']}\' method=\'post\' id=\'mbpost\' enctype=\'multipart/form-data\'>
{\$this->table}
  <tr>
    <td colspan=\'2\' class=\'header\'>{\$this->lang->post_reply_topic}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' valign=\'top\'><b>Post Icon</b></td>
    <td class=\'tablelight\'>
      <table border=\'0\' cellpadding=\'0\' cellspacing=\'5\'>
        <tr>
          {\$msg_icons}
        </tr>
      </table>
    </td>
  </tr>
  {\$post_box}
  <tr>
    <td class=\'tabledark\' valign=\'top\'><b>{\$this->lang->post_options}</b></td>
    <td class=\'tabledark\'>
      <input type=\'checkbox\' name=\'parseEmot\' value=\'1\' id=\'parseEmot\'\$checkEmot /> <label for=\'parseEmot\'>{\$this->lang->post_option_emoticons}</label><br />
      <input type=\'checkbox\' name=\'parseCode\' value=\'1\' id=\'parseCode\'\$checkCode /> <label for=\'parseCode\'>{\$this->lang->post_option_mbcode}</label>
    </td>
  </tr>
\$attach_box
  <tr>
    <td colspan=\'2\' align=\'center\' class=\'footer\'>
<input type=\'submit\' name=\'submit\' value=\'{\$this->lang->post_reply}\' />
<input type=\"submit\" name=\"preview\" value=\"{\$this->lang->post_preview}\" />
</td>
  </tr>
{\$this->etable}
</form><div><br /><br /></div>

{\$this->table}
  <tr>
    <td class=\'header\'>{\$this->lang->post_last_five} [<a href=\'{\$this->self}?a=topic&amp;t={\$this->get[\'t\']}\'>{\$this->lang->post_view_topic}</a>]</td>
  </tr>
{\$review}
{\$this->etable}
', 'Reply to Topic Form', 'Edit the form that replies to an existing topic', 3)";
$queries['POST_REVIEW_ENTRY'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'post', 'POST_REVIEW_ENTRY', '
<tr>
  <td class=\'tablelight\'>
    <table border=\'0\' width=\'100%\' cellpadding=\'3\' cellspacing=\'0\'>
      <tr>
        <td style=\'width:20%\' rowspan=\'3\' valign=\'top\'>
          <b>{\$last[\'user_name\']}</b>
        </td>
      </tr>
      <tr>
        <td class=\'post\' style=\'width:80%\' valign=\'top\'>
          {\$last[\'post_text\']}
        </td>
      </tr>
      <tr>
        <td valign=\'bottom\'>
          <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>
            <tr>
              <td><hr /></td>
            </tr>
            <tr>
              <td>{\$this->lang->post_posted} {\$last[\'post_time\']}</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
', 'Reply Review Entry', 'An entry in the topic review, seen below the reply form', 4)";
$queries['POST_TOPIC'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'post', 'POST_TOPIC', '
{\$preview}
<form action=\'{\$this->self}?a=post&amp;s=topic&amp;f={\$this->get[\'f\']}\' method=\'post\' id=\'mbpost\' enctype=\'multipart/form-data\'>
{\$this->table}
  <tr>
    <td colspan=\'2\' class=\'header\'>{\$this->lang->post_new_topic}</td>
  </tr>
  <tr>
    <td class=\'tablelight\'><b>{\$this->lang->post_topic_title}</b></td>
    <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'title\' value=\'\$title\' size=\'60\' maxlength=\'75\' /></td>
  </tr>
  <tr>
    <td class=\'tablelight\'><b>{\$this->lang->post_topic_detail}</b><br />({\$this->lang->post_optional})</td>
    <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'desc\' value=\'\$desc\' size=\'60\' maxlength=\'35\' /></td>
  </tr>
  <tr>
    <td class=\'tabledark\' valign=\'top\'><b>{\$this->lang->post_icon}</b></td>
    <td class=\'tabledark\'>
      <table border=\'0\' cellpadding=\'0\' cellspacing=\'5\'>
        <tr>
          {\$msg_icons}
        </tr>
      </table>
    </td>
  </tr>
  {\$post_box}
  <tr>
    <td class=\'tabledark\' valign=\'top\'><b>{\$this->lang->post_options}</b></td>
    <td class=\'tabledark\'>
      <input type=\'checkbox\' name=\'parseEmot\' value=\'1\' id=\'parseEmot\'\$checkEmot /> <label for=\'parseEmot\'>{\$this->lang->post_option_emoticons}</label><br />
      <input type=\'checkbox\' name=\'parseCode\' value=\'1\' id=\'parseCode\'\$checkCode /> <label for=\'parseCode\'>{\$this->lang->post_option_mbcode}</label>
      \$universal_topic
    </td>
  </tr>
\$attach_box
  <tr>
    <td colspan=\'2\' align=\'center\' class=\'footer\'><input type=\'submit\' name=\'submit\' value=\'{\$this->lang->post_create_topic}\' />
<input type=\"submit\" name=\"preview\" value=\"{\$this->lang->post_preview}\" /></td>
  </tr>
{\$this->etable}
</form>
', 'New Topic Form', 'Edit the form that creates a new topic', 0)";
$queries['PRINTER_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'printer', 'PRINTER_MAIN', '
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html xmlns=\'http://www.w3.org/1999/xhtml\' xml:lang=\'{\$this->user[\'user_language\']}\' dir=\'{\$this->lang->direction}\'>
<head>
<title>{\$this->sets[\'forum_name\']}</title>
<meta http-equiv=\'Content-Type\' content=\'application/xhtml+xml; charset={\$this->lang->charset}\' /> 
<link rel=\'stylesheet\' type=\'text/css\' href=\'./skins/{\$this->skin}/styles.css\' />
</head>

<body>

<div>
<div style=\'text-align:center\'><b>{\$topic[\'topic_title\']}{\$topic[\'topic_description\']}</b></div>

<br />

<table width=\'95%\' border=\'0\' cellspacing=\'0\' cellpadding=\'5\' style=\'border-collapse:collapse; margin-left:2.5%; margin-right:2.5%\'>
  {\$posts}
</table>

<br />

<div style=\'text-align:center\'>
<a href=\'{\$this->self}?a=topic&amp;t={\$this->get[\'t\']}\'>{\$this->lang->printer_back}</a>

<script type=\'text/javascript\'>
<!--
if(window.print){
    document.write(\" - <a href=\'#\' onClick=\'window.print()\'>{\$this->lang->printer_send}</a>\");
}
//-->
</script>
</div>

</div>
</body>
</html>
', 'Printable Topic Main', 'The main portion of the printable topic view', 0)";
$queries['PRINTER_POST'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'printer', 'PRINTER_POST', '
<tr>
  <td style=\'width:20%\' style=\'border:1px solid #666666\' valign=\'top\'>
    <font size=\'2\'><b>{\$post[\'user_name\']}</b></font><br />
    <font size=\'1\'>{\$post[\'user_email\']}</font><br /><br />
    {\$this->lang->printer_posted_on} {\$post[\'post_time\']}
  </td>
  <td class=\'post\' style=\'border:1px solid #666666\' valign=\'top\'>
    {\$post[\'post_text\']}
  </td>
</tr>
', 'Individual Post Print View', 'An individual post with a simplified design for printers', 1)";
$queries['PROFILE_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'profile', 'PROFILE_MAIN', '
{\$this->table}
  <tr>
    <td colspan=\'2\' class=\'header\'>{\$this->lang->profile_view_profile}: 
	<IF \$online><img src=\'./skins/{\$this->skin}/images/online.png\' alt=\'{\$this->lang->profile_online}\' title=\'{\$this->lang->profile_online}\' /></IF><IF !\$online><img src=\'./skins/{\$this->skin}/images/offline.png\' alt=\'{\$this->lang->profile_offline}\' title=\'{\$this->lang->profile_offline}\' /></IF> {\$profile[\'user_name\']}
	</td>
  </tr>
  <tr>
    <td style=\'width:50%\' class=\'subheader\' align=\'center\'>{\$this->lang->profile_contact}</td>
    <td class=\'subheader\' align=\'center\'>{\$this->lang->profile_info}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' valign=\'top\'>
      <table border=\'0\' width=\'100%\' cellpadding=\'3\' cellspacing=\'0\'>
        <tr>
          <td style=\'width:30%\'><b>{\$this->lang->profile_email_address}</b></td>
          <td>{\$profile[\'user_email\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_aim_sn}</b></td>
          <td>{\$profile[\'user_aim\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_icq_uin}</b></td>
          <td>{\$profile[\'user_icq\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_yahoo}</b></td>
          <td>{\$profile[\'user_yahoo\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_msn}</b></td>
          <td>{\$profile[\'user_msn\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_gtalk}</b></td>
          <td>{\$profile[\'user_gtalk\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_pm}</b></td>
          <td>{\$profile[\'user_pm\']}</td>
        </tr>
      </table>
    </td>
    <td class=\'tablelight\' valign=\'top\'>
      <table border=\'0\' width=\'100%\' cellpadding=\'3\' cellspacing=\'0\'>
        <tr>
          <td style=\'width:30%\'><b>{\$this->lang->profile_member}</b></td>
          <td>{\$profile[\'group_name\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_member_title}</b></td>
          <td>{\$profile[\'user_title\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_joined}</b></td>
          <td>{\$profile[\'user_joined\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_www}</b></td>
          <td>{\$profile[\'user_homepage\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_bday}</b></td>
          <td>{\$profile[\'user_birthday\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_location}</b></td>
          <td>{\$profile[\'user_location\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_interest}</b></td>
          <td>{\$profile[\'user_interests\']}</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td style=\'width:50%\' class=\'subheader\' align=\'center\'>{\$this->lang->profile_posts}</td>
    <td class=\'subheader\' align=\'center\'>{\$this->lang->profile_av_sign}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' valign=\'top\'>
      {\$PostInfo}
    </td>
    <td class=\'tablelight\' valign=\'top\'>
      <table border=\'0\' width=\'100%\' cellpadding=\'3\' cellspacing=\'0\'>
        <tr>
          <td style=\'width:30%\'><b>{\$this->lang->profile_avatar}</b></td>
          <td>{\$profile[\'user_avatar\']}</td>
        </tr>
        <tr>
          <td colspan=\'2\'><hr /></td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_signature}</b></td>
          <td>{\$profile[\'user_signature\']}</td>
        </tr>
      </table>
    </td>
  </tr>
{\$this->etable}
', 'Profile View', 'Change the appearance of profiles', 0)";
$queries['PROFILE_NO_POSTS'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'profile', 'PROFILE_NO_POSTS', '
      <table border=\'0\' width=\'100%\' cellpadding=\'3\' cellspacing=\'0\'>
        <tr>
          <td align=\'center\'>{\$profile[\'user_name\']} {\$this->lang->profile_not_post}</td>
        </tr>
      </table>
', 'Post Information - Not Posted', 'The post information for users who have not posted', 2)";
$queries['PROFILE_POST_INFO'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'profile', 'PROFILE_POST_INFO', '
      <table border=\'0\' width=\'100%\' cellpadding=\'3\' cellspacing=\'0\'>
        <tr>
          <td style=\'width:30%\'><b>{\$this->lang->profile_posts}</b></td>
          <td>{\$profile[\'user_posts\']}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_fav}</b></td>
          <td>{\$fav_forum}</td>
        </tr>
        <tr>
          <td><b>{\$this->lang->profile_last_post}</b></td>
          <td>{\$lastpost}</td>
        </tr>
      </table>
', 'Post Information', 'The post information for users who have posted', 1)";
$queries['RECENT_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'recent', 'RECENT_MAIN', '
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
</table>
', 'Recent View', 'Change the appearance of the recent topics lists', 0)";
$queries['RECENT_NO_TOPICS'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'recent', 'RECENT_NO_TOPICS', '
      <tr>
        <td colspan=\'7\' align=\'center\' class=\'tablelight\'>{\$this->lang->recent_no_topics}</td>
      </tr>
', 'Error Display', 'Format the look of an error on the recent topics view.', 3)";
$queries['RECENT_TOPIC'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'recent', 'RECENT_TOPIC', '
  <tr>
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
  </tr>
', 'Recent Topics', 'Format the default look of a given forum topic.', 1)";
$queries['RECENT_TOPIC_PINNED'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'recent', 'RECENT_TOPIC_PINNED', '
  <tr>
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
  </tr>
', 'Recent Pinned Topics', 'Format the look of the pinned topics in the recent topics view.', 2)";
$queries['REGISTER_IMAGE'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'register', 'REGISTER_IMAGE', '
  <tr>
   <td class=\'tablelight\'>{\$this->lang->register_image}</td>
   <td class=\'tablelight\'>
    <input type=\'hidden\' name=\'imagestring\' value=\'{\$imagesrc[0]}\' />
    <input class=\'input\' type=\'text\' name=\'imagetext\' size=\'50\' /><br /><br />
    <img src=\'{\$imagesrc[1]}\' alt=\'{\$this->lang->register_image}\' /></td>
  </tr>
', 'Validation Image', 'The dynamic image used to validate the registrant as human.', 1)";
$queries['REGISTER_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'register', 'REGISTER_MAIN', '
<form action=\'{\$this->self}?a=register\' method=\'post\'>
{\$this->table}
 <tr>
  <td colspan=\'2\' class=\'header\'>{\$this->lang->register_reging}</td>
 </tr>
 <tr>
  <td style=\'width:30%\' class=\'tablelight\'>{\$this->lang->register_new_user}</td>
  <td class=\'tablelight\'><input class=\'input\' type=\'text\' name=\'desuser\' size=\'50\' /></td>
 </tr>
 <tr>
  <td class=\'tabledark\'>{\$this->lang->register_email}</td>
  <td class=\'tabledark\'><input class=\'input\' type=\'text\' name=\'email\' size=\'50\' /></td>
 </tr>
 <tr>
  <td class=\'tablelight\'>{\$this->lang->register_passwd}</td>
  <td class=\'tablelight\'><input class=\'input\' type=\'password\' name=\'passA\' size=\'50\' /></td>
 </tr>
 <tr>
  <td class=\'tabledark\'>{\$this->lang->register_confirm_passwd}</td>
  <td class=\'tabledark\'><input class=\'input\' type=\'password\' name=\'passB\' size=\'50\' /></td>
 </tr>
 {\$image}
 <tr>
  <td class=\'tablelight\' colspan=\'2\' align=\'center\'><b>{\$this->lang->register_tos_read}:</b></td>
 </tr>
 <tr>
  <td class=\'tabledark\' colspan=\'2\'>{\$tos_text}</td>
 </tr>
 <tr>
  <td class=\'tablelight\' colspan=\'2\' align=\'center\'><b>{\$this->lang->register_tos_i_agree}</b><input type=\'checkbox\' name=\'terms\' /></td>
 </tr>
 <tr>
  <td colspan=\'2\' align=\'center\' class=\'footer\'>
   <input type=\'submit\' name=\'submit\' value=\'{\$this->lang->register_reg}\' />
  </td>
 </tr>
{\$this->etable}
</form>
', 'Register View', 'Change the appearance of the register screen', 0)";
$queries['SEARCH_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'search', 'SEARCH_MAIN', '
<script type=\'text/javascript\'>
<!--
function select_all_forums()
{
  opts = document.forms[\'search\'].elements[\'forums[]\'].options
  for(i=0; i<opts.length; i++)
  {
    opts[i].selected = true;
  }
}
//-->
</script>

<form action=\'{\$this->self}?a=search\' method=\'post\' id=\'search\'>
{\$this->table}
  <tr>
    <td colspan=\'2\' class=\'header\'>{\$this->lang->search_search}</td>
  </tr>
  <tr>
    <td class=\'subheader\' align=\'center\'>{\$this->lang->search_basic}</td>
    <td class=\'subheader\' align=\'center\'>{\$this->lang->search_advanced}</td>
  </tr>
  <tr>
    <td class=\'tablelight\' style=\'width:50%\'>
      {\$this->lang->search_for}:<br />
      <input class=\'input\' type=\'text\' style=\'width:100%\' name=\'query\' />
      <br /><br />

      {\$this->lang->search_in}: <a href=\'#\' onclick=\'select_all_forums()\'>{\$this->lang->search_select_all}</a><br />
      <select class=\'input\' name=\'forums[]\' size=\'10\' style=\'width:100%\' multiple=\'multiple\'>
        \$forum_options
      </select><br />
    </td>
    <td class=\'tabledark\' valign=\'top\'>
      <table border=\'0\' cellpadding=\'1\' cellspacing=\'4\'>
        <tr>
          <td><input type=\'radio\' name=\'searchtype\' id=\'type_match\' value=\'match\' checked=\'checked\' /></td>
          <td><label for=\'type_match\'>{\$this->lang->search_match}</label></td>
        </tr>
        <tr>
          <td><input type=\'radio\' name=\'searchtype\' id=\'type_soundex\' value=\'soundex\' /></td>
          <td><label for=\'type_soundex\'>{\$this->lang->search_sound}</label></td>
        </tr>
        <tr>
          <td><input type=\'radio\' name=\'searchtype\' id=\'type_regex\' value=\'regex\' /></td>
          <td><label for=\'type_regex\'>{\$this->lang->search_regex}</label></td>
        </tr>
        <tr>
          <td colspan=\'2\'><hr /></td>
        </tr>
        <tr>
          <td><input type=\'checkbox\' name=\'member_check\' id=\'member_check\' /></td>
          <td>
            <label for=\'member_check\'>{\$this->lang->search_posts_by}</label>
            <input class=\'input\' type=\'text\' size=\'20\' name=\'member_text\' />
            <select class=\'select\' name=\'member_select\'>
              <option value=\'exact\' selected=\'selected\'>{\$this->lang->search_exact_name}</option>
              <option value=\'partial\'>{\$this->lang->search_partial_name}</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><input type=\'checkbox\' name=\'showposts_check\' id=\'showposts_check\' checked=\'checked\' /></td>
          <td><label for=\'showposts_check\'>{\$this->lang->search_show_posts}</label></td>
        </tr>
        <tr>
          <td><input type=\'checkbox\' name=\'limit_check\' id=\'limit_check\' checked=\'checked\' /></td>
          <td><label for=\'limit_check\'>{\$this->lang->search_only_display}</label> <input class=\'input\' type=\'text\' size=\'6\' maxlength=\'6\' name=\'limit_chars\' value=\'400\' /> <label for=\'limit_check\'>{\$this->lang->search_characters}</label></td>
        </tr>
        <tr>
          <td><input type=\'checkbox\' name=\'time_check\' id=\'time_check\' checked=\'checked\' /></td>
          <td>
            <label for=\'time_check\'>{\$this->lang->search_in_posts}</label>
            <select class=\'select\' name=\'time_way_select\'>
              <option value=\'newer\' selected=\'selected\'>{\$this->lang->search_newer}</option>
              <option value=\'older\'>{\$this->lang->search_older}</option>
            </select>
            <label for=\'time_check\'>{\$this->lang->search_than}</label>
            <select class=\'select\' name=\'time_select\'>
              <option value=\'1\'>1 {\$this->lang->search_day}</option>
              <option value=\'3\'>3 {\$this->lang->search_days}</option>
              <option value=\'7\'>1 {\$this->lang->search_week}</option>
              <option value=\'14\'>2 {\$this->lang->search_weeks}</option>
              <option value=\'31\' selected=\'selected\'>1 {\$this->lang->search_month}</option>
              <option value=\'92\'>3 {\$this->lang->search_months}</option>
              <option value=\'183\'>6 {\$this->lang->search_months}</option>
              <option value=\'365\'>1 {\$this->lang->search_year}</option>
            </select>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td colspan=\'2\' class=\'footer\' align=\'center\'>
      <input type=\'submit\' name=\'submit\' value=\'{\$this->lang->search_search}\' />
    </td>
  </tr>
{\$this->etable}
</form>
', 'Display List Page', 'This page shows the list of forums and input for entering search terms', 0)";
$queries['SEARCH_RESULTS_ENTRY'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'search', 'SEARCH_RESULTS_ENTRY', '
<tr>
 <td class=\'subheader\'><a href=\'{\$this->self}?a=topic&amp;t={\$search[\'post_topic\']}\'><b>{\$search[\'topic_title\']}</b></a></td>
 <td class=\'subheader\' align=\'center\'><a href=\'{\$this->self}?a=forum&amp;f={\$search[\'topic_forum\']}\'><b>{\$search[\'forum_name\']}</b></a></td>
 <td class=\'subheader\' align=\'center\'><b>\$topic_starter</b></td>
 <td class=\'subheader\' align=\'center\'><b>{\$search[\'topic_replies\']}</b></td>
 <td class=\'subheader\' align=\'center\'><b>\$matches</b></td>
</tr>
', 'Results Entry', 'This is the format for an entry in the results view.', 2)";
$queries['SEARCH_RESULTS_GUEST_INFO'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'search', 'SEARCH_RESULTS_GUEST_INFO', '<b>{\$this->lang->search_guest}<br />{\$this->lang->search_unreg}</b><br /><br />', 'Search Results Guest Info', '', 5)";
$queries['SEARCH_RESULTS_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'search', 'SEARCH_RESULTS_MAIN', '
{\$this->table}
  <tr>
    <td colspan=\'5\'>\$pages</td>
  </tr>
  <tr>
    <td style=\'width:30%\' class=\'header\'>{\$this->lang->search_topic}</td>
    <td style=\'width:25%\' class=\'header\' align=\'center\'>{\$this->lang->search_forum}</td>
    <td style=\'width:20%\' class=\'header\' align=\'center\'>{\$this->lang->search_starter}</td>
    <td style=\'width:10%\' class=\'header\' align=\'center\'>{\$this->lang->search_replies}</td>
    <td style=\'width:10%\' class=\'header\' align=\'center\'>{\$this->lang->search_matches}</td>
  </tr>
  \$results
  <tr>
    <td colspan=\'5\' class=\'footer\'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan=\'5\'>\$pages</td>
  </tr>
{\$this->etable}
', 'Results Page', 'This is the main format for the results view', 1)";
$queries['SEARCH_RESULTS_MEMBER_INFO'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'search', 'SEARCH_RESULTS_MEMBER_INFO', '
<IF \$online><img src=\'./skins/{\$this->skin}/images/online.png\' alt=\'{\$this->lang->search_online}\' title=\'{\$this->lang->search_online}\' /></IF>
<IF !\$online><img src=\'./skins/{\$this->skin}/images/offline.png\' alt=\'{\$this->lang->search_offline}\' title=\'{\$this->lang->search_offline}\' /></IF>
<b><a href=\'{\$this->self}?a=profile&amp;w={\$match[\'post_author\']}\'>{\$match[\'user_name\']}</a><br />
{\$match[\'user_title\']}</b><br /><br />
{\$match[\'user_avatar\']}

<img src=\'./skins/{\$this->skin}/images/{\$match[\'membertitle_icon\']}\' alt=\'{\$this->lang->search_level}\' /><br /><br />

{\$this->lang->search_group}: {\$match[\'group_name\']}<br />
{\$this->lang->search_posts}: {\$match[\'user_posts\']}<br />
{\$this->lang->search_joined}: {\$match[\'user_joined\']}<br /><br />
', 'Search Results Member Information', '', 4)";
$queries['SEARCH_RESULTS_POST'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'search', 'SEARCH_RESULTS_POST', '
<tr>
  <td class=\'\$class\' colspan=\'5\'>
    <table border=\'0\' width=\'100%\' cellpadding=\'4\' cellspacing=\'0\'>
      <tr>
        <td style=\'width:20%\' rowspan=\'3\' valign=\'top\'>
          {\$Poster_Info}
          {\$match[\'post_ip\']}
        </td>
      </tr>
      <tr>
        <td class=\'post\' style=\'width:80%\' valign=\'top\'>
          {\$match[\'post_text\']}
        </td>
      </tr>
      <tr>
        <td valign=\'bottom\'>
          <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>
            <tr>
              <td colspan=\'3\'><hr /></td>
            </tr>
            <tr>
              <td style=\'width:1px\'>{\$match[\'post_icon\']}</td>
              <td>{\$this->lang->search_posted_on} {\$match[\'post_time\']}</td>
              <td align=\'right\'><b>{\$match[\'score\']}</b></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
', 'Search Results Post Entry', 'An individual post that was matched by the search', 3)";
$queries['TOPIC_MAIN'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'topic', 'TOPIC_MAIN', '
{\$PollDisplay}

{\$this->table}
  <tr>
    <td>{\$this->lang->topic_pages}:
      {\$pagelinks}
    </td>
    <td align=\'right\'>
      {\$replylink}
      <a href=\'{\$this->self}?a=post&amp;s=topic&amp;f={\$topic[\'topic_forum\']}\'><img src=\'./skins/{\$this->skin}/images/newtopic.png\' alt=\'{\$this->lang->topic_create_topic}\' /></a>
      <a href=\'{\$this->self}?a=post&amp;s=poll&amp;f={\$topic[\'topic_forum\']}\'><img src=\'./skins/{\$this->skin}/images/newpoll.png\' alt=\'{\$this->lang->topic_create_poll}\' /></a>
    </td>
  </tr>
{\$this->etable}

<form action=\'{\$this->self}?a=mod&amp;s=split&amp;t={\$this->get[\'t\']}\' method=\'post\'>
{\$this->table}
  <tr>
    <td class=\'header\'>
      {\$title_html}{\$topic[\'topic_description\']}
    </td>
  </tr>

  {\$posts}

  <tr>
    <td class=\'footer\' align=\'right\'>
      {\$mod_opts}
    </td>
  </tr>
{\$this->etable}
</form>

{\$this->table}
  <tr>
    <td>{\$this->lang->topic_pages}:
      {\$pagelinks}
    </td>
    <td align=\'right\'>
      {\$replylink}
      <a href=\'{\$this->self}?a=post&amp;s=topic&amp;f={\$topic[\'topic_forum\']}\'><img src=\'./skins/{\$this->skin}/images/newtopic.png\' alt=\'{\$this->lang->topic_create_topic}\' /></a>
      <a href=\'{\$this->self}?a=post&amp;s=poll&amp;f={\$topic[\'topic_forum\']}\'><img src=\'./skins/{\$this->skin}/images/newpoll.png\' alt=\'{\$this->lang->topic_create_poll}\' /></a>
      <a href=\'{\$this->self}?a=cp&amp;s=addsub&amp;type=topic&amp;item={\$this->get[\'t\']}\'><img src=\'./skins/{\$this->skin}/images/subscribe.png\' alt=\'{\$this->lang->topic_subscribe}\' /></a>
      <a href=\'{\$this->self}?a=printer&amp;t={\$this->get[\'t\']}\'><img src=\'./skins/{\$this->skin}/images/printable.png\' alt=\'{\$this->lang->topic_print}\' /></a>
    </td>
  </tr>
{\$this->etable}
', 'Topic View', 'Change the appearance of topics', 0)";
$queries['TOPIC_POST'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'topic', 'TOPIC_POST', '
<tr>
  <td class=\'{\$class}\'>
    <a id=\'p{\$i}\'></a>
    <table border=\'0\' width=\'100%\' cellpadding=\'4\' cellspacing=\'0\'>
      <tr>
        <td style=\'width:20%\' rowspan=\'3\' valign=\'top\'>
          {\$split}
          {\$Poster_Info}
          {\$post[\'post_ip\']}
        </td>
      </tr>
      <tr>
        <td class=\'post\' valign=\'top\'>
          <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>
            <tr>
              <td>{\$Poster_Icons}</td>
              <td align=\'right\'><a href=\'{\$this->self}?a=post&amp;s=reply&amp;t={\$this->get[\'t\']}&amp;f={\$topic[\'topic_forum\']}&amp;qu={\$post[\'post_id\']}\'><img src=\'./skins/{\$this->skin}/images/quote.png\' alt=\'{\$this->lang->topic_quote}\' /></a> {\$options} <a href=\'#bottom\'><img src=\'./skins/{\$this->skin}/images/arrowdown.png\' alt=\'{\$this->lang->topic_bottom}\' title=\'{\$this->lang->topic_bottom}\' /></a><a href=\'#top\'><img src=\'./skins/{\$this->skin}/images/arrowup.png\' alt=\'{\$this->lang->topic_top}\' title=\'{\$this->lang->topic_top}\' /></a></td>
            </tr>
          </table>
          <hr />
          {\$post[\'post_text\']}
        </td>
      </tr>
      <tr>
        <td valign=\'bottom\'>
          <table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>
            <tr>
              <td colspan=\'2\'><span class=\'signature\'>{\$post[\'user_signature\']}</span><hr /></td>
            </tr>
            <tr>
              <td>{\$post[\'post_icon\']}{\$this->lang->topic_posted} {\$post[\'post_time\']}</td>
              <td align=\'right\'>{\$edited}</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
', 'Posts', 'Format the look of a post within a given topic.', 1)";
$queries['TOPIC_POSTER_GUEST'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'topic', 'TOPIC_POSTER_GUEST', '<b>{\$this->lang->topic_guest}<br />{\$this->lang->topic_unreg}</b><br /><br />', 'Poster Information - Guest', 'Edit the poster information in topics for unregistered members', 3)";
$queries['TOPIC_POSTER_MEMBER'] = "INSERT INTO {$pre}templates (template_skin, template_set, template_name, template_html, template_displayname, template_description, template_position) VALUES ('default', 'topic', 'TOPIC_POSTER_MEMBER', '
<IF \$online><img src=\'./skins/{\$this->skin}/images/online.png\' alt=\'{\$this->lang->topic_online}\' title=\'{\$this->lang->topic_online}\' /></IF>
<IF !\$online><img src=\'./skins/{\$this->skin}/images/offline.png\' alt=\'{\$this->lang->topic_offline}\' title=\'{\$this->lang->topic_offline}\' /></IF>
<b><a href=\'{\$this->self}?a=profile&amp;w={\$post[\'user_id\']}\'>{\$post[\'user_name\']}</a><br />
{\$post[\'user_title\']}</b><br /><br />
{\$post[\'user_avatar\']}

<img src=\'./skins/{\$this->skin}/images/{\$post[\'membertitle_icon\']}\' alt=\'{\$this->lang->topic_level}\' /><br /><br />

{\$this->lang->topic_group}: {\$post[\'group_name\']}<br />
{\$this->lang->topic_posts}: {\$post[\'user_posts\']}<br />
{\$this->lang->topic_joined}: {\$post[\'user_joined\']}<br /><br />
', 'Poster Information - Member', 'Edit the poster information in topics for members', 2)";
?>
