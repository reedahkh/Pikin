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

<body class="fullpage">
<div id="form-section" class="container-fluid signup">
    <div class="website-logo">
        <a href="index.php">
            <div class="logo" style="width:62px;height:18px"></div>
        </a>
    </div>
    <div class="row">
        <div class="info-slider-holder">
            <div class="bg-animation"></div>
            <div class="info-holder">
                <div class="bold-title">Join <br><span>Australia’s fastest growing</span>
                family day care educator booking service.<br>
                </div>
                <div class="mini-testimonials-slider">
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images/person1.jpg" alt="">
                            <h4>Matthias Ehizua</h4>
                            <h5>Team Lead OAA Study</h5>
                            <p>“I've been able to use this platform easily. And all promises Pikin has offered me as been fulfiled. They are a great team and their support system is really up to par!”</p>
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
                    <li><a class="normal-link" href="signin.php">You have an account?</a></li>
                    <li><a class="sign-button" href="signin.php">Sign in</a></li>
                </ul>
            </div>
            <div class="signin-signup-form">
                <div class="form-items">
                    <div class="form-title">Sign up for new account</div>
                    <form id="signupform" method="POST" action="register.php">
                        <div class="row">
                            <div class="col-md-6 form-text">
                                <input type="text" name="firstname" placeholder="First name" required>
                            </div>
                            <div class="col-md-6 form-text">
                                <input type="text" name="lastname" placeholder="Last name" required>
                            </div>
                        </div>
                        <div class="form-text">
                            <input type="Email" name="email" placeholder="E-mail Address" required>
                        </div>
                        <div class="form-text">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-text text-holder">
                            <span class="text-only">Preferred method of payment.</span>
                            <input type="radio" name="paymentmethod" value="Paypal" class="hno-radiobtn" id="rad1"><label for="rad1">Paypal</label>
                            <input type="radio" name="paymentmethod" value="Credit Card" class="hno-radiobtn" id="rad2"><label for="rad2">Credit Card</label>
                        </div>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ybtn ybtn-purple">Create new account</button>
                        </div>
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
