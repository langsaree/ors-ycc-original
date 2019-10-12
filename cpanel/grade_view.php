<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view grade</title>
<link rel="stylesheet" href="style.css">

</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../public/image/header-bg.png" width="1280" height="45" /></td>
    </tr>
  </table>
  <table width="1280" height="551" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="image/view_grade.png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36"><span class="style45">View</span><span class="style38"> Grade</span></span></span><br />
            <span class="style34">แสดงเกรด</span></td>
        </tr>
    </table>
      <p><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
  
  <tr>
    <td height="392" valign="top"><p></p>
      <div align="center">
        <table width="353" height="76" border="0" cellpadding="0" cellspacing="10">
  <?php
	require_once("../public/class/db.class.php");
  $db = new Db;
  $connection = $db->connect();
  // $name = $_POST['name'];
	// $sql = "select * from student where name ='$name'";
	// $show = mysqli_query($connection, $sql);
	// while($shows = mysqli_fetch_row($show))
	// {
	?>
          <tr>
            <td width="173"><span class="style46">รหัสประจำตัวนักศึกษา :</span></td>
            <td width="144"><input type="text" name="name" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="2"><input name="Search" type="submit" id="Search" value="Search" /></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p class="style1">&nbsp; </p>
      </div>

      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left"><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
  <tr>
    <td height="19" valign="top"><div align="center"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></div></td>
  </tr>
</table>
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      
    </tr>
  </table>
</form>

</body>
</html>
