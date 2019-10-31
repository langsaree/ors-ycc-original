<?php
session_start();
include ('../config/db.php');

$strSQL = "SELECT * FROM student WHERE username = '".mysqli_real_escape_string($connection, $_POST['username'])."' 
  and password = '".mysqli_real_escape_string($connection, $_POST['password'])."'";
$objQuery = mysqli_query($connection, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
if(!$objResult)
{
    $std_error='<span style="color:red">ชื่อเข้าระบบและรหัสผ่านผิด กรุณาลองใหม่</span>';
    include ('register.php');
}

else
 {
     $_SESSION['username'] = $objResult['username'];
    $_SESSION['password'] = $objResult['password'];
    $_SESSION['std_id'] = $objResult['std_id'];
    session_write_close();
    ?>
    <script>
      window.alert('เข้าสู่ระบบสำเร็จ ยินดีต้อนรับ!');
      window.location.href="index.php";
    </script>
    <!-- header("Location:std_profile.php"); -->
 <?php }
?>
