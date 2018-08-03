<?php
require 'db.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup!</title>
<link rel="shortcut icon" href="imagesNEW/favicon.ico" type="image/x-icon"> 

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->

<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" type="text/css" href="cssNEW/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
                <link rel="stylesheet" href="cssNEW/font-awesome/css/font-awesome.css">

        <!--icons-->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<!--===============================================================================================-->

</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'loginauth.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';

    }
}
?>
<body>
        <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="imgNEW/logo.png" style = "width: 200%" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3 style = "color: #cd8be0">Menu</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="index.html" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="about.html" title="about">About us</a></li>
                    <li><a class="smoothscroll"  href="https://www.medium.com/myCryptoHippo" title="services">Articles/Blog</a></li>
                    <li data-toggle="modal" data-target="#exampleModal"><a class="smoothscroll"  href="#" title="resources">Resources</a></li>
                    <li><a class="smoothscroll"  href="events.html" title="works">Events</a></li>
                    <li><a class="smoothscroll"  href="login.php" title="clients">Login</a></li>
                    <li><a class="smoothscroll"  href="signup.php" title="clients">Signup</a></li>
                    <li><a class="smoothscroll"  href="contact.php" title="contact">Contact Us</a></li>
                </ul>
    
    
                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.facebook.com/mycryptohippo/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/mycryptohippo?lang=en"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/mycryptohippo/"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text" style= "padding-right: 10px;">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text" style= "padding-right: 10px;">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 10vh">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign up to view resources!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="imagesNEW/Mascot.png" style="padding-left: 8vw; width: 70%">
        <br>In order to view resources, you're going to need a myCryptoHippo account! Don't worry, the process is quick and easy. Just press the button below!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="signup.php">
        <button type="submit" class="btn btn-primary">Sign me up!</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <div class="limiter" id="signup" style="padding-top:0px">
        <div class="container-login100 wow fadeIn" style="padding-top:16vh; padding-bottom:16vh;">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="signup.php" method="post">
					<span class="login100-form-title p-b-55">
						Sign up
					</span>

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="Username" placeholder="Username" data-validate = "This field is mandatory">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							I agree to the <a href="terms.html"><u>terms and conditions</u></a> 
						</label>
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn" type="submit" name="register">
							Sign me up!
						</button>
					</div>


					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Already a member?
						</span>

						<a class="txt1 bo1 hov1" href="login.php">
							Log in now							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
        <!--footer-->
        <section class="bg-footer" id="connect" style="margin-top: 0px; padding: 80px 0px;">
            <div class="container" >
                <div class="row">
                    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12 text-center wow fadeIn">
                        <h1 style="color:#9975a7">myCryptoHippo</h1>
                        <p class="mt-4">
                            <a href="https://twitter.com/mycryptohippo?lang=en" target="_blank"><em class="ion-social-twitter text-twitter-alt icon-sm mr-3"></em></a>
                            <a href="https://github.com/myCryptoHippo" target="_blank"><em class="ion-social-github text-facebook-alt icon-sm mr-3"></em></a>
                            <a href="https://www.linkedin.com/company/mycryptohippo?originalSubdomain=ca" target="_blank"><em class="ion-social-linkedin text-linkedin-alt icon-sm mr-3"></em></a>
                            <a href="https://www.facebook.com/mycryptohippo/" target="_blank"><em class="ion-social-facebook text-facebook-alt icon-sm mr-3"></em></a>
                        </p>
                        <p class="pt-2 text-muted">
                            &copy; 2018 myCryptoHippo. All rights reserved. 
                        </p>
                    </div>
                </div>
            </div>
        </section>

    <!-- End Footer Area -->
    

    
<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <script src="jsNEW/scripts.js"></script>
        <script src="jsNEW/main.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>