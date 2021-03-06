<?php
  session_start();
  include('dbconnection.php');
  $CoordinatorID = $_SESSION['CoordinatorID'];
  if (!isset($CoordinatorID)) {
  header('Location:csignin.php');
  }
  else {
    $query = "SELECT * FROM coordinators WHERE CoordinatorID = '$CoordinatorID'";
    $userdetails =  mysqli_query ($connection, $query);
    $data = mysqli_fetch_assoc($userdetails);
    $sql = "SELECT * FROM educators WHERE CoordinatorID = '$CoordinatorID'";
    $result = mysqli_query($connection, $sql);
    $result_no = mysqli_num_rows ($result);
    if ($result_no > 0) {
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
          
         <div class="col-md-3" style="">
            <div class="side-bar" style=""> 
           <div class="col-md-12" style="padding: 0px">
            <div style="padding: 30px; padding-bottom: 0px">
                <img src="http://pikin.com.au/images/<?=$data['avatar']?>" class="img-responsive" alt="" style="border-radius: 100%; width: 100px; height: 100px; margin-top: 20px">                
            </div>
              </div>
           <div class="col-md-12">
            <div style="padding: 30px; padding-top: 10px; padding-bottom: 0px">
             <h5 style="text-transform: none; margin: 0px; padding: 5px 0px;line-height: 1.5">
              
               <?=$data['firstname']?> <?=$data['lastname']?>
             </h5>
                          <p style="font-size: 16px"> <?=$data['address']?> </p>
                          <p style="font-size: 16px"> <?=$data['suburb']?></p>
                          <p style="font-size: 16px">  <?=$data['postcode']?></p>

           </div>
           <hr>
          <nav> 

                  <ul class=" nav nav-pills nav-stacked">
                    <li style="margin-bottom: 10px" role="presentation" class="active"><a style="" href="#about-me" aria-controls="about-me" role="tab" data-toggle="tab"> My Account &nbsp; &nbsp;<i class="fa fa-id-badge pull-right" style="opacity: .7"></i></a></li>
                    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab"> 
                      Edit Profile &nbsp; &nbsp;<i class="fa fa-pencil pull-right" style="opacity: .7"></i></a></li>
                  </ul>
              </nav>
             <br>
             <br>

           </div>
           <div class="clearfix"></div>
           </div>
         </div>
          <!-- Resume -->
          <div class=""> 

            <!-- MAIN CONTENT -->
            <div class="col-md-9"> 
              
              <!-- NAV LINKS -->              

              <!-- NAV LINKS END -->
              
              
              
              <div class="tab-content"> 
                
                <!-- ABOUT ME -->
                <div role="tabpanel" class="tab-pane fade in active" id="about-me">
                  <?php
                    

                  ?>
                  
                  <div class="inside-sec"> 
                    <div class="col-md-12">

                                        
                    <h5 class="tittle" style="font-weight: normal; text-transform: none; line-height: 1.2">
                      <span style="margin-bottom: 10px; font-size: 14px">
                        Welcome Coordinator, <?=$data['firstname']?>
                      </span>
                      <br>
                      <div style="width: 100%; height: 10px"></div>
                      Assigned Educators:
                     <span style="font-weight: bold; font-size: 20px">
                       <?=$result_no?>
                     </span>
                    </h5>
                    </div>
                    <?php
                      }
                    ?>
                  </div>
                  <br>
                  <br>


                    <div style="width: 100%; padding: 50px 20px; background: #fff; margin-bottom: 20px">
                      <center>
                        
                      
                      <h5 style="font-weight: normal; text-transform: none;">
                        You have been assigned <?=$result_no?> educators
                      </h5>
                      </center>
                    </div>





                  <div style="padding: 30px 20px; margin-bottom: 10px; background: white">
                    <?php
                      while($row = mysqli_fetch_assoc($result)){
                        ?>

                        <div class="col-md-6" style="padding: 5px">
                          <div style=" border: 1px solid #ddd; padding: 15px 10px; border-radius: 5px; width: 100%">
                          <div class="col-md-3" style="padding: 4px">
                          <img src="images/default.jpg" width="100%" style="border-radius: 5px">        
                          </div>
                          <div class="col-md-9">
                            <span style="font-size: 18px">
                              <?=$row['firstname']?> <?=$row['lastname']?>
                            </span><br>
                            <div style="margin-top: 5px"></div>
                            <span style="font-size: 16px;color: #d9534f; ">
                              <i class="fa fa-envelope" style="color: #ccc"></i>
                             <?=$row['email']?> &nbsp;
                            </span><br class="visible-md visible-lg">
                            <div style="margin-top: 5px"></div>
                            <span style="font-size: 16px;">
                              <i class="fa fa-phone" style="color: #ccc"></i> &nbsp;<?=$row['phonenumber']?>
                            </span>
                            <br>

                            
                          </div>
                    <div class="clearfix"></div>
                        </div>
                        </div>
                        <?php
          }
                mysqli_free_result ($result);
                mysqli_close ($connection);
    
?>

                            

    <div class="clearfix"></div>
                  </div>

                </div>
                
              
                <!-- Contact -->
                <div role="tabpanel" class="tab-pane fade" id="contact">
                  <div class="inside-sec"> 
                     
                      
                      
                      <!-- Contact  -->
                      <h5 class="tittle" style="font-weight: normal;">EDIT PROFILE</h5>
                      <div class="contact style-3 light-border padding-top-50 padding-bottom-50 padding-left-20 padding-right-20"> 
                        
                        <!-- Form  -->
                        <div class="contact-right"> 
                          <!-- Success Msg -->
                          <div id="contact_message_1" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Success</div>
                          
                          <!-- FORM -->
                          <form role="form" id="contact_form_1" class="contact-form" method="post" onSubmit="return false">
                            <ul class="row">
                              <div class="col-xs-6">
                              <li>
                                <label>
                                  <input type="text" class="form-control" name="name" id="name_1" placeholder="NAME" value="<?=$data['firstname']?> <?=$data['lastname']?>">
                                </label>
                              </li>
                            </div>
                              <div class="col-xs-6">
                              <li>
                                <label>
                                  <input type="text" class="form-control" name="email" id="email_1" placeholder="EMAIL" value="<?=$data['email']?>">
                                </label>
                              </li>
                            </div>
                            <div class="clearfix"></div>
                              <div class="col-md-6">
                              <li>
                                <input type="file" name="">
                                <button type="submit" class="pull-right"  value="upload" style="padding: 10px;border-radius: 0px; text-transform: none; color: black; background: #eaeaea" id="btn_submit_1">Upload Picture <i class="fa fa-upload" style="margin-left: 5px; color: rgba(0,0,0,0.7);"></i></button>
                              </li>
                            </div>
                              <div class="col-md-6">
                              <li>
                                <label>
                                  <input type="text" class="form-control" name="company" id="company_1" placeholder="AGE">
                                </label>
                              </li>
                            </div>
                              <li class="col-sm-12">
                                <hr>
                                <button type="submit"  value="submit" id="btn_submit_1" style="padding: 15px 25px;border-radius: 5px; text-transform: none;" onClick="proceed();">Save <i class="fa fa-check-circle" style="margin-left: 5px; color: rgba(0,0,0,0.7);"></i></button>
                              </li>
                            </ul>
                          </form>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
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