<?php
declare(strict_types=1);

require_once __DIR__ . '/auth_check.php';

header('Content-Type: application/json');

echo json_encode([
    'success' => true,
    'message' => 'Contenu enregistré (simulation).',
]);
