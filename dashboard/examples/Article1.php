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
                <h1 class="title"> Blockchain: The Underappreciated <br> Workhorse Behind Cryptocurrencies</h1>
                <p class="author"> Richard Zhu</p>
                <p class="date"> Jan 6</p>
                <p class="content">
                    The surge in prices of cryptocurrencies — decentralized digital currencies that use cryptography to control issuance and verify transactions — has led to the perception of a bullish market (just a reminder that this article does not serve to provide financial advice in any way) and the resulting craze leaves us wondering about the origin of these currencies and the backbone of digital currency: the blockchain.
                </p>
                <div>
                    <img src="Assets/image1.png" id="image1">
                    <p class="imageSub">Bitcoin, the ’gold standard’ of digital currency, has grown from <br>$900 to $16 000 in about a year</p>
                </div>
                <p class="content">
                    So what exactly is the blockchain? It’s an unchangeable, decentralized record of the past that is something akin to Google Docs: where you can type something on your computer and have it replicated on the screens of each collaborator of your document. Now imagine this Doc being permanently set in ‘comment-only’ mode before being used as a running ledger of some transactions that have occurred between you and a friend. As new transactions occur, comments containing details of these exchanges are added to the doc. These comments are gradually converted to text based on general consensus across all collaborators on the doc.
                </p>
                <p class="content">
                   The ability of the blockchain to house an permanent record across a network of computers where anyone can join is so powerful that governments, financial institutions, and startups alike have already taken great strides towards adopting the technology. And there’s a justification for the confidence; it provides transparency and reduces the trust we need in the various components of any technological system. As a fresh year begins for cryptocurrencies, the blockchain is a must-explore topic for any reader, and there’s no better way to explore this technology than to play around on myCryptoHippo, a free, risk-free cryptocurrency trading simulation. <br>
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