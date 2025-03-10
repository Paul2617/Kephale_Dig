<?php
require_once ("../models/bd/model.php");

function inserCleApi($bd, $date_debut, $type, $apiKey, $date_fin ){
   $recTable = rowCount ( $bd, "api", "api", $apiKey);
   if($recTable === 0){
    $etat = '1';
    $inser = $bd->prepare("INSERT INTO api ( api, types, date_debut, date_fin, etat) VALUES (?,?,?,?,?)");
    $inser->execute(array($apiKey, $type, $date_debut, $date_fin, $etat));
    return 1;
   }
}
?>