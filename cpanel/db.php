<?php
$db_host = "localhost";
$db_database = "ors_ycc";
$db_username = "root";
$db_password = "";
//$search = "select * from $m where id ='$id'";
//$login="SELECT * FROM admin WHERE username='$username' and password='$password'";
//$login2="SELECT * FROM student WHERE username='$username' and password='$password'";
//$login3="SELECT * FROM lecture WHERE username='$username' and password='$password'";
$connection = mysqli_connect($db_host, $db_username, $db_password, $db_database);

if ($connection) {
   $db_select = mysqli_select_db($connection, $db_database);
   
   //set universal encoding
   mysqli_query($connection, "SET NAMES 'utf8'") or die(mysqli_error($connection));
   if (!$db_select) {
      die("Could not select db" . mysqli_error());
   }
} else {
   die("Could not connect with db" . mysqli_error());
}
?>
