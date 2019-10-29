<?php
session_start();
include('../config/login.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Register courses</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css"/>
    <style type="text/css">

        .style25 {
            font-size: 11px;
            font-family: Tahoma;
        }

        .style9 {
            font-size: 12px
        }

        .style7 {
            color: #3987FB;
            font-size: 14px;
        }

        .style29 {
            color: #FFFFFF;
            font-size: 16px;
        }

    </style>
</head>
<div class="MainColumn">
    <div class="ArticleBorder">
        <div class="ArticleBL">
            <div></div>
        </div>
        <div class="ArticleBR">
            <div></div>
        </div>
        <div class="ArticleTL"></div>
        <div class="ArticleTR">
            <div></div>
        </div>
        <div class="ArticleT"></div>
        <div class="ArticleR">
            <div></div>
        </div>
        <div class="ArticleB">
            <div></div>
        </div>
        <div class="ArticleL"></div>
        <div class="Article">

            <table width="650" height="251" border="0" cellpadding="0" cellspacing="0" bordercolor="#999999">
                <tr>
                    <td width="304" height="251" valign="top">
                        <table width="298" height="224" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC"
                               bgcolor="#CCCCCC">
                            <tr bgcolor="#0099FF">
                                <td height="39" colspan="3" bgcolor="#0099FF"><span class="style29">&nbsp;For those who first register</span>
                                </td>
                            </tr>
                            <tr>
                                <td height="81" colspan="3" valign="top" bgcolor="#CCCCCC">&nbsp;&nbsp;If you have never
                                    enrolled before<br>
                                    &nbsp;&nbsp;You can click the button. Re-enroll &nbsp;&nbsp;To fill out various
                                    information To use in the course<br>
                                    &nbsp;&nbsp;Of Bangkok Community College
                                </td>
                            </tr>
                            <tr>
                                <td height="43" bgcolor="#CCCCCC">&nbsp;</td>
                                <td bgcolor="#CCCCCC"><input type="submit" name="button" id="button" value="Re-enroll"
                                                             onClick="document.location.href='register_course.php'">
                                </td>
                                <td bgcolor="#CCCCCC">&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="39" bgcolor="#CCCCCC">&nbsp;</td>
                                <td bgcolor="#CCCCCC">&nbsp;</td>
                                <td bgcolor="#CCCCCC">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="72" height="22" bgcolor="#CCCCCC">&nbsp;</td>
                                <td width="130" bgcolor="#CCCCCC"><label></label></td>
                                <td width="96" bgcolor="#CCCCCC">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                    <td width="346" valign="top">
                        <form action="std_login_check.php" method="POST">
                            <table width="336" height="211" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td height="39" colspan="3" bgcolor="#0099FF"><span class="style29"> &nbsp;For those who have already registered</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="72" colspan="3" valign="top" bgcolor="#CCCCCC">&nbsp;&nbsp;If you have
                                        previously enrolled in a course <br>
                                        &nbsp;&nbsp;Yala Community College then you can put <strong> <br>
                                            &nbsp;&nbsp;Login name</strong> And<strong>password</strong> your <br>
                                        &nbsp;&nbsp;In order to be able to enroll in other courses <br></td>
                                </tr>
                                <tr>
                                    <td colspan="3" bgcolor="#CCCCCC"><?php error_reporting('E_ALL & ~E_NOTICE');
                                        echo $std_error; ?></td>
                                </tr>
                                <tr>
                                    <td width="81" bgcolor="#CCCCCC">&nbsp;</td>
                                    <td width="233" bgcolor="#CCCCCC"><span class="style9">Login::</span></td>
                                    <td width="22" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#CCCCCC">&nbsp;</td>
                                    <td bgcolor="#CCCCCC"><input type="text" name="username2"/></td>
                                    <td bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#CCCCCC">&nbsp;</td>
                                    <td bgcolor="#CCCCCC"><span class="style9">password::</span></td>
                                    <td bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#CCCCCC">&nbsp;</td>
                                    <td bgcolor="#CCCCCC"><input type="password" name="password2"/></td>
                                    <td bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#CCCCCC">&nbsp;</td>
                                    <td bgcolor="#CCCCCC"><input type="submit" name="submit" id="ok2" value="log in"/>
                                        &nbsp;<a href="password_recovery.php">Forgot your password?</a></td>
                                    <td bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#CCCCCC">&nbsp;</td>
                                    <td bgcolor="#CCCCCC">&nbsp;</td>
                                    <td bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
            </table>
            <div align="center"></div>
            <p align="center">&nbsp;</p>
        </div>
    </div>
    <div class="ArticleBorder">
        <div class="ArticleBL">
            <div></div>
        </div>
        <div class="ArticleBR">
            <div></div>
        </div>
        <div class="ArticleTL"></div>
        <div class="ArticleTR">
            <div></div>
        </div>
        <div class="ArticleT"></div>
        <div class="ArticleR">
            <div></div>
        </div>
        <div class="ArticleB">
            <div></div>
        </div>
        <div class="ArticleL"></div>
    </div>
</div
</div>
<?php include('../config/footer.php'); ?>
</body>
</html>