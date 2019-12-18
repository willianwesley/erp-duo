<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERP Duo - Sistema de gestão empresarial</title>
    <link rel="stylesheet" href="css/estiloLogin.css">
</head>
    <body>
    <div id="corpo-form-Cad">
        <h1>Cadastro</h1>
        <form action="processaCad.php" method="POST">
            <input type="text" name="nome" placeholder="Nome completo" maxlength="60">
            <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
            <input type="email" name="email" placeholder="Usuário/e-mail" maxlength="40">
            <input type="password" name="senha" placeholder="Senha" maxlength="15">
            <input type="password" name="confSenha" placeholder="Confirmar senha" maxlength="15">
            <input type="submit" value="Cadastrar" id="button2">
            <a href="login.php">Já possui cadastro? <strong>LOGIN</strong></a>
        </form>
    </div>
</body>
</html>