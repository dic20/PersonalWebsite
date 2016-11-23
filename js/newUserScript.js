function createAccount() {
	var required = document.getElementsByTagName('input');
	var pass1 = document.getElementById("password").value;
	var pass2 = document.getElementById("pass2").value;

	for(var i = 0; i < required.length; i++) {
		if( required[i].hasAttribute('required') && required[i].value == '' ) {
			return false;
		}
	}

	if( pass1 != pass2 )
	{
		event.preventDefault();
		alert("The passwords did not match");
		return false;
	}
}
