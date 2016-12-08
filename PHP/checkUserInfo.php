<?php
session_start();

require_once 'FunctionList.php';

<<<<<<< HEAD
$_SESSION['username'] = $_POST['username'];

=======
>>>>>>> 55bd6fc55c29a63b33e5ad2e7b4a738f9dfe6171
if(check_username_password()) {
  $_SESSION['registered_user'] = true;
  redirect_to('index.php');
} else {
  $_SESSION['registered_user'] = false;
  redirect_to('LandingPage.php');
}

IsAUser();
?>
