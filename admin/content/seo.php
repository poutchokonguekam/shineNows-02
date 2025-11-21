<?php
declare(strict_types=1);

require_once __DIR__ . '/../auth_check.php';

$status = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $status = 'SEO enregistré (simulation).';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>SEO</title>
</head>
<body>
    <h1>Paramètres SEO</h1>
    <?php if ($status) : ?>
        <p><?= htmlspecialchars($status, ENT_QUOTES) ?></p>
    <?php endif; ?>
    <form method="post">
        <input type="text" name="meta_title" placeholder="Meta title">
        <input type="text" name="meta_description" placeholder="Meta description">
        <button type="submit">Sauvegarder</button>
    </form>
    <a href="/admin/content/index.php">Retour</a>
</body>
</html>
