<?php
declare(strict_types=1);

class LanguageManager
{
    private array $supportedLanguages = ['fr_FR', 'en_US', 'de_DE'];
    private string $currentLang;
    private string $localeDir;
    private array $translations = [];

    public function __construct(string $lang, string $localeDir)
    {
        $this->localeDir = rtrim($localeDir, '/');
        $this->setLanguage($lang);
    }

    private function setLanguage(string $lang): void
    {
        $target = in_array($lang, $this->supportedLanguages, true) ? $lang : DEFAULT_LANG;
        $this->currentLang = $target;
        $this->loadJsonTranslations();
    }

    public function getCurrentLang(): string
    {
        return $this->currentLang;
    }

    public function getTranslations(): array
    {
        return $this->translations;
    }

    public function loadJsonTranslations(): void
    {
        $file = sprintf('%s/%s.json', $this->localeDir, $this->currentLang);
        if (is_readable($file)) {
            $data = json_decode((string) file_get_contents($file), true);
            $this->translations = is_array($data) ? $data : [];
            return;
        }

        $this->translations = [];
    }

    public function t(string $key): string
    {
        return $this->translations[$key] ?? $key;
    }
}
