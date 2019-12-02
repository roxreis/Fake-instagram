<?php


include_once "Conexao.php";

class User extends Conexao{

    public function criarUsuario($name, $email, $password, $user_image){
        $db = parent::criarconexao();
        $query = $db->prepare("INSERT INTO users (name, email, password, user_image) values(?,?,?,?)");
        return $query->execute([$name, $email, $password, $user_image]);

    }

  


    public function listarUsuarios(){
        $db = parent::criarConexao();
        $query = $db->query('SELECT name FROM users');
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;


    }
    

}