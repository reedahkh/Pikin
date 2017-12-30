<?php
session_start();
include("dbconnection.php");

	$CoordinatorID = $_GET['CoordinatorID'];

	$sql = "DELETE from coordinators where CoordinatorID= '$CoordinatorID' ";
	$result = mysqli_query ($connection, $sql);
	if ($result) {
		header('location:admin-coordinators.php');
	}




?>