<?php
$db_host = "localhost";
$db_database = "ors_ycc";
//$m="std_register";
//$n="login";
$db_username = "root";
$db_password = "";
//$search = "select * from $m where id ='$id'";
//$login="SELECT * FROM admin WHERE username='$username' and password='$password'";
//$login2="SELECT * FROM student WHERE username='$username' and password='$password'";
//$login3="SELECT * FROM lecture WHERE username='$username' and password='$password'";
$connection = mysqli_connect($db_host, $db_username, $db_password, $db_database);
if (!$connection) {
    die("Could not connect with db" . mysql_error());
}

mysqli_query($connection, "SET NAMES 'utf8'");
//mysql_query(" SET NAMES 'tis620'; ");
//mysql_query(" SET character_set_results='tis620'; ");
