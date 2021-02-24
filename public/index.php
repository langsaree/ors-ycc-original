<?php
/**
 * LangsariEngine - A Delicious PHP Component
 *
 * @package  BuduEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

session_start();

include('../config/function.php');
connection();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

// To check login user if already login then hide login form
if ($_POST) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($password)) {
            $studentCheckLoginSQL = "select * from student where username = '$username' and password = '$password'";
            $result = mysqli_query($connection, $studentCheckLoginSQL);
            while ($row = mysqli_fetch_array($result)) {
                echo $row['username'], $row['password'], $row['std_id'];
            }
            $count = mysqli_num_rows($result);
            if ($count) {
                $tocount = mysqli_fetch_assoc($result);
                $_SESSION['std_id'] = $tocount["std_id"];
                $_SESSION['username'] = $tocount["username"];

                echo $_SESSION['std_id'], $_SESSION['username'];

                header("Location:test.php");
            }
            if (!empty($username) && !empty($password)) {
                $lecturerCheckLoginSQL = "select * ";
                $lecturerCheckLoginSQL .= "from lecture ";
                $lecturerCheckLoginSQL .= "where username = '$username' and password = '$password'";
                $result1 = mysqli_query($connection, $lecturerCheckLoginSQL);
                $count1 = mysqli_num_rows($result1);
                if ($count1) {
                    $count1 = mysqli_fetch_assoc($result1);
                    $_SESSION['lec_id'] = $count1["lec_id"];
                    $_SESSION['username'] = $count1["username"];
                    header("Location:test.php");
                } else {
                    $message = "incorrect ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบข้อมูลด้วย";
//                    echo $username, $password;
                }
            }
        } else {
            header("Location:index.php");
        }
    } elseif (empty($_POST['username']) && empty($_POST['password'])) {
        $message = "กรุณากรอกชื่อผู้ใช้และรหัสผ่านของท่านด้วย";
    } elseif (empty($_POST['username']) && !empty($_POST['password'])) {
        $message = "กรุณากรอกชื่อผู้ใช้ของท่านด้วย";
    } elseif (!empty($_POST['username']) && empty($_POST['password'])) {
        $message = "กรุณากรอกรหัสผ่านของท่านด้วย";
    } else {
        $message = "ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบข้อมูลด้วย";
    }
}
?>

<?php // menu, login form and right side
include 'include/menuAndLogin.php' ?>

</div><div class="MainColumn">
    <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>

        <div class="Article">
            <br>
            <table width="601" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="52">&nbsp;</td>
                    <td width="129">&nbsp;</td>
                    <td width="420">&nbsp;</td>
                </tr>
                <tr>
                    <td height="26" colspan="3" style="color: #333; font-size: 16px; font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วิชาที่เปิดสอนประจำเดือนมกราคม 2554</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>

                            <?php
                            $sql_view = "select * from course where status='1' ";
                            $result_view = mysqli_query($connection, $sql_view);
                            while ($row = mysqli_fetch_array($result_view)) {

                            ?>

                <br>
                <table width="570" border="0" align="center" cellpadding="0" cellspacing="2">

                    <tr>
                        <td width="93" rowspan="5" valign="top"><img src="images/untitled.jpg" alt="" width="78" height="83" /></td>
                        <td height="19" colspan="3" valign="top"><?php echo '<span style="color:red; font-size:15px;  font-weight: bolder;">' . 'หมู่วิชา' . $row['cos_group'] . '</span>' ?></td>
                    </tr>
                    <tr>
                        <td width="21" valign="top">&nbsp;</td>
                        <td height="19" colspan="2" valign="top"><span class="o" style="font-weight: bolder">รหัสวิชา ::&nbsp;</span><?php echo $row['cos_id']; ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td colspan="2"><span class="o" style="font-weight: bolder">ชื่อวิชา :: &nbsp;</span><?php echo $row['cos_name']; ?></td>
                    </tr>

                    <tr>
                        <td style="color: #333">&nbsp;</td>
                        <td> <a href="course_down.php?id=<?php echo $row['cos_id']; ?>" style="color: #7A7A7A; text-decoration: none">ดาวน์โหลดผังการเรียน </a> </td>
                        <td width="112"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><a href="course_detail.php?id=<?php echo $row['cos_id']; ?>" style="color: #7A7A7A; text-decoration: none"">ดูรายละเอียด</a></td>
                        <td height="16">&nbsp;</td>
                    </tr>
                <?php } ?>
            </table>
            <p align="center">&nbsp;</p>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>

