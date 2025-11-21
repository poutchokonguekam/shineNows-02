<div class="hero-slider">

    <!-- SLIDE 1 -->
    <div class="slide active">
        <img src="/assets/images/slide-image-01.webp" class="slide-bg" alt="Slide 1">
        <div class="slide-content">
            <h1><?= htmlspecialchars($pageContent['home_hero_title'] ?? 'Bienvenue sur ShineNows', ENT_QUOTES) ?></h1>
            <p><?= htmlspecialchars($pageContent['home_hero_text'] ?? 'Découvrez ShineNows, votre partenaire digital.', ENT_QUOTES) ?></p>
            <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES) ?>/portfolio" class="btn-fill">
                <?= htmlspecialchars($pageContent['home_hero_cta_label'] ?? 'Voir nos réalisations', ENT_QUOTES) ?>
            </a>
        </div>
    </div>

    <!-- SLIDE 2 -->
    <div class="slide">
        <img src="/assets/images/slide-image-02.webp" class="slide-bg" alt="Slide 2">
        <div class="slide-content">
            <h1><?= htmlspecialchars($pageContent['home_slide2_title'] ?? 'Performance & Innovation', ENT_QUOTES) ?></h1>
            <p><?= htmlspecialchars($pageContent['home_slide2_text'] ?? 'Boostez votre présence digitale avec ShineNows.', ENT_QUOTES) ?></p>
            <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES) ?>/services" class="btn-fill">
                <?= htmlspecialchars($pageContent['home_slide2_cta'] ?? 'Voir nos services', ENT_QUOTES) ?>
            </a>
        </div>
    </div>

    <!-- SLIDE 3 -->
    <div class="slide">
        <img src="/assets/images/slide-image-03.webp" class="slide-bg" alt="Slide 3">
        <div class="slide-content">
            <h1><?= htmlspecialchars($pageContent['home_slide3_title'] ?? 'Créativité & Technologie', ENT_QUOTES) ?></h1>
            <p><?= htmlspecialchars($pageContent['home_slide3_text'] ?? 'Des solutions digitales haut de gamme.', ENT_QUOTES) ?></p>
            <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES) ?>/quote" class="btn-fill">
                <?= htmlspecialchars($pageContent['home_slide3_cta'] ?? 'Demander un devis', ENT_QUOTES) ?>
            </a>
        </div>
    </div>

    <div class="slider-nav prev">&#10094;</div>
    <div class="slider-nav next">&#10095;</div>
    <div class="slider-dots"></div>

</div>
