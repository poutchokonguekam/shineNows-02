<section>
    <h1><?= htmlspecialchars($translations['welcome_message'] ?? 'Bienvenue', ENT_QUOTES) ?></h1>
    <p><?= htmlspecialchars($contentData['body'] ?? '', ENT_QUOTES) ?></p>
</section>
