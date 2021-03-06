<?php
session_start();
include("dbconnection.php");

$ParentID = $_SESSION['ParentID'];
if (!isset($ParentID)) {
    header('Location:signin.php');
}
    else {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $phonenumber = $_POST['phonenumber'];
            $homeaddress = $_POST['homeaddress'];
            $homesuburb = $_POST['homesuburb'];
            $homepostcode = $_POST['homepostcode'];
            $officeaddress = $_POST['officeaddress'];
            $officesuburb = $_POST['officesuburb'];
            $officepostcode = $_POST['officepostcode'];
            $image = ($_FILES['image']['name']);
            $numkids = $_POST['numkids'];
            $ageofkids = $_POST['ageofkids'];
            $typeofservice = $_POST['typeofservice'];
            $servicehours = $_POST['servicehours'];

            $sql = "UPDATE parents SET firstname = '$firstname', lastname = '$lastname', phonenumber = '$phonenumber', homeaddress = '$homeaddress', homesuburb = '$homesuburb', homepostcode = '$homepostcode', officeaddress = '$officeaddress', officesuburb = '$officesuburb', officepostcode = '$officepostcode', image = '$image', numkids = '$numkids', ageofkids = '$ageofkids', typeofservice = '$typeofservice', servicehours = '$servicehours' WHERE ParentID = '$ParentID' ";
    
            if ($connection->query($sql) === TRUE ) {
                $target_dir = "images/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $extensions_arr = array("jpg","jpeg","png","gif");
                if( in_array($imageFileType,$extensions_arr) ){
                    $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
                    $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
                    move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);
                    header("Location:pmember.php");
                }

                else {
                    header("Location:setup.php?setupFailed=true&reason=error");
                } 
            }          
        }
    }

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Pikin - Setup Profile</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<div id="header-holder" class="inner-header contact-header">
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
                                <li><a class="login-button" href="logout.php">Logout</a></li>
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

</div>

<div id="ifeatures" class="container-fluid">
    <div class="container">

            <div class="col-sm-6 col-md-2">
                <div class="feature-box">
                    
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="feature-box">
                    <div class="text-purple-light">Set Up Your Profile</div>
                    <br>
                    <p>
                        To complete your profile, fill out the required info.
                    </p>
                    <br>
                <div class="signin-signup-form">
                <div class="form-items">
                    <form id="signupform" enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
                        <div class="row">
                            <div class="col-md-6 form-text">
                                <input type="text" name="firstname" placeholder="First name" required autocomplete="off" style="padding: 15px 30px">
                            </div>
                            <div class="col-md-6 form-text">
                                <input type="text" name="lastname" placeholder="Last name" required autocomplete="off" style="padding: 15px 30px">
                            </div>
                        </div>
                        <div class="form-text">
                            <input type="text" name="phonenumber" placeholder="Phone Number" required autocomplete="off" style="padding: 15px 30px">
                        </div>
                        <div class="form-text">
                            <input type="text" name="homeaddress" placeholder="Home Address" required autocomplete="off" style="padding: 15px 30px">
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-text">
                                <input type="text" name="homesuburb" placeholder="Suburb" required autocomplete="off" style="padding: 15px 30px">
                            </div>
                            <div class="col-md-6 form-text">
                                <input type="text" name="homepostcode" placeholder="Post Code" required autocomplete="off" style="padding: 15px 30px">
                            </div>
                        </div>
                        <div class="form-text">
                            <input type="text" name="officeaddress" placeholder="Office Address" required autocomplete="off" style="padding: 15px 30px">
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-text">
                                <input type="text" name="officesuburb" placeholder="Suburb" required autocomplete="off" style="padding: 15px 30px">
                            </div>
                            <div class="col-md-6 form-text">
                                <input type="text" name="officepostcode" placeholder="Post Code" required autocomplete="off" style="padding: 15px 30px">
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12 form-text">
                                <p style="margin-top: 10px">
                                    Upload Profile Photo
                                </p>
                                <input type="file" name="image" required autocomplete="off" style="padding: 15px 30px">
                            </div>
                            <div class="col-md-12 form-text">
                                <p style="margin-top: 10px">
                                    Number of kids to be registered in child care service
                                </p>
                                <input type="text" name="numkids" placeholder="E.g: 3" required autocomplete="off" style="padding: 15px 30px">
                            </div>
                        </div>
                        <div class="form-text">
                                <p style="margin-top: 10px">
                                    Age of each child to be registered with child care service <br> (Seperate with comma <strong> ","</strong>)
                                </p>
                            <input type="text" name="ageofkids" placeholder="E.g: 12, 11, 9" required autocomplete="off" style="padding: 15px 30px">
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-text">
                                <p style="margin-top: 10px">
                                    Type of child care service required
                                </p>
                                <input type="text" name="typeofservice" placeholder="E.g: Special Care" required autocomplete="off" style="padding: 15px 30px">
                            </div>
                            <div class="col-md-6 form-text">
                                <p style="margin-top: 10px">
                                    Hours of service required daily
                                </p>
                                <input type="text" name="servicehours" placeholder="E.g: 2 hours" required autocomplete="off" style="padding: 15px 30px">
                            </div>
                        </div>
                        <div class="form-text text-holder">
                            <span class="text-only" style="font-size: 16px; font-weight: normal">Preferred method of payment.</span>
                            <input type="radio" name="paymentmethod" value="Paypal" class="hno-radiobtn" id="rad1"><label for="rad1" style="font-size: 16px; font-weight: bold">Paypal</label>
                            <input type="radio" name="paymentmethod" value="Credit Card" class="hno-radiobtn" id="rad2"><label for="rad2" style="font-size: 16px; font-weight: bold">Credit Card</label>
                        </div>
                        <div class="form-button">
                            <button id="submit" type="submit" name="submit" class="ybtn ybtn-purple">Finish Signup</button>
                            <?php 
                            $reasons = array("error" => "There were errors with your registration", "blank" => "You have left one or more fields blank."); 
                            if ($_GET["setupFailed"])?> <font color="red"><?php echo $reasons[$_GET["reason"]]; 
                            ?></font>
                        </div>
                    </form>
                </div>
            </div>
                </div>
            </div>
        </div>
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
                        <li><a href="signup.php">Join Pikin</a></li>
                        <li>Exisiting Educators</li>
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
                        <li><a href="#">Help</a></li>
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
