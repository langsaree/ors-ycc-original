<?php
include('../config/db.php');
extract($_GET);
$std_id=$id;
?>

<?php
if(isset($_POST['Update'])){
    $login = $_POST['login'];
    $pswd = $_POST['pswd'];

    $first_name=$_POST['first_name'];
    $name=$_POST['name'];
    $last_name=$_POST['last_name'];
    $nation=$_POST['nation'];
    $origin=$_POST['origin'];
    $religion=$_POST['religion'];
    $gender=$_POST['gender'];

    $birthday=$_POST['birthday'];
    $std_id=$_POST['std_id'];

    $address=$_POST['address'];
    $city=$_POST['city'];
    $province=$_POST['province'];
    $postalcode=$_POST['postalcode'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];


    $edulevel=$_POST['edulevel'];
    $eduplace=$_POST['eduplace'];
    $eduprovince=$_POST['eduprovince'];
    $eduyear=$_POST['eduyear'];

    $job=$_POST['job'];

    $query = "UPDATE student set username='$login',password='$pswd',first_name='$first_name',name='$name',last_name='$last_name',nation='$nation',origin='$origin',religion='$religion',gender='$gender',birthday='$birthday',std_id='$std_id',address='$address',city='$city',province='$province',postalcode='$postalcode',phone='$phone',email='$email',edulevel='$edulevel',eduplace='$eduplace',eduprovince='$eduprovince',eduyear='$eduyear',job='$job' WHERE std_id='$std_id'";

    $do = mysqli_query($connection, $query);
    if ($do)
    {
        header("location:std_view.php");
    }
    else{
        die("Could not select db".mysqli_error($connection));
        
    }}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update student</title>
<style type="text/css">

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style26 {	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 21px;
}
.style34 {	color: #666666;
	font-size: 13px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style36 {color: #FF6600}
.style38 {color: #55443E; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style25 {font-size: 13px; font-family: Tahoma; }
.style44 {color: #CCCCCC}
.style46 {color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; }
.style1 {color: #FF0000;
	font-weight: bold;
	font-size: 24px;
}
.style47 {font-family: Verdana, Arial, Helvetica, sans-serif}

</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../public/images/header.png" width="1280" height="45" /></td>
    </tr>
  </table>
  <table width="1280" height="723" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
      <td width="6%" align="center"><img src="image/student add.png" width="127" height="111" /></td>
      <td width="94%"><span class="style26"><span class="style36"><span class="style45">Update</span> <span class="style38">Student&nbsp;&nbsp;</span></span></span>
      <a href="cpanel.php" class="style6" style="text-decoration:none" > | ControlPanel | </a><a href="manage_student.php" class="style6" style="text-decoration:none" >ManageStudent | </a><a href="std_view.php" class="style6" style="text-decoration:none" >ViewStudent</a><br />
                <span class="style34">แก้ไขข้อมูลนักศึกษา</span></td>
        </tr>
    </table>
      <p><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>

  <tr>
    <td height="563" valign="top"><p></p>
      <div align="center">
        <p class="style1">Student Information </p>
          <?php
          $sql = "select * from student where std_id= $std_id ";
          $result = mysqli_query($connection, $sql);
          while ($row = mysqli_fetch_array($result))
          {

          ?>

            <table width="600" border="0" align="center" cellpadding="0" cellspacing="5">
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><p><img src="image/std_infor.png" width="111" height="126" align="top" /><br>
                            <span class="style62">รูปประจำตัว</span></p></td>

                </tr>
                <tr>

                </tr>
                <tr>
                    <td width="27" height="18">&nbsp;</td>
                    <td width="135" style="text-align: right; font-weight: bold; color: #333;" >ชื่อล็อกอิน :</span></td>
                    <td colspan="4"><label for="login"></label>
                        <input type="text" name="login" id="login" value="<?php echo $row['username'];?>">                    </tr>
                <tr>
                    <td height="18" style="text-align: right">&nbsp;</td>
                    <td style="text-align: right; color: #333; font-weight: bold;">รหัสผ่าน : </td>
                    <td colspan="4"><label for="pswd"></label>
                        <input type="password" name="pswd" id="pswd" value="<?php echo $row['password'];?>"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right; font-weight: bold; color: #333;">&nbsp;</td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right; font-weight: bold; color: #333;">คำนำหน้าชื่อ</td>
                    <td colspan="4"><label for="first_name"></label>  
                      <select name="first_name" size="1" id="first_name">
                      <option selected><?php echo $row['first_name'];?></option>
                      <option>-- โปรดระบุ --</option>
                      <option>นาย</option>
                        <option>นาง</option>
                        <option>นางสาว</option>
                        <option>ด.ช.</option>
                        <option>ด.ญ.</option>
                        <option>Miss.</option>
                        <option>Mr.</option>
                        <option>Mrs.</option>
                        <option>Ms.</option>
                        </select>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right; font-weight: bold; color: #333;">ชื่อ :</span></span></td>
                    <td colspan="4"><label for="name"></label>
                        <input type="text" name="name" id="name" value="<?php echo $row['name'];?>"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60" style="font-weight: bold">&#3609;&#3634;&#3617;&#3626;&#3585;&#3640;&#3621; : </span></td>
                    <td><label for="last_name"></label>
                        <input type="text" name="last_name" id="last_name" value="<?php echo $row['last_name'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60">สัญชาติ :</span></td>
                    <td><label for="nation"></label>
                        <input name="nation" type="text" id="nation" value="<?php echo $row['nation'];?>"></td>


                </tr>
                <tr>
                    <td >&nbsp;</td>
                    <td style="text-align: right"><span class="style60">เชื้อชาติ : </span></td>
                    <td>
                        <label for="origin"></label>
                        <input name="origin" type="text" id="origin" value="<?php echo $row['origin'];?>"></td>

                </tr>
                <tr>
                    <td height="19" >&nbsp;</td>
                    <td class="style60" style="text-align: right">ศาสนา :</td>
                    <td><label for="religion"></label>
                        <input name="religion" type="text" id="religion" value="<?php echo $row['religion'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right; font-weight: bold; color: #333;">เพศ :</span></span></td>
                    <td colspan="4"><label for="gender"></label>
                        <input type="text" name="gender" id="gender" value="<?php echo $row['gender'];?>"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60">วันเกิด : </span></td>
                    <td><label for="birthday"></label>
                        <input name="birthday" type="text" id="birthday" value="<?php echo $row['birthday'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span style="font-weight: bold; text-align: right;"><span class="style61">เลขบัตรประชาชน<span class="style46"> :</span></span></span></td>
                    <td><label for="std_id"></label>
                        <input name="std_id" type="text" id="std_id" maxlength="13" value="<?php echo $row['std_id'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right">&nbsp;</td>

                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style61"><span class="style60">บ้านเลขที่ :</span></span></td>
                    <td colspan="4"><label for="address"></label>
                        <textarea name="address" id="address" cols="23" rows="5"><?php echo $row['address'];?></textarea></td>
                </tr>


                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style47"><span class="style60">เขต/อำเภอ<span class="style46"> :</span></span></span></td>
                    <td><label for="city"></label>
                        <input type="text" name="city" id="city" value="<?php echo $row['city'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60" style="font-weight: bold">จังหวัด :</span></td>
                    <td><label for="province"></label>
                        <input type="text" name="province" id="province" value="<?php echo $row['province'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60">รหัสไปรษณีย์ : </span></td>
                    <td><label for="postalcode"></label>
                        <input type="text" name="postalcode" id="postalcode" value="<?php echo $row['postalcode'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60">โทรศัพท์ :</span></td>
                    <td><input type="text" name="phone" id="phone" value="<?php echo $row['phone'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60" style="font-weight: bold">E-mail :</span></td>
                    <td><label for="email"></label>
                        <input type="text" name="email" id="email" value="<?php echo $row['email'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right">&nbsp;</td>

                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="style60" style="text-align: right">จบการศึกษาระดับ :</td>
                    <td><label for="edulevel"></label>
                        <input type="text" name="edulevel" id="edulevel" value="<?php echo $row['edulevel'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="style60" style="text-align: right">จากสถานศึกษา :</td>
                    <td><label for="eduplace"></label>
                        <input type="text" name="eduplace" id="eduplace" value="<?php echo $row['eduplace'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="style60" style="text-align: right">จังหวัด :</td>
                    <td><label for="eduprovince"></label>
                        <input type="text" name="eduprovince" id="eduprovince" value="<?php echo $row['eduprovince'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="style60" style="text-align: right">ปีการศึกษา :</td>
                    <td><label for="eduyear"></label>
                        <input type="text" name="eduyear" id="eduyear" value="<?php echo $row['eduyear'];?>"></td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right">&nbsp;</td>

                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60" style="font-weight: bold">อาชีพ :</span></td>
                    <td>
                      <label for="select"></label>
                      <select name="job" id="job">
                        <option selected><?php echo $row["job"];?></option>
    
                        <option>-- โปรดระบุ --</option>
                        <option>ไม่ได้ประกอบอาชีพ</option>
                        <option>ลูกจ้างบริษัท/ห้างร้าน</option>
                        <option>รับราชการ</option>
                        <option>พนักงานรัฐวิสาหกิจ</option>
                        <option>ค้าขาย</option>
                        <option>รับจ้างทั่วไป </option>
                      </select>
                <tr>
                </tr>
                <tr>
                </tr>
                <?php } ?>
            </table>
            <table width="600" border="0" cellpadding="0" cellspacing="2">
                <tr>
                    <td width="178">&nbsp;</td>
                    <td width="65">&nbsp;</td>
                    <td width="65">&nbsp;</td>
                    <td width="282">&nbsp;</td>
                </tr>
                <tr>

                    <td>&nbsp;</td>
                </tr>
            </table>

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