/* The folder jump selector switch on the private message display */

function get_folder(select)
{
  self.location.href = '{$this->self}?a=pm&f=' + select.value;
}
