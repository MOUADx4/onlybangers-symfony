<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesViewController extends AbstractController
{
    #[Route('/articles_view', name: 'articles_view', methods: ['GET'])]
    public function index(
        Request $request,
        ArticleRepository $articleRepository,
        PaginatorInterface $paginator
    ): Response {
        // ✅ QueryBuilder (paginable)
        $qb = $articleRepository->createQueryBuilder('a')
            ->orderBy('a.createdAt', 'DESC');

        $pagination = $paginator->paginate(
            $qb,
            $request->query->getInt('page', 1), // /articles_view?page=2
            8 // ✅ articles par page (change si tu veux)
        );

        return $this->render('articles_view/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }
}
