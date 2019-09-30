<?php
session_start();
if(!session_is_registered(username));//{header("location:index.php");}
//end of check session
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

.style46 {	color: #00E800
}
.style47 {color: #FF0099}

</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="p_searchx.php">
 <tr>
      <td width="16%"><input type=hidden name=todo value=search />
      <input type="text" name="search_text" id="search" /></td>
  <td width="84%">  <input type="submit" name="search" id="search" value="ค้นหา" />
      <input name="type" type="radio" id="radio" value="any" checked="checked" />
      เหมือนในส่วนไหนก็ได้
      <input type="radio" name="type" id="radio2" value="exact" />
      เหมือนเท่านั้น</td></tr>

 
</form>
</body>
</html>
