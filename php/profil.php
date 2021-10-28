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
  
  <title>Compte</title>

</head>

<body>

  <?php
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

                <h3 class="all">Buer</h3>

              </div>

            </div>

          </div>

        </div>

        <div class="toNoAds noAds"> 

          <div class="noOwnAd">

            <p class="txt">Vous n'avez pas d'annonces en ligne</p>

            <p class="txt2">Vendre, gagner de l'argent, tout ça simplement en déposant une annonce sur The Good Corner</p>

            <a type="button" class="btn btn-outline-secondary" href="new.annonce.php">Déposer une annonce</a>

          </div>

        </div>

      </div>

      <!-- <form action="" method="post" id="search-form">
        <label for="keyword-field">Mot-clefs de l'annonce</label>
        <input type="text" name="keyword-field" size="75">
        <select name="category-search" id="category-search">
          <option value="Vente Immobilière">Vente Immobilière</option>
          <option value="Voitures">Voitures</option>
          <option value="Multimedia">Multimedia</option>
        </select>
      </form> -->

    </div>

  </section>

</body>

</html>