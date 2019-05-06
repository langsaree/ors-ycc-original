<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ลงทะเบียนเรียน</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
<!--
.style25 {font-size: 11px; font-family: Tahoma; }
.style9 {font-size: 12px}
.style7 {color: #3987FB; font-size: 14px; }
.style29 {
	color: #FFFFFF;
	font-size: 16px;
}
-->
    </style>
</head>
<body>
    <div class="BodyContent">
<div class="BorderBorder"><div class="BorderBL"><div></div></div><div class="BorderBR"><div></div></div><div class="BorderTL"></div><div class="BorderTR"><div></div></div>
      <div class="BorderR"><div></div></div><div class="BorderB"><div></div></div><div class="BorderL"></div>
      <div class="Border">

        <div class="Menu">
            <ul>
              <li></li> 
              <li></li> 
              <li></li> <li></li> 
              <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a><a href="college.php" class="MenuButton">  <span> วิทยาลัย</span></a><a href="course.php" class="MenuButton"><span>หลักสูตร</span></a><a href="ann.php" class="MenuButton"><span>ประชาสัมพันธ์</span> </a><a href="gallary.php" class="MenuButton"><span>ภาพกิจกรรม</span></a><a href="contact_us.php" class="MenuButton"><span> ติดต่อเรา</span></a>
                 <input name="text" type="text" style="width:120px" />
                 <span class="ButtonInput"><span>
                 <input type="button" value="Search" />
                 </span></span></ul>
        </div>
        <div class="Header">
        <div class="HeaderTitle">
          <div align="left"><img src="images/banner.jpg" width="836" height="250"></div>
          <h1>&nbsp;</h1>
        </div>
        </div><div class="Columns"><div class="Column1">
          <div class="Block">
            
            <span class="BlockHeader"><span>Online Register</span></span>
            <table width="150" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2"><div align="center"><a href="register.php"><img src="images/register.gif"  width="130" height="35"></a></div></td>
                  </tr>
                </table>
            	<br>
          </div>
          <div class="Block">

            <span class="BlockHeader"><span>Menu</span></span>
            <div class="BlockContentBorder">

                 <ul>
                    <li><span class="style7"><a href="index.php" style="color: #3987FB; text-decoration: none">หลักสูตรที่เปิด</a></span></li>
                    <li><span class="style7"><a href="manual.pdf" style="color: #3987FB; text-decoration: none">คู่มือการลงทะเบียน</a></span></li>
                </ul>
          </div>
        </div>

        </div><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
        
          <div class="Article">
            <table width="650" height="251" border="0" cellpadding="0" cellspacing="0" bordercolor="#999999">
              <tr>
                <td width="304" height="251" valign="top"><table width="298" height="224" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
                  <tr bgcolor="#0099FF">
                    <td height="39" colspan="3" bgcolor="#0099FF"><span class="style29">&nbsp;สำหรับผู้ที่ลงทะเบียนเรียนครั้งแรก</span></td>
                    </tr>
                  <tr>
                    <td height="81" colspan="3" valign="top" bgcolor="#CCCCCC">&nbsp;&nbsp;หากคุณยังไม่เคยลงทะเบียนเรียนมาก่อน<br>
                      &nbsp;&nbsp;คุณสามารถคลิกที่ปุ่ม ลงทะเบียนเรียนใหม่ &nbsp;&nbsp;เพื่อกรอกข้อมูลต่างๆ เพื่อใช้ในการเรียนหลักสูตร<br>
                      &nbsp;&nbsp;ของวิทยาลัยชุมชนกรุงเทพมหานครค่ะ</td>
                    </tr>
                  <tr>
                    <td height="43" bgcolor="#CCCCCC">&nbsp;</td>
                    <td bgcolor="#CCCCCC"><input type="submit" name="button" id="button" value="ลงทะเบียนเรียนใหม่" onClick="document.location.href='register_course.php'"></td>
                    <td bgcolor="#CCCCCC">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="39" bgcolor="#CCCCCC">&nbsp;</td>
                    <td bgcolor="#CCCCCC">&nbsp;</td>
                    <td bgcolor="#CCCCCC">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="72" height="22" bgcolor="#CCCCCC">&nbsp;</td>
                    <td width="130" bgcolor="#CCCCCC"><label></label></td>
                    <td width="96" bgcolor="#CCCCCC">&nbsp;</td>
                  </tr>
                </table></td>
                <td width="346" valign="top"><form action="std_login_check.php" method="POST">
                  <table width="336" height="211" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="39" colspan="3" bgcolor="#0099FF"><span class="style29"> &nbsp;สำหรับผู้ที่เคยลงทะเบียนแล้ว</span></td>
                    </tr>
                    <tr>
                      <td height="72" colspan="3" valign="top" bgcolor="#CCCCCC">&nbsp;&nbsp;หากคุณเคยลงทะเบียนเรียนหลักสูตรของทาง <br>
                        &nbsp;&nbsp;วิทยาลัยชุมชนยะลาแล้ว คุณสามารถใส่ <strong> <br>
                          &nbsp;&nbsp;ชื่อล็อกอิน</strong> และ<strong>รหัสผ่าน</strong> ของคุณ <br>
                        &nbsp;&nbsp;เพื่อเข้าไปลงทะเบียนเรียนหลักสูตรอื่นๆ ได้ <br></td>
                    </tr>
                    <tr>
                      <td colspan="3" bgcolor="#CCCCCC"><? echo "$std_error"; ?></td>
                      </tr>
                    <tr>
                      <td width="81" bgcolor="#CCCCCC">&nbsp;</td>
                      <td width="233" bgcolor="#CCCCCC"><span class="style9">ล็อกอิน::</span></td>
                      <td width="22" bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC"><input type="text" name="username2" /></td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC"><span class="style9">รหัสผ่าน::</span></td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC"><input type="password" name="password2" /></td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC"><input type="submit" name="submit" id="ok2" value="เข้าสู่ระบบ" />
                        &nbsp;<a href="password_recovery.php">ลืมรหัสผ่าน?</a></td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>
                  </table>
                </form></td>
              </tr>
            </table>
             <div align="center"></div>
            <p align="center">&nbsp;</p>
        </div>
        </div>
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
        </div>
        </div></div>
        <div class="Footer"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan </span></div>                
    </div>
</div>
    </body>
</html>