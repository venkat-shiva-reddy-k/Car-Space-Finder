
<?php

include 'config.php';

$cid = $_POST['cid'];
$carcompany = $_POST['ecarcompany'];
$carno = $_POST['ecarno'];

$color = $_POST['ecolor'];

$sql = " UPDATE car SET carcompany='$carcompany', carno='$carno', color='$color' WHERE cid='$cid' ";

if ($conn->query($sql) === TRUE) {
    //    echo "New record created successfully";
   // echo "Error: " . $sql . "<br>" . $conn->error;
     header('Location:user_profile.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
