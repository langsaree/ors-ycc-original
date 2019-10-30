<?php
include("../config/db.php");
$lec_id= $_POST['lec_id'];
$lec_name= $_POST['lec_name'];
//$m_address= $_POST['address'];
$lec_tel= $_POST['lec_tel'];
$lec_email= $_POST['lec_email'];
$lec_comment= $_POST['lec_comment'];
#$sql = "insert into lecturer (lec_id, lec_name, lec_tel, lec_email, lec_comment) values('$lec_id','$lec_name','$lec_tel','$lec_email','$lec_comment')";

$sql = "update lecture set lec_id='$lec_id', lec_name='$lec_name', lec_tel='$lec_tel', lec_email='$lec_email', lec_comment='$lec_comment' where lec_id ='$lec_id'";

$result=mysqli_query($conn,$sql);

if  (!$result)
	{
		die("could not query db ".mysqli_error($conn));
		$error='<span style="color:red">กรุณากรอบข้อมูลให้ถูกต้อง</span>';
		include('lec_update.php');
	}
	else
	{
		$success= '<span style="color:green">ระบบได้แก้ไขข้อมูลอาจรย์ผู้สอนแล้ว</span>';
		include ('manage_lecturer.php');
	}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update process</title>
</head>

<body>
</body>
</html>
