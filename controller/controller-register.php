<?php
    session_start();
    require_once '../model/user.php';  
    $u = new Usuario;
    // Verificar se clicou no botão
    if(isset($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confsenha = addslashes($_POST['confSenha']);
        // Verificar se tem algum campo vazio
        if(!empty($nome) && !empty($telefone) &&
        !empty($email) && !empty($senha) && !empty($confsenha)){
            $u->conectar("erpduo","localhost","root","");
            if($u->msgError == ""){ // Se está vazia, está tudo certo
                if($senha == $confsenha){
                    if($u->cadastrar($nome, $telefone, $email, $senha, $confsenha)){
                        $_SESSION['msg'] = "<div class='success-login-register alert-success'><p>Você foi cadastrado com sucesso!</p>
                        <a href='login.php' class='alert-success'>LOGAR!</a>
                        <button id='successbtn' type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";
                        header("Location: ../view/cadastro.php");
                        exit();

                    }else{
                        $_SESSION['msg'] = "<div class='error-login-register alert'><p>Email já cadastrado no sistema!</p>
                        <button id='dangerbtn' type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";
                        header("Location: ../view/cadastro.php");
                        exit();
                    }
                }else{
                    $_SESSION['msg'] = "<div class='error-login-register alert'><p>Senha e confimar senha não conferem!</p>
                    <button  id='dangerbtn' type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>";
                    header("Location: ../view/cadastro.php");
                    exit();
                }
            }else{
                echo "Erro: ".$u->msgError;
            }
        }else{
            $_SESSION['msg'] = "<div class='error-login-register alert'><p>Preencha os campos para se cadastrar!</p>
            <button id='dangerbtn' type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
            header("Location: ../view/cadastro.php");
            exit();
        }
    }
    ?>