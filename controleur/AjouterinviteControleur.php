<?php
 $api = $_GET['api'];
 if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){
    $nom = isset($_POST['nom']) ? $_POST['nom'] : null;
    $numeraux = isset($_POST['numeraux']) ? $_POST['numeraux'] : null;
    if ($nom && $numeraux !== null ){
        $type = 'ok';
    }else{
        $erreur = 'Veuillez renplire tous les chans';
    }
}

$info_invite = info_invite($bd, $api);
$info_nombre_invite = info_nombre_invite($bd, $api);
if($info_invite === 'null'){

    $contact_restant = '0';
}else{
    $contact_restant = $info_invite - $info_nombre_invite ;

}
if(isset($type)){

    if($info_invite !== 'null'){

    require_once ("../models/bd/verifierOperateur.php");
    $Operateur = verifierOperateur($numeraux);
    if($Operateur === 1){
        $erreur = 'Opérateur inconnu';
    }elseif($Operateur === 2) {
        $erreur = 'Numéro invalideu';
    }else{
        if($info_invite === $info_nombre_invite){
            $erreur = 'Nombre de contacts atteints';
        }else{
            $ajouteinvite = ajouteinvite($bd, $api, $nom, $numeraux, $Operateur);
        }
       if($ajouteinvite === true){
        $resuite = 'Contacte enregistre.';
        //sleep(3);
        header ("Refresh: 2");
        //header("Location: /Kephale_Dig/ajouterinvite?api=". $api);
        exit; 
       }elseif($ajouteinvite === 2){
        $erreur = 'Le numero egsiste deja';
       }
    }
}else{
    $erreur = 'Compte inactif';
}

}

?>