<?php
include ('../db.php');
$cos_id = $_POST['cos_id'];
$cos_name = $_POST['cos_name'];
$cos_period = $_POST['cos_period'];
$cos_day =$_POST['cos_day'];
$cos_after =$_POST['cos_after'];
$cos_time =$_POST['cos_time'];
$date = $cos_day."/". $cos_after ."/". $cos_time;
//echo $date;
$lec_id =$_POST['lec_id'];
$cos_comment =$_POST['cos_comment'];
// mysqli_query ("SET NAMES 'utf8'");
$sql = "insert into course(cos_id,cos_name,cos_period,cos_day,lec_id,cos_comment) value('$cos_id','$cos_name','$cos_period','$date','$lec_id','$cos_comment')";
$result = mysqli_query($connection,$sql);
if (!$result)	
{ die("Error db".mysqli_error($connection)); }
else
{
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
      <form id="form1" name="form1" method="post" action="manage_course.php">
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
  </table> <?php } ?>
</body>
</html>
