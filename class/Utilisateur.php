<?php
    require_once("Database.php");
class Utilisateur extends Database
{
    private $connexion;
    private $username;
    private $password;
    private $mail;

    public function __construct($username, $password, $mail){

        $this->username = strip_tags($username);
        $this->password = strip_tags($password);
        $this->mail = strip_tags($mail);


    }


    public function addUser($username, $password, $mail){
    
        $newUsername = strip_tags($username);
        $newPassword = strip_tags($password);
        $newMail = strip_tags($mail);
        

        $sql = $connexion->connect->prepare("INSERT INTO user(name_user, pass_user, mail_user) VALUE (:user,:pass,:mail)");
        $sql
        $sql->prepare("
        return $connexion;
    }
}
?>