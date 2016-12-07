<?php
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
?>
