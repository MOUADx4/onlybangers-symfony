<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\Rating;
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
    #[Route('/articles/{id}/rate/{value}', name: 'article_rate')]
    public function rate(Article $article, int $value, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) return $this->redirectToRoute('app_login');

        $rating = $em->getRepository(Rating::class)->findOneBy([
            'user' => $user,
            'article' => $article
        ]);

        if (!$rating) {
            $rating = new Rating();
            $rating->setUser($user);
            $rating->setArticle($article);
        }

        $value = max(1, min(5, $value));
        $rating->setValue($value);

        $em->persist($rating);
        $em->flush();

        return $this->redirectToRoute('article_show', ['id' => $article->getId()]);
    }

    #[Route('/articles/{id}/favorite', name: 'article_favorite')]
    public function favorite(Article $article, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) return $this->redirectToRoute('app_login');

        if ($user->getFavorites()->contains($article)) {
            $user->removeFavorite($article);
        } else {
            $user->addFavorite($article);
        }

        $em->flush();

        return $this->redirectToRoute('article_show', ['id' => $article->getId()]);
    }

    #[Route('/articles', name: 'article_list')]
    public function list(ArticleRepository $articleRepository): Response
    {
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
        CommentManager $commentManager
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
                return $this->redirectToRoute('article_show', ['id' => $article->getId()]);
            }

            $commentFormView = $commentForm->createView();
        }

        // 🔹 Derniers commentaires
        $latestComments = $commentManager->getLatestComments($article, 5);

        // 🔹 Préparer les formulaires de réponse
        $replyForms = [];
        foreach ($latestComments as $comment) {
            $reply = new Comment();
            $reply->setArticle($article);
            $reply->setParent($comment);
            $reply->setAuthor($this->getUser());

            $form = $this->createForm(CommentType::class, $reply);
            $replyForms[$comment->getId()] = $form->createView();
        }

        // 🔹 Calcul de la moyenne des notes
        $ratings = $article->getRatings();
        $averageRating = 0;

        if (count($ratings) > 0) {
            $sum = 0;
            foreach ($ratings as $rating) {
                $sum += $rating->getValue();
            }
            $averageRating = $sum / count($ratings);
        }

        return $this->render('article/show.html.twig', [
            'article' => $article,
            'comment_form' => $commentFormView,
            'latestComments' => $latestComments,
            'replyForms' => $replyForms,
            'averageRating' => $averageRating,
        ]);
    }
}
