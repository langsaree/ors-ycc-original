<?php
//define connection elements
$dbHost = "localhost";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "";

//connect to Database
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbDatabase);
$conn->query("set names utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
