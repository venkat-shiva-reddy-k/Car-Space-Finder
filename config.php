<?php
$hostname = "localhost";
$dbname = "carparking";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
