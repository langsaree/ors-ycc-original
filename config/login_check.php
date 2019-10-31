<?php
include('db.php');

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
                   $result=mysqli_query($con,$sql);
                   $count=mysqli_num_rows($result);
                  if($count==1/*&&strcmp($code,$code_hidden)==0*/)
                      {
					  $_SESSION['logined'] = true;
					  $_SESSION['username'] = $_REQUEST['username'];
					  $_SESSION['password'] = $_REQUEST['password'];
					  }
				   else
				   {
				    $message = "<span class=\"red\">ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบข้อมูลด้วย</span>";
				   }
				  }
			  	}

}
?>