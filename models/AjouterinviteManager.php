<?php

function ajouteinvite ($bd, $api, $nom, $numeraux) {
    $recRowCountInvite = recRowCountInvite ($bd, 'invit', 'numero', $numeraux, $api);
if( $recRowCountInvite === 0){
    $presense = "0";
    $etat = "1";
    $inser = $bd->prepare("INSERT INTO invit ( api, numero, Nom, presense, etat) VALUES (?,?,?,?,?)");
    $inser->execute(array($api, $numeraux, $nom, $presense, $etat));
    return 1;
}else{
    return 2;
}
}

?>