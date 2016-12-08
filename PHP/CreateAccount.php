<?php
<<<<<<< HEAD
  session_start();
  require_once 'FunctionList.php';
  $_SESSION['first_name'] = $_POST['fname'];
  $_SESSION['username'] = $_POST['username'];

  $db = connect_database('localhost', 'root', '', 'personalwebsite');

  //store info in user_info table
  $username = $_POST['username'];
  $hashed_password = password_encrypt($_POST['password']);
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $birthday = $_POST['DateOfBirth'];

  //if the username and password already exist else try to insert the data into the table
  if (check_username_password()) {
    echo 'username/password already exists';
  } else {
    $sql = 'INSERT INTO user_info (username, hashed_password, first_name, last_name, email, birthday) VALUES (' . '"' . "{$username}" . '"' . ','. '"' . "{$hashed_password}" . '","' . "{$first_name}" . '","' . "{$last_name}" . '","' . "{$email}" . '","' . "{$birthday}" . '")';

    if (mysqli_query($db, $sql) == TRUE) {
      echo 'Data entered successfully';
      redirect_to('index.php');
    } else {
      echo 'Data entry error' . $db->error;
      echo $sql;
    }
  }
  mysqli_close($db);
=======
require_once 'FunctionList.php';

$db = connect_database('localhost', 'root', '', 'personalwebsite');

//store info in user_info table
$username = $_POST['username'];
$hashed_password = password_encrypt($_POST['password']);

//if the username and password already exist else try to insert the data into the table
if (check_username_password()) {
  echo 'htmlentities("username/password already exists")';
} else {

  $sql = 'INSERT INTO user_info (username, hashed_password) VALUES (' . '"' . "{$username}" . '"' . ','. '"' . "{$hashed_password}" . '")';

  if (mysqli_query($db, $sql) == TRUE) {
    echo 'Data entered successfully';
    redirect_to('index.php');
  } else {
    echo 'Data entry error' . $db->error;
    echo $sql;
  }
}
mysqli_close($db);
>>>>>>> 55bd6fc55c29a63b33e5ad2e7b4a738f9dfe6171
?>
