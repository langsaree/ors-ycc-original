<?
session_start();
include('db.php');
include('auth.php');
extract ($_GET);
$active = $active;
$non_active = $non_active;
if(!empty($active)){
	$sql = "UPDATE course SET status='1' WHERE cos_id='$active' ";
	$result = mysqli_query($con,$sql);
	if($result){
		$msg = '<span style="color:green; font-weight:bold">'.$active.'</span>'. '  '.'สถานะได้เปิดใช้งานเสร็จสมบูณ์';
	}
	else{
		$msg = "Fail";
	}
}
	else
	{
		if(!empty($non_active)){
			$sql = "UPDATE course SET status='0' WHERE cos_id='$non_active' ";
			$result = mysqli_query($con,$sql);
			if($result){
				$msg = '<span style="color:red">'.$non_active.'</span>'. '  '.'สถานะได้ยกเลิกใช้งานเสร็จสมบูณ์';
			}
			else{
				$msg= "FAIL NON-active";	
			}
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view student status</title>
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
.style44 {color: #CCCCCC}
.style45 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style46 {
	color: #00E800
}
.style47 {color: #FF0099}
p.one {border-style:dashed;
border-width:2px;
border-color:#8A9AA6;
}
.hhhhh {	font-size: 12px;
	text-align: center;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../images/header-bg.png" width="1265" height="45" /></td>
    </tr>
  </table>
  <table width="1260" height="723" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="../image/student add.png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36"><span class="style45">View</span>  <span class="style38"> Student Status</span></span></span><br />
            <span class="style34">แสดงสถานะนักศึกษา</span></td>
        </tr>
    </table>
      <p><span class="style44">_________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
  
  <tr>
  
    <td height="548" valign="top"><table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
      <? if($msg){?>
      <tr>
        <td width="26" height="61">&nbsp;</td>
        <td width="465"><p class="one"><br />
          &nbsp;&nbsp;
          <?= $msg ?>
          <br />
          <br />
        </p></td>
        <td width="505">&nbsp;</td>
        <td width="18">&nbsp;</td>
      </tr>
      <? } ?>
    </table>
    <?
  $sql = "select * from student order by status DESC";
  $re = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result))
		{ 
		$n = $row["f_name"] . $row["name"];
		?>
      <table width="90%" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr>
          <td width="17%" height="29" bgcolor="#CCCCCC"><div align="center">ชื่อผู้ใช้</div></td>
          <td width="20%" bgcolor="#CCCCCC"><div align="center">ชื่อ-สกุล</div></td>
          <td width="27%" bgcolor="#CCCCCC"><div align="center">รายวิชา</div></td>
          <td width="12%" bgcolor="#CCCCCC"><div align="center" class="style36">Active</div></td>
          <td width="11%" bgcolor="#CCCCCC"><div align="center" class="style36">Non-Active</div></td>
          </tr>           
        <tr>
          <td><div align="center"><? echo $row["username"];?></div></td>
          <td><div align="center"><? echo $n ?><span onclick="3"><?= $row["s_name"];?></div></td>
          <td><div align="center"><span class="hhhhh">
            <? $status=$row["status"];
	       if($status== 1){
			   echo '<span style="color:green">ACTIVE</span>';
		   }
		   else
		   {
			   echo '<span style="color:red">NON-ACTIVE</span>';
		   }
	    ?>
          </span></div></td>
          <td><div align="center"><a href="std_active.php?active=<?=$row["std_id"]; ?> " ><img src="image/active.gif" width="20" height="18" border="0" align="middle" /></a></div></td>
          <td><div align="center"><a href="std_active.php?non_active=<?=$row["std_id"]; ?>" ><img src="image/non-active.jpg" width="16" height="16" border="0" /></a></div></td>
          </tr><? }?>
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
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p align="left"><span class="style44">________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
  <tr>
    <td height="16" valign="top"><div align="center"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></div></td>
  </tr>
</table>
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      
    </tr>
  </table>
</form>

</body>
</html>
