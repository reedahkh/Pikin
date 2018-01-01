<?php
session_start();
include("dbconnection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    $sql = "SELECT * from admin where email = '$email' and password = '$password' ";
    $result = mysqli_query ($connection, $sql);
    if ($result->num_rows > 0){
        while ($row = mysqli_fetch_assoc ($result)) {
            $_SESSION['AdminID'] = $row['AdminID'];
            $_SESSION['email'] = $row['email'];
            header("Location:admin.php");
        }
    }   
    else {
        header('Location:asignin.php?loginFailed=true&reason=password'); 
    }
}
?>




<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Pikin</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="fullpage">
<div id="form-section" class="container-fluid signin">
    <div class="website-logo">
        <a href="index.php">
            <div class="logo" style="width:62px;height:18px"></div>
        </a>
    </div>
    <div class="row">
        <div class="info-slider-holder">
            <div class="bg-animation"></div>
            <div class="info-holder">
                <div class="bold-title"><span>Australia’s fastest growing</span>
                family day care educator booking service.
                </div>
                <div class="mini-testimonials-slider">
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images/person1.jpg" alt="">
                            <h4>Matthias Ehizua</h4>
                            <h5>Team Lead OAA Study</h5>
                            <p>“I've been able to use this platform easily. And all promises Pikin has offered me as been fulfiled. They are a great team and their support system is really up to par!”</p>
                        </div>
                    </div>
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images/person2.jpg" alt="">
                            <h4>Sandra Walker</h4>
                            <h5>Business Woman</h5>
                            <p>“I've had issues for a while looking for the right child care service around my place of residence. A friend introduced me to Pikin and I haven't regreated ever since then.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-holder">

            <div class="signin-signup-form">
                <div class="form-items">
                    <div class="form-title">Sign in to your account</div>

                    <form id="signinform" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
                        <div class="form-text">
                            <input type="text" name="email" placeholder="E-mail Address" required>
                        </div>
                        <div class="form-text">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-button">
                            <button id="submit" type="submit" name="submit" class="ybtn ybtn-purple">Sign in</button>
                            
                            <!--i've added a php code here to authenticate incorrect password/email combination on this page-->

                            <?php 
                            $reasons = array("password" => "Incorrect Email or Password", "blank" => "You have left one or more fields blank."); 
                            if ($_GET["loginFailed"])?> <font color="red"><?php echo $reasons[$_GET["reason"]]; 
                            ?></font>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>

