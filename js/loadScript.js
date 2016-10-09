/*
The code for this selector/load script came from the link below

http://stackoverflow.com/questions/15521343/conditionally-load-javascript-file
*/

window.onload = selectScript();

var width = $(document).width();

function selectScript() {
	var body = document.getElementsByTagName('body')[0];
	var js = document.createElement('script');

	js.id='mediaType';

	if ( screen.width > 500 && $(document).width() > 500 )
	{
		js.src='./js/otherScript.js';
	}
	else
	{
		js.src='./js/mobileScript.js';
	}

	body.appendChild(js);
}

/*if window is resized to the point where it should change to a different view it reloads the page*/

$(window).resize(function() {
	if( $(document).width() < 500 && width > 500 )
	{
		location.reload();
	}
	else if ( $(document).width() > 500 && width < 500 )
	{
		location.reload();
	}
});



