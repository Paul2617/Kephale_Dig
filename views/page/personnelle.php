<?php 

if($types === 0){
    ?>
<div class='bloc_center'>
    <section class="bloc_form">
        <h1 class='text_form_titre'>Enregistrement (1) </h1>
        <form class="form" method="POST" enctype="multipart/form-data">
            <h1 class='text_form'>Votre numéro</h1>
            <input class="input" type="number" placeholder="Numéro sans indicatif" name="numeros"
                value="<?php if (isset($numeros)) {echo $numeros;} ?>">

            <div class="bloc_taille">
                <div class="form-element">
                    <input type="radio" name="types_service" value="Mariage" id="Mariage">
                    <label for="Mariage">
                        <div class="title">Mariage</div>
                    </label>
                </div>

                <div class="form-element">
                    <input type="radio" name="types_service" value="Professionnels" id="Professionnels">
                    <label for="Professionnels">
                        <div class="title">Professionnels</div>
                    </label>
                </div>

                <div class="form-element">
                    <input type="radio" name="types_service" value="Autre" id="Autre">
                    <label for="Autre">
                        <div class="title">Autre</div>
                    </label>
                </div>
            </div>

            <input class="bouton" class="submit" type="submit" value="Envoyer" name="envoyer">
            <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>
        </form>
    </section>
</div>
<?php 
}else{
    ?>
<div class='bloc_center'>
    <section class="bloc_form">
        <h1 class='text_form_titre'>Enregistrement (2) </h1>
        <form class="form" method="POST" enctype="multipart/form-data">
            <?php 
         if($types_rec['types'] === 'Mariage'){
            ?>
            <h1 class='text_form'>Nom du Marie</h1>
            <input class="input" type="text" placeholder="Nom du Marie" name="nom_marie"
                value="<?php if (isset($nom_marie)) {echo $nom_marie;} ?>" required>
            <h1 class='text_form'>Nom de la Mariee</h1>
            <input class="input" type="text" placeholder="Nom de la Mariee" name="nom_mariee"
                value="<?php if (isset($nom_mariee)) {echo $nom_mariee;} ?>" required>
                <h1 class='text_form'>Date du Mariage </h1>
            <?php 
         }else{
            ?>
            <h1 class='text_form'>Votre nom</h1>
            <input class="input" type="text" placeholder="Votre nom" name="nom_complet"
                value="<?php if (isset($nom_complet)) {echo $nom_complet;} ?>" required>
            <h1 class='text_form'>Type d'événement</h1>
            <input class="input" type="text" placeholder="Type d'événement" name="type_eve"
                value="<?php if (isset($type_eve)) {echo $type_eve;} ?>" required>
                <h1 class='text_form'>Date de L'événement </h1>
            <?php 
         }
         ?>
         
            <section class='bloc_date'>
                <input class="input_date" type="number" placeholder="Jour" name="jour" min="1" max="31" required
                    value="<?php if (isset($jour)) {echo $jour;} ?>">
                <select class="input_date plus" name="mois">
                    <option value="<?php if (isset($mois)) {echo $mois;} ?>">Mois</option>
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
                <input class="input_date" type="number" placeholder="Heure" name="heure" min="1" max="23" required
                    value="<?php if (isset($heure)) {echo $heure;} ?>">
                <input class="input_date" type="number" placeholder="Minute" name="minute" min="0" max="59" required
                    value="<?php if (isset($minute)) {echo $minute;} ?>">
            </section>
            <h1 class='text_form'>Lieu</h1>
            <input class="input" type="text" placeholder="Lieu de l'événement" name="lieu"
                value="<?php if (isset($lieu)) {echo $lieu;} ?>" required>

            <input class="bouton" class="submit" type="submit" value="Envoyer" name="envoyer_deux">
            <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>
        </form>
    </section>
</div>
<?php 
}
?>