<?php
declare(strict_types=1);

require_once __DIR__ . '/../auth_check.php';

$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = 'Texte mis à jour (simulation).';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Modifier les textes</title>
</head>
<body>
    <h1>Modifier les textes</h1>
    <?php if ($result) : ?>
        <p><?= htmlspecialchars($result, ENT_QUOTES) ?></p>
    <?php endif; ?>
    <form method="post">
        <textarea name="body" placeholder="Nouveau contenu"></textarea>
        <button type="submit">Sauvegarder</button>
    </form>
    <a href="/admin/content/index.php">Retour</a>
</body>
</html>
