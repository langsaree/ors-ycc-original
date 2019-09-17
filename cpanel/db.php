<?php
$db_host="localhost:3306";
$db_database="ors_ycc";
$db_username="root";
$db_password="";

$connection = mysqli_connect($db_host, $db_username, $db_password, $db_database);
//connection checking
if ($connection) {
    //set universal encoding
    mysqli_query( $connection ,"SET NAMES 'utf8'") or die(mysqli_error());
    
 } else {
    
    die("Could not connect with db" . mysqli_error());
 }
?>
