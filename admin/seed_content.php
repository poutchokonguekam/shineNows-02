<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../app/Classes/Page.php';
require_once __DIR__ . '/../app/Classes/Content.php';

$pageModel = new Page($pdo);
$contentModel = new Content($pdo);

$languageCodes = [
    'fr' => 'fr_FR',
    'en' => 'en_US',
    'de' => 'de_DE',
];

// Récupération des pages par slug
$pages = [
    'home' => $pageModel->getBySlug('home'),
    'services' => $pageModel->getBySlug('services'),
    'portfolio' => $pageModel->getBySlug('portfolio'),
    'contact' => $pageModel->getBySlug('contact'),
    'quote' => $pageModel->getBySlug('quote'),
];

foreach ($pages as $slug => $page) {
    if (!$page) {
        continue;
    }
    $pageId = (int) $page['id'];

    switch ($slug) {
        case 'home':
            // Exemples de keys
            $heroTitleId = $contentModel->insertBlockIfNotExists($pageId, 'home_hero_title', 'text', 10);
            $heroTextId = $contentModel->insertBlockIfNotExists($pageId, 'home_hero_text', 'text', 20);
            $heroCtaId = $contentModel->insertBlockIfNotExists($pageId, 'home_hero_cta_label', 'text', 30);

            foreach ($languageCodes as $code) {
                $title = $code === 'fr_FR'
                    ? "Bienvenue sur ShineNows"
                    : ($code === 'en_US' ? "Welcome to ShineNows" : "Willkommen bei ShineNows");
                $subtitle = $code === 'fr_FR'
                    ? "Découvrez ShineNows, votre partenaire digital."
                    : ($code === 'en_US' ? "Discover ShineNows, your digital partner." : "Entdecken Sie ShineNows, Ihren digitalen Partner.");
                $ctaLabel = $code === 'fr_FR'
                    ? "Demander un devis"
                    : ($code === 'en_US' ? "Request a quote" : "Angebot anfordern");

                $contentModel->upsertTranslation($heroTitleId, $code, $title, "ShineNows - Home", "Agence digitale ShineNows - page d'accueil.");
                $contentModel->upsertTranslation($heroTextId, $code, $subtitle, null, null);
                $contentModel->upsertTranslation($heroCtaId, $code, $ctaLabel, null, null);
            }
            break;

        case 'services':
            $introTitleId = $contentModel->insertBlockIfNotExists($pageId, 'services_intro_title', 'text', 10);
            $introTextId = $contentModel->insertBlockIfNotExists($pageId, 'services_intro_text', 'text', 20);

            foreach ($languageCodes as $code) {
                $title = $code === 'fr_FR'
                    ? "Nos services"
                    : ($code === 'en_US' ? "Our services" : "Unsere Leistungen");
                $text = $code === 'fr_FR'
                    ? "Découvrez nos offres de création de sites, branding et stratégie digitale."
                    : ($code === 'en_US'
                        ? "Discover our web design, branding and digital strategy services."
                        : "Entdecken Sie unsere Leistungen für Webdesign, Branding und digitale Strategie.");

                $contentModel->upsertTranslation($introTitleId, $code, $title, "ShineNows - Services", "Services de création de sites web et stratégie digitale.");
                $contentModel->upsertTranslation($introTextId, $code, $text, null, null);
            }
            break;

        case 'portfolio':
            $titleId = $contentModel->insertBlockIfNotExists($pageId, 'portfolio_title', 'text', 10);
            $introId = $contentModel->insertBlockIfNotExists($pageId, 'portfolio_intro', 'text', 20);

            foreach ($languageCodes as $code) {
                $title = $code === 'fr_FR'
                    ? "Nos réalisations"
                    : ($code === 'en_US' ? "Our work" : "Unsere Referenzen");
                $intro = $code === 'fr_FR'
                    ? "Une sélection de projets conçus avec ShineNows."
                    : ($code === 'en_US' ? "A selection of projects crafted with ShineNows." : "Eine Auswahl von Projekten, erstellt mit ShineNows.");

                $contentModel->upsertTranslation($titleId, $code, $title, "ShineNows - Portfolio", "Réalisations et projets clients de ShineNows.");
                $contentModel->upsertTranslation($introId, $code, $intro, null, null);
            }
            break;

        case 'contact':
            $titleId = $contentModel->insertBlockIfNotExists($pageId, 'contact_title', 'text', 10);
            $introId = $contentModel->insertBlockIfNotExists($pageId, 'contact_intro', 'text', 20);

            foreach ($languageCodes as $code) {
                $title = $code === 'fr_FR'
                    ? "Contactez-nous"
                    : ($code === 'en_US' ? "Contact us" : "Kontaktieren Sie uns");
                $intro = $code === 'fr_FR'
                    ? "Parlons de votre projet digital."
                    : ($code === 'en_US' ? "Let's talk about your digital project." : "Lassen Sie uns über Ihr Digitalprojekt sprechen.");

                $contentModel->upsertTranslation($titleId, $code, $title, "ShineNows - Contact", "Contactez l'agence ShineNows.");
                $contentModel->upsertTranslation($introId, $code, $intro, null, null);
            }
            break;

        case 'quote':
            $titleId = $contentModel->insertBlockIfNotExists($pageId, 'quote_title', 'text', 10);
            $introId = $contentModel->insertBlockIfNotExists($pageId, 'quote_intro', 'text', 20);

            foreach ($languageCodes as $code) {
                $title = $code === 'fr_FR'
                    ? "Demande de devis"
                    : ($code === 'en_US' ? "Request a quote" : "Angebotsanfrage");
                $intro = $code === 'fr_FR'
                    ? "Décrivez votre projet pour recevoir une estimation personnalisée."
                    : ($code === 'en_US'
                        ? "Describe your project to receive a tailored quote."
                        : "Beschreiben Sie Ihr Projekt, um ein individuelles Angebot zu erhalten.");

                $contentModel->upsertTranslation($titleId, $code, $title, "ShineNows - Devis", "Demande de devis pour création de site ShineNows.");
                $contentModel->upsertTranslation($introId, $code, $intro, null, null);
            }
            break;
    }
}

echo "Contenus de base insérés/actualisés.";
