<?php

//Merci de confirmer si vous serez là.
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

    $rec_client = $bd->prepare("SELECT * FROM client WHERE api = ? ");
    $rec_client->execute(array($apiRec));
    $info_client = $rec_client->fetch(PDO::FETCH_ASSOC);

    $type_api = $api_info ['types'];
    $date_evenement = $api_info ['date_fin'];
    $date = dates ($date_evenement);
    $nom_client = $info_client['info'];

    function sms_envois($tytre, $sms, $Nom_numero){
        // Authorisation details.
	$username = "konepassanipaul@gmail.com";
	$hash = "45b68b49f0acdc0e724cde5e829d13e22c308e8a05b54d2e0c882bb0f74201d5";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = $tytre; // This is who the message appears to be from.
	$numbers = "223".$Nom_numero; // A single number or a comma-seperated list of numbers
	$message = $sms;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('https://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);

    return $result;
    }


    if($type_api === 'Professionnel'){
        return $type_api;
    }elseif($type_api === 'Mariage'){
        $link = "<a href=''>http://localhost:8888/Kephale_Dig/invitation?api=".$apiRec."&id=".$id_client."</a>";
        $tytre = "Dîner de mariage";
        $sms = $nom_client." ont le plaisir de vous convier à leur dîner de mariage prévu le ".$date.". Lin d'invitation ". $link;
         //sms_envois($tytre, $sms, $Nom_numero);
         if(isset($sms)){
            
         }
    }

  
}
?>
