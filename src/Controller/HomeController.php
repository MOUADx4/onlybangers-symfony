<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ArticleRepository $articleRepository): Response
    {
        // Derniers articles
        $articles = $articleRepository->findBy([], ['createdAt' => 'DESC'], 4);

        // Top articles (exemple : les plus récents ou les plus notés si tu veux plus tard)
        $topArticles = $articleRepository->findBy([], ['createdAt' => 'DESC'], 3);

        return $this->render('home/index.html.twig', [
            'articles' => $articles,
            'topArticles' => $topArticles,
        ]);
    }
}

