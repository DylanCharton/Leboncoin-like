

<?php

require_once("class/Database.php");


function checkConnexion(){
    
    $connection = new Database();
    $connection->connect();

    if(isset($_SESSION['concierge_connected'])){
        echo 'Bonjour '.$_SESSION['firstname'].' '.$_SESSION['lastname'].'';
    } else {
        header("Location: php/login.php");
    }
}
?>