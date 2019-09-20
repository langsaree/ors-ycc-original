<?php
session_start();
include('include/login.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ลงทะเบียนเรียน</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css"></style>
</head>
        <div class="MainColumn">
        <div class="ArticleBorder">
        <div class="ArticleBL"><div></div></div>
        <div class="ArticleBR"><div></div></div>
        <div class="ArticleTL"></div>
        <div class="ArticleTR"><div></div></div>
        <div class="ArticleT"></div>
        <div class="ArticleR"><div></div></div>
        <div class="ArticleB"><div></div></div>
        <div class="ArticleL"></div>
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
                      <td colspan="3" bgcolor="#CCCCCC"><? echo $std_error; ?></td>
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
</div>
<?php  include('include/footer.php');?>
    </body>
</html>