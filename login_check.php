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
