<?php
if(isset($_GET['api'])){
    $api = $_GET['api'];
}
if(isset($_GET['tr'])){
    $tr = $_GET['tr'];
}
if(isset($_GET['id'])){
    $id_user = $_GET['id'];
}
if(isset($_POST['confirme']) AND !empty($_POST['confirme'])){
$confirme_ivitation = confirme_ivitation($bd, $api, $id_user);
if($confirme_ivitation === true){
    header ("Refresh: 1");
}
}
if(isset($api)){
   $img_cart =  rec_carte($bd, $api);
}

if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){
    $nom = isset($_POST['nom']) ? $_POST['nom'] : null;
    $numeraux = isset($_POST['numeraux']) ? $_POST['numeraux'] : null;
    if ($nom && $numeraux !== null ){
        $type = 'ok';
    }else{
        $erreur = 'Veuillez renplire tous les chans';
    }
}

if(isset($id_user)){
    $rec_inite = rec_inite($bd, $api, $id_user);
    $nom_inivite =  $rec_inite['Nom'];
    $presense =  $rec_inite['presense'];
    $numero =  $rec_inite['numero'];
    $rec_type_event = rec_type_event($bd, $api);
    $type = $rec_type_event['types']; 

    $localisations = $rec_type_event['localisations']; 
    $fistre_snap = $rec_type_event['fistre_snap']; 
    if($localisations === "1"){
        $rec_localisation = rec_localisation($bd, $api);

        if( $rec_localisation !== 'null'){
            $link_localisations = $rec_localisation;
        }
    }

    if($fistre_snap === '1'){
        $rec_fistre_snap = rec_fistre_snap($bd, $api);
        if( $rec_fistre_snap !== 'null'){
            $link_fistre_snap = $rec_fistre_snap;
        }
    }

    if($type === 'Mariage'){
        // si l'invitations n'est pas cofirme
        if($presense === 0){
       
        $verifi_message = verifi_message($bd, $api);
        if($verifi_message === "null"){
        // si le message n'est pas personnalise
        $rec_finfo_marige = rec_finfo_marige($bd, $api);
        $nom_marie = $rec_finfo_marige['nom_marie'];
        $nom_mariee = $rec_finfo_marige['nom_mariee'];
        $couple = $nom_marie." et ".$nom_mariee;

        $date_dine = $rec_finfo_marige['date_mariage'];
        $date = dates ($date_dine);
        $titre = 'Invitation dîne de Mariage';
        $text = "Bonjour <span>".$nom_inivite."<br></span> Le couple <span>".$couple.
        "</span> ont le plaisir de vous convier à leur dîner de mariage";
        $date = "Date: ".$date."<br> Lieu: ".$rec_finfo_marige['lieu'];
    }else{
        // si le message est personnalise
        $rec_finfo_marige = rec_finfo_marige($bd, $api);
        $date_dine = $rec_finfo_marige['date_mariage'];
        $date = dates ($date_dine);
        $titre = $verifi_message['titre'];
        $text = "Bonjour <span>".$nom_inivite."</span> <br> ".$verifi_message['text'];
        $date = "Date: ".$date."<br> Lieu: ".$rec_finfo_marige['lieu'];
    }
}else{
     // si l'invitations est cofirme
     $rec_finfo_marige = rec_finfo_marige($bd, $api);
     $date_dine = $rec_finfo_marige['date_mariage'];
     $date = dates ($date_dine);
     $date = "Date: ".$date."<br> Lieu: ".$rec_finfo_marige['lieu'];
     $titre = 'Invitation accordée';
     $text ='lorem ddldkd dd';
}
    }else{
         // si l'invitations n'est pas cofirme
        if($presense === 0){
    
        $verifi_message = verifi_message($bd, $api);
        // si le message n'est pas personnalise
        if($verifi_message === "null"){
            $rec_finfo_autre_eve = rec_finfo_autre_eve($bd, $api);
            $nom = $rec_finfo_autre_eve['nom'];
            $type_eve = $rec_finfo_autre_eve['type_eve'];
            $date_dine = $rec_finfo_autre_eve['date_eve'];
            $date = dates ($date_dine);
            $titre = 'Invitation '.$type_eve;
            $text = "Bonjour <span>".$nom_inivite."<br></span> <span>".$nom.
            "</span> à la jois de vous inivte a sa soire ";
            $date = "Date: ".$date."<br> Lieu: ".$rec_finfo_autre_eve['lieu'];
        }else{
            // si le message est personnalise
            $rec_finfo_autre_eve = rec_finfo_autre_eve($bd, $api);
            $date_dine = $rec_finfo_autre_eve['date_eve'];
            $date = dates ($date_dine);
            $titre = $verifi_message['titre'];
            $text = "Bonjour <span>".$nom_inivite."</span> <br> ".$verifi_message['text'];
            $date = "Date: ".$date."<br> Lieu: ".$rec_finfo_autre_eve['lieu'];
        }
    }else{
          // si l'invitations est cofirme
          $rec_finfo_autre_eve = rec_finfo_autre_eve($bd, $api);
          $date_dine = $rec_finfo_autre_eve['date_eve'];
          $date = dates ($date_dine);
          $date = "Date: ".$date."<br> Lieu: ".$rec_finfo_autre_eve['lieu'];
          $titre = 'Invitation accordée';
          $text ='lorem ddldkd ddggggg';

    }

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
            if($ajouteinvite === true){
                $_SESSION['Nom_invite'] = $nom;
                $_SESSION['tel_invite'] = $numeraux;
                header ("Refresh: 2");
            }elseif($ajouteinvite === 2){
        $erreur = 'Le numero egsiste deja';
       }
        }

    }
}
 ?>