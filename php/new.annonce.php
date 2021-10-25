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

            <!-- If the user chose Vente Immobilière -->
            
            <!-- End if vente immobilière -->
            <!-- If the user chose Voitures -->
            <div id="voiture" class="d-none">
                <label for="marque-voiture">Marque</label>
                <input type="text" name="marque-voiture">
                <label for="modele-voiture">Modèle</label>
                <input type="text" name="modele-voiture">
                <label for="kilometres">Kilométrage</label>
                <input type="number" name="kilometres">
                <label for="Carburant">Carburant</label>
                <select name="carburant">
                    <option value="essence">Essence</option>
                    <option value="diesel">Diesel</option>
                    <option value="electrique">Électrique</option>
                </select>
                <label for="gearbox">Boîte de vitesse</label>
                <select name="gearbox">
                    <option value="Automatique">Automatique</option>
                    <option value="Manuelle">Manuelle</option>
                </select>
                <label for="color">Couleur</label>
                <input type="text" name="color">
                <label for="doors-number">Nombre de portes</label>
                <input type="number" name="doors-number">
                <label for="din">Puissance DIN</label>
                <input type="number" name="din">
                <label for="seats">Nombre de sièges</label>
                <input type="number" name="seats">
            </div>
            <!-- End voitures -->
            <!-- If the user chose Multimedia -->
            <div id="multimedia" class="d-none">
                    <label for="multimedia">Sous-catégorie</label>
                    <select name="multimedia" id="multimedia-select">
                        <option value="Informatique">Informatique</option>
                        <option value="console-jv">Consoles - Jeux vidéo</option>
                        <option value="telephonie">Téléphonie</option>
                    </select>
                <!-- If the user chose Informatique -->
                <div id="informatique" class="d-none">
                    <select name="etat">
                        <option value="neuf"></option>
                        <option value="tres bon etat"></option>
                        <option value="bon etat"></option>
                        <option value="satisfaisant"></option>
                        <option value="pour pieces"></option>
                    </select>
                </div>
                <!-- End Informatique -->
                <!-- If the user chose Console -->
                <div id="gaming" class="d-none">
                    <select name="type-gaming">
                        <option value="Console">Console</option>
                        <option value="Jeux">Jeux</option>
                        <option value="Accessoires">Accessoires</option>
                    </select>
                    <input type="text" name="marque-console">
                    <input type="text" name="modele-console">
                    <select name="etat">
                        <option value="neuf"></option>
                        <option value="tres bon etat"></option>
                        <option value="bon etat"></option>
                        <option value="satisfaisant"></option>
                        <option value="pour pieces"></option>
                    </select>
                </div>
                <!-- End Console -->
                <!-- If the user chose Telephonie -->
                <div id="telephonie" class="d-none">
                    <input type="text" name="marque-telephone">
                    <input type="text" name="modele-telephone">
                    <input type="text" name="couleur-telephone">
                    <input type="number" name="stockage-telephone">
                    <select name="etat">
                        <option value="neuf"></option>
                        <option value="tres bon etat"></option>
                        <option value="bon etat"></option>
                        <option value="satisfaisant"></option>
                        <option value="pour pieces"></option>
                    </select>
                </div>
            </div>
            <!-- <input type="submit" name="createad" value="Créer l'annonce"> -->


        </form>
    </section>
    <script src="../js/script.js"></script>
</body>

</html>