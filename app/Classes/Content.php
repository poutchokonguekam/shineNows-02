<?php
declare(strict_types=1);

class Content
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Retourne les données d'une page :
     * - 'content' => tableau [content_key => value]
     * - 'seo' => ['title' => ..., 'description' => ...]
     */
    public function getPageData(int $pageId, string $languageCode): array
    {
        $sql = "
            SELECT 
                b.id,
                b.content_key,
                b.type,
                t.value,
                t.seo_title,
                t.seo_description
            FROM content_blocks b
            LEFT JOIN content_translations t 
                ON t.content_block_id = b.id 
               AND t.language_code = :lang
            WHERE b.page_id = :page_id
            ORDER BY b.sort_order ASC, b.id ASC
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'lang' => $languageCode,
            'page_id' => $pageId,
        ]);

        $rows = $stmt->fetchAll();

        $content = [];
        $seo = [
            'title' => null,
            'description' => null,
        ];

        foreach ($rows as $row) {
            $key = $row['content_key'];
            if ($key) {
                $content[$key] = $row['value'] ?? '';
            }

            if (!empty($row['seo_title']) || !empty($row['seo_description'])) {
                $seo['title'] = $row['seo_title'] ?? $seo['title'];
                $seo['description'] = $row['seo_description'] ?? $seo['description'];
            }
        }

        return [
            'content' => $content,
            'seo' => $seo,
        ];
    }

    /**
     * Insère un bloc si la paire (page_id, content_key) n'existe pas encore.
     * Retourne l'id du bloc.
     */
    public function insertBlockIfNotExists(int $pageId, string $contentKey, string $type = 'text', int $sortOrder = 0): int
    {
        $check = $this->pdo->prepare("
            SELECT id FROM content_blocks 
            WHERE page_id = :page_id AND content_key = :content_key
            LIMIT 1
        ");
        $check->execute([
            'page_id' => $pageId,
            'content_key' => $contentKey,
        ]);

        $existing = $check->fetch();
        if ($existing) {
            return (int) $existing['id'];
        }

        $insert = $this->pdo->prepare("
            INSERT INTO content_blocks (page_id, content_key, type, sort_order)
            VALUES (:page_id, :content_key, :type, :sort_order)
        ");
        $insert->execute([
            'page_id' => $pageId,
            'content_key' => $contentKey,
            'type' => $type,
            'sort_order' => $sortOrder,
        ]);

        return (int) $this->pdo->lastInsertId();
    }

    /**
     * Insère ou met à jour une traduction pour un bloc donné.
     */
    public function upsertTranslation(
        int $blockId,
        string $languageCode,
        string $value,
        ?string $seoTitle = null,
        ?string $seoDescription = null
    ): void {
        $check = $this->pdo->prepare("
            SELECT content_block_id FROM content_translations
            WHERE content_block_id = :id AND language_code = :lang
            LIMIT 1
        ");
        $check->execute([
            'id' => $blockId,
            'lang' => $languageCode,
        ]);

        if ($check->fetch()) {
            $update = $this->pdo->prepare("
                UPDATE content_translations
                SET value = :value,
                    seo_title = :seo_title,
                    seo_description = :seo_description
                WHERE content_block_id = :id AND language_code = :lang
            ");
            $update->execute([
                'value' => $value,
                'seo_title' => $seoTitle,
                'seo_description' => $seoDescription,
                'id' => $blockId,
                'lang' => $languageCode,
            ]);
        } else {
            $insert = $this->pdo->prepare("
                INSERT INTO content_translations (content_block_id, language_code, value, seo_title, seo_description)
                VALUES (:id, :lang, :value, :seo_title, :seo_description)
            ");
            $insert->execute([
                'id' => $blockId,
                'lang' => $languageCode,
                'value' => $value,
                'seo_title' => $seoTitle,
                'seo_description' => $seoDescription,
            ]);
        }
    }
}
