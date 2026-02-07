<?php

namespace App\Command;

use App\Entity\Article;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:create-article',
    description: 'Crée un article de test.'
)]
class CreateArticleCommand extends Command
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $user = $this->em->getRepository(User::class)->findOneBy([]);

        if (!$user) {
            $output->writeln('❌ Aucun utilisateur trouvé pour créer un article.');
            return Command::FAILURE;
        }

        $article = new Article();
        $article->setTitle('Mon premier article');
        $article->setContent('Contenu de test pour l’article.');
        $article->setAuthor($user);

        $this->em->persist($article);
        $this->em->flush();

        $output->writeln('✅ Article créé avec succès !');

        return Command::SUCCESS;
    }
}
