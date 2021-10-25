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
            <?php 
                
                
                session_start();
                require_once("../class/Utilisateur.php");
                

                if(isset($_POST['username']) && isset($_POST['password']) && (!empty($_POST['username'])) && (!empty($_POST['password']))){
                    $utilisateur = new Utilisateur();
                    $utilisateur->login($_POST ['username'] , $_POST['password']);

                    
                    
                    
                    
                    
                    
                    
                    
                    
                    // Here I define my variables and secure them
                    // $username = strip_tags($_POST['username']);
                    // $password = strip_tags($_POST['password']);
                    // // Here I create the query
                    // $check = 'SELECT * FROM user WHERE name_user = :login';
                    // // I prepare the query
                    // $sql = $connection->connect()->prepare($check);
                    // // I bind the login param to my $username input field value
                    // $sql->bindValue(':login', $username, PDO::PARAM_STR);
                
                    // $user= $sql->execute();
                    // // I put the result of the query in the $user variable
                    // $user = $sql->fetch(PDO::FETCH_ASSOC);
                
                    // // Then I have to check if the username corresponds to what is in my DB
                    // // So I start by checking if it is different from a username in my DB
                    // if(!$user){
                    //     echo '<div class="alert alert-danger text-center" role="alert">
                    //     Cet utilisateur n\'existe pas.
                    //             </div>';
                    //     // If it is, do the "else" part and verify the password
                    // } else {
                    //     if(password_verify($password, $user['pass_user'])){
                    //         $_SESSION['goodcorner_connected']=true;
                    //         header('location:../index.php');
                    //     } else {
                    //         echo '<div class="alert alert-danger text-center" role="alert">
                    //         Le mot de passe saisi est invalide.
                    //             </div>';
                    //     }
                    // }
                }
            ?>
           
    
    
</body>

</html>