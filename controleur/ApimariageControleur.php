<?php
if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){
    if (isset($_POST["jour"]) and !empty($_POST["jour"])){
        $jour = htmlspecialchars($_POST["jour"]);
        if (isset($_POST["mois"]) and !empty($_POST["mois"])){
            $mois = htmlspecialchars($_POST["mois"]);
            if (isset($_POST["numero"]) and !empty($_POST["numero"])){
                $numero = htmlspecialchars($_POST["numero"]);
                $timestamp = time();
                $anne = date('Y', $timestamp);
               $date_m = "$jour-$mois-$anne";
              echo   $dateMariage = strtotime($date_m); 
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


require_once ($views);

?>