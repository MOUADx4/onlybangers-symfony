<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Article>
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    /**
     * Retourne les derniers articles publiés, triés par date décroissante.
     *
     * @param int $limit Nombre d'articles à récupérer
     * @return Article[]
     */
    public function findLatestArticles(int $limit = 5): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * QueryBuilder pour paginer tous les articles (triés par date décroissante).
     */
    public function qbAllOrderedByDateDesc()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.createdAt', 'DESC');
    }
}
