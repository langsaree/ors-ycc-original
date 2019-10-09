<?php
session_start();
include 'class/auth.class.php';
$auth = new Auth;
$db = new Db;
$connection = $db->connect();

include 'class/bootstrap.class.php';
$bs = new BS;

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

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="gallary/pb058590.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="gallary/imga4838.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="gallary/imga4900.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="gallary/pb058615.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="gallary/imga4884.jpg" class="d-block w-100" alt="...">
        </div>
    </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

    </div>
</div>
        </div>
         </div>
         <?php include "./template/footer.php";?>

    </body>
    <?php $bs->bootstrap();?>
</html>
