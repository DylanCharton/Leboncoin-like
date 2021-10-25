<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP & CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>The Good Corner</title>
    <meta name="description"
        content="Quoi que vous cherchiez, vous le trouverez sur notre site web. Notre communauté grandit de jour en jour et donc le choix d'objets disponibles aussi.">
</head>

<body>
    <?php require_once("php/navbar.php")
    ?>
    <section id="search-section">
        <div id="search-engine">
            Rechercher une annonce
            <form action="" method="post" id="search-form">
                <input type="text" name size="75">
                <select name="category-search" id="category-search">
                    <option value="Vente Immobilière">Vente Immobilière</option>
                    <option value="Voitures">Voitures</option>
                    <option value="Multimedia">Multimedia</option>
                </select>
            </form>
        </div>
    </section>





<?php 
    require_once('class/Utilisateur.php');
    require_once('class/Annonce.php');
 
    $allAds = new Annonce();
    $allAds->displayAllAds();
?>

 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="js/index.js"></script>
</body>

</html>