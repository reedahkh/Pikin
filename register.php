<?php
	include("dbconnection.php"); //creates database connection
	require_once("PhpMailer/class.phpmailer.php");
	require_once("PhpMailer/class.smtp.php");

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

		$subject = "Signup | Verification ";
		$message = "Thanks for signing up on Pikin!";

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

		$mail->IsHTML(true);
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

	else {
		die(header('Location: index.php'));
	}
?>