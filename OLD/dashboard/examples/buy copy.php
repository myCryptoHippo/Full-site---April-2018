<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
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

}

// Escape all $_POST variables to protect against SQL injections
$amount = $mysqli->escape_string($_POST['amount']);
$coin = $mysqli->escape_string($_POST['coin']);
$value = $mysqli->escape_string($_POST['value']);

// Check if user with that email already exists
$usd = $mysqli->query("SELECT USD FROM users WHERE username='$username'");

// We know user email exists if the rows returned are more than 0
if ( $usd * $value > 0 ) {
    
    $_SESSION['message'] = 'You do not have enough money to make that transaction.';
    header("location: error.php");
    
}
else { 

    $sql = "INSERT INTO users (id, '$coin') VALUES ('$id','$amount') ON DUPLICATE KEY UPDATE '$coin' = '$amount'";

    if ( $mysqli->query($sql) ){

        $_SESSION['message'] =
                
                 "Nice!";

        header("location: error.php"); 

    }

    else {
        $_SESSION['message'] = 'Transaction failed!';
        header("location: error.php");
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Buy</title>
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
<body>
                <div class="sidebar-wrapper">
                        <h1> Success! kinda <?php echo $usd ?> </h1>
                </div>

</body>