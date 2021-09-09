
<?php
session_start();
include 'config.php';

$carno = $_POST['carno'];
$date = $_POST['date'];
$time = $_POST['time'];

$price = $_POST['price'];

$pid = $_POST['aid'];
$uemail = $_POST['uemail'];




$sql = "INSERT INTO booking (email, carno, price, dat, time, status, pid)
VALUES ('$uemail', '$carno', '$price', '$date','$time', 'Booked', '$pid')";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    $sql1 = "UPDATE parkingslots SET status='Booked' WHERE pid='$pid'";
    $conn->query($sql1);

      echo "<script>alert('Successfully Booked');document.location='home.php'</script>";
} else {
    echo "<script>alert('Booking Unsuccessful');document.location='home.php'</script>";
}

$conn->close();
