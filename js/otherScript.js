window.onload = nonActiveTab("#contactPage", "#Contact");
window.onload =	nonActiveTab("#aboutPage", "#About"); 

$("#Contact").click(function() {
	nonActiveTab("#aboutPage", "#About");
	nonActiveTab("#homePage", "#Home");
	setActiveTab("#contactPage", "#Contact");
});

$("#About").click(function() {
	nonActiveTab("#contactPage", "#Contact");
	nonActiveTab("#homePage", "#Home");
	setActiveTab("#aboutPage", "#About");
});

$("#Home").click(function() {
	nonActiveTab("#contactPage", "#Contact");
	nonActiveTab("#aboutPage", "#About");
	setActiveTab("#homePage", "#Home");
});

function nonActiveTab(elementId, tabElementId) {
	$(elementId).css("display", "none");
	$(tabElementId).css("color", "#dfdcdc");
}

function setActiveTab(elementId, tabElementId) {
	$(elementId).css("display", "block");
	$(tabElementId).css("color", "white");
}