<?php
session_start();
include_once '../model/conexao.php';
$btn = filter_input(INPUT_POST,'btnn', FILTER_SANITIZE_STRING);
if($btn){
    // Receber dados dos inputs
    $nome_produto = addslashes($_POST['nameProduct']);
    $cod = addslashes($_POST['codProduct']);
    $valor_venda = addslashes($_POST['valorProduct']);
    $cod_barra = addslashes($_POST['codbarProduct']);
    // Inserir dados no banco de dados
    $resultquery = "INSERT INTO products(nome_produto, codigo, valor_venda, codebar)
    values (:nome, :cod, :valor, :codebar)";
    $insertquery = $conn->prepare($resultquery);
    $insertquery->bindParam(':nome',$nome_produto);
    $insertquery->bindParam(':cod', $cod);
    $insertquery->bindParam(':valor',$valor_venda);
    $insertquery->bindParam(':codebar',$cod_barra);
    $selectquery = "SELECT id_product FROM products WHERE nome_produto = :n";
    $sql = $conn->prepare($selectquery);
    $sql->bindParam(':n',$nome_produto);
    $sql->execute();
    if($sql->rowCount() > 0){
        $_SESSION['msg'] = "<div class='alert alert-danger btn-conf' role='alert'>Nome de Produto já cadastrado no sistema<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
        header("Location: ../view/cadastro/newproduct.php");
        exit();
    }else if(empty($nome_produto)){
        $_SESSION['msg'] = "<div class='alert alert-danger btn-conf' role='alert'>Preencha o campo obrigatório 'Nome do Produto'<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
        header("Location: ../view/cadastro/newproduct.php");
        exit();
            }else if(empty($cod)){
                $_SESSION['msg'] = "<div class='alert alert-danger btn-conf' role='alert'>Preencha o campo obrigatório 'Código'<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span></button></div>";
                header("Location: ../view/cadastro/newproduct.php");
                exit();
                    }else if(empty($valor_venda)){
                        $_SESSION['msg'] = "<div class='alert alert-danger btn-conf' role='alert'>Preencha o campo obrigatório 'Valor de Venda'<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span></button></div>";
                        header("Location: ../view/cadastro/newproduct.php");
                        exit();
                    }else {
                        $insertquery->execute();
                        $_SESSION['msg'] = "<div class='alert alert-success btn-conf' role='alert'>
                        Produto cadastrado com sucesso!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button></div>";
                        header("Location: ../view/cadastro/newproduct.php");
                        exit();
                    }
                } 
            ?>