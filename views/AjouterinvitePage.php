<section class="ddhdxjxh">
    <section class='fffc'>
        <a href="/Kephale_Dig/infoapi?api=<?= $_GET["api"]?>"><</a>
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
            <input class="boutton_inpute" class="submit" type="submit" value="Envoyer" name="envoyer">
            <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>

        </form>
    </section>
</div>