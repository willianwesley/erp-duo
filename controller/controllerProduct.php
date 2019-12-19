<?php
session_start();
include_once '../model/conexao.php';

$btn = filter_input(INPUT_POST,'btnn', FILTER_SANITIZE_STRING);
if($btn){
    // Receber dos inputs
    $nome_produto = filter_input(INPUT_POST,'nameProduct', FILTER_SANITIZE_STRING);
    $cod = filter_input(INPUT_POST,'codProduct', FILTER_SANITIZE_STRING);
    $valor_venda = filter_input(INPUT_POST,'valorProduct', FILTER_SANITIZE_STRING);
    $cod_barra = filter_input(INPUT_POST,'codbarProduct', FILTER_SANITIZE_STRING);
    // Inserir dados no banco de dados

    $resultquery = "INSERT INTO products(nome_produto, codigo, valor_venda, codebar)
    values (:nome, :cod, :valor, :codebar)";
    $insertquery = $conn->prepare($resultquery);
    $insertquery->bindParam(':nome',$nome_produto);
    $insertquery->bindParam(':cod', $cod);
    $insertquery->bindParam(':valor',$valor_venda);
    $insertquery->bindParam(':codebar',$cod_barra);
    if($insertquery->execute()){
        $_SESSION['msg'] = "<div class='alert alert-success btn-conf' role='alert'>
        Produto cadastrado com sucesso!
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button></div>"
        ;
        
        header("Location: ../view/cadastro/newproduct.php");
        exit();
    }else{
        $_SESSION['msg'] = "<p> Ihhh deu ruim aqui,
        me ajuda</p>";
        header("Location: ../view/cadastro/newproduct.php");
    }
}else{
    $_SESSION['msg'] = "<p> Ihhh deu ruim aqui,
    me ajuda</p>";
    header("Location: ../view/cadastro/newproduct.php");
}
?>
            