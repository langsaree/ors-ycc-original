<?php
session_start();
include ('db.php');
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
    header("location:std_profile.php");
 }
?>
