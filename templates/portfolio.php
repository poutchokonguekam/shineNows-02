<?php
$title = $pageContent['portfolio_title'] ?? 'Portfolio';
$intro = $pageContent['portfolio_intro'] ?? '';
$lang = $currentLangPrefix ?? 'fr';
$projects = [
    ['name' => 'ShineNows Agency', 'type' => 'Brand & Web', 'desc' => 'Expérience immersive avec interactions 3D légères.'],
    ['name' => 'ShineNows Restaurant', 'type' => 'E-commerce', 'desc' => 'Commande en ligne, réservation et storytelling gourmand.'],
    ['name' => 'Cabinet Gloria', 'type' => 'Corporate', 'desc' => 'Identité sobre, CRM intégré et analytics privacy-first.'],
];
?>

<section style="background:rgba(255,255,255,0.02); border:1px solid rgba(247,208,70,0.2); border-radius:16px; padding:2.4rem; box-shadow:0 18px 40px rgba(0,0,0,0.25);">
    <p style="letter-spacing:0.18em; color:#f7d046; text-transform:uppercase; font-weight:700; margin:0 0 0.5rem;"><?= htmlspecialchars($langManager->t('portfolio_kicker', 'Réalisations'), ENT_QUOTES) ?></p>
    <h1 style="margin:0 0 0.75rem; font-size:2.2rem;"><?= htmlspecialchars($title, ENT_QUOTES) ?></h1>
    <p style="color:#cfd3dd; margin:0 0 1.8rem; max-width:760px;"><?= nl2br(htmlspecialchars($intro, ENT_QUOTES)) ?></p>
    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:1.2rem;">
        <?php foreach ($projects as $project): ?>
            <article style="background:rgba(12,18,32,0.9); border:1px solid rgba(247,208,70,0.14); border-radius:12px; padding:1.2rem; box-shadow:0 12px 28px rgba(0,0,0,0.28);">
                <div style="height:150px; border-radius:10px; background:linear-gradient(135deg, rgba(247,208,70,0.22), rgba(12,18,32,0.95)); margin-bottom:0.9rem;"></div>
                <div style="color:#f7d046; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; font-size:0.8rem;"><?= htmlspecialchars($project['type'], ENT_QUOTES) ?></div>
                <h3 style="margin:0.3rem 0 0.4rem; color:#f5f3ef;"><?= htmlspecialchars($project['name'], ENT_QUOTES) ?></h3>
                <p style="margin:0 0 0.8rem; color:#cfd3dd;"><?= htmlspecialchars($project['desc'], ENT_QUOTES) ?></p>
                <a href="/<?= htmlspecialchars($lang, ENT_QUOTES) ?>/quote" style="color:#f7d046; text-decoration:none; font-weight:600;"><?= htmlspecialchars($langManager->t('portfolio_cta', 'Discuter d’un projet similaire'), ENT_QUOTES) ?> →</a>
            </article>
        <?php endforeach; ?>
    </div>
    <div style="margin-top:1.6rem;">
        <a class="cta-quote" href="/<?= htmlspecialchars($lang, ENT_QUOTES) ?>/quote" style="text-decoration:none;"><?= htmlspecialchars($langManager->t('portfolio_btn_quote', 'Demander un devis'), ENT_QUOTES) ?></a>
    </div>
</section>
