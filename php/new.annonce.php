<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP & CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>The Good Corner</title>
    <meta name="description"
        content="Quoi que vous cherchiez, vous le trouverez sur notre site web. Notre communauté grandit de jour en jour et donc le choix d'objets disponibles aussi.">
</head>

<body id="annonce-page">
    <?php session_start();
    
    // I need to require my class to use my conditions later on
        require_once("../class/Annonce.php");
        
    ?>
    <nav class="d-flex justify-content-evenly align-items-center">
        <a href="../index.php" class="site-name">The Good Corner</a>
        <ul class="d-flex align-items-center mt-3">
            <li class="mx-3"><a href=<?php if(isset($_SESSION['goodcorner_connected'])){echo './new.annonce.php';} else {echo './login.php';} ?>>Créer une annonce</a></li>
            
            <?php 
            if(isset($_SESSION['goodcorner_connected'])){
                echo '<li class="mx-3"><a href="myaccount.php">Mon Compte</a></li>';
                echo '<li><a class="btn btn-danger mx-3" href="./logout.php">Déconnexion</a></li>';
                } else {
                 echo '<li><a href="./login.php">Se connecter</a></li>';
                 }
                  ?>
            
            
            
        </ul>
    </nav>

    <section class="d-flex flex-column align-items-center text-grey">
        <!-- The big form that is going to be cut in my conditions -->
        <form action="" method="POST" enctype="multipart/form-data" class="d-flex flex-column mt-5" id="create-ad-form">
            <h2>Créer une annonce</h2>
            <label for="title">Titre</label>
            <input type="text" name="title" required>
            <label for="desc" required>Description</label>
            <textarea name="desc" id="desc" cols="30" rows="10" required></textarea>
            <label for="price">Prix</label>
            <input type="number" name="price" required>
            <label for="localisation">Localisation</label>
            <input type="text" name="localisation" required>
            <label for="category">Catégorie de l'annonce</label>
            <select name="category" id="category" required>
                <option value=""></option>
                <option value="Vente Immobilière" id="immobilier">Vente Immobilière</option>
                <option value="Voitures">Voitures</option>
                <option value="Multimedia">Multimedia</option>
            </select>

            <!-- End of the common part for all creations of form -->

            <?php
            // Now, I am setting the conditions to execute the methods in my Utilisateur class.
            $annonce = new Annonce();
                if(isset($_POST['submitImmo'])){
                    $annonce->createAnnonce($_POST['title'], $_POST['desc'], $_POST['price'], $_POST['localisation'], $_POST['category'], $_SESSION['id_user']);
                }
            
                if(isset($_POST['submitCar'])){
                    $annonce->createAnnonce($_POST['title'], $_POST['desc'], $_POST['price'], $_POST['localisation'], $_POST['category'], $_SESSION['id_user']);
                }
                if(isset($_POST['submitInfo'])){
                    $annonce->createAnnonce($_POST['title'], $_POST['desc'], $_POST['price'], $_POST['localisation'], $_POST['category'], $_SESSION['id_user']);
                }
                if(isset($_POST['submitGaming'])){
                    $annonce->createAnnonce($_POST['title'], $_POST['desc'], $_POST['price'], $_POST['localisation'], $_POST['category'], $_SESSION['id_user']);
                }
                if(isset($_POST['submitTelephonie'])){
                    $annonce->createAnnonce($_POST['title'], $_POST['desc'], $_POST['price'], $_POST['localisation'], $_POST['category'], $_SESSION['id_user']);
                }
                
            ?>

        </form>
    </section>

    <!-- That modal will appear to indicate what mean the values in the état field -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Guide de l'état du produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>État neuf</h5>
                    <p>Bien non-utilisé, complet, avec emballage non ouvert et notice(s) d’utilisation.</p>
                    
                    <h5>Très bon état</h5>
                    <p>Bien pas ou peu utilisé, sans aucun défaut ni rayure, complet et en parfait état de
                    fonctionnement.</p>
                    
                    <h5>Bon état</h5>
                    <p>Bien en parfait état de fonctionnement, comportant quelques petits défauts (mentionnés
                    dans l’annonce et visibles sur les photos).</p> 
                    <h5>État satisfaisant</h5>
                    <p>Bien en état de fonctionnement correct, comportant des défauts et signes d’usure
                    manifestes (mentionnés dans l’annonce et visibles sur les photos).</p> 
                    <h5>Pour pièces</h5>
                    <p>Bien non fonctionnel, pour restauration complète ou récupération de pièces détachées.</p> 

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="../js/script.js"></script>
</body>

</html>