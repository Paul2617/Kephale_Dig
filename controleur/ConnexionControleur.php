<?php
$numero = isset($_POST['numero']) ? $_POST['numero'] : null;
$mot_de_passe = isset($_POST['mot_de_passe']) ? $_POST['mot_de_passe'] : null;
$options = isset($_POST['options']) ? $_POST['options'] : null;
if (isset($_POST["connexion"]) and !empty($_POST["connexion"])){
    if ($numero && $mot_de_passe && $options !== null ){
        $valid = true ;
        
    }else{
        $erreur = 'Veuillez remplir tous les champs';
    }
}

if(isset($valid)){
    $verification = verification($bd, $numero, $mot_de_passe, $options);
    if($verification === 'numeros'){
        $erreur = 'Nunéro incorecte.';
    }elseif($verification === 'code'){
        $erreur = 'Mot de passe incorecte.';
    }elseif($verification === 'type'){
        $erreur = "Vous n'avez pas de compte associer à ( ".$options." )";
    }elseif($verification === 'Personnelle'){
        header ('Location: /Kephale_Dig/utilisateur');
    }elseif($verification === 'Autre'){
        //header ('Location: /Kephale_Dig/utilisateur');
    }
}
?>