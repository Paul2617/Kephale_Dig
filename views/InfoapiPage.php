<section class="ddhdxjxh">
    <section class='fffc'>
    <a href="/Kephale_Dig/listeapi"><</a>
    <a href="/Kephale_Dig/ajouterclient?api=<?= $_GET["api"]?>">Ajouter Client</a>
    <a href="/Kephale_Dig/ajouterinvite?api=<?= $_GET["api"]?>">Ajouter Invite</a>
    </section>
</section>

<div class="blockekf">

  

<div class="bloclisteapi">
<?php
if(empty($listeClient)){
    echo 'Pas de client enregistré';
}else{
    foreach($listeClient as $listeClients){
        ?> 
        <section class="cdkdirje">
        <section class='ffiefyei'>
        <h1><?= $listeClients['info']?> </h1>
        <h3><?= $listeClients['stricture']?></h3>
        <p>Tel: <?= $listeClients['numero']?> <?= $listeClients['operateur']?></p>
        </section>
        </section>
        <?php
    }
   
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