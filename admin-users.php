<?php
include('dbconnection.php');


$query = 'SELECT * FROM parents WHERE email = "fareedakabeer@gmail.com"';

$userdetails =  mysqli_query ($connection, $query);

$data = mysqli_fetch_assoc($userdetails);


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
                   <div style="padding: 15px 20px; color: grey">
                    <a href="admin.php" style="font-weight: bold; color: grey">Dashboard</a> &nbsp;/ &nbsp;Coordinations / Educators / Parents
                  </div>
                  <div class="inside-sec"> 
                    <div class="col-md-10 col-xs-8">                      
                    <h5 class="tittle" style="font-weight: normal; text-transform: none; line-height: 1.4"> 
                      
                      Coordinations / Educators / Parents
                    </h5>
                    </div>
                    <div class="col-md-2 col-xs-4">
                      <button class="btn btn-success btn-block pull-right" style="box-shadow: 0 0 12px 3px #dedede;margin-top: 12px; border-radius: 15px" data-toggle="modal" data-target="#AddModal">
                        Add <i class="fa fa-plus" style="margin-left: 10px; color: rgba(0,0,0,.3);"></i>
                      </button>
                      </div>
                    
                  </div>
                  <br>
                  <br>


                    <div style="width: 100%; padding: 50px 20px; background: #fff; margin-bottom: 20px">
                      

                        <div class="col-md-6" style="padding: 5px">
                          <div style=" border: 1px solid #ddd; padding: 15px 10px; border-radius: 5px; width: 100%">
                          <div class="col-md-3" style="padding: 4px">
                          <img src="images/default.jpg" width="100%" style="border-radius: 5px">        
                          </div>
                          <div class="col-md-9">
                            <div style="margin-top: 15px"></div>
                            <span style="font-size: 18px;">
                              Habu Mohammed 
                            </span><br>
                            <div style="margin-top: 10px"></div>
                            <span style="font-size: 16px;color: #d9534f; ">
                              habu@gmail.com &nbsp;
                            </span><br class="visible-md visible-lg">
                            <div style="margin-top: 10px"></div>
                            <span style="font-size: 16px;">
                              <i class="fa fa-map-marker" style="color: #ccc"></i> &nbsp;Ottawa
                            </span>
                            <br>

                            <a href="educator-history.php" class="btn btn-danger btn-sm pull-right">
                              Delete <i class="fa fa-close" style="margin-left: 5px;color: rgba(0,0,0,.4);"></i>
                            </a>
                          </div>
                    <div class="clearfix"></div>
                        </div>
                        </div>

                                                <div class="col-md-6" style="padding: 5px">
                          <div style=" border: 1px solid #ddd; padding: 15px 10px; border-radius: 5px; width: 100%">
                          <div class="col-md-3" style="padding: 4px">
                          <img src="images/default.jpg" width="100%" style="border-radius: 5px">        
                          </div>
                          <div class="col-md-9">
                            <div style="margin-top: 15px"></div>
                            <span style="font-size: 18px;">
                              Habu Mohammed 
                            </span><br>
                            <div style="margin-top: 10px"></div>
                            <span style="font-size: 16px;color: #d9534f; ">
                              habu@gmail.com &nbsp;
                            </span><br class="visible-md visible-lg">
                            <div style="margin-top: 10px"></div>
                            <span style="font-size: 16px;">
                              <i class="fa fa-map-marker" style="color: #ccc"></i> &nbsp;Ottawa
                            </span>
                            <br>

                            <a href="educator-history.php" class="btn btn-danger btn-sm pull-right">
                              Delete <i class="fa fa-close" style="margin-left: 5px;color: rgba(0,0,0,.4);"></i>
                            </a>
                          </div>
                    <div class="clearfix"></div>
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
  

  <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="font-weight: normal; text-transform: none;" class="modal-title text-center" id="myModalLabel">Add User</h4>
      </div>
      <div class="modal-body">
        
        <form >
                        <div class="row">
                            <div class="col-md-6 ">
                               <label style="font-weight: 500; color: grey; margin-left: 10px">
                                   First Name
                                  </label>
                                <input type="text" name="firstname" class="form-control" placeholder="First name" required autocomplete="off" style="padding: 15px 30px">
                            </div>
                            <div class="col-md-6">
                               <label style="font-weight: 500; color: grey; margin-left: 10px">
                                    Last Name
                                  </label>
                                <input type="text" name="lastname" class="form-control" placeholder="Last name" required autocomplete="off" style="padding: 15px 30px">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                        <div class="col-md-6 form-text">
                          <label style="font-weight: 500; color: grey; margin-left: 10px">
                                    Email
                                  </label>
                            <input type="Email" name="email" class="form-control" placeholder="E-mail Address" required autocomplete="off" style="padding: 15px 30px">
                        </div>
                        <div class="col-md-6 form-text">
                          <label style="font-weight: 500; color: grey; margin-left: 10px">
                                    Password
                                  </label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required autocomplete="off" style="padding: 15px 30px">
                        </div>
                      </div>
                    <br>
      
      <button type="submit" class="btn btn-primary btn-block">
        Register
      </button>
                    </form>

      </div>
    </div>
  </div>
</div>
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