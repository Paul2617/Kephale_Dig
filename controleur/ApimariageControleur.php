<?php
if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){
    if (isset($_POST["jour"]) and !empty($_POST["jour"])){
        $jour = htmlspecialchars($_POST["jour"]);
        if (isset($_POST["mois"]) and !empty($_POST["mois"])){
            $mois = htmlspecialchars($_POST["mois"]);
            if (isset($_POST["numero"]) and !empty($_POST["numero"])){
                if (isset($_POST["sms"]) and !empty($_POST["sms"])){
                    $sms = htmlspecialchars($_POST["sms"]);
                }else{
                    $sms = "null";
                }

                if (isset($_POST["snap"]) and !empty($_POST["snap"])){
                    $snap = htmlspecialchars($_POST["snap"]);
                }else{
                    $snap = "null";
                }

                $numero = htmlspecialchars($_POST["numero"]);
                $timestamp = time();
                $anne = date('Y', $timestamp);
                $date_m = "$jour-$mois-$anne";
                $dateMariage = strtotime($date_m); 

            }else{
            $erreur = 'Veuillez le Numéro';
        }
        }else{
            $erreur = 'Veuillez le mois';
        }
    }else{
        $erreur = 'Veuillez le jours';
    }
}
if(isset($dateMariage)){
    require_once ("../models/bd/generateApiKey.php");
    $apiKey = generateApiKey(12);
    $inserCleApi = inserCleApi($bd, $dateMariage, $numero, $apiKey, $sms, $snap );
    if($inserCleApi === 1){
        $resuite = 'Api Enregistre.';
        sleep(3);
        //header("Location: ");
       // exit; 

    }else{
        $erreur = 'api nom envoyer';
    }
}
require_once ($views);

?>