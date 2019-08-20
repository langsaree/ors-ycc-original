<?php
//define connection elements
$dbHost = "localhost:3306";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "";

//connect to Database

$connection = mysqli_connect($dbHost, $dbUsername,$dbPassword , $dbDatabase);

//connection checking
if ($connection) {
   $db_select = mysql_select_db($dbDatabase);
   
   //set universal encoding
   mysql_query("SET NAMES 'utf8'") or die(mysql_error());
   if (!$db_select) {
      die("Could not select db" . mysql_error());
   }
} else {
   die("Could not connect with db" . mysql_error());
}
?>
