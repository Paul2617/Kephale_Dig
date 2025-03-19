<?php


$number = '22394141804';
$message = 'Bonjour Paul';

 function envois_sms($bd, $id_client, $apiRec){
    $rec = $bd->prepare("SELECT * FROM invit WHERE id = ? AND api LIKE '$apiRec' ");
    $rec->execute(array($id_client));
    $invite_info = $rec->fetch(PDO::FETCH_ASSOC);
    $Nom_invite = $invite_info['Nom'];
    $Nom_numero = $invite_info['numero'];

    $rec_api = $bd->prepare("SELECT * FROM api WHERE api = ? ");
    $rec_api->execute(array($apiRec));
    $api_info = $rec_api->fetch(PDO::FETCH_ASSOC);


    $type_api = $api_info ['types'];
    $date_evenement = $api_info ['date_fin'];

    if($type_api === 'Professionnel'){
        return $type_api;
    }elseif($type_api === 'Mariage'){

        $sms = "Paul et Karina ont le plaisir de vous convier à leur dîner de mariage prévu le 26 avril 2025. Veuillez confirmer votre présence. Vous serez là.";
        return $type_api;
    }

  
}
?>