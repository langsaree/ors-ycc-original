<?php
session_start();
extract ($_GET);
$lec_id=isset($_GET['id']) ? $_GET['id'] : "";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view lecture</title>
<link rel="stylesheet" href="style.css" />

</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1263" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="1263"><img src="../public/images/header-bg.png" width="1258" height="45" /></td>
    </tr>
  </table>

  <table width="1261" height="515" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1261" height="74" valign="top"><table width="92%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="15%" align="center"><img src="../public/image/view lecture.png" width="122" height="111" /></td>
        <td width="73%" align="left"><span class="style26"><span class="style36">View<span class="style38"> Lecturer Information&nbsp;&nbsp;</span></span></span>| <a href="cpanel.php" class="style6"; style="text-decoration:none">ControlPanel</a> | <a href="manage_lecturer.php" class="style6" style="text-decoration:none">ManageLecturer</a><br />
            <span class="style34">แสดงอาจารย์ผู้สอน</span></td>
        <td width="12%">&nbsp;</td>
        </tr>
    </table>
       <table width="1260" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="1116">&nbsp;</td>
           <td width="74">&nbsp;</td>
           <td width="70">&nbsp;</td>
         </tr>
       </table>
    </form>
       <!-- <?php echo "$success"; ?>  -->
       <table width="1261" border="0" cellspacing="2" cellpadding="5">
         <tr>
           <td width="1247" height="38" valign="top"><div align="center"><span class="style44">__________________________________________________________________________________________________________________________________________</span></div></td>
         </tr>
         <tr>
           <td height="422" valign="top"><table width="88%" border="0" align="center" cellpadding="0" cellspacing="2">
             <tr bgcolor="#CCCCCC" class="style38">
               <td width="74" height="40"><div align="center"><strong>รหัส</strong></div></td>
               <td width="217"><div align="center"><strong>ชื่อ-นามสกุล</strong></div></td>
               <td width="211"><div align="center"><strong>เบอร์โทรติดต่อ</strong></div></td>
               <td width="214"><div align="center"><strong>อีเมล์</strong></div></td>
               <td width="244"><div align="center"><strong>หมายเหตุ</strong></div></td>
               <td width="48"><div align="center"><strong>แสดง</strong></div></td>
               <td width="46"><div align="center"><strong>แก้ไข</strong></div></td>
               <td width="33"><div align="center"><strong>ลบ</strong></div></td>
             </tr>
             <tr>
               <?php 
require_once("../public/class/db.class.php");
$db = new Db;
$connection = $db->connect();
#$sql = "select* from lecturer where lec_id='$lec_id";
$sql = "select* from lecture";
$result = mysqli_query($connection, $sql);
#while($result_row = mysql_fetch_row($result))  
while($row=mysqli_fetch_array($result))
{
?>
               <td height="23">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["lec_id"]; ?></td>
               <td align="left">&nbsp;&nbsp;<?php echo $row["lec_name"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
               <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;<?php echo $row["lec_tel"]; ?></td>
               <td>&nbsp;&nbsp;<?php echo $row["lec_email"]; ?></td>
               <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["lec_comment"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
               <td><img src="../public/image/v.png" alt="1" width="20" height="20" border="0" /></td>
               <td><a href="lec_update.php?id=<?php echo $row["lec_id"];?>" ><img src="../public/image/list-edit.png" alt="1" width="20" height="20" border="0" /></a></td>
               <td><a href="lec_delete.php?id=<?php echo $row["lec_id"];?>" ><img src="../public/image/1294650148_DeleteRed.png" alt="1" width="20" height="20" border="0" /></a></td>
             </tr>
             <?php } ?>
           </table></td>
         </tr>
         <tr>
           <td height="73"><div align="center" class="style34">
             <p class="style44">____________________________________________________________________________________________________________________________________________</p>
             <p class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</p>
           </div></td>
         </tr>
       </table>
<p class="style44"><br />
       </p>
</td>
    </tr>
  
  <tr>
    <td height="320" valign="top"><br />      <br /></td>
</tr>
  <tr>
    <td height="19" valign="top">&nbsp;</td>
</tr>

<table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      
    </tr>
  </table>
  <p>&nbsp;</p>
 



<p>&nbsp;</p>
</body>
</html>
