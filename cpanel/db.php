<?php
$db_host = "localhost";
$db_database = "ors_ycc";
$db_username = "root";
$db_password = "";

$con = mysqli_connect($db_host, $db_username, $db_password, $db_database);
if (!$con) {
    die("Could not connect with db" . mysqli_error());
}
mysqli_query($con, "SET NAMES 'utf8'");
