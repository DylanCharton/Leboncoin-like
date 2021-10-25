<?php 
require_once('Database.php');

class Annonce extends Database
{   
    private $title;
    private $category;
    private $description;
    private $price;
    private $localisation;

    // public function __construct($title, $category, $description, $price, $localisation){
    //     $this->title = $title;
    //     $this->category = $category;
    //     $this->description = $description;
    //     $this->price = $price;
    //     $this->localisation = $localisation;
    // }

    public function createAnnonce($title, $category, $description, $price, $localisation){
        $create = "INSERT INTO annonces";
        $params = array();
        if(isset($_POST['submitImmo'])){


        }




        $sql = $this->connect()->prepare($query);
    }

    public function displayAllAds(){
        $sql=$this->connect()->prepare("SELECT * FROM annonces ORDER BY id_annonce");
        $sql->execute();
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($results as $ad)
        echo ' <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">'.$ad['title_annonce'].'</h5>
          <p class="card-text">'.$ad['desc_annonce'].'</p>
          <a href="#" class="btn btn-primary">Voir</a>
        </div>
      </div>';

        return $results;

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