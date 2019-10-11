<?php
session_start();
include('../config/db.php');
extract ($_GET);
$cos_id=$_GET['id'];
if (!isset($_SESSION["username"])) // To check login user if already login then hide login form
{
  include('../config/login_check.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>รายละเอียดหลักสูตร</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">

.style25 {font-size: 11px; font-family: Tahoma; }
.style9 {font-size: 12px}
.style7 {color: #3987FB; font-size: 14px; }
.style26 {
	font-size: 14px;
	font-weight: bold;
	color:#000;
}
.style28 {font-size: 12px; font-weight: bold; }

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
            <table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
             
            </table>

<?php if (isset($message)) { echo $message; }?>
<?php
    include("not_logined.php");
} 
else {
    include("logined.php");
}
?>
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
            <p>
  <?php
$sql_view = "select * from course where cos_id='$cos_id' ";
$result_view = mysqli_query($connection, $sql_view);
while($row=mysqli_fetch_array($result_view))
{
?>
              
            </p>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="24" colspan="4" bgcolor="#333333" style="font-weight: bold; color: #FFF; font-size: 14px;">&nbsp;&nbsp;ข้อมูลหลักสูตร</td>
              </tr>
              <tr>
                <td height="16" style="font-weight: bold; color:#000">&nbsp;</td>
                <td style="font-weight: bold">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="34" height="18" style="font-weight: bold; color:#000;">&nbsp;</td>
                <td width="105" style="font-weight: bold;  color:#000;">ชื่อหลักสูตร</td>
                <td width="410" style="font-weight: bold;  color:#000;"><?php echo $row['cos_name'];?></td>
                <td width="52">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold;  color:#000;" >รหัสหลักสูตร</td>
                <td style="font-weight: bold;  color:#000;"><?php echo $row['cos_id'];?></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold;  color:#000;">หมู่วิชา</td>
                <td style="font-weight: bold;  color:#000;"><?php echo $row['cos_group'];?></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold;  color:#000;">จำนวนชั่วโมง</td>
                <td style="font-weight: bold;  color:#000;"><?php echo $row['cos_time'].' '.'ชั่วโมง';?></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="25" colspan="5" bgcolor="#333333" style="color: #FFF; font-weight: bold; font-size: 14px;">&nbsp;&nbsp;รายละเอียดหลักสูตร</td>
              </tr>
              <tr>
                <td width="129">&nbsp;</td>
                <td width="353">&nbsp;</td>
                <td width="38">&nbsp;</td>
                <td width="38">&nbsp;</td>
                <td width="41">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            
            </table>
            <table width="200" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td width="37">&nbsp;</td>
                <td width="125">&nbsp;</td>
                <td width="30">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><a href="confirm_course.php?id=<?php echo $row['cos_id']; ?>" ><img src="images/register1.jpg" width="200" height="40" border="0"></a></td>
                
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>  
              <?php } ?>
            </table>
          </div>
        </div>



        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
        </div>
        </div></div>
        <?php include('../config/footer.php');?>
    </body>
</html>