<?php
declare(strict_types=1);

require_once __DIR__ . '/../auth_check.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = 'Page enregistrée (simulation).';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Modifier une page</title>
</head>
<body>
    <h1>Modifier une page</h1>
    <?php if ($message) : ?>
        <p><?= htmlspecialchars($message, ENT_QUOTES) ?></p>
    <?php endif; ?>
    <form method="post">
        <input type="text" name="title" placeholder="Titre">
        <textarea name="content" placeholder="Contenu"></textarea>
        <button type="submit">Sauvegarder</button>
    </form>
    <a href="/admin/pages/index.php">Retour</a>
</body>
</html>
