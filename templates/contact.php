<?php
$title = $pageContent['contact_title'] ?? 'Contact';
$intro = $pageContent['contact_intro'] ?? '';
$lang = $currentLangPrefix ?? 'fr';
?>

<section style="display:grid; grid-template-columns:repeat(auto-fit,minmax(320px,1fr)); gap:1.5rem; align-items:start;">
    <div style="background:rgba(255,255,255,0.02); border:1px solid rgba(247,208,70,0.2); border-radius:14px; padding:1.8rem; box-shadow:0 18px 36px rgba(0,0,0,0.25);">
        <p style="letter-spacing:0.15em; color:#f7d046; text-transform:uppercase; font-weight:700; margin:0 0 0.5rem;"><?= htmlspecialchars($langManager->t('contact_kicker', 'Nous écrire'), ENT_QUOTES) ?></p>
        <h1 style="margin:0 0 0.75rem; font-size:2rem;"><?= htmlspecialchars($title, ENT_QUOTES) ?></h1>
        <p style="color:#cfd3dd; margin:0 0 1.5rem;"><?= nl2br(htmlspecialchars($intro, ENT_QUOTES)) ?></p>
        <div style="display:flex; flex-direction:column; gap:0.5rem; margin-bottom:1.5rem;">
            <a href="https://wa.me/495738306056" style="color:#f7d046; text-decoration:none; font-weight:600;">WhatsApp : +49 1573 830 6056</a>
            <a href="mailto:infos@shinenows.com" style="color:#f5f3ef; text-decoration:none;">infos@shinenows.com</a>
            <div style="color:#cfd3dd;"><?= htmlspecialchars($langManager->t('contact_socials', 'LinkedIn · Instagram · Behance'), ENT_QUOTES) ?></div>
        </div>
        <div style="display:flex; gap:0.8rem; flex-wrap:wrap;">
            <a class="cta-quote" href="/<?= htmlspecialchars($lang, ENT_QUOTES) ?>/quote" style="text-decoration:none;"><?= htmlspecialchars($langManager->t('contact_cta_quote', 'Demander un devis'), ENT_QUOTES) ?></a>
            <a href="/<?= htmlspecialchars($lang, ENT_QUOTES) ?>/services" style="color:#f7d046; text-decoration:none; font-weight:600;"><?= htmlspecialchars($langManager->t('contact_cta_services', 'Voir nos services'), ENT_QUOTES) ?> →</a>
        </div>
    </div>
    <div style="background:rgba(12,18,32,0.9); border:1px solid rgba(247,208,70,0.14); border-radius:14px; padding:1.8rem; box-shadow:0 16px 30px rgba(0,0,0,0.25);">
        <form action="/process_contact.php" method="post" style="display:flex; flex-direction:column; gap:0.9rem;">
            <div>
                <label for="name" style="display:block; margin-bottom:0.3rem; color:#cfd3dd;"><?= htmlspecialchars($langManager->t('contact_name', 'Nom complet'), ENT_QUOTES) ?></label>
                <input id="name" type="text" name="subject" required style="width:100%; padding:0.7rem; border-radius:10px; border:1px solid rgba(247,208,70,0.25); background:rgba(255,255,255,0.04); color:#f5f3ef;">
            </div>
            <div>
                <label for="email" style="display:block; margin-bottom:0.3rem; color:#cfd3dd;"><?= htmlspecialchars($langManager->t('contact_email', 'Email'), ENT_QUOTES) ?></label>
                <input id="email" type="email" name="email" required style="width:100%; padding:0.7rem; border-radius:10px; border:1px solid rgba(247,208,70,0.25); background:rgba(255,255,255,0.04); color:#f5f3ef;">
            </div>
            <div>
                <label for="message" style="display:block; margin-bottom:0.3rem; color:#cfd3dd;"><?= htmlspecialchars($langManager->t('contact_message', 'Votre message'), ENT_QUOTES) ?></label>
                <textarea id="message" name="message" rows="5" style="width:100%; padding:0.7rem; border-radius:10px; border:1px solid rgba(247,208,70,0.25); background:rgba(255,255,255,0.04); color:#f5f3ef;"></textarea>
            </div>
            <button type="submit" class="cta-quote" style="border:none; cursor:pointer; align-self:flex-start;"><?= htmlspecialchars($langManager->t('contact_submit', 'Envoyer'), ENT_QUOTES) ?></button>
        </form>
    </div>
</section>
