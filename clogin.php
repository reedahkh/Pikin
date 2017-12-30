<?php
session_start();
include("dbconnection.php"); //creates database connection
if (isset($_POST['email']) && isset($_POST['password'])) { 
	$email = $_POST ['email'];
	$password = $_POST ['password'];
	//Executes the query
	$sql = "SELECT * from coordinators where email = '$email' and password = 'SHA1 ($password)' ";
	$result = mysqli_query ($connection, $sql);
	if (mysqli_num_rows($result)>0){
			while ($row = mysqli_fetch_assoc ($result)) {
			$_SESSION['CoordinatorID'] = $row['CoordinatorID'];
			$_SESSION['email'] = $row['email'];
			header("Location:coordinator-member.php");
		}
	}	
	
}
else {
	header('Location:csignin.php?loginFailed=true&reason=password'); 
}
?>