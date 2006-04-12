var timezone_arrays = new Object();

function rebuildAllTZSelect()
{
  formSelectElements = document.getElementsByTagName("select");
  for(i=0; i<formSelectElements.length; i++)
  {
    if (formSelectElements[i].className.indexOf("timezone") > -1) {
      rebuildTimezoneSelect(formSelectElements[i]);
    }
  }
}

function rebuildTimezoneSelect(element)
{
	// Add the has to our element
	tempHash = new Object();
	
	re = /^([a-zA-Z]+)\/(.+)$/;
	// Create a new select
	selectFirst = document.createElement("select");
	selectFirst.name = "selector_" + element.name;
	selectFirst.className = element.className;
	
	oldSelectedValue = 0;

	// Go through the options creating a new set of options
	for (i=0; i<element.options.length; i++) {
		optiontext = document.createTextNode(element.options[i].text);
		matches = re.exec(element.options[i].text);
		
		if (! tempHash[matches[1]]) {
			optionline = document.createElement("option");
			
			tempHash[matches[1]] = new Array();
			
			optionline.text = matches[1];
			optionline.value = matches[1];
			selectFirst.appendChild(optionline);
		}
		
		if (element.options[i].selected) {
			selectFirst.selectedIndex = selectFirst.length - 1;
			oldSelectedValue = element.options[i].value;
		}
		tempHash[matches[1]][tempHash[matches[1]].length] = new Array(element.options[i].value, matches[2]); 
	}
	selectFirst.setAttribute("onchange", "buildSecondaryList(this)");
	element.parentNode.insertBefore(selectFirst, element);
	timezone_arrays[element.name] = tempHash;
	
	buildSecondaryList(selectFirst);
}

function buildSecondaryList(element)
{
	re = /^selector_(.+)$/;
	
	selectedItem = element.options[element.selectedIndex].value;
	matches = re.exec(element.name);
	name = matches[1];
	
	// Remove all options
	while (element.form[name].length)
		element.form[name].remove(0);
	
	for (i=0; i<timezone_arrays[name][selectedItem].length; i++)
	{
		optionline = document.createElement("option");
		optionline.value = timezone_arrays[name][selectedItem][i][0];
		optionline.text = timezone_arrays[name][selectedItem][i][1];
		if (oldSelectedValue == optionline.value) {
			optionline.selected = true;
			oldSelectedValue = 0;
		}
		element.form[name].appendChild(optionline);
	}
}

// Try different methods of attaching
if (document.addEventListener) {
	document.addEventListener("DOMContentLoaded", rebuildAllTZSelect, null);
}
                               

