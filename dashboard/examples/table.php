<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  header("location: ../../login.php");    
}
else {
    // Makes it easier to read
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>My Portfolio</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
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
}
?>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/purple.svg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="dashboard.php" class="simple-text">
                        myCryptoHippo
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./table.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>My Portfolio</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> My Portfolio </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="no-icon">Hey, <?php echo $username?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../logout.php" name="logout">
                                    <span class="no-icon">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Buy/Sell Coins</h4>
                                    <p class="card-category">The myCryptoHippo cryptocurrency exchange</p>

                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Coin</th>
                                            <th>Name</th>
                                            <th>Value (USD)</th>
                                            <th>Change (%) Last 24 Hrs</th>
                                            <th>Buy/Sell</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>BTC</td>
                                                <td>Bitcoin</td>
                                                <td id = "BTC_Price"></td>
                                                <td id= "BTC_Change"></td>
                                                <td>
                                                <form action="table.php" method="post">
                                                        <input type="hidden" name="coin" value="BTC"/>
                                                        <input type="hidden" name="value" id="BTC_Price"/>
                                                        <div class="form-group"><input type="text" name="amount" class="form-control" placeholder="0.00"></div>
                                                        <button class="btn btn-success" type="submit" name="buy">Buy</button>
                                                        <button class="btn btn-danger" type="submit" name="sell">Sell</button>
                                                </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ETH</td>
                                                <td>Ethereum</td>
                                                <td id = "ETH_Price"></td>
                                                <td id= "ETH_Change"></td>
                                                <td>
                                                <form action="table.php" method="post">
                                                        <input type="hidden" name="coin" value="ETH"/>
                                                        <input type="hidden" name="value" id="BTC_Price"/>
                                                        <div class="form-group"><input type="text" name="amount" class="form-control" placeholder="0.00 (USD)"></div>
                                                        <button class="btn btn-success" type="submit" name="buy">Buy</button>
                                                        <button class="btn btn-danger" type="submit" name="sell">Sell</button>
                                                </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>LTC</td>
                                                <td>Litecoin</td>
                                                <td id = "LTC_Price"></td>
                                                <td id= "LTC_Change"></td>
                                                <td>
                                                <form action="table.php" method="post">
                                                        <input type="hidden" name="coin" value="LTC"/>
                                                        <input type="hidden" name="value" id="BTC_Price"/>
                                                        <div class="form-group"><input type="text" name="amount" class="form-control" placeholder="0.00 (USD)"></div>
                                                        <button class="btn btn-success" type="submit" name="buy">Buy</button>
                                                        <button class="btn btn-danger" type="submit" name="sell">Sell</button>
                                                </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>MIOTA</td>
                                                <td>IOTA</td>
                                                <td id = "MIOTA_Price"></td>
                                                <td id= "MIOTA_Change"></td>
                                                <td>
                                                <form action="table.php" method="post">
                                                        <input type="hidden" name="coin" value="MIOTA"/>
                                                        <input type="hidden" name="value" id="BTC_Price"/>
                                                        <div class="form-group"><input type="text" name="amount" class="form-control" placeholder="0.00 (USD)"></div>
                                                        <button class="btn btn-success" type="submit" name="buy">Buy</button>
                                                        <button class="btn btn-danger" type="submit" name="sell">Sell</button>
                                                </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BCH</td>
                                                <td>Bitcoin Cash</td>
                                                <td id = "BCH_Price"></td>
                                                <td id= "BCH_Change"></td>
                                                <td>
                                                <form action="table.php" method="post">
                                                        <input type="hidden" name="coin" value="BCH"/>
                                                        <input type="hidden" name="value" id="BTC_Price"/>
                                                        <div class="form-group"><input type="text" name="amount" class="form-control" placeholder="0.00 (USD)"></div>
                                                        <button class="btn btn-success" type="submit" name="buy">Buy</button>
                                                        <button class="btn btn-danger" type="submit" name="sell">Sell</button>
                                                </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>XRP</td>
                                                <td>Rippple</td>
                                                <td id = "XRP_Price"></td>
                                                <td id= "XRP_Change"></td>
                                                <td>
                                                <form action="table.php" method="post">
                                                        <input type="hidden" name="coin" value="XRP"/>
                                                        <input type="hidden" name="value" id="BTC_Price"/>
                                                        <div class="form-group"><input type="text" name="amount" class="form-control" placeholder="0.00 (USD)"></div>
                                                        <button class="btn btn-success" type="submit" name="buy">Buy</button>
                                                        <button class="btn btn-danger" type="submit" name="sell">Sell</button>
                                                </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ADA</td>
                                                <td>Cardano</td>
                                                <td id = "ADA_Price"></td>
                                                <td id= "ADA_Change"></td>
                                                <td>
                                                <form action="table.php" method="post">
                                                        <input type="hidden" name="coin" value="ADA"/>
                                                        <input type="hidden" name="value" id="BTC_Price"/>
                                                        <div class="form-group"><input type="text" name="amount" class="form-control" placeholder="0.00 (USD)"></div>
                                                        <button class="btn btn-success" type="submit" name="buy">Buy</button>
                                                        <button class="btn btn-danger" type="submit" name="sell">Sell</button>
                                                </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>NEO</td>
                                                <td>NEO</td>
                                                <td id = "NEO_Price"></td>
                                                <td id= "NEO_Change"></td>
                                                <td>
                                                <form action="table.php" method="post">
                                                        <input type="hidden" name="coin" value="NEO"/>
                                                        <input type="hidden" name="value" id="BTC_Price"/>
                                                        <div class="form-group"><input type="text" name="amount" class="form-control" placeholder="0.00 (USD)"></div>
                                                        <button class="btn btn-success" type="submit" name="buy">Buy</button>
                                                        <button class="btn btn-danger" type="submit" name="sell">Sell</button>
                                                </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>XLM</td>
                                                <td>Stellar</td>
                                                <td id = "XLM_Price"></td>
                                                <td id= "XLM_Change"></td>
                                                <td>
                                                <form action="table.php" method="post">
                                                        <input type="hidden" name="coin" value="XLM"/>
                                                        <input type="hidden" name="value" id="BTC_Price"/>
                                                        <div class="form-group"><input type="text" name="amount" class="form-control" placeholder="0.00 (USD)"></div>
                                                        <button class="btn btn-success" type="submit" name="buy">Buy</button>
                                                        <button class="btn btn-danger" type="submit" name="sell">Sell</button>
                                                </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>EOS</td>
                                                <td>EOS</td>
                                                <td id = "EOS_Price"></td>
                                                <td id= "EOS_Change"></td>
                                                <td>
                                                <form action="table.php" method="post">
                                                        <input type="hidden" name="coin" value="EOS"/>
                                                        <input type="hidden" name="value" id="BTC_Price"/>
                                                        <div class="form-group"><input type="text" name="amount" class="form-control" placeholder="0.00 (USD)"></div>
                                                        <button class="btn btn-success" type="submit" name="buy">Buy</button>
                                                        <button class="btn btn-danger" type="submit" name="sell">Sell</button>
                                                </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">Your Transaction History (coming soon)</h4>
                                    <p class="card-category">Here is a list of all your transactions ever made!</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>Action</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Coin</th>
                                            <th>Quantity</th>
                                            <th>Amount (USD)</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>BOUGHT</td>
                                                <td>Feb 12, 2018</td>
                                                <td>10:10 PM</td>
                                                <td>USD</td>
                                                <td>10000.00</td>
                                                <td>10000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
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