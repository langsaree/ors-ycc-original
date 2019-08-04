<?php
//define connection elements
$dbHost = "localhost";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "";

$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDatabase);
$connection->query("set names utf8");

if (mysqli_connect_errno())
{
   echo "Database Connect Failed : " . mysqli_connect_error();
}

?>