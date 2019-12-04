<?php 

include_once "Conexao.php";

 

class Login extends Conexao{

    public function listarUsuario($usuario){
        $db = parent::criarConexao();
        $query = $db->prepare("SELECT * FROM users WHERE user_name = ?"); 
        $query->execute([$usuario]);
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
}