function GuestUser() {
	window.location.href="./otherPage.html";
}

function NewUser() {
	window.location.href="./newUserPage.html";
}

function SignInUser() {
	window.location.href="SignIn.html";
}

function carouselLeft() {
	var image1 = $("#leftImage").css("background-image");
	var image2 = $("#rightImage").css("background-image");
	var image3 = $("#centerImage").css("background-image");
	
	$("#centerImage").fadeOut("fast");
	$("#rightImage").fadeOut("fast");
	$("#leftImage").fadeOut("fast");
	
	setTimeout(function() {
		$("#centerImage").css("background-image", image2);	
		$("#leftImage").css("background-image", image3);
		$("#rightImage").css("background-image", image1);
	
		$("#leftImage").fadeIn("fast");
		$("#centerImage").fadeIn("fast");
		$("#rightImage").fadeIn("fast");
	}, 100);
}

function carouselRight() {
	var image1 = $("#leftImage").css("background-image");
	var image2 = $("#rightImage").css("background-image");
	var image3 = $("#centerImage").css("background-image");
	
	$("#centerImage").fadeOut("fast");
	$("#rightImage").fadeOut("fast");
	$("#leftImage").fadeOut("fast");
	
	setTimeout(function() {
		$("#centerImage").css("background-image", image1);	
		$("#leftImage").css("background-image", image2);
		$("#rightImage").css("background-image", image3);
	
		$("#leftImage").fadeIn("fast");
		$("#centerImage").fadeIn("fast");
		$("#rightImage").fadeIn("fast");
	}, 100);
}