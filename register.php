<?php
	include("dbconnection.php"); //creates database connection

	if(isset($_POST["firstname"])) {
		$firstname = $_POST ['firstname']; 
		$lastname = $_POST ['lastname']; 
		$email = $_POST ['email']; 
		$password = $_POST ['password']; 
		$paymentmethod = $_POST ['paymentmethod'];
		$hash = md5(rand (0,1000));

		$sql = "INSERT INTO parents (firstname, lastname, email, password, paymentmethod, hashkey) VALUES ('$firstname', '$lastname', '$email', 'SHA1 ($password)', '$paymentmethod', '$hash')";
		if ($connection->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $connection->error;
		}
	}

	else {
		die(header('Location: index.php'));
	}




?>