<section class="nav_bar">
    <section class='bloc_nav'>
        <a class='botton_link' href=""><</a>
    </section>
</section>
<div class='bloc_center' >
    <section class="bloc_form" >
        <h1 class='text_form_titre' >Service pour ?</h1>
        <form class="form" method="POST" enctype="multipart/form-data" >
        <h1 class='text_form'>Entre notre numéros</h1>
        <input class="input" type="number" placeholder="numéros sans indicatif" name="numeros" required
        value="<?php if (isset($numeros)) {echo $numeros;} ?>">
        
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
        <input class="bouton" class="submit" type="submit" value="Envoyer" name="envoyer">
        <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>
        
        </form>
    </section>
</div>