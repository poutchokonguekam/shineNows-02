<?php
declare(strict_types=1);

class LanguageManager
{
    private array $supportedLanguages = [
        'fr' => 'fr_FR',
        'en' => 'en_US',
        'de' => 'de_DE',
    ];

    private string $currentLangPrefix = 'fr';
    private string $currentLangCode = 'fr_FR';
    private array $jsonStrings = [];

    public function __construct(?string $prefixFromUrl = null)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Déduire la langue à partir du préfixe (/fr,/en,/de)
        if ($prefixFromUrl && isset($this->supportedLanguages[$prefixFromUrl])) {
            $this->currentLangPrefix = $prefixFromUrl;
        } elseif (!empty($_SESSION['lang_prefix']) && isset($this->supportedLanguages[$_SESSION['lang_prefix']])) {
            $this->currentLangPrefix = $_SESSION['lang_prefix'];
        } else {
            $this->currentLangPrefix = 'fr';
        }

        $this->currentLangCode = $this->supportedLanguages[$this->currentLangPrefix];
        $_SESSION['lang_prefix'] = $this->currentLangPrefix;
        $_SESSION['lang_code'] = $this->currentLangCode;

        $this->loadJsonStrings();
    }

    private function loadJsonStrings(): void
    {
        $file = __DIR__ . '/../../locales/' . $this->currentLangCode . '.json';
        if (is_file($file)) {
            $json = file_get_contents($file);
            $data = json_decode($json, true);
            if (is_array($data)) {
                $this->jsonStrings = $data;
            }
        }
    }

    public function getLangPrefix(): string
    {
        return $this->currentLangPrefix;
    }

    public function getLangCode(): string
    {
        return $this->currentLangCode;
    }

    public function t(string $key, string $default = ''): string
    {
        return $this->jsonStrings[$key] ?? $default;
    }
}
