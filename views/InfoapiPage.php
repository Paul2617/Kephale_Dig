<section class="ddhdxjxh">
    <section class='fffc'>
    <a href="/Kephale_Dig/listeapi"><</a>
    <a href="/Kephale_Dig/ajouterclient?api=<?= $_GET["api"]?>">Ajouter Client</a>
    <a href="/Kephale_Dig/ajouternumero">Ajouter numeraux</a>
    </section>
</section>

<div class="blockekf">

  

<div class="bloclisteapi">
<?php
if(empty($listeClient)){
    echo 'Pas de client enregistre';
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


<h1 class="fjdjkfj">liste Invite</h1>


<section class="cdkdirje">
    <section class='ffiefyei'>
    <h1>kk</h1>
    <h3>Dine mine</h3>
    <p>Évènement, prévu</p>
    <p>lll</p>
    </section>
 <section class='ffjddfj'>
    <a class='djdjj' href="">Supprime</a>
 </section>
    </section>
</div>


</div>