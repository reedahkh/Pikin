<?php
session_start();
include ("dbconnection.php");
?>

<!doctype html>
<html lang="en">
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
                                <li><a href="booking.html">Family DayCare Educator Booking Service</a><li>
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
<div class="container">
<?php

if(isset($_POST ["search"]) && !empty ($_POST ["search"])){
$postcode = $_POST ['postcode'];

$sql = "SELECT * from educators where postcode ='$postcode'";

                $result = mysqli_query ($connection, $sql);
                $result_no = mysqli_num_rows($result);
                if ($result_no > 0) {
                  ?>

    <br>
              
    <center>
      Showing <strong><?=$result_no?></strong> results of Educators in: <strong><?=$postcode?></strong> &nbsp;
      <br class="visible-xs visible-sm"> 
      <br class="visible-xs visible-sm"> 
      <a style="border-radius: 6px;" class="btn btn-primary" href="index.php">Search Again <i class="fa fa-search"></i></a>
    </center>
        <hr style="border:2px solid #f7f7f7">
      <br>
                  <?php
                  while ($row = mysqli_fetch_assoc ($result)) {
?>
    
    <div class="col-md-6" style="padding: 5px">
      <div style=" border: 1px solid #ddd; padding: 20px; border-radius: 5px; width: 100%">
      <div class="col-md-3" style="padding: 4px">
      <img src="images/<?=$row['avatar']?>" width="100%" style="border-radius: 5px">        
      </div>
      <div class="col-md-7">
        <span style="font-size: 20px">
          <?php echo $row["firstname"]." ".$row["lastname"]; ?>
        </span><br>
        <span style="font-size: 16px;color: #d9534f">
          <?php echo $row["email"]; ?> &nbsp;
        </span><br class="visible-md visible-lg">
        <span style="font-size: 16px;">
          <i class="fa fa-map-marker" style="color: #ccc"></i> &nbsp;<?php echo $row["suburb"]; ?>
        </span>
        <br>

        <div style="margin-top: 5px">
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
      </div>
      <div class="col-md-2">

        <button class="btn btn-success pull-right">
          Book <i class="fa fa-check-circle" style="color: rgba(0,0,0,.4);"></i>
        </button>
      </div>
<div class="clearfix"></div>
    </div>
    </div>
    <!-- END CLASS FOR LISTING -->

<?php
          }
                mysqli_free_result ($result);
                mysqli_close ($connection);
        }
                else{
                  die(header("location:index.php"));
}
}

?>
<div class="clearfix"></div>
<br>
<br>
<br>
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
                        <li><a href="signin.php">Sign In</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
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

  
<!-- End Main-Wrapper -->

<!-- Start Back-To-Top Button -->
<a href="#" id="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- End Back-To-Top Button -->

<!-- Scripts -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="//maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/gomap.js"></script>
<script src="js/scripts.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.tweet.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/jquery.matchHeight-min.js"></script>
<script src="js/jquery.ba-outside-events.min.js"></script>
<script src="js/gmap3.min.js"></script>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById (id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

</body>
</html>
