<?
//session_start();
#if(!session_is_registered(username)){header("location:index.php");}
//end of check session
include "db.php";
$todo=$_POST['todo'];
if(isset($todo) and $todo=="search"){
$search_text=$_POST['search_text'];
$type=$_POST['type'];

$search_text=ltrim($search_text);
$search_text=rtrim($search_text);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Lecturer</title>
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
.style48 {color: #666666;
	font-size: 13px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style51 {
	color: #333333;
	font-weight: bold;
}
.style54 {color: #55443E; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 18px; }
.style52 {	color: #333333;
	font-size: 16px;
	font-weight: bold;
}
.style55 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>
</head>

<body>

  <table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../images/header-bg.png" width="1280" height="45" /></td>
    </tr>
  </table>
  <table width="1280" height="527" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="74" valign="top"><table width="95%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="../image/search lecture.png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36">Search<span class="style54"> Lecturer Information</span></span></span><br />
            <span class="style34">ค้นหา<span class="style48">ข้อมูลอาจารย์ผู้สอน</span></span></td>
        </tr>
    </table>
      <span class="style44">__________________________________________________________________________________________________________________________________________</span></td>
    </tr>
  
  <tr>
    <td height="350" valign="top">
      <form id="form1" name="form1" method="post" action="">
        <div align="left">
          <table width="400" border="0" align="center" cellpadding="0" cellspacing="5">
            <tr>
              <td><span class="style52">รหัส<span class="style55">อาจารย์ผู้สอน</span>เ::</span></td>
              <td><input type=hidden name=todo value=search />
                <input name="search_text" type="text" id="search" size="20" />
              &nbsp;</td>
              <td><input type="submit" name="button" id="button" value="ค้นหา" /></td>
            </tr>
            <tr>
              <td height="44">&nbsp;</td>
              <td>
                <input name="type" type="radio"  value="any" checked />                
                ทุกส่วน
                <br />
                <input name="type" type="radio" value="exact" />
                เหมือนเท่านั้น              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="159">&nbsp;</td>
             <td width="167"><label></label></td>
          <td width="54"><label></label></td>
            </tr>
          </table>
        </div>
      </form>
        <div align="left">
          <table width="87%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr class="style38">
              <td width="106"><div align="center" class="style51">รหัส</div></td>
              <td width="219"><div align="center" class="style51">ชื่อ-นามสกุล</div></td>
              <td width="206"><div align="center" class="style51">เบอร์โทรติดต่อ</div></td>
              <td width="226"><span class="style51">อีเมล์</span></td>
              <td width="226"><span class="style51">หมายเหตุ</span></td>
              <td width="226"><div align="center" class="style51">ดูข้อมูลอาจารยผู้สอน</div></td>
              
  <?
// check for blank input
if($search_text==""){$search_text="blank";}
// end of check

if($type<>"any"){
//$query="select * from $m where s_id='$search_text'";
$query="select * from lecture where lec_id='$search_text'";
		}else{
$kt=split(" ",$search_text);//Breaking the string to array of words
// Now let us generate the sql 
			while(list($key,$val)=each($kt)){
if($val<>" " and strlen($val) > 0){$q .= " lec_id like '%$val%' or ";}
			}// end of while
$q=substr($q,0,(strLen($q)-3));
// this will remove the last or from the string. 
$query="select * from lecture where $q order by lec_id limit 0, 20"; // start search query list as limit result at 10 result at a time
		} // end of if else based on type value
//echo $query;

echo "<br><br>";
mysqli_query("SET NAMES utf-8"); //		for thai input	
$nt=mysqli_query($query);
echo mysqli_error();
while($row=mysqli_fetch_array($nt)){
?>          
            </tr>
            <tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?PHP echo $row[lec_id]; ?></td>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?PHP echo $row[lec_name]; ?></td>
      <td></td>
      <td></td>
      <td>      </td>
      <td><div align="center"><a href="lec_view.php?id=<?PHP echo $row[lec_id]; ?>"><img src="image/list-edit.png" alt="1" width="20" height="20" border="0" />
        
      </a></div></td>
            <?
	}
	}
	?>
                </table>
      </div></td>
    </tr>
  <tr>
    <td height="19" valign="top"><div align="center"></div>
    <p align="left"><span class="style44">_________________________________________________________________________________________________________________________________________</span></p></td>
  </tr>
  <tr>
    <td height="19" valign="top"><div align="center"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan ออกแบบและพัฒนาระบบโดยนักศึกษามหาวิทยาลัยอิสลามยะลา สาขาเทคโนโลยีสารสนเทศ</span></div></td>
  </tr>
</table>
<table width="1260" border="0" cellspacing="0" cellpadding="0">
    <tr>
      
    </tr>
  </table>


</body>
</html>
