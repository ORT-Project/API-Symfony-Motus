<?php

namespace App\DataFixtures;

use App\Entity\Difficulty;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DifficultyFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->loadDifficulty($manager, 'Facile', 1, 10, true, 'easy');
        $this->loadDifficulty($manager, 'Moyen', 1, 7, true, 'medium');
        $this->loadDifficulty($manager, 'Difficile', 1, 5, true, 'hard');
        $this->loadDifficulty($manager, 'Impossible', 1, 3, false, 'impossible');
    }

    public function loadDifficulty(ObjectManager $manager, String $name, int $tips, int $attempts, bool $color
        , String $alias): void
    {
        $difficulty = new Difficulty();

        $difficulty->setName($name);
        $difficulty->setTips($tips);
        $difficulty->setAttempts($attempts);
        $difficulty->setColor($color);
        $difficulty->setAlias($alias);

        $manager->persist($difficulty);
        $manager->flush();
    }
}