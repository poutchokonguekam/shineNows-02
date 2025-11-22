<?php // Page d'accueil ShineNows V5 ?>

<section class="hero-section">
    <div class="hero-slider">

        <!-- Slide 1 -->
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

        <!-- Slide 2 -->
        <div class="slide">
            <img src="/assets/images/slide-image-02.webp" alt="Slide 2" class="slide-bg">
            <div class="slide-content">
                <h1><?= htmlspecialchars($pageContent['home_slide2_title'] ?? 'Performance & Innovation', ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="hero-subtitle">
                    <?= htmlspecialchars($pageContent['home_slide2_text'] ?? 'Des sites rapides, modernes et optimisés pour convertir.', ENT_QUOTES, 'UTF-8') ?>
                </p>
                <div class="hero-buttons">
                    <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/services" class="btn-fill">
                        <?= htmlspecialchars($pageContent['home_slide2_cta'] ?? 'Découvrir nos services', ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
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
            <p>UX/UI, développement full-stack et tunnels optimisés pour la conversion.</p>
        </div>
        <div class="card">
            <h3 class="text-gold">Branding & identité</h3>
            <p>Logos, chartes graphiques et univers de marque haut de gamme.</p>
        </div>
        <div class="card">
            <h3 class="text-gold">Growth & performance</h3>
            <p>SEO, campagnes Ads, automatisations CRM pour scaler vos résultats.</p>
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
            <p>Refonte immersive avec animations et identité renforcée.</p>
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
            <p>Identité élégante pour un cabinet de conseil.</p>
            <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/portfolio" class="card-link">Voir le projet</a>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="cta-card">
        <div class="home-call-block">
            <h3><?= htmlspecialchars($pageContent['home_cta_title'] ?? 'Prêt à lancer votre projet ?', ENT_QUOTES, 'UTF-8') ?></h3>
            <p><?= htmlspecialchars($pageContent['home_cta_text'] ?? 'Discutons de votre prochaine expérience digitale avec l’équipe ShineNows.', ENT_QUOTES, 'UTF-8') ?></p>
            <a href="/<?= htmlspecialchars($currentLangPrefix ?? 'fr', ENT_QUOTES, 'UTF-8') ?>/quote" class="btn-fill">
                <?= htmlspecialchars($pageContent['home_cta_button'] ?? 'Programmer un appel', ENT_QUOTES, 'UTF-8') ?>
            </a>
        </div>
    </div>
</section>

<section class="reviews-section">
    <div class="page-wrapper reviews-wrapper">
        <div class="section-title">
            <span>Satisfaction</span>
            <h2>Ils nous font confiance</h2>
        </div>

        <div class="reviews-slider">
            <button class="reviews-nav reviews-prev" aria-label="Avis précédent">‹</button>

            <div class="reviews-track">
                <!-- Avis 1 -->
                <article class="review-card">
                    <div class="review-stars" aria-label="5 étoiles">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="review-text">
                        « Service rapide et professionnel. Mon site est magnifique ! »
                    </p>
                    <p class="review-author">Jean M.</p>
                </article>

                <!-- Avis 2 -->
                <article class="review-card">
                    <div class="review-stars" aria-label="5 étoiles">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="review-text">
                        « Très satisfaite du résultat. Équipe à l’écoute et efficace. »
                    </p>
                    <p class="review-author">Fatou K.</p>
                </article>

                <!-- Avis 3 -->
                <article class="review-card">
                    <div class="review-stars" aria-label="5 étoiles">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="review-text">
                        « Accompagnement clair et pro de A à Z. Nous recommandons ShineNows. »
                    </p>
                    <p class="review-author">Martin & Co.</p>
                </article>

                <!-- Avis 4 -->
                <article class="review-card">
                    <div class="review-stars" aria-label="5 étoiles">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="review-text">
                        « Résultat premium et délai respecté. Le site est fluide et performant. »
                    </p>
                    <p class="review-author">Sarah L.</p>
                </article>
            </div>

            <button class="reviews-nav reviews-next" aria-label="Avis suivant">›</button>
        </div>
    </div>
</section>
