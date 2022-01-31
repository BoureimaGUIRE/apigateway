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
# Instructions
- git clone https://github.com/BoureimaGUIRE/apigateway
- Renommez le fichier ".env.example" en ".env". Le fichier ".env" est le fichier d'environnement qui traite des configurations de projet telles que les informations d'identification de la base de données, les clés API, le mode de débogage, les clés d'application, etc.
- Définissez votre clé d'application sur une chaîne aléatoire. En règle générale, cette chaîne doit comporter 32 caractères. Dans le fichier .env, il s'appelle par exemple APP_KEY=akkfjvlakengoemvgkcgelapchyekci. Vous pouvez obtenir une chaîne de 32 caractères avec cette commande : php -r "echo md5(uniqid()).\"\n\";"

Ajoutez MICRO_SERVICE_BASE_URIqui doit pointer vers l'adresse de votre microservice ex. AUTHORS_SERVICE_BASE_URI="http://IP_ADDRESS"si vous utilisez localement avec laradock, utilisez l'adresse IP de votre réseau local que vous pouvez obtenir depuis Linux ou MacOs ifconfigou Windows depuis network adapter properties.

Ajoutez MICRO_SERVICE_SECRETce qui doit être ajouté à votre microservice pour sécuriser la connexion entre la passerelle api et le microservice ex. AUTHORS_SERVICE_SECRET=ECvSZ5O6P9x1GP1fvbtEVktoN358BofH doit être envoyé avec chaque appel api à ce microservice en utilisant l'en-tête Authorization: ex.Authorization:U0ZyuUhUrNgmLu9TIWJJay30gCT8UOyd


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
