<?php
include('../config/db.php');
extract ($_GET);

$cos_id=$id;  echo " หลักสูตรที่คุณเลือก <p>ได้ทำการลบออกจากระบบเรียบร้อยแล้วค่ะ!!!</p>";

$result = mysqli_query($connection, "delete from course where cos_id = $cos_id");
	if(!$result)
	{
	die("could not query db".mysql_error($connection));
	}
	else
	{
		header("location:cos_view.php");
	}
	
?>