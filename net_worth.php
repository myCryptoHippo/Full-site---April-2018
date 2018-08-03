<?php

require '../../db.php';
session_start();

if ( $_SESSION['logged_in'] != 1 ) {
  header("location: ../../login.php");    
}
// Set session variables to be used on profile.php page
else {
    $username = $_SESSION['username'];
    $result = $mysqli->query("SELECT * FROM users WHERE username='$username'");
    $user = $result->fetch_assoc();
}

$_SESSION['USD'] = $user['USD'];
$_SESSION['BTC'] = $user['BTC'];
$_SESSION['LTC'] = $user['LTC'];
$_SESSION['ETH'] = $user['ETH'];
$_SESSION['BCH'] = $user['BCH'];
$_SESSION['XRP'] = $user['XRP'];
$_SESSION['ADA'] = $user['ADA'];
$_SESSION['IOT'] = $user['IOT'];

$usd = $_SESSION['USD'];
$btc = $_SESSION['BTC'];
$ltc = $_SESSION['LTC'];
$eth = $_SESSION['ETH'];
$bch = $_SESSION['BCH'];
$xrp = $_SESSION['XRP'];
$ada = $_SESSION['ADA'];
$iot = $_SESSION['IOT'];

$decoded_json = json_decode(file_get_contents("https://api.coinmarketcap.com/v1/ticker/"), TRUE);

function price($curr) {
    global $decoded_json;
    $js = array_column($decoded_json, 'price_usd', 'symbol');
    return $js[$curr];
}
function change($curr)
{
    global $decoded_json;
    $js = array_column($decoded_json, 'percent_change_24h', 'symbol');
    return $js[$curr];
}

$btcp = $btc * price('BTC');
$ltcp = $ltc * price('LTC');
$ethp = $eth * price('ETH');
$bchp = $bch * price('BCH');
$xrpp = $xrp * price('XRP');
$adap = $ada * price('ADA');
$iotp = $iot * price('MIOTA');

$net = $usd + $btcp + $ltcp + $ethp + $bchp + $xrpp + $adap + $iotp;

$sql = "UPDATE `users` SET `Net`= '$net' WHERE `username`='$username'";
$mysqli->query($sql);

$leadersql = $mysqli->query("SELECT `username`,`Net` FROM `users` ORDER BY `Net` DESC LIMIT 5");
$index = 0;
$data = array();

if ($leadersql)
{
	while ($row = $leadersql->fetch_assoc())
    {
		$data[$index][0] = $row['username'];
		$data[$index][1] = $row['Net'];
		$index++;
	}
}
