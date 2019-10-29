<?php
session_start();
$username = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
    header("location:index.php");
}
//end of check session
include('db.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ข้อมูลนักศึกษา </title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css"/>
    <style type="text/css"></style>
</head>

<body>
<div class="BodyContent">
    <div class="BorderBorder">
        <div class="BorderBR">
            <div></div>
        </div>
        <div class="BorderTL"></div>
        <div class="BorderTR">
            <div></div>
        </div>
        <div class="BorderR">
            <div></div>
        </div>
        <div class="BorderB">
            <div></div>
        </div>
        <div class="BorderL"></div>
        <div class="Border">

            <div class="Menu">
                <ul>
                    <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a>
                    <a href="college.php" class="MenuButton"> <span>วิทยาลัย</span></a>
                    <a href="course.php" class="MenuButton"><span>หลักสูตร</span></a>
                    <a href="ann.php" class="MenuButton"><span>ประชาสัมพันธ์</span></a>
                    <a href="gallary.php" class="MenuButton"><span>ภาพกิจกรรม</span></a>
                    <a href="contact_us.php" class="MenuButton"><span> ติดต่อเรา</span></a>
                    <input name="text" type="text" style="width:120px"/>
                    <span class="ButtonInput"><span>
                 <input type="button" value="Search"/>
                 </span></span>
                </ul>
            </div>

            <div class="Header">
                <div class="HeaderTitle">
                    <div align="left"><img src="images/banner.jpg" width="836" height="250"></div>
                    <h1>&nbsp;</h1>
                </div>
            </div>

            <div class="Columns">
                <div class="Column1">

                    <div class="Block">

                        <span class="BlockHeader"><span>Online Register</span></span>
                        <table width="163" border="0" align="left" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="163">&nbsp;</td>
                            </tr>
                            <tr>
                                <td><span class="style64"><span
                                                style="color: #2192CF">ยินดีต้อนรับ</span> ::</span> <? echo '<span style="font-weight:bold; font-size:13px"> ' . $username . ' </span>'; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                        <br>
                        <br>
                    </div>

                    <div class="Block">

                        <span class="BlockHeader"><span>Menu</span></span>
                        <div class="BlockContentBorder">

                            <ul>
                                <li><span class="style7"><a href="index.php"
                                                            style="color: #3987FB; text-decoration: none">หลักสูตรที่เปิด</a></span>
                                </li>
                                <li><span class="style7"><a href="manual.pdf"
                                                            style="color: #3987FB; text-decoration: none">คู่มือการลงทะเบียน</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

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

                            <table width="650" height="961" border="0" align="center" cellpadding="0" cellspacing="5">
                                <tr>
                                    <td width="659" height="951" align="right" valign="top">
                                        <div align="left">
                                            <p class="style55"><span class="style58">::: <strong>ข้อมูลนักศึกษา วิทยาลัยชุมชนยะลา</strong> :::</span><br>
                                            </p>
                                        </div>


                                        <?php
                                        $sql_view = "SELECT * FROM student WHERE username ='$username' ";
                                        $result_view = mysqli_query($connection, $sql_view);
                                        $row = mysqli_fetch_array($result_view);
                                        ?>

                                        <table width="637" height="62" border="0" cellpadding="0" cellspacing="5">
                                            <tr>
                                                <td width="435" height="30" valign="middle">&nbsp;</td>
                                                <td width="99" valign="middle" class="style33"><a
                                                            href="profile_update.php?id=<?= $row['std_id']; ?>"
                                                            class="style67" style="text-decoration: none">แก้ไขข้อมูลส่วนตัว</a>
                                                </td>
                                                <td width="83" valign="middle"><span class="style66"><a
                                                                href="logout.php" style="text-decoration: none">ออกจากระบบ</a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="16" colspan="3" valign="middle"><span class="style56">----------------------------------------------------------------------------------------</span>
                                                </td>
                                            </tr>
                                        </table>

                                        <table width="600" border="0" align="center" cellpadding="0" cellspacing="2">
                                            <tr>
                                                <td width="229">&nbsp;</td>
                                                <td width="158">&nbsp;</td>
                                                <td width="221">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td><p><img src="images/std_infor.png" width="111" height="126"
                                                            align="top"/><br>
                                                        <span class="style62">รูปประจำตัว</span></p></td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </table>
                                        <legend></legend>

                                        <div align="center"></div>

                                        <table width="600" border="0" align="center" cellpadding="0" cellspacing="5">
                                            <tr>
                                                <td width="27" height="18">&nbsp;</td>
                                                <td width="196"
                                                    style="text-align: right; font-weight: bold; color: #333;">
                                                    ชื่อล็อกอิน :</span></td>
                                                <td colspan="4"><?php echo $row['username']; ?>
                                            </tr>
                                            <tr>
                                                <td height="18" style="text-align: right">&nbsp;</td>
                                                <td style="text-align: right; color: #333; font-weight: bold;">รหัสผ่าน
                                                    :
                                                </td>
                                                <td colspan="4"><?php echo $row['password']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right; font-weight: bold; color: #333;">&nbsp;
                                                </td>
                                                <td width="298">&nbsp;</td>
                                                <td width="12">&nbsp;</td>
                                                <td width="9">&nbsp;</td>
                                                <td width="23">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right; font-weight: bold; color: #333;">ชื่อ
                                                    :</span></span></td>
                                                <td><? echo $row["f_name"]; ?><? echo $row["name"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span class="style60"
                                                                                    style="font-weight: bold">นามสกุล : </span>
                                                </td>
                                                <td><? echo $row["s_name"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span class="style60">สัญชาติ :</span>
                                                </td>
                                                <td><? echo $row["nation"]; ?></td>
                                                <td class="style60">&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span class="style60">เชื้อชาติ : </span>
                                                </td>
                                                <td><? echo $row["origin"]; ?></span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td height="19">&nbsp;</td>
                                                <td style="text-align: right"><span class="style60">ศาสนา :</span></td>
                                                <td><? echo $row["religion"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td height="19">&nbsp;</td>
                                                <td style="text-align: right"><span class="style60">เพศ :</span></td>
                                                <td><? echo $row["gender"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span class="style60">วันเกิด : </span>
                                                </td>
                                                <td><? echo $row["birthday"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span
                                                            style="font-weight: bold; text-align: right;"><span
                                                                class="style61">เลขบัตรประชาชน<span
                                                                    class="style46"> :</span></span></span></td>
                                                <td><? echo $row["std_id"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right">&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span class="style61"><span
                                                                class="style60">บ้านเลขที่ :</span></span></td>
                                                <td colspan="4"><? echo $row["address"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span class="style47"><span
                                                                class="style60">เขต/อำเภอ<span class="style46"> :</span></span></span>
                                                </td>
                                                <td><? echo $row["city"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span class="style60"
                                                                                    style="font-weight: bold">จังหวัด :</span>
                                                </td>
                                                <td><? echo $row["province"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span
                                                            class="style60">รหัสไปรษณีย์ : </span></td>
                                                <td><? echo $row["postalcode"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span class="style60">โทรศัพท์ :</span>
                                                </td>
                                                <td><? echo $row["phone"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span class="style60"
                                                                                    style="font-weight: bold">E-mail :</span>
                                                </td>
                                                <td><? echo $row["email"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right">&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span
                                                            class="style60">จบการศึกษาระดับ :</span></td>
                                                <td><? echo $row["edulevel"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span
                                                            class="style60">จากสถานศึกษา :</span></td>
                                                <td><? echo $row["eduplace"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span class="style60">จังหวัด :</span>
                                                </td>
                                                <td><? echo $row["eduprovince"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span class="style60">ปีการศึกษา :</span>
                                                </td>
                                                <td><? echo $row["eduyear"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right">&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td style="text-align: right"><span class="style60"
                                                                                    style="font-weight: bold">อาชีพ :</span>
                                                </td>
                                                <td><? echo $row["job"]; ?></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </table>

                                        <table width="640" border="0" align="center" cellpadding="0" cellspacing="2">
                                            <tr>
                                                <td width="613"><span class="style56" style="text-align: center">&nbsp;&nbsp;----------------------------------------------------------------------------------------</span>
                                                </td>
                                            </tr>
                                        </table>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <?php include('include/footer.php'); ?>
</body>
</html>