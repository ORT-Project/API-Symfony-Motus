<?php

namespace App\DataFixtures;

use App\Entity\Theme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ThemeFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->loadTheme($manager, 'League of Legends', ['lol', 'LoL', 'LOL', 'LeagueOfLegends'], 'lol');
        $this->loadTheme($manager, 'Minecraft', ['minecraft', 'mc'], 'mc');
        $this->loadTheme($manager, 'Honkai: Star Rail', ['honkaistarrail', 'hsr'], 'hsr');
        $this->loadTheme($manager, 'Sword Art Online', ['swordartonline', 'sao'], 'sao');
    }

    public function loadTheme(ObjectManager $manager, String $name, array $alias, String $reference)
    {
        $theme = new Theme();

        $theme->setName($name);
        $theme->setAlias($alias);

        $manager->persist($theme);
        $manager->flush();

        $this->addReference('theme-' . $reference, $theme);
    }
}