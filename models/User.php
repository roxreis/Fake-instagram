<?php


include_once "Conexao.php";

class User extends Conexao{

  
    public function criarUsuario($name, $email, $password, $user_image){
        $db = parent::criarConexao();
        $query = $db->prepare("INSERT INTO users (user_name, email, pass, user_image) values(?,?,?,?)");
        return $query->execute([$name, $email, $password, $user_image]);
    }

    

}