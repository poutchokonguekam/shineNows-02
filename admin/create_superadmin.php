<?php
declare(strict_types=1);

// TODO: désactiver ce script après première utilisation.
require_once __DIR__ . '/../includes/db_connect.php';

try {
    $stmt = $pdo->prepare('SELECT id FROM users WHERE username = :username LIMIT 1');
    $stmt->execute(['username' => 'superadmin']);
    $exists = $stmt->fetch();

    if ($exists) {
        echo 'Superadmin existe déjà.';
    } else {
        $hash = password_hash('ShineMaster2025!', PASSWORD_BCRYPT);
        $insert = $pdo->prepare('INSERT INTO users (username, password_hash, role) VALUES (:username, :password_hash, :role)');
        $insert->execute([
            'username' => 'superadmin',
            'password_hash' => $hash,
            'role' => 'superadmin',
        ]);
        echo 'Superadmin créé avec succès.';
    }
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
