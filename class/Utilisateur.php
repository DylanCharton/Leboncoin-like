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
        $newUsername = strip_tags($username);
        $newPassword = strip_tags($password);
        $newMail = strip_tags($mail);

        $sql = $this->connect()->prepare("INSERT INTO user(name_user, pass_user, mail_user) VALUES (:name, :pass, :mail)");
        $sql->bindValue(":name", $newUsername); 
        $sql->bindValue(":pass", $newPassword); 
        $sql->bindValue(":mail", $newMail); 
        $sql->execute();
        
    }
}
?>