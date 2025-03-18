<?php
function ajoutService ($bd, $api, $invite, $sms_mercis, $filtr_snaps, $localisationss){
    $inser = $bd->prepare("INSERT INTO service ( api, invite, sms_merci, fistre_snap, localisations ) VALUES (?,?,?,?,?)");
    $inser->execute(array($api, $invite, $sms_mercis, $filtr_snaps, $localisationss ));
    return true ;
}
function veifService ($bd, $api) {
    return recRowCount($bd, 'service', 'api', $api);
 }

 function recService ($bd, $api){
    return recTableIdBoucle ($bd, 'service', 'api', $api);
 }

 function info_localiRowCount ($bd,$api){
   return recRowCount($bd, 'localisations', 'api', $api);
 }

 function info_fistre_snapRowCount($bd, $api){
   return recRowCount($bd, 'filtre_snap', 'api', $api);
 }


 function enregiste_fistre_snaps ($bd, $api, $fistre_snaps){
   $inser = $bd->prepare("INSERT INTO filtre_snap ( api, info) VALUES (?,?)");
   $inser->execute(array($api, $fistre_snaps));
    return true ;
 }

 function enregiste_localisation ($bd, $api, $localisation) {
   $inser = $bd->prepare("INSERT INTO localisations ( api, info) VALUES (?,?)");
   $inser->execute(array($api, $localisation));
    return true ;
 }
?>