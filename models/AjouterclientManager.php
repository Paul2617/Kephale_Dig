<?php

function inserClient($bd, $nom, $numeraux, $evenement, $stricture, $type, $api, $Operateur) {
    $recTable = rowCount ( $bd, "api", "api", $api);
    if($recTable  === 1){
        $rectel = rowCount ( $bd, "client", "numero", $numeraux);
        if($rectel  === 0){
          $inser = $bd->prepare("INSERT INTO client ( api, numero, info, genre, type_event, stricture, operateur) VALUES (?,?,?,?,?,?,?)");
          $inser->execute(array($api, $numeraux, $nom, $type, $evenement, $stricture, $Operateur));
          return 3;
        }else{
            return 2;
        }
    }else{
        return 1;
    }
}