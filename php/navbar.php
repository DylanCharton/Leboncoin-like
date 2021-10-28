<nav class="d-flex justify-content-evenly align-items-center">
        <h1>The Good Corner</a></h1>
        <ul style="font-family:'Roboto'" class="d-flex align-items-center mt-3">
            <li class="mx-3"><a href="new.annonce.php">Créer une annonce</a></li>
            <li class="mx-3"><a href="profil.php">Compte</a></li>
            <?php 
            if(isset($_SESSION['goodcorner_connected'])){
                echo '<li><a class="btn btn-danger mx-3" href="php/logout.php">Déconnexion</a></li>';
                } else {
                 
                 }
                  ?>
            
            
            
        </ul>
    </nav>