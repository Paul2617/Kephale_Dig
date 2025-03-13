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


  function listeapirest ($bd) {
    $rec =  $bd->prepare('SELECT * FROM api WHERE etat LIKE 1 ');
    $rec->execute(array());
    return  $rec->fetchAll(PDO::FETCH_ASSOC);
    $rec->closeCursor();
}
?>

