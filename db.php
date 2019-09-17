<?php
//define connection elements
$dbHost = "localhost:3306";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "";

//connect to Database
$con = mysqli_connect($dbHost, $dbUsername, $dbPassword,$dbDatabase);

//connection checking
if ($con) {
   mysqli_query($con,"SET NAMES 'utf8'") or die(mysqli_error());
} else {
   die("Could not connect with db" . mysqli_error());
}
?>
