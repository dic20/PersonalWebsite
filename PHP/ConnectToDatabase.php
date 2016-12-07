<?php
  function connect_database($servername, $username, $password, $database) {
    $db = null;
    //connect to database
    $db = mysqli_connect($servername, $username, $password, $database)
    or die('Error connecting to MySQL server');

    return $db;
  }
?>
