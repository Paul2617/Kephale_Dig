<?php
function listeClient ($bd, $api){
  $rec =  $bd->prepare('SELECT types FROM service WHERE api = ?');
  $rec->execute(array($api));
  $resulte = $rec->fetch(PDO::FETCH_ASSOC);
  $rec->closeCursor();
     $invite = $resulte["types"];
     if($invite === 'Mariage'){
      $rec2 =  $bd->prepare('SELECT * FROM mariage WHERE api = ?');
      $rec2->execute(array($api));
      return $rec2->fetch(PDO::FETCH_ASSOC);
      $rec2->closeCursor();
     }else{
      $rec3 =  $bd->prepare('SELECT * FROM autre_eve WHERE api = ?');
      $rec3->execute(array($api));
      return $rec3->fetch(PDO::FETCH_ASSOC);
      $rec3->closeCursor();
     }
}

function verifitype ($bd, $api){
  $rec =  $bd->prepare('SELECT types FROM service WHERE api = ?');
  $rec->execute(array($api));
   $resulte =  $rec->fetch(PDO::FETCH_ASSOC);

   return $resulte["types"]; 
   $rec->closeCursor();
}

function rec_numero ($bd, $api){
  $rec =  $bd->prepare('SELECT numeros FROM api WHERE api = ?');
  $rec->execute(array($api));
   $resulte =  $rec->fetch(PDO::FETCH_ASSOC);

   return $resulte["numeros"]; 
   $rec->closeCursor();
}
function listeInvite($bd, $api){
  return recListeInvite ($bd, $api);
}
function verifSms ($bd, $id_client, $apiRec){
  return recRowCountSms ($bd, $id_client, $apiRec);
}

?>