<?php
$api = $_GET['api'];
//rec api 
$rec_numero = rec_numero ($bd, $api);
// liste de client
$listeClient = listeClient ($bd, $api);
// verifie la le type
$verifitype = verifitype ($bd, $api);
// Liste invite
$listeinvite = listeInvite ($bd, $api);

// verifie si linvitations a ete accept ou pas
function verifconfirme($presense){
    if($presense === 1){
        $texte = 'Invitations Accepte.';
    }else{
        $texte = 'Invitations non Accepte.';
    }
return $texte;
}
if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){

  require_once ("../models/sms.php");
}
// verifie si sms  a ete envoy ou pas
function verifsmsAd ($bd, $id_client, $apiRec){
  $verifSms = verifSms ($bd, $id_client, $apiRec);
  if($verifSms === 0){
    return "<input class='djdjjrfhgd' class='submit' type='submit' value='Envoyer SMS' name='envoyer'>";
  }
 
}
?>