<?php

include 'config.php';

$pid = $_POST['pid'];
$parkslot = $_POST['parkslot'];
$status = $_POST['status'];
$price = $_POST['price'];


$sql = " UPDATE parkingslots SET parkslot='$parkslot', status='$status', price='$price' WHERE pid='$pid' ";

if ($conn->query($sql) === TRUE) {
    //    echo "New record created successfully";
   // echo "Error: " . $sql . "<br>" . $conn->error;
     header('Location:slots.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
