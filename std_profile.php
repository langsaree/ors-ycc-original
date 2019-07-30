<?php
session_start();
if(!isset($_SESSION["username"])){header("location:index.php");}
//end of check session
$username = $_SESSION["username"];
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>ข้อมูลนักศึกษา </title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">

.style25 {font-size: 11px; font-family: Tahoma; }
.style7 {color: #3987FB; font-size: 14px; }
.style46 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; }
.style47 {font-size: 13px}
.style54 {font-size: 14px}
.style55 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #CCCCCC; }
.style58 {color: #333333}
.style60 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #333333;
	font-weight: bold;
}
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
              <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a><a href="#" class="MenuButton">  <span>วิทยาลัย</span></a><a href="#" class="MenuButton"><span>หลักสูตร</span></a><a href="#" class="MenuButton"><span>ประชาสัมพันธ์</span> </a><a href="#" class="MenuButton"><span>ภาพกิจกรรม</span></a><a href="#" class="MenuButton"><span> ติดต่อเรา</span></a>
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
            <table width="163" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td width="163">&nbsp;</td>
              </tr>
              <tr>
                <td><span class="style64"><span style="color: #2192CF">ยินดีต้อนรับ</span> ::</span> <?php echo  '<span style="font-weight:bold; font-size:13px"> '.$username.'</span>'; ?></td>
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
                    <li><span class="style7"><a href="index.php" style="color: #3987FB; text-decoration: none">หลักสูตรที่เปิด</a></span></li>
                    <li><span class="style7"><a href="manual.pdf" style="color: #3987FB; text-decoration: none">คู่มือการลงทะเบียน</a></span></li>
                </ul>
          </div>
        </div>

        </div><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
       
               <div class="Article">
            <table width="650" height="961" border="0" align="center" cellpadding="0" cellspacing="5">
          <tr>
          


       <td width="659" height="951" align="right" valign="top"><div align="left">
         <p class="style55"><span class="style58"> :::<strong> ข้อมูลนักศึกษา &#3623;&#3636;&#3607;&#3618;&#3634;&#3621;&#3633;&#3618;&#3594;&#3640;&#3617;&#3594;&#3609;&#3618;&#3632;&#3621;&#3634;</strong> :::</span><br>
         </p>
       </div>
 <?php 
include ('db.php');
$sql = "select * from student where username='$username' ";
$result = mysqli_query($connection, $sql); 
while($row=mysqli_fetch_array($result))
{
  
?>       
       
         <table width="637" height="62" border="0" cellpadding="0" cellspacing="5">
           <tr>
             <td
 
                         width="435" height="30" valign="middle">&nbsp;</td>
             <td width="99" valign="middle" class="style33"><a href="profile_update.php?id= <?php echo $row["std_id"];?>" class="style67"  style="text-decoration: none">แก้ไขข้อมูลส่วนตัว</a></td>
             <td width="83" valign="middle"><span class="style66"><a href="logout.php"  style="text-decoration: none">ออกจากระบบ</a></span></td>
           </tr>
           <tr>
             <td height="16" colspan="3" valign="middle"><span class="style56">----------------------------------------------------------------------------------------</span></td>
           </tr>
       </table>
         <table width="600" border="0" align="center" cellpadding="0" cellspacing="2">
           <tr>
            
             <td width="229">&nbsp;</td>
             <td width="158">&nbsp;</td>
             <td width="221">&nbsp;</td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td><p><img src="image/std_infor.png" width="111" height="126" align="top" /><br>
               <span class="style62">รูปประจำตัว</span></p></td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
       </table>
         <legend></legend>
<div align="center"></div>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
                    <td width="27" height="18">&nbsp;</td>
                    <td width="196" style="text-align: right; font-weight: bold; color: #333;" >ชื่อล็อกอิน :</span></td>
                    <td colspan="4"><?php echo $row["username"]; ?>                    
                  </tr>
                  <tr>
                    <td height="18" style="text-align: right">&nbsp;</td>
                    <td style="text-align: right; color: #333; font-weight: bold;">รหัสผ่าน : </td>
                    <td colspan="4"><?php echo $row["password"]; ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right; font-weight: bold; color: #333;">&nbsp;</td>
                    <td width="298">&nbsp;</td>
                    <td width="12">&nbsp;</td>
                    <td width="9">&nbsp;</td>
                    <td width="23">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right; font-weight: bold; color: #333;">ชื่อ :</span></span></td>
                    <td colspan="4"><?php echo $row["f_name"];?>&nbsp;&nbsp;<?php echo $row["name"]; ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60" style="font-weight: bold">&#3609;&#3634;&#3617;&#3626;&#3585;&#3640;&#3621; : </span></td>
                    <td><?php echo $row["s_name"];?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60">สัญชาติ :</span></td>
                    <td><?php echo $row["nation"];?></td>
                    <td class="style60">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td >&nbsp;</td>
                    <td style="text-align: right"><span class="style60">เชื้อชาติ : </span></td>
                    <td><?php echo $row["origin"];?></span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="19" >&nbsp;</td>
                    <td class="style60" style="text-align: right">ศาสนา :</td>
                    <td><?php echo $row["religion"];?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="19" >&nbsp;</td>
                    <td style="text-align: right"><span class="style60">เพศ :</span></td>
                    <td><?php echo $row["gender"];?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60">วันเกิด : </span></td>
                    <td><?php echo $row["birthday"];?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span style="font-weight: bold; text-align: right;"><span class="style61">เลขบัตรประชาชน<span class="style46"> :</span></span></span></td>
                    <td><?php echo $row["std_id"];?></td>
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
                    <td colspan="4"><?php echo $row["address"];?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style47"><span class="style60">เขต/อำเภอ<span class="style46"> :</span></span></span></td>
                    <td><?php echo $row["city"];?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60" style="font-weight: bold">จังหวัด :</span></td>
                    <td><?php echo $row["province"];?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60">รหัสไปรษณีย์ : </span></td>
                    <td><?php echo $row["postalcode"];?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60">โทรศัพท์ :</span></td>
                    <td><?php echo $row["phone"];?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60" style="font-weight: bold">E-mail :</span></td>
                    <td><?php echo $row["email"];?></td>
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
                    <td><?php echo $row["edulevel"];?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td class="style60" style="text-align: right">จากสถานศึกษา :</td>
                    <td><?php echo $row["eduplace"];?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td class="style60" style="text-align: right">จังหวัด :</td>
                    <td><?php echo $row["eduprovince"];?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td class="style60" style="text-align: right">ปีการศึกษา :</td>
                    <td><?php echo $row["eduyear"];?></td>
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
                    <td><?php echo $row["job"];?></td>
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
                  <?php } ?>
                 
              </table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="2">
                  <tr>
                    <td width="613"><span class="style56" style="text-align: center">&nbsp;&nbsp;----------------------------------------------------------------------------------------</span></td>
                  </tr>
                </table>
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