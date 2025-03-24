<section class="nav_bar">
    <section class='bloc_nav'>
    <a class='botton_link' href="/Kephale_Dig/user"> < </a>
    <a class='botton_link' href="/Kephale_Dig/api">Ajouter événement</a>
    </section>
</section>
<div class="blockekf">

    <h1 class="fjdjkfj">liste d'événement</h1>


    <div class="bloclisteapi">

        <?php

if(empty($listapi)){
    echo "Pas d'événement";
}else{
foreach ($listapi as $listapis){
    $apirec = $listapis["api"];
    $rec_service = rec_service($bd, $apirec);
    $rec_client = rec_client($bd, $apirec, $rec_service);
    $autre_service = autre_service($bd, $apirec);
    $rec_date = rec_date($bd, $apirec, $rec_service);
    $dates = dates ($rec_date) ;
    ?>
        <a href="/Kephale_Dig/infoapi?api=<?= $listapis["api"]?>" class="cdkdirje">
            <section class='ffiefyei'>
                <h1><?php if($rec_service === "Mariage"){echo $rec_service ;}else{echo $autre_service;} ?></h1>
                <p><?= $rec_client ?></p>
                <p>Tel : <?= $listapis["numeros"] ?></p>
                <p>Évènement, prévu</p>
                <p><?= $dates ?></p>
            </section>

        </a>
        <?php
}
}
?>
    </div>


</div>