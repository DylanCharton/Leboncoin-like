<?php session_start();
    require_once('../class/Annonce.php');
    require_once('../class/Utilisateur.php');
    $userAds = new Annonce();
    // I use the ID I put in the URL previously to get the id of the ad
    $user = new Utilisateur();
    // Same here but to get the id of the user
    $userInfo = $user->fetchOneUser($_GET['user']);
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="description"
        content="Quoi que vous cherchiez, vous le trouverez sur notre site web. Notre communauté grandit de jour en jour et donc le choix d'objets disponibles aussi.">
</head>
    <title>The Good Corner - Profil de <?=$userInfo['name_user']?> </title>
</head>
<body id="annonce-page">
    <nav class="d-flex justify-content-evenly align-items-center">
            <a href="../index.php" class="site-name"><img src="../assets/img/logo_small.png" alt="logo" id="logo" class=></a>
            <ul class="d-flex align-items-center mt-3">
                <li class="mx-3"><a
                        href=<?php if(isset($_SESSION['goodcorner_connected'])){echo './new.annonce.php';} else {echo './login.php';} ?>>Créer
                        une annonce</a></li>

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

    <div class="container mt-5 d-flex flex-column align-items-center">
        <?php 
        //var_dump();
            if($userAds->myAds($_GET["user"]) == null){
                echo '<h2 class="main-color">'.$userInfo['name_user'].' n\'a pas d\'annonce en ligne actuellement.</h2> ';
            } else {
                echo '<h2 class="main-color mb-5"> Les annonces de '.$userInfo['name_user'].'</h2>';
                echo'<div class="d-flex">';
             $userAds->displayFromUser($userAds->myAds($_GET["user"]));
                echo'</div>';
            }
        ?>
    </div>
    
</body>
</html>