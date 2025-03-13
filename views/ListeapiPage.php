<section class="ddhdxjxh">
    <section class='fffc'>
    <a href="/Kephale_Dig/user"> < </a>
    <a href="/Kephale_Dig/api">Ajouter api</a>
    </section>
</section>
<div class="blockekf">

    <h1 class="fjdjkfj">liste api</h1>


    <div class="bloclisteapi">

        <?php

if(empty($listapi)){
    echo 'Pas devenement';
}else{
foreach ($listapi as $listapis){
    $dateevent = $listapis["date_fin"];
    $date_converty = date_converty ($dateevent);
    ?>

        <a href="/Kephale_Dig/infoapi?api=<?= $listapis["api"]?>" class="cdkdirje">
            <section class='ffiefyei'>
                <h1><?= $listapis["types"]?></h1>
                <h3>Dine mine</h3>
                <p>Évènement, prévu</p>
                <p><?= $date_converty?></p>
            </section>

        </a>
        <?php
}
}
?>
    </div>


</div>