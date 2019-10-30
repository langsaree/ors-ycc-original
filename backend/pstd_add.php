<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="charset=utf-8; url='manage_student.php'" />
<meta http-equiv="refresh" content="2 url='manage_student.php'" />
<title>Loading</title>
<style type="text/css">

.style1 {
	font-size: 36px;
	color: #DD0000;
	font-weight: bold;
}
.style4 {color: #0000FF}

</style>
</head>

<body>
<div align="center" class="style1">::: <span class="style4">ระบบทำการเพิ่มชื่อนักศึกษาได้เรียบร้อยแล้วครับ!!!</span> :::</div>
<div align="center" class="style1">::: <span class="style3">การลงทะเบียน เสร็จเรียบร้อย จะย้ายไปยังเพจหลักใน 3 วินาที</span> :::</div>
<?php
			header("Refresh:3; url=std_view.php");
			exit; 
			?>
</body>
</html>
