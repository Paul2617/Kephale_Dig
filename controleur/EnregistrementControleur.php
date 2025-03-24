<?php
 $api = $_GET['api']; 
 $type_api = type_api($bd, $api );
 $options = $type_api['options'];
 $numeros = $type_api['numeros'];
 $types = types ($bd, $api); 
 $types_rec = types_rec ($bd, $api, $types);
$mariage_api_verifi = mariage_api_verifi($bd, $api);

// enregistrement (1)
 $types_service = isset($_POST['types_service']) ? $_POST['types_service'] : null;
 if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){
    if ($types_service !== null ){
        $valid = true ;
    }else{
        $erreur = 'Veuillez remplir tous les champs';
    }
 }
if(isset($valid)){
    $enregistre_service = enregistre_service($bd, $api, $types_service);
    if($enregistre_service === true){
        header ("Refresh: 1");
    }
}
// enregistrement (2)
$nom_marie = isset($_POST['nom_marie']) ? $_POST['nom_marie'] : null;
$nom_mariee = isset($_POST['nom_mariee']) ? $_POST['nom_mariee'] : null;
$nom_complet = isset($_POST['nom_complet']) ? $_POST['nom_complet'] : null;
$type_eve = isset($_POST['type_eve']) ? $_POST['type_eve'] : null;
$jour = isset($_POST['jour']) ? $_POST['jour'] : null;
$mois = isset($_POST['mois']) ? $_POST['mois'] : null;
$heure = isset($_POST['heure']) ? $_POST['heure'] : null;
$minute = isset($_POST['minute']) ? $_POST['minute'] : null;
$lieu = isset($_POST['lieu']) ? $_POST['lieu'] : null;
$timestamps = time();
$annee = date('Y', $timestamps);
// Créer une chaîne de caractères de la date au format 'Y-m-d H:i'
$dateStr = sprintf('%04d-%02d-%02d %02d:%02d', $annee, $mois, $jour, $heure, $minute);
// Convertir la date en timestamp Unix avec la fonction strtotime()
$timestamp = strtotime($dateStr);
if (isset($_POST["envoyer_deux"]) and !empty($_POST["envoyer_deux"])){
    if($types_rec['types'] === 'Mariage'){
        if ($nom_marie && $nom_mariee !== null ){
            $valide = "Mariage" ;
        }else{
            $erreur = 'Veuillez remplir tous les champs';
        }
    }else{
        if ($nom_complet && $type_eve !== null ){
            $valide = "Autre" ;
        }else{
            $erreur = 'Veuillez remplir tous les champs';
        }
    }
}
if($mariage_api_verifi === 1){
    header ('Location: /Kephale_Dig/utilisateur');
}
if(isset($valide)){
if($valide === "Mariage"){
   
    $enregistre_marige = enregistre_mariage($bd, $api, $nom_marie, $nom_mariee, $timestamp, $lieu);
    if($enregistre_marige === true){
        header ('Location: /Kephale_Dig/utilisateur');
    }
}else{
    $enregistre_autre_eve = enregistre_autre_eve($bd, $api, $nom_complet, $type_eve, $timestamp, $lieu);
    if($enregistre_autre_eve === true){
        header ('Location: /Kephale_Dig/utilisateur');
    }
}
}

?>