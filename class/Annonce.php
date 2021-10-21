<?php 
require_once('Database.php');

class Annonce extends Database
{
    private $connexion = new Database();
    
    private $title;
    private $category;
    private $description;
    private $price;
    private $localisation;

}

?>