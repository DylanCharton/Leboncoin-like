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
    require_once('navbar.php');
    require_once('../class/Annonce.php');
    ?>

    <section class="container">
    <?php 
        
        function fetchOneAd($id){
            $annonce = new Annonce();
            $sql = $annonce->connect()->prepare("SELECT * FROM annonces WHERE id_annonce = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
            $result = $sql->fetch(PDO::FETCH_ASSOC);

            return $result;
            
        }
        $ad = fetchOneAd($_GET['id']);
        ?>
        <div class="d-flex justify-content-between">
            <div id="img-wrapper">
                <img src="" alt="">
            </div>
            <div>
                <aside id="seller-info">
                [Photo du vendeur]Nom du vendeur
                Contacter le vendeur
                </aside>
            </div>
        </div>
        
        <!-- Div infos of the product -->
        <div id="info-ads">
            <h2>Description</h2>
            <p><?php echo $ad['desc_annonce']?></p>


        </div> 
        <div>
            <h2>Caractéristiques</h2>
        </div>

        <!-- aside for the seller's informations -->
        
    </section>
</body>
</html>

