<?php
session_start();
include("dbconnection.php"); //creates database connection

if (isset($_POST["submit"]) && !empty($_POST["submit"]));

$firstname = $_POST ['firstname']; 
$lastname = $_POST ['lastname']; 
$email = $_POST ['email']; 
$password = $_POST ['password']; 
$paymentmethod = $_POST ['paymentmethod'];
$hash = md5(rand (0,1000));

//Executes the query
mysqli_query ($connection, "INSERT INTO parents (firstname, lastname, email, password, paymentmethod, hash) VALUES ('$firstname', '$lastname', '$email', 'SHA1 ($password)', '$paymentmethod', '$hash')");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$to = $email;
	$subject = "Signup | Verification ";
	$message = "Thanks for signing up on Pikin! <br> Your account has been created, you can login with the following credentials after activating your account by clicking on the link below. 
	<br>
	-------------------- <br>
	Username: ' .$email .' <br>
	Password: ' .$password .' <br>
	-------------------- <br>
	Please click this link to setup your account: <br>
	http://pikin.com.au/verify.php?email='.$email.'&hash='.$hash.'";
	$headers = 'From:info@pikin.com.au'. "\r\n";
	mail($to, $subject, $message, $headers);
}
 

else {
	die(header('Location: signup.php'));
	echo mysqli_error($connection);	
} 

?>