<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Reset Password</title>
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
                            <p>“I've been able to use this platform easily. And all promises Pikin has offered me has been fulfiled. They are a great team and their support system is really up to par!”</p>
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
            <div class="menu-holder">
                <ul class="main-links">
                    <li><a class="normal-link" href="csignup.php">Don’t have an account?</a></li>
                    <li><a class="sign-button" href="csignup.php">Sign up</a></li>
                </ul>
            </div>

            <div class="signin-signup-form">
                <div class="form-items">
                    <div class="form-title">Reset Password</div>

                    <form id="signinform" method="POST" action="resetpassword.php">
                        <div class="form-text">
                            <input type="text" name="email" placeholder="E-mail Address" required>
                        </div>
                        
                        <div class="form-button">
                            <button id="submit" type="submit" name= "submit" class="ybtn ybtn-purple">Reset Password</button>
                            <?php 
                            $reasons = array("email" => "Sorry email does not exist in our database", "blank" => "You have left one or more fields blank."); 
                            if ($_GET["resetFailed"]){
                                ?> <font color="red"><?php echo $reasons[$_GET["reason"]]; 
                            }
                            ?></font>

                        </div>
                        <input type="hidden" value="coordinators" name="page" id="page">
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

