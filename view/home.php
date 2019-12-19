<?php
    // Verificar se está logado, caso não redirecionar para login.php
    session_start();
    if(!isset($_SESSION['id_user'])){
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <nav class="navbar navbar-light">
       
        <ul>
            <a href="home.php"><img src="../imagens/icone.png" width="30px" height="30px" alt="" title="DuoERP - Sistema de gestão empresarial!"></a>
            <li><a href="#">Cadastros <i class="fa fa-sort-desc"></i></a>
                <ul>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Fornecedores</a></li>
                </ul>
            </li>
        </ul>
        <a href="../controller/exit.php" class="exitBotton">Sair<i class="fas fa-sign-out-alt"></i></a>
    </nav>
</body>
</html>
