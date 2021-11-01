<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../css/login.css" media="screen" type="text/css" />
</head>

<body>
    <div id="container">
        <!-- zone de connexion -->

        <form action="#" method="POST">
            <h1>Connexion</h1></br>

            <label><b>Nom d'utilisateur : </b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe : </b></label>
        
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='LOGIN'>

            <div class="d-flex justify-content-center links">
            </br> Avez-vous un compte  ?<a href="signin.php"></br></br>Inscrivez-vous !</a>
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