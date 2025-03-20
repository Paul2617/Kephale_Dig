<?php
// Fonction pour générer une clé API unique
function generateApiKey($bd) {
    $length = 12;
    // Utiliser des caractères alphanumériques et des caractères spéciaux
     $bin2hex = bin2hex(random_bytes($length / 2)); 

     $rec = $bd->prepare("SELECT api FROM api WHERE api = ? ");
     $rec->execute(array($bin2hex));
     $return = $rec->rowCount();
     if($return === 0) {
        return $bin2hex;
     }
 
}