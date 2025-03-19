<?php 
$api = $_GET['api'];
if(isset($_GET['id'])){
    $id_user = $_GET['id'];


    $rec = $bd->prepare("SELECT * FROM invit WHERE id = ? AND api LIKE '$api' ");
    $rec->execute(array($id_user));
    $invite_info = $rec->fetch(PDO::FETCH_ASSOC);
    $Nom_invite = $invite_info['Nom'];
    $Nom_numero = $invite_info['numero'];

    $rec_api = $bd->prepare("SELECT * FROM api WHERE api = ? ");
    $rec_api->execute(array($api));
    $api_info = $rec_api->fetch(PDO::FETCH_ASSOC);

    $rec_client = $bd->prepare("SELECT * FROM client WHERE api = ? ");
    $rec_client->execute(array($api));
    $info_client = $rec_client->fetch(PDO::FETCH_ASSOC);

    $type_api = $api_info ['types'];
    $date_evenement = $api_info ['date_fin'];
    $date = dates ($date_evenement);
    $nom_client = $info_client['info'];

    if($type_api === 'Professionnel'){
        $Invitaions = '';
    }elseif($type_api === 'Mariage'){
        $Invitaions = 'Dîner de mariage.';
    }
$text = $nom_client." ont le plaisir de vous convier à leur dîner de mariage prévu le ".$date." Merci de confirmer si vous serez là.";
}


?>