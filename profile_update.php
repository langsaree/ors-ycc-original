<?
session_start();
include('auth.php');
include ('db.php');
extract ($_GET);
$user=$id;
?>
<?
$ok=$ok;
if(isset($ok)){	
   $login = $_POST['login'];
   $email=$_POST['email'];
   $pswd = $_POST['pswd'];
   $cpswd = $_POST['cpswd'];
   $fname=$_POST['fname'];
   $name=$_POST['name'];
   $s_name=$_POST['s_name'];
   //$b_day=$_POST['b_day'];
   //$b_month=$_POST['b_month'];
   //$b_year=$_POST['b_year'];
   //$birthday=$b_day.'/'.$b_month.'/'.$b_year; 
   $birthday=$_POST['birthday'];
   
   $nation=$_POST['nation'];
   $origin=$_POST['origin'];
   $religion=$_POST['religion'];
   
    $std_id=$_POST['std_id'];
    $home=$_POST['home'];
    //$m_home=$_POST['m_home'];
    //$r_home=$_POST['r_home'];
    //$v_home=$_POST['v_home'];
    $city=$_POST['city'];
    $province=$_POST['province'];
    $postalcode=$_POST['postalcode'];
    $phone=$_POST['phone'];
	//$address=$home.'หมู่ที่ '.' '.$m_home.' '.'ซอย/ถนน '.$r_home.'แขวง/ตำบล '.$v_home;
	$address=$_POST['address'];
	$edulevel=$_POST['edulevel'];
    $eduplace=$_POST['eduplace'];
    $eduprovince=$_POST['eduprovince'];
    $eduyear=$_POST['eduyear'];
	$job=$_POST['job']; 
	
	$query = "UPDATE student set username='$login',password='$pswd',f_name='$fname',name='$name',s_name='$s_name',birthday='$birthday',std_id='$std_id',address='$address',city='$city',province='$province',postalcode='$postalcode',phone='$phone',email='$email',job='$job',nation='$nation',origin='$origin',religion='$religion',edulevel='$edulevel',eduplace='$eduplace',eduprovince='$eduprovince',eduyear='$eduyear' WHERE std_id='$user'";

       $do = mysql_query($query);
       if ($do)
         { 
          header("location:std_profile.php");
		 }	
		 else{	 
	   die("Could not select db".mysql_error());
	   //header("location:std_profile.php");
	   }}
    else
   { 
       
   } 

?>
<!-- <script type="text/javascript">window.location="index.php";</script>-->

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>ข้อมูลนักศึกษา </title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
<!--
.style25 {font-size: 11px; font-family: Tahoma; }
.style7 {color: #3987FB; font-size: 14px; }
.style46 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; }
.style47 {font-size: 13px}
.style54 {font-size: 14px}
.style55 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #CCCCCC; }
.style58 {color: #333333}
.style60 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #333333;
	font-weight: bold;
}
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
input, textarea {
		background:#C3E0C4;
		color:#000000;
		font:14px 'courier new',courier, monospace;
		padding:6px;
		border: 2px solid #cccccc;
		position:relative;
		top:0;
		left:0;
	}
	input:focus, textarea:focus {
		background:#E3E7A6;
		color:#000000;
	}
-->
    </style>
</head>
<body>
    <div class="BodyContent">
    <div class="BorderBorder"><div class="BorderBL"><div></div></div><div class="BorderBR"><div></div></div><div class="BorderTL"></div><div class="BorderTR"><div></div></div>
      <div class="BorderR"><div></div></div><div class="BorderB"><div></div></div><div class="BorderL"></div>
      <div class="Border">

        <div class="Menu">
            <ul>
              <li></li> 
              <li></li> 
              <li></li> <li></li> 
              <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a><a href="#" class="MenuButton">  <span>วิทยาลัย</span></a><a href="#" class="MenuButton"><span>หลักสูตร</span></a><a href="#" class="MenuButton"><span>ประชาสัมพันธ์</span> </a><a href="#" class="MenuButton"><span>ภาพกิจกรรม</span></a><a href="#" class="MenuButton"><span> ติดต่อเรา</span></a>
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
            <table width="170" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td width="170">&nbsp;</td>
              </tr>
              <tr>
                <td><span class="style64"><span style="color: #2192CF">ยินดีต้อนรับ</span> ::</span> <? echo  '<span style="font-weight:bold; font-size:15px"> '.$username.'</span>'; ?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
        
            
           
            <br>
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

        </div><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
       
               <div class="Article">
               <form action="" method="POST">
            <table width="650" height="961" border="0" align="center" cellpadding="0" cellspacing="5">
          <tr>
          


       <td width="659" height="951" align="right" valign="top"><div align="left">
         <p class="style55"><span class="style58"> :::<strong> ข้อมูลนักศึกษา &#3623;&#3636;&#3607;&#3618;&#3634;&#3621;&#3633;&#3618;&#3594;&#3640;&#3617;&#3594;&#3609;&#3618;&#3632;&#3621;&#3634;</strong> :::</span><br>
           <br>
       </p>
       </div>
         <table width="637" height="50" border="0" cellpadding="0" cellspacing="5">
           <tr>
             <td
 
                         width="455" height="18" valign="middle">&nbsp;</td>
             <td width="79" valign="middle" class="style33"><a href="std_profile.php" class="style67" style="text-decoration: none">ดูข้อมูลส่วนตัว</a></td>
             <td width="83" valign="middle"><span class="style66"><a href="logout.php" style="text-decoration: none" >ออกจากระบบ</a></span></td>
           </tr>
           <tr>
             <td height="17" colspan="3" valign="middle"><span class="style56">----------------------------------------------------------------------------------------</span></td>
           </tr>
       </table>
         <table width="600" border="0" align="center" cellpadding="0" cellspacing="2">
           <tr>
<? 
$sql = "select * from student where std_id='$user' ";
$result = mysql_query($sql); 
while($row=mysql_fetch_array($result))
{

?>
             <td width="229">&nbsp;</td>
             <td width="158">&nbsp;</td>
             <td width="221">&nbsp;</td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td><p><img src="image/std_infor.png" width="111" height="126" align="top" /><br>
               <span class="style62">รูปประจำตัว</span></p></td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
       </table>
       
<div align="center"></div>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
                    <td width="27" height="18">&nbsp;</td>
                    <td width="135" style="text-align: right; font-weight: bold; color: #333;" >ชื่อล็อกอิน :</span></td>
                    <td colspan="4"><label for="login"></label>
                      <input type="text" name="login" id="login" value="<?=$row[username];?>">                    </tr>
                  <tr>
                    <td height="18" style="text-align: right">&nbsp;</td>
                    <td style="text-align: right; color: #333; font-weight: bold;">รหัสผ่าน : </td>
                    <td colspan="4"><label for="pswd"></label>
                      <input type="password" name="pswd" id="pswd" value="<?=$row[password];?>"></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right; font-weight: bold; color: #333;">&nbsp;</td>
                    <td width="359">&nbsp;</td>
                    <td width="12">&nbsp;</td>
                    <td width="31">&nbsp;</td>
                    <td width="1">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right; font-weight: bold; color: #333;">คำนำหน้าชื่อ</td>
                    <td colspan="4"><label for="fname"></label>  
                      <select name="fname" size="1" id="fname">
					  <? 
                      $sql3="select * from mrmrs";
			          $result3=mysql_query($sql3);			 
			          while($data3=mysql_fetch_array($result3)){
			 	          if($data[id]==$data3[0]){
					           echo "<option value='$data3[name]' selected>$data3[name]";
				         }else{
					         echo "<option value='$data3[name]'>$data3[name]";
				           }
			            }
			         ?>
                      </select></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right; font-weight: bold; color: #333;">ชื่อ :</span></span></td>
                    <td colspan="4"><label for="name"></label>
                      <input type="text" name="name" id="name" value="<?=$row[name];?>"></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60" style="font-weight: bold">&#3609;&#3634;&#3617;&#3626;&#3585;&#3640;&#3621; : </span></td>
                    <td><label for="s_name"></label>
                      <input type="text" name="s_name" id="s_name" value="<?=$row[s_name];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60">สัญชาติ :</span></td>
                    <td><label for="nation"></label>
                      <input name="nation" type="text" id="nation" value="<?=$row[nation];?>"></td>
                    <td class="style60">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td >&nbsp;</td>
                    <td style="text-align: right"><span class="style60">เชื้อชาติ : </span></td>
                    <td>
            <label for="origin"></label>
                    <input name="origin" type="text" id="origin" value="<?=$row[origin];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="19" >&nbsp;</td>
                    <td class="style60" style="text-align: right">ศาสนา :</td>
                    <td><label for="religion"></label>
                      <input name="religion" type="text" id="religion" value="<?=$row[religion];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="19" >&nbsp;</td>
                    <td style="text-align: right"><span class="style60">เพศ :</span></td>
                    <td><? echo $row[gender];?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60">วันเกิด : </span></td>
                    <td><label for="birthday"></label>
                      <input name="birthday" type="text" id="birthday" value="<?=$row[birthday];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span style="font-weight: bold; text-align: right;"><span class="style61">เลขบัตรประชาชน<span class="style46"> :</span></span></span></td>
                    <td><label for="std_id"></label>
                      <input name="std_id" type="text" id="std_id" maxlength="13" value="<?=$row[std_id];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style61"><span class="style60">บ้านเลขที่ :</span></span></td>
                    <td colspan="4"><label for="address"></label>
                      <textarea name="textarea" id="textarea" cols="23" rows="5"><?=$row[address];?></textarea></td>
                  </tr>
                  
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style47"><span class="style60">เขต/อำเภอ<span class="style46"> :</span></span></span></td>
                    <td><label for="city"></label>
                      <input type="text" name="city" id="city" value="<?=$row[city];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60" style="font-weight: bold">จังหวัด :</span></td>
                    <td><label for="province"></label>
                      <input type="text" name="province" id="province" value="<?=$row[province];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60">รหัสไปรษณีย์ : </span></td>
                    <td><label for="postalcode"></label>
                      <input type="text" name="postalcode" id="postalcode" value="<?=$row[postalcode];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60">โทรศัพท์ :</span></td>
                    <td><input type="text" name="phone" id="phone" value="<?=$row[phone];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60" style="font-weight: bold">E-mail :</span></td>
                    <td><label for="email"></label>
                      <input type="text" name="email" id="email" value="<?=$row[email];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td class="style60" style="text-align: right">จบการศึกษาระดับ :</td>
                    <td><label for="edulevel"></label>
                      <input type="text" name="edulevel" id="edulevel" value="<?=$row[edulevel];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td class="style60" style="text-align: right">จากสถานศึกษา :</td>
                    <td><label for="eduplace"></label>
                      <input type="text" name="eduplace" id="eduplace" value="<?=$row[eduplace];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td class="style60" style="text-align: right">จังหวัด :</td>
                    <td><label for="eduprovince"></label>
                      <input type="text" name="eduprovince" id="eduprovince" value="<?=$row[eduprovince];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td class="style60" style="text-align: right">ปีการศึกษา :</td>
                    <td><label for="eduyear"></label>
                      <input type="text" name="eduyear" id="eduyear" value="<?=$row[eduyear];?>"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="text-align: right"><span class="style60" style="font-weight: bold">อาชีพ :</span></td>
                    <td>
                      <label for="select"></label>
                      <select name="job" id="job">
                      <?		
			 $sql3="select * from joblist";
			 $result3=mysql_query($sql3);			 
			 while($data3=mysql_fetch_array($result3)){
			 	if($data[job_id]==$data3[0]){
					echo "<option value='$data3[job_name]' selected>$data3[job_name]";
				}else{
					echo "<option value='$data3[job_name]'>$data3[job_name]";
				}
			 }
			  ?>
                      </select></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <? } ?>
              </table>
<table width="600" border="0" cellpadding="0" cellspacing="2">
  <tr>
    <td width="178">&nbsp;</td>
    <td width="65">&nbsp;</td>
    <td width="65">&nbsp;</td>
    <td width="282">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="ok" id="ok" value="ตกลง"></td>
    <td><input type="reset" name="cancel" id="cancel" value="ยกเลิก"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
                <table width="640" border="0" align="center" cellpadding="0" cellspacing="2">
                  <tr>
                    <td width="613"><span class="style56" style="text-align: center">&nbsp;&nbsp;----------------------------------------------------------------------------------------</span></td>
                  </tr>
              </table>
        </table>
        </form>
          </div>
        </div>



        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
        </div>
        </div></div>
        <div class="Footer"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan </span></div>                
    </div>
</div>
</body>
</html>