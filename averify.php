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
                
    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])) {
        // Verify data
        $email = ($_GET['email']); 
        $hash = ($_GET['hash']); 
        $sql = "SELECT * FROM parents WHERE active='1' AND email='$email' AND hashkey='$hash'";
        $result = mysqli_query ($connection, $sql);
        if ($result->num_rows > 0){
            die(header("Location:verified.html"));
        }

        else {
            $sqlx = "UPDATE parents SET active='1' WHERE email='$email'";
                if ($connection->query($sqlx) === TRUE) {
                    $_SESSION['email'] = $email;
                    $_SESSION['ParentID'] = $ParentID;
                    header('location:setup.php');
                
                } 
            
        }            
         
    }
                 
    else {
        die(header("location:signup.php"));
    }
?>

</body>
</html>