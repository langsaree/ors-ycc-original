<?php
session_start();
if(!isset($_SESSION["username"])){header("location:index.php");}
//end of check session
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cpanel</title>
<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="cpanel.css" />
<style type="text/css">


</style>
</head>
<body>
<div class="banner"><span class="style25"></span></div>
<table width="1024" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <td width="9">&nbsp;</td>
    <td width="330"><span class="style26"><span class="style30">Administrator</span> <span class="style29">Control Panel</span></span></td>
    <td width="308">&nbsp;</td>
    <td width="359" style="text-align:right"><span class="style33"><strong>ยินดีต้อนรับ :: </strong></span><?php echo '<span style="font-weight:bold; font-size:15px"> ' .$_SESSION["username"].'</span>'; ?></td>
    <td width="12">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style37">ระบบจัดการการลงทะเบียนออนไลน์</span></td>
    <td>&nbsp;</td>
    <td style="text-align:right"><strong><a href="logout.php" title="ออกจากระบบ" class="style33" style="text-decoration: none">ออกจากระบบ</a></strong></td>
    <td><div align="right" class="style33"></td>
  </tr>
</table>
<table width="1024" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <td><span class="boader">--------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span></td>
  </tr>
  <tr>
    <td width="977" height="5"></td>
  </tr>
</table>
<table width="1024" border="0" cellpadding="1" cellspacing="2" >
  <tr>
    <td width="831" height="325" valign="top" ><table  width="819" height="250" border="0" cellpadding="0" cellspacing="2" >
      <tr>
        <td width="10" valign="top" >&nbsp;</td>
        <td width="128"><a href="view_registered.php"><img src="image/5.jpg" alt="" class="second_image"/></a></td>
        <td width="139"><a href="manage_course.php"><img src="image/manage_course.jpg" alt="" class="second_image"/></a></td>
        <td width="129"><a href="manage_student.php"><img src="image/manage student.png" alt="" class="second_image"/></a></td>
        <td width="128"><a href="manage_grade.php" title="การจัดการเกรด"><img src="image/manage_grade.png" alt="" class="second_image" /></a></td>
        <td width="130"><a href="manage_evaluation.php" title="การจัดการการประเมิน"><img src="image/evaluation.png" alt="" class="second_image" /></a></td>
        <td width="139"><span class="style41"><a href="manage_statis.php" TITLE="ดูสถิติการใช้งานระบบ"><img src="image/Stats.png" alt="statistic" class="second_image" /></a></span></td>
      </tr>
      <tr>
        <td class="style41">&nbsp;</td>
        <td class="style41"><a href="view_registered.php" class="style41">แสดงผู้ลงทะเบียน</a></td>
        <td class="style41"><a href="manage_course.php" class="style41">การจัดการรายวิชา</a></td>
        <td class="style41"><a href="manage_student.php" class="style41">การจัดการนักศึกษา</a></td>
        <td class="style41"><a href="manage_grade.php" class="style41">การจัดการเกรด</a></td>
        <td class="style41"><a href="manage_evaluation.php" class="style41">การจัดการการประเมิน</a></td>
        <td class="style41"><a href="manage_statis.php" class="style41">สถิติการใช้งาน</a></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="19">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><a href="register_course.php"><img src="image/manage register.png" alt="" class="second_image"/></a></td>
        <td><img src="image/student status.png" alt="" class="second_image"/></td>
        <td><a href="manage_lecturer.php"><img src="image/lecture Manager.png" alt="" class="second_image"/></a></td>
        <td><a href="manage_lecturer.php"><img src="image/register.png" class="second_image" /></a></td>
        <td><a href="manage_admin.php"><img src="image/admin.png" alt="" class="second_image"/></a></td>
        <td><a href="http://localhost:1080/phpmyadmin/db_designer.php?db=ors_ycc"><img src="image/database.png" width="64" height="64" class="second_image" /></td>
      </tr>
      <tr>
        <td class="style41">&nbsp;</td>
        <td class="style41"><a href="register_course.php" class="style41">ลงทะเบียนวิชา</a></td>
        <td class="style41"><a href="std_active.php" class="style41">การจัดการสถานะนักศึกษา</td>
        <td class="style41"><a href="manage_lecturer.php" class="style41">การจัดการอาจารย์ผู้สอน</a></td>
        <td class="style41"><a href="manage_register.php" class="style41">การจัดการลงทะเบียน</a></td>
        <td class="style41"><a href="manage_admin.php" class="style41">ผู้ดูแลระบบ</a></td>
        <td class="style41">ด้าต้าเบส</td>
      </tr>
      <tr>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
      </tr>
      <tr>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
      </tr>
      <tr>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
        <td class="style41">&nbsp;</td>
      </tr>
    </table>
      
    <td width="183" valign="top" ><table width="169" border="0" align="right" cellpadding="0" cellspacing="2">
      <tr>
        <td width="165" height="23" valign="top" ><table width="161" border="0" cellspacing="0" cellpadding="0">
    
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-text';"onmouseout="this.className='bg-white';" 
>
            <td height="21" colspan="3"><a href="manage_course.php" class="right_side_bar"> &nbsp;&nbsp;&nbsp;&nbsp;การจัดการรายวิชา</a></td>
            </tr>
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-second';" onmouseout="this.className='bg-white';">
            <td width="22">&nbsp;</td>
            <td width="119"><a href="cos_add.php" class="right_side_bar_list">เพิ่มรายวิชา </a></td>
            <td width="20">&nbsp;</td>
            </tr>
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-second';" onmouseout="this.className='bg-white';">
            <td>&nbsp;</td>
            <td><a href="cos_view.php" class="right_side_bar_list">แสดงรายวิชา</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-second';" onmouseout="this.className='bg-white';">
            <td>&nbsp;</td>
            <td><a href="cos_active.php" class="right_side_bar_list" >สถานะรายวิชา</a></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><table width="161" border="0" cellspacing="0" cellpadding="0">
           <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-text';"onmouseout="this.className='bg-white';" 
>
            <td height="21" colspan="3"><a href="manage_student.php" class="right_side_bar">&nbsp;&nbsp;&nbsp;&nbsp;การจัดการนักศึกษา</a></td>
          </tr>
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-second';" onmouseout="this.className='bg-white';">
            <td width="22">&nbsp;</td>
            <td width="119"><a href="std_add.php" class="right_side_bar_list">เพิ่มนักศึกษาใหม่</a></td>
            <td width="20">&nbsp;</td>
          </tr>
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-second';" onmouseout="this.className='bg-white';">
            <td>&nbsp;</td>
            <td><a href="std_view.php" class="right_side_bar_list">แสดงข้อมูลนักศึกษา</a></a></span></a></td>
            <td>&nbsp;</td>
          </tr>
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-second';" onmouseout="this.className='bg-white';">
            <td>&nbsp;</td>
            <td><a href="std_active.php" class="right_side_bar_list">แสดงสถานะนักศึกษา</a></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><table width="163" border="0" cellspacing="0" cellpadding="0">
           <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-text';"onmouseout="this.className='bg-white';">
            <td height="21" colspan="3" class="right_side_bar"><a href="manage_grade.php" class="right_side_bar">&nbsp;&nbsp;&nbsp;&nbsp;การจัดการเกรด</a></td>
          </tr>
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-second';" onmouseout="this.className='bg-white';">
            <td width="21">&nbsp;</td>
            <td width="120"><a href="grade_add.php" class="right_side_bar_list">เพิ่มเกรด </a></td>
            <td width="22">&nbsp;</td>
          </tr>
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-second';" onmouseout="this.className='bg-white';">
            <td>&nbsp;</td>
            <td><a href="grade_delete.php" class="right_side_bar_list">ลบเกรด</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-second';" onmouseout="this.className='bg-white';">
            <td>&nbsp;</td>
            <td><a href="grade_update.php" class="right_side_bar_list">แก้ไขเกรด </a></td>
            <td>&nbsp;</td>
          </tr>
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-second';" onmouseout="this.className='bg-white';">
            <td>&nbsp;</td>
            <td><a href="grade_view.php" class="right_side_bar_list">แสดงเกรด</a></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><table width="163" border="0" cellspacing="0" cellpadding="0">
           <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-text';"onmouseout="this.className='bg-white';">
            <td height="21" colspan="3"><a href="manage_evaluation.php" class="right_side_bar">&nbsp;&nbsp;&nbsp;&nbsp;การจัดการการประเมิน</a></td>
          </tr>
          <tr>
            <td width="22">&nbsp;</td>
            <td width="119"><a href="cos_add.php" class="right_side_bar_list">แสดงประเมินผล</a></td>
            <td width="22">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a href="cos_view.php" class="right_side_bar_list">ลบประเมินผล</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><table width="163" border="0" cellspacing="0" cellpadding="0">
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-text';"onmouseout="this.className='bg-white';">
            <td height="21" colspan="3"><a href="manage_statis.php" class="right_side_bar">&nbsp;&nbsp;&nbsp;&nbsp;สถิติการใช้งาน</a></td>
          </tr>
          <tr>
            <td width="22">&nbsp;</td>
            <td width="119"><a href="cos_add.php" class="right_side_bar_list">เพิ่มรายวิชา </a></td>
            <td width="22">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a href="cos_view.php" class="right_side_bar_list">แสดงรายวิชา</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a href="cos_active.php" class="right_side_bar_list" >สถานะรายวิชา</a></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><table width="167" border="0" cellspacing="0" cellpadding="0">
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-text';"onmouseout="this.className='bg-white';">
            <td height="21" colspan="3"><a href="manage_std_status.php" class="right_side_bar">&nbsp;&nbsp;&nbsp;&nbsp;การจัดการสถานะนักศึกษา</a></td>
          </tr>
          <tr>
            <td width="22">&nbsp;</td>
            <td width="119"><a href="cos_add.php" class="right_side_bar_list">เพิ่มรายวิชา </a></td>
            <td width="26">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a href="cos_view.php" class="right_side_bar_list">แสดงรายวิชา</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a href="cos_active.php" class="right_side_bar_list" >สถานะรายวิชา</a></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><table width="165" border="0" cellspacing="0" cellpadding="0">
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-text';"onmouseout="this.className='bg-white';">
            <td height="21" colspan="3"><a href="manage_register.php" class="right_side_bar">&nbsp;&nbsp;&nbsp;&nbsp;การจัดการลงทะเบียน</a></td>
          </tr>
          <tr>
            <td width="22">&nbsp;</td>
            <td width="119"><a href="cos_add.php" class="right_side_bar_list">เพิ่มรายวิชา </a></td>
            <td width="24">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a href="cos_view.php" class="right_side_bar_list">แสดงรายวิชา</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a href="cos_active.php" class="right_side_bar_list" >สถานะรายวิชา</a></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="165" border="0" cellspacing="0" cellpadding="0">
          <tr bgcolor="<?=$bgcolor?>" onmouseover="this.className='bg-text';"onmouseout="this.className='bg-white';">
            <td height="21" colspan="3"><a href="manage_admin.php" class="right_side_bar">&nbsp;&nbsp;&nbsp;&nbsp;ผู้ดูแลระบบ</a></td>
          </tr>
          <tr>
            <td width="22">&nbsp;</td>
            <td width="119"><a href="cos_add.php" class="right_side_bar_list">เพิ่มรายวิชา </a></td>
            <td width="24">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a href="cos_view.php" class="right_side_bar_list">แสดงรายวิชา</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a href="cos_active.php" class="right_side_bar_list" >สถานะรายวิชา</a></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
    </table>
      <p>&nbsp;</p>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<table width="1024" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <td width="977"><span class="boader">--------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span></td>
  </tr>
</table>
<div class="banner"><span class="style25"> ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ :</span><span class="style25"> Bukhoree | Kholed | Ihsan</span></div>
</body>
</html>
