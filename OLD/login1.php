<?php
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign-Up/Login Form</title>
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
    <header id="header" style = "position: relative;">
                    <h1 id="logo"><a href="index.html">myCryptoHippo</a></h1>
                    <nav id="nav">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Resources</a></li>
                            <li><a href="#">About Us</a></li>

                            <li><a href="#" class="button special">Log In</a></li>
                        </ul>
                    </nav>
    </header>
    <div class="limiter" id="signup">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                <form class="login100-form validate-form" action="login.php" method="post">
                    <span class="login100-form-title p-b-55">
                        Log in
                    </span>

                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="username" placeholder="Username">
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

                    
                    <div class="container-login100-form-btn p-t-25">
                        <button class="login100-form-btn" type="submit" name="login">
                            Log in!
                        </button>
                    </div>

                    <div class="text-center w-full p-t-42 p-b-22">
                        <span class="txt1">
                            Or login with
                        </span>
                    </div>

                    <a href="#" class="btn-face m-b-10" style="margin-left: 90px">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a>


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