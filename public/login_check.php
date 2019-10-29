<?php
/*ob_start(); 
include ('db.php');
// username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];
//$code=$_POST['code'];
//$code_hidden=$_POST['code_hidden'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
//$code = stripslashes($code);
//$code = mysql_real_escape_string($code);

//$sql="SELECT * FROM $n WHERE user='$username' and pass='$password'";
//$result=mysql_query($sql);
$sql="SELECT * FROM student WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1/*&&strcmp($code,$code_hidden)==0*///)
/*{
session_register("username");
session_register("password");
header("location:std_profile.php");
}
else
 {

$error='<span style="color:red">ชื่ิอเข้าระบบและรหัสผ่านผิดค่ะ กรุณาลองใหม่</span>';

} 
ob_end_flush();
*/?>
<?php
include('db.php');
$username = "";
$password = "";
if(!isset($_SESSION['logined'])) {
   if(isset($_REQUEST['username'])) {
   $username = $_REQUEST['username'];
   $password = $_REQUEST['password'];
			if(empty($_REQUEST['username']) && empty($_REQUEST['password'])) {
				$message = '<span style="color:red">กรุณากรอกชื่อผู้ใช้และรหัสผ่านของท่านด้วย</span>';
			} else if(empty($_REQUEST['username']) && !empty($_REQUEST['password'])) {
				$message = '<span style="color:red">กรุณากรอกชื่อผู้ใช้ของท่านด้วย</span>';
			} else if(!empty($_REQUEST['username']) && empty($_REQUEST['password'])) {
				$message = '<span style="color:red">กรุณากรอกรหัสผ่านของท่านด้วย</span>';
			} else {
			       $sql = "select * from student where username='$username' and password='$password'";
                   $result=mysqli_query($connection,$sql);
                   $count=mysqli_num_rows($result);
                  if($count==1/*&&strcmp($code,$code_hidden)==0*/)
                      {
					  $_SESSION['logined'] = true;
					  $_SESSION['username'] = $_REQUEST['username'];
					  $_SESSION['password'] = $_REQUEST['password'];
                      //session_register("username");
                      //session_register("password");
					  //$_SESSION['username'] = $value["username"];
                      //$_SESSION['password'] = $value["password"];
					  header("location:std_profile.php");
					  }
				   else
				   {
				    $message = '<span style="color:red">ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบข้อมูลด้วย</span>';
				   }
				  }
			  	}  
   
}
?>

<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf8" />-->
<!--<meta http-equiv="refresh" content="1; url=index.php">-->
<!--<title>login check</title>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--</body>-->
<!--</html>-->