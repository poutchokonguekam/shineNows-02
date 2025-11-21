<section>
    <h1>Contact</h1>
    <form action="/process_contact.php" method="post">
        <input type="text" name="subject" placeholder="Sujet" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit">Envoyer</button>
    </form>
    <p><?= htmlspecialchars($contentData['body'] ?? '', ENT_QUOTES) ?></p>
</section>
