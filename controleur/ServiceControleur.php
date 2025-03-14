<?php
$api = $_GET['api'];
if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){
    $invite = isset($_POST['invite']) ? $_POST['invite'] : null;
    $sms_merci = isset($_POST['sms_merci']) ? $_POST['sms_merci'] : null;
    $filtr_snap = isset($_POST['filtr_snap']) ? $_POST['filtr_snap'] : null;
    $localisations = isset($_POST['localisations']) ? $_POST['localisations'] : null;
    if ($invite && $sms_merci && $filtr_snap && $localisations !== null ){

        if($sms_merci === "1"){ $sms_mercis = '1';}else{$sms_mercis = '0';}
        if($filtr_snap === 'Oui'){ $filtr_snaps = '1';}else{$filtr_snaps = '0';}
        if($localisations === 'Ouii'){ $localisationss = '1';}else{$localisationss = '0';}

        $valide = 'Oui';
    }else{
        $erreur = 'Veuillez renplire tous les chans';
    }
}

if(isset($valide)){
$ajoutService = ajoutService ($bd, $api, $invite, $sms_mercis, $filtr_snaps, $localisationss);
if($ajoutService === true){
    header ('Location: /Kephale_Dig/service?api='.$api );
}
}
$veifService = veifService ($bd, $api);
if($veifService === 1){
    $recService = recService ($bd, $api);
}
?>