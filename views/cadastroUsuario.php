<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles.css">
    <title>Cadastro de Usuario</title>
</head>
<body>
<?php include "views/includes/header.php"; ?>
    <main class="board d-flex flex-column justify-content-center align-items-center">

        <h1>Cadastre-se</h1>

        <form  action="/fakeinsta/cadastrar-usuario" method="POST" enctype="multipart/formdata" class="p-3 mb-2 bg-light" style="height:259px; width:400px;">
            <div class="form-group ">
                <label for="name" >Nome</label>
                <input type="text" class="form-control" name="name" placeholder="Nome e Sobrenome">
            </div>
            <div class="form-group w-100">
                <label for="email">Email</label><br/>
                <input type="email" class="w-100" name="email" placeholder="email@email">
            </div>
            <div class="form-group w-100 mb-2">
                <label for="password">Senha</label><br/>
                <input type="password" class="" name="password">
             </div>
             <div class="form group">
                <label for="img">Sua Foto</label>
                <input type="file" name="img" id="">
             </div>
             <div class="form group">
             <button type="submit" class="btn btn-success">Cadastrar</button>
             </div>
        </form>

    
    
    
    
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>