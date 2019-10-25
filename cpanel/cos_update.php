<?php
extract ($_GET);
$cos_id = $_GET['id'];
//echo $cos_id;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: แก้ไขรายวิชา ::</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style6 {font-family: Geneva, Arial, Helvetica, sans-serif; color: #0000FF; }
.style7 {color: #000000}
.style25 {font-size: 13px; font-family: Tahoma; }
.style8 {font-size: 13px; font-family: Tahoma; color: #999999; }
</style>
</head>
<body>
<table width="94%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
      <td>&nbsp;</td>
  </tr>
    <tr>
      <td><form id="form1" name="form1" method="post" action="pcos_update.php">
        <table width="104%" height="103" border="0" cellpadding="0" cellspacing="2">
          <tr>
            <td width="15%" height="33" bgcolor="#CCCCCC"><div align="center"><p class="style7">รหัสวิชา</p></div></td>
            <td width="15%" bgcolor="#CCCCCC"><div align="center"><p class="style7">กลุ่มวิชา</p></div></td>
            <td width="18%" bgcolor="#CCCCCC"><div align="center"><span class="style7">ชื่อวิชา</span></div></td>
            <td width="18%" bgcolor="#CCCCCC"><div align="center"><span class="style7">จำนวนชั่วโมง/หน่วยกิจ</span></div></td>
            <td width="15%" bgcolor="#CCCCCC"><div align="center"><span class="style7">วันที่เข้าเรียน</span></div></td>
            <td width="19%" bgcolor="#CCCCCC"><div align="center"><span class="style7">อาจารย์ผู้สอน</span></div></td>
            <td width="19%" bgcolor="#CCCCCC"><div align="center"><span class="style7">หมายเหตุ</span></div></td>
          </tr>
           <?
	include('../db.php');
	$sql = "select * from course where cos_id = $cos_id";
	$result= mysqli_query($conn,$sql);
	while ($row= mysqli_fetch_array($result))
  {
?>
          <tr>
            <td height="64">
              <div align="left">
                <input name="cos_id" type="text" id="cos_id" value="<?php echo $row['cos_id']; ?>" size="20" />
              </div></td>
            <td>
              <div align="left">
                <input name="cos_group" type="text" id="cos_group" value="<?php echo $row['cos_group'];?>" />
              </div></td>
            <td>              
              <div align="center">
                <input name="cos_name" type="text" id="cos_name" value="<?php echo $row['cos_name']; ?>" size="20" />
              </div></td>
            <td><div align="center">
              <input name="cos_period" type="text" id="cos_period" value="<?php echo $row['cos_period']; ?>" size="20" />
            </div>
            <td><div align="center">
              <input name="cos_day" type="text" id="cos_day" value="<?php echo $row['cos_day']; ?>" />
            </div></td>
            <td><input name="lec_id" type="text" id="lec_id" value="<?php echo $row['lec_id']; ?>" size="20" /></td>
            <td><textarea name="cos_comment" id="cos_comment" cols="30" rows="3"> <?php $row['cos_comment']; ?> </textarea></td>
          </tr>
          
          <?php  ?>
        </table>
<p align="center">
              <input type="submit" name="ok" id="ok" value="Submit" />
        </p>
            </form>
      </td>
    </tr>
</table>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="1260" border="0" cellspacing="0" cellpadding="0">
 <tr>
   <td valign="baseline"><table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="baseline"><p class="style8">___________________________________________________________________________________________________________________________________________________________________________________</p>
        <p align="center" class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</p></td>
    </tr>
  </table></td>
    </tr>
  </table>
</body>
</html>
