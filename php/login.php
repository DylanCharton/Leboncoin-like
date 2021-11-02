<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS & BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css" media="screen" type="text/css" />
    <title>The Good Corner - Connexion</title>
</head>
    
<body>
    <div id="container">
        <!-- zone de connexion -->

        <form action="#" method="POST" class="d-flex justify-content-center flex-column align-items-center">
            <h1 class="pb-2">Connexion</h1>

            <label><b>Nom d'utilisateur : </b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe : </b></label>
        
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='Se connecter' class="px-3 py-2">

            <div class="d-flex justify-content-center links flex-column">
            <p class="pt-3 pb-0">Vous n'avez pas de compte ?</p>
            <a href="signin.php">Inscrivez-vous</a>
		    </div>
	
        </form>     
           
        

    </div>        
<?php session_start();
                require_once "../class/Utilisateur.php";
                

                if(isset($_POST['username']) && isset($_POST['password']) && (!empty($_POST['username'])) && (!empty($_POST['password']))){
                    $utilisateur = new Utilisateur();
                    $utilisateur->login($_POST ['username'] , $_POST['password']);
                };

                    ?>