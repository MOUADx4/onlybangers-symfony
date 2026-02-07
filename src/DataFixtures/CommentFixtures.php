<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use App\Entity\Article;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory as FakerFactory;

class CommentFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = FakerFactory::create('fr_FR');

        // Récupérer tous les utilisateurs et articles existants
        $users = $manager->getRepository(User::class)->findAll();
        $articles = $manager->getRepository(Article::class)->findAll();

        if (empty($users) || empty($articles)) {
            return; // pas d'articles ou d'utilisateurs → rien à faire
        }

        // Générer 3 à 5 commentaires par article
        foreach ($articles as $article) {
            $nbComments = rand(3, 5);

            for ($i = 0; $i < $nbComments; $i++) {
                $comment = new Comment();
                $comment->setArticle($article);

                // Choisir un utilisateur aléatoire comme auteur
                $author = $users[array_rand($users)];
                $comment->setAuthor($author);

                // Contenu aléatoire plus long
                $comment->setContent($faker->paragraph(rand(1, 3), true));

                // Date aléatoire dans le passé récent (convertie en DateTimeImmutable)
                $comment->setCreatedAt(\DateTimeImmutable::createFromMutable(
                    $faker->dateTimeBetween('-2 months', 'now')
                ));

                $manager->persist($comment);
            }
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
            ArticleFixtures::class,
        ];
    }
}
