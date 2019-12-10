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
        $newUser = new User();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $fileName = $_FILES['img']['name'];
        $linkTemp = $_FILES['img']['tmp_name'];
        $localSave = "views/img/$fileName";
        move_uploaded_file($linkTemp, $localSave);
        
        $segurePass = password_hash($_POST['password'], PASSWORD_BCRYPT);


        $result = $newUser->criarUsuario($name, $email, $segurePass, $localSave);
        
        
            if($result){

                include ("views/cadastroSucesso.php");
                
            }else{
                echo "Dados inconsistentes para cadastro!";
            }

    }

  
        
    
}