<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM booking WHERE bid='$id';";
	 
if($conn->query($sql)===TRUE){
echo "Cancelled Successfully";
header('location:mybookings.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;}
