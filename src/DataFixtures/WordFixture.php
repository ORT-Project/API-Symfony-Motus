<?php

namespace App\DataFixtures;

use App\Entity\Theme;
use App\Entity\Word;
use App\Repository\ThemeRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class WordFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->loadMinecraft($manager);
    }

    public function loadMinecraft(ObjectManager $manager)
    {
        $theme = $this->getReference('theme-minecraft');
        $this->loadWord($manager, 'arrow', 'Se tire avec un arc', $theme);
    }

    public function loadWord(ObjectManager $manager, String $name, String $description, Theme $theme)
    {
        $word = new Word();

        $word->setWord($name);
        $word->setDefinition($description);
        $word->setTheme($theme);

        $manager->persist($word);
        $manager->flush();
    }

    public function getOrder(): int
    {
        return 2;
    }
}