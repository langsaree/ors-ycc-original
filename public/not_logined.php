<?php 
include('../config/db.php');
if (!isset($_SESSION['username'])){header("location:register.php");}
?>