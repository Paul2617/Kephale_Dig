<?php

$listapi = listapi ($bd);

function date_converty ($dateevent){
    $date = dates ($dateevent);
    return $date;
}

function rec_service($bd, $apirec){
   return rec_service_api($bd, $apirec);
}

function rec_client ($bd, $apirec, $rec_service){
    if($rec_service === "Mariage"){
        return rec_info_mariage($bd, $apirec);
    }else{
        return rec_info_autre_service ($bd, $apirec);
    }
}

function autre_service($bd, $apirec){
return info_autre_service ($bd, $apirec);
}

function rec_date($bd, $apirec, $rec_service){
      return rec_date_t($bd, $apirec, $rec_service);

}
?>