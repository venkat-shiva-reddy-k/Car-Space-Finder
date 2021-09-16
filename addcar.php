<?php
 session_start();

                
include 'config.php';
//SELECT `cid`, `carcompany`, `carno`, `color` FROM `car` WHERE 1
$compnay = $_POST['compnay'];
$carno = $_POST['carno'];

$color = $_POST['color'];
$email = $_SESSION["email"];;

$sql = " INSERT INTO car (carcompany, carno, color, email)
VALUES ('$compnay', '$carno', '$color', '$email')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  header('Location:user_profile.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
