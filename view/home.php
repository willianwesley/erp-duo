<?php
    // Verificar se está logado, caso não redirecionar para login.php
    session_start();
    if(!isset($_SESSION['id_user'])){
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="icon" type="imagem/png" href="../imagens/icone.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/home.css">
    <title>ERP Duo - Sistema de gestão financeira</title>
</head>
<body>
    <nav class="navbar navbar-light menu">
        <ul>
            <a href="home.php" class="link-img"><img src="../imagens/icone.png" width="30px" height="30px" alt="" title="DuoERP - Sistema de gestão empresarial!"></a>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">Cadastros <i class="fa fa-sort-desc"></i></a>
                <ul>
                    <li class="navbar-geral">Geral</li>
                    <li><a href="cadastro/product.php" class="width">Produtos</a></li>
                    <li><a href="cadastro/clients.php" class="width">Clientes</a></li>
                    <li><a href="#" class="width">Fornecedores</a></li>
                    <li><a href="#" class="width">Transportadoras</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Vendas<i class="fa fa-sort-desc"></i></a>
                <ul>
                    <li class="navbar-geral">Vendas</li>
                    <li><a href="#" class="width">Pedidos</a></li>
                    <li><a href="#" class="width">Vendas</a></li>
                </ul>
            </li>
            <li>
                    <a href="#">Estoque<i class="fa fa-sort-desc"></i></a>
                </li>
                <li>
                    <a href="#">Financeiro<i class="fa fa-sort-desc"></i></a>
                </li>
                <li>
                    <a href="#">Relatórios<i class="fa fa-sort-desc"></i></a>
                </li>
                <li>
                    <a href="#">Ponto de Venda<i class="fa fa-sort-desc"></i></a>
                </li>
                <button class="btn-pdv">
                    <a href="">PDV</a>
                </button>
            </ul>
        </ul>
        <a href="../controller/exit.php" class="exitBotton">Sair<i class="fas fa-sign-out-alt"></i></a>
    </nav>
    <div class="container">
        <div class="card-top conteiner-new">
            <div class="card-header card-home">
                Seja bem vindo, Willian Fidelis! Somos o sistema de gestão empresarial DuoERP!
            </div>
            <hr>
        </div>
    </div>
</body>
<style>
h1#firsth1 {
    display: block;
    text-align: center;
    margin-top:100px;
}
h1{
    display: block;
    text-align: center;
}
</style>
</html>
