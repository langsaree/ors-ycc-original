<?php
session_start();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>search lecture</title>
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
.style36 {
	color: #FF6600;
	font-size: 36px;
	font-family: "Times New Roman", Times, serif;
	text-transform: none;
}
.style38 {
	color: #55443E;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style25 {font-size: 13px; font-family: Tahoma; }
.style44 {color: #CCCCCC}
.style48 {color: #666666;
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
.style52 {
	color: #333333;
	font-size: 16px;
	font-weight: bold;
}
.style55 {font-family: Georgia, "Times New Roman", Times, serif}

</style>
</head>

<body>

<table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="image/bg.png" width="198" height="40" /></td>
  </tr>
</table>
  
  <table width="1280" height="363" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="image/search lecture.png" width="128" height="128" /></td>
        <td width="94%"><span class="style26"><span class="style36">Search<span class="style38"> Lecturer Information</span></span></span> | <a href="cpanel.php" class="style6"; style="text-decoration:none">ControlPanel</a>| <a href="manage_lecturer.php" class="style6" style="text-decoration:none">ManageLecturer</a><br />
          <span class="style34">ค้นหา<span class="style48">ข้อมูลอาจารย์ผู้สอน</span></span></td>
        </tr>
    </table>
   
      <span class="style44">____________________________________________________________________________________________________________________________________________</span></td>
    </tr>
  
  <tr>
    <td height="199" valign="top">
        <div align="left"><span class="style52">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กรุณากรอกรหัส<span>อาจารย์ผู้สอน</span>เพื่อค้นหา</span><br />  
          <form id="form1" name="form1" method="post" action="plec_search.php">
            <table width="288" border="0" align="center" cellpadding="0" cellspacing="3">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="17">&nbsp;</td>
                <td width="148"><label>
                <input type=hidden name=todo value=search>
                <input name="search_text" type="text" id="search" size="20" />
                </label></td>
                <td width="89"><label>
                <input type="submit" name="button" id="button" value="ค้นหา" />
                </label></td>
                <td width="19">&nbsp;</td>
              </tr>
            </table>
          </form>
      </div>
      <table width="1269" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td><span class="style44">____________________________________________________________________________________________________________________________________________</span></td>
        </tr>
        <tr>
          <td><div align="center"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></div></td>
        </tr>
      </table></td>
    </tr>
  <tr>
    <td height="19" valign="top"><div align="center"></div></td>
  </tr>
</table>
<table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      
    </tr>
</table>


</body>
</html>
