<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM area WHERE aid='$id';";
	 
if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:adminhome.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;}
