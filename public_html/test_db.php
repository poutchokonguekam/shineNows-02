<?php
require __DIR__ . '/includes/db_connect.php';

try {
    $stmt = $pdo->query('SHOW TABLES');
    $tables = $stmt->fetchAll();

    echo '<pre>';
    print_r($tables);
    echo '</pre>';
} catch (Exception $e) {
    echo '❌ Erreur : ' . $e->getMessage();
}
