<?php
<<<<<<< HEAD
=======

>>>>>>> 165d05d41442f08e6329d31b431e97c22ad175cb
session_start();
include("dbconnection.php"); //creates database connection
$email = $_SESSION['email'];
if (!isset($email)) {
  header('Location:login.php');
}
<<<<<<< HEAD
=======

>>>>>>> 165d05d41442f08e6329d31b431e97c22ad175cb
else {
  $query = "SELECT * FROM parents WHERE email = '$email'";
  $userdetails =  mysqli_query ($connection, $query);
  $data = mysqli_fetch_assoc($userdetails);
  
  $firstname = $data["firstname"];
  $lastname = $data["lastname"];
  $email = $data["email"];
  $paymentmethod = $data["paymentmethod"];
  $image = $data["image"];
<<<<<<< HEAD
}
=======

}

>>>>>>> 165d05d41442f08e6329d31b431e97c22ad175cb
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

        <div class="container" style=""> 
          
         <div class="col-md-12" style="padding: 0px">
            <div class="side-bar" style=""> 
           <div class="col-md-3" style="padding: 0px">
            <div style="padding: 30px">
<<<<<<< HEAD
                <img src="images/<?php echo $data["image"]; ?>" class="img-responsive" alt="" style="border-radius: 5px">
=======
                <img src="images/<?=$data['photo']?>" class="img-responsive" alt="" style="border-radius: 5px">
>>>>>>> 165d05d41442f08e6329d31b431e97c22ad175cb
            </div>
              </div>
           <div class="col-md-9">
            <div style="padding: 30px">
             <h5 style="text-transform: none; margin: 0px; padding: 5px 0px;line-height: 1.5">
              <span style="font-size: 14px; color: #ddd; margin-right: 10px">
                <i class="fa  fa-id-badge"></i>
              </span>
<<<<<<< HEAD
               <?=$firstname?> <?=$lastname?> &nbsp; <span style="font-size: 15px; font-weight: ; color: #333"><?php echo $data["age"]; ?></span>
=======
               <?=$firstname?> <?=$lastname?> &nbsp; <span style="font-size: 15px; font-weight: ; color: #333">(32 yrs)</span>
>>>>>>> 165d05d41442f08e6329d31b431e97c22ad175cb
             </h5>
             <h6 style="text-transform: none; font-weight: normal; margin: 0px; padding: 5px 0px">
              <span style="font-size: 14px; color: #ddd; margin-right: 10px">
                <i class="fa  fa-globe"></i>
              </span>
<<<<<<< HEAD
               <?php echo $data["homeaddress"]; ?>
=======
               Abidjan, Cote d'ivoire
>>>>>>> 165d05d41442f08e6329d31b431e97c22ad175cb
             </h6>
             <h6 style="text-transform: none; font-weight: normal; margin: 0px; padding: 5px 0px; line-height: 1.5">
              <span style="font-size: 14px; color: #ddd; margin-right: 10px">
                <i class="fa  fa-phone"></i>
              </span>
<<<<<<< HEAD
               <a href="tel:09060697356" style="color: #337ab7"><?php echo $data["phonenumber"]; ?> </a>
=======
               <a href="tel:09060697356" style="color: #337ab7">08037478546</a>
>>>>>>> 165d05d41442f08e6329d31b431e97c22ad175cb
               &nbsp;
               &nbsp;
               &nbsp;
               <br class="visible-sm visible-xs">
              <span style="font-size: 14px; color: #ddd; margin-right: 10px;">
                <i class="fa  fa-envelope"></i>
              </span>
               <a href="email:<?=$email?>" style="color: #337ab7"><?=$email?></a>
             </h6>
           </div>
           </div>
           <div class="clearfix"></div>
           </div>
         </div>
         <div class="clearfix"></div>
          <br>
          <br>
          <!-- Resume -->
          <div class="row"> 

            <!-- MAIN CONTENT -->
            <div class="col-md-12"> 
              
              <!-- NAV LINKS -->              
              <nav> 
                <!-- Brand and toggle get grouped for better mobile display -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-tabis" aria-expanded="false"> <span class="tittle">MENU</span> <span class="fa fa-navicon icon-nav"></span> </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="nav-tabis">
                  <ul class="isop-filter nav nav-pills">
                    <li role="presentation" class="active"><a href="#about-me" aria-controls="about-me" role="tab" data-toggle="tab"> MY ACCOUNT &nbsp; &nbsp;<i class="fa fa-id-badge" style="opacity: .7"></i></a></li>
                    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab"> 
                       EDIT PROFILE &nbsp; &nbsp;<i class="fa fa-pencil" style="opacity: .7"></i></a></li>
                  </ul>
                </div>
              </nav>
              <!-- NAV LINKS END -->
              
              
              
              <div class="tab-content"> 
                
                <!-- ABOUT ME -->
                <div role="tabpanel" class="tab-pane fade in active" id="about-me">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle" style="font-weight: normal;"><?=$firstname?>'s Account Details</h5>
                    
                    <!-- Blog -->
                    <section class="about-me padding-top-10"> 
                      
                      <!-- Personal Info -->
                      <ul class="personal-info">
                        <li>
                          <p> <span> Acct Type</span> <?=$data['account_type']?> </p>
                        </li>
                        <li>
                          <p> <span> Acct Form</span> <?=$data['account_form']?> </p>
                        </li>
                      </ul>
                      
                      
                      
                      <!-- Skills -->
                      <h5 class="tittle" style="font-weight: normal;">More Details</h5>
                      
                      <!-- Sound Engineering -->
                      <div class="panel-group accordion padding-20" id="accordion">
                        <div class="panel panel-default">
                          <div class="row">
                            <div class="col-sm-4"> 
                              <!-- PANEL HEADING -->
                              <div class="">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"> Account Usage</a> </h4>
                              </div>
                            </div>
                            
                            <!-- Skillls Bars -->
                            <div class="col-sm-8">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> <span class="sr-only">60% Complete</span> </div>
                              </div>
                              
                              <!-- Skillls Text -->
                              <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <p>How often is your account being used.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </section>
                  </div>
                </div>
                
                <!-- RESUME -->
                <div role="tabpanel" class="tab-pane fade" id="resume">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    
                    <div class="bio-info padding-30">
                      
                      <div class="skills"> 
                        
                        
                    </div>
                  </div>
                  
                  <!-- Professional Experience -->
                  <div class="inside-sec margin-top-30"> 
                    <!-- Professional Experience -->
                    <h5 class="tittle">Most Recent Payments Into Account</h5>
                    <div class="padding-30 exp-history"> 
                      
                      <!-- Wordpress Developer -->
                      <div class="exp">
                        <div class="media-left"> <span class="sun">October 2017</span> </div>
                        <div class="media-body"> 
                          
                          <!-- COmpany Logo -->
                          <div class="company-logo"> <img src="" alt="" > </div>
                          <h6>$10,000</h6>
                          <p>Basic Salary</p>
                          <p>United States Goverment</p>
                          
                        </div>
                      </div>
                      
                      <div class="exp">
                        <div class="media-left"> <span class="sun">October 2017</span> </div>
                        <div class="media-body"> 
                          
                          <!-- COmpany Logo -->
                          <div class="company-logo"> <img src="" alt="" > </div>
                          <h6>$2,000</h6>
                          <p>Allowance</p>
                          <p>United States Government</p>
                          
                        </div>
                      </div>

                      <div class="media-left"> <span class="sun">September 2017</span> </div>
                        <div class="media-body"> 
                          
                          <!-- COmpany Logo -->
                          <div class="company-logo"> <img src="" alt="" > </div>
                          <h6>$10,000</h6>
                          <p>Basic Salary</p>
                          <p>United States Goverment</p>
                          
                        </div>
                      </div>

                    </div>

                  </div>  
                  
                  <!-- Academic Background -->
                  <div class="inside-sec margin-top-30"> 
                    <!-- Academic Background -->
                    <h5 class="tittle">Most Recent Withdrawals Made</h5>
                    <div class="padding-30 exp-history"> 
                      
                      <!-- Wordpress Developer -->
                      <div class="exp">
                        <div class="media-left"> <span class="sun"></span> </div>
                        <div class="media-body"> 
                          <!-- COmpany Logo -->
                          <div class="company-logo"> <span class="diploma"> </span> </div>
                          <h6></h6>
                          <p>M</p>
                          <p></p>
                          
                        </div>
                      </div>
                      
                      <!-- html5 and css3 Developer -->
                      
                    </div>
                  </div>
                </div>
                
                <!-- PORTFOLIO -->
                <div role="tabpanel" class="tab-pane fade" id="portfolio">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle">PORTFOLIO</h5>
                    
                    <!-- PORTFOLIO -->
                    <section class="portfolio padding-top-50 padding-bottom-50"> 
                      <!-- Work Filter --> 
                      <!-- PORTFOLIO ITEMS -->
                      <div id="Container" class="item-space row col-3"> 
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-1.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-photography pf-branding-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-2.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-branding-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-3.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-digital-art ">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-4.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-branding-design pf-digital-art">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-5.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-design pf-digital-art">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-9.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-branding-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-7.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-digital-art ">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-8.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-branding-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-9.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </section>
                  </div>
                </div>
                
                <!-- BLOG -->
                <div role="tabpanel" class="tab-pane fade" id="blog">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle">BLOG</h5>
                    
                    <!-- Blog -->
                    <section class="blog blog-page padding-20 padding-top-50 padding-bottom-50 "> 
                      
                      <!-- Blog Post -->
                      <article> <img class="img-responsive" src="images/blog-img-1.jpg" alt="" >
                        <div class="post-info">
                          <div class="post-in">
                            <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> <span class="margin-left-15"><i class="icon-user"></i>Admin</span> <span class="margin-left-15"><i class="icon-bubbles"></i> Featured</span></div>
                            <a href="#." class="tittle-post"> ENJOYING THE SMALL THINGS </a>
                            <p>t's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight! Boy the way Glen Miller played Songs the hit parade. Guys like us we had it made. Those were the days. These Happy Days are yours and mine Happy Days.</p>
                            <a href="#." class="btn-1">Read MOre <i class="fa fa-angle-right"></i></a> </div>
                        </div>
                      </article>
                      
                      <!-- BLOG POST -->
                      <article> <img class="img-responsive" src="images/blog-img-2.jpg" alt="" >
                        <div class="post-info">
                          <div class="post-in">
                            <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> <span class="margin-left-15"><i class="icon-user"></i>Admin</span> <span class="margin-left-15"><i class="icon-bubbles"></i> Featured</span></div>
                            <a href="#." class="tittle-post"> ENJOYING THE SMALL THINGS </a>
                            <p>t's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight! Boy the way Glen Miller played Songs the hit parade. Guys like us we had it made. Those were the days. These Happy Days are yours and mine Happy Days.</p>
                            <a href="#." class="btn-1">Read MOre <i class="fa fa-angle-right"></i></a> </div>
                        </div>
                      </article>
                      
                      <!-- BLOG POST -->
                      
                      <article> <img class="img-responsive" src="images/blog-img-3.jpg" alt="" >
                        <div class="post-info">
                          <div class="post-in">
                            <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> <span class="margin-left-15"><i class="icon-user"></i>Admin</span> <span class="margin-left-15"><i class="icon-bubbles"></i> Featured</span></div>
                            <a href="#." class="tittle-post"> ENJOYING THE SMALL THINGS </a>
                            <p>t's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight! Boy the way Glen Miller played Songs the hit parade. Guys like us we had it made. Those were the days. These Happy Days are yours and mine Happy Days.</p>
                            <a href="#." class="btn-1">Read MOre <i class="fa fa-angle-right"></i></a> </div>
                        </div>
                      </article>
                      
                      <!-- Pagination -->
                      <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                    </section>
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
                                <button type="submit"  value="upload" id="btn_submit_1">UPLOAD PICTURE</button>
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
                                <center>
                                <button type="submit"  value="submit" id="btn_submit_1" onClick="proceed();">SAVE</button>
                                </center>
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