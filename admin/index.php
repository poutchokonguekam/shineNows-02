<?php
declare(strict_types=1);

require_once __DIR__ . '/auth_check.php';

$username = $_SESSION['admin_username'] ?? 'admin';
$role = $_SESSION['admin_role'] ?? 'admin';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Dashboard ShineNows</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <style>
        body {
            background: #0f0f0f;
            color: #fff;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .dashboard {
            background: #1b1b1b;
            padding: 2rem 3rem;
            border-radius: 10px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.45);
            max-width: 520px;
            width: 100%;
        }
        .dashboard h1 {
            margin-top: 0;
            color: #d4af37;
        }
        .dashboard a {
            display: inline-block;
            margin: 0.4rem 0.2rem;
            padding: 0.6rem 1rem;
            background: #d4af37;
            color: #111;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
        }
        .dashboard a.secondary {
            background: transparent;
            border: 1px solid #d4af37;
            color: #d4af37;
        }
    </style>
</head>
<body>
    <section class="dashboard">
        <h1>Dashboard ShineNows</h1>
        <p>Connecté en tant que : <strong><?= htmlspecialchars($username, ENT_QUOTES) ?></strong> (<?= htmlspecialchars($role, ENT_QUOTES) ?>)</p>
        <div>
            <a href="/admin/pages/index.php">Gérer les pages</a>
            <a href="/admin/content/index.php">Gérer le contenu</a>
            <a class="secondary" href="/index.php" target="_blank">Voir le site</a>
        </div>
        <div>
            <a href="logout.php">Déconnexion</a>
        </div>
    </section>
</body>
</html>
