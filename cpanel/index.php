

<?php
session_start();
include('db.php');

// username and password receive from register form
if (isset($_POST['submit'])) {
    if (!empty($_POST['username'] && !empty($_POST['password']))) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // To protect MySQL injection (more detail about MySQL injection)
//        $username = stripslashes($username);
//        $password = stripslashes($password);
//        $username = mysqli_real_escape_string($connection, $username);
//        $password = mysqli_real_escape_string($connection, $password);
        //check compare to database
        $sql = "SELECT * FROM admin WHERE username='$username' and password='$password'";
        $result = mysqli_query($connection, $sql);
        // Mysql_num_row is counting table row
        $count = mysqli_num_rows($result);
        // If result matched $myusername and $mypassword, table row must be 1 row
        if ($count == 1) {
            // Register $username, $password and redirect to file "login_success.php"
            $_SESSION['user_admin'] = $username;
//            $_SESSION['password'] = $password;
            // redirect to profile page
            header("Location:cpanel.php");
        } else {
            //$error='Wrong Username or Password';
            $message = "ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบข้อมูลด้วย";

        }






    } else if (empty($_POST['username']) && empty($_POST['password'])) {
        $message = "กรุณากรอกชื่อผู้ใช้และรหัสผ่านของท่านด้วย";
    } else if (empty($_POST['username']) && !empty($_POST['password'])) {
        $message = "กรุณากรอกชื่อผู้ใช้ของท่านด้วย";
    } else if (!empty($_POST['username']) && empty($_POST['password'])) {
        $message = "กรุณากรอกรหัสผ่านของท่านด้วย";
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	
<title>Administrator Login</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/example.js'></script>
    <style type="text/css">
<!--
.style2 {color: #0066FF}
.style3 {color: #666666}
.style5 {
	font-size: 18px
}
.style7 {
	font-size: 16px;
	font-weight: bold;
	text-decoration:none;
}
-->
    </style>
</head>

<body>
<div id="page-wrap">    
  <div align="center" class="login-block">
          <h3 class="style5"><span class="style2">ADMINISTRATOR</span> <span class="style3">LOGIN</span></h3>
          <p class="style5"></p>
<form action="" method="post" target="">
                <p><label for="ftp-user-name">User Name</label><input type="text" name="username" id="username" /></p>
                <p><label for="ftp-password">Password</label><input type="password" name="password" id="password" /></p>
                <p class="submit-wrap"><input type="submit" id="submit" name="submit" value="Login" />
&nbsp;&nbsp;                <span class="style7"><a href="../index.php" class="style7">กลับหน้าหลัก</a></span></p>
    </form>
      <?php if (!empty($message)) {
          echo "<span style=\"color:red\">$message</span>";
      }
      ?>
  </div>
        
        
        </div>
			
	</div>
	<p>&nbsp;</p>
</body>
</html>
