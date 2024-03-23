<?php

namespace App\Entity;

use App\Repository\ThemeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: ThemeRepository::class)]
class Theme
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["getWords"])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(["getWords"])]
    private ?string $name = null;

    #[ORM\OneToMany(targetEntity: Word::class, mappedBy: 'theme')]
    #[Groups(["getWords"])]
    private Collection $words;

    #[ORM\Column(length: 255)]
    #[Groups(["getWords"])]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    #[Groups(["getWords"])]
    private ?string $style = null;

    public function __construct()
    {
        $this->words = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Word>
     */
    public function getWords(): Collection
    {
        return $this->words;
    }

    public function addWord(Word $word): static
    {
        if (!$this->words->contains($word)) {
            $this->words->add($word);
            $word->setTheme($this);
        }

        return $this;
    }

    public function removeWord(Word $word): static
    {
        if ($this->words->removeElement($word)) {
            // set the owning side to null (unless already changed)
            if ($word->getTheme() === $this) {
                $word->setTheme(null);
            }
        }

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setStyle(string $style): static
    {
        $this->style = $style;

        return $this;
    }
}
