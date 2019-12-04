<?php

include_once "models/User.php";

class UserController{

    public function acao($rotas){
        switch($rotas){
            case 'cadastro-usuario':
               $this->viewCadastroUsuario();
            break;

           
            case 'cadastrar-usuario':
               $this->cadastroUsuario();
            break;
        }
    }    


    private function viewCadastroUsuario(){
        include_once "views/cadastroUsuario.php";
    } 

 

    private function cadastroUsuario(){
        $novoUsuario = new User();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nomeArquivo = $_FILES['img']['name'];
        $linkTemp = $_FILES['img']['tmp_name'];
        $caminhoSalvar = "views/img/$nomeArquivo";
        move_uploaded_file($linkTemp, $caminhoSalvar);

        $resultado = $novoUsuario->criarUsuario($name, $email, $password, $caminhoSalvar);
            if($resultado){
                echo "Usuario Cadastrado :)!";
            }else{
                echo "Dados inconsistentes para cadastro!";
            }

    }

  
        
    
}