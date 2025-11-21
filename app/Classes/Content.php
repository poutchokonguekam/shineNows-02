<?php
declare(strict_types=1);

class Content
{
    public function getContent(string $slug): array
    {
        $content = [
            'home' => ['body' => 'Découvrez ShineNows, votre partenaire digital.'],
            'services' => ['body' => 'Des services web modernes et performants.'],
            'quote' => ['body' => 'Recevez un devis rapide en quelques clics.'],
            'portfolio' => ['body' => 'Quelques réalisations sélectionnées.'],
            'contact' => ['body' => 'Contactez notre équipe dès maintenant.'],
        ];

        return $content[$slug] ?? ['body' => 'Contenu en préparation.'];
    }
}
