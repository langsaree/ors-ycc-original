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

    <title>ภาพกิจกรรม</title>
    <script src="js/jquery.min.js"></script>
        <script src="js/galleria.js"></script>
        <style>
            html,body{background:#333}
            .content{color:#eee;font:14px/1.4 "helvetica neue", arial,sans-serif;width:620px;margin:20px auto}
            h1{line-height:1.1;letter-spacing:-1px;}
            a {color:#fff;}
            #galleria{height:400px;}
        </style>
<link rel="stylesheet" href="style.css" />
    <style type="text/css">
.style25 {font-size: 11px; font-family: Tahoma; }
.style7 {color: #3987FB; font-size: 14px; }
.style30 {color: #666666}
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

<?php if (isset($message)) { echo $message; } ?>

	<?php echo	'<form action="" method="post">
		<table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
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
                </table>
				';
		}
		else
		{
		echo '
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>ภาพกิจกรรม</title>
    <script src="js/jquery.min.js"></script>
        <script src="js/galleria.js"></script>
        <style>
            html,body{background:#333}
            .content{color:#eee;font:14px/1.4 "helvetica neue", arial,sans-serif;width:620px;margin:20px auto}
            h1{line-height:1.1;letter-spacing:-1px;}
            a {color:#fff;}
            #galleria{height:400px;}
        </style>
<link rel="stylesheet" href="style.css" />
    <style type="text/css">

.style25 {font-size: 11px; font-family: Tahoma; }
.style7 {color: #3987FB; font-size: 14px; }
.style30 {color: #666666}
.style26 {
	font-size: 14px;
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


';
		echo '<br><span class="style7">ยินดีต้อนรับ ::</span>'; 
		echo '<span class="style26 "> '.$username.' </span><br>';
		echo '<span class="style7"><a href="std_profile.php" style="color: #3987FB; text-decoration: none">ข้อมูลส่วนตัว</a></span><br>';
		echo '<span class="style7"><a href="logout.php" style="color: #3987FB; text-decoration: none">ออกจากระบบ</a></span ><br>';
		
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
            <p align="center">
  <div class="content">
        <h1 class="style30">ภาพกิจกรรม</h1>
        
        <div id="galleria">
            <img src="http://www.ycc.ac.th/images/stories/pb058590.jpg" >
            
            <img src="http://www.ycc.ac.th/images/stories/imga4838.jpg">
            <img  src="http://www.ycc.ac.th/images/stories/imga4900.jpg">
            <img src="http://www.ycc.ac.th/images/stories/pb058615.jpg">
            <img src="http://www.ycc.ac.th/images/stories/imga4884.jpg">              </div>
    </div>
    <script>
    // Load the classic theme
    Galleria.loadTheme('galleria.classic.js');
    // Initialize Galleria
    $('#galleria').galleria();
    </script>
    
            

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

