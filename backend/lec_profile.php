<?php

include('db.php');
extract($_GET);
$lec_id=$id;

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ข้อมูลนักศึกษา </title>
    <link rel="stylesheet" href="css/style1.css" />
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }
        .style26 {	font-family: Geneva, Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 21px;
        }
        .style34 {	color: #666666;
            font-size: 13px;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }
        .style36 {color: #FF6600}
        .style38 {color: #55443E; font-family: Verdana, Arial, Helvetica, sans-serif;}
        .style25 {font-size: 13px; font-family: Tahoma; }
        .style44 {color: #CCCCCC}
        .style46 {color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; }
        .style1 {color: #FF0000;
            font-weight: bold;
            font-size: 24px;
        }
        .style47 {font-family: Verdana, Arial, Helvetica, sans-serif}
        -->
        <!--
        .style7 {color: #3987FB; font-size: 14px; }
        .style54 {font-size: 14px}
        .style55 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
        .style56 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #CCCCCC; }
        .style58 {color: #333333}
        .style60 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #333333; }
        .style61 {font-size: 13px; color: #333333; }
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
        .style62 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #333333; }
        .style64 {
            font-size: 14px;
            font-weight: bold;
            color: #333333;
        }
        .style66 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 12px; color: #666666; }
        .style67 {font-size: 12px}
        -->
    </style>
</head>



</head>

<body>
<form id="form1" name="form1" method="post" action="">
    <table width="1260" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td><img src="image/header.png" width="1280" height="45" /></td>
        </tr>
    </table>
    <table width="1280" height="723" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
            <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
                    <tr>
                        <td width="6%" align="center"><img src="image/lecturer_view.png" width="100" height="100" /></td>
                        <td width="94%"><span class="style26"><span class="style36"><span class="style47">View</span><span class="style38"> Lecturer</span></span></span><br />
                            <span class="style34">ข้อมูลอาจารย์ผู้สอน</span></td>
                    </tr>
                </table>
                <p><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
        </tr>

        <tr>
            <td height="563" valign="top"><p></p>
                <div align="center">
                    <div class="Article">
                        <table width="650" height="867" border="0" align="left" cellpadding="0" cellspacing="5">
                            <tr>
                                <td width="747" height="480" align="right" valign="top">
                                    <table width="650" height="430" border="0" align="center" cellpadding="0" cellspacing="5">


                                        <tr>
                                            <td height="45" colspan="5"><div align="left">
                                                    <p class="style55"><span class="style58"> :::<strong> ข้อมูลอาจารย์ผู้สอน </strong> :::</span></p>
                                                    <?



                                                    $sql = "select * from lecturer where lec_id='$id'";
                                                    $result = mysqli_query($connection,$sql) or die( mysqli_error($connection));
                                                    while($row = mysqli_fetch_array($result))
                                                    {
                                                    ?>


                                                    <table width="637" height="62" border="0" cellpadding="0" cellspacing="5">

                                                        <tr>
                                                            <td height="16" colspan="3" valign="middle"><span class="style56">----------------------------------------------------------------------------------------</span></td>
                                                        </tr>
                                                    </table>
                                                </div></td>
                                        </tr>

                                            <tr>

                                                <td width="26">&nbsp;</td>
                                                <td width="124" rowspan="6"><img src="image/lecturer.png" width="124" height="120"></td>
                                                <td width="140" class="main" style="text-align: right">รหัสประจำตัว :</td>
                                                <td width="321" class="maintext"><?= $row['lec_id'];?></td>
                                                <td width="15">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="main" style="text-align: right">ชื่อ :</td>
                                                <td class="maintext"><?= $row['lec_name'];?></td>
                                                <td>&nbsp;</td>
                                            </tr>

                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="main" style="text-align: right">Email :</td>
                                                <td class="maintext"><?= $row['lec_email'];?></td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="main" style="text-align: right">Phone :</td>
                                                <td class="maintext"><?= $row['lec_tel'];?></td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="main" style="text-align: right">Username :</td>
                                                <td class="maintext"><?= $row['username'];?></td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="main" style="text-align: right">Password :</td>
                                                <td class="maintext"><?= $row['password'];}?></td>
                                                <td>&nbsp;</td>
                                            </tr>

                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>




                    </div>
                    <p align="left">&nbsp;</p>              </td>
        </tr>

    </table>
    <p align="center">&nbsp;</p>
    </div>








    <p class="style1">&nbsp; </p>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="left"><span class="style44">________________________________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
    <tr>
        <td height="19" valign="top"><div align="center"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></div></td>
    </tr>
    </table>
    <table width="1260" border="0" cellspacing="0" cellpadding="0">
        <tr>

        </tr>
    </table>
</form>

</body>
</html>


















