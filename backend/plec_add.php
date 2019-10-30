<?php
include('../config/db.php');
$lec_id= $_POST['lec_id'];
//add more
$lec_Teach_id= $_POST['lec_Teach_id'];

$lec_name= $_POST['lec_name'];

$lec_tel= $_POST['lec_tel'];
$lec_email= $_POST['lec_email'];
$lec_comment= $_POST['lec_comment'];
$username=$_POST['username'];
$password=$_POST['password'];

$sql = "insert into lecturer (lec_id, lec_Teach_id, lec_name, lec_tel, lec_email, lec_comment,username,password) values('$lec_id','$lec_Teach_id','$lec_name','$lec_tel','$lec_email','$lec_comment','$username','$password')";

$result=mysqli_query($connection, $sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

</style></head>

<body>
<table width="1260" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="../image/controlPanel.jpg" width="1260" height="112" /></td>
  </tr>
</table>
  <table width="700" height="422" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" background="images/b1.jpg"><p>ระบบทำการเพิ่มข้อมูลสำเร็จแล้วครับ</p>
      <p>กดปุ่่ม<strong> สำเร็จ</strong> เพื่อกลับไปยัง <strong>Cpanel</strong></p>
      <form id="form1" name="form1" method="post" action="manage_lecturer.php">
        <input type="submit" name="Ok" id="Ok" value="สำเร็จ" />
      </form>      <p>&nbsp;</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp; </p>
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="baseline"><img src="image/footer.jpg" width="1260" height="76" /></td>
    </tr>
  </table> <?php //} ?>
</body>
</html>