<?php

include_once "models/User.php";

class UserController{

    public function acao($rotas){
        switch($rotas){
            case 'cadastro-usuario':
               $this->viewCadastroUsuario();
            break;

            case 'login':
               $this->viewLogin();
            break;

            case 'cadastrar-usuario':
               $this->cadastroUsuario();
            break;

            case 'logado':
                $this->usuarioLogado();
    
        }
   

    }


    private function viewCadastroUsuario(){
        include_once "views/cadastroUsuario.php";
    } 

    private function viewLogin(){
        include_once "views/login.php";
    }

    private function cadastroUsuario(){
        $novoUsuario = new User();
        $nome = $_POST['name'];
        $email = $_POST['email'];
        $senha = $_POST['password'];

        $resultado = $novoUsuario->criarUsuario($nome, $email, $senha);
            if($resultado){
                echo "Usuario Cadastrado :)!";
            }else{
                echo "Dados inconsistentes para cadastro!";
            }

    }

    private function usuarioLogado(){
        $usuario = new User();
            
        $usuario = isset($_SESSION["name"])? $_SESSION["name"]: [];
        session_start();



    }
        
    
}