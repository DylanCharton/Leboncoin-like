<nav class="d-flex justify-content-evenly align-items-center">
        <a href="#"><img src="./../assets/img/logo_small.png" alt="logo" id="logo" class=></a>
        <ul class="d-flex align-items-center mt-3">
            <!-- If the user is logged in, they can access the creation of ads, otherwise they have to log in -->
            <li class="mx-3"><a href=<?php if(isset($_SESSION['goodcorner_connected'])){echo './php/new.annonce.php';} else {echo './php/login.php';} ?>>Créer une annonce</a></li>
            
            <?php 
            if(isset($_SESSION['goodcorner_connected'])){
                // If the user is logged in, they can access the My Account page and they can log out of course
                echo '<li class="mx-3"><a href="php/myaccount.php">Mon Compte</a></li>';
                echo '<li><a class="btn btn-danger mx-3" href="php/logout.php">Déconnexion</a></li>';
                } else {
                 echo '<li><a href="./php/login.php">Se connecter</a></li>';
                 }
                  ?>
            
            
            
        </ul>
    </nav>