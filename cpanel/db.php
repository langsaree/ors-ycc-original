<?php
$db_host="localhost";
$db_database="ors_ycc";
$db_username="root";
$db_password="";
//$search = "select * from $m where id ='$id'";
//$login="SELECT * FROM admin WHERE username='$username' and password='$password'";
//$login2="SELECT * FROM student WHERE username='$username' and password='$password'";
//$login3="SELECT * FROM lecture WHERE username='$username' and password='$password'";
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_database);
if (!$conn)
{
die("Could not connect with db".mysqli_error());
}
$db_select = mysql_select_db($db_database);
mysqli_query ("SET NAMES 'utf8'");
//mysqli_query(" SET NAMES 'tis620'; ");
//mysqli_query(" SET character_set_results='tis620'; ");
if(!$db_select)
{
die("Could not select db".mysqli_error());
} 
?>
