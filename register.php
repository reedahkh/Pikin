<?php

session_start();
include("dbconnection.php"); //creates database connection
require_once("PhpMailer/class.phpmailer.php");
require_once("PhpMailer/class.smtp.php");

if (isset($_POST["firstname"])) {
	$firstname = $_POST ['firstname']; 
	$lastname = $_POST ['lastname']; 
	$email = $_POST ['email']; 
	$password = $_POST ['password']; 
	$paymentmethod = $_POST ['paymentmethod'];
	$hash = md5(rand (0,1000));

	//Executes the query
	$sql = "INSERT INTO parents (firstname, lastname, email, password, paymentmethod, hashkey) VALUES ('$firstname', '$lastname', '$email', 'SHA1 ($password)', '$paymentmethod', '$hash')";
	if ($connection->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $connection->error;
	}
	echo $sql;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$to = $email;
		$from = "talk2vinciii@gmail.com";
		$fromName = "Pikin";
		$subject = "Signup | Verification ";
		$message = "Thanks for signing up on Pikin! <br> Your account has been created, you can login with the following credentials after activating your account by clicking on the link below. 
		<br>
		-------------------- <br>
		Username: ' .$email .' <br>
		Password: ' .$password .' <br>
		-------------------- <br>
		Please click this link to setup your account: <br>
		http://pikin.com.au/verify.php?email=$email&hash=$hash";
		$headers = 'From:info@pikin.com.au'. "\r\n";

		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->CharSet="UTF-8";
		$mail->Host = 'mail.pikin.com.au';
		$mail->Port = 25;
		$mail->Username = 'info@pikin.com.au';
		$mail->Password = 'Pickcrm#3@1';
		$mail->SMTPAuth = true;


		$mail->From = 'info@pikin.com.au';
		$mail->FromName = 'Pikin';
		$mail->AddAddress("$email");
		$mail->AddAddress("info@pikin.com.au");

		$mail->IsHTML(false);
		$mail->Subject    = $subject;
		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
		$mail->Body    = $message;
		
		

		if(!$mail->Send())
		{
		echo "Mailer Error: " . $mail->ErrorInfo;
		}
		else
		{
		echo "Message sent!";
		}

		die(header('Location:success.html'));

	}

}


else {
	die(header('Location: signup.php'));
	echo mysqli_error($connection);	
} 


?>