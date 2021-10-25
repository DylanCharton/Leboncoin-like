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
        $create = "INSERT INTO annonces";
        $params = array();
        if(isset($_POST['submitImmo'])){


        }




        $sql = $this->connect()->prepare($query)
    }

    public function displayAnnonce(){

    }

    public function deleteAnnonce(){
        
    }

    /////////////////////--WHAT WE HAVE TO CREATE--///////////////////////
    // A function to create an ad //
    // A function to search for ads //
    // A function so each user can delete his own ads //
    // A function so any user can see the other's ads and send them a message (not the same function of course)//
}

?>