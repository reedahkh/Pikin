<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Pikin - Verify</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
     
    

<?php
         
    session_start();
    include("dbconnection.php");
                
    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']));
        // Verify data
        $email = ($_GET['email']); 
        $hash = ($_GET['hash']); 
        echo $email;
        echo $hash;

        $sql = "SELECT email, hash, active, FROM parents WHERE email='$email' AND hash='$hash' AND active='0'"; 
        $result = mysqli_query ($connection, $sql);

<<<<<<< HEAD
        if (mysqli_num_rows($result) > 0) {
            $sqlx = "UPDATE parents SET active='1' WHERE email='$email', hash='$hash', active='0'";
            $resultx = mysqli_query ($connection, $sqlx);
        
            if (mysqli_num_rows($resultx)>0) {
=======
    if (mysqli_num_rows($result) > 0) {
<<<<<<< HEAD
        $sqlx = "UPDATE parents SET active='1' WHERE email='$email', hash='$hash', active='0'");
        $resultx = mysqli_query ($connection, $sqlx);
    
    if (mysqli_num_rows($resultx)>0) {

        while ($row = mysqli_fetch_assoc ($resultx)){

        
        echo 'Your account has been activated, you can now login ';
        header('location:setup.php');
    }
    else {
       
        echo 'The url is either invalid or you already activated your account';
    }
                 
} else {
=======
        $sqlx = "UPDATE parents SET active='1' WHERE email='$email', hash='$hash', active='0'";
        $resultx = mysqli_query ($connection, $sqlx);
    
        if (mysqli_num_rows($resultx)>0) {
>>>>>>> 9e1bd20db2fb63e49c9e434cf31520cc05bb7edf

                while ($row = mysqli_fetch_assoc ($resultx)){

                
                echo 'Your account has been activated, you can now login ';
                header('location:setup.php');

                }
            }

<<<<<<< HEAD
            else {
                echo 'The url is either invalid or you already activated your account';
            }
                    
    } 

    elseif (true) {
        echo 'Invalid approach, please use the link that has been sent to your email.';
        mysqli_free_result ($result);
        mysqli_close ($connection);

    }
    else {
        die(header("location:signup.php"));
    }
?>
=======
else {
>>>>>>> 165d05d41442f08e6329d31b431e97c22ad175cb
    echo 'Invalid approach, please use the link that has been sent to your email.';
}   
            mysqli_free_result ($result);
                mysqli_close ($connection);
                else 
                  die(header("location:signup.php"));
        ?>
>>>>>>> 9e1bd20db2fb63e49c9e434cf31520cc05bb7edf
       
 
         

</body>
</html>