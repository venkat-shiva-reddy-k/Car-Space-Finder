<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM parkingslots WHERE pid='$id';";
	 

if($conn->query($sql)===TRUE){

echo "Deleted Successfully";
header('location:slots.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;};
?>

