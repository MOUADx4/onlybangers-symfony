<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\Rating;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    // ✅ Pagination Articles
    #[Route('/articles', name: 'article_list', methods: ['GET'])]
    public function list(
        Request $request,
        ArticleRepository $articleRepository,
        PaginatorInterface $paginator
    ): Response {
        $qb = $articleRepository->createQueryBuilder('a')
            ->orderBy('a.createdAt', 'DESC');

        $pagination = $paginator->paginate(
            $qb,
            $request->query->getInt('page', 1),
            8
        );

        return $this->render('article/list.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    // ✅ Pagination Commentaires
    #[Route('/articles/{id}', name: 'article_show', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function show(
        Article $article,
        Request $request,
        EntityManagerInterface $em,
        CommentRepository $commentRepository,
        PaginatorInterface $paginator
    ): Response {

        $commentFormView = null;

        // ✅ Formulaire commentaire
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

        // ✅ Pagination des commentaires
        $qbComments = $commentRepository->createQueryBuilder('c')
            ->andWhere('c.article = :article')
            ->setParameter('article', $article)
            ->orderBy('c.createdAt', 'DESC');

        // ✅ FIX IMPORTANT : pageParameterName = cpage
        $commentsPagination = $paginator->paginate(
            $qbComments,
            $request->query->getInt('cpage', 1),
            5,
            [
                'pageParameterName' => 'cpage'
            ]
        );

        // ✅ Reply forms seulement sur les commentaires affichés
        $replyForms = [];
        if ($this->getUser()) {
            foreach ($commentsPagination as $parentComment) {
                $reply = new Comment();
                $reply->setArticle($article);
                $reply->setParent($parentComment);
                $reply->setAuthor($this->getUser());

                $form = $this->createForm(CommentType::class, $reply);
                $replyForms[$parentComment->getId()] = $form->createView();
            }
        }

        // ✅ Calcul moyenne des notes
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

            // ✅ pagination ici
            'commentsPagination' => $commentsPagination,

            'replyForms' => $replyForms,
            'averageRating' => $averageRating,
        ]);
    }

    // ⭐ Notes
    #[Route('/articles/{id}/rate/{value}', name: 'article_rate', requirements: ['id' => '\d+', 'value' => '\d+'], methods: ['GET'])]
    public function rate(Article $article, int $value, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

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

    // ⭐ Favoris
    #[Route('/articles/{id}/favorite', name: 'article_favorite', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function favorite(Article $article, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if ($user->getFavorites()->contains($article)) {
            $user->removeFavorite($article);
        } else {
            $user->addFavorite($article);
        }

        $em->flush();

        return $this->redirectToRoute('article_show', ['id' => $article->getId()]);
    }
}
