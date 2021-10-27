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
    <section id="search-section" class="w-100 d-flex justify-content-center">
        <div id="search-engine" class="px-5 py-3 mt-5">
            <h2>Rechercher</h2>
            <form action="" method="post" id="search-form">
                <div class="d-inline-flex flex-column">
                    <label for="keyword-field">Mot-clefs de l'annonce</label>
                    <input type="text" name="keyword-field">
                </div>
                <div class="d-inline-flex flex-column">
                    <label for="localisation-search">Lieu</label>
                    <input type="text" name="localisation-search">
                </div>
                <div class="d-inline-flex flex-column">
                    <label for="category-search">Catégorie</label>
                    <select name="category-search" id="category-search">
                        <option value=""></option>
                        <option value="Vente Immobilière">Vente Immobilière</option>
                        <option value="Voitures">Voitures</option>
                        <option value="Multimedia">Multimedia</option>
                    </select>
                </div>
                <br>
                <input type="submit" name="search-submit" value="Rechercher" class="btn btn-success">
            </form>
        </div>
    </section>
    
    <?php 
    require_once('class/Utilisateur.php');
    require_once('class/Annonce.php');
 
    $allAds = new Annonce(); 
?>

    <section class="mt-3">
        <h2 class="ms-3">Nos dernières annonces...</h2>
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


 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="js/index.js"></script>
</body>

</html>