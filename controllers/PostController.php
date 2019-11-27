<?php 
include_once "models/Post.php";

class PostController {

    public function acao($rotas){
        switch($rotas){
            case "posts":
               $this->listarPosts();
            break;
            case "formulario-post":
                $this->viewFormularioPost();
            break;
            case "cadastrar-post":
                $this->cadastroPost();
            break;
        }
    }

    private function viewFormularioPost(){
        include "views/newPost.php";
    }

    private function viewPosts(){
        include "views/posts.php";
    }

    private function cadastroPost(){
        $post = new Post();
        $descricao = $_POST['descricao'];
        $nomeArquivo = $_FILES['img']['name'];
        $linkTemp = $_FILES['img']['tmp_name'];
        $caminhoSalvar = "views/img/$nomeArquivo";
        move_uploaded_file($linkTemp, $caminhoSalvar);
       
        $resultado = $post->criarPost($caminhoSalvar, $descricao);
        if($resultado){
            header('Location:/fakeinsta/posts');
        }else {
            echo "deu errado meu irmão";
        }
    }

    private function listarPosts(){
        $post = new Post();
        $listaPosts = $post->listarPosts();
        $_REQUEST['posts'] = $listaPosts;
        $this->viewPosts();
    }
}