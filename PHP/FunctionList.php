<?php
require_once 'ConnectToDatabase.php';

<<<<<<< HEAD
function getUserName($userId) {
  $db = connect_database('localhost', 'root', '', 'personalwebsite');

  $query = "SELECT first_name FROM user_info WHERE id = '{$userId}' LIMIT 1";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);
  return $row['first_name'];
}

function getUserId($username) {
  $db = connect_database('localhost', 'root', '', 'personalwebsite');
  $safe_username = mysqli_real_escape_string($db, $username);

  $query = "SELECT id FROM user_info WHERE username = '{$safe_username}' LIMIT 1";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);
  return $row['id'];
}

function extract_data($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}
//code referenced from http://www.w3schools.com/php/php_form_validation.asp

=======
>>>>>>> 55bd6fc55c29a63b33e5ad2e7b4a738f9dfe6171
function check_username_password() {
  $db = connect_database('localhost', 'root', '', 'personalwebsite');

  $username = $_POST['username'];
  $password = $_POST['password'];

  $safe_username = mysqli_real_escape_string($db, $username);

  $query = "SELECT * FROM user_info WHERE username = '{$safe_username}' LIMIT 1";
  $result = mysqli_query($db, $query);

  if($user = mysqli_fetch_assoc($result)) {
    //check password
    if(password_check($password, $user['hashed_password'])) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}

function password_check($password, $existing_hash) {
  $hash = crypt($password, $existing_hash);
  if($hash == $existing_hash) {
    return true;
  } else {
    return false;
  }
}

function password_encrypt($password) {
  //specifieing blowfish hash algorithm with a 10 times to run
  $hash_format = "$2y$10$";

  //salt wants 22 characters or more
  $salt_length = 22;

  $salt = generate_salt($salt_length);

  $format_and_salt = $hash_format . $salt;

  $hash = crypt($password, $format_and_salt);

  return $hash;
}

function generate_salt($length) {
  //reference Linda mysql essential training video
  //md5 returns 32 characters
  $unique_random_string = md5(uniqid(mt_rand(), true));

  //change string into valid salt characters which base64 has
  $base64_string = base64_encode($unique_random_string);

  //+ is not a valid salt character so need to modify the string
  $modified_base64_string = str_replace('+', '.', $base64_string);

  //Truncate string to the correct length
  $salt = substr($modified_base64_string, 0, $length);

  return $salt;
}

function checkUserInfo() {
  if(check_username_password()) {
    redirect_to('index.php');
  } else {
    redirect_to('LandingPage.php');
  }
}

function redirect_to($new_location) {
  header('Location: ' . $new_location);
  exit;
}

function IsAUser() {
  return $_SESSION['registered_user'];
}
?>
