<?php
session_start();
if(!$_session["user_admin"]) header("Location: index.php");
?>