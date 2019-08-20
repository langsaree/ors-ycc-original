<?php
//define connection elements
$dbHost = "localhost:8889";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "root";
here
//connect to Database
$connection = mysql_connect($dbHost, $dbUsername, $dbPassword);

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
