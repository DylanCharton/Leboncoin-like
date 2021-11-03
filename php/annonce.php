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
    require_once('../class/Annonce.php');
    require_once('../class/Utilisateur.php');
    $ad = new Annonce();
    $adInfo = $ad->fetchOneAd($_GET['id']);
    $user = new Utilisateur();
    $userInfo = $user->fetchOneUser($_GET['user']);
    ?>
    <nav class="d-flex justify-content-evenly align-items-center">
        <a href="../index.php" class="site-name">The Good Corner</a>
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

    <section class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <div id="img-wrapper" class="justify-content-center d-flex flex-column p-3">
                <img src="https://via.placeholder.com/600x400.png" alt="" class="img-fluid">
                <div>
                    <h1 class="main-color"><?php echo $adInfo['title_annonce']; ?></h1>
                    <p class="main-color"><?php echo ''.$adInfo['prix_annonce'].'€ TTC'?></p>
                </div>
            </div>
            <div>
                <aside id="seller-info" class="p-3">
                    <p class="mb-0 main-color">Ce produit vous est proposé par</p>
                    <a href="#" class="user-link"><?php echo $userInfo['name_user']?></a>
                    <hr>
                    <div class="justify-content-center d-flex">
                        <p class="main-color">S'il vous intéresse n'hésitez pas à le contacter</p>
                        <input type="button" value="Contacter" class="btn btn-success">
                    </div>
                    <div class="d-flex flex-column">
                        <form action="" method="post" class="d-flex flex-column contact-form">
                            <label for="mail">Votre mail</label>
                            <input type="mail" name="mail"
                                value="<?php if(isset($_SESSION['goodcorner_connected'])){echo $_SESSION['my_mail'];} if(isset($_POST['mail'])){echo $_POST['mail'];} ?>"
                                required>
                            <label for="message">Votre message</label>
                            <textarea name="message" cols="30" rows="10"
                                required><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
                            <input type="submit" name="send-message" value="Envoyer" class="btn btn-success mt-3">
                            <?php if(isset($msg)) {
                                echo $msg;
                                 }
                            ?>
                        </form>
                    </div>
                </aside>
            </div>
        </div>

        <!-- Div infos of the product -->
        <div class="caracteristics-div p-4 d-flex justify-content-around main-color">
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
</body>

</html>
<?php
if(isset($_POST['send-message'])){
    if(!empty($_POST['mail']) && !empty($_POST['message'])){
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"nom_d\'expediteur"<votre@mail.com>'."\n";
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
        mail("d.charton@codeur.online", "Quelqu'un vous contacte sur The Good Corner", $message, $header);
        $msg="Votre message a bien été envoyé !";
    } else {
        $msg="Tous les champs doivent être complétés !";
    }
}
?>