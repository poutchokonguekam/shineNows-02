<?php
declare(strict_types=1);

require_once __DIR__ . '/../app/Classes/LanguageManager.php';

$langPrefixMap = [
    'fr' => 'fr_FR',
    'en' => 'en_US',
    'de' => 'de_DE',
];

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$segments = array_values(array_filter(explode('/', trim($path, '/'))));
$prefix = $segments[0] ?? 'fr';

if (!isset($langPrefixMap[$prefix])) {
    $prefix = substr(DEFAULT_LANG, 0, 2);
}

$selectedLang = $langPrefixMap[$prefix];
$_SESSION['lang'] = $selectedLang;

$languageManager = new LanguageManager($selectedLang, LOCALE_PATH);
$translations = $languageManager->getTranslations();
$currentLang = $languageManager->getCurrentLang();
$currentLangPrefix = substr($currentLang, 0, 2);
