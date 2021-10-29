<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/profil.css">

    <link rel="stylesheet" href="../css/style.css">
    
    <title>Contact</title>

</head>

<body>

<?php
    session_start();
    require_once("navbar.php")
?>



    <section id="search-section" class="w-100 d-flex justify-content-center">

        <div id="search-engine" class="px-5 py-3 mt-5">

            <div class="profile">

                <div class="profileHero">

                    <div class="content">

                        <div class="imageContainer">

                            <img src="../assets/img/user.jpg" alt="avatar">

                        </div>

                        <div class="userInfo">

                            <div class="pseudo">

                                <h3 class="all">

                                    <?php 

                                        echo $_SESSION['my_profil'];
                    
                                    ?>


                                    <!-- <php 

                                        echo $_SESSION['my_mail'];

                                    ?> -->

                                </h3>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="align-items-center d-flex toNoAds noAds">

                    </br> <button class="btn btn-secondary" id="toggle-form">Contact</button>

                    <form id="formulaire" method="POST" action="" class="d-none">

                        </br>

                        <div class=" roboto mb-3">

                            <label for="exampleFormControlTextarea1" class="form-label">Votre message :</label>

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                        </div>

                        <a type="button" class="roboto btn btn-outline-secondary" href="">Envoyer</a>

                    </form>

                    <div class="noOwnAd">

                        <p class="txt">Cette utilisateur n'a pas d'annonce en ligne </p>

                    </div>                   

                </div>



            </div>

        </div>

        </div>

    </section>

<script type="text/javascript" src="../js/contact.js"></script>
</body>

</html>