<?php 
function  enregistre_api ($bd, $apiKey, $numeros, $options) {

    $etat = '1';
    $code = 'user';
    $inser = $bd->prepare("INSERT INTO api ( api, numeros, options, code, etat) VALUES (?,?,?,?,?)");
    if($inser->execute(array($apiKey, $numeros, $options, $code, $etat))){
        return 1;
    }
    $rec->closeCursor();
}

function verifi_numeros_associe($bd, $numeros, $options){
    $rec = $bd->prepare("SELECT * FROM api WHERE numeros = ? AND options LIKE '$options' ");
    $rec->execute(array($numeros));
    return $rec->rowCount();
    $rec->closeCursor();
}
?>