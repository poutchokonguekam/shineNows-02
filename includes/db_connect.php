<?php
declare(strict_types=1);

$host = '127.0.0.1';
$db = 'u262981437_shinenows2db';
$user = 'u262981437_shinenows2';
$pass = 'Shinenows2025'; // mot de passe réel MySQL Hostinger
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Erreur connexion BDD : " . $e->getMessage());
}
