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
  <?php
$sql_view = "select * from course where cos_id='$cos_id' ";
$result_view = mysqli_query($connection, $sql_view);
while($row=mysqli_fetch_array($result_view))
{
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
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="24" colspan="4" bgcolor="#333333" style="font-weight: bold; color: #FFF; font-size: 14px;">&nbsp;&nbsp;ข้อมูลหลักสูตร</td>
              </tr>
              <tr>
                <td height="16" style="font-weight: bold; color:#000">&nbsp;</td>
                <td style="font-weight: bold">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="34" height="18" style="font-weight: bold; color:#000;">&nbsp;</td>
                <td width="105" style="font-weight: bold;  color:#000;">ชื่อหลักสูตร</td>
                <td width="410" style="font-weight: bold;  color:#000;"><?php echo $row['cos_name'];?></td>
                <td width="52">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold;  color:#000;" >รหัสหลักสูตร</td>
                <td style="font-weight: bold;  color:#000;"><?php echo $row['cos_id'];?></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold;  color:#000;">หมู่วิชา</td>
                <td style="font-weight: bold;  color:#000;"><?php echo $row['cos_group'];?></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold;  color:#000;">จำนวนชั่วโมง</td>
                <td style="font-weight: bold;  color:#000;"><?php echo $row['cos_time'].' '.'ชั่วโมง';?></td>
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

            </table>
            <table width="200" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td width="37">&nbsp;</td>
                <td width="125">&nbsp;</td>
                <td width="30">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><a href="confirm_course.php?id=<?php echo $row['cos_id']; ?>" ><img src="images/register1.jpg" width="200" height="40" border="0"></a></td>
                
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>  
              <?php } ?>
            </table>
          </div>
        </div>
        </div></div>
        <?php include('../config/footer.php');?>
    </body>
</html>