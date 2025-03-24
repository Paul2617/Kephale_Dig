<div class='blockinfitaions'>
    <?php 
if($img_cart !== "null"){
    ?>
    <section class='blocImg'>
        <img src="public/asset/img_invitations/<?= $img_cart ?>" alt="">
    </section>
    <?php 
}else{
    ?>
    <section class='bloc_center_un'>
        <h1>Carte non disponible</h1>
    </section>
    <?php 
}
  ?>


    <?php 
    if(isset($tr)){
        if($tr === 'tr'){
            if(isset($id_user)){
                if($presense === 0){
                    ?>
    <section class='blockInfo'>
        <section class='blockTexts'>
            <h1> <?= $titre ?></h1>
            <h2><?= $text ?></h2>
            <h3><?= $date ?></h3>
            <p>Merci de confirmer si vous serez là.</p>
        </section>
        <form method="POST" enctype="multipart/form-data">
            <input class="boutton_inpute" class="submit" type="submit" value="Confirme votre presense" name="confirme">
        </form>
    </section>
    <?php 
                }else{
                    ?>
    <section class='blockInfo'>
        <section class='blockTexts'>
            <h1><?= $titre ?></h1>
            <h2><?= $text ?></h2>
            <h3><?= $date ?></h3>
            <p>Merci <?= $nom_inivite?></p>
        </section>
        <?php
                        if(isset($link_localisations)){
                            ?>
        <form method="POST" enctype="multipart/form-data">
            <input class="boutton_inpute" class="submit" type="submit" value="Localisation" name="localisation">
        </form>
        <?php
                        }

                        if(isset($link_fistre_snap)){
                            ?>
        <form method="POST" enctype="multipart/form-data">
            <input class="boutton_inpute" class="submit" type="submit" value="Filtre SnapChat" name="SnapChat">
        </form>
        <?php
                        }
                        ?>
    </section>
    <?php 
                }
            
              }
        }elseif($tr === 'te'){
    
        }
    }else{
        ?>
    <section class='bloc_nav'>
        <a class='botton_link' href="/Kephale_Dig/utilisateur">
            < </a>
    </section>
    <?php 
    }

  ?>
    <?php 
?>
</div>