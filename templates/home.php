<?php
$heroTitle = $pageContent['home_hero_title'] ?? '';
$heroText = $pageContent['home_hero_text'] ?? '';
$heroCta = $pageContent['home_hero_cta_label'] ?? 'Demander un devis';
$lang = $currentLangPrefix ?? 'fr';
$ctaHref = "/{$lang}/quote";
?>

<section class="hero" style="position:relative; overflow:hidden; border-radius:18px; background:linear-gradient(135deg, rgba(12,18,32,0.4), rgba(7,12,24,0.85)), url('/assets/images/hero-galaxy.jpg') center/cover no-repeat; color:#f5f3ef; padding:4rem 3rem; box-shadow:0 25px 60px rgba(0,0,0,0.35);">
    <div style="max-width:720px; position:relative; z-index:2;">
        <p style="letter-spacing:0.2em; text-transform:uppercase; color:#f7d046; font-weight:700; margin-bottom:0.6rem;">ShineNows Studio</p>
        <h1 style="font-size:2.8rem; margin:0 0 1rem; line-height:1.2;"><?= htmlspecialchars($heroTitle, ENT_QUOTES) ?></h1>
        <p style="font-size:1.1rem; color:#d7dbe6; margin-bottom:1.5rem;"><?= nl2br(htmlspecialchars($heroText, ENT_QUOTES)) ?></p>
        <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a class="cta-quote" href="<?= htmlspecialchars($ctaHref, ENT_QUOTES) ?>" style="text-decoration:none;"><?= htmlspecialchars($heroCta, ENT_QUOTES) ?></a>
            <a href="/<?= htmlspecialchars($lang, ENT_QUOTES) ?>/portfolio" style="color:#f7d046; font-weight:600; text-decoration:none; align-self:center;"><?= htmlspecialchars($langManager->t('home_view_work', 'Voir nos réalisations'), ENT_QUOTES) ?></a>
        </div>
    </div>
</section>

<section style="margin-top:3rem;">
    <div style="display:flex; align-items:flex-start; gap:1.5rem; flex-wrap:wrap;">
        <div style="flex:1 1 260px; background:rgba(255,255,255,0.02); border:1px solid rgba(247,208,70,0.15); border-radius:12px; padding:1.5rem;">
            <h2 style="margin-top:0; color:#f7d046; font-size:1.4rem;"><?= htmlspecialchars($langManager->t('home_services_title', 'Services premium'), ENT_QUOTES) ?></h2>
            <p style="color:#cfd3dd;"><?= htmlspecialchars($langManager->t('home_services_intro', 'Création de sites vitrines, e-commerce, branding et campagnes digitales sur mesure.'), ENT_QUOTES) ?></p>
            <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(160px,1fr)); gap:1rem; margin-top:1rem;">
                <div style="background:rgba(12,18,32,0.8); padding:1rem; border-radius:10px; border:1px solid rgba(247,208,70,0.12);">
                    <strong><?= htmlspecialchars($langManager->t('home_service_web', 'Sites web & e-commerce'), ENT_QUOTES) ?></strong>
                    <p style="color:#9ba3b5; margin:0.35rem 0 0;">UX/UI, développement full stack, performance.</p>
                </div>
                <div style="background:rgba(12,18,32,0.8); padding:1rem; border-radius:10px; border:1px solid rgba(247,208,70,0.12);">
                    <strong><?= htmlspecialchars($langManager->t('home_service_brand', 'Branding & identité'), ENT_QUOTES) ?></strong>
                    <p style="color:#9ba3b5; margin:0.35rem 0 0;">Chartes premium, motion graphics, guidelines.</p>
                </div>
                <div style="background:rgba(12,18,32,0.8); padding:1rem; border-radius:10px; border:1px solid rgba(247,208,70,0.12);">
                    <strong><?= htmlspecialchars($langManager->t('home_service_growth', 'Growth & performance'), ENT_QUOTES) ?></strong>
                    <p style="color:#9ba3b5; margin:0.35rem 0 0;">SEO, campagnes ads, automatisations CRM.</p>
                </div>
            </div>
        </div>
        <div style="flex:0 1 320px; background:linear-gradient(140deg, rgba(247,208,70,0.18), rgba(247,208,70,0.05)); border:1px solid rgba(247,208,70,0.35); border-radius:12px; padding:1.5rem; box-shadow:0 10px 32px rgba(247,208,70,0.2);">
            <h3 style="margin-top:0; color:#0c1220;"><?= htmlspecialchars($langManager->t('home_cta_title', 'Prêt à lancer votre projet ?'), ENT_QUOTES) ?></h3>
            <p style="color:#0c1220;"><?= htmlspecialchars($langManager->t('home_cta_text', 'Discutons de votre prochaine expérience digitale avec l’équipe ShineNows.'), ENT_QUOTES) ?></p>
            <a class="cta-quote" href="<?= htmlspecialchars($ctaHref, ENT_QUOTES) ?>" style="display:inline-block; margin-top:0.5rem; text-decoration:none;"><?= htmlspecialchars($langManager->t('home_cta_button', 'Programmer un appel'), ENT_QUOTES) ?></a>
        </div>
    </div>
</section>

<section style="margin-top:3rem;">
    <div style="display:flex; justify-content:space-between; align-items:flex-end; gap:1rem; flex-wrap:wrap;">
        <div>
            <p style="letter-spacing:0.16em; color:#f7d046; text-transform:uppercase; font-weight:700; margin:0 0 0.4rem;"><?= htmlspecialchars($langManager->t('home_portfolio_kicker', 'Sélection'), ENT_QUOTES) ?></p>
            <h2 style="margin:0; font-size:2rem; color:#f5f3ef;"><?= htmlspecialchars($langManager->t('home_portfolio_title', 'Nos réalisations récentes'), ENT_QUOTES) ?></h2>
        </div>
        <a href="/<?= htmlspecialchars($lang, ENT_QUOTES) ?>/portfolio" style="color:#f7d046; text-decoration:none; font-weight:700;"><?= htmlspecialchars($langManager->t('home_portfolio_button', 'Voir toutes les réalisations'), ENT_QUOTES) ?> →</a>
    </div>
    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:1.2rem; margin-top:1.5rem;">
        <?php
        $projects = [
            ['title' => 'ShineNows Agency', 'desc' => 'Refonte immersive avec animation 3D légère.'],
            ['title' => 'ShineNows Restaurant', 'desc' => 'Site gourmand avec réservation en ligne.'],
            ['title' => 'Cabinet Gloria', 'desc' => 'Identité élégante pour cabinet de conseil.'],
        ];
        foreach ($projects as $project):
        ?>
            <article style="background:rgba(255,255,255,0.02); border:1px solid rgba(247,208,70,0.14); border-radius:12px; padding:1.1rem; box-shadow:0 10px 24px rgba(0,0,0,0.2);">
                <div style="height:150px; border-radius:10px; background:linear-gradient(135deg, rgba(247,208,70,0.25), rgba(12,18,32,0.9)); margin-bottom:0.9rem;"></div>
                <h3 style="margin:0 0 0.4rem; color:#f5f3ef;"><?= htmlspecialchars($project['title'], ENT_QUOTES) ?></h3>
                <p style="margin:0 0 0.8rem; color:#cfd3dd;"><?= htmlspecialchars($project['desc'], ENT_QUOTES) ?></p>
                <a href="/<?= htmlspecialchars($lang, ENT_QUOTES) ?>/portfolio" style="color:#f7d046; text-decoration:none; font-weight:600;"><?= htmlspecialchars($langManager->t('home_project_view', 'Voir le projet'), ENT_QUOTES) ?></a>
            </article>
        <?php endforeach; ?>
    </div>
</section>
