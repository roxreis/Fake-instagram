<?php
  
include_once "models/Login.php";
 

class LoginController{

    public function acao($rotas){
        switch($rotas){
            case 'login':
               $this->viewLogin();
            break;

            case 'logando':
                $this->validaLogin();
            break;
            
            case 'logout':
                $this->logout();
            break;
        }
   

    }


    private function viewLogin(){
        include_once "views/login.php";
    }

  
    private function validaLogin(){
        $login = new Login();
        session_start();
        $user = $_POST["user"];
        $infoUsers = $login->listarUsuario($user);
        // var_dump($user);
        
        // var_dump($infoUsers);
        // exit;
        
        // esta recebendo dados do POST
            
        
        //está recebendo array com os dados do banco
                                   
            if ($infoUsers != false){
                foreach ($infoUsers as $orderUser) {
                   
                    if($_POST['user'] == $orderUser['user_name'] && password_verify($_POST['password'], $orderUser['password'])){
                                                                                      
                            $_SESSION['user_name'] = $orderUser['user_name'];
                            // $_SESSION["user_image"] = $usuarioLogando["user_image"];
        
                            header('Location:posts');
                    }else{
                      echo "Nome de Usuario ou senha invalido!";
                    }
                }
            }else{
            echo "Nome de Usuario ou senha invalido!";
            }
 
               
    }

    private function logout(){
        session_start();  
        session_destroy();
        header('Location:login');    
    }

}
