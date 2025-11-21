<?php
// templates/layout.php - Layout global ShineNows CMS

$safeLangPrefix = $currentLangPrefix ?? 'fr';
$safeSeoTitle = $seoTitle ?? 'ShineNows';
$safeSeoDescription = $seoDescription ?? '';

// Déduire le slug courant pour activer les liens de navigation
$uriPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$segments = array_values(array_filter(explode('/', trim($uriPath, '/'))));
$currentSlug = $currentSlug ?? ($segments[1] ?? 'home');
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($safeSeoTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <?php if (!empty($safeSeoDescription)): ?>
        <meta name="description" content="<?= htmlspecialchars($safeSeoDescription, ENT_QUOTES, 'UTF-8') ?>">
    <?php endif; ?>

    <!-- CSS principal du user : NE PAS MODIFIER -->
    <link rel="stylesheet" href="/assets/css/styles.css">

    <!-- Icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/home">
                <img src="/assets/images/shineNews-logo-long.webp" alt="Logo ShineNows">
            </a>
        </div>

        <nav class="nav-links">
            <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/home"
               class="<?= ($currentSlug ?? '') === 'home' ? 'active' : '' ?>">
                <?= htmlspecialchars($langManager->t('menu_home', 'Accueil'), ENT_QUOTES, 'UTF-8') ?>
            </a>
            <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/services"
               class="<?= ($currentSlug ?? '') === 'services' ? 'active' : '' ?>">
                <?= htmlspecialchars($langManager->t('menu_services', 'Services'), ENT_QUOTES, 'UTF-8') ?>
            </a>
            <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/portfolio"
               class="<?= ($currentSlug ?? '') === 'portfolio' ? 'active' : '' ?>">
                <?= htmlspecialchars($langManager->t('menu_portfolio', 'Réalisations'), ENT_QUOTES, 'UTF-8') ?>
            </a>
            <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/contact"
               class="<?= ($currentSlug ?? '') === 'contact' ? 'active' : '' ?>">
                <?= htmlspecialchars($langManager->t('menu_contact', 'Contact'), ENT_QUOTES, 'UTF-8') ?>
            </a>
            <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/quote" class="btn-gold">
                <?= htmlspecialchars($langManager->t('menu_quote', 'Demander un devis'), ENT_QUOTES, 'UTF-8') ?>
            </a>
        </nav>

        <div class="lang-selector">
            <a href="/fr/home" class="<?= $safeLangPrefix === 'fr' ? 'active' : '' ?>">FR</a> |
            <a href="/en/home" class="<?= $safeLangPrefix === 'en' ? 'active' : '' ?>">EN</a> |
            <a href="/de/home" class="<?= $safeLangPrefix === 'de' ? 'active' : '' ?>">DE</a>
        </div>
    </header>

    <div class="page-wrapper">
        <?php include $viewFile; ?>
    </div>

    <footer>
        <div class="footer-columns">

            <div>
                <img src="/assets/images/shineNews-logo.webp" alt="ShineNows" class="footer-logo">
                <p>Agence digitale premium dédiée aux marques ambitieuses.</p>
            </div>

            <div>
                <h4>Navigation</h4>
                <ul>
                    <li><a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/home">Accueil</a></li>
                    <li><a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/services">Services</a></li>
                    <li><a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/portfolio">Réalisations</a></li>
                    <li><a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/contact">Contact</a></li>
                    <li><a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/quote">Demander un devis</a></li>
                </ul>
            </div>

            <div>
                <h4>Contact</h4>
                <p>WhatsApp : +49 1573 830 6056</p>
                <p>Email : infos@shinenows.com</p>
                <p>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                </p>
            </div>
        </div>

        <div class="footer-bottom">
            © <?= date('Y') ?> ShineNows. Tous droits réservés.
        </div>
    </footer>

    <!-- JS principal du user -->
    <script src="/assets/js/main.js"></script>

</body>
</html>
