<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['first'] = $_POST['first'];
$_SESSION['last'] = $_POST['last'];

// Escape all $_POST variables to protect against SQL injections
$first = $mysqli->escape_string($_POST['first']);
$last = $mysqli->escape_string($_POST['last']);
$email = $mysqli->escape_string($_POST['email']);
$subject = $mysqli->escape_string($_POST['subject']);
$message = $mysqli->escape_string($_POST['message']);

$to      = 'info@mycryptohippo.com';
$subject = 'Contact Form';
$headers = 'From: info@mycryptohippo.com' . "\r\n" .
    'Reply-To: info@mycryptohippo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $message_body = '
        '.$message;

mail( $to, $subject, $message_body, $headers );
$_SESSION['message'] = 'Your message was successfully sent!';
header("location: messageSuccess.php"); 


