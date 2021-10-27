<?php

class Database
{

   public function connect() 
 {
     try
     {
         $bdd = new PDO('mysql:host=localhost;dbname=leboncoin;port=3306;charset=utf8', 'root', '');
<<<<<<< HEAD
        //  echo "Connected";
=======
        
>>>>>>> 677863e40a7506a54fb90b1586193ae75463a2a1
        return $bdd; 
      
     }
     catch(Exception $e)
     {
         die('Erreur : '.$e->getMessage());
     }
 }
    
}