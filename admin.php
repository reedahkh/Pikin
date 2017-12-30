<?php
  session_start();
  include("dbconnection.php");
  $AdminID = $_SESSION ['AdminID'];
  if (!isset($AdminID)) {
    header('Location:asignin.php');
  }
  else {
    $query = "SELECT * from admin where AdminID = '$AdminID' ";
    $userdetails =  mysqli_query ($connection, $query);
    $data = mysqli_fetch_assoc($userdetails);

    $firstname = $data["firstname"];
    $lastname = $data["lastname"];
    $address = $data["address"];
    $postcode = $data["postcode"];
  }
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title>Pikin - Account Page</title>

<!-- StyleSheets -->
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style3.css">
<link rel="stylesheet" href="css/responsive.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- FontsOnline -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover{
      background: white !important; color: black !important; border-left: 4px solid #f8a01a; border-radius: 0px; font-weight: bold
    }
    .nav-pills>li>a:hover{
      background: white;
      color: black
    }
    </style>
</head>
<body>

<!-- Page Wrapper -->
<div id="wrap"> 
  
  
  
  <!-- Content -->
  <main class="cd-main-content">
    <div id="content">
      <!-- TOP HEAD -->
          <div class="top-head" style="margin: 0px; background: white; padding: 10px 0px;">
        <div class="container" style=""> 
            <div class="row">
              <div class="col-md-12">
                <h4></h4><img src="img/logo.png" class="img-responsive" alt="" style="width: 110px">
                <a href="logout.php" class="pull-right" style="color: black; background: #f5f5f5; margin-top: 12px">Logout <i class="fa fa-power-off" style="margin-left: 5px"></i> </a> </div>
              <div class="col-sm-6 hidden"> <a id="cd-menu-trigger" href="#0"><span class="cd-menu-icon"></span></a> </div>
            </div>
          </div>
          </div>
      <div class="resume" style="padding-top: 20px;">

        <div class="container" style="padding: 0px"> 

          <div class=""> 

            <!-- MAIN CONTENT -->
            <div class="col-md-12"> 
              
              <!-- NAV LINKS -->              

              <!-- NAV LINKS END -->
              
              
              
              <div class="tab-content"> 
                
                <!-- ABOUT ME -->
                <div role="tabpanel" class="tab-pane fade in active" id="about-me">
                  <div class="inside-sec"> 
                    <div class="col-md-12">                      
                    <h5 class="tittle" style="font-weight: normal; text-transform: none; line-height: 1.4"> 
                      <span style="margin-bottom: 10px; font-size: 14px">
                        Welcome Admin, <?=$firstname?> <?=$lastname?>
                      </span>
                      <br>
                    </h5>
                    </div>

                    
                  </div>
                  <br>
                  <br>


                    <div style="width: 100%; padding: 50px 20px; background: #fff; margin-bottom: 20px">
                      <?php 
                      $queryc = "SELECT * from coordinators where active = '1'";
                      $resultc = mysqli_query ($connection, $queryc);
                      $resultc_no = mysqli_num_rows ($resultc);

                      $querye = "SELECT * from educators where active = '1'";
                      $resulte = mysqli_query ($connection, $querye);
                      $resulte_no = mysqli_num_rows ($resulte);

                      $queryp = "SELECT * from parents where active = '1'";
                      $resultp = mysqli_query ($connection, $queryp);
                      $resultp_no = mysqli_num_rows ($resultp);
                      
                      if ($resultc_no > 0) {
                        
                         
                      ?>

                        <div class="col-md-4">
                <div style="width: 100%; min-height: 100px; background: white; padding: 20px 20px; border: 1px solid #ddd; box-shadow: 0px 0px 5px 0px gainsboro; border-radius: 3px; padding-top: 20px">
                    <span class="pull-right" style="position:absolute; left:75%;background: orange;opacity: .8; color: white; padding: 6px; border-radius: 100%">
        <i class="fa fa-star"></i>
      </span>
      <br>
      <br>
      <br>

          <center>

            <h3 style="font-weight: 500; text-transform: none;">
              <?=$resultc_no?>
            </h3>
            <h4 style="font-weight: 500; text-transform: none;">
              Coordinators
            </h4>
          </center>
          <?php
            }

            if ($resulte_no > 0) {        
          ?>
      <br>
      <br>
                 
                 <a href="admin-coordinators.php">   
        <div style="width: 100%; background: #444; color: rgba(255,255,255,.9); font-weight: bold; padding: 15px 20px; border: 1px solid #ddd; box-shadow: 0px 0px 5px 0px gainsboro; border-radius: 5px; ">
                    View <i class="fa fa-chevron-right pull-right" style="margin-top: 0px"></i>
                </div>
              </a>
                </div>
            </div>


                        <div class="col-md-4">
                          
                <div style="width: 100%; min-height: 100px; background: white; padding: 20px 20px; border: 1px solid #ddd; box-shadow: 0px 0px 5px 0px gainsboro; border-radius: 3px; padding-top: 20px">
                    <span class="pull-right" style="position:absolute; left:75%;background: red;opacity: .8; color: white; padding: 6px; border-radius: 100%">
        <i class="fa fa-star"></i>
      </span>
      <br>
      <br>
      <br>

          <center>

            <h3 style="font-weight: 500; text-transform: none;">
              <?=$resulte_no?>
            </h3>
            <h4 style="font-weight: 500; text-transform: none;">
              Educators
            </h4>
          </center>
          <?php
            }
            if ($resultp_no > 0) {
          ?>
      <br>
      <br>
                 
                 <a href="admin-educators.php">   
        <div style="width: 100%; background: #444; color: rgba(255,255,255,.9); font-weight: bold; padding: 15px 20px; border: 1px solid #ddd; box-shadow: 0px 0px 5px 0px gainsboro; border-radius: 5px; ">
                    View <i class="fa fa-chevron-right pull-right" style="margin-top: 0px"></i>
                </div>
              </a>
                </div>
            </div>


                        <div class="col-md-4">
                <div style="width: 100%; min-height: 100px; background: white; padding: 20px 20px; border: 1px solid #ddd; box-shadow: 0px 0px 5px 0px gainsboro; border-radius: 3px; padding-top: 20px">
                    <span class="pull-right" style="position:absolute; left:75%;background: #444;opacity: .8; color: white; padding: 6px; border-radius: 100%">
        <i class="fa fa-star"></i>
      </span>
      <br>
      <br>
      <br>

          <center>

            <h3 style="font-weight: 500; text-transform: none;">
              <?=$resultp_no?>
            </h3>
            <h4 style="font-weight: 500; text-transform: none;">
              Parents
            </h4>
          </center>
          <?php
            }
          ?>
      <br>
      <br>
                 
                 <a href="admin-parents.php">   
        <div style="width: 100%; background: #444; color: rgba(255,255,255,.9); font-weight: bold; padding: 15px 20px; border: 1px solid #ddd; box-shadow: 0px 0px 5px 0px gainsboro; border-radius: 5px; ">
                    View <i class="fa fa-chevron-right pull-right" style="margin-top: 0px"></i>
                </div>
              </a>
                </div>
            </div>
            <div class="clearfix"></div>
                    </div>
                </div>
                
              
        </div>
      </div>
    </div>
  </main>
  <!-- End Content --> 
  
  <!-- Footer -->
  <footer class="footer">
    <div class="rights">
      <p>© Copyright 2017 Pikin. All right reserved.</p>
    </div>
  </footer>
  <!-- End Footer --> 
  
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> 
<script src="js/vendors/jquery/jquery.min.js"></script> 
<script src="js/vendors/bootstrap.min.js"></script> 
<script src="js/vendors/owl.carousel.min.js"></script> 
<script src="js/vendors/jquery.isotope.min.js"></script> 
<script src="js/main.js"></script> 

<!-- Begin Map Script--> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 
<script src="js/vendors/map.js"></script>
</body>
</html>