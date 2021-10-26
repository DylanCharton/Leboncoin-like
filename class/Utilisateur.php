<?php
    require_once("Database.php");
class Utilisateur extends Database
{
    private $connexion;
    private $username;
    private $password;
    private $mail;

    // public function __construct($username, $password, $mail){
    //     $this->username = $username;
    //     $this->password = $password;
    //     $this->mail = $mail;

    // }

    // (?=.[0-9])(?=.[A-Z]).{8,20}

    public function addUser($username, $password, $mail){
        $username = strip_tags($username);
        $password = strip_tags($password);
        $mail = strip_tags($mail);

       

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
        header('Refresh:2; url=../index.php');

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
            if(password_verify($password, $user['pass_user'])){
                $_SESSION['goodcorner_connected']=true;
                header('location:../index.php');
            } else {
                echo '<div class="alert alert-danger text-center" role="alert">
                Le mot de passe saisi est invalide.
                    </div>';
            }
        }


    }



}



// (?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*-])[\da-zA-Z!@#$%^&*-]{8,50}
        // $uppercase = preg_match('@[A-Z]@', $password);
        // $lowercase = preg_match('@[a-z]@', $password);
        // $number    = preg_match('@[0-9]@', $password);
        // $specialChars = preg_match('@[^\w]@', $password);
        // if(!$specialChars && !$uppercase && !$lowercase && !$number && strlen($password) < 8) {
        //     

        //     else {
        //     echo 'Mot de passe non conforme';
        //     die;   
        // }
        // /^(?=.[0-9])(?=.[A-Z])(?=.[a-z])(?=.[!@#$%^&*-]).{8,50}$/
        // ^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$
?>