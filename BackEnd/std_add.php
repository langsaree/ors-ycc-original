<?php
session_start();
include("../config/db.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ลงทะเบียนเรียนใหม่</title>
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style26 {	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 21px;
}
.style34 {	color: #666666;
	font-size: 13px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style36 {color: #FF6600}
.style38 {color: #55443E; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style25 {font-size: 13px; font-family: Tahoma; }
.style40 {
	color: #333333;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 13px;
	}
.style6 {
	font-size: 9px;
	font-style: normal;
	font-family: Verdana, Geneva, sans-serif;
	color: #666666;
	text-decoration:none;

}
.style44 {color: #CCCCCC}
.style45 {font-family: Verdana, Arial, Helvetica, sans-serif}

</style>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
    <td><table width="1260" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><p><img src="../images/header-bg.png" width="1265" height="45"></p>
          <table width="95%"  align="center" border="0" cellspacing="0" cellpadding="0"  class="header">
            <tr>
              <td width="6%" align="center"><img src="image/student add.png" width="127" height="111" /></td>
              <td width="94%"><span class="style26"><span class="style36"><span class="style45">Add</span> <span class="style38">New Student&nbsp;&nbsp;</span></span></span>  <a href="cpanel.php" class="style6" style="text-decoration:none" >| ControlPanel</a> <a href="manage_student.php" class="style6" style="text-decoration:none" >| ManageStudent</a><br />
                <span class="style34">เพิ่มนักศึกษาใหม่</span></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td><p>
          <?php
//ob_start();
//session_start();
$errmsg= "";$errmsg1= "";$errmsg2= "";$errmsg3= "";$errmsg4= "";$errmsg5= "";$errmsg6= "";$errmsg7= "";$errmsg8= "";$errmsg9= "";$errmsg10= "";$errmsg11= "";$errmsg12= "";$errmsg13= "";$errmsg14= "";$errmsg15= "";$errmsg16= "";$errmsg17= "";$errmsg18= "";$errmsg19= "";$errmsg20= "";$errmsg21= "";$errmsg22= "";$errmsg23= "";$errmsg24= "";$errmsg25= "";$errmsg26= "";$errmsg27= "";$errmsg28= "";$errmsg29= "";$errmsg30= "";
$errmsg31= "";$errmsg32= "";$errmsg33= "";$errmsg34= "";


if(isset($_POST['ok'])) {	
#=========================================
# username check	
//if(isset($ok)) { 
    $login = $_POST['login'];
	if(empty($login)) {
	    $errmsg1 = '<span style="color:red; font-size:12px">กรุณากรอบชื่อล็อกอินด้วยค่ะ</span>';
	  }	
	//if(!ereg($pattern, $login)) {   
	  //  $errmsg2 .= "<span style=color:red>ชื่อล็อกอินต้องประกอบด้วย a-z หรือ 0-9</span>";
	 //}
	 if(!$errmsg1) {
	 if(strlen($login) < 4) {
	    $errmsg3 .= '<span style="color:red; font-size:12px">ชื่อล็อกอินต้องยาว 4-20 ตัว</span>'; 
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
		$errmsg5 .= '<span style="color:red; font-size:12px">กรุณาใส่ Email ให้ตรงตามรูปแบบด้วยค่ะ</span>';
	}
#============================================	
# password check	
	$pswd = $_POST['pswd'];
	$cpswd = $_POST['cpswd'];
	if(empty($pswd)){
	   $errmsg6 .= '<span style="color:red; font-size:12px">กรุณากรอบรหัสผ่านด้วยค่ะ</span>';
	   }
	      
    if(empty($cpswd)){
	   $errmsg7 .= '<span style="color:red; font-size:12px">กรุณากรอบยืนยันรหัสผ่านด้วยค่ะ</span>';
	   }
		   
	//if(!ereg($pattern, $pswd)) {
	//    $errmsg8 .= "<span style=color:red>Password ต้องประกอบด้วย a-z หรือ 0-9 ระหว่าง 6-20 ตัว</span>";
	
	//}
	if(!$errmsg6)
	if(strlen($pswd) < 6) {
	    $errmsg9 .= '<span style="color:red; font-size:12px">รหัสผ่านต้องยาว 6-20 ตัวค่ะ</span>'; 
	   }
    
	if(!$errmsg6 && !$errmsg7 && !$errmsg9) {
		if($pswd != $cpswd) {
			$errmsg10 .='<span style="color:red; font-size:12px">รหัสผ่านทั้งสองไม่ตรงกันค่ัะ</span>'; 
		}}
#end password check
#===================================	
# first name and last name
   $first_name=$_POST['first_name'];
   $name=$_POST['name'];
   $last_name=$_POST['last_name'];
   if(empty($first_name)){
	   $errmsg11 .= '<span style="color:red; font-size:12px">กรุณาเลือกคำนำหน้าชื่อด้วยค่ะ</span>';
	   }
    if(empty($name)){
	   $errmsg12 .='<span style="color:red; font-size:12px">กรุณากรอบชื่อด้วยค่ะ</span>';
	   }
    if(empty($last_name)){
	   $errmsg13 .= '<span style="color:red; font-size:12px">กรุณากรอบนามสกุลด้วยค่ะ</span>';
	   }
	 //if(!ereg($pattern, $pswd)) {
	//    $errmsg14 .= "<span style=color:red>Password ต้องประกอบด้วย a-z หรือ 0-9 ระหว่าง 6-20 ตัว</span>";
	  
#===================================
#bithday check
   $b_day=$_POST['b_day'];
   $b_month=$_POST['b_month'];
   $b_year=$_POST['b_year'];
   if(empty($b_day)){
	   $errmsg15 .= '<span style="color:red; font-size:12px">กรุณาเลือกวันเกิดด้วยค่ะ</span>';
	   }
	   if(!$errmsg15){ 
            if(empty($b_month)){
	         $errmsg16 .= '<span style="color:red; font-size:12px">กรุณาเลือกเดือนที่่เกิดด้วยค่ะ</span>';
	   }}
	   if(!$errmsg15 && !$errmsg16){
           if(empty($b_year)){
	       $errmsg17 .= '<span style="color:red; font-size:12px">กรุณาเลือกปีที่เกิดด้วยค่ะ</span>';
	   }}
	   
   $birthday=$b_day.'/'.$b_month.'/'.$b_year;   	   
#================================== 
#nationallity check
   $nation=$_POST['nation'];
   $origin=$_POST['origin'];
   $religion=$_POST['religion'];
   if(empty($nation)){
	   $errmsg18 .='<span style="color:red; font-size:12px">กรุณาเลือกสัญชาติด้วยค่ะ</span>';
	   }
   if(empty($origin)){
	   $errmsg19 .='<span style="color:red; font-size:12px">กรุณาเลือกเชื้อชาติด้วยค่ะ</span>';
	   }
   if(empty($religion)){
	   $errmsg20 .= '<span style="color:red; font-size:12px">กรุณาเลือกศาสนาด้วยค่ะ/span>';
	   }  
#==================================
# thai id card check
   $std_id=$_POST['std_id'];
   if(empty($std_id)){
	   $errmsg21 .= '<span style="color:red; font-size:12px">กรุณากรอบเลขบัตรประชาชนด้วยค่ะ</span>';
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
                 $errmsg22 .='<span style="color:red; font-size:12px">หมายเลขบัตรประชาชนนี้ไม่ถูกต้อง กรุณาลองใหม่ค่ะ</span>';
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

    $post=$_POST['post'];
    $tel=$_POST['tel'];

       if(empty($home)){
	      $errmsg23 .= '<span style="color:red; font-size:12px">กรุณากรอบบ้านเลขที่ด้วยค่ะ</span>';
           }
       if(empty($m_home)){
	      $errmsg24 .= '<span style="color:red; font-size:12px">กรุณากรอบหมู่บ้านด้วยค่ะ</span>';
           }
       if(empty($r_home)){
	      $errmsg25 .= '<span style="color:red; font-size:12px">กรุณากรอกซอย/ถนนด้วยค่ะ</span>';
           }
       if(empty($v_home)){
	      $errmsg26 .= '<span style="color:red; font-size:12px">กรุณากรอกแขวง/ตำบลด้วยค่ะ</span>';}
       if(empty($p_home)){
	      $errmsg27 .= '<span style="color:red; font-size:12px">กรุณากรอกอำเภด้วยค่ะ</span>';}
       if(empty($c_home)){
	      $errmsg28 .= '<span style="color:red; font-size:12px">กรุณากรอกจังหวัดด้วยค่ะ</span>';}

       if(empty($post)){
	      $errmsg29 .= '<span style="color:red; font-size:12px">กรุณากรอบหรัสไปรษณีด้วยค่ะ</span>';}

       if(empty($tel)){
	      $errmsg30 .= '<span style="color:red; font-size:12px">กรุณากรอกเบอร์โทรศัพย์ด้วยค่ะ</span>';}
		  
	$address=$home.'หมู่ที่ '.' '.$m_home.' '.'ซอย/ถนน '.$r_home.'แขวง/ตำบล '.$v_home;	  
#end address
#=================================
    $edulevel=$_POST['edulevel'];
    $eduplace=$_POST['eduplace'];
    $eduprovince=$_POST['eduprovince'];
    $eduyear=$_POST['eduyear'];
	if(empty($edulevel)){
	      $errmsg31 .= '<span style="color:red; font-size:12px">กรุณาเลือกระดับการศึกษาด้วยค่ะ</span>';}
    if(empty($eduplace)){
	      $errmsg32 .= '<span style="color:red; font-size:12px">กรุณากรอบสถานศึกษาด้วยค่ะ</span>';}
    if(empty($eduprovince)){
	      $errmsg33 .= '<span style="color:red; font-size:12px">กรุณากรอบจังหหวัดสถานศึกษาด้วยค่ะ</span>';}
	if(empty($eduyear)){
	      $errmsg34 .='<span style="color:red; font-size:12px">กรุณากรอบปีการศึกษาด้วยค่ะ</span>';}		  		  
#================================= 
  // $job=$_POST['job'];
    $job=$_POST['t_job'];
  
#================================= 
#=================================
      if(!$errmsg3 && !$errmsg5 && !$errmsg10  && !$errmsg11 && !$errmsg12 && !$errmsg13 &&/* !$errmsg15 && !$errmsg16 &&
	  !$errmsg17 && !$errmsg18 && !$errmsg19 && !$errmsg20 &&*/ !$errmsg22 /*&& !$errmsg23 && !$errmsg24 && 
	  !$errmsg25 && !$errmsg26 && !$errmsg27 && !$errmsg28 && !$errmsg29 */&& !$errmsg30)
	   {
       $query = "insert into student(username,password,first_name,name,last_name,birthday,std_id,address,city,province,postalcode,phone,email,job,nation,origin,religion,edulevel,eduplace,eduprovince,eduyear) value(
'$login','$pswd','$first_name','$name','$last_name','$birthday','$std_id','$address','$p_home','$c_home','$post','$tel','$email','$job','$nation','$origin','$religion','$edulevel','$eduplace','$eduprovince','$eduyear')";
       $do = mysqli_query($connection,$query);
       if (!$do)
        { 
         
		 die ("ผิดพลาด".mysqli_error($connection));
		   }	
    header("Refresh: 3; url=manage_student.php"); 
		 echo "การลงทะเบียน เสร็จเรียบร้อย จะย้ายไปยังเพจหลักใน 3 วินาที " ;
		exit;

      }	
      else
      {
      
        } 
    
}
//ob_end_clean();
?>
        </p>
        <table><tr><td width="1150px" align="center">
          <table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            <td width="4">&nbsp;</td>
            </tr>
          <tr>
            <td height="26" bgcolor="#333333"><strong style="color: #FFF">::: แบบฟอร์มการสมัครเรียนวิทยาลัยชุมชนยะลา :::</strong></td>
            </tr>
          <tr>
            <td height="26">&nbsp;</td>
            </tr>
          </table>
            <p>&nbsp;</p>
            <fieldset style="width:800px; height:200px; border-color:#9C3; color:#069; border-style: dotted" > 
              <legend style="color:#030"> 1. กำหนด Username และ Password ที่ต้องการ </legend>
            <table width="611" height="33" border="0" align="center" cellpadding="0" cellspacing="0" >
              <?php if($errmsg1) { ?>
              <tr>
                <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="505" align="center" valign="middle" bgcolor="#FFFFFF"><div align="left">
                  <?php echo $errmsg1 ?>
                </div></td>
              </tr>
              <?php } ?>
              <?php if($errmsg2) { ?>
              <tr>
                <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
                <td align="center" valign="middle" bgcolor="#FFFFFF"><div align="left">
                  <?php echo $errmsg2 ?>
                </div></td>
              </tr>
              <?php } ?>
              <?php if($errmsg3) { ?>
              <tr>
                <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
                <td align="center" valign="middle" bgcolor="#FFFFFF"><div align="left">
                  <?php echo $errmsg3 ?>
                </div></td>
              </tr>
              <?php } ?>
              <tr>
                <td width="106" height="5" bgcolor="#FFFFFF"><div align="left"> ชื่อล็อกอิน:</div></td>
                <td height="5" align="center" valign="middle" bgcolor="#FFFFFF"><span class="style32"></span>
                  <div align="left">
                    <input name="login" class="inputbox-normal" type="text" id="username" style="background: <?php if($errmsg1 || $errmsg2 || $errmsg3   ) echo "#EEFCE2"; ?>" value="<?php echo (isset($login) ? $login :'') ?>" size="25" maxlength="20" />
                    <span class="style34" style="color:#F00;">*</span> &nbsp;<span class="style31" style="color:#B50B0F; font-size:12px;"> ต้องประกอบด้วย a-z หรือ 0-9 ระหว่าง 4-20 ตัว</span></div></td>
              </tr>
              <?php if($errmsg6) { ?>
              <tr>
                <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
                <td bgcolor="#FFFFFF"><div align="left">
                  <?php echo $errmsg6 ?>
                </div></td>
              </tr>
              <?php } ?>
              <?php if($errmsg8) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td bgcolor="#FFFFFF"><div align="left">
                  <?php echo $errmsg8 ?>
                </div>
                  <div align="left"></div></td>
              </tr>
              <?php } ?>
              <?php if($errmsg9) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td bgcolor="#FFFFFF"><div align="left" class="style34">
                  <?php echo $errmsg9 ?>
                </div></td>
              </tr>
              <?php } ?>
              <?php if($errmsg10) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td bgcolor="#FFFFFF"><div align="left">
                  <?php echo $errmsg10 ?>
                </div>
                  <div align="left"></div></td>
              </tr>
              <?php } ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF"><div align="left">รหัสผ่าน:</div></td>
                <td bgcolor="#FFFFFF"><div align="left">
                  <input name="pswd" class="inputbox-normal" type="password" id="password" style="background: <?php if($errmsg6 || $errmsg8 || $errmsg9 || $errmsg10 ) echo "#EEFCE2"; ?>" value="<?php echo  (isset($pswd) ? $pswd :'')?>" size="25" maxlength="20" />
                  <span class="style34" style="color:#F00;">*</span> &nbsp;<span class="style30"  style="color:#B50B0F; font-size:12px;"> ต้องประกอบด้วย a-z หรือ 0-9 ระหว่าง 6-20 ตัว</span></div></td>
              </tr>
              <?php if($errmsg7) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td bgcolor="#FFFFFF"><div align="left">
                  <?php echo $errmsg7 ?>
                </div></td>
              </tr>
              <?php } ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF"><div align="left">ยืนยันรหัสผ่าน:</div></td>
                <td bgcolor="#FFFFFF"><div align="left">
                  <input name="cpswd" class="inputbox-normal" type="password" id="cpswd" style="background: <?php if($errmsg7 || $errmsg9 || $errmsg10 ) echo "#EEFCE2"; ?>"  value="<?php echo (isset($cpswd) ? $cpswd :'')?>" size="25" maxlength="20" />
                  <span class="style34" style="color:#F00;">*</span> &nbsp;<span class="style30"  style="color:#B50B0F; font-size:12px;"> ต้องประกอบด้วย a-z หรือ 0-9 ระหว่าง 6-20 ตัว</span></div></td>
              </tr>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <?php if($errmsg11) { ?>
              <?php } ?>
              <?php if($errmsg12) { ?>
              <?php } ?>
              <?php if($errmsg13) { ?>
              <?php } ?>
              <?php if($errmsg15) { ?>
              <?php } ?>
              <?php if($errmsg16) { ?>
              <?php } ?>
              <?php if($errmsg17) { ?>
              <?php } ?>
              <?php if($errmsg18) { ?>
              <?php } ?>
              <?php if($errmsg19) { ?>
              <?php } ?>
              <?php if($errmsg20) { ?>
              <?php } ?>
              <?php if($errmsg21) { ?>
              <?php } ?>
              <?php if($errmsg22) { ?>
              <?php } ?>
              </table>
            </fieldset>
            <fieldset style="width:800px; height:300px; border-color:#9C3; color:#069;  border-style: dotted" > 
			<legend style="color:#030">2.กรอบรายละเอียด</legend>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="3">
             <?php if($errmsg11) { ?>
              <tr>
                <td bgcolor="#FFFFFF">&nbsp;</td>
                <td height="1" bgcolor="#FFFFFF"><?php echo $errmsg11 ?></td>
              </tr>
              <?php } ?>
               <tr>
                <td bgcolor="#FFFFFF"><div align="left">คำนำหน้าชื่อ </div></td>
                <td height="1" bgcolor="#FFFFFF"><div align="left">
                  <select name="first_name" id="first_name">
                    <option selected>&#3609;&#3634;&#3618;</option>
                    <option>&#3609;&#3634;&#3591;</option>
                    <option>&#3609;&#3634;&#3591;&#3626;&#3634;&#3623;</option>
                    <option>&#3604;.&#3594;.</option>
                    <option>&#3604;.&#3597;.</option>
                  </select>
                  <span class="style29" style="color:#F00;">*</span></div></td>
              </tr>
			<?php if($errmsg12) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="1" bgcolor="#FFFFFF"><?php echo $errmsg12 ?></td>
              </tr>
              <?php } ?>
              <tr>
                <td height="" bgcolor="#FFFFFF">ชื่อ </td>
                <td height="1" bgcolor="#FFFFFF"><input type="text"  class="inputbox-normal" name="name" value="<?php echo (isset($name) ? $name :'')?>" id="name" style="background: <?php if($errmsg12) echo "#EEFCE2"; ?>"/>
                  <span class="style29"style="color:#F00;"> *</span><span class="style34"> &nbsp;</span></td>
              </tr>
              <?php if($errmsg13) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="" bgcolor="#FFFFFF"><?php echo $errmsg13 ?></td>
              </tr>
              <?php } ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF"><div align="left">นามสกุล</div></td>
                <td height="1" bgcolor="#FFFFFF"><input type="text" name="last_name"  class="inputbox-normal" id="last_name" style="background: <?php if($errmsg13 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($last_name) ? $last_name :'')?>" />
                  <span class="style29"style="color:#F00;">*</span></td>
              </tr>
              <?php if($errmsg15) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="1" bgcolor="#FFFFFF"><?php echo $errmsg15 ?></td>
              </tr>
              <?php } ?>
              <?php if($errmsg16) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="1" bgcolor="#FFFFFF"><?php echo $errmsg16 ?></td>
              </tr>
              <?php } ?>
              <?php if($errmsg17) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="1" bgcolor="#FFFFFF"><?php echo $errmsg17 ?></td>
              </tr>
              <?php } ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF"><div align="left">วันเกิด</div></td>
                <td height="1" bgcolor="#FFFFFF"><div align="left">
                  <select name="b_day" id="birth" style="background: <?php if($errmsg15 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($b_day) ? $b_day :'')?>">
                    <option selected value="0">-- วัน --</option>
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
                  <select name="b_month" id="b_month" style="background: <?php if($errmsg16 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($b_month) ? $b_month :'')?>">
                    <option selected value="0">-- เดือน --</option>
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
                  <select name="b_year" id="birth" style="background: <?php if($errmsg17 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($b_year) ? $b_year :'')?>">
                    <option selected value="0">-- ปี --</option>
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
                  <span class="style29" style="color:#F00;">*</span> &nbsp;</div></td>
              </tr>
              <?php if($errmsg18) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="" bgcolor="#FFFFFF"><?php echo $errmsg18 ?></td>
              </tr>
              <?php } ?>
              <?php if($errmsg19) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="1" bgcolor="#FFFFFF"><?php echo $errmsg19 ?></td>
              </tr>
              <?php } ?>
              <?php if($errmsg20) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="1" bgcolor="#FFFFFF"><?php echo $errmsg20 ?></td>
              </tr>
              <?php } ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">ประเทศ</td>
                <td height="1" bgcolor="#FFFFFF"><select name="nation" size="1" id=" nation" style="background: <?php if($errmsg18 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($nation) ? $nation :'')?>">
                  <option selected>-- สัญชาติ --</option>
                  <option>ไทย</option>
                </select>
                  <select name="origin" size="1" id="origin" style="background: <?php if($errmsg19 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($origin) ? $origin :'')?>">
                    <option>-- เชื้อชาติ --</option>
                    <option>ไทย</option>
                    <option>จีน</option>
                    <option>มลายู</option>
                  </select>
                  <select name="religion" size="1" id="religion" style="background: <?php if($errmsg20 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($religion) ? $religion :'')?>">
                    <option>-- ศาสนา --</option>
                    <option>อิสลาม</option>
                    <option>พุธ</option>
                    <option>คริสเตียน</option>
                  </select></td>
              </tr>
              <?php if($errmsg21) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="1" bgcolor="#FFFFFF"><?php echo $errmsg21 ?></td>
              </tr>
              <?php } ?>
              <?php if($errmsg22) { ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="1" bgcolor="#FFFFFF"><?php echo $errmsg22 ?></td>
              </tr>
              <?php } ?>
              <tr>
                <td height="1" bgcolor="#FFFFFF">เลขบัตรประชาชน</td>
                <td bgcolor="#FFFFFF"><input name="std_id" type="text" id="std_id" size="20" maxlength="13" class="inputbox-normal" style="background: <?php if($errmsg21 || $errmsg22 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($std_id) ? $std_id :'')?>" />
                  <span class="style29" style="color:#F00;">*</span></td>
              </tr>
              <tr>
                <td height="1" bgcolor="#FFFFFF">&nbsp;</td>
                <td bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              </table>
            </fieldset>
            
            <fieldset style="width:800px; height:400px;  border-color:#9C3; color:#069;  border-style: dotted">
            <legend style="color:#030">3.กรอบข้อมูลสำหรับการติดต่อ</legend>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="90">&nbsp;</td>
                <td width="198">&nbsp;</td>
                <td width="100">&nbsp;</td>
                <td width="223">&nbsp;</td>
              </tr>
              <?php if($errmsg23) { ?>
              <?php if($errmsg24) { ?>
              <tr>
                <td height="1">&nbsp;</td>
                <td><?php echo $errmsg23 ?></td>
                <td></td>
                <td><?php echo $errmsg24 ?></td>
              </tr>
              <?php } ?>
              <?php } ?>
              <tr>
                <td height="1" style="text-align: left">บ้านเลขที่</td>
                <td><label>
                  <input type="text" class="inputbox-normal" name="home" id="textfield" style="background: <?php if($errmsg23 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($home) ? $home :'')?>" >
                  <span class="style29" style="color:#F00;">*</span></label></td>
                <td>หมู่บ้าน/อาคาร</td>
                <td><div align="left">
                  <input name="m_home" class="inputbox-normal" type="text" id="m_home" size="10" style="background: <?php if($errmsg24 ) echo "#EEFCE2"; ?>" value="<?php echo  (isset($m_home) ? $m_home :'')?>"  />
                  <span class="style29" style="color:#F00;">*</span> &nbsp;</div></td>
              </tr>
              <?php if($errmsg25) { ?>
              <?php if($errmsg26) { ?>
              <tr>
                <td height="32">&nbsp;</td>
                <td><?php echo $errmsg25 ?></td>
                <td>&nbsp;</td>
                <td><?php echo $errmsg26 ?></td>
              </tr>
              <?php } ?>
              <?php } ?>
              <tr>
                <td height="32" style="text-align: left">ซอย/ถนน</td>
                <td><input name="r_home" class="inputbox-normal" type="text" id="r_home" size="10" style="background: <?php if($errmsg25 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($r_home) ? $r_home :'')?>" />
                  <span class="style29" style="color:#F00;">*</span></td>
                <td>แขวง/ตำบล</td>
                <td><div align="left">
                  <input name="v_home" class="inputbox-normal" type="text" id="v_home" size="10" style="background: <?php if($errmsg26 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($v_home) ? $v_home :'')?>" />
                  <span class="style29" style="color:#F00;">*</span> &nbsp;</div></td>
              </tr>
              <?php if($errmsg27) { ?>
              <?php if($errmsg28) { ?>
              <tr>
                <td height="23">&nbsp;</td>
                <td><?php echo $errmsg27 ?></td>
                <td>&nbsp;</td>
                <td><?php echo $errmsg28 ?></td>
              </tr>
              <?php } ?>
              <?php } ?>
              <tr>
                <td height="23" style="text-align: left">เขต/อำเภอ</td>
                <td><div align="left">
                  <input name="p_home" class="inputbox-normal" type="text" id="p_home" size="10" style="background: <?php if($errmsg27) echo "#EEFCE2"; ?>" value="<?php echo (isset($p_home) ? $p_home :'')?>" />
                  <span class="style29" style="color:#F00;">*</span> &nbsp;</div></td>
                <td>จังหวัด</td>
                <td><div align="left">
                  <input name="c_home" class="inputbox-normal" type="text" id="c_home" size="15" style="background: <?php if($errmsg28 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($c_home) ? $c_home :'')?>" />
                  <span class="style29" style="color:#F00;">*</span> &nbsp;</div></td>
              </tr>
              <?php if($errmsg29) { ?>
              <tr>
                <td height="30">&nbsp;</td>
                <td><?php echo $errmsg29 ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <?php } ?>
              <tr>
                <td height="30" style="text-align: left">รหัสไปรษณีย์</td>
                <td><div align="left">
                  <input name="post" type="text" class="inputbox-normal" id="post" size="15" maxlength="5" style="background: <?php if($errmsg29 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($post) ? $post :'')?>"/>
                  <span class="style29" style="color:#F00;">*</span> &nbsp;</div></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <?php if($errmsg30) { ?>
              <tr>
                <td height="27">&nbsp;</td>
                <td><?php echo $errmsg30 ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <?php } ?>
              <tr>
                <td height="27" style="text-align: left">โทรศัพท์</td>
                <td><input name="tel" type="text" class="inputbox-normal" id="tel" size="18" maxlength="20" style="background: <?php if($errmsg30 ) echo "#EEFCE2"; ?>" value="<?php echo (isset($tel) ? $tel :'')?>"/>
                  <span class="style29" style="color:#F00;">*</span> &nbsp;</td>
                <td>&nbsp;</td>
                <td><div align="left"></div></td>
              </tr>
              <?php if($errmsg5) { ?>
              <tr>
                <td>&nbsp;</td>
                <td><?php echo $errmsg5 ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <?php } ?>
              <tr>
                <td style="text-align: left">E-mail</td>
                <td><input name="email" class="inputbox-normal" type="text" id="email" style="background: <?php if($errmsg5) echo "#EEFCE2"; ?>" value="<?php echo (isset($email) ? $email :'')?>" size="25" /></td>
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
            </fieldset>
            
            <fieldset style="width:800px; height:230px; border-color:#9C3; color:#069; border-style: dotted">
            <legend style="color:#030">4.กรอบข้อมูลการศึกษา</legend>
            <table width="613" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="108">&nbsp;</td>
                <td width="312">&nbsp;</td>
                <td width="193">&nbsp;</td>
              </tr>
              <?php if($errmsg31) {?>
              <tr>
                <td>&nbsp;</td>
                <td><?php echo$errmsg31 ?></td>
                <td>&nbsp;</td>
              </tr>
              <?php } ?>
              <tr>
                <td>จบการศึกษาระดับ</td>
                <td><label for="eduplace"></label>
                  <label for="select"></label>
                  <select name="edulevel" id="select" style="background:<?php if($errmsg31) echo "#EEFCE2"; ?>" value="<?php echo (isset($edulevel) ? $edulevel :'')?>"/>                  
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
              <?php if($errmsg32) {?>
              <tr>
                <td>&nbsp;</td>
                <td><?php echo $errmsg32 ?></td>
                <td>&nbsp;</td>
              </tr>
              <?php }?>
              <tr>
                <td>จากสถานศึกษา</td>
                <td><label for="eduyear"></label>
                  <input type="text" name="eduplace" id="textfield3" class="inputbox-normal" style="background: <?php if($errmsg32) echo "#EEFCE2"; ?>" value="<?php echo (isset($eduplace) ? $eduplace :'')?>" /></td>
                <td>&nbsp;</td>
              </tr>
              <?php if($errmsg33) {?>
              <tr>
                <td>&nbsp;</td>
                <td><?php echo $errmsg33 ?></td>
                <td>&nbsp;</td>
              </tr>
              <?php } ?>
              <tr>
                <td>จังหวัด</td>
                <td><label for="textfield4"></label>
                  <input type="text" name="eduprovince" id="textfield4" class="inputbox-normal" style="background:<?php if($errmsg33) echo "#EEFCE2"; ?>" value="<?php echo (isset($eduprovince) ? $eduprovince :'')?>" /></td>
                <td>&nbsp;</td>
              </tr>
              <?php if($errmsg34) {?>
              <tr>
                <td>&nbsp;</td>
                <td><?php echo $errmsg34 ?></td>
                <td>&nbsp;</td>
              </tr>
              <?php } ?>
              <tr>
                <td>ปีการศึกษา</td>
                <td><label for="textfield5"></label>
                  <input type="text" name="eduyear" id="textfield5" class="inputbox-normal" style="background:<?php if($errmsg34) echo "#EEFCE2"; ?>" value="<?php echo (isset($eduyear) ? $eduyear :'')?>" /></td>
                <td>&nbsp;</td>
              </tr>
            </table>
            </fieldset>
            
            <fieldset style="width:800px; height:200px; border-color:#9C3; color:#069; border-style: dotted">
            <legend style="color:#033">5. กรอบข้อมูลเกี่ยวกับอาชีพ</legend>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="0">
             <tr>
             <td>ลักษณะอาชีพที่ท่านประกอบอยู่</td>
                  <td><div align="left">
                  <label for=""></label>
                  <select name="t_job">
                 <option value="0"selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- โปรดระบุ --&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                 <option>ไม่ได้ประกอบอาชีพ</option>
                 <option>ลูกจ้างบริษัท/ห้างร้าน</option>
                 <option>รับราชการ</option>
                 <option>พนักงานรัฐวิสาหกิจ</option>
                 <option>ค้าขาย</option>
                 <option>รับจ้างทั่วไป </option>
                </select>
              </div></td>  
              </tr>
            </table>
            </fieldset>
            <table width="0" border="0" align="left" cellpadding="5" cellspacing="0">
              <tr>
                <td width="273">&nbsp;</td>
                <td width="98">&nbsp;</td>
                <td width="212">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="ok" id="ok" value="ยืนยันการสมัคร" /></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr></td></tr></table>
      <tr>
        <td align="center"><p class="style34">______________________________________________________________________________________________________________________</p>          <p class="style38"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
    </form> 
</body>
</html>