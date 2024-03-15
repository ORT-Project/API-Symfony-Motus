````
     _    ____ ___   ____                   __                   
    / \  |  _ \_ _| / ___| _   _ _ __ ___  / _| ___  _ __  _   _ 
   / _ \ | |_) | |  \___ \| | | | '_ ` _ \| |_ / _ \| '_ \| | | |
  / ___ \|  __/| |   ___) | |_| | | | | | |  _| (_) | | | | |_| |
 /_/   \_\_|  |___| |____/ \__, |_| |_| |_|_|  \___/|_| |_|\__, |
                           |___/                           |___/ 
````

# Api-Symfony

## Préambule

Pour le jeu Motus

## Installation

Pour l'installer, vous aurez besoin dans un premier temps de [Symfony](https://symfony.com/).
Une fois le repo clôné, effectuez les commandes suivantes :
```shell
$ cp .env-example .env # Une copié, vous devrez le configurer avec vos informations
$ composer require symfony/runtime # Installation des vendors
$ docker compose up # Installation de la base de données
$ symfony console doctrine:database:create # Permet de créer une base de données vierge
$ symfony console doctrine:migrations:migrate # Création des tables dans votre base de données
$ symfony console doctrine:fixtures:load # Génération d'un jeu de données aléatoire
```

Lorsque l'installation est terminée, vous pouvez lancer le projet avec la commande suivante :
```shell
$ symfony server:start
```