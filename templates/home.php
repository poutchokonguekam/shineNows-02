<?php // templates/home.php - Accueil ShineNows ?>

<section class="hero-section">
    <div class="hero-slider">

        <!-- SLIDE 1 -->
        <div class="slide active">
            <img src="/assets/images/slide-image-01.webp" alt="Slide 1" class="slide-bg">
            <div class="slide-content">
                <p class="hero-kicker">SHINENOWS STUDIO</p>
                <h1><?= htmlspecialchars($pageContent['home_hero_title'] ?? 'Boostez votre présence digitale', ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="hero-subtitle">
                    <?= htmlspecialchars($pageContent['home_hero_text'] ?? 'Des expériences digitales sur mesure pour les marques ambitieuses.', ENT_QUOTES, 'UTF-8') ?>
                </p>
                <div class="hero-buttons">
                    <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/quote" class="btn-fill">
                        <?= htmlspecialchars($pageContent['home_hero_cta_primary'] ?? 'Demander un devis', ENT_QUOTES, 'UTF-8') ?>
                    </a>
                    <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/portfolio" class="btn-gold">
                        <?= htmlspecialchars($pageContent['home_hero_cta_secondary'] ?? 'Voir nos réalisations', ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="slide">
            <img src="/assets/images/slide-image-02.webp" alt="Slide 2" class="slide-bg">
            <div class="slide-content">
                <h1><?= htmlspecialchars($pageContent['home_slide2_title'] ?? 'Design & Performance', ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="hero-subtitle">
                    <?= htmlspecialchars($pageContent['home_slide2_text'] ?? 'Sites rapides, modernes, optimisés pour la conversion.', ENT_QUOTES, 'UTF-8') ?>
                </p>
                <div class="hero-buttons">
                    <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/services" class="btn-fill">
                        <?= htmlspecialchars($pageContent['home_slide2_cta'] ?? 'Découvrir nos services', ENT_QUOTES, 'UTF-8') ?>
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
                    <?= htmlspecialchars($pageContent['home_slide3_text'] ?? 'Nous construisons des expériences digitales haut de gamme.', ENT_QUOTES, 'UTF-8') ?>
                </p>
                <div class="hero-buttons">
                    <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/quote" class="btn-fill">
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
        <span>Services premium</span>
        <h2>Nos expertises digitales</h2>
    </div>

    <div class="grid-3">
        <div class="card">
            <h3 class="text-gold">Sites web & e-commerce</h3>
            <p>UX/UI, développement, tunnels optimisés pour convertir vos visiteurs en clients.</p>
        </div>
        <div class="card">
            <h3 class="text-gold">Branding & identité</h3>
            <p>Logos, chartes graphiques et univers de marque haut de gamme.</p>
        </div>
        <div class="card">
            <h3 class="text-gold">Growth & performance</h3>
            <p>SEO, Ads, automatisations CRM pour scaler vos résultats.</p>
        </div>
    </div>
</section>

<section class="portfolio-section">
    <div class="section-title">
        <span>Sélection</span>
        <h2>Nos réalisations récentes</h2>
    </div>

    <div class="grid-3">
        <div class="card">
            <img src="/assets/images/project-01.webp" alt="ShineNows Agency">
            <h3 class="text-gold">ShineNows Agency</h3>
            <p>Refonte immersive avec animations subtiles et identité renforcée.</p>
            <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/portfolio" class="card-link">Voir le projet</a>
        </div>
        <div class="card">
            <img src="/assets/images/project-02.webp" alt="ShineNows Restaurant">
            <h3 class="text-gold">ShineNows Restaurant</h3>
            <p>Expérience digitale gourmande avec réservation en ligne.</p>
            <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/portfolio" class="card-link">Voir le projet</a>
        </div>
        <div class="card">
            <img src="/assets/images/project-03.webp" alt="Cabinet Gloria">
            <h3 class="text-gold">Cabinet Gloria</h3>
            <p>Identité élégante pour un cabinet de conseil moderne.</p>
            <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/portfolio" class="card-link">Voir le projet</a>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="cta-card">
        <h3><?= htmlspecialchars($pageContent['home_cta_title'] ?? 'Prêt à lancer votre projet ?', ENT_QUOTES, 'UTF-8') ?></h3>
        <p><?= htmlspecialchars($pageContent['home_cta_text'] ?? 'Discutons de votre prochaine expérience digitale avec l’équipe ShineNows.', ENT_QUOTES, 'UTF-8') ?></p>
        <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/quote" class="btn-fill">
            <?= htmlspecialchars($pageContent['home_cta_button'] ?? 'Programmer un appel', ENT_QUOTES, 'UTF-8') ?>
        </a>
    </div>
</section>
