<?php
session_start();
include('../config/db.php');
extract ($_GET);
$cos_id=$_GET['id'];
if (!isset($_SESSION["username"])) // To check login user if already login then hide login form
{
?>

<?php if (isset($message)) { echo $message; }?>
<?php
    include("not_logined.php");
} 
else {
    include("../config/login_check.php");
}
?>
        <div class="MainColumn">
        <div class="ArticleBorder">
            <div class="ArticleBL">
                <div></div>
            </div>
            <div class="ArticleBR">
                <div></div>
            </div>
            <div class="ArticleTL">

            </div>
            <div class="ArticleTR">
                <div></div>
            </div>
            <div class="ArticleT">

            </div>
            <div class="ArticleR">
                <div></div>
            </div>
            <div class="ArticleB">
                <div></div>
            </div>
            <div class="ArticleL">
            </div>
            <br>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="26" colspan="3" bgcolor="#888" class="text"><strong>&nbsp;<span >&nbsp;&nbsp;&nbsp;เลือกวิชาที่ท่านต้องการลงทะเบียนเรียน</span></strong></td>
              </tr>
              <tr>
                <td height="16">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="40" height="17">&nbsp;</td>
                <td width="549"><li>เลือกหมู่วิชา รายวิชา ของวิชาที่ท่านต้องการลงทะเบียนเรียน </td>
                <td width="32">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><li>อ่านรายละเอียดของรายวิชานั้นๆ </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><li>กด <span class="c">ยืนยันการลงทะเบียนหลักสูตร</span> เพื่อส่งข้อมูลการลงทะเบียนเรียน </td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="101">&nbsp;</td>
                <td width="318">&nbsp;</td>
                <td width="192">&nbsp;</td>
              </tr>
              <tr>
                <td height="25" colspan="3" bgcolor="#888" class="text"><span>&nbsp;&nbsp;&nbsp;&nbsp;เลือกหมู่วิชา รายวิชา</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            </table>
            
           
 <?php
$sql = "select * from course where cos_id='$cos_id' ";
$result = mysqli_query($connection, $sql);
while ($rows = mysqli_fetch_array($result)) {
$id = $rows["cos_id"];

?>               
                   <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
                <tr>
                  <td>&nbsp;</td>
                  <td>หมูวิชา</td>
                  <td><label for="select3"></label>
                    <select style=" width:200px;" name="cos_group" id="select3">
                      <option><?php echo $rows['cos_group']; ?></option>
                      <option>-- select --</option>
                       <?php
			             $sql3="select * from course";
			             $result3=mysqli_query($connection, $sql3);			 
			             while($data3=mysqli_fetch_array($result3)){
			 	              if($data3['cos_group']==$data3[0]){
					             echo "<option value='$data3[cos_group]' selected>$data3[cos_group]";
				              }else{
					            echo "<option value='$data3[cos_group]'>$data3[cos_group]";
				              }}
			           ?>
                      
                  </select></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                <td width="27">&nbsp;</td>
                <td width="73">รหัสวิชา</td>
                <td width="317">
                <select style="width:200px;" name="select" size="1" id="select">                 
                  <option><?php echo $rows['cos_id']; ?></option>
                  <option>-- select --</option> 
                   <?php		
			             $sql3="select * from course";
			             $result3=mysqli_query($connection, $sql3);			 
			             while($data3=mysqli_fetch_array($result3)){
			 	              if($data3['cos_id']==$data3[0]){
					             echo "<option value='$data3[cos_id]' selected>$data3[cos_id]";
				              }else{
					             echo "<option value='$data3[cos_id]'>$data3[cos_id]";
				              }}
			       ?>
               </select></td>
                <td width="194">&nbsp;</td>
              </tr>
           
              <tr>
                <td>&nbsp;</td>
                <td>รายวิชา</td>
                <td><select style="width:200px;" name="select2" id="select2">
                  
                  <option><?php echo $rows['cos_name']; ?></option>
                  <option>-- select --</option> 
                  <?php		
			             $sql3="select * from course";
			             $result3=mysqli_query($connection, $sql3);			 
			             while($data3=mysqli_fetch_array($result3)){
			 	              if($data3['cos_name']==$data3[0]){
					             echo "<option value='$data3[cos_name]' selected>$data3[cos_name]";
				              }else{
					             echo "<option value='$data3[cos_name]'>$data3[cos_name]";
				              }}
			       ?>
                </select></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              
          </table>
<br>      <form name="form1" method="post" action="">
             <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="22" colspan="3" bgcolor="#999999" style="font-weight: bold"> &nbsp;&nbsp;รายละเอียดวิชา</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="22">&nbsp;</td>
                <td><span class="style48">หมูวิชา</span></td>
                <td><?php echo $rows['cos_group'];?></td>
              </tr>
              <tr>
                <td height="24">&nbsp;</td>
                <td><span class="style48">รายวิชา</span></td>
                <td><?php echo $rows['cos_id'];?></td>
              </tr>
              <tr>
                <td width="57">&nbsp;</td>
                <td width="61">&nbsp;</td>
                <td width="485">&nbsp;</td>
              </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="22" colspan="4" bgcolor="#999999"><span class="style47">&nbsp;&nbsp;หลักฐานการรับสมัคร</span></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="59">&nbsp;</td>
                <td width="520"><span class="style45"><li>ใบสมัคร ปริ้น/ดาวน์โหลด จาก เว็บไซต์ (หรือรับได้ที่วิทยาลัยชุมชน)</span></td>
                <td width="15">&nbsp;</td>
                <td width="17">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><span class="style45"><li>สำเนาบัตรประชาชนบัตรข้าราชการบัตรประจำตัวนักศึกษา 1 ฉบับ </span></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><span class="style45"><li>สำเนาทะเบียนบ้าน 1 ฉบับ </span></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><span class="style45"><li>รูปถ่าย ขนาด 1 นิ้ว จำนวน 3 รูป (ถ่ายมาแล้วไม่เกิน 6 เดือน ไม่สวมหมวกและแว่นตา) </span></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="21" colspan="4" bgcolor="#999999"><span class="style47">&nbsp;&nbsp;ค่าใช้จ่ายลงทะเบียนเรียน</span></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="56">&nbsp;</td>
                <td width="463"><li>บุคคลทั่วไป ชั่วโมงละ 5 บาท </td>
                <td width="46">&nbsp;</td>
                <td width="36">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><li>นักศึกษา ชั่วโมงละ 1 บาท </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><li>ค่าสมัครเรียน หลักสูตรละ 10 บาท </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="23" colspan="4" bgcolor="#999999"><span class="style47">การชำระค่าลงทะเบียนเรียน</span></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><li>ชำระค่าลงทะเบียนด้วยตนเอง ได้ที่ศูนย์ วิทยาลัยชุมชน ยะลา </td>
                <td>&nbsp;</td>
                <td width="108">&nbsp;</td>
                </tr>
              <tr>
                <td width="56">&nbsp;</td>
                <td width="411">&nbsp;</td>
                <td width="26">&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="20" colspan="3" bgcolor="#999999"><span class="style47">ติดต่อสอบถาม</span></td>
                </tr>
              <tr>
                <td width="55">&nbsp;</td>
                <td>&nbsp;</td>
                <td width="24">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>2 ถนนสุขยางค์ ตำบลสะเตง อำเภอเมือง จังหวัดยะลา โทร. 0-7321-6646-7 Fax. 0-7321-6648 www.ycc.ac.th </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td><a href="pdf.php?id=<?php $rows['cos_id']; ?> " target="_blank" ><img src="images/cregister.png" width="200" height="40"></a></td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
                   <?php } ?>
    </table>
            <p>&nbsp;</p>
            </form>
            <p align="center">&nbsp;</p>
        </div>
        </div>



        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
        </div>
        </div></div>
        <?php include('../config/footer.php');?>
</body>
</html>