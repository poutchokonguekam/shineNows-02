<?php
declare(strict_types=1);

$pageTitle = $seoTitle ?? 'ShineNows';
$pageDescription = $seoDescription ?? '';

// Déterminer le slug courant pour les liens de langue
$uriPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$segments = array_values(array_filter(explode('/', trim($uriPath, '/'))));
$currentSlug = $segments[1] ?? 'home';

$menuItems = [
    ['key' => 'menu_home', 'label' => 'Accueil', 'slug' => 'home'],
    ['key' => 'menu_services', 'label' => 'Services', 'slug' => 'services'],
    ['key' => 'menu_portfolio', 'label' => 'Réalisations', 'slug' => 'portfolio'],
    ['key' => 'menu_contact', 'label' => 'Contact', 'slug' => 'contact'],
];
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES) ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
    <?php if (!empty($pageDescription)) : ?>
        <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES) ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <style>
        body {
            margin: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: radial-gradient(circle at 20% 20%, rgba(255,215,0,0.1), transparent 35%), #0c1220;
            color: #f5f3ef;
            min-height: 100vh;
        }
        .layout-shell {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header.site-header {
            position: sticky;
            top: 0;
            z-index: 20;
            background: rgba(7, 12, 24, 0.96);
            backdrop-filter: blur(6px);
            border-bottom: 1px solid rgba(255, 215, 0, 0.25);
        }
        .header-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            color: #f7d046;
            text-decoration: none;
        }
        .brand img {
            height: 42px;
            width: 42px;
            object-fit: contain;
        }
        nav.main-nav {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
        }
        nav.main-nav a {
            color: #f5f3ef;
            text-decoration: none;
            padding: 0.6rem 0.9rem;
            border-radius: 999px;
            transition: all 0.2s ease;
            font-weight: 600;
        }
        nav.main-nav a:hover,
        nav.main-nav a:focus-visible {
            color: #0c1220;
            background: #f7d046;
            outline: none;
        }
        .cta-quote {
            background: linear-gradient(120deg, #f7d046, #c6a018);
            color: #0c1220;
            padding: 0.65rem 1.2rem;
            border-radius: 999px;
            font-weight: 700;
            text-decoration: none;
            border: 1px solid rgba(255, 215, 0, 0.7);
            box-shadow: 0 8px 20px rgba(247, 208, 70, 0.25);
        }
        .cta-quote:hover,
        .cta-quote:focus-visible {
            transform: translateY(-1px);
            box-shadow: 0 12px 24px rgba(247, 208, 70, 0.35);
            color: #0c1220;
        }
        .lang-switch {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.95rem;
            color: #cfd3dd;
        }
        .lang-switch a {
            color: #cfd3dd;
            text-decoration: none;
            padding: 0.3rem 0.55rem;
            border-radius: 6px;
            transition: background 0.2s ease, color 0.2s ease;
        }
        .lang-switch a.active {
            background: rgba(247, 208, 70, 0.12);
            color: #f7d046;
            border: 1px solid rgba(247, 208, 70, 0.35);
        }
        .lang-switch a:hover,
        .lang-switch a:focus-visible {
            background: rgba(247, 208, 70, 0.18);
            color: #f7d046;
            outline: none;
        }
        main {
            flex: 1;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1.5rem 3rem;
        }
        footer.site-footer {
            background: #070c18;
            border-top: 1px solid rgba(255, 215, 0, 0.2);
            padding: 2.5rem 1.5rem;
            color: #cfd3dd;
        }
        .footer-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }
        .footer-brand {
            font-weight: 700;
            color: #f7d046;
            letter-spacing: 0.05em;
        }
        .footer-nav,
        .footer-contact {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
        }
        .footer-nav a,
        .footer-contact a {
            color: #cfd3dd;
            text-decoration: none;
        }
        .footer-nav a:hover,
        .footer-contact a:hover,
        .footer-nav a:focus-visible,
        .footer-contact a:focus-visible {
            color: #f7d046;
            outline: none;
        }
        .footer-meta {
            text-align: center;
            margin-top: 1.5rem;
            color: #9ba3b5;
            font-size: 0.95rem;
        }
        @media (max-width: 768px) {
            nav.main-nav {
                width: 100%;
                justify-content: center;
            }
            .header-inner {
                flex-direction: column;
                align-items: flex-start;
            }
            .lang-switch {
                width: 100%;
                justify-content: flex-start;
            }
            main {
                padding: 1.5rem 1.1rem 2.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="layout-shell">
        <header class="site-header">
            <div class="header-inner">
                <a class="brand" href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES) ?>/home">
                    <img src="/assets/images/logo-shinenows.svg" alt="ShineNows" onerror="this.style.display='none';">
                    <span>ShineNows</span>
                </a>
                <nav class="main-nav" aria-label="Primary navigation">
                    <?php foreach ($menuItems as $item): ?>
                        <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES) ?>/<?= htmlspecialchars($item['slug'], ENT_QUOTES) ?>">
                            <?= htmlspecialchars($langManager->t($item['key'], $item['label']), ENT_QUOTES) ?>
                        </a>
                    <?php endforeach; ?>
                    <a class="cta-quote" href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES) ?>/quote">
                        <?= htmlspecialchars($langManager->t('menu_quote', 'Demander un devis'), ENT_QUOTES) ?>
                    </a>
                </nav>
                <div class="lang-switch" aria-label="Language switcher">
                    <?php
                    $languages = ['fr' => 'FR', 'en' => 'EN', 'de' => 'DE'];
                    foreach ($languages as $prefix => $label):
                        $targetSlug = $currentSlug ?: 'home';
                        $active = ($currentLangPrefix ?? 'fr') === $prefix;
                    ?>
                        <a href="/<?= $prefix ?>/<?= htmlspecialchars($targetSlug, ENT_QUOTES) ?>" class="<?= $active ? 'active' : '' ?>">
                            <?= $label ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </header>

        <main>
            <?php
            if (isset($viewFile) && is_file($viewFile)) {
                include $viewFile;
            }
            ?>
        </main>

        <footer class="site-footer">
            <div class="footer-inner">
                <div>
                    <div class="footer-brand">ShineNows</div>
                    <p><?= htmlspecialchars($langManager->t('footer_tagline', 'Agence digitale premium dédiée aux marques ambitieuses.'), ENT_QUOTES) ?></p>
                </div>
                <div class="footer-nav" aria-label="Footer navigation">
                    <strong><?= htmlspecialchars($langManager->t('footer_nav', 'Navigation'), ENT_QUOTES) ?></strong>
                    <?php foreach ($menuItems as $item): ?>
                        <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES) ?>/<?= htmlspecialchars($item['slug'], ENT_QUOTES) ?>">
                            <?= htmlspecialchars($langManager->t($item['key'], $item['label']), ENT_QUOTES) ?>
                        </a>
                    <?php endforeach; ?>
                    <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES) ?>/quote">
                        <?= htmlspecialchars($langManager->t('menu_quote', 'Demander un devis'), ENT_QUOTES) ?>
                    </a>
                </div>
                <div class="footer-contact">
                    <strong><?= htmlspecialchars($langManager->t('footer_contact', 'Contact'), ENT_QUOTES) ?></strong>
                    <a href="https://wa.me/495738306056" target="_blank" rel="noopener">WhatsApp : +49 1573 830 6056</a>
                    <a href="mailto:infos@shinenows.com">infos@shinenows.com</a>
                    <div><?= htmlspecialchars($langManager->t('footer_socials', 'Suivez-nous :'), ENT_QUOTES) ?> LinkedIn · Instagram · Behance</div>
                </div>
            </div>
            <div class="footer-meta">
                © <?= date('Y') ?> ShineNows. <?= htmlspecialchars($langManager->t('footer_rights', 'Tous droits réservés.'), ENT_QUOTES) ?>
            </div>
        </footer>
    </div>

    <script src="/assets/js/main.js"></script>
</body>
</html>
