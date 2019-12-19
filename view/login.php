<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" type="imagem/png" href="../imagens/icone.png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERP Duo - Sistema de gestão empresarial</title>
    <link rel="stylesheet" href="../css/estiloLogin.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
    <body>
    <div id="card">   
        <div id="corpo-form">
            <h1>ERP Duo</h1>
            <form action="../controller/controllerLogin.php" method="POST" autocomplete="off">
                <input type="email" name="email" placeholder="Usuário/e-mail" maxlength="30" autofocus value>
                <input type="password" name="senha" placeholder="Senha" maxlength="15">
                <input type="submit" value="Acessar" id="button">
                <a href="cadastro.php">Ainda não tem <strong> Cadastro?</strong></a>
            </form> 
        </div>
    </div> 
    </body>
</html>