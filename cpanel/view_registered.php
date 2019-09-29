<?php
session_start();
include('../db.php');
//include('auth.php');
extract ($_GET);
$active = isset($_GET['active']) ? $_GET['active'] : "";
$non_active = isset($_GET['non_active']) ? $_GET['non_active'] : "";
if(!empty($active)){
	$sql = "UPDATE course  SET status='1' WHERE cos_id='$active' ";
	$result = mysqli_query($connection,$sql);
	if($result){
		$msg = '<span style="color:green; font-weight:bold">'.$active.'</span>'. '  '.'สถานะได้เปิดใช้งานเสร็จสมบูณ์';
	}
	else{
		$msg = "Fail";
	}
}
	else
	{
		if(!empty($non_active)){
			$sql = "UPDATE course  SET status='0' WHERE cos_id='$non_active' ";
			$result = mysqli_query($connection,$sql);
			if($result){
				$msg = '<span style="color:red">'.$non_active.'</span>'. ' '.'สถานะได้ยกเลิกใช้งานเสร็จสมบูณ์';
			}
			else{
				$msg= "FAIL NON-active";	
			}
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::: แสดงรายชื่อผู้ลงทะเบียน :::</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style26 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
	}
	.style6 {
	font-size: 9px;
	font-style: normal;
	font-family: Verdana, Geneva, sans-serif;
	color: #666666;
	text-decoration:none;

}
.style34 {color: #666666;
	font-size: 13px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style36 {
	color: #FF6600;
	font-size: 36px;
	font-weight: bold;
}
.style38 {
	color: #55443E;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style25 {font-size: 13px; font-family: Tahoma; }
.style44 {color: #CCCCCC}
</style>
</head>

<body>
<table width="1260" border="0">
  <tr>
    <td><img src="../image/header-bg.png" width="1260" height="45" /></td>
  </tr>
  
  <tr>
    <td><table width="83%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="../image/student register.png" width="100" height="100" /></td>
        <td width="94%"><span class="style36">View<span class="style38"> Registered&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span class="style6"><a href="cpanel.php" class="style6" style="text-decoration:none" >| ControlPanel</a>&nbsp;</span><span class="style36"><span class="style38"> &nbsp;</span></span><span class="style6">&nbsp;</span><br />
          <span class="style34">แสดงรายชื่อนักศึกษาลงทะเบียน</span></td>
      </tr>
    </table></td>
  <tr>
   <td height="548" valign="top">
      <table width="737" height="31" align="left">
	  <?php if(isset($msg)){?>
        <tr>
          <td width="129" valign="top">&nbsp;</td>
          <td width="596" valign="top"><?php echo $msg?></td>
        </tr><?php }?>
      </table>
      <br />
      <br />
      <table width="1100" align="center">
        <tr>
       <td width="129" height="28" align="center" bgcolor="#FFCCFF"><strong>รหัส น.ศ.</strong></td>
        <td width="186" align="center" bgcolor="#FFCCFF"><strong>ชื่อ-สกุล</strong></td>
        <td width="160" align="center" bgcolor="#FFCCFF"><strong>ภาควิชา</strong></td>
        <td width="253" align="center" bgcolor="#FFCCFF"><strong>แผนกวิชา</strong></td>
        <td width="143" align="center" bgcolor="#FFCCFF"><strong>อาจารย์</strong></td>
        <td width="89" align="center" bgcolor="#FFCCFF">สถานะ</td>
        <td width="51" align="center" bgcolor="#FFCCFF">Active</td>
        <td width="53" align="center" bgcolor="#FFCCFF">Non-active</td>
      </tr>
      
    <?php
  include('../db.php');
  ////////first///////////////
  	$reg = "select * from register ORDER BY std_id DESC ";
	$r = mysqli_query($connection,$reg);
	while ($ro = mysqli_fetch_array($r)){
		$cos=$ro["cos_id"];
		$std=$ro["std_id"];
		$lec=$ro["lec_id"];
		//echo $std;
		//echo $cos;
		//echo $lec;
		//////////////third////////////////
   $sql1 ="select * from course where cos_id='$cos' ";
   $result = mysqli_query($connection,$sql1);
   while ($row= mysqli_fetch_array($result))
	{
	$cos_id= $row["cos_id"];
	$cos_group=$row["cos_group"];
	$cos_name = $row["cos_name"];
	//$cos_period = $row["cos_period"];	
	//$cos_day = $row["cos_day"];
	//$lec_id = $row["lec_id"];
	//$cos_comment = $row["cos_comment"];
//	echo $cos_id;
	//echo $cos_name;
  ///////////////////////second///////////////////////
	$sql = "select * from student where std_id='$std'";
	$re = mysqli_query($connection,$sql);
	while ($ro1= mysqli_fetch_array($re))
	{
		$std1= $ro1["std_id"];
		$name= $ro1["f_name"]."<span>".$ro1["name"]."-".$ro1["s_name"];
	
	//////////////////forth/////////////////////
    $sql2 = "select * from lecture where lec_id = '$lec' ";
	  $a =mysqli_query ($connection,$sql2);
	while ($row1= mysqli_fetch_array($a))
	{
	$lec_name= $row1["lec_name"];
	//echo $lec_name;
	?>
      <tr>
        <td width="129" bgcolor="#FFFFE8"> <?php echo (isset($std) ? $std : '')?></td>
        <td width="186" bgcolor="#FFE1FF"><?php echo (isset($name) ? $name : '')?></td>
        <td width="160" align="left" bgcolor="#FFFFE8"><?php echo (isset($cos_group) ? $cos_group : '')?></td>
        <td bgcolor="#FFFFE8"><?php echo (isset($cos_name) ? $cos_name : '')?></td>
        <td align="left" bgcolor="#FFFFE8"><?php echo (isset($lec_name) ? $lec_name : '')?></td>
        <td align="center" bgcolor="#FFFFCC">
		<?php $status=$row["status"];
	       if($status== 1){
			   echo '<span style="color:green">ACTIVE</span>';
		   }
		   else
		   {
			   echo '<span style="color:red">NON-ACTIVE</span>';
		   }
	    ?>
        </td>
        <td align="center" bgcolor="#FFFFE8"><a href="view_registered.php?active=<?php echo $ro["cos_id"];?>"><img src="image/active.gif" width="20" height="18" border="0" /></a></td>
        <td align="center" bgcolor="#FFFFE8"><a href="view_registered.php?non_active=<?php echo $ro["cos_id"]; ?>"><img src="image/non-active.jpg" width="16" height="17" border="0" /></a></td>
      </tr>
       <?php ////// close first while //////////////////////////////////////////////
		} //////// close of second while ////////////////////
	 } /////// close 3rd while ///////////////////////
	}}
		?>
  </table>
      <p class="style44">&nbsp;</p>
    <p class="style44">&nbsp;</p>
    <p class="style44">&nbsp;</p>
    <p class="style44">&nbsp;</p>
  <p class="style44">&nbsp;</p>
  <p class="style44">&nbsp;</p>
  <p class="style44">&nbsp;</p>
  <p class="style44">&nbsp;</p>
  <p class="style44">_________________________________________________________________________________________________________________________________________  </p>    
  </tr>
  <tr>
    <td height="19" valign="top"><div align="center"><span class="style25">&copy;<span class="style34"> Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></td>
  </tr></tr>
</table>
</body>
</html>
