function get_folder(select)
{
  self.location.href = '{$this->self}?a=pm&f=' + select.value;
}