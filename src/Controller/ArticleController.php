<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use App\Service\CommentManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/articles', name: 'article_list')]
    public function list(ArticleRepository $articleRepository): Response
    {
        // 🔹 Récupérer les 10 derniers articles
        $articles = $articleRepository->findBy([], ['createdAt' => 'DESC'], 10);

        return $this->render('article/list.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/articles/{id}', name: 'article_show')]
    public function show(
        Article $article,
        Request $request,
        EntityManagerInterface $em,
        CommentManager $commentManager // 🔹 on injecte le service
    ): Response {
        $commentFormView = null;

        if ($this->getUser()) {
            $comment = new Comment();
            $comment->setArticle($article);
            $comment->setAuthor($this->getUser());

            $commentForm = $this->createForm(CommentType::class, $comment);
            $commentForm->handleRequest($request);

            if ($commentForm->isSubmitted() && $commentForm->isValid()) {
                $em->persist($comment);
                $em->flush();

                return $this->redirectToRoute('article_show', [
                    'id' => $article->getId()
                ]);
            }

            $commentFormView = $commentForm->createView();
        }

        // 🔹 Utilisation du service pour récupérer les derniers commentaires
        $latestComments = $commentManager->getLatestComments($article, 5);

        return $this->render('article/show.html.twig', [
            'article' => $article,
            'comment_form' => $commentFormView,
            'latestComments' => $latestComments,
        ]);
    }
}
