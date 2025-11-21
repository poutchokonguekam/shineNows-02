<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/app/Classes/Page.php';
require_once __DIR__ . '/app/Classes/Content.php';
require_once __DIR__ . '/app/Functions/helpers.php';
require_once __DIR__ . '/includes/language_init.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/', '/');

if ($uri === '') {
    header('Location: /fr/');
    exit;
}

$segments = $uri === '' ? [] : explode('/', $uri);
$languageSegment = $segments[0] ?? 'fr';
$validSegments = ['fr', 'en', 'de'];

if (!in_array($languageSegment, $validSegments, true)) {
    http_response_code(404);
    $viewFile = __DIR__ . '/templates/error_404.php';
    $pageData = ['title' => '404'];
    $contentData = ['body' => ''];
    include __DIR__ . '/templates/layout.php';
    exit;
}

$slug = $segments[1] ?? '';
if ($slug === '') {
    header('Location: /' . $languageSegment . '/home');
    exit;
}

$page = new Page();
$content = new Content();
$pageData = $page->getPage($slug);
$contentData = $content->getContent($slug);
$viewFile = __DIR__ . '/templates/' . $slug . '.php';

if (!is_file($viewFile)) {
    http_response_code(404);
    $viewFile = __DIR__ . '/templates/error_404.php';
}

include __DIR__ . '/templates/layout.php';
