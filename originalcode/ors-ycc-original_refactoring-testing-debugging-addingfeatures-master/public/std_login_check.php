<?php
/**
 * LangsariEngine - A Delicious PHP Component
 *
 * @package  BuduEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

session_start();

include('db.php');

// username and password receive from register form
if (isset($_POST['submit'])) {

    if (!empty($_POST['username2'] && !empty($_POST['password2']))) {

        $username = $_POST['username2'];
        $password = $_POST['password2'];

        // To protect MySQL injection (more detail about MySQL injection)
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        //check compare to database
        $sql = "SELECT * FROM student WHERE username='$username' and password='$password'";
        $result = mysqli_query($connection, $sql);

        // Mysql_num_row is counting table row
        $count = mysqli_num_rows($result);

        // If result matched $myusername and $mypassword, table row must be 1 row
        if ($count == 1) {

            // Register $username, $password and redirect to file "login_success.php"
            $_SESSION['username'] = $username;
//            $_SESSION['password'] = $password;

            // redirect to profile page
            header("Location:std_profile.php");
        } else {

            //$error='Wrong Username or Password';
            $std_error = "ชื่ิอเข้าระบบและรหัสผ่านผิด กรุณาลองใหม่";

            include('register.php');
            // header("location:register.php");

        }

    }
    else {
        header("location:register.php");
    }
}

?>
