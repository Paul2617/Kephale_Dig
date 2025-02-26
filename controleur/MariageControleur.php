<?php









if(isset($_SESSION["id"])){
  require_once ($views);
}elseif($id = null) {
  require_once ("../views/commection.php");
}else{
  require_once ("../views/ajouteInfoMarie.php");
}
?>