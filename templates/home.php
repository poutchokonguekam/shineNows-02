<?php
// templates/home.php - page d'accueil ShineNows avec hero slider + sections
$safeLangPrefix = $currentLangPrefix ?? 'fr';
?>
<section class="hero-section">
    <div class="hero-slider">
        <!-- SLIDE 1 -->
        <div class="slide active">
            <img src="/assets/images/slide-image-01.webp" alt="Slide 1" class="slide-bg">
            <div class="slide-content">
                <p class="hero-kicker">SHINENOWS STUDIO</p>
                <h1><?= htmlspecialchars($pageContent['home_hero_title'] ?? 'Bienvenue sur ShineNows', ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="hero-subtitle">
                    <?= htmlspecialchars($pageContent['home_hero_text'] ?? 'Découvrez ShineNows, votre partenaire digital.', ENT_QUOTES, 'UTF-8') ?>
                </p>
                <div class="hero-buttons">
                    <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/quote" class="btn-fill">
                        <?= htmlspecialchars($pageContent['home_hero_cta_primary'] ?? 'Demander un devis', ENT_QUOTES, 'UTF-8') ?>
                    </a>
                    <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/portfolio" class="btn-outline">
                        <?= htmlspecialchars($pageContent['home_hero_cta_secondary'] ?? 'Voir nos réalisations', ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="slide">
            <img src="/assets/images/slide-image-02.webp" alt="Slide 2" class="slide-bg">
            <div class="slide-content">
                <h1><?= htmlspecialchars($pageContent['home_slide2_title'] ?? 'Performance & Innovation', ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="hero-subtitle">
                    <?= htmlspecialchars($pageContent['home_slide2_text'] ?? 'Boostez votre chiffre d’affaires avec le e-commerce premium.', ENT_QUOTES, 'UTF-8') ?>
                </p>
                <div class="hero-buttons">
                    <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/services" class="btn-fill">
                        <?= htmlspecialchars($pageContent['home_slide2_cta'] ?? 'Voir nos services', ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="slide">
            <img src="/assets/images/slide-image-03.webp" alt="Slide 3" class="slide-bg">
            <div class="slide-content">
                <h1><?= htmlspecialchars($pageContent['home_slide3_title'] ?? 'Créativité & Technologie', ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="hero-subtitle">
                    <?= htmlspecialchars($pageContent['home_slide3_text'] ?? 'Des solutions digitales haut de gamme pour votre marque.', ENT_QUOTES, 'UTF-8') ?>
                </p>
                <div class="hero-buttons">
                    <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/quote" class="btn-fill">
                        <?= htmlspecialchars($pageContent['home_slide3_cta'] ?? 'Programmer un appel', ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="slider-nav prev">&#10094;</div>
        <div class="slider-nav next">&#10095;</div>
        <div class="slider-dots"></div>
    </div>
</section>

<section class="services-section">
    <div class="section-title">
        <span><?= htmlspecialchars($pageContent['home_services_kicker'] ?? 'Services premium', ENT_QUOTES, 'UTF-8') ?></span>
        <h2><?= htmlspecialchars($pageContent['home_services_title'] ?? 'Nos expertises digitales', ENT_QUOTES, 'UTF-8') ?></h2>
    </div>
    <div class="grid-3">
        <div class="card">
            <h3 class="text-gold"><?= htmlspecialchars($pageContent['home_services_card1_title'] ?? 'Sites web & e-commerce', ENT_QUOTES, 'UTF-8') ?></h3>
            <p><?= htmlspecialchars($pageContent['home_services_card1_text'] ?? 'UX/UI, développement full stack, performance.', ENT_QUOTES, 'UTF-8') ?></p>
        </div>
        <div class="card">
            <h3 class="text-gold"><?= htmlspecialchars($pageContent['home_services_card2_title'] ?? 'Branding & identité', ENT_QUOTES, 'UTF-8') ?></h3>
            <p><?= htmlspecialchars($pageContent['home_services_card2_text'] ?? 'Chartes premium, motion graphics, guidelines.', ENT_QUOTES, 'UTF-8') ?></p>
        </div>
        <div class="card">
            <h3 class="text-gold"><?= htmlspecialchars($pageContent['home_services_card3_title'] ?? 'Growth & performance', ENT_QUOTES, 'UTF-8') ?></h3>
            <p><?= htmlspecialchars($pageContent['home_services_card3_text'] ?? 'SEO, campagnes ads, automatisations CRM.', ENT_QUOTES, 'UTF-8') ?></p>
        </div>
    </div>
</section>

<section class="portfolio-section">
    <div class="section-title section-title-inline">
        <div>
            <span><?= htmlspecialchars($pageContent['home_portfolio_kicker'] ?? 'Sélection', ENT_QUOTES, 'UTF-8') ?></span>
            <h2><?= htmlspecialchars($pageContent['home_portfolio_title'] ?? 'Nos réalisations récentes', ENT_QUOTES, 'UTF-8') ?></h2>
        </div>
        <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/portfolio" class="link-inline">
            <?= htmlspecialchars($pageContent['home_portfolio_link_all'] ?? 'Voir toutes les réalisations →', ENT_QUOTES, 'UTF-8') ?>
        </a>
    </div>

    <div class="grid-3">
        <div class="card">
            <img src="/assets/images/project-01.webp" alt="ShineNows Agency">
            <h3 class="text-gold">ShineNows Agency</h3>
            <p>Refonte immersive avec animation 3D légère.</p>
            <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/portfolio" class="link-inline">
                <?= htmlspecialchars($pageContent['home_portfolio_item1_cta'] ?? 'Voir le projet', ENT_QUOTES, 'UTF-8') ?>
            </a>
        </div>
        <div class="card">
            <img src="/assets/images/project-02.webp" alt="ShineNows Restaurant">
            <h3 class="text-gold">ShineNows Restaurant</h3>
            <p>Site gourmand avec réservation en ligne.</p>
            <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/portfolio" class="link-inline">
                <?= htmlspecialchars($pageContent['home_portfolio_item2_cta'] ?? 'Voir le projet', ENT_QUOTES, 'UTF-8') ?>
            </a>
        </div>
        <div class="card">
            <img src="/assets/images/project-03.webp" alt="Cabinet Gloria">
            <h3 class="text-gold">Cabinet Gloria</h3>
            <p>Identité élégante pour cabinet de conseil.</p>
            <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/portfolio" class="link-inline">
                <?= htmlspecialchars($pageContent['home_portfolio_item3_cta'] ?? 'Voir le projet', ENT_QUOTES, 'UTF-8') ?>
            </a>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="cta-card">
        <h3><?= htmlspecialchars($pageContent['home_cta_title'] ?? 'Prêt à lancer votre projet ?', ENT_QUOTES, 'UTF-8') ?></h3>
        <p><?= htmlspecialchars($pageContent['home_cta_text'] ?? 'Discutons de votre prochaine expérience digitale avec l’équipe ShineNows.', ENT_QUOTES, 'UTF-8') ?></p>
        <a href="/<?= htmlspecialchars($safeLangPrefix, ENT_QUOTES, 'UTF-8') ?>/quote" class="btn-fill">
            <?= htmlspecialchars($pageContent['home_cta_button'] ?? 'Programmer un appel', ENT_QUOTES, 'UTF-8') ?>
        </a>
    </div>
</section>
