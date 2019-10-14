<?php
include('db.php');
extract($_GET);
$id=$id;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ข้อมูลนักศึกษา </title>
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
<!--
.style25 {font-size: 11px; font-family: Tahoma; }
.style7 {color: #3987FB; font-size: 14px; }
.style46 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; }
.style47 {font-size: 13px}
.style54 {font-size: 14px}
.style55 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #CCCCCC; }
.style58 {color: #333333}
.style60 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #333333; }
.style61 {font-size: 13px; color: #333333; }
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style33 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666666;
}
.style62 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #333333; }
.style64 {
	font-size: 14px;
	font-weight: bold;
	color: #333333;
}
.style66 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 12px; color: #666666; }
.style67 {font-size: 12px}
-->
    </style>
</head>
<body>
  <form id="form1" name="form1" method="post" action="">
    <table width="1260" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td><img src="../images/header.png" width="1280" height="45" /></td>
        </tr>
    </table>
    <table width="1280" height="723" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
            <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
                    <tr>
                        <td width="6%" align="center"><img src="image/student add.png" width="100" height="100" /></td>
                        <td width="94%"><span class="style26"><span class="style36"><span class="style45">View</span> <span class="style38">Student&nbsp;&nbsp;</span></span></span>
                            <a href="cpanel.php" class="style6" style="text-decoration:none" > | ControlPanel | </a><a href="manage_student.php" class="style6" style="text-decoration:none" >ManageStudent | </a><a href="std_view.php" class="style6" style="text-decoration:none" >ViewStudent</a><br />
                            <span class="style34">ดูข้อมูลนักศึกษา</span></td>
                    </tr>
                </table>
                <p><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
        </tr>
        <tr>
            <td height="563" valign="top"><p></p>
                <div align="center">
                    <p class="style1">Student Information </p>
                                       
<?
//echo $cos_id;
$sql = "select * from student where std_id='$id' ";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
?>                             

    <table width="400" border="0" align="center" cellpadding="0" cellspacing="5">
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><p><img src="image/std_infor.png" width="111" height="126" align="top" /><br>
                    <span class="style62">รูปประจำตัว</span></p></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right; font-weight: bold; color: #333;">ชื่อ :</span></span></td>
            <td colspan="4"><?php echo $row['f_name'];?>&nbsp;&nbsp;<?php echo $row['name']; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right"><span class="style60" style="font-weight: bold">&#3609;&#3634;&#3617;&#3626;&#3585;&#3640;&#3621; : </span></td>
            <td><?php echo $row['s_name'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right"><span class="style60">สัญชาติ :</span></td>
            <td><?php echo $row['nation'];?></td>
            <td class="style60">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td >&nbsp;</td>
            <td style="text-align: right"><span class="style60">เชื้อชาติ : </span></td>
            <td><?php echo $row['origin'];?></span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td height="19" >&nbsp;</td>
            <td class="style60" style="text-align: right">ศาสนา :</td>
            <td><?php echo $row['religion'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td height="19" >&nbsp;</td>
            <td style="text-align: right"><span class="style60">เพศ :</span></td>
            <td><?php echo $row['gender'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right"><span class="style60">วันเกิด : </span></td>
            <td><?php echo $row['birthday'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right"><span style="font-weight: bold; text-align: right;"><span class="style61">เลขบัตรประชาชน<span class="style46"> :</span></span></span></td>
            <td><?php echo $row['std_id'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right"><span class="style61"><span class="style60">บ้านเลขที่ :</span></span></td>
            <td colspan="4"><?php echo $row['address'];?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right"><span class="style47"><span class="style60">เขต/อำเภอ<span class="style46"> :</span></span></span></td>
            <td><?php echo $row['city'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right"><span class="style60" style="font-weight: bold">จังหวัด :</span></td>
            <td><?php echo $row['province'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right"><span class="style60">รหัสไปรษณีย์ : </span></td>
            <td><?php echo $row['postalcode'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right"><span class="style60">โทรศัพท์ :</span></td>
            <td><?php echo $row['phone'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right"><span class="style60" style="font-weight: bold">E-mail :</span></td>
            <td><?php echo $row['email'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="style60" style="text-align: right">จบการศึกษาระดับ :</td>
            <td><?php echo $row['edulevel'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="style60" style="text-align: right">จากสถานศึกษา :</td>
            <td><?php echo $row['eduplace'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="style60" style="text-align: right">จังหวัด :</td>
            <td><?php echo $row['eduprovince'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="style60" style="text-align: right">ปีการศึกษา :</td>
            <td><?php echo $row['eduyear'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align: right"><span class="style60" style="font-weight: bold">อาชีพ :</span></td>
            <td><?php echo $row['job'];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
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
</from>
</body>
</html>