<?
//session_start();
#if(!session_is_registered(username)){header("location:index.php");}
//end of check session
require_once("../public/class/db.class.php");
$db = new Db;
$connection = $db->connect();

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
<title>view student</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<table width="998" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="1045"><img src="../public/images/header-bg.png" width="1260" height="45" /></td>
    </tr>
  </table>
  <table width="1260" height="554" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1027" height="74" valign="top"><table width="83%"  align="center" border="0" cellspacing="10" cellpadding="0"  class="header">
      <tr>
        <td width="6%" align="center"><img src="../public/image/student add.png" width="100" height="100" /></td>
        <td width="94%"><span class="style26"><span class="style36">View<span class="style38"> Student</span></span></span><br />
          <span class="style34">แสดงข้อมูลนักศึกษา</span></td>
        </tr>
    </table>
              <form id="form1" name="form1" method="post" action="">
      <table width="1151" height="50" border="0" align="left" cellpadding="0" cellspacing="5">
           <tr>
                <td width="83">&nbsp;</td>
                <td width="146"><label>
                <input type=hidden name=todo value=search>
                <input name="search_text" type="text" id="search" size="20" />
                </label></td>
                <td width="48"><label>
                <input type="submit" name="button" id="button" value="ค้นหา" />
                </label></td>
                <td width="849">&nbsp;</td>
              </tr>
      </table>
      </form>
              <p>&nbsp;</p>
      <p><span class="style44">________________________________________________________________________________________________________________________________________</span></p></td>
    </tr>
  <tr>
    <td height="339" valign="top"><table width="80%" border="0" align="center" cellpadding="0" cellspacing="2">
      <tr>
        <td width="16%" height="29" bgcolor="#CCCCCC"><div align="center">รหัสประจำตัว น.ศ.</div></td>
        <td width="20%" bgcolor="#CCCCCC"><div align="center">ชื่อผู้ใช้</div></td>
        <td width="33%" bgcolor="#CCCCCC"><div align="center">ชื่อ-สกุล</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">แก้ไข</div></td>
        <td width="7%" bgcolor="#CCCCCC"><div align="center">ลบออก</div></td>
        <td width="17%" bgcolor="#CCCCCC"><div align="center">แสดงข้อมูลรายละเอียด</div></td>
      </tr>
  <?
// check for blank input
if($search_text==""){$search_text="blank";}
// end of check

if($type<>"any"){
//$query="select * from $m where s_id='$search_text'";
$query="select * from student where std_id='$search_text'";
		}else{
$kt=split(" ",$search_text);//Breaking the string to array of words
// Now let us generate the sql
			while(list($key,$val)=each($kt)){
if($val<>" " and strlen($val) > 0){$q .= " lec_id like '%$val%' or ";}
			}// end of while
$q=substr($q,0,(strLen($q)-3));
// this will remove the last or from the string.
$query="select * from student where $q order by std_id limit 0, 20"; // start search query list as limit result at 10 result at a time
		} // end of if else based on type value
//echo $query;

echo "<br><br>";
mysql_query("SET NAMES utf-8"); //		for thai input
$nt=mysql_query($query);
echo mysql_error();
while($row=mysql_fetch_array($nt))
{
	$name= $row[f_name]." <span> ". $row[name]." <span> ". $row[s_name];
?>
      <tr>
		<td><div align="left"><?=$row[std_id];?> </div></td>
		<td><div align="center"><?=$row[username];?></div></td>
		<td><div align="left"><?=$name?></div></td>
        <td><div align="center"><a href="std_update.php?id= <? echo $std; ?> "><img src="../public/image/list-edit.png" alt="1" width="25" height="25" border="0" /></a></div></td>
        <td><div align="center"><a href="std_delete.php?id= <? echo $std; ?> "><img src="../public/image/1294650148_DeleteRed.png" alt="1" width="25" height="25" border="0" /></a></div></td>
        <td><div align="center"><a href="std_profile.php?id=<? echo $std;?>">แสดงรายละเอียด</a></div></td>
      </tr>
     <? } ////// close first while //////////////////////////////////////////////
		} //////// close of second while ////////////////////
		//} /////// close 3rd while ///////////////////////
		?>
    </table>
      <p></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>

      <p align="left"><span class="style44">_________________________________________________________________________________________________________________________________________</span></p>      </td>
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
