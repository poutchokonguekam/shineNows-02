<?php // quote ?>

<div class="section-title">
    <span>Devis</span>
    <h2>Demander un devis</h2>
</div>

<form action="/process_devis.php" method="post" class="card">

    <p><input type="text" name="nom" placeholder="Votre nom" required></p>
    <p><input type="email" name="email" placeholder="Votre email" required></p>

    <p>
        <select name="type" required>
            <option value="">Type de projet</option>
            <option>Site vitrine</option>
            <option>Site e-commerce</option>
            <option>Branding / Identité</option>
            <option>Marketing / Growth</option>
        </select>
    </p>

    <p><textarea name="message" placeholder="Décrivez votre projet..." required></textarea></p>

    <button class="btn-fill">Envoyer la demande</button>
</form>
