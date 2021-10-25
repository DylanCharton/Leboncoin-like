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

<body>
    <section class="d-flex flex-column align-items-center">
        <!-- The big form that is going to be cut in my conditions -->
        <form action="" method="POST" class="d-flex flex-column" id="create-ad-form">
            <label for="title">Titre</label>
            <input type="text" name="title" required>
            <label for="desc" required>Description</label>
            <textarea name="desc" id="desc" cols="30" rows="10" required></textarea>
            <label for="price">Prix</label>
            <input type="number" name="price" required>
            <label for="localisation">Localisation</label>
            <input type="text" name="localisation" required>
            <label for="category">Catégorie de l'annonce</label>
            <select name="category" id="category" required>
                <option value=""></option>
                <option value="Vente Immobilière" id="immobilier">Vente Immobilière</option>
                <option value="Voitures">Voitures</option>
                <option value="Multimedia">Multimedia</option>
            </select>
            
            <!-- End of the common part for all creations of form -->

        </form>
    </section>
    <script src="../js/script.js"></script>
</body>

</html>