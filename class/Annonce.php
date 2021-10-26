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

    public function createAnnonce($title, $description, $price, $localisation, $category){
        $create = "INSERT INTO annonces";

        if(isset($_POST['submitImmo'])){
          $typeImmo = strip_tags($_POST['type-choice']);
          $surface = strip_tags($_POST['surface']);
          $rooms = strip_tags($_POST['rooms']);


          $create .= "(title_annonce, desc_annonce, prix_annonce, loc_annonce, categorie_annonce, type_immo, surface_immo, rooms_immo) VALUES (:titre, :desc, :price, :localisation, :categorie, :typeimmo, :surface, :rooms)";

          $sql = $this->connect()->prepare($create);
          $sql->bindValue(":titre", $title);
          $sql->bindValue(":desc", $description);
          $sql->bindValue(":price", $price);
          $sql->bindValue(":localisation", $localisation);
          $sql->bindValue(":categorie", $category);
          $sql->bindValue(":typeimmo", $typeImmo);
          $sql->bindValue(":surface", $surface);
          $sql->bindValue(":rooms", $rooms);
          $sql->execute();
          var_dump($sql);
          
          echo $title, $description, $price, $localisation, $category, $typeImmo, $surface, $rooms;
          
        }

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