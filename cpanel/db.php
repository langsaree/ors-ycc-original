<?php
$db_host = "localhost";
$db_database = "ors_ycc";
$db_username = "root";
$db_password = "";

$connection = mysqli_connect($db_host, $db_username, $db_password, $db_database);
if (!$connection) {
    die("Could not connect with db" . mysqli_error());
}
mysqli_query($connection, "SET NAMES 'utf8'");
