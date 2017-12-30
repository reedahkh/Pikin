<?php
session_start();
include("dbconnection.php");

	$ParentID = $_GET['ParentID'];

	$sql = "DELETE from parents where ParentID= '$ParentID' ";
	$result = mysqli_query ($connection, $sql);
	if ($result) {
		header('location:admin-parents.php');
	}




?>