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
        $this->loadLeaguefLegends($manager);
        $this->loadHonkaiStarRail($manager);
        $this->loadSwordArtOnline($manager);
    }

    public function loadMinecraft(ObjectManager $manager): void
    {
        $words = [
            'arrow' => 'Se tire avec un arc',
            'creeper' => 'Monstre explosif',
            'enderman' => 'Monstre qui se téléporte',
            'diamond' => 'Ressource rare',
            'pickaxe' => 'Outil pour miner',
            'crafting' => 'Table de craft',
            'redstone' => 'Ressource pour les mécanismes',
            'zombie' => 'Monstre qui brûle au soleil',
            'skeleton' => 'Monstre qui tire des flèches',
            'nether' => 'Dimension alternative',
            'blaze' => 'Monstre qui lance des boules de feu',
            'ghast' => 'Monstre qui lance des boules de feu',
            'slime' => 'Monstre qui se divise',
            'obsidian' => 'Ressource pour le portail du nether',
            'wither' => 'Boss secondaire',
            'endermite' => 'Monstre qui se téléporte',
            'spider' => 'Monstre qui grimpe aux murs',
            'wolf' => 'Animal domestiquable',
            'furnace' => 'Four pour la cuisson',
            'torch' => 'Source de lumière',
            'boat' => 'Moyen de transport sur l\'eau',
            'potion' => 'Objet pour les effets temporaires',
            'villager' => 'PNJ pour le commerce',
            'chest' => 'Stockage d\'items',
            'anvil' => 'Réparation et renommage d\'items',
            'enchanting' => 'Amélioration d\'items',
            'fishing' => 'Activité pour obtenir des items',
            'bread' => 'Nourriture basique',
            'cake' => 'Nourriture placable',
            'horse' => 'Animal montable',
            'rail' => 'Transport rapide',
            'minecart' => 'Véhicule pour les rails',
            'saddle' => 'Objet pour monter les chevaux',
            'leather' => 'Ressource pour l\'armure',
            'sheep' => 'Animal pour la laine',
            'wool' => 'Ressource pour le lit',
            'bed' => 'Objet pour passer la nuit',
            'book' => 'Objet pour l\'enchantement',
            'quartz' => 'Ressource du Nether',
            'shulker' => 'Monstre avec une coquille',
            'elytra' => 'Objet pour voler',
            'dragon' => 'Boss final',
            'beacon' => 'Source de buffs',
            'shield' => 'Protection contre les attaques',
            'spectral' => 'Type de flèche',
            'totem' => 'Objet pour éviter la mort',
            'phantom' => 'Monstre nocturne volant'
        ];
        $theme = $this->getReference('theme-minecraft');

        foreach ($words as $name => $description) {
            $this->loadWord($manager, $name, $description, $theme);
        }
    }
    public function loadLeaguefLegends(ObjectManager $manager): void
    {
        $words = [
            // champions
            'aatrox' => 'Champion de type combattant',
            'ahri' => 'Champion de type mage',
            'akali' => 'Champion de type assassin',
            'alistar' => 'Champion de type tank',
            'amumu' => 'Champion de type tank',
            'anivia' => 'Champion de type mage',
            'annie' => 'Champion de type mage',
            'aphelios' => 'Champion de type tireur',
            'ashe' => 'Champion de type tireur',
            'aurelion' => 'Champion de type mage',
            'azir' => 'Champion de type mage',
            'bard' => 'Champion de type soutien',
            'blitzcrank' => 'Champion de type soutien',
            'brand' => 'Champion de type mage',
            'braum' => 'Champion de type tank',
            'caitlyn' => 'Champion de type tireur',
            'camille' => 'Champion de type combattant',
            'cassiopeia' => 'Champion de type mage',
            'chogath' => 'Champion de type tank',
            'corki' => 'Champion de type tireur',
            'darius' => 'Champion de type combattant',
            'diana' => 'Champion de type assassin',
            'draven' => 'Champion de type tireur',
            'drmundo' => 'Champion de type tank',
            'ekko' => 'Champion de type assassin',
            'elise' => 'Champion de type mage',
            'evelynn' => 'Champion de type assassin',
            'ezreal' => 'Champion de type tireur',
            'fiddlesticks' => 'Champion de type mage',
            'fiora' => 'Champion de type combattant',
            'fizz' => 'Champion de type assassin',
            'galio' => 'Champion de type tank',
            'gangplank' => 'Champion de type combattant',
            'garen' => 'Champion de type combattant',
            'gnar' => 'Champion de type combattant',
            'gragas' => 'Champion de type tank',
            'graves' => 'Champion de type tireur',
            'hecarim' => 'Champion de type combattant',
            'heimerdinger' => 'Champion de type mage',
            'illaoi' => 'Champion de type combattant',
            'irelia' => 'Champion de type combattant',
            'ivern' => 'Champion de type soutien',
            'janna' => 'Champion de type soutien',
            'jarvan' => 'Champion de type combattant',
            'jax' => 'Champion de type combattant',
            'jayce' => 'Champion de type combattant',
            'jhin' => 'Champion de type tireur',
            'jinx' => 'Champion de type tireur',
            'kaisa' => 'Champion de type tireur',
            'kalista' => 'Champion de type tireur',
            'karma' => 'Champion de type mage',
            'karthus' => 'Champion de type mage',
            'kassadin' => 'Champion de type mage',
            'katarina' => 'Champion de type assassin',
            'kayle' => 'Champion de type combattant',
            'kayn' => 'Champion de type combattant',
            'kennen' => 'Champion de type mage',
            'khazix' => 'Champion de type assassin',
            'kindred' => 'Champion de type tireur',
            'kled' => 'Champion de type combattant',
            'kogmaw' => 'Champion de type tireur',
            'leblanc' => 'Champion de type mage',
            'leesin' => 'Champion de type combattant',
            'leona' => 'Champion de type tank',
            'lillia' => 'Champion de type mage',
            'lissandra' => 'Champion de type mage',
            'lucian' => 'Champion de type tireur',
            'lulu' => 'Champion de type soutien',
            'lux' => 'Champion de type mage',
            'malphite' => 'Champion de type tank',
            'malzahar' => 'Champion de type mage',
            'maokai' => 'Champion de type tank',
            'masteryi' => 'Champion de type combattant',
            'missfortune' => 'Champion de type tireur',
            'mordekaiser' => 'Champion de type combattant',
            'morgana' => 'Champion de type mage',
            'nami' => 'Champion de type soutien',
            'nasus' => 'Champion de type combattant',
            'nautilus' => 'Champion de type tank',
            'neeko' => 'Champion de type mage',
            'nidalee' => 'Champion de type mage',
            'nocturne' => 'Champion de type assassin',
            'nunu' => 'Champion de type tank',
            'olaf' => 'Champion de type combattant',
            'orianna' => 'Champion de type mage',
            'ornn' => 'Champion de type tank',
            'pantheon' => 'Champion de type combattant',
            'poppy' => 'Champion de type tank',
            'pyke' => 'Champion de type soutien',
            'qiyana' => 'Champion de type assassin',
            'quinn' => 'Champion de type tireur',
            'rakan' => 'Champion de type soutien',
            'rammus' => 'Champion de type tank',
            'reksai' => 'Champion de type combattant',
            'renekton' => 'Champion de type combattant',
            'rengar' => 'Champion de type assassin',
            'riven' => 'Champion de type combattant',
            'rumble' => 'Champion de type mage',
            'ryze' => 'Champion de type mage',
            'samira' => 'Champion de type tireur',
            'sejuani' => 'Champion de type tank',
            'senna' => 'Champion de type tireur',
            'seraphine' => 'Champion de type soutien',
            'sett' => 'Champion de type combattant',
            'shaco' => 'Champion de type assassin',
            'shen' => 'Champion de type tank',
            'shyvana' => 'Champion de type combattant',
            'singed' => 'Champion de type tank',
            'sion' => 'Champion de type tank',
            'sivir' => 'Champion de type tireur',
            'skarner' => 'Champion de type combattant',
            'sona' => 'Champion de type soutien',
            'soraka' => 'Champion de type soutien',
            'swain' => 'Champion de type mage',
            'sylas' => 'Champion de type mage',
            'syndra' => 'Champion de type mage',
            'tahmkench' => 'Champion de type soutien',
            'taliyah' => 'Champion de type mage',
            'talon' => 'Champion de type assassin',
            'taric' => 'Champion de type soutien',
            'teemo' => 'Champion de type mage',
            'thresh' => 'Champion de type soutien',
            'tristana' => 'Champion de type tireur',
            'trundle' => 'Champion de type combattant',
            'tryndamere' => 'Champion de type combattant',
            'twistedfate' => 'Champion de type mage',
            'twitch' => 'Champion de type tireur',
            'udyr' => 'Champion de type combattant',
            'urgot' => 'Champion de type combattant',
            'varus' => 'Champion de type tireur',
            'vayne' => 'Champion de type tireur',
            'veigar' => 'Champion de type mage',
            'velkoz' => 'Champion de type mage',
            'vi' => 'Champion de type combattant',
            'viktor' => 'Champion de type mage',
            'vladimir' => 'Champion de type mage',
            'volibear' => 'Champion de type combattant',
            'warwick' => 'Champion de type combattant',
            'wukong' => 'Champion de type combattant',
            'xayah' => 'Champion de type tireur',
            'xerath' => 'Champion de type mage',
            'xinzhao' => 'Champion de type combattant',
            'yasuo' => 'Champion de type combattant',
            'yone' => 'Champion de type combattant',
            'yorick' => 'Champion de type combattant',
            'yuumi' => 'Champion de type soutien',
            'zac' => 'Champion de type tank',
            'zed' => 'Champion de type assassin',
            'ziggs' => 'Champion de type mage',
            'zilean' => 'Champion de type soutien',
            'zoe' => 'Champion de type mage',
            'zyra' => 'Champion de type mage'
        ];
        $theme = $this->getReference('theme-lol');

        foreach ($words as $name => $description) {
            $this->loadWord($manager, $name, $description, $theme);
        }
    }

    public function loadHonkaiStarRail(ObjectManager $manager): void
    {
        $words = [
            // characters
            'kiana' => 'Personnage principal',
            'mei' => 'Personnage principal',
            'bronya' => 'Personnage principal',
            'himeko' => 'Personnage principal',
            'theresa' => 'Personnage principal',
            'rita' => 'Personnage principal',
            'duran' => 'Personnage principal',
            'seele' => 'Personnage principal',
            'sin' => 'Personnage principal',
            'liliya' => 'Personnage principal',
            'rosaliya' => 'Personnage principal',
            'kevin' => 'Personnage principal',
            'otto' => 'Personnage principal',
            'sakura' => 'Personnage principal',
            'allen' => 'Personnage principal',
            'carole' => 'Personnage principal',
            'einstein' => 'Personnage principal',
            'tesla' => 'Personnage principal',
            'schrodinger' => 'Personnage principal',
            'planck' => 'Personnage principal',
            'curie' => 'Personnage principal',
            'fermi' => 'Personnage principal',
            'heisenberg' => 'Personnage principal',
            'dirac' => 'Personnage principal',
            'newton' => 'Personnage principal',
            'maxwell' => 'Personnage principal',
            'edison' => 'Personnage principal',
            'faraday' => 'Personnage principal',
            'galilei' => 'Personnage principal',
            'coulomb' => 'Personnage principal'
        ];
        $theme = $this->getReference('theme-honkaistarrail');

        foreach ($words as $name => $description) {
            $this->loadWord($manager, $name, $description, $theme);
        }
    }

    public function loadSwordArtOnline(ObjectManager $manager): void
    {
        $words = [
            // characters
            'kirito' => 'Personnage principal',
            'asuna' => 'Personnage principal',
            'leafa' => 'Personnage principal',
            'sinon' => 'Personnage principal',
            'yui' => 'Personnage principal',
            'klein' => 'Personnage principal',
            'agil' => 'Personnage principal',
            'silica' => 'Personnage principal',
            'lizbeth' => 'Personnage principal',
            'sachi' => 'Personnage principal',
            'yuuki' => 'Personnage principal',
            'alice' => 'Personnage principal',
            'eugeo' => 'Personnage principal',
            'kayaba' => 'Personnage principal',
            'sugou' => 'Personnage principal',
            'deathgun' => 'Personnage principal',
            'quinn' => 'Personnage principal',
            'cardinal' => 'Personnage principal',
            'bercouli' => 'Personnage principal',
            'fanatio' => 'Personnage principal',
            'deusolbert' => 'Personnage principal',
            'eldrie' => 'Personnage principal',
            'renly' => 'Personnage principal',
            'sheyta' => 'Personnage principal',
            'sortiliena' => 'Personnage principal',
            'golgorosso' => 'Personnage principal',
            'tiese' => 'Personnage principal',
            'ronie' => 'Personnage principal',
            'administrator' => 'Personnage principal',
            'quijol' => 'Personnage principal',
            'vassago' => 'Personnage principal'
        ];
        $theme = $this->getReference('theme-sao');

        foreach ($words as $name => $description) {
            $this->loadWord($manager, $name, $description, $theme);
        }
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