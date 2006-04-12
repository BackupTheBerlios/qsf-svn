/* Used by POST_BOX_PLAIN template */

// Language variables
var lang_mbcode_length = "Your post is +length+ characters.";
var lang_mbcode_address = "Enter an address";
var lang_mbcode_detail = "Enter a description";
var lang_mbcode_url = "URL";

// text area to put bbcode into
var g_formname;
var g_textareaname;

function getLength(){
  var length = document.forms[g_formname][g_textareaname].value.length;
  var message = lang_mbcode_length;
  alert(message.replace(/\+length\+/g, length));

  return false;
}

function insertSmiley(smiley) {
  insertCode(getText() + ' ' + smiley);
}

function insertCode(code) {
  var el = document.forms[g_formname][g_textareaname];
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
    if (document.forms[g_formname][g_textareaname].createTextRange && document.forms[g_formname][g_textareaname].caretPos) {
      return document.forms[g_formname][g_textareaname].caretPos.text;
    } else {
      return "";
    }
  } else if (window.getSelection) {
    return document.forms[g_formname][g_textareaname].value.substring(document.forms[g_formname][g_textareaname].selectionStart, document.forms[g_formname][g_textareaname].selectionEnd);
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
      var code = text + "[img]" + prompt(lang_mbcode_url + ":","") + "[/img]";
    }
  } else {
    var code = "[" + type + "=" + (isURL ? text : prompt(lang_mbcode_address + ":","")) + "]" + ((text && !isURL) ? text : prompt(lang_mbcode_detail + ":","")) + "[/" + type + "]";
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

function mbcodeSetLang(length, address, detail, url) {
	lang_mbcode_length = length;
	lang_mbcode_address = address;
	lang_mbcode_detail = detail;
	lang_mbcode_url = url;
}

function mbcodeInit(formname, textboxname) {
	g_formname = formname;
	g_textareaname = textboxname;
}

