<?php session_start();?>
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
    <?php 
    require_once("class/Utilisateur.php");
    require_once("class/Annonce.php");
    $user = new Utilisateur();
    $allAds = new Annonce(); 

    require_once('php/navbar.php');
    ?>
    <section id="search-section" class="w-100 d-flex justify-content-center">
        <div id="search-engine" class="px-5 py-3 mt-5">
            <h2 class="text-grey">Rechercher</h2>
            <form action="" method="post" id="search-form">
                <div class="d-inline-flex flex-column">
                    <label for="keyword-field">Mot-clefs de l'annonce</label>
                    <input type="text" name="keyword-field">
                </div>
                <div class="d-inline-flex flex-column">
                    <label for="localisation-search">Lieu</label>
                    <input type="text" name="localisation-search">
                </div>
                <div class="d-inline-flex flex-column" id="category-select">
                    <label for="category-search">Catégorie</label>
                    <select name="category-search" id="category-search" style="padding-bottom:5px">
                        <option value=""></option>
                        <option value="Vente Immobilière">Vente Immobilière</option>
                        <option value="Voitures">Voitures</option>
                        <option value="Multimedia">Multimedia</option>
                    </select>
                    <div class="subcatdiv d-flex flex-column d-none">
                        <label for="select-multimedia">Sous-catégorie</label>
                        <select name="select-multimedia" id="subcat-selector">
                            <option value=""></option>
                            <option value="Informatique">Informatique</option>
                            <option value="Console">Console</option>
                            <option value="Téléphonie">Téléphonie</option>
                        </select>
                    </div>
                </div>
                <br>
                <!-- I will use that div to generate the buttons of criteria when the user choses a category -->
                <p>Recherche avancée</p>
                <div id="criteria-selector" class="d-flex flex-wrap">

                    <input type="button" name="price-search" value="Prix" class="btn btn-outline-secondary"
                        id="price-search">
                    <!-- Buttons for immobilier -->
                    <input type="button" name="type-immo-search" class="btn btn-outline-secondary d-none"
                        id="type-immo-search" value="Type de bien">
                    <input type="button" name="surface-immo-search" class="btn btn-outline-secondary d-none"
                        id="surface-immo-search" value="Surface">
                    <input type="button" name="rooms-immo-search" class="btn btn-outline-secondary d-none"
                        id="rooms-immo-search" value="Pièces">
                    <!-- Buttons for voitures -->
                    <input type="button" name="brand-car-search" class="btn btn-outline-secondary d-none"
                        id="brand-car-search" value="Marque">
                    <input type="button" name="modele-car-search" class="btn btn-outline-secondary d-none"
                        id="modele-car-search" value="Modèle">
                    <input type="button" name="kilometres-car-search" class="btn btn-outline-secondary d-none"
                        id="kilometre-car-search" value="Kilométrage">
                    <input type="button" name="carburant-car-search" class="btn btn-outline-secondary d-none"
                        id="carburant-car-search" value="Carburant">
                    <input type="button" name="gearbox-car-search" class="btn btn-outline-secondary d-none"
                        id="gearbox-car-search" value="Boîte de vitesse">
                    <input type="button" name="color-car-search" class="btn btn-outline-secondary d-none"
                        id="color-car-search" value="Couleur">
                    <input type="button" name="doors-car-search" class="btn btn-outline-secondary d-none"
                        id="doors-car-search" value="Nombre de portes">
                    <input type="button" name="din-car-search" class="btn btn-outline-secondary d-none"
                        id="din-car-search" value="Puissance DIN">
                    <input type="button" name="seats-car-search" class="btn btn-outline-secondary d-none"
                        id="seats-car-search" value="Nombre de sièges">
                    <!-- Buttons for multimedia (that stays for all the sub-categories) -->
                    <input type="button" name="state-multimedia-search" class="btn btn-outline-secondary d-none"
                        id="state-multimedia-search" value="État">
                    <!-- Buttons for gaming -->
                    <input type="button" name="type-gaming-search" class="btn btn-outline-secondary d-none"
                        id="type-gaming-search" value="Type">
                    <input type="button" name="brand-gaming-search" class="btn btn-outline-secondary d-none"
                        id="brand-gaming-search" value="Marque">
                    <input type="button" name="model-gaming-search" class="btn btn-outline-secondary d-none"
                        id="model-gaming-search" value="Modèle">
                    <!-- Buttons for telephonie -->
                    <input type="button" name="marque-telephonie-search" class="btn btn-outline-secondary d-none"
                        id="marque-telephonie-search" value="Marque">
                    <input type="button" name="model-telephonie-search" class="btn btn-outline-secondary d-none"
                        id="model-telephonie-search" value="Modèle">
                    <input type="button" name="color-telephonie-search" class="btn btn-outline-secondary d-none"
                        id="color-telephonie-search" value="Couleur">
                    <input type="button" name="storage-telephonie-search" class="btn btn-outline-secondary d-none"
                        id="storage-telephonie-search" value="Stockage">

                </div>
                <!-- And in that div, it's the forms that are going to be generated -->

                <div id="display-criteria">

                    <!-- Price -->
                    <div id="price-search-div" class="d-none">
                        <label for="minprice">Prix entre</label>
                        <input type="number" name="minprice" min="0"> et
                        <input type="number" name="maxprice" min="0">€
                    </div>
                    <!-- Advanced search IMMO -->
                    <div id="type-of-immo-div"></div>
                    <div id="surface-immo-div"></div>
                    <div id="rooms-immo-div"></div>
                    <!-- Advanced Research VOITURES -->
                    <div id="brand-car-div" class="d-flex flex-column"></div>
                    <div id="model-car-div" class="d-flex flex-column"></div>
                    <div id="kilometres-car-div" class="d-flex flex-column"></div>
                    <div id="carburant-car-div"></div>
                    <div id="gearbox-car-div"></div>
                    <div id="color-car-div" class="d-flex flex-column"></div>
                    <div id="doors-car-div" class="d-flex flex-column"></div>
                    <div id="din-car-div" class="d-flex flex-column"></div>
                    <div id="seats-car-div" class="d-flex flex-column"></div>
                    <!-- Advanced search GAMING -->
                    <div id="type-console-div"></div>
                    <div id="brand-gaming-div" class="d-flex flex-column"></div>
                    <div id="model-gaming-div" class="d-flex flex-column"></div>
                    <!-- Advanced search TELEPHONIE -->
                    <div id="brand-telephonie-div" class="d-flex flex-column"></div>
                    <div id="model-telephonie-div" class="d-flex flex-column"></div>
                    <div id="color-telephonie-div" class="d-flex flex-column"></div>
                    <div id="storage-telephonie-div" class="d-flex flex-column"></div>
                    <!-- Advanced search MULTIMEDIA -->
                    <div id="state-multimedia-div" class="d-flex flex-column"></div>


                    <br />
                    <input type="submit" name="search-submit" value="Rechercher" class="btn btn-success">
            </form>
        </div>
    </section>

    <section class="mt-3">
        <h2 class="ms-3 text-grey">Nos dernières annonces...</h2>
        <div class="mx-4 d-flex flex-wrap justify-content-center">
            <?php 
            if(isset($_POST['search-submit'])){
                $allAds->display($allAds->searchAnnonce($_POST['keyword-field'], $_POST['category-search'], $_POST['localisation-search']));

            } else {
            
            $allAds->display($allAds->allAds());

            }
            ?>
        </div>

    </section>

    <a href="upload.php">Upload</a>

 <?php 

    // Include the database configuration file  
    require_once 'class/Database.php'; 
 
    // Get image data from database 
    $bdd = new Database();
    $result = $bdd->connect()->prepare("SELECT photos FROM leboncoin ORDER BY data_photo DESC"); 

?>

    <?php if($result-> rowCount() > 0){ ?>
        <div class="gallery">
            <?php while($row = $result-> fetch(PDO::FETCH_ASSOC)){ ?>
                <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($row['photos']); ?> "/>
            <?php } ?>
        </div>
    <?php }else{ ?>
        <p class="status error">Image(s) not found...</p>
    <?php } ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="js/index.js"></script>
    <!-- <img src="uploads/IMG-61815a85d70e29.84943549.jpg" alt=""> -->
</body>

</html>