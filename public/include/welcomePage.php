<?php

/*
 * This sources code are the property of the (Kholed) Langsaree's
 * Under the concept of "Worth Software Spreading(WSS)"
 * Powered by : BuduEngine.
 */

/* 
 * IF user already logined display wellcome below  		
 */

echo '              ';
echo '<br><span class="style7">ยินดีต้อนรับ ::</span>';
echo '<span class="style26 "> ' . ucfirst($_SESSION['username']) . ' </span> <br>';
echo '<span class="style7"><a href="std_profile.php" style="color: #3987FB; text-decoration: none">ข้อมูลส่วนตัว</a></span><br>';
echo '<span class="style7"><a href="logout.php" style="color: #3987FB; text-decoration: none">ออกจากระบบ</a></span ><br>';

?>