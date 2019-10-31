<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add new grade</title>
<link rel="stylesheet" href="style.css" />

</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../public/image/header-bg.png" width="1280" height="45" /></td>
    </tr>
  </table>
  <table width="1280" height="879" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="image/add_grade .png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36"><span class="style45">Add</span>  <span class="style38">New Grade </span></span></span><br />
            <span class="style34">เพิ่มเกรดใหม่</span></td>
        </tr>
    </table>
      <p><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
  <tr>
    <td height="702" valign="top"><p></p>
      <table width="100%" border="0" cellspacing="5" cellpadding="0">
        <tr>
          <td colspan="2" align="center">&nbsp;</td>
        </tr>
        <!-- <?php if($error[0]) { ?> -->
        <tr>
          <td width="32%" align="right"><span class="style40">รหัสวิชา :</span> </td>
          <td width="68%" class="red"><label>
            <input name="textfield" type="text" size="20" />
          </label></td>
        </tr>
        <!-- <?php } ?> -->
        <tr>
          <td width="32%" align="right"><span class="style40">ชื่อวิชา :</span></td>
          <td width="68%"><label>
            <input name="textfield2" type="text" size="30" />
          </label></td>
        </tr>
        <!-- <?php if($error[1]) { ?> -->
        <tr>
          <td align="right"><span class="style40">จำนวนชั่วโมง/หน่วยกิต :</span></td>
          <td class="red"><input name="textfield3" type="text" size="20" /></td>
        </tr>
        <!-- <?php } ?> -->
        <tr>
          <td align="right"><span class="style40">วัน :</span></td>
          <td><label>
            <input name="textfield4" type="text" size="30" />
          </label></td>
        </tr>
        <!-- <?php if($error[2]) { ?> -->
        <tr>
          <td align="right"><span class="style40">เวลา :</span></td>
          <td class="red"><input name="textfield5" type="text" size="30" /></td>
        </tr>
        <!-- <?php } ?> -->
        <tr>
          <td align="right"><span class="style40">อาจารย์ผู้สอน :</span></td>
          <td><input name="textfield6" type="text" size="25" /></td>
        </tr>
        <!-- <?php if($error[3]) { ?> -->
        <tr>
          <td align="right"><span class="style40">หมายเหตุ :</span></td>
          <td class="red"><label>
            <textarea name="textarea" cols="50"></textarea>
          </label></td>
        </tr>
        <!-- <?php } ?> -->
        <!-- <?php if($error[4]) { ?> -->

        <!-- <?php } ?> -->

        <!-- <?php if($error[5]) { ?> -->

        <!-- <?php } ?> -->
        <!-- <?php if($error[6]) { ?> -->

        <!-- <?php } ?> -->

        <!-- <?php if($error[7]) { ?> -->

        <!-- <?php } ?> -->
        <!-- <?php if($error[8]) { ?> -->

        <!-- <?php } ?> -->
        <!-- <?php if($error[9]) { ?> -->

        <!-- <?php } ?> -->

        <tr>
          <td align="right">&nbsp;</td>
          <td><label>
            <input type="submit" name="button" id="button" class="button" value="บันทึก" />
            <input type="button" name="button2" id="button2" class="button" value="ยกเลิก" onclick="window.location='index2.php?option=manage_user&amp;group=<?php echo $_REQUEST['group'] ?>'" />
          </label></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
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
