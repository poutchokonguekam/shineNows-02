<?php
declare(strict_types=1);

require_once __DIR__ . '/auth_check.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Dashboard ShineNows</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <main>
        <h1>Dashboard</h1>
        <p>Bienvenue sur l'espace d'administration.</p>
        <nav>
            <a href="/admin/pages/index.php">Pages</a>
            <a href="/admin/content/index.php">Contenus</a>
            <a href="/admin/logout.php">Déconnexion</a>
        </nav>
    </main>
</body>
</html>
