<?php
private class connection {

  $server = "localhost";
  $username = "root";
  $password = "\$Kaliman5364";
  $database;

  public function __construct() {
    $database = mysqli_connect($server, $username, $password)
      or die("Error connection to MySQL server");
  }

  protected function databaseAccess() {
    return $this->database;
  }
}
?>
