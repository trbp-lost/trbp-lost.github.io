<?php
session_start();
include "scripts/database.php";
$sql = "DELETE FROM user WHERE username='$_SESSION[bms_chat_user]'";
mysql_query($sql);
unset($_SESSION['bms_chat_user']);

header("Location:login.php");
?>
