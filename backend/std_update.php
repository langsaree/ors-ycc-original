<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update student</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../public/image/header-bg.png" width="1280" height="45" /></td>
    </tr>
  </table>
  <table width="1280" height="723" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="image/student update.png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36"><span class="style47">Update</span><span class="style38"> Student</span></span></span><br />
            <span class="style34">แก้ไขนักศึกษา</span></td>
        </tr>
    </table>
      <p><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>

  <tr>
    <td height="563" valign="top"><p></p>
      <div align="center">
        <p class="style1">Student Information </p>
        <table width="333" height="278" border="1">

  <?php

include "../public/class/db.class.php";
$db = new Db;
$connection = $db->connect();
extract($_GET);
$std_id = $_GET['id'];

if (isset($_POST["Update"])) {

    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $address = isset($_POST["address"]) ? $_POST["address"] : "";
    $city = isset($_POST["city"]) ? $_POST["city"] : "";
    $province = isset($_POST["province"]) ? $_POST["province"] : "";
    $postcode = isset($_POST["postcode"]) ? $_POST["postcode"] : "";

    $sql_update = "update student set name = '$name' ," . "s_name = '$lastname' ," . "gender = '$gender', " . "address = '$address'," .
        "city = '$city'," . "province = '$province', " . "postalcode = '$postcode'" . "where std_id = '$std_id'";

    if (mysqli_query($connection, $sql_update)) {
        echo "Record updated successfully";
    } else {
        mysqli_errno();
    }

}

$sql = "select * from student where std_id ='$std_id'";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_array($result))
// var_dump($row);
{
    ?>
          <tr>
            <td width="173"><span class="style46">ชื่อ :</span></td>
            <td width="144"><input type="text" name="name" value="<?php echo $row["name"]; ?>" /></td>
          </tr>
          <tr>
            <td><span class="style46">นามสกุล :</span></td>
            <td><input type="text" name="lastname" value="<?php echo $row["s_name"]; ?>" /></td>
          </tr>
          <tr>
            <td><span class="style46">เพช :</span></td>
            <td colspan="2"><input type="text" name="gender" value="<?php echo $row["gender"]; ?>" /></td>
          </tr>
          <tr>
            <td><span class="style46">ที่อยู่ :</span></td>
            <td><input type="text" name="address" value="<?php echo $row["address"]; ?>" /></td>
          </tr>
          <tr>
            <td><span class="style46">จังหวัด :</span></td>
            <td><input type="text" name="city" value="<?php echo $row["city"]; ?>" /></td>
          </tr>
          <tr>
            <td><span class="style46">อำเภอ :</span></td>
            <td><input type="text" name="province" value="<?php echo $row["province"]; ?>" /></td>
          </tr>
          <tr>
            <td><span class="style46">รหัสไปรสณี :</span></td>
            <td><input type="text" name="postcode" value="<?php echo $row["postalcode"]; ?>" /></td>
          </tr>
        </table>
            <?php }?>
        <p>
          <input name="Update" type="submit" id="Update" value="Update" />
        </p>
        <p class="style1">&nbsp; </p>
      </div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
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
