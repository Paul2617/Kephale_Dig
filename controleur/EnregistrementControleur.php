<?php
 $api = $_GET['api']; 
 $type_api = type_api($bd, $api );
 $options = $type_api['options'];
 $numeros = $type_api['numeros'];
?>