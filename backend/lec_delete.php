<title>delete process</title>
<?
include ('db.php');
extract($_GET);
$id= $id;
$sql = "delete from lecturer where lec_id='$id'";

// to porform query
$result=mysql_query($sql);

if (!$result)
  {
  die('Error: ' . mysql_error());
  }
  else
	$success= '<span style="color:red"> ระบบได้ลบข้อมูลอาจารยเรียบร้อยแล้วค่ะ </span>';
	include ('lec_view.php');

?>
