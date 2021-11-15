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
        content="Quoi que vous cherchiez, vous le trouverez sur notre site web. Notre communauté grandit de jour en jour et donc le choix d'objets disponibles aussi.">
</head>

<body id="annonce-page">
    <?php session_start();
    require_once('../class/Annonce.php');
    require_once('../class/Utilisateur.php');
    $ad = new Annonce();
    // I use the ID I put in the URL previously to get the id of the ad
    $adInfo = $ad->fetchOneAd($_GET['id']);
    $user = new Utilisateur();
    // Same here but to get the id of the user
    $userInfo = $user->fetchOneUser($_GET['user']);
    ?>
    <nav class="d-flex justify-content-evenly align-items-center">
        <a href="../index.php" class="site-name"><img src="../assets/img/logo_small.png" alt="logo" id="logo"
                class=></a>
        <ul class="d-flex align-items-center mt-3">
            <li class="mx-3"><a
                    href=<?php if(isset($_SESSION['goodcorner_connected'])){echo './new.annonce.php';} else {echo './login.php';} ?>>Créer
                    une annonce</a></li>

            <?php 
            if(isset($_SESSION['goodcorner_connected'])){
                echo '<li class="mx-3"><a href="myaccount.php">Mon Compte</a></li>';
                echo '<li><a class="btn btn-danger mx-3 d-none d-sm-block" href="./logout.php">Déconnexion</a></li>';
                echo '<li><a class="btn btn-danger mx-3 d-block d-sm-none" href="./logout.php">X</a></li>';
                } else {
                 echo '<li><a href="./login.php">Se connecter</a></li>';
                 }
                 
                  ?>
            <?php $adresseImg = $ad->fetchMainImage($_GET['id'])['photo_path']; ?>
        </ul>
    </nav>

    <section class="container mt-5 d-flex flex-column align-items-center">
        <div class="d-flex justify-content-between mb-3 flex-column flex-md-row">
            <div id="img-wrapper" class="justify-content-center d-flex flex-column p-3">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner mb-2">
                        <?php 
                        // Filling the carousel
                            $ad->photoCarousel($ad->multipleImagesOfAd($_GET['id']))
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


                <div class="d-flex w-100 pb-2" id="mini-photos">
                    <?php ;
                    // Displaying the miniatures pictures
                    $ad->displayphotos($ad->multipleImagesOfAd($_GET['id']));  
                    ?>
                </div>
                <div>
                    <h1 class="main-color"><?php echo $adInfo['title_annonce']; ?></h1>
                    <p class="main-color"><?php echo ''.$adInfo['prix_annonce'].'€ TTC'?></p>
                </div>
            </div>
            <div class="d-flex">
                <aside id="seller-info" class="p-3 mt-3 ms-0 ms-md-3">
                    <p class="mb-0 main-color">Ce produit vous est proposé par</p>
                    <a href=<?php if(isset($_SESSION['goodcorner_connected']) && ($_SESSION['id_user'] === $_GET['user'])){ echo'"myaccount.php?user='.$userInfo['id_user'].'"';} else {echo'"profil.php?user= '.$userInfo['id_user'].'"';}?> class="user-link"><?= $userInfo['name_user']?></a>
                    <hr>
                    <div class="justify-content-center d-flex">
                        <p class="main-color">S'il vous intéresse n'hésitez pas à le contacter</p>
                        <input type="button" id="contact-button" value="Contacter" class="btn btn-success" id="contact-user-btn">
                    </div>
                    <div class="d-flex flex-column d-none" id="contact-form">
                        <form action="" method="post" class="d-flex flex-column contact-form">
                            <?php if(isset($msg)) {
                                echo $msg;
                                 }
                            ?>
                            <label for="mail">Votre mail</label>
                            <!-- If the user is logged in the mail input is already filled -->
                            <input type="mail" name="mail"
                                value="<?php if(isset($_SESSION['goodcorner_connected'])){echo $_SESSION['my_mail'];}?>"
                                <?php if(isset($_SESSION['goodcorner_connected'])){echo "disabled ";}?>required>
                            <label for="message">Votre message</label>
                            <textarea name="message" cols="30" rows="5"
                                required><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
                            <input type="submit" name="send-message" value="Envoyer" class="btn btn-success mt-3">
                        </form>
                    </div>
                </aside>
            </div>
        </div>

        <!-- Div infos of the product -->
        <div class="caracteristics-div p-4 d-flex flex-column flex-md-row justify-content-center align-items-center justify-content-md-around main-color">
            <div id="info-ads" class="col-4">
                <h2>Description</h2>
                <p><?php echo $adInfo['desc_annonce']?></p>


            </div>
            <div>
                <h2>Caractéristiques</h2>
                <ul class="ps-0">
                    <?php
                $ad->displayCarac($adInfo);
                ?>
                </ul>
            </div>

        </div>


        <!-- aside for the seller's informations -->

    </section>
    <script src="../js/annonce.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
<!-- Code for the form -->
<?php
if(isset($_POST['send-message'])){
    if(!empty($_POST['mail']) && !empty($_POST['message'])){
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"The Good Corner"<dylan@good.corner>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $message='
        <html>
            <body>
                <div align="center">
            
                
                <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
                <br />
                '.nl2br($_POST['message']).'
            
                </div>
            </body>
        </html>
        ';
        mail("d.charton@codeur.online", "Quelqu'un est intéressé par votre ".$adInfo['title_annonce']."", $message, $header);
        $msg="Votre message a bien été envoyé !";
    } else {
        $msg="Tous les champs doivent être complétés !";
    }
}
?>