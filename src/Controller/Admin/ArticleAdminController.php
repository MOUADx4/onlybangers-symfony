<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Form\ArticleType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/articles', name: 'admin_articles_')]
class ArticleAdminController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function list(ManagerRegistry $doctrine): Response
    {
        $articles = $doctrine->getRepository(Article::class)->findAll();

        return $this->render('admin/article/list.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/new', name: 'new')]
    public function create(Request $request, ManagerRegistry $doctrine): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // auteur
            $article->setAuthor($this->getUser());

            // gestion de l'image
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                $imageFile->move(
                    $this->getParameter('articles_images_dir'),
                    $newFilename
                );

                $article->setImage($newFilename);
            }

            $em = $doctrine->getManager();
            $em->persist($article);
            $em->flush();

            $this->addFlash('success', 'Article publié avec succès !');

            return $this->redirectToRoute('admin_articles_list');
        }

        return $this->render('admin/article/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/edit/{id}', name: 'edit')]
    public function edit(Article $article, Request $request, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // gestion de l'image (remplacement optionnel)
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                $imageFile->move(
                    $this->getParameter('articles_images_dir'),
                    $newFilename
                );

                $article->setImage($newFilename);
            }

            $doctrine->getManager()->flush();

            $this->addFlash('success', 'Article mis à jour !');

            return $this->redirectToRoute('admin_articles_list');
        }

        return $this->render('admin/article/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/delete/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Article $article, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $em->remove($article);
        $em->flush();

        $this->addFlash('success', 'Article supprimé !');

        return $this->redirectToRoute('admin_articles_list');
    }
}
