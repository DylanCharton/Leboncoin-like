<?php

class Database
{

   public function connect() 
 {
     try
     {
         $bdd = new PDO('mysql:host=localhost;dbname=leboncoin;port=3306;charset=utf8', 'root', '');
        
        return $bdd; 
      
     }
     catch(Exception $e)
     {
         die('Erreur : '.$e->getMessage());
     }
 }
    
}