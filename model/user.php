<?php

Class Usuario {
    private $pdo;
    public $msgError = "";
    public function conectar($nomedb, $host, $usuario, $senha){
        global $pdo;
        global $msgError;
        
        try {
            $pdo = new PDO("mysql:dbname=".$nomedb.";host=".$host,$usuario,$senha);
        } catch (PDOException $e) {
            $msgError = $e->getMessage();
        }
        
    }
    public function cadastrar($nome, $telefone, $email, $senha){
        global $pdo;
        // Verificar se já existe um email cadastrado
        $sql = $pdo->prepare("SELECT id_user FROM users WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();
        if($sql->rowCount() > 0){
            return false; // Já está cadastrado
        }else { // Caso não, cadastrar
            $sql = $pdo->prepare("INSERT INTO users(nome, telefone, email, senha) 
            values (:n, :t, :e, :s)");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":t",$telefone);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",md5($senha));
            $sql->execute();
            return true;
        }
    }
    public function logar($email, $senha){
        global $pdo;
        // Verificar se o email e senha estão cadastrados
        $sql = $pdo->prepare("SELECT id_user FROM users WHERE email = :e AND senha = :s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0){
            // Entrar no sistema com uma sessão
            $idUser = $sql->fetch();
            session_start();
            $_SESSION['id_user'] = $idUser['id_user'];
            return true; // Logado com sucesso
        }else {
            return false; // Não está com os dados no banco de dados
        } 
    }
}
?>