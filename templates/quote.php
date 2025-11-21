<section>
    <h1>Devis</h1>
    <form action="/process_devis.php" method="post">
        <input type="text" name="name" placeholder="Votre nom" required>
        <input type="email" name="email" placeholder="Votre email" required>
        <textarea name="message" placeholder="Votre projet"></textarea>
        <button type="submit">Envoyer</button>
    </form>
    <p><?= htmlspecialchars($contentData['body'] ?? '', ENT_QUOTES) ?></p>
</section>
