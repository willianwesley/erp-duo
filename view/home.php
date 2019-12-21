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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/home.css">
    <title>ERP Duo | Sistema de gestão empresarial</title>
</head>
<body>
    <nav class="navbar navbar-light menu">
        <ul>
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
                    <a href="#">Ponto de Vendas<i class="fa fa-sort-desc"></i></a>
                </li>
                <li>
                    <a href="../controller/exit.php">Sair</a>
                </li>
            </ul>
        </ul>
    </nav>
</body>
</html>
