<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES) ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageData['title'] ?? 'ShineNows', ENT_QUOTES) ?></title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <main>
        <?php if (isset($viewFile) && is_file($viewFile)) {
            include $viewFile;
        } ?>
    </main>
    <script src="/assets/js/main.js"></script>
</body>
</html>
