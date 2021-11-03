<?php
    require_once("Database.php");
class Utilisateur extends Database
{
    private $connexion;
    private $username;
    private $password;
    private $mail;

    public function addUser($username, $password, $mail){
        // The strip_tags method helps me secure my fields by removing the script and html tags.
        $username = strip_tags($username);
        $password = strip_tags($password);
        $mail = strip_tags($mail);

       
        // Regex to check the format of the password
        if (preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!?@#$%^&*-])[\da-zA-Z!?@#$%^&*-]{8,50}$/', $password)){
            echo 'Mot de passe conforme';
            $password = password_hash($password, PASSWORD_DEFAULT);
        }else {
            echo 'Mot de passe non conforme';
            die;  

        }

        $sql = $this->connect()->prepare("INSERT INTO user(name_user, pass_user, mail_user) VALUES (:name, :pass, :mail)");
        $sql->bindValue(":name", $username); 
        $sql->bindValue(":pass", $password); 
        $sql->bindValue(":mail", $mail); 
        $sql->execute();
        echo '<div class"alert alert-success mt-3"role="alert">
        Votre compte a bien été créé, vous pouvez désormais vous connecter.
        </div>';
        header('Refresh:2; url=../php/login.php');
        // If the user is created, redirect them to the login

    }



    public function login($username, $password){

        $username = strip_tags($username);
        $password = strip_tags($password);
       

        $check = 'SELECT * FROM user WHERE name_user = :login';

        $sql = $this->connect()->prepare($check);
        // I bind the login param to my $username input field value
        $sql->bindValue(':login', $username, PDO::PARAM_STR);
        $user= $sql->execute();
        // I put the result of the query in the $user variable
        $user = $sql->fetch(PDO::FETCH_ASSOC);

        if(!$user){
            echo '<div class="alert alert-danger text-center" role="alert">
            Cet utilisateur n\'existe pas.
                    </div>';
            // If it is, do the "else" part and verify the password
        } else {
            if(password_verify($password, $user ['pass_user'])){
                // If the password is verified, I create session variable to get the name, the mail and the id of the user so I can use them.
                $_SESSION['goodcorner_connected']=true;
                $_SESSION['my_profil']=$user['name_user'];
                $_SESSION['my_mail']=$user['mail_user'];
                $_SESSION['id_user']=$user['id_user'];
                
                header('location:../index.php');
            } else {
                echo '<div class="alert alert-danger text-center" role="alert">
                Le mot de passe saisi est invalide.
                    </div>';
            }
        }


    }
    function fetchOneUser($user){
        $sql = $this->connect()->prepare("SELECT * FROM user WHERE id_user = :user");
        $sql->bindValue(':user', $user);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
    
        return $result;
    }
}
?>