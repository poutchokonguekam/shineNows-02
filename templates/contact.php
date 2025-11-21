<?php // templates/contact.php ?>

<div class="section-title">
    <span>Contact</span>
    <h2>Entrer en contact</h2>
</div>

<div class="contact-cards-container">
    <div class="contact-card">
        <h3 class="text-gold">WhatsApp</h3>
        <p>Discutons directement sur WhatsApp.</p>
        <p><strong>+49 1573 830 6056</strong></p>
    </div>
    <div class="contact-card">
        <h3 class="text-gold">Devis & projets</h3>
        <p>Un besoin précis ? Expliquez-nous votre projet.</p>
        <p><strong>infos@shinenows.com</strong></p>
    </div>
</div>

<div class="contact-form-box">
    <form action="/process_contact.php" method="post">
        <label class="contact-label" for="nom">Nom</label>
        <input class="contact-input" type="text" name="nom" id="nom" required>

        <label class="contact-label" for="email">Email</label>
        <input class="contact-input" type="email" name="email" id="email" required>

        <label class="contact-label" for="message">Message</label>
        <textarea class="contact-input" name="message" id="message" rows="5" required></textarea>

        <button type="submit" class="btn-send">Envoyer</button>
    </form>
</div>
