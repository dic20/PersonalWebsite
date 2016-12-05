<?php
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
?>
