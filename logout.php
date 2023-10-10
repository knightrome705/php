<?php
session_start();
unset($_SESSION['key']);
header("Location:Mainpage.php");
?>