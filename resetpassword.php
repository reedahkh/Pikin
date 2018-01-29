<?php
	include("dbconnection.php");
	require_once("class.phpmailer.php");
	require_once("class.smtp.php");
	
	
	//Collect email
	//check if email exists in db
	//no? email not found
	//yes? create hash, save email and hash to db.
	//send mail to with link to email
	//on link click: verify email and hash, 
	//present password and confirm password boxes
	//save both to db
	//delete hash entrys
	//present success page.

	if(isset($_POST['email'])){

		$page = $_POST['page'];
		$email = $_POST['email'];
		$hash = md5(rand(0,1000));

		

		switch ($page) {

    		case "parents":
    			
    			
        		$sql = "SELECT * FROM parents WHERE email = '$email'";
        		$result = mysqli_query($connection, $sql);
        		
        		
        		if ($result->num_rows > 0){
        			$queryString = "INSERT INTO passwordReset (email, hashvalue) VALUES ('$email', '$hash')";
        			$resetlink = "http://pikin.com.au/newpassword.php?email=$email&hash=$hash";

        			
        			if ($connection->query($queryString) == true ) {
        				SendEmail($email, $resetlink);
            		}  
    			} 
    			else {
    				//redirect to email not found page
    				header('location:resetparentpassword.php?resetFailed=true&reason=email');
    				} 
    			
        		break;

    		case "coordinators":
    			echo "here";
    			
        		$csql = "SELECT * FROM coordinators WHERE email = '$email'";
        		$cresult = mysqli_query($connection, $csql);
        		print_r($cresult);
        		
        		if ($cresult->num_rows > 0){
        			$queryStringC = "INSERT INTO passwordReset (email, hashvalue) VALUES ('$email', '$hash')";
        			$resetlink = "http://pikin.com.au/newpassword.php?email=$email&hash=$hash";

        			echo $resetlink;
        			if ($connection->query($queryStringC) === true ) {
        				SendEmail($email, $resetlink);
            		}
			        
    			} else {
    				//redirect to email not found page
    				header('location:cpassword.php?resetFailed=true&reason=email');
    			}
        		break;

    		case "educators":
    		echo "here";
    			
        		$esql = "SELECT * FROM educators WHERE email = '$email'";
        		$eresult = mysqli_query($connection, $esql);
        		print_r($eresult);
        		
        		if ($eresult->num_rows > 0){
        			$queryStringE = "INSERT INTO passwordReset (email, hashvalue) VALUES ('$email', '$hash')";
        			$resetlink = "http://pikin.com.au/newpassword.php?email=$email&hash=$hash";

        			echo $resetlink;
        			if ($connection->query($queryStringE) === true ) {
        				SendEmail($email, $resetlink);
            		}
			        
    			} else {
    				//redirect to email not found page
    				header('location:epassword.php?resetFailed=true&reason=email');
    			}
        		break;

    		default: 
    			header('location:index.php');
		}

	}

	function SendEmail($recipientEmail, $resetString) {
		
		$subject = "Pikin | Password ";
		$message = " Someone attempted to change your password on pikin.com.au. <br/> Use the link below to set a new password if it was you. <br/> Ignore this message if you didn't request a password change.<br/> 
				<br/>". $resetString;

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
		$mail->AddAddress("$recipientEmail");
		$mail->AddAddress("info@pikin.com.au");
		$mail->IsHTML(false);
		$mail->Subject    = $subject;
		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
		$mail->Body = $message;
		
		
		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			die(header('Location:success.html'));
		}
	}
?>