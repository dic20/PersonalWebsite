<?php
  session_start();
  require_once 'FunctionList.php';
?>
<!DOCTYPE html5>
<html>
	<head>
		<title>Daniel Critchfield Personal Website</title>

		<meta name="author" content="Daniel Critchfield">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="../CSS/newUserStyle.css">
	</head>
  <body>
		<div id="mainContainer">
			<div id="topOfPage">
				<h1>Welcome New User</h1>
			</div>
			<div id="formHolder">
				<form method="POST" action="CreateAccount.php">
					<fieldset>
						<legend>Name:</legend>
						<label for="fname">First Name:</label>
						<input type="text" id="fname" value="" placeholder="First Name" name="fname" required>
						<br />

						<label for="lname">Last Name:</label>
						<input type="text" id="lname" value="" placeholder="Last Name" name="lname" required>
					</fieldset>

					<fieldset>
						<legend>User Info:</legend>
						<label>Date Of Birth:</label>
						<input type="date" id="dateOfBirth" value="" name="DateOfBirth" required>
					</fieldset>

					<fieldset>
						<legend>Login Info:</legend>
						<label for="email">Email:</label>
						<input type="email" id="email" value="" name="email" placeholder="something@something" required>
						<br />

						<label for="uname">Username:</label>
						<input type="text" id="uname" value="" name="username" placeholder="Username" required>
						<br />

						<label for="pass">Password:</label>
						<input type="password" id="pass" value="" name="password" placeholder="************" required>

						<label for="pass2">Confirm Password:</label>
						<input type="password" id="pass2" value="" name="pass2" placeholder="*************" required>
					</fieldset>
					<button type="submit" id="submitButton" name="submitButton" value="Submit">Create Account</button>
				</form>
			</div>
		</div>
		<noscript>You Must Turn On JavaScript For The Full Website!</noscript>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="../JS/newUserScript.js"></script>
  </body>
</html>
