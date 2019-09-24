<?php
include('db.php');
$username = "";
$password = "";
if (!isset($_SESSION['logined'])) {
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if (empty($_POST['username']) && empty($_POST['password'])) {
			$message = '<span style="color:red">กรุณากรอกชื่อผู้ใช้และรหัสผ่านของท่านด้วย</span>';
		} else if (empty($_POST['username']) && !empty($_POST['password'])) {
			$message = '<span style="color:red">กรุณากรอกชื่อผู้ใช้ของท่านด้วย</span>';
		} else if (!empty($_POST['username']) && empty($_POST['password'])) {
			$message = '<span style="color:red">กรุณากรอกรหัสผ่านของท่านด้วย</span>';
		} else {
			$sql = "select * from student where username='$username' and password='$password'";
			$result = mysqli_query($connection, $sql);
			$count = mysqli_num_rows($result);
			if ($count == 1) {
				$_SESSION['logined'] = true;
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password'] = $_POST['password'];

				header("location:std_profile.php");
			} else {
				$message = '<span style="color:red">ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบข้อมูลด้วย</span>';
			}
		}
	}

}
?>
