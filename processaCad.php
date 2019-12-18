<?php
    require_once 'class/user.php';  
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

                        ?>
                            <div id="msg-sucess">   
                                Cadastro realizado com sucesso! Faça <a href="login.php">login!</a>
                            </div>
                        <?php
                    }else{
                        ?>
                            <div id="msg-erro">   
                                Email já cadastrado
                            </div>
                        <?php
                    }
                }else{
                    ?>
                        <div id="msg-senhas">   
                            Senha e confirmar senha não estão igual
                        </div>
                    <?php
                }
            }else{
                echo "Erro: ".$u->msgError;
            }
        }else {
            ?>
                <div id="msg-campos">   
                    Preencha todos os campos
                </div>
            <?php
        }
    }
    ?>