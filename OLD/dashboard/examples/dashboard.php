<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
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

?>
<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="CSS1/topNavBar.css">
        <link rel="stylesheet" href="CSS1/main.css">
        <link rel="stylesheet" href="CSS1/LeftNavBar.css">
        
	   <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        
	   <script src="jquery-3.2.1.min.js"></script> 
        
		
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
            <div id="selectingBlock"></div>
            <div id="leftNavBarspacer_Top"></div>
            <ul id="leftNavChoices">
                <li id="li_leftNavChoices" style="font-weight: bolder;"><a href=#>Dashboard</a></li>
                <li id="li_leftNavChoices"><a href='portfolio.php'>My Portfolio</a></li>
                <li id="li_leftNavChoices"><a href=#>Resources (coming soon)</a></li>
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
            <div id="portfolio">
                <div id="w1">
                    <p id="intro">
                        Welcome, <?php echo $username ?>, to <span style="color:purple;">myCryptoHippo</span> <span style="color:red;">BETA</span>
                    </p>
                    <div id="pDes">
                        You have $<?php echo $usd ?> of virtual money to invest in more cryptocurrency!
                    </div>
                    <div id="pDes">
                        Continue buying and selling with real-time prices to learn more.
                    </div>
                    <div id="tradeButton">
                        <a href="portfolio.php"> Trade Now </a>
                    </div>
                </div>
                
                <div id="coins">
                    <div id="coinTitle">
                        Your portfolio 
                        <a style=" color: #8D369B;"> USD $ <?php echo round($net, 2) ?> </a>
                    </div>

                    <!--Div that will hold the pie chart-->
                    <div id="donutchart"></div>
                </div>
                
            </div>
            

            <div id="richest">
                <p id="title">
                    Richest Hippos
                </p>
                <p id="moreInfo">
                    Last 24 Hours
                </p>
                <div id="des1" class="des">
                    These people have risen to the top? Want to see yourself on this board? <a id="link" href="portfolio.php">Start trading.</a>
                </div>
                <div id="header">
                    <div id="he1">
                        Rank
                    </div>
                    <div id="he2">
                        User
                    </div>
                    <div id="he3">
                        Net Worth
                    </div>
                </div>
                
                <div id="person">
                    <div id="pe1">
                        1
                    </div>
                    <img src="Assets1/profile.png" id="personPic">
                    <div id="pe2">
                        <?php echo $data[0][0]?>
                    </div>
                    <div id="pe3">
                        <?php echo $data[0][1]?>
                    </div>
                </div>
                
                <div id="divLine"></div>
                
                <div id="person">
                    <div id="pe1">
                        2
                    </div>
                    <img src="Assets1/profile.png" id="personPic">
                    <div id="pe2">
                        <?php echo $data[1][0]?>
                    </div>
                    <div id="pe3">
                        <?php echo $data[1][1]?>
                    </div>
                </div>
                <div id="divLine"></div>
                
                <div id="person">
                    <div id="pe1">
                        3
                    </div>
                    <img src="Assets1/profile.png" id="personPic">
                    <div id="pe2">
                        <?php echo $data[2][0]?>
                    </div>
                    <div id="pe3">
                        <?php echo $data[2][1]?>
                    </div>
                </div>
                <div id="divLine"></div>
                
                <div id="person">
                    <div id="pe1">
                        4
                    </div>
                    <img src="Assets1/profile.png" id="personPic">
                    <div id="pe2">
                        <?php echo $data[3][0]?>
                    </div>
                    <div id="pe3">
                        <?php echo $data[3][1]?>
                    </div>
                </div>
                <div id="divLine"></div>
                
                <div id="person">
                    <div id="pe1">
                        5
                    </div>
                    <img src="Assets1/profile.png" id="personPic">
                    <div id="pe2">
                        <?php echo $data[4][0]?>
                    </div>
                    <div id="pe3">
                        <?php echo $data[4][1]?>
                    </div>
                </div>
                
                                
            </div>

            <div id="hippiest">
                <p id="title">
                    Current coins 
                </p>
                <div class="des">
                    Here's all the info you need on coin values! <a id="portfolio.php">Start trading.</a>
                </div>
                
                <div id="header">
                    <div id="he1">
                        Coin
                    </div>
                    <div id="he2">
                        Current Value (USD)
                    </div>
                    <div id="he3">
                        Change (%)
                    </div>
                </div>
                
                <div id="person">
                    <div id="pe1">
                        BTC
                    </div>
                    <div id="pe2">
                        <div id="BTC_Price"></div>
                    </div>
                    <div id="pe3">
                        <div id="BTC_Change"></div>
                    </div>
                </div>
                <div id="divLine"></div>
                
                <div id="person">
                    <div id="pe1">
                        ETH
                    </div>
                    <div id="pe2">
                        <div id="ETH_Price"></div>
                    </div>
                    <div id="pe3">
                        <div id="ETH_Change"></div>
                    </div>
                </div>
                <div id="divLine"></div>
                
                <div id="person">
                    <div id="pe1">
                        LTC
                    </div>
                    <div id="pe2">
                        <div id="LTC_Price"></div>
                    </div>
                    <div id="pe3">
                        <div id="LTC_Change"></div>
                    </div>
                </div>
                <div id="divLine"></div>
                
                <div id="person">
                    <div id="pe1">
                        IOT
                    </div>
                    <div id="pe2">
                        <div id="MIOTA_Price"></div>
                    </div>
                    <div id="pe3">
                        <div id="MIOTA_Change"></div>
                    </div>
                </div>
                <div id="divLine"></div>

                <div id="person">
                    <div id="pe1">
                        BCH
                    </div>
                    <div id="pe2">
                        <div id="BCH_Price"></div>
                    </div>
                    <div id="pe3">
                        <div id="BCH_Change"></div>
                    </div>
                </div>
                <div id="divLine"></div>
                <div id="person">
                    <div id="pe1">
                        XRP
                    </div>
                    <div id="pe2">
                        <div id="XRP_Price"></div>
                    </div>
                    <div id="pe3">
                        <div id="XRP_Change"></div>
                    </div>
                </div>
                <div id="divLine"></div>
                <div id="person">
                    <div id="pe1">
                        ADA
                    </div>
                    <div id="pe2">
                        <div id="ADA_Price"></div>
                    </div>
                    <div id="pe3">
                        <div id="ADA_Change"></div>
                    </div>
                </div>

            </div>
        </div>
        
        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="portfolio.js"></script>
        
    </body>
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
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
            <script>
                $.get("https://api.coinmarketcap.com/v1/ticker/", function(data,status) {
                    for (var i = 0; i < data.length - 1; i++) {
                        if (data[i].id == "bitcoin") {
                            $("#BTC_Price").html(data[i].price_usd)
                            $("#BTC_Change").html((data[i].percent_change_24h).concat("%"))
                             $("#change_margin").html(Math.round(parseFloat(data[i].price_usd) * data[i].percent_change_24h/100 * 10000)/10000)           
                        }
                        if (data[i].id == "ethereum") {
                            $("#ETH_Price").html(data[i].price_usd)
                            $("#ETH_Change").html((data[i].percent_change_24h).concat("%"))
                             $("#ETH_change_margin").html(Math.round(parseFloat(data[i].price_usd) * data[i].percent_change_24h/100 * 10000)/10000)           
                        }
                        if (data[i].id == "litecoin") {
                            $("#LTC_Price").html(data[i].price_usd)
                            $("#LTC_Change").html((data[i].percent_change_24h).concat("%"))
                             $("#LTC_change_margin").html(Math.round(parseFloat(data[i].price_usd) * data[i].percent_change_24h/100 * 10000)/10000)           
                        }
                        if (data[i].id == "iota") {
                            $("#MIOTA_Price").html(data[i].price_usd)
                            $("#MIOTA_Change").html((data[i].percent_change_24h).concat("%"))
                             $("#MIOTA_change_margin").html(Math.round(parseFloat(data[i].price_usd) * data[i].percent_change_24h/100 * 10000)/10000)           
                        }
                        if (data[i].id == "bitcoin-cash") {
                            $("#BCH_Price").html(data[i].price_usd)
                            $("#BCH_Change").html((data[i].percent_change_24h).concat("%"))
                             $("#BCH_change_margin").html(Math.round(parseFloat(data[i].price_usd) * data[i].percent_change_24h/100 * 10000)/10000)           
                        }
                        if (data[i].id == "ripple") {
                            $("#XRP_Price").html(data[i].price_usd)
                            $("#XRP_Change").html((data[i].percent_change_24h).concat("%"))
                             $("#XRP_change_margin").html(Math.round(parseFloat(data[i].price_usd) * data[i].percent_change_24h/100 * 10000)/10000)           
                        }
                        if (data[i].id == "cardano") {
                            $("#ADA_Price").html(data[i].price_usd)
                            $("#ADA_Change").html((data[i].percent_change_24h).concat("%"))
                             $("#ADA_change_margin").html(Math.round(parseFloat(data[i].price_usd) * data[i].percent_change_24h/100 * 10000)/10000)           
                        }
                        if (data[i].id == "stellar") {
                            $("#XLM_Price").html(data[i].price_usd)
                            $("#XLM_Change").html((data[i].percent_change_24h).concat("%"))
                             $("#XLM_change_margin").html(Math.round(parseFloat(data[i].price_usd) * data[i].percent_change_24h/100 * 10000)/10000)           
                        }
                        if (data[i].id == "eos") {
                            $("#EOS_Price").html(data[i].price_usd)
                            $("#EOS_Change").html((data[i].percent_change_24h).concat("%"))
                             $("#EOS_change_margin").html(Math.round(parseFloat(data[i].price_usd) * data[i].percent_change_24h/100 * 10000)/10000)           
                        }
                        if (data[i].id == "neo") {
                            $("#NEO_Price").html(data[i].price_usd)
                            $("#NEO_Change").html((data[i].percent_change_24h).concat("%"))
                             $("#NEO_change_margin").html(Math.round(parseFloat(data[i].price_usd) * data[i].percent_change_24h/100 * 10000)/10000)           
                        }

                    }
                });
</script>
</html>