<?php

function ajouteinvite ($bd, $api, $nom, $numeraux, $Operateur) {
    $rec = $bd->prepare("SELECT * FROM list_contacte WHERE tel = ? ");
    $rec->execute(array($numeraux));
    if($rec->rowCount() === 0){
        $inser = $bd->prepare("INSERT INTO list_contacte ( nom, tel, operateur) VALUES (?,?,?)");
        $inser->execute(array($nom, $numeraux, $Operateur));
    }

    $recRowCountInvite = recRowCountInvite ($bd, 'invit', 'numero', $numeraux, $api);
if( $recRowCountInvite === 0){
    $presense = "0";
    $etat = "1";
    $inser = $bd->prepare("INSERT INTO invit ( api, numero, Nom, presense, etat) VALUES (?,?,?,?,?)");
    $inser->execute(array($api, $numeraux, $nom, $presense, $etat));
    return true;
}else{
    return 2;
}
}
function info_invite($bd, $api){
    $rec = $bd->prepare("SELECT invite FROM service WHERE api = ? ");
    $rec->execute(array($api));
    $result =  $rec->fetch(PDO::FETCH_ASSOC);
    return  $result['invite'];
    $rec->closeCursor();
}

function info_nombre_invite($bd, $api){
    $rec = $bd->prepare("SELECT * FROM invit WHERE api = ? ");
    $rec->execute(array($api));
    return $rec->rowCount();
}
?>