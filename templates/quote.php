<?php // templates/quote.php ?>

<div class="section-title">
    <span>Devis</span>
    <h2>Demander un devis</h2>
</div>

<div class="form-box-container">
    <form action="/process_devis.php" method="post">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input class="form-control" type="text" name="nom" id="nom" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="type_projet">Type de projet</label>
            <select class="form-control" name="type_projet" id="type_projet" required>
                <option value="">Sélectionnez un type</option>
                <option value="site_vitrine">Site vitrine</option>
                <option value="ecommerce">Site e-commerce</option>
                <option value="branding">Branding / Identité</option>
                <option value="marketing">Marketing / Growth</option>
            </select>
        </div>

        <div class="form-group">
            <label for="budget">Budget estimé</label>
            <input class="form-control" type="text" name="budget" id="budget">
        </div>

        <div class="form-group">
            <label for="message">Détails du projet</label>
            <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn-fill">Envoyer la demande</button>
    </form>
</div>
