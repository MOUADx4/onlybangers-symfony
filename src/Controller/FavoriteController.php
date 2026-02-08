<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FavoriteController extends AbstractController
{
    #[Route('/favoris', name: 'user_favorites')]
    public function favorites(): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $favorites = $user->getFavorites();

        return $this->render('favorite/index.html.twig', [
            'favorites' => $favorites,
        ]);
    }
}
