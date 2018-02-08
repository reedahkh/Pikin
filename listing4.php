<?php
ob_start();
session_start();

function getAllData ($postcode , $suburb)
{
  // Opens a connection to a MySQL server
  $dsn = 'mysql:host=localhost;dbname=pikin';
  $pdo = new PDO($dsn, 'root', '');
  // Select all the rows in the markers table
  $query = $pdo->prepare("SELECT * from educators where postcode = :postcode or suburb = :suburb ");
  $query->bindParam(':postcode' , $postcode);
  $query->bindParam(':suburb' , $suburb);
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}

if(isset($_POST["search"])){

    $postcode = $_POST ['postcode'];
    $suburb = $_POST ['suburb'];

    $data = getAllData ($postcode , $suburb);
    $data = json_encode($data, TRUE);


    $allData = getAllData ($postcode , $suburb);
    $allData = json_encode($allData, TRUE);

}


?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Pikin Listing Page</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="css/owl.carousel.css">

  <!-- Google Font -->
  <link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

  <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
  <![endif]-->
</head>

<body>

  <div class="" id="data" style="display:none"><?= $data; ?></div>
  <div class="" id="allData" style="display:none"><?= $allData; ?></div>

<div id="main-wrapper" class="listing right pull-right">

  <!-- Start Header -->
  <header id="header">
    <div class="header-inner">



      <div class="container">

        <!-- Start Utility-Nav-->
        <nav class="utility-nav clearfix">
          <ul class="utility-user custom-list">
            <li id="login">
              <a href="signin.php" id="login-link" class="btn btn-default">
                <i class="fa fa-power-off"></i>
                <span>Login</span>
              </a>
            </li>

            <li id="register">
              <a href="signup.php" class="btn btn-default">
                <i class="fa fa-plus-circle"></i>
                <span>Register</span>
              </a>
            </li>
          </ul>

          <div class="utility-social">
            <ul class="social-inner custom-list">
              <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
              <li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
            </ul>
          </div>
        </nav>
        <!-- End Utility Nav -->

        <!-- Start Search Nav -->
        <nav class="search-nav">
          <button class="advanced-search-button">
            <i class="fa fa-align-justify"></i>
          </button>

          <ul class="sub-menu custom-list">
            <li><a href="#"><i class="fa fa-globe"></i>General Search</a></li>
            <li><a href="#"><i class="fa fa-file-o"></i>Search for Keywords</a></li>
          </ul>

          <form action="index.php" class="default-form">
            <input type="text" placeholder="Search...">
            <button><i class="fa fa-search"></i></button>
          </form>
        </nav>
        <!-- End Search Nav -->

        <!-- Start Menu Nav -->
        <div class="menu-nav row">

          <!-- Start Logo -->
          <div class="logo col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <a href="index.php"><img src="img/logo.png" alt="logo"></a>
          </div>
          <!-- End Logo -->


          <!-- Start Search Nav Mobile -->
          <nav class="search-nav mobile col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
            <button class="advanced-search-button">
              <i class="fa fa-align-justify"></i>
            </button>

            <ul class="sub-menu custom-list">
              <li><a href="#"><i class="fa fa-globe"></i>General Search</a></li>
              <li><a href="#"><i class="fa fa-file-o"></i>Search for Keywords</a></li>
            </ul>

            <form action="index.php" class="default-form">
              <input type="text" placeholder="Search...">
              <button><i class="fa fa-search"></i></button>
            </form>
          </nav>
          <!-- End Search Nav Mobile -->

          <!-- Start Nav-Wrapper Mobile -->
          <nav class="nav-wrapper-mobile col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="utility-user custom-list">
              <li class="login">
                <a href="signin.php" class="login-link btn btn-default">
                  <i class="fa fa-power-off"></i>
                  <span>Login</span>
                </a>

              </li>

              <li class="register">
                <a href="signup.php" class="btn btn-default">
                  <i class="fa fa-plus-circle"></i>
                  <span>Register</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Nav-Wrapper Mobile -->

        </div>
        <!-- End Menu Nav -->

        <!-- Responsive Menu Buttons -->
        <button class="search-toggle button"><i class="fa fa-search"></i></button>

        <button class="navbar-toggle button"><i class="fa fa-bars"></i></button>
        <!-- End Responsive Menu Buttons -->

      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- Start Map-Wrapper -->
  <div class="map-wrapper">

    <div class="" id="map"></div>

    <!-- Start Map Search -->
    <div class="map-search">
      <div class="container">

        <!-- Start Search-Shadow -->
        <div class="search-shadow"></div>
        <!-- End Search-Shadow -->

        <!-- Start Select-Button -->
        <span class="select-button">
          <button class="advanced-search-button">
            <i class="fa fa-align-justify"></i>
          </button>
        </span>
        <!-- End Select-Button -->

        <p>Select this option button to redefine your search</p>
      </div>

      <!-- Start Advanced-Search -->
      <div class="advanced-search">

        <div class="container">
          <div class="advanced-search-inner">
            <form action="index.php" class="default-form">
              <div class="distance form-row clearfix">
                <div class="label-section">
                  <label>Distance around my position:</label>
                </div>
                <div class="action-section">
                  <div id="slider-distance-search" class="slider"></div>
                </div>
                <div class="value-section">
                  <input type="text" id="distance-search" class="value" readonly>
                </div>
              </div>

              <div class="location form-row clearfix">
                <div class="label-section">
                  <label>Location:</label>
                </div>
                <div class="action-section">
                  <span class="country select-box">
                    <select name="country" data-placeholder="Country">
                      <option>Country</option>
                      <option value="1">France</option>
                      <option value="2">Germany</option>
                      <option value="3">Romania</option>
                    </select>
                  </span>
                  <span class="region">
                    <input type="text" placeholder="Region">
                  </span>
                  <span class="address">
                    <input type="text" placeholder="Address">
                  </span>
                </div>
              </div>

              <div class="founded form-row clearfix">
                <div class="label-section">
                  <label>Special Keywords:</label>
                </div>
                <div class="action-section">
                  <input type="text" placeholder="Founded">
                  <button class="btn btn-secondary pull-right"><i class="fa fa-search"></i>Search Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Advanced-Search-Inner -->
    </div>
    <!-- End Map Search -->

    <!-- Start Map Canvas -->
    <div id="map_canvas_wrapper">
      <div id="map_canvas"></div>
    </div>
    <!-- End Map Canvas -->

    <!-- Start Map Control -->
    <div class="map-control">
      <a href="#" class="btn btn-secondary full-width"><i class="fa fa-chevron-circle-up"></i><span>Hide Map</span></a>
    </div>
    <!-- End Map Control -->



  </div>
  <!-- End Map-Wrapper -->

  <!-- Start Main-Content -->
  <div id="listing-page" class="main-content">
    <div class="container">


      <!-- Start Page-Content -->
      <div class="page-content">
        <h5 class="listing-title">Showing results of Educators in: <strong><?=$postcode?></strong> &nbsp;</h5>
        <div class="row">

          <?php

              if(isset($_POST["search"])){

                  $postcode = $_POST ['postcode'];
                  $suburb = $_POST ['suburb'];

                  $data = getAllData ($postcode , $suburb);


                  foreach ($data as $key => $data) { ?>

                    <div class="listing-box col-lg-3 col-md-3 col-sm-3">
                      <div class="company-rating">
                        <?php
                        $user_rating = $data['rating'];

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
                      <div class="overlay">
                        <img src="images/<?=$data['avatar']?>" alt="">
                        <div class="overlay-shadow">
                          <div class="overlay-content">
                            <button class="btn btn-success pull-right" name="book"> <a href="booking.php?EducatorID=<?=$data['EducatorID']?>">
                            Book </a><i class="fa fa-check-circle" style="color: rgba(0,0,0,.4)"></i>
                          </button>
                          </div>
                        </div>
                      </div>
                      <div class="gray-bottom">
                        <h6 class="company-title"><a href="#"> <?php echo $data["firstname"]." ".$data["lastname"]; ?></a></h6>
                        <ul class="company-tags custom-list clearfix">
                          <li><a href="#"><?php echo $data["suburb"]; ?></a></li>
                        </ul>
                      </div>
                    </div>

            <?php
                  }


              }


          ?>


        </div>
      </div>
      <!-- End Page-Content -->


    </div>
  </div>
  <!-- End Main-Content -->


  <!-- Start Footer -->
  <footer id="footer">

    <!-- End Container -->

    <!-- Start Footer Copyrights -->
    <div class="footer-copyrights">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"><p>Copyright © 2017 Pikin</p></div>
          <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
            <ul class="social pull-right custom-list">
              <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
              <li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer Copyrights -->

  </footer>
  <!-- End Footer -->

</div>
<!-- End Main-Wrapper -->

<!-- Start Back-To-Top Button -->
<a href="#" id="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- End Back-To-Top Button -->

<!-- Scripts -->
<script src="js/jquery-1.9.1.min.js"></script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQtqo101Mtefpqv7JQOO3Y5Z9uqEnRuBU&callback=initMap">
</script>
<script src="js/test.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://raw.github.com/HPNeo/gmaps/master/gmaps.js"></script>
<script src="js/scripts.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.tweet.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/jquery.matchHeight-min.js"></script>
<script src="js/jquery.ba-outside-events.min.js"></script>
<script src="js/gmap3.min.js"></script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

</body>
</html>
