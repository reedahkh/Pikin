<?php 
session_start();
include("dbconnection.php");
if (isset($_POST["submit"]) && !empty($_POST["submit"])); 
	$suburb = $_POST ['suburb'];
	$typeofservice = $_POST ['typeofservice'];
	$starttime = $_POST ['starttime'];
	$endtime = $_POST ['endtime'];
	$paymentmethod = $_POST ['paymentmethod'];
	foreach($_POST['day'] as $dayofweek) {
		$days .= $dayofweek . " , ";
	}	
mysqli_query ($connection, "INSERT INTO booking (suburb, typeofservice, day, starttime, endtime, paymentmethod) VALUES ('$suburb', '$typeofservice', '$days', '$starttime', '$endtime', '$paymentmethod')");
if (mysqli_affected_rows ($connection)>0) {
	header('Location: bookingsuccess.php');
}
	else {
		die(header('location: booking.php?bookingFailed=true&reason=booking'));
}
?>