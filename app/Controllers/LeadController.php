<?php
declare(strict_types=1);

class LeadController
{
    public function handleQuote(array $data): array
    {
        $name = trim($data['name'] ?? '');
        $email = trim($data['email'] ?? '');
        $message = trim($data['message'] ?? '');

        if ($name === '' || $email === '') {
            return ['success' => false, 'message' => 'Merci de remplir les champs requis.'];
        }

        // TODO: insert into database
        return ['success' => true, 'message' => 'Votre demande de devis a bien été envoyée.'];
    }

    public function handleContact(array $data): array
    {
        $subject = trim($data['subject'] ?? '');
        $email = trim($data['email'] ?? '');

        if ($subject === '' || $email === '') {
            return ['success' => false, 'message' => 'Merci de compléter le formulaire.'];
        }

        // TODO: insert into database
        return ['success' => true, 'message' => 'Message envoyé avec succès.'];
    }
}
