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
    <button id="select-contact">Sélectionner un contact</button>
    <ul id="contact-list"></ul>
</div>
<script>
  document.getElementById('select-contact').addEventListener('click', async () => {
            // Vérification si l’API Contacts est disponible
            if (!('contacts' in navigator) || !('select' in navigator.contacts)) {
                alert("Votre navigateur ne prend pas en charge l'accès aux contacts.");
                return;
            }

            try {
                // Demande de permission
                const permissionStatus = await navigator.permissions.query({ name: 'contacts' });

                if (permissionStatus.state === 'denied') {
                    alert("L'accès aux contacts est refusé. Veuillez vérifier les permissions.");
                    return;
                }

                // Sélectionner les contacts (nom + numéro)
                const props = ['name', 'tel'];
                const contacts = await navigator.contacts.select(props, { multiple: true });

                contacts.forEach(contact => {
                    const name = contact.name ? contact.name[0] : "Inconnu";
                    const number = contact.tel ? contact.tel[0] : "Aucun numéro";

                    // Affichage dans la liste
                    const li = document.createElement('li');
                    li.textContent = `${name} - ${number}`;
                    document.getElementById('contact-list').appendChild(li);

                    // Envoyer au serveur
                    fetch('save_contact.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ nom: name, numero: number })
                    })
                    .then(response => response.json())
                    .then(data => console.log("Serveur:", data))
                    .catch(error => console.error("Erreur:", error));
                });

            } catch (err) {
                console.error("Erreur lors de la sélection des contacts:", err);
            }
        });
    </script>
    </script>
