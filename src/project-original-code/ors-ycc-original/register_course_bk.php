<?php
session_start();
include('db.php');
//if(!session_is_registered(username)){header("location:index.php");}
if(!session_is_registered(username))
	{
     
     $username = "";
     $password = "";
     if(!isset($_SESSION['logined'])) {
      if(isset($_REQUEST['username'])) {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
			if(empty($_REQUEST['username']) && empty($_REQUEST['password'])) {
				$message = '<span style="color:red">กรุณากรอกชื่อผู้ใช้และรหัสผ่านของท่านด้วย</span>';
			} else if(empty($_REQUEST['username']) && !empty($_REQUEST['password'])) {
				$message = '<span style="color:red">กรุณากรอกชื่อผู้ใช้ของท่านด้วย</span>';
			} else if(!empty($_REQUEST['username']) && empty($_REQUEST['password'])) {
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
					  //header("location:std_profile.php");
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
    <title>ลงทะเบียนเรียนใหม่</title>
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
<!--
.style25 {font-size: 11px; font-family: Tahoma; }
.style7 {color: #3987FB; font-size: 14px; }
.style26 {
	font-size: 14px;
	font-weight: bold;
}
.style29 {
	color: #FF0000;
	font-size: 16px;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: oblique;
}
.style30 {
	font-size: 10px;
	color: #333333;
}
.style31 {font-size: 10px}
.style32 {color: #e0f6fc}
.style34 {
	color: #FF0000;
	font-size: 16px;
	font-family: "Courier New", Courier, monospace;
	font-weight: bold;
}
.style35 {
	font-size: 16px;
	font-weight: bold;
}
.style36 {font-size: 16px}
.style37 {font-size: 18px}
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
              <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a><a href="college.php" class="MenuButton">  <span> วิทยาลัย</span></a><a href="course.php" class="MenuButton"><span>หลักสูตร</span></a><a href="ann.php" class="MenuButton"><span>ประชาสัมพันธ์</span> </a><a href="gallary.php" class="MenuButton"><span>ภาพกิจกรรม</span></a><a href="contact_us.php" class="MenuButton"><span> ติดต่อเรา</span></a>
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





	<?php echo $message; ?>		
	<? echo	'<form action="" method="post">
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
		
          <br>
            <p>&nbsp;</P>
        
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
	 <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
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
		
		//header("location:confirm_course.php");
		//header('refresh: 1; url=select_course.php'); #end session checking
		//echo "<br>ยินดีต้อนรับ ::"; 
		//echo " $username <br>";
		//echo '<a href="std_profile.php">ข้อมูลส่วนตัว</a><br>';
		//echo '<a href="logout.php">ออกจากระบบ</a><br>';
		}
		//ob_end_flush();
?>
            <br>
          </div>
          <div class="Block">

            <span class="BlockHeader"><span>Menu</span></span>
            <div class="BlockContentBorder">

                <ul>
                    <li><span class="style7">หลักสูตรที่เปิด</span></li>
                    <li><span class="style7">คู่มือการลงทะเบียน</span></li>
                </ul>
          </div>
        </div>

        </div><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
 
 
<?php
//ob_start();
//session_start();
$errmsg= "";

//$login = $email = $pswd = $cpswd = $f_name = $name = $s_name = $filename = "";
//	foreach($_REQUEST as $key => $value)  {
//		$$key = $value;
//	}
//	$errmsg = array();
//	for($i = 0; $i < 20; $i++) {
//		$errmsg[$i] = false;
//	}
if(isset($ok)) {	
#=========================================
# username check	
//if(isset($ok)) { 
    $login = $_POST['login'];
	if(empty($login)) {
	    $errmsg1 = "<span style=color:red>กรุณากรอบชื่ิิอล็อกอินด้วยค่ะ</span>";
	  }	
	//if(!ereg($pattern, $login)) {
	  //  $errmsg2 .= "<span style=color:red>ชื่ิิอล็อกอินต้องประกอบด้วย a-z หรือ 0-9</span>";
	 //}
	 if(!$errmsg1) {
	 if(strlen($login) < 6) {
	    $errmsg3 .= "<span style=color:red>ชื่อล็อกอินต้องยาว 6-20 ตัว</span>"; 
       }}
	 
     /*if(!$errmsg[3]) {
			# check username duplicate
			$sql = "select * from account where username = '$login'";
			$link->query($sql);
			if($link->num_rows() > 0) {
				$errmsg[4] = true; // "<li>ชื่ิิอล็อกอินนี้มีผู้ใช้แล้ว"; 
	 }}*/
#============================================	
#email check
    $email=$_POST['email'];
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errmsg5 .= "<span style=color:red>กรุณาใส่ Email ให้ตรงตามรูปแบบด้วยค่ะ</span>";
	}
#============================================	
# password check	
	$pswd = $_POST['pswd'];
	$cpswd = $_POST['cpswd'];
	if(empty($pswd)){
	   $errmsg6 .= "<span style=color:red>กรุณากรอบรหัสผ่านด้วยค่ะ</span>";
	   }
	      
    if(empty($cpswd)){
	   $errmsg7 .= "<span style=color:red>กรุณากรอบยืนยันรหัสผ่านด้วยค่ะ</span>";
	   }
		   
	//if(!ereg($pattern, $pswd)) {
	//    $errmsg8 .= "<span style=color:red>Password ต้องประกอบด้วย a-z หรือ 0-9 ระหว่าง 6-20 ตัว</span>";
	
	//}
	if(!$errmsg6)
	if(strlen($pswd) < 6) {
	    $errmsg9 .= "<span style=color:red>รหัสผ่านต้องยาว 6-20 ตัวค่ะ</span>"; 
	   }
    
	if(!$errmsg6 && !$errmsg7 && !$errmsg9) {
		if($pswd != $cpswd) {
			$errmsg10 .="<span style=color:red>รหัสผ่านทั้งสองไม่ตรงกันค่ัะ</span>"; ;
		}}
#end password check
#===================================	
# first name and last name
   //$f_name=$_POST['f_name'];
   $name=$_POST['name'];
   $s_name=$_POST['s_name'];
   if(empty($f_name)){
	   $errmsg11 .= "<span style=color:red>กรุณาเลือกคำนำหน้าชื่อด้วยค่ะ</span>";
	   }
    if(empty($name)){
	   $errmsg12 .= "<span style=color:red>กรุณากรอบชื่อด้วยค่ะ</span>";
	   }
    if(empty($s_name)){
	   $errmsg13 .= "<span style=color:red>กรุณากรอบนามสกุลด้วยค่ะ</span>";
	   }
	 //if(!ereg($pattern, $pswd)) {
	//    $errmsg14 .= "<span style=color:red>Password ต้องประกอบด้วย a-z หรือ 0-9 ระหว่าง 6-20 ตัว</span>";
	  
#===================================
#bithday check
   $b_day=$_POST['b_day'];
   $b_month=$_POST['b_month'];
   $b_year=$_POST['b_year'];
   if(empty($b_day)){
	   $errmsg15 .= "<span style=color:red>กรุณาเลือกวันเกิดด้วยค่ะ</span>";
	   }
   if(empty($b_month)){
	   $errmsg16 .= "<span style=color:red>กรุณาเลือกเดือนที่่เกิดด้วยค่ะ</span>";
	   }
   if(empty($b_year)){
	   $errmsg17 .= "<span style=color:red>กรุณาเลือกปีที่เกิดด้วยค่ะ</span>";
	   }
	   
   $birthday=$b_day.'/'.$b_month.'/'.$b_year;   	   
#================================== 
#nationallity check
   $nation=$_POST['nation'];
   $origin=$_POST['origin'];
   $religion=$_POST['religion'];
   if(empty($nation)){
	   $errmsg18 .= "<span style=color:red>กรุณาเลือกสัญชาติด้วยค่ะ</span>";
	   }
   if(empty($origin)){
	   $errmsg19 .= "<span style=color:red>กรุณาเลือกเชื้อชาติด้วยค่ะ</span>";
	   }
   if(empty($religion)){
	   $errmsg20 .= "<span style=color:red>กรุณาเลือกศาสนาด้วยค่ะ/span>";
	   }  
#==================================
# thai id card check
   $std_id=$_POST['std_id'];
   if(empty($std_id)){
	   $errmsg21 .= "<span style=color:red>กรุณากรอบเลขบัตรประชาชนด้วยค่ะ</span>";
	   }
   if(!$errmsg21) {
      //if(strlen($std_id) > 13 ){
		  if($group_1=$std_id){ 
		  
          $num1=substr("$group_1",0,1);
          $num2=substr("$group_1",1,1); 
          $num3=substr("$group_1",2,1);
          $num4=substr("$group_1",3,1); 
          $num5=substr("$group_1",4,1); 
          $num6=substr("$group_1",5,1); 
          $num7=substr("$group_1",6,1); 
          $num8=substr("$group_1",7,1); 
          $num9=substr("$group_1",8,1); 
          $num10=substr("$group_1",9,1); 
          $num11=substr("$group_1",10,1);
          $num12=substr("$group_1",11,1);
          $num13=substr("$group_1",12,1);

          $cal_num1=$num1*13;
          $cal_num2=$num2*12;
          $cal_num3=$num3*11;
          $cal_num4=$num4*10;
          $cal_num5=$num5*9;
          $cal_num6=$num6*8;
          $cal_num7=$num7*7;
          $cal_num8=$num8*6;
          $cal_num9=$num9*5;
          $cal_num10=$num10*4;
          $cal_num11=$num11*3;
          $cal_num12=$num12*2;

          $cal_sum=$cal_num1+$cal_num2+$cal_num3+$cal_num4+$cal_num5+$cal_num6+$cal_num7+$cal_num8+$cal_num9+$cal_num10+$cal_num11+ $cal_num12;

          $cal_mod=$cal_sum%11;

          $cal_2=11-$cal_mod;

          if ($group_1<>"") {
            if ($cal_2!=$num13) {
                 $errmsg22 .= "<span style=color:red>หมายเลขบัตรประชาชนนี้ไม่ถูกต้อง กรุณาลองใหม่ค่ะ</span>";
	      }}}}
                    

#end check id card
#==================================   
#address checking
    $home=$_POST['home'];
    $m_home=$_POST['m_home'];
    $r_home=$_POST['r_home'];
    $v_home=$_POST['v_home'];
    $p_home=$_POST['p_home'];
    $c_home=$_POST['c_home'];

    $postalcode=$_POST['post'];
    $phone=$_POST['tel'];

       if(empty($home)){
	      $errmsg23 .= "<span style=color:red>กรุณากรอบบ้านเลขที่ด้วยค่ะ</span>";
           }
       if(empty($m_home)){
	      $errmsg24 .= "<span style=color:red>กรุณากรอบหมู่บ้านด้วยค่ะ</span>";
           }
       if(empty($r_home)){
	      $errmsg25 .= "<span style=color:red>กรุณากรอกซอย/ถนนด้วยค่ะ</span>";
           }
       if(empty($v_home)){
	      $errmsg26 .= "<span style=color:red>กรุณากรอกแขวง/ตำบลด้วยค่ะ</span>";}
       if(empty($p_home)){
	      $errmsg27 .= "<span style=color:red>กรุณากรอกอำเภด้วยค่ะ</span>";}
       if(empty($c_home)){
	      $errmsg28 .= "<span style=color:red>กรุณากรอกจังหวัดด้วยค่ะ</span>";}

       if(empty($post)){
	      $errmsg29 .= "<span style=color:red>กรุณากรอบหรัสไปรษณีด้วยค่ะ</span>";}

       if(empty($tel)){
	      $errmsg30 .= "<span style=color:red>กรุณากรอกเบอร์โทรศัพย์ด้วยค่ะ</span>";}
		  
	$address=$home.'หมู่ที่ '.' '.$m_home.' '.'ซอย/ถนน '.$r_home.'แขวง/ตำบล '.$v_home;	  
#end address
#=================================
    $edulevel=$_POST['edulevel'];
    $eduplace=$_POST['eduplace'];
    $eduprovince=$_POST['eduprovince'];
    $eduyear=$_POST['eduyear'];
	if(empty($edulevel)){
	      $errmsg31 .= "<span style=color:red>กรุณาเลือกระดับการศึกษาด้วยค่ะ</span>";}
    if(empty($eduplace)){
	      $errmsg32 .= "<span style=color:red>กรุณากรอบสถานศึกษาด้วยค่ะ</span>";}
    if(empty($eduprovince)){
	      $errmsg33 .= "<span style=color:red>กรุณากรอบจังหหวัดสถานศึกษาด้วยค่ะ</span>";}
	if(empty($eduyear)){
	      $errmsg34 .= "<span style=color:red>กรุณากรอบปีการศึกษาด้วยค่ะ</span>";}		  		  
#================================= 
  //$job=$_POST['job'];
    $job=$_POST['t_job'];
  
#================================= 
#=================================
      if(!$errmsg3 && !$errmsg5 && !$errmsg10  && !$errmsg11 && !$errmsg12 && !$errmsg13 &&/* !$errmsg15 && !$errmsg16 &&
	  !$errmsg17 && !$errmsg18 && !$errmsg19 && !$errmsg20 &&*/ !$errmsg22 /*&& !$errmsg23 && !$errmsg24 && 
	  !$errmsg25 && !$errmsg26 && !$errmsg27 && !$errmsg28 && !$errmsg29 */&& !$errmsg30)
	   {
       $query = "insert into student(username,password,f_name,name,s_name,birthday,std_id,address,city,province,postalcode,phone,email,job,nation,origin,religion,edulevel,eduplace,eduprovince,eduyear) value(
'$login','$pswd','$f_name','$name','$s_name','$birthday','$std_id','$address','$p_home','$c_home','$postalcode','$phone','$email','$job','$nation','$origin','$religion','$edulevel','$eduplace','$eduprovince','$eduyear')";

       $do = mysql_query($query);
       if ($do==0)
         { ?>
         <script type="text/javascript">
	window.location="index.php";
</script>

           
		   //header("Refresh: 3; location:index.php"); 
		// $text="การลงทะเบียน เสร็จเรียบร้อย จะย้ายไปยังเพจหลักใน 3 วินาที " ;
		 //echo "$text";
		//exit;
		<?  }
		 
	    }
    else
   {
	
       
    } 
}
//ob_end_clean();
?>  

        
          <div class="Article">
            <p>
            
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="16" valign="middle" bgcolor="#333333">&nbsp;</td>
                <td width="605" height="26" valign="middle" bgcolor="#333333"><strong style="color: #FFF">กรอกข้อมูลเพื่อลงทะเบียนเรียน</strong></td>
                <td width="11" bgcolor="#333333">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td valign="top" style="font-size: 12px"><li>กรอกข้อมูลที่จำเป็นสำหรับการลงทะเบียน โดยเครื่องหมาย <span class="style29">&nbsp;*</span> &nbsp;                      คือข้อมูลที่จำเป็นที่จะต้องกรอกให้สมบูรณ์ </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="16">&nbsp;</td>
                <td style="font-size: 12px"><li>กรุณากรอกข้อมูลตามความเป็นจริงเพื่อใช้สำหรับติดต่อในกรณีที่เกิดปัญหาในการเรียน หรือแจ้งข่าวสารต่างๆ ค่ะ </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="16">&nbsp;</td>
                <td style="font-size: 12px"><li>กรณีไม่มีข้อมูลกรุณาใช้สัณลักษ<span class="style35">์ <span class="style37"></span></span><span class="style36">-</span> แทน อย่าปล่อยให้ช่องว่างเปล่า</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="4">&nbsp;</td>
                <td width="625">&nbsp;</td>
              </tr>
              <tr>
                <td height="26" bgcolor="#333333">&nbsp;</td>
                <td bgcolor="#333333"><span class="style26"><strong style="color: #FFF"> ::: แบบฟอร์มการสมัครเรียนวิทยาลัยชุมชนยะลา :::</strong></span></td>
              </tr>
              
            </table>
            <li>
              <form name="form1" method="post" action="">
                <table width="611" height="48" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="16" colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="16" colspan="3" bgcolor="#CCCCCC">  1. กำหนด Username และ Password ที่ต้องการ </td>
                  </tr>
                  <tr>
                    <td width="195" height="16">&nbsp;</td>
                    <td width="195">&nbsp;</td>
                    <td width="234">&nbsp;</td>
                    </tr>
                  </table>
                <table width="611" height="53" border="0" align="center" cellpadding="0" cellspacing="0" >
                  <? if($errmsg1) { ?>
                  <tr>
                    <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
                    <td width="505" align="center" valign="middle" bgcolor="#FFFFFF"><div align="left">
                      <?= $errmsg1 ?>
                      </div></td>
                    </tr>
                  <? } ?>
                  <? if($errmsg2) { ?>
                  <tr>
                    <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
                    <td align="center" valign="middle" bgcolor="#FFFFFF"><div align="left">
                      <?= $errmsg2 ?>
                      </div></td>
                    </tr>
                  <? } ?>
                  <? if($errmsg3) { ?>
                  <tr>
                    <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
                    <td align="center" valign="middle" bgcolor="#FFFFFF"><div align="left">
                      <?= $errmsg3 ?>
                      </div></td>
                    </tr>
                  <? } ?>
                  <tr>
                    <td width="106" height="5" bgcolor="#FFFFFF"><div align="left"> ชื่อล็อกอิน:</div></td>
                    <td height="" align="center" valign="middle" bgcolor="#FFFFFF"><span class="style32"></span>
                      <div align="left">
                        <input name="login" class="inputbox-normal" type="text" id="username" style="background: <? if($errmsg1 || $errmsg2 || $errmsg3   ) echo "#EEFCE2"; ?>" value="<?= $login ?>" size="25" maxlength="20" />
                        <span class="style34">*</span> &nbsp;<span class="style31"> ต้องประกอบด้วย a-z หรือ 0-9 ระหว่าง 6-20 ตัว</span></div></td>
                    </tr>
                  <? if($errmsg6) { ?>
                  <tr>
                    <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
                    <td bgcolor="#FFFFFF"><div align="left">
                      <?= $errmsg6 ?>
                      </div></td>
                    </tr>
                  <? } ?>
                  <? if($errmsg8) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td bgcolor="#FFFFFF"><div align="left">
                      <?= $errmsg8 ?>
                      </div>
                      <div align="left"></div></td>
                    </tr>
                  <? } ?>
                  <? if($errmsg9) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td bgcolor="#FFFFFF"><div align="left" class="style34">
                      <?= $errmsg9 ?>
                      </div></td>
                    </tr>
                  <? } ?>
                  <? if($errmsg10) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td bgcolor="#FFFFFF"><div align="left">
                      <?= $errmsg10 ?>
                      </div>
                      <div align="left"></div></td>
                    </tr>
                  <? } ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF"><div align="left">รหัสผ่าน:</div></td>
                    <td bgcolor="#FFFFFF"><div align="left">
                      <input name="pswd" class="inputbox-normal" type="password" id="password" style="background: <? if($errmsg6 || $errmsg8 || $errmsg9 || $errmsg10 ) echo "#EEFCE2"; ?>" value="<?= $pswd ?>" size="25" maxlength="20" />
                      <span class="style34">*</span> &nbsp;<span class="style30"> ต้องประกอบด้วย a-z หรือ 0-9 ระหว่าง 6-20 ตัว</span></div></td>
                    </tr>
                  <? if($errmsg7) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td bgcolor="#FFFFFF"><div align="left">
                      <?= $errmsg7 ?>
                      </div></td>
                    </tr>
                  <? } ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF"><div align="left">ยืนยันรหัสผ่าน:</div></td>
                    <td bgcolor="#FFFFFF"><div align="left">
                      <input name="cpswd" class="inputbox-normal" type="password" id="cpswd" style="background: <? if($errmsg7 || $errmsg9 || $errmsg10 ) echo "#EEFCE2"; ?>"  value="<?= $cpswd ?>" size="25" maxlength="20" />
                      <span class="style34">*</span> &nbsp;<span class="style30"> ต้องประกอบด้วย a-z หรือ 0-9 ระหว่าง 6-20 ตัว</span></div></td>
                    </tr>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="" bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="1" colspan="2" bgcolor="#CCCCCC">  2. กรอกข้อมูลส่วนตัว</td>
                    </tr>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="" bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                  <? if($errmsg11) { ?>
                  <tr>
                    <td bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="1" bgcolor="#FFFFFF"><?= $errmsg11 ?></td>
                    </tr>
                  <? } ?>
                  <tr>
                    <td bgcolor="#FFFFFF"><div align="left">คำนำหน้าชื่อ </div></td>
                    <td height="1" bgcolor="#FFFFFF"><div align="left">
                      <select name="f_name" id="f_name">
                        <option selected>&#3609;&#3634;&#3618;</option>
                        <option>&#3609;&#3634;&#3591;</option>
                        <option>&#3609;&#3634;&#3591;&#3626;&#3634;&#3623;</option>
                        <option>&#3604;.&#3594;.</option>
                        <option>&#3604;.&#3597;.</option>
                        </select>
                      <span class="style29">*</span></div></td>
                    </tr>
                  <? if($errmsg12) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="1" bgcolor="#FFFFFF"><?= $errmsg12 ?></td>
                    </tr>
                  <? } ?>
                  <tr>
                    <td height="" bgcolor="#FFFFFF">ชื่อ </td>
                    <td height="1" bgcolor="#FFFFFF"><input type="text"  class="inputbox-normal" name="name" value="<?= $name ?>" id="name" style="background: <? if($errmsg12) echo "#EEFCE2"; ?>"/>
                      <span class="style29">                      *</span><span class="style34"> &nbsp;</span></td>
                    </tr>
                  <? if($errmsg13) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="" bgcolor="#FFFFFF"><?= $errmsg13 ?></td>
                    </tr>
                  <? } ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF"><div align="left">นามสกุล</div></td>
                    <td height="1" bgcolor="#FFFFFF"><input type="text" name="s_name"  class="inputbox-normal" id="s_name" style="background: <? if($errmsg13 ) echo "#EEFCE2"; ?>" value="<?= $s_name ?>" />
                      <span class="style29">*</span></td>
                    </tr>
                  <? if($errmsg15) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="1" bgcolor="#FFFFFF"><?= $errmsg15 ?></td>
                    </tr>
                  <? } ?>
                  <? if($errmsg16) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="1" bgcolor="#FFFFFF"><?= $errmsg16 ?></td>
                    </tr>
                  <? } ?>
                  <? if($errmsg17) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="1" bgcolor="#FFFFFF"><?= $errmsg17 ?></td>
                    </tr>
                  <? } ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF"><div align="left">วันเกิด</div></td>
                    <td height="1" bgcolor="#FFFFFF"><div align="left">
                      <select name="b_day" id="birth" style="background: <? if($errmsg15 ) echo "#EEFCE2"; ?>" value="<?= $b_day ?>">
                        <option selected>-- วัน --</option>
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        </select>
                      <select name="b_month" id="b_month" style="background: <? if($errmsg16 ) echo "#EEFCE2"; ?>" value="<?= $b_month ?>">
                        <option selected>-- เดือน --</option>
                        <option value="01">&#3617;&#3585;&#3619;&#3634;&#3588;&#3617;</option>
                        <option value="02">&#3585;&#3640;&#3617;&#3616;&#3634;&#3614;&#3633;&#3609;&#3608;&#3660;</option>
                        <option value="03">&#3617;&#3637;&#3609;&#3634;&#3588;&#3617;</option>
                        <option value="04">&#3648;&#3617;&#3625;&#3634;&#3618;&#3609;</option>
                        <option value="05">&#3614;&#3620;&#3625;&#3616;&#3634;&#3588;&#3617;</option>
                        <option value="06">&#3617;&#3636;&#3606;&#3640;&#3609;&#3634;&#3618;&#3609;</option>
                        <option value="07">&#3585;&#3619;&#3585;&#3598;&#3634;&#3588;&#3617;</option>
                        <option value="08">&#3626;&#3636;&#3591;&#3627;&#3634;&#3588;&#3617;</option>
                        <option value="09">&#3585;&#3633;&#3609;&#3618;&#3634;&#3618;&#3609;</option>
                        <option value="10">&#3605;&#3640;&#3621;&#3634;&#3588;&#3617;</option>
                        <option value="11">&#3614;&#3620;&#3624;&#3592;&#3636;&#3585;&#3634;&#3618;&#3609;</option>
                        <option value="12">&#3608;&#3633;&#3609;&#3623;&#3634;&#3588;&#3617;</option>
                        </select>
                      <select name="b_year" id="birth" style="background: <? if($errmsg17 ) echo "#EEFCE2"; ?>" value="<?= $b_year ?>">
                        <option selected>-- ปี --</option>
                        <option value="2553">2553</option>
                        <option value="2552">2552</option>
                        <option value="2551">2551</option>
                        <option value="2550">2550</option>
                        <option value="2549">2549</option>
                        <option value="2548">2548</option>
                        <option value="2547">2547</option>
                        <option value="2546">2546</option>
                        <option value="2545">2545</option>
                        <option value="2544">2544</option>
                        <option value="2543">2543</option>
                        <option value="2542">2542</option>
                        <option value="2541">2541</option>
                        <option value="2540">2540</option>
                        <option value="2539">2539</option>
                        <option value="2538">2538</option>
                        <option value="2537">2537</option>
                        <option value="2536">2536</option>
                        <option value="2535">2535</option>
                        <option value="2534">2534</option>
                        <option value="2533">2533</option>
                        <option value="2532">2532</option>
                        <option value="2531">2531</option>
                        <option value="2530">2530</option>
                        <option value="2529">2529</option>
                        <option value="2528">2528</option>
                        <option value="2527">2527</option>
                        <option value="2526">2526</option>
                        <option value="2525">2525</option>
                        </select>
                      <span class="style29">*</span> &nbsp;</div></td>
                    </tr>
                  <? if($errmsg18) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="" bgcolor="#FFFFFF"><?= $errmsg18 ?></td>
                    </tr>
                  <? } ?>
                  <? if($errmsg19) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="1" bgcolor="#FFFFFF"><?= $errmsg19 ?></td>
                    </tr>
                  <? } ?>
                  <? if($errmsg20) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="1" bgcolor="#FFFFFF"><?= $errmsg20 ?></td>
                    </tr>
                  <? } ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">ประเทศ</td>
                    <td height="1" bgcolor="#FFFFFF"><select name="nation" size="1" id=" nation" style="background: <? if($errmsg18 ) echo "#EEFCE2"; ?>" value="<?= $nation ?>">
                      <option selected>-- สัญชาติ --</option>
                      <option>ไทย</option>
                      </select>
                      <select name="origin" size="1" id="origin" style="background: <? if($errmsg19 ) echo "#EEFCE2"; ?>" value="<?= $origin ?>">
                        <option>-- เชื้อชาติ --</option>
                        <option>ไทย</option>
                        <option>จีน</option>
                        <option>มลายู</option>
                        </select>
                      <select name="religion" size="1" id="religion" style="background: <? if($errmsg20 ) echo "#EEFCE2"; ?>" value="<?= $religion ?>">
                        <option>-- ศาสนา --</option>
                        <option>อิสลาม</option>
                        <option>พุธ</option>
                        <option>คริสเตียน</option>
                      </select>                  </td>
                    </tr>
                  <? if($errmsg21) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="1" bgcolor="#FFFFFF"><?= $errmsg21 ?></td>
                    </tr>
                  <? } ?>
                  <? if($errmsg22) { ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td height="1" bgcolor="#FFFFFF"><?= $errmsg22 ?></td>
                    </tr>
                  <? } ?>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">เลขบัตรประชาชน</td>
                    <td bgcolor="#FFFFFF"><input name="std_id" type="text" id="std_id" size="20" maxlength="13" class="inputbox-normal" style="background: <? if($errmsg21 || $errmsg22 ) echo "#EEFCE2"; ?>" value="<?= $std_id ?>" />
                      <span class="style29">*</span></td>
                    </tr>
                  <tr>
                    <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                    <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                  </table>
                <table width="611" border="0" align="center" cellpadding="0" cellspacing="0">
                  
                  <tr>
                    <td colspan="4" bgcolor="#CCCCCC"> &nbsp;&nbsp;3.กรอบข้อมูลสำหรับการติดต่อ</td>
                    </tr>
                  <tr>
                    <td width="90">&nbsp;</td>
                    <td width="198">&nbsp;</td>
                    <td width="100">&nbsp;</td>
                    <td width="223">&nbsp;</td>
                    </tr>
                  <? if($errmsg23) { ?><? if($errmsg24) { ?>
                  <tr>
                    <td height="1">&nbsp;</td>
                    <td><?= $errmsg23 ?></td>
                    <td></td>
                    <td><?= $errmsg24 ?></td>
                    </tr>
                  <? } ?><? } ?>
                  <tr>
                    <td height="1" style="text-align: left">บ้านเลขที่</td>
                    <td><label>
                      <input type="text" class="inputbox-normal" name="home" id="textfield" style="background: <? if($errmsg23 ) echo "#EEFCE2"; ?>" value="<?= $home ?>" >
                      <span class="style29">*</span></label></td>
                    <td>หมู่บ้าน/อาคาร</td>
                    <td><div align="left">
                      <input name="m_home" class="inputbox-normal" type="text" id="m_home" size="10" style="background: <? if($errmsg24 ) echo "#EEFCE2"; ?>" value="<?= $m_home ?>"  />
                      <span class="style29">*</span> &nbsp;</div></td>
                    </tr>
                  <? if($errmsg25) { ?><? if($errmsg26) { ?>
                  <tr>
                    <td height="32">&nbsp;</td>
                    <td><?= $errmsg25 ?></td>
                    <td>&nbsp;</td>
                    <td><?= $errmsg26 ?></td>
                    </tr>
                  <? } ?><? } ?>
                  <tr>
                    <td height="32" style="text-align: left">ซอย/ถนน</td>
                    <td>
                      <input name="r_home" class="inputbox-normal" type="text" id="r_home" size="10" style="background: <? if($errmsg25 ) echo "#EEFCE2"; ?>" value="<?= $r_home ?>" />
                      <span class="style29">*</span> </td>
                    <td>แขวง/ตำบล</td>
                    <td><div align="left">
                      <input name="v_home" class="inputbox-normal" type="text" id="v_home" size="10" style="background: <? if($errmsg26 ) echo "#EEFCE2"; ?>" value="<?= $v_home ?>" />
                      <span class="style29">*</span> &nbsp;</div></td>
                    </tr>
                  <? if($errmsg27) { ?><? if($errmsg28) { ?>
                  <tr>
                    <td height="23">&nbsp;</td>
                    <td><?= $errmsg27 ?></td>
                    <td>&nbsp;</td>
                    <td><?= $errmsg28 ?></td>
                    </tr>
                  <? } ?><? } ?>
                  <tr>
                    <td height="23" style="text-align: left">เขต/อำเภอ</td>
                    <td><div align="left">
                      <input name="p_home" class="inputbox-normal" type="text" id="p_home" size="10" style="background: <? if($errmsg27) echo "#EEFCE2"; ?>" value="<?= $p_home ?>" />
                      <span class="style29">*</span> &nbsp;</div></td>
                    <td>จังหวัด</td>
                    <td><div align="left">
                      <input name="c_home" class="inputbox-normal" type="text" id="c_home" size="15" style="background: <? if($errmsg28 ) echo "#EEFCE2"; ?>" value="<?= $c_home ?>" />
                      <span class="style29">*</span> &nbsp;</div></td>
                    </tr>
                  <? if($errmsg29) { ?>
                  <tr>
                    <td height="30">&nbsp;</td>
                    <td><?= $errmsg29 ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr><? } ?>
                  <tr>
                    <td height="30" style="text-align: left">รหัสไปรษณีย์</td>
                    <td><div align="left">
                      <input name="post" type="text" class="inputbox-normal" id="post" size="15" maxlength="5" style="background: <? if($errmsg29 ) echo "#EEFCE2"; ?>" value="<?= $post ?>"/>
                      <span class="style29">*</span> &nbsp;</div></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr><? if($errmsg30) { ?>
                  <tr>
                    <td height="27">&nbsp;</td>
                    <td><?= $errmsg30 ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr><? } ?>
                  <tr>
                    <td height="27" style="text-align: left">โทรศัพท์</td>
                    <td><input name="tel" type="text" class="inputbox-normal" id="tel" size="18" maxlength="20" style="background: <? if($errmsg30 ) echo "#EEFCE2"; ?>" value="<?= $tel ?>"/>
                      <span class="style29">*</span> &nbsp;</td>
                    <td>&nbsp;</td>
                    <td><div align="left"></div></td>
                    </tr>
                   <? if($errmsg5) { ?>
                  <tr>
                    <td>&nbsp;</td>
                    <td><?= $errmsg5 ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <? } ?>
                  <tr>
                    <td style="text-align: left">E-mail</td>
                    <td><input name="email" class="inputbox-normal" type="text" id="email" style="background: <? if($errmsg5) echo "#EEFCE2"; ?>" value="<?= $email ?>" size="25" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr>
                  </table>
                <table width="613" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="3" bgcolor="#CCCCCC"> &nbsp;&nbsp;4.กรอบข้อมูลการศึกษา</td>
                    </tr>
                  <tr>
                    <td width="108">&nbsp;</td>
                    <td width="312">&nbsp;</td>
                    <td width="193">&nbsp;</td>
                    </tr>
                     <? if($errmsg31) {?>
                  <tr>
                    <td>&nbsp;</td>
                    <td><?=$errmsg31 ?></td>
                    <td>&nbsp;</td>
                  </tr>
                 <? } ?>
                  <tr>
                    <td>จบการศึกษาระดับ</td>
                    <td><label for="eduplace"></label>
                      <label for="select"></label>
                      <select name="edulevel" id="select" style="background:<? if($errmsg31) echo "#EEFCE2"; ?>" value="<?= $edulevel ?>" />
                        <option selected>-- การศึกษา --</option>
                        <option>ปริญญาเอก หรือ สูงกว่า</option>
                        <option>ปริญญาโท</option>
                        <option>ปริญญาตรี</option>
                        <option>อนุปริญญา</option>
                        <option>มัธยมศึกษาตอนปลาย</option>
                        <option>มัธยมศึกษาตอนต้น</option>
                        <option>ป.6 หรือ ตํ่ากว่า</option>
                      </select></td>
                    <td>&nbsp;</td>
                    </tr>
                    <? if($errmsg32) {?>
                  <tr>
                    <td>&nbsp;</td>
                    <td><?= $errmsg32 ?></td>
                    <td>&nbsp;</td>
                  </tr>
                  <? }?>
                  <tr>
                    <td>จากสถานศึกษา</td>
                    <td><label for="eduyear"></label>
                      <input type="text" name="eduplace" id="textfield3" class="inputbox-normal" style="background: <? if($errmsg32) echo "#EEFCE2"; ?>" value="<?= $eduplace ?>" /></td>
                    <td>&nbsp;</td>
                    </tr>
                    <? if($errmsg33) {?>
                  <tr>
                    <td>&nbsp;</td>
                    <td><?= $errmsg33 ?></td>
                    <td>&nbsp;</td>
                  </tr>
                  <? } ?>
                  <tr>
                    <td>จังหวัด</td>
                    <td><label for="textfield4"></label>
                      <input type="text" name="eduprovince" id="textfield4" class="inputbox-normal" style="background:<? if($errmsg33) echo "#EEFCE2"; ?>" value="<?= $eduprovince ?>" /></td>
                    <td>&nbsp;</td>
                    </tr>
                    <? if($errmsg34) {?>
                  <tr>
                    <td>&nbsp;</td>
                    <td><?= $errmsg34 ?></td>
                    <td>&nbsp;</td>
                  </tr>
                   <? } ?>
                  <tr>
                    <td>ปีการศึกษา</td>
                    <td><label for="textfield5"></label>
                      <input type="text" name="eduyear" id="textfield5" class="inputbox-normal" style="background:<? if($errmsg34) echo "#EEFCE2"; ?>" value="<?= $eduyear ?>" /></td>
                    <td>&nbsp;</td>
                    </tr>
                  </table>
                <table width="611" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2" bgcolor="#CCCCCC">&nbsp;&nbsp;5. กรอบข้อมูลเีกี่ยวกับอาชีพ</td>
                    </tr>
                  <tr>
                    <td width="202">&nbsp;</td>
                    <td width="409">&nbsp;</td>
                    </tr>
                  <tr>
                    <td>ขณะนี้ท่านประกอบอาชีพอยู่หรือไม่</td>
                    <td><div align="left">
                      <input name="job" type="radio" id="radio3" value="job" checked />
                      ประกอบอาชีพ
                      <input type="radio" name="job" id="radio4" value="no_job" />
                      ไม่ได้ประกอบอาชีพ</div></td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align="left"></div></td>
                    </tr>
                  <tr>
                    <td>ลักษณะอาชีพที่ท่านประกอบอยู่</td>
                    <td><div align="left">
                      <input name="t_job" type="radio" id="radio5" value="ลูกจ้าง" checked />
                      ลูกจ้างบริษัท/ห้าง ร้าน </div></td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input type="radio" name="t_job" id="radio6" value="รับราชการ" />
                      รับราชการ </td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align="left">
                      <input type="radio" name="t_job" id="radio7" value="พนักงานรัฐวิสาหกิจ" />
                      พนักงานรัฐวิสาหกิจ </div></td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input type="radio" name="t_job" id="radio8" value="ค้าขาย" />
                      ค้าขาย</td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align="left">
                      <input type="radio" name="t_job" id="radio9" value="รับจ้างทั่วไป" />
                      รับจ้างทั่วไป </div></td>
                    </tr>
                  </table>
                
                
                <table width="0" border="0" align="center" cellpadding="5" cellspacing="0">
                  <tr>
                    <td width="194">&nbsp;</td>
                    <td width="106">&nbsp;</td>
                    <td width="283">&nbsp;</td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="ok" id="ok" value="ยืนยันการสมัคร" />
                      </td>
                    <td>&nbsp;</td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr>
                  </table>
                </form>
              
              
            </div>
            <p align="center"><br />
              <br />
              <br />  
            </p>
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