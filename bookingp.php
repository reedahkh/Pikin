<?php 
session_start();
include("dbconnection.php");
if(isset($_POST["submit"])) { 
	$ParentID = $_SESSION['ParentID'];
	$EducatorID = $_GET['EducatorID'];
	$postcode = $_POST ['postcode'];
	$suburb = $_POST ['suburb'];
	$typeofservice = $_POST ['typeofservice'];
	$starttime = $_POST ['starttime'];
	$endtime = $_POST ['endtime'];
	$paymentmethod = $_POST ['paymentmethod'];
	foreach($_POST['day'] as $dayofweek) {
		$days .= $dayofweek . " , ";
	}

	$sql = "INSERT INTO booking (ParentID, EducatorID, postcode, suburb, typeofservice, day, starttime, endtime, paymentmethod) VALUES ('$ParentID', '$EducatorID', '$postcode', '$suburb', '$typeofservice', '$days', '$starttime', '$endtime', '$paymentmethod')";
	
	if ($connection->query($sql) === TRUE ) {
		header("Location:bookingsuccess.php");
	}
}
	else {
		header('location:booking.php?bookingFailed=true&reason=booking');
	}
?>