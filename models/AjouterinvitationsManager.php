<?php
function ajoutInfitations($bd, $api, $nom, $imgNom ){
    $inser = $bd->prepare("INSERT INTO invitations ( api, text, img ) VALUES (?,?,?)");
    $inser->execute(array($api,  $nom, $imgNom ));
    return true ;
}
function veifInfitationstool($bd, $api) {
   return recRowCount($bd, 'invitations', 'api', $api);
}
?>