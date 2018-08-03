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
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
require '../../net_worth.php';

?>

<!DOCTYPE html>
<html>
    
    <head>
    <title>myPortfolio</title>

        <link rel="stylesheet" href="CSSP/topNavBar.css">
        <link rel="stylesheet" href="CSSP/main.css">
        <link rel="stylesheet" href="CSSP/LeftNavBar.css">
        <link rel="shortcut icon" href="../../imagesNEW/favicon.ico" type="image/x-icon"> 

       <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        
       <script src="jquery-3.2.1.min.js"></script> 
        
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>myPortfolio</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
        
    </head>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['buy'])) { //user logging in
        require 'buy.php';

    }
    
    elseif (isset($_POST['sell'])) { //user registering
        
        require 'sell.php';

    }
    elseif (isset($_POST['assign'])) { //user registering
        
        require 'assign.php';

    }
}
?>
    <body>
    
        <div class="topNavBar">
            <img src="AssetsP/Logo.png" id="logo">
            <div id="profile">
                <img src="AssetsP/profile.png" id="profilePic">
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
                <li id="li_leftNavChoices"><a href='dashboard.php'>Dashboard</a></li>
                <li id="li_leftNavChoices" style="font-weight: bolder;"><a href=#>My Portfolio</a></li>
                <li id="li_leftNavChoices" data-toggle="modal" data-target="#exampleModal"><a href='#'>Resources</a></li>
            </ul>


            <div id="leftNavFooter">
                <a href=# id="leftNavAboutUs">About us</a>
                <div>
                    <a href="https://medium.com/mycryptohippo/welcome-to-behindtheproduct-571825990f29"><img id="aboutUsFooterIcons" src="AssetsP/Medium-Icon.png" alt="myCryptoHippo Medium Icon"></a>
                    <a href="https://instagram.com/myCryptoHippo"><img id="aboutUsFooterIcons" src="AssetsP/Instagram-Icon.png" alt="myCryptoHippo Instagram Icon"></a>
                    <a href="https://www.facebook.com/mycryptohippo/?ref=br_rs"><img id="aboutUsFooterIcons" src="AssetsP/Facebook-Icon.png" alt="myCryptoHippo Facebook Icon"></a>
                    <a href="https://twitter.com/myCryptoHippo"><img id="aboutUsFooterIcons" src="AssetsP/Twitter-icon.png" alt="myCryptoHippo Twitter Icon"></a>
                </div>
            </div> <!--class "leftNaveFooter" end-->
        </div>
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 10vh">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RESOURCES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../../imagesNEW/Mascot.png" style="padding-left: 8vw; width: 70%">
        <br>This part of the website is under construction at the moment. Check back soon!
      </div>
    </div>
  </div>
</div>

        
        <div id="mainPanel">

            <div id="w1">
                <div id="title">Your Portfolio</div>
                <div id="des">You started with $10,000.00 but you now have <a id="curValue" style="color: #46a049">$<?php echo round($net, 2) ?></a> ! You are doing great.</div>
                <div id="box1">
                    <div id="subT1">Your Net Worth</div>
                    <p id="netWorth">$<?php echo round($net, 2) ?> 

<a id="usd">USD</a></p>  
                </div>


                <div id="box2">
                    <div id="subT1">Cash</div>
                    <p class="text1" id="cash">$<?php echo round($usd, 2) ?></p>
                </div>

                <div id="box2">
                    <div id="subT1">Coins</div>
                    <p class="text1" id="coins">$<?php echo round($net - $usd, 2) ?></p>
                </div>
                
                <div id="box4">
                    <div id="text2"></div>
                    
                    
                    <div id="header">
                        <div id="he1">
                            Coin
                        </div>
                        <div id="he2">
                            Amount
                        </div>
                        <div id="he3">
                            Price (USD)
                        </div>
                        <div id="he4">
                            (+/-)
                        </div>
                    </div>

                    <div id="row">
                        <div id="ro1"> 
                            <div id="BTC">BTC</div>
                        </div>
                        <div id="ro2">
                            <?php echo $btc?>
                        </div>
                        <div id="ro3">
                            <a id="val"><?php echo price('BTC')?></a>
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('BTC'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                    </div>
                    
                    <div id="row">
                        <div id="ro1"> 
                            <div id="ETH">ETH</div>
                        </div>
                        <div id="ro2">
                            <?php echo $eth?>
                        </div>
                        <div id="ro3">
                            <a id="val"><?php echo price('ETH')?></a>
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('ETH'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                    </div>

                    <div id="row">
                        <div id="ro1"> 
                            <div id="LTC">LTC</div>
                        </div>
                        <div id="ro2">
                            <?php echo $ltc?>
                        </div>
                        <div id="ro3">
                            <a id="val"><?php echo price('LTC')?></a>
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('LTC'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                    </div>

                    <div id="row">
                        <div id="ro1"> 
                            <div id="BCH">BCH</div>
                        </div>
                        <div id="ro2">
                            <?php echo $bch?>
                        </div>
                        <div id="ro3">
                            <a id="val"><?php echo price('BCH')?></a>
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('BCH'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                    </div>

                    <div id="row">
                        <div id="ro1"> 
                            <div id="IOT1">IOT</div>
                        </div>
                        <div id="ro2">
                            <?php echo $iot?>
                        </div>
                        <div id="ro3">
                            <a id="val"><?php echo price('MIOTA')?></a>
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('MIOTA'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                    </div>

                    <div id="row">
                        <div id="ro1"> 
                            <div id="ADA">ADA</div>
                        </div>
                        <div id="ro2">
                            <?php echo $ada?>
                        </div>
                        <div id="ro3">
                            <a id="val"><?php echo price('ADA')?></a>
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('ADA'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                    </div>
                </div>
            </div>
            


            <div id="w2">
                <div id="title">Buy Coins</div>
                <div id="w2_des">There's only one way to become the richest hippo. Buy more coins.</div>

                <div id="header">
                        <div id="w2_he1">
                            Coin
                        </div>
                        <div id="w2_he2">
                            Price (USD)
                        </div>
                        <div id="w2_he3">
                            Change (24h)
                        </div>
                        <div id="w2_he4">
                            Buy/Sell
                        </div>
                    </div>
                    <div id="divLine1"></div>

                    <div id="w2_row">
                        <div id="w2_ro1"> 
                            <div id="BTC1">BTC</div>
                        </div>
                        <div id="w2_ro2">
                            <?php echo price('BTC')?>
                        </div>
                        <div id="w2_ro3">
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('BTC'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                        <div id="w2_ro4">
                            <button class="buy" onclick="getData('BTC')">Buy</button>
<script>
var coin;
var boin;
function getData(value){
    coin = value;
    document.getElementById("mycoin").innerHTML = coin;
}
function getData1(anotherVal){
    $_SESSION['coin']=anotherVal;
    boin = anotherVal;
    document.getElementById("mycoin1").innerHTML = boin;
}
</script>
                        </div>
                        <div id="w2_ro5">
                            <button class="sell" onclick="getData1('BTC')">Sell</button>
                        </div>
                    </div>

                    <div id="divLine"></div>
                    <div id="w2_row">
                        <div id="w2_ro1"> 
                            <div id="ETH1">ETH</div>
                        </div>
                        <div id="w2_ro2">
                            <?php echo price('ETH')?>
                        </div>
                        <div id="w2_ro3">
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('ETH'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                        <div id="w2_ro4">
                            <button class="buy" onclick="getData('ETH')">Buy</button>
                        </div>
                        <div id="w2_ro5">
                            <button class="sell" onclick="getData1('ETH')">Sell</button>
                        </div>
                    </div>

                    <div id="divLine"></div>
                    <div id="w2_row">
                        <div id="w2_ro1"> 
                            <div id="LTC1">LTC</div>
                        </div>
                        <div id="w2_ro2">
                            <?php echo price('LTC')?>
                        </div>
                        <div id="w2_ro3">
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('LTC'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                        <div id="w2_ro4">
                            <button class="buy" onclick="getData('LTC')">Buy</button>
                        </div>
                        <div id="w2_ro5">
                            <button class="sell" onclick="getData1('LTC')">Sell</button>
                        </div>
                    </div>

                    <div id="divLine"></div>
                    <div id="w2_row">
                        <div id="w2_ro1"> 
                            <div id="BCH1">BCH</div>
                        </div>
                        <div id="w2_ro2">
                            <?php echo price('BCH')?>
                        </div>
                        <div id="w2_ro3">
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('BCH'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                        <div id="w2_ro4">
                            <button class="buy" onclick="getData('BCH')">Buy</button>
                        </div>
                        <div id="w2_ro5">
                            <button class="sell" onclick="getData1('BCH')">Sell</button>
                        </div>
                    </div>

                    <div id="divLine"></div>
                    <div id="w2_row">
                        <div id="w2_ro1"> 
                            <div id="XRP1">XRP</div>
                        </div>
                        <div id="w2_ro2">
                            <?php echo price('XRP')?>
                        </div>
                        <div id="w2_ro3">
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('XRP'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                        <div id="w2_ro4">
                            <button class="buy" onclick="getData('XRP')">Buy</button>
                        </div>
                        <div id="w2_ro5">
                            <button class="sell" onclick="getData1('XRP')">Sell</button>
                        </div>
                    </div>

                    <div id="divLine"></div>
                    <div id="w2_row">
                        <div id="w2_ro1"> 
                            <div id="ADA1">ADA</div>
                        </div>
                        <div id="w2_ro2">
                            <?php echo price('ADA')?>
                        </div>
                        <div id="w2_ro3">
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('ADA'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                        <div id="w2_ro4">
                            <button class="buy" onclick="getData('ADA')">Buy</button>
                        </div>
                        <div id="w2_ro5">
                            <button class="sell" onclick="getData1('ADA')">Sell</button>
                        </div>
                    </div>   
                    <div id="divLine"></div>
                    <div id="w2_row">
                        <div id="w2_ro1"> 
                            <div id="IOT1">IOT</div>
                        </div>
                        <div id="w2_ro2">
                            <?php echo price('MIOTA')?>
                        </div>
                        <div id="w2_ro3">
                            <a id="percIn">
                            <?php 
$color = "#000000";
$v = change('MIOTA'); 

if ($v > 0)
   $color = "#a9e045";
else if ($v < 0)
   $color = "#e04d45";

echo "<span style=\"color: $color\">$v%</span>";
?></a>
                        </div>
                        <div id="w2_ro4">
                            <button class="buy" onclick="getData('MIOTA')">Buy</button>
                        </div>
                        <div id="w2_ro5">
                            <button class="sell" onclick="getData1('MIOTA')">Sell</button>
                        </div>
                    </div>    
            </div>
            <div id="w3">
                <div id="title">Transaction History (COMING SOON)</div>
                <div id="w2_des">View what you bought and sold.</div>

                <div id="header">
                        <div id="w3_he1">
                            Action
                        </div>
                        <div id="w3_he2">
                            Date
                        </div>
                        <div id="w3_he3">
                            Coin
                        </div>
                        <div id="w3_he4">
                            Amount
                        </div>
                        <div id="w3_he5">
                            Price (USD)
                        </div>
                </div>

                    <div id="w3_row">
                        <div id="w3_ro1"> 
                            BOUGHT
                        </div>
                        <div id="w3_ro2">
                            Dec. 3, 2017
                        </div>
                        <div id="w3_ro3">
                            12:30 PM
                        </div>
                        <div id="w3_ro4">
                            BTC
                        </div>
                        <div id="w3_ro5">
                            $10000
                        </div>
                        <div id="w3_ro6">
                            1.12
                        </div>
                    </div>

                    <div id="divLine"></div>
            </div>
        </div>
        
                
        <!--popup-->
        
        
        <div id="buyd" class="popup">
            <p id="pTitle">Buy Coin</p>
            <br><br>
            <form action="portfolio.php" method="post" name="sampleForm" id = "sampleForm">
                  Buy
                  <input type="text" name="amount" placeholder="0.00 (USD)" id="txtField">
                  <input type="hidden" name="coin" id="coin" value="">
                     of <span id="mycoin"></span> 
                  <br><br>
                  <a href="" onclick="setValue();"><input type="submit" name="buy" id="submitButton" ></a>
             </form>
        </div>
 <script>
function setValue(){
    document.sampleForm.coin.value = coin;
    document.forms["sampleForm"].submit();
}
</script>       
        <div id="selld" class="popup">
            <p id="pTitle">Sell Coin</p>
            <br><br>
            <form action="sell.php" method="post" name="sellForm" id = "sellForm">
                  Sell
                  <input type="text" name="amount" placeholder="0.00 (USD)" id="txtField">
                    of  <span id="mycoin1"></span>  
                  <br><br>
                  <input type="submit" name="sell" id="submitButton">
             </form>
        </div>
 <script>
function sellValue(){
    <?php
    $value = document.sellForm.coin1.value;
    $sql = "UPDATE users SET USD =  WHERE id=2";
    ?>
    document.forms["sellForm"].submit();
}
</script>  
         <script>
            var idClicked = 0; 
             //id is automatically initialized after the popup appears as the name of the coin so feel free to use it when proessing transaction
             
            //POPUP
            
             //Initialize dialog
            $("#buyd").dialog({
                width: 500,
                autoOpen: false,
                modal: true, 
                dialogClass: "no-close",
                buttons: {
                    Close: function () {
                        $(this).dialog("close");
                    },
                },
                open: function (e, ui) {
                    $(this).parent().find(".ui-dialog-buttonpane .ui-button")
                        .addClass("pb");
                }
            });

            //Open it when #opener is clicked
            $(".buy").click(function () {
                idClicked = this.id;
                $("#buyd").dialog("open");
                $("#ui-dialog-title-dialog").hide();
            })
             
             
             //Initialize dialog
            $("#selld").dialog({
                width: 500,
                autoOpen: false,
                modal: true, 
                dialogClass: "no-close",
                buttons: {
                    Close: function () {
                        $(this).dialog("close");
                    },
                },
                open: function (e, ui) {
                    $(this).parent().find(".ui-dialog-buttonpane .ui-button")
                        .addClass("pb");
                }
            });
            //Open it when #opener is clicked
            $(".sell").click(function () {
                idClicked = this.id;
                $("#selld").dialog("open");
                $("#ui-dialog-title-dialog").hide();
            })
        </script>
<script>
    function coinName() {

}
</script>
    </body>
</html>