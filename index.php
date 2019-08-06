<?php
session_start();
include 'db.php';
if (!isset($_SESSION["username"])) // To check login user if already login then hide login form
{
include('login_check.php');
    ?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>ระบบลงทะเบียนออนไลน์</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />

   

</head>
<body>
    <div class="BodyContent">
      <div class="BorderBorder">
        <div class="ActiveMenuButtonInput">
          <div></div>
        </div>
        <div class="BorderBR">
          <div></div>
        </div>
        <div class="BorderTL"></div>
        <div class="BorderTR">
          <div></div>
        </div>
        <div class="BorderR">
          <div></div>
        </div>
        <div class="BorderB">
          <div></div>
        </div>
        <div class="BorderL"></div>
        <div class="Border">

          <div class="Menu">
            <ul>
              <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a><a href="college.php" class="MenuButton">
                <span>วิทยาลัย</span></a><a href="course.php" class="MenuButton"><span>หลักสูตร</span></a><a
                href="ann.php" class="MenuButton"><span>ประชาสัมพันธ์</span> </a><a href="gallary.php"
                class="MenuButton"><span>ภาพกิจกรรม</span></a><a href="contact_us.php" class="MenuButton"><span>
                  ติดต่อเรา</span></a>
              <input name="text" type="text" style="width:120px" />
              <span class="ButtonInput"><span>
                  <input type="button" value="Search" />
                </span></span>
            </ul>
          </div>
          <div class="Header">
            <div class="HeaderTitle">
              <div align="left"><img src="images/banner.jpg" width="836" height="250"></div>
              <h1>&nbsp;</h1>
            </div>
          </div>
          <div class="Columns">
            <div class="Column1">

              <div class="Block">

                <span class="BlockHeader"><span>Online Register</span></span>
                <table width="150" border="0" align="left" cellpadding="0" cellspacing="0">

                </table>


<?php
if (isset($message)) {
        echo $message;
    }
    ?>



	<?php
######################################   To show login form if user do not login ###################################

    echo '<form action="index.php" method="post">
		<table width="150" border="5" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td></td>
              </tr>
              <tr>
                <td><div align="left"><span class="style9">ล็อกอิน::</span></div></td>
              </tr>
            </table>
		<table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td><label>
                  <input type="text" name="username" />
                </label></td>
              </tr>
            </table>

    <table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td><span class="style9">รหัสผ่าน::</span></td>
              </tr>
            </table>
            <p>&nbsp;</p>
    <table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td><input type="password" name="password" /></td>
              </tr>
            </table>
    <table width="161" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="72"><label for="Submit"></label>
                  <input type="submit" name="ok" id="ok" value="เข้าสู่ระบบ" /></td>
                <td width="7">&nbsp;</td>
                <td width="175"><label><a href="password_recovery.php">ลืมรหัสผ่าน?</a></label></td>
              </tr>
              <tr>

              </tr>
            </table>
            </form>

              <br><br>

            </p>
            <p>&nbsp;</p>
        <table width="150" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><div align="center"><a href="register.php"><img src="images/register.gif"  width="130" height="35"></a></div></td>
                  </tr>
                </table>';
} 

else {
#########################   IF user already logined display wellcome below  #############################
    echo '
		<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>ระบบลงทะเบียนออนไลน์</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
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

            </table>';


    echo '<br><span class="style7">ยินดีต้อนรับ ::</span>';
    echo '<span class="style26 "> ' .$_SESSION["username"]. ' </span><br>';
    echo '<span class="style7"><a href="std_profile.php">ข้อมูลส่วนตัว</a></span><br>';
    echo '<span class="style7"><a href="logout.php">ออกจากระบบ</a><span class="style7"><br>';
}
?>
            <br>
            </div>
            <div class="Block">

              <span class="BlockHeader"><span>Menu</span></span>
              <div class="BlockContentBorder">

                <ul>
                  <li><span class="style7">หลักสูตรที่เปิด</span></li>
                  <li><span class="style7">คู่มือการลงทะเบียน</span><br>
                  </li>
                </ul>
              </div>
            </div>

          </div>
          <div class="MainColumn">
            <div class="ArticleBorder">
              <div class="ArticleBL">
                <div></div>
              </div>
              <div class="ArticleBR">
                <div></div>
              </div>
              <div class="ArticleTL"></div>
              <div class="ArticleTR">
                <div></div>
              </div>
              <div class="ArticleT"></div>
              <div class="ArticleR">
                <div></div>
              </div>
              <div class="ArticleB">
                <div></div>
              </div>
              <div class="ArticleL"></div>

              <div class="Article">
                <br>
                <table width="601" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="52">&nbsp;</td>
                    <td width="129">&nbsp;</td>
                    <td width="420">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="26" colspan="3"
                      style="color: #333; font-size: 16px; font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-weight: bold;">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                        class="Article">วิชาที่เปิดสอนประจำเดือน</span>มกราคม 2554</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>

<?php
$sql_view = "select * from course where status='1' ";
$result_view = mysqli_query($connection, $sql_view);
while($row=mysqli_fetch_array($result_view)){
?>

                <br>
                <table width="570" border="0" align="center" cellpadding="0" cellspacing="2">

                  <tr>
                    <td width="93" rowspan="5" valign="top"><img src="images/untitled.jpg" alt="" width="78"
                        height="83" /></td>
                    <td height="19" colspan="3" valign="top">
                      <?php echo '<span style="color:red; font-size:15px;  font-weight: bolder;">'.'หมู่วิชา'.$row["cos_group"].'</span>' ?>
                    </td>
                  </tr>
                  <tr>
                    <td width="21" valign="top">&nbsp;</td>
                    <td height="19" colspan="2" valign="top"><span class="o">รหัสวิชา ::&nbsp;</span>
                      <?php echo $row["cos_id"]?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2"><span class="o">ชื่อวิชา :: &nbsp;</span> <?php echo $row["cos_name"]?></td>
                  </tr>

                  <tr>
                    <td style="color: #333">&nbsp;</td>
                    <td> <a href="course_down.php?id=<?php echo $row["cos_id"]?>"
                        style="color: #333; text-decoration: none">ดาวน์โหลดผังการเรียน </a> </td>
                    <td width="112"></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><a href="course_detail.php?id=<?php echo $row["cos_id"] ?>" style="color: #333; text-decoration: none"">ดูรายละเอียด</a></td>
                <td height=" 16">&nbsp;</td>
                  </tr>
                      <?php  } ?>
                </table>
                <p align="center">&nbsp;</p>
              </div>
            </div>



            <div class="ArticleBorder">
              <div class="ArticleBL">
                <div></div>
              </div>
              <div class="ArticleBR">
                <div></div>
              </div>
              <div class="ArticleTL"></div>
              <div class="ArticleTR">
                <div></div>
              </div>
              <div class="ArticleT"></div>
              <div class="ArticleR">
                <div></div>
              </div>
              <div class="ArticleB">
                <div></div>
              </div>
              <div class="ArticleL"></div>
            </div>
          </div>
        </div>
        <div class="Footer"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College
            Design by : Bukhoree | Kholed | Ihsan </span></div>
      </div>
    </div>
</body>

</html>