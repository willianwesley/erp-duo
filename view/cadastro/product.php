<?php
    session_start();
    include '../template/menu.php';
    include '../template/footer.php';
    // Verificar se está logado, caso não redirecionar para login.php
    if(!isset($_SESSION['id_user'])){
        header("location: ../login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERP Duo | Sistema de gestão empresarial</title>
    <link rel="stylesheet" href="../../css/container.css">
</head>
<body>
    <div class="history-card">
        <h3>Paginas > Cadastro(Exemplo)</h3>
    </div>
    <div class="container">

    </div>
</body>
</html>