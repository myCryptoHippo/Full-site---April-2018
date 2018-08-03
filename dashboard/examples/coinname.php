<?php
require '../../db.php';
session_start();
$_SESSION['coinname'] = $_POST['coin'];