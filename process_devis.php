<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/app/Controllers/LeadController.php';

$controller = new LeadController();
$response = $controller->handleQuote($_POST);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Demande de devis</title>
</head>
<body>
    <h1>Demande de devis</h1>
    <p><?= htmlspecialchars($response['message'], ENT_QUOTES) ?></p>
    <a href="/fr/home">Retour</a>
</body>
</html>
