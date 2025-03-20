<?php 
function  enregistre_api ($bd, $apiKey, $numeros, $options) {

    $etat = '1';
    $inser = $bd->prepare("INSERT INTO api ( api, numeros, options, etat) VALUES (?,?,?,?)");
    
    if($inser->execute(array($apiKey, $numeros, $options, $etat))){
        return 1;
    }
}
?>