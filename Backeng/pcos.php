 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000066;
}
.style2 {color: #333333}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style4 {color: #FFFFFF; }
-->
</style>
</head>

<body>
<table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../images/controlPanel.jpg" width="1261" height="112" /></td>
    </tr>
</table>
<form id="form1" name="form1" method="post" action="pcos.php">

<table width="1152" border="0" cellspacing="0" cellpadding="0">
   <tr>
     <td colspan="5"><div align="center" class="style2">
      
       <div align="left"><span class="style1">เข้าสู่ระบบ</span></div>
     </div><div align="center" class="style2"></div></td>
     <td width="6"><div align="center" class="style2"></div></td>
     <td width="6"><div align="center" class="style2"></div></td>
     <td width="96"><div align="center" class="style2"></div></td>
     <td width="83">&nbsp;</td>
     <td width="162">&nbsp;</td>
     <td width="128">&nbsp;</td>
     <td width="174">&nbsp;</td>
     <td width="212">&nbsp;</td>
     <td width="95">&nbsp;</td>
     <td width="82">&nbsp;</td>
   </tr>
   <tr>
     <td colspan="15"><span class="style1">__________________________________________________</span></td>
   </tr>
   <tr>
     <td width="21">&nbsp;</td>
     <td width="21">&nbsp;</td>
     <td width="21">&nbsp;</td>
     <td width="21">&nbsp;</td>
     <td width="24">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td height="25"><div align="center" class="style4"></div></td>
     <td><div align="center" class="style4"></div></td>
     <td><div align="center" class="style4"></div></td>
     <td><div align="center" class="style4"></div></td>
     <td><div align="center" class="style4"></div></td>
     <td bgcolor="#666633"><div align="center" class="style4"></div></td>
     <td bgcolor="#666633"><div align="center" class="style4"></div></td>
     <td bgcolor="#666633"><div align="center"><span class="style4">รหัสวิชา</span></div></td>
     <td bgcolor="#666633"><div align="center"><span class="style4">ชื่อวิชา</span></div></td>
     <td bgcolor="#666633"><div align="center"><span class="style4">จำนวนชั่วโมง/หน่วยกิจ</span></div></td>
     <td bgcolor="#666633"><div align="center"><span class="style4">วันที่เข้าเรียน</span></div></td>
     <td bgcolor="#666633"><span class="style4">อาจารย์ผู้สอน</span></td>
     <td bgcolor="#666633"><div align="center"><span class="style4">หมายเหตุ</span></div></td>
     <td bgcolor="#666633"><div align="center" class="style4">Update</div></td>
     <td bgcolor="#666633"><div align="center"><span class="style4">Delete</span></div></td>
   </tr>
 <?
   include('../db.php');
   //mysql_query ("SET NAMES 'utf8'");
   $sql = "select * from course";
   $result = mysql_query($sql);
   if (!$result)
   {die ("can not connect db".mysql_error());
   }
   while ($result_row = mysql_fetch_row($result))
   { ?>
   <tr>
     <td></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td><div align="center">
       <? echo $result_row[0]; ?></div></td>
     <td><div align="center"><? echo $result_row[1]; ?></div></td>
     <td><div align="center"><? echo $result_row[2]; ?></div></td>
     <td><div align="center"><? echo $result_row[3]; ?></div></td>
     <td><div align="center"><? echo $result_row[4]; ?></div></td>
     <td><div align="center"><? echo $result_row[5]; ?></div></td>
     <td><div align="center"><a href="../cos_update.php">แก้ไข</a></div></td>
     <td><div align="center"><a href="../cos_del.php?id= <? echo $result_row[0]; ?>">ลบ</a></div></td>
   </tr><? } ?>
 </table>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp; </p>
  </form>
 <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="baseline"><img src="../image/footer.jpg" width="1260" height="76" /></td>
    </tr>
</table>
</body>
</html>
