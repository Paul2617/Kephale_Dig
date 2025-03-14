<?php
function listeClient ($bd, $api){
  return  recTableIdBoucle ($bd, 'client', "api", $api);
}

function listeInvite($bd, $api){
  return recListeInvite ($bd, $api);
}
function verifSms ($bd, $id_client, $apiRec){
  return recRowCountSms ($bd, $id_client, $apiRec);
}

?>