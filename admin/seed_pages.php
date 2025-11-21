<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../app/Classes/Page.php';

$pageModel = new Page($pdo);

$pages = [
    ['slug' => 'home', 'template' => 'home.php'],
    ['slug' => 'services', 'template' => 'services.php'],
    ['slug' => 'portfolio', 'template' => 'portfolio.php'],
    ['slug' => 'contact', 'template' => 'contact.php'],
    ['slug' => 'quote', 'template' => 'quote.php'],
];

foreach ($pages as $p) {
    $pageModel->insertIfNotExists($p['slug'], $p['template'], true, null);
}

echo "Pages de base insérées/actualisées.";
