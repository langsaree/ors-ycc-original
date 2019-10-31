<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update grade</title>
<link rel="stylesheet" href="style.css" />

</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="images/header-bg.png" width="1280" height="45" /></td>
    </tr>
  </table>
  <table width="1280" height="723" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>  
        <td width="6%" align="center"><img src="image/update_grade.png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36">Update<span class="style38"> Course</span></span></span><br />
            <span class="style34">แก้ไขเกรด</span></td>
        </tr>
    </table>
      <p><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
  
  <tr>
    <td height="563" valign="top"><p></p>
      <div align="center">
        <p class="style1">Course Information </p>
        <table width="333" height="278" border="1">
        
  <?php

	require_once("../public/class/db.class.php");
  $db = new Db;
  $connection = $db->connect();

	$sql = "select * from $db_table2 where name ='$name'";
	$show = mysqli_query($connection, $sql);
	while($shows = mysqli_fetch_row($show))
	{
	?>
          <tr>
            <td width="173"><span class="style46">รหัสวิชา :</span></td>
            <td width="144"><input type="text" name="name" /></td>
          </tr>
          <tr>
            <td><span class="style46">ชื่อวิชา :</span></td>
            <td><input type="text" name="lastname" /></td>
          </tr>
          <tr>
            <td><span class="style46">จำนวนชั่วโมง/หน่วยกิต :</span></td>
            <td colspan="2"><input type="text" name="gender" /></td>
          </tr>
          <tr>
            <td><span class="style46">วัน :</span></td>
            <td><input type="text" name="address" /></td>
          </tr>
          <tr>
            <td><span class="style46">เวลา :</span></td>
            <td><input type="text" name="city" /></td>
          </tr>
          <tr>
            <td><span class="style46">อาจารย์ผู้สอน :</span></td>
            <td><input type="text" name="province" /></td>
          </tr>
          <tr>
            <td><span class="style46">หมายเหตุ :</span></td>
            <td><input type="text" name="postcode" /></td>
          </tr>
        </table>
  <?php } ?>
        <p>
          <input name="Update" type="submit" id="Update" value="Update" />
        </p>
        <p class="style1">&nbsp; </p>
      </div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p align="left"><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
  <tr>
    <td height="19" valign="top"><div align="center"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></div></td>
  </tr>
</table>
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      
    </tr>
  </table>
</form>

</body>
</html>
