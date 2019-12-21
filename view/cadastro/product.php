<?php
    session_start();
    include '../template/menu.php';
    // Verificar se está logado, caso não redirecionar para login.php
    if(!isset($_SESSION['id_user'])){
        header("location: ../login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERP Duo | Sistema de gestão empresarial</title>
    <link rel="stylesheet" href="../css/product.css">
</head>
<body>
    <div class="container">
        <div class="card-top conteiner-new">
            <div class="span-hist">
                <span><a href="product.php" id="span-historico">Produtos</a><strong>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</strong></span>
            </div>
            <div class="card-header span-hist" id="headerCard">
                <a href="newproduct.php" class="btn btn-success">Novo Produto</a>
                <button class="btn btn-danger btn-md btn-margin">Excluir</button>
            </div>
            <hr>
            <div class="card-body">
                
            </div>
        </div>
    </div>
</body>
</html>