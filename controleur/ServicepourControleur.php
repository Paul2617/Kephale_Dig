<?php 
$numeros = isset($_POST['numeros']) ? $_POST['numeros'] : null;
$options = isset($_POST['options']) ? $_POST['options'] : null;

if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){
    if ($numeros && $options !== null ){
        $valid = true ;
    }else{
        $erreur = 'Veuillez remplir tous les champs';
    }
}

if(isset($valid)){
    require_once ("../models/bd/generateApiKey.php");
    $apiKey = generateApiKey($bd);
    if(isset($apiKey)){
        $verifi_numeros_associe = verifi_numeros_associe($bd, $numeros, $options);
        if($verifi_numeros_associe === 0){
            $enregisteapi = enregistre_api ($bd, $apiKey, $numeros, $options);
            if($enregisteapi === 1 ){
                header ('Location: /Kephale_Dig/enregistrement&api='.$apiKey);
            }
        }else{
            $erreur = "Vous avez déjà un compte associé au type <br>( ".$options." )";
        }
        
    }
}
?>