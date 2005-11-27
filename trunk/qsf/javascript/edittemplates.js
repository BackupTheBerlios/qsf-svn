/* Supposed to alert when leaving the template editor window if changes have been made */

changed = false;

function savechanges()
{
  if (changed)
  {
    var answer = confirm($this->lang->template_confirm);
    if (answer)
    {
      document.templates.submit();
      return false;
    }
  }
}
//window.onunload = savechanges;
