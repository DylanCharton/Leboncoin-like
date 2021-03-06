<?php session_start();
    // I need to require my class to use my conditions later on
    require_once("../class/Annonce.php");
            // Setting the conditions of execution of my method to create an ad
    $annonce = new Annonce();
        // If any of the submit buttons is clicked
        if(isset($_POST['submitImmo']) || isset($_POST['submitCar']) || isset($_POST['submitInfo']) || isset($_POST['submitGaming']) || isset($_POST['submitTelephonie'])){
            // Create an ad
            
            $annonce->createAnnonce($_POST['title'], $_POST['desc'], $_POST['price'], $_POST['localisation'], $_POST['category'], $_SESSION['id_user']);
            // And insert the images
            $lastId = $annonce->getLastId();
            $annonce->insertImages($lastId['id_annonce']);
        }      
        
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <!-- BOOTSTRAP & CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>The Good Corner</title>
    <meta name="description"
        content="Quoi que vous cherchiez, vous le trouverez sur notre site web. Notre communaut√© grandit de jour en jour et donc le choix d'objets disponibles aussi.">
</head>

<body id="annonce-page">

    <nav class="d-flex justify-content-evenly align-items-center">
        <a href="../index.php" class="site-name"><img src="../assets/img/logo_small.png" alt="logo" id="logo"
                class=></a>
        <ul class="d-flex align-items-center mt-3">
            <li class="mx-3"><a
                    href=<?php if(isset($_SESSION['goodcorner_connected'])){echo './new.annonce.php';} else {echo './login.php';} ?>>Cr√©er une annonce</a></li>

            <?php 
            if(isset($_SESSION['goodcorner_connected'])){
                echo '<li class="mx-3"><a href="myaccount.php">Mon Compte</a></li>';
                echo '<li><a class="btn btn-danger mx-3 d-none d-sm-block" href="./logout.php">D√©connexion</a></li>';
                echo '<li><a class="btn btn-danger mx-3 d-block d-sm-none" href="./logout.php">X</a></li>';
                } else {
                echo '<li><a href="./login.php">Se connecter</a></li>';
                }
            ?>



        </ul>
    </nav>

    <section class="d-flex flex-column align-items-center text-grey">
        <!-- The big form that is going to be cut in my conditions -->
        <form action="" method="POST" enctype="multipart/form-data" class="d-flex flex-column mt-5" id="create-ad-form">
            <h2>Cr√©er une annonce</h2>
            <label for="title">Titre</label>
            <input type="text" name="title" required>
            <label for="desc" required>Description</label>
            <textarea name="desc" id="desc" cols="30" rows="10" required></textarea>
            <label for="image">Photos</label>
            <input type="file" name="files[]" id="image-uploader" multiple accept=".png, .jpeg, .jpg" required>
            <span class="photo-warning d-none alert alert-danger">Vous ne pouvez fournir que 10 photos maximum.</span>
            <label for="price">Prix</label>
            <input type="number" name="price" required>
            <label for="localisation">Localisation</label>
            <input type="text" name="localisation" required>
            <label for="category">Cat√©gorie de l'annonce</label>
            <select name="category" id="category" required>
                <option value=""></option>
                <option value="Vente Immobili√®re" id="immobilier">Vente Immobili√®re</option>
                <option value="Voitures">Voitures</option>
                <option value="Multimedia">Multimedia</option>
            </select>

            <!-- End of the common part for all creations of form -->

        </form>
    </section>

    <!-- That modal will appear to indicate what mean the values in the state field -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Guide de l'√©tat du produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>√Čtat neuf</h5>
                    <p>Bien non-utilis√©, complet, avec emballage non ouvert et notice(s) d‚Äôutilisation.</p>

                    <h5>Tr√®s bon √©tat</h5>
                    <p>Bien pas ou peu utilis√©, sans aucun d√©faut ni rayure, complet et en parfait √©tat de
                        fonctionnement.</p>

                    <h5>Bon √©tat</h5>
                    <p>Bien en parfait √©tat de fonctionnement, comportant quelques petits d√©fauts (mentionn√©s
                        dans l‚Äôannonce et visibles sur les photos).</p>
                    <h5>√Čtat satisfaisant</h5>
                    <p>Bien en √©tat de fonctionnement correct, comportant des d√©fauts et signes d‚Äôusure
                        manifestes (mentionn√©s dans l‚Äôannonce et visibles sur les photos).</p>
                    <h5>Pour pi√®ces</h5>
                    <p>Bien non fonctionnel, pour restauration compl√®te ou r√©cup√©ration de pi√®ces d√©tach√©es.</p>

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