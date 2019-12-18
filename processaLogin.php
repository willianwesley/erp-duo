<?php
require_once 'class/user.php';  
$u = new Usuario;
if(isset($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    if(!empty($email) && !empty($senha)){
        $u->conectar("erpduo","localhost","root","");
            if($u->msgError == ""){
                if($u->logar($email,$senha)){
                    header("location: home.php");
                }else{
                    echo "Email e/ou senha estão incorretos!";
                }
            }else{
                echo "Erro: ".$u->msgError;
            }
        }else{
            echo "Preencha todos os campos";
        }
}
?>