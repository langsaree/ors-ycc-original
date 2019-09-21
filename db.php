<?php
//define connection elements
$dbHost = "localhost:3306";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "";

//connect to Database
$connection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbDatabase);
mysqli_query( $connection ,"SET NAMES 'utf8'") or die(mysqli_error());
?>
