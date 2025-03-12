<?php
if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){
    if (isset($_POST["jour"]) and !empty($_POST["jour"])){
        $jour = htmlspecialchars($_POST["jour"]);
        if (isset($_POST["mois"]) and !empty($_POST["mois"])){
            $mois = htmlspecialchars($_POST["mois"]);
            if (isset($_POST["options"]) and !empty($_POST["options"])){
                $type = htmlspecialchars($_POST["options"]);
                $timestamp = time();
                $anne = date('Y', $timestamp);
                $date_m = "$jour-$mois-$anne";
                $date_fin = strtotime($date_m); 
                $date_debut = time();
                
            }else{
 $erreur = 'Veuillez entre le type';
            }
       
        }else{
            $erreur = 'Veuillez le mois';
        }
    }else{
        $erreur = 'Veuillez le jours';
    }
}
if(isset($date_fin)){
    require_once ("../models/bd/generateApiKey.php");
     $apiKey = generateApiKey(12);
    $inserCleApi = inserCleApi($bd, $date_debut, $type, $apiKey, $date_fin );
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