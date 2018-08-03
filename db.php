<?php
/* Database connection settings */
$host = 'us-cdbr-iron-east-01.cleardb.net';
$user = 'b75566ef4603cf';
$pass = '36a30d18';
$db = 'heroku_748410e05067680';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$conn = mysqli_connect($host, $user, $pass, $db);
