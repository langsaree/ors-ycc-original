<?php
session_start();
if(!isset($_SESSION["username"]))
	{
include('login_check.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>เกี่ยวกับวิทยาลัย</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    
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
              <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a><a href="college.php" class="MenuButton">  <span>วิทยาลัย</span></a><a href="course.php" class="MenuButton"><span>หลักสูตร</span></a><a href="ann.php" class="MenuButton"><span>ประชาสัมพันธ์</span> </a><a href="gallary.php" class="MenuButton"><span>ภาพกิจกรรม</span></a><a href="contact_us.php" class="MenuButton"><span> ติดต่อเรา</span></a>
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
if (isset($message)) {
        echo $message;
    }
    ?>
    
	<?php echo	'<form action="" method="post">
		<table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td></td>
              </tr>
              <tr>
                <td><div align="left"><span class="style9">ล็อกอิน::</span></div></td>
              </tr>
            </table>
		<table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td><label>
                  <input type="text" name="username" />
                </label></td>
              </tr>
            </table>
           
            <table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td><span class="style9">รหัสผ่าน::</span></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td><input type="password" name="password" /></td>
              </tr>
            </table>
            <table width="161" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="72"><label for="Submit"></label>
                  <input type="submit" name="ok" id="ok" value="เข้าสู่ระบบ" /></td>
                <td width="7">&nbsp;</td>
                <td width="175"><label><a href="password_recovery.php">ลืมรหัสผ่าน?</a></label></td>
              </tr>
              <tr>
                
              </tr>
            </table>
            </form>
		
              <br><br>
			  
            </p>
            <p>&nbsp;</p>
        <table width="150" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><div align="center"><a href="register.php"><img src="images/register.gif"  width="130" height="35"></a></div></td>
                  </tr>
                </table>
				';
		}
		else
		{
		echo '
		<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>เกี่ยวกับวิทยาลัย</title>
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
<!--
.style25 {font-size: 11px; font-family: Tahoma; }
.style9 {font-size: 12px}
.style7 {color: #3987FB; font-size: 14px; }
.style26 {
	font-size: 14px;
	font-weight: bold;
}
.style28 {font-size: 12px; font-weight: bold; }
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
              <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a><a href="college.php" class="MenuButton">  <span>วิทยาลัย</span></a><a href="course.php" class="MenuButton"><span>หลักสูตร</span></a><a href="ann.php" class="MenuButton"><span>ประชาสัมพันธ์</span> </a><a href="gallary.php" class="MenuButton"><span>ภาพกิจกรรม</span></a><a href="contact_us.php" class="MenuButton"><span> ติดต่อเรา</span></a>
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


';
		echo '<br><span class="style7">ยินดีต้อนรับ ::</span>'; 
		echo '<span class="style26 "> '.$_SESSION["username"].' </span><br>';
		echo '<span class="style7"><a href="std_profile.php" style="color: #3987FB; text-decoration: none">ข้อมูลส่วนตัว</a></span><br>';
		echo '<span class="style7"><a href="logout.php" style="color: #3987FB; text-decoration: none">ออกจากระบบ</a></span ><br>';
		}
?>
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
            <table width="598" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td width="588" valign="top"><strong><br>
                  วิทยาลัยชุมชน<br>
                </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นสถาบันการศึกษาของรัฐที่บริหารจัดการโดยชุมชนเพื่อจัดการศึกษาระดับอุดมศึกษาที่ต่ำกว่า<br>
ระดับปริญญาในสหวิชาการและวิชาชีพ พร้อมทั้งจัดการศึกษาต่อเนื่องตลอดชีวิตที่สามารถเชื่อมโยง <br>
กับการจัดการศึกษาในทุกระดับ ตลอดจนฝึกอบรมในหลักสูตรที่เน้นการพัฒนาอาชีพ พัฒนาคุณภาพชีวิตตามความต้องการของชุมชนที่สอดคล้องกับการพัฒนาเศรษฐกิจและ สังคม โดยมีปรัชญาว่า “วิทยาลัยชุมชน แหล่งเรียนรู้ของคนในชุมชน โดยชุมชนและเพื่อชุมชน”</td>
              </tr>
              
              <tr>
                <td><p><strong>ปรัชญา และหลักการของวิทยาลัยชุมชน</strong><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วิทยาลัย  ชุมชน เป็นสถาบันการศึกษาของรัฐ   ซึ่งบริหารจัดการโดยชุมชนที่จัดการศึกษาระดับอุดมศึกษา ระดับต่ำกว่าปริญญา   ทั้งสายวิชาการและวิชาชีพ   รวมทั้งจัดการศึกษาต่อเนื่องตลอดชีวิตที่สามารถเชื่อมโยง   กับการจัดการศึกษาในทุกระดับ   และเติมเต็มศักยภาพในส่วนของการศึกษาที่ขาดหายไปของประชากรให้สมบูรณ์ยิ่ง  ขึ้น ตลอดจนฝึกอบรมในหลักสูตร เพื่อพัฒนาอาชีพ และพัฒนาคุณภาพชีวิต   ตามความต้องการของชุมชน และสอดคล้องกับการพัฒนาเศรษฐกิจ และสังคมของประเทศ<br>
                </p>
                  <p><strong>ปรัชญา</strong><br>
                      <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“วิทยาลัยชุมชน แหล่งเรียนรู้ของคนในชุมชน โดยชุมชน และเพื่อชุมชน”</strong></p>
                  <p><strong>หลักการ</strong><br>
                    1.   เปิดตัวและเข้าถึงง่าย ให้โอกาส   และปฏิบัติต่อนักศึกษาผู้เข้ารับบริการเท่าเทียมกัน   เปิดโอกาสให้กลุ่มคนในท้องถิ่นห่างไกลได้รับโอกาสศึกษาในระดับอุดมศึกษา   จัดให้บริการให้คำปรึกษา มีการบริหารจัดการเรียนการสอนที่ยืดหยุ่น   และหลากหลาย รวมทั้งจัดการศึกษาอย่างครอบคลุมทั่วถึง โดยยึดชุมชนเพื่อ   ให้คนในชุมชนได้เรียนรู้ และฝึกทักษะอย่างกว้างขวาง<br>
                    <br>
                    2.   มีหลักสูตรหลากหลายประเภท โดยมีการจัดการศึกษาแบบสหวิทยากร   เพื่อการศึกษาต่อ และมีหลักสูตรทางเลือกเพื่อเข้าสู่อาชีพ ตลอดจนหลักสูตร   เพื่อฝึกทักษะการทำงานที่สามารถเข้าสู่งานได้รวดเร็ว หลักสูตรต่าง ๆ   จัดทำขึ้นเพื่อ เป็นทางเลือกของคนในชุมชนทุกสาขา ทุกอาชีพ   ตามศักยภาพของแต่ละบุคคล<br>
                    <br>
                    3. ตอบสนองต่อชุมชน ในการพัฒนาเศรษฐกิจ   และสังคม เป็นแหล่งผลิต และพัฒนากำลังพล ในภาคเศรษฐกิจหลัก   ทั้งด้านธุรกิจการเกษตร และอุตสาหกรรม ที่เน้นการสร้างวิชาชีพ   เพื่อการประกอบกิจการ ช่วยให้เกิดการสร้างกิจการงานของตนเอง   รวมทั้งผลิตคนป้อนตลาดแรงงาน<br>
                    <br>
                    4. เน้นคุณภาพ   และการใช้ประโยชน์จากการสอนและฝึกอบรมที่มีคุณภาพ   มุ่งให้ผู้เรียนมีความสามารถตามเกณฑ์ เข้ามาตรฐานที่กำหนดไว้   ใช้ทรัพยากรในท้องถิ่นในรูปแบบและวิธีการที่เกิดประโยชน์สูงสุดต่อบุคคลและ  ชุมชน<br>
                    <br>
                    5. เสียค่าใช้จ่ายน้อย   จัดเก็บค่าบริการจากกลุ่มเป้าหมายในราคาถูก   เพื่อให้บริการแก่กลุ่มบุคคลในท้องถิ่นที่อยู่ห่างไกล   และมีปัญหาด้านเศรษฐกิจ ได้มีโอกาสเรียนโดย ไม่ออกไปจากระบบการศึกษา   และได้เรียนใกล้บ้าน ตลอดจนได้ทำงานไปพร้อมกัน   เพื่อพัฒนาอย่างต่อเนื่องให้เป็นการศึกษาตลอดชีวิต<br>
                    <br>
                    6.   สร้างพันธมิตรกับธุรกิจเอกชน องค์กรของรัฐ และองค์กรเอกชน   สร้างความแข็งแกร่งในการบริหารจัดการ   โดยความร่วมมืออย่างใกล้ชิดในรูปแบบเครือข่าย ระหว่างวิทยาลัยชุมชน   สถานประกอบการ องค์การเอกชน และหน่วยงานของรัฐ   เพื่อสามารถให้บริการที่ตอบสนองต่อความต้องการของประชาชน   และชุมชนอย่างกว้างขวาง<br>
                    <br>
                    7. ปรับตัวเองอยู่เสมอ   เพื่อตอบสนองความเปลี่ยนแปลง   เน้นการให้บริการแก่คนในสังคมได้อย่างครอบคลุมทุกกลุ่มเป้าหมาย   และจัดการศึกษาสาขาวิชาที่ทันสมัย ยืดหยุ่น และรวดเร็ว   ทันกับความเปลี่ยนแปลงของสังคม<br>
                    <br>
                    8. ค้นหาโอกาสใหม่ ๆ   เพื่อพัฒนาหลักสูตรให้ทันสมัยอยู่เสมอ   สำรวจและจัดทำระบบข้อมูลการเปลี่ยนแปลงตามความต้องการของชุมชน   เทคโนโลยีและตลาดแรงงานตลอดเวลา   เพื่อนำมาใช้พัฒนาหลักสูตรให้ทันสมัยอยู่เสมอ<br>
                    <br>
                    9.   เชื่อมโยงกับพันธมิตรทั้งในและนอกชุมชน   จัดบทบาทที่เข้มแข็งในการแสวงหาพันธมิตร ร่วมมือกับบุคคล ชุมชน หน่วยงาน   องค์การ สมาคม วิชาชีพ ผู้เกี่ยวข้องทุกส่วน   กำหนดกรอบความร่วมมือทั้งรูปแบบ และระดับความสัมพันธ์หลากหลาย   ให้ชุมชนได้เลือกในการเข้าร่วมกิจกรรมตามความพร้อมของตน   เพื่อการดำเนินงานให้เกิดประโยชน์ในด้านต่าง ๆ ตามภารกิจของวิทยาลัยชุมชน <br>
                    <br>
                10.   ชุมชนเป็นผู้นำ และร่วมดำเนินการ   สร้างองค์กรที่เข้มแข็งในการชักนำชุมชนให้เข้ามามีส่วนร่วมทั้งการกำหนด  นโยบาย การตัดสินใจ การดำเนินงาน และสนับสนุนทุกรูปแบบ   เพื่อจัดให้บริการตามความต้องการของชุมชน</p></td>
              </tr>
              <tr>
                <td><p><strong>วิสัยทัศน์<br>
                </strong>        วิทยาลัย  ชุมชนยะลาเป็นสถาบันการศึกษาของชุมชนโดยชุมชนและเพื่อชุมชน   เน้นให้การศึกษาและพัฒนาอาชีพแก่ชุมชน มุ่งสู่คุณภาพชีวิตที่ดี   มีผลต่อเศรษฐกิจและสังคมของชุมชน<br>
                  <br>
                    <strong>พันธกิจ</strong><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; วิทยาลัย  ชุมชนยะลามีพันธกิจจัดการศึกษาระดับต่ำกว่าระดับปริญญาในทุกสาขา   วิชาที่สอดคล้องกับความต้องการของชุมชนท้องถิ่น   จัดฝึกอบรมเพื่อพัฒนาอาชีพและคุณภาพชีวิตของสมาชิกในชุมชน   โดยจำแนกพันธกิจได้ ดังนี้</p>
                  <p><strong>การจัดการศึกษา</strong>       การจัดการศึกษาทั้งด้านวิชาการและวิชาชีพตามหลักสูตรที่สอดคล้องกับความต้องการของชุมชน ประกอบด้วย </p>
                  <p>๑. ระดับการศึกษา จัดการศึกษาระดับอุดมศึกษา ระดับต่ำกว่าปริญญา และระดับประกาศนียบัตรวิชาชีพ และวิชาชีพชั้นสูง </p>
                  <p>๒. จัดการศึกษาสอดคล้องกับความต้องการทางสังคมและเศรษฐกิจหลักของประเทศ ประกอบด้วย </p>
                  <p>      ๑) สังคมและเศรษฐกิจเกษตร เน้นหลักสูตรการเกษตรอุตสาหกรรม </p>
                  <p>      ๒) สังคมและเศรษฐกิจอุตสาหกรรม เน้นหลักสูตรช่างฝีมือ การผลิต และการแปรรูป เป็นต้น </p>
                  <p>      ๓) สังคมและเศรษฐกิจภาคบริการ เน้นหลักสูตรการบริหารจัดการ วิทยาศาสตร์สุขภาพ<br>
                               
                    และการท่องเที่ยว </p>
                  <p>      ๔) สังคมและเศรษฐกิจสารสนเทศ เน้นหลักสูตรคอมพิวเตอร์และสารสนเทศ </p>
                <p>&nbsp; </p></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
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