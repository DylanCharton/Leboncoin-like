<nav class="d-flex justify-content-evenly align-items-center">
        <h1>The Good Corner</h1>
        <ul class="d-flex align-items-center mt-3">
            <li class="mx-3"><a href="php/new.annonce.php">Créer une annonce</a></li>
            <li class="mx-3"><a href="">Compte</a></li>
            <?php 
            if(isset($_SESSION['goodcorner_connected'])){
                
                } else {
                 echo '<li><a class="btn btn-danger mx-3" href="php/logout.php">Déconnexion</a></li>';
                 }
                  ?>
            
            
            
        </ul>
    </nav>