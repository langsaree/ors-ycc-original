<?php
session_start();
if(!session_is_registered(user_admin)) header("Location: index.php");
?>