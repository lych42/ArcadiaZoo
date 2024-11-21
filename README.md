# Arcadia Zoo

Arcadia Zoo est une application Symfony pour gérer les informations sur les animaux, leurs habitats et leurs races.

## Prérequis

- PHP 8.0 ou supérieur
- Composer
- MySQL
- Symfony CLI (optionnel)

## Installation

1. Clonez le dépôt :

   ```sh
   git clone https://github.com/votre-utilisateur/arcadia-zoo.git
   cd arcadia-zoo

2. Installez les dépendances :

   ```sh
   composer install

3. Configurez votre base de données dans le fichier .env :

   ```sh
                     DATABASE_URL="mysql://admin:masterOfZoo@127.0.0.1:3306/sf_arcadia?serverVersion=10.4.32-MariaDB&charset=utf8mb4"
   

4. Créez la base de données et exécutez les migrations :

    ```sh
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate

5. Démarrez le serveur de développement :

   ```sh
   symfony server:start

## Utilisation
Accédez à l'application dans votre navigateur à l'adresse http://localhost:8000.
