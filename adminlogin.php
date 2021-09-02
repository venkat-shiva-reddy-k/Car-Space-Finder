<?php
session_start();

include 'config.php';

$uname = $_POST['uname'];
$pass = $_POST['pass'];


$sql = "SELECT email,pass FROM admin where email='$uname' and pass='$pass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

   // fetch data
   $id = mysqli_fetch_array($result);
  $_SESSION["email"] = $uname;
//   echo "Error: " . $sql . "<br>" . $conn->error;
  header('Location:adminhome.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location:index.php');
  }
$conn->close();
?>
