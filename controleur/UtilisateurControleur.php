<?php
if(isset($_SESSION['api'])){
$api = $_SESSION['api'];
}else{
    header ('Location: /Kephale_Dig/connexion');
}

?>