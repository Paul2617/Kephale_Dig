<section class="ddhdxjxh">
    <section class='fffc'>
        <a href=""><</a>
    </section>
</section>
<div class='bloc_center' >
    <section class="bloc_form" >
        <h1 class='text_form_titre' >Connexion</h1>
        <form class="form" method="POST" enctype="multipart/form-data" >
        <h1 class='text_form'>Entre votre numéro</h1>
        <input class="input" type="number" placeholder="numéro sans indicatif" name="numero" required
        value="<?php if (isset($numero)) {echo $numero;} ?>">
        <h1 class='text_form'>Entre le mot de passe</h1>
        <input class="input" type="password" placeholder="mot de passe" name="mot_de_passe" required
        value="<?php if (isset($mot_de_passe)) {echo $mot_de_passe;} ?>">

        <div class="bloc_taille">
                <div class="form-element">
                    <input type="radio" name="options" value="ONG" id="ONG" >
                    <label for="ONG">
                        <div class="title">ONG</div>
                    </label>
                </div>

                <div class="form-element">
                    <input type="radio" name="options" value="Entreprise" id="Entreprise">
                    <label for="Entreprise">
                        <div class="title">Entreprise</div>
                    </label>
                </div>

                <div class="form-element">
                    <input type="radio" name="options" value="Personnelle" id="Personnelle">
                    <label for="Personnelle">
                        <div class="title">Personnelle</div>
                    </label>
                </div>
            </div>
        
        <input class="bouton" class="submit" type="submit" value="Connexion" name="connexion">
        <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>
        
        </form>
    </section>
</div>