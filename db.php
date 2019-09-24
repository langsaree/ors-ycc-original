<?php
//define connection elements
$dbHost = "localhost";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "";

//connect to Database
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbDatabase);
$conn->query("set names utf8");

//connection checking
// if ($conn) {
//    // $db_select = mysqli_select_db($dbDatabase);
   
//    //set universal encoding
//    mysqli_query("SET NAMES 'utf8'") or die(mysqli_error());
//    if (!$db_select) {
//       die("Could not select db: " . mysqli_connect_error());
//    }
// } else {
//    die("Could not connect with db" . mysqli_error());
// }


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
