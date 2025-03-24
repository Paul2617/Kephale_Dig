<section class="nav_bar">
    <section class='bloc_nav'>
        <a class='botton_link'  href="/Kephale_Dig/utilisateur"><</a>
    </section>
</section>

<div class='bloc_center'>
    <section class='block_info'>
        <p class='flfdm'>(<?php if($info_invite === "null"){echo "0";}else{echo $info_invite ;}  ?>) Invitations</p>
        <p><?= $info_nombre_invite ?> Contactes enregistre</p>
        <p><?= $contact_restant ?> Contactes restant</p>
        <p class='flfffdm'><?php if(isset($resuite)){echo $resuite;} ?> </p>
    </section>
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
</div>
