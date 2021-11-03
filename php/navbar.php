<nav class="d-flex justify-content-evenly align-items-center">
        <a href="#" class="site-name">The Good Corner</a>
        <ul class="d-flex align-items-center mt-3">
            <li class="mx-3"><a href=<?php if(isset($_SESSION['goodcorner_connected'])){echo './php/new.annonce.php';} else {echo './php/login.php';} ?>>Créer une annonce</a></li>
            
            <?php 
            if(isset($_SESSION['goodcorner_connected'])){
                echo '<li class="mx-3"><a href="php/myaccount.php">Mon Compte</a></li>';
                echo '<li><a class="btn btn-danger mx-3" href="php/logout.php">Déconnexion</a></li>';
                } else {
                 echo '<li><a href="./php/login.php">Se connecter</a></li>';
                 }
                  ?>
            
            
            
        </ul>
    </nav>