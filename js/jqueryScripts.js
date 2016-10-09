$("#slideOutContainer").click(function() {
	if ( $("#hiddenContent").css("display") == "block" ) {
		$("#hiddenContent").animate({width: "0"});
		$("#hiddenContent").css("display", "none");
		$(".point-format p").html("&#8658;");
	}
	else {
		$("#hiddenContent").animate({width: "50%"});
		$("#hiddenContent").css("display", "block");
		$(".point-format p").html("&#8656;");
	}
});

$("form[name='contact-form']").submit(function() {
	return false;
});