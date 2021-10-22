

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/signin.css">
    <title>Inscription</title>
</head>

<body>
    <!-- <div id="container">
        <form class="row g-3">
            <div class="col-sm-1">
                <label for="inputUser" class="form-label">User</label>
                <input type="text" class="form-control" id="inputUser">
            </div>
            <div class="col-sm-1">
                <label for="inputMail" class="form-label">Mail</label>
                <input type="mail" class="form-control" id="inputMail">
            </div>
            <div class="col-sm-1">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>

    </div> -->

    <div id="container">
        <!-- zone de connexion -->

        <form action="#" method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur : </b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe : </b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <label><b>Email : </b></label>
            <input type="mail" placeholder="Entrer votre adresse mail" name="mail" required>

            <input type="submit" id='submit' value="S'inscrire">

            
	
        </form>     
           
        

    </div>

    <?php
        
        require_once("../class/Database.php");
        $connection = new Database;

        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['mail']) &&  (!empty($_POST['username'])) && (!empty($_POST['password'])) && (!empty($_POST['mail']))){
        // Here I define my variables and secure them
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $mail = strip_tags($_POST['mail']);
        // create my request
        $create_user = 'INSERT INTO `user`(`id_user`, `name_user`, `mail_user`, `pass_user`) VALUES (NULL,:username,:password,:mail)';
        $sql = $connection->connect()->prepare($create_user);
        // bind the values
        $sql->bindValue(':username', $username, PDO::PARAM_STR);
        $sql->bindValue(':password', $password, PDO::PARAM_STR);
        $sql->bindValue(':mail', $mail, PDO::PARAM_STR);
        $sql->execute();
        //inform the user his account is created
        echo '<div class"alert alert-success mt-3"role="alert">
        Votre compte a bien été créé, vous pouvez désormais vous connecter.
        </div>';
        header('Refresh:2; url=../index.php');




    }
    ?>

</body>

</html>