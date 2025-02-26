<?php
class Routeur
{
    public function routePublic(){
         //Chargement automatique des class du doc models
            $url = '';
             if(isset($_GET["url"])){
                $url = explode('/', filter_var($_GET["url"], FILTER_SANITIZE_URL ));
                // on recuper le premie parametre de url et mes la premier letre en maguscule
                $nomPage = ucfirst(strtolower( $url[0]));
                // definir le nom du controleur
                $controleurDoc = $nomPage."Controleur";
                $modelsDoc = $nomPage."Manager";
                $viewsDoc = $nomPage."Page";
                // definire le chemin du controleur
                $controleur = "../controleur/".$controleurDoc.".php";
                $models = "../models/".$modelsDoc.".php";
                $views = "../views/".$viewsDoc.".php";
                if(file_exists($models)){
                    require_once ("../models/bd/Cntbd.php");
                    $Cntbd = new Cntbd();
                    $bd = $Cntbd->bd();
                    require_once ($models);
                }
                if(file_exists($controleur)){
                    require_once ($controleur);

                }else{
                    header ('Location: /Kephale_Dig/mariage');
                }

             }else{
                echo 'pas url';
                //header ('Location: Kephale/accueil' );
             }
            //code...
        
    }
}

?>