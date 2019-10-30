 <?php
   include('../db.php');
   //mysql_query ("SET NAMES 'utf8'");

   $sql	 = "select * from register ";
   $result = mysqli_query($conn,$sql);
   if (!$result)
   {die ("can not connect db".mysqli_error());
   }
   while ($result_row = mysqli_fetch_row($result))
   {
   $cos_id = $result_row[0];  
//echo $std_id;
   $cos_id = $result_row[1]; 
   $cos_id = $result_row[2];
   $cos_id = $result_row[3];
  // echo $cos_id;
   } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style25 {font-size: 13px; font-family: Tahoma; }
.style26 {font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 21px;
}
.style34 {color: #666666;
	font-size: 13px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style36 {color: #FF6600}
.style38 {color: #55443E; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style60 {font-size: 24px}
.style46 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; }
.style47 {font-size: 13px}
.style55 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #CCCCCC; }
.style58 {color: #333333}
.style59 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; color: #333333; }
.style45 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style54 {font-size: 14px}
.style57 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; color: #CCCCCC; }
.style61 {
	color: #FFFFFF
}
-->
</style></head>

<body>
<table width="85%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><img src="images/header-bg.png" width="1280" height="45" /></td>
  </tr>
  <tr>
    <td colspan="2"><table width="80%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="image/student view.png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36"><span class="style60">Student</span><span class="style38"> Profile</span></span></span><br />
            <span class="style34">โปรไฟล์ส่วนตัว</span></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td width="43%" valign="top"><table width="100%" height="293" border="3" cellpadding="0" cellspacing="0">
        <tr>
          <td height="44" colspan="4" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td height="41" colspan="4" valign="top">* แสดงรายวิชาที่เปิดสอนเดือนนี้</td>
        </tr>
        <tr>
          <td width="25%" height="25" valign="top"><div align="center"><?php echo $cos_id; ?></div></td>
          <td width="34%" valign="top"><div align="center"><?php echo $cos_id; ?></div></td>
          <td width="20%" valign="top"><div align="center"><?php echo $cos_id; ?></div></td>
          <td width="45%" valign="top"><div align="center"><?php echo $cos_id; ?></div></td>
        </tr>
        <tr>
          <td colspan="4" valign="top">&nbsp;</td>
        </tr>
        
      </table>      <p>&nbsp;</p></td>
    <td width="628" height="480" align="right" valign="top"><table width="728" height="537" border="0" align="center" cellpadding="0" cellspacing="5">
        <tr>
          <td height="45" colspan="4"><div align="left">
              <p class="style55"><span class="style58"> :::<strong> ข้อมูลนักศึกษา &#3623;&#3636;&#3607;&#3618;&#3634;&#3621;&#3633;&#3618;&#3594;&#3640;&#3617;&#3594;&#3609;&#3618;&#3632;&#3621;&#3634;</strong> :::</span></p>
            <p class="style56">------------------------------------------------------------------------------------------------------</p>
          </div></td>
        </tr>
        <tr>
          <td height="135" bgcolor="#FFFFFF"><div align="right" class="style46">รูปประจำตัว :</div></td>
          <td width="12" height="135" bgcolor="#FFFFFF">&nbsp;</td>
          <td width="129" bgcolor="#FFFFFF"><img src="image/default_avatar_big.png" width="100" height="110" align="top" /></td>
          <td width="349" height="135" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <td width="213" height="22" bgcolor="#FFFFFF"><div align="left" class="style46">
              <div align="right">ชื่อล็อกอิน : </div>
          </div></td>
          <td colspan="3" bgcolor="#FFFFFF"><div align="left">
              <input name="username" type="text" id="username" value="<?php echo $result_row[0]; ?>" />
          </div></td>
        </tr>
        <tr>
          <td height="27" bgcolor="#FFFFFF"><div align="left" class="style46">
              <div align="right">รหัสผ่าน :</div>
          </div></td>
          <td colspan="3" bgcolor="#FFFFFF"><div align="left">
              <input name="password" type="text" id="password" value="<?php echo $result_row[1]; ?>" />
          </div></td>
        </tr>
        <tr>
          <td height="22" bgcolor="#FFFFFF">&nbsp;</td>
          <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <td height="31" bgcolor="#FFFFFF"><div align="right" class="style46">ชื่อ :</div></td>
          <td colspan="2" bgcolor="#FFFFFF"><div align="left">
              <input type="text" name="name" id="name" value="<?php echo $result_row[2]; ?><?php echo $result_row[3]; ?>" />
          </div></td>
          <td bgcolor="#FFFFFF"><div align="left">&#3609;&#3634;&#3617;&#3626;&#3585;&#3640;&#3621;<span class="style46"> :</span>
                  <input name="s_name" type="text" id="s_name" value="<?php echo $result_row[4]; ?>" />
          </div></td>
        </tr>
        <tr>
          <td height="33" bgcolor="#FFFFFF"><div align="right" class="style46">&#3648;&#3614;&#3624; :</div></td>
          <td colspan="3" bgcolor="#FFFFFF"><div align="left">
              <input name="gender" type="text" id="gender" value="<?php echo $result_row[5]; ?>" size="15" />
          </div></td>
        </tr>
        <tr>
          <td height="35" bgcolor="#FFFFFF"><div align="right" class="style46">วันเกิด : </div></td>
          <td colspan="3" bgcolor="#FFFFFF"><div align="left">
              <input name="birth" type="text" id="birth" value="<?php echo $result_row[6]; ?><?php echo $result_row[7]; ?><?php echo $result_row[8]; ?>" />
          </div></td>
        </tr>
        <tr>
          <td height="35" bgcolor="#FFFFFF"><div align="right" class="style47">เลขบัตรประชาชน<span class="style46"> :</span></div></td>
          <td colspan="3" bgcolor="#FFFFFF"><div align="left">
              <input name="std_id" type="text" id="std_id" value="<?php echo $result_row[9]; ?>" maxlength="13" />
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
      </table>
        <div align="center">
          <table width="728" border="0" align="center" cellpadding="0" cellspacing="5">
            <tr>
              <td height="27" colspan="4"><p class="style59">&#3607;&#3637;&#3656;&#3629;&#3618;&#3641;&#3656; :::</p>
                  <p class="style57">------------------------------------------------------------------------------------------------------</p></td>
            </tr>
            <tr>
              <td width="213">&nbsp;</td>
              <td width="129">&nbsp;</td>
              <td width="150">&nbsp;</td>
              <td width="211">&nbsp;</td>
            </tr>
            <tr>
              <td height="22"><div align="right" class="style47">บ้านเลขที่<span class="style46"> :</span></div></td>
              <td><div align="left">
                  <input name="home" type="text" id="home" value="<?php echo $result_row[10]; ?>" size="10" />
              </div></td>
              <td><div align="right" class="style46">หมู่บ้าน/อาคาร :</div></td>
              <td><div align="left">
                  <input name="m_home" type="text" id="m_home" value="<?php echo $result_row[11]; ?>" size="10" />
              </div></td>
            </tr>
            <tr>
              <td height="32"><div align="right" class="style47">&#3595;&#3629;&#3618;/&#3606;&#3609;&#3609;<span class="style46"> :</span></div></td>
              <td><div align="left">
                  <input name="r_home" type="text" id="r_home" value="<?php echo $result_row[12]; ?>" size="10" />
              </div></td>
              <td><div align="right" class="style46">แขวง/ตำบล :</div></td>
              <td><div align="left">
                  <input name="v_home" type="text" id="v_home" value="<?php echo $result_row[13]; ?>" size="10" />
              </div></td>
            </tr>
            <tr>
              <td height="23"><div align="right" class="style47">เขต/อำเภอ<span class="style46"> :</span></div></td>
              <td><div align="left">
                  <input name="p_home" type="text" id="p_home" value="<?php echo $result_row[14]; ?>" size="10" />
              </div></td>
              <td><div align="right" class="style46">จังหวัด :</div></td>
              <td><div align="left">
                  <input name="c_home" type="text" id="c_home" value="<?php echo $result_row[15]; ?>" size="15" />
              </div></td>
            </tr>
            <tr>
              <td height="30"><div align="right"><span class="style46">รหัสไปรษณีย์ : </span></div></td>
              <td><div align="left">
                  <input name="post" type="text" id="post" value="<?php echo $result_row[16]; ?>" size="15" />
              </div></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="27"><div align="right" class="style46">โทรศัพท์ :</div></td>
              <td><input name="tel" type="text" id="tel" value="<?php echo $result_row[17]; ?>" size="18" /></td>
              <td><div align="right" class="style46">โทรสาร :</div></td>
              <td><div align="left">
                  <input name="d_tel" type="text" id="d_tel" value="<?php echo $result_row[18]; ?>" size="18" />
              </div></td>
            </tr>
            <tr>
              <td><div align="right">E-mail<span class="style46"> :</span></div></td>
              <td><input name="email" type="text" id="email" value="<?php echo $result_row[19]; ?>" size="18" /></td>
              <td><div align="right" class="style46">มือถือ :</div></td>
              <td><div align="left">
                  <input name="mobile" type="text" id="mobile" value="<?php echo $result_row[20]; ?>" size="18" />
              </div></td>
            </tr>
            <tr>
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
            </tr>
          </table>
          <table width="728" border="0" align="center" cellpadding="0" cellspacing="5">
            <tr>
              <td height="25" colspan="2"><p class="style59">&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3648;&#3585;&#3637;&#3656;&#3618;&#3623;&#3585;&#3633;&#3610;&#3629;&#3634;&#3594;&#3637;&#3614; :::</p>
                  <p class="style57">------------------------------------------------------------------------------------------------------</p></td>
            </tr>
            <tr>
              <td width="213">&nbsp;</td>
              <td width="500">&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right" class="style54">ขณะนี้ท่านประกอบอาชีพอยู่หรือ<span class="style45">ไม่<span class="style46"> :</span></span></div></td>
              <td><div align="left">
                  <input name="job" type="text" id="job" value="<?php echo $result_row[21]; ?>" />
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><div align="left"></div></td>
            </tr>
            <tr>
              <td><div align="right" class="style55">ลักษณะอาชีพที่ท่านประกอบอยู่ :</div></td>
              <td><div align="left">
                  <input name="t_job" type="text" id="t_job" value="<?php echo $result_row[22]; ?>" />
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </div>
      <p align="left"><span class="style44">-------------------------------------------------------------------------------------------------------------------------</span></p>
      <p align="center">
          <input type="submit" name="ok" id="ok" value="ยืนยันการสมัคร" />
          <input name="cancel" type="reset" id="cancel" value="ยกเลิก" />
      </p></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></div></td>
  </tr>
</table>
</body>
</html>
