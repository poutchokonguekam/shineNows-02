<?php
declare(strict_types=1);

require_once __DIR__ . '/../auth_check.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contenus</title>
</head>
<body>
    <h1>Gestion des contenus</h1>
    <ul>
        <li><a href="/admin/content/edit_text.php">Modifier textes</a></li>
        <li><a href="/admin/content/seo.php">SEO</a></li>
    </ul>
    <a href="/admin/index.php">Retour</a>
</body>
</html>
