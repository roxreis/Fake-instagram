<?php 

include_once "Conexao.php";

 

class Login extends Conexao{

    public function listarUsuario($user){
        $db = parent::criarConexao();
        $query = $db->prepare('SELECT * FROM users WHERE user_name = ?'); 
        $query->execute([$user]);
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
}