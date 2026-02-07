<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesViewController extends AbstractController
{
    #[Route('/articles_view', name: 'articles_view')]
    public function index(ManagerRegistry $doctrine): Response
    {
        // Récupérer le repository Article
        $articles = $doctrine->getRepository(Article::class)
            ->findBy([], ['createdAt' => 'DESC']); // les plus récents en premier

        return $this->render('articles_view/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
