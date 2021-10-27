<?php 
require_once('Database.php');

class Annonce extends Database
{   
    private $title;
    private $category;
    private $description;
    private $price;
    private $localisation;

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
          $sql->execute(); 
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
          $sql->execute();
        }

        if(isset($_POST['submitInfo'])){
          $etat = strip_tags($_POST['etat-select']);

          $create.= "etat_multimedia) VALUES (:titre, :desc, :price, :localisation, :categorie, 2, :etat)";

          $sql = $this->connect()->prepare($create);
          $sql->bindValue(":titre", $title);
          $sql->bindValue(":desc", $description);
          $sql->bindValue(":price", $price);
          $sql->bindValue(":localisation", $localisation);
          $sql->bindValue(":categorie", $category);
          $sql->bindValue(":etat", $etat);
          $sql->execute();

        }

        if(isset($_POST['submitGaming'])){
          $type = strip_tags($_POST['type-gaming']);
          $brand = strip_tags($_POST['brand-gaming']);
          $model = strip_tags($_POST['model-gaming']);
          $etat = strip_tags($_POST['etat-select']);

          $create .= "type_gaming, brand_gaming, model_gaming, etat_multimedia) VALUES (:titre, :desc, :price, :localisation, :categorie, 2, :type, :marque, :modele, :etat)";

          $sql = $this->connect()->prepare($create);
          $sql->bindValue(":titre", $title);
          $sql->bindValue(":desc", $description);
          $sql->bindValue(":price", $price);
          $sql->bindValue(":localisation", $localisation);
          $sql->bindValue(":categorie", $category);
          $sql->bindValue(":type", $type);
          $sql->bindValue(":marque", $brand);
          $sql->bindValue(":modele", $model);
          $sql->bindValue(":etat", $etat);
          $sql->execute();
        }

        if(isset($_POST['submitTelephonie'])){
          $brand = strip_tags($_POST['brand-telephonie']);
          $model = strip_tags($_POST['model-telephonie']);
          $color = strip_tags($_POST['color_telephonie']);
          $storage = strip_tags($_POST['storage-telephonie']);
          $etat = strip_tags($_POST['etat-select']);

          $create .= " brand_phone, model_phone, color_phone, storage_phone) VALUES (:titre, :desc, :price, :localisation, :categorie, 2,:marque, :model, :color, :storage, :etat)";

          $sql = $this->connect()->prepare($create);
          $sql->bindValue(":titre", $title);
          $sql->bindValue(":desc", $description);
          $sql->bindValue(":price", $price);
          $sql->bindValue(":localisation", $localisation);
          $sql->bindValue(":categorie", $category);
          $sql->bindValue(":marque", $brand);
          $sql->bindValue(":model", $model);
          $sql->bindValue(":color", $color);
          $sql->bindValue(":storage", $storage);
          $sql->bindValue(":etat", $etat);
          $sql->execute();

        }
        header('Refresh: 2; ../index.php');
        echo '<div class="alert alert-success">Votre annonce a bien été créée, je vous ramène à l\'accueil</div>';
    }

    public function display($ads){
        foreach($ads as $ad)
        echo ' <div class="card mx-3 pb-3 my-2" style="width: 20rem;">
                <img src="https://via.placeholder.com/400x300.png" class="card-img-top" alt="main image of the ad">
                <div class="card-body">
                  <h5 class="card-title">'.$ad['title_annonce'].'</h5>
                  <p class="card-text mb-0">'.$ad['loc_annonce'].'</p>
                  <p class="card-text text-black-50">'.$ad['desc_annonce'].'</p>
                  <div class="d-flex justify-content-evenly pt-5 card-bottom">
                  <h5>'.$ad['prix_annonce'].'€</h5>
                    <a href="../php/annonce.php" class="btn btn-success">Voir</a>
                  </div>
                </div>
              </div>';

    }
    public function allAds(){
      $sql=$this->connect()->prepare("SELECT * FROM annonces ORDER BY id_annonce");
      $sql->execute();
      $results = $sql->fetchAll(PDO::FETCH_ASSOC);
      return $results;

    }

    public function searchAnnonce($keywords, $category){
      $select = "SELECT * FROM annonces WHERE 1=1";
      $param = array();

      if(!empty($category)){
  
        $select .= " && categorie_annonce = ?";
        array_push($param, $category);
      }
      if(!empty($keywords)){
    
        $select .= " && title_annonce LIKE ?";
        array_push($param, '%'.$keywords.'%');
      }
      $sql = $this->connect()->prepare($select);
      $sql->execute($param);
      $result = $sql->fetchAll(PDO::FETCH_ASSOC);
      
      return $result;


    }


    /////////////////////--WHAT WE HAVE TO CREATE--///////////////////////
    // A function to create an ad //
    // A function to search for ads //
    // A function so each user can delete his own ads //
    // A function so any user can see the other's ads and send them a message (not the same function of course)//
}

?>