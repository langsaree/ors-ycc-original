<?php
session_start();
include('db.php');
include('include/login.php');
if(!isset($_SESSION['username'])) // To check login user if already login then hide login form
	{
    
     $username = "";
     $password = "";
     if(!isset($_SESSION['logined'])) {
      if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
			if(empty($_SESSION['username']) && empty($_SESSION['password'])) {
				$message = '<span style="color:red">กรุณากรอกชื่อผู้ใช้และรหัสผ่านของท่านด้วย</span>';
			} else if(empty($_SESSION['username']) && !empty($_SESSION['password'])) {
				$message = '<span style="color:red">กรุณากรอกชื่อผู้ใช้ของท่านด้วย</span>';
			} else if(!empty($_SESSION['username']) && empty($_SESSION['password'])) {
				$message = '<span style="color:red">กรุณากรอกรหัสผ่านของท่านด้วย</span>';
			} else {
			       $sql = "select * from student where username='$username' and password='$password'";
                   $result=mysql_query($sql);
                   $count=mysql_num_rows($result);
                  if($count==1)
                      {
					  //$_SESSION['logined'] = true;
					  //$_SESSION['username'] = $_REQUEST['username'];
					  //$_SESSION['password'] = $_REQUEST['password'];
					  session_register("username");
                      session_register("password");
					  //$_SESSION['username'] = $value["username"];
                      //$_SESSION['password'] = $value["password"];
					  header("location:std_profile.php");
					  }
				   else
				   {
				    $message = '<span style="color:red">ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบข้อมูลด้วย</span>';
				   }
				  }
			  	}  
   
}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>ระบบลงทะเบียนออนไลน์</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
.style25 {
  font-size: 11px;
  font-family: Tahoma; }
.style9 {
  font-size: 12px;
  color:black;}
.style7 {
  color: #3987FB; 
  font-size: 14px; }
.style26 {
	font-size: 14px;
	font-weight: bold;}
.style28 
 {font-size: 12px; 
  font-weight: bold; }
.o {
	color: #000;
}
 {
	font-size: 24px;
}
.BorderBorder .Border .Columns .MainColumn .ArticleBorder .Article table tr td {
	color: #060;
	font-family: Arial, Helvetica, sans-serif;
	text-align: left;
}
 {
	font-size: 12px;
}

    </style>
</head>
   <div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
       
          <div class="Article">
          <br>
          <table width="601" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="52">&nbsp;</td>
    <td width="129">&nbsp;</td>
    <td width="420">&nbsp;</td>
  </tr>
  <tr>
    <td height="26" colspan="3" style="color: #333; font-size: 16px; font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Article">วิชาที่เปิดสอนประจำเดือ</span>นมกราคม 2554</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<?php
$sql_view = "select * from course where status='1' ";
$result_view = mysqli_query($conn,$sql_view);
while($row=mysqli_fetch_array($result_view))
{

?>

<br>
             <table width="570" border="0" align="center" cellpadding="0" cellspacing="2">
  
              <tr>
                <td width="93" rowspan="5" valign="top"><img src="images/untitled.jpg" alt="" width="78" height="83" /></td>
                <td height="19" colspan="3" valign="top"><?= '<span style="color:red; font-size:15px;  font-weight: bolder;">'.'หมู่วิชา'.$row['cos_group'].'</span>' ?></td>
               </tr>
              <tr>
                <td width="21" valign="top">&nbsp;</td>
                <td height="19" colspan="2" valign="top"><span class="o">รหัสวิชา ::&nbsp;</span>
                <?= $row['cos_id'];?></td>
               </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2"><span class="o">ชื่อวิชา :: &nbsp;</span>                  <?= $row['cos_name'];?></td>
               </tr>
             
              <tr>
                <td style="color: #333">&nbsp;</td>
                <td> <a href="course_down.php?id=<?=$row[cos_id]; ?>" style="color: #333; text-decoration: none">ดาวน์โหลดผังการเรียน </a> </td>
                <td width="112"></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><a href="course_detail.php?id=<?=$row[cos_id]; ?>" style="color: #333; text-decoration: none"">ดูรายละเอียด</a></td>
                <td height="16">&nbsp;</td>
              </tr>
               <?php } ?>
          </table>
            <p align="center">&nbsp;</p>
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