<?php
// Layout global ShineNows V5
$safeLangPrefix = $currentLangPrefix ?? 'fr';
$safeSeoTitle = $seoTitle ?? 'ShineNows';
$safeSeoDescription = $seoDescription ?? '';

if (!isset($currentSlug)) {
    $uriPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $segments = array_values(array_filter(explode('/', trim($uriPath, '/'))));
    $currentSlug = $segments[1] ?? 'home';
}
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

    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<header>
    <div class="logo">
        <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/home">
            <img src="/assets/images/shineNews-logo-long.webp" alt="ShineNows">
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
        <a href="/fr/home" class="<?= ($safeLangPrefix ?? 'fr') === 'fr' ? 'active' : '' ?>">FR</a>
        <a href="/en/home" class="<?= ($safeLangPrefix ?? 'fr') === 'en' ? 'active' : '' ?>">EN</a>
        <a href="/de/home" class="<?= ($safeLangPrefix ?? 'fr') === 'de' ? 'active' : '' ?>">DE</a>
    </div>
</header>

<div class="page-wrapper">
    <?php include $viewFile; ?>
</div>

<footer>
    <div class="footer-grid">
        <div class="footer-col">
            <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/home">
                <img src="/assets/images/shineNews-logo.webp" alt="ShineNows" class="footer-logo">
            </a>
            <p>Agence digitale premium dédiée aux marques ambitieuses.</p>
        </div>

        <div class="footer-col">
            <h4>Navigation</h4>
            <ul>
                <li><a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/home">Accueil</a></li>
                <li><a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/services">Services</a></li>
                <li><a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/portfolio">Réalisations</a></li>
                <li><a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/contact">Contact</a></li>
                <li><a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/quote">Demander un devis</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Contact</h4>

            <ul>

                <!-- WhatsApp icon cliquable + numéro non cliquable -->
                <li style="display:flex; align-items:center; gap:10px;">
                    <a href="https://wa.me/4915738306056"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="color:#25D366; font-size:1.4rem;">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <span style="color:white; font-size:0.95rem;">+49 1573 830 6056</span>
                </li>

                <!-- Email NON cliquable -->
                <li style="margin-top:10px;">
                    <span style="color:white; font-size:0.95rem;">infos@shinenows.com</span>
                </li>

            </ul>

            <!-- Réseaux sociaux avec liens réels -->
            <div class="social-icons" style="margin-top:20px; display:flex; gap:15px;">

                <a href="https://www.facebook.com/shinenows"
                   target="_blank"
                   rel="noopener noreferrer">
                    <i class="fab fa-facebook"></i>
                </a>

                <a href="https://www.instagram.com/shinenows/"
                   target="_blank"
                   rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://www.behance.net"
                   target="_blank"
                   rel="noopener noreferrer">
                    <i class="fab fa-behance"></i>
                </a>

            </div>
        </div>
    </div>

    <div class="copyright">
        © <?= date('Y') ?> ShineNows. Tous droits réservés.
    </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
