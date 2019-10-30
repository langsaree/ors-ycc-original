<?php
session_start();
$username = $_SESSION['username'];
include('auth.php');
//end of check session
include('../config/db.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>แสดงรายชื่ออาจารย์ผู้สอน</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="images/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">

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
              <a href="##" class="MenuButton"><span>หน้าหลัก</span></a>
              <a href="##" class="MenuButton">  <span>วิทยาลัย</span></a>
              <a href="##" class="MenuButton"><span>หลักสูตร</span></a>
              <a href="##" class="MenuButton"><span>ประชาสัมพันธ์</span> </a>
              <a href="##" class="MenuButton"><span>ภาพกิจกรรม</span></a>
              <a href="##" class="MenuButton"><span> ติดต่อเรา</span></a>
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
                <td width="197"><?php echo '<br><span class="style7">ยินดีต้อนรับ ::</span>'; ?><?php echo '<span class="style26 "> '.$_SESSION["username"].' </span><br>'; ?></td>
              </tr>
              <tr>
                <td><?php echo '<span class="style7"><a href="std_profile.php">ข้อมูลส่วนตัว</a></span><br>'; ?></td>
              </tr>
              <tr>
                <td><?php echo '<span class="style7"><a href="std_view_lecturer.php">อาจารย์ผู้สอน</a></span><br>'; ?></td>
              </tr>
              <tr>
              <td style="text-align:left"><strong><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>ออกจากระบบ</a></strong></td>
              </tr>
              <tr>
                <td></td>
              </tr>
            </table>


            <br>
          </div>
        <div class="Block">
            <span class="BlockHeader"><span>เมนูส่วนตัว</span></span>
            <div class="BlockContentBorder">
            <li><span class="style7"><a href="index.php"
					style="color: #3987FB; text-decoration: none">หลักสูตรที่เปิด</a></span>
					</li>
					<li><span class="style7"><a href="manual.pdf"
					style="color: #3987FB; text-decoration: none">คู่มือการลงทะเบียน</a></span>
				</li>
          </div>
        </div>
        </div><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
       
          <div class="Article">
            <br>
            <table width="650">
              <tr>
                  <td width="637" class="style56">---------------------------------------------------รายชื่ออาจารย์ผู้สอนทั้งหมด-----------------------------------------------------</td>
              </tr>
            </table>
            
            <table width="650" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="12">&nbsp;</td>
                <td width="131" bgcolor="#00ffb3" class="midle">ลำดับ</td>
                <td width="152" bgcolor="#00ffb3" class="midle">รหัสอาจารย์ผู้สอน</td>
                <td width="152" bgcolor="#00ffb3" class="midle">ชื่อ-นามสกุล</td>
                <td width="319" bgcolor="#00ffb3" class="midle">เบอร์โทรติดต่อ</td>
                <td width="319" bgcolor="#00ffb3" class="midle">อีเมล</td>
                <td width="14">&nbsp;</td>
                <td width="18">&nbsp;</td>
              </tr>
       <?php 
			include('../config/db.php');
			$sql = "select* from lecturer";
			
            $result=mysqli_query($connection, $sql);
            while($row=mysqli_fetch_array($result)){
			    	$lec_id=$row['lec_id'];
			    	$sql2 ="select * from lecturer where lec_id='$lec_id'";
			    	$result2=mysqli_query($connection, $sql2);
			    	while($row2=mysqli_fetch_array($result2)){
		    ?>
              <tr>
                <td>&nbsp;</td>
                <td><?php echo $row['lec_id'] ?></td>
                <td><?php echo $row2['lec_Teach_id'] ?>
                <td><?php echo $row2['lec_name'] ?>
                

                &nbsp;&nbsp;&nbsp;              
                <td><?php echo $row2['lec_tel'] ?></td>
                <td><?php echo $row['lec_email'] ?></td>

                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <?php }}?>
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
        </div>

</div>
<?php include('../config/footer.php');?>
</body>
</html>