<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles.css">
    <title>Login</title>
</head>
<body>
<?php include "views/includes/header.php"; ?>
    <main class="board d-flex flex-column justify-content-center align-items-center">
    <h1>Entrar!</h1></br>
    <form  action="/fakeinsta/logando" method="POST">
        <div class="form group">
            <label for="name">Nome</label>
            <input type="text" name="user" id="">
        </div>
        <div class="form group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="">
        </div>
        <div class="form group">
            <button type="submit" class="btn btn-success mb-3">Login</button>
        </div>
    </form>
    </main>

    
</body>
</html>