<?php
//define connection elements
$dbHost = "localhost";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "";


// Create connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword,$dbDatabase);
$conn-> query("set names utf8");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>