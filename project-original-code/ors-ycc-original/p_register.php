<?php
include ('db.php');
$username = $_POST['username'];
$password = $_POST['password'];
$f_name = $_POST['f_name'];
$name = $_POST['name'];
$s_name = $_POST['s_name'];
$gender = $_POST['gender'];
$b_day = $_POST['b_day'];
$b_month = $_POST['b_month'];
$b_years = $_POST['b_years'];
$std_id = $_POST['std_id'];
$home = $_POST['home'];
$m_home = $_POST['m_home'];
$r_home = $_POST['r_home'];
$v_home = $_POST['v_home'];
$p_home = $_POST['p_home'];
$c_home = $_POST['c_home'];
$post = $_POST['post'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$d_tel = $_POST['d_tel'];
$mobile = $_POST['mobile'];
$job = $_POST['job'];
$t_job = $_POST['t_job'];
mysql_query("SET NAMES 'utf8'");
$sql = "insert into student(username,password,f_name,name,s_name,gender,b_day,b_month,b_years,std_id,home,m_home
,r_home,v_home,p_home,c_home,post,tel,email,d_tel,mobile,job,t_job)
 value 
 ('$username','".md5 ($_POST['password'] )."','$f_name','$name', 
'$s_name','$gender','$b_day','$b_month','$b_years','$std_id','$home','$m_home','$r_home','$v_home','$p_home','$c_home','$post','$tel','$email','$d_tel',
'$mobile','$job','$t_job')";


$result = mysql_query($sql);
if (!$result)
{
die("could not connect db".mysql_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh"content="3; url='home.php' charset=tis-620" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	color: #DD0000;
	font-weight: bold;
}
.style4 {color: #0000FF}
-->
</style>
</head>

<body>
<div align="center" class="style1">::: <span class="style4">register successful</span> :::</div>
</body>
</html>
