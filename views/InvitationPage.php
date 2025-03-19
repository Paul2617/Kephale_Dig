
  <div class='blockinfitaions'>
    <section class='blocImg'>
        <img src="public/asset/img_invitations/carte.png" alt="">
    </section>

    <?php 
if(isset($id_user)){
  ?>
   <section class='blockInfo'>
      <section class='blockTexts'>
        <h1><?= $Invitaions ?></h1>
        <h2>Bonjour <?= $Nom_invite  ?></h2>
        <p><?= $Nom_invite  ?></p>
      </section>
      <form method="POST" enctype="multipart/form-data">
      <input class="boutton_inpute" class="submit" type="submit" value="Confirme votre presense" name="confirme">
      </form>
    </section>
  <?php 
}
?>
 
</div>