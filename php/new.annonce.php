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
    <form action="" method="POST">
        <input type="submit" name="vente_immobiliere" value="Ventes Immobilières">
        <input type="submit" name="voitures" value="Voitures">
        <input type="submit" name="multimedia" value="Multimédia">
    </form>

    <?php
    if(isset($_POST['vente_immobiliere']) && !empty($_POST['vente_immobiliere'])){
        require_once("vente_immobiliere.php");
    }
    ?>
</body>
</html>