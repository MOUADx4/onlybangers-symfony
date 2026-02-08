<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use App\Entity\Article;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'text')]
    private ?string $content = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'comments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $author = null;

    #[ORM\ManyToOne(inversedBy: 'comments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Article $article = null;

    // 🔹 Réponse à un commentaire
    #[ORM\ManyToOne(targetEntity: Comment::class, inversedBy: 'replies')]
    private ?Comment $parent = null;

    #[ORM\OneToMany(mappedBy: 'parent', targetEntity: Comment::class, cascade: ['remove'])]
    private Collection $replies;

    // 🔹 Likes sur commentaires
    #[ORM\ManyToMany(targetEntity: User::class)]
    private Collection $likes;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->replies = new ArrayCollection();
        $this->likes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): static
    {
        $this->author = $author;
        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): static
    {
        $this->article = $article;
        return $this;
    }

    // 🔹 Parent / Replies
    public function getParent(): ?Comment
    {
        return $this->parent;
    }

    public function setParent(?Comment $parent): static
    {
        $this->parent = $parent;
        return $this;
    }

    public function getReplies(): Collection
    {
        return $this->replies;
    }

    public function addReply(Comment $reply): static
    {
        if (!$this->replies->contains($reply)) {
            $this->replies->add($reply);
            $reply->setParent($this);
        }
        return $this;
    }

    public function removeReply(Comment $reply): static
    {
        if ($this->replies->removeElement($reply)) {
            if ($reply->getParent() === $this) {
                $reply->setParent(null);
            }
        }
        return $this;
    }

    // 🔹 Likes
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(User $user): static
    {
        if (!$this->likes->contains($user)) {
            $this->likes->add($user);
        }
        return $this;
    }

    public function removeLike(User $user): static
    {
        $this->likes->removeElement($user);
        return $this;
    }
}
