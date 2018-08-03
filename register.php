<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['username'] = $_POST['Username'];

// Escape all $_POST variables to protect against SQL injections
$username = $mysqli->escape_string($_POST['Username']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );

// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());
$another = $mysqli->query("SELECT * FROM users WHERE username='$username'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 || $another->num_rows >0 ) {
    
    $_SESSION['message'] = 'There was an issue with the info you input... please try again!';
    header("location: loginerror.php");
    
}

else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (username, email, password, hash, Net, USD, BTC, ETH, LTC, BCH, XRP, ADA, IOT) " 
            . "VALUES ('$username','$email','$password', '$hash', 10000, 10000, 0, 0, 0, 0, 0, 0, 0)";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        $mysqli->query("UPDATE users SET active='0' WHERE email='$email'") or die($mysqli->error);
        $_SESSION['active'] = 0;
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'myCryptoHippo Verification';
$headers = 'From: support@mycryptohippo.com' . "\r\n" .
    'Reply-To: support@mycryptohippo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://mycryptohippo.com/verify.php?email='.$email.'&hash='.$hash; 



        mail( $to, $subject, $message_body, $headers );
        $_SESSION['message'] = 'Check your email to activate your account!';
        header("location: success1.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }

}