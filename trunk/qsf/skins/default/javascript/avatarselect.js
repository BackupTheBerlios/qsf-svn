function enable(what)
{
  if(what == 'local'){
    document.forms['avatar'].avatar_local.disabled = false;
    document.forms['avatar'].avatar_url.disabled = true;
    document.forms['avatar'].avatar_upload.disabled = true;
    check(0);
  }else if(what == 'url'){
    document.forms['avatar'].avatar_local.disabled = true;
    document.forms['avatar'].avatar_url.disabled = false;
    document.forms['avatar'].avatar_upload.disabled = true;
    check(1);
  }else if(what == 'upload'){
    document.forms['avatar'].avatar_local.disabled = true;
    document.forms['avatar'].avatar_url.disabled = true;
    document.forms['avatar'].avatar_upload.disabled = false;
    check(2);
  }else if(what == 'use_uploaded'){
    document.forms['avatar'].avatar_local.disabled = true;
    document.forms['avatar'].avatar_url.disabled = true;
    document.forms['avatar'].avatar_upload.disabled = true;
    check(3);
  }else if(what == 'none'){
    document.forms['avatar'].avatar_local.disabled = true;
    document.forms['avatar'].avatar_url.disabled = true;
    document.forms['avatar'].avatar_upload.disabled = true;
    check(4);
  }
}

function setuser_avatar(url)
{
  if(document.images){
    image = document.images['current_avatar'];
    if(url == ''){
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
  if((obj.value > {$this->sets['avatar_width']}) || (obj.value < 1)){
    obj.value = {$this->sets['avatar_width']};
    alert("{$this->lang->cp_avatar_size_width} {$this->sets['avatar_width']} {$this->lang->cp_avatar_pixels}.");
  }
  if(document.images){
    document.images['current_avatar'].width = obj.value;
  }
}

function setHeight(obj)
{
  if((obj.value > {$this->sets['avatar_height']}) || (obj.value < 1)){
    obj.value = {$this->sets['avatar_height']};
    alert("{$this->lang->cp_avatar_size_height} {$this->sets['avatar_height']} {$this->lang->cp_avatar_pixels}.");
  }
  if(document.images){
    document.images['current_avatar'].height = obj.value;
  }
}

function noavatar()
{
  image = document.images['current_avatar'];
  image.src = './skins/{$this->skin}/images/noavatar.png';
  image.height = 64;
  image.width = 64;
  document.forms['avatar'].user_avatar_width.value = 64;
  document.forms['avatar'].user_avatar_height.value = 64;
}

function check(i)
{
  if(i == 0){
    var x = 1;
  }else{
    var x = 0;
  }
  document.forms['avatar'].user_avatar_type[i].checked = true;
  document.forms['avatar'].user_avatar_type[x].checked = false;
}