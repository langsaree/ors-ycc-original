<?php
session_start();
include 'db.php';
include 'class/auth.class.php';
$auth = new Auth;

include './template/gallary.php';

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
            <p align="center">
  <div class="content">
        <h1 class="style30">ภาพกิจกรรม</h1>

        <div id="galleria">
            <img src="gallary/pb058590.jpg" >
            <img src="gallary/imga4838.jpg">
            <img  src="gallary/imga4900.jpg">
            <img src="gallary/pb058615.jpg">
            <img src="gallary/imga4884.jpg">
        </div>
        
    </div>
    <script>
    // Load the classic theme
    Galleria.loadTheme('galleria.classic.js');
    // Initialize Galleria
    $('#galleria').galleria();
    </script>



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
