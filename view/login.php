<?php
session_start();
include 'template/footer.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERP Duo | Sistema de gestão empresarial</title>
    <link rel="stylesheet" href="../css/style-login-register.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
    <body>
        <div class="container">
            <div class="title-login">
                <h1>ERPDuo - Sistema de gestão empresarial</h1>
            </div>
                <hr>
            <div class="form-login">
                <form action="../controller/controller-login.php" method="POST" autocomplete="off">
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
        <div>
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
        </div>
    </body>
</html>