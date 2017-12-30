<?php
session_start();
include("dbconnection.php");

	$EducatorID = $_GET['EducatorID'];

	$sql = "DELETE from educators where EducatorID= '$EducatorID' ";
	$result = mysqli_query ($connection, $sql);
	if ($result) {
		header('location:admin-educators.php');
	}




?>