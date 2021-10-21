<?php
    require_once("Database.php");
class Utilisateur extends Database
{
     
    private $username;
    private $password;
    private $mail;

    public function __construct($username, $password, $mail){
        $this->username = $username;
        $this->password = $password;
        $this->mail = $mail;
    }

    public function addUser($username, $password, $mail){
        $connexion = new Database();
        $newUsername = strip_tags($username);
        $newPassword = strip_tags($password);
        $newMail = strip_tags($mail);

        $connexion->connect();
        return $connexion;
    }
}
?>