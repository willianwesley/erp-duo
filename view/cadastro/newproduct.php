<?php
    session_start();
    include '../template/menu.php';
     // Verificar se está logado, caso não redirecionar para login.php
     if(!isset($_SESSION['id_user'])){
        header("location: ../login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <title>ERP Duo - Sistema de gestão empresarial</title>
</head>
<body>
    <div class="container">
        <div class="card-top conteiner-new">
            <div class="span-hist">
                <span><a href="product.php" id="span-historico">Produtos</a><strong>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</strong>
                Cadastro
            </span> 
            </div>
            <div class="card-header span-hist" id="headerCard">
                <h1>Cadastro de Produtos</h1>
            </div>
            <hr>
            <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
            <div class="card-body">
                <form action="../../controller/controllerProduct.php" method="POST" autocomplete="off">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 form-group">                         
                            <label for="nameProduct" class="label-product"><strong>Nome do Produto</strong></label><br>
                            <input type="text" name="nameProduct" autofocus maxlenght="100" id="input_name">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-3 form-group">                         
                            <label for="codProduct" class="label-product"><strong>Código</strong></label><br>
                            <input type="text" name="codProduct" id="input_cod">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-4 form-group">                         
                                <label for="valorProduct" class="label-product" id="label-valor"><strong>Valor de Venda</strong></label><br>
                                <input type="text" name="valorProduct" id="input_valor" maxlength="10">
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-4 form-group">                         
                                <label for="categoryProduct" class="label-product" id="label-valor"><strong>Categoria do Produto</strong></label><br>
                                <input type="text" name="categoryProduct" id="input_category" maxlength="30">
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-4 form-group">                         
                                <label for="codbarProduct" class="label-product" id="label-valor"><strong>Código de Barras</strong></label><br>
                                <input type="text" name="codbarProduct" id="input_barcode" maxlength="30">
                            </div>
                        </div>
                        <div class="row">
                            <input name="btnn" class="btn btn-success btn-sm margin-btn" type="submit" value="Salvar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
>