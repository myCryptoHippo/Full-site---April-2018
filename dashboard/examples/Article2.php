<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
/*
if ( $_SESSION['logged_in'] != 1 ) {
  header("location: ../../login.php");    
}

if ( $_SESSION['active'] != 1 ) {
  $_SESSION['message'] = "Account not activated!";
  header("location: ../../error.php");    
}

else {
    // Makes it easier to read
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
require '../../net_worth.php';
*/
?>
<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="CSS1/topNavBar.css">
        <link rel="stylesheet" href="CSS1/LeftNavBar.css">
        <link rel="stylesheet" href="CSS1/resources.css">
        <link rel="stylesheet" href="CSS1/Article.css">
<link rel="shortcut icon" href="../../imagesNEW/favicon.ico" type="image/x-icon"> 

	   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        
	   <script src="jquery-3.2.1.min.js"></script> 
        
		
    </head>

    <body>
    
        <div class="topNavBar">
            <img src="Assets/Logo.png" id="logo">
            <div id="profile">
                <img src="Assets/profile.png" id="profilePic">
                <div style="name">
                    <?php echo $username ?>
                </div>
            </div>
            <div id="logOutButton">
                    <a href="../../logout.php" style="color: black;">Logout</a>
            </div>
        </div>
        

        <!--Left Navigation Pane -->
        <div class="leftNavBar">
            <div id="selectingBlock" style="margin-top: 218px"></div>
            <div id="leftNavBarspacer_Top"></div>
            <ul id="leftNavChoices">
                <li id="li_leftNavChoices"><a href='dashboard.php'>Dashboard</a></li>
                <li id="li_leftNavChoices"><a href='portfolio.php'>My Portfolio</a></li>
                <li id="li_leftNavChoices" style="font-weight: bolder;"><a href=#>Resources (coming soon)</a></li>
            </ul>


            <div id="leftNavFooter">
                <a href=# id="leftNavAboutUs">About us</a>
                <div>
                    <a href="https://medium.com/mycryptohippo/welcome-to-behindtheproduct-571825990f29"><img id="aboutUsFooterIcons" src="../../imagesL/Medium-Icon.png" alt="myCryptoHippo Medium Icon"></a>
                    <a href="https://instagram.com/myCryptoHippo"><img id="aboutUsFooterIcons" src="../../imagesL/Instagram-Icon.png" alt="myCryptoHippo Instagram Icon"></a>
                    <a href="https://www.facebook.com/mycryptohippo/?ref=br_rs"><img id="aboutUsFooterIcons" src="../../imagesL/Facebook-Icon.png" alt="myCryptoHippo Facebook Icon"></a>
                    <a href="https://twitter.com/myCryptoHippo"><img id="aboutUsFooterIcons" src="../../imagesL/Twitter-icon.png" alt="myCryptoHippo Twitter Icon"></a>
                </div>
            </div> <!--class "leftNaveFooter" end-->
        </div>

        
                <div id="mainPanel">
            <div>
                <h1 class="title"> myCryptoHippo: Perfect Way to <br> Start Your Own Investment Journey </h1>
                <p class="author"> Erica Wang</p>
                <p class="date"> Feb 20</p>
                <div>
                    <img src="Assets/image2.png" style="width:100%" id="image2">
                </div>
                <p class="content">
                    In the past year, cryptocurrency has seen a massive surge in value. This has led to a crypto craze in the general public. Although purchasing cryptocurrency might seem fairly easy for those with investment experience, it is intimidating for those new to the field, proven by the fact that “How To Buy Bitcoin” was one of the most popular searches on Google in 2017.
                </p>
                <p class="content">
                    Personally, I started investing in cryptocurrency two years ago. Like many others, I have never ventured into investing prior to this. Although I consider myself relatively tech-oriented and adventurous, it took me over a week to develop a basic understanding of the process. During this period, I had to learn where to purchase the different types of coins, how to interpret the exchange graphs, how blockchain powers crypto, and many other things all by myself. That is why when I joined JA, I was inspired to pitch the idea of myCryptoHippo — a way to make learning about cryptocurrency easy and accessible.
                </p>
                <p class="content">
                    myCryptoHippo is an educational cryptocurrency trading simulation. Our platform is tailored to crypto beginners. We guide them through the process of trading and inform them on the different types of cryptocurrencies. myCryptoHippo is allowing anyone to learn about investing. So don’t miss out on this learning opportunity. Stop hesitating, and join the herd. <br>
                </p>
                

            </div>
        </div>

        
    </body>
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</script>
</html>