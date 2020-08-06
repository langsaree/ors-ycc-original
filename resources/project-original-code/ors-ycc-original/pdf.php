<?php
session_start();
if(!session_is_registered(username)){header("location:register.php");}
include('db.php');
extract ($_GET);
$cos_id=$id;
//echo "$cos_id";

$sql="select * from student where username='$username'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$std_id=$row[std_id];
//echo "$std_id"; 

$sql2="select * from lecture,course where course.lec_id=lecture.lec_id and cos_id='$cos_id'";
$do2=mysql_query($sql2);
$this2=mysql_fetch_array($do2);
$lec_id=$this2[lec_id];	
//echo "$lec_id"; 

$sql3="insert into register(std_id,cos_id,lec_id) value('$std_id','$cos_id','$lec_id')";
$do3=mysql_query($sql3); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ใบสมัคร</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<style type="text/css">
.style45 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style60 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #333333; }
</style>
</head>

<body>

<table width="808" height="972" border="0" align="left" cellpadding="0" cellspacing="2">
  <tr>
    <td width="47" align="right" valign="top">&nbsp;</td>
    <td width="716" align="center" valign="top">  <table width="693" height="148" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="693" height="110" align="center" valign="top"><p><img src="images/Logo_Stamp_Small.jpg" width="116" height="104" /></p></td>
      </tr>
      <tr>
        <td><div align="center"><strong>ใบสมัครและลงทะเบียนหลักสูตรระยะสั้นในวิทยาลัยชุมชนยะลา จังหวัดยะลา </strong></div></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <?
//$std="select * from student where username='$username'";
//$result=mysql_query($sql);


$cos="select * from course where cos_id='$cos_id'";
$result1=mysql_query($cos);

?>
    </table>
      <table width="710" border="0" align="left" cellpadding="0" cellspacing="2">
        
        <tr>
          <td width="39" height="34"></td>
          <td width="45">&nbsp;</td>
          <td width="420"></td>
          <td width="95">&nbsp;</td>
          <td width="99" rowspan="2" align="left" valign="top"><table width="84" height="98" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#333333">
            <tr>
			
              <td width="80" height="96" style="font-size: 10px; text-align: center;">รูปถ่าย 1 นิ้ว</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="92" colspan="4" valign="top"><table width="600" border="0" cellspacing="2" cellpadding="0">
            <? //while($row=mysql_fetch_array($result)){ ?>
            <tr>
              <td width="63"><span style="color: #000"><span class="style45">ข้าพเจ้า</span></span></td>
              <td width="337"><?= $row[f_name],' ',$row[name],' ',' ',$row[s_name]; ?></td>
              <td width="62">&nbsp;</td>
              <td width="62">&nbsp;</td>
              <td width="64">&nbsp;</td>
            </tr>
           
          </table>
            <table width="600" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="118"><span class="style45">วัน/เดือน/ปี เกิด</span></td>
                <td width="403"><?= $row[birthday]?></td>
                <td width="71">&nbsp;</td>
              </tr>
            </table>
            <table width="600" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="56"><span style="color: #000">สัญชาติ</span></td>
                <td width="111"><?= $row[nation]?></td>
                <td width="74"><span style="color: #000">เชื้อชาติ</span></td>
                <td width="99"><?= $row[origin]?></td>
                <td width="51"><span style="color: #000">ศาสนา</span></td>
                <td width="195"><?= $row[religion]?></td>
              </tr>
            </table>
            <table width="600" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="59"><span style="color: #000">อาชีพ</span></td>
                <td width="263"><?= $row[job]?></td>
                <td width="153"><span style="color: #000">จบการศึกษาระดับ</span></td>
                <td width="272"><?= $row[edulevel]?></td>
                <td width="41">&nbsp;</td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="194" colspan="5" valign="top"><table width="600" border="0" cellspacing="2" cellpadding="0">
            <tr>
              <td width="143">จากสถานที่ศึกษา</td>
              <td width="339"><?= $row[eduplace]?></td>
              <td width="34">&nbsp;</td>
              <td width="34">&nbsp;</td>
              <td width="38">&nbsp;</td>
            </tr>
          </table>
            <table width="600" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="60">จังหวัด</td>
                <td width="159"><?= $row[eduprovince]?></td>
                <td width="84">ปีการศึกษา</td>
                <td width="246"><?= $row[eduyear]?></td>
                <td width="39">&nbsp;</td>
              </tr>
            </table>
            <table width="600" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="195">ที่อยู่ตามสำเนาทะเบียนบ้าน</td>
                <td width="322"><?= $row[address]?></td>
                <td width="20">&nbsp;</td>
                <td width="25">&nbsp;</td>
                <td width="26">&nbsp;</td>
              </tr>
            </table>
            <table width="600" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="129">โทรศัพท์/โทรสาร</td>
                <td width="363"><?= $row[phone]?></td>
                <td width="21">&nbsp;</td>
                <td width="36">&nbsp;</td>
                <td width="39">&nbsp;</td>
              </tr>
            </table>
            <table width="600" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="210">ที่อยู่ปัจจุบันที่สามารถติดต่อได้</td>
                <td width="308"><?= $row[address]?></td>
                <td width="22">&nbsp;</td>
                <td width="22">&nbsp;</td>
                <td width="26">&nbsp;</td>
              </tr>
            </table>
            <table width="600" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="125">โทรศัพท์/โทรสาร</td>
                <td width="352"><?= $row[phone]?></td>
                <td width="36">&nbsp;</td>
                <td width="36">&nbsp;</td>
                <td width="39">&nbsp;</td>
              </tr>
            </table>
            <table width="600" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="79">ชื่อบิดา</td>
                <td width="209"><?= $row[fat_fname],' ',$row[fat_lname]?></td>
                <td width="53">อาชีพ</td>
                <td width="198"><?= $row[fat_job]?></td>
                <td width="49">&nbsp;</td>
              </tr>
            </table>
            <table width="600" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="78">ชื่อมารดา</td>
                <td width="211"><?= $row[mot_fname],' ',$row[mot_lname]?></td>
                <td width="54">อาชีพ</td>
                <td width="200"><?= $row[mot_job]?></td>
                <td width="45">&nbsp;</td>
              </tr>
               <? //} ?>
          </table></td>
        </tr>
      </table>
      <p><br />
      </p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <table width="712" height="96" border="0" align="left" cellspacing="2">
        <tr>
          <td width="706" height="92" valign="top"><table width="705" border="1" cellpadding="0" cellspacing="0">
            <tr>
            <? while($row1=mysql_fetch_array($result1)){?>
              <td width="32"><div align="center">ที่</div></td>
              <td width="231"><div align="center">วิชา</div></td>
              <td width="149"><div align="center">จำนวนชั่วโมง/หน่วยกิต</div></td>
              <td width="107"><div align="center">วันที่เข้าเรียน</div></td>
              <td width="174"><div align="center">หมายเหตุ</div></td>
            </tr>
            <tr>
              <td height="61" valign="top"><? ?></td>
              <td valign="top">&nbsp;                <?=$row1[cos_name];?></td>
              <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                <?=$row1[cos_time]?></td>
              <td valign="top"><?=$row1[cos_start]?></td>
              <td valign="top"><?=$row1[cos_comment]?></td>
            </tr>
            <? } ?>
          </table></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <table width="660" height="109" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="323"><table width="320" height="112" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center">ลงชื่อ...................................................ผู้สมัคร</div></td>
            </tr>
            <tr>
              <td height="35"><table width="262" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="236">(..............................................................)</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><div align="center">วันที่......เดือน...........................พ.ศ. .......... </div></td>
            </tr>
          </table></td>
          <td width="316"><table width="370" height="112" border="0" cellspacing="0">
            <tr>
              <td width="364"><div align="center">ลงชื่อ.....................................................ผู้รับสมัคร</div></td>
            </tr>
            <tr>
              <td height="35"><table width="262" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="236">(..............................................................)</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><div align="center">วันที่......เดือน...........................พ.ศ. .......... </div></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="569" height="169" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="3">สำหรับเจ้าหน้าที่การเงิน</td>
          <td width="8" height="24">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" valign="top"><table width="517" height="112" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td width="511">ได้รับเงินค่าลงทะเบียนเรียนจำนวน.....................................................บาท</td>
              </tr>
            <tr>
              <td height="35">(..............................................................................................) (ตัวอักษร)</td>
              </tr>
            <tr>
              <td><div align="left">ตามใบเสร็จรับเงินเล่มที่........................................................เลขที่.................... </div></td>
              </tr>
          </table></td>
          <td height="62" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td width="129">&nbsp;</td>
          <td width="29">&nbsp;</td>
          <td width="385"><table width="373" height="112" border="0" align="left" cellspacing="2">
            <tr>
              <td width="367"><div align="center">ลงชื่อ.....................................................เจ้าหน้าที่การเงิน</div></td>
            </tr>
            <tr>
              <td height="35"><table width="262" border="0" align="center">
                <tr>
                  <td width="236">(..............................................................)</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><div align="center">วันที่......เดือน...........................พ.ศ. .......... </div></td>
            </tr>
          </table></td>
          <td height="62">&nbsp;</td>
        </tr>
    </table></td>
    <td width="37" height="968" align="right" valign="top"><p align="left">&nbsp;</p></td>
  </tr>
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>