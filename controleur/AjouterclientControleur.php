<?php
        $api = $_GET['api'];
if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){
$nom = isset($_POST['nom']) ? $_POST['nom'] : null;
$numeraux = isset($_POST['numeraux']) ? $_POST['numeraux'] : null;
$evenement = isset($_POST['evenement']) ? $_POST['evenement'] : null;
$stricture = isset($_POST['stricture']) ? $_POST['stricture'] : null;
if ($nom && $numeraux && $evenement && $stricture !== null ){
    if (isset($_POST["options"]) and !empty($_POST["options"])){
        $type = htmlspecialchars($_POST["options"]);
    }else{
        $erreur = 'Veuillez entre le Sexe';
    }
}else{
    $erreur = 'Veuillez renplire tous les chans';
}
}

if(isset($type)){
    require_once ("../models/bd/verifierOperateur.php");
    $Operateur = verifierOperateur($numeraux);
    if($Operateur === 1){
        $erreur = 'Opérateur inconnu';
    }elseif($Operateur === 2) {
        $erreur = 'Numéro invalide';
    }else{
        $inserClient = inserClient($bd, $nom, $numeraux, $evenement, $stricture, $type, $api, $Operateur );

        if($inserClient === 3){
            $resuite = 'Client Enregistre.';
            sleep(3);
            header("Location: /Kephale_Dig/ajouterclient?api=". $api);
            exit; 
    
        }elseif($inserClient === 2){
            $erreur = 'Le numero egsiste deja';
        }
    }
    
}

?>