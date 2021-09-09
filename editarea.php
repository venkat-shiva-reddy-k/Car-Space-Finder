<?php

include 'config.php';

$aid = $_POST['aid'];
$estate = $_POST['estate'];
$ecity = $_POST['ecity'];

$earea = $_POST['earea'];

$sql = " UPDATE area SET state='$estate', city='$ecity', area='$earea' WHERE aid='$aid' ";

if ($conn->query($sql) === TRUE) {
    //    echo "New record created successfully";
   // echo "Error: " . $sql . "<br>" . $conn->error;
     header('Location:adminhome.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

