<section class="ddhdxjxh">
    <section class='fffc'>
        <a href="/Kephale_Dig/ajouterclient?api=<?= $_GET["api"]?>"><</a>
    </section>
</section>


<?php
if($veifService === 0){
    ?>
    <div class='blocAcceul blkeplus'>
    <section class='BlocBac'>
        <form method="POST" enctype="multipart/form-data">
            <h1 class='eooez'>Service</h1>          
            <h5>Nombre d'invite</h5>
            <div class="bloc_taille">
                <div class="form-element">
                    <input type="radio" name="invite" value="20" id="20">
                    <label for="20">
                        <div class="title">20</div>
                    </label>
                </div>

                <div class="form-element">
                    <input type="radio" name="invite" value="50" id="50">
                    <label for="50">
                        <div class="title">50</div>
                    </label>
                </div>
                <div class="form-element">
                    <input type="radio" name="invite" value="80" id="80">
                    <label for="80">
                        <div class="title">80</div>
                    </label>
                </div>
                <div class="form-element">
                    <input type="radio" name="invite" value="100" id="100">
                    <label for="100">
                        <div class="title">100</div>
                    </label>
                </div>
                <div class="form-element">
                    <input type="radio" name="invite" value="120" id="120">
                    <label for="120">
                        <div class="title">120</div>
                    </label>
                </div>
                <div class="form-element">
                    <input type="radio" name="invite" value="150" id="150">
                    <label for="150">
                        <div class="title">150</div>
                    </label>
                </div>
                <div class="form-element">
                    <input type="radio" name="invite" value="180" id="180">
                    <label for="180">
                        <div class="title">180</div>
                    </label>
                </div>
                <div class="form-element">
                    <input type="radio" name="invite" value="200" id="200">
                    <label for="200">
                        <div class="title">200</div>
                    </label>
                </div>
            </div>
            <h5>SMS de remerciement</h5>
            <div class="bloc_taille">
                <div class="form-element">
                    <input type="radio" name="sms_merci" value="1" id="1">
                    <label for="1">
                        <div class="title">Oui</div>
                    </label>
                </div>

                <div class="form-element">
                    <input type="radio" name="sms_merci" value="2" id="2">
                    <label for="2">
                        <div class="title">Non</div>
                    </label>
                </div>
               
            </div>
            <h5>Filtre Snap</h5>
            <div class="bloc_taille">
                <div class="form-element">
                    <input type="radio" name="filtr_snap" value="Oui" id="Oui">
                    <label for="Oui">
                        <div class="title">Oui</div>
                    </label>
                </div>

                <div class="form-element">
                    <input type="radio" name="filtr_snap" value="Non" id="Non">
                    <label for="Non">
                        <div class="title">Non</div>
                    </label>
                </div>
               
            </div>
            <h5>Localisations</h5>
            <div class="bloc_taille">
                <div class="form-element">
                    <input type="radio" name="localisations" value="Ouii" id="Ouii">
                    <label for="Ouii">
                        <div class="title">Oui</div>
                    </label>
                </div>

                <div class="form-element">
                    <input type="radio" name="localisations" value="Nonn" id="Nonn">
                    <label for="Nonn">
                        <div class="title">Non</div>
                    </label>
                </div>
               
            </div>
            <input class="boutton_inpute" class="submit" type="submit" value="Envoyer" name="envoyer">
            <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>

        </form>
    </section>
</div>
    <?php
}else{
   
    foreach( $recService as  $recServices){
        $sms_merci = sms_merci($recServices["sms_merci"]);
        $fistre_snap = fistre_snap($bd, $api, $recServices["fistre_snap"]);
        $localisations = localisations($bd, $api, $recServices["localisations"]);
        ?>
        <div class='blocAcceul'>
        <section class='BlocBac'>
            <form  method="POST" enctype="multipart/form-data">
            <h1 class='eooez'>Service</h1>          
        <h5>Nombre d'invite (<?= $recServices["invite"]?>) </h5>
        <h5>SMS de remerciement <?= $sms_merci ?> </h5>
        <h5>Filtre Snaps <?= $fistre_snap ?> </h5>
        <h5>Localisations <?= $localisations?> </h5>
        <?php
        if($fistre_snap === 'Pas enregistre'){
            ?><input class='form_input' type='text' placeholder='Lien Snap' name='fistre_snaps' required
                value='<?php if (isset($fistre_snaps)) {echo $fistre_snaps;} ?>'>
            <?php
        }
        if($localisations === 'Pas enregistre'){
            ?><input class='form_input' type='text' placeholder='Lien localisation' name='localisation' required
            value='<?php if (isset($localisation)) {echo $localisation;} ?>'>
            <?php
        }
        if($localisations === 'Pas enregistre'){
            ?>
            <input class='boutton_inpute' class='submit' type='submit' value='Envoyer' name='envoyers'>
            <?php
        }elseif($fistre_snap === 'Pas enregistre'){
            ?>
            <input class='boutton_inpute' class='submit' type='submit' value='Envoyer' name='envoyers'>
            <?php
        }
        ?>
        
        
            </form>
        </section>
    </div>
        <?php
    }
 
}
?>
