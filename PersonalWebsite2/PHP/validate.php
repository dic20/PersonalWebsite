<?php
	$fname = "";
	$lname = "";
	$email = "";
	$comments = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$fname = extract_data($_POST["fname"]);
		$lname = extract_data($_POST["lname"]);
		$email = extract_data($_POST["email"]);
		$comments = extract_data($_POST["comments"]);
	}
	
	function extract_data($input) {
		$input = trim($input);
		$input = stripslashes($input);
		$input = htmlspecialchars($input);
		return $input;
	}
	
	echo $fname;
	echo "<br>";
	echo $lname;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $comments;
	//code referenced from http://www.w3schools.com/php/php_form_validation.asp
?>