# Api Gateway
Ce projet a été realisé dans le cadre d'une implémentation de l'architecture microservices.
Il est composé de 07 microservices dont une API Gateway (Passerelle API) :
- employeserviceapi : microservice 1 chargé de la gestion des employés et leur contrat (https://github.com/BoureimaGUIRE/employeserviceapi)
- congeserviceapi : microservice 2 chargé de la gestion des congés des employés (https://github.com/BoureimaGUIRE/congeserviceapi)
- pointageserviceapi : microservice 3 chargé de gérer le pointage des employés (https://github.com/BoureimaGUIRE/pointageserviceapi)
- pretserviceapi : microservice 4 chargé de gérer les prêts des employés (https://github.com/BoureimaGUIRE/pretserviceapi)
- missionserviceapi : microservice 5 chargé de gérer les missions des employés (https://github.com/BoureimaGUIRE/missionserviceapi)
- salaireserviceapi : microservice 6 chargé de gérer les salaires des employés (https://github.com/BoureimaGUIRE/salaireserviceapi)
- apigateway : point entrée unique du système, fait la liaison entre tous les autres microservices (https://github.com/BoureimaGUIRE/apigateway)
# Instructions test en local
- git clone https://github.com/BoureimaGUIRE/apigateway
- Exécutez composer install=> pour installer toutes les dépendances php
- Renommez le fichier ".env.example" en ".env". Le fichier ".env" est le fichier d'environnement qui traite des configurations de projet telles que les informations d'identification de la base de données, les clés API, le mode de débogage, les clés d'application, etc.
- Définissez votre clé d'application sur une chaîne aléatoire. En règle générale, cette chaîne doit comporter 32 caractères. Dans le fichier .env, il s'appelle par exemple APP_KEY=akkfjvlakengoemvgkcgelapchyekci. Vous pouvez obtenir une chaîne de 32 caractères avec cette commande : php -r "echo md5(uniqid()).\"\n\";"
- Ensuite, toujours dans le ".env" vous devez fournir les adresses de tous les microservices accessibles via l'Api Gateway, comme-ci dessous :   
EMPLOYES_SERVICE_BASE_URI=http://localhost:8100/api/employeservice  
EMPLOYES_SERVICE_SECRET=nMC23YnO6q42Thc1B6ZvX7CSgIQk70PZ  
CONGES_SERVICE_BASE_URI=http://localhost:8200/api/congeservice  
CONGES_SERVICE_SECRET=lOzncpwC7R9Algwni93eDyJu5fRFmx3P  
POINTAGES_SERVICE_BASE_URI=http://localhost:8300/api/pointageservice  
POINTAGES_SERVICE_SECRET=8771dcb13bfbe5fd20961cd2a0e5ea41  
PRETS_SERVICE_BASE_URI=http://localhost:8400/api/pretservice  
PRETS_SERVICE_SECRET=5d4b1de7bdeb4b18d079bccc3ff2f13c  
MISSIONS_SERVICE_BASE_URI=http://localhost:8500/api/missionservice  
MISSIONS_SERVICE_SECRET=d1f32850580ce5366b06620c49fda0ab  
SALAIRES_SERVICE_BASE_URI=http://localhost:8600/api/salaireservice  
SALAIRES_SERVICE_SECRET=35c02210d612a4c167fb1230bade848b  
- Dans le fichier .env de chaque microservice, ajoutez ALLOWED_SECRETS=nMC23YnO6q42Thc1B6ZvX7CSgIQk70PZ. Le secret doit correspondre à la valeur du secret qui est dans le .env de l'Api Gateway. Ce secret permet de sécuriser la connexion entre la passerelle api et le microservice. Par exemple un appel de la passerelle api vers le microservice employeservice doit porter une en-tête Authorization: nMC23YnO6q42Thc1B6ZvX7CSgIQk70PZ, pour que l'appel puisse être authorisé.
- Pour le test en local, les serveurs de chaque microservice devront être lancés sur des ports différents comme spécifié ci-dessus. Et l'Api gateway pourra être lancé avec la commande (php -S localhost:8000 -t public) sur le port 8000 si celui-ci est libre sinon changez de port.
- Cette demande "http://localhost:8000/api/employeservice" faite depuis la passerelle Api, interrogera le microservice interne http://localhost:8100/api/employeservice et retournera la liste des employés à la passerelle Api.
- Si l'on veut exécuter ce projet tel qu'il est après composer install, exécution de la migration : php artisan migrate, pour mettre à jour la base de données avec les bonnes tables. Ensuite, semez avec php artisan db:seed pour remplir la base de données avec de fausses données.

# Sécuriser la passerelle API
Cette passerelle est sécurisée à l'aide de lumen/passport, un package Lumen qui autorise et authentifie les utilisateurs. Avant de commencer à utiliser la passerelle, votre client doit d'abord demander un jeton à http://localhost:8000/oauth/token à l'aide du client_id et client_secret. Si vous n'êtes pas familier avec le processus, reportez-vous à https://github.com/dusterio/lumen-passport

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
