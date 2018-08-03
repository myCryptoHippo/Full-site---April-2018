<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
require '../../db.php';
session_start();

if ( $_SESSION['logged_in'] != 1 ) {
  header("location: ../../login.php");    
}
// Set session variables to be used on profile.php page

else {
    // Makes it easier to read
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $result = $mysqli->query("SELECT * FROM users WHERE username='$username'");
    $user = $result->fetch_assoc();
    $_SESSION['USD'] = $user['USD'];

}
$decoded_json = json_decode(file_get_contents("https://api.coinmarketcap.com/v1/ticker/"), TRUE);

$amount = $_POST['amount'];
$coin = $_POST['coin'];

$value = price($coin);

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

$balance = $usd - $amount;
if ($coin == 'BTC')
{
	$newAmount = ($amount/$value) + $btc;
}
if ($coin == 'ETH')
{
	$newAmount = ($amount/$value) + $eth;
}
if ($coin == 'LTC')
{
	$newAmount = ($amount/$value)  + $ltc;
}
if ($coin == 'BCH')
{
	$newAmount = ($amount/$value)  + $bch;
}
if ($coin == 'XRP')
{
	$newAmount = ($amount/$value)  + $xrp;
}
if ($coin == 'ADA')
{
	$newAmount = ($amount/$value)  + $ada;
}
if ($coin == 'MIOTA')
{
	$newAmount = ($amount/$value)  + $iot;
	$coin = 'IOT';
}


if ($balance >= 0 && is_numeric($amount) && $amount >= 0)
{
	$sql = "UPDATE users SET ".$coin." = '$newAmount', USD = '$balance' WHERE username='$username'";

	if ( $mysqli->query($sql) ) {

	$_SESSION['message'] = "Your balance has been updated successfully!";
	header("location: ../../success.php");  
	}  
}
else {
	$_SESSION['message'] = "Transaction failed: double check that you are able to make that transaction!";
	header("location: ../../error.php");    
}



?>

