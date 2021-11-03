<?php

class Database
{

   public function connect() 
    {
        try 
        {
         $bdd = new PDO('mysql:host=localhost;dbname=leboncoin;port=3306;charset=utf8', 'root', '', [
             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
         ] );

        
        return $bdd; 
      
    }

    catch(Exception $e)
    
    {
        die('Erreur : '.$e->getMessage());
    }
}
    
}

?>