<?php
$title = $pageContent['quote_title'] ?? 'Demande de devis';
$intro = $pageContent['quote_intro'] ?? '';
$lang = $currentLangPrefix ?? 'fr';
?>

<section style="display:grid; grid-template-columns:repeat(auto-fit,minmax(320px,1fr)); gap:1.5rem; align-items:start;">
    <div style="background:rgba(255,255,255,0.02); border:1px solid rgba(247,208,70,0.2); border-radius:14px; padding:1.8rem; box-shadow:0 18px 36px rgba(0,0,0,0.25);">
        <p style="letter-spacing:0.15em; color:#f7d046; text-transform:uppercase; font-weight:700; margin:0 0 0.5rem;"><?= htmlspecialchars($langManager->t('quote_kicker', 'Estimation personnalisée'), ENT_QUOTES) ?></p>
        <h1 style="margin:0 0 0.75rem; font-size:2rem;"><?= htmlspecialchars($title, ENT_QUOTES) ?></h1>
        <p style="color:#cfd3dd; margin:0 0 1.5rem;"><?= nl2br(htmlspecialchars($intro, ENT_QUOTES)) ?></p>
        <div style="display:flex; gap:0.8rem; flex-wrap:wrap;">
            <a href="/<?= htmlspecialchars($lang, ENT_QUOTES) ?>/portfolio" style="color:#f7d046; text-decoration:none; font-weight:600;"><?= htmlspecialchars($langManager->t('quote_view_work', 'Voir nos réalisations'), ENT_QUOTES) ?> →</a>
            <a href="mailto:infos@shinenows.com" style="color:#f5f3ef; text-decoration:none; font-weight:600;">infos@shinenows.com</a>
        </div>
    </div>
    <div style="background:rgba(12,18,32,0.9); border:1px solid rgba(247,208,70,0.14); border-radius:14px; padding:1.8rem; box-shadow:0 16px 30px rgba(0,0,0,0.25);">
        <form action="/process_devis.php" method="post" style="display:flex; flex-direction:column; gap:0.9rem;">
            <div>
                <label for="name" style="display:block; margin-bottom:0.3rem; color:#cfd3dd;"><?= htmlspecialchars($langManager->t('quote_name', 'Nom complet'), ENT_QUOTES) ?></label>
                <input id="name" type="text" name="name" required style="width:100%; padding:0.7rem; border-radius:10px; border:1px solid rgba(247,208,70,0.25); background:rgba(255,255,255,0.04); color:#f5f3ef;">
            </div>
            <div>
                <label for="email" style="display:block; margin-bottom:0.3rem; color:#cfd3dd;"><?= htmlspecialchars($langManager->t('quote_email', 'Email'), ENT_QUOTES) ?></label>
                <input id="email" type="email" name="email" required style="width:100%; padding:0.7rem; border-radius:10px; border:1px solid rgba(247,208,70,0.25); background:rgba(255,255,255,0.04); color:#f5f3ef;">
            </div>
            <div>
                <label for="project_type" style="display:block; margin-bottom:0.3rem; color:#cfd3dd;"><?= htmlspecialchars($langManager->t('quote_project_type', 'Type de projet'), ENT_QUOTES) ?></label>
                <select id="project_type" name="project_type" style="width:100%; padding:0.7rem; border-radius:10px; border:1px solid rgba(247,208,70,0.25); background:rgba(255,255,255,0.04); color:#f5f3ef;">
                    <option value="website"><?= htmlspecialchars($langManager->t('quote_opt_website', 'Site vitrine / E-commerce'), ENT_QUOTES) ?></option>
                    <option value="branding"><?= htmlspecialchars($langManager->t('quote_opt_branding', 'Branding / Identité'), ENT_QUOTES) ?></option>
                    <option value="campaign"><?= htmlspecialchars($langManager->t('quote_opt_campaign', 'Campagne digitale'), ENT_QUOTES) ?></option>
                    <option value="product"><?= htmlspecialchars($langManager->t('quote_opt_product', 'Produit / App'), ENT_QUOTES) ?></option>
                </select>
            </div>
            <div>
                <label for="budget" style="display:block; margin-bottom:0.3rem; color:#cfd3dd;"><?= htmlspecialchars($langManager->t('quote_budget', 'Budget estimé'), ENT_QUOTES) ?></label>
                <select id="budget" name="budget" style="width:100%; padding:0.7rem; border-radius:10px; border:1px solid rgba(247,208,70,0.25); background:rgba(255,255,255,0.04); color:#f5f3ef;">
                    <option value="5-10k">5k - 10k</option>
                    <option value="10-20k">10k - 20k</option>
                    <option value="20-40k">20k - 40k</option>
                    <option value="40k+">40k+</option>
                </select>
            </div>
            <div>
                <label for="message" style="display:block; margin-bottom:0.3rem; color:#cfd3dd;"><?= htmlspecialchars($langManager->t('quote_message', 'Détaillez votre projet'), ENT_QUOTES) ?></label>
                <textarea id="message" name="message" rows="5" style="width:100%; padding:0.7rem; border-radius:10px; border:1px solid rgba(247,208,70,0.25); background:rgba(255,255,255,0.04); color:#f5f3ef;"></textarea>
            </div>
            <button type="submit" class="cta-quote" style="border:none; cursor:pointer; align-self:flex-start;"><?= htmlspecialchars($langManager->t('quote_submit', 'Envoyer la demande'), ENT_QUOTES) ?></button>
        </form>
    </div>
</section>
