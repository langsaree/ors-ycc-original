<?php
session_start();
include('include/login.php');
include('db.php');
extract ($_GET);
$cos_id=$id;
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>รายละเอียดหลักสูตร</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
<!--
.style25 {font-size: 11px; font-family: Tahoma; }
.style9 {font-size: 12px}
.style7 {color: #3987FB; font-size: 14px; }
.style26 {
	font-size: 14px;
	font-weight: bold;
	color:#000;
}
.style28 {font-size: 12px; font-weight: bold; }
-->
    </style>
</head>
<body>
<div class="MainColumn">
    <div class="ArticleBorder">
        <div class="ArticleBL">
            <div></div>
        </div>
        <div class="ArticleBR">
            <div></div>
        </div>
        <div class="ArticleTL">

        </div>
        <div class="ArticleTR">
            <div></div>
        </div>
        <div class="ArticleT">

        </div>
        <div class="ArticleR">
            <div></div>
        </div>
        <div class="ArticleB">
            <div></div>
        </div>
        <div class="ArticleL">
        </div>

          <div class="Article">
            <p>
  <?
$sql_view = "select * from course where cos_id='$cos_id' ";
$result_view = mysqli_query($connection, $sql_view);
while($row=mysqli_fetch_array($result_view))
{
?>
              
            </p>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="24" colspan="4" bgcolor="#333333" style="font-weight: bold; color: #FFF; font-size: 14px;">&nbsp;&nbsp;ข้อมูลหลักสูตร</td>
              </tr>
              <tr>
                <td height="16" style="font-weight: bold; color:#000">&nbsp;</td>
                <td style="font-weight: bold">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="34" height="18" style="font-weight: bold; color:#000;">&nbsp;</td>
                <td width="105" style="font-weight: bold;  color:#000;">ชื่อหลักสูตร</td>
                <td width="410" style="font-weight: bold;  color:#000;"><?= $row["cos_name"];?></td>
                <td width="52">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold;  color:#000;" >รหัสหลักสูตร</td>
                <td style="font-weight: bold;  color:#000;"><?= $row["cos_id"];?></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold;  color:#000;">หมู่วิชา</td>
                <td style="font-weight: bold;  color:#000;"><?= $row["cos_group"];?></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold;  color:#000;">จำนวนชั่วโมง</td>
                <td style="font-weight: bold;  color:#000;"><?= $row["cos_time"].' '.'ชั่วโมง';?></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="25" colspan="5" bgcolor="#333333" style="color: #FFF; font-weight: bold; font-size: 14px;">&nbsp;&nbsp;รายละเอียดหลักสูตร</td>
              </tr>
              <tr>
                <td width="129">&nbsp;</td>
                <td width="353">&nbsp;</td>
                <td width="38">&nbsp;</td>
                <td width="38">&nbsp;</td>
                <td width="41">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            
            </table>
            <table width="200" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td width="37">&nbsp;</td>
                <td width="125">&nbsp;</td>
                <td width="30">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><a href="confirm_course.php?id=<?=$row['cos_id']; ?>" ><img src="images/register1.jpg" width="200" height="40" border="0"></a></td>
                
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>  
              <? } ?>
            </table>
          </div>
        </div>
    </div>
<?php  include('include/footer.php');?>
</body>
</html>