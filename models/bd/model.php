<?php
function rowCount ( $bd, $table, $colone, $apiKey){
    $rec =  $bd->prepare('SELECT * FROM '.$table.' WHERE '.$colone.' = ? ');
    $rec->execute(array($apiKey));
    return  $rec->rowCount();
    $rec->closeCursor();
}


function recTableIdBoucle ($bd, $table, $colone, $id){
    $rec =  $bd->prepare('SELECT * FROM '.$table.' WHERE '.$colone.' = ? ');
    $rec->execute(array($id));
    return  $rec->fetchAll(PDO::FETCH_ASSOC);
    $rec->closeCursor();
}

function recRowCount($bd, $table, $colone, $id){
    $rec = $bd->prepare('SELECT * FROM '.$table.' WHERE '.$colone.' = ?');
    $rec->execute(array($id));
    return $rec->rowCount();
    $rec->closeCursor();
  }

  function recRowCountInvite ($bd, $table, $colone, $numeraux, $api){
    $rec = $bd->prepare("SELECT * FROM invit WHERE numero = ? AND api LIKE '$api' ");
    $rec->execute(array($numeraux));
    return $rec->rowCount();
    $rec->closeCursor();
  }
// la liste des invite nom suprime
  function recListeInvite ($bd, $api){
    $rec = $bd->prepare("SELECT * FROM invit WHERE api = ? AND etat LIKE 1 ORDER BY id DESC");
    $rec->execute(array($api));
    return $rec->fetchAll();
    $rec->closeCursor();
  }
// verifie si SMS a ete envoye
  function recRowCountSms ($bd, $id_client, $apiRec){
    $rec = $bd->prepare("SELECT * FROM sms WHERE id_client = ? AND api LIKE '$apiRec' ");
    $rec->execute(array($id_client));
    return $rec->rowCount();
    $rec->closeCursor();
  }

  function listeapirest ($bd) {
    $rec =  $bd->prepare('SELECT * FROM api WHERE etat LIKE 1 ');
    $rec->execute(array());
    return  $rec->fetchAll(PDO::FETCH_ASSOC);
    $rec->closeCursor();
}
?>

