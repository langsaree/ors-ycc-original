<?php
include('db.php');
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

if (isset($_POST['ok'])) {
    if (!empty($_POST['username'] && !empty($_POST['password']))) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $sql = "SELECT * FROM student WHERE username='$username' and password='$password'";
        $result = mysqli_query($connection, $sql);

        $count = mysqli_num_rows($result);
        
        if ($count == 1) {

            $_SESSION['username'] = $username;
            ?>
            <script>
				    	window.alert('เข้าสู่ระบบสำเร็จ ยินดีต้อนรับ!');
				    	window.location.href="index.php";
            </script>
            <?php
        } else {
   
            $message = "ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบข้อมูลด้วย";
        }

        $sql1 = "SELECT * FROM lecturer WHERE username='$username' and password='$password'";
        $result1 = mysqli_query($connection, $sql1);

        $count1 = mysqli_num_rows($result1);
  
        if ($count1 == 1) {

            $_SESSION['username'] = $username;
            header("Location:lec_profile.php");
        } else {

            $message = "ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบข้อมูลด้วย";

        }
    } else if (empty($_POST['username']) && empty($_POST['password'])) {
        $message = "กรุณากรอกชื่อผู้ใช้และรหัสผ่านของท่านด้วย";
    } else if (empty($_POST['username']) && !empty($_POST['password'])) {
        $message = "กรุณากรอกชื่อผู้ใช้ของท่านด้วย";
    } else if (!empty($_POST['username']) && empty($_POST['password'])) {
        $message = "กรุณากรอกรหัสผ่านของท่านด้วย";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>ระบบลงทะเบียนออนไลน์</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
</head>
<body>
    <div class="BodyContent">
      <div class="BorderBorder">
        <div class="ActiveMenu">
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
              <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a>
			  <a href="college.php" class="MenuButton"><span>วิทยาลัย</span></a>
			  <a href="course.php" class="MenuButton"><span>หลักสูตร</span></a>
			  <a href="ann.php" class="MenuButton"><span>ประชาสัมพันธ์</span> </a>
		      <a href="gallary.php"class="MenuButton"><span>ภาพกิจกรรม</span></a>
			  <a href="contact_us.php" class="MenuButton"><span>ติดต่อเรา</span></a>
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
             	<?php if (!empty($message)) {
                            echo "<span style=\"color:red\">$message</span>";
                        }
                 ?>

<?php
if (!isset($_SESSION['username']) || !isset($_SESSION['username']))
    {
######################################   To show login form if user do not login ###################################

    echo '<form action="" method="post">
		<table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td></td>
              </tr>
              <tr>
               <div align="left">
               <td><span class="style9">ล็อกอิน::</span></div></td>
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


				<?php '; ?>

				<?php } else { ?>

					<?php //  remove the HTML code of login ?>

					<?php // If user already logined, so display wellcome section below ?>
					<?php echo ' '; ?>
					<?php
					echo '<br><span class="style7">ยินดีต้อนรับ ::</span>';
					echo '<span class="style26 "> '.$_SESSION["username"].' </span><br>';
          echo '<span class="style7"><a href="std_profile.php">ข้อมูลส่วนตัว</a></span><br>';
          echo '<span class="style7"><a href="std_view_lecturer.php">อาจารย์ผู้สอน</a></span><br>';
					echo '<span class="style7"><a href="logout.php">ออกจากระบบ</a><span class="style7"><br>';
				}
				?>
				<br>
			</div>
			<div class="Block">
				<span class="BlockHeader"><span>Menu</span></span>
				<div class="BlockContentBorder">
					<ul>
						<li><span class="style7"><a href="index.php"
													style="color: #3987FB; text-decoration: none">หลักสูตรที่เปิด</a></span>
						</li>
						<li><span class="style7"><a href="manual.pdf"
													style="color: #3987FB; text-decoration: none">คู่มือการลงทะเบียน</a></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
</body>
</html>
