<?php
session_start();
 
$usuarios = isset($_SESSION["user_name"]) ? $_SESSION:[];

 
?> 


<header >
        <nav class="navbar topo-instagran justify-content-center justify-content-between">
            <a class="navbar-brand" href="posts"><img width="90" src="views/img/logo.png" alt="" srcset="">Instagram</a>
            <ul class="nav"> 
                                                      
                <?php if(isset($usuarios) && $usuarios != []): 
                        foreach($usuarios as $usuario): ?>
                            <li class="mr-3 nav-item">
                                <p class="font-weight-bold"><?= "Olá, ".$usuario;?></p>
                            </li>
                            <li class="nav-item">
                                <a href="/fakeinsta/logout">Sair</a>
                            </li>
                    
                        <?php endforeach; ?>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/fakeinsta/cadastro-usuario">Cadastro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/fakeinsta/login">Login</a>
                            </li>
                            
                <?php endif; ?>
            </ul>
                
        </nav>


</header>