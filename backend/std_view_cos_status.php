<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>view student course status</title>
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

        .style40 {
            color: #333333;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 13px;
        }

        .style44 {
            color: #CCCCCC
        }

        .style45 {
            font-family: Verdana, Arial, Helvetica, sans-serif
        }

        -->
    </style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
    <table width="1260" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td><img src="../public/image/header-bg.png" width="1280" height="45"/></td>
        </tr>
    </table>
    <table width="1280" height="669" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
            <td height="74" valign="top">
                <table width="95%" align="center" border="0" cellspacing="10" cellpadding="0" class="header">
                    <tr>
                        <td width="6%" align="center"><img src="image/student add.png" width="100" height="100"/></td>
                        <td width="94%"><span class="style26"><span class="style36"><span
                                            class="style45">View</span>  <span
                                            class="style38"> Student Course Status </span></span></span><br/>
                            <span class="style34">แสดงข้อมูลนักศึกษา</span></td>
                    </tr>
                </table>
                <p><span class="style44">________________________________________________________________________________________________________________________________________________________________</span>
                </p></td>
        </tr>

        <tr>
            <td height="492" valign="top"><p>&nbsp;</p>
                <table width="25%" border="0" align="center" cellpadding="0" cellspacing="5">

                    <? if ($error[0]) { ?>
                        <tr>
                            <td width="36%" align="right"><span class="style40">รหัสวิชา :</span></td>
                            <td width="64%" class="red"><label>
                                    <input name="textfield" type="text" size="20"/>
                                </label></td>
                        </tr>
                    <? } ?>
                    <tr>
                        <td width="36%" align="right"><span class="style40">ชื่อวิชา :</span></td>
                        <td width="64%"><label>
                                <input name="textfield2" type="text" size="30"/>
                            </label></td>
                    </tr>
                    <? if ($error[1]) { ?>
                    <? } ?>
                    <? if ($error[2]) { ?>
                    <? } ?>
                    <? if ($error[3]) { ?>
                    <? } ?>
                    <? if ($error[4]) { ?>
                    <? } ?>
                    <? if ($error[5]) { ?>
                    <? } ?>
                    <? if ($error[6]) { ?>
                    <? } ?>
                    <? if ($error[7]) { ?>
                    <? } ?>
                    <? if ($error[8]) { ?>
                    <? } ?>
                    <? if ($error[9]) { ?>
                    <? } ?>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td><label>
                                <input name="Search" type="submit" id="Search" value="Search"/>
                            </label></td>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
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
