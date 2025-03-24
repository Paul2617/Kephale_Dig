<?php
function ajoutService ($bd, $api, $invite, $sms_mercis, $filtr_snaps, $localisationss){
    $inser = $bd->prepare("UPDATE service SET  invite = '$invite' , sms_merci = '$sms_mercis', fistre_snap = '$filtr_snaps', localisations = '$localisationss' WHERE api = ? ");
    $inser->execute(array($api));
    return true ;
}
function verifService ($bd, $api) {
    return recRowCount($bd, 'service', 'api', $api);
 }

 function etat_sms ($bd, $api) {
  $rec =  $bd->prepare('SELECT invite FROM service WHERE api = ?');
 $rec->execute(array($api));
 $resulte = $rec->rowCount();
 if($resulte === 1){
    $resultes = $rec->fetch(PDO::FETCH_ASSOC);
    $invite = $resultes["invite"];
    return  $invite ;
    $rec->closeCursor();
 }
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