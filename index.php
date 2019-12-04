<?php

    $rotas = key($_GET)?key($_GET):"posts";


    switch($rotas){
        case "posts":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;

        case "formulario-post":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;

        case "cadastrar-post":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;

        case "cadastro-usuario":
            include "controllers/UserController.php";
            $controller = new UserController();
            $controller->acao($rotas);
        break;

        case "cadastrar-usuario":
            include "controllers/UserController.php";
            $controller = new UserController();
            $controller->acao($rotas);
        break;

        case "login":
            include "controllers/LoginController.php";
            $controller = new UserController();
            $controller->acao($rotas);
        break;

        case "logado":
            include "controllers/LoginController.php";
            $controller = new UserController();
            $controller->acao($rotas);
            
        case "logout":
            include "controller/LoginController.php";
            $controller = new UserController();
            $controller->acao($rotas);       
}