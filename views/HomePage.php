<div class="container">
    <section class="" block_img>
        <img src="public/asset/img_invitations/home.png" alt="Image animée" class="image">
    </section>

    <section class='bloc_info_home'>
        <img class='logo_img' src="public/asset/logo/Logo.png" alt="">
        <h1>INVITATIONS ÉLECTRONIQUES</h1>
        <h2>Disponible au Mali</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="text" id="animated Text"></div>
        <div class='infopus'>
            <h1>krkkrk</h1>
        </div>
    </section>

</div>



<script>
let textElement = document.getElementById("animatedText");
let texts = ["Texte animé", "Animation en boucle", "Effet dynamique"];
let index = 0;

setInterval(() => {
    index = (index + 1) % texts.length;
    textElement.textContent = texts[index];
}, 3000);
</script>