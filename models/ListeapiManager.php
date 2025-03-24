<?php

function listapi ($bd){
   return listeapirest ($bd);
}

function rec_service_api($bd, $apirec){
   $rec =  $bd->prepare('SELECT * FROM service WHERE api = ?');
   $rec->execute(array($apirec));
   $resulte = $rec->rowCount();
   if($resulte === 1){
      $resultes = $rec->fetch(PDO::FETCH_ASSOC);
      $types = $resultes["types"];
      return $types;
      $rec->closeCursor();
   }else{
      return 'Inconnu';
   }
}

function rec_info_mariage($bd, $apirec){
   $rec =  $bd->prepare('SELECT nom_marie, nom_mariee FROM mariage WHERE api = ?');
   $rec->execute(array($apirec));
   $resulte = $rec->rowCount();
   if($resulte === 1){
      $resultes = $rec->fetch(PDO::FETCH_ASSOC);
      $nom_marie = $resultes["nom_marie"];
      $nom_mariee = $resultes["nom_mariee"];
      $infi = $nom_marie." et ".$nom_mariee;
      return  $infi ;
      $rec->closeCursor();
   }
}


function rec_info_autre_service ($bd, $apirec){
   $rec =  $bd->prepare('SELECT nom FROM autre_eve WHERE api = ?');
   $rec->execute(array($apirec));
   $resulte = $rec->rowCount();
   if($resulte === 1){
      $resultes = $rec->fetch(PDO::FETCH_ASSOC);
      $nom = $resultes["nom"];
      return  $nom ;
      $rec->closeCursor();
   }
}

function info_autre_service ($bd, $apirec){
   $rec =  $bd->prepare('SELECT type_eve FROM autre_eve WHERE api = ?');
   $rec->execute(array($apirec));
   $resulte = $rec->rowCount();
   if($resulte === 1){
      $resultes = $rec->fetch(PDO::FETCH_ASSOC);
      $type_eve = $resultes["type_eve"];
      return  $type_eve ;
      $rec->closeCursor();
   }
}

function rec_date_t($bd, $apirec, $rec_service){
   if($rec_service === "Mariage"){
      $table = 'mariage';
      $colone = 'date_mariage';
   }else{
      $table = 'autre_eve';
      $colone = 'date_eve';
   }

   $rec =  $bd->prepare('SELECT '.$colone.' FROM '.$table.' WHERE api = ? ');
   $rec->execute(array($apirec));
   $resulte = $rec->rowCount();
   if($resulte === 1){
      $resultes = $rec->fetch(PDO::FETCH_ASSOC);
      if($rec_service === "Mariage"){
         return $resultes["date_mariage"];
      }else{
         return $resultes["date_eve"];
      }
      $rec->closeCursor();
   }
}
?>