<?php
    session_start();
    include '../template/menu.php';
    include '../template/footer.php';
    include '../template/container.php';
    // Verificar se está logado, caso não redirecionar para login.php
    if(!isset($_SESSION['id_user'])){
        header("location: ../login.php");
        exit;
    }
?> 