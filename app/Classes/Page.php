<?php
declare(strict_types=1);

class Page
{
    public function getPage(string $slug): array
    {
        $pages = [
            'home' => ['title' => 'Accueil', 'slug' => 'home'],
            'services' => ['title' => 'Services', 'slug' => 'services'],
            'quote' => ['title' => 'Devis', 'slug' => 'quote'],
            'portfolio' => ['title' => 'Portfolio', 'slug' => 'portfolio'],
            'contact' => ['title' => 'Contact', 'slug' => 'contact'],
        ];

        return $pages[$slug] ?? ['title' => 'Page', 'slug' => $slug];
    }
}
