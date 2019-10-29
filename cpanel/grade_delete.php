  <?php
  include('../db.php');
  ///////////////////////////////////////
   $sql1 ="select * from course ";
   $result = mysqli_query($conn,$sql1);
   while ($row= mysqli_fetch_array($result));
  {
  $cos_id= $row["cos_id"];
  $cos_group=$row["cos_group"];
  $cos_name = $row["cos_name"];
  $cos_period = $row["cos_period"]; 
  $cos_day = $row["cos_day"];
  $lec_id = $row["lec_id"];
  $cos_comment = $row["cos_comment"];
//  echo $cos_id;
  //echo $cos_name;
    $sql2 = "select * from lecture where lec_id = '$lec_id' ";
    $a =mysqli_query ($conn,$sql2);
  while ($row1= mysqli_fetch_array($a))
  {
  $lec_name= $row1["lec_name"];
  //echo $lec_name;
}
}
   ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete grade</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style26 {	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 21px;
}
.style34 {	color: #666666;
	font-size: 13px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style36 {color: #FF6600}
.style38 {color: #55443E; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style25 {font-size: 13px; font-family: Tahoma; }
.style40 {
	color: #333333;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 13px;
}
.style44 {color: #CCCCCC}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../image/header-bg.png" width="1280" height="45" /></td>
    </tr>
  </table>
  <table width="1280" height="879" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="image/delete_grade.png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36">Delete<span class="style38"> Course</span></span></span><br />
          <span class="style34">ลบเกรด</span></td>
        </tr>
    </table>
      <p><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
  
  <tr>
    <td height="702" valign="top"><table width="1076" height="34" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="65" height="32"><div align="center" class="style40">รหัสวิชา</div></td>
          <td width="237"><div align="center" class="style40">ชื่อวิชา</div></td>
          <td width="169"><div align="center" class="style40">จำนวนชั่วโมง/หน่วยกิต</div></td>
          <td width="113"><div align="center" class="style40">วัน</div></td>
          <td width="139"><div align="center" class="style40">เวลา</div></td>
          <td width="149"><div align="center" class="style40">อาจารย์ผู้สอน</div></td>
          <td width="160"><div align="center"><span class="style40">หมายเหตุ</span></div></td>
          <td width="37"><div align="center" class="style40">ลบ</div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
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
