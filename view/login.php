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
    <link rel="stylesheet" href="../css/style-login.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
    <body>
        <div class="container">
            <div class="title-login">
                <h1>ERPDuo - Sistema de gestão empresarial</h1>
            </div>
                <hr>
            <div class="form-login">
                <form action="../controller/controllerLogin.php" method="POST" autocomplete="off">
                    <div class="box-input">
                        <input type="email" name="email" 
                        placeholder="E-mail *" 
                        maxlength="30" 
                        value
                        class="input-login">
                    </div>
                    <div class="box-input">
                        <input type="password" name="senha" 
                        placeholder="Senha *" 
                        maxlength="30"
                        class="input-login">
                    </div>
                    <div>
                        <input type="submit" 
                        value="Acessar"
                        class="btn-login">
                    </div>
                    <div>
                        <a href="cadastro.php">Ainda não tem <strong> Cadastro?</strong></a>
                        <a href="#" class="link-password">Esqueceu sua<strong> Senha?</strong></a>
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <div class="footer">
                <p><strong>&copy;</strong> ERPDuo 2019 - Política de privacidade | Termos de uso</p>
            </div>
        </footer>
    </body>
</html>