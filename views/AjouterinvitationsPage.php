<section class="nav_bar">
    <section class='bloc_nav'>
        <a class='botton_link' href="/Kephale_Dig/infoapi?api=<?= $_GET["api"]?>"><</a>
        <a class='botton_link' href="/Kephale_Dig/carte?api=<?= $_GET["api"]?>">Invitation</a>
    </section>
</section>

<?php 
if($veifInfitationstool === 1){

}else{
    ?>
    <div class='blocAcceul '>

<section class='BlocBac'>


    <form method="POST" enctype="multipart/form-data">
        <h1 class='eooez'>Ajouter Invitations</h1>
        <h1 class='eoo'><?php if (isset($resuite)) {echo $resuite;} ?></h1>
        <h5>Text</h5>
        <input class="form_input" type="text" placeholder="Text" name="nom" min="1" max="31" required
            value="<?php if (isset($nom)) {echo $nom;} ?>">

            <section class ='blocfil'>
        <input type="file" id="file" name="img_demande">
        <label for="file">
        <img src="public/asset/_icone/appareil.svg" alt="">
        <h4>Ajouter Image</h4>
        </label>
        </section>
        <input class="boutton_inpute" class="submit" type="submit" value="Envoyer" name="envoyer">
        <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>

    </form>
</section>
</div>
    <?php 
}
?>
