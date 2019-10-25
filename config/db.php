<?php
//define connection elements
$dbHost = "localhost";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "";

//connect to Database
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbDatabase);
if ($conn) {
    //set universal encoding
    mysqli_query( $conn ,"SET NAMES 'utf8'") or die(mysqli_error());

} else {

    die("Could not connect with db" . mysqli_error());
}
?>
