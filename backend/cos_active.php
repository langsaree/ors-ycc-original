<?
session_start();
include('db.php');
extract($_GET);
$active = isset($_GET['active']) ? $_GET['active'] : "";
$non_active = isset($_GET['non_active']) ? $_GET['non_active'] : "";

$msg = "";
if (!empty($active)) {
    $sql = "UPDATE course SET status='1' WHERE cos_id='$active' ";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        $msg = '<span style="color:green; font-weight:bold">' . $active . '</span>' . '  ' . 'สถานะได้เปิดใช้งานเสร็จสมบูณ์';
    } else {
        $msg = "Fail";
    }
} else {
    if (!empty($non_active)) {
        $sql = "UPDATE course SET status='0' WHERE cos_id='$non_active' ";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            $msg = '<span style="color:red">' . $non_active . '</span>' . '  ' . 'สถานะได้ยกเลิกใช้งานเสร็จสมบูณ์';
        } else {
            $msg = "FAIL NON-active";
        }
    }
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>สถานะหลักสูตร</title>
    <style type="text/css">
        .main {
            font-size: 24px;
            color: #F63;
            font-family: Verdana, Geneva, sans-serif;
            font-weight: bolder;
        }

        .jjj {
            font-size: 16px;
            color: #666;
            font-family: Georgia, "Times New Roman", Times, serif;
        }

        .style6 {
            font-size: 9px;
            font-style: normal;
            font-family: Verdana, Geneva, sans-serif;
            color: #666666;
            text-decoration: none;

        }

        .inmain {
            font-size: 20px;
            color: #333;
            font-weight: bold;
            text-align: center;
            font-family: Verdana, Geneva, sans-serif;
        }

        midle {
            text-align: center;
        }

        midle {
            text-align: center;
        }

        .hhhhh {
            font-size: 12px;
            text-align: center;
        }

        midle {
            font-size: 12px;
        }

        p.one {
            border-style: dashed;
            border-width: 2px;
            border-color: #8A9AA6;
        }

        write {
            color: #FFF;
        }

        non {
            font-size: 14px;
        }

        #form1 table tr td table tr .one {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 14px;
        }

        .style26 {
            font-family: Geneva, Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 21px;
        }

        .style36 {
            color: #FF6600;
            text-align: left;
        }

        .style38 {
            color: #55443E;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
<table width="1024" border="0" cellpadding="0" cellspacing="2">
    <tr>
        <td width="32">&nbsp;</td>
        <td width="124">&nbsp;</td>
        <td width="659">&nbsp;</td>
        <td width="199">&nbsp;</td>
    </tr>
    <tr>
        <td height="100" valign="top">&nbsp;</td>
        <td valign="top"><img src="image/course_active.jpg" width="80" height="70"/></td>
        <td valign="top"><p><span class="jjj"><span class="main">Course </span></span><span class="inmain">Status</span>
                &nbsp;&nbsp;<span class="style26"><span class="style36"><span
                                class="style38">&nbsp;</span></span></span>| <a href="cpanel.php" class="style6" ;
                                                                                style="text-decoration:none">ControlPanel</a>
                | <a href="manage_course.php" class="style6" style="text-decoration:none">ManageCourse</a><br/>
                <span class="jjj">แก้ไขสถานะหลักสูตร</span><br/>
            </p>
            <p>&nbsp;</p></td>
        <td>&nbsp;</td>
    </tr>
</table>
<table width="1024" border="0" cellpadding="0" cellspacing="0"> <? if ($msg) { ?>
        <tr>
            <td width="26" height="61">&nbsp;</td>
            <td width="465"><p class="one"><br/>
                    &nbsp;&nbsp;
                    <?= $msg ?>
                    <br/>
                    <br/>
                </p></td>
            <td width="505">&nbsp;</td>
            <td width="18">&nbsp;</td>
        </tr>
    <? } ?>
</table>
<?
$sql = "select * from course order by status DESC";
$result = mysqli_query($connection, $sql);
$sql2 = "select * from number ";
$result2 = mysqli_query($connection, $sql2);

?>
<table width="1024" border="0" cellpadding="0" cellspacing="2">
</table>
<form id="form1" name="form1" method="post" action="">
    <table width="1001" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr>
            <td width="997" height="25" align="center" valign="top">
                <table width="1100" border="0" align="center" cellpadding="0" cellspacing="2">
                    <tr>
                        <td width="19" height="36">&nbsp;</td>
                        <td width="178" align="center" bgcolor="#FF9933" class="one">รหัสหลักสูตร</td>
                        <td width="582" align="center" bgcolor="#FF9933" class="one">ชื่อหลักสูตร</td>
                        <td width="204" align="center" bgcolor="#FF9933" class="one">สถานะ</td>
                        <td width="51" bgcolor="#FF9933" class="hhhhh">ACTIVE</td>
                        <td width="52" bgcolor="#FF9933" class="hhhhh">NON-ACTIVE</td>
                    </tr>
                    <? while ($row = mysqli_fetch_array($result)) { ?>
                        <? // while($row2 = mysql_fetch_array($result2)){?>
                        <tr>
                            <td height="19" valign="top"><? //= $row2[number]; ?></td>
                            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;
                                <?= $row['cos_id'] ?></td>
                            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;
                                <?= $row['cos_name'] ?></td>
                            <td bgcolor="#FFDDFF" class="hhhhh"><? $status = $row['status'];
                                if ($status == 1) {
                                    echo '<span style="color:green">ACTIVE</span>';
                                } else {
                                    echo '<span style="color:red">NON-ACTIVE</span>';
                                }
                                ?></td>
                            <td align="center" valign="top"><a href="cos_active.php?active=<?= $row['cos_id']; ?> "><img
                                            src="image/active.gif" width="20" height="18" border="0"
                                            align="middle"/></a></td>
                            <td align="center" valign="top"><a
                                        href="cos_active.php?non_active=<?= $row['cos_id']; ?>"><img
                                            src="image/active_non.jpg" width="16" height="16" border="0"/></a></td>
                        </tr>
                    <? }//} ?>
                </table>
            </td>
        </tr>
    </table>
</form>
</body>
</html>