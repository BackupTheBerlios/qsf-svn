/* Used by POST_BOX_PLAIN template */

function insertCode(code, textarea) {
  if (window.getSelection) {
    if (textarea.selectionStart != textarea.selectionEnd) {
      textarea.value = textarea.value.substring(0, textarea.selectionStart) + code
              + textarea.value.substring(textarea.selectionEnd, textarea.value.length);
      textarea.selectionStart = textarea.value.length;
      textarea.selectionEnd = textarea.value.length;
    } else {
      textarea.value = textarea.value.substring(0, textarea.selectionStart) + code
              + textarea.value.substring(textarea.selectionStart, textarea.value.length);
    }
  } else if (textarea.createTextRange && textarea.caretPos) {
    textarea.caretPos.text = code;
  } else {
    textarea.value += code;
  }
  textarea.focus();
}

function getText(textarea) {
  if (document.all) {
    if (textarea.createTextRange && textarea.caretPos) {
      return textarea.caretPos.text;
    } else {
      return "";
    }
  } else if (window.getSelection) {
    return textarea.value.substring(textarea.selectionStart, textarea.selectionEnd);
  } else {
    return "";
  }
}

function bbCode(tag, textarea) {
  var text = getText(textarea);

  if (text) {
    var code = "[" + tag + "]" + text + "[/" + tag + "]";
  } else {
	e = document.getElementById('qsf_' + tag);
    if (e.value.indexOf("*") != -1) {
      var code = "[/" + tag + "]";
      e.value = e.value.substring(0,(e.value.length-1));
    } else {
      var code = "[" + tag + "]";
      e.value += "*";
    }
  }

  insertCode(code, textarea);
}

function bbcURL(type, textarea) {
  var text = getText(textarea);
  var isURL = (text.substring(0,7) == "http://");

  if (type == 'img') {
    if (isURL) {
      var code = "[img]" + text + "[/img]";
    } else {
      var code = text + "[img]" + prompt(js_lang.bbcode_url1 + ":","") + "[/img]";
    }
  } else {
    var code = "[" + type + "=" + (isURL ? text : prompt(js_lang.bbcode_address + ":","")) + "]" + ((text && !isURL) ? text : prompt(js_lang.bbcode_detail + ":","")) + "[/" + type + "]";
  }
  insertCode(code, textarea);
}

function bbcFont(attrib, list, textarea) {
  var value = list.options[list.selectedIndex].value;
  if (value && attrib) {
    insertCode("[" + attrib + "=" + value + "]" + getText(textarea) + "[/" + attrib + "]", textarea);
  }
  setTimeout(function() {
	  list.options[0].selected = true;
  	},10);
}

function createButton(tag, title, value) {
	var button = document.createElement("input");

	button.type = "button";
	button.title = title;
	button.value = value;
	button.id = 'qsf_' + tag;
	
	return button;
}

function addOptions(select, options, styleColor) {
	for	(var item in options) {
		var selectOption = document.createElement("option");
		selectOption.value = item;
		if (styleColor) {
			selectOption.style.color = item;
		}
		selectOption.appendChild(document.createTextNode(options[item]));
		select.appendChild(selectOption);
	}
}

// Note: This is normally run onfocus on the text area it's associated with
function bbcodeInit(textarea) {

	// Find all other textarea tags and REMOVE their buttons!
	var items = document.getElementsByTagName("textarea");
	for (var i=0; i<items.length; i++) {
		items[i].buildButtons = null;
		items[i].onclick = null;
		items[i].onkeyup = null;
		items[i].onmouseout = null;
		items[i].onfocus = function() {
			bbcodeInit(items[i]);
		}
	}

	var oldButtons = document.getElementById('qsf_bbcode_buttons');
	if (oldButtons) {
		oldButtons.parentNode.removeChild(oldButtons);
	}
	
	textarea.buildButtons = function() {
		if (!js_lang) return false; // fail!
		
		// Insert the BB Code buttons above it
		var bbCodeButtons = document.createElement("div");
		bbCodeButtons.id = 'qsf_bbcode_buttons';
		
		// Bold button
		var boldButton = createButton('b', js_lang.bbcode_bold, js_lang.bbcode_bold1);
		boldButton.onclick = function() {
			bbCode('b', textarea);
		};
		boldButton.style.fontWeight = 'bold';
		bbCodeButtons.appendChild(boldButton);

		// Italic button
		var italicButton = createButton('i', js_lang.bbcode_italic, js_lang.bbcode_italic1);
		italicButton.onclick = function() {
			bbCode('i', textarea);
		};
		italicButton.style.fontStyle = 'italic';
		bbCodeButtons.appendChild(italicButton);
		
		// Underline button
		var underlineButton = createButton('u', js_lang.bbcode_underline, js_lang.bbcode_underline1);
		underlineButton.onclick = function() {
			bbCode('u', textarea);
		};
		underlineButton.style.fontDecoration = 'underline';
		bbCodeButtons.appendChild(underlineButton);
		
		// Strikethrough button
		var strikethroughButton = createButton('s', js_lang.bbcode_strike, js_lang.bbcode_strike1);
		strikethroughButton.onclick = function() {
			bbCode('s', textarea);
		};
		strikethroughButton.style.fontDecoration = 'line-through';
		bbCodeButtons.appendChild(strikethroughButton);
		
		bbCodeButtons.appendChild(document.createTextNode("\u00a0"));

		// PHP button
		var phpButton = createButton('php', js_lang.bbcode_php, js_lang.bbcode_php1);
		phpButton.onclick = function() {
			bbCode('php', textarea);
		};
		bbCodeButtons.appendChild(phpButton);

		// Code button
		var codeButton = createButton('code', js_lang.bbcode_code, js_lang.bbcode_code1);
		codeButton.onclick = function() {
			bbCode('code', textarea);
		};
		bbCodeButtons.appendChild(codeButton);

		// Quote button
		var quoteButton = createButton('quote', js_lang.bbcode_quote, js_lang.bbcode_quote1);
		quoteButton.onclick = function() {
			bbCode('quote', textarea);
		};
		bbCodeButtons.appendChild(quoteButton);

		// Spoiler button
		var spoilerButton = createButton('spoiler', js_lang.bbcode_spoiler, js_lang.bbcode_spoiler1);
		spoilerButton.onclick = function() {
			bbCode('spoiler', textarea);
		};
		bbCodeButtons.appendChild(spoilerButton);

		bbCodeButtons.appendChild(document.createTextNode("\u00a0"));

		// URL button
		var codeButton = createButton('url', js_lang.bbcode_url, js_lang.bbcode_url1);
		codeButton.onclick = function() {
			bbcURL('code', textarea);
		};
		bbCodeButtons.appendChild(codeButton);

		// Email button
		var quoteButton = createButton('email', js_lang.bbcode_email, '@');
		quoteButton.onclick = function() {
			bbcURL('quote', textarea);
		};
		bbCodeButtons.appendChild(quoteButton);

		// Img button
		var spoilerButton = createButton('img', js_lang.bbcode_image, js_lang.bbcode_image1);
		spoilerButton.onclick = function() {
			bbcURL('spoiler', textarea);
		};
		bbCodeButtons.appendChild(spoilerButton);
		
		bbCodeButtons.appendChild(document.createElement("br"));
		
		// Color drop down
		var colorSelect = document.createElement("select");
		var selectOption = document.createElement("option");
		selectOption.appendChild(document.createTextNode(js_lang.bbcode_color));
		colorSelect.appendChild(selectOption);
		var colors =  Array();
		colors['skyblue'] = js_lang.bbcode_skyblue;
		colors['royalblue'] = js_lang.bbcode_royalblue;
		colors['blue'] = js_lang.bbcode_blue;
		colors['darkblue'] = js_lang.bbcode_darkblue;
		colors['yellow'] = js_lang.bbcode_yellow;
		colors['orange'] = js_lang.bbcode_orange;
		colors['orangered'] = js_lang.bbcode_orangered;
		colors['crimson'] = js_lang.bbcode_crimson;
		colors['red'] = js_lang.bbcode_red;
		colors['firebrick'] = js_lang.bbcode_firebrick;
		colors['darkred'] = js_lang.bbcode_darkred;
		colors['green'] = js_lang.bbcode_green;
		colors['limegreen'] = js_lang.bbcode_limegreen;
		colors['seagreen'] = js_lang.bbcode_seagreen;
		colors['deeppink'] = js_lang.bbcode_deeppink;
		colors['tomato'] = js_lang.bbcode_tomato;
		colors['coral'] = js_lang.bbcode_coral;
		colors['purple'] = js_lang.bbcode_purple;
		colors['indigo'] = js_lang.bbcode_indigo;
		colors['burlywood'] = js_lang.bbcode_burlywood;
		colors['sandybrown'] = js_lang.bbcode_sandybrown;
		colors['sienna'] = js_lang.bbcode_sienna;
		colors['chocolate'] = js_lang.bbcode_chocolate;
		colors['teal'] = js_lang.bbcode_teal;
		colors['silver'] = js_lang.bbcode_silver;
		addOptions(colorSelect, colors, true);
		colorSelect.onchange = function() {
			bbcFont('color', this, textarea);
		};
		bbCodeButtons.appendChild(colorSelect);
		
		// Size drop down
		var sizeSelect = document.createElement("select");
		var selectOption = document.createElement("option");
		selectOption.appendChild(document.createTextNode(js_lang.bbcode_size));
		sizeSelect.appendChild(selectOption);
		var sizes =  Array();
		sizes['1'] = js_lang.bbcode_tiny;
		sizes['2'] = js_lang.bbcode_small;
		sizes['3'] = js_lang.bbcode_medium;
		sizes['5'] = js_lang.bbcode_large;
		sizes['7'] = js_lang.bbcode_huge;
		addOptions(sizeSelect, sizes, false);
		sizeSelect.onchange = function() {
			bbcFont('size', this, textarea);
		};
		bbCodeButtons.appendChild(sizeSelect);

		// Font drop down
		var fontSelect = document.createElement("select");
		var selectOption = document.createElement("option");
		selectOption.appendChild(document.createTextNode(js_lang.bbcode_font));
		fontSelect.appendChild(selectOption);
		var fonts =  Array();
		fonts['arial'] = js_lang.bbcode_arial;
		fonts['courier'] = js_lang.bbcode_courier;
		fonts['impact'] = js_lang.bbcode_impact;
		fonts['tohoma'] = js_lang.bbcode_tohoma;
		fonts['times'] = js_lang.bbcode_times;
		fonts['verdana'] = js_lang.bbcode_verdana;
		addOptions(fontSelect, fonts, false);
		fontSelect.onchange = function() {
			bbcFont('font', this, textarea);
		};
		bbCodeButtons.appendChild(fontSelect);

		bbCodeButtons.appendChild(document.createElement("br"));
		
		textarea.parentNode.insertBefore(bbCodeButtons, textarea);
		
		loadSmilies(textarea);
	};
	
	// Load language data
	if (js_lang || load_js_lang(textarea.buildButtons)) {
		
		// Attach events to textarea
		textarea.onclick= function() {
			if (this.createTextRange) {
				this.caretPos = document.selection.createRange().duplicate();
			}
		};
		
		textarea.onkeyup = textarea.onclick;
		textarea.onmouseout = textarea.onclick;
		textarea.onfocus = textarea.onclick;
		
		// Keyboard shortcuts
		textarea.onkeydown = function(e) {
			// Check if they are trying to move to another cell!
			var keynum;
			
			if(window.event) // IE
			{
				keynum = window.event.keyCode;
				if (!(window.event.modifiers & window.event.CONTROL_MASK)) return true;
			}
			else if(e.which) // Netscape/Firefox/Opera
			{
				keynum = e.which;
				if (!e.ctrlKey) return true;
			}
	
			switch (keynum) {
			case 66:
				bbCode('b', textarea);
				break;
			case 73:
				bbCode('i', textarea);
				break;
			case 85:
				bbCode('u', textarea);
				break;
			case 83:
				bbCode('s', textarea);
				break;
			case 75: // k
				bbCode('php', textarea);
				break;
			case 76: // l
				bbCode('code', textarea);
				break;
			case 81: // q
				bbCode('quote', textarea);
				break;
			case 82: // r
				bbCode('spoiler', textarea);
				break;
			case 72: // h
				bbcURL('url', textarea);
				break;
			case 69: // e
				bbcURL('email', textarea);
				break;
			case 74: // j
				bbcURL('img', textarea);
				break;
			default:
				return true
			}
			
			return false;
		};
		
		if (js_lang) {
			textarea.buildButtons();
		}
	}
	
	return false;
}

/* Code to handle clickable smiley's */

function loadSmilies(textarea) {
	var clickableArea = document.getElementById('clickablesmilies');
	
	if (!clickableArea) clickableArea = document.getElementById('quicksmilies');
	
	if (clickableArea) {
		//  clear out any previous child nodes
		if (clickableArea.childNodes > 0) {
			clickableArea.removeChild(clickableArea.childNodes[0]);
		}
		
		// Load smilies
		var handler = function(text) {
	
			var smiliesData = text.parseJSON();
			
			var smilesDiv = document.createElement("div");
			var heading = document.createElement("strong");
			var headingText = document.createTextNode(js_lang.jslang_smiles);
			heading.appendChild(headingText);
			smilesDiv.appendChild(heading);
			
			var list = document.createElement("ul");
			
			for (var smileItem in smiliesData) {
				var listItem = document.createElement("li");
				var itemAnchor = document.createElement("a");
				var itemImg = document.createElement("img");
				
				itemAnchor.href = "#";
				itemAnchor.smile = smileItem;
				itemAnchor.onclick = function() {
					insertSmiley(this.smile, textarea);
					return false;
				};
				
				itemImg.src = smiliesData[smileItem];
				itemImg.alt = smileItem;
				
				itemAnchor.appendChild(itemImg);
				listItem.appendChild(itemAnchor);
				list.appendChild(listItem);
			}
			
			smilesDiv.appendChild(list);
			
			clickableArea.appendChild(smilesDiv);
		};
		
		smiliesFetcher = getHTTPObject(handler);
		smiliesFetcher.requestData('jsdata', 'data', 'clickablesmilies');
	}
}

function insertSmiley(smiley, ta) {
  insertCode(getText(ta) + ' ' + smiley, ta);
}


