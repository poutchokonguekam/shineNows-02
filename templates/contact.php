<?php // contact ?>

<div class="section-title">
    <span>Contact</span>
    <h2>Entrer en contact</h2>
</div>

<div class="card">
    <p>Email : infos@shinenows.com</p>
    <p>Téléphone : +49 1573 830 6056</p>
</div>

<form action="/process_contact.php" method="post" class="card" style="margin-top:20px;">
    <h3 class="text-gold">Envoyer un message</h3>
    <p><input type="text" name="nom" placeholder="Votre nom" required></p>
    <p><input type="email" name="email" placeholder="Votre email" required></p>
    <p><textarea name="message" placeholder="Votre message" required></textarea></p>
    <button class="btn-fill">Envoyer</button>
</form>
