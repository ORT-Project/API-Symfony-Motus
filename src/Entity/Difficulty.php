<?php

namespace App\Entity;

use App\Repository\DifficultyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DifficultyRepository::class)]
class Difficulty
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $tips = null;

    #[ORM\Column]
    private ?int $attempts = null;

    #[ORM\Column]
    private ?bool $color = null;

    #[ORM\Column(length: 255)]
    private ?string $alias = null;

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

    public function getTips(): ?int
    {
        return $this->tips;
    }

    public function setTips(int $tips): static
    {
        $this->tips = $tips;

        return $this;
    }

    public function getAttempts(): ?int
    {
        return $this->attempts;
    }

    public function setAttempts(int $attempts): static
    {
        $this->attempts = $attempts;

        return $this;
    }

    public function isColor(): ?bool
    {
        return $this->color;
    }

    public function setColor(bool $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(string $alias): static
    {
        $this->alias = $alias;

        return $this;
    }
}
