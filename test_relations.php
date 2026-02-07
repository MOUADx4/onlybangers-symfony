<?php
// test_relations.php

use App\Entity\User;
use App\Entity\Article;
use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';

// Charge le .env pour Symfony
if (file_exists(__DIR__ . '/.env')) {
    (new Dotenv())->bootEnv(__DIR__.'/.env');
}

// Crée le kernel pour accéder au conteneur Symfony
$kernel = new App\Kernel($_SERVER['APP_ENV'] ?? 'dev', (bool) ($_SERVER['APP_DEBUG'] ?? true));
$kernel->boot();

/** @var EntityManagerInterface $em */
$em = $kernel->getContainer()->get('doctrine')->getManager();

// --- Création d'un utilisateur test ---
$user = new User();
$user->setEmail('testuser@example.com');
$user->setPassword('dummy'); // juste pour test
$user->setRoles(['ROLE_USER']);

$em->persist($user);

// --- Création d'un article lié à l'utilisateur ---
$article = new Article();
$article->setTitle('Mon premier article');
$article->setContent('Contenu de test');
$article->setAuthor($user);

$em->persist($article);

// --- Création d'un commentaire lié à l'article et à l'utilisateur ---
$comment = new Comment();
$comment->setContent('Super article !');
$comment->setAuthor($user);
$comment->setArticle($article);

$em->persist($comment);

// Sauvegarde en base
$em->flush();

echo "✅ Test terminé : relations User → Article → Comment créées et persistées.\n";

// Récupération pour test
$userFromDb = $em->getRepository(User::class)->findOneBy(['email' => 'testuser@example.com']);
echo "User récupéré : " . $userFromDb->getEmail() . "\n";
echo "Nombre d'articles de l'utilisateur : " . count($userFromDb->getArticles()) . "\n";

$articleFromDb = $em->getRepository(Article::class)->findOneBy(['title' => 'Mon premier article']);
echo "Article récupéré : " . $articleFromDb->getTitle() . "\n";
echo "Nombre de commentaires : " . count($articleFromDb->getComments()) . "\n";
