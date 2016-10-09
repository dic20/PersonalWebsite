$(".navbar-fixed-top").click(function() {
	$("#navList").slideToggle("slow");
});

$("#contact").click(function() {
	nonActiveTab("#aboutPage");
	nonActiveTab("#homePage");
	setActiveTab("#contactPage");
});

$("#about").click(function() {
	nonActiveTab("#contactPage");
	nonActiveTab("#homePage");
	setActiveTab("#aboutPage");
});

$("#home").click(function() {
	nonActiveTab("#contactPage");
	nonActiveTab("#aboutPage");
	setActiveTab("#homePage");
});

function nonActiveTab(elementId) {
	$(elementId).css("display", "none");
	$(elementId).css("color", "white");
}

function setActiveTab(elementId) {
	$(elementId).css("display", "block");
	$(elementId).css("color", "purple");
}