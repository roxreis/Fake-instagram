<?php
 
$usuario = isset($_SESSION["user_image"])? $_SESSION:[];

 
?>


<header >
        <nav class="navbar topo-instagran justify-content-center justify-content-between">
            <a class="navbar-brand" href="posts"><img width="90" src="views/img/logo.png" alt="" srcset="">Instagram</a>
            <ul class="nav"> 
                                                      
            <?php if(isset($usuario) && $usuario != []): ?>
                <img style="widht:30px; height:30px;"src="<?=$usuario['user_image']?>" alt="imagem do usuario">
                <p><?php echo "Olá, ".$usuario['user_name']; ?></p>
                <a href="/fakeinstagram/logout">Sair</a>
                    <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/fakeinsta/cadastro-usuario">Cadastro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/fakeinsta/login">Login</a>
                            </li>
                        
                <?php endif; ?>
                
        </nav>


</header>