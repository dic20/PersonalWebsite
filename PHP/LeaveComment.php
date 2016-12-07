<?php
  require_once 'FunctionList.php';

  $db = connect_database('localhost', 'root', '', 'personalwebsite');

  $first_name = extract_data($_POST['fname']);
  $last_name = extract_data($_POST['lname']);
  $email = extract_data($_POST['email']);
  $comment = extract_data($_POST['comments']);

  $sql = 'INSERT INTO comments (first_name, last_name, email, comment) VALUES (' . '"' . "{$first_name}" . '"' . ','. '"' . "{$last_name}" . '","' . "{$email}" . '","' . "{$comment}" . '")';

  if (mysqli_query($db, $sql) == TRUE) {
    redirect_to('index.php');
    echo 'Data entered successfully';
  } else {
    echo 'Data entry error' . $db->error;
    echo $sql;
  }

  mysqli_close($db);
?>
