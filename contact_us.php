<?php
session_start();
include 'class/auth.class.php';
$auth = new Auth;
$db = new Db;
$connection = $db->connect();

include "./template/header.php";

if (!isset($_SESSION["username"])) // To check login user if already login then hide login form
{
    if (isset($_POST['username'])) {

        $message = $auth->login_check($_POST);
    }

    if (isset($message)) {
        echo '<span style="color:red">' . $message . '</span>';
    }

    include "./template/login_form.php";

} else {

    include "./template/logined.php";
}

?>
          <title>ติดต่อผู้ดูแลระบบ</title>
            <br>
          </div>
          <div class="Block">

            <span class="BlockHeader"><span>Menu</span></span>
            <div class="BlockContentBorder">

                <ul>
                    <li><span class="style7"><a href="index.php" style="color: #3987FB; text-decoration: none">หลักสูตรที่เปิด</a></span></li>
                    <li><span class="style7"><a href="manual.pdf" style="color: #3987FB; text-decoration: none">คู่มือการลงทะเบียน</a></span></li>
                </ul>
          </div>
        </div>

        </div><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
 <?php
// session_start();
$c_error = "";
if (isset($_POST['action'])) {
    if ($_POST['verifycode'] != $_SESSION['total']) {
        $c_error = '<span style="color:red">Verify Code ไม่ถูกต้อง โปรดใสใหม่อีกครั้ง</span>';
        // echo " Verify Code ไม่ถูกต้อง โปรดใสใหม่อีกครั้ง<br>";
    } else {
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From:  " . $_POST['name'] . " <" . $_POST['email'] . ">\r\n";

        $msgs .= " จากคุณ  " . $_POST['name'] . '<br>';
        $msgs .= " โทร  " . $_POST['tel'] . '<br>';
        $msgs .= "ข้อความ<br>" . $_POST['msg'];

        $mailto = "langsaree@gmail.com"; # อีเมล์ผู้รับ
        if (mail($mailto, $_POST['subj'], $msgs, $headers)) {
            echo "ส่งสำเร็จ";
        } else {
            echo "ผิดพลาด";
        }

        exit();
    }
}
?>
<?php
$num1 = rand(0, 10);
$num2 = rand(0, 10);
$_SESSION['total'] = ($num1 + $num2);
?>
          <div class="Article">
            <form id="form1" name="form1" method="post" action="">

              <table width="600" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><span class="style30">ติดต่อผู้ดูแลระบบ </span></td>
      </tr>
    <tr>
      <td width="32">&nbsp;</td>
      <td width="96">&nbsp;</td>
      <td width="259">&nbsp;</td>
      <td width="187">&nbsp;</td>
    </tr>

<?php
$username = isset($_POST['username']) ? $_POST['username'] : "";
$sql = "select * from student where username='$username' ";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_array($result)) {

    ?>
    <tr>
      <td>&nbsp;</td>
      <td><span class="style5">ชื่อผู้ใช้ : </span></td>
      <td><input type='text' name='name' value="<?php $row["username"];?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="style5">อีเมล์ :</span></td>
      <td><input type='text' name='email' value="<?php $row["email"];?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="style5">เบอร์โทรศัพท์ :</span></td>
      <td><input type='text' name='tel' value="<?php $row["phone"];?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <?php }?>
    <tr>
      <td>&nbsp;</td>
      <td><span class="style5">ชื่อเรื่อง :</span></td>
      <td><input type='text' name='subj' /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td height="84" valign="top"><span class="style5">ข้อความ :</span></td>
      <td><textarea name="msg" rows="4" cols="30"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="style5">Code :
        <?php echo '<span style="color:red;"> ' . $num1 . '</span>'; ?>
        <?php echo '<span style="color:green">+</span>'; ?>
        <?php echo '<span style="color:red"> ' . $num2 . '</span>'; ?>
      </span></td>
    <td colspan="2"><input type='text' name='verifycode' />
          <input type='hidden' name='action' value='1' />
          <?php echo $c_error; ?> </td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type='submit' value='ส่งข้อความ' /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
          </div>
        </div>



        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
        </div>
        </div></div>
        <div class="Footer"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan </span></div>
    </div>
</div>
    </body>
</html>