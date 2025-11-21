<?php
declare(strict_types=1);

require_once __DIR__ . '/../app/Classes/LanguageManager.php';

// Récupérer l'URL actuelle
$uriPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$segments = array_values(array_filter(explode('/', trim($uriPath, '/'))));

// Langue par défaut = fr
$langPrefix = $segments[0] ?? 'fr';
if (!in_array($langPrefix, ['fr', 'en', 'de'], true)) {
    $langPrefix = 'fr';
}

$langManager = new LanguageManager($langPrefix);
$currentLangPrefix = $langManager->getLangPrefix();
$currentLangCode = $langManager->getLangCode();
