function get_forum(select)
{
  if(select.value.substring(0, 1) == '.'){
    self.location.href = '{$this->self}?c=' + select.value.substring(1, select.value.length);
  }else{
    self.location.href = '{$this->self}?a=forum&f=' + select.value;
  }
}