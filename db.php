<?php
//define connection elements
$dbHost = "localhost:8889";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "root";

//connect to Database
$connection = mysqli_connect($dbHost, $dbUsername, $dbPassword);

//connection checking
if ($connection) {
   $db_select = mysqli_select_db($dbDatabase);
   
   //set universal encoding
   mysqli_query("SET NAMES 'utf8'") or die(mysqli_error());
   if (!$db_select) {
      die("Could not select db" . mysqli_error());
   }
} else {
   die("Could not connect with db" . mysqli_error());
}
?>
