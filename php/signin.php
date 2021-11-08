<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Inscription</title>
    <!-- Tommy, commente ici pour expliquer à quoi servent les deux scripts que tu appelles stp -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="../js/mdp.js"></script>
</head>
<?php 
// Starting by requiring the Utilisateur class to call the method to add a user to the DB.
    require_once("../class/Utilisateur.php");
?>

<body>
    <div id="container">

        <form action="#" method="POST" class="d-flex flex-column align-items-center ">
            <h1>Inscription</h1>
            <?php
            if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['mail']) &&  (!empty($_POST['username'])) && (!empty($_POST['password'])) && (!empty($_POST['mail']))){
             $utilisateur = new Utilisateur();
             $utilisateur->addUser($_POST ['username'] , $_POST['password'] , $_POST['mail']);
            }
            ?>
            <label class="signin-label">Nom d'utilisateur :</label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" value="<?php if (isset($_POST['username'])){echo $_POST['username'];} ?>" required>

            <label class="signin-label">Mot de passe :</label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" value="<?php if (isset($_POST['password'])){echo $_POST['password'];} ?>" id="password" class="mb-0" required>
            <span class="password-conditions mt-0">8 caractères minimum dont au moins 1 minuscule, 1 majuscule, 1 chiffre et un caractère spécial.</span>

            <span id="affichageMessage" class="mb-2"></span>


            <label class="signin-label">Email : </label>
            <input type="mail" placeholder="Entrer votre adresse mail" name="mail" value="<?php if (isset($_POST['mail'])){echo $_POST['mail'];} ?>" required>

            <input type="submit" id='submit' value="S'inscrire" class="px-3 py-2">
            <p class="mt-3 mb-0">Déjà un compte ?</p>
            <a href="./login.php" id="sign-in-or-up">Connectez-vous</a>
        </form>
    </div>
</body>

</html>