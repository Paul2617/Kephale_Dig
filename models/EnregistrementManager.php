<?php 

function type_api($bd, $api){
    $rec =  $bd->prepare('SELECT * FROM api WHERE api = ? ');
    $rec->execute(array($api));
    return  $rec->fetch(PDO::FETCH_ASSOC);
}
function types ($bd, $api){
    return recRowCount($bd, 'service', 'api', $api);
}
function mariage_api_verifi($bd, $api){
    return recRowCount($bd, 'mariage', 'api', $api);
}
function types_rec ($bd, $api, $types){
    if($types === 1){
    $rec =  $bd->prepare('SELECT types FROM service WHERE api = ? ');
    $rec->execute(array($api));
    return  $rec->fetch(PDO::FETCH_ASSOC);
    }
    
}

function enregistre_service ($bd, $api, $optionss){
    $null = "null";
    $inser = $bd->prepare("INSERT INTO service ( api, invite, sms_merci, fistre_snap, localisations, types ) VALUES (?,?,?,?,?,?)");
    if($inser->execute(array($api,  $null, $null, $null,  $null, $optionss ))){
        return true ;
    }
}

function enregistre_mariage($bd, $api, $nom_marie, $nom_mariee, $timestamp, $lieu ){
    $inser = $bd->prepare("INSERT INTO mariage ( api, nom_marie, nom_mariee, date_mariage, lieu) VALUES (?,?,?,?,?)");
    if($inser->execute(array($api,  $nom_marie, $nom_mariee, $timestamp, $lieu))){
        return true ;
    }
}
function enregistre_autre_eve($bd, $api, $nom_complet, $type_eve, $timestamp, $lieu ){
    $inser = $bd->prepare("INSERT INTO autre_eve ( api, nom, type_eve, date_eve, lieu) VALUES (?,?,?,?,?)");
    if($inser->execute(array($api,  $nom_complet, $type_eve, $timestamp, $lieu))){
        return true ;
    }
}
?>