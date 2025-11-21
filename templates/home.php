<?php // templates/home.php ?>

<section class="hero-section">
    <div class="hero-slider">

        <!-- SLIDE 1 -->
        <div class="slide active">
            <img src="/assets/images/slide-image-01.webp" class="slide-bg" alt="Slide 1">
            <div class="slide-content">
                <p class="hero-kicker">SHINENOWS STUDIO</p>
                <h1><?= htmlspecialchars($pageContent['home_hero_title'] ?? 'Boostez votre marque', ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="hero-subtitle">
                    <?= htmlspecialchars($pageContent['home_hero_text'] ?? 'Solutions digitales premium pour entreprises ambitieuses.', ENT_QUOTES, 'UTF-8') ?>
                </p>
                <div class="hero-buttons">
                    <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/quote" class="btn-fill">
                        <?= htmlspecialchars($pageContent['home_hero_cta_primary'] ?? 'Demander un devis', ENT_QUOTES, 'UTF-8') ?>
                    </a>
                    <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/portfolio" class="btn-outline">
                        <?= htmlspecialchars($pageContent['home_hero_cta_secondary'] ?? 'Voir nos réalisations', ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="slide">
            <img src="/assets/images/slide-image-02.webp" class="slide-bg" alt="Slide 2">
            <div class="slide-content">
                <h1><?= htmlspecialchars($pageContent['home_slide2_title'] ?? 'Design & Performance', ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="hero-subtitle">
                    <?= htmlspecialchars($pageContent['home_slide2_text'] ?? 'Des sites rapides, modernes, pensés pour convertir.', ENT_QUOTES, 'UTF-8') ?>
                </p>
                <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/services" class="btn-fill">
                    <?= htmlspecialchars($pageContent['home_slide2_cta'] ?? 'Voir nos services', ENT_QUOTES, 'UTF-8') ?>
                </a>
            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="slide">
            <img src="/assets/images/slide-image-03.webp" class="slide-bg" alt="Slide 3">
            <div class="slide-content">
                <h1><?= htmlspecialchars($pageContent['home_slide3_title'] ?? 'Créativité & Technologie', ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="hero-subtitle">
                    <?= htmlspecialchars($pageContent['home_slide3_text'] ?? 'Nous construisons l’avenir de votre marque.', ENT_QUOTES, 'UTF-8') ?>
                </p>
                <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/quote" class="btn-fill">
                    <?= htmlspecialchars($pageContent['home_slide3_cta'] ?? 'Programmer un appel', ENT_QUOTES, 'UTF-8') ?>
                </a>
            </div>
        </div>

        <div class="slider-nav prev">&#10094;</div>
        <div class="slider-nav next">&#10095;</div>
        <div class="slider-dots"></div>
    </div>
</section>


<!---------------------- SECTION SERVICES ------------------------>

<section class="services-section">
    <div class="section-title">
        <span>Services premium</span>
        <h2>Nos expertises digitales</h2>
    </div>

    <div class="grid-3">

        <div class="card">
            <h3 class="text-gold">Sites web & e-commerce</h3>
            <p>UX/UI, dev full-stack, conversions, tunnel optimisé.</p>
        </div>

        <div class="card">
            <h3 class="text-gold">Branding & Identité</h3>
            <p>Identité visuelle moderne, palette couleurs, logos premium.</p>
        </div>

        <div class="card">
            <h3 class="text-gold">Growth & Performance</h3>
            <p>SEO, Ads Meta/Google, automations CRM.</p>
        </div>

    </div>
</section>


<!---------------------- SECTION PORTFOLIO ------------------------>

<section class="portfolio-section">
    <div class="section-title section-title-inline">
        <div>
            <span>Sélection</span>
            <h2>Nos réalisations récentes</h2>
        </div>

        <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/portfolio" class="link-inline">
            Voir toutes les réalisations →
        </a>
    </div>

    <div class="grid-3">

        <div class="card">
            <img src="/assets/images/project-01.webp" alt="">
            <h3 class="text-gold">ShineNows Agency</h3>
            <p>Refonte immersive avec animation 3D.</p>
            <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/portfolio" class="link-inline">Voir le projet</a>
        </div>

        <div class="card">
            <img src="/assets/images/project-02.webp" alt="">
            <h3 class="text-gold">ShineNows Restaurant</h3>
            <p>Site gourmand avec réservation.</p>
            <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/portfolio" class="link-inline">Voir le projet</a>
        </div>

        <div class="card">
            <img src="/assets/images/project-03.webp" alt="">
            <h3 class="text-gold">Cabinet Gloria</h3>
            <p>Identité élégante pour cabinet de conseil.</p>
            <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/portfolio" class="link-inline">Voir le projet</a>
        </div>

    </div>
</section>


<!---------------------- SECTION CTA ------------------------>

<section class="cta-section">
    <div class="cta-card">
        <h3>Prêt à lancer votre projet </h3>
        <p>Construisons ensemble votre prochaine expérience digitale.</p>
        <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/quote" class="btn-fill">Programmer un appel</a>
    </div>
</section>
