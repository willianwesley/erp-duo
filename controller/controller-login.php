<?php
session_start();
require_once '../model/user.php';   
$u = new Usuario;
if(isset($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    if(!empty($email) && !empty($senha)){
        $u->conectar("erpduo","localhost","root","");
            if($u->msgError == ""){
                if($u->logar($email,$senha)){
                    header("location: ../view/home.php");
                }else{
                    $_SESSION['msg'] = " <div class='error-login alert'><p>Email e/ou senha estão incorretos!</p>
                    <button id='dangerbtn' type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>";
                    header("Location: ../view/login.php");
                    exit();
                }
            }else{
                echo "Erro: ".$u->msgError;
            }
        }else{
            $_SESSION['msg'] = "<div class='error-login alert'><p>Preencha o campo E-mail/senha para logar!</p>
            <button id='dangerbtn' type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
            header("Location: ../view/login.php");
            exit();
        }
}
?>