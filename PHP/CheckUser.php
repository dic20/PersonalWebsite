<?php
require_once 'connectionScript.php';

$conn = new connection();

$database = $conn->databaseAccess();
echo '<script>alert("worked");</script>';
?>
