<title>delete process</title>
<?php
require_once("../public/class/db.class.php");
$db = new Db;
$connection = $db->connect();

extract($_GET);
$id= $id;
$sql = "delete from lecturer where lec_id='$id'";

// to porform query
$result=mysqli_query($connection, $sql);

if (!$result)
  {
  die('Error: ' . mysql_error());
  }
  else
	$success= '<span style="color:red"> ระบบได้ลบข้อมูลอาจารยเรียบร้อยแล้วค่ะ </span>';
	include ('lec_view.php');

?>
