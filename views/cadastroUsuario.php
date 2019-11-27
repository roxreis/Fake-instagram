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
    <main class="board">

        <form action="/fakeinsta/login.php" method="post">
            <div class="form-group row">
                <label for="name">Nome</label>
                <input type="text" class="form-control"  placeholder="Nome e Sobrenome">
            </div>
            <div class="form-group row">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="email@email">
            </div>
            <div class="form-group row">
                <label for="password">Senha</label>
                <input type="password" name="password">
             </div>
             <button type="button" class="btn btn-success">Success</button>
        </form>

    
    
    
    
    </main>



</body>
</html>