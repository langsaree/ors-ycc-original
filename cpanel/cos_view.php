<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แสดงรายชื่อวิชา</title>
<style type="text/css">
<!--

.style4 {color: #FFFFFF; }
.style26 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 21px;
	color: #666;
}
.style34 {color: #666666;
	font-size: 13px;
	font-family: Georgia, "Times New Roman", Times, serif;
		}
.style6 {
	font-size: 9px;
	font-style: normal;
	font-family: Verdana, Geneva, sans-serif;
	color: #666666;
	text-decoration:none;

}
.style36 {
	color: #FF6600;
	font-size: 24px;
	font-weight: bold;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="1180" border="0" cellpadding="0" cellspacing="10">
      <tr>
        <td colspan="2"><a href="cpanel.php" style="text-decoration:none"><img src="image/view_course.jpg" width="80" height="70" border="0" /></a></td>
      </tr>
      <tr>
        <td colspan="2"><span class="style36">View</span> <span class="style26">Course&nbsp;&nbsp;&nbsp;</span><a href="cpanel.php" class="style6" style="text-decoration:none" >| ControlPanel  | </a><a href="manage_course.php" class="style6" style="text-decoration:none" >ManageCourse</a><br />
          <span class="style34">แสดงรายวิชา</span></td>
      </tr>
      <tr>
        <td width="916"><p class="style34">_________________________________________________________________________________________________________________________________________</p></td>
        <td width="50">&nbsp;</td>
      </tr>
    </table></td>
    
  </tr>
  <tr>
    <td height="25" colspan="5" rowspan="2" align="left" valign="top"><table width="96%" border="0" align="center" cellpadding="0" cellspacing="2">
      <tr>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">รหัสวิชา</div></td>
        <td width="16%" bgcolor="#CCCCCC"><div align="center">หมู่วิชา</div></td>
        <td width="16%" bgcolor="#CCCCCC"><div align="center">ชื่อวิชา</div></td>
        <td width="16%" bgcolor="#CCCCCC"><div align="center"><p>จำนวนชั่วโมง/หน่วยกิจ</p></div></td>
        <td width="13%" bgcolor="#CCCCCC"><div align="center">วันที่เข้าเรียน</div></td>
        <td width="15%" bgcolor="#CCCCCC"><div align="center">อาจารย์</div></td>
        <td width="18%" bgcolor="#CCCCCC"><div align="center">หมายเหตุ</div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center">แก้ไขข้อมูล</div></td>
        <td width="6%" bgcolor="#CCCCCC"><div align="center">ลบข้อมูล</div></td>
      </tr>
       <?php
  include('../db.php');
	///////////////////////////////////////
   $sql1 ="select * from course ";
   $result = mysqli_query($conn,$sql1);
   while ($row= mysqli_fetch_array($result))
	{
	$cos_id= $row["cos_id"];
	$cos_group=$row["cos_group"];
	$cos_name = $row["cos_name"];
	$cos_period = $row["cos_period"];	
	$cos_day = $row["cos_day"];
	$lec_id = $row["lec_id"];
	$cos_comment = $row["cos_comment"];
//	echo $cos_id;
	//echo $cos_name;
    $sql2 = "select * from lecture where lec_id = '$lec_id' ";
	  $a =mysqli_query ($conn,$sql2);
	while ($row1= mysqli_fetch_array($a))
	{
	$lec_name= $row1["lec_name"];
	//echo $lec_name;
   ?>
      <tr>

        <td><div align="left"><?php echo $cos_id; ?></div></td>
        <td><div align="left"><?php echo $cos_group; ?></div></td>
         <td bgcolor="#F0F2F4"><div align="left"><?php echo $cos_name; ?></div></td>
        <td><div align="center"><?php echo $cos_period;?></div></td>
        <td><div align="left"><?php echo $cos_day;?></div></td>
        <td bgcolor="#F0F2F4"><div align="left"><?php echo $lec_name; ?></div></td>
        <td><div align="left"><?php echo $cos_comment; ?></div></td>
       	<td><div align="center"><a href="cos_update.php?id= <?php echo $cos_id; ?> "><img src="image/list-edit.png" alt="1" width="20" height="20" border="0" /></a></div></td>
   	 	<td><div align="center"><a href="cos_del.php?id= <?php echo $cos_id; ?> "><img src="image/Delete.png" alt="1" width="20" height="20" border="0" /></a></div></td>
      </tr>
	  <?php }} ?>
    </table>
</body>
</html>
