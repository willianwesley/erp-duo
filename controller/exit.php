<?php
session_start();
unset($_SESSION['id_user']);
header("location: ../view/login.php");
exit();
?>