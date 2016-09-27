window.onload = displayText();

function displayText() {
	setToDefaultTab("ContactTab", "contact");
	setToDefaultTab("InfoTab", "info");
	setToDefaultTab("OtherTab", "other");
	
	document.getElementById("text").style.display="block";
	activeTab("TextTab");
}

function displayInfo() {
	setToDefaultTab("ContactTab", "contact");
	setToDefaultTab("TextTab", "text");
	setToDefaultTab("OtherTab", "other");
	
	document.getElementById("info").style.display="block";
	activeTab("InfoTab");	
}

function displayContact() {
	setToDefaultTab("InfoTab", "info");
	setToDefaultTab("TextTab", "text");
	setToDefaultTab("OtherTab", "other");
	
	document.getElementById("contact").style.display="block";
	activeTab("ContactTab");
}

function displayOtherTab() {
	setToDefaultTab("InfoTab", "info");
	setToDefaultTab("TextTab", "text");
	setToDefaultTab("ContactTab", "contact");
	
	document.getElementById("other").style.display="block";
	activeTab("OtherTab");
}

function setToDefaultTab(elementName, elementId) {
	var x = document.getElementsByName(elementName)[0];
	x.style.backgroundColor="grey";
	x.style.color="white";
	x.style.textShadow="none";
	x.style.borderBottom="solid 3px white";
	
	document.getElementById(elementId).style.display="none";
}

function activeTab(elementName) {
	var x = document.getElementsByName(elementName)[0];
	x.style.backgroundColor="61b8e8";
	x.style.color="white";
	x.style.textShadow="2px 2px 2px black";
	x.style.borderBottom="solid 3px 61b8e8";
}
