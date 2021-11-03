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
<?php session_start();
require_once("../class/Annonce.php");
require_once("../class/Utilisateur.php");
?>
<body id="annonce-page">
    <nav class="d-flex justify-content-evenly align-items-center">
        <a href="../index.php" class="site-name">The Good Corner</a>
        <ul class="d-flex align-items-center mt-3">
            <li class="mx-3"><a href=<?php if(isset($_SESSION['goodcorner_connected'])){echo './new.annonce.php';} else {echo './login.php';} ?>>Créer une annonce</a></li>
            
            <?php 
            if(isset($_SESSION['goodcorner_connected'])){
                echo '<li class="mx-3"><a href="">Mon Compte</a></li>';
                echo '<li><a class="btn btn-danger mx-3" href="./logout.php">Déconnexion</a></li>';
                } else {
                 echo '<li><a href="./login.php">Se connecter</a></li>';
                 }
                  ?>
        </ul>
    </nav>
    <section class="container">
    <h1 class="main-color">Mes annonces</h1>
        <div class="d-flex">
            <?php 
            $myAds = new Annonce();
            $myAds->displayMyAds($myAds->myAds($_SESSION["id_user"]));
            if(isset($_GET["supprId"])){
                $myAds->deleteAd($_GET["supprId"]);
            }

            
            ?>

        </div>
    </section>
</body>
</html>