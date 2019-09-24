<?php
session_start();
if (!isset($_SESSION["username_admin"])) header("Location: index.php");
?>