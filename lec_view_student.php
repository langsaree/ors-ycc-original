<?php
session_start();
if(!session_is_registered(lec_user)){header("location:index.php");}
if(session_is_registered(lec_user)){
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>แสดงรายชื่อนักศึกษา</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
<!--
.style25 {font-size: 11px; font-family: Tahoma; }
.style9 {font-size: 12px}
.style7 {color: #3987FB; font-size: 14px; }
.style26 {
	font-size: 14px;
	font-weight: bold;
}
.style28 {font-size: 12px; font-weight: bold; }
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #CCCCCC; }
.midle {
	font-size: 12px;
	font-weight: bold;
	
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
              <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a><a href="college.php" class="MenuButton">  <span>วิทยาลัย</span></a><a href="course.php" class="MenuButton"><span>หลักสูตร</span></a><a href="ann.php" class="MenuButton"><span>ประชาสัมพันธ์</span> </a><a href="gallary.php" class="MenuButton"><span>ภาพกิจกรรม</span></a><a href="contact_us.php" class="MenuButton"><span> ติดต่อเรา</span></a>
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
           <table width="150" border="0" align="left" cellpadding="0" cellspacing="3">
              <tr>
                <td width="197"><? echo '<br><span class="style7">ยินดีต้อนรับ ::</span>'; ?><? echo '<span class="style26 "> '.$_SESSION[username].' </span><br>'; ?></td>
              </tr>
              <tr>
                <td><? echo '<span class="style7"><a href="lec_profile.php" style="color: #3987FB; text-decoration: none">ดูข้อมูลส่วนตัว</a></span ><br>'; ?></td>
              </tr>
              <tr>
                <td><? echo '<span class="style7"><a href="lec_profile_update.php" style="color: #3987FB; text-decoration: none">แก้ไขข้อมูลส่วนตัว</a></span ><br>'; ?></td>
              </tr>
              <tr>
                <td><? echo '<span class="style7"><a href="logout.php" style="color: #3987FB; text-decoration: none">ออกจากระบบ</a></span ><br>'; ?></td>
              </tr>
              <tr>
                <td></td>
              </tr>
            </table>
            <? } ?>

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
        <div class="Block">
            <span class="BlockHeader"><span>เมนูส่วนตัว</span></span>
            <div class="BlockContentBorder">
                <ul>
                    <li><span class="style7"><a href="lec_view_cos.php" style="color: #3987FB; text-decoration: none">แสดงข้อมูลวิชา</a></span></li>
                    <li><span class="style7"><a href="lec_view_student.php" style="color: #3987FB; text-decoration: none">แสดงรายชื่อนักศึกษา</a></span></li>
                </ul>
          </div>
        </div>
        </div><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
       
          <div class="Article">
            <br>
            <table width="650">
              <tr>
                  <td width="637" class="style56">------------------------------------------------------------------------------------------</td>
              </tr>
            </table>
            
            <table width="650" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="12">&nbsp;</td>
                <td width="131" bgcolor="#FF9933" class="midle">รหัสประจำตัวนักศึกษา</td>
                <td width="152" bgcolor="#FF9933" class="midle">ชื่อ-นามสกุล</td>
                <td width="319" bgcolor="#FF9933" class="midle">วิชาที่ลงทะเบียน</td>
                <td width="12">&nbsp;</td>
                <td width="15">&nbsp;</td>
              </tr>
              <? 
			include('db.php');
	        //$sql="select * from lecture,course where lecture.cos_id=course.cos_id and username='$lec_user' ";
			//$sql = "select * from register,lecture,course where lecture.lec_id=register.lec_id and  username='$username' and course.cos_id=register.cos_id";
			$sql = "select * from register,lecture,course where lecture.lec_id=register.lec_id and username='$username' and course.cos_id=register.cos_id";
			
            $result=mysql_query($sql);
            while($row=mysql_fetch_array($result)){
				$std=$row[std_id];
				$sql2 ="select * from student where std_id='$std'";
				$result2=mysql_query($sql2);
				while($row2=mysql_fetch_array($result2)){
		    ?>
              <tr>
                <td>&nbsp;</td>
                <td><?=$row[std_id] ?></td>
                <td><?=$row2[name] ?>
&nbsp;&nbsp;&nbsp;<?=$row2[s_name] ?></td>
                <td><?=$row[cos_name] ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <? }}?>
            </table>
            
            <table width="650">
              <tr>
                <td width="637" class="style56">------------------------------------------------------------------------------------------</td>
              </tr>
            </table>
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