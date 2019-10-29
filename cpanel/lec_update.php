<?php
extract ($_GET);
$lec_id=$id;

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update lecture</title>
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
.style1 {color: #FF0000;
	font-weight: bold;
	font-size: 24px;
}
.style47 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style48 {color: #666666;
	font-size: 13px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style40 {	color: #333333;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 13px;
}
.style49 {font-family: Georgia, "Times New Roman", Times, serif}
.style50 {color: #FF0000}

</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="plec_update.php">
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../images/header-bg.png" width="1260" height="45" /></td>
    </tr>
  </table>
  <table width="1280" height="527" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="image/student update.png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36"><span class="style47">Update</span><span class="style38"> Lecturer Information</span></span></span><br />
            <span class="style34">แก้ไข<span class="style48">ข้อมูลอาจารย์ผู้สอน</span></span></td>
        </tr>
    </table>
      <span class="style44">________________________________________________________________________________________________________________________________________________________________</span></td>
    </tr>
  
  <tr>
    <td height="350" valign="top">
      <div align="center">
        <span  class="style1"><br />
        Lecturer Information</span>
        <table width="1058" height="159" border="0" cellpadding="2" cellspacing="4">
          
          <tr>
            <td height="26" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo "$error"; ?></td>
            </tr>
          <tr>
<?php
include ('../db.php');
$sql = "select * from lecture where lec_id='$lec_id'";
$result = mysqli_query($connection, $sql);
while($result_row = mysqli_fetch_array($result))
{  
?>          
          
            <td width="406" height="26"><div align="right"><span class="style49">รหัส<span class="style49">อาจารย์</span>ผู้สอน :</span></div></td>
            <td width="632"><input name="lec_id" type="text" value="<?php echo $result_row['lec_id']; ?>" size="30" />
              <span class="style50">            *</span></td>
          </tr>
          <tr>
            <td height="31"><div align="right"><span class="style49">ชื่อ<span class="style49">อาจารย์</span>ผู้สอน :</span></div></td>
            <td><input name="lec_name" type="text" value="<?php echo $result_row['lec_name']; ?>" size="30" />
              <span class="style50">*</span></td>
          </tr>
          <tr>
            <td height="26"><div align="right"><span class="style49">เบอร์โทรติดต่อ:</span></div></td>
            <td colspan="2" class="style50"><input name="lec_tel" type="text" value="<?php echo $result_row['lec_tel']; ?>" size="30" />
            *</td>
          </tr>
          <tr>
            <td height="26"><div align="right"><span class="style49">อีเมล:</span></div></td>
            <td><span class="style50">
              <input name="lec_email" type="text" value="<?php echo $result_row['lec_email']; ?>" size="30" />
            *</span></td>
          </tr>
          <tr>
            <td><div align="right"><span class="style49">หมายเหตุ :</span></div></td>
            <td>
              <label for="textarea"></label>
              <textarea name="lec_comment" id="textarea" cols="30" rows="3" value=""><?php echo $result_row['lec_comment']; ?></textarea></td>
          </tr>
           <?php } ?>
          <tr>
            <td><div align="right"></div></td>
            <td><input name="Update" type="submit" id="Update" value="ตกลง" />
              &nbsp;
              <label>
              <input type="reset" name="Reset" id="button" value="ยกเลิก" />
              </label></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        </div>
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
