<?php 
require_once('Database.php');

class Annonce extends Database
{   
    private $title;
    private $category;
    private $description;
    private $price;
    private $localisation;

    public function __construct($title, $category, $description, $price, $localisation){
        $this->title = $title;
        $this->category = $category;
        $this->description = $description;
        $this->price = $price;
        $this->localisation = $localisation;
    }

    public function createAnnonce($title, $category, $description, $price, $localisation){
        $query = "INSERT INTO annonces"
        $sql = $this->connect()->prepare($query)
    }
}

?>