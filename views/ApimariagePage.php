<div class='blocAcceul'>
    <section class='BlocBac'>
        <form method="POST" enctype="multipart/form-data">
            <h1>Ajouter api</h1>

            <h5>Jour</h5>
            <input class="form_input" type="text" placeholder="Jour" name="jour"
                value="<?php if (isset($nom_marie)) {echo $nom_marie;} ?>">
            <h5>Mois</h5>
            <input class="form_input" type="text" placeholder="Mois" name="mois"
                value="<?php if (isset($nom_mariee)) {echo $nom_mariee;} ?>">
            <div class="bloc_taille">
                <div class="form-element">
                    <input type="checkbox" name="options[]" value="Snap" id="Snap">
                    <label for="Snap">
                        <div class="title">Filtre Snap</div>
                    </label>
                </div>

                <div class="form-element">
                    <input type="checkbox" name="options[]" value="Menu" id="Menu">
                    <label for="Menu">
                        <div class="title">Menu</div>
                    </label>
                </div>
            </div>
            <input class="boutton_inpute" class="submit" type="submit" value="Envoyer" name="envoyer">
            <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>
                <h1 class='text_d'>Suivre mes<a class='link' href=""> invitations</a></h1>

        </form>
    </section>
</div>