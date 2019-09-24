<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add new student</title>
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
.style46 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; }
.style47 {font-size: 13px}
.style54 {font-size: 14px}
.style55 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #CCCCCC; }
.style57 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; color: #CCCCCC; }
.style58 {color: #333333}
.style59 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; color: #333333; }
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="pstd_add.php">
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../images/header-bg.png" width="1265" height="45" /></td>
    </tr>
  </table>
  <table width="1260" height="1463" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="../image/student%20add.png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36"><span class="style45">Add</span>  <span class="style38">New Student</span></span></span><br />
            <span class="style34">เพิ่มนักศึกษาใหม่</span></td>
        </tr>
    </table>
      <p align="left"><span class="style44">________________________________________________________________________________________________________________________________________<a href="manage_student.php"><img src="../image/images3.jpg" width="30" height="30" border="0" /></a></span></p></td>
    </tr>
  
  <tr>
    <td height="1286" valign="top"><table width="748" height="867" border="0" align="center" cellpadding="0" cellspacing="5">
        <tr>
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
              <td width="129" bgcolor="#FFFFFF"><img src="../image/user.png" width="128" height="128" align="top" /></td>
              <td height="135" bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <td width="213" height="22" bgcolor="#FFFFFF"><div align="left" class="style46">
                  <div align="right">ชื่อล็อกอิน : </div>
              </div></td>
              <td colspan="3" bgcolor="#FFFFFF"><div align="left">
                  <input type="text" name="username" id="username" />
              </div></td>
            </tr>
            <tr>
              <td height="27" bgcolor="#FFFFFF"><div align="left" class="style46">
                  <div align="right">รหัสผ่าน :</div>
              </div></td>
              <td colspan="3" bgcolor="#FFFFFF"><div align="left">
                  <input type="password" name="password" id="password" />
              </div></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF"><div align="right" class="style46">ยืนยันรหัสผ่าน : </div></td>
              <td colspan="3" bgcolor="#FFFFFF"><div align="left">
                  <input name="password" type="password" id="password" />
              </div></td>
            </tr>
            <tr>
              <td height="22" bgcolor="#FFFFFF">&nbsp;</td>
              <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF"><div align="right" class="style46">คำนำหน้าชื่อ :</div></td>
              <td colspan="2" bgcolor="#FFFFFF"><div align="left">
                  <select name="f_name" id="f_name">
                    <option selected="selected">&#3609;&#3634;&#3618;</option>
                    <option>&#3609;&#3634;&#3591;</option>
                    <option>&#3609;&#3634;&#3591;&#3626;&#3634;&#3623;</option>
                    <option>&#3604;.&#3594;.</option>
                    <option>&#3604;.&#3597;.</option>
                  </select>
              </div></td>
              <td width="349" bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <td height="31" bgcolor="#FFFFFF"><div align="right" class="style46">ชื่อ :</div></td>
              <td colspan="2" bgcolor="#FFFFFF"><div align="left">
                  <input type="text" name="name" id="name" />
              </div></td>
              <td bgcolor="#FFFFFF"><div align="left">&#3609;&#3634;&#3617;&#3626;&#3585;&#3640;&#3621;<span class="style46"> :</span>
                      <input type="text" name="s_name" id="s_name" />
              </div></td>
            </tr>
            <tr>
              <td height="33" bgcolor="#FFFFFF"><div align="right" class="style46">&#3648;&#3614;&#3624; :</div></td>
              <td colspan="3" bgcolor="#FFFFFF"><div align="left">
                  <input type="radio" name="gender" id="radio" value="man" />
                &#3594;&#3634;&#3618;
                <input type="radio" name="gender" id="radio11" value="feman" />
                &#3627;&#3597;&#3636;&#3591; </div></td>
            </tr>
            <tr>
              <td height="35" bgcolor="#FFFFFF"><div align="right" class="style46">วันเกิด : </div></td>
              <td colspan="3" bgcolor="#FFFFFF"><div align="left">
                  <select name="b_day" size="1" id="select2">
                    <option selected="selected">&#3623;&#3633;&#3609;</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                  </select>
                  <select name="b_month" size="1" id="select2">
                    <option selected="selected">&#3648;&#3604;&#3639;&#3629;&#3609;</option>
                    <option>&#3617;&#3585;&#3619;&#3634;&#3588;&#3617;</option>
                    <option>&#3585;&#3640;&#3617;&#3616;&#3634;&#3614;&#3633;&#3609;&#3608;&#3660;</option>
                    <option>&#3617;&#3637;&#3609;&#3634;&#3588;&#3617;</option>
                    <option>&#3648;&#3617;&#3625;&#3634;&#3618;&#3609;</option>
                    <option>&#3614;&#3620;&#3625;&#3616;&#3634;&#3588;&#3617;</option>
                    <option>&#3617;&#3636;&#3606;&#3640;&#3609;&#3634;&#3618;&#3609;</option>
                    <option>&#3585;&#3619;&#3585;&#3598;&#3634;&#3588;&#3617;</option>
                    <option>&#3626;&#3636;&#3591;&#3627;&#3634;&#3588;&#3617;</option>
                    <option>&#3585;&#3633;&#3609;&#3618;&#3634;&#3618;&#3609;</option>
                    <option>&#3605;&#3640;&#3621;&#3634;&#3588;&#3617;</option>
                    <option>&#3614;&#3620;&#3624;&#3592;&#3636;&#3585;&#3634;&#3618;&#3609;</option>
                    <option>&#3608;&#3633;&#3609;&#3623;&#3634;&#3588;&#3617;</option>
                  </select>
                  <select name="b_years" size="1" id="select2">
                    <option selected="selected">ปี</option>
                    <option>2553</option>
                    <option>2552</option>
                    <option>2551</option>
                    <option>2550</option>
                    <option>2549</option>
                    <option>2548</option>
                    <option>2547</option>
                    <option>2546</option>
                    <option>2545</option>
                    <option>2544</option>
                    <option>2543</option>
                    <option>2542</option>
                    <option>2541</option>
                    <option>2540</option>
                    <option>2539</option>
                    <option>2538</option>
                    <option>2537</option>
                    <option>2536</option>
                    <option>2535</option>
                    <option>2534</option>
                    <option>2533</option>
                    <option>2532</option>
                    <option>2531</option>
                    <option>2530</option>
                    <option>2529</option>
                    <option>2528</option>
                    <option>2527</option>
                    <option>2526</option>
                    <option>2525</option>
                  </select>
              </div></td>
            </tr>
            <tr>
              <td height="35" bgcolor="#FFFFFF"><div align="right" class="style47">เลขบัตรประชาชน<span class="style46"> :</span></div></td>
              <td colspan="3" bgcolor="#FFFFFF"><div align="left">
                <input name="std_id" type="text" id="std_id" maxlength="13" />
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
                        <input name="home" type="text" id="home" size="10" />
                    </div></td>
                    <td><div align="right" class="style46">หมู่บ้าน/อาคาร :</div></td>
                    <td><div align="left">
                        <input name="m_home" type="text" id="m_home" size="10" />
                    </div></td>
                  </tr>
                  <tr>
                    <td height="32"><div align="right" class="style47">&#3595;&#3629;&#3618;/&#3606;&#3609;&#3609;<span class="style46"> :</span></div></td>
                    <td><div align="left">
                        <input name="r_home" type="text" id="r_home" size="10" />
                    </div></td>
                    <td><div align="right" class="style46">แขวง/ตำบล :</div></td>
                    <td><div align="left">
                        <input name="v_home" type="text" id="v_home" size="10" />
                    </div></td>
                  </tr>
                  <tr>
                    <td height="23"><div align="right" class="style47">เขต/อำเภอ<span class="style46"> :</span></div></td>
                    <td><div align="left">
                        <input name="p_home" type="text" id="p_home" size="10" />
                    </div></td>
                    <td><div align="right" class="style46">จังหวัด :</div></td>
                    <td><div align="left">
                        <input name="c_home" type="text" id="c_home" size="15" />
                    </div></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="right"><span class="style46">รหัสไปรษณีย์ : </span></div></td>
                    <td><div align="left">
                        <input name="post" type="text" id="post" size="15" />
                    </div></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="27"><div align="right" class="style46">โทรศัพท์ :</div></td>
                    <td><input name="tel" type="text" id="tel" size="18" /></td>
                    <td><div align="right" class="style46">โทรสาร :</div></td>
                    <td><div align="left">
                        <input name="d_tel" type="text" id="d_tel" size="18" />
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="right">E-mail<span class="style46"> :</span></div></td>
                    <td><input name="email" type="text" id="email" size="18" /></td>
                    <td><div align="right" class="style46">มือถือ :</div></td>
                    <td><div align="left">
                        <input name="mobile" type="text" id="mobile" size="18" />
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
                      <input type="radio" name="job" id="radio12" value="ประกอบอาชีพ" />
                        <span class="style46">&#3611;&#3619;&#3632;&#3585;&#3629;&#3610;&#3629;&#3634;&#3594;&#3637;&#3614;
                        <input type="radio" name="job" id="radio13" value="ไม่ได้ประกอบอาชีพ" />
&#3652;&#3617;&#3656;&#3652;&#3604;&#3657;&#3611;&#3619;&#3632;&#3585;&#3629;&#3610;&#3629;&#3634;&#3594;&#3637;&#3614;</span></div></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align="left"></div></td>
                  </tr>
                  <tr>
                    <td><div align="right" class="style55">ลักษณะอาชีพที่ท่านประกอบอยู่ :</div></td>
                    <td>
                      
                      <div align="left">
                        <input type="radio" name="t_job" id="radio14" value="ลูกจ้าง" />
                        <span class="style46">&#3621;&#3641;&#3585;&#3592;&#3657;&#3634;&#3591;&#3610;&#3619;&#3636;&#3625;&#3633;&#3607;/&#3627;&#3657;&#3634;&#3591; &#3619;&#3657;&#3634;&#3609;
                        <input type="radio" name="t_job" id="radio15" value="รับราชการ" />
  &#3619;&#3633;&#3610;&#3619;&#3634;&#3594;&#3585;&#3634;&#3619;</span></div></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align="left">
                        <input type="radio" name="t_job" id="radio16" value="พนักงานรัฐวิสาหกิจ" />
                        <span class="style46">&#3614;&#3609;&#3633;&#3585;&#3591;&#3634;&#3609;&#3619;&#3633;&#3600;&#3623;&#3636;&#3626;&#3634;&#3627;&#3585;&#3636;&#3592;
                        <input type="radio" name="t_job" id="radio17" value="ค้าขาย" />
&#3588;&#3657;&#3634;&#3586;&#3634;&#3618;</span></div></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align="left">
                        <input type="radio" name="t_job" id="radio18" value="รับจ้างทั่วไป" />
                        <span class="style46">&#3619;&#3633;&#3610;&#3592;&#3657;&#3634;&#3591;&#3607;&#3633;&#3656;&#3623;&#3652;&#3611; </span></div></td>
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
      </table>
      <p>&nbsp;</p>
      <p align="left"><span class="style44">___________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
  <tr>
    <td height="19" valign="top"><div align="center"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></div></td>
  </tr>
</table>
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>    </tr>
  </table>
</form>
</body>
</html>
