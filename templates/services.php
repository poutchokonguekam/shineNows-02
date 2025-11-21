<?php
$title = $pageContent['services_intro_title'] ?? 'Services';
$intro = $pageContent['services_intro_text'] ?? '';
$lang = $currentLangPrefix ?? 'fr';
$services = [
    ['title' => 'Site & E-commerce', 'desc' => 'Conception UI/UX, intégration front-end & back-end, optimisation performance.'],
    ['title' => 'Branding premium', 'desc' => 'Identité visuelle, logo, guidelines, motion design pour marques ambitieuses.'],
    ['title' => 'Stratégie digitale', 'desc' => 'Campagnes ads, SEO/SEA, nurturing CRM, tableaux de bord décisionnels.'],
    ['title' => 'Product design', 'desc' => 'Design systems, prototypage interactif, tests utilisateurs.'],
];
?>

<section style="background:rgba(255,255,255,0.02); border:1px solid rgba(247,208,70,0.2); border-radius:16px; padding:2.4rem; box-shadow:0 18px 40px rgba(0,0,0,0.25);">
    <p style="letter-spacing:0.18em; color:#f7d046; text-transform:uppercase; font-weight:700; margin:0 0 0.5rem;"><?= htmlspecialchars($langManager->t('services_kicker', 'Offre complète'), ENT_QUOTES) ?></p>
    <h1 style="margin:0 0 0.75rem; font-size:2.2rem;"><?= htmlspecialchars($title, ENT_QUOTES) ?></h1>
    <p style="color:#cfd3dd; margin:0 0 1.8rem; max-width:760px;"><?= nl2br(htmlspecialchars($intro, ENT_QUOTES)) ?></p>
    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:1.2rem;">
        <?php foreach ($services as $service): ?>
            <article style="background:rgba(12,18,32,0.85); border:1px solid rgba(247,208,70,0.12); border-radius:12px; padding:1.4rem; min-height:170px; box-shadow:0 10px 24px rgba(0,0,0,0.2);">
                <h3 style="margin:0 0 0.5rem; color:#f7d046;"><?= htmlspecialchars($service['title'], ENT_QUOTES) ?></h3>
                <p style="margin:0; color:#cfd3dd;"><?= htmlspecialchars($service['desc'], ENT_QUOTES) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
    <div style="margin-top:1.6rem; display:flex; gap:1rem; flex-wrap:wrap;">
        <a class="cta-quote" href="/<?= htmlspecialchars($lang, ENT_QUOTES) ?>/quote" style="text-decoration:none;"><?= htmlspecialchars($langManager->t('services_cta_quote', 'Demander un devis'), ENT_QUOTES) ?></a>
        <a href="/<?= htmlspecialchars($lang, ENT_QUOTES) ?>/contact" style="color:#f7d046; text-decoration:none; font-weight:600; align-self:center;"><?= htmlspecialchars($langManager->t('services_cta_contact', 'Parler avec un expert'), ENT_QUOTES) ?> →</a>
    </div>
</section>
