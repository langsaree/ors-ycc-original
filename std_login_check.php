<?php
session_start(); 
include ('db.php');

if (isset($_POST['submit'])) {
    if (!empty($_POST['username2'] && !empty($_POST['password2']))) {
// username and password sent from form
$username=$_POST['username2'];
$password=$_POST['password2'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM student WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

//session_register("sessioncode");
header("location:std_profile.php");
}
else
 {
//$error='Wrong Username or Password';
$std_error='<span style="color:red">ชื่ิอเข้าระบบและรหัสผ่านผิด กรุณาลองใหม่</span>';
include ('register.php');
//header("location:register.php");
} 
} else {
    header("location:register.php");
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta http-equiv="refresh" content="1; url=register.php">
<title>student login check</title>
</head>

<body>
</body>
</html>