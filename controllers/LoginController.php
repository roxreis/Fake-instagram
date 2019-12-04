<?php
  
include_once "models/Login.php";
 

class UserController{

    public function acao($rotas){
        switch($rotas){
            case 'login':
               $this->viewLogin();
            break;

            case 'logado':
                $this->validaLogin();
            
            case 'logout':
                $this->logout();
        }
   

    }


    private function viewLogin(){
        include_once "views/login.php";
    }

  
    private function validaLogin(){
        $logado = new Login();
        $usuario = $_POST['usuario'];
        session_start();
        $resultado = $logado->listarUsuario($usuario);
                
        if ($resultado > 0) {
            if($_POST['usuario'] == $usuario['user_name'] && password_verify($_POST['senha'], $usuario['password'])){
                
            $_SESSION["user_name"] = $usuario['user_name'];
            $_SESSION["user_image"] = $usuario['user_image'];
           
            header('Location:posts');
            exit; 

            }else {
                echo "Email ou senha invalido!";
         }
            
                          
        } else {
            echo "Email ou senha invalido!";


       
   }
}


    private function logout(){

         
         
        session_destroy();

        include_once "views/login.php";
    }

}
