<?php
session_start();
include('db.php');
if(!isset($_SESSION["username"]))
	{
    include('login_check.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>ติดต่อผู้ดูแลระบบ</title>
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">

.style25 {font-size: 11px; font-family: Tahoma; }
.style7 {color: #3987FB; font-size: 14px; }
.style30 {
	color: #3987FB;
	font-size: 16px;
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

    <title>ระบบลงทะเบียนออนไลน์</title>
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
.style30 {
	color: #3987FB;
	font-size: 16px;
	font-weight: bold;
}
.style28 {font-size: 12px; font-weight: bold; }
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
            <table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
             
            </table>


';
		echo '<br><span class="style7">ยินดีต้อนรับ ::</span>'; 
		echo '<span class="style26 "> '.$_SESSION["username"].' </span><br>';
		echo '<span class="style7"><a href="std_profile.php" style="color: #3987FB; text-decoration: none">ข้อมูลส่วนตัว</a></span><br>';
		echo '<span class="style7"><a href="logout.php" style="color: #3987FB; text-decoration: none">ออกจากระบบ</a></span ><br>';
		// $user=$username;
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
 <?php
// session_start();
$c_error ="";
if(isset($_POST['action'])){
  if($_POST['verifycode'] !=$_SESSION['total'] ){
    $c_error='<span style="color:red">Verify Code ไม่ถูกต้อง โปรดใสใหม่อีกครั้ง</span>';
      // echo " Verify Code ไม่ถูกต้อง โปรดใสใหม่อีกครั้ง<br>";
  }else{
     $headers  = "MIME-Version: 1.0\r\n";
     $headers .= "Content-type: text/html; charset=utf-8\r\n";
     $headers .= "From:  ".$_POST['name']." <".$_POST['email'].">\r\n";

     $msgs .= " จากคุณ  ".$_POST['name'].'<br>';
     $msgs .= " โทร  ".$_POST['tel'].'<br>';
     $msgs .= "ข้อความ<br>".$_POST['msg'];


     $mailto = "langsaree@gmail.com"; # อีเมล์ผู้รับ
     if(mail($mailto, $_POST['subj'], $msgs, $headers)){
     echo "ส่งสำเร็จ";
     }else{
     echo "ผิดพลาด";
     }
	 
     exit();
  }
}
?>
<?php
$num1 = rand(0,10);
$num2 = rand(0,10);
$_SESSION['total'] = ($num1 + $num2);
?>      
          <div class="Article">
            <form id="form1" name="form1" method="post" action="">
          
              <table width="600" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><span class="style30">ติดต่อผู้ดูแลระบบ </span></td>
      </tr>
    <tr>
      <td width="32">&nbsp;</td>
      <td width="96">&nbsp;</td>
      <td width="259">&nbsp;</td>
      <td width="187">&nbsp;</td>
    </tr>

<?php
$sql = "select * from student where username='$username' ";
$result = mysqli_query($connection, $sql); 
while($row=mysqli_fetch_array($result))
{

?> 
    <tr>
      <td>&nbsp;</td>
      <td><span class="style5">ชื่อผู้ใช้ : </span></td>
      <td><input type='text' name='name' value="<?php $row["username"];?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="style5">อีเมล์ :</span></td>
      <td><input type='text' name='email' value="<?php $row["email"];?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="style5">เบอร์โทรศัพท์ :</span></td>
      <td><input type='text' name='tel' value="<?php $row["phone"];?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <?php } ?>
    <tr>
      <td>&nbsp;</td>
      <td><span class="style5">ชื่อเรื่อง :</span></td>
      <td><input type='text' name='subj' /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td height="84" valign="top"><span class="style5">ข้อความ :</span></td>
      <td><textarea name="msg" rows="4" cols="30"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="style5">Code :
        <?php echo '<span style="color:red;font-size:24"> '.$num1.'</span>'; ?>
        <?php echo '<span style="color:green">+</span>';?>
        <?php echo '<span style="color:red"> '.$num2.'</span>';?>
      </span></td>
    <td colspan="2"><input type='text' name='verifycode' />
          <input type='hidden' name='action' value='1' />
          <?php echo $c_error; ?> </td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type='submit' value='ส่งข้อความ' /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
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