<?php
/** 
 * BuduEngine - A Delicious PHP Framework
 * 
 * @package  BuduEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>ระบบลงทะเบียนออนไลน์</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="BodyContent">
            <div class="BorderBorder">
                <div class="BorderBL">
                    <div>

                    </div>
                </div>
                <div class="BorderBR">
                    <div>

                    </div>
                </div>
                <div class="BorderTL"></div><div class="BorderTR"><div></div></div>
                <div class="BorderR"><div></div></div><div class="BorderB"><div></div></div><div class="BorderL"></div>
                <div class="Border">

                    <div class="Menu">
                        <ul>
                            <li></li> 
                            <li></li> 
                            <li></li> <li></li> 
                            <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a>
                            <a href="college.php" class="MenuButton">  <span>วิทยาลัย</span></a>
                            <a href="course.php" class="MenuButton"><span>หลักสูตร</span></a>
                            <a href="ann.php" class="MenuButton"><span>ประชาสัมพันธ์</span> </a>
                            <a href="gallary.php" class="MenuButton"><span>ภาพกิจกรรม</span></a>
                            <a href="contact_us.php" class="MenuButton"><span> ติดต่อเรา</span></a>
                            <input name="text" type="text" style="width:120px" />
                            <span class="ButtonInput"><span>
                                    <input type="button" value="Search" />
                                </span></span></ul>
                    </div>
                    <div class="Header">
                        <div class="HeaderTitle">
                            <div align="left"><img src="images/banner.jpg" width="836" height="250"></div>
                            <h1>&nbsp;</h1>
                        </div>
                    </div><div class="Columns"><div class="Column1">

                            <div class="Block">

                                <span class="BlockHeader"><span>Online Register</span></span>
                                <table width="150" border="0" align="left" cellpadding="0" cellspacing="0">

                                </table>

                                <?php
                                if (!empty($message)) {
                                    echo "<span style=\"color:red\">$message</span>";
                                }
                                 ?>
                                <?php if (isset($_SESSION['lec_id']) || isset($_SESSION['std_id'])) { ?>
                                    <?php include 'include/welcomePage.php'; ?>
                                <?php } else { ?>
                                <?php include 'include/loginPage.php';?>
                                <?php } ?>

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
