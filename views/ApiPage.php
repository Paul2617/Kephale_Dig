
<div class='blocAcceul'>
<a href="" class='linklink'>liste api</a>

    <section class='BlocBac'>
        <form method="POST" enctype="multipart/form-data">
            <h1 class='eooez'>Ajouter api</h1>
            <h1 class='eoo'><?php if (isset($resuite)) {echo $resuite;} ?></h1>
            <h5>Jour</h5>
            <input class="form_input" type="number" placeholder="Jour" name="jour" 
            min="1" max="31" required
                value="<?php if (isset($jour)) {echo $jour;} ?>">
            <h5>Mois</h5>

                <select class="form_input" name="mois">
                    <option value="<?php if (isset($mois)) {echo $mois;} ?>">Sélectionne Mois</option>
                    <option value="1">Janvier</option>
                    <option value="2">Février</option>
                    <option value="3">Mars</option>
                    <option value="4">Avril</option>
                    <option value="5">Mai</option>
                    <option value="6">Juin</option>
                    <option value="7">Juillet</option>
                    <option value="8">Août</option>
                    <option value="9">Septembre</option>
                    <option value="10">Octobre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Décembre</option>
                </select>
                <div class="bloc_taille">
    <div class="form-element">
        <input type="checkbox" name="options" value="mariage" id="mariage">
        <label for="mariage">
            <div class="title">Mariage</div>
        </label>
    </div>

    <div class="form-element">
        <input type="checkbox" name="options" value="profesionel" id="profesionel">
        <label for="profesionel">
            <div class="title">Profesionel</div>
        </label>
    </div>
</div>
            <input class="boutton_inpute" class="submit" type="submit" value="Envoyer" name="envoyer">
            <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>

        </form>
    </section>
</div>