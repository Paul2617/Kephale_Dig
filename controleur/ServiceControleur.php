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
if (isset($_POST["envoyers"]) and !empty($_POST["envoyers"])){
    $fistre_snaps = isset($_POST['fistre_snaps']) ? $_POST['fistre_snaps'] : null;
    $localisation = isset($_POST['localisation']) ? $_POST['localisation'] : null;

    if($fistre_snaps !== null ){
        enregiste_fistre_snaps ($bd, $api, $fistre_snaps);
    }
    if($localisation !== null ){
        enregiste_localisation ($bd, $api, $localisation);
    }
}
if(isset($valide)){
$ajoutService = ajoutService ($bd, $api, $invite, $sms_mercis, $filtr_snaps, $localisationss);
if($ajoutService === true){
    header ('Location: /Kephale_Dig/service?api='.$api );
}
}
$veifService = verifService ($bd, $api);
$etat_sms = etat_sms ($bd, $api);

if($veifService === 1){
    $recService = recService ($bd, $api);
   function sms_merci($recServices){
    if($recServices === "1"){
        return 'Oui';
    }else{
        return 'Non';
    }
    
   }

   function fistre_snap ($bd, $api, $recServices){

    if($recServices === "1"){
        $info_fistre_snapRowCount = info_fistre_snapRowCount($bd,$api);
        if($info_fistre_snapRowCount === 1){
            return 'Oui';
        }else{
            return 'Pas enregistre';
        }
    }else{
        return 'Non';
    }
   }

   function localisations($bd, $api, $recServices){

    if($recServices === "1"){
        $info_localiRowCount = info_localiRowCount($bd,$api);
        if($info_localiRowCount === 1){
            return 'Oui';
        }else{
            return 'Pas enregistre';
        }
    }else{
        return 'Non';
    }
    
   }
}
?>