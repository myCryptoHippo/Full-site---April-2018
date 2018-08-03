<?php
require 'db.php';
session_start();
if ( $_SESSION['logged_in'] == 1 && $_SESSION['active'] == 1) {
  header("location: dashboard/examples/dashboard.php");    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <title>Signup!</title>
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
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
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
<head>
    <title>Signup!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
<!--===============================================================================================-->
</head>
<body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{latest-api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    <header id="header" style = "position: relative;">
                    <h1 id="logo"><a href="landing.html"><img src="img/logo.png" alt="CryptoHippo Logo" style="height:3.5em;border:0;"></a></h1>
                    <nav id="nav">
                        <ul>
                            <li><a href="landing.html">Home</a></li>
                            <li><a href="#">Resources (coming soon)</a></li>
                            <li><a href="aboutUs.html">About Us</a></li>
                            <li><a href="#">Log in</a></li>

                            <li><a href="signup.php" class="button special">Sign Up</a></li>
                        </ul>
                    </nav>
    </header>
    <div class="limiter" id="signup">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                <form class="login100-form validate-form" action="login.php" method="post">
                    <span class="login100-form-title p-b-55">
                        Log In
                    </span>

                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-user"></span>
                        </span>
                    </div>


                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>

                    
                    <div class="container-login100-form-btn p-t-25">
                        <button class="login100-form-btn" type="submit" name="login">
                            Log in!
                        </button>
                    </div>

                    <div class="text-center w-full p-t-115">
                        <span class="txt1">
                            Not a member?
                        </span>

                        <a class="txt1 bo1 hov1" href="signup.php">
                            Sign up now                          
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>