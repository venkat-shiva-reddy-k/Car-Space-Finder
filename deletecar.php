
<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM car WHERE cid='$id';";
	 
if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:user_profile.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;}
