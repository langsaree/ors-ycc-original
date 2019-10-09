<?php

include 'class/db.class.php';

class Auth
{

    protected $connection;

    public function __construct()
    {
        $db = new Db;
        $this->connection = $db->connect();
    }

    public function login_check($login)
    {

        if (empty($login['username']) && empty($login['password'])) {
            $message = 'กรุณากรอกชื่อผู้ใช้และรหัสผ่านของท่านด้วย';
        } else if (empty($login['username']) && !empty($login['password'])) {
            $message = 'กรุณากรอกชื่อผู้ใช้ของท่านด้วย';
        } else if (!empty($login['username']) && empty($login['password'])) {
            $message = 'กรุณากรอกรหัสผ่านของท่านด้วย';
        } else {
            if($this->get_user('student', $login )) {
                $_SESSION['logined'] = true;
                $_SESSION['username'] = $login['username'];
                header("location:std_profile.php");
            } elseif ($this->get_user('lecture', $login )) {
                $_SESSION['logined'] = true;
                $_SESSION['lec_user'] = $login['username'];
                header("location:lec_profile.php");
            } else {
                $message = 'ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบข้อมูลด้วย';
            }
        }
        return $message;
    }

    private function get_user($position, $login)
    {
        if ($position === 'student') {
            $stmt = $this->connection->prepare("select * from student where username = ? and password = ?");
        } else {
            $stmt = $this->connection->prepare("select * from lecture where username = ? and password = ?");
        }

        $stmt->bind_param("ss", $login['username'], $login['password']);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
}
