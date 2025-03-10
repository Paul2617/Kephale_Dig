<?php
require_once ("../models/bd/model.php");

function inserCleApi($bd, $dateMariage, $numero, $apiKey, $sms, $snap){
   $recTable = rowCount ( $bd, "api", "api", $apiKey);
   if($recTable === 0){
    $null = "null";
    $nulle = "0";
    $inser = $bd->prepare("INSERT INTO mariag_api ( api, type, date_debut, date_fin, etat) VALUES (?,?,?,?,?)");
    $inser->execute(array($apiKey, $type, $date_debut, $date_fin, "1"));
    return 1;
   }
}
?>