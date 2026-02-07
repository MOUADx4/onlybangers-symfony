<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ManagerRegistry $doctrine): Response
    {
        // 🔹 Récupérer seulement les 4 derniers articles
        $articles = $doctrine->getRepository(Article::class)
            ->findBy([], ['createdAt' => 'DESC'], 4);

        return $this->render('home/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
