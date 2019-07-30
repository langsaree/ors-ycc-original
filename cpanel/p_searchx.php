<?
session_start();
if(!session_is_registered(username));//{header("location:index.php");}
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
<title>::Searchx::</title>
<style type="text/css">
<!--
.style46 {color: #00E800
}
.style47 {color: #FF0099}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
  <table>
  <tr>
  <td width="16%">
       <input type=hidden name=todo value=search />
      <input type="text" name="search_text" id="search" />
      
      <input type="submit" name="button" id="button" value="ค้นหา" />
       <input name="type" type="radio" id="radio" value="any" checked="checked" />
      เหมือนในส่วนไหนก็ได้
      <input type="radio" name="type" id="radio" value="exact" />
      เหมือนเท่านั้น</td></tr>
    </p>
    </table>
    </form> 
    
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="2">
    <tr>
      <td width="17%" height="29" bgcolor="#CCCCCC"><div align="center">รหัสผู้ใช้</div></td>
      <td width="20%" bgcolor="#CCCCCC"><div align="center">ชื่อผู้ใช้</div></td>
      <td width="27%" bgcolor="#CCCCCC"><div align="center">ชื่อ-นามสกุล</div></td>
      <td width="12%" bgcolor="#CCCCCC"><div align="center" class="style46">Active</div></td>
      <td width="11%" bgcolor="#CCCCCC"><div align="center" class="style47">Non-Active</div></td>
 <?
// check for blank input
if($search_text==""){$search_text="";}
// end of check
if($type<>"any")
  {
   $query="select * from student where std_id = '$search_text'";
    // $row[name] = $row[f_name]."<span>".$row[name]."<span>".$row[s_name];
   }
	else
	 {
       $kt=split(" ",$search_text);//Breaking the string to array of words
      // Now let us generate the sql 
		while(list($key,$val)=each($kt))
			{
               if($val<>" " and strlen($val) > 0){$q .= " std_id like '%$val%' or " ;}
			}// end of while
$q=substr($q,0,(strLen($q)-3));
// this will remove the last or from the string. 
$query="select * from student where '$q' order by std_id limit 0, 20"; // start search query list as limit result at 10 result at a time
		} // end of if else based on type value
//echo $query;

echo "<br><br>";
//mysqli_query("SET NAMES utf-8"); //		for thai input	
$nt=mysqli_query($query);
echo mysqli_error();
while($row=mysqli_fetch_array($nt)){
		//$name= $row[f_name]." <span> ". $row[name]." <span> ". $row[s_name];
?>
    </tr>
    <tr>
      <td><div align="center"><? echo  $row[std_id]; ?></div></td>
      <td><div align="center"><? echo $row[username]; ?> </div></td>
      <td><div align="center"></div></td>
      <td><div align="center"><? echo  $row[status];?></div></td>
      <td><div align="center"></div></td>
    </tr>
    <?
	 }
	} 
	?>
    
  </table>

</body>
</html>
