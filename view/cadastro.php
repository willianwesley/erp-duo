<?php
session_start();
include 'template/footer.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" type="imagem/png" href="../imagens/icone.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERP Duo - Sistema de gestão empresarial</title>
    <link rel="stylesheet" href="../css/style-login-register.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</head>
    <body>
        <div class="container-register">
            <div class="title-login">
                <h1>Realize seu cadastro no sistema</h1>
            </div>
                <hr>
            <form action="../controller/controller-register.php" method="POST" autocomplete="off">
                <div class="box-input">
                    <input type="text" name="nome" 
                    placeholder="Nome completo *" 
                    maxlength="60" 
                    class="input-login">
                </div>
                <div class="box-input">
                    <input type="text" name="telefone" 
                    placeholder="Telefone com DDD *" 
                    maxlength="14"
                    class="input-login"
                    onkeypress="$(this).mask('(00) 00000-0000')">
                </div>
                <div class="box-input">
                    <input type="email" name="email" 
                    placeholder="E-mail *" 
                    maxlength="40" 
                    class="input-login">
                </div>
                <div class="box-input">
                    <input type="password" name="senha" 
                    placeholder="Senha *" 
                    maxlength="15" 
                    class="input-login">
                </div>
                <div class="box-input">
                    <input type="password" name="confSenha" 
                    placeholder="Confirmar senha *" 
                    maxlength="15" 
                    class="input-login">
                </div>
                <div>
                    <input type="submit" 
                    value="Cadastrar"
                    class="btn-login">
                </div>
                <div class="link-register">
                    <a href="login.php">Já possui cadastro? <strong> Logue no sistema</strong></a>
                </div>
            </form>
        </div>
    </body>
</html>