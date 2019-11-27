<?php

include_once "models/User.php";

class CadastroUsuario{

    public function acao($rotas){
        switch($rotas){
             case 'cadastro-usuario':
                $this->viewCadastroUsuario();
             break;      


        }
   

    }


    private function viewCadastroUsuario(){
        include_once "views/cadastroUsuario.php";
    } 






}