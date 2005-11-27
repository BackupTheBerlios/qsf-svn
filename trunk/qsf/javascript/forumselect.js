/* Selects all forums for a search from the search controls. */
function select_all_forums()
{
  opts = document.forms['search'].elements['forums[]'].options
  for(i=0; i<opts.length; i++)
  {
    opts[i].selected = true;
  }
}
