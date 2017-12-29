<?php
session_start();
include("dbconnection.php");
if 	($_POST['submit']!=""){
	$firstname = $_POST ['firstname'];
	$lastname = $_POST ['lastname']; 
	$phonenumber = $_POST ['phonenumber'];
	$homeaddress = $_POST ['homeaddress'];
	$homesuburb = $_POST ['homesuburb'];
	$homepostcode = $_POST ['homepostcode'];
	$officeaddress = $_POST ['officeaddress'];
	$officesuburb = $_POST ['officesuburb'];
	$officepostcode = $_POST ['officepostcode'];
	$image = $_POST ['image'];
	$numkids = $_POST ['numkids'];
	$ageofkids = $_POST ['ageofkids'];
	$typeofservice = $_POST ['typeofservice'];
	$servicehours = $_POST ['servicehours'];
mysqli_query ($connection, "UPDATE parents SET firstname = '$firstname' and lastname = '$lastname'and phonenumber = '$phonenumber' and homeaddress = '$homeaddress' and homesuburb = '$homesuburb' and homepostcode = '$homepostcode' and officeaddress = '$officeaddress' and officesuburb = '$officesuburb' and officepostcode = '$officepostcode' and image = '$image' and numkids = '$numkids' and ageofkids = '$ageofkids' and typeofservice = '$typeofservice' and servicehours = '$servicehours' WHERE ParentID = '$ParentID'");
if (mysqli_affected_rows ($connection)>0) {
    header('Location:pmember.php');
}
}
	else {
    	header("Location:setup.php?setupFailed=true&reason=error");
}
?>