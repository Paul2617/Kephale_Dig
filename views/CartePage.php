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
            if(isset($_SESSION['Nom_invite'])){
                ?>
                <section class='blockInfo'>
                <section class='blockTexts'>
                    <h1>Coucou <?= $_SESSION['Nom_invite'] ?></h1>
                    <h2>Vous obtiendrez un message sur votre numéro <?= $_SESSION['tel_invite'] ?> contenant le lien de l'invitation.</h2>
                    <h3></h3>
                    <p>Merci </p>
                </section>
                <?php 
            }else{
                if($contact_restant > '0'){
                    ?>
                    <section class='bloc_form'>
                    <h1 class='text_form_titre' >Ajouter invite</h1>
                        <form class="form" method="POST" enctype="multipart/form-data">
                            <h1 class='eoo'><?php if (isset($resuite)) {echo $resuite;} ?></h1>
                            <h1 class='text_form'>Nom</h1>
                            <input class="input" type="text" placeholder="Mon" name="nom" min="1" max="31" required
                                value="<?php if (isset($nom)) {echo $nom;} ?>">
                                <h1 class='text_form'>Numeraux</h1>
                            <input class="input" type="number" placeholder="Numeraux" name="numeraux" required
                                value="<?php if (isset($numeraux)) {echo $numeraux;} ?>">
                            <input class="bouton" class="submit" type="submit" value="Envoyer" name="envoyer">
                       
                            <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>
                
                        </form>
                    </section>
                <?php 
                }
            }
          
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