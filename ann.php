<?php
session_start();
include 'class/auth.class.php';
$auth = new Auth;
$db = new Db;
$connection = $db->connect();

include "./template/header.php";
echo "<title>ประชาสัมพันธ์</title>";

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

          <div class="Article">
            <p align="center"></p>
            <br>
            <p align="center"></p>
        </div>
        </div>

        <?php include "./template/footer.php"; ?>
        
    </body>
</html>
