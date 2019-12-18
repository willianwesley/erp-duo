<?php
    // Verificar se está logado, caso não redirecionar para login.php
    session_start();
    if(!isset($_SESSION['id_user'])){
        header("location: login.php");
        exit;
    }
?>

SEJA BEM VINDO!
<a href="../controller/exit.php">Sair</a>