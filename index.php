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

<body>
<div id="header-holder">
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
                                <div class="logo" style="width:150px;height:80px"></div>
                            </a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Home</a></li>
                                <li class="dropdown mega">
                                    <a href="#pricing">Options <i class="fa fa-caret-down"></i></a>
                                    <ul class="dropdown-menu dropdown-mega">
                                        <li>
                                            <div class="container"> 
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a class="mega-link" href="cloudhosting.html">
                                                            <div class="mega-box m-color1">
                                                                
                                                                <div class="mega-title">
                                                                    Family DayCare Educator Booking Service
                                                                </div>
                                                                <div class="mega-details">
                                                                    
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a class="mega-link" href="webhosting.html">
                                                            <div class="mega-box m-color2">
                                                                
                                                                <div class="mega-title">
                                                                    Partnership
                                                                </div>
                                                                <div class="mega-details">
                                                                    Partner with Us
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a class="mega-link" href="about.html">
                                                            <div class="mega-box m-color3">
                                                                
                                                                <div class="mega-title">
                                                                    Centers
                                                                </div>
                                                                <div class="mega-details">
                                                                    Our partnership centers
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a class="login-button" href="signin.php">Login/Sign-Up</a></li>
                                <li class="support-button-holder support-dropdown">
                                    <a class="support-button" href="#">Support</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="fa fa-phone"></i>Call +61-411-240-300</a></li>
                                      <li><a href="#"><i class="fa fa-book"></i>Email info@pikin.com.au</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="big-title">Find a Family Day Care Educator <br>
                        <span>near you!</span>
                    </div>
                    <div class="educators-search-holder">
                        <form id="educators-search" action="search.php" method="POST">
                            <input id="educators-text" type="text" name="postcode" placeholder="Enter your postcode.." />
                            <span class="inline-button">
                                <input id="search-btn" type="submit" name="search" value="search">
                            </span>
                            <div>
                                <?php 
                            $reasons = array("wrongarea" => "Incorrect Area Code", "blank" => "Area Code Field is Empty"); 
                            
                            if(isset($_GET["NoCode"])){
                                
                                if($_GET["NoCode"]) ?> 
                                <font color="red"><?php echo $reasons[$_GET["reason"]]; 
                                
                            }?></font>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="arrow-button-holder">
                        <a href="#pricing">
                            <div class="button-text">We are here to assist you</div>
                            <div class="arrow-icon">
                                <i class="htfy htfy-arrow-down"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--POPULAR PEOPLE-->

<div class="container-fluid" style="background: #f7f7f7">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Top Educators</div>
            </div>
        </div>
        <div class="row">
            <?php
                include ("dbconnection.php");
                
                $popular = "SELECT * from educators LIMIT 3";
                $query = mysqli_query ($connection, $popular);

                while ($row = mysqli_fetch_assoc($query)) {
            ?>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box pricing-color1">
                    <div class="pricing-content">
                        <div class="pricing-icon" style="background: url(images/<?=$row['avatar']?>);background-size: contain;">
                        </div>
                        <div class="pricing-title"><?=$row['firstname']?> <?=$row['lastname']?></div>
                        <div class="pricing-details">
                            <br>
                            <center>
                                <span style="font-size: 16px;">
                                    <i class="fa fa-map-marker" style="color: #ccc"></i> &nbsp;<?php echo $row["suburb"]; ?>
                                </span>
                                 <div style="margin-top: 10px">
                                  <?php
                                    $user_rating = $row['rating'];

                                    for ($available_rating = 0; $available_rating < $user_rating; $available_rating++) { 
                                  ?>
                                  <i class="fa fa-star" style="color: orange"></i>
                                  <?php
                                    }

                                    $no_rating = 5 - $user_rating;
                                    
                                    for ($absent_rating = 0; $absent_rating < $no_rating; $absent_rating++) { 
                                  ?>
                                  <i class="fa fa-star" style="color: #ddd"></i>
                                  <?php
                                    }
                                  ?>
                                </div>
                            </center>
                        </div>
                            <br>

                        <div class="pricing-link">
                            <a class="ybtn" href="booking.php">Book <i class="fa fa-check-circle" style="color: rgba(0,0,0,.4);"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>


<div id="info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-text">We have two options to help: Vacancy Alert Pro which leaves the hard work to us and ensures you are first in line when a spot becomes available or our free Child Care Vacancy Alert service which lets child care providers contact you if a vacancy arises.</div>
                
                <a href="signup.php" class="ybtn ybtn-purple ybtn-shadow">Parents Sign Up Here</a>
                <a href="signin.php" class="ybtn ybtn-white ybtn-shadow">Login </a>
            </div>
        </div>
    </div>
</div>


<!--Services-->
<!--Are you ready-->

<div id="pricing" class="container-fluid">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">How It Works</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box pricing-color1">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <div class="special-gradiant"></div>
                        </div>
                        <div class="pricing-title">Find Educators</div>
                        <div class="pricing-details">
                            <ul>
                                <li>Access our platform</li>
                                <li>Search for educators</li>
                                <li>Use your location feauture</li>
                                <li>Select the educator of your choice</li>
                            </ul>
                        </div>
                        <div class="pricing-link">
                            <a class="ybtn" href="#">Find Educators</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box pricing-color2">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <div class="special-gradiant"></div>
                        </div>
                        <div class="pricing-title">Register & Book</div>
                        <div class="pricing-details">
                            <ul>
                                <li>Access our platform</li>
                                <li>Register & Book an Educator</li>
                                <li>Pay safely with Child Care Benefit</li>
                                <li>Or pay with card or bank debit</li>
                            </ul>
                        </div>
                        <div class="pricing-link">
                            <a class="ybtn" href="signin.php">Register Here</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="pricing-box pricing-color3">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <div class="special-gradiant"></div>
                        </div>
                        <div class="pricing-title">Enjoy Our Features</div>
                        <div class="pricing-details">
                            <ul>
                                <li>Once you pay, use our features</li>
                                <li>Start dropping off your child</li>
                                <li>Or get your child picked off</li>
                                <li>Get your children dropped off</li>
                            </ul>
                        </div>
                        <div class="pricing-link">
                            <a class="ybtn" href="about.html">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Custom-->
<!--Features-->


<div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Our Promise</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-tick"></i>
                    </div>
                    <div class="mfeature-title">9,000+ educators</div>
                    <div class="mfeature-details">Here at Pikin, we promised and has also ensured you have 9,000+ educators to choose from.</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-tick"></i>
                    </div>
                    <div class="mfeature-title">Drop Off & Pick Up</div>
                    <div class="mfeature-details">We didn't stop there, we also ensured you can drop your child off or get your child picked up and droped off.</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-tick"></i>
                    </div>
                    <div class="mfeature-title">Best Support</div>
                    <div class="mfeature-details">We have made it possible to get in touch with us via various platforms as we believe communication is key.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="testimonials" class="container-fluid">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">Testimonials</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div id="testimonials-slider">
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="" alt="">
                            <h4>Matthias Ehizua</h4>
                            <h5>Team Lead OAA Study</h5>
                            <p>I've been able to use this platform easily. And all promises Pikin has offered me as been fulfiled. They are a great team and their support system is really up to par!</p>
                        </div>
                    </div>
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images/person2.jpg" alt="">
                            <h4>Sandra Walker</h4>
                            <h5>Business Woman</h5>
                            <p>I've had issues for a while looking for the right child care service around my place of residence. A friend introduced me to Pikin and I haven't regreated ever since then.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="message2" class="container-fluid message-area normal-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="text-purple-light"><strong>Are you an Educator?</strong></div>
                <div class="text-purple-dark">Join Australia’s fastest growing family day care educator booking service. </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="buttons-holder">
                    <a href="esignup.php" class="ybtn ybtn-purple">Register as an Educator</a><a href="esignin.php" class="ybtn ybtn-white ybtn-shadow">Login </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="message2" class="container-fluid message-area normal-bg" style="background: #f7f7f7">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="text-purple-light"><strong>Are you a Coordinator?</strong></div>
                <div class="text-purple-dark">Join Australia’s fastest growing family day care educator booking service. </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="buttons-holder">
                    <a href="csignup.php" class="ybtn ybtn-purple">Register as a Coordinator</a><a href="csignin.php" class="ybtn ybtn-white ybtn-shadow">Login </a>
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
                    <h4>Address</h4>
                    <p>Pikin is Australia's largest online family day care educator booking platform, offering you affordable and quality early childhood educators near you. Pikin is owned and operated by Pikin Australia.</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2">
                <div class="footer-menu-holder">
                    <h4>Links</h4>
                    <ul class="footer-menu">
                        <li><a href="index.php">Homepage</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-3">
                <div class="footer-menu-holder">
                    <h4>Others</h4>
                    <ul class="footer-menu">
                        <li><a href="asignin.php">Admin Login</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="footer-menu-holder">
                    <div class="phone"><i class="fa fa-phone"></i>+61-411-240-300</div>
                    <div class="email"><i class="fa fa-envelope"></i> info@pikin.com.au</div>
                    <div class="address">
                        <i class="fa fa-map-marker"></i> 
                        <div>City Avenue, Office 64,<br>
                            Floor 6,  Milbourne,<br>
                            Australia.</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-1 col-md-1">
                <div class="social-menu-holder">
                    <ul class="social-menu">
                        <li><a href="http://facebook.com/pikin"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://youtubbe.com/pikin"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="http://twitter.com/pikin"><i class="fa fa-twitter"></i></a></li>
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
