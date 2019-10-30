<title>delete process</title>
<?php
include ('../db.php');
extract($_GET);
$id= $id;
$sql = "delete from lecture where lec_id='$id'";

// to porform query
$result=mysqli_query($conn,$sql);

if (!$result)
  {
  die('Error: ' . mysqli_error($conn));
  }
  else
  	include ('lec_view.php');
	$success= '<span style="color:red"> ระบบได้ลบข้อมูลอาจารยเรียบร้อยแล้วค่ะ </span>';
	

?>
