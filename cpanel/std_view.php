<?php  
session_start();
include('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view student</title>
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
.style46 {color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; }

</style>
</head>
<body>
<table width="998" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="1045"><img src="../images/header-bg.png" width="1260" height="45" /></td>
    </tr>
  </table>
  <table width="1260" height="554" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1027" height="74" valign="top"><table width="83%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="../image/student add.png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36">View<span class="style38"> Student</span></span></span><a href="cpanel.php" class="style6" style="text-decoration:none" > | ControlPanel  | </a><a href="manage_student.php" class="style6" style="text-decoration:none" >ManageStudent</a><br />
          <span class="style34">แสดงข้อมูลนักศึกษา</span></td>
        </tr>
    </table>
              <form id="form1" name="form1" method="post" action="std_view_search.php">
      <table width="1151" height="50" border="0" align="left" cellpadding="0" cellspacing="5">
           <tr>
                <td width="83">&nbsp;</td>
                <td width="146"><label>
                <input type=hidden name=todo value=search>
                <input name="search_text" type="text" id="search" size="20" />
                </label></td>
                <td width="48"><label>
                <input type="submit" name="button" id="button" value="ค้นหา" />
                </label></td>
                <td width="849">&nbsp;</td>
              </tr>
      </table>
      </form>
              <p>&nbsp;</p>
      <p><span class="style44">________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
  <tr>
    <td height="339" valign="top"><table width="80%" border="0" align="center" cellpadding="0" cellspacing="2">
      <tr>
        <td width="16%" height="29" bgcolor="#CCCCCC"><div align="center">รหัสประจำตัว น.ศ.</div></td>
        <td width="20%" bgcolor="#CCCCCC"><div align="center">ชื่อผู้ใช้</div></td>
        <td width="33%" bgcolor="#CCCCCC"><div align="center">ชื่อ-สกุล</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">แก้ไข</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">ลบออก</div></td>
        <td width="17%" bgcolor="#CCCCCC"><div align="center">แสดงข้อมูลรายละเอียด</div></td>
      </tr>
     <?php   
		/////////////////////////take information from student table //////////////////////////
	include('db.php');
	$sql1 = "select * from student ";
	$v=mysqli_query ($conn,$sql1);
	while ($row= mysqli_fetch_array($v))
	{
	$std = $row['std_id'];
	$user= $row['username'];
	$name= $row['f_name']." <span> ". $row['name']." <span> ". $row['s_name'];
	//echo $name;
	?>
      <tr>
		<td><div align="left"><?php echo $std?> </div></td>
		<td><div align="center"><?php echo $user ?></div></td>
		<td><div align="left"><?php echo $name?></div></td>
        <td><div align="center"><a href="std_update.php?id= <?php   echo $std; ?> "><img src="../image/list-edit.png" alt="1" width="25" height="25" border="0" /></a></div></td>
        <td><div align="center"><a href="std_delete.php?id= <?php   echo $std; ?> "><img src="../image/1294650148_DeleteRed.png" alt="1" width="25" height="25" border="0" /></a></div></td>
        <td><div align="center"><a href="std_profile.php?id=<?php   echo $std;?>">แสดงรายละเอียด</a></div></td>
      </tr>
     <?php   } ////// close first while //////////////////////////////////////////////
		//} //////// close of second while ////////////////////
		//} /////// close 3rd while ///////////////////////
		?>
    </table>
      <p></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      
      <p align="left"><span class="style44">_________________________________________________________________________________________________________________________________________</span></p>      </td>
    </tr>
  <tr>
    <td height="19" valign="top"><div align="center"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></div></td>
  </tr>
</table>
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
    </tr>
</table>
</body>
</html>
