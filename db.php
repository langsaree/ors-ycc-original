<?php
//define connection elements
$dbHost = "localhost:3306";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "";

//connect to Database
$connection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbDatabase);

//connection checking
if ($connection) {
   //set universal encoding
   mysqli_query( $connection ,"SET NAMES 'utf8'") or die(mysqli_error());
   
} else {
   
   die("Could not connect with db" . mysqli_error());
}
?>
