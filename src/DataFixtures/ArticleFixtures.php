<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\DataFixtures\UserFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory as FakerFactory;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = FakerFactory::create('fr_FR');

        // Récupérer l'admin comme auteur
        $admin = $manager->getRepository(\App\Entity\User::class)
                         ->findOneBy(['email' => 'admin@onlybangers.local']);

        if (!$admin) {
            throw new \Exception('Admin user not found. Make sure UserFixtures ran first.');
        }

        for ($i = 1; $i <= 5; $i++) {
            $article = new Article();
            $article->setTitle("Rap US Article $i");
            $article->setContent($faker->paragraphs(3, true));
            $article->setAuthor($admin);

            // 🔹 Convertir la DateTime Faker en DateTimeImmutable
            $fakerDate = $faker->dateTimeThisYear();
            $article->setCreatedAt(\DateTimeImmutable::createFromMutable($fakerDate));

            $manager->persist($article);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [UserFixtures::class];
    }
}
