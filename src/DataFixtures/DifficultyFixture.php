<?php

namespace App\DataFixtures;

use App\Entity\Difficulty;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DifficultyFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->loadDifficulty($manager, 'Facile', 1, 10, true);
        $this->loadDifficulty($manager, 'Moyen', 1, 7, true);
        $this->loadDifficulty($manager, 'Difficile', 1, 5, true);
        $this->loadDifficulty($manager, 'Impossible', 1, 3, false);
    }

    public function loadDifficulty(ObjectManager $manager, String $name, int $tips, int $attempts, bool $color)
    {
        $difficulty = new Difficulty();

        $difficulty->setName($name);
        $difficulty->setTips($tips);
        $difficulty->setAttempts($attempts);
        $difficulty->setColor($color);

        $manager->persist($difficulty);
        $manager->flush();
    }
}