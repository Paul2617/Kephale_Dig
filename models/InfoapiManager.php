<?php
function listeClient ($bd, $api){
  return  recTableIdBoucle ($bd, 'client', "api", $api);
}
?>