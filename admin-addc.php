<?php
session_start();
include("dbconnection.php");

if (isset($_POST["submit"])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT email from coordinators where email ='$email' ";
	$result =  mysqli_query($connection, $sql);
		if ($result->num_rows > 0) {
			die(header('Location:admin-coordinators.php?RegisterFailed=true&reason=email'));
		}

		elseif ($result->num_rows == 0) {
			$sqlx = "INSERT INTO coordinators (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', 'SHA1 ($password)') ";
		}

		if ($connection->query($sqlx) === TRUE ){ 
			header('location:admin-coordinators.php?RegisterSuccessful=true&reason=success');
		}
		
}
?>