<?php
require_once ("../models/bd/model.php");

function inserCleApi($bd, $dateMariage, $numero, $apiKey, $sms, $snap){
   $recTable = rowCount ( $bd, "mariag_api", "api", $apiKey);
   if($recTable === 0){
    $null = "null";
    $nulle = "0";
    $inser = $bd->prepare("INSERT INTO mariag_api ( api, sms, snap, marie, mariée, map, date_marige, limite_invite, délai_invitation, tel,etat ) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $inser->execute(array($apiKey, $sms, $snap, $null, $null, $null, $dateMariage, $nulle, $nulle, $numero, "1"));
    return 1;
   }
}
?>