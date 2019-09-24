<?  
include('db.php');
$query = ("select * from student,course ");     
//$query1 = ("select * from register "); 
	//$result1 = mysql_query($query) or die (mysql_error());
//$query = "select student.f_name.name.s_name,course.cos_id"."from student,course"."where student.f_name.name.s_name = course.cos_id";
 //  $result2 = mysql_query($query);
   $result = mysql_query($query) or die(mysql_error());  
   while ($row = mysql_fetch_array($result)) //or $row = mysql_fetch_array($result1))
   {
   $id = $row['std_id'];
   $fn = $row['f_name'];
   $n =  $row['name'];
   $ln =  $row['s_name'];
   $cn =  $row['cos_name'];
  // echo $row['f_name'].['name'].['s_name']."-".$row['cos_name'];
  
   
//echo $std_id;
 // $x = $result_row[1]; 
  // echo $cos_id;
   } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td width="17%" height="29" bgcolor="#CCCCCC"><div align="center">ชื่อผู้ใช้</div></td>
    <td width="20%" bgcolor="#CCCCCC"><div align="center">ชื่อ-สกุล</div></td>
    <td width="27%" bgcolor="#CCCCCC"><div align="center">รายวิชา</div></td>
    <td width="12%" bgcolor="#CCCCCC"><div align="center">แก้ไข</div></td>
    <td width="11%" bgcolor="#CCCCCC"><div align="center">ลบออก</div></td>
    <td width="13%" bgcolor="#CCCCCC"><div align="center">แสดงข้อมูลส่วนตัว</div></td>
  </tr>
  <tr>
    <td><div align="center"><? echo $id ; ?></div></td>
    <td><div align="center"><? echo $fn;?><? echo $n;?>-<? echo $ln;?></div></td>
    <td><div align="center"><? echo $cn; ?></div></td>
    <td><div align="center">update</div></td>
    <td><div align="center">delete </div></td>
    <td><div align="center"><a href="std_view2.php?id= <? echo $std_id; ?> ">แสดงรายละเอียด</a></div></td>
  </tr>
</table>
</body>
</html>
