<?php
function confirme_ivitation($bd, $api, $id_user){
    $presense = "1";
    $inser = $bd->prepare("UPDATE invit SET  presense = '$presense' WHERE id = ? AND api LIKE '$api'");
    $inser->execute(array($id_user));
    return true ;
}
function rec_carte($bd, $api){
    $rowCount = rowCount ( $bd, 'invitations', 'api', $api);
    if($rowCount === 1){
        $rec = $bd->prepare('SELECT img FROM invitations WHERE api = ? ');
        $rec->execute(array($api));
        $result =  $rec->fetch(PDO::FETCH_ASSOC);
        $img = $result['img'];
        return $img ;
        $rec->closeCursor();
    }else{
        return 'null';
    }
}

function rec_inite($bd, $api, $id_user){
    $rec = $bd->prepare("SELECT * FROM invit WHERE id = ? AND api LIKE '$api' ");
    $rec->execute(array($id_user));
    if($rec->rowCount() === 1){
        return $rec->fetch(PDO::FETCH_ASSOC);

    }
}

function rec_type_event($bd, $api){

    $rec = $bd->prepare("SELECT * FROM service WHERE api = ? ");
    $rec->execute(array($api));
    if($rec->rowCount() === 1){
        return $rec->fetch(PDO::FETCH_ASSOC);

    }
}

function rec_finfo_marige($bd, $api){
    $rec = $bd->prepare("SELECT * FROM mariage WHERE api = ? ");
    $rec->execute(array($api));
    if($rec->rowCount() === 1){
        return $rec->fetch(PDO::FETCH_ASSOC);
    }
}

function rec_finfo_autre_eve($bd, $api){
    $rec = $bd->prepare("SELECT * FROM autre_eve WHERE api = ? ");
    $rec->execute(array($api));
    if($rec->rowCount() === 1){
        return $rec->fetch(PDO::FETCH_ASSOC);
    }
}

function verifi_message($bd, $api){
    $rec = $bd->prepare("SELECT * FROM messages WHERE api = ? ");
    $rec->execute(array($api));
    if($rec->rowCount() === 1){
        return $rec->fetch(PDO::FETCH_ASSOC);
    }else{
        return 'null';
    }
}

function rec_localisation($bd, $api){
    $rec = $bd->prepare("SELECT * FROM localisations WHERE api = ? ");
    $rec->execute(array($api));
    if($rec->rowCount() === 1){
        $result = $rec->fetch(PDO::FETCH_ASSOC);
        return $result['info'];
    }else{
        return 'null';
    }
}

function rec_fistre_snap($bd, $api){
    $rec = $bd->prepare("SELECT * FROM filtre_snap WHERE api = ? ");
    $rec->execute(array($api));
    if($rec->rowCount() === 1){
        $result = $rec->fetch(PDO::FETCH_ASSOC);
        return $result['info'];
    }else{
        return 'null';
    }
}
 ?>