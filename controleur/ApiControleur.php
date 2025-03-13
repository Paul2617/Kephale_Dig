<?php
if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){
$jour = isset($_POST['jour']) ? $_POST['jour'] : null;
$mois = isset($_POST['mois']) ? $_POST['mois'] : null;
$timestamp = time();
$annee = date('Y', $timestamp);
$heure = isset($_POST['heure']) ? $_POST['heure'] : null;
$minute = isset($_POST['minute']) ? $_POST['minute'] : null;
if ($jour && $mois && $annee && $heure !== null && $minute !== null) {
     // Créer une chaîne de caractères de la date au format 'Y-m-d H:i'
     $dateStr = sprintf('%04d-%02d-%02d %02d:%02d', $annee, $mois, $jour, $heure, $minute);
     // Convertir la date en timestamp Unix avec la fonction strtotime()
     $timestamp = strtotime($dateStr);

     if (isset($_POST["options"]) and !empty($_POST["options"])){
        $type = htmlspecialchars($_POST["options"]);
        $date_debut = time();
        
    }else{
      $erreur = 'Veuillez entre le type';
    }
}else{
    $erreur = 'Veuillez renplire tous les chans';
}
}

if(isset($timestamp)){
    require_once ("../models/bd/generateApiKey.php");
     $apiKey = generateApiKey(12);
    $inserCleApi = inserCleApi($bd, $date_debut, $type, $apiKey, $timestamp );
    if($inserCleApi === 1){
        $resuite = 'Api Enregistre.';
        sleep(3);
        //header("Location: ");
       // exit; 

    }else{
        $erreur = 'api nom envoyer';
    }
}
?>