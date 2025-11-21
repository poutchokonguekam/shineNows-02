<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/language_init.php';
require_once __DIR__ . '/app/Classes/Page.php';
require_once __DIR__ . '/app/Classes/Content.php';

// Connexion PDO déjà dispo via config.php -> includes/db_connect.php
global $pdo;

// Récupération de l'URI
$uriPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$segments = array_values(array_filter(explode('/', trim($uriPath, '/'))));

$langPrefix = $currentLangPrefix;

// Gestion des cas /, /fr, /en, /de
if (count($segments) === 0 || (count($segments) === 1 && in_array($segments[0], ['fr', 'en', 'de'], true))) {
    // Rediriger vers /{lang}/home (lang par défaut = fr)
    $prefix = $segments[0] ?? 'fr';
    if (!in_array($prefix, ['fr', 'en', 'de'], true)) {
        $prefix = 'fr';
    }
    header("Location: /{$prefix}/home");
    exit;
}

// Premier segment = langue
$langPrefix = $segments[0];
if (!in_array($langPrefix, ['fr', 'en', 'de'], true)) {
    // langue inconnue → 404
    http_response_code(404);
    require __DIR__ . '/templates/error_404.php';
    exit;
}

// Slug (deuxième segment)
$slug = $segments[1] ?? 'home';

$pageModel = new Page($pdo);
$contentModel = new Content($pdo);

$page = $pageModel->getBySlug($slug);

if (!$page || (isset($page['is_active']) && (int) $page['is_active'] !== 1)) {
    http_response_code(404);
    require __DIR__ . '/templates/error_404.php';
    exit;
}

// Charger le contenu dynamique
$pageData = $contentModel->getPageData((int) $page['id'], $currentLangCode);

$pageContent = $pageData['content'] ?? [];
$seoTitle = $pageData['seo']['title'] ?? ('ShineNows - ' . ucfirst($slug));
$seoDescription = $pageData['seo']['description'] ?? '';
$pageData['title'] = $seoTitle;

// Fichier de vue
$viewFile = __DIR__ . '/templates/' . ($page['template_file'] ?? 'home.php');
if (!is_file($viewFile)) {
    http_response_code(404);
    require __DIR__ . '/templates/error_404.php';
    exit;
}

// Rendre via layout
require __DIR__ . '/templates/layout.php';
