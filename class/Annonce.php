<?php 
require_once('Database.php');

class Annonce extends Database
{   
    private $title;
    private $category;
    private $description;
    private $price;
    private $localisation;

    public function createAnnonce($title, $description, $price, $localisation, $category, $id){
      // I start the request here
        $create = "INSERT INTO annonces (title_annonce, desc_annonce, prix_annonce, loc_annonce, categorie_annonce, id_user, ";

        if(isset($_POST['submitImmo'])){
          $typeImmo = strip_tags($_POST['type-choice']);
          $surface = strip_tags($_POST['surface']);
          $rooms = strip_tags($_POST['rooms']);
          // I finish the request here, only when the condition is chosen, since I generate several submit buttons so I only get the datas I want
          $create .= " type_immo, surface_immo, rooms_immo) VALUES (:titre, :desc, :price, :localisation, :categorie, :user , :typeimmo, :surface, :rooms)";

          $sql = $this->connect()->prepare($create);
          $sql->bindValue(":titre", $title);
          $sql->bindValue(":desc", $description);
          $sql->bindValue(":price", $price);
          $sql->bindValue(":localisation", $localisation);
          $sql->bindValue(":categorie", $category);
          $sql->bindValue(":user", $id);
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

          $create.=" brand_car, model_car, kilometers_car, carburant_car, geartype_car, color_car, doors_car, din_car, seats_car) VALUES (:titre, :desc, :price, :localisation, :categorie, :user, :marque, :modele, :kilometres, :carburant, :geartype, :color, :doors, :din, :seats)";

          $sql = $this->connect()->prepare($create);
          $sql->bindValue(":titre", $title);
          $sql->bindValue(":desc", $description);
          $sql->bindValue(":price", $price);
          $sql->bindValue(":localisation", $localisation);
          $sql->bindValue(":categorie", $category);
          $sql->bindValue(":user", $id);
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
          $subcat = strip_tags($_POST['select-multimedia']);

          $create.= "souscat_annonce , etat_multimedia) VALUES (:titre, :desc, :price, :localisation, :categorie, :user, :subcat, :etat)";

          $sql = $this->connect()->prepare($create);
          $sql->bindValue(":titre", $title);
          $sql->bindValue(":desc", $description);
          $sql->bindValue(":price", $price);
          $sql->bindValue(":localisation", $localisation);
          $sql->bindValue(":categorie", $category);
          $sql->bindValue(":subcat", $subcat);
          $sql->bindValue(":user", $id);
          $sql->bindValue(":etat", $etat);
          $sql->execute();

        }
        // Here I don't make any difference between the categories and the sub-categories since the sub-categories will automatically be linked with the big category
        if(isset($_POST['submitGaming'])){
          $type = strip_tags($_POST['type-gaming']);
          $brand = strip_tags($_POST['brand-gaming']);
          $model = strip_tags($_POST['model-gaming']);
          $etat = strip_tags($_POST['etat-select']);
          $subcat = strip_tags($_POST['select-multimedia']);

          $create .= "souscat_annonce, type_gaming, brand_gaming, model_gaming, etat_multimedia) VALUES (:titre, :desc, :price, :localisation, :categorie, :user, :subcat, :type, :marque, :modele, :etat)";

          $sql = $this->connect()->prepare($create);
          $sql->bindValue(":titre", $title);
          $sql->bindValue(":desc", $description);
          $sql->bindValue(":price", $price);
          $sql->bindValue(":localisation", $localisation);
          $sql->bindValue(":categorie", $category);
          $sql->bindValue(":subcat", $subcat);
          $sql->bindValue(":user", $id);
          $sql->bindValue(":type", $type);
          $sql->bindValue(":marque", $brand);
          $sql->bindValue(":modele", $model);
          $sql->bindValue(":etat", $etat);
          $sql->execute();
        }

        if(isset($_POST['submitTelephonie'])){
          $brand = strip_tags($_POST['brand-telephonie']);
          $model = strip_tags($_POST['model-telephonie']);
          $color = strip_tags($_POST['color-telephonie']);
          $storage = strip_tags($_POST['storage-telephonie']);
          $etat = strip_tags($_POST['etat-select']);
          $subcat = strip_tags($_POST['select-multimedia']);

          $create .= "souscat_annonce, brand_phone, model_phone, color_phone, storage_phone, etat_multimedia) VALUES (:titre, :desc, :price, :localisation, :categorie, :user, :subcat, :marque, :model, :color, :storage, :etat)";

          $sql = $this->connect()->prepare($create);
          $sql->bindValue(":titre", $title);
          $sql->bindValue(":desc", $description);
          $sql->bindValue(":price", $price);
          $sql->bindValue(":localisation", $localisation);
          $sql->bindValue(":categorie", $category);
          $sql->bindValue(":subcat", $subcat);
          $sql->bindValue(":user", $id);
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
      // Classic foreach loop the display the ads properly
        foreach($ads as $ad)
        echo ' <div class="card mx-3 pb-3 my-2" style="width: 20rem;">
                <img src="https://via.placeholder.com/400x300.png" class="card-img-top" alt="main image of the ad">
                <div class="card-body">
                  <h5 class="card-title text-grey">'.$ad['title_annonce'].'</h5>
                  <p class="card-text mb-0 text-grey">'.$ad['loc_annonce'].'</p>
                  <p class="card-text text-black-50">'.$ad['desc_annonce'].'</p>
                  <div class="d-flex justify-content-evenly pt-5 card-bottom">
                  <h5 class="text-grey">'.$ad['prix_annonce'].'€</h5>
                    <a href="./php/annonce.php?id='.$ad['id_annonce'].'&user='.$ad['id_user'].'" class="btn btn-success">Voir</a>
                  </div>
                </div>
              </div>';

    }
    public function displayMyAds($ads){
      // That function is made only for the My Account page and has a Delete button
      foreach($ads as $ad)
        echo ' <div class="card mx-3 pb-3 my-2" style="width: 20rem;">
                <img src="https://via.placeholder.com/400x300.png" class="card-img-top" alt="main image of the ad">
                <div class="card-body">
                  <h5 class="card-title text-grey">'.$ad['title_annonce'].'</h5>
                  <p class="card-text mb-0 text-grey">'.$ad['loc_annonce'].'</p>
                  <p class="card-text text-black-50">'.$ad['desc_annonce'].'</p>
                  <div class="d-flex justify-content-evenly pt-5 card-bottom">
                  <h5 class="text-grey">'.$ad['prix_annonce'].'€</h5>
                  <div class="mx-3">
                    <a href="./annonce.php?id='.$ad['id_annonce'].'&user='.$ad['id_user'].'" class="btn btn-success">Voir</a>
                  </div>
                    <form method="get">
                    <input type="submit" value="Supprimer" class="btn btn-danger">
                    <input type="hidden" name="supprId" value="'.$ad['id_annonce'].'">
                    </form>
                  </div>
                </div>
              </div>';
    }

    // Here I simply get all the entries in my database
    public function allAds(){
      $sql=$this->connect()->prepare("SELECT * FROM annonces ORDER BY id_annonce DESC");
      $sql->execute();
      $results = $sql->fetchAll(PDO::FETCH_ASSOC);
      return $results;

    }
    // Here I get the entries that belongs to the current user
    public function myAds($id){
      $sql=$this->connect()->prepare("SELECT * FROM annonces WHERE id_user = :id");
      $sql->bindValue(":id", $id);
      $sql->execute();
      $results = $sql->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    }
    public function deleteAd($id){
      $del = $this->connect()->prepare("DELETE FROM annonces WHERE id_annonce = :id");
      $del->bindParam(':id', $id);
      $del-> execute();
      header('Location: myaccount.php');
      
    }

    public function searchAnnonce($keywords, $category, $localisation){
      // Starting the request that will be completed according to the conditions filled
      $select = "SELECT * FROM annonces WHERE 1=1";
      // Declaring an array that will be filled later so I can put it in the ->execute()
      $param = array();
// If my two prices fields aren't empty, I'll trigger a research between the first and the second input
      if(!empty($_POST['minprice']) && (!empty($_POST['maxprice']))){
        $min = $_POST['minprice'];
        $max = $_POST['maxprice'];
        $select .= "&& prix_annonce BETWEEN ? AND ?";
        // array_push() allows me to push the parameter in the array
        array_push($param, $min);
        array_push($param, $max);
      }
      // The category condition contains all the conditions related to categories, just in case.
      if(!empty($category)){
        $select .= " && categorie_annonce = ?";
        array_push($param, $category);

        // Vente Immobilières category
        if(!empty($_POST['type-immo'])){
          $type = $_POST['type-immo'];
          $select .= " && type_immo = ?";
          array_push($param, $type);
        
        }
        if(!empty($_POST['minsurface']) && !empty($_POST['maxsurface'])){
          $minsurface = $_POST['minsurface'];
          $maxsurface = $_POST['maxsurface'];
          $select .= " && surface_immo BETWEEN ? AND ?";
          array_push($param, $minsurface);
          array_push($param, $maxsurface);
        }
        if(!empty($_POST['minrooms']) && !empty($_POST['maxrooms'])){
          $minrooms = $_POST['minrooms'];
          $maxrooms = $_POST['maxrooms'];
          $select .= " && rooms_immo BETWEEN ? AND ?";
          array_push($param, $minrooms);
          array_push($param, $maxrooms);
        }
        // Voitures category
        if(!empty($_POST['brand-car'])){
          $brandCar = $_POST['brand-car'];
          $select .= " && brand_car LIKE ?";
          array_push($param, '%'.$brandCar.'%');
        }
        if(!empty($_POST['model-car'])){
          $modelCar = $_POST['model-car'];
          $select .= " && model_car LIKE ?";
          array_push($param, '%'.$modelCar.'%');
        }
        if(!empty($_POST['minkilometres']) && !empty($_POST['maxkilometres'])){
          $minkilometres = $_POST['minkilometres'];
          $maxkilometres = $_POST['maxkilometres'];
          $select .= " && kilometers_car BETWEEN ? AND ?";
          array_push($param, $minkilometres);
          array_push($param, $maxkilometres);
        }
        

        if(!empty($_POST['carburant'])){
          $carburant = $_POST['carburant'];
          $select .= " && carburant_car = ?";
          array_push($param, $carburant);

        }
        if(!empty($_POST['gearbox'])){
          $gearbox = $_POST['gearbox'];
          $select .= " && geartype_car = ?";
          array_push($param, $gearbox);
        }
        
        if(!empty($_POST['color-car'])){
          $colorCar = $_POST['color-car'];
          $select .= " && color_car LIKE ?";
          array_push($param, '%'.$colorCar.'%');
        }
        if(!empty($_POST['doors-car'])){
          $doorsCar = $_POST['doors-car'];
          $select .= " && doors_car = ?";
          array_push($param, $doorsCar);
        }
        if(!empty($_POST['mindin']) && !empty($_POST['maxdin'])){
          $mindin = $_POST['mindin'];
          $maxdin = $_POST['maxdin'];
          $select .= " && din_car BETWEEN ? AND ?";
          array_push($param, $mindin);
          array_push($param, $maxdin);
        }
        if(!empty($_POST['seats-car'])){
          $seatsCar = $_POST['seats-car'];
          $select .= " && seats_car = ?";
          array_push($param, $seatsCar);
        }
        // Restriction of sub-category
        if(!empty($_POST['select-multimedia'])){
          $souscat = $_POST['select-multimedia'];
          $select .= " && souscat_annonce = ?";
          array_push($param, $souscat);
        }
        // Multimedia category 
        if(!empty($_POST['type-gaming'])){
          $typeGaming = $_POST['type-gaming'];
          $select .= " && type_gaming = ?";
          array_push($param, $typeGaming);
        }
        if(!empty($_POST['model-gaming'])){
          $modelGaming = $_POST['model-gaming'];
          $select .= " && model_gaming LIKE ?";
          array_push($param, '%'.$modelGaming.'%');
        }
        if(!empty($_POST['brand-gaming'])){
          $brandGaming = $_POST['brand-gaming'];
          $select .= " && brand_gaming LIKE ?";
          array_push($param, '%'.$brandGaming.'%');
        }
        if(!empty($_POST['model-telephonie'])){
          $modelTelephonie = $_POST['model-telephonie'];
          $select .= " && model_phone LIKE ?";
          array_push($param, '%'.$modelTelephonie.'%');
        }
        if(!empty($_POST['brand-telephonie'])){
          $brandTelephonie = $_POST['brand-telephonie'];
          $select .= " && brand_phone LIKE ?";
          array_push($param, '%'.$brandTelephonie.'%');
        }
        if(!empty($_POST['color-telephonie'])){
          $colorTelephonie = $_POST['color-telephonie'];
          $select .= " && color_phone LIKE ?";
          array_push($param, '%'.$colorTelephonie.'%');
        }
        if(!empty($_POST['storage-telephonie'])){
          $storageTelephonie = $_POST['storage-telephonie'];
          $select .= " && storage_phone LIKE ?";
          array_push($param, '%'.$storageTelephonie.'%');
        }
        if(!empty($_POST['state-multimedia'])){
          $etatMultimedia = $_POST['state-multimedia'];
          $select .= " && etat_multimedia = ?";
          array_push($param, $etatMultimedia);
        }
        
      }
      if(!empty($keywords)){
        $select .= " && title_annonce LIKE ?";
        array_push($param, '%'.$keywords.'%');
      }
      if(!empty($localisation)){
        $select.= " && loc_annonce LIKE ?";
        array_push($param, '%'.$localisation.'%');
      }
      
      // 
      $sql = $this->connect()->prepare($select);
      // I put the array in the execute()
      $sql->execute($param);
      $result = $sql->fetchAll(PDO::FETCH_ASSOC);
      
      return $result;


    }

    public function fetchOneAd($id){
      // Here I get the ad I clicked on
      $sql = $this->connect()->prepare("SELECT * FROM annonces WHERE id_annonce = :id");
      $sql->bindValue(':id', $id);
      $sql->execute();
      $result = $sql->fetch(PDO::FETCH_ASSOC);

      return $result;
      
  }
  
  public function displayCarac($ad){
    // That function allow me to display ONLY THE NON NULL variables in the ad page
    echo '<li> Catégorie : '.$ad['categorie_annonce'].'';
            if($ad['souscat_annonce'] !== null){
                echo '<li> Sous-catégorie : '.$ad['souscat_annonce'].'';
            }
            if($ad['type_immo'] !== null){
                echo '<li> Type de bien : '.$ad['type_immo'].'';
            }
            if($ad['surface_immo'] !== null){
                echo '<li> Surface : '.$ad['surface_immo'].'';
            }
            if($ad['rooms_immo'] !== null){
                echo '<li> Pièces : '.$ad['rooms_immo'].'';
            }
            if($ad['brand_car'] !== null){
                echo '<li> Marque : '.$ad['brand_car'].'';
            }
            if($ad['model_car'] !== null){
                echo '<li> Modèle : '.$ad['model_car'].'';
            }
            if($ad['kilometers_car'] !== null){
                echo '<li> Kilométrage : '.$ad['kilometers_car'].'km';
            }
            if($ad['carburant_car'] !== null){
                echo '<li> Carburant : '.$ad['carburant_car'].'';
            }
            if($ad['geartype_car'] !== null){
                echo '<li> Boîte de vitesse : '.$ad['geartype_car'].'';
            }
            if($ad['color_car'] !== null){
                echo '<li> Couleur : '.$ad['color_car'].'';
            }
            if($ad['doors_car'] !== null){
                echo '<li> Portes : '.$ad['doors_car'].'';
            }
            if($ad['din_car'] !== null){
                echo '<li> Puissance DIN : '.$ad['din_car'].'ch.';
            }
            if($ad['seats_car'] !== null){
                echo '<li> Sièges : '.$ad['seats_car'].'';
            }
            if($ad['etat_multimedia'] !== null){
                echo '<li> État : '.$ad['etat_multimedia'].'';
            }
            if($ad['type_gaming'] !== null){
                echo '<li> Type : '.$ad['type_gaming'].'';
            }
            if($ad['brand_gaming'] !== null){
                echo '<li> Marque : '.$ad['brand_gaming'].'';
            }
            if($ad['model_gaming'] !== null){
                echo '<li> Modèle : '.$ad['model_gaming'].'';
            }
            if($ad['brand_phone'] !== null){
                echo '<li> Marque : '.$ad['brand_phone'].'';
            }
            if($ad['model_phone'] !== null){
                echo '<li> Modèle : '.$ad['model_phone'].'';
            }
            if($ad['color_phone'] !== null){
                echo '<li> Couleur : '.$ad['color_phone'].'';
            }
            if($ad['storage_phone'] !== null){
                echo '<li> Capacité de stockage : '.$ad['storage_phone'].'Go';
            }
  }

    /////////////////////--WHAT WE HAVE TO CREATE--///////////////////////
 
    // A function so each user can delete his own ads //

}

?>