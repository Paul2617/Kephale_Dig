<?php
 $api = $_GET['api'];
 if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){
    $nom = isset($_POST['nom']) ? $_POST['nom'] : null;
    if (!empty($_FILES["img_demande"]["tmp_name"])){

        require_once "../models/img_verif/img_verif.php";
        $resultImg = img_verif();
        if($resultImg === 'format'){
            $erreur = "Veuiller utiliser une image au format jpeg, jpg ou png";
        }elseif($resultImg === 'taille') {
            $erreur = "La taille de votre image dépasse 5 Mo. ";
        }else{
            $direction = "asset/img_invitations/";
            $imgNom = $resultImg;
            $imgDirection = $direction.$imgNom;
        }
    }else{
        $erreur = 'Selction image';
    }
}
if(isset($imgDirection)){
    if(move_uploaded_file($_FILES["img_demande"]["tmp_name"], $imgDirection)){
        $ajoutInfitations = ajoutInfitations($bd, $api, $nom, $imgNom );
        if($ajoutInfitations === true){
            header ('Location: /Kephale_Dig/ajouterinvitations?api='.$api );
        }
    }
}
$veifInfitationstool = veifInfitationstool ($bd, $api);

?>