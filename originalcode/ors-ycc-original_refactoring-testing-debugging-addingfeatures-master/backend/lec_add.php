<?
session_start();
include('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>เพิ่มอาจารย์ผู้สอน</title>
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
	.style6 {
	font-size: 9px;
	font-style: normal;
	font-family: Verdana, Geneva, sans-serif;
	color: #666666;
	text-decoration:none;

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
.style45 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
}
.style46 {color: #666666;
	font-size: 13px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style49 {font-family: Georgia, "Times New Roman", Times, serif}
.style50 {color: #FF0000}
.style52 {color: #FF0000; font-weight: bold; }
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="plec_add.php">
  <table width="1280" height="578" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
    <td width="1300" height="139" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="image/add_lecture.png" width="128" height="128" /></td>
        <td width="94%"><span class="style26"><span class="style36"><span class="style45">Add</span>  <span class="style38">New Lecturer&nbsp;&nbsp;</span></span></span> | <a href="cpanel.php" class="style6"; style="text-decoration:none">ControlPanel</a> |  <a href="manage_lecturer.php" class="style6" style="text-decoration:none">ManageLecturer</a><br />
            <span class="style34">เพิ่ม<span class="style46">อาจารย์ผู้สอน</span>ใหม่</span></td>
        </tr>
    </table>
      <table width="1225" height="53" border="0" cellpadding="0" cellspacing="5">
        <tr>
          <td width="1137" height="30" valign="middle"><span class="style44">______________________________________________________________________________________________________________________________________</span></td>
          <td width="34" valign="bottom">&nbsp;</td>
        </tr>
      </table>
      </tr>
  
  <tr>
    <td height="420" valign="top"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style52">กรุณากรอบข้อมูลอาจรย์ผู้สอน</span></p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
      <table width="94%" border="0" cellspacing="5" cellpadding="0">
        <tr>
          <td colspan="2" align="center"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo "$error"; ?></div></td>
        </tr>
          <tr>
          <td width="32%" align="right" class="style46">Username :</td>
          <td width="68%" class="red"><input name="username" type="text" id="username" size="20" /></td>
        </tr>
          <tr>
          <td width="32%" align="right" class="style46">Password :</td>
          <td width="68%" class="red"><input name="password" type="text" id="textfield3" size="20" /></td>
        </tr>
          <tr>
          <td colspan="2" align="center" class="style44">-----------------------------------------------------------------------------------------------------------------------------------------------------------</td>
          </tr>
        <tr>
          <td width="32%" align="right"><span class="style40">รหัส<span class="style49">อาจารย์ห</span>ผู้สอน :</span> </td>
          <td width="68%" class="red"><label>
            <span class="style50">
            <input name="lec_id" type="text" size="20" id="lec_id" />
            *            </span></label></td>
        </tr>
   
        <tr>
          <td width="32%" align="right" class="style40"><span class="style40">ชื่อ<span class="style49">อาจารย์</span>ผู้สอน :</span></td>
          <td width="68%"><label>
            <input name="lec_name" type="text" size="30" id="lec_name" />
            <span class="style50">          *</span></label></td>
        </tr>
    
        <tr>
          <td align="right" class="style40">เบอร์โทรติดต่อ:</td>
          <td><input name="lec_tel" type="text" size="25" id="tel" />
            <span class="style50">*</span></td>
        </tr>
        <tr>
          <td align="right" class="style40">อีเมล์:</td>
          <td><label>
            <input name="lec_email" type="text" id="textfield" size="30" />
            <span class="style50">          *</span></label></td>
        </tr>
       
        <tr>
          <td align="right" class="style40"><span class="style40">หมายเหตุ :</span></td>
          <td class="red"><label>
            <textarea name="lec_comment" cols="30" id="lec_comment"></textarea>
          </label></td>
        </tr>
        
        <tr>
          <td align="right">&nbsp;</td>
          <td><label>
            <input type="submit" name="button" id="button" class="button" value="บันทึก" />
            <input type="button" name="button2" id="button2" class="button" value="ยกเลิก"  />
          </label></td>
        </tr>
        <tr>
          <td height="19" align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p align="left"><span class="style44">____________________________________________________________________________________________________________________________________________</span></p></td>
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
