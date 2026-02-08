<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Article;
use App\Form\CommentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/comment/{id}/like', name: 'comment_like')]
    public function like(Comment $comment, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) return $this->redirectToRoute('app_login');

        if ($comment->getLikes()->contains($user)) {
            $comment->removeLike($user);
        } else {
            $comment->addLike($user);
        }

        $em->flush();

        return $this->redirectToRoute('article_show', [
            'id' => $comment->getArticle()->getId()
        ]);
    }

    #[Route('/comment/{id}/reply', name: 'comment_reply')]
    public function reply(Comment $parent, Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) return $this->redirectToRoute('app_login');

        $reply = new Comment();
        $reply->setAuthor($user);
        $reply->setArticle($parent->getArticle());
        $reply->setParent($parent);

        $form = $this->createForm(CommentType::class, $reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reply);
            $em->flush();

            return $this->redirectToRoute('article_show', [
                'id' => $parent->getArticle()->getId()
            ]);
        }

        return $this->render('comment/reply.html.twig', [
            'form' => $form->createView(),
            'parent' => $parent
        ]);
    }
}
