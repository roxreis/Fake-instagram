<?php


include_once "Conexao.php";

class User extends Conexao{

    public function cadastrarUsuario($name, $email, $password){
        $db = parent::criarconexao();
        $query = $db->prepare(insert into freom)
    }

}