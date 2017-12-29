<?php 
session_start();
include("dbconnection.php");
if 	($_POST['submit']!=""){
	$firstname = $_POST ['firstname'];
	$lastname = $_POST ['lastname']; 
	$phonenumber = $_POST ['phonenumber'];
	$address = $_POST ['address'];
	$avatar = $_POST ['avatar'];
	
mysqli_query ($connection, "UPDATE coordinators SET firstname = '$firstname' and lastname = '$lastname'and phonenumber = '$phonenumber' and address = '$address' and avatar = '$avatar' WHERE CoordinatorID = '$CoordinatorID'");
if (mysqli_affected_rows ($connection)>0) {
    header('Location:coordinator-member.php');
}
}
	else {
    	header("Location:csetup.php?setupFailed=true&reason=error");
}
?>