<?php
$servername='localhost';
$username='root';
$password='';
$database='PersonalWebsite';

//connect to database
$db = mysqli_connect($servername, $username, $password, $database)
or die('Error connecting to MySQL server' + $db->Error);

//query database$query = "SELECT * FROM user_info";
$query = "SELECT * FROM user_info";
mysqli_query($db, $query) or die ('Error querying database');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
  echo $row['first_name']. ' ' .$row['last_name']. ' ' . $row['email'];
}

//close database
mysqli_close($db);

// IF ($_SERVER['REQUEST_METHOD'] == 'GET') {
//   $USERNAME = EXTRACT_DATA($_GET['USERNAME']);
//   $PASS = EXTRACT_DATA($_GET['PASSWORD']);
// }
//
// FUNCTION EXTRACT_DATA($INPUT) {
//   $INPUT = TRIM($INPUT);
//   $INPUT = STRIPSLASHES($INPUT);
//   $INPUT = HTMLSPECIALCHARS($INPUT);
//   RETURN $INPUT;
// }
?>
