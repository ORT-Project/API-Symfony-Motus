<?php

namespace App\DataFixtures;

use App\Entity\Theme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ThemeFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->loadTheme($manager, 'League of Legends', 'lol', 'https://images2.alphacoders.com/133/1332615.jpeg');
        $this->loadTheme($manager, 'Minecraft', 'minecraft','https://i.imgur.com/JI2vZY7.png');
        $this->loadTheme($manager, 'Honkai: Star Rail', 'hsr','https://images3.alphacoders.com/133/1335941.png');
        $this->loadTheme($manager, 'Sword Art Online', 'sao','https://i.imgur.com/9JZEwd9.png');
    }

    public function loadTheme(ObjectManager $manager, String $name, String $style, String $image)
    {
        $theme = new Theme();

        $theme->setName($name);
        $theme->setStyle($style);
        $theme->setImage($image);

        $manager->persist($theme);
        $manager->flush();

        $this->addReference('theme-' . $style, $theme);
    }
}