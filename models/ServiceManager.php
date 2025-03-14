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
    return recTableIdBoucle($bd, 'service', 'api', $api);
 }
?>