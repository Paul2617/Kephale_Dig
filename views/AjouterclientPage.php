<section class="nav_bar">
    <section class='bloc_nav'>
        <a class='botton_link' href="/Kephale_Dig/infoapi?api=<?= $_GET["api"]?>"><</a>
        <a class='botton_link' href="/Kephale_Dig/service?api=<?= $_GET["api"]?>">Service</a>
        <a class='botton_link' href="/Kephale_Dig/ajouterinvitations?api=<?= $_GET["api"]?>">Ajouter invitation</a>
    </section>
</section>

<div class='blocAcceul blkeplus'>
    <section class='BlocBac'>
        <form method="POST" enctype="multipart/form-data">
            <h1 class='eooez'>Ajouter Client</h1>
            <h1 class='eoo'><?php if (isset($resuite)) {echo $resuite;} ?></h1>
            <h5>Nom</h5>
            <input class="form_input" type="text" placeholder="Mon" name="nom" min="1" max="31" required
                value="<?php if (isset($nom)) {echo $nom;} ?>">
                <h5>Numeraux</h5>
            <input class="form_input" type="number" placeholder="Numeraux" name="numeraux" required
                value="<?php if (isset($numeraux)) {echo $numeraux;} ?>">
                <h5>Evenement</h5>
            <input class="form_input" type="text" placeholder="Evenement" name="evenement" min="1" max="31" required
                value="<?php if (isset($evenement)) {echo $evenement;} ?>">
                <h5>Stricture</h5>
            <input class="form_input" type="text" placeholder="Stricture" name="stricture"
                value="<?php if (isset($stricture)) {echo $stricture;} ?>">

            <div class="bloc_taille">
                <div class="form-element">
                    <input type="radio" name="options" value="Homme" id="Homme">
                    <label for="Homme">
                        <div class="title">Homme</div>
                    </label>
                </div>

                <div class="form-element">
                    <input type="radio" name="options" value="Femme" id="Femme">
                    <label for="Femme">
                        <div class="title">Femme</div>
                    </label>
                </div>
            </div>
            <input class="boutton_inpute" class="submit" type="submit" value="Envoyer" name="envoyer">
            <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>

        </form>
    </section>
</div>