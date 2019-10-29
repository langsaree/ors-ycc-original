<?php
include ('db.php');
$cos_id = $_POST['cos_id'];
$cos_group = $_POST['cos_group'];
$cos_name = $_POST['cos_name'];
$cos_period = $_POST['cos_period'];
$cos_day =$_POST['cos_day'];
$cos_after =$_POST['cos_after'];
$cos_time =$_POST['cos_time'];
$date = $cos_day."". $cos_after ."".$cos_time;
$lec_id =$_POST['lec_id'];
$cos_comment =$_POST['cos_comment'];
mysql_query ("SET NAMES 'utf8'");

$sql = "UPDATE course SET cos_id='$cos_id',cos_group='$cos_group',cos_name='$cos_name',cos_period='$cos_period',cos_day='$date',lec_id='$lec_id',cos_comment='$cos_comment' where cos_id='$cos_id'";
$sql1 = "UPDATE lecture SET lec_id='$lec_id' WHERE lec_id='$lec_id'";
$re = mysql_query($sql1);
$result = mysql_query($sql);
if (!$result && !$re)	
{ 
die("error db".mysql_error());
}
else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="charset=utf-8; url='cos_view.php'" />
<meta http-equiv="refresh" content="1 url='cos_view.php'" />

<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<body>
<table width="1260" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="image/controlPanel.jpg" width="1261" height="112" /></td>
  </tr>
</table>
  <table width="700" height="422" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" background="images/b1.jpg"><p>ระบบทำการเพิ่มข้อมูลสำเร็จแล้วครับ</p>
      <p>กดปุ่่ม<strong> สำเร็จ</strong> เพื่อกลับไปยัง <strong>Cpanel</strong></p>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp; </p>
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="baseline"><img src="image/footer.jpg" width="1260" height="76" /></td>
    </tr>
  </table>
</body>
</html>
<? } ?>