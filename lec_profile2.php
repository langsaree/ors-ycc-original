<?
<?php
session_start();
include 'class/auth.class.php';
$auth = new Auth;
$db = new Db;
$connection = $db->connect();
if(!isset($_SESSION["lec_user"])){header("location:index.php");}
if(isset($_SESSION["lec_user"])){
  $username=$_SESSION["lec_user"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>:::  ข้อมูลอาจารย์  :::</title>
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
<!--
.style25 {font-size: 11px; font-family: Tahoma; }
.style9 {font-size: 12px}
.style7 {color: #3987FB; font-size: 14px; }
.style45 {font-family: Verdana, Arial, Helvetica, sans-serif}
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
.style26 {
	font-size: 14px;
	font-weight: bold;
}
.style62 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #333333; }
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
              <a href="#" class="MenuButton"><span>หน้าหลัก</span></a><a href="#" class="MenuButton">  <span>วิทยาลัย</span></a><a href="#" class="MenuButton"><span>หลักสูตร</span></a><a href="#" class="MenuButton"><span>ประชาสัมพันธ์</span> </a><a href="#" class="MenuButton"><span>ภาพกิจกรรม</span></a><a href="#" class="MenuButton"><span> ติดต่อเรา</span></a>
                 <input name="text" type="text" style="width:120px" />
                 <span class="ButtonInput"><span>
                 <input type="button" value="Search" />
                 </span></span></ul>
        </div>
        <div class="Header">
        <div class="HeaderTitle">
          <div align="left"><img src="images/banner.jpg" width="833" height="265"></div>
          <h1>&nbsp;</h1>
        </div>
        </div><div class="Columns"><div class="Column1">
          <div class="Block">
 <div class="Block">
          
            <span class="BlockHeader"><span>Online Register</span></span>
            <table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td width="197"><? echo '<br><span class="style7">ยินดีต้อนรับ ::</span>'; ?><? echo '<span class="style26 "> '.$_SESSION[username].' </span><br>'; ?></td>
              </tr>
              <tr>
                <td><? echo '<span class="style7"><a href="logout.php" style="color: #3987FB; text-decoration: none">ออกจากระบบ</a></span ><br>'; ?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td></td>
              </tr>
            </table>
            <? } ?>
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
        </div>            </p>
            <br>
          </div>
          
          <div class="Block">
            <span class="BlockHeader"><span>เมนูส่วนตัว</span></span>
            <div class="BlockContentBorder">
                <ul>
                    <li><span class="style7">แสดงข้อมูลวิชา</span></li>
                    <li><span class="style7"><a href="view_registered.php">แสดงรายชื่อนักศึกษา</a></span></li>
                </ul>
          </div>
        </div>

        </div><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
       
          <div class="Article">
            <table width="600">
              <tr>
                  <td width="124">&nbsp;</td>
                  <td width="352">&nbsp;</td>
                  <td width="108">&nbsp;</td>
              </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
            </table>
              <table width="600" align="center">
                <tr>
                  <td width="11">&nbsp;</td>
                  <td width="196">&nbsp;</td>
                  <td width="91">&nbsp;</td>
                  <td width="243">&nbsp;</td>
                  <td width="9">&nbsp;</td>
                  <td width="22">&nbsp;</td>
                </tr>
                <tr>
                 <?php
			// include('db.php');
	        //$sql="select * from lecture,course where lecture.cos_id=course.cos_id and username='$lec_user' ";
			$sql = "select * from lecture,course where course.lec_id=lecture.lec_id and username='$username'";
            $result=mysqli_query($connection, $sql);//????????
            ($row=mysqli_fetch_array($result))//????????
		    ?>
                  <td width="26">&nbsp;</td>
                  <td width="124" rowspan="6"><img src="image/lecturer.png" width="124" height="120"></td>
                  <td width="140" class="main" style="text-align: right">รหัสประจำตัว :</td>
                  <td width="321" class="maintext"><?php echo $row["lec_id"];?></td>
                  <td width="15">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main" style="text-align: right">ชื่อ :</td>
                  <td class="maintext"><?php echo $row["lec_name"];?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main" style="text-align: right">แผนกวิชา :</td>
                  <td class="maintext"><?php echo $row["cos_name"];?></td>
                  <td>&nbsp;</td>
                </tr>
                                <tr>
                  <td>&nbsp;</td>
                  <td class="main" style="text-align: right">ภาควิชา :</td>
                  <td class="maintext"><?php echo $row["cos_group"];?></td>
                  <td>&nbsp;</td>
                </tr>

                <tr>
                  <td>&nbsp;</td>
                  <td class="main" style="text-align: right">Email :</td>
                  <td class="maintext"><?php echo $row["lec_email"];?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main" style="text-align: right">Phone :</td>
                  <td class="maintext"><?php echo $row["lec_tel"];?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td class="main" style="text-align: right">Username :</td>
                  <td class="maintext"><?php echo $row["username"];?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td class="main" style="text-align: right">Password :</td>
                  <td class="maintext"><?php echo $row["password"];?></td>
                  <td>&nbsp;</td>
                </tr>

                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
            </table>
            <table width="645" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td>&nbsp;<span class="style56">&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------------------</span></td>
              </tr>
            </table>
            <br>
          </div>
        </div>

        <?php include "./template/footer.php"; ?>

    </body>
</html>