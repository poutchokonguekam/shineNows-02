<?php
declare(strict_types=1);

class Page
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getBySlug(string $slug): ?array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM pages WHERE slug = :slug LIMIT 1");
        $stmt->execute(['slug' => $slug]);
        $page = $stmt->fetch();
        return $page ?: null;
    }

    /**
     * Retourne toutes les pages actives, pour l'admin.
     */
    public function getAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM pages ORDER BY id ASC");
        return $stmt->fetchAll();
    }

    /**
     * Insère une page si le slug n'existe pas encore.
     */
    public function insertIfNotExists(string $slug, string $templateFile, bool $isActive = true, ?int $parentId = null): void
    {
        $stmt = $this->pdo->prepare("SELECT id FROM pages WHERE slug = :slug LIMIT 1");
        $stmt->execute(['slug' => $slug]);
        if ($stmt->fetch()) {
            return;
        }

        $insert = $this->pdo->prepare("
            INSERT INTO pages (slug, template_file, is_active, parent_id)
            VALUES (:slug, :template_file, :is_active, :parent_id)
        ");
        $insert->execute([
            'slug' => $slug,
            'template_file' => $templateFile,
            'is_active' => $isActive ? 1 : 0,
            'parent_id' => $parentId,
        ]);
    }
}
