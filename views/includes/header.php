<?php
 
 
$usuarios = isset($_SESSION["user_name"]) ? $_SESSION:[];



 
?> 


<header >
        <nav class="navbar topo-instagran justify-content-center justify-content-between">
            <a class="navbar-brand" href="posts"><img width="90" src="views/img/logo.png" alt="" srcset="">Instagram</a>
            <ul style="width:200px;"class="nav row"> 
                                                      
                <?php if(isset($usuarios) && $usuarios != []): ?>
                       
                            <li style="width:160px;"class="row justify-content-between mr-3 nav-item">
                                <p class="font-weight-bold"><?= "Olá, ".$usuarios["user_name"];?></p><img style="width:23px; height:23px"src="<?= $usuarios["user_image"]?>" alt="">
                            </li>
                            <li class="nav-item">
                                <a href="/fakeinsta/logout">Sair</a>
                            </li>
                    
                         
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