<?php
session_start();
if(!$_SESSION['user_admin']) header("Location: index.php");
?>