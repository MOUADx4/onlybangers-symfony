<?php

namespace App\Service;

use App\Repository\ArticleRepository;

class ArticleManager
{
    public function __construct(private ArticleRepository $articleRepository)
    {
    }

    /**
     * Retourne les derniers articles publiés
     */
    public function getLatestArticles(int $limit = 5): array
    {
        return $this->articleRepository->findBy([], ['createdAt' => 'DESC'], $limit);
    }
}
