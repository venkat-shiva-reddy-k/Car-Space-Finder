<?php

include 'config.php';

$astate = $_POST['astate'];
$acity = $_POST['acity'];

$aplace = $_POST['aplace'];


$sql = " INSERT INTO area (state, city, area)
VALUES ('$astate', '$acity', '$aplace')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  header('Location:adminhome.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

