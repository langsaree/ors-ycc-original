<?php
extract ($_GET);
$lec_id=$id;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lecturer Profile</title>
<style type="text/css">

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
.style44 {color: #CCCCCC}
.style46 {color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; }
.style1 {color: #FF0000;
	font-weight: bold;
	font-size: 24px;
}
.style47 {font-family: Verdana, Arial, Helvetica, sans-serif}

</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../public/images/header.png" width="1280" height="45" /></td>
    </tr>
  </table>
  <table width="1280" height="723" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
      <td width="6%" align="center"><img src="image/view lecture.png" width="127" height="111" /></td>
      <td width="94%"><span class="style26"><span class="style36"><span class="style45">View</span> <span class="style38">Lecturer&nbsp;&nbsp;</span></span></span>
      <a href="cpanel.php" class="style6" style="text-decoration:none" > | ControlPanel | </a><a href="manage_lecturer.php" class="style6" style="text-decoration:none" >ManageLecturer | </a><a href="lec_view.php" class="style6" style="text-decoration:none" >ViewLecturer</a><br />
                <span class="style34">ดูข้อมูลอาจายร์</span></td>
        </tr>
    </table>
      <p><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>

  <tr>
    <td height="563" valign="top"><p></p>
      <div align="center">
        <p class="style1">Lecturer Information </p>
                                       
<?php
include('../config/db.php');
$sql = "select * from lecture where lec_id='$lec_id'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{  
?>                              
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="5">
    <td width="26">&nbsp;</td>
                  <td width="124" rowspan="1"><img src="image/lecturer.png" width="100" height="100"></td>
                  <td width="140" class="main" style="text-align: right">รหัสประจำตัว : </td>
                  <td width="321" class="maintext"><?php echo $row['lec_id'];?></td>
                  <td width="15">&nbsp;</td>
                
                <tr>
                  <td>&nbsp;</td>
                  <td class="main" style="text-align: right">ชื่อ :</td>
                  <td class="maintext"><?php echo $row['lec_name'];?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main" style="text-align: right">อีเมล์ :</td>
                  <td class="maintext"><?php echo $row['lec_email'];?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main" style="text-align: right">เบอร์โทร :</td>
                  <td class="maintext"><?php echo $row['lec_tel'];?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>      
                  <td class="main" style="text-align: right">Username :</td>
                  <td class="maintext"><?php echo $row['username'];?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main" style="text-align: right">Password :</td>
                  <td class="maintext"><?php echo $row['password'];?></td>
                  <td>&nbsp;</td>
                </tr>
                  </table>
                  <?php } ?>
                  
            <p align="center">&nbsp;</p>
          </div>
         <p align="left"><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
         </tr>
          <tr>
        <td height="80" valign="top"><div align="center"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></div></td>
      </tr>
      
    </form>
</body>
</html>