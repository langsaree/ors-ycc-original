<?php
//define connection elements
$dbHost = "localhost";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "";

//connect to Database
$conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbDatabase);
$conn-> query('set names utf8');

//connection checking
// if ($conn) {
//    $db_select = mysql_select_db($dbDatabase);
   
//    //set universal encoding
//    mysql_query("SET NAMES 'utf8'") or die(mysql_error());
//    if (!$db_select) {
//       die("Could not select db" . mysql_error());
//    }
// } else {
//    die("Could not connect with db" . mysql_error());
// }
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

