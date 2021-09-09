<?php
session_start();
include 'config.php';

$bid = $_GET['pid'];

$sql ="UPDATE parkingslots SET status='Available' WHERE pid='$bid'";

if ($conn->query($sql) === TRUE) {
  
      echo "<script>alert('Successfully Updated');document.location='adminbookings.php'</script>";
} else {
    echo "<script>alert('Updation Unsuccessful');document.location='adminbookings.php'</script>";
}

$conn->close();
