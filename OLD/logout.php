<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/landing.css">

  <meta charset="UTF-8">
  <title>See you soon!</title>
</head>

<body>
<div class="form" style="text-align:center; color:white;margin-top:30vh">
    <h1 style="color:white; font-size: 50px"><b>Thanks for stopping by!</b></h1>
    <p>
    You have been logged out.
    </p>     
    <a href="dashboard/examples/portfolio.php"><button class="button special" style="margin-top:5vh; font-size: 25px;" />Home</button></a>
</div>
</body>
</html>
