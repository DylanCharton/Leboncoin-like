<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/signin.css">
    <title>Inscription</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="../js/mdp.js"></script>
</head>

<body>

    <script>
        window.addEventListener('load', function () {
            console.log('Cette fonction est exécutée une fois quand la page est chargée.');
        });
    </script>

    <div id="container">

        <!-- zone de connexion -->

        <form action="#" method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur : </b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe : </b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" id="password" required title="Votre mot de passe doit contenir au moins :

 8 caractères minimum
 1 chiffre minimum
 1 lettre minuscule minimum
 1 lettre majuscule minimum
 50 caractères maximum">
 
            <span id="affichageMessage"></span></br>


            </br><label><b>Email : </b></label>
            <input type="mail" placeholder="Entrer votre adresse mail" name="mail" required>

            <input type="submit" id='submit' value="S'inscrire">



        </form>



    </div>

    <?php
        
        require_once("../class/Utilisateur.php");
        

        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['mail']) &&  (!empty($_POST['username'])) && (!empty($_POST['password'])) && (!empty($_POST['mail']))){
            $utilisateur = new Utilisateur();
            $utilisateur->addUser($_POST ['username'] , $_POST['password'] , $_POST['mail']);
           
        // Here I define my variables and secure them

        // $username = strip_tags($_POST['username']);
        // $password = strip_tags($_POST['password']);
        // $password = password_hash($password, PASSWORD_DEFAULT);
        // $mail = strip_tags($_POST['mail']);

        // create my request

        // $create_user = 'INSERT INTO `user`(`id_user`, `name_user`, `mail_user`, `pass_user`) VALUES (NULL,:username,:password,:mail)';
        // $sql = $connection->connect()->prepare($create_user);

        // bind the values

        // $sql->bindValue(':username', $username, PDO::PARAM_STR);
        // $sql->bindValue(':password', $password, PDO::PARAM_STR);
        // $sql->bindValue(':mail', $mail, PDO::PARAM_STR);
        // $sql->execute();

        //inform the user his account is created

        // echo '<div class"alert alert-success mt-3"role="alert">
        // Votre compte a bien été créé, vous pouvez désormais vous connecter.
        // </div>';
        // header('Refresh:2; url=../index.php');

        


    }
    ?>

</body>

</html>