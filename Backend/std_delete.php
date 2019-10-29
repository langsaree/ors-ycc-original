<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="3 url='std_view.php'" />
<title>ลบข้อมูลนักศึกษา</title>
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
.style45 {font-family: Verdana, Arial, Helvetica, sans-serif}

</style>
</head>
<body>
<table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../images/header-bg.png" width="1260" height="45" /></td>
    </tr>
  </table>
<table width="1260" height="250" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1298" height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="../image/student delete.png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36"><span class="style45">Delete</span> <span class="style38">Student</span></span></span><br />
          <span class="style34">ลบนักศึกษา</span></td>
        </tr>
    </table>
      <p><span class="style44">_____________________________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
  
  <tr>
    <td height="75" valign="top">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="500" height="34" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="65" height="32" valign="middle"><div align="center" class="style40"> 
           <?php
		   include ('../maintain/db.php');
			extract ($_GET);
mysqli_query ($connection,"SET NAMES 'utf8'");
$std_id=$id;  echo " ชื่อผู้ใช้ ได้ถูกลบออกจากระบบเรียบร้อยแล้วค่ะ!!!<p>Data was deleted out from system</p>";
echo $std_id;
$result = mysqli_query($connection,"delete from student where std_id = $std_id");
	if(!$result)
	{
	die("could not query db".mysqli_error());
	}
?>
</div></td>
        </tr>
      </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="left"><span class="style44">_____________________________________________________________________________________________________________________________________________________________</span></p></td>
  </tr>
  <tr>
    <td height="5" valign="top"><div align="center"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></div></td>
  </tr>
</table>
</body>
</html>
