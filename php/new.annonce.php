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
    <?php
    // I need to require my class to use my conditions later on
        require_once("../class/Annonce.php");
    ?>

    <section class="d-flex flex-column align-items-center">
        <!-- The big form that is going to be cut in my conditions -->
        <form action="" method="POST" enctype="multipart/form-data" class="d-flex flex-column" id="create-ad-form">
            <label for="title">Titre</label>
            <input type="text" name="title" required>
            <label for="desc" required>Description</label>
            <!-- This is a try for the picture upload -->
            <textarea name="desc" id="desc" cols="30" rows="10" required></textarea>
            <!-- <input type="file" name="upload" accept=".png,.gif,.jpg"> -->
            <?php
                // if(isset($_FILES['upload'])){
                //     require_once("../class/Database.php");
                //     $connexion = new Database();

                //     $sql = $connexion->connect()->prepare("INSERT INTO photos (name_photo, data_photo) VALUES (? , ?)");
                //     $sql->execute([$_FILES['upload']['name'], file_get_contents($_FILES['upload']['tmp_name'])]);
                // }
            ?>
            <!-- End of the try for the picture upload -->
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

            <?php
            // Now, I am setting the conditions to execute the methods in my Utilisateur class.
            $annonce = new Annonce();
                if(isset($_POST['submitImmo'])){
                    $annonce->createAnnonce($_POST['title'], $_POST['desc'], $_POST['price'], $_POST['localisation'], $_POST['category']);
                }
            
                if(isset($_POST['submitCar'])){
                    $annonce->createAnnonce($_POST['title'], $_POST['desc'], $_POST['price'], $_POST['localisation'], $_POST['category']);
                }
            ?>

        </form>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>