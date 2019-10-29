<?php

include('db.php');

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
// username and password receive from register form
if (isset($_POST['ok'])) {
    if (!empty($_POST['username'] && !empty($_POST['password']))) {
// username and password sent from form
        $username = $_POST['username'];
        $password = $_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        $sql = "SELECT * FROM student WHERE username='$username' and password='$password'";
        $result = mysqli_query($conn, $sql);

// Mysql_num_row is counting table row
        $count = mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

        if ($count == 1) {
// Register $myusername, $mypassword and redirect to file "login_success.php"
            $_SESSION['username'] = $username;

//session_register("sessioncode");
            header("location:std_profile.php");
        } else {
//$error='Wrong Username or Password';
            $message = "ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบข้อมูลด้วย";

        }

        $sql = "SELECT * FROM lecture WHERE username='$username' and password='$password'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['username'] = $username;

            header("location:lec_profile.php");
        } else {
//$error='Wrong Username or Password';
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Online registration system</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../public/style.css"/>
    <style type="text/css"></style>
</head>
<body>
<div class="BodyContent">
    <div class="BorderBorder">
        <div class="BorderBL">
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
                    <a href="../public/index.php" class="MenuButton"><span>Home</span></a>
                    <a href="../public/college.php" class="MenuButton"><span>College</span></a>
                    <a href="../public/course.php" class="MenuButton"><span>Course</span></a>
                    <a href="../public/ann.php" class="MenuButton"><span>public relations</span></a>
                    <a href="../public/gallary.php" class="MenuButton"><span>activity Pictures</span></a>
                    <a href="../public/contact_us.php" class="MenuButton"><span>Contact Us</span></a>
                    <input name="text" type="text" style="width:120px"/>
                    <span class="ButtonInput"><span>
                 <input type="button" value="Search"/>
                 </span></span></ul>
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
                        } ?>
                        <?php if (!isset($_SESSION['username']) || !isset($_SESSION['username'])) {
######################################   To show login form if user do not login ###################################
                            echo '<form action="" method="post">
		<table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td></td>
              </tr>
              <tr>
                <td><div align="left" ><span class="style9">Login::</span></div></td>
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
                <td><span class="style9">password::</span></td>
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
                  <input type="submit" name="ok" id="ok" value="log in" /></td>
                <td width="7">&nbsp;</td>
                <td width="175"><label><a href="../public/password_recovery.php">Forgot your password?</a></label></td>
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
                    <td><div align="center"><a href="../public/register.php"><img src="../public/images/register.gif"  width="130" height="35"></a></div></td>
                  </tr>
                </table>
				<?php '; ?>
                        <?php } else { ?>

                            <?php //  remove the HTML code of login ?>

                            <?php // If user already logined, so display wellcome section below ?>
                            <?php echo ' '; ?>
                            <?php
                            echo '<br><span class="style7">Are welcome ::</span>';
                            echo '<span class="style26 "> ' . $username . ' </span><br>';
                            echo '<span class="style7"><a href="../public/std_profile.php">personal Information</a></span><br>';
                            echo '<span class="style7"><a href="../public/logout.php">Sign out</a><span class="style7"><br>';
                        }
                        ?>
                        <br>
                    </div>
                    <div class="Block">
                        <span class="BlockHeader"><span>Menu</span></span>
                        <div class="BlockContentBorder">
                            <ul>
                                <li><span class="style7"><a href="../public/index.php"
                                                            style="color: #3987FB; text-decoration: none">Open course</a></span>
                                </li>
                                <li><span class="style7"><a href="../public/manual.pdf"
                                                            style="color: #3987FB; text-decoration: none">Registration Guide</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
</body>
</html>