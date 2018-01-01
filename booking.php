<?php
session_start();
include("dbconnection.php");

$ParentID = $_SESSION['ParentID'];
if (!isset($ParentID)) {
    header('Location:login.php');
}
    
    else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $ParentID = $_SESSION['ParentID'];
            $EducatorID = $_POST['EducatorID'];
            $postcode = $_POST ['postcode'];
            $suburb = $_POST ['suburb'];
            $typeofservice = $_POST ['typeofservice'];
            $starttime = $_POST ['starttime'];
            $endtime = $_POST ['endtime'];
            $paymentmethod = $_POST ['paymentmethod'];
            foreach($_POST['day'] as $dayofweek) {
                $days .= $dayofweek . " , ";
            }

            $sql = "INSERT INTO booking (ParentID, EducatorID, postcode, suburb, typeofservice, day, starttime, endtime, paymentmethod) VALUES ('$ParentID', '$EducatorID', '$postcode', '$suburb', '$typeofservice', '$days', '$starttime', '$endtime', '$paymentmethod')";
    
            if ($connection->query($sql) === TRUE ) {
                header("Location:bookingsuccess.php");
            }
        
            else {
                header('location:booking.php?bookingFailed=true&reason=booking');
            }
        }  
    }
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Pikin - Booking Service</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<div id="header-holder" class="inner-header">
    <div class="bg-animation"></div>
    <nav id="nav" class="navbar navbar-default navbar-full">
        <div class="container-fluid">
            <div class="container container-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo-holder" href="index.php">
                                <div class="logo" style="width:62px;height:18px"></div>
                            </a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="index.php">Family DayCare Educator Booking Service</a><li>
                                <li><a class="login-button" href="signin.php">Login/Sign-Up</a></li>
                                <li class="support-button-holder support-dropdown">
                                    <a class="support-button" href="#">Support</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="fa fa-phone"></i>Call +61-411-240-300</a></li>
                                      <li><a href="#"><i class="fa fa-book"></i>Email info@pikin.com.au</a></li>
                                      <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Family DayCare Educator Booking Service</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="page-content" class="container-fluid">
    <div class="container">
        <form id="booking" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <div class="row">
            <div align="center">
                <div class="signin-signup-form">
                <div class="form-items">
                    <div class="form-title"></div>
                        <div class="form-text">
                            <input type="text" name="suburb" placeholder="Enter you Suburb Here" required>
                        </div>
                        <div class="form-text">
                            <input type="text" name="postcode" placeholder="Enter you Postcode Here" required>
                        </div>
                        <div class="form-text text-holder">
                            <span class="text-only">Select type of service required</span>
                            <select name="typeofservice" >
                                <option name="typeofservice" value="Pickoff and Dropoff">Pick off and drop off</option>
                                <option name="typeofservice" value="Morning Childcare Service">Morning Childcare Service</option>
                                <option name="typeofservice" value="Evening Childcare Service">Evening Childcare Service</option>
                            </select>
                        </div>
                        <div class="form-text text-holder">
                            <span class="text-only">Choose days of the week you are interested in</span><br>
                            <input type="checkbox" name="day[]" id="sunday" value="sunday"><label for="sunday"  >Sunday</label>
                            <input type="checkbox" name="day[]" id="monday" value="monday"><label for="monday"  >Monday</label>
                            <input type="checkbox" name="day[]" id="tuesday" value="tuesday"><label for="tuesday"  >Tuesday</label>
                            <input type="checkbox" name="day[]" id="wednesday" value="wednesday" ><label for="wednesday" >Wednesday</label>
                            <input type="checkbox" name="day[]" id="thursday" value="thursday" ><label for="thursday" >Thursday</label>
                            <input type="checkbox" name="day[]" id="friday" value="friday"><label for="friday" >Friday</label>
                            <input type="checkbox" name="day[]" id="saturday" value="saturday"><label for="saturday">Saturday</label>
                        </div><br>
                        <div class="col-md-6 form-text">
                            <span class="text-only">Please choose service start time</span>
                            <input type="time" name="starttime" id="start-time" placeholder="" required>
                        </div>
                        <div class="col-md-6 form-text">
                            <span class="text-only">Please choose service end time</span>
                            <input type="time" name="endtime" id="end-time" placeholder="" required>
                        </div>
                        <div class="form-text text-holder">
                            <br><br><span class="text-only">Preferred method of payment.</span><br>
                            <input type="radio" name="paymentmethod" class="hno-radiobtn" id="paypal" value="Paypal"><label for="paypal">Paypal</label>
                            <input type="radio" name="paymentmethod" class="hno-radiobtn" id="cc" value="Credit Card"><label for="cc">Credit Card</label>
                        </div>
                        <input type="hidden" name="EducatorID" value="<?php echo $_GET['EducatorID']?>" >
                        <div class="form-button">
                            <button id="submit" type="submit" name="submit" class="ybtn ybtn-purple">Book Service</button>
                            <?php 
                            $reasons = array("booking" => "Booking not Successful, Please Try Again Later", "blank" => "You have left one or more fields blank."); 
                            if ($_GET["bookingFailed"])?><font color="red"><?php echo $reasons[$_GET["reason"]]; 
                            ?></font>
                        </div>
                </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="address-holder">
                    <h4>About Us</h4>
                    <p>Pikin is Australia's largest online family day care educator booking platform, offering you affordable and quality early childhood educators near you. </p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2">
                <div class="footer-menu-holder">
                    <h4>New Educators</h4>
                    <ul class="footer-menu">
                        <li><a href="join.html">Join Pikin</a></li>
                        <li><a href ="#">Exisiting Educators</a></li>
                        <li><a href="#">Partner Centers</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-3">
                <div class="footer-menu-holder">
                    <h4>Partner with us</h4>
                    <ul class="footer-menu">
                        <li><a href="#">Affiliates</a></li>
                        <li><a href="#">FDC Schemes</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="footer-menu-holder">
                    <h4>Parents</h4>
                    <ul class="footer-menu">
                        <li><a href="help.html">Help</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="signup.php">Sign Up/Log In</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-1 col-md-1">
                <div class="social-menu-holder">
                    <h4>Get the Pikin mobile app</h4>
                    <ul class="footer-menu">
                        <a href="http://play.google.com"><img class="photo" src="images/mobileapp.jpg" alt=""></a>
                    </ul>
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