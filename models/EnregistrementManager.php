<?php 

function type_api($bd, $api){
    $rec =  $bd->prepare('SELECT * FROM api WHERE api = ? ');
    $rec->execute(array($api));
    return  $rec->fetch(PDO::FETCH_ASSOC);
}
?>