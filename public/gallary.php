<?php
session_start();
include('include/login.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>ภาพกิจกรรม</title>
    <script src="js/jquery.min.js"></script>
        <script src="js/galleria.js"></script>
        <style>
             html,body{background:#333}
            .content{color:#eee;font:14px/1.4 "helvetica neue", arial,sans-serif;width:620px;margin:20px auto}
              h1{line-height:1.1;letter-spacing:-1px;}
              a {color:#fff;}
              #galleria{height:400px;}

     </style>
     <link rel="stylesheet" href="style.css" />
     <style type="text/css">
      .style30 {color: #666666}
    </style>
    </head> 
    </div><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
       
          <div class="Article">
            <p align="center">
  <div class="content">
        <h1 class="style30">ภาพกิจกรรม</h1>
        
        <div id="galleria">
            <img src="gallary/pb058590.jpg">
            <img src="gallary/imga4838.jpg">
            <img src="gallary/imga4900.jpg">
            <img src="gallary/pb0585791.jpg">
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
</div>
<?php include('include/footer.php');?>
</body>
</html>

