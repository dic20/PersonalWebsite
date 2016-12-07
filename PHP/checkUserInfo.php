<?php
session_start();

require_once 'FunctionList.php';

$_SESSION['username'] = $_POST['username'];

if(check_username_password()) {
  $_SESSION['registered_user'] = true;
  redirect_to('index.php');
} else {
  $_SESSION['registered_user'] = false;
  redirect_to('LandingPage.php');
}

IsAUser();
?>
