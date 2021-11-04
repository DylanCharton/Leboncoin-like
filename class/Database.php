<?php

class Database
{

   public function connect() 
 {
     try
     {
        //  Offline
         $dbname = "leboncoin";
         $username = "root";
         $password = "";
        // Online
        // $dbname = "dylanc903_goodcorner";
        // $username = "dylanc903";
        // $password = "kHDQ4b191wu1nQ==";

         $bdd = new PDO('mysql:host=localhost;dbname='.$dbname.';port=3306;charset=utf8', $username, $password);
        
        return $bdd; 
      
    }

    catch(Exception $e)
    
    {
        die('Erreur : '.$e->getMessage());
    }
}
    
}

?>