<div class='blocAcceul' >
    <section class='BlocBac'>
        <form method="POST" enctype="multipart/form-data">
            <h5>Nom complet du Marié</h5>
            <input class="form_input" type="text" placeholder="Nom complet du Marié" name="nom_marie"
                value="<?php if (isset($nom_marie)) {echo $nom_marie;} ?>">
                <h5>Nom complet de la Mariée</h5>
            <input class="form_input" type="text" placeholder="Nom complet de la Mariée" name="nom_mariee"
                value="<?php if (isset($nom_mariee)) {echo $nom_mariee;} ?>">
                <h5>Numéro de téléphone</h5>
            <input class="form_input" type="number" placeholder="Numéro de téléphone" name="telephone"
                value="<?php if (isset($telephone)) { echo $telephone;} ?>">
            
             
                <input class="boutton_inpute" class="submit" type="submit" value="Envoyer" name="envoyer">
                <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>
                    <h1 class='text_d'>Suivre mes<a class='link' href=""> invitations</a></h1>
            
        </form>
    </section>
</div>