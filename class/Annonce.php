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
        $create = "INSERT INTO annonces (title_annonce, desc_annonce, prix_annonce, loc_annonce, categorie_annonce, id_user, ";

        if(isset($_POST['submitImmo'])){
          $typeImmo = strip_tags($_POST['type-choice']);
          $surface = strip_tags($_POST['surface']);
          $rooms = strip_tags($_POST['rooms']);

          $create .= " type_immo, surface_immo, rooms_immo, id_user) VALUES (:titre, :desc, :price, :localisation, :categorie, 2, :typeimmo, :surface, :rooms)";

          $sql = $this->connect()->prepare($create);
          $sql->bindValue(":titre", $title);
          $sql->bindValue(":desc", $description);
          $sql->bindValue(":price", $price);
          $sql->bindValue(":localisation", $localisation);
          $sql->bindValue(":categorie", $category);
          $sql->bindValue(":typeimmo", $typeImmo);
          $sql->bindValue(":surface", $surface);
          $sql->bindValue(":rooms", $rooms);
          $insert = $sql->execute(); 
        }
        if(isset($_POST['submitCar'])){
          $brandCar = strip_tags($_POST['brand-car']);
          $modelCar = strip_tags($_POST['model-car']);
          $kilometers = strip_tags($_POST['kilometers-car']);
          $carburant = strip_tags($_POST['carburant-choice']);
          $gearbox = strip_tags($_POST['gearbox-choice']);
          $color = strip_tags($_POST['color-car']);
          $portes = strip_tags($_POST['portes-car']);
          $puissance = strip_tags($_POST['puissance-car']);
          $seats = strip_tags($_POST['seats-car']);

          $create.=" brand_car, model_car, kilometers_car, carburant_car, geartype_car, color_car, doors_car, din_car, seats_car) VALUES (:titre, :desc, :price, :localisation, :categorie, 2, :marque, :modele, :kilometres, :carburant, :geartype, :color, :doors, :din, :seats)";

          $sql = $this->connect()->prepare($create);
          $sql->bindValue(":titre", $title);
          $sql->bindValue(":desc", $description);
          $sql->bindValue(":price", $price);
          $sql->bindValue(":localisation", $localisation);
          $sql->bindValue(":categorie", $category);
          $sql->bindValue(":marque", $brandCar);
          $sql->bindValue(":modele", $modelCar);
          $sql->bindValue(":kilometres", $kilometers);
          $sql->bindValue(":carburant", $carburant);
          $sql->bindValue(":geartype", $gearbox);
          $sql->bindValue(":color", $color);
          $sql->bindValue(":doors", $portes);
          $sql->bindValue(":din", $puissance);
          $sql->bindValue(":seats", $seats);
          $insert = $sql->execute();
        }

        if(isset($_POST['submitInfo'])){
          $etat = strip_tags($_POST['etat-select']);

          $create.= ""
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