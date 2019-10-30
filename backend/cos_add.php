<?php
include ('db.php');
session_start();
//>--code insert using for process add data
?>
<?php

$errmsg= "";$errmsg1 = "";$errmsg2 = "";$errmsg3 = "";$errmsg4 = "";$errmsg5 = "";$errmsg6 = "";$errmsg7 = "";$errmsg8 = "";

if(isset($_POST['ok'])); {
#============== function cos_id 
   $cos_id = $_POST['cos_id'];
   if(empty($cos_id)){
     $errmsg1 .='<span style="color:red; font-size:12px">คุณกรอบข้อมูลไม่สมบูรณ์</span>';}
   	#=========================== 	 
$cos_group = $_POST['cos_group'];
   if(empty($cos_group)){ 
   $errmsg2 .='<span style="color:red; font-size:12px">คุณกรอบข้อมูลไม่สมบูรณ์</span>';}
      	#=========================== 	 
$cos_name = $_POST['cos_name'];
   if(empty($cos_name)){ 
   $errmsg3 .='<span style="color:red; font-size:12px">คุณกรอบข้อมูลไม่สมบูรณ์</span>';}

   #========================
$cos_period = $_POST['cos_period'];
   if(empty($cos_period)){ 
   $errmsg4 .='<span style="color:red; font-size:12px">คุณกรอบข้อมูลไม่สมบูรณ์</span>';} 
   #============================
$cos_day =$_POST['cos_day'];
$cos_after =$_POST['cos_after'];
$cos_time =$_POST['cos_time'];
$date = $cos_day."-". $cos_after ."/". $cos_time;
//echo $date;
   if(empty($cos_day)){
   $errmsg5 .='<span style="color:red; font-size:12px">คุณกรอบข้อมูลไม่สมบูรณ์ day</span>'; }
   if(!$errmsg5){
	   if(empty($cos_comment)){
           $errmsg6 .='<span style="color:red; font-size:12px">คุณกรอบข้อมูลไม่สมบูรณ์ day2 </span>'; 
		   }}
   if(!$errmsg5 && !$errmsg6){
	   if(empty($cos_time)){
           $errmsg7 .='<span style="color:red; font-size:12px">คุณกรอบข้อมูลไม่สมบูรณ์ period </span>'; }}
   #====================================
$lec_id = $_POST['lec_id'];
   if(empty($lec_id)){
   $errmsg8 .='<span style="color:red; font-size:12px">คุณกรอบข้อมูลไม่สมบูรณ์</span>' ;}
   
$cos_comment =$_POST['cos_comment'];

if(!$errmsg1 && !$errmsg2 && !$errmsg3 && !$errmsg4 && !$errmsg5 && !$errmsg6 && !$errmsg7 && !$errmsg8)
{
mysqli_query ($conn,"SET NAMES 'utf8'");
$sql = "insert into course(cos_id,cos_group,cos_name,cos_period,cos_day,lec_id,cos_comment) value('$cos_id','$cos_group','$cos_name','$cos_period','$date','$lec_id','$cos_comment')";
$result = mysqli_query($conn,$sql);

?>

<?php
 if ($result){
   echo "<script>location ='cos_view.php';</script>";
   $text = "การลงทะเบียน เสร็จเรียบร้อย จะย้ายไปยังเพจหลักใน 3 วินาที ";
   echo "$text";
   exit;
 } else {
	 die("Error db".mysqli_error($conn));}
    
}}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>เพิ่มข้อมูลรายวิชา</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style4 {
  color: #DECBAD}
	
.style6 {
	font-size: 9px;
	font-style: normal;
	font-family: Verdana, Geneva, sans-serif;
	color: #666666;
	text-decoration:none;
}
.style36 {
  color: #FF6600
}
.style38 {
	color: #FF6600;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-style: normal;
	font-weight: bold;
}
.style45 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #666;
	font-weight: bold;
}
.style61 {
	font-size: 14px;
	font-style: normal;
	font-family: Verdana, Geneva, sans-serif;
	color: #666666;
	text-decoration:none;
}

</style>
</head>

<body>
  <table width="1325" height="136" border="0" cellpadding="0" cellspacing="2">
    <tr>
      <td width="30" height="111">&nbsp;</td>
      <td width="125"><img src="image/add_course.jpg" alt="" width="80" height="70" /></td>
      <td width="1162"><span style="font-size: 24px; font-weight: bold; color: #F30;">ADD</span> <strong style="font-size: 18px; color: #666;">Course </strong><a href="cpanel.php" class="style6" style="text-decoration:none" >| ControlPanel  | </a><a href="manage_course.php" class="style6" style="text-decoration:none; font-size: 9px;" >ManageCourse</a></span></p>
        <p class="style61">เพิ่มชื่อวิชาใหม่เข้าสู่ระบบ</p></td>
    </tr>
    <tr>
      <td height="19" colspan="3"><span class="style4">__________________________________________________________________________________________</span></td>
    </tr>
  </table>
  <form action="" method="POST">
  <table width="652" height="286" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#FFFFFF"><table width="652" height="286" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#FFFFFF"><table width="652" height="286" border="0" cellpadding="0" cellspacing="0">
            <?php if($errmsg1){?>
            <tr>
              <td height="26">&nbsp;</td>
              <td>&nbsp;</td>
              <td><?php echo  $errmsg1?></td>
            </tr>
            <?php } ?>
            <tr>
              <td width="227" height="26"><div align="right">รหัสวิชา</div></td>
              <td width="34">&nbsp;</td>
              <td width="339"><input type="text" name="cos_id" id="cos_id" style="background: <?php if($errmsg1) echo "#EEFCE2"; ?>" value="<?php $cos_id ?>" /></td>
            </tr>
            <?php if($errmsg2) {?>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><?php echo $errmsg2?></td>
            </tr>
            <?php }?>
            <tr>
              <td width="227" height="26"><div align="right">หมู่วิชา</div></td>
              <td width="34">&nbsp;</td>
              <td width="339"><input name="cos_group" type="text" id="cos_group" style="background:<?php if($errmsg2) echo "#EEFCE2"; ?>" value="<?php echo $cos_group ?>" /></td>
            </tr>
            <?php if ($errmsg3){?>
            <tr>
              <td height="27">&nbsp;</td>
              <td>&nbsp;</td>
              <td><?php echo $errmsg3 ?></td>
            </tr>
            <?php }?>
            <tr>
              <td width="227" height="26"><div align="right">รายวิชา</div></td>
              <td width="34">&nbsp;</td>
              <td width="339"><input type="text" name="cos_name" id="cos_name" style="background: <?php if($errmsg3 ) echo "#EEFCE2"; ?>" value="<?php echo $cos_name ?>"/></td>
            </tr>
            <?php if ($errmsg4) {?>
            <tr>
              <td height="27">&nbsp;</td>
              <td>&nbsp;</td>
              <td><?php echo $errmsg4?></td>
            </tr>
            <?php }?>
            <tr>
              <td height="27"><div align="right">จำนวนชั่วโมง/หน่วยกิจ</div></td>
              <td>&nbsp;</td>
              <td><input type="text" name="cos_period" id="cos_period"  style="background: <?php if($errmsg3 ) echo "#EEFCE2"; ?>"value="<?php echo $cos_period ?>" /></td>
            </tr>
            <?php if ($errmsg5 || $errmsg6 || $errmsg7) {?>
            <tr>
              <td height="30">&nbsp;</td>
              <td></td>
              <td><?php echo $errmsg5?>
                  <?php echo $errmsg6?>
                  <?php echo $errmsg7?>
                </td>
            </tr>
            <?php }?>
            <tr>
              <td height="30"><div align="right">วันที่เข้าเรียน</div></td>
              <td></td>
              <td><select name="cos_day" id="cos_day" style="background: <?php if($errmsg5 ) echo "#EEFCE2"; ?>" value="<?php echo $cos_day ?>">
                <option value="0" selected>เริ่ม</option>
                <option>จันทร์</option>
                <option>อังคาร</option>
                <option>พุธ</option>
                <option>พฤหัสบดี</option>
                <option>ศุกร์</option>
                <option>เสาร์</option>
                <option>อาทิตย์</option>
              </select>
                <select name="cos_after" id="cos_after"style="background: <?php if($errmsg6 ) echo "#EEFCE2"; ?>" value="<?php echo $cos_comment ?>">
                  <option value="0" selected="selected">ถึง</option>
                  <option value="จันทร์">จันทร์</option>
                  <option value="อังคาร">อังคาร</option>
                  <option value="พุธ">พุธ</option>
                  <option value="พฤหัสบดี">พฤหัสบดี</option>
                  <option value="ศุกร์">ศุกร์</option>
                  <option value="เสาร์">เสาร์</option>
                  <option value="อาทิตย์">อาทิตย์</option>
                </select>
                <select name="cos_time" id="cos_time"style="background: <?php if($errmsg7 ) echo "#EEFCE2"; ?>" value="<?php $cos_time ?>">
                  <option  value="0">ภาค</option>
                  <option value="เช้า">เช้า</option>
                  <option value="เย็น">เย็น</option>
                  <option value="เช้า - เย็น">เช้า - เย็น</option>
                </select></td>
            </tr>
            <?php if($errmsg8) {?>
            <tr>
              <td height="28">&nbsp;</td>
              <td>&nbsp;</td>
              <td><?php echo $errmsg8?></td>
            </tr>
            <?php }?>
            <tr>
              <td height="28"><div align="right">อาจารย์ผู้สอน</div></td>
              <td>&nbsp;</td>
              <td><input name="lec_id" type="text" id="lec_id" style="background: <?php if($errmsg8) echo "#EEFCE2"; ?>" value="<?php echo $lec_id ?>" /></td>
            </tr>
            <tr>
              <td>
                <div align="right">หมายเหตุ ::</div></td>
              <td>&nbsp;</td>
              <td><textarea name="cos_comment" id="cos_comment" cols="45" rows="5"></textarea></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><p>&nbsp;</p>
                <p>
                  <input type="submit" name="ok" id="ok" value="ยืนยัน" />
                  <input type="reset" name="cancel" id="button" value="ยกเลิก" />
                </p></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
  </form>
  <p>&nbsp;</p>
</body>
</html>