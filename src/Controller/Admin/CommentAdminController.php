<?php

namespace App\Controller\Admin;

use App\Entity\Comment;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/comments', name: 'admin_comments_')]
class CommentAdminController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function list(ManagerRegistry $doctrine): Response
    {
        $comments = $doctrine->getRepository(Comment::class)->findBy([], ['createdAt' => 'DESC']);

        return $this->render('admin/comment/list.html.twig', [
            'comments' => $comments,
        ]);
    }

    #[Route('/delete/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Comment $comment, Request $request, ManagerRegistry $doctrine): Response
    {
        if ($this->isCsrfTokenValid('delete' . $comment->getId(), $request->request->get('_token'))) {
            $em = $doctrine->getManager();
            $em->remove($comment);
            $em->flush();

            $this->addFlash('success', 'Commentaire supprimé !');
        } else {
            $this->addFlash('danger', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('admin_comments_list');
    }
}
