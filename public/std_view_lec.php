<?php
session_start();
include('include/login.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ข้อมูลอาจารย์ผู้สอน</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css"/>
    <style type="text/css"></style>
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
            <br>
            <table width="650" border="0" align="center" cellpadding="0" cellspacing="2">
                <tr class="style25">
                    <td colspan="3">&nbsp;&nbsp;<span class="style56">&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------------------</span>
                    </td>
                </tr>
                <tr>
                    <td width="30">&nbsp;</td>
                    <td width="570" class="mainhead">ข้อมูลอาจารยผู้สอน</td>
                    <td width="11">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="3" class="style56">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------------------</td>
                </tr>
            </table>

            <?php
            include('db.php');
            //$sql="select * from lecturer,course where lecturer.cos_id=course.cos_id and username='$lec_user' ";
            $sql = "select * from lecturer ";
            $result = mysqli_query($connection, $sql);//????????
            while ($row = mysqli_fetch_array($result)){//????????
            ?>

            <table width="650" align="center">

                <tr>
                    <td width="26">&nbsp;</td>
                    <td width="124" rowspan="6"><img src="images/lecturer.png" width="124" height="120">
                    </td>
                    <td width="140" class="main" style="text-align: right">รหัสประจำตัว :</td>
                    <td width="321" class="maintext"><?= $row['lec_id']; ?></td>
                    <td width="15">&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="main" style="text-align: right">ชื่อ :</td>
                    <td class="maintext"><?= $row['lec_name']; ?></td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td class="main" style="text-align: right">Email :</td>
                    <td class="maintext"><?= $row['lec_email']; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="main" style="text-align: right">Phone :</td>
                    <td class="maintext"><?= $row['lec_tel']; ?></td>
                    <td>&nbsp;</td>
                </tr>


                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

                <?php } ?>

            </table>
            <table width="645" border="0" cellspacing="2" cellpadding="0">
                <tr>
                    <td>&nbsp;<span class="style56">&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------------------</span>
                    </td>
                </tr>
            </table>
            <br>
        </div>
    </div>
</div>
<?php include('include/footer.php'); ?>
</body>
</html>