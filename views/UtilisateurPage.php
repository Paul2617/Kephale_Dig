<section class="nav_bar">
    <section class='bloc_nav'>
        <a class='botton_link' href=""><</a>
        <a class='botton_link' href="/Kephale_Dig/ajouterinvite&api=<?= $_SESSION["api"]?>">Ajouter les invites </a>
        <a class='deconect ' href="">Déconnexion</a>
    </section>
</section>

<div class='bloc_center_un' >

<section class='blocks_Links' >
<a class='botton_link' href="/Kephale_Dig/carte&api=<?= $_SESSION["api"]?>">Invitations</a>
<a class='botton_link'  href="">Services </a>
<a class='botton_link'  href="">Les invites </a>
</section>

<section class='block_link_deux'>
    <section class='block_link_troix'>
    <a class='block_links bleu' href="">
    Liste invite (0)
   </a>
   <a class='block_links vert' href="">
    Liste invite
   </a>

   <a class='block_links orange' href="">
    Liste invite
   </a>
   <a class='block_links rouge' href="">
    Liste invite
   </a>
    </section>
</section>


<section class="bloc_form espace_top" >
        <form class="form" method="POST" enctype="multipart/form-data" >
        <h1 class='text_form'>Partager le lien de l'invitation</h1>
        <input class="bouton" class="submit" type="submit" value="Copier" name="copier">
        <?php if (isset($erreur)) { ?> <h2 class="erreur"><?php echo $erreur ?></h1> <?php } ?>
        
        </form>
    </section>
</div>