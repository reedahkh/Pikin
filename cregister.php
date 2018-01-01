<?php
	error_reporting(E_ALL);
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors',1);
	include("dbconnection.php"); //creates database connection
	require_once("class.phpmailer.php");
	require_once("class.smtp.php");
	if(isset($_POST["firstname"])) {
		$firstname = $_POST ['firstname']; 
		$lastname = $_POST ['lastname']; 
		$email = $_POST ['email']; 
		$password = $_POST ['password']; 
		$hash = md5(rand (0,1000));

		$sql = "SELECT email from coordinators where email ='$email' ";
		$result = mysqli_query($connection, $sql);
		if ($result->num_rows > 0) {
			die(header('Location:csignup.php?signupFailed=true&reason=email'));
		}

		else {
			
		$sqlx = "INSERT INTO coordinators (firstname, lastname, email, password, hashkey) VALUES ('$firstname', '$lastname', '$email', 'SHA1 ($password)', '$hash')";
		}

		if ($connection->query($sqlx) == TRUE) {
			$subject = "Signup | Verification ";
			$message = $message = "Thanks for signing up on Pikin! <br/> Your account has been created, you can login with the following credentials after activating your account by clicking on the link below. <br/>-------------------- <br/>Username: $email <br/>Password: $password <br/>-------------------- <br/>Please click this link to setup your account: <br/>http://pikin.com.au/cverify.php?email=$email&hash=$hash";
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
			die(header('Location:success.html'));
			}
		
		}	
	}
	else {
		die(header('Location: index.php'));
	}
?>