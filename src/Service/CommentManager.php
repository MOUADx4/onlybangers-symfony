<?php

namespace App\Service;

use App\Repository\CommentRepository;
use App\Entity\Article;

class CommentManager
{
    public function __construct(private CommentRepository $commentRepository)
    {
    }

    /**
     * Retourne les derniers commentaires d'un article
     */
    public function getLatestComments(Article $article, int $limit = 5): array
    {
        return $this->commentRepository->createQueryBuilder('c')
            ->andWhere('c.article = :article')
            ->setParameter('article', $article)
            ->orderBy('c.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
