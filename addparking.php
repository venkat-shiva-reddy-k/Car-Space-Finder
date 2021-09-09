
<?php

include 'config.php';

$parea = $_POST['parea'];
$pslot = $_POST['pslot'];

$pprice = $_POST['pprice'];


$sql = " INSERT INTO parkingslots (aid, parkslot, price, status)
VALUES ('$parea', '$pslot', '$pprice', 'Available')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  header('Location:slots.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
