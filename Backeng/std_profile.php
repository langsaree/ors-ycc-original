<?
session_start();
include('auth.php');
include('db.php');
extract($_GET);
$id=$id;

?>
<!DOCTYPE html>
<html>
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
    <div class="BodyContent">
    <div class="BorderBorder"><div class="BorderBL"><div></div></div><div class="BorderBR"><div></div></div><div class="BorderTL"></div><div class="BorderTR"><div></div></div>
      <div class="BorderR"><div></div></div><div class="BorderB"><div></div></div><div class="BorderL"></div>
      <div class="Border">

        <div class="Menu">
            <ul>
              <li></li> 
              <li></li> 
              <li></li> <li></li>
              <a href="#" class="MenuButton"><span>หลักสูตร</span></a><a href="#" class="MenuButton"><span>ประชาสัมพันธ์</span> </a>
            </ul>
        </div>
        <div class="Header">
        <div class="HeaderTitle">
          <div align="left"></div>
          <h1><img src="../images/banner.jpg" width="833" height="265" alt="banner"></h1>
        </div>
        </div><div class="Columns"><div class="Column1">
          <div class="Block">
          
            <span class="BlockHeader"><span>Online Register</span></span>
            <table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><span class="style64">ยินดีต้อนรับ ::</span> <? //echo "$id"; ?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
            <br>
            <br>
          </div>
          <div class="Block">
            <span class="BlockHeader"><span>Menu</span></span>
            <div class="BlockContentBorder">
<ul>
                    <li><span class="style7">หลักสูตรที่เปิด</span></li>
                    <li><span class="style7">คู่มือการลงทะเบียน</span></li>
                </ul>
          </div>
        </div>

        </div><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
          <div class="Article">
            <table width="650" height="867" border="0" align="left" cellpadding="0" cellspacing="5">
          <tr>
       <td width="747" height="480" align="right" valign="top"><table width="650" height="430" border="0" align="center" cellpadding="0" cellspacing="5">

    
                <tr>
                  <td height="45" colspan="5"><div align="left">
                      <p class="style55"><span class="style58"> :::<strong> ข้อมูลนักศึกษา &#3623;&#3636;&#3607;&#3618;&#3634;&#3621;&#3633;&#3618;&#3594;&#3640;&#3617;&#3594;&#3609;&#3618;&#3632;&#3621;&#3634;</strong> :::</span></p>
                    <table width="637" height="62" border="0" cellpadding="0" cellspacing="5">
                      <tr>
                        <td
                         width="435" height="30" valign="middle">&nbsp;</td>
                        <td width="99" valign="middle" class="style33"><a href="/std_profile_update.php" class="style67">แก้ไขข้อมูลส่วนตัว</a> </td>
                        <td width="83" valign="middle"><span class="style66"><a href="logout.php">ออกจากระบบ</a></span></td>
                      </tr>
                      <tr>
                        <td height="16" colspan="3" valign="middle"><span class="style56">----------------------------------------------------------------------------------------</span></td>
                        </tr>
                    </table>
                  </div></td>
                </tr>
                <tr>
                <td height="135" rowspan="2">&nbsp;</td>
                  <td width="12" height="135" rowspan="2">&nbsp;</td>
                  <td width="116" height="143"><img src="image/std_infor.png" width="111" height="126" align="top" /></td>
                  <td width="10">&nbsp;</td>
                  <td width="258" height="135" rowspan="2">&nbsp;</td>
                </tr>
                                       
<?
   
//echo $cos_id;
$sql = "select * from student where std_id='$id' ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
?>                             

                <tr>
              <td height="16"><div align="center"><span class="style62">รูปประจำตัว</span></div></td>
                  <td height="16">&nbsp;</td>
                </tr>
                <tr>
                  <td width="224" height="30"><div align="left" class="style46">
                      <div align="right" class="style58">ชื่อล็อกอิน : </div>
                  </div></td>
                  <td colspan="4"><span class="style58"><?= $row[username]; ?></span></td>
                </tr>
                
                <tr>
                  <td height="30"><div align="left" class="style60">
                      <div align="right">รหัสผ่าน :</div>
                  </div></td>
                  <td colspan="4"><?= $row[password]; ?></td>
                </tr>
  
                <tr>
                  <td height="31"><div align="right" class="style60">ชื่อ :</div></td>
                  <td colspan="3"><? echo $row[f_name];?>&nbsp; <? echo $row[name]; ?></td>
                  <td><span class="style60">&#3609;&#3634;&#3617;&#3626;&#3585;&#3640;&#3621;<span class="style60"> :</span><span><? echo $row[s_name];?></span></td>
                </tr>
                <tr>
                  <td height="30"><div align="right" class="style60">เพศ :</div></td>
                  <td colspan="4"><? echo $row[gender];?></td>
                </tr>
                <tr>
                  <td height="26"><div align="right" class="style60">วันเกิด : </div></td>
                  <td colspan="4"><? echo $row[birthday];?></td>
                </tr>
                <tr>
                  <td height="29"><div align="right" class="style61">เลขบัตรประชาชน<span class="style46"> :</span></div></td>
                  <td colspan="4"><? echo $row[std_id];?>   </td>
                </tr>

              </table>
                <div align="center">
                  <table width="650" border="0" align="center" cellpadding="0" cellspacing="5">

                    <tr>
                      <td width="222" height="27"><div align="right" class="style60"></div></td>
                      <td width="138">&nbsp;</td>
                      <td width="102"><div align="right" class="style60"></div></td>
                      <td width="163">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="26"><div align="right" class="style61"><span class="style60">บ้านเลขที่ :</span></div></td>
                      <td><? echo $row[address];?></td>
                      <td><div align="right" class="style60"><span class="style47">เขต/อำเภอ<span class="style46"> :</span></span></div></td>
                      <td><? echo $row[city];?></td>
                    </tr>
                    <tr>
                      <td height="27"><div align="right" class="style47"><span class="style60">จังหวัด :</span></div></td>
                      <td><? echo $row[province];?></td>
                      <td><div align="right" class="style60">รหัสไปรษณีย์ :</div></td>
                      <td><? echo $row[postalcode];?></td>
                    </tr>
                    <tr>
                      <td height="26"><div align="right"><span class="style60">โทรศัพท์ :</span></div></td>
                      <td>&nbsp;</td>
                      <td><div align="right" class="style60">โทรสาร :</div></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="27"><div align="right" class="style60">E-mail :</div></td>
                      <td><? echo $row[email];?></td>
                      <td><div align="right" class="style60">มือถือ :</div></td>
                      <td><? echo $row[phone];?></td>
                    </tr>
                    <tr>
                      <td height="28"><div align="right" class="style60"></div></td>
                      <td>&nbsp;</td>
                      <td></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                  <table width="650" border="0" align="center" cellpadding="0" cellspacing="5">

                    <tr>
                      <td width="222" height="26"><div align="right" class="style54"><span class="style60">ขณะนี้ท่านประกอบอาชีพอยู่หรือไม่ :</span></div></td>
                      <td width="413">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="29"><div align="right" class="style60">ลักษณะอาชีพที่ท่านประกอบอยู่ :</div></td>
                      <td><? echo $row[job];?><? } ?>
</td>
                    </tr>
                    <tr>
                      <td colspan="2"></td>
                    </tr>
                    <tr>
                      <td colspan="2"><span class="style56">-----------------------------------------------------------------------------------------</span></td>
                    </tr>
                  
                  </table>
                </div>
              <p align="left">&nbsp;</p>              </td>
          </tr>
       
        </table>
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