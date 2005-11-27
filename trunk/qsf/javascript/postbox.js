/* Smilie insertion and mbcode functions for posting */

function getLength(){
  var length = form["post"].value.length;
  alert("{$this->lang->post_mbcode_length}");

  return false;
}

function insertSmiley(smiley) {
  insertCode(getText() + ' ' + smiley);
  return false;
}

function insertCode(code) {
  var el = form["post"];
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
    if (form["post"].createTextRange && form["post"].caretPos) {
      return form["post"].caretPos.text;
    } else {
      return "";
    }
  } else if (window.getSelection) {
    return form["post"].value.substring(form["post"].selectionStart, form["post"].selectionEnd);
  } else {
    return "";
  }
}

function mbCode(e) {
  var tag = e.name;
  var text = getText();

  if (text) {
    var code = "[" + tag + "]" + text + "[/" + tag + "]";
  } else {
    if (e.value.indexOf("*") != -1) {
      var code = "[/" + tag + "]";
      e.value = e.value.substring(0,(e.value.length-1));
    } else {
      var code = "[" + tag + "]";
      e.value += "*";
    }
  }

  insertCode(code);
}

function mbcURL(e) {
  var type = e.name;
  var text = getText();
  var isURL = (text.substring(0,7) == "http://");

  if (type == 'img') {
    if (isURL) {
      var code = "[img]" + text + "[/img]";
    } else {
      var code = text + "[img]" + prompt("{$this->lang->post_mbcode_url}:","") + "[/img]";
    }
  } else {
    var code = "[" + type + "=" + (isURL ? text : prompt("{$this->lang->post_mbcode_address}:","")) + "]" + ((text && !isURL) ? text : prompt("{$this->lang->post_mbcode_detail}:","")) + "[/" + type + "]";
  }
  insertCode(code);
}

function mbcFont(list) {
  var attrib = list.name.substring(1,list.name.length);
  var value = list.options[list.selectedIndex].value;
  if (value && attrib) {
    insertCode("[" + attrib + "=" + value + "]" + getText() + "[/" + attrib + "]");
  }
  setTimeout("form['"+list.name+"'].options[0].selected = true",10);
}

var form = document.forms["mbpost"];

function showhide(element_id)
{
  node = document.getElementById(element_id);
  if( node.style.display == 'none' )
  {
    node.style.display = '';
  }
  else
  {
    node.style.display = 'none';
  }
}
