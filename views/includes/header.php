
 
<header >
        <nav class="navbar topo-instagran justify-content-center justify-content-between">
            <a class="navbar-brand" href="posts"><img width="90" src="views/img/logo.png" alt="" srcset="">Instagram</a>
            <ul class="nav"> 
                                                      
                <?php if(isset($usuario) && $usuario != "") {?>
                    
                    <li class="nav-item">
                        <a class="nav-link" href=><?php echo "Olá"." ".$usuario["name"]; ?></a>
                    </li>
                
            <?php }else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/fakeinsta/cadastro-usuario">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/fakeinsta/login">Login</a>
                </li>
            <?php } ?>   
        </nav>


</header>