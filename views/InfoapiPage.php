<section class="nav_bar">
    <section class='bloc_nav'>
    <a class='botton_link'  href="/Kephale_Dig/listeapi"><</a>
    <a class='botton_link'  href="/Kephale_Dig/service?api=<?= $_GET["api"]?>">Service</a>
    <a class='botton_link'  href="/Kephale_Dig/ajouterinvitations?api=<?= $_GET["api"]?>">Carte</a>
    <a class='botton_link'  href="/Kephale_Dig/ajouterinvite?api=<?= $_GET["api"]?>">Ajouter Invite</a>
    </section>
</section>

<div class="blockekf">

  

<div class="bloclisteapi">
<?php

if(empty($listeClient)){
    echo 'Pas de client enregistré';
}else{
        if($verifitype === 'Mariage'){
            $info = "Mariage";
            $text = $listeClient["nom_marie"]." et ".$listeClient["nom_mariee"];
            }else{
                $info = $listeClient["type_eve"];
                $text = $listeClient["nom"];
            }
        ?> 
        <section class="cdkdirje">
        <section class='ffiefyei'>
        <h1><?= $info ?> </h1>
        <h3>De <?= $text ?></h3>
        <p>Tel: <?= $rec_numero ?></p>
        </section>
        </section>
        <?php
   
}
?>   

<h1 class="fjdjkfj">liste d'invités</h1>

<?php
if(empty($listeinvite)){
    echo "Pas de d'invite";
}else{
    foreach($listeinvite as $listeinvites){
        $presense = $listeinvites['presense'];
        $id_client = $listeinvites['id'];
        $apiRec = $listeinvites['api'];
        $verifconfirme = verifconfirme($presense);
        $verifsms = verifsmsAd($bd, $id_client, $apiRec);
        if (isset($_POST["envoyer"]) and !empty($_POST["envoyer"])){
           echo envois_sms ($bd, $id_client, $apiRec);
          }
        ?> 
        <section class="cdkdirje">
    <section class='ffiefyei'>
    <h1><?= $listeinvites['Nom']?></h1>
    <p>Tel: <?= $listeinvites['numero']?></p>
    <p style = "color: <?php if($presense === 0){echo '#F7A429';}else{ echo '#95C11F';} ?>" ><?= $verifconfirme ?></p>
    </section>
    <form class='ffjddfj' method="POST" enctype="multipart/form-data">
    <?= $verifsms?>
    <input class="djdjj" class="submit" type="submit" value="Supprime" name="supprime"> 
    </form>
    </section>
        <?php
    }
}
?> 

</div>


</div>