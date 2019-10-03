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
				$message = "<span class=\"red\">กรุณากรอกชื่อผู้ใช้ของท่านด้วย</span>";
			} else if(!empty($_REQUEST['username']) && empty($_REQUEST['password'])) {
				$message = "<span class=\"red\">กรุณากรอกรหัสผ่านของท่านด้วย</span>";
			} else {
			       $sql = "select * from student where username='$username' and password='$password'";
                   $result=mysql_query($sql);
                   $count=mysql_num_rows($result);
                  if($count==1/*&&strcmp($code,$code_hidden)==0*/)
                      {
					  //$_SESSION['logined'] = true;
					  //$_SESSION['username'] = $_REQUEST['username'];
					  //$_SESSION['password'] = $_REQUEST['password'];
					  session_register("username");
                      session_register("password");
					  //$_SESSION['username'] = $value["username"];
                      //$_SESSION['password'] = $value["password"];
					  header("location:std_profile.php");
					  }
				   else
				   {
				    $message = "<span class=\"red\">ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบข้อมูลด้วย</span>";
				   }
				  }
			  	}  
   
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta http-equiv="refresh" content="1; url=index.php">
<title>login check</title>
</head>

<body>
</body>
</html>