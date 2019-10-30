<?php

include('db.php');
extract($_GET);
$id = $id;

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ข้อมูลนักศึกษา </title>
    <link rel="stylesheet" href="css/style1.css"/>
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }

        .style26 {
            font-family: Geneva, Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 21px;
        }

        .style34 {
            color: #666666;
            font-size: 13px;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }

        .style36 {
            color: #FF6600
        }

        .style38 {
            color: #55443E;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }

        .style25 {
            font-size: 13px;
            font-family: Tahoma;
        }

        .style44 {
            color: #CCCCCC
        }

        .style46 {
            color: #333333;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: bold;
        }

        .style1 {
            color: #FF0000;
            font-weight: bold;
            font-size: 24px;
        }

        .style47 {
            font-family: Verdana, Arial, Helvetica, sans-serif
        }

        -->
        <!--
        .style7 {
            color: #3987FB;
            font-size: 14px;
        }

        .style54 {
            font-size: 14px
        }

        .style55 {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        .style56 {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 14px;
            color: #CCCCCC;
        }

        .style58 {
            color: #333333
        }

        .style60 {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 13px;
            color: #333333;
        }

        .style61 {
            font-size: 13px;
            color: #333333;
        }

        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        a:active {
            text-decoration: none;
        }

        .style33 {
            font-family: Geneva, Arial, Helvetica, sans-serif;
            font-size: 10px;
            color: #666666;
        }

        .style62 {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 11px;
            color: #333333;
        }

        .style64 {
            font-size: 14px;
            font-weight: bold;
            color: #333333;
        }

        .style66 {
            font-family: Geneva, Arial, Helvetica, sans-serif;
            font-size: 12px;
            color: #666666;
        }

        .style67 {
            font-size: 12px
        }

        -->
    </style>
</head>


</head>

<body>
<form id="form1" name="form1" method="post" action="">
    <table width="1260" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td><img src="image/header.png" width="1280" height="45"/></td>
        </tr>
    </table>
    <table width="1280" height="723" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
            <td height="74" valign="top">
                <table width="95%" align="center" border="0" cellspacing="10" cellpadding="0" class="header">
                    <tr>
                        <td width="6%" align="center"><img src="image/student_update.png" width="100" height="100"/>
                        </td>
                        <td width="94%"><span class="style26"><span class="style36"><span
                                            class="style47">View</span><span
                                            class="style38"> Student</span></span></span><br/>
                            <span class="style34">ข้อมูลนักศึกษา</span></td>
                    </tr>
                </table>
                <p><span class="style44">________________________________________________________________________________________________________________________________________________________________</span>
                </p></td>
        </tr>

        <tr>
            <td height="563" valign="top"><p></p>
                <div align="center">
                    <div class="Article">
                        <table width="650" height="867" border="0" align="left" cellpadding="0" cellspacing="5">
                            <tr>
                                <td width="747" height="480" align="right" valign="top">
                                    <table width="650" height="430" border="0" align="center" cellpadding="0"
                                           cellspacing="5">


                                        <tr>
                                            <td height="45" colspan="5">
                                                <div align="left">
                                                    <p class="style55"><span class="style58"> :::<strong> ข้อมูลนักศึกษา &#3623;&#3636;&#3607;&#3618;&#3634;&#3621;&#3633;&#3618;&#3594;&#3640;&#3617;&#3594;&#3609;&#3618;&#3632;&#3621;&#3634;</strong> :::</span>
                                                    </p>
                                                    <table width="637" height="62" border="0" cellpadding="0"
                                                           cellspacing="5">

                                                        <tr>
                                                            <td height="16" colspan="3" valign="middle"><span
                                                                        class="style56">----------------------------------------------------------------------------------------</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="135" rowspan="2">&nbsp;</td>
                                            <td width="12" height="135" rowspan="2">&nbsp;</td>
                                            <td width="116" height="143"><img src="image/student_info.png" width="111"
                                                                              height="126" align="top"/></td>
                                            <td width="10">&nbsp;</td>
                                            <td width="258" height="135" rowspan="2">&nbsp;</td>
                                        </tr>

                                        <?

                                        //echo $cos_id;
                                        $sql = "select * from student where std_id='$id' ";
                                        $result = mysqli_query($connection, $sql);
                                        while ($row = mysqli_fetch_array($result))
                                        {
                                        ?>

                                        <tr>
                                            <td height="16">
                                                <div align="center"><span class="style62">รูปประจำตัว</span></div>
                                            </td>
                                            <td height="16">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="224" height="30">
                                                <div align="left" class="style46">
                                                    <div align="right" class="style58">ชื่อล็อกอิน :</div>
                                                </div>
                                            </td>
                                            <td colspan="4"><span class="style58"><?= $row['username']; ?></span></td>
                                        </tr>

                                        <tr>
                                            <td height="30">
                                                <div align="left" class="style60">
                                                    <div align="right">รหัสผ่าน :</div>
                                                </div>
                                            </td>
                                            <td colspan="4"><?= $row['password']; ?></td>
                                        </tr>

                                        <tr>
                                            <td height="31">
                                                <div align="right" class="style60">ชื่อ :</div>
                                            </td>
                                            <td colspan="3"><? echo $row['f_name']; ?>
                                                &nbsp; <? echo $row['name']; ?></td>
                                            <td>
                                                <span class="style60">&#3609;&#3634;&#3617;&#3626;&#3585;&#3640;&#3621;<span
                                                            class="style60"> :</span><span><? echo $row['s_name']; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="30">
                                                <div align="right" class="style60">เพศ :</div>
                                            </td>
                                            <td colspan="4"><? echo $row['gender']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="26">
                                                <div align="right" class="style60">วันเกิด :</div>
                                            </td>
                                            <td colspan="4"><? echo $row['birthday']; ?></td>
                                        </tr>
                                        <tr>
                                            <td height="29">
                                                <div align="right" class="style61">เลขบัตรประชาชน<span class="style46"> :</span>
                                                </div>
                                            </td>
                                            <td colspan="4"><? echo $row['std_id']; ?>   </td>
                                        </tr>

                                    </table>
                                    <div align="center">
                                        <table width="650" border="0" align="center" cellpadding="0" cellspacing="5">

                                            <tr>
                                                <td width="222" height="27">
                                                    <div align="right" class="style60"></div>
                                                </td>
                                                <td width="138">&nbsp;</td>
                                                <td width="102">
                                                    <div align="right" class="style60"></div>
                                                </td>
                                                <td width="163">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td height="26">
                                                    <div align="right" class="style61"><span class="style60">บ้านเลขที่ :</span>
                                                    </div>
                                                </td>
                                                <td><? echo $row['address']; ?></td>
                                                <td>
                                                    <div align="right" class="style60"><span
                                                                class="style47">เขต/อำเภอ<span class="style46"> :</span></span>
                                                    </div>
                                                </td>
                                                <td><? echo $row['city']; ?></td>
                                            </tr>
                                            <tr>
                                                <td height="27">
                                                    <div align="right" class="style47"><span
                                                                class="style60">จังหวัด :</span></div>
                                                </td>
                                                <td><? echo $row['province']; ?></td>
                                                <td>
                                                    <div align="right" class="style60">รหัสไปรษณีย์ :</div>
                                                </td>
                                                <td><? echo $row['postalcode']; ?></td>
                                            </tr>
                                            <tr>
                                                <td height="26">
                                                    <div align="right"><span class="style60">โทรศัพท์ :</span></div>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <div align="right" class="style60">โทรสาร :</div>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td height="27">
                                                    <div align="right" class="style60">E-mail :</div>
                                                </td>
                                                <td><? echo $row['email']; ?></td>
                                                <td>
                                                    <div align="right" class="style60">มือถือ :</div>
                                                </td>
                                                <td><? echo $row['phone']; ?></td>
                                            </tr>
                                            <tr>
                                                <td height="28">
                                                    <div align="right" class="style60"></div>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td></td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </table>
                                        <table width="650" border="0" align="center" cellpadding="0" cellspacing="5">

                                            <tr>
                                                <td width="222" height="26">
                                                    <div align="right" class="style54"><span class="style60">ขณะนี้ท่านประกอบอาชีพอยู่หรือไม่ :</span>
                                                    </div>
                                                </td>
                                                <td width="413">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td height="29">
                                                    <div align="right" class="style60">ลักษณะอาชีพที่ท่านประกอบอยู่ :
                                                    </div>
                                                </td>
                                                <td><? echo $row['job']; ?><? } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><span class="style56">-----------------------------------------------------------------------------------------</span>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                    <p align="left">&nbsp;</p></td>
                            </tr>

                        </table>
                        <p align="center">&nbsp;</p>
                    </div>


                    <p class="style1">&nbsp; </p>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p align="left"><span class="style44">________________________________________________________________________________________________________________________________________________________________</span>
                </p></td>
        </tr>
        <tr>
            <td height="19" valign="top">
                <div align="center"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span>
                </div>
            </td>
        </tr>
    </table>
    <table width="1260" border="0" cellspacing="0" cellpadding="0">
        <tr>

        </tr>
    </table>
</form>

</body>
</html>


















