<?php
/**
 * LangsariEngine - A Delicious PHP Component
 *
 * @package  BuduEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

//define connection elements
$dbHost     = "localhost:8889";
$dbDatabase = "ors_ycc_refactoring";
$dbUsername = "root";
$dbPassword = "root";

//connect to Database
$connection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbDatabase)
    or die("Fail to connect database"
    . mysqli_error($connection));

//set unicode character
mysqli_set_charset($connection, "utf8");
?>