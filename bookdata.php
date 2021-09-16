<?php
session_start();
include 'config.php';

$carno = $_POST['carno'];
$date = $_POST['txtDate'];
$time = $_POST['time'];

$price = $_POST['price'];

$pid = $_POST['aid'];
$uemail = $_POST['uemail'];

//SELECT `bid`, `email`, `carno`, `price`, `dat`, `time`, `status`, `pid` FROM `booking` WHERE 1


// $sql = "INSERT INTO booking (email, carno, price, dat, time, status, pid)
// VALUES ('$uemail', '$carno', '$price', '$date','$time', 'Booked', '$pid')";

// if ($conn->query($sql) === TRUE) {
//     // echo "New record created successfully";
//     $sql1 = "UPDATE parkingslots SET status='Booked' WHERE pid='$pid'";
//     $conn->query($sql1);

//       echo "<script>alert('Successfully Booked');document.location='home.php'</script>";
// } else {
//     echo "<script>alert('Booking Unsuccessful');document.location='home.php'</script>";
// }


$query = "SELECT * from booking where pid='$pid' and dat='$date' and time='$time' ";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
$query1="INSERT INTO booking (email, carno, price, dat, time, status, pid)
VALUES ('$uemail', '$carno', '$price', '$date','$time', 'Booked', '$pid')";

$retval = mysqli_query($conn,$query1);

 echo "<script>alert('Successfully Booked');document.location='home.php'</script>";
}else{

    echo "<script>alert('Slot in not available Booking Unsuccessful');document.location='home.php'</script>";
}

?>
